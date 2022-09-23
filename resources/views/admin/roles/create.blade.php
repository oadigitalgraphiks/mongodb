@extends('admin.layouts.app')

@section('content')

<!--begin::Content-->
<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate('Colors')}}</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">{{translate('Home')}}</a>
                    </li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-muted"> <a class="text-muted text-hover-primary"  href="{{route('admin.roles.index')}}"> {{translate('Roles')}}</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form  action="{{route('admin.roles.store')}}" method="POST" > @csrf
        
                        <!--begin::Main column-->
                            <div class="card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{translate('Role')}}</h2>
                                    </div>
                                </div>
                            
                                <div class="card-body pt-0">
                                    
                                    <div class="mb-5 fv-row">
                                        <label class="required form-label">{{translate('Name')}}</label>
                                        <input type="text" placeholder="{{ translate('Name')}}" name="name" class="form-control mb-2" required>
                                        @if($errors->has('name'))
                                        <div class="error  text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                    </div>
                                
                                    <div class="mb-10">
                                        <label class="required form-label">{{translate('Slug')}}</label>
                                        <input type="text" class="form-control mb-2" placeholder="{{translate('Slug')}}" id="slug" name="slug" required  />
                                        @if($errors->has('slug'))
                                        <div class="error  text-danger">{{ $errors->first('slug') }}</div>
                                    @endif
                                    </div>

                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Active') }}</label>
                                        <select data-control="select2" name="active" class="form-select form-control">
                                            <option value="1">Active</option> 
                                            <option value="0">Not Active</option>
                                        </select>
                                        @if($errors->has('status'))
                                        <div class="error  text-danger">{{ $errors->first('status') }}</div>
                                    @endif
                                    </div>

                                    <div class="mb-10">
                                        <label class="required form-label">{{translate('Sorting')}}</label>
                                        <input type="number" required class="form-control mb-2" placeholder="{{translate('Sorting')}}" value="0" name="sorting" required />
                                        @if($errors->has('sorting'))
                                        <div class="error  text-danger">{{ $errors->first('sorting') }}</div>
                                    @endif

                                    </div>
        
                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Description') }}</label>
                                        <textarea name="description" rows="5" class="form-control mb-2"></textarea>
                                        @if($errors->has('description'))
                                        <div class="error  text-danger">{{ $errors->first('description') }}</div>
                                    @endif
                                    </div>
                                </div>
                                
                                <div class="text-center ">
                                    <button type="submit" class="btn btn-primary">{{ translate('Submit')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection