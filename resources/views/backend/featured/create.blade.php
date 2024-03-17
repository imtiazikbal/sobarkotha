@extends('layout.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div>
                    <form action="{{ url('/admin/store/featured') }}" method="POST">
                     
                        <label for="borderInput" class="form-label">Featured Name</label>
                    <input type="text" name="featured" class="form-control border-dashed" id="borderInput" placeholder="Enter your name">
                    @if ($errors->has('featured'))
                     <span class="error">{{ $errors->first('featured') }}</span>
                    @endif
                    <div>
                    <button type="submit" class="btn btn-primary mt-2">Add Featured</button>                  

                    <a href="{{ url('/admin/featured') }}" class="btn btn-primary mt-2">All Featured</a>                  

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