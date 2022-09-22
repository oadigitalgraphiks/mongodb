<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use App\Models\Attribute;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\AttributeType;

class AttributeController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = Attribute::query();
        if ($request->has('search') && $request->search  != ''){
            $sort_search = $request->search;
            $data = $data->where('name', 'like', '%'.$sort_search.'%');
        }


        $data = $data->get();
        return view('admin.attributes.index', compact('data'));

    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = AttributeType::all();
        return view('admin.attributes.create',compact('types'));
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

       $data = Attribute::create([
            "name" => $request->name,
            "slug" => $request->slug,
            "logo" =>  $request->logo,
            "sorting" =>  $request->sorting,
            "active" =>  $request->active,
            "type_id" =>  $request->type_id,
        ]);

        return redirect()->route('admin.attributes.index')->with('success', translate('Record Added'));
    }


    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Attribute::findOrFail($id);
        $types = AttributeType::all();

        return view('admin.attributes.edit', compact('data','types'));
    }


    /**
     * Update the specified resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {              

        $data = Attribute::findOrFail($id);

        $data->name = $request->name;
        $data->logo = $request->logo;
        $data->slug = $request->slug;
        $data->active = $request->active;
        $data->sorting = $request->sorting;
        $data->type_id = $request->type_id;
        $data->save();

        return back()->with('success', translate('Record Updated'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $item = Attribute::findOrFail($id);
        Attribute::destroy($id);       
        return redirect()->route('admin.attributes.index')->with('success', translate('Record Deleted'));
    }

}