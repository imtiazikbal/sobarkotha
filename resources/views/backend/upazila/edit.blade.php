@extends('layout.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div>
                    <form action="{{ url('/admin/update/upazila/'.$upazila->id) }}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                    <label for="borderInput" class="form-label">Division Name</label>
                    
                            <select name="division_id" class="form-select mb-3" aria-label="Default select example">
                                <option selected>Select your Division </option>
                               @foreach ($division as $division )
                                <option {{ $division->id === $upazila->district->division->id?'selected':'' }} value="{{ $division->id }}">{{ $division->div_name }}</option>
  
                               @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label for="borderInput" class="form-label">District Name</label>
                            
                                    <select name="district_id" class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Select your Division </option>
                                       @foreach ($district as $district )
                                        <option {{ $district->id === $upazila->district->id?'selected':'' }} value="{{ $district->id }}">{{ $district->dist_name }}</option>
          
                                       @endforeach
                                    </select>
                                </div>
                    <label for="borderInput" class="form-label">Upazila  Name</label>
                    <input type="text" value="{{ $upazila->upazila_name }}" name="upazila_name" class="form-control border-dashed" id="borderInput" placeholder="SubCategory Name">
                    
                    <div>
                    <button type="submit" class="btn btn-primary mt-2">Update Upazila</button>                  
                    
                    <a href="{{ url('/admin/district') }}" class="btn btn-primary mt-2">All Upazila</a>                  
                    
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        
</div>


  
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
    })

    ;
    (async () => {
        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}',
        })
    })()
</script>
@endif

@endsection
