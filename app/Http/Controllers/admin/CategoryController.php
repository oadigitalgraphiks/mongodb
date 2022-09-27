<?php

namespace App\Http\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Category::orderBy('created_at', 'desc');
        if ($request->has('search') && $request->search  != ''){
            $sort_search = $request->search;
            $data = $data->where('name', 'like', '%'.$sort_search.'%');
        }

        $data = $data->paginate(10);

        return view('admin.categories.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category =  Category::where('parent','0')->get();
        return view('admin.categories.create',compact('category'));
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
            'slug' => 'required',
        ]);

       $data = Category::create([
            "name" => $request->name,
            "slug" => $request->slug,
            "description" => $request->description,
            "logo" =>  $request->logo,
            "sorting" =>  $request->sorting,
            "parent" =>  $request->parent,
            "active" =>  $request->active,
            "featured" =>  $request->featured,
            "banner" =>  $request->banner,
        ]);

        $this->translate('en',$data->id,[
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', translate('Record Added'));
    }


    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
     
        $lang   = $request->lang ?? App::getLocale();
        $data  = Category::findOrFail($id);
        $category =  Category::where('parent','0')->get();
       
        return view('admin.categories.edit', compact('data','lang','category'));
    }


    /**
     * Update the specified resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Category::findOrFail($id); 
        $request->validate([
            'name' => 'required',
            'slug' => ['required'],
        ]);

        $data = Category::findOrFail($id);
        
        if($request->lang == env("DEFAULT_LANGUAGE")){
            $data->name = $request->name;
            $data->save();
        }

        $data->slug = $request->slug;
        $data->description = $request->description;
        $data->logo = $request->logo;
        $data->parent = $request->parent;
        $data->featured = $request->featured;
        $data->active = $request->active;
        $data->sorting = $request->sorting;
        $data->save();

        $this->translate($request->lang,$data->id,[
          'name' => $request->name,
        ]);

        return back()->with('success', translate('Record Updated'));

    }

    public function translate($lang,$id,$data)
    {

        $translation = CategoryTranslation::firstOrNew(['lang' => $lang, 'category_id' => $id]);
        foreach ($data as $key => $value) {
            $translation[$key] = $data[$key];
        }
        $translation->save();
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
                    $categories = Category::whereIn('_id',$idz)->get();
                    foreach ($categories as $category) {

                        $products = Product::where('category_id',$category->id)->get();
        
                        if(count($products) > 0 ){
                            return response()->json(['message' => translate('Category Used In Product')],400);
                        }
                        
                        if(count($category->children) > 0 ){
                            return response()->json(['message' => translate('Category Used In Subcategory')],400);
                        }
    
                        foreach ($category->translations as $translation) {
                            $translation->delete();
                        }

                        Category::destroy($category->id);
                    }

                    return response()->json(['message' => translate('Records Deleted')],200);
                    break;


                case 'active':

                    $idz = explode(',',$request->idz);    
                    $pp = Category::whereIn('_id',$idz)->get();
                    foreach ($pp as $item) {
                        $item->active = $request->value;
                        $item->save();
                    }
                    return response()->json(['message' => translate('Activation Updated')],200);
                    break;
                
                case 'featured':

                        $idz = explode(',',$request->idz);    
                        $pp = Category::whereIn('_id',$idz)->get();
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