
<!-- Include Axios library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Include Axios library -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="mt-20">
    <div class="live-preview">
        <form action="{{ url('/admin/store/news') }} " method="POST" enctype="multipart/form-data">
            <div class="row g-3">
                <!-- Other form elements -->
                <!-- Division Select -->
                <div class="col-lg-4">
                    <select id="divisionSelect" name="division" class="form-select rounded-pill mb-3" aria-label="Default select example">
                        <option selected>বিভাগ<strong class="text-danger">*</strong></option>
                    </select>
                    @error('division_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- District Select -->
                <div class="col-lg-4">
                    <select id="districtSelect" name="district" class="form-select rounded-pill mb-3" aria-label="Default select example">
                        <option selected>জেলা</option>
                    </select>
                    @error('district_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Upazila Select -->
                <div class="col-lg-4">
                    <select id="upazilaSelect" name="upazila" class="form-select rounded-pill mb-3" aria-label="Default select example">
                        <option selected>উপজেলা</option>
                    </select>
                    @error('upazila_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Other form elements -->
            </div>
        </form>
    </div>
</div>

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

