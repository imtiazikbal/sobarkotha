
<!--Header Start-->	
	


<!-- navbar With Page Name --> 
<section class="">
       
    <div method="POST" class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-0">
          <a class="HeadPage" href=""> 
              <h2>{{ $news->cName }}</h2>
          </a>
          <button class="navbar-toggler border mr-3 pr-1" type="button" data-toggle="collapse" data-target="#navpageid" aria-controls="navpageid" aria-expanded="false" aria-label="Toggle navigation"> সাব-মেনু 
            <span> 
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
            </span>
          </button>
       
        </nav>

</section>
<!-- navbar With Page Name --> 

<!-- Main Content --> 
<section class="">
<div class="container">
    <div class="row">
        <div class="col-md-9 col-12">
            <div class="form-row mb-3">
                
                @foreach ( $news->news as $news )
                <div class="col-md-8 col-12 mb-2">
                    <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="card text-decoration-none border-0"> 
                      <div class="zoomImg" width="100%" style="overflow: hidden;">
                          <img src="{{ asset($news->image) }}" class="" width="100%" alt="image">
                      </div>
                      <h1 class="titleHead1">{{ $news->title }}</h1>
                    </a>
                    <p style="font-size:18px; margin: 0px 40px;">{!! Str::limit($news->nBody, 400) !!}
                      <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" style="color: darkblue; background-color: yellow; font-size: 14px; font-style: italic; text-decoration-line: underline; padding: 0px 10px; " >আরও পড়ুন</a>
                    </p>
                </div>
                @endforeach
                
             


                <!--news 6 skip category 1-->
                
                @foreach ($catNewsSkip1Get6->news as $news )
                <div class="col-md-4 col-12 mb-3">
                   	
                    <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none">
                         <div class="row mb-3 no-gutters border-bottom">
                         <div class="col-8">
                           <h3 class="titleHead4">{{ $news->title }}</h3>
                         </div>
                         <div class="col-4">
                           <img src="{{ asset($news->image) }}" class="img-fluid py-1" alt="Responsive image">
                         </div>
                         </div>
                   </a>
              
           </div>
                @endforeach
                
            </div>
        </div>
        
        <div class="col-md-3 col-sm-3 col-12">
                <!--biggapon 2-->

                <div class="row">	
                    <div class="col-12">
                       <img src="https://placehold.co/300x250/png" alt="">
                    </div>
                </div>

                <div class="row mb-3 mt-3">
                    <div class="col-12">
                        <img src="https://placehold.co/300x250/png" alt="">

                    </div>
                </div>

                
            <!--biggapon -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 col-12">
            <!--30 news category  -->
           @foreach ($catNewsSkip7Get30->news as $news )
           <div class="col-md-4 col-6 mb-3">
            <div class="border-bottom">
              <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none"> 
                <img src="{{ asset($news->image) }}" 
                class="img-fluid" alt="image">
                <h4 class="titleHead3"> {{ $news->title }}</h4> 
              </a>
            </div>
          </div>
           @endforeach
                
    </div>
            <div class="col-md-3 col-sm-3 col-12">
                @include('fontend.component.popular')
                 
              </div>
     </div>

        
    </div>
</div>
</section>

<!-- International Section End --> 





<!-- Footer Section -->

<!-- Footer -->