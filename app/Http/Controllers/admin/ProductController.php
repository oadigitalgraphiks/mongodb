<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tax;

class ProductController extends Controller
{
   

    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.products.index');
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
        ];

        $product =  Product::create($data);

        return back();
    }

    
}
