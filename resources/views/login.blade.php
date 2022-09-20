@extends('app')
@section('content')

<div class="aiz-main-wrapper d-flex">
    <div class="flex-grow-1">
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
                    style="background-color: {{ get_setting('bg_color') }};">
                    <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                        <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                            <img src="{{ uploaded_asset(get_setting('admin_login_background')) }}" class="h-60px" height="60">
                            <br>
                    <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">{{translate("Welcome to")}} {{ get_setting('site_name')}}</h1>
                    <p class="fw-bold fs-2" style="color: #986923;">{{translate("Discover Amazing")}} {{ get_setting('site_name')}}
                    <br />{{translate("Login to your account")}}.</p>
                </div>

                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                    style="background-image: url("></div>
            </div>
        </div>


        <div class="d-flex flex-column flex-lg-row-fluid py-20">
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                       <form class="form w-100" id="kt_sign_in_form" method="POST" action="{{route('login_submit')}}">
                          @csrf
                                <div class="text-center mb-10">
                                    <h1 class="text-dark mb-3">Sign In to {{ get_setting('site_name')}}</h1>
                                    @if(Session::has('message'))
                                        <p class="alert alert-danger">{{ Session::get('message') }}</p>
                                    @endif
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                    <input required class="form-control form-control-lg form-control-solid " type="text" name="email" id="email" autocomplete="off" />
                                </div>

                                <div class="fv-row mb-10">
                                    <div class="d-flex flex-stack mb-2">
                                      <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                            <a href="{{route('register')}}" class="link-primary fs-6 fw-bolder">Dont Have Account ?</a>
                                    </div>
                                    <input required type="password"
                                        class="form-control form-control-lg form-control-solid"
                                        name="password" required placeholder="Password" />
                                </div>

                                <div class="text-center">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5"><span class="indicator-label">Submit</span>
                                    </button>
                                </div>

                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
