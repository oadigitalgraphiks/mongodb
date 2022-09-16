@extends('admin.layouts.app')

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

            <form id="choice_form" class="my_product_form form d-flex flex-column flex-lg-row gap-7 gap-lg-6" action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              
                
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
                                                <input type="text" class="form-control mb-2" name="name" placeholder="Product Name"  required="">
                                           </div>

                                           <div class="pt-3 col-md-12">
                                            <label class="required form-label">Product Slug</label>
                                            <input class="form-control mb-2" name="slug" placeholder="Product Slug" required="">
                                            <div class="text-muted fs-7">A product Slug is required and recommended to be unique.</div>
                                          </div>

                                          <div class="pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Unit Type</label>
                                            <select class="form-control" name="unit_id">
                                               <option value="1">KG</option>
                                               <option value="2">PC</option>
                                               <option value="2">Other</option>
                                            </select>
                                          </div>

                                          <div class="pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Unit price</label>
                                            <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Unit price" name="unit_price" class="form-control mb-2"  required="">
                                          </div>

                                          <div class="pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">Quantity</label>
                                                <input type="number" class="form-control mb-2" lang="en" min="0" value="0" step="1" placeholder="Quantity" name="quantity" required>
                                            </div>

                                            <div class="pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">SKU</label>
                                                <input type="text" placeholder="SKU" name="sku" class="form-control mb-2">
                                            </div>

                                        </div> 
                                 </div>
                            </div>
                            <!--end::General options-->


                                {{-- Description --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title"><h3>Description</h3></div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <textarea name="description" id="editor"></textarea>
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
                                                <input type="text" class="form-control aiz-date-range mb-2" name="discount_date_range" placeholder="Select Date" data-time-picker="true" data-format="DD-MM-Y HH:mm:ss" data-separator=" to " autocomplete="off">
                                            </div>

                                            <div class="fv-row w-100 flex-md-root">
                                                <label class="form-label">Discount Type</label>
                                                <select data-control="select2" class="form-select mb-2 select2-hidden-accessible" name="discount_type" data-placeholder="Select an option">
                                                    <option value="amount">Flat</option>
                                                    <option value="percent">Percent</option>
                                                </select>
                                            </div>

                                            <div class="fv-row w-100 flex-md-root">
                                                <label class="form-label">Discount Amount (%)</label>
                                                <input type="number" lang="en" min="0" step="0.01" placeholder="Discount" name="discount_value" class="form-control mb-2" required="">
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
                                                    <input type="number" name="width" class="form-control mb-2" placeholder="Width (w)">
                                                    <input type="number" name="height" class="form-control mb-2" placeholder="Height (h)">
                                                    <input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)">
                                                </div>
                                                <div class="text-muted fs-7">Enter the product dimensions in
                                                    centimeters (cm).</div>
                                            </div>
                                            <div class="pt-3 col-md-6">
                                                <label class="form-label">Weight</label>
                                                <input type="number" name="weight" class="form-control mb-2" placeholder="Product weight">
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
                                            <input type="text" class="form-control mb-2" name="external_link" placeholder="Leave it blank if you do not use external site link">
                                            <div class="text-muted fs-7">
                                                Leave it blank if you do not use external site link
                                            </div>
                                        </div>
                                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">External link button text</label>
                                            <input type="text" placeholder="External link button text" name="external_link_btn" class="form-control mb-2">
                                            <div class="text-muted fs-7">
                                                Leave it blank if you do not use external site link
                                            </div>
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
                                        <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name">
                                        <div class="text-muted fs-7">
                                            Set a meta tag title. Recommended to be simple and precise keywords.
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <label class="form-label">Description</label>
                                        <div class="text-muted fs-7">
                                            <textarea name="meta_description" class="form-control" >Set a meta tag description to the product for increased SEO ranking.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Seo Tags --}}
                               
                               
                               
                                <div class="d-none card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3>Product Variation</h3>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-6 fv-row row">
                                            <div class="col-md-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">Colors</label>
                                                <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" name="colors[]" id="colors" multiple="" disabled="" data-select2-id="select2-data-colors" tabindex="-1" aria-hidden="true">
                                                    <option value="#FFFF00">Yellow</option>
                                                    <option value="#9ACD32">YellowGreen</option>
                                                </select>   
                                            </div>

                                            <div class="col-md-2 fv-row fv-plugins-icon-container">
                                                <p>&nbsp;</p>
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" name="colors_active" value="1">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-6 fv-row row">
                                            <label class="required form-label">Attributes</label>
                                            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" name="choice_attributes[]" id="choice_attributes">
                                                    <option value="5">Size</option>
                                                    <option value="6">Color</option>
                                            </select>
                                            

                                        </div>
                                        <div>
                                            <div class="text-muted fs-7">
                                                Choose the attributes of this product and then input values of each attribute
                                            </div>
                                            <br>
                                        </div>

                                        <div class="customer_choice_options" id="customer_choice_options">

                                        </div>
                                        <div class="size-image">
                                            <div class="fv-row mb-2">
                                                <label class="form-label">Size Image</label>
                                                <!--begin::Dropzone-->
                                                <div class="dropzone" id="kt_ecommerce_add_product_mediaa" data-toggle="aizuploader" data-type="image" data-multiple="false">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick">
                                                        <!--begin::Icon-->
                                                        <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <input type="hidden" name="size_image" class="selected-files">
                                                        <div class="ms-4">
                                                            <h3 class="fs-5 fw-bolder text-gray-900 mb-1">
                                                                Click to upload.
                                                            </h3>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <!--end::Dropzone-->
                                                <div class="file-preview box sm">
                                                </div>

                                            </div>  
                                        </div>
                                    </div>
                                </div>

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
                                    <option value="1">Simple</option>
                                    <option value="2">Variation</option>
                                </select>
                            </div>

                            <div class="pt-3">
                                <label class="form-label">Low Stock Quantity Warning</label>
                                <input type="number" name="low_stock_quantity" value="1" min="0" step="1" class="form-control">
                            </div>

                            <div class="pt-5">
                                <label class="form-label">Minimum Purchase Qty</label>
                                <input type="number" name="min_purchase_quantity" value="1" min="0" step="1" class="form-control">
                            </div>

                            <div class="pt-5">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                    <span class="m-0 form-label ">Cash On Delivery Status</span>
                                    <input class="form-check-input" type="checkbox" name="cash_on_delivery" value="1">
                                </label>
                            </div>

                            <div class="pt-5">
                                <label class="form-label">Low Stock Quantity Warning</label>
                                <select required data-control="select2"  class="d-block form-select " name="stock_visibility">
                                    <option>Show Stock Quantity</option>
                                    <option>Show Stock With Text Only</option>
                                    <option>Hide Stock</option>
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
                                <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-placeholder="Select an option"  name="category_id" id="category_id">
                                    <option value="1" data-select2-id="select2-data-20-4qkp">Organic Olive</option>
                                    <option value="6">Premium Spreads</option>
                                    <option value="7">Chocolates</option>
                                    <option value="8">Organic Honey</option>
                                    <option value="10">Organic Pasta</option>
                                    <option value="11">Premium Chocolates</option>
                                </select>
                                <br>

                                <label class="form-label">Brand</label>
                                <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" name="brand_id" id="brand_id" >
                                    <option value="">Select Brand</option>
                                    <option value="1">SCYAVURU</option>
                                    <option value="4">PERSIANI</option>
                                    <option value="5">NOAN</option>
                                    <option value="6">NOALYA</option>
                                    <option value="7">HAPPY MAMA</option>
                                    <option value="8">STAUDS</option>
                                </select>
                                
                                <!--begin::Label-->
                                <label class="form-label d-block">Tags</label>
                                <input id="kt_ecommerce_add_product_tags" class="form-control mb-2" name="tags[]"
                                    placeholder="Type & add tag">
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
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                            <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Free Shipping</span>
                                            <input class="form-check-input" type="radio" name="shipping_type" checked="checked" value="free">
                                        </label>
                                    
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                            <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Flat Rate</span>
                                            <input class="form-check-input" type="radio" name="shipping_type" value="flat_rate">
                                        </label>

                                        <div class="col-md-12 fv-row fv-plugins-icon-container flat_rate_shipping_div" style="display: none">
                                            <label class=" form-label">Shipping cost</label>
                                            <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Shipping cost" name="flat_shipping_cost" class="form-control mb-2" required="">
                                        </div>
                                        
                                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Is Product Quantity Mulitiply</span><input class="form-check-input" type="checkbox" name="is_quantity_multiplied" value="1">
                                        </label>

                                        <label for="kt_ecommerce_add_product_store_template" class="mt-5 form-check-label ms-0 fw-bolder fs-6 text-gray-700 mb-3">Shipping Days</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control mb-2" name="est_shipping_days" min="1" step="1" placeholder="Shipping Days">
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
                                    <select class="form-select  mb-2 select2-hidden-accessible" name="submit_type" data-control="select2">
                                        <option value="draft">Drafts</option>
                                        <option value="unpublish">Unpublish</option>
                                        <option value="publish">Publish</option>
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
