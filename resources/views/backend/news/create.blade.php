@extends('layout.app')
@section('content')


<!-- Include Axios library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Include Axios library -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


      
 

    <!-- end card header -->
    <div class="mt-20">
       
        <div class="live-preview">
            <form action="{{ url('/admin/store/news') }} " method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="form-floating">
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname">
                                <label for="firstnamefloatingInput">News Title <strong class="text-danger">*</strong></label>
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-floating">
                                <input type="text" name="reporter_name" value="{{ old('title') }}" class="form-control" id="firstnamefloatingInput" placeholder="Enter your firstname">
                                <label for="firstnamefloatingInput">Reporter Name <strong class="text-danger">*</strong></label>
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="row">
                        <div class="col-lg-4"> 
                            
                             <select  value="{{ old('category_id') }}" name="category_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                            <option disabled selected="">Select Category <strong class="text-danger">*</strong></option>
                            @foreach ($category as $category)
                            <option value="{{ $category->id }}">{{ $category->cName }}</option>
                                
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    
                        <div class="col-lg-4"> 
                             <select name="sub_category_id"  value="{{ old('sub_category_id') }}" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                <option disabled selected="">Select SubCategory <strong class="text-danger">*</strong></option>
                                @foreach ($subcategory as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->sub_category_name }}</option>       
                            @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select id="divisionSelect" name="division_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                <option selected>বিভাগ<strong class="text-danger">*</strong></option>
                            </select>
                            @error('division_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                       </div>
                    </div>
                    <div class="col-lg-8">
                        <h6>News Body<strong class="text-danger">*</strong></h6>
                        <textarea name="nBody" value="{{ old('nBody') }}" id="editor" cols="30" rows="10"></textarea> 
                        
                       
                            {{-- <label for="emailfloatingInput">News Body</label>
                            <textarea name="nBody" id="summernote" cols="30" rows="10"></textarea> --}}
                            {{-- <div id="summernote" name="nBody"></div> --}}
                            
                      
                   
                            @error('nBody')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
        
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <select id="districtSelect" name="district_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                    <option selected>জেলা</option>
                                </select>
                                @error('district_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <select id="upazilaSelect" name="upazila_id" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                    <option selected>উপজেলা</option>
                                </select>
                                @error('upazila_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-6">  
                                <input name="nCaption" value="{{ old('nCaption') }}" type="text" class="form-control" id="firstnamefloatingInput" placeholder="Image Caption">
                                <label for="firstnamefloatingInput">Image Caption<strong class="text-danger">*</strong></label>
                                @error('nCaption')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                            </div>
                            <div class="col-lg-6">  
                                <input name="nTag" value="{{ old('nTag') }}" type="text" class="form-control" id="firstnamefloatingInput" placeholder="Image Tag">
                                <label for="firstnamefloatingInput">News Tags(Comma Separated)</label>
                                @error('nTag')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        
                            <div class="row">
                                <div class="col-lg-4">  
                                    <select name="featured_id" value="{{ old('featured_id') }}" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                        <option disabled selected="">Featured</option>
                                        @foreach ($featured as $featured)
                                <option value="{{ $featured->id }}">{{ $featured->featured}}</option>
                                @endforeach
                                    </select>
                                    
                                </div>
                                <div class="col-lg-4">  
                                    <select name="topic_id" value="{{ old('topic_id') }}" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                        <option disabled selected="">Topic</option>
                                        @foreach ($topic as $topic)
                                        <option value="{{ $topic->id }}">{{ $topic->topic}}</option>
                                        @endforeach
                                    </select>
                                    @error('topic_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                                </div>
                                <div class="col-lg-4">  
                                    <select name="status"  value="{{ old('status') }}" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                        <option disabled selected="">Status <strong class="text-danger">*</strong></option>
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
                                    <h4 class="card-title mb-0">News Picture Selection<strong class="text-danger">*</strong></h4>
                                </div>
                                <div class="card-body">
                                    <div class="avatar-xl mx-auto">
                                        <div class="filepond--root filepond filepond-input-circle filepond--hopper" data-style-panel-layout="compact circle" data-style-button-remove-item-position="left bottom" data-style-button-process-item-position="right bottom" data-style-load-indicator-position="center bottom" data-style-progress-indicator-position="right bottom" data-style-button-remove-item-align="false" style="height: 120px;"><input class="filepond--browser" value="{{ old('image') }}" type="file" id="filepond--browser-zkb23w50n" name="image" aria-controls="filepond--assistant-zkb23w50n" aria-labelledby="filepond--drop-label-zkb23w50n"><a class="filepond--credits" aria-hidden="true" href="https://pqina.nl/" target="_blank" rel="noopener noreferrer" style="transform: translateY(116px);">Powered by PQINA</a><div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;"><label for="filepond--browser-zkb23w50n" id="filepond--drop-label-zkb23w50n" aria-hidden="true">Drag &amp; Drop your picture or <span class="filepond--label-action" tabindex="0">Browse</span></label></div><div class="filepond--list-scroller" style="transform: translate3d(0px, 0px, 0px);"><ul class="filepond--list" role="list"></ul></div><div class="filepond--panel filepond--panel-root" data-scalable="false"><div class="filepond--panel-top filepond--panel-root"></div><div class="filepond--panel-center filepond--panel-root" style="transform: translate3d(0px, 4px, 0px) scale3d(1, 1.12, 1);"></div><div class="filepond--panel-bottom filepond--panel-root" style="transform: translate3d(0px, 116px, 0px);"></div></div><span class="filepond--assistant" id="filepond--assistant-zkb23w50n" role="status" aria-live="polite" aria-relevant="additions"></span><div class="filepond--drip"></div><fieldset class="filepond--data"></fieldset></div>
                                    </div>
                                </div>
                                </div>
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                               @enderror
                            </div>
                            <div class="col-lg-6">
                               
                                <div class="form-check form-check-outline form-check-warning mb-3">
                                    <select valu="{{ old('scroll') }}" name="scroll" class="form-select rounded-pill mb-3" aria-label="Default select example">
                                 
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
                                <button class="btn btn-primary" type="submit" onclick="functionCheck()">Add News</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

{{-- <script>
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
  </script> --}}

<style>

    .mt-20{
        margin-top: 100px
    }
</style>
    {{-- @include('backend.component.createNews') --}}

    <!-- Your JavaScript code -->
    <script>
        // Function to fetch divisions
        function fetchDivisions() {
            axios.get('/getDivision')
                .then(function(response) {
                    var divisions = response.data;
                    console.log(divisions);
                    var divisionSelect = $('#divisionSelect');
                    divisionSelect.empty(); // Clear existing options
                    divisionSelect.append('<option selected>বিভাগ</option>'); // Add default option
                    $.each(divisions, function(index, division) {
                        divisionSelect.append('<option value="' + division.id + '">' + division.div_name + '</option>');
                    });
                })
                .catch(function(error) {
                    console.error(error);
                });
        }
    
        // Function to fetch districts based on selected division
        function fetchDistricts(divisionId) {
            axios.get('/getDistrict', {
                    params: {
                        division_id: divisionId
                    }
                })
                .then(function(response) {
                    var districts = response.data;
                    var districtSelect = $('#districtSelect');
                    districtSelect.empty(); // Clear existing options
                    districtSelect.append('<option selected>জেলা</option>'); // Add default option
                    $.each(districts, function(index, district) {
                        districtSelect.append('<option value="' + district.id + '">' + district.dist_name + '</option>');
                    });
                })
                .catch(function(error) {
                    console.error(error);
                });
        }
    
        // Function to fetch upazilas based on selected district
        function fetchUpazilas(districtId) {
            axios.get('/getUpazila', {
                    params: {
                        district_id: districtId
                    }
                })
                .then(function(response) {
                    var upazilas = response.data;
                    var upazilaSelect = $('#upazilaSelect');
                    upazilaSelect.empty(); // Clear existing options
                    upazilaSelect.append('<option selected>উপজেলা</option>'); // Add default option
                    $.each(upazilas, function(index, upazila) {
                        upazilaSelect.append('<option value="' + upazila.id + '">' + upazila.upazila_name + '</option>');
                    });
                })
                .catch(function(error) {
                    console.error(error);
                });
        }
    
        // Call fetchDivisions function when the document is ready
        $(document).ready(function() {
            fetchDivisions();
    
            // Event listener for division select change
            $('#divisionSelect').change(function() {
                var divisionId = $(this).val();
                if (divisionId != '') {
                    fetchDistricts(divisionId);
                }
            });
    
            // Event listener for district select change
            $('#districtSelect').change(function() {
                var districtId = $(this).val();
                if (districtId != '') {
                    fetchUpazilas(districtId);
                }
            });
        });
    </script>
@endsection