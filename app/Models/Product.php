<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
// use Illuminate\Database\Eloquent\Model;
// use App;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model {

    protected $connection = 'mongodb';
    protected $collection = 'products';
    protected $fillable = [
        "name",
        "slug",
        "unit_id",
        "unit_price",
        "quantity",
        "sku",
        "description",
        "discount_date_range",
        "discount_type",
        "discount_value",
        "taxes",
        "thumbnail",
        "photos",
        "pdf",
        "width",
        "height",
        "length",
        "weight",
        "external_link",
        "external_link_btn",
        "meta_title",
        "meta_description",
        "choice_attributes",
        "size_image",
        "product_type",
        "cash_on_delivery",
        "low_stock_quantity",
        "min_purchase_quantity",
        "stock_visibility",
        "category_id",
        "brand_id",
        "tags",
        "shipping_type",
        "flat_shipping_cost",
        "est_shipping_days",
        "status",
        'featured',
    ];   


  


    // protected $fillable = [
    //     'name', 'added_by', 'user_id', 'category_id', 'brand_id', 'video_provider', 'video_link', 'unit_price',
    //     'purchase_price', 'unit', 'slug', 'colors', 'choice_options', 'variations', 'thumbnail_img', 'meta_title', 'meta_description'
    // ];

    // protected $with = ['product_translations', 'taxes'];

    // public function getTranslation($field = '', $lang = false) {
    //     $lang = $lang == false ? App::getLocale() : $lang;
    //     $product_translations = $this->product_translations->where('lang', $lang)->first();
    //     return $product_translations != null ? $product_translations->$field : $this->$field;
    // }

    // public function product_translations() {
    //     return $this->hasMany(ProductTranslation::class);
    // }

   

    // public function brand() {
    //     return $this->belongsTo(Brand::class);
    // }

    // public function user() {
    //     return $this->belongsTo(User::class);
    // }

    // public function orderDetails() {
    //     return $this->hasMany(OrderDetail::class);
    // }

    // public function reviews() {
    //     return $this->hasMany(Review::class)->where('status', 1);
    // }

    // public function wishlists() {
    //     return $this->hasMany(Wishlist::class);
    // }

    // public function stocks() {
    //     return $this->hasMany(ProductStock::class);
    // }

    // public function taxes() {
    //     return $this->hasMany(ProductTax::class);
    // }

    // public function flash_deal_product() {
    //     return $this->hasOne(FlashDealProduct::class);
    // }

    // public function bids() {
    //     return $this->hasMany(AuctionProductBid::class);
    // }

    // public function inventory()
    // {
    //     return $this->hasMany(Inventory::class,'product_id','id');
    // }

}
