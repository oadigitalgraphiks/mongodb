@extends('admin.layouts.app')

@section('content')

<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{ translate('Add New Brand') }}</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary"> {{ translate('home') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{translate('products')}}</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">{{translate('brands')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl ">
            <form class="form d-flex flex-column flex-lg-row gap-7 gap-lg-10" action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{translate('Brand')}}</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Brand Name') }}</label>
                                <input type="text" placeholder="{{ translate('Name') }}" id="name" name="name" class="form-control mb-2" required>
                                <div class="text-muted fs-7">{{translate('A brand name is required and recommended to be unique')}}.</div>
                                @if($errors->has('slug'))
                                    <div class="error  text-danger">{{ $errors->first('slug') }}</div>
                                @endif
                            </div>
                            <div class="fv-row mb-2">
                                <label class="form-label">{{ translate('Logo') }}</label>
                                <div class="dropzone" id="kt_ecommerce_add_product_mediaa"
                                    data-toggle="aizuploader" data-type="image">
                                    <div class="dz-message needsclick">
                                        <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                        <input type="hidden" name="logo" class="selected-files">
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bolder text-gray-900 mb-1">{{translate('Drop files here or click to upload.')}}</h3>
                                            <span class="fs-7 fw-bold text-gray-400">{{translate('Brand Logo')}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ translate('SEO Options') }}</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-10">
                                <label class="form-label">{{ translate('Meta Title') }}</label>
                                <input type="text" class="form-control mb-2" name="meta_title" placeholder="{{ translate('Meta Title') }}" />
                                <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
                            </div>
                            <div class="mb-10">
                                <label class="form-label">{{ translate('Meta Description') }}</label>
                                <textarea name="meta_description" rows="5" class="form-control mb-2"></textarea>
                                <div class="text-muted fs-7">{{translate("Set a meta tag description to the category for increased SEO ranking")}}.</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">

                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                            <span class="indicator-label">{{ translate('Save') }}</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
