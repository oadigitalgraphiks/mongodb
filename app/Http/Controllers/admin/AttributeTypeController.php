<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use App\Models\AttributeType;
use App\Models\AttributeTypeTranslation;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class AttributeTypeController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = AttributeType::query();
        if ($request->has('search') && $request->search  != ''){
            $sort_search = $request->search;
            $data = $data->where('name', 'like', '%'.$sort_search.'%');
        }

        $data = $data->get();
        return view('admin.attribute_types.index', compact('data'));

    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.attribute_types.create');
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

       $data = AttributeType::create([
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

        return redirect()->route('admin.attribute_types.index')->with('success', translate('Record Added'));
    }


    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? App::getLocale();
        $data = AttributeType::findOrFail($id);
        return view('admin.attribute_types.edit', compact('data','lang'));
    }


    /**
     * Update the specified resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {              

        $data = AttributeType::findOrFail($id);
        
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

        $translation = AttributeTypeTranslation::firstOrNew(['lang' => $lang, 'parent_id' => $id]);
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
        $item = AttributeType::findOrFail($id);
        foreach ($item->translations as $translation) {
            $translation->delete();
        }

        AttributeType::destroy($id);       
        return redirect()->route('admin.attribute_types.index')->with('success', translate('Record Deleted'));
    }

}