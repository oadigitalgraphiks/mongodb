@extends('admin.layouts.app')

@section('content')

<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate("All Customers")}}
                </h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Customers</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Customers List</li>
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
                            <a href="{{route('admin.customers.create')}}" class="btn btn-primary">Add New Customer</a>
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
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input check-all" type="checkbox" />
                                            </div>
                                        </th>
                                        <th class="min-w-200px">{{ translate('Name') }}</th>
                                        <th class="text-center min-w-75px">{{ translate('Email Address') }}</th>
                                        <th class="text-center min-w-100px">{{ translate('Options') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                    @foreach ($users as $key => $user)
                                        @if ($user != null)
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input check-one" type="checkbox"
                                                            name="id[]" value="{{ $user->id }}" />
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
                                                    @if ($user->banned != 1)
                                                        <a href="#" data-toggle="tooltip" title="{{ translate('Ban this Customer') }}" class="btn btn-icon btn-bg-light btn-color-primary btn-active-color-danger btn-sm me-1" onclick="confirm_ban('{{ route('admin.customers.ban', encrypt($user->id)) }}');">
                                                            <i class="fas fa-lock-open"></i>
                                                        </a>
                                                    @else
                                                        <a href="#" data-toggle="tooltip" title="{{ translate('Unban this Customer') }}" class="btn btn-icon btn-bg-light btn-color-danger btn-active-color-primary btn-sm me-1" onclick="confirm_unban('{{ route('admin.customers.ban', encrypt($user->id)) }}');">
                                                            <i class="fas fa-lock"></i>
                                                        </a>
                                                    @endif
                                                    <a href="{{ route('admin.customers.login', encrypt($user->id)) }}" data-toggle="tooltip" title="{{ translate('Login this Customer') }}" class="btn btn-icon btn-bg-light  btn-color-warning  btn-active-color-warning btn-sm me-1">
                                                        <i class="fas fa-power-off"></i>
                                                    </a>

                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm confirm-delete" data-href="{{route("admin.customer.delete",$user)}}">
                                                       <i class="far fa-trash-alt"></i>
                                                    </a>

                                                </td>
                                                <!--end::Action=-->
                                            </tr>
                                        @endif
                                    @endforeach
                                    <!--end::Table row-->
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <div class="aiz-pagination">
                            {{ $users->appends(request()->input())->links() }}
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
            </form>
            <!--end::Products-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>


    <!-- Modal -->
    <div class="modal fade" id="confirm-ban" tabindex="-1" aria-labelledby="confirm-ban" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ translate('Confirmation') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ translate('Do you really want to ban this Customer?') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ translate('Cancel') }}</button>
                    <a type="button" id="confirmation" class="btn btn-primary">{{ translate('Proceed!') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm-unban" tabindex="-1" aria-labelledby="confirm-unban" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h6">{{ translate('Confirmation') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ translate('Do you really want to unban this Customer?') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ translate('Cancel') }}</button>
                    <a type="button" id="confirmationunban" class="btn btn-primary">{{ translate('Proceed!') }}</a>
                </div>
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
        $(document).on("change", ".check-all", function() {
            if (this.checked) {
                // Iterate each checkbox
                $('.check-one:checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $('.check-one:checkbox').each(function() {
                    this.checked = false;
                });
            }

        });

        function sort_customers(el) {
            $('#sort_customers').submit();
        }

        function confirm_ban(url) {
            // console.log(url);
            // return
            $('#confirm-ban').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('confirmation').setAttribute('href', url);
        }

        function confirm_unban(url) {
            $('#confirm-unban').modal('show', {
                backdrop: 'static'
            });
            document.getElementById('confirmationunban').setAttribute('href', url);
        }

        function bulk_confrim(){
            $("#bulk-delete-modal").modal('show',{
                backdrop:'static'
            });
            $('#bulk-delete-link').attr('onclick','bulk_delete()');
        }

        function bulk_delete() {
            var data = new FormData($('#sort_customers')[0]);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.bulk-customer-delete') }}",
                type: 'POST',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response == 1) {
                        location.reload();
                    }
                }
            });
        }
    </script>
@endsection
