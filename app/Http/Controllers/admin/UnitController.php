<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;
use Illuminate\Support\Str;

class UnitController extends Controller
{
    
    /**
     * Display a listing of the resource
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $units = Unit::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $units = $units->where('name', 'like', '%'.$sort_search.'%');
        }

        $units = $units->paginate(15);
        return view('admin.units.index', compact('units', 'sort_search'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.units.create');
    }


    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unit = new Unit;
        $unit->name = $request->unit;
        $unit->short_name = $unit->short_name;
        $unit->save();
        
        return redirect()->route('admin.units.index');
    }


    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $lang = $request->lang;
        $unit = Unit::findOrFail($id);
        return view('admin.units.edit', compact('unit','lang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $unit = Unit::findOrFail($id);
        $unit->name = $request->name;
        $unit->short_name = $request->short_name;
        $unit->save();
        return back()->with('success','Record Upated');
    }


    /*
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);
        return back()->with('success','Record Deleted');
    }



}
