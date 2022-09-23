@extends('admin.layouts.app')
@section('content')

<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1"> {{ translate('Customer Add') }} </h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary"> {{ trans('Home') }} </a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark"> {{trans('Customers')}}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl ">
            <form class="form d-flex flex-column flex-lg-row gap-7 gap-lg-10"
                action="{{ route('admin.customers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{translate('Customer')}}</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0 row">
                            <div class="mb-5 fv-row col-6">
                                <label class="required form-label">{{ translate('Name') }}</label>
                                <input type="text" placeholder="{{ translate('Name') }}"  name="name"
                                    class="form-control mb-2" required>
                                @if($errors->has('name'))
                                    <div class="error  text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="mb-5 fv-row col-6">
                                <label class="required form-label">{{ translate('Email') }}</label>
                                <input type="email" placeholder="{{ translate('Email') }}" id="email" name="email"
                                    class="form-control mb-2" required>
                                @if($errors->has('email'))
                                    <div class="error  text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="mb-5 fv-row col-6">
                                <label class="required form-label">{{ translate('Password') }}</label>
                                <input type="password" placeholder="{{ translate('Password') }}" id="password" name="password" class="form-control mb-2" required>
                            </div>

                            <div class="mb-5 fv-row col-12 text-center">
                                <button type="submit" class="btn btn-primary">{{ translate('Submit') }}</button>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection