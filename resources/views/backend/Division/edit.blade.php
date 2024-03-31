@extends('layout.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div>
                    <form action="{{ url('/admin/update/division/'.$division->id) }}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                    <label for="borderInput" class="form-label">Category Name</label>

                            <select name="category_id" class="form-select mb-3" aria-label="Default select example">
                                <option selected="">Select your Category </option>
                                @foreach ($category as $category )

                                <option value="{{ $category->id }}" {{ $category->id === $subCategory->category->id?'selected':'' }}>{{ $category->cName }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                    <label for="borderInput" class="form-label">SubCategory Name</label>
                    <input type="text" value="{{ $subCategory->sub_category_name }}" name="sub_category_name" class="form-control border-dashed" id="borderInput" placeholder="SubCategory Name">
                    @if ($errors->has('cName'))
                     <span class="error">{{ $errors->first('cName') }}</span>
                    @endif
                    <div>
                    <button type="submit" class="btn btn-primary mt-2">Update SubCategory</button>                  

                    <a href="{{ url('/admin/subCategory') }}" class="btn btn-primary mt-2">All SubCategory</a>                  

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