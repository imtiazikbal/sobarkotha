<!-- sports2.php -->


<div class="mb-3" style="background: #FFEEDE;">
  
      <a class="text-decoration-none" href="{{ route('newsByCategory',['category' => $cSports1->id]) }}"> 
        <h2 class="PageStyleH2 py-3">{{$cSports1->cName}}</h2>
      </a>
      <div class="form-row pt-2">
        @foreach ($cSports1->news as $news)
        <div class="col-md-8 col-12">
            
          <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none "> 
              <img src="{{ asset($news->image) }}" class="img-fluid" alt="{{ $news->title }}">
              <h4 class="titleHead32">{{ $news->title }}</h4>
          </a>
      
      </div>
        @endforeach
       
  
        <div class="col-md-4 col-12">
          <div class="form-row">
          
            <div class="col-md-12 col-6 mb-3">
              <a href="" class="text-decoration-none"> 
                <div class="oomImg" style="overflow: hidden;">
                    <img src="" class="img-fluid" alt="">
                </div>
                <h4 class="titleHead333">  </h4> 
              </a>
            </div>
         
          </div>
        </div>
      </div>
  
      <div class="form-row">
        @foreach ($cSports1SkipTake3->news as $news)
            
        @endforeach
        <div class="col-4 mt-2">
          <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none"> 
            <div class="oomImg" style="overflow: hidden;">
                <img src="" class="img-fluid" alt="{{ $news->title }}">
            </div>
            <h4 class="titleHead333 border-bottom">{{ $news->title }} </h4> 
          </a>
        </div>
     
      </div>
  
  </div>

  <style>
    .titleHead32 {

		border: none;
	
	}
  </style>