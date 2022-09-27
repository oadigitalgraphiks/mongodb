@extends('admin.layouts.app')

@section('content')

<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate("All Languages")}}</h1>
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
                    <li class="breadcrumb-item text-dark">{{translate("Languages")}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid mt-10" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="row g-5 g-xl-8">
                <div class="col-xl-6">
                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <h5 class="mb-0 h6">{{ translate('Default Language') }}</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-xl-3">
                                        <label class="col-from-label">{{ translate('Default Language') }}</label>
                                    </div>
                                    <input type="hidden" name="types[]" value="DEFAULT_LANGUAGE">
                                    <div class="col-xl-6">
                                        <select class="form-control demo-select2-placeholder" name="DEFAULT_LANGUAGE">
                                            @foreach (\App\Models\Language::all() as $key => $language)
                                                <option value="{{ $language->code }}" <?php if(env('DEFAULT_LANGUAGE') == $language->code) echo 'selected'?> >{{ $language->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-3">
                                        <button type="submit" class="btn btn-info">{{translate('Save')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="post d-flex flex-column-fluid mt-10" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <form class="" id="sort_blogs" action="" method="GET">
                <div class="card card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            <h2>{{translate('Language')}}</h2>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <a href="{{ route('admin.languages.create') }}" class="btn btn-primary">
                                {{ translate('Add New Language') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                <thead>
                                    <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2">
                                            #
                                        </th>
                                        <th class="text-center min-w-200px">{{ translate('Name') }}</th>
                                        <th class="text-center min-w-75px">{{ translate('Code') }}</th>
                                        <th class="text-center min-w-150px">{{ translate('RTL') }}</th>
                                        <th class="text-center min-w-100px">{{ translate('Options') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-bold text-gray-600">
                                    @foreach ($languages as $key => $language)
                                        <tr>
                                            <td class="text-center pe-0">
                                                <span class="fw-bolder">{{ ($key+1) + ($languages->currentPage() - 1)*$languages->perPage() }}</span>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="ms-5">
                                                        {{ $language->name }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center pe-0">
                                                <span class="fw-bolder">
                                                    {{ $language->code }}
                                                </span>
                                            </td>
                                            <td class="text-center pe-0" data-order="32">
                                                <span class="fw-bolder ms-3">
                                                    <label
                                                    class="form-check form-switch form-check-custom form-check-solid d-block">
                                                    <input class="form-check-input" onchange="update_rtl_status(this)" value="{{ $language->id }}" type="checkbox"
                                                        <?php if($language->rtl == 1) echo "checked";?>>
                                                </label>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm" href="{{route('admin.languages.show', $language->id)}}" title="{{ translate('Translation') }}">
                                                    <i class="las la-language"></i>
                                                </a>
                                                <a href="{{route('admin.languages.edit', $language->id)}}" class="btn btn-icon btn-bg-light btn-color-primary btn-active-color-primary btn-sm me-1" title="{{ translate('Edit') }}">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-icon btn-bg-light btn-color-danger btn-active-color-danger btn-sm me-1 confirm-delete" data-href="{{route('admin.languages.destroy', $language->id)}}" title="{{ translate('Delete') }}">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="aiz-pagination">
                            {{ $languages->appends(request()->input())->links() }}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('modal')
    @include('admin.components.delete_modal')
@endsection


@section('script')
    <script type="text/javascript">
        function update_rtl_status(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('admin.languages.update_rtl_status') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    AIZ.plugins.notify('success', '{{ translate("RTL status updated successfully") }}');
                    location.reload();
                }
                else{
                    AIZ.plugins.notify('danger', '{{ translate("Something went wrong") }}');
                }
            });
        }
    </script>
@endsection
