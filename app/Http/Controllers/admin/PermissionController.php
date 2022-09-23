<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\PermissionTranslation;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;



class PermissionController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = Permission::query();
        if ($request->has('search') && $request->search  != ''){
            $sort_search = $request->search;
            $data = $data->where('name', 'like', '%'.$sort_search.'%');
        }

        $data = $data->get();
        return view('admin.permissions.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

        $slug =  Str::slug($request->slug, '-');
        $request->merge(['slug' => $slug]);

        $request->validate([
            'name' => 'required',
            'slug' => 'required|min:3|unique:permissions,slug',
        ]);

       $data = Permission::create([
            "name" => $request->name,
            "slug" => $request->slug,
            "description" => $request->description,
            "sorting" =>  $request->sorting,
            "active" =>  $request->active,
            "group_name" =>  $request->group_name,
        ]);

        $this->translate('en',$data->id,[
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.permissions.index')->with('success', translate('Record Added'));
    }


    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? App::getLocale();
        $data = Permission::findOrFail($id);
        return view('admin.permissions.edit', compact('data','lang'));
    }


    /**
     * Update the specified resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {              
        $data = Permission::findOrFail($id);
        $slug =  Str::slug($request->slug, '-');
        $request->merge(['slug' => $slug]);
        
        $request->validate([
            'name' => 'required',
            'slug' => 'required|min:3|unique:permissions,slug'.$data->id,
        ]);

        if($request->lang == env("DEFAULT_LANGUAGE")){
            $data->name = $request->name;
            $data->description = $request->description;
            $data->save();
        }

        $data->slug = $request->slug;
        $data->active = $request->active;
        $data->sorting = $request->sorting;
        $data->group_name = $request->group_name;
        $data->save();

        $this->translate($request->lang,$data->id,[
            'name' => $request->name,
            'description' => $request->description,
           ]);

        return back()->with('success', translate('Record Updated'));

    }


    public function translate($lang,$id,$data)
    {

        $translation = PermissionTranslation::firstOrNew(['lang' => $lang, 'permission_id' => $id]);
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
        Permission::destroy($id);   
        return redirect()->route('admin.permissions.index')->with('success', translate('Record Deleted'));
    }

}