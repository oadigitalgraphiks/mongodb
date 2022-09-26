<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tax;
use App\Models\Unit;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Attribute;
use App\Models\AttributeType;
use App\Models\Color;
use App\Models\ProductCombination;
use App\Models\ProductTranslation;
use App;
use Illuminate\Support\Str;

class ProductController extends Controller
{


    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        
        if($request->ajax()){
            
            $products = Product::orderBy('created_at', 'desc');
            if($request->has('search') && $request->search != ''){
                $search = (string) $request->search;
                $products = $products->where('name', 'like', '%'.$search.'%');
            }
            
            $products = $products->with(['category','brand']);
        
            if($request->has('count') && $request->count != ''){
                $count = $request->count;
                $products = $products->paginate($count);
            }else{
                $products = $products->paginate($products->count());
            }
   
            return response()->json($products);

        }


        return view('admin.products.index');
    }

     /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {

        $taxes = Tax::all();
        $units = Unit::all();
        $categories = Category::where('parent','0')->with('children')->get();
        $brands =  Brand::all();
        $attribute_types = AttributeType::all();
        $colors = Color::all();

        return view('admin.products.create',compact('taxes','units','categories','brands','attribute_types','colors'));

    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {

        $slug =  Str::slug($request->slug, '-');
        $request->merge(['slug' => $slug]);
        $request->validate([
            'name' => 'required',
            'slug' => 'required|min:3|unique:products,slug',
        ]);

        

        $active = $request->has('active') ? 1 : 0;
        $cash_on_delivery = $request->has('cash_on_delivery') ? 1 : 0;
        $is_quantity_multiplied = $request->has('is_quantity_multiplied') ? 1 : 0;
        $taxes = $request->has('taxes') ? $request->taxes : [];

        $colors = $request->has('colors') ? $request->colors : [];
        $attribute_types = $request->has('attribute_types') ? $request->attribute_types : [];

        $atts = [];
        if($request->has('att')){
            foreach ($request->att as  $attribute) {
                foreach ($attribute as $value) {
                    array_push($atts,$value);
                }
            }
        }

        $tags = array();
        if($request->tags[0] != null){
            foreach (json_decode($request->tags[0]) as $key => $tag) {
                array_push($tags, $tag->value);
            }
        }

        $data = [
            "name" => $request->name,
            "slug" => $request->slug,
            "unit_id" =>  $request->unit_id,
            "unit_price" => $request->unit_price,
            "quantity" => $request->quantity,
            "sku" => $request->sku,
            "description" => $request->description,
            "discount_date_range" => $request->discount_date_range,
            "discount_type" => $request->discount_type,
            "discount_value" => $request->discount_value,
            "taxes" => $taxes,
            "thumbnail" => $request->thumbnail,
            "photos" => $request->photos,
            "pdf" => $request->pdf,
            "width" => $request->width,
            "height" => $request->height,
            "length" => $request->length,
            "weight" => $request->weight,
            "external_link" => $request->external_link,
            "external_link_btn" => $request->external_link_btn,
            "meta_title" => $request->meta_title,
            "meta_description" => $request->meta_description,
            "product_type" => $request->product_type,
            "cash_on_delivery" => $cash_on_delivery,
            "active" => $active,
            "low_stock_quantity" => $request->low_stock_quantity,
            "min_purchase_quantity" => $request->min_purchase_quantity,
            "stock_visibility" => $request->stock_visibility,
            "category_id" => $request->category_id,
            "brand_id" => $request->brand_id,
            "tags" => implode(',', $tags),
            "shipping_type" => $request->shipping_type,
            "is_quantity_multiplied" => $is_quantity_multiplied,
            "flat_shipping_cost" => $request->flat_shipping_cost,
            "est_shipping_days" => $request->est_shipping_days,
            "colors" => implode(',',$colors),
            "attribute_types" => implode(',',$attribute_types),
            "attributes" => implode(',',$atts),
            "status" => $request->status,
            "featured" => $request->featured,
        ];

        $product = Product::create($data);

        if($product->save()){
            if($request->has('combinations')){
                foreach($request->combinations as $value) {
                    ProductCombination::create([
                        "product_id" => $product->id,
                        "name" => $value['name'],
                        "price" => $value['price'],
                        "sku" => $value['sku'],
                        "qty" => $value['qty'],
                        "img" => $value['img'],
                    ]);
                }
            }
        }

        $this->translate('en',$product->id,[
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.products.index')->with('success',translate('Record Created'));
    }

     /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request, $id)
    {
        $lang   = $request->lang ?? App::getLocale();

        $product = Product::where('_id',$id)->first();
        if(!$product){
            return back()->with('success','Record Not Found');
        }

        $taxes = Tax::all();
        $units = Unit::all();
        $categories = Category::where('parent','0')->with('children')->get();
        $brands =  Brand::all();
        $attribute_types = AttributeType::all();
        $colors = Color::all();

        $typeName = [];
        $variations = explode(',',$product->variations);
        $variations = Attribute::whereIn('_id',$variations)->get();
        foreach($variations as $key => $value) {
            array_push($typeName,$value->type->id);
        }
        $typeName = array_unique($typeName);
        $selectedTypes = AttributeType::whereIn('_id',$typeName)->get();

        
        return view('admin.products.edit',compact('variations','product','taxes','units','categories','brands','attribute_types','selectedTypes','colors','lang'));
    }



     /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
      public function update(Request $request,$id)
      {
    

        $product =  Product::where('_id',$id)->first();
        if(!$product){
            dd('asd');
            return back();
        }

        $active = $request->has('active') ? 1 : 0;
        $cash_on_delivery = $request->has('cash_on_delivery') ? 1 : 0;
        $is_quantity_multiplied = $request->has('is_quantity_multiplied') ? 1 : 0;
        $taxes = $request->has('taxes') ? $request->taxes : [];

        $colors = $request->has('colors') ? $request->colors : [];
        $attribute_types = $request->has('attribute_types') ? $request->attribute_types : [];

        $atts = [];
        if($request->has('att')){
            foreach ($request->att as  $attribute) {
                foreach ($attribute as $value) {
                    array_push($atts,$value);
                }
            }
        }

        $tags = array();
        if($request->tags[0] != null){
            foreach (json_decode($request->tags[0]) as $key => $tag) {
                array_push($tags, $tag->value);
            }
        }


        if($request->lang == env("DEFAULT_LANGUAGE")){
            $product->name = $request->name;
            $product->description = $request->description;
            $product->save();
        }

            $this->translate($request->lang,$product->id,[
                'name' => $request->name,
                'description' => $request->description,
            ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->thumbnail = $request->thumbnail;

        $product->slug = $request->slug;
        $product->unit_id =  $request->unit_id;
        $product->unit_price = $request->unit_price;
        $product->quantity = $request->quantity;
        $product->sku = $request->sku;
        
        $product->discount_date_range = $request->discount_date_range;
        $product->discount_type = $request->discount_type;
        $product->discount_value = $request->discount_value;
        $product->taxes = $taxes;
      
        $product->photos = $request->photos;
        $product->pdf = $request->pdf;
        $product->width = $request->width;
        $product->height = $request->height;
        $product->length = $request->length;
        $product->weight = $request->weight;
        $product->external_link = $request->external_link;
        $product->external_link_btn = $request->external_link_btn;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->product_type = $request->product_type;
        $product->cash_on_delivery = $cash_on_delivery;
        $product->active = $active;
        $product->low_stock_quantity = $request->low_stock_quantity;
        $product->min_purchase_quantity = $request->min_purchase_quantity;
        $product->stock_visibility = $request->stock_visibility;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->tags = implode(',', $tags);
        $product->shipping_type = $request->shipping_type;
        $product->is_quantity_multiplied = $is_quantity_multiplied;
        $product->flat_shipping_cost = $request->flat_shipping_cost;
        $product->est_shipping_days = $request->est_shipping_days;
        $product->colors = implode(',',$colors);
        $product->attribute_types = implode(',',$attribute_types);
        $product->attributes = implode(',',$atts);

        $product->status = $request->status;
        $product->featured = $request->featured;
        if($product->save()){
            if($request->has('combinations')){
                ProductCombination::where('product_id',$product->id)->delete();
                foreach($request->combinations as $value) {
                    ProductCombination::create([
                        "product_id" => $product->id,
                        "name" => $value['name'],
                        "price" => $value['price'],
                        "sku" => $value['sku'],
                        "qty" => $value['qty'],
                        "img" => $value['img'],
                    ]);
                }
            }
        }

        
     

        return back()->with('success',translate('Record Updated'));
    }


  
    public function translate($lang,$id,$data)
    {

        $translation = ProductTranslation::firstOrNew(['lang' => $lang, 'product_id' => $id]);
        foreach ($data as $key => $value) {
            $translation[$key] = $data[$key];
        }
        $translation->save();

    }

    /*
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        foreach ($data->translations as $translation) {
            $translation->delete();
        }

        ProductCombination::where('product_id',$id)->delete();
        Product::destroy($id);
        return response()->json(["message" => translate('Record Deleted')]);

        // return redirect()->route('admin.products.index')->with('success', translate('Record Deleted'));
    }



    /*
     * Remove the specified resource from storage.
     */
    public function bulk(Request $request)
    {
        if($request->has('idz') && $request->has('action') && $request->has('value')){
          
            switch ($request->action) {
               
                case 'delete':

                    // dd($request->all());
                    $idz = explode(',',$request->idz);    
                    Product::whereIn('_id',$idz)->delete();
                    ProductTranslation::whereIn('product_id',$idz)->delete();
                    return response()->json(['message' => translate('Record Deleted')],200);

                
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }

        }


        return response()->json(['message' => translate('Error Found')],400);
        
    }
  


    

    /*
    * Show the application dashboard.
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function stock(Request $request)
    {
    
           if($request->ajax()){


                $products = Product::orderBy('created_at', 'desc');
                if($request->has('search') && $request->search != ''){
                    $search = (string) $request->search;
                    $products = $products->where('name', 'like', '%'.$search.'%');
                }

                $products = $products->with(['category','brand','combinations']);

                if($request->has('count') && $request->count != ''){
                    $count = $request->count;
                    $products = $products->paginate($count);
                }else{
                    $products = $products->paginate($products->count());
                }

                // dd($products);
                return response()->json($products);
        }
       
        return view('admin.products.stock');
    }


       /*
         * Show the application dashboard.
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function attribute_type(Request $request)
        {
            if($request->has('types') && $request->types != '' ){

                $res = AttributeType::where('_id',$request->types)->first();
                $res->attributes;
                return response()->json($res);
            }
        }





}
