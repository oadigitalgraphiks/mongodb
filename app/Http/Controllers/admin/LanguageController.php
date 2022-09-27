<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use Cache;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
    	$request->session()->put('locale', $request->locale);
        $language = Language::where('code', $request->locale)->first();
        return $language;
        // return redirect()->back()->with('success',translate('Language changed to ').$language->name);
    }

    public function index(Request $request)
    {
        $languages = Language::paginate(10);
        return view('admin.languages.index', compact('languages'));
    }

    public function create(Request $request)
    {
        return view('admin.languages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:languages,name',
            'code' => 'required|unique:languages,code',
        ]);
        $language = new Language;
        $language->name = $request->name;
        $language->code = $request->code;
        $language->rtl = 0;
        $language->status = 0;
        $language->save();
        Cache::forget('app.languages');
        return redirect()->route('admin.languages.index')->with('success',translate('Language has been inserted successfully'));
    }

    public function show(Request $request, $id)
    {
        $sort_search = null;
        $language = Language::findOrFail($id);
        $lang_keys = Translation::where('lang', env('DEFAULT_LANGUAGE', 'en'));
        if ($request->has('search')){
            $sort_search = $request->search;
            $lang_keys = $lang_keys->where('lang_key', 'like', '%'.$sort_search.'%');
        }
        $lang_keys = $lang_keys->paginate(50);
        return view('backend.setup_configurations.languages.language_view', compact('language','lang_keys','sort_search'));
    }

    public function edit($id)
    {
        $language = Language::findOrFail($id);
        return view('admin.languages.edit', compact('language'));
    }

    public function update(Request $request, $id)
    {
        $language = Language::where('_id',$id)->first();
        if (env('DEFAULT_LANGUAGE') == $language->code) {
            return back()->with('danger',translate('Default language can not be edited'));
        }
        $language->name = $request->name;
        $language->code = $request->code;
        $language->rtl = 0;
        $language->status = 0;
        $language->save();
        Cache::forget('app.languages');
        return redirect()->back()->with('success',translate('Language has been updated successfully'));
    }

    public function key_value_store(Request $request)
    {
        $language = Language::findOrFail($request->id);
        foreach ($request->values as $key => $value) {
            $translation_def = Translation::where('lang_key', $key)->where('lang', $language->code)->latest()->first();
            if($translation_def == null){
                $translation_def = new Translation;
                $translation_def->lang = $language->code;
                $translation_def->lang_key = $key;
                $translation_def->lang_value = $value;
                $translation_def->save();
            }
            else {
                $translation_def->lang_value = $value;
                $translation_def->save();
            }
        }
        Cache::forget('translations-'.$language->code);
        flash(translate('Translations updated for ').$language->name)->success();
        return back();
    }

    public function update_rtl_status(Request $request)
    {
        $language = Language::where('_id',$request->id)->first();
        $language->rtl = $request->status;
        if($language->save()){
            return 1;
        }
        return 0;
    }

    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        if (env('DEFAULT_LANGUAGE') == $language->code) {
            flash(translate('Default language can not be deleted'))->error();
        }
        else {
            if($language->code == Session::get('locale')){
                Session::put('locale', env('DEFAULT_LANGUAGE'));
            }
            Language::destroy($id);
            flash(translate('Language has been deleted successfully'))->success();
        }
        return redirect()->route('languages.index');
    }


    //App-Translation
    public function importEnglishFile(Request $request){
        $path = Storage::disk('local')->put('app-translations', $request->lang_file);

        $contents = file_get_contents(public_path($path));

        try {
            foreach(json_decode($contents) as $key => $value){
                AppTranslation::updateOrCreate(
                    ['lang' => 'en', 'lang_key' => $key],
                    ['lang_value' => $value]
                );
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        flash(translate('Translation keys has been imported successfully. Go to App Translation for more..'))->success();
        return back();
    }

    public function showAppTranlsationView(Request $request, $id)
    {
        $sort_search = null;
        $language = Language::findOrFail($id);
        $lang_keys = AppTranslation::where('lang', 'en');
        if ($request->has('search')){
            $sort_search = $request->search;
            $lang_keys = $lang_keys->where('lang_key', 'like', '%'.$sort_search.'%');
        }
        $lang_keys = $lang_keys->paginate(50);
        return view('backend.setup_configurations.languages.app_translation', compact('language','lang_keys','sort_search'));
    }

    public function storeAppTranlsation(Request $request){
        $language = Language::findOrFail($request->id);
        foreach ($request->values as $key => $value) {
            AppTranslation::updateOrCreate(
                ['lang' => $language->app_lang_code, 'lang_key' => $key],
                ['lang_value' => $value]
            );
        }
        flash(translate('App Translations updated for ').$language->name)->success();
        return back();
    }

    public function exportARBFile($id){
        $language = Language::findOrFail($id);
        try {
            // Write into the json file
            $filename = "app_{$language->app_lang_code}.arb";
            $contents = AppTranslation::where('lang', $language->app_lang_code)->pluck('lang_value', 'lang_key')->toJson();

            return response()->streamDownload(function () use ($contents) {
                echo $contents;
            }, $filename);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
