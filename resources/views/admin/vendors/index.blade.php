@extends('admin.layouts.app')

@section('content')

<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate("All Vendors")}}
                </h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Vendors</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <form class="" id="sort_customers" action="" method="GET">
                <div class="card card-flush">

                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="fas fa-search position-absolute ms-4 fs-4"></i>
                            <input type="text" class="form-control form-control-solid w-250px ps-14" id="search" name="search" @isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type & Enter') }}" />
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <a href="{{route('admin.vendors.create')}}" class="btn btn-primary">Add New Vendors</a>
                            <div class="dropdown">
                                <button class="btn btn-secondary " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right mt-2" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item fs-5" href="#" onclick="bulk_confrim()">{{translate('Delete selection')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                <thead>
                                    <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">#</th>
                                        <th class="min-w-200px">{{ translate('Name') }}</th>
                                        <th class="text-center min-w-75px">{{ translate('Email Address') }}</th>
                         
                                        <th class="text-center min-w-100px">{{ translate('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                    @foreach ($users as $key => $user)
                                        @if ($user != null)
                                            <tr>
                                                <td>{{$key + 1}}
                                                    <div
                                                        class="d-none form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input check-one" type="checkbox" name="id[]" value="{{ $user->id }}" />
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <span class="fw-bolder">
                                                        <a href="#" class="symbol symbol-50px">
                                                            {{ $user->name }}
                                                        </a>
                                                    </span>
                                                </td>
                                                <td class="text-center pe-0">
                                                    <span class="fw-bolder">
                                                        {{ $user->email }}
                                                    </span>
                                                </td>
                                              
                                             
                                                <td class="text-center">

                                                @if ($user->status != 1)
                                                    <a class="px-1" href="{{route('admin.vendors.status',$user->id)}}" data-toggle="tooltip" title="{{ translate('Ban this Vendor')}}"><i class="text-danger fa-lg fas fa-lock"></i></a>
                                                @else
                                                    
                                                 <a class="px-1" data-toggle="tooltip" title="{{ translate('Unban this Vendor') }}" href="{{route('admin.vendors.status',$user->id)}}" >
                                                    <i class="text-success fas fa-lock-open" ></i>
                                                </a>

                                                @endif
                                                    
                                                <a data-toggle="tooltip" title="{{ translate('Login As Vendor')}}" href="{{route('admin.vendors.login', encrypt($user->id))}}" class="px-1"> <i class=" text-warning fa-lg fas fa-power-off
                                                    " ></i>
                                                   </a>

                                                  <a data-toggle="tooltip" title="{{ translate('Edit Vendor') }}" href="{{route('admin.vendors.edit',$user->id)}}" class=""><i class="px-1 fa-lg text-primary fas fa-edit"></i></a>

                                                  <a data-toggle="tooltip" title="{{ translate('Delete Vendor') }}"  data-href="{{route("admin.vendors.delete",$user)}}"  class="px-1 confirm-delete"><i class="text-danger fa-lg far fa-trash-alt"></i></a>   

                                                  <button class="px-1 bg-white border-0"  type="button" data-toggle="modal" data-target="#profile_modal{{$user->id}}" ><i class="text-primary fa-lg far fa-user" ></i></button>

                                                  <div class="modal fade" id="profile_modal{{$user->id}}"  aria-labelledby="profile_modal" aria-hidden="true">
                                                     <div class="modal-dialog">
                                                              <div class="modal-content" id="profile-modal-content">
                                                                <div class="modal-body">
                                                                  @include('admin.vendors.modal', ['user' => $user])
                                                                </div>                                          
                                                            </div>
                                                     </div>
                                                  </div>
                                                </td>
                                            </tr>

                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="aiz-pagination">
                            {{ $users->appends(request()->input())->links() }}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </div>

  <div class="modal fade" id="bulk-delete-modal" tabindex="-1" aria-labelledby="delete-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">{{translate('Delete Confirmation')}}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mt-1">{{translate('Are you sure to bulk delete ?')}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ translate('Cancel') }}</button>
                    <a href="" type="button" id="bulk-delete-link" class="btn btn-danger">{{ translate('Delete!') }}</a>
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

        // $(document).on("change", ".check-all", function() {
        //     if (this.checked) {
        //         // Iterate each checkbox
        //         $('.check-one:checkbox').each(function() {
        //             this.checked = true;
        //         });
        //     } else {
        //         $('.check-one:checkbox').each(function() {
        //             this.checked = false;
        //         });
        //     }

        // });

        // function sort_customers(el) {
        //     $('#sort_customers').submit();
        // }

    

       

      
    </script>
@endsection
