@extends('admin.layouts.app')

@section('content')

<!--begin::Content-->
<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    

    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Categories</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-muted"> <a class="text-muted text-hover-primary"  href="{{route('admin.products.index')}}">Products</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form  action="{{route('admin.categories.store')}}" method="POST" > @csrf
        
                        <!--begin::Main column-->
                            <div class="card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{translate('Category')}}</h2>
                                    </div>
                                </div>
                            
                                <div class="card-body pt-0">
                                    
                                    <div class="mb-5 fv-row">
                                        <label class="required form-label">{{translate('Name')}}</label>
                                        <input type="text" placeholder="{{ translate('Name')}}" name="name" class="form-control mb-2" required>
                                        @if($errors->has('name'))
                                        <div class="error text-danger">{{ $errors->first('name')}}</div>
                                        @endif
                                        
                                    </div>
                                
                                    <div class="mb-10">
                                        <label class="required form-label">{{translate('Slug')}}</label>
                                        <input type="text" class="slug form-control mb-2" placeholder="{{translate('Slug')}}"  name="slug" required  />
                                        @if($errors->has('slug'))
                                        <div class="error text-danger">{{ $errors->first('slug')}}</div>
                                       @endif
                                    </div>

                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Parent') }}</label>
                                        <select data-control="select2" name="parent" class="form-select form-control">
                                            <option value="0">{{ translate('None')}}</option> 
                                            @foreach ($category as $item)
                                              <option value="{{$item->id}}">{{$item->name}}</option>    
                                            @endforeach 
                                        </select>
                                    </div>

                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Active') }}</label>
                                        <select data-control="select2" name="active" class="form-select form-control">
                                            <option value="1">Active</option> 
                                            <option value="0">Not Active</option>
                                        </select>
                                    </div>

                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Featured') }}</label>
                                        <select data-control="select2" name="featured" class="form-select form-control">
                                            <option value="0">No</option> 
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>

                                    <div class="mb-10">
                                        <label class="required form-label">{{translate('Sorting')}}</label>
                                        <input type="number" required class="form-control mb-2" placeholder="{{translate('Sorting')}}" value="0" name="sorting" required />

                                    </div>
        
                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Description') }}</label>
                                        <textarea name="description" rows="5" class="form-control mb-2"></textarea>
                                    </div>

                                    <div class="fv-row mb-2">
                                        <label class="form-label">{{ translate('Image') }}</label>
                                        <div class="dropzone" id="kt_ecommerce_add_product_mediaa"
                                            data-toggle="aizuploader" data-type="image">
                                            <div class="dz-message needsclick">
                                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                <input type="hidden" name="logo" class="selected-files"
                                                    value="">
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">{{translate('Drop files here or click to
                                                        upload.')}}</h3>
                                                    <span class="fs-7 fw-bold text-gray-400">{{translate('Image')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
                                    </div>

                                    <div class="fv-row mb-2">
                                        <label class="form-label">{{ translate('Banner') }}</label>
                                        <div class="dropzone" id="kt_ecommerce_add_product_mediaa"
                                            data-toggle="aizuploader" data-type="image">
                                            <div class="dz-message needsclick">
                                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                <input type="hidden" name="banner" class="selected-files" />
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">{{translate('Drop files here or click to
                                                        upload.')}}</h3>
                                                    <span class="fs-7 fw-bold text-gray-400">{{translate('Banner')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="file-preview box sm">
                                        </div>
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

@section('script')

<script>
       $(".slug").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            var regExp = /\s+/g;
            Text = Text.replace(regExp,'-');
            $(".slug").val(Text);        
        });
</script>


@endsection
