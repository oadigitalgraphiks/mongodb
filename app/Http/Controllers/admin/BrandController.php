<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\BrandTranslation;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $brands = Brand::orderBy('name', 'asc');
        if ($request->has('search') && $request->search != null){
            $sort_search = $request->search;
            $brands = $brands->where('name', 'like', '%'.$sort_search.'%');
        }
        $brands = $brands->paginate(15);
        return view('admin.brands.index', compact('brands', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->name = $request->name;
        $brand->meta_title = $request->meta_title;
        $brand->meta_description = $request->meta_description;
        if (Brand::where('slug',Str::slug($request->name))->count() > 0) {
            $brand->slug = Str::slug($request->name).'-'.Str::random(5);
        }else{
            $brand->slug = Str::slug($request->name);
        }
        $brand->logo = $request->logo;
        $brand->save();
        $brand_translation = BrandTranslation::firstOrNew(['lang' => env('DEFAULT_LANGUAGE'), 'brand_id' => $brand->id]);
        $brand_translation->name = $request->name;
        $brand_translation->save();

        return redirect()->route('admin.brands.index')->with('success',translate('Brand has been inserted successfully'));

    }


    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $lang   = $request->lang ?? App::getLocale();
        $brand  = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand','lang'));
    }


    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $request->validate([
            'slug'         => 'unique:brands,slug,'.$brand->id,
        ]);

        if($request->lang == env("DEFAULT_LANGUAGE")){
            $brand->name = $request->name;
            $brand->slug = $request->slug ?? Str::slug($request->name);
        }
        $brand->meta_title = $request->meta_title;
        $brand->meta_description = $request->meta_description;
        $brand->logo = $request->logo;
        $brand->save();

        $brand_translation = BrandTranslation::firstOrNew(['lang' => $request->lang, 'brand_id' => $brand->id]);
        $brand_translation->name = $request->name;
        $brand_translation->save();

        return back()->with('success',translate('Brand has been updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::where('_id',$id)->first();
        if (Product::where('brand_id', $brand->id)->count() > 0) {
            return redirect()->back()->with('warning',translate('Brand can`t not be deleted.Products exist in this brand'));
        }
        if ($brand->brand_translations->count() > 0) {
            foreach ($brand->brand_translations as $key => $brand_translation) {
                $brand_translation->delete();
            }
        }
        Brand::destroy($id);
        return redirect()->route('admin.brands.index')->with('danger',translate('Brand has been deleted successfully'));
    }

    public function bulk_brand_delete(Request $request) {
        if($request->id) {
            foreach ($request->id as $brand_id) {
                $this->destroy($brand_id);
            }
        }
        return 1;
    }
}
