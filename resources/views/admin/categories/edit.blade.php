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
                  <a class="text-dark" href="{{route('admin.categories.index')}}">{{ translate('Edit Categories')}}</a></h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">{{ translate('Home')}}</a>
                    </li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"  href="{{route('admin.products.index')}}">{{ translate('Products')}}</a></li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary"  href="{{route('admin.categories.index')}}">{{ translate('Categories')}}</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="nav nav-tabs nav-fill border-light">
                        @foreach (languages() as $key => $language)
                            <li class="nav-item">
                                <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3" href="{{ route('admin.categories.edit',$data->id).'?lang='.$language->code }}">
                                    <img src="{{ asset('admin/assets/img/flags/' . $language->code . '.png') }}" height="11"
                                        class="mr-1">
                                    <span>{{ $language->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <br>

                <form action="{{ route('admin.categories.update', $data->id)}}" method="POST" > 
                      
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <input type="hidden" name="lang" value="{{ $lang }}">
                        
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
                                            <input type="text" placeholder="{{ translate('Name')}}" value="{{$data->getTranslation('name', $lang)}}"  name="name" class="title form-control mb-2" required>
                                            @if($errors->has('name'))
                                            <div class="error text-danger">{{ $errors->first('name')}}</div>
                                           @endif
                                        </div>
                                
                                    <div class="mb-10">
                                        <label class="required form-label">{{translate('Slug')}}</label>
                                        <input readonly type="text" class="slug form-control mb-2" placeholder="{{translate('Slug')}}" value="{{$data->slug}}" name="slug" required  />
                                            @if($errors->has('slug'))
                                            <div class="error text-danger">{{ $errors->first('slug')}}</div>
                                        @endif
                                    </div>
        
                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Description') }}</label>
                                        <textarea name="description" rows="5" class="form-control mb-2">{{$data->description}}</textarea>
                                    </div>

                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Parent') }}</label>
                                        <select data-control="select2" name="parent" class="form-select form-control">
                                            <option value="0">{{ translate('None')}}</option> 
                                            @foreach ($category as $item)
                                                @if($item->id != $data->id)
                                                <option @if($data->parent == $item->id) {{'selected'}} @endif  value="{{$item->id}}">{{$item->name}}</option>    
                                                @endif
                                            @endforeach                                          
                                        </select>
                                    </div>

                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Active') }}</label>
                                        <select data-control="select2" name="active" class="form-select form-control">
                                            <option @if($data->active == '1') {{'selected'}} @endif value="1"> {{ translate('Active') }} </option> 
                                            <option @if($data->active == '0') {{'selected'}} @endif value="0"> {{ translate('Not Active') }}</option>
                                        </select>
                                    </div>

                                    <div class="mt-3 mb-10">
                                        <label class="form-label">{{ translate('Featured') }}</label>
                                        <select data-control="select2" name="featured" class="form-select form-control">
                                            <option @if($data->featured == '0') {{'selected'}} @endif value="0"> {{ translate('No') }}</option> 
                                            <option @if($data->featured == '1') {{'selected'}} @endif value="1"> {{ translate('Yes') }}</option>
                                        </select>
                                    </div>

                                    <div class="mb-10">
                                        <label class="required form-label">{{translate('Sorting')}}</label>
                                        <input type="number" required class="form-control mb-2" placeholder="{{translate('Sorting')}}" value="{{$data->sorting}}" name="sorting" required />

                                    </div>
        
                                    <div class="fv-row mb-2">
                                        <label class="form-label">{{ translate('Image') }}</label>
                                        <div class="dropzone" id="kt_ecommerce_add_product_mediaa"
                                            data-toggle="aizuploader" data-type="image">
                                            <div class="dz-message needsclick">
                                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                <input type="hidden" name="logo" class="selected-files"
                                                    value="{{$data->logo}}">
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
                                                <input type="hidden" name="banner" class="selected-files"
                                                    value="{{$data->banner}}">
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

@section('script')
    <script>
       
        $(".title").keyup(function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            var regExp = /\s+/g;
            Text = Text.replace(regExp,'-');
            $(".slug").val(Text);        
        });

        $('.title').trigger('keyup');
    </script>
@endsection