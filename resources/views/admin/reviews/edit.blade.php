@extends('admin.layouts.app')

@section('content')

<!--begin::Content-->
<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate('Reviews')}}</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">{{translate('home')}}</a>
                    </li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary" href="{{route('admin.products.index')}}">{{translate('prdoucts')}}</a></li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary" href="{{route('admin.reviews.index')}}">{{translate('reviews')}}</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                <form action="{{ route('admin.reviews.update', $data->id)}}" method="POST" > 
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                      
                        <!--begin::Main column-->
                            <div class="card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{translate('Review')}}</h2>
                                    </div>
                                </div>
                            
                                <div class="card-body pt-0">
                            
                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Message') }}</label>
                                        <textarea name="message" rows="5" class="form-control mb-2">{{$data->message}}</textarea>
                                    </div>

                                </div>
                            
                                <div class="text-center ">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update')}}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection