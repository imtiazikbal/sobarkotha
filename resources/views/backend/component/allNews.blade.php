
<div class="container-fluid mt-5">

  <!-- start page title -->
  <div class="row">
      <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Datatables</h4>

              <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                      <li class="breadcrumb-item active">Datatables</li>
                  </ol>
              </div>

          </div>
      </div>
  </div>
  <!-- end page title -->



  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="header d-flex justify-content-between">
               
                  <div class="card-header">
                    <h5 class="card-title mb-0">All News</h5>
                </div>
                <div class="card-header">
                  <a href="{{ url('/admin/create/news') }}" class="btn btn-primary">Add News</a>
              </div>

              </div>
              
              <div class="card-body">
                  <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                      <thead>
                          <tr>
                              
                              <th data-ordering="false">News Image</th>
                              <th data-ordering="false">Title</th>
                              <th data-ordering="false">User</th>
                              <th>Body</th>
                              <th>Category</th>
                      
                              <th>Published</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($news as $news) 
                        <tr>
                          <td>
                            <img src="{{ asset($news->image) }}" alt="news image" width="50px">
                          </td>
                            <td>{{ Str::limit($news->title, 20) }}</td>
                            <td>{{ $news->user->name }}</td>
                            <td>{{ Str::limit($news->title, 70) }}</td>
                            <td>{{ $news->category->cName }}</td>
                          
                            <td>{{ $news->created_at->diffForHumans() }}</td>
                            <td><span class="badge bg-info-subtle text-info">{{ $news->status }}</span></td>
                            
       
                            <td>
                                <div class="dropdown d-inline-block">
                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                        <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                        <li><a href="{{url('/admin/edit/news/'.$news->id) }}" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                        @can('can_delete')
                                        <li>
                                            <form action="{{ url('admin/destroy/news/'.$news->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="image_path" value="{{ $news->image}}">
                                                <button type="submit" class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </button>

                                            </form>
                                      </li>
                                        @endcan
                                       
                                    </ul>
                                </div>
                            </td>
                          @endforeach
                       
                          </tr>
                       
                      </tbody>
                  </table>
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
@if (session()->has('warning'))
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
            icon: 'warning',
            title: '{{ session('warning') }}',
        })
    })()
</script>
@endif