<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">
    <title>{{ get_setting('site_name')}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <link rel="stylesheet" href="{{ asset('/admin/assets/backend/css/vendor.css') }}">
    <!--end::Fonts-->

    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('/admin/assets/backend/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/assets/backend/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('/admin/assets/backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/admin/assets/backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/admin/assets/backend/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <style>
        body {
            font-size: 12px;
        }

        .container-xxl {
            max-width: 100% !important;
        }

        .note-group-select-from-files {
            display: none;
        }

    </style>
    @yield('css')
    <script>
    	var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '{{ translate('Nothing selected') }}',
            nothing_found: '{{ translate('Nothing found') }}',
            choose_file: '{{ translate('Choose file') }}',
            file_selected: '{{ translate('File selected') }}',
            files_selected: '{{ translate('Files selected') }}',
            add_more_files: '{{ translate('Add more files') }}',
            adding_more_files: '{{ translate('Adding more files') }}',
            drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
            browse: '{{ translate('Browse') }}',
            upload_complete: '{{ translate('Upload complete') }}',
            upload_paused: '{{ translate('Upload paused') }}',
            resume_upload: '{{ translate('Resume upload') }}',
            pause_upload: '{{ translate('Pause upload') }}',
            retry_upload: '{{ translate('Retry upload') }}',
            cancel_upload: '{{ translate('Cancel upload') }}',
            uploading: '{{ translate('Uploading') }}',
            processing: '{{ translate('Processing') }}',
            complete: '{{ translate('Complete') }}',
            file: '{{ translate('File') }}',
            files: '{{ translate('Files') }}',
        }
	</script>

</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">

        <div class="page d-flex flex-row flex-column-fluid">

            @include('admin.components.admin_sidenav')

            <div class="wrapper d-flex flex-column flex-row-fluid aiz-content-wrapper" id="kt_wrapper">

                <div id="kt_header" style="" class="header align-items-stretch">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">

                        <!--begin::Aside mobile toggle-->
                        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                id="kt_aside_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="black"></path>
                                    </svg></span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Aside mobile toggle-->

                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="{{route('admin.dashboard')}}" class="d-lg-none">
                                <img alt="Logo" src="{{asset("admin/assets/img/logo.svg")}}" class="h-30px">
                            </a>
                        </div>
                        <!--end::Mobile logo-->

                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <!--begin::Menu wrapper-->
                                <div class="header-menu align-items-stretch" data-kt-drawer="true"
                                    data-kt-drawer-name="header-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                    data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">

                                    <!--begin::Menu-->
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                                        id="#kt_header_menu" data-kt-menu="true">
                                        <div class="menu-item me-lg-1">
                                            <a class="menu-link active py-3" href="http://localhost/oceanandseas/admin">
                                                <span class="menu-title">Dashboard</span>
                                            </a>
                                        </div>
                                        <div class="menu-item me-lg-1">
                                            <a class="py-3 btn btn-light-danger font-weight-bold mr-2"
                                                href="http://localhost/oceanandseas/admin/cache-cache">
                                                <span class="menu-title">Clear Cache</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Navbar-->


                            <!--begin::Topbar-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <div class="d-flex align-items-stretch flex-shrink-0">
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                                        <!--begin::Menu- wrapper-->
                                        <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px"
                                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                        fill="black"></path>
                                                    <rect x="6" y="12" width="7" height="2" rx="1" fill="black"></rect>
                                                    <rect x="6" y="7" width="12" height="2" rx="1" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span
                                                class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                                        </div>


                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                            data-kt-menu="true" style="">

                                            <!--begin::Heading-->
                                            <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                                style="background-image:url('http://localhost/oceanandseas/public/assets/backend/media/misc/pattern-1.jpg')">
                                                <!--begin::Title-->

                                                <h3 class="fw-bold text-white px-9 mt-10 mb-6">Notifications
                                                    <span class="badge badge-circle badge-primary">16</span></h3>
                                                <!--end::Title-->

                                                <!--begin::Tabs-->
                                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                                    <li class="nav-item">
                                                        <a class="nav-link opacity-75 opacity-state-100 pb-4 active"
                                                            data-bs-toggle="tab"
                                                            href="#kt_topbar_notifications_3">Orders</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_topbar_notifications_3"
                                                    role="tabpanel">
                                                    <div class="scroll-y mh-325px my-5 px-8">
                                                        <div class="d-flex flex-stack py-4">
                                                            <div class="d-flex align-items-center me-2">
                                                                <span
                                                                    class="w-70px badge badge-light-success me-4">Order
                                                                    code: </span>
                                                                <a href="#"
                                                                    class="text-gray-800 text-hover-primary fw-bold">20220112-11151971</a>
                                                            </div>
                                                            <span class="badge badge-light fs-8">January 11 2022, 10:15
                                                                pm</span>
                                                        </div>
                                                    </div>

                                                    <!--end::Items-->
                                                    <!--begin::View more-->
                                                    <div class="py-3 text-center border-top">
                                                        <a href="http://localhost/oceanandseas/admin/all-notification"
                                                            class="btn btn-color-gray-600 btn-active-color-primary">View
                                                            All
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-5">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="18" y="13" width="13"
                                                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                                                        fill="black"></rect>
                                                                    <path
                                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                        fill="black"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon--></a>
                                                    </div>


                                                    <!--end::View more-->
                                                </div>
                                                <!--end::Tab panel-->
                                            </div>
                                            <!--end::Tab content-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::Notifications-->

                                    <!--begin::User-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                        <!--begin::Menu wrapper-->
                                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end">
                                            <img src="{{asset('admin/assets/img/avatar-place.png')}}"
                                                onerror="this.onerror=null;this.src='{{asset('admin/assets/img/avatar-place.png')}}';"
                                                alt="user">
                                        </div>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                            data-kt-menu="true" style="">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo"
                                                            src="{{asset('admin/assets/img/avatar-place.png')}}"
                                                            onerror="this.onerror=null;this.src='{{asset('admin/assets/img/avatar-place.png')}}';">
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">Admin
                                                            <span
                                                                class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">admin</span>
                                                        </div>
                                                        <a href="http://localhost/oceanandseas/admin/profile"
                                                            class="fw-bold text-muted text-hover-primary fs-7">admin@admin.com</a>
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 d-none" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="left-start" id="lang-change">
                                                <a href="javascript:void(0);" class="menu-link px-5">
                                                    <span class="menu-title position-relative">Language
                                                        <span
                                                            class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                                            <img class="w-15px h-15px rounded-1 ms-2"
                                                                src="{{asset('admin/assets/img/flags/en.png')}}"
                                                                alt=""></span></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="javascript:void(0)" data-flag="en"
                                                            class="menu-link d-flex px-5  active ">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1"
                                                                    src="{{asset('admin/assets/img/flags/en.png')}}"
                                                                    alt="English"></span>English</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 my-1 d-none">
                                                <a href="#"
                                                    class="menu-link px-5">Account Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="{{route('admin.logout')}}" class="menu-link px-5">Sign Out</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 d-none">
                                                <div class="menu-content px-5">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                                                        for="kt_user_menu_dark_mode_toggle">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" name="mode" id="kt_user_menu_dark_mode_toggle"
                                                            data-kt-url="http://localhost/oceanandseas/admin">
                                                        <span class="pulse-ring ms-n1"></span>
                                                        <span class="form-check-label text-gray-600 fs-7">Dark
                                                            Mode</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User -->
                                    <!--begin::Heaeder menu toggle-->
                                    <div class="d-flex align-items-center d-lg-none ms-2 me-n3"
                                        title="Show header menu">
                                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                            id="kt_header_menu_mobile_toggle">
                                            <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Heaeder menu toggle-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>

                <div class="content d-flex flex-column flex-column-fluid aiz-main-content" id="kt_content">
                    <div class="px-15px px-lg-25px">
                        @yield('content')
                    </div>
                </div>

                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">© {{date('Y')}}</span>
                            <a href="#" target="_blank" class="text-gray-800 text-hover-primary">{{env('APP_NAME')}} v5.5.5</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>

            </div>
        </div>
    </div>

    @yield('modal')

    <script src="{{asset('/admin/assets/backend/js/vendorsS.js') }}"></script>
    <script src="{{asset('/admin/assets/backend/js/aiz-core.js') }}" ></script>
    <script src="{{asset('/admin/assets/backend/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{asset('/admin/assets/backend/js/scripts.bundle.js') }}"></script>
    <script src="{{asset('/admin/assets/backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{asset('/admin/assets/backend/js/custom/apps/ecommerce/catalog/products.js') }}"></script>
    <script src="{{asset('/admin/assets/backend/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{asset('/admin/assets/backend/js/custom/widgets.js') }}"></script>
    <script src="{{asset('/admin/assets/backend/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{asset('/admin/assets/backend/js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{asset('/admin/assets/backend/js/custom/modals/create-app.js') }}"></script>
    <script src="{{asset('/admin/assets/backend/js/custom/modals/users-search.js') }}"></script>

    <script type="text/javascript">
        @if ($message = Session::get('success'))
            AIZ.plugins.notify('success','{{ $message }}');
        @endif

        @if ($message = Session::get('danger'))
            AIZ.plugins.notify('danger','{{ $message }}');
        @endif

        @if ($message = Session::get('warning'))
            AIZ.plugins.notify('warning','{{ $message }}');
        @endif

        @if ($message = Session::get('info'))
            AIZ.plugins.notify('info','{{ $message }}');
        @endif

        // $(document).ready(function(){
        //     @if (Session::has('flash_notification'))
        //         AIZ.plugins.notify('{{ Session::get('flash_notification')[1] }}', '{{ Session::get('flash_notification')[0] }}');
        //     @endif
        // });
    </script>
    @yield('script')



</body>

</html>
