
    <div class="row">
        <a href="{{ route('newsByCategory',['category' => $cSports1->id]) }}" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12 col-xl-12 pb-3">
                <div class="CategoryName">
                    <h4 class="pageNameStyle mt-5">{{ $cSports1->cName }}</h4>
                </div>
                
            </a>
    </div>

    

    <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 col-12 col-xl-4 br">
            @foreach ($cSports1SkipTake3->news as $news)
            <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="Category_content d-flex Cpr bb pt-3">
                <h2 class="">{{ $news->title }}
                </h2>
                <img src="{{ asset($news->image) }}" width="160x" height="106px" alt="Category_content_img">
             </a>
             {{-- <a href="" class="Category_content d-flex Cpr bb pt-3">
                <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F26aa2326-0b37-438b-8166-5e934b886614%2FMonogamy__Chorki_MOL__20_.JPG?auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=1.0" width="160x" height="106px" alt="Category_content_img">
             </a>
             <a href="" class="Category_content d-flex Cpr bb pt-3">
                <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
             </a>
             <a href="" class="Category_content d-flex Cpr bb pt-3">
                <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
             </a> --}}
             @endforeach
        </div>
        <div class="lastBorderRemove col-md-5 col-lg-5 col-sm-12 col-xs-12 col-12 col-xl-5br">
            @foreach ($cSports1->news as $news)
             <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="Category_content d-flex flex-column Cpr bb pt-3">                  
                <img src="{{ asset($news->image) }}" width="100%" alt="{{ $news->title }}">
                <h2 class="pt-3">{{ $news->title }}</h2>
                <h3 class="pt-3">{!! Str::limit($news->nBody, 500) !!}</h3>																				
             </a>
             @endforeach
             @php
             use App\Helper\Bengali;
         
             $date = $news->created_at;
             $formattedDate = date('h:i A - d F Y', strtotime($date));
             $time = Bengali::bn_date_time($formattedDate);
             
         @endphp
         
              <span  style="color: black;"> প্রকাশ:
                 
             @php
                 echo $time;
              @endphp 
              
             </span>. 
             {{-- <span>৬ ঘণ্টা আগে</span> --}}
    
        </div>

        
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 px-3">
            @foreach ($sport2Old->news as $news)
            <a href="{{ route('newsByTitle',['news_id' => $news->id]) }}" class="Category_content pt-3 d-flex">
                <img src="{{ asset($news->image) }}" width="160x" height="106px" alt="Category_content_img">
                <h2 class="">{{ $news->title }}</h2>
            </a>

            {{-- <a href="" class="Category_content d-flex Cpr bb">
                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
            </a>

            <a href="" class="Category_content d-flex Cpr bb">
                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
            </a>

            <a href="" class="Category_content d-flex Cpr bb">
                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1b4f08c4-136c-4f17-a628-2269ac5023f0%2F_____________18.jpg?rect=0%2C1%2C6667%2C4445&auto=format%2Ccompress&fmt=webp&format=webp&w=640&dpr=0.8" width="160x" height="106px" alt="Category_content_img">
                <h2 class="">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
            </a> --}}
            @endforeach
        </div>
    </div>

