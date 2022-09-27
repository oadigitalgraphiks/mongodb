@extends('admin.layouts.app')

@section('content')

<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate("Countries")}}</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">{{translate("Dashboard")}}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{translate("Setting")}}</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted"><a href="{{route("admin.countries.index")}}" class="text-muted">{{translate("Countries")}}</a></li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">{{translate("Country Create")}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl ">
            <form class="form d-flex flex-column flex-lg-row gap-7 gap-lg-10" action="{{ route('admin.countries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{translate('Country')}}</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Country Name') }}</label>
                                <input type="text" placeholder="{{ translate('Name') }}" id="name" name="name" class="form-control mb-2" required>
                                <div class="text-muted fs-7">{{translate('A Country name is required and recommended to be unique')}}.</div>
                                @if($errors->has('name'))
                                    <div class="text-danger fs-7">{{ $errors->first('name') }}.</div>
                                @endif
                            </div>
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Country Code') }}</label>
                                <input type="text" placeholder="{{ translate('Code') }}" id="code" name="code" class="form-control mb-2" required>
                                <div class="text-muted fs-7">{{translate('A Country code is required and recommended to be unique')}}.</div>
                                @if($errors->has('code'))
                                    <div class="text-danger fs-7">{{ $errors->first('code') }}.</div>
                                @endif
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
