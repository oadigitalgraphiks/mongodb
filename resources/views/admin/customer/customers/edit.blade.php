@extends('admin.layouts.app')

@section('content')

<!--begin::Content-->
<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Customers</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">eCommerce</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Catalog</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Customer Add</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl ">
            <!--begin::Post-->
            <form class="form d-flex flex-column flex-lg-row gap-7 gap-lg-10"
                action="{{ route('admin.customers.update',$customer->id) }}" method="PATCH" enctype="multipart/form-data">
                @csrf
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{translate('Customer')}}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 row">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row col-6">
                                <label class="required form-label">{{ translate('First Name') }}</label>
                                <input type="text" placeholder="{{ translate('First Name') }}" id="first_name" name="first_name"
                                    class="form-control mb-2" required>
                            </div>
                            <div class="mb-5 fv-row col-6">
                                <label class="required form-label">{{ translate('Last Name') }}</label>
                                <input type="text" placeholder="{{ translate('Name') }}" id="last_name" name="last_name"
                                    class="form-control mb-2" required>
                            </div>

                            <div class="mb-5 fv-row col-6">
                                <label class="required form-label">{{ translate('User Name') }}</label>
                                <input type="email" placeholder="{{ translate('User Name') }}" id="user_name" name="user_name"
                                    class="form-control mb-2" required>
                            </div>

                            <div class="mb-5 fv-row col-6">
                                <label class="required form-label">{{ translate('Email') }}</label>
                                <input type="email" placeholder="{{ translate('Email') }}" id="email" name="email"
                                    class="form-control mb-2" required>
                                <div class="text-muted fs-7">{{translate('A Email must be an Unique')}}.
                                </div>
                            </div>

                            <div class="mb-5 fv-row col-6">
                                <label class="required form-label">{{ translate('Password') }}</label>
                                <input type="password" placeholder="{{ translate('Password') }}" id="password" name="password" class="form-control mb-2" required>
                            </div>

                            <!--begin::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>

                    <!--begin::Media-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h3>{{translate('Media')}}</h3>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="fv-row mb-2">
                                <label class="form-label">{{ translate('User Profile') }}</label>
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_ecommerce_add_product_mediaa"
                                    data-toggle="aizuploader" data-type="image">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <!--begin::Icon-->
                                        <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <input type="hidden" name="image" class="selected-files">
                                        <div class="ms-4">
                                            <span class="fs-7 fw-bold text-gray-400">{{translate('User Logo')}}</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->
                                <div class="file-preview box sm">
                                </div>


                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Media-->
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">

                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                            <span class="indicator-label">{{ translate('Add Customers') }}</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
        </div>
        <!--end::Container-->
    </div>
</div>

@endsection
