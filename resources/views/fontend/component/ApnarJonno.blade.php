<div class="container">
    <div class="row">
       
            
     
        <a href="" class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12 col-xl-12 pb-3">
                <div class="CategoryName">
                    <h2>আপনার জন্য<i class="bi bi-chevron-right"></i></h2>
                </div>
            </a>
    </div>
    <div class="row">
        @foreach ($ApnarJonno->news as $news )
        <a href="" class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 col-xl-3 feature br">
            <div class="extraCategory_img">
                <img src="{{ asset($news->image) }}" width="300px" height="200px" alt="">
            </div>
            <div class="extraCategory_content d-flex justify-content-between pt-3">
                <h2 class="pr">{{ $news->title }}</h2>
               <h3>{!! Str::limit($news->nBody, 200) !!}</h3>
               <span>
                   {{ $news->created_at->diffForHumans() }}
               </span>
            </div>

        </a>
        @endforeach
        
        {{-- <a href="" class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 col-xl-3 feature br">
            <div class="extraCategory_img">
                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2F1a772445-76a4-450a-b51c-fe97b06af244%2FPutin_russia.jpg?rect=0%2C0%2C3000%2C2000&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.0" width="300px" height="200px" alt="">
            </div>
            <div class="extraCategory_content d-flex justify-content-between pt-3">
                <h2 class="pr">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
               <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
               <span>৬ ঘণ্টা আগে</span>
            </div>

        </a>
        <a href="" class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 col-xl-3 feature br">
            <div class="extraCategory_img">
                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2023-11%2F25f1a373-ad66-4686-b295-7c6b207b86c8%2FUSA_India_REuters.jpg?rect=145%2C0%2C942%2C628&auto=format%2Ccompress&fmt=webp&format=webp&w=300&dpr=1.0" width="300px" height="200px" alt="">
            </div>
            <div class="extraCategory_content d-flex justify-content-between pt-3">
                <h2 class="pr">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
               <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
               <span>৬ ঘণ্টা আগে</span>
            </div>

        </a>
        <a href="" class="col-md-3 col-lg-3 col-sm-12 col-xs-12 col-12 col-xl-3 feature br">
            <div class="extraCategory_img">
                <img src="https://images.prothomalo.com/prothomalo-bangla%2F2024-03%2Fc7b64a1c-c087-434b-8708-38449ac59745%2Fnetanyahu.jpg?rect=0%2C1%2C5500%2C3667&auto=format%2Ccompress&fmt=webp&format=webp&w=360&dpr=1.0" width="300px" height="200px" alt="">
            </div>
            <div class="extraCategory_content d-flex justify-content-between pt-3">
                <h2 class="pr">লোকমান হাকিম ও রোমানদের যুদ্ধজয়ের ভবিষ্যদ্বাণী</h2>
               <h3>আজ খতমে তারাবিহতে পবিত্র কোরআনের সুরা আনকাবুতের ৪৫ থেকে সুরা রুম, সুরা লোকমান, সুরা সাজদা ও আহজাবের ১ থেকে ৩০ নম্বর আয়াত পর্যন্ত তিলাওয়াত করা হবে। </h3>
               <span>৬ ঘণ্টা আগে</span>
            </div>

        </a>     --}}
    </div>
  </div>