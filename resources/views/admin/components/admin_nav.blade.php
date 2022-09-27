<div id="kt_header" class="header align-items-stretch">
    <div class="container-fluid d-flex align-items-stretch justify-content-between">

        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
            </div>
        </div>

        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{route('admin.dashboard')}}" class="d-lg-none">
                <img alt="Logo" src="{{ uploaded_asset(get_setting('admin_login_background')) }}" class="h-30px">
            </a>
        </div>
        <!--end::Mobile logo-->

        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">

            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                        <div class="menu-item me-lg-1">
                            <a class="menu-link active py-3" href="{{ route("admin.dashboard") }}">
                                <span class="menu-title">{{translate("Dashboard")}}</span>
                            </a>
                        </div>
                        <div class="menu-item me-lg-1">
                            <a class="py-3 btn btn-light-danger font-weight-bold mr-2" href="{{ route('cache.clear')}}">
                                <span class="menu-title">{{translate("Clear Cache")}}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-stretch flex-shrink-0">
                <div class="d-flex align-items-stretch flex-shrink-0">
                    <div class="d-flex align-items-center ms-1 ms-lg-3">

                        <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <i class="far fa-comment fs-2"></i>
                            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                        </div>

                        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" style="">

                            <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url({{asset('admin/assets/images/pattern-1.jpg')}})">

                                <h3 class="fw-bold text-white px-9 mt-10 mb-6">Notifications
                                    <span class="badge badge-circle badge-primary">16</span>
                                </h3>

                                <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Orders</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="kt_topbar_notifications_3" role="tabpanel">
                                    <div class="scroll-y mh-325px my-5 px-8">
                                        <div class="d-flex flex-stack py-4">
                                            <div class="d-flex align-items-center me-2">
                                                {{-- <span class="w-70px badge badge-light-success me-4">Order code: </span> --}}
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold">Order code: 20220112-11151971</a>
                                            </div>
                                            <span class="badge badge-light fs-8">January 11 2022, 10:15 pm</span>
                                        </div>
                                    </div>

                                    <div class="py-3 text-center border-top">
                                        <a href="http://localhost/oceanandseas/admin/all-notification" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                            <span class="svg-icon svg-icon-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                                                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Notifications-->
                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-end">
                            <img src="{{asset('admin/assets/img/avatar-place.png')}}" onerror="this.onerror=null;this.src='{{asset('admin/assets/img/avatar-place.png')}}';" alt="user">
                        </div>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                            data-kt-menu="true" style="">
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="{{asset('admin/assets/img/avatar-place.png')}}" onerror="this.onerror=null;this.src='{{asset('admin/assets/img/avatar-place.png')}}';">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">{{Auth::user()->name}}
                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">admin</span>
                                        </div>
                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{Auth::user()->email}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-2"></div>
                            <div class="menu-item px-5" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="left-start" id="lang-change">
                                <a href="javascript:void(0);" class="menu-link px-5">
                                    <span class="menu-title position-relative">{{translate("Language")}}
                                        @php
                                            if(Session::has('locale') == true){
                                                $locale = Session::get('locale', Config::get('app.locale'));
                                            }
                                            else{
                                                $locale = env('DEFAULT_LANGUAGE');
                                            }
                                            $lang = \App\Models\Language::select('name')->where("code",$locale)->first();
                                        @endphp
                                        <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">{{$lang['name']}}
                                        <img class="w-15px h-15px rounded-1 ms-2"  src="{{ asset('admin/assets/img/flags/'.$locale.'.png') }}" alt=""></span>
                                    </span>
                                </a>
                                <div class="menu-sub menu-sub-dropdown w-175px py-4" id="lang-change">
                                    @foreach (\App\Models\Language::all() as $key => $language)
                                    <div class="menu-item px-3">
                                        <a href="javascript:void(0)" data-flag="{{ $language->code }}" class="menu-link d-flex px-5 @if($locale == $language->code) active @endif">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="{{ asset('admin/assets/img/flags/'.$language->code.'.png') }}" alt="{{ $language->name }}" />
                                            </span>
                                            {{ $language->name }}
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="separator my-2"></div>
                            <div class="menu-item px-5">
                                <a href="{{route('admin.logout')}}" class="menu-link px-5">{{translate("Sign Out")}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center d-lg-none ms-2 me-n3"
                        title="Show header menu">
                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
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
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
