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

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">

            @include('admin.components.admin_sidenav')

            <div class="wrapper d-flex flex-column flex-row-fluid aiz-content-wrapper" id="kt_wrapper">

                @include('admin.components.admin_nav')

                <div class="content d-flex flex-column flex-column-fluid aiz-main-content" id="kt_content">
                    <div class="px-15px px-lg-25px">
                        @yield('content')
                    </div>
                </div>

                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">© {{date('Y')}}</span>
                            <a href="#" target="_blank" class="text-gray-800 text-hover-primary">{{env('APP_NAME')}} v5.5.5</a>
                        </div>
                    </div>
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

        if ($('#lang-change').length > 0) {
            $('#lang-change .menu-sub-dropdown a').each(function() {
                $(this).on('click', function(e){
                    e.preventDefault();
                    var $this = $(this);
                    var locale = $this.data('flag');
                    // console.log(locale);
                    $.post('{{ route('language.change') }}',{_token:'{{ csrf_token() }}', locale:locale}, function(data){
                        console.log(data);
                        AIZ.plugins.notify('success', '{{translate("Language changed to ")}}'+data.name);
                        location.reload();
                    });

                });
            });
        }

    </script>
    @yield('script')

</body>
</html>
