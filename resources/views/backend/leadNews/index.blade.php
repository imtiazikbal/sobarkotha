@extends('layout.app')
@section('content')
<div class="container-fluid mt-5">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Datatables</h4>
  
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Datatables</li>
                    </ol>
                </div>
  
            </div>
        </div>
    </div>
    <!-- end page title -->
  
  
  
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="header d-flex justify-content-between">
                 
                    <div class="card-header">
                      <h5 class="card-title mb-0">All Category</h5>
                  </div>
                  <div class="card-header">
                    <a href="{{ url('/admin/create/category') }}" class="btn btn-primary">Add Category</a>
                </div>
  
                </div>
                
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                   SL NO
                                </th>
                                <th>News</th>
                                <th>Division</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody id="page_list" class="list-unstyled">
                            @if ($featured)
                                @php $i = 0; @endphp
                                @foreach ($featured as $news)
                                    @php $i++; @endphp
                                    
                                    <tr style="cursor: move;" id="{{$news->id}}">
                                        <td>{{ $i }}</td>
                                        <td class="">
                                            <img src="{{ asset($news->image) }}" width="auto" height="30">
                                        </td>
                                    
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <input type="hidden" name="showtotop" id="showtotop" />
                    </table>
                    <script>
                        $(document).ready(function(){
                         $( "#page_list" ).sortable({
                          placeholder : "ui-state-highlight",
                          update  : function(event, ui)
                          {
                           var page_id_array = new Array();
                           $('#page_list tr').each(function(){
                            page_id_array.push($(this).attr("id"));
                           });
                           $.ajax({
                            url:"newsorderupdate.php",
                            method:"POST",
                            data:{page_id_array:page_id_array},
                            success:function(data) { 	
                                alert(data); 
                                location.reload();
                            }
                           });
                          }
                         });

                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection