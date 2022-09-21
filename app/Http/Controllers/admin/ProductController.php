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

class ProductController extends Controller
{


    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $col_name = null;
        $query = null;
        $seller_id = null;
        $sort_search = null;
        $products = Product::orderBy('created_at', 'desc');

        if ($request->search != null){
            $products = $products
                        ->where('name', 'like', '%'.$request->search.'%');
            $sort_search = $request->search;
        }

        $products = $products->paginate(15);

        return view('admin.products.index',compact('products'));
    }

     /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {

        $taxes = Tax::all();

        return view('admin.products.create',compact('taxes'));
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {

        // $taxes = $request->has('taxes') ? $request->taxes : [];
        $tags = $request->has('tags') ? implode(',',$request->tags) : [];

        $data = [
            "name" => $request->name,
            "slug" => $request->slug,
            "unit_id" => $request->unit_id,
            "unit_price" => $request->unit_price,
            "sku" => $request->sku,
            "description" => $request->description,
            "discount_date_range" => $request->discount_date_range,
            "discount_type" => $request->discount_date_range,
            "discount_value" => $request->discount_value,
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
            "low_stock_quantity" => $request->low_stock_quantity,
            "min_purchase_quantity" =>  $request->min_purchase_quantity,
            "cash_on_delivery" =>  $request->cash_on_delivery,
            "stock_visibility" =>  $request->stock_visibility,
            "category_id" => $request->category_id,
            "brand_id" =>  $request->brand_id,
            "tags" => $tags,
            "shipping_type" => $request->shipping_type,
            "flat_shipping_cost" => $request->flat_shipping_cost,
            "est_shipping_days" => $request->est_shipping_days,
            "status" => $request->status,
            "featured" => 1,
        ];

        $product =  Product::create($data);

        return back();
    }

     /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $product = Product::where('_id',$id)->first();
        if(!$product){
            return back()->with('success','Record Not Found');
        }

        $taxes = Tax::all();
        $units = Unit::all();
        $categories = Category::all();
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

        return view('admin.products.edit',compact('variations','product','taxes','units','categories','brands','attribute_types','selectedTypes','colors'));
    }



     /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
      public function update(Request $request,$id)
      {

        // dd($request->all());

        $product =  Product::where('_id',$id)->first();
        if(!$product){
            dd('asd');
            return back();
        }

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

        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->unit_id =  $request->unit_id;
        $product->unit_price = $request->unit_price;
        $product->quantity = $request->quantity;
        $product->sku = $request->sku;
        $product->description = $request->description;
        $product->discount_date_range = $request->discount_date_range;
        $product->discount_type = $request->discount_type;
        $product->discount_value = $request->discount_value;
        $product->taxes = $taxes;
        $product->thumbnail = $request->thumbnail;
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

        return back();
    }


       /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destroy($id)
    {

        Product::destroy($id);
        return back()->with('success','Deleted');
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
