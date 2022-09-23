<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\RoleTranslation;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;


class RoleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = Role::query();
        if ($request->has('search') && $request->search  != ''){
            $sort_search = $request->search;
            $data = $data->where('name', 'like', '%'.$sort_search.'%');
        }

        $data = $data->get();
        return view('admin.roles.index', compact('data'));

    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.roles.create');
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
            'slug' => 'required|min:3|unique:roles,slug',
        ]);

       $data = Role::create([
            "name" => $request->name,
            "slug" => $request->slug,
            "description" => $request->description,
            "sorting" =>  $request->sorting,
            "active" =>  $request->active,
        ]);

        $this->translate('en',$data->id,[
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.roles.index')->with('success', translate('Record Added'));
    }


    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $lang = $request->lang ?? App::getLocale();
        $data = Role::findOrFail($id);
        return view('admin.roles.edit', compact('data','lang'));
    }

    /*
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function permission(Request $request, $id)
    {
    
        $data = Role::findOrFail($id);
        return view('admin.roles.edit', compact('data'));
    }


    


    /**
     * Update the specified resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {              
        $data = Role::findOrFail($id);
       
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
        $data->save();

        $this->translate($request->lang,$data->id,[
             'name' => $request->name,
             'description' => $request->description,
            ]);

        return back()->with('success', translate('Record Updated'));

    }

    public function translate($lang,$id,$data)
    {

        $translation = RoleTranslation::firstOrNew(['lang' => $lang, 'role_id' => $id]);
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
        $unit = Role::findOrFail($id);
        foreach ($unit->translations as $translation) {
            $translation->delete();
        }

        Role::destroy($id);   
        return redirect()->route('admin.roles.index')->with('success', translate('Record Deleted'));
    }

}