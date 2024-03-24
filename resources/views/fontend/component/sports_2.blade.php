<!-- sports3.php -->


<div class="mb-3" style="background: #f9f9f9;">

     

    <a class="text-decoration-none" href="{{ route('newsByCategory',['category' => $cSports1->id]) }}"> 
      <h2 class="PageStyleH2 py-3">{{ $cSports2->cName }}</h2>
    </a>
    <div class="form-row">
      @foreach ($cSports2->news as $news)
        
   
      <div class="col-12 pt-2">
         
          <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none">
            <div class="zoomImg" style="overflow: hidden;">
              <img src="{{ asset($news->image) }}" class="img-fluid" width="100%" alt="">
            </div>
            <h4 class="">{{ $news->title }}</h4>
          </a>
     
      </div>
      @endforeach

    </div>

    <div class="form-row">
      @foreach ($sport2Old->news as $news )
      <div class="col-6 mt-2">
        <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none"> 
          <div class="" style="overflow: hidden;">
              <img src="{{ asset($news->image) }}" class="img-fluid" alt="{{ $news->title }}">
          </div>
          <h4 class="titleHead333"> 
            {{ $news->title }}  
          </h4> 
        </a>
      </div>
      @endforeach
      
     
    </div>

</div>