<!-- News Scroll newsscroll.php-->
<div class="fixed-bottom py-1" style="background:#C60C1D;">
    <div class="row">
       
        <div class="col">           
            <marquee direction="left" speed="normal" scrollamount="5" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();">
                @foreach ($scrollNews as $news) 
                <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="text-white pr-3 text-decoration-none">
                    <span class="scrlstyle"> 
                        <img src="{{ asset($news->image) }}" style="width: 45px; height: auto; border-radius: 10%; text-decoration: none;" alt="শিরোনাম" title="শিরোনাম">
                      {{ $news->title }}
                    </span>
                </a>
                @endforeach    
        </marquee>
        </div>
        
    </div>
</div>




<!-- Footer Scroll -->