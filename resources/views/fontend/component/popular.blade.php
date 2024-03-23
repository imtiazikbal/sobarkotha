<!--lastandpopularsection.php -->

    @include('fontend.component.ads')
  <div class="row">
    <div class="col animated fadeInUp">
      <nav class="nav nav-tabs nav-fill mb-3" id="nav-tab" role="tablist">
          <a href="#nav_last" id="nav-last" class="nav-item nav-link active" data-toggle="tab"  role="tab" aria-controls="nav-home" aria-selected="true">
              <h4> <strong>সর্বশেষ</strong> </h4>
          </a>
  
          <a href="#nav_popular" id="nav-popular" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-popular" aria-selected="false"> 
              <h4> <strong>জনপ্রিয়</strong> </h4> 
          </a>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="tab-content" id="nav-tabContent">
  
        <div id="nav_last" class="tab-pane fade show active animated fadeInUp"  role="tabpanel" aria-labelledby="nav-home-tab">
          
          <div class="row">
            <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none">
              <div class="col-12">
                <div class="row border-bottom mb-2 no-gutters" style="max-height: px; overflow:hidden;">
                    <div class="col-8">
                      <h3 class="titleHead4">{{ $news->title }}</h3>
                    </div>
                    <div class="col-4">
                      <img src="{{ asset($news->image) }}" class="img-fluid py-1" alt="{{ $news->title }}">
                    </div>
                </div>
              </div>
            </a>
          </div>
        </div>
  
        <div id="nav_popular" class="tab-pane fade animated fadeInUp"  role="tabpanel" aria-labelledby="nav-popular">
          <div class="row">
            <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none">
              <div class="col-12">
                <div class="row border-bottom mb-2 no-gutters">
                    <div class="col-4 d-flex align-items-center">
                      <img src="{{ asset($news->image) }}" class="img-fluid" alt="Nimage"/>
                    </div>
                    <div class="col-8">
                      <h6 class="titleHead4">{{ $news->title }}</h6>
                    </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        </div>
      </div>
    </div>

    <style>
        .navstyle203 {
          font-size: 20px;
          line-height: 1.2;
        } @media only screen and (max-width: 600px) { 
          .navstyle203 { font-size: 18px;} 
        }
      
        .topboxstyle a {
          text-decoration: none;
        }
      
      </style>