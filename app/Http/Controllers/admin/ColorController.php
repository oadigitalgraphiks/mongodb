<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\ColorTranslation;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;


class ColorController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = Color::query();
        if ($request->has('search') && $request->search  != ''){
            $sort_search = $request->search;
            $data = $data->where('name', 'like', '%'.$sort_search.'%');
        }

        $data = $data->get();
        return view('admin.colors.index', compact('data'));

    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.colors.create');
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

       $data = Color::create([
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

        return redirect()->route('admin.colors.index')->with('success', translate('Record Added'));
    }


    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? App::getLocale();
        $data = Color::findOrFail($id);
        return view('admin.colors.edit', compact('data','lang'));
    }


    /**
     * Update the specified resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {              

        $data = Color::findOrFail($id);
        
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

        $translation = ColorTranslation::firstOrNew(['lang' => $lang, 'color_id' => $id]);
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
        $unit = Color::findOrFail($id);
        foreach ($unit->translations as $translation) {
            $translation->delete();
        }

        Color::destroy($id);   
        return redirect()->route('admin.colors.index')->with('success', translate('Record Deleted'));
    }



}