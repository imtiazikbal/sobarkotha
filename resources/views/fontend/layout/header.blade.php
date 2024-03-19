
<!-- Navbar start -->

<b class="screen-overlay"></b>
<div class="d-sm-none navbar navbar-light shadow-sm sticky-top" style="background:#eee; box-shadow: 0 .2rem .2rem rgba(0,0,0,.15) !important; padding-bottom: 0rem;"> 
    <a class="navbar-brand" href="index.php"> 
        <img src="" width="140" class="image-fluid py-1" style="" alt="">
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
         
         <div class="col-3">
          <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none">
                <div class="row no-gutters">
                <div class="col-8 d-flex align-items-center">
                  <h4 class="titleHead5">{{ Str::limit($news->title,70) }}</h4>
                </div>
                <div class="col-4">
                  <img src="{{ asset($news->image) }}" class="img-fluid" alt="Responsive image">
                </div>
                </div>
          </a>
      </div>
      @endforeach

            {{-- <div class="col-3">
                <a href="#" class="text-decoration-none">
                      <div class="row no-gutters">
                      <div class="col-8 d-flex align-items-center">
                        <h4 class="titleHead5">টাকা না দিলে, একজন একজন করে মেরে ফেলতে বলেছে</h4>
                      </div>
                      <div class="col-4">
                        <img src="https://www.kalbela.com/assets/news_photos/2024/03/17/image_73824_1710673387.webp" class="img-fluid" alt="Responsive image">
                      </div>
                      </div>
                </a>
            </div> --}}
            {{-- <div class="col-3">
                <a href="#" class="text-decoration-none">
                      <div class="row no-gutters">
                      <div class="col-8 d-flex align-items-center">
                        <h4 class="titleHead5">টাকা না দিলে, একজন একজন করে মেরে ফেলতে বলেছে</h4>
                      </div>
                      <div class="col-4">
                        <img src="https://www.kalbela.com/assets/news_photos/2024/03/17/image_73824_1710673387.webp" class="img-fluid" alt="Responsive image">
                      </div>
                      </div>
                </a>
            </div> --}}
        </div>
    </div>
</div>
	<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-light sticky-top py-1 px-md-0" style="background: linear-gradient(180deg, rgba(255,255,255,1) 5%, rgba(238,238,238,1) 50%, rgba(255,255,255,1) 95%); box-shadow: 0 .2rem .2rem rgba(0,0,0,.15) !important; text-align: center!important; border-top: 1px solid #ddd;">
		<div class="container">
			<div class="offcanvas-header mt-2">  
			    <div class="row">
			    	<div class="col-12 d-md-none float-right">
		    			<a href=""> 
							<button class="navbar-toggler border-0">
                                <img src="https://www.kalbela.com/assets/news_photos/2024/03/17/image_73824_1710673387.webp" class="img-fluid" alt="Responsive image">

								{{-- <img src="{{ asset('fontend/img/sslogoico.png') }}" width="140" class="image-fluid pt-3" style="" alt=""> --}}
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
			<ul id="" class="navbar-nav ml-auto">

				<li class="nav-item style2ndNav">
					<a class="nav-link" href="about.php"> <img src="icons/search.svg" width="18" height="18"> খুজুন </a>
				</li>

				<li class="nav-item style2ndNav">
					<a class="nav-link" href="about.php"> <img src="icons/userlogin.svg" width="18" height="18"> LogIn</a>
				</li>

				<li class="nav-item style2ndNav">
					<a href="#" class="nav-link" data-toggle="dropdown"><span class="navbar-toggler-icon" style="font-size: 16px;">
					</a>
				</li>
			</ul>
		</div>
	</nav>

<!-- Navbar End -->