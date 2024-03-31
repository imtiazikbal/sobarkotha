<div class="container">
    <div class="row">
        <a href="" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12 col-xl-12 pb-3">
                <div class="CategoryName">
                    <h2>বাংলাদেশ<i class="bi bi-chevron-right"></i></h2>
                </div>
            </a>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-md-12 catBanSearchBox ">
            <div class="row py-5">
                <div class="col-md-3 search_title text-center">
                    <h2>আমার এলাকার খবর</h2>
                </div>

                <div class="col-md-9">
                    <div class="newsSearch">
                        <form action="{{ route('bangladeshDistrictNews') }}" class="d-flex justify-content-between">
                            <div class="py">
                                <select id="divisionSelect" name="division" class="form-select bg-transparent" aria-label="Default select example">
                                    <option selected>বিভাগ</option>
                                </select>
                            </div>
                            <div class="py">
                                <select id="districtSelect" name="district" class="form-select bg-transparent" aria-label="Default select example">
                                    <option selected>জেলা</option>
                                </select>
                            </div>
                            <div class="py">
                                <select id="upazilaSelect" name="upazila" class="form-select bg-transparent" aria-label="Default select example">
                                    <option selected>উপজেলা</option>
                                </select>
                            </div>
                            <div class="d-flex w-100px">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>      
                    </div>
                </div>
            </div>
            
        </div>
    </div>



    <script>
        async function myFunction() {
            alert("Hello!");
        }
    </script>
<script>
    // Function to fetch divisions
    function fetchDivisions() {
        axios.get('/api/getDivision')
            .then(function(response) {
                var divisions = response.data;
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
        axios.get('api/getDistrict', {
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
        axios.get('/api/getUpazila', {
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