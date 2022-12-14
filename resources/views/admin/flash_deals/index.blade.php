@extends('admin.layouts.app')

@section('content')


    <!--begin::Content-->
    <div class="d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Flash Deals</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">eCommerce</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Marketing</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">All Flash Deals</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Products-->
                <form class="" id="sort_flash_deals" action="" method="GET">
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>{{ translate('All Flash Deals') }}</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                                transform="rotate(45 17.0365 15.1223)" fill="black" />
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" class="form-control form-control-solid w-250px ps-14" id="search"
                                        name="search" @isset($sort_search) value="{{ $sort_search }}"
                                        @endisset placeholder="{{ translate('Type & Enter') }}" />
                                </div>
                                <!--end::Search-->

                                <a href="{{ route('admin.flash_deals.create') }}" class="btn btn-primary">
                                    {{ translate('Create New Flash Deal') }}
                                </a>
                                <!--end::Add product-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->

                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                #
                                            </th>
                                            <th class="min-w-200px">{{ translate('Title') }}</th>
                                            <th class="text-center min-w-175px">{{ translate('Start Date') }}</th>
                                            <th class="text-center min-w-150px">{{ translate('End Date') }}</th>
                                            <th class="text-center min-w-100px">{{ translate('Status') }}</th>
                                            <th class="text-center min-w-100px">{{ translate('Featured') }}</th>
                                            <th class="text-center min-w-100px">{{ translate('Page Link') }}</th>
                                            <th class="text-center min-w-100px">{{ translate('Options') }}</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        <!--begin::Table row-->
                                        @foreach ($flash_deals as $key => $flash_deal)
                                            <tr>
                                                <!--begin::Checkbox-->
                                                <td class="text-center pe-0">
                                                    <span
                                                        class="fw-bolder">{{ $key + 1 + ($flash_deals->currentPage() - 1) * $flash_deals->perPage() }}</span>
                                                </td>
                                                <!--begin::Category=-->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Thumbnail-->
                                                        <a href="{{ route('flash_deals.edit', ['id' => $flash_deal->id, 'lang' => env('DEFAULT_LANGUAGE')]) }}"
                                                            class="symbol symbol-50px">
                                                            <span class="symbol-label"
                                                                style="background-image:url({{ uploaded_asset($flash_deal->banner) }});"></span>
                                                        </a>
                                                        <!--end::Thumbnail-->
                                                        <div class="ms-5">
                                                            <!--begin::Title-->
                                                            <a href="{{ route('flash_deals.edit', ['id' => $flash_deal->id, 'lang' => env('DEFAULT_LANGUAGE')]) }}"
                                                                class="text-gray-800 text-hover-primary fs-5 fw-bolder"
                                                                data-kt-ecommerce-product-filter="product_name">{{ $flash_deal->getTranslation('title') }}</a>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--end::Category=-->
                                                <td class="text-center pe-0">
                                                    <span class="fw-bolder">
                                                        {{ date('d-m-Y H:i:s', $flash_deal->start_date) }}
                                                    </span>
                                                </td>
                                                <!--end::SKU=-->
                                                <!--begin::Qty=-->
                                                <td class="text-center pe-0" data-order="32">
                                                    <span class="fw-bolder ms-3">
                                                        {{ date('d-m-Y H:i:s', $flash_deal->end_date) }}
                                                    </span>
                                                </td>
                                                <td class="text-center pe-0" data-order="32">
                                                    <span class="fw-bolder ms-3">
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid d-block">
                                                            <input class="form-check-input"
                                                                onchange="update_flash_deal_status(this)"
                                                                value="{{ $flash_deal->id }}" type="checkbox"
                                                                <?php if ($flash_deal->status == 1) {
                                                                    echo 'checked';
                                                                } ?>>
                                                        </label>
                                                    </span>
                                                </td>
                                                <!--end::Qty=-->
                                                <!--begin::Price=-->
                                                <td class="text-center pe-0" data-order="32">
                                                    <span class="fw-bolder ms-3">
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid d-block">
                                                            <input class="form-check-input"
                                                                onchange="update_flash_deal_feature(this)"
                                                                value="{{ $flash_deal->id }}" type="checkbox"
                                                                <?php if ($flash_deal->featured == 1) {
                                                                    echo 'checked';
                                                                } ?>>
                                                        </label>
                                                    </span>
                                                </td>

                                                <td class="text-center pe-0" data-order="32">
                                                    <span class="fw-bolder ms-3">
                                                        {{ url('flash-deal/' . $flash_deal->slug) }}
                                                    </span>
                                                </td>

                                                <td class="text-center">
                                                    <a href="{{ route('admin.flash_deals.edit', ['id' => $flash_deal->id, 'lang' => env('DEFAULT_LANGUAGE')]) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Design/Edit.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path
                                                                        d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                                                    <rect fill="#000000" opacity="0.3" x="5" y="20"
                                                                        width="15" height="2" rx="1" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>

                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm confirm-delete"
                                                        data-href="{{ route('admin.flash_deals.destroy', $flash_deal->id) }}">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.5"
                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.5"
                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>

                                                </td>

                                                <!--end::Action=-->
                                            </tr>
                                        @endforeach
                                        <!--end::Table row-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <div class="aiz-pagination">
                                {{ $flash_deals->appends(request()->input())->links() }}
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

@endsection

@section('script')
    <script type="text/javascript">
        function update_flash_deal_status(el) {
            if (el.checked) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('admin.flash_deals.update_status') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function(data) {
                if (data == 1) {
                    location.reload();
                } else {
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }

        function update_flash_deal_feature(el) {
            if (el.checked) {
                var featured = 1;
            } else {
                var featured = 0;
            }
            $.post('{{ route('admin.flash_deals.update_featured') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                featured: featured
            }, function(data) {
                if (data == 1) {
                    location.reload();
                } else {
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }
    </script>
@endsection
