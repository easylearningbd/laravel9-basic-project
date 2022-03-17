<section class="portfolio">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-8">
    <div class="section__title text-center">
    <span class="sub-title">04 - Portfolio</span>
    <h2 class="title">All creative work</h2>
    </div>
    </div>
    </div>
   
    </div>
    <div class="tab-content" id="portfolioTabContent">
  
  @php
$portfolio = App\Models\Portfolio::latest()->get();
  @endphp
     
     
    <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="graphic-tab">
    <div class="container">
    <div class="row gx-0 justify-content-center">
    <div class="col">
    <div class="portfolio__active">

        @foreach($portfolio as $item)
    <div class="portfolio__item">
    <div class="portfolio__thumb">
        <img src="{{ asset($item->portfolio_image) }}" alt="">
    </div>
    <div class="portfolio__overlay__content">
        <span>{{$item->portfolio_name}}</span>
        <h4 class="title"><a href="{{ route('portfolio.details',$item->id)}}">{{$item->  portfolio_title}}</a></h4>
        <a href="{{ route('portfolio.details',$item->id)}}" class="link">Case Study</a>
    </div>
    </div> 
    @endforeach

   
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>