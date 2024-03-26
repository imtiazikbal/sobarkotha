<div class="container">
    <div class="row my-3">
        <div class="col">
        <div class="scrollmenu">
          <span style="font-size: 16px; font-weight:600; color: #666;">ট্রেন্ডিং : </span>
          @foreach ( $trending as $trend)
          <a class="btn" href="{{ route('newsByTopic',['topic' => $trend->id]) }}">{{ $trend->topic }}</a>
          @endforeach 
        </div>
        </div>
      </div>
</div>