@extends('admin.layouts.app')

@section('content')
<div class="px-15px px-lg-25px">
    <div class="container">
        <div class="row g-5 g-xl-8">
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="http://localhost/oceanandseas/admin/customers"
                    class="card bg-body hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
                                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"></rect>
                                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
                                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">3</div>
                        <div class="fw-bold text-gray-400">Total Customer</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="http://localhost/oceanandseas/admin/all_orders"
                    class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                        <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                    fill="black"></path>
                                <path
                                    d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                    fill="black"></path>
                                <path
                                    d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">32</div>
                        <div class="fw-bold text-gray-100">Total Orders</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="http://localhost/oceanandseas/admin/categories"
                    class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                    fill="black"></path>
                                <path
                                    d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">9</div>
                        <div class="fw-bold text-white">Total Product category</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="http://localhost/oceanandseas/admin/brands"
                    class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z"
                                    fill="black"></path>
                                <path
                                    d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">6</div>
                        <div class="fw-bold text-white">Total Product Brands</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
        </div>
    </div>
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">

            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Welcome to </small>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <div class="container">
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Mixed Widget 17-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack">
                            <!--begin::Title-->
                            <h4 class="fw-bolder text-gray-800 m-0">Total published products</h4>
                            <!--end::Title-->
                            <!--begin::Menu-->

                            <!--begin::Menu 3-->

                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Chart-->
                        <div class="d-flex flex-center w-100">
                            <div class="mixed-widget-17-charts" data-kt-chart-color="primary"
                                style="height: 300px; min-height: 178.469px;">
                                <div id="apexcharts3pufphqa"
                                    class="apexcharts-canvas apexcharts3pufphqa apexcharts-theme-light"
                                    style="width: 276px; height: 178.469px;"><svg id="SvgjsSvg2452" width="276"
                                        height="178.46890258789062" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2454" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(1, 0)">
                                            <defs id="SvgjsDefs2453">
                                                <clipPath id="gridRectMask3pufphqa">
                                                    <rect id="SvgjsRect2456" width="282" height="300" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask3pufphqa"></clipPath>
                                                <clipPath id="nonForecastMask3pufphqa"></clipPath>
                                                <clipPath id="gridRectMarkerMask3pufphqa">
                                                    <rect id="SvgjsRect2457" width="280" height="302" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2458" class="apexcharts-radialbar">
                                                <g id="SvgjsG2459">
                                                    <g id="SvgjsG2460" class="apexcharts-tracks">
                                                        <g id="SvgjsG2461"
                                                            class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(228,230,239,0.85)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="23.942682926829274"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2463">
                                                        <g id="SvgjsG2468"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="PublishedxProducts" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2469"
                                                                d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 50.279878048780475 138"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(0,158,247,0.85)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="23.942682926829274"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="0" data:value="0" index="0" j="0"
                                                                data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 50.279878048780475 138">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle2464" r="75.7487804878049" cx="138"
                                                            cy="138" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                        <g id="SvgjsG2465" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                            <text id="SvgjsText2466" font-family="inherit" x="138"
                                                                y="133" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="700" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: inherit;">Published
                                                                Products</text><text id="SvgjsText2467"
                                                                font-family="inherit" x="138" y="114"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="24px" font-weight="600" fill="#181c32"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: inherit;">0</text></g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2470" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2471" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG2455" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Chart-->

                    </div>
                    <!--end::Body-->

                    <!--ed::Info-->
                </div>
                <!--end::Mixed Widget 17-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Mixed Widget 17-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack">
                            <!--begin::Title-->
                            <h4 class="fw-bolder text-gray-800 m-0">Total sellers products</h4>
                            <!--end::Title-->
                            <!--begin::Menu-->

                            <!--begin::Menu 3-->

                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Chart-->
                        <div class="d-flex flex-center w-100">
                            <div class="mixed-widget-18-charts" data-kt-chart-color="success"
                                style="height: 300px; min-height: 178.469px;">
                                <div id="apexchartss8bevtfz"
                                    class="apexcharts-canvas apexchartss8bevtfz apexcharts-theme-light"
                                    style="width: 276px; height: 178.469px;"><svg id="SvgjsSvg2472" width="276"
                                        height="178.46890258789062" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2474" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(1, 0)">
                                            <defs id="SvgjsDefs2473">
                                                <clipPath id="gridRectMasks8bevtfz">
                                                    <rect id="SvgjsRect2476" width="282" height="300" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMasks8bevtfz"></clipPath>
                                                <clipPath id="nonForecastMasks8bevtfz"></clipPath>
                                                <clipPath id="gridRectMarkerMasks8bevtfz">
                                                    <rect id="SvgjsRect2477" width="280" height="302" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2478" class="apexcharts-radialbar">
                                                <g id="SvgjsG2479">
                                                    <g id="SvgjsG2480" class="apexcharts-tracks">
                                                        <g id="SvgjsG2481"
                                                            class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(228,230,239,0.85)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="23.942682926829274"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2483">
                                                        <g id="SvgjsG2488"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="SellerxProducts" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2489"
                                                                d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 50.279878048780475 138"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(80,205,137,0.85)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="23.942682926829274"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="0" data:value="0" index="0" j="0"
                                                                data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 50.279878048780475 138">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle2484" r="75.7487804878049" cx="138"
                                                            cy="138" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                        <g id="SvgjsG2485" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                            <text id="SvgjsText2486" font-family="inherit" x="138"
                                                                y="133" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="700" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: inherit;">Seller
                                                                Products</text><text id="SvgjsText2487"
                                                                font-family="inherit" x="138" y="114"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="24px" font-weight="600" fill="#181c32"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: inherit;">0</text></g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2490" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2491" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG2475" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Chart-->
                        <!--begin::Content-->

                        <!--end::Content-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->

                    <!--ed::Info-->
                </div>
                <!--end::Mixed Widget 17-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Mixed Widget 17-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack">
                            <!--begin::Title-->
                            <h4 class="fw-bolder text-gray-800 m-0">Total admin products</h4>
                            <!--end::Title-->


                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Chart-->
                        <div class="d-flex flex-center w-100">
                            <div class="mixed-widget-19-charts" data-kt-chart-color="danger"
                                style="height: 300px; min-height: 178.469px;">
                                <div id="apexchartsx4ijurco"
                                    class="apexcharts-canvas apexchartsx4ijurco apexcharts-theme-light"
                                    style="width: 276px; height: 178.469px;"><svg id="SvgjsSvg2492" width="276"
                                        height="178.46890258789062" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2494" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(1, 0)">
                                            <defs id="SvgjsDefs2493">
                                                <clipPath id="gridRectMaskx4ijurco">
                                                    <rect id="SvgjsRect2496" width="282" height="300" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskx4ijurco"></clipPath>
                                                <clipPath id="nonForecastMaskx4ijurco"></clipPath>
                                                <clipPath id="gridRectMarkerMaskx4ijurco">
                                                    <rect id="SvgjsRect2497" width="280" height="302" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG2498" class="apexcharts-radialbar">
                                                <g id="SvgjsG2499">
                                                    <g id="SvgjsG2500" class="apexcharts-tracks">
                                                        <g id="SvgjsG2501"
                                                            class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                            <path id="apexcharts-radialbarTrack-0"
                                                                d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138"
                                                                fill="none" fill-opacity="1"
                                                                stroke="rgba(228,230,239,0.85)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="23.942682926829274"
                                                                stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138">
                                                            </path>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2503">
                                                        <g id="SvgjsG2508"
                                                            class="apexcharts-series apexcharts-radial-series"
                                                            seriesName="AdminxProducts" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2509"
                                                                d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 53.67800680525458 113.8210575334211"
                                                                fill="none" fill-opacity="0.85"
                                                                stroke="rgba(241,65,108,0.85)" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="23.942682926829274"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                data:angle="16" data:value="9" index="0" j="0"
                                                                data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 53.67800680525458 113.8210575334211">
                                                            </path>
                                                        </g>
                                                        <circle id="SvgjsCircle2504" r="75.7487804878049" cx="138"
                                                            cy="138" class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                        <g id="SvgjsG2505" class="apexcharts-datalabels-group"
                                                            transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                            <text id="SvgjsText2506" font-family="inherit" x="138"
                                                                y="133" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="700" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-datalabel-label"
                                                                style="font-family: inherit;">Admin Products</text><text
                                                                id="SvgjsText2507" font-family="inherit" x="138" y="114"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="24px" font-weight="600" fill="#181c32"
                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                style="font-family: inherit;">9</text></g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2510" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2511" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG2495" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Chart-->
                        <!--begin::Content-->

                        <!--end::Content-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->

                    <!--ed::Info-->
                </div>
                <!--end::Mixed Widget 17-->
            </div>
            <!--end::Col-->
        </div>
    </div>
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4 d-none">
                    <!--begin::List Widget 5-->
                    <div class="card card-xl-stretch">
                        <!--begin::Header-->
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fw-bolder mb-2 text-dark">Activities</span>
                                <span class="text-muted fw-bold fs-7">890,344 Sales</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000"
                                                    opacity="0.3"></rect>
                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000"
                                                    opacity="0.3"></rect>
                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                    opacity="0.3"></rect>
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_61bc33c4f09dc">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible"
                                                    data-kt-select2="true" data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_61bc33c4f09dc"
                                                    data-allow-clear="true" data-select2-id="select2-data-1-f3c8"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="select2-data-3-zbcz"></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-2-4qgz"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-5bql-container"
                                                            aria-controls="select2-5bql-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-5bql-container" role="textbox"
                                                                aria-readonly="true" title="Select option"><span
                                                                    class="select2-selection__placeholder">Select
                                                                    option</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Timeline-->
                            <div class="timeline-label">
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-warning fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest.
                                        And keep structure</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Content-->
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
                                        <a href="#" class="text-primary">USD 700</a>. to ESL</div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving
                                        and keep structure keep great</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                        <a href="#" class="text-primary">#XF-2356</a>.</div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving
                                        and keep structure keep great</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                        <a href="#" class="text-primary">#XF-2356</a>.</div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app
                                        launch preparion meeting</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end: List Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <br>
            <!--end::Row-->
            <div class="row g-5 g-xl-8">
                <div class="col-xl-6">
                    <!--begin::Charts Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Category wise product sale</span>

                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->

                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_61bc340902ed2">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible"
                                                    data-kt-select2="true" data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_61bc340902ed2"
                                                    data-allow-clear="true" data-select2-id="select2-data-4-iai2"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="select2-data-6-nuwt"></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-5-416t"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-0k02-container"
                                                            aria-controls="select2-0k02-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-0k02-container" role="textbox"
                                                                aria-readonly="true" title="Select option"><span
                                                                    class="select2-selection__placeholder">Select
                                                                    option</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_1_charts" style="height: 350px; min-height: 365px;">
                                <div id="apexchartsg4l2r0hd"
                                    class="apexcharts-canvas apexchartsg4l2r0hd apexcharts-theme-light"
                                    style="width: 451px; height: 350px;"><svg id="SvgjsSvg2512" width="451" height="350"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2514" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(44.587982177734375, 30)">
                                            <defs id="SvgjsDefs2513">
                                                <linearGradient id="SvgjsLinearGradient2519" x1="0" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop2520" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop2521" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop2522" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskg4l2r0hd">
                                                    <rect id="SvgjsRect2524" width="402.4120178222656" height="202"
                                                        x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskg4l2r0hd"></clipPath>
                                                <clipPath id="nonForecastMaskg4l2r0hd"></clipPath>
                                                <clipPath id="gridRectMarkerMaskg4l2r0hd">
                                                    <rect id="SvgjsRect2525" width="400.4120178222656" height="204"
                                                        x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect2523" width="13.213733927408853" height="200" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                                fill="url(#SvgjsLinearGradient2519)" class="apexcharts-xcrosshairs"
                                                y2="200" filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG2548" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2549" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -10)"><text id="SvgjsText2551"
                                                        font-family="inherit" x="22.022889879014755" y="223"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 23.300050735473633 217.5)">
                                                        <tspan id="SvgjsTspan2552">Organic Olive</tspan>
                                                        <title>Organic Olive</title>
                                                    </text><text id="SvgjsText2554" font-family="inherit"
                                                        x="66.06866963704427" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 67.06867980957031 217.5)">
                                                        <tspan id="SvgjsTspan2555">Premium Spreads</tspan>
                                                        <title>Premium Spreads</title>
                                                    </text><text id="SvgjsText2557" font-family="inherit"
                                                        x="110.11444939507378" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 111.11445617675781 217.5)">
                                                        <tspan id="SvgjsTspan2558">Chocolates</tspan>
                                                        <title>Chocolates</title>
                                                    </text><text id="SvgjsText2560" font-family="inherit"
                                                        x="154.16022915310327" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 155.27569580078125 217.5)">
                                                        <tspan id="SvgjsTspan2561">Organic Honey</tspan>
                                                        <title>Organic Honey</title>
                                                    </text><text id="SvgjsText2563" font-family="inherit"
                                                        x="198.2060089111328" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 199.20602416992188 217.5)">
                                                        <tspan id="SvgjsTspan2564">Organic Pasta</tspan>
                                                        <title>Organic Pasta</title>
                                                    </text><text id="SvgjsText2566" font-family="inherit"
                                                        x="242.2517886691623" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 243.25180053710938 217.5)">
                                                        <tspan id="SvgjsTspan2567">Premium Chocolates</tspan>
                                                        <title>Premium Chocolates</title>
                                                    </text><text id="SvgjsText2569" font-family="inherit"
                                                        x="286.2975684271918" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 287.2975769042969 217.5)">
                                                        <tspan id="SvgjsTspan2570">Organic Jams</tspan>
                                                        <title>Organic Jams</title>
                                                    </text><text id="SvgjsText2572" font-family="inherit"
                                                        x="330.3433481852213" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 331.60301208496094 217.5)">
                                                        <tspan id="SvgjsTspan2573">Organic Vinegar</tspan>
                                                        <title>Organic Vinegar</title>
                                                    </text><text id="SvgjsText2575" font-family="inherit"
                                                        x="374.38912794325086" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 375.5066375732422 217.5)">
                                                        <tspan id="SvgjsTspan2576">Premium Chutney</tspan>
                                                        <title>Premium Chutney</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG2587" class="apexcharts-grid">
                                                <g id="SvgjsG2588" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine2590" x1="0" y1="0" x2="396.4120178222656" y2="0"
                                                        stroke="#eff2f5" stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2591" x1="0" y1="66.66666666666667"
                                                        x2="396.4120178222656" y2="66.66666666666667" stroke="#eff2f5"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2592" x1="0" y1="133.33333333333334"
                                                        x2="396.4120178222656" y2="133.33333333333334" stroke="#eff2f5"
                                                        stroke-dasharray="4" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2593" x1="0" y1="200" x2="396.4120178222656"
                                                        y2="200" stroke="#eff2f5" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2589" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine2595" x1="0" y1="200" x2="396.4120178222656" y2="200"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                                <line id="SvgjsLine2594" x1="0" y1="1" x2="0" y2="200"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                            </g>
                                            <g id="SvgjsG2526" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG2527" class="apexcharts-series" rel="1"
                                                    seriesName="NoxofxSales" data:realIndex="0">
                                                    <path id="SvgjsPath2531"
                                                        d="M 15.416022915310329 200L 15.416022915310329 4Q 15.416022915310329 0 19.41602291531033 0L 22.629756842719182 0Q 26.629756842719182 0 26.629756842719182 4L 26.629756842719182 4L 26.629756842719182 200L 26.629756842719182 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#001aff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskg4l2r0hd)"
                                                        pathTo="M 15.416022915310329 200L 15.416022915310329 4Q 15.416022915310329 0 19.41602291531033 0L 22.629756842719182 0Q 26.629756842719182 0 26.629756842719182 4L 26.629756842719182 4L 26.629756842719182 200L 26.629756842719182 200z"
                                                        pathFrom="M 15.416022915310329 200L 15.416022915310329 200L 26.629756842719182 200L 26.629756842719182 200L 26.629756842719182 200L 26.629756842719182 200L 26.629756842719182 200L 15.416022915310329 200"
                                                        cy="0" cx="58.46180267333984" j="0" val="3" barHeight="200"
                                                        barWidth="13.213733927408853"></path>
                                                    <path id="SvgjsPath2533"
                                                        d="M 59.46180267333984 200L 59.46180267333984 200Q 59.46180267333984 200 59.46180267333984 200L 70.6755366007487 200Q 70.6755366007487 200 70.6755366007487 200L 70.6755366007487 200L 70.6755366007487 200L 70.6755366007487 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#001aff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskg4l2r0hd)"
                                                        pathTo="M 59.46180267333984 200L 59.46180267333984 200Q 59.46180267333984 200 59.46180267333984 200L 70.6755366007487 200Q 70.6755366007487 200 70.6755366007487 200L 70.6755366007487 200L 70.6755366007487 200L 70.6755366007487 200z"
                                                        pathFrom="M 59.46180267333984 200L 59.46180267333984 200L 70.6755366007487 200L 70.6755366007487 200L 70.6755366007487 200L 70.6755366007487 200L 70.6755366007487 200L 59.46180267333984 200"
                                                        cy="200" cx="102.50758243136934" j="1" val="0" barHeight="0"
                                                        barWidth="13.213733927408853"></path>
                                                    <path id="SvgjsPath2535"
                                                        d="M 103.50758243136934 200L 103.50758243136934 200Q 103.50758243136934 200 103.50758243136934 200L 114.7213163587782 200Q 114.7213163587782 200 114.7213163587782 200L 114.7213163587782 200L 114.7213163587782 200L 114.7213163587782 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#001aff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskg4l2r0hd)"
                                                        pathTo="M 103.50758243136934 200L 103.50758243136934 200Q 103.50758243136934 200 103.50758243136934 200L 114.7213163587782 200Q 114.7213163587782 200 114.7213163587782 200L 114.7213163587782 200L 114.7213163587782 200L 114.7213163587782 200z"
                                                        pathFrom="M 103.50758243136934 200L 103.50758243136934 200L 114.7213163587782 200L 114.7213163587782 200L 114.7213163587782 200L 114.7213163587782 200L 114.7213163587782 200L 103.50758243136934 200"
                                                        cy="200" cx="146.55336218939885" j="2" val="0" barHeight="0"
                                                        barWidth="13.213733927408853"></path>
                                                    <path id="SvgjsPath2537"
                                                        d="M 147.55336218939885 200L 147.55336218939885 200Q 147.55336218939885 200 147.55336218939885 200L 158.7670961168077 200Q 158.7670961168077 200 158.7670961168077 200L 158.7670961168077 200L 158.7670961168077 200L 158.7670961168077 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#001aff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskg4l2r0hd)"
                                                        pathTo="M 147.55336218939885 200L 147.55336218939885 200Q 147.55336218939885 200 147.55336218939885 200L 158.7670961168077 200Q 158.7670961168077 200 158.7670961168077 200L 158.7670961168077 200L 158.7670961168077 200L 158.7670961168077 200z"
                                                        pathFrom="M 147.55336218939885 200L 147.55336218939885 200L 158.7670961168077 200L 158.7670961168077 200L 158.7670961168077 200L 158.7670961168077 200L 158.7670961168077 200L 147.55336218939885 200"
                                                        cy="200" cx="190.59914194742836" j="3" val="0" barHeight="0"
                                                        barWidth="13.213733927408853"></path>
                                                    <path id="SvgjsPath2539"
                                                        d="M 191.59914194742836 200L 191.59914194742836 200Q 191.59914194742836 200 191.59914194742836 200L 202.81287587483723 200Q 202.81287587483723 200 202.81287587483723 200L 202.81287587483723 200L 202.81287587483723 200L 202.81287587483723 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#001aff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskg4l2r0hd)"
                                                        pathTo="M 191.59914194742836 200L 191.59914194742836 200Q 191.59914194742836 200 191.59914194742836 200L 202.81287587483723 200Q 202.81287587483723 200 202.81287587483723 200L 202.81287587483723 200L 202.81287587483723 200L 202.81287587483723 200z"
                                                        pathFrom="M 191.59914194742836 200L 191.59914194742836 200L 202.81287587483723 200L 202.81287587483723 200L 202.81287587483723 200L 202.81287587483723 200L 202.81287587483723 200L 191.59914194742836 200"
                                                        cy="200" cx="234.64492170545788" j="4" val="0" barHeight="0"
                                                        barWidth="13.213733927408853"></path>
                                                    <path id="SvgjsPath2541"
                                                        d="M 235.64492170545788 200L 235.64492170545788 200Q 235.64492170545788 200 235.64492170545788 200L 246.85865563286671 200Q 246.85865563286671 200 246.85865563286671 200L 246.85865563286671 200L 246.85865563286671 200L 246.85865563286671 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#001aff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskg4l2r0hd)"
                                                        pathTo="M 235.64492170545788 200L 235.64492170545788 200Q 235.64492170545788 200 235.64492170545788 200L 246.85865563286671 200Q 246.85865563286671 200 246.85865563286671 200L 246.85865563286671 200L 246.85865563286671 200L 246.85865563286671 200z"
                                                        pathFrom="M 235.64492170545788 200L 235.64492170545788 200L 246.85865563286671 200L 246.85865563286671 200L 246.85865563286671 200L 246.85865563286671 200L 246.85865563286671 200L 235.64492170545788 200"
                                                        cy="200" cx="278.69070146348736" j="5" val="0" barHeight="0"
                                                        barWidth="13.213733927408853"></path>
                                                    <path id="SvgjsPath2543"
                                                        d="M 279.69070146348736 200L 279.69070146348736 200Q 279.69070146348736 200 279.69070146348736 200L 290.9044353908962 200Q 290.9044353908962 200 290.9044353908962 200L 290.9044353908962 200L 290.9044353908962 200L 290.9044353908962 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#001aff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskg4l2r0hd)"
                                                        pathTo="M 279.69070146348736 200L 279.69070146348736 200Q 279.69070146348736 200 279.69070146348736 200L 290.9044353908962 200Q 290.9044353908962 200 290.9044353908962 200L 290.9044353908962 200L 290.9044353908962 200L 290.9044353908962 200z"
                                                        pathFrom="M 279.69070146348736 200L 279.69070146348736 200L 290.9044353908962 200L 290.9044353908962 200L 290.9044353908962 200L 290.9044353908962 200L 290.9044353908962 200L 279.69070146348736 200"
                                                        cy="200" cx="322.7364812215169" j="6" val="0" barHeight="0"
                                                        barWidth="13.213733927408853"></path>
                                                    <path id="SvgjsPath2545"
                                                        d="M 323.7364812215169 200L 323.7364812215169 200Q 323.7364812215169 200 323.7364812215169 200L 334.95021514892574 200Q 334.95021514892574 200 334.95021514892574 200L 334.95021514892574 200L 334.95021514892574 200L 334.95021514892574 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#001aff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskg4l2r0hd)"
                                                        pathTo="M 323.7364812215169 200L 323.7364812215169 200Q 323.7364812215169 200 323.7364812215169 200L 334.95021514892574 200Q 334.95021514892574 200 334.95021514892574 200L 334.95021514892574 200L 334.95021514892574 200L 334.95021514892574 200z"
                                                        pathFrom="M 323.7364812215169 200L 323.7364812215169 200L 334.95021514892574 200L 334.95021514892574 200L 334.95021514892574 200L 334.95021514892574 200L 334.95021514892574 200L 323.7364812215169 200"
                                                        cy="200" cx="366.78226097954644" j="7" val="0" barHeight="0"
                                                        barWidth="13.213733927408853"></path>
                                                    <path id="SvgjsPath2547"
                                                        d="M 367.78226097954644 200L 367.78226097954644 200Q 367.78226097954644 200 367.78226097954644 200L 378.9959949069553 200Q 378.9959949069553 200 378.9959949069553 200L 378.9959949069553 200L 378.9959949069553 200L 378.9959949069553 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#001aff"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskg4l2r0hd)"
                                                        pathTo="M 367.78226097954644 200L 367.78226097954644 200Q 367.78226097954644 200 367.78226097954644 200L 378.9959949069553 200Q 378.9959949069553 200 378.9959949069553 200L 378.9959949069553 200L 378.9959949069553 200L 378.9959949069553 200z"
                                                        pathFrom="M 367.78226097954644 200L 367.78226097954644 200L 378.9959949069553 200L 378.9959949069553 200L 378.9959949069553 200L 378.9959949069553 200L 378.9959949069553 200L 367.78226097954644 200"
                                                        cy="200" cx="410.828040737576" j="8" val="0" barHeight="0"
                                                        barWidth="13.213733927408853"></path>
                                                    <g id="SvgjsG2529" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG2530" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2532" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2534" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2536" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2538" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2540" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2542" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2544" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2546" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2528" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2596" x1="0" y1="0" x2="396.4120178222656" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2597" x1="0" y1="0" x2="396.4120178222656" y2="0"
                                                stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2598" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2599" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2600" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG2577" class="apexcharts-yaxis" rel="0"
                                            transform="translate(14.587982177734375, 0)">
                                            <g id="SvgjsG2578" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2579"
                                                    font-family="inherit" x="20" y="31.3" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2580">3.0</tspan>
                                                    <title>3.0</title>
                                                </text><text id="SvgjsText2581" font-family="inherit" x="20"
                                                    y="97.96666666666667" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2582">2.0</tspan>
                                                    <title>2.0</title>
                                                </text><text id="SvgjsText2583" font-family="inherit" x="20"
                                                    y="164.63333333333335" text-anchor="end" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2584">1.0</tspan>
                                                    <title>1.0</title>
                                                </text><text id="SvgjsText2585" font-family="inherit" x="20" y="231.3"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2586">0.0</tspan>
                                                    <title>0.0</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG2515" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 175px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 158, 247);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 1-->
                </div>
                <div class="col-xl-6">
                    <!--begin::Charts Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Category wise product stock</span>

                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->

                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_61bc340902ed2">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible"
                                                    data-kt-select2="true" data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_61bc340902ed2"
                                                    data-allow-clear="true" data-select2-id="select2-data-7-kz1u"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="select2-data-9-d9so"></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-8-zdl8"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-kfm4-container"
                                                            aria-controls="select2-kfm4-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-kfm4-container" role="textbox"
                                                                aria-readonly="true" title="Select option"><span
                                                                    class="select2-selection__placeholder">Select
                                                                    option</span></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_1_chart2" style="height: 350px; min-height: 365px;">
                                <div id="apexchartsf980wss7"
                                    class="apexcharts-canvas apexchartsf980wss7 apexcharts-theme-light"
                                    style="width: 451px; height: 350px;"><svg id="SvgjsSvg2601" width="451" height="350"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2603" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(50.10797119140625, 30)">
                                            <defs id="SvgjsDefs2602">
                                                <linearGradient id="SvgjsLinearGradient2608" x1="0" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop2609" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop2610" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop2611" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMaskf980wss7">
                                                    <rect id="SvgjsRect2613" width="396.89202880859375" height="202"
                                                        x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskf980wss7"></clipPath>
                                                <clipPath id="nonForecastMaskf980wss7"></clipPath>
                                                <clipPath id="gridRectMarkerMaskf980wss7">
                                                    <rect id="SvgjsRect2614" width="394.89202880859375" height="204"
                                                        x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect2612" width="13.029734293619793" height="200" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                                fill="url(#SvgjsLinearGradient2608)" class="apexcharts-xcrosshairs"
                                                y2="200" filter="none" fill-opacity="0.9"></rect>
                                            <g id="SvgjsG2637" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2638" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -10)"><text id="SvgjsText2640"
                                                        font-family="inherit" x="21.716223822699654" y="223"
                                                        text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                        font-weight="400" fill="#a1a5b7"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 22.993385314941406 217.5)">
                                                        <tspan id="SvgjsTspan2641">Organic Olive</tspan>
                                                        <title>Organic Olive</title>
                                                    </text><text id="SvgjsText2643" font-family="inherit"
                                                        x="65.14867146809897" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 66.14866638183594 217.5)">
                                                        <tspan id="SvgjsTspan2644">Premium Spreads</tspan>
                                                        <title>Premium Spreads</title>
                                                    </text><text id="SvgjsText2646" font-family="inherit"
                                                        x="108.58111911349829" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 109.58111572265625 217.5)">
                                                        <tspan id="SvgjsTspan2647">Chocolates</tspan>
                                                        <title>Chocolates</title>
                                                    </text><text id="SvgjsText2649" font-family="inherit"
                                                        x="152.01356675889758" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 153.1290283203125 217.5)">
                                                        <tspan id="SvgjsTspan2650">Organic Honey</tspan>
                                                        <title>Organic Honey</title>
                                                    </text><text id="SvgjsText2652" font-family="inherit"
                                                        x="195.44601440429688" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 196.44601440429688 217.5)">
                                                        <tspan id="SvgjsTspan2653">Organic Pasta</tspan>
                                                        <title>Organic Pasta</title>
                                                    </text><text id="SvgjsText2655" font-family="inherit"
                                                        x="238.87846204969617" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 239.87844848632812 217.5)">
                                                        <tspan id="SvgjsTspan2656">Premium Chocolates</tspan>
                                                        <title>Premium Chocolates</title>
                                                    </text><text id="SvgjsText2658" font-family="inherit"
                                                        x="282.31090969509546" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 283.3109130859375 217.5)">
                                                        <tspan id="SvgjsTspan2659">Organic Jams</tspan>
                                                        <title>Organic Jams</title>
                                                    </text><text id="SvgjsText2661" font-family="inherit"
                                                        x="325.74335734049475" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 327.0030059814453 217.5)">
                                                        <tspan id="SvgjsTspan2662">Organic Vinegar</tspan>
                                                        <title>Organic Vinegar</title>
                                                    </text><text id="SvgjsText2664" font-family="inherit"
                                                        x="369.17580498589405" y="223" text-anchor="end"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#a1a5b7" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: inherit;"
                                                        transform="rotate(-45 370.29331970214844 217.5)">
                                                        <tspan id="SvgjsTspan2665">Premium Chutney</tspan>
                                                        <title>Premium Chutney</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG2678" class="apexcharts-grid">
                                                <g id="SvgjsG2679" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine2681" x1="0" y1="0" x2="390.89202880859375"
                                                        y2="0" stroke="#eff2f5" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2682" x1="0" y1="50" x2="390.89202880859375"
                                                        y2="50" stroke="#eff2f5" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2683" x1="0" y1="100" x2="390.89202880859375"
                                                        y2="100" stroke="#eff2f5" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2684" x1="0" y1="150" x2="390.89202880859375"
                                                        y2="150" stroke="#eff2f5" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2685" x1="0" y1="200" x2="390.89202880859375"
                                                        y2="200" stroke="#eff2f5" stroke-dasharray="4"
                                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2680" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine2687" x1="0" y1="200" x2="390.89202880859375"
                                                    y2="200" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2686" x1="0" y1="1" x2="0" y2="200"
                                                    stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                </line>
                                            </g>
                                            <g id="SvgjsG2615" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG2616" class="apexcharts-series" rel="1"
                                                    seriesName="NoxofxStock" data:realIndex="0">
                                                    <path id="SvgjsPath2620"
                                                        d="M 15.201356675889757 200L 15.201356675889757 14.5Q 15.201356675889757 10.5 19.201356675889755 10.5L 22.23109096950955 10.5Q 26.23109096950955 10.5 26.23109096950955 14.5L 26.23109096950955 14.5L 26.23109096950955 200L 26.23109096950955 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#ff0032"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskf980wss7)"
                                                        pathTo="M 15.201356675889757 200L 15.201356675889757 14.5Q 15.201356675889757 10.5 19.201356675889755 10.5L 22.23109096950955 10.5Q 26.23109096950955 10.5 26.23109096950955 14.5L 26.23109096950955 14.5L 26.23109096950955 200L 26.23109096950955 200z"
                                                        pathFrom="M 15.201356675889757 200L 15.201356675889757 200L 26.23109096950955 200L 26.23109096950955 200L 26.23109096950955 200L 26.23109096950955 200L 26.23109096950955 200L 15.201356675889757 200"
                                                        cy="10.5" cx="57.63380432128906" j="0" val="758"
                                                        barHeight="189.5" barWidth="13.029734293619793"></path>
                                                    <path id="SvgjsPath2622"
                                                        d="M 58.63380432128906 200L 58.63380432128906 200Q 58.63380432128906 200 58.63380432128906 200L 69.66353861490886 200Q 69.66353861490886 200 69.66353861490886 200L 69.66353861490886 200L 69.66353861490886 200L 69.66353861490886 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#ff0032"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskf980wss7)"
                                                        pathTo="M 58.63380432128906 200L 58.63380432128906 200Q 58.63380432128906 200 58.63380432128906 200L 69.66353861490886 200Q 69.66353861490886 200 69.66353861490886 200L 69.66353861490886 200L 69.66353861490886 200L 69.66353861490886 200z"
                                                        pathFrom="M 58.63380432128906 200L 58.63380432128906 200L 69.66353861490886 200L 69.66353861490886 200L 69.66353861490886 200L 69.66353861490886 200L 69.66353861490886 200L 58.63380432128906 200"
                                                        cy="200" cx="101.06625196668837" j="1" val="0" barHeight="0"
                                                        barWidth="13.029734293619793"></path>
                                                    <path id="SvgjsPath2624"
                                                        d="M 102.06625196668837 200L 102.06625196668837 200Q 102.06625196668837 200 102.06625196668837 200L 113.09598626030817 200Q 113.09598626030817 200 113.09598626030817 200L 113.09598626030817 200L 113.09598626030817 200L 113.09598626030817 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#ff0032"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskf980wss7)"
                                                        pathTo="M 102.06625196668837 200L 102.06625196668837 200Q 102.06625196668837 200 102.06625196668837 200L 113.09598626030817 200Q 113.09598626030817 200 113.09598626030817 200L 113.09598626030817 200L 113.09598626030817 200L 113.09598626030817 200z"
                                                        pathFrom="M 102.06625196668837 200L 102.06625196668837 200L 113.09598626030817 200L 113.09598626030817 200L 113.09598626030817 200L 113.09598626030817 200L 113.09598626030817 200L 102.06625196668837 200"
                                                        cy="200" cx="144.49869961208768" j="2" val="0" barHeight="0"
                                                        barWidth="13.029734293619793"></path>
                                                    <path id="SvgjsPath2626"
                                                        d="M 145.49869961208768 200L 145.49869961208768 200Q 145.49869961208768 200 145.49869961208768 200L 156.52843390570746 200Q 156.52843390570746 200 156.52843390570746 200L 156.52843390570746 200L 156.52843390570746 200L 156.52843390570746 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#ff0032"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskf980wss7)"
                                                        pathTo="M 145.49869961208768 200L 145.49869961208768 200Q 145.49869961208768 200 145.49869961208768 200L 156.52843390570746 200Q 156.52843390570746 200 156.52843390570746 200L 156.52843390570746 200L 156.52843390570746 200L 156.52843390570746 200z"
                                                        pathFrom="M 145.49869961208768 200L 145.49869961208768 200L 156.52843390570746 200L 156.52843390570746 200L 156.52843390570746 200L 156.52843390570746 200L 156.52843390570746 200L 145.49869961208768 200"
                                                        cy="200" cx="187.931147257487" j="3" val="0" barHeight="0"
                                                        barWidth="13.029734293619793"></path>
                                                    <path id="SvgjsPath2628"
                                                        d="M 188.931147257487 200L 188.931147257487 200Q 188.931147257487 200 188.931147257487 200L 199.96088155110678 200Q 199.96088155110678 200 199.96088155110678 200L 199.96088155110678 200L 199.96088155110678 200L 199.96088155110678 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#ff0032"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskf980wss7)"
                                                        pathTo="M 188.931147257487 200L 188.931147257487 200Q 188.931147257487 200 188.931147257487 200L 199.96088155110678 200Q 199.96088155110678 200 199.96088155110678 200L 199.96088155110678 200L 199.96088155110678 200L 199.96088155110678 200z"
                                                        pathFrom="M 188.931147257487 200L 188.931147257487 200L 199.96088155110678 200L 199.96088155110678 200L 199.96088155110678 200L 199.96088155110678 200L 199.96088155110678 200L 188.931147257487 200"
                                                        cy="200" cx="231.3635949028863" j="4" val="0" barHeight="0"
                                                        barWidth="13.029734293619793"></path>
                                                    <path id="SvgjsPath2630"
                                                        d="M 232.3635949028863 200L 232.3635949028863 200Q 232.3635949028863 200 232.3635949028863 200L 243.39332919650607 200Q 243.39332919650607 200 243.39332919650607 200L 243.39332919650607 200L 243.39332919650607 200L 243.39332919650607 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#ff0032"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskf980wss7)"
                                                        pathTo="M 232.3635949028863 200L 232.3635949028863 200Q 232.3635949028863 200 232.3635949028863 200L 243.39332919650607 200Q 243.39332919650607 200 243.39332919650607 200L 243.39332919650607 200L 243.39332919650607 200L 243.39332919650607 200z"
                                                        pathFrom="M 232.3635949028863 200L 232.3635949028863 200L 243.39332919650607 200L 243.39332919650607 200L 243.39332919650607 200L 243.39332919650607 200L 243.39332919650607 200L 232.3635949028863 200"
                                                        cy="200" cx="274.7960425482856" j="5" val="0" barHeight="0"
                                                        barWidth="13.029734293619793"></path>
                                                    <path id="SvgjsPath2632"
                                                        d="M 275.7960425482856 200L 275.7960425482856 200Q 275.7960425482856 200 275.7960425482856 200L 286.8257768419054 200Q 286.8257768419054 200 286.8257768419054 200L 286.8257768419054 200L 286.8257768419054 200L 286.8257768419054 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#ff0032"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskf980wss7)"
                                                        pathTo="M 275.7960425482856 200L 275.7960425482856 200Q 275.7960425482856 200 275.7960425482856 200L 286.8257768419054 200Q 286.8257768419054 200 286.8257768419054 200L 286.8257768419054 200L 286.8257768419054 200L 286.8257768419054 200z"
                                                        pathFrom="M 275.7960425482856 200L 275.7960425482856 200L 286.8257768419054 200L 286.8257768419054 200L 286.8257768419054 200L 286.8257768419054 200L 286.8257768419054 200L 275.7960425482856 200"
                                                        cy="200" cx="318.2284901936849" j="6" val="0" barHeight="0"
                                                        barWidth="13.029734293619793"></path>
                                                    <path id="SvgjsPath2634"
                                                        d="M 319.2284901936849 200L 319.2284901936849 200Q 319.2284901936849 200 319.2284901936849 200L 330.2582244873047 200Q 330.2582244873047 200 330.2582244873047 200L 330.2582244873047 200L 330.2582244873047 200L 330.2582244873047 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#ff0032"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskf980wss7)"
                                                        pathTo="M 319.2284901936849 200L 319.2284901936849 200Q 319.2284901936849 200 319.2284901936849 200L 330.2582244873047 200Q 330.2582244873047 200 330.2582244873047 200L 330.2582244873047 200L 330.2582244873047 200L 330.2582244873047 200z"
                                                        pathFrom="M 319.2284901936849 200L 319.2284901936849 200L 330.2582244873047 200L 330.2582244873047 200L 330.2582244873047 200L 330.2582244873047 200L 330.2582244873047 200L 319.2284901936849 200"
                                                        cy="200" cx="361.66093783908417" j="7" val="0" barHeight="0"
                                                        barWidth="13.029734293619793"></path>
                                                    <path id="SvgjsPath2636"
                                                        d="M 362.66093783908417 200L 362.66093783908417 200Q 362.66093783908417 200 362.66093783908417 200L 373.690672132704 200Q 373.690672132704 200 373.690672132704 200L 373.690672132704 200L 373.690672132704 200L 373.690672132704 200z"
                                                        fill="rgba(0,158,247,1)" fill-opacity="1" stroke="#ff0032"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMaskf980wss7)"
                                                        pathTo="M 362.66093783908417 200L 362.66093783908417 200Q 362.66093783908417 200 362.66093783908417 200L 373.690672132704 200Q 373.690672132704 200 373.690672132704 200L 373.690672132704 200L 373.690672132704 200L 373.690672132704 200z"
                                                        pathFrom="M 362.66093783908417 200L 362.66093783908417 200L 373.690672132704 200L 373.690672132704 200L 373.690672132704 200L 373.690672132704 200L 373.690672132704 200L 362.66093783908417 200"
                                                        cy="200" cx="405.09338548448346" j="8" val="0" barHeight="0"
                                                        barWidth="13.029734293619793"></path>
                                                    <g id="SvgjsG2618" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG2619" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2621" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2623" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2625" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2627" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2629" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2631" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2633" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG2635" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2617" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2688" x1="0" y1="0" x2="390.89202880859375" y2="0"
                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2689" x1="0" y1="0" x2="390.89202880859375" y2="0"
                                                stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2690" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2691" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2692" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG2666" class="apexcharts-yaxis" rel="0"
                                            transform="translate(20.10797119140625, 0)">
                                            <g id="SvgjsG2667" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2668"
                                                    font-family="inherit" x="20" y="31.4" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2669">800</tspan>
                                                    <title>800</title>
                                                </text><text id="SvgjsText2670" font-family="inherit" x="20" y="81.4"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2671">600</tspan>
                                                    <title>600</title>
                                                </text><text id="SvgjsText2672" font-family="inherit" x="20" y="131.4"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2673">400</tspan>
                                                    <title>400</title>
                                                </text><text id="SvgjsText2674" font-family="inherit" x="20" y="181.4"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2675">200</tspan>
                                                    <title>200</title>
                                                </text><text id="SvgjsText2676" font-family="inherit" x="20" y="231.4"
                                                    text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#a1a5b7"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: inherit;">
                                                    <tspan id="SvgjsTspan2677">0</tspan>
                                                    <title>0</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG2604" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 175px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 158, 247);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 1-->
                </div>
            </div>
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Tables Widget 5-->
                    <div class="card card-xxl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                                <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 active"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-110px"></th>
                                                    <th class="p-0 min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/nsInLklyfDR1nqTtij3WeV1zqKvI1GNTNxqKh297.jpg"
                                                                    alt="New Test Product1"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/new-test-product1"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                            Test Product1</a>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED100.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/new-test-product1"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/xtMR8uXD6gZPVLoRRyKGd6K01mq7U97EQFdfLM4H.jpg"
                                                                    alt="Noan Olive Oil Intenso 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-intenso-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Intenso 250ml</a>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED99.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-intenso-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/X13RwxqstEEmZCFqR4fC1bk2gSooHT3FSohje2KC.jpg"
                                                                    alt="Monocultivar Leccino 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/monocultivar-leccino-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Monocultivar
                                                            Leccino 250ml</a>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED75.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/monocultivar-leccino-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/GP95ivsAu59pso2Bk4gXqREjfGLGUR76DBBPLkuh.jpg"
                                                                    alt="Apple Balsamic Vinegar 200ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/apple-balsamic-vinegar-200ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apple
                                                            Balsamic Vinegar 200ml</a>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED109.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/apple-balsamic-vinegar-200ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/gYUADy5wTuhUMBeLZY22E5E9Ydl6lX8mnq6zx5gm.jpg"
                                                                    alt="Noan Olive Oil Spice 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-spice-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Spice 250ml</a>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED83.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-spice-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/KKvQCyi5N7p5x8OZNcJM8azIoEJZb5UbpIcFHFoR.jpg"
                                                                    alt="Noan Olive Oil Mediterranean Herbs 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-mediterranean-herbs-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Mediterranean Herbs 250ml</a>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED83.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-mediterranean-herbs-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/16Rz9saKwGXrNMlmJV2OgTh5CRpE7rcDK8dD66ng.jpg"
                                                                    alt="Noan Olive Oil Lemon 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-lemon-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Lemon 250ml</a>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED83.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-lemon-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/rAsQou6s93VUei5BQ97V3dCFzvun5NdfX7DHCOS7.jpg"
                                                                    alt="Noan Olive Oil Douro 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-douro-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Douro 250ml</a>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED68.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-douro-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/65qIbrlI993Emg3IP3PsWgJUBX7mMWfLyjQZ5dIr.jpg"
                                                                    alt="Noan Olive Oil Classic 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-classic-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Classic 250ml</a>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED73.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-classic-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>




                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-110px"></th>
                                                    <th class="p-0 min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/nsInLklyfDR1nqTtij3WeV1zqKvI1GNTNxqKh297.jpg"
                                                                    alt="New Test Product1"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/new-test-product1"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                            Test Product1</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED100.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/new-test-product1"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/xtMR8uXD6gZPVLoRRyKGd6K01mq7U97EQFdfLM4H.jpg"
                                                                    alt="Noan Olive Oil Intenso 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-intenso-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Intenso 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED99.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-intenso-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/X13RwxqstEEmZCFqR4fC1bk2gSooHT3FSohje2KC.jpg"
                                                                    alt="Monocultivar Leccino 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/monocultivar-leccino-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Monocultivar
                                                            Leccino 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED75.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/monocultivar-leccino-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/GP95ivsAu59pso2Bk4gXqREjfGLGUR76DBBPLkuh.jpg"
                                                                    alt="Apple Balsamic Vinegar 200ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/apple-balsamic-vinegar-200ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apple
                                                            Balsamic Vinegar 200ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED109.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/apple-balsamic-vinegar-200ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/gYUADy5wTuhUMBeLZY22E5E9Ydl6lX8mnq6zx5gm.jpg"
                                                                    alt="Noan Olive Oil Spice 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-spice-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Spice 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED83.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-spice-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/KKvQCyi5N7p5x8OZNcJM8azIoEJZb5UbpIcFHFoR.jpg"
                                                                    alt="Noan Olive Oil Mediterranean Herbs 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-mediterranean-herbs-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Mediterranean Herbs 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED83.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-mediterranean-herbs-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/16Rz9saKwGXrNMlmJV2OgTh5CRpE7rcDK8dD66ng.jpg"
                                                                    alt="Noan Olive Oil Lemon 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-lemon-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Lemon 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED83.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-lemon-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/rAsQou6s93VUei5BQ97V3dCFzvun5NdfX7DHCOS7.jpg"
                                                                    alt="Noan Olive Oil Douro 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-douro-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Douro 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED68.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-douro-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/65qIbrlI993Emg3IP3PsWgJUBX7mMWfLyjQZ5dIr.jpg"
                                                                    alt="Noan Olive Oil Classic 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-classic-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Classic 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED73.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-classic-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-110px"></th>
                                                    <th class="p-0 min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/nsInLklyfDR1nqTtij3WeV1zqKvI1GNTNxqKh297.jpg"
                                                                    alt="New Test Product1"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/new-test-product1"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                            Test Product1</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED100.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/new-test-product1"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/xtMR8uXD6gZPVLoRRyKGd6K01mq7U97EQFdfLM4H.jpg"
                                                                    alt="Noan Olive Oil Intenso 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-intenso-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Intenso 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED99.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-intenso-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/X13RwxqstEEmZCFqR4fC1bk2gSooHT3FSohje2KC.jpg"
                                                                    alt="Monocultivar Leccino 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/monocultivar-leccino-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Monocultivar
                                                            Leccino 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED75.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/monocultivar-leccino-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/GP95ivsAu59pso2Bk4gXqREjfGLGUR76DBBPLkuh.jpg"
                                                                    alt="Apple Balsamic Vinegar 200ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/apple-balsamic-vinegar-200ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apple
                                                            Balsamic Vinegar 200ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED109.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/apple-balsamic-vinegar-200ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/gYUADy5wTuhUMBeLZY22E5E9Ydl6lX8mnq6zx5gm.jpg"
                                                                    alt="Noan Olive Oil Spice 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-spice-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Spice 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED83.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-spice-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/KKvQCyi5N7p5x8OZNcJM8azIoEJZb5UbpIcFHFoR.jpg"
                                                                    alt="Noan Olive Oil Mediterranean Herbs 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-mediterranean-herbs-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Mediterranean Herbs 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED83.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-mediterranean-herbs-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/16Rz9saKwGXrNMlmJV2OgTh5CRpE7rcDK8dD66ng.jpg"
                                                                    alt="Noan Olive Oil Lemon 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-lemon-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Lemon 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED83.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-lemon-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/rAsQou6s93VUei5BQ97V3dCFzvun5NdfX7DHCOS7.jpg"
                                                                    alt="Noan Olive Oil Douro 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-douro-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Douro 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED68.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-douro-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="http://localhost/oceanandseas/public/assets/img/placeholder.jpg"
                                                                    data-src="http://localhost/oceanandseas/public/uploads/all/65qIbrlI993Emg3IP3PsWgJUBX7mMWfLyjQZ5dIr.jpg"
                                                                    alt="Noan Olive Oil Classic 250ml"
                                                                    onerror="this.onerror=null;this.src='http://localhost/oceanandseas/public/assets/img/placeholder.jpg';"
                                                                    class="h-50 align-self-center">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-classic-250ml"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Noan
                                                            Olive Oil Classic 250ml</a>
                                                        <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                    </td>

                                                    <td class="text-end text-muted fw-bold"> <span
                                                            class="fw-700 text-primary">AED73.00</span></td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">New</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="http://localhost/oceanandseas/product/noan-olive-oil-classic-250ml"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                            <span class="svg-icon svg-icon-2">
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
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Modals-->
            <!--begin::Modal - New Product-->
            <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" id="kt_modal_add_event_form">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder" data-kt-calendar="title">Add Event</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="black"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Input group-->
                                <div class="fv-row mb-9">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold required mb-2">Event Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder=""
                                        name="calendar_event_name">
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-9">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">Event Description</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder=""
                                        name="calendar_event_description">
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-9">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">Event Location</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder=""
                                        name="calendar_event_location">
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-9">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="kt_calendar_datepicker_allday">
                                        <span class="form-check-label fw-bold" for="kt_calendar_datepicker_allday">All
                                            Day</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row row-cols-lg-2 g-10">
                                    <div class="col">
                                        <div class="fv-row mb-9">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2 required">Event Start Date</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid"
                                                name="calendar_event_start_date" placeholder="Pick a start date"
                                                id="kt_calendar_datepicker_start_date">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="col" data-kt-calendar="datepicker">
                                        <div class="fv-row mb-9">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">Event Start Time</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid"
                                                name="calendar_event_start_time" placeholder="Pick a start time"
                                                id="kt_calendar_datepicker_start_time">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row row-cols-lg-2 g-10">
                                    <div class="col">
                                        <div class="fv-row mb-9">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2 required">Event End Date</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid"
                                                name="calendar_event_end_date" placeholder="Pick a end date"
                                                id="kt_calendar_datepicker_end_date">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="col" data-kt-calendar="datepicker">
                                        <div class="fv-row mb-9">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">Event End Time</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid"
                                                name="calendar_event_end_time" placeholder="Pick a end time"
                                                id="kt_calendar_datepicker_end_time">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" id="kt_modal_add_event_cancel"
                                    class="btn btn-light me-3">Cancel</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - New Product-->
            <!--begin::Modal - New Product-->
            <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header border-0 justify-content-end">
                            <!--begin::Edit-->
                            <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2"
                                data-bs-toggle="tooltip" data-bs-dismiss="click" title="" id="kt_modal_view_event_edit"
                                data-bs-original-title="Edit Event">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                            fill="black"></path>
                                        <path
                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Edit-->
                            <!--begin::Edit-->
                            <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2"
                                data-bs-toggle="tooltip" data-bs-dismiss="click" title=""
                                id="kt_modal_view_event_delete" data-bs-original-title="Delete Event">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
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
                            </div>
                            <!--end::Edit-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary"
                                data-bs-toggle="tooltip" title="" data-bs-dismiss="modal"
                                data-bs-original-title="Hide Event">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                            transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body pt-0 pb-20 px-lg-17">
                            <!--begin::Row-->
                            <div class="d-flex">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                            fill="black"></path>
                                        <path
                                            d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                            fill="black"></path>
                                        <path
                                            d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <div class="mb-9">
                                    <!--begin::Event name-->
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="fs-3 fw-bolder me-3" data-kt-calendar="event_name"></span>
                                        <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                    </div>
                                    <!--end::Event name-->
                                    <!--begin::Event description-->
                                    <div class="fs-6" data-kt-calendar="event_description"></div>
                                    <!--end::Event description-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <circle fill="#000000" cx="12" cy="12" r="8"></circle>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Event start date/time-->
                                <div class="fs-6">
                                    <span class="fw-bolder">Starts</span>
                                    <span data-kt-calendar="event_start_date"></span>
                                </div>
                                <!--end::Event start date/time-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="d-flex align-items-center mb-9">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <circle fill="#000000" cx="12" cy="12" r="8"></circle>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Event end date/time-->
                                <div class="fs-6">
                                    <span class="fw-bolder">Ends</span>
                                    <span data-kt-calendar="event_end_date"></span>
                                </div>
                                <!--end::Event end date/time-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                            fill="black"></path>
                                        <path
                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Event location-->
                                <div class="fs-6" data-kt-calendar="event_location"></div>
                                <!--end::Event location-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                </div>
            </div>
            <!--end::Modal - New Product-->
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

</div>
@endsection