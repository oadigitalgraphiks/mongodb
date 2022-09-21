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

                                    <a href="{{route('admin.categories.create')}}" class="btn btn-primary">Add New</a>

                                    <div class="mx-1 dropdown">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i></button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <button type="button" class="dropdown-item action_button ">Delete</button>
                                        </div>
                                    </div>

                                  </div>
                            </div>

                            <div class="card-body pt-0">
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                        data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                                        value="1" />
                                                </div>
                                            </th>
                                            <th class="">{{translate('Image')}}</th>
                                            <th class="min-w-200px">{{translate('Name')}}</th>
                                            <th class="text-center">{{translate('Order')}}</th>
                                            <th class="text-center">{{translate('Featured')}}</th>
                                            <th class="text-center">{{translate('Status')}}</th>
                                            <th class="text-end min-w-70px">{{translate('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-bold text-gray-600">
                                        @foreach ($data as $key => $item)
                                            <tr>
                                                <td>
                                                    <div
                                                        class="row_selected_checkbox form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class=" form-check-input" type="checkbox" value="{{$item->id}}" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <img class="img-fluid" src="{{ uploaded_asset($item->logo)}}" />
                                                </td>
                                                <td>{{ $item->getTranslation('name') }}</td>
                                                <td>{{ $item->sorting}}</td>
                                                <td>{{ $item->featured}}</td>
                                                <td>{{ $item->status}}</td>
                                            
                                                
                                                <td class="text-end">
                                                    <a href="{{ route('admin.categories.edit',$item->id)}}" class="menu-link px-3"><i class="fa-lg text-primary fas fa-edit" ></i></a>

                                                    <a data-href="{{ route('admin.categories.destroy',$item->id)}}" class="confirm-delete bg-white border-0 menu-link px-3">
                                                                <i  class="text-danger fa-lg far fa-trash-alt" ></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    @foreach ($item->children as $child)

                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="row_selected_checkbox form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class=" form-check-input" type="checkbox" value="{{$child->id}}" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img class="img-fluid" src="{{ uploaded_asset($child->logo)}}" />
                                                        </td>
                                                        <td>--- {{ $child->getTranslation('name') }}</td>
                                                        <td>{{ $item->sorting}}</td>
                                                        <td>{{ $item->featured}}</td>
                                                        <td>{{ $item->status}}</td>
                                                        
                                                        
                                                        <td class="text-end">
                                                            <a href="{{ route('admin.categories.edit',$child->id)}}" class="menu-link px-3"><i class="fa-lg text-primary fas fa-edit" ></i></a>
    
                                                            <a data-href="{{ route('admin.categories.destroy',$child->id)}}" class="confirm-delete bg-white border-0 menu-link px-3">
                                                                        <i  class="text-danger fa-lg far fa-trash-alt" ></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
    
    
                                            @endforeach

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

        $('.saerch_data').change(function(){
            $('.search-form').submit();
        });


        $('.action_button').click(function(){

            let selected = [];
            $('.row_selected_checkbox input:checked').each(function() {
                selected.push($(this).attr('value'));
            });

            if(selected.length == 0){
                alert('Please Select Value');
                return false;
            }

            window.location = "{{route('admin.categories.delete')}}?ids="+selected.toString();
        });
    
    </script>
@endsection
