@extends('admin.layouts.app')
@section('content')

<!--begin::Content-->
<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
                  <a class="text-muted" href="{{route('admin.roles.index')}}">{{translate('All Roles')}}</a></h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">{{translate('Home')}}</a>
                    </li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-muted"> <a class="text-muted text-hover-primary"  href="{{route('admin.roles.index')}}">{{translate('Roles')}}</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <form action="{{ route('admin.roles.permission.update', $data->id)}}" method="POST" >  
                    
                    <div class="card card-flush mt-5">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <h5 class="mb-0 h6">Role Information</h5>
                        </div>
                    
                            <div class="form-group row container">
                                <label class="col-md-3 col-from-label" for="name">Name <i class="las la-language text-danger" title="Translatable"></i></label>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Name" id="name" name="name" class="form-control" value="Manager" required="">
                                </div>
                            </div>
                            <div class="form-group row border mt-10">
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Dashboard</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" checked="" name="role_menus[]" value="1">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Products</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" checked="" name="role_menus[]" value="2">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>All Products</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="4">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="2">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="3">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="7">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>duplicate</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="19">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>bulk-product-delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="71">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Add New Product</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="96">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>In House Products</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="97">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Seller Products</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="98">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Digital Products</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="99">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Inventory</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="106">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Bulk Import</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="93">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Category</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="10">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="8">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="9">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="10">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Bulk Export</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="94">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Brand</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="11">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="1">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="5">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="6">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Attribute</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="12">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="11">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="12">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="13">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit attribute value</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="14">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete attribute value</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="15">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>show</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="67">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Colors</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="13">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="16">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="17">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="18">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Product Reviews</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="14">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Sales</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="15">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>All Orders</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="16">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>show</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="20">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="21">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create shipment</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="22">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Inhouse orders</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="17">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Seller Orders</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="18">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Pick-up Point Order</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="19">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Refunds</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="88">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Refund Requests</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="89">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Approved Refunds</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="90">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>rejected Refunds</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="91">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Refund Configuration</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="92">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Customers</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="20">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Customer list</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="21">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>login</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="23">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>ban</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="24">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="25">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Sellers</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" checked="" name="role_menus[]" value="22">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>All Sellers</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="23">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>login</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="26">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>ban</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="27">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="28">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="66">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="68">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Payouts</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="24">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Seller Commission</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="25">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Seller Verification Form</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="26">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Popup</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="117">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Discount</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="118">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Promocode</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="119">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Uploaded Files</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="27">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Reports</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="28">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>In House Product Sale</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="29">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Seller Products Sale</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="30">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Products Stock</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="31">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Products Wishlist</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="32">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>User Searches</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="33">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Commission History</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="34">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Wallet Recharge History</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="35">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Blog System</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="36">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>All Posts</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="37">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Categories</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="38">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Marketing</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="39">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Flash deals</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="40">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Newsletters</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="41">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Subscribers</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="42">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Coupon</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="43">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Contact List</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="116">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Website Setup</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" checked="" name="role_menus[]" value="44">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Manage Menus</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="45">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Slider</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="46">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="29">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="30">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="31">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Pages</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="48">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="35">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="36">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="37">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Header</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="50">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Footer</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="51">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Appearance</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="52">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Support</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="101">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Ticket</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="102">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Product Queries</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="103">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Setup &amp; Configurations</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="55">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>General Settings</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="56">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Warehouse</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="105">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="72">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="73">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="74">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="75">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="76">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Features activation</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="58">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Vat &amp; TAX</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="59">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="51">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="52">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="53">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Pickup point</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="60">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>SMTP Settings</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="61">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Payment Methods</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="63">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Languages</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="53">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="41">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="42">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="43">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>show</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="44">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>File System Configuration</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="64">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Currency</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" checked="" name="role_menus[]" value="54">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="45">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" checked="" name="role_permissions[]" value="46">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Social media Logins</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="65">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Analytics Tools</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="66">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Facebook</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="68">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Shipping</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="72">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Google reCAPTCHA</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="71">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>Staffs</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="77">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>All staffs</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="78">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="57">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="58">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="59">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Staff permissions</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="79">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>create</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="60">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>edit</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="61">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                        <div class="col-md-4">
                                                                            <h5>delete</h5>
                                                                        </div>
                                                                        <div class="col-md-8 ml-3">
                                                                            <label class="form-check form-switch form-switch-sm form-check-solid mb-5 d-block">
                                                                                <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                                    <input class="form-check-input inner-fields" type="checkbox" name="role_permissions[]" value="62">
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                                <div class="col-md-4" style="line-height:20px">
                                        <div class="card card-flush py-2">
                                            <div class="card-header border align-items-center py-5 gap-2 gap-md-5">
                                                <h5>System</h5>
                                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                        <input class="form-check-input main-menu" type="checkbox" name="role_menus[]" value="80">
                                                    </span>
                                                </label>
                                                
                                            </div>
                                                                                        <div class="card-body border">
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Server status</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="81">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Admin Menus</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="95">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Themes &amp; Module</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="100">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Permissions</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="104">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                        <div class="card">
                                                            <div class="card-header mt-2 p-0">
                                                                <div class="col-md-4">
                                                                    <h5>Activity Log</h5>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                                        <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                            <input class="form-check-input sub-menu" type="checkbox" name="role_menus[]" value="107">
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                </div>
                                    </div>
                                                        </div>
                            <div class="form-group mb-0 text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        
                    </div>
                       
            
                  
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection