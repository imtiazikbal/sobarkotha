@extends('fontend.layout.app')
@section('content')
    <div class="container">
        <div class="row">
         @if ($news instanceof \Illuminate\Support\Collection && $news->isEmpty())
            <div class="newsFound text-center py-5">
                <h2>আপনার এলাকার কোন সংবাদ খুঁজে পাওয়া যায় নি ।</h2>
            </div>
        @else
            @foreach ($news as $news)
                <div class="lastBorderRemove  col-md-4 col-lg-4 col-sm-12 col-xs-12 col-12 col-xl-4 br d-flex">

                    <a href="{{ route('newsByTitle', ['news_id' => $news->id]) }}"
                        class="Category_content d-flex flex-column Cpr bb pt-3">
                        <img src="{{ asset($news->image) }}" width="100%" alt="{{ $news->title }}">
                        <h2 class="pt-3">{{ $news->title }}</h2>
                        <h3 class="pt-3">{!! Str::limit($news->nBody, 500) !!}</h3>
                    </a>

                </div>
            @endforeach


            @endif
        </div>
       
    </div>

    <style>
.newsFound h2{
    color: #007bff;

}
    </style>
@endsection
