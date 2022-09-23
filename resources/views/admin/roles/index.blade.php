@extends('admin.layouts.app')
@section('content')

    <!--begin::Content-->
    <div class="d-flex flex-column flex-column-fluid" id="kt_content">

        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate('All Roles')}}</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">{{translate('Home')}}</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-300 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted"><a class="text-muted text-hover-primary" href="{{route('admin.roles.index')}}">{{translate('Roles')}}</a></li>
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
                                    <a href="{{route('admin.roles.create')}}" class="btn btn-primary">{{translate('Add New')}}</a>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">#</th>
                                            <th class=" text-center min-w-200px">{{translate('Name')}}</th>
                                            <th class="text-center">{{translate('Order')}}</th>
                                            <th class="text-center">{{translate('Active')}}</th>
                                            <th class="text-end min-w-70px">{{translate('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold text-gray-600">
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{ $item->getTranslation('name') }}</td>
                                                <td class="text-center">{{ $item->sorting}}</td>
                                                <td class="text-center" >{{ $item->active == '1' ? 'Active' :'Not Active'}}</td>
                                                <td class="text-end">
                                                    <a href="{{ route('admin.roles.edit',$item->id)}}" class="menu-link px-3"><i class="fa-lg text-primary fas fa-edit" ></i></a>

                                                  

                                                    <a data-href="{{ route('admin.roles.destroy',$item->id)}}" class="confirm-delete bg-white border-0 menu-link px-3">
                                                        <i  class="text-danger fa-lg far fa-trash-alt" ></i>
                                                    </a>

                                                    <a href="{{ route('admin.roles.permissions',$item->id)}}" class="bg-white border-0 menu-link px-3">
                                                        <i  class="text-danger fa-lg far fa-trash-alt" ></i>
                                                        </a>
                                                </td>
                                            </tr>
                                          @endforeach
                                    </tbody>
                                </table>
                            </div>
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
