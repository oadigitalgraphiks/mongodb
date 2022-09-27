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
        
        $brands = Brand::orderBy('name', 'asc');
        if ($request->has('search') && $request->search != null){
            $sort_search = $request->search;
            $brands = $brands->where('name', 'like', '%'.$sort_search.'%');
        }
        $data = $brands->paginate(10);
        return view('admin.brands.index', compact('data'));
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

        $brand->active = 1;
        $brand->featured = 0;
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




     /*
     * Remove the specified resource from storage.
     */
    public function bulk(Request $request)
    {


        if($request->has('idz') && $request->has('action') && $request->has('value')){

       
          
            switch ($request->action) {
               
                case 'delete':

                    $idz = explode(',',$request->idz);
                    $brands = Brand::whereIn('_id',$idz)->get();
                 
                    foreach ($brands as $brand) {

                           foreach ($brand->translations as  $tr) {
                            $tr->delete();
                           }
                        // dd($brand->translations->toArray());
                        //    $brand->translations->delete();
                           Brand::destroy($brand->id);
                    }
                    return response()->json(['message' => translate('Records Deleted')],200);
                    break;


                case 'active':

                    $idz = explode(',',$request->idz);    
                    $pp = Brand::whereIn('_id',$idz)->get();
                    foreach ($pp as $item) {
                        $item->active = $request->value;
                        $item->save();
                    }
                    return response()->json(['message' => translate('Activation Updated')],200);
                    break;
                
                case 'featured':

                        $idz = explode(',',$request->idz);    
                        $pp = Brand::whereIn('_id',$idz)->get();
                        foreach ($pp as $item) {
                            $item->featured = $request->value;
                            $item->save();
                        }
                        return response()->json(['message' => translate('Featured Updated')],200);
                        break;    

                default:
                break;
            }


        }


        return response()->json(['message' => translate('Error Found')],400);   
    }

}
