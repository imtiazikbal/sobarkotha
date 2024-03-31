<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div>
        <img class="py-3" src="https://placehold.co/1200x100/png" alt="">
      </div>
    </div>
  </div>
    <div class="row mb-3">
        <!-- First Lead -->
        <div class="col-sm-9 col-12">
          <div class="row">
          
            <div class="col-md-8 col-12 border-right mb-3">
              <!-- query start
              
              query start -->
          @foreach ($news as $news )

                </style>
              <div class="mb-3">
                <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="card text-decoration-none border-0"> 
                  <div class="zoomImg" style="overflow: hidden;"> 

                    @if($news->image && file_exists(public_path($news->image)))
                    <img src="{{ asset($news->image) }}" alt="News Image">
                @else
                    <img src="{{ asset('fontend/img/logomain.png') }}" width="100%" alt="Default Image">
                @endif
                
                
                  </div>
                  <h1 class="pt-3">{{ $news->title }}</h1>
                  <div class="col-12 og:description detailsStyle mt-3">
                    <!-- News Body -->
                    {{-- <h5 class="py-3 text-muted"> 
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                        </svg>
                      
                    </h5> --}}
                    {!! Str::limit($news->nBody, 300) !!}
                                      
                    {{-- {!! implode(' ', array_slice(explode(' ', $news->nBody), 0, 100)) !!} --}}
                    <div class="py-3 sharethis-inline-share-buttons"></div>
                    
                  </div>
                

                </a> 
                <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" style="color: darkblue; background-color: yellow; font-size: 14px; font-style: italic; text-decoration-line: underline; padding: 0px 10px;">আরও পড়ুন >></a>
              </div>
              @endforeach
              <!--  query End -->
            </div>
           
     
            <div class="col-sm-4 border-right mb-3">
              <div class="row">
                @foreach ($leadNews3 as $news )
                <div class="col-sm-12 col-6 mb-3 px-2 px-sm-3">
                  <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none"> 
                    <div class="zoomImg" style="overflow: hidden;">
                       
                   @if(file_exists(public_path($news->image)))
                      <img src="{{ asset($news->image) }}" alt="Your Image">
                  @else
                      <img src="{{asset('fontend/img/logomain.png') }}" alt="Default Image">
                  @endif

                    </div>
                    <h4 class="titleHead31 border-bottom">  {{$news->title}}
                    </h4> 
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        
          <div class="row">
            @foreach ($skip1Get3 as $news )
            <div class="col-sm-4 col-6 mb-3 px-sm-3">
              <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none"> 
                <div class="zoomImg" style="overflow: hidden;">
                    <img src="{{ asset($news->image) }}" width="100%" class="imgsizeM rounded-0" alt="Responsive Image Here">
                </div>
                <h4 class="titleHead31 border-bottom">{{ $news->title }}</h4> 
              </a>
            </div>
            @endforeach
            
          </div>
        </div>
       
        <!-- SideBar -->
        <div class="col-sm-3 col-12">
          <!--biggapon -->
          <div class="row mb-3">
              <div class="col-12 text-center">
                <a href="https://www.digitalsolutions.ltd" target="_blank" >
                  <img src="https://placehold.co/600x400" width="100%" class="img-fluid" alt="Total Digital Solutions Agencies in Bangladesh.">
                </a>
              </div>
          </div>
          <!--biggapon End -->
  
          <div class="form-row mb-3">
            <style type="text/css">
              .btnStyle555 {
                color: white;
                font-family: ;
                font-size: 20px;
                font-weight: 600;
                padding: 10px 0px;
                border-radius: 12px;
                margin-bottom: 10px;
                background-color: #3A495E;
                transition: 0.3s ease-in;
              } 
              .btnStyle555:hover { 
                background-color: #eee;
              }
            </style>
            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 ">
              <a class="btn btn-block btnStyle555" href="#">ডাক্তার আছেন</a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 ">
              <a class="btn btn-block btnStyle555" href="#">টিউটোরিয়াল</a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 ">
              <a class="btn btn-block btnStyle555" href="#">চিত্র বিচিত্র</a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6">
              <a class="btn btn-block btnStyle555" href="#">ইসলাম ও জীবন</a>
            </div>
          </div>
  
        @include('fontend.component.popular')
        </div>
      </div>
</div>