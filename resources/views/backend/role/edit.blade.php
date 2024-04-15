@extends('layout.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div>
                    <form action="{{ route('role.update',$role->id) }}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                    <label for="borderInput" class="form-label">User type</label>

                            <select name="role" class="form-select mb-3" aria-label="Default select example">
                                <option selected disabled>Select User Type </option>
                              <option {{ $role->role === 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                              <option {{ $role->role === 'editor' ? 'selected' : '' }} value="editor">Editor</option>
                            </select>
                        </div>

                   <div class="col-md-12">

                    <label for="borderInput" class="form-label">User Name</label>
                    <input type="text" name="name" value="{{ $role->name }}" class="form-control border-dashed" id="borderInput" placeholder="Saddam Mia">
                    @if ($errors->has('name'))
                     <span class="error">{{ $errors->first('name') }}</span>
                    @endif

                   </div>

                   <div class="col-md-12">

                    <label for="borderInput" class="form-label">User Email</label>
                    <input type="text" name="email" value="{{ $role->email }}" class="form-control border-dashed" id="borderInput" placeholder="user@example.com">
                    @if ($errors->has('email'))
                     <span class="error">{{ $errors->first('email') }}</span>
                    @endif
                    
                   </div>
                 

                    <div class="col-md-12">

                    <button type="submit" class="btn btn-primary mt-2">Add User</button>                  

                    <a href="{{route('role.index') }}" class="btn btn-primary mt-2">All User</a>                  

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