@extends('admin.layouts.app')


@section('css')
<style>
    .form-check.form-check-custom {
        /* display: flex; */
        display: block!important;
    
    }
</style>
@endsection
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Product Form</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="http://localhost/oceanandseas/admin" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">eCommerce</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Catalog</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Add New Product</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="post d-flex flex-column-fluid" id="kt_post">
        

            <div id="kt_content_container" class="container-fluid">
                <form class="" id="sort_products" action="" method="GET">
                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control form-control-solid w-250px ps-14" id="search" name="search" placeholder="Type &amp; Enter">
                                </div>
                            </div>

                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <a href="{{route('admin.products.create')}}" class="btn btn-primary">Add New Product</a>
                              </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3 dataTable no-footer" id="kt_ecommerce_products_table">
                                    <thead>
                                        <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">#</th>
                                            <th class="min-w-200px">Product Name</th>
                                            <th class="min-w-200px">SKU</th>
                                            <th class="text-center min-w-75px">Added By</th>
                                            <th class="text-center min-w-100px">Status</th>
                                            <th class="text-center min-w-70px">Featured</th>
                                            <th class="text-center min-w-150px">Actions</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="fw-bold text-gray-600">
                                           @foreach ($products as $key => $item)
                                           <tr>
                                                <td>{{$key + 1}}</td>
                                                <td class="text-center" >{{$item->name}}</td>
                                                
                                                <td class="text-center pe-0">
                                                    <span class="fw-bolder">{{$item->sku}}</span>
                                                </td>

                                                <td class="text-center pe-0">
                                                    <span class="fw-bolder">Admin</span>
                                                </td>

                                                <td class="text-center pe-0">
                                                    {{ $item->status ? $item->status :'none'}} 
                                                </td>
                                                
                                                <td class="text-center pe-0">
                                                    {{ $item->featured == 1 ? 'Enabled' : 'Disabled'}} 
                                                </td>

                                                <td class="text-center">

                                                    <a href="{{route('admin.products.edit',$item->id)}}" class="btn btn-info">Edit
                                                    </a>

                                                    <form class="d-inline" action="{{ route('admin.products.destroy',$item->id) }}" method="POST">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                                                    <button class="btn btn-danger" type="submit" >Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="aiz-pagination">
                                
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                </form>
                <!--end::Products-->
            </div>
    
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('assets/backend/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    {{-- <script type="text/javascript">
        $('form').bind('submit', function(e) {
            // Disable the submit button while evaluating if the form should be submitted
            // $("button[type='submit']").prop('disabled', true);
            $("button[type='submit']").hide();

            var valid = true;

            if (!valid) {
                e.preventDefault();

                // Reactivate the button if the form was not submitted
                // $("button[type='submit']").button.prop('disabled', false);
                $("button[type='submit']").show();
            }
        });

        $("[name=shipping_type]").on("change", function() {
            $(".flat_rate_shipping_div").hide();

            if ($(this).val() == 'flat_rate') {
                $(".flat_rate_shipping_div").show();
            }

        });

        function add_more_customer_choice_option(i, name) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '{{ route('products.add-more-choice-option') }}',
                data: {
                    attribute_id: i
                },
                success: function(data) {
                    var obj = JSON.parse(data);
                    $('#customer_choice_options').append('\
                            <div class="mb-6 fv-row row">\
                                <div class="col-md-3">\
                                <label class="required form-label">' + name + '</label>\
                                    <input type="hidden" name="choice_no[]" value="' + i + '">\
                                    <input type="text" class="form-control" name="choice[]" value="' + name +
                        '" placeholder="{{ translate('Choice Title') }}" readonly>\
                                </div>\
                                <div class="col-md-8">\
                                <label class=" form-label">&nbsp;</label>\
                                <select class="form-select attribute_choice" data-control="select2" data-hide-search="false" data-live-search="true" name="choice_options_' +
                        i + '[]" multiple>\
                                ' + obj + '\
                                </select>\
                                </div>\
                            </div>');
                    $('.attribute_choice').select2();
                    AIZ.plugins.bootstrapSelect('refresh');
                }
            });
        }

        $('input[name="colors_active"]').on('change', function() {
            if (!$('input[name="colors_active"]').is(':checked')) {
                $('#colors').prop('disabled', true);
                AIZ.plugins.bootstrapSelect('refresh');
            } else {
                $('#colors').prop('disabled', false);
                AIZ.plugins.bootstrapSelect('refresh');
            }
            update_sku();
        });

        $(document).on("change", ".attribute_choice", function() {
            update_sku();
        });

        $('#colors').on('change', function() {
            update_sku();
        });

        $('input[name="unit_price"]').on('keyup', function() {
            update_sku();
        });

        $('input[name="name"]').on('keyup', function() {
            update_sku();
        });

        function delete_row(em) {
            $(em).closest('.form-group row').remove();
            update_sku();
        }

        function delete_variant(em) {
            $(em).closest('.variant').remove();
        }

        function update_sku() {
            $.ajax({
                type: "POST",
                url: '{{ route('products.sku_combination') }}',
                data: $('#choice_form').serialize(),
                success: function(data) {
                    $('#sku_combination').html(data);
                    AIZ.uploader.previewGenerate();
                    AIZ.plugins.fooTable();
                    if (data.length > 1) {
                        $('#show-hide-div').hide();
                    } else {
                        $('#show-hide-div').show();
                    }
                }
            });
        }

        $('#choice_attributes').on('change', function() {
            $('#customer_choice_options').html(null);
            $.each($("#choice_attributes option:selected"), function() {
                add_more_customer_choice_option($(this).val(), $(this).text());
            });

            update_sku();
        });
    </script> --}}

@endsection
