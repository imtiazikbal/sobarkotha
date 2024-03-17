@extends('layout.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div>
                    <form action="{{ url('/admin/store/district') }}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                    <label for="borderInput" class="form-label">Division Name</label>

                            <select name="division_id" class="form-select mb-3" aria-label="Default select example">
                                <option selected="">Select your Division </option>
                                @foreach ($division as $division )

                                <option value="{{ $division->id }}">{{ $division->div_name }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                    <label for="borderInput" class="form-label">District Name</label>
                    <input type="text" name="dist_name" class="form-control border-dashed" id="borderInput" placeholder="Division Name">
                    @if ($errors->has('dist_name'))
                     <span class="error">{{ $errors->first('dist_name') }}</span>
                    @endif
                    <div>
                    <button type="submit" class="btn btn-primary mt-2">Add Division</button>                  

                    <a href="{{ url('/admin/subCategory') }}" class="btn btn-primary mt-2">All Division</a>                  

                    </div>
                  </form>
                </div>
                </div>
            </div>
        </div>
        
</div>

<script>
  
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