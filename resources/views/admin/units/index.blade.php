@extends('admin.layouts.app')
@section('content')

    <!--begin::Content-->
    <div class="d-flex flex-column flex-column-fluid" id="kt_content">

        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate('All Units')}}</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">{{translate('home')}}</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary" href="{{route('admin.products.index')}}">{{translate('products')}}</a></li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary" href="{{route('admin.units.index')}}">{{translate('units')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
       
       
        <!--begin::Post-->
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <div id="kt_content_container" class="container-xxl">
                        <div class="card card-flush">
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <div class="card-title">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="fa fa-search  position-absolute ms-4"></i>
                                        <form class="search-form" >
                                            <input type="text" class="saerch_data form-control form-control-solid w-250px ps-14"
                                                placeholder="Search" id="search" name="search" value="{{request()->has('search')? request()->search:''}}" />
                                        </form>
                                    </div>
                                    
                                </div>
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <span class="text-muted"> {{ translate('Displaying') }}  

                                        {{ ($data->currentPage() > 1) ? (($data->currentPage()-1) * $data->perPage()) : ((count($data) > 0) ? 1 : 0) }} -
                                        
                                        {{ ($data->currentPage() > 1) ? (($data->currentPage()-1) * $data->perPage() + count($data)) : count($data)}} {{ translate('of') }} <span class="count_show"> {{$data->total()}} </span> 
                                        
                                        {{ translate('Records') }}</span>
                                    <a href="{{route('admin.units.create')}}" class="btn btn-primary">{{translate('Add New')}}</a>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                    <thead>
                                        <tr class="text-start  fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">#</th>
                                            <th class="">{{translate('Image')}}</th>
                                            <th class="min-w-200px">{{translate('Name')}}</th>
                                            <th class="text-center">{{translate('Order')}}</th>
                                            <th class="text-center">{{translate('Active')}}</th>
                                            <th class="text-end min-w-70px">{{translate('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold text-gray-600">
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>
                                                    <img style="width: 51px;height: 36px;" class="img-fluid" src="{{ uploaded_asset($item->logo)}}" />
                                                </td>
                                                <td>{{ $item->getTranslation('name') }}</td>
                                                <td class="text-center">{{ $item->sorting}}</td>
                                                <td> 
                                                    <span class="fw-bolder ms-3">
                                                        <label class=" form-check form-switch form-check-custom form-check-solid d-block">
                                                        <input class="onStatuChange form-check-input" value="{{$item->id}}" type="checkbox" {{$item->active == '1' ? 'checked' : ''}} /> </label>
                                                        </span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ route('admin.units.edit',$item->id)}}" class="btn btn-icon btn-bg-light px-3"><i class="fa-lg text-primary fas fa-edit" ></i></a>

                                                    <a data-href="{{ route('admin.units.destroy',$item->id)}}" class="confirm-delete btn btn-icon btn-bg-light px-3">
                                                        <i  class="text-danger fa-lg far fa-trash-alt" ></i>
                                                    </a>
                                                </td>

                                                </tr>
                                          @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class="pagination pt-3" >
                            {{ $data->appends(request()->input())->links('admin.components.pagination') }}
                        </div>



                    </div>
                </div>
            </div>
         </div>
       </div>
    </div>

@endsection
@section('modal')
    @include('admin.components.delete_modal')
@endsection



@section('script')

<script type="text/javascript">
     (function($){

                $('.saerch_data').change(function(){
                    $('.search-form').submit();
                });

               

    })(jQuery); 
    </script>
@endsection
