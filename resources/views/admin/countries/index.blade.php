@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate("All Countries")}}</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">{{translate("Dashboard")}}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{translate("Settings")}}</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">{{translate("Countries")}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <form class="" action="" method="GET">
                <div class="card card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        {{-- <div class="card-title">
                            <h2>{{ translate('Countries') }}</h2>
                        </div> --}}
                        <div class="card-toolbar flex-row-fluid gap-5">
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="fas fa-search position-absolute ms-4 fs-4"></i>
                                <input type="text" class="form-control form-control-solid w-300px ps-14" id="search" name="sort_country" @isset($sort_country) value="{{ $sort_country }}" @endisset placeholder="{{ translate('Type country name & Enter') }}" />
                            </div>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <span class="text-muted">{{translate("Displaying")}}
                            <span class="current_show">{{ ($countries->currentPage() > 1) ? (($countries->currentPage()-1)* $countries->perPage()) : ((count($countries) > 0) ? 1 : 0) }}-{{ ($countries->currentPage() > 1) ? (($countries->currentPage()-1)* $countries->perPage() + count($countries)) : count($countries)}}</span> of
                            <span class="count_show">{{$countries->total()}}</span> {{translate("records")}}</span>
                            <a href="{{route('admin.countries.create')}}" class="btn btn-primary">{{translate("Add New Country")}}</a>
                        </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                <thead>
                                    <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            #
                                        </th>
                                        <th class="min-w-200px">{{ translate('Name') }}</th>
                                        <th class="text-center min-w-75px">{{ translate('Code') }}</th>
                                        <th class="text-center min-w-175px">{{ translate('Show/Hide') }}</th>
                                        <th class="text-end">{{ translate('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                    @foreach ($countries as $key => $country)
                                        <tr>
                                            <td class="text-center pe-0">
                                                <span
                                                    class="fw-bolder">{{ $key + 1 + ($countries->currentPage() - 1) * $countries->perPage() }}</span>
                                            </td>
                                            <td class="text-center pe-0">
                                                <span class="fw-bolder">
                                                    {{ $country->name }}
                                                </span>
                                            </td>
                                            <td class="text-center pe-0">
                                                <span class="fw-bolder">
                                                    {{ $country->code }}
                                                </span>
                                            </td>
                                            <td class="text-center pe-0" data-order="32">
                                                <span class="fw-bolder ms-3">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid d-block">
                                                        <input class="form-check-input" onchange="update_status(this)"
                                                            value="{{ $country->id }}" type="checkbox"
                                                            <?php if ($country->status == 1) {
                                                                echo 'checked';
                                                            } ?>>
                                                    </label>
                                                </span>
                                            </td>
                                            <td class="text-end">
                                                <a href="{{ route('admin.countries.edit',$country->id) }}" data-toggle="tooltip" title="{{ translate('Edit Country') }}" class="btn btn-icon btn-bg-light  btn-color-primary btn-active-color-primary btn-sm me-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="aiz-pagination">
                            {{ $countries->appends(request()->input())->links('admin.components.pagination') }}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
        function update_status(el) {
            if (el.checked) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('admin.countries.status') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', '{{ translate('Country status updated successfully') }}');
                } else {
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }
    </script>
@endsection
