@extends('admin.layouts.app')

@section('content')

    <div class="d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Brands</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Products</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">Brands</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form class="" id="sort_brands" action="" method="GET">
                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="fas fa-search position-absolute ms-4 fs-4"></i>
                                    <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Brand" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}"@endisset/>
                                </div>
                            </div>
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <a href="{{route('admin.brands.create')}}" class="btn btn-primary">{{translate('Add New Brand')}}</a>
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
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                                    value="1" />
                                            </div>
                                        </th>
                                        <th class="min-w-200px">{{translate('Brand')}}</th>
                                        <th class="text-end">{{translate('Options')}}</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                    @foreach ($brands as $key => $brand)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input check-one" type="checkbox" name="id[]" value="{{ $brand->id }}" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{ route('admin.brands.edit',$brand->id)}}" class="symbol symbol-50px">
                                                        <span class="symbol-label" style="background-image:url({{ uploaded_asset($brand->logo) }});"></span>
                                                    </a>
                                                    <div class="ms-5">
                                                        <a href="{{ route('admin.brands.edit',$brand->id) }}" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">{{ $brand->getTranslation('name') }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <a href="{{ route('admin.brands.edit',$brand->id) }}" data-toggle="tooltip" title="{{ translate('Edit Brand') }}" class="btn btn-icon btn-bg-light btn-color-primary btn-active-color-primary btn-sm me-1">
                                                    <i class="far fa-edit"></i>
                                                </a>

                                                <a href="javascript:void(0)" data-href="{{ route('admin.brands.destory', $brand->id) }}" data-toggle="tooltip" title="{{ translate('Delete Brand') }}" class="btn btn-icon btn-bg-light btn-color-danger btn-active-color-danger btn-sm me-1 confirm-delete">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

        function bulk_confrim(){
            $("#bulk-delete-modal").modal('show',{
                backdrop:'static'
            });
            $('#bulk-delete-link').attr('href','javasecript:void(0)');
            $('#bulk-delete-link').attr('onclick','bulk_delete()');
        }

        function bulk_delete() {
            var data = new FormData($('#sort_brands')[0]);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.bulk-brand-delete') }}",
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

        function sort_brands(el) {
            $('#sort_brands').submit();
        }
    </script>
@endsection
