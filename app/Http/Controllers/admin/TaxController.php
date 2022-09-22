<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use App\Models\Tax;
use App\Models\TaxTranslation;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class TaxController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = Tax::query();
        if ($request->has('search') && $request->search  != ''){
            $sort_search = $request->search;
            $data = $data->where('name', 'like', '%'.$sort_search.'%');
        }

        $data = $data->get();
        return view('admin.taxes.index', compact('data'));

    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.taxes.create');
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

       $data = Tax::create([
            "name" => $request->name,
            "slug" => $request->slug,
            "description" => $request->description,
            "logo" =>  $request->logo,
            "sorting" =>  $request->sorting,
            "active" =>  $request->active,
        ]);

        $this->translate('en',$data->id,[
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.taxes.index')->with('success', translate('Record Added'));
    }


    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? App::getLocale();
        $data = Tax::findOrFail($id);
        return view('admin.taxes.edit', compact('data','lang'));
    }


    /**
     * Update the specified resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {              

        $data = Tax::findOrFail($id);
        
        if($request->lang == env("DEFAULT_LANGUAGE")){
            $data->name = $request->name;
            $data->description = $request->description;
            $data->logo = $request->logo;
            $data->save();
        }

        $data->slug = $request->slug;
        $data->active = $request->active;
        $data->sorting = $request->sorting;
        $data->save();

        $this->translate($request->lang,$data->id,[
             'name' => $request->name,
             'description' => $request->description,
             'logo' => $request->logo,
            ]);

        return back()->with('success', translate('Record Updated'));

    }

    public function translate($lang,$id,$data)
    {

        $translation = TaxTranslation::firstOrNew(['lang' => $lang, 'tax_id' => $id]);
        foreach ($data as $key => $value) {
            $translation[$key] = $data[$key];
        }
        $translation->save();

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Tax::findOrFail($id);
        foreach ($item->translations as $translation) {
            $translation->delete();
        }
        Tax::destroy($id);
       
        return redirect()->route('admin.taxes.index')->with('success', translate('Record Deleted'));
    }




}