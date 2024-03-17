@extends('layout.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div>
                    <form action="{{ url('/admin/store/category') }}" method="POST">
                     
                        <label for="borderInput" class="form-label">Category Name</label>
                    <input type="text" name="cName" class="form-control border-dashed" id="borderInput" placeholder="Enter your name">
                    @if ($errors->has('cName'))
                     <span class="error">{{ $errors->first('cName') }}</span>
                    @endif
                    <div>
                    <button type="submit" class="btn btn-primary mt-2">Add Category</button>                  

                    <a href="{{ url('/admin/category') }}" class="btn btn-primary mt-2">All Category</a>                  

                    </div>
                  </form>
                </div>
                </div>
            </div>
        </div>
        
</div>

<script>
    async function saveData()() {
        alert(1)
        
    }
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