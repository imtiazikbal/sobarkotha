@extends('fontend.layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-12">


                <div class="row">

                    @foreach ($news as $news)
                        <div class="col-12 col-sm-4 col-md-4 mb-3">
                            <div class="mb-3">
                                <a class="text-decoration-none" href="">
                                    <h4 class="pageNameStyle">{{ $news->category->cName }}</h4>
                                </a>
                                <div class="row">

                                    <div class="col-12 my-1">
                                        <a href="{{ route('newsByTitle', ['news_id' => $news->id]) }}"
                                            class="text-decoration-none ">
                                            <img src="{{ asset($news->image) }}" class="img-fluid" width="100%"
                                                alt="title">
                                            <h4 class="titleHead32">{{ $news->title }}</h4>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-sm-3 col-12">
                <div class="card-header rounded-0 text-light" style="background:#C60C1D;">
                    <h3 class="text-center"> <strong>জেলার খবর</strong> </h3>
                </div>
                <img src="https://www.shutterstock.com/image-vector/bangladesh-map-vector-design-bd-600nw-2390793847.jpg"
                    width="100%" alt="">
                <div class="row mb-3">
                    <div class="col-12 px-3">
                        <h3 class="text-center text-muted border" style="padding: 30px 20px;">-- বিজ্ঞাপন --
                            <hr>
                            <span style="font-size:16px;">CONTACT <br> ads@adhuniksomoy.com </span>
                        </h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
