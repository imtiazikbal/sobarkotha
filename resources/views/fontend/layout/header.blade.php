<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- Navbar start -->

<b class="screen-overlay"></b>
<div class="d-sm-none navbar navbar-light shadow-sm sticky-top" style="background:#eee; box-shadow: 0 .2rem .2rem rgba(0,0,0,.15) !important; padding-bottom: 0rem;"> 
    <a class="navbar-brand" href="{{ url('/') }}"> 
        <img src="{{ asset('fontend/img/logomain.png') }}" width="140" class="image-fluid py-1" style="" alt="">
    </a>
    <button class="navbar-toggler navbar-light border-0 mt-1 p-0" type="button" data-toggle="collapse" data-trigger="#navbar_main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="font-size:26px; padding:0px!important;"></span>
    </button>
</div>
<div style="background:#fff;">
    <div class="container d-none d-sm-block">
        <div class="row d-flex justify-content-between py-3" style="color: #ddd;">
            <div class="col-3 d-flex align-items-center">
                <a href="{{ url('/') }}">
								{{-- <img src="{{ asset('fontend/img/sslogoico.png') }}" width="140" class="image-fluid pt-3" style="" alt=""> --}}

                    <img src="{{ asset('fontend/img/logomain.png') }}" width="220" class="image-fluid" style="" alt="">
                </a>
            </div>

            @foreach ($featured->news as $news )
         
         <div class="col-3  d-flex justify-content-center align-items-center">
          <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none">
                <div class="row no-gutters">
                <div class="col-8 d-flex align-items-center">
                  <h4 class="titleHead5">{{ Str::limit($news->title,30) }}</h4>
                </div>
                <div class="col-4">
                  <img src="{{ asset($news->image) }}" width="80%" class="img-fluid" alt="Responsive image">
                </div>
                </div>
          </a>
      </div>
      @endforeach
        </div>
    </div>
</div>
	<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-light sticky-top py-1 px-md-0" style="background: #fff !important; text-align: center!important; border-top: 1px solid #ddd; border-bottom: 2px solid #bbb5b5;">
		<div class="container">
			<div class="offcanvas-header mt-2">  
			    <div class="row">
			    	<div class="col-12 d-md-none float-right">
		    			<a href=""> 
							<button class="navbar-toggler border-0">
                                <img src="{{ asset('fontend/img/logomain.png') }}" class="img-fluid" alt="Responsive image">

		
							</button>
						</a>
						<div class="text-right float-right">
			  				<button class="btn btn-danger btn-close float-right text-right" style="margin-top:20px; padding:4px 14px;">&times</button>
						</div>
				  	</div>
			    </div>

			</div>
			<ul id="style1stNav" class="navbar-nav">
				<li class="nav-item style1stNav">
					<a class="nav-link pl-0" href="#">সর্বশেষ</a>
				</li>

				<!-- Input Cat page start -->			

        @foreach ($category as $category)
        <li class="nav-item style1stNav">
					<a class="nav-link" href="{{ route('newsByCategory',['category' => $category->id])}}">{{ $category->cName }}  </a>
				</li>
        @endforeach
				
				<!-- Input Cat page End -->

				<li class="nav-item style1stNav">
					<a class="nav-link" href="#">ছবিঘর</a>
				</li>

				<li class="nav-item style1stNav">
					<a class="nav-link" href="#">ভিডিও</a>
				</li>

			</ul>
			<ul id="" class="navbar-nav ml-auto d-flex">

			
                   
					<li class="d-flex align-items-center ">
						
						<form action="{{ url('/search/news') }}" method="GET" class="d-flex" >
							<input name="search" type="text" class="form-control " id="" placeholder="এখানে লিখুন">
							<button class="btn btn-outline-secondary mr-3" type="submit" id=""><i class="ri-search-line">খু্ঁজুন</i></button>
						
						</form>
						
					 
					</li>
           
				 

				{{-- <li class="nav-item style2ndNav">
					<a class="nav-link" href="{{ route('login') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
          </svg> LogIn</a>
				</li> --}}

				
				<a href="#" id="toggleButton" class="nav-link" data-toggle="dropdown"><span class="navbar-toggler-icon" style="font-size: 16px;">
				</a>
					
				</li>
			</ul>
		</div>
		
	</nav>
	<div class="container py-3">
		<div class="row">
			<div id="menuBar" class="hidden d-flex justify-content-center">
	<div>
		<ul class="navbar-nav CustomNav d-flex flex-column justify-content-center align-items-center mt-5">
			<li class="nav-item style1stNav">
				<a class="nav-link pl-0" href="#">সর্বশেষ</a>
			</li>
			@foreach ($sidebarCat as $sidebarCat) 
			<li class="nav-item style1stNav ">
				<a class="nav-link pl-0 text-center"  href="{{ route('newsByCategory',['category' => $sidebarCat->id])}}">{{ $sidebarCat->cName }}</a>
			</li>
			@endforeach
			<li class="nav-item style1stNav">
				<a class="nav-link" href="#">ছবিঘর</a>
			</li>

			<li class="nav-item style1stNav">
				<a class="nav-link" href="#">ভিডিও</a>
			</li>
			</ul>
	</div>

	<div class="close pl-3" id="closeButton">X</div>
				
			
		</div>
	</div>
	</div>
	<style>
		.CustomNav li a {
  color: red;
}
	</style>
<script>
	
	document.addEventListener("DOMContentLoaded", function() {
  const toggleButton = document.getElementById("toggleButton");
  const menuBar = document.getElementById("menuBar");

  const closeButton = document.getElementById("closeButton");

  closeButton.addEventListener("click", function() {
	menuBar.classList.add("hidden");
  });

  toggleButton.addEventListener("click", function() {
    menuBar.classList.toggle("hidden");



  });
});

</script>
<!-- Navbar End -->