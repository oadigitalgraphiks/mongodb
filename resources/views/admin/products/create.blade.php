@extends('admin.layouts.app')
@section('css')
    <style>

        .type_delete_button{
            font-size:23px;
            cursor: pointer;
        }

        .combination_delete_button{
            font-size:23px;
            cursor: pointer;
        }

    </style>
@endsection
@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Add New Product</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted"><a class="text-muted" href="{{route('admin.products.index')}}" target="_blank" rel="noopener noreferrer">{{translate('Products')}}</a></li>
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
                                                <label class="required form-label">Name</label>
                                                <input type="text" class="form-control mb-2" name="name" placeholder="Product Name" required>
                                           </div>

                                           <div class="pt-3 col-md-12">
                                            <label class="required form-label">Slug</label>
                                            <input  class="form-control mb-2" name="slug" placeholder="Product Slug" required>
                                          </div>

                                          <div class="simple_show pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Unit Type</label>
                                            <select class="form-control" name="unit_id">
                                                @foreach ($units as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                          </div>

                                          <div class="simple_show pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Unit price</label>
                                            <input type="number" min="1" step="0.01" placeholder="Unit price" name="unit_price" class="form-control mb-2"  required>
                                          </div>

                                           <div class="simple_show pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">Quantity</label>
                                                <input type="number" class="form-control mb-2" min="0" step="0.01"  placeholder="Quantity" name="quantity" required>
                                            </div>

                                            <div class="simple_show pt-3 col-md-6 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">SKU</label>
                                                <input  type="text" placeholder="SKU" name="sku" class="form-control mb-2">
                                            </div>

                                        </div>
                                 </div>
                            </div>
                            <!--end::General options-->


                               {{-- Variations --}}

                               <div class="variation_show mb-3 card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Product Variation</h3>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div>

                                        <label class="form-label">Colors</label>
                                        <select name="colors[]" class="colors form-select mb-2" data-control="select2" multiple >
                                            @foreach ($colors as $colorItem)
                                            <option >{{$colorItem->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <label class="form-label">Attributes</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="attribute_types form-select mb-2" data-control="select2" >
                                                @foreach ($attribute_types as  $attribute_type)
                                                   <option value="{{$attribute_type->id}}">{{$attribute_type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="create_type btn btn-info" type="button" >Add</button>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-muted fs-7">
                                            Choose the attributes of this product and then input values of each attribute
                                        </div>
                                        <br>
                                    </div>

                                    <div class="variations">
                                       
                                    </div>

                                    <div class="sku_combination" id="sku_combination">
                                      <div class="table-responsive">
                                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                            <thead>
                                                <tr class="fw-bolder text-muted bg-light">
                                                    <th class="min-w-120px text-center">Variant</th>
                                                    <th class="min-w-140pxtext-center">Variant Price</th>
                                                    <th class="min-w-120px text-center">SKU</th>
                                                    <th class="min-w-120px text-center">Quantity</th>
                                                    <th class="min-w-200px text-center">Photo</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="combination_list" >
                                             

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                           </div>
                      </div>
                   {{-- Variations --}}


                                {{-- Description --}}
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title"><h3>Description</h3></div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <textarea name="description" class="aiz-text-editor"> </textarea>
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
                                                <input type="text" class="form-control aiz-date-range mb-2" name="discount_date_range" placeholder="Select Date" data-time-picker="true" data-format="DD-MM-Y HH:mm:ss" data-separator="to" autocomplete="off"  >
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
                                                <input type="number" lang="en" min="0" step="0.01" placeholder="Discount"  name="discount_value" class="form-control mb-2" required>
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
                                                    <input  type="number" name="height" class="form-control mb-2" placeholder="Height (h)">
                                                    <input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)">
                                                </div>
                                                <div class="text-muted fs-7">Enter the product dimensions in
                                                    centimeters (cm).</div>
                                            </div>
                                            <div class="pt-3 col-md-6">
                                                <label class="form-label">Weight</label>
                                                <input type="number"  name="weight" class="form-control mb-2" placeholder="Product weight">
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
                                            <input type="text" class="form-control mb-2" name="external_link" placeholder="Leave it blank if you do not use external site link" >
                                        </div>
                                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">External link button text</label>
                                            <input type="text" placeholder="External link button text" name="external_link_btn" class="form-control mb-2">
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
                                        <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name"  >
                                    </div>
                                    <div class="mb-10">
                                        <label class="form-label">Description</label>
                                        <div class="text-muted fs-7">
                                            <textarea name="meta_description" class="form-control"></textarea>
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
                                    <option value="simple">Simple</option>
                                    <option value="variation">Variation</option>
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
                                    <option  value="show_stock_quantity" >Show Stock Quantity</option>
                                    <option  value="show_stock_with_text_only" >Show Stock With Text Only</option>
                                    <option  value="hide_stock" >Hide Stock</option>
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
                                    <option disabled >{{$cat->name}}</option>
                                    @foreach ($cat->children as $child)
                                     <option value="{{$child->id}}" >--- {{$child->name}}</option>
                                    @endforeach
                                    @endforeach
                                </select>
                                <br>

                                <label class="form-label">Brand</label>
                                <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" name="brand_id" id="brand_id" >
                                    <option value="0">Select Brand</option>
                                    @foreach ($brands as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>

                                <!--begin::Label-->
                                <label class="form-label d-block">Tags</label>
                                <input id="kt_ecommerce_add_product_tags" class="form-control mb-2" name="tags[]"
                                    placeholder="Type & add tag" >
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
                                            <option value="free" >Free Shipping</option>
                                            <option value="flate" >Flat Rate</option>
                                        </select>

                                        <div class="mt-3 col-md-12 fv-row fv-plugins-icon-container flat_rate_shipping_div" >
                                            <label class=" form-label">Shipping cost</label>
                                            <input type="number" lang="en" min="0" value="0" step="0.01" placeholder="Shipping cost" name="flat_shipping_cost" class="form-control mb-2" >
                                        </div>

                                        <label class="mt-5 form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Is Product Quantity Mulitiply</span>
                                        <input class="form-check-input" type="checkbox" name="is_quantity_multiplied" value="1">
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
                                    <select class="form-select  mb-2 select2-hidden-accessible" name="status" data-control="select2">
                                        <option value="draft">Draft</option>
                                        <option value="pending">Pending</option>
                                        <option value="published">Published</option>
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

        function convertObjectToValues(data) {
            let res = [];
            $.each(data, function() {
                var key = Object.keys(this)[0];
                var value = this[key];
                res.push(value);
            });
        }

        function generateCombination(attributes){

                let getProducts = (arrays) => {
                    if (arrays.length === 0) {
                        return [[]];
                    }

                    let results = [];

                    getProducts(arrays.slice(1)).forEach((product) => {
                        arrays[0].forEach((value) => {
                            results.push([value].concat(product));
                        });
                    });

                    return results;
                };

                let getAllCombinations = (attributes) => {
                    let attributeNames = Object.keys(attributes);

                    let attributeValues = attributeNames.map((name) => attributes[name]);

                    return getProducts(attributeValues).map((product) => {
                        obj = {};

                        attributeNames.forEach((name, i) => {
                            obj[name] = product[i];
                        });
                        return obj;
                    });
                };

               return getAllCombinations(attributes)
            }

        ClassicEditor.create( document.querySelector( '#editor' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );



    </script>
    <script>

        function getAttributes(id) {

            $.ajax({
                url: "{{route('admin.products.attribute_type')}}",
                data:{types:id},
            }).then((res) => {

                $('.variations').append(`
                    <div class="type_id${res._id} mb-6 fv-row row">
                        <div class="col-md-1 align-self-center text-center">
                            <i class="type_delete_button fas fa-times"></i>
                        </div>
                        <div class="col-md-3">
                            <input type="hidden" name="attribute_types[]" value="${res._id}" />
                            <input type="text" class="keyname form-control"  value="${res.name}" readonly>
                        </div>
                        <div class="col-md-8">
                            <select required class="single_attribute attribute${res._id} form-select mb-2" data-control="select2" data-placeholder="Select an option" name="att[${res._id}][]" multiple >
                                ${res.attributes.map(l => `
                                <option>${l.name}</option>
                            `)}
                        </div>
                </div>`);

                $('.attribute'+res._id).select2();

                setCombinations();

            }).catch((error) => {

            });
        }



        function setCombinations(){

            $('.combination_list').empty();
            let colors = $('.colors').val();
            let variationsArray = {};

            if(colors.length > 0){
                variationsArray.combination = colors;
            }

            $variations = $('.variations').children().each(function () {
                 let target =  $(this).find('.single_attribute');
                 let keyName =  $(this).find('.keyname').val();
                 variationsArray[keyName] = target.val();
            });

            let combinations = generateCombination(variationsArray);
            combinations.forEach( (element,index) => {

                var objtostring = Object.keys(element).map((key) => element[key]);

                $('.combination_list').append(`
                    <tr class="variant">
                        <td>
                            <input class="form-control mb-2" name="combinations[${index}][name]" value="${objtostring.toString()}" />
                        </td>
                        <td>
                            <input name="combinations[${index}][price]" type="number" value="0" min="0" step="0.01" class="form-control mb-2" required />
                        </td>
                        <td>
                            <input name="combinations[${index}][sku]" value="${objtostring.toString()}" class="form-control mb-2" />
                        </td>
                        <td>
                            <input name="combinations[${index}][qty]" type="number" value="0" min="0" step="1" class="form-control mb-2" required />
                        </td>
                        <td>
                            <div class="input-group" data-toggle="aizuploader" data-type="image" >
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount text-truncate">Choose File</div>
                                <input type="hidden" name="combinations[${index}][img]" class="selected-files" />
                            </div>
                            <div class="file-preview box sm"></div>
                        </td>
                        <td class="text-center" >
                            <i class="combination_delete_button fas fa-times"></i>
                        </td>
                    </tr>
                 `);

            });
        }

        $('.product_type').change(function(){

            let pptype = $(this).val();
            if(pptype == 'simple'){
                $('.simple_show').show();
                $('.variation_show').hide();
            }else{
                $('.simple_show').hide();
                $('.variation_show').show();
            }

        }).change();


        $('.colors').change(function(){
            setCombinations();
        });

        $('.combination').click(function(){
            // setCombinations();
        });

        $(".variations").delegate(".type_delete_button", "click", function(){
            $(this).parent().parent().remove();
            setCombinations();
        });

        $(".combination_list").delegate(".combination_delete_button", "click", function(){
            $(this).parent().parent().remove();
        });


        $(".variations").delegate(".single_attribute", "change", function(){
            setCombinations();
        });


        $('.create_type').click(function(){
            let selected_types_id = $('.attribute_types').val();
            let findtypeid = $(`.type_id${selected_types_id}`);
            if(findtypeid[0]){
                alert('Cannot Add Duplicate Type');
            }else{
                getAttributes(selected_types_id);
            }
        });


        $('.form-submit-button').click(function(){
             $('.my_product_form').submit();
        });

    </script>
    <script type="text/javascript">



    </script>
@endsection
