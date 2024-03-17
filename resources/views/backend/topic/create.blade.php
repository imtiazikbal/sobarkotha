@extends('layout.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div>
                    <form action="{{ url('/admin/store/topic') }}" method="POST">
                     
                        <label for="borderInput" class="form-label">Topic Name</label>
                    <input type="text" name="topic" class="form-control border-dashed" id="borderInput" placeholder="Enter your Topic name">
                    @if ($errors->has('topic'))
                     <span class="error">{{ $errors->first('topic') }}</span>
                    @endif
                    <div>
                    <button type="submit" class="btn btn-primary mt-2">Add Topic</button>                  

                    <a href="{{ url('/admin/topic') }}" class="btn btn-primary mt-2">All Topic</a>                  

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