<!--begin::Aside-->
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">

    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="admin.dashboard">
           <img class="mw-100 h-35px logo" src="{{ uploaded_asset(get_setting('system_logo_white')) }}" alt="site_name">
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="black" />
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="black" />
                </svg>
            </span>
        </div>
    </div>
    <!--end::Brand-->


    <!-- begin: menu-->
    <div class="aside-menu flex-column-fluid">

        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0">

            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">

                    <div class="menu-item">
                        <div class="menu-content pb-2">
                            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                        </div>
                    </div>

                        <div class="menu-item ">
                            <a class="menu-link " href="{{route('admin.dashboard')}}" >
                                <span class="menu-icon"><i class="fa-lg fas fa-boxes"></i></span>
                                <span class="menu-title">Dashboard</span></a>
                            <div class="menu-sub menu-sub-accordion menu-active-bg"></div>
                        </div>

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ in_array(Request::segment(2),['products','categories','brands','taxes','attribute_types','units','colors','product-stock','attributes']) ? "hover show" : "" }}">
                                <a class="menu-link " href="javascript:void(0)">
                                    <span class="menu-icon"><i class="fa-lg fab fa-product-hunt"></i></span>
                                    <span class="menu-title">Products</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link {{Request::segment(2) == "products" ? "active" : ""}}" href="{{route('admin.products.create')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add New Product</span>
                                            </a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link {{Request::segment(2) == "products" ? "active" : ""}}" href="{{route('admin.products.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">All Products</span>
                                            </a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link {{Request::segment(2) == "product-stock" ? "active" : ""}}" href="{{route('admin.products.stock')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Stock</span>
                                            </a>
                                        </div>

                                        

                                        <div class="menu-item {{Request::segment(2) == "categories" ? "active" : ""}} ">
                                            <a class="menu-link" href="{{route('admin.categories.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Categories</span>
                                            </a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link {{areActiveRoutes(['admin.brands.index','admin.brands.create','admin.brands.edit'])}}" href="{{route('admin.brands.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Brands</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.taxes.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Taxes</span>
                                            </a>
                                        </div>

                                        <div class="menu-item {{Request::segment(2) == "attribute_types" ? "active" : ""}}  ">
                                            <a class="menu-link" href="{{route('admin.attribute_types.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Attribute Types</span>
                                            </a>
                                        </div>

                                        <div class="menu-item {{Request::segment(2) == "attributes" ? "active" : ""}}  ">
                                            <a class="menu-link" href="{{route('admin.attributes.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Attributes</span>
                                            </a>
                                        </div>
                                        
                                        <div class="menu-item {{Request::segment(2) == "units" ? "active" : ""}} ">
                                            <a class="menu-link" href="{{route('admin.units.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Units</span>
                                            </a>
                                        </div>
                                        
                                        <div class="menu-item {{Request::segment(3) == "colors" ? "active" : ""}} ">
                                            <a class="menu-link" href="{{route('admin.colors.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Colors</span>
                                            </a>
                                        </div>

                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.products.create')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Reviews</span>
                                            </a>
                                        </div>
                                </div>
                            </div>

                            <div class="menu-item {{Request::segment(2) == "permissions" ? "hover show" : ""}}   ">
                                <a class="menu-link " href="{{route('admin.permissions.index')}}" >
                                    <span class="menu-icon"><i class="fas fa-key"></i></span>
                                    <span class="menu-title">Permissions</span></a>
                                <div class="menu-sub menu-sub-accordion menu-active-bg"></div>
                            </div>

                            <div class="menu-item {{Request::segment(2) == "roles" ? "hover show" : ""}}   ">
                                <a class="menu-link " href="{{route('admin.roles.index')}}" >
                                    <span class="menu-icon"><i class="fas fa-mask"></i></span>
                                    <span class="menu-title">Roles</span></a>
                                <div class="menu-sub menu-sub-accordion menu-active-bg"></div>
                            </div>

                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{Request::segment(2) == "customers" ? "hover show" : ""}}" >
                                <a class="menu-link " href="javascript:void(0)">
                                    <span class="menu-icon"><i class="fa-lg fas fa-user-tie"></i></span>
                                    <span class="menu-title">{{translate("Customers")}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.customers.create')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{translate("Customer Add")}}</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.customers.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{translate("Customer List")}}</span>
                                            </a>
                                        </div>
                                </div>
                            </div>

                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{Request::segment(2) == "vendors" ? "hover show" : ""}}" >
                                <a class="menu-link " href="javascript:void(0)">
                                    <span class="menu-icon"><i class="fa-lg fas fa-hospital-user"></i></span>
                                    <span class="menu-title">{{translate("Vendors")}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.vendors.create')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{translate("Vendor Add")}}</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.vendors.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{translate("Vendor List")}}</span>
                                            </a>
                                        </div>
                                </div>
                            </div>


                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{Request::segment(2) == "staff" ? "hover show" : ""}}" >
                                <a class="menu-link " href="javascript:void(0)">
                                    <span class="menu-icon"><i class="fa-lg far fa-user"></i></span>
                                    <span class="menu-title">{{translate("Staff")}}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.staff.create')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{translate("Staff Add")}}</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('admin.staff.index')}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{translate("Staff List")}}</span>
                                            </a>
                                        </div>
                                </div>
                            </div>

                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion" >
                                <a class="menu-link " href="javascript:void(0)">
                                    <span class="menu-icon"><i class="fa-lg fab fa-medium-m"></i>
                                    </span>
                                    <span class="menu-title">Marketing</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link {{ areActiveRoutes(['admin.flash_deals.index', 'admin.flash_deals.index'])}}" href="{{route('admin.flash_deals.index')}}">
                                                <span class="menu-icon">
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                            <path d="M12.4208204,17.1583592 L15.4572949,11.0854102 C15.6425368,10.7149263 15.4923686,10.2644215 15.1218847,10.0791796 C15.0177431,10.0271088 14.9029083,10 14.7864745,10 L12,10 L12,7.17705098 C12,6.76283742 11.6642136,6.42705098 11.25,6.42705098 C10.965921,6.42705098 10.7062236,6.58755277 10.5791796,6.84164079 L7.5427051,12.9145898 C7.35746316,13.2850737 7.50763142,13.7355785 7.87811529,13.9208204 C7.98225687,13.9728912 8.09709167,14 8.21352549,14 L11,14 L11,16.822949 C11,17.2371626 11.3357864,17.572949 11.75,17.572949 C12.034079,17.572949 12.2937764,17.4124472 12.4208204,17.1583592 Z" fill="#000000"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span>
                                                </span>
                                                <span class="menu-title">Flash Deals</span>
                                            </a>
                                        </div>
                                </div>
                            </div>

                            


                            <div class="menu-item ">
                                <a class="menu-link {{ areActiveRoutes(['uploaded-files.index', 'uploaded-files.index'])}}" href="{{route('uploaded-files.index') }}">
                                    <span class="menu-icon"><i class="fa-lg fas fa-cloud-upload-alt"></i></span>
                                    <span class="menu-title">Uploads</span></a>
                                <div class="menu-sub menu-sub-accordion menu-active-bg"></div>
                            </div>

                            
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion " >
                                <a class="menu-link" href="javascript:void(0)">
                                    <span class="menu-icon"><i class="fa-lg fas fa-wrench"></i></span>
                                    <span class="menu-title">Settings</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">

                                         <div class="menu-item">
                                            <a class="menu-link {{ areActiveRoutes(['admin.general_setting.index'])}}" href="{{route("admin.general_setting.index")}}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Genral</span>
                                            </a>
                                        </div>


                                </div>
                            </div>





               </div>
           </div>
       </div>
 </div>

