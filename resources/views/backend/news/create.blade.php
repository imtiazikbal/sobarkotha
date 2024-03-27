@extends('layout.app')
@section('content')

<!-- include libraries(jQuery, bootstrap) -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

   
      
 

    <!-- end card header -->
    <div class="mt-20">
       
        <div class="live-preview">
            <form action="{{ url('/admin/store/news') }} " method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <div class="form-floating">
                            <input type="text" name="title" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname">
                            <label for="firstnamefloatingInput">News Title</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="row">
                        <div class="col-lg-4"> 
                             <select name="category_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                            <option disabled selected="">Search for Category</option>
                            @foreach ($category as $category)
                            <option value="{{ $category->id }}">{{ $category->cName }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    
                        <div class="col-lg-4"> 
                             <select name="sub_category_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                <option disabled selected="">Search for SubCategory</option>
                                @foreach ($subcategory as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->sub_category_name }}</option>
                                
                            @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                              <select name="division_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                <option disabled selected="">Search for Division</option>

                            @foreach ($division as $division)
                            <option value="{{ $division->id }}">{{ $division->div_name }}</option>
                            @endforeach
                            </select>
                        </div>
                       </div>
                    </div>
                    <div class="col-lg-8">
                       
                            <label for="emailfloatingInput">News Body</label>
                            <textarea name="nBody" id="summernote" cols="30" rows="10"></textarea>
                            {{-- <div id="summernote" name="nBody"></div> --}}
                            
                      
                   
                    
        
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-6"> 
                                 <select name="district_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                <option disabled selected="">Search for District</option>
                                @foreach ($district as $district)
                                <option value="{{ $district->id }}">{{ $district->dist_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6">  
                            <select name="upazila_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                <option disabled selected="">Search for Upazila</option>
                                @foreach ($upazila as $upazila)
                                <option value="{{ $upazila->id }}">{{ $upazila->upazila_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-6">  
                                <input name="nCaption" type="text" class="form-control" id="firstnamefloatingInput" placeholder="Image Caption">
                                <label for="firstnamefloatingInput">Image Caption</label>
                            </div>
                            <div class="col-lg-6">  
                                <input name="ntag" type="text" class="form-control" id="firstnamefloatingInput" placeholder="Image Tag">
                                <label for="firstnamefloatingInput">News Tags(Comma Separated)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        
                            <div class="row">
                                <div class="col-lg-4">  
                                    <select name="featured_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                        <option disabled selected="">Featured</option>
                                        @foreach ($featured as $featured)
                                <option value="{{ $featured->id }}">{{ $featured->featured}}</option>
                                @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4">  
                                    <select name="topic_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                        <option disabled selected="">Topic</option>
                                        @foreach ($topic as $topic)
                                        <option value="{{ $topic->id }}">{{ $topic->topic}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4">  
                                    <select name="status" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                        <option disabled selected="">Status</option>
                                        <option value="published">Publish</option>
                                        <option value="unpublished">Unpublish</option>
                                        
                                    </select>
                                </div>
                            </div>
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">News Picture Selection</h4>
                                </div>
                                <div class="card-body">
                                    <div class="avatar-xl mx-auto">
                                        <div class="filepond--root filepond filepond-input-circle filepond--hopper" data-style-panel-layout="compact circle" data-style-button-remove-item-position="left bottom" data-style-button-process-item-position="right bottom" data-style-load-indicator-position="center bottom" data-style-progress-indicator-position="right bottom" data-style-button-remove-item-align="false" style="height: 120px;"><input class="filepond--browser" type="file" id="filepond--browser-zkb23w50n" name="image" aria-controls="filepond--assistant-zkb23w50n" aria-labelledby="filepond--drop-label-zkb23w50n"><a class="filepond--credits" aria-hidden="true" href="https://pqina.nl/" target="_blank" rel="noopener noreferrer" style="transform: translateY(116px);">Powered by PQINA</a><div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;"><label for="filepond--browser-zkb23w50n" id="filepond--drop-label-zkb23w50n" aria-hidden="true">Drag &amp; Drop your picture or <span class="filepond--label-action" tabindex="0">Browse</span></label></div><div class="filepond--list-scroller" style="transform: translate3d(0px, 0px, 0px);"><ul class="filepond--list" role="list"></ul></div><div class="filepond--panel filepond--panel-root" data-scalable="false"><div class="filepond--panel-top filepond--panel-root"></div><div class="filepond--panel-center filepond--panel-root" style="transform: translate3d(0px, 4px, 0px) scale3d(1, 1.12, 1);"></div><div class="filepond--panel-bottom filepond--panel-root" style="transform: translate3d(0px, 116px, 0px);"></div></div><span class="filepond--assistant" id="filepond--assistant-zkb23w50n" role="status" aria-live="polite" aria-relevant="additions"></span><div class="filepond--drip"></div><fieldset class="filepond--data"></fieldset></div>
                                    </div>
                                </div>
                                </div>
                               
                            </div>
                            <div class="col-lg-6">
                               
                                <div class="form-check form-check-outline form-check-warning mb-3">
                                    <select name="scroll" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                 
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                        
                                    </select>
                                </div>
                                   
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="live-preview">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Add News</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>

<script>
    $('#summernote').summernote({
      placeholder: 'News Body/Description here',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>

<style>

    .mt-20{
        margin-top: 100px
    }
</style>
    {{-- @include('backend.component.createNews') --}}
@endsection