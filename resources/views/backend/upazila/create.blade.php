@extends('layout.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div>
                    <form action="{{ url('/admin/store/upazila') }}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                    <label for="borderInput" class="form-label">District Name</label>

                            <select name="district_id" class="form-select mb-3" aria-label="Default select example">
                                <option selected="">Select your Division </option>
                                @foreach ($district as $district )

                                <option value="{{ $district->id }}">{{ $district->dist_name }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                    <label for="borderInput" class="form-label">Upazila Name</label>
                    <input type="text" name="upazila_name" class="form-control border-dashed" id="borderInput" placeholder="Upazila Name">
                    @if ($errors->has('upazila_name'))
                     <span class="error">{{ $errors->first('upazila_name') }}</span>
                    @endif
                    <div>
                    <button type="submit" class="btn btn-primary mt-2">Add Upazila</button>                  

                    <a href="{{ url('/admin/upazila') }}" class="btn btn-primary mt-2">All Upazila</a>                  

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