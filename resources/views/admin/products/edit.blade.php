@extends('admin.layouts.app')


@section('css')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">            
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Product Form</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="http://localhost/oceanandseas/admin" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">eCommerce</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Catalog</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Add New Product</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">

            <form id="choice_form" class="my_product_form form d-flex flex-column flex-lg-row gap-7 gap-lg-6" action="{{route('admin.products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-6">
                    <div class="card card-flush py-4">
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2 nav nav-tabs nav-fill border-light">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Advanced</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active " id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-6">
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3>General</h3>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-6 row">

                                            <div class="col-md-12">
                                                <label class="required form-label">Product Name</label>
                                                <input type="text" class="form-control mb-2" name="name" placeholder="Product Name" value="{{$product->name}}"  required>
                                           </div>

                                           <div class="pt-3 col-md-12">
                                            <label class="required form-label">Product Slug</label>
                                            <input value="{{$product->slug}}" class="form-control mb-2" name="slug" placeholder="Product Slug" required>
                                            <div class="text-muted fs-7">A product Slug is required and recommended to be unique.</div>
                                          </div>

                                          <div class="pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Unit Type</label>
                                            <select class="form-control" name="unit_id">
                                                @foreach ($units as $item)
                                                <option @if($product->unit_id == $item->id) {{'selected'}} @endif value="{{$item->id}}">{{$item->name}}</option>     
                                                @endforeach
                                            </select>
                                          </div>

                                          <div class="pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Unit price</label>
                                            <input type="number" min="1" step="0.01" placeholder="Unit price" value="{{$product->unit_price}}" name="unit_price" class="form-control mb-2"  required>
                                          </div>

                                          <div class="pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">Quantity</label>
                                                <input type="number" class="form-control mb-2" min="0" step="0.01" value="{{$product->quantity}}" placeholder="Quantity" name="quantity" required>
                                            </div>

                                            <div class="pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">SKU</label>
                                                <input value="{{$product->sku}}" type="text" placeholder="SKU" name="sku" class="form-control mb-2">
                                            </div>

                                        </div> 
                                 </div>
                            </div>
                            <!--end::General options-->


                               {{-- Variations --}}

                               <div class="mb-3 card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Product Variation</h3>
                                    </div>
                                </div>
                                <div class="card-body pt-0">

                                        
                                    <?php  $selectedTypesId = $selectedTypes->pluck('id')->toArray(); ?>
                                    <div class="mb-6 fv-row row">
                                        <label class="form-label">Attributes</label>
                                       
                                        <select class="attribute_types  form-select mb-2"  name="choice_attributes[]" multiple >

                                            @foreach ($attribute_types as  $attribute_type)
                                               <option @if(in_array($attribute_type->id,$selectedTypesId)) {{'selected'}} @endif value="{{$attribute_type->id}}">{{$attribute_type->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div>
                                        <div class="text-muted fs-7">
                                            Choose the attributes of this product and then input values of each attribute
                                        </div>
                                        <br>
                                    </div>
                                    
                                    <div class="variations">
                                        @foreach ($selectedTypes as $var)
                                        <?php  $variationsids = $variations->pluck('id')->toArray(); ?>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control"  value="{{$var->name}}" readonly>
                                                </div>
                                                <div class="col-md-8">
                                                    <select name="variations[{{$var->id}}][]" class="form-control form-control mb-2"  multiple >
                                                        @foreach ($var->attributes as $item)
                                                              <option @if(in_array($item->id,$variationsids)) {{'selected'}} @endif  value="{{$item->id}}" >{{$item->name}}</option>         
                                                        @endforeach
                                                    </select>
                                                </div>
                                           </div>
                                        @endforeach
                                    </div>

                                    {{-- <div class="size-image">
                                        <div class="fv-row mb-2">
                                            <label class="form-label">Size Image</label>
                                            <div class="dropzone" id="kt_ecommerce_add_product_mediaa" data-toggle="aizuploader" data-type="image" data-multiple="false">
                                                <div class="dz-message needsclick">
                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                    <input type="hidden" name="size_image" class="selected-files">
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Click to upload.</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="file-preview box sm">
                                            </div>
                                        </div>  
                                    </div> --}}
                                </div>
                            </div>
                            {{-- Variations --}}


                                {{-- Description --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title"><h3>Description</h3></div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <textarea name="description" id="editor">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                {{-- Description --}}


                                {{-- Product Discount --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title"><h3>Discount</h3></div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="d-flex flex-wrap gap-5">
                                            <div class="mb-6 fv-row">
                                                <label class="required form-label" for="start_date">Discount Date Range</label>
                                                <input type="text" class="form-control aiz-date-range mb-2" name="discount_date_range" placeholder="Select Date" data-time-picker="true" data-format="DD-MM-Y HH:mm:ss" data-separator="to" autocomplete="off" value="{{$product->discount_date_range}}" >
                                            </div>

                                            <div class="fv-row w-100 flex-md-root">
                                                <label class="form-label">Discount Type</label>
                                                <select data-control="select2" class="form-select mb-2 select2-hidden-accessible" name="discount_type" data-placeholder="Select an option">
                                                    <option @if($product->discount_type == 'amount') {{'selected'}} @endif value="amount">Flat</option>
                                                    <option @if($product->discount_type == 'percent') {{'selected'}} @endif value="percent">Percent</option>
                                                </select>
                                            </div>

                                            <div class="fv-row w-100 flex-md-root">
                                                <label class="form-label">Discount Amount (%)</label>
                                                <input type="number" lang="en" min="0" step="0.01" placeholder="Discount" value="{{$product->discount_value}}" name="discount_value" class="form-control mb-2" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Product Discount --}}
                            

                                {{-- Product Tax --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title"><h3>Product Taxes</h3></div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            @foreach ($taxes as $key => $item)

                                            <div class="col-md-12 pt-3">
                                                <div class="card-title">
                                                    <h3>{{$item->name}}</h3>
                                                    <input type="hidden" value="3" name="tax[{{$key}}][id]">
                                                </div>
                                                <div class="d-flex flex-wrap gap-5">
                                                    <div class="fv-row w-100 flex-md-root">
                                                        <label class="required form-label">Tax Type</label>
                                                        <select class="form-select mb-2 select2-hidden-accessible" name="tax[{{$key}}][type]" data-control="select2" data-placeholder="Select an option">
                                                            <option value="amount" >Flat</option>
                                                            <option value="percent">Percent</option>
                                                        </select>
                                                    </div>
                                                    <div class="fv-row w-100 flex-md-root">
                                                        <label class="form-label">VAT Amount (%)</label>
                                                        <input name="tax[{{$key}}][amount]" type="number" lang="en" min="0" value="0" step="0.01" placeholder="Tax" class="form-control mb-2" required>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            @endforeach
                                            

                                        
                                        </div>
                                    </div>
                                </div>
                                {{-- Product Tax --}}


                             

                                
                                  {{-- Thumbnail --}}
                                  <div class=" thumbnail-section card card-flush py-4 mb-3">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3>Thumbnail Image<b>(1500 x 1500)</b></h3>
                                        </div>
                                    </div> 
                                    <div class="card-body pt-0">
                                        <div class="fv-row mb-2">
                                            <div class="dropzone" id="kt_ecommerce_add_product_mediaa" data-toggle="aizuploader" data-type="image">
                                                <div class="dz-message needsclick">
                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                    <input type="hidden" name="thumbnail" class="selected-files">
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Click to upload.</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="file-preview box sm"></div>
                                        </div>
                                        <div class="text-muted fs-7">This image is visible in all product box. Use
                                            (1500 x 1500) sizes image.
                                            <br>Keep some blank space around main object of your image as we had to crop
                                            <br> some edge in different devices to make it responsive.
                                        </div>
                                    </div>
                                </div>
                                 {{-- Thumbnail --}}


                                <!--Gallaery Images-->
                                <div class=" card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3>Gallery Images <b>(1500 x 1500)</b></h3>
                                        </div>
                                    </div> 
                                    <div class="card-body pt-0">
                                        <div class="fv-row ">
                                            <div class="dropzone" id="kt_ecommerce_add_product_mediaa" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                                <div class="dz-message needsclick">
                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                    <input type="hidden" name="photos" class="selected-files">
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Click to upload.</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="file-preview box sm"></div>
                                        </div>
                                        <div class=" pt-2 text-muted fs-7">
                                            These images are visible in product details page gallery. Use 1500 x 1500 sizes images.
                                        </div>
                                    </div>
                                </div>
                                 <!--Gallaery Images-->

                               
                                <!--begin::PDF-->
                                <div class=" card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title"><h3>PDF Specification</h3></div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="fv-row mb-2">
                                            <div class="dropzone" id="kt_ecommerce_add_product_mediaa" data-toggle="aizuploader" data-type="document">
                                                <div class="dz-message needsclick">
                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                    <input type="hidden" name="pdf" class="selected-files">
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Click to upload..</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="file-preview box sm"></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- PDF --}}


                            </div>
                          </div>
                        <!--end::Tab pane-->


                        <!--begin::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-6">

                                  {{-- Dimention Options --}}
                                  <div id="kt_ecommerce_add_product_shipping"  class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3>Dimensions</h3>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class=" row">
                                            <div class="col-md-12">
                                                <label class="form-label">Dimension</label>
                                                <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                                                    <input value="{{$product->width}}" type="number" name="width" class="form-control mb-2" placeholder="Width (w)">
                                                    <input  value="{{$product->height}}" type="number" name="height" class="form-control mb-2" placeholder="Height (h)">
                                                    <input type="number"  value="{{$product->length}}" name="length" class="form-control mb-2" placeholder="Lengtn (l)">
                                                </div>
                                                <div class="text-muted fs-7">Enter the product dimensions in
                                                    centimeters (cm).</div>
                                            </div>
                                            <div class="pt-3 col-md-6">
                                                <label class="form-label">Weight</label>
                                                <input type="number" value="{{$product->weight}}" name="weight" class="form-control mb-2" placeholder="Product weight">
                                                <div class="text-muted fs-7">Set a product weight in kilograms (kg).
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  {{-- Dimention Options --}}



                                {{-- External Links --}}
                               <div class="card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title"><h3>External Link</h3></div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row mb-6">
                                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">External link</label>
                                            <input type="text" class="form-control mb-2" name="external_link" placeholder="Leave it blank if you do not use external site link" value="{{$product->external_link}}" >
                                        </div>
                                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">External link button text</label>
                                            <input type="text" placeholder="External link button text" name="external_link_btn" value="{{$product->external_link_btn}}" class="form-control mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                {{-- External Links --}}

                           


                                 {{-- Seo Tags --}}
                               <div class="card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title"><h3>SEO Meta Tags</h3></div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="mb-10">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" value="{{$product->meta_title}}" >
                                    </div>
                                    <div class="mb-10">
                                        <label class="form-label">Description</label>
                                        <div class="text-muted fs-7">
                                            <textarea name="meta_description" class="form-control" >{{$product->meta_description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Seo Tags --}}
                               
                               
                               
                               



                            </div>
                        </div>
                    </div>            
                </div>
            

                <!--end::Main column-->
                <div class="d-flex flex-column gap-7 gap-lg-6 w-100 w-lg-300px">

                    <div class="card card-flush">
                        <div class="card-header">
                            <div class="card-title">
                                <h3>Settings</h3>
                            </div>
                        </div>
                        <div class="card-body pt-2 ">

                            <div class="pt-3 col-md-12 fv-row fv-plugins-icon-container">
                                <label class="required form-label">Product Type</label>
                                <select required data-control="select2" class="form-select product_type " name="product_type">
                                    <option @if($product->product_type == 'simple') {{'selected'}} @endif  value="simple">Simple</option>
                                    <option @if($product->product_type == 'variation') {{'selected'}} @endif value="variation">Variation</option>
                                </select>
                            </div>

                            <div class="pt-3">
                                <label class="form-label">Low Stock Quantity Warning</label>
                                <input type="number" value="{{$product->low_stock_quantity}}" name="low_stock_quantity" value="1" min="0" step="1" class="form-control">
                            </div>

                            <div class="pt-5">
                                <label class="form-label">Minimum Purchase Qty</label>
                                <input type="number" value="{{$product->min_purchase_quantity}}" name="min_purchase_quantity" value="1" min="0" step="1" class="form-control">
                            </div>

                            <div class="pt-5">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                    <span class="m-0 form-label ">Cash On Delivery Status</span>
                                    <input @if($product->cash_on_delivery == 1) {{'checked'}} @endif class="form-check-input" type="checkbox" name="cash_on_delivery" value="1">
                                </label>
                            </div>

                            <div class="pt-5">
                                <label class="form-label">Low Stock Quantity Warning</label>
                                <select required data-control="select2"  class="d-block form-select " name="stock_visibility">
                                    <option @if($product->stock_visibility == 'show_stock_quantity') {{'selected'}} @endif value="show_stock_quantity" >Show Stock Quantity</option>
                                    <option @if($product->stock_visibility == 'show_stock_with_text_only') {{'selected'}} @endif value="show_stock_with_text_only" >Show Stock With Text Only</option>
                                    <option @if($product->stock_visibility == 'hide_stock') {{'selected'}} @endif value="hide_stock" >Hide Stock</option>
                                </select>
                            </div>

                            

                        </div>
                    </div>


                    <div class="card card-flush py-4">
                              <div class="card-header">
                                    <div class="card-title">
                                        <h3>Product Details</h3>
                                    </div>
                              </div>
                              <div class="card-body pt-0">

                                <label class="form-label">Categories</label>
                                <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option"  name="category_id" id="category_id">
                                    @foreach ($categories as $cat)
                                    <option @if($cat->id == $product->category_id) {{'selected'}} @endif value="{{$cat->id}}" >{{$cat->name}}</option>    
                                    @endforeach
                                </select>
                                <br>

                                <label class="form-label">Brand</label>
                                <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" name="brand_id" id="brand_id" >
                                    @foreach ($brands as $item)
                                    <option @if($item->id == $product->brand_id) {{'selected'}} @endif value="{{$item->id}}">{{$item->name}}</option>    
                                    @endforeach
                                </select>
                                
                                <!--begin::Label-->
                                <label class="form-label d-block">Tags</label>
                                <input id="kt_ecommerce_add_product_tags" class="form-control mb-2" name="tags[]"
                                    placeholder="Type & add tag" value="{{$product->tags}}" >
                                <div class="text-muted fs-7">
                                    <span class="text-danger"> Type & hit enter add tag.</span>
                                    This is used for search. Input those words by which customer can find this product.
                                </div>

                            </div>
                        </div>


                        {{-- Shipping Config --}}
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3> Shipping Configuration</h3>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-4">

                                        <label class="form-label">Shipping Type</label>
                                        <select required data-control="select2"  class="d-block form-select " name="shipping_type">
                                            <option @if($product->shipping_type == 'free') {{'selected'}} @endif value="free" >Free Shipping</option>
                                            <option @if($product->shipping_type == 'flate') {{'selected'}} @endif value="flate" >Flat Rate</option>
                                        </select>

                                        <div class="mt-3 col-md-12 fv-row fv-plugins-icon-container flat_rate_shipping_div" >
                                            <label class=" form-label">Shipping cost</label>
                                            <input value="{{$product->flat_shipping_cost}}"  type="number" lang="en" min="0" value="0" step="0.01" placeholder="Shipping cost" name="flat_shipping_cost" class="form-control mb-2" >
                                        </div>
                                        
                                        <label class="mt-5 form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Is Product Quantity Mulitiply</span>
                                        <input @if($product->is_quantity_multiplied == 1) {{'checked'}} @endif  class="form-check-input" type="checkbox" name="is_quantity_multiplied" value="1">
                                        </label>

                                        <label for="kt_ecommerce_add_product_store_template" class="mt-5 form-check-label ms-0 fw-bolder fs-6 text-gray-700 mb-3">Shipping Days</label>
                                        <div class="input-group">
                                            <input value="{{$product->est_shipping_days}}" type="number" class="form-control mb-2" name="est_shipping_days" min="1" step="1" placeholder="Shipping Days">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">Days</span>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                        </div>
                        {{-- Shipping Config --}}



                        {{-- Submit --}}
                            <div class="card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title"><h3>Product Status</h3></div>
                                </div>
                                <div class="card-body pt-0">
                                    <select class="form-select  mb-2 select2-hidden-accessible" name="status" data-control="select2">
                                        <option @if($product->status == 'draft') {{'selected'}} @endif value="draft">Draft</option>
                                        <option @if($product->status == 'pending') {{'selected'}} @endif value="pending">Pending</option>
                                        <option @if($product->status == 'published') {{'selected'}} @endif  value="published">Published</option>
                                    </select>                 
                                </div>
                            </div>
                        {{-- Submit --}}
                 
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="col-12 text-center ">
            <button type="button" name="button" class="form-submit-button btn btn-primary mx-2">Submit</button>
        </div>
    </div>

@endsection
@section('script')

    <script src="{{ asset('/admin/assets/backend/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('/admin/assets/backend/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        
        ClassicEditor.create( document.querySelector( '#editor' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );



    </script>

    <script>
      
            $('.attribute_types').select2();
            $('.attribute_types').on('change', function() {

                alert('asdasd');

                    // var data = $(".select2 option:selected").text();
                    // $("#test").val(data);
            });
        






        // debugger
        // getAttributes(['type','name']);

        function getAttributes(att) {

            let attturl = "{{route('admin.products.attribute_type')}}";
            data = att.toString();
            $.ajax({
                url: attturl,
                data:{types:data},
            }).then((res) => {

                    let resData = res;
                    $('.variations').empty();
                    resData.forEach(element => {
                        $('.variations').append(`
                            <div class="mb-6 fv-row row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control"  value="${element.name}" readonly>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" name="variations[${element._id}][]" data-allow-clear="true" multiple >
                                        ${element.attributes.map(l => `
                                            <option  value="${l._id}" >${l.name}</option>
                                    `)}
                                </div>
                        </div>`);
                    });


            }).catch((error) => {


            });    


        }


















        $('.attributes_onchange').change(function(){

            let values =  $(this).val();
            getAttributes(values);
            // console.log(values);
        });

        $('.product_type').change(function(){
      
            // let product_type = $(this).val();
            // alert(product_type);

        });

        $('.form-submit-button').click(function(){

            $('.my_product_form').submit();
            // alert('adasd');

        });

        

    </script>


    {{-- <script type="text/javascript">
        $('form').bind('submit', function(e) {
            // Disable the submit button while evaluating if the form should be submitted
            // $("button[type='submit']").prop('disabled', true);
            $("button[type='submit']").hide();

            var valid = true;

            if (!valid) {
                e.preventDefault();

                // Reactivate the button if the form was not submitted
                // $("button[type='submit']").button.prop('disabled', false);
                $("button[type='submit']").show();
            }
        });

        $("[name=shipping_type]").on("change", function() {
            $(".flat_rate_shipping_div").hide();

            if ($(this).val() == 'flat_rate') {
                $(".flat_rate_shipping_div").show();
            }

        });

        function add_more_customer_choice_option(i, name) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '{{ route('products.add-more-choice-option') }}',
                data: {
                    attribute_id: i
                },
                success: function(data) {
                    var obj = JSON.parse(data);
                    $('#customer_choice_options').append('\
                            <div class="mb-6 fv-row row">\
                                <div class="col-md-3">\
                                <label class="required form-label">' + name + '</label>\
                                    <input type="hidden" name="choice_no[]" value="' + i + '">\
                                    <input type="text" class="form-control" name="choice[]" value="' + name +
                        '" placeholder="{{ translate('Choice Title') }}" readonly>\
                                </div>\
                                <div class="col-md-8">\
                                <label class=" form-label">&nbsp;</label>\
                                <select class="form-select attribute_choice" data-control="select2" data-hide-search="false" data-live-search="true" name="choice_options_' +
                        i + '[]" multiple>\
                                ' + obj + '\
                                </select>\
                                </div>\
                            </div>');
                    $('.attribute_choice').select2();
                    AIZ.plugins.bootstrapSelect('refresh');
                }
            });
        }

        $('input[name="colors_active"]').on('change', function() {
            if (!$('input[name="colors_active"]').is(':checked')) {
                $('#colors').prop('disabled', true);
                AIZ.plugins.bootstrapSelect('refresh');
            } else {
                $('#colors').prop('disabled', false);
                AIZ.plugins.bootstrapSelect('refresh');
            }
            update_sku();
        });

        $(document).on("change", ".attribute_choice", function() {
            update_sku();
        });

        $('#colors').on('change', function() {
            update_sku();
        });

        $('input[name="unit_price"]').on('keyup', function() {
            update_sku();
        });

        $('input[name="name"]').on('keyup', function() {
            update_sku();
        });

        function delete_row(em) {
            $(em).closest('.form-group row').remove();
            update_sku();
        }

        function delete_variant(em) {
            $(em).closest('.variant').remove();
        }

        function update_sku() {
            $.ajax({
                type: "POST",
                url: '{{ route('products.sku_combination') }}',
                data: $('#choice_form').serialize(),
                success: function(data) {
                    $('#sku_combination').html(data);
                    AIZ.uploader.previewGenerate();
                    AIZ.plugins.fooTable();
                    if (data.length > 1) {
                        $('#show-hide-div').hide();
                    } else {
                        $('#show-hide-div').show();
                    }
                }
            });
        }

        $('#choice_attributes').on('change', function() {
            $('#customer_choice_options').html(null);
            $.each($("#choice_attributes option:selected"), function() {
                add_more_customer_choice_option($(this).val(), $(this).text());
            });

            update_sku();
        });
    </script> --}}

@endsection
