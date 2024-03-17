@extends('layout.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div>
                    <form action="{{ url('/admin/store/division') }}" method="POST">
                     
                        <label for="borderInput" class="form-label">Division Name</label>
                    <input type="text" name="div_name" class="form-control border-dashed" id="borderInput" placeholder="Enter Division name">
                    @if ($errors->has('featured'))
                     <span class="error">{{ $errors->first('featured') }}</span>
                    @endif
                    <div>
                    <button type="submit" class="btn btn-primary mt-2">Add Division</button>                  

                    <a href="{{ url('/admin/division') }}" class="btn btn-primary mt-2">All Division</a>                  

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