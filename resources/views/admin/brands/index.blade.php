@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('/admin/assets/backend/css/confirm.css')}}">

@endSection

@section('content')

    <div class="d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1"> {{ translate('All Brands') }} </h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary"> {{ translate('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">{{translate('products')}}</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">{{translate('brands')}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
            
                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <form>
                                        <input type="text" class="search_data form-control form-control-solid w-250px ps-14"
                                            placeholder="Search" id="search" name="search" value="{{request()->has('search')? request()->search:''}}" />
                                    </form>
                                </div>
                            </div>
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <span class="text-muted"> {{ translate('Displaying') }}  
                                {{ ($data->currentPage() > 1) ? (($data->currentPage()-1) * $data->perPage()) : ((count($data) > 0) ? 1 : 0) }} -
                                    
                                {{ ($data->currentPage() > 1) ? (($data->currentPage()-1) * $data->perPage() + count($data)) : count($data)}} {{ translate('of') }} <span class="count_show"> {{$data->total()}} </span> 
                                {{ translate('Records') }}</span>

                                <a href="{{route('admin.brands.create')}}" class="btn btn-primary">{{translate('Add New')}}</a>

                                <div class="dropdown">
                                    <button class="btn btn-secondary " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right mt-2 actions">
                                       <button type="button" class="dropdown-item fs-5" data-action="delete" data-value="0" >{{translate('Delete')}}</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" >
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3"> <input class="bulk_check form-check-input" type="checkbox" />
                                            </div> 
                                        </th>
                                        <th class="min-w-200px">{{translate('Image')}}</th>
                                        <th class="min-w-200px">{{translate('Name')}}</th>
                                        <th class="text-center">{{translate('Featured')}}</th>
                                        <th class="text-center">{{translate('Active')}}</th>
                                        <th class="text-end">{{translate('Action')}}</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-bold text-gray-600 render_data">
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td>
                                                <div class="row_selected_checkbox form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class=" form-check-input" type="checkbox" value="{{$item->id}}"/>
                                                </div>
                                            </td>
                                            <td>
                                                <img style="width:50px"  src="{{uploaded_asset($item->logo)}}" class="" />
                                            </td>
                                            <td>
                                                {{ $item->getTranslation('name') }}
                                            </td>
                                            <td class="text-center">
                                                <span class="fw-bolder ms-3">
                                                <label class=" form-check form-switch form-check-custom form-check-solid d-block">
                                                <input class="featured_toggle form-check-input" 
                                                value="{{$item->id}}" type="checkbox" {{$item->featured == '1' ? 'checked' : ''}} /> </label>
                                                </span> 
                                            </td>

                                            <td class="text-center">
                                                <span class="fw-bolder ms-3">
                                                <label class=" form-check form-switch form-check-custom form-check-solid d-block">
                                                <input class="active_toggle form-check-input" value="{{$item->id}}" type="checkbox" {{$item->active == '1' ? 'checked' : ''}} /> </label>
                                                </span> 
                                            </td>

                                            <td class="text-end">
                                                <a href="{{ route('admin.brands.edit',$item->id) }}" data-toggle="tooltip" title="{{ translate('Edit Brand') }}" class="btn btn-icon btn-bg-light">
                                                    <i class="text-primary far fa-edit"></i>
                                                </a>

                                                <a href="javascript:void(0)" data-id="{{$item->id}}" data-toggle="tooltip" title="{{ translate('Delete Brand')}}" class="onDelete btn btn-icon btn-bg-light"><i class="text-danger far fa-trash-alt"></i>
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

    

@endsection
@section('script')
<script src="{{asset('/admin/assets/backend/js/confirm.js')}}"></script>

<script type="text/javascript">

(function($){


$('.bulk_check').change(function(){

    $('.search_data').change(function(){
        let search =  $(this).val();
        let route = "{{route('admin.brands.index')}}";
        window.location = route+'?search='+search; 
    });


    if($(this).prop("checked") == true){
        $('.row_selected_checkbox .form-check-input').prop("checked", true);
    }else if($(this).prop("checked") == false){
        $('.row_selected_checkbox .form-check-input').prop("checked", false);
    }
    });


    $('.actions button').click(function(){

            let action = $(this).attr("data-action"); 
            let value = $(this).attr("data-value"); 
            let idz = [];

            $('.row_selected_checkbox .form-check-input:checked').each(function() {
                idz.push($(this).val());
            });

            if(idz.length == 0){
                alert('Please Select Record');
                return false;
            }

            $.confirm({
            closeIcon: true, 
            title: false,
            content:'Are you sure to continue ?',
            buttons: { 
                    Ok:function(){
                        $.get("{{route('admin.brands.bulk')}}",
                        { 
                            idz:idz.toString(),
                            action:action,
                            value:value
                        }, function(data, status){
                            AIZ.plugins.notify('success','Success');
                            location.reload();
                        });
                    },
                    Cancel: {
                        action: function () {
                        }
                    }
                }
            });

        });


        $(".render_data").delegate(".featured_toggle", "change", function(){
            let id = $(this).val();
            $.get("{{route('admin.brands.bulk')}}",
                { 
                    idz:id,
                    action:'featured',
                    value: $(this).prop("checked") ? 1 : 0
                }, function(data, status){     
            });
        });

        $(".render_data").delegate(".active_toggle", "change", function(){
            let id = $(this).val();
            $.get("{{route('admin.brands.bulk')}}",
                { 
                    idz:id,
                    action:'active',
                    value: $(this).prop("checked") ? 1 : 0
                }, function(data, status){     
            });
        });


        // onDelete
      $(".render_data").delegate(".onDelete", "click", function(){

        let id = $(this).attr("data-id"); 

        $.confirm({
            closeIcon: true, 
            title: false,
            content:'Are you sure to continue ?',
            buttons: { 
                    Ok:function(){
                            $.get("{{route('admin.brands.bulk')}}",
                                { 
                                    idz:id,
                                    action:'delete',
                                    value:0
                                }, function(data, status){                   
                                    AIZ.plugins.notify('success','Record Deleted');
                                    location.reload();
                            });
                    },
                    Cancel: {
                        action: function () {
                            
                        }
                    }
                }
            });

        });


})(jQuery); 

       
    </script>
@endsection
