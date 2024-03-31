@extends('layout.app')

@section('content')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sortable Table Rows</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    <div class="container-fluid mt-20">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h3 class="text-center mb-4">Sortable Table Rows Using jQuery UI Sortable in Laravel</h3>
                <table id="table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="30px">Sl No</th>  
                            <th>Title</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody id="page_list">
                        <!-- Populate table rows with data from the controller -->
                        @foreach ($category as $index => $cat)
                        <tr style="cursor: move;" class="row1" data-id="{{ $cat->id }}">
                            <td class="pl-3"><i class="fa fa-sort"></i>{{ $index + 1 }}</td>
                            <td>{{$cat->cName}}</td>
                            <td>{{ $cat->created_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody> 
                </table>
                <hr>
                <h5>Drag and drop the table rows and <button class="btn btn-success btn-sm" onclick="window.location.reload()">REFRESH</button></h5> 
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $("#page_list").sortable({
                placeholder: "ui-state-highlight",
                update: function(event, ui) {
                    var page_id_array = $("#page_list").sortable("toArray", { attribute: "data-id" });

                    $.ajax({
                        url: "{{ route('sortCategory') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            page_id_array: page_id_array
                        },
                        success: function(data) {
                            alert(data);
                            location.reload();
                        }
                    });
                }
            });
        });
    </script>

@if (session()->has('success'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast',
        },
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true,
    });

    (async () => {
        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}',
        })
    })();
</script>
@endif
@endsection
