@extends('admin.layouts.app')


@section('css')
<style>
    .form-check.form-check-custom {
        /* display: flex; */
        display: block!important;
    
    }
</style>
<link rel="stylesheet" href="{{asset('/admin/assets/backend/css/confirm.css')}}">

@endsection
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{translate('All Products')}}</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">{{translate('home')}}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted"> <a class="text-muted" href="{{route('admin.products.index')}}" target="_blank" rel="noopener noreferrer">{{translate('products')}}</a> </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-fluid">

            <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <div><i style="top: 16px;"  class="fa fa-search position-absolute ms-4"></i>
                                        <input type="text" class="search-data form-control form-control-solid w-250px ps-14" placeholder="Search" id="search" name="search"  />
                                    </div>
                                </div>
                            </div>

                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <span class="text-muted">Displaying 
                                    <span class="current_show" >0</span> of 
                                    <span class="count_show"  >0</span> records</span>

                                    <div class="d-flex align-items-center py-3">
                                        <select class="data_item_length form-control form-control-sm font-weight-bold mr-4 border-0 bg-light" style="width: 75px;">
                                            <option value="all">All</option>
                                            <option value="10">10</option>
                                            <option value="50">50</option>
                                            <option value="200">200</option>
                                        </select>
                                    </div>

                                <a href="{{route('admin.products.create')}}" class="btn btn-primary">Add New</a>
                                <div class="mx-1 dropdown">
                                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu actions" aria-labelledby="dropdownMenuButton">
                                      <button type="button" data-value="0" data-action="delete" class="dropdown-item action_button">{{translate('Delete')}} </button>
                                    
                                      <button type="button" data-value="1" data-action="active" class="dropdown-item action_button">{{translate('Active')}} </button>
                                      <button type="button" data-value="0" data-action="active" class="dropdown-item action_button">{{translate('Deactive')}} </button>

                                      <button type="button" data-value="draft" data-action="status" class="dropdown-item action_button">{{translate('Draft')}} </button>

                                      <button type="button" data-value="published" data-action="status" class="dropdown-item action_button">{{translate('Published')}} </button>

                                      <button type="button" data-value="pending" data-action="status" class="dropdown-item action_button">{{translate('Pending')}} </button>
                                    </div>
                                </div>
                              </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="my-table table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3  " >
                                    <thead>
                                        <tr class="text-center  fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3"> <input class="bulk_check form-check-input" type="checkbox"  value="1" />
                                                </div>
                                            </th>
                                            <th class="text-center">{{translate('Image')}}</th>
                                            <th class="">{{translate('Name')}}</th>
                                            <th class="">{{translate('SKU')}}</th>
                                            <th class="">{{translate('Category')}}</th>
                                            <th class="text-center">{{translate('Featured')}}</th>
                                            <th class="text-center">{{translate('Status')}}</th>
                                            <th class="text-center">{{translate('Active')}}</th>
                                            <th class="text-center min-w-150px">{{translate('Actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="show_data fw-bold text-gray-600">
                                          

                                    </tbody>
                                </table>
                            </div>
                            <div class="pagination" >
                               <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="display_pagnination d-flex flex-wrap py-2 mr-3">
                                    
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
       </div>
</div>
@endsection



@section('script')
    <script src="{{asset('/admin/assets/backend/js/confirm.js')}}"></script>
    <script>

       let search;
       let currentPage = 1;
       let perPage = '';

       const getUser = () => {

           $('.show_data').empty();
           $('.show_data').html(`
                <tr>
                    <td class="text-center" ><p>Loading</p></td>
                </tr>
           `);
            
            $.ajax({
                url: "{{ route('admin.products.index')}}",
                data: {
                    search:search,
                    page:currentPage,
                    count:perPage,
                },
                dataType: "json",
                success: function(response) {
                
                        $('.show_data').empty();    
                        $('.current_show').text(response.to);
                        $('.count_show').text(response.total);

                    if(response.data.length > 0){

                        //Pagination
                        $('.display_pagnination').empty();
                        response.links.forEach(link => {
                            let pageId = parseInt(link.label);
                            if(pageId){
                            $('.display_pagnination').append(`<a data-href="${pageId}" class="btn btn-icon btn-sm  border-0 btn-light m-1  ${link.active ? 'active' : ''}"> ${link.label}</a>`);
                            }
                        });
                   
                       //Data
                        response.data.forEach(item => {

                                $('.show_data').append(`
                                        <tr class="item${item._id}" >
                                            <td class="checkboxes" > 
                                                <div class="row_selected_checkbox form-check form-check-sm form-check-custom form-check-solid">
                                                <input class=" form-check-input" type="checkbox" value="${item._id}" />
                                                </div>
                                            </td>
                                            <td class="text-center"><img src="${item.picture_data}" /></td>
                                            <td class="">${item.name}</td>
                                            <td class="">${item.sku}</td>
                                            <td class="">${item.category ? item.category.name : 'none'} Category</td>
                                            <td class="text-center">
                                                <span class="fw-bolder ms-3">
                                                <label class=" form-check form-switch form-check-custom form-check-solid d-block">
                                                <input class="featured_toggle form-check-input" value="${item._id}" type="checkbox" ${item.featured == '1' ? 'checked' : '' } /> </label>
                                                </span> 
                                                
                                            </td>
                                            <td class="text-center">${item.status}</td>
                                            <td class="text-center"><span class="fw-bolder ms-3">
                                                <label class=" form-check form-switch form-check-custom form-check-solid d-block">
                                                <input class="active_toggle form-check-input" value="${item._id}" type="checkbox" ${item.active == '1' ? 'checked' : '' } /> </label>
                                                </span> 
                                            </td>
                                            <td class="text-center min-w-150px">
                                                <a href="${item.edit}" class="edit_btn btn btn-icon btn-bg-light px-3"><i class="fa-lg text-primary fas fa-edit"></i></a>
                                                <a data-href="${item._id}" class="delete_btn btn btn-icon btn-bg-light px-3">
                                                 <i  class="text-danger fa-lg far fa-trash-alt" ></i>
                                                </a>

                                            </td>
                                        </tr>       
                                `);
                         });


                    }else{

                        $('.show_data').empty();
                        $('.show_data').html(`
                            <tr>
                                <td colspan="9" ><p class="text-center">Records Not Found</p></td>
                            </tr>
                        `);
                    }

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    $('.show_data').empty();                    
                } 

            });

        }



        //Events

        $('.bulk_check').change(function(){

            if($(this).prop("checked") == true){
                   $('.show_data .checkboxes .form-check-input').prop("checked", true);
            }else if($(this).prop("checked") == false){
                   $('.show_data .checkboxes .form-check-input').prop("checked", false);
            }
        });


        $('.actions button').click(function(){

                let action = $(this).attr("data-action"); 
                let value = $(this).attr("data-value"); 
                let idz = [];
                
                $('.show_data .checkboxes .form-check-input:checked').each(function() {
                    idz.push($(this).val());
                });

                if(idz.length == 0){
                    alert('Please Select Record');
                    return false;
                }

                $.confirm({
                closeIcon: true, 
                title: false,
                content:'Are you sure to continue ?',
                buttons: { 
                        Ok:function(){
                                $.get("{{route('admin.products.bulk')}}",
                                { 
                                    idz:idz.toString(),
                                    action:action,
                                    value:value
                                }, function(data, status){
                                    AIZ.plugins.notify('success','Action Performed Successfully');
                                    getUser();
                                });  
                        },
                        Cancel: {
                            action: function () {
                            }
                        }
                    }
                });

        });


        $('.search-data').change(function(){
               search = $('.search-data').val(); 
               getUser();
        });

        $('.data_item_length').change(function(){
            let pagecount = parseInt($(this).val()) | '';
            perPage = pagecount;
            getUser();
        });

        
        $(".display_pagnination").delegate("a", "click", function(){
               $(".display_pagnination").empty();
               let href = $(this).attr("data-href"); 
               currentPage = href;
               getUser();
        });

        

        // onDelete
        $(".show_data").delegate(".delete_btn", "click", function(){
            let id =  $(this).val();
            $.confirm({
                closeIcon: true, 
                title: false,
                content:'Are you sure to continue ?',
                buttons: { 
                        Ok:function(){

                            $.get("{{route('admin.products.bulk')}}",
                                    { 
                                        idz:id,
                                        action:'delete',
                                        value:0
                                    }, function(data, status){                   
                                        AIZ.plugins.notify('success','Record Deleted');
                                        getUser();
                                });
                        },
                        Cancel: {
                            action: function () {
                            }
                        }
                    }
                });
 
        });

        

        $(".show_data").delegate(".featured_toggle", "change", function(){

            let id =  $(this).val();
            if($(this).prop("checked") == true){
                        
                        $.get("{{route('admin.products.bulk')}}",
                        { 
                            idz:id,
                            action:'featured',
                            value:1
                        }, function(data, status){
                            // AIZ.plugins.notify('success','Success');
                        });

            }else if($(this).prop("checked") == false){
                    
                    $.get("{{route('admin.products.bulk')}}",
                    { 
                        idz:id,
                        action:'featured',
                        value:0
                    }, function(data, status){ 
                    });
            }

        });


        $(".show_data").delegate(".active_toggle", "change", function(){

            let id =  $(this).val();
            if($(this).prop("checked") == true){
                        
                        $.get("{{route('admin.products.bulk')}}",
                        { 
                            idz:id,
                            action:'active',
                            value:1
                        }, function(data, status){
                            // AIZ.plugins.notify('success','Success');
                        });

            }else if($(this).prop("checked") == false){
                    
                    $.get("{{route('admin.products.bulk')}}",
                    { 
                        idz:id,
                        action:'active',
                        value:0
                    }, function(data, status){ 
                    });
            }

        });




        



        getUser();

    </script>
@endsection