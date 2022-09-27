@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate("Language Edit")}}</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">{{translate("Dashboard")}}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{translate("Settings")}}</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark"><a href="{{ route("admin.languages.index") }}" class="text-muted">{{translate("Languages")}}</a></li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">{{translate("Language Edit")}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row g-5 g-xl-8">
        <div class="col-xl-6 mx-auto">
            <div class="card card-flush">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <h5 class="mb-0 h6">{{translate('Language Information')}}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.languages.update', $language->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row mb-2">
                            <div class="col-xl-3">
                                <label for="required kt_ecommerce_add_product_store_template"
                                class="form-label">{{ translate('Name') }}</label>
                            </div>
                            <div class="col-xl-9">
                                <input type="text" class="form-control" name="name" value="{{ $language->name }}" placeholder="{{ translate('Name') }}" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-xl-3">
                                <label for="required kt_ecommerce_add_product_store_template"
                                class="form-label">{{ translate('Code') }}</label>
                            </div>
                            <div class="col-xl-9">
                                @php
                                    $languagesArray = \App\Models\Language::pluck('code')->toarray();
                                    if (($key = array_search($language->code, $languagesArray)) !== false) {
                                        unset($languagesArray[$key]);
                                    }
                                @endphp
                                <select class="form-select mb-2" data-control="select2" name="code" data-live-search="true">
                                    @foreach(\File::files(base_path('public/admin/assets/img/flags')) as $path)
                                        @if(!in_array(pathinfo($path)['filename'],$languagesArray))
                                        <option value="{{ pathinfo($path)['filename'] }}" @if($language->code == pathinfo($path)['filename']) selected @endif>
                                            <div class=''>
                                                <img src='{{ asset('assets/img/flags/'.pathinfo($path)['filename'].'.png') }}' class='mr-2'>
                                                <span>{{ strtoupper(pathinfo($path)['filename']) }}</span>
                                            </div>
                                        </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">{{translate('Save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
