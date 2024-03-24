<!-- national.php -->

  <div class="mb-3">
    <a class="text-decoration-none" href="{{ route('newsByCategory',['category' => $cSaraDesh->id]) }}"> 
      <h4 class="pageNameStyle">{{ $cSaraDesh->cName }}</h4>
    </a>
    <div class="row">
      @foreach ($cSaraDesh->news as $news)
      <div class="col-12 my-1">
        <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none "> 
            <img src="{{ asset($news->image) }}" class="img-fluid" width="100%" alt="title">
            <h4 class="titleHead32">{{ $news->title }}</h4>
        </a>
      </div>
      @endforeach
      
    </div>

    @foreach ($cSaraDeshSkip1Take3->news as $news)
    <div class="row">
      <div class="col-12 mt-2">
        <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-decoration-none">
          <div class="row mb-2 no-gutters border-bottom">
            <div class="col-3 d-flex align-items-center">
              <img src="{{ asset($news->image) }}" class="img-fluid" width="100%" alt="title">
            </div>
            <div class="col-9">
              <h6 class="titleHead4">{{ $news->title }}</h6>
            </div>
          </div>
        </a>
      </div>
    </div>
    @endforeach
  </div>