@extends('layouts.app')

        @section('title', 'LandingPage')
        
@section('extra-css')
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

        <style>
        .main-carousel {
                max-width: 1024px;
                width: 80%;
                margin: 0 auto;
        }
        .carousel-cell {
          width: 100%; /* full width */
          height: 450px; /* height of carousel */
          margin-right: 18rem;
          padding: 5rem 1rem;
        }
        /* position dots up a bit */
        .flickity-page-dots {
          bottom: 0rem;
        }
        /* dots are lines */
        .flickity-page-dots .dot {
          height: .4rem;
          width: 4rem;
          margin: 0;
          border-radius: 0;
        }
        /* smaller, dark, rounded square */
        .flickity-button {
          background: #333;
        }
        .flickity-button:hover {
          background: #F90;
        }
        
        .flickity-prev-next-button {
          width: 3rem;
          height: 3rem;
          border-radius: .5rem;
        }
        /* icon color */
        .flickity-button-icon {
          fill: white;
        }
        /* position outside */
        .flickity-prev-next-button.previous {
          left: 0rem;
        }
        .flickity-prev-next-button.next {
          right: 0rem;
        }

        ul.tabs{
			margin: 0px;
			padding: 0px;
			list-style: none;
		}
		ul.tabs li{
			background: none;
			color: #222;
			display: inline-block;
			padding: 10px 15px;
			cursor: pointer;
		}

		ul.tabs li.current{
			background: #ededed;
			color: #222;
		}

		.tab-content{
			display: none;
			background: #ededed;
			padding: 15px;
		}

		.tab-content.current{
			display: flex;
                }
                
                .category {
                        width: 80%;
                        display: flex;
                        flex-wrap: wrap;
                        margin: 0 auto;
                }
                .category-item {
                        flex: 0 0 50%;
                }

                h2 {
                        width: 80%;
                        margin: 0 auto;
                        text-align: center;
                }
                .infos {
                        display: flex;
                        width: 80%;
                        margin: 0 auto;
                        justify-content: space-between;
                }
                .services {
                        display: flex;
                        width: 80%;
                        margin: 0 auto;
                        justify-content: space-between;
                }

                footer {
                        background-color: #f9f9f9;
                }
                .footer-content {
                        display: flex;
                        justify-content: space-between;
                        
                }
        </style>
        @endsection

@section('content')
<div class="main-carousel">
        @foreach ($products as $product)
            <div class="carousel-cell hero-section container">
                <div class="hero-container">
                    <div class="hero-text">
                        <h1>{{ $product->name }}</h1>
                        <p class="section-description">{{ $product->description }}</p>
                        <a href="{{ route('product.show', $product->slug) }}">GO TO Product</a>
                    </div>
                    
                    <img src="/img/city-bike.png" alt="#" class="hero-image">
                </div>
            </div>   <!-- end HERO-SlIDER -->
        @endforeach
        
    </div>   <!-- end MAIN-CAROUSEL -->
<br><br><br><br>
    <div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">Featured</li>
		<li class="tab-link" data-tab="tab-2">Sale</li>

        </ul>
        <div id="tab-1" class="tab-content current">
        @foreach ($products as $product)
        
            <a href="{{ route('product.show', $product->slug) }}"><img src="/img/macbook-pro.png" alt=""></a>
            <a href="{{ route('product.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
            <div class="product-price">{{ $product->price }}</div>
        
        @endforeach
        </div>

        <div id="tab-2" class="tab-content">
                @foreach ($products as $product)
                    <a href="{{ route('product.show', $product->slug) }}"><img src="/img/macbook-pro.png" alt=""></a>
                    <a href="{{ route('product.show', $product->slug) }}"><div class="product-name">{{ $product->name }} %Sale</div></a>
                    <div class="product-price">{{ $product->price }}</div>
                @endforeach
        </div>
</div><!-- END Tabs container -->

<br><br><br>
<h2>Categories</h2>
<section class="category">
        <div class="category-item">
                <img src="/img/macbook-pro.png" alt="#">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eligendi suscipit molestias maxime, deleniti omnis dignissimos velit perspiciatis, Vero, veniam.
                </p>
        </div>
        <div class="category-item">
                <img src="/img/macbook-pro.png" alt="#">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eligendi suscipit molestias maxime, deleniti omnis dignissimos velit perspiciatis, Vero, veniam.
                </p>
        </div>
        <div class="category-item">
                <img src="/img/macbook-pro.png" alt="#">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eligendi suscipit molestias maxime, deleniti omnis dignissimos velit perspiciatis, Vero, veniam.
                </p>
        </div>
        <div class="category-item">
                <img src="/img/macbook-pro.png" alt="#">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eligendi suscipit molestias maxime, deleniti omnis dignissimos velit perspiciatis, Vero, veniam.
                </p>
        </div>
</section>
<br><br><br><br>
<section class="infos">
        <div class="info-questions">
                <img src="/img/macbook-pro.png" alt="#">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eligendi suscipit molestias maxime, deleniti omnis dignissimos velit perspiciatis, Vero, veniam.
                </p>
        </div>
        <div class="info-newsletter">
                <img src="/img/macbook-pro.png" alt="#">
                <p>To get our updates first please subscribe to our newsletter!
                </p>
                <h5>Datenshutz</h5>
                <input type="text" placeholder="Enter email">
        </div>
        <div class="info-faq">
                <img src="/img/macbook-pro.png" alt="#">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eligendi suscipit molestias maxime, deleniti omnis dignissimos velit perspiciatis, Vero, veniam.
                </p>
        </div>
</section> <!-- End Info section -->
<br><br><br><br>

<section class="services">
        <div class="services-item">
                <h4>Zahlungsweisen</h4>
                <img src="/img/macbook-pro.png" alt="#">
        </div>
        <div class="services-item">
                <h4>Partnershops</h4>
                <img src="/img/macbook-pro.png" alt="#">
        </div>
        <div class="services-item">
                <h4>versand</h4>
                <img src="/img/macbook-pro.png" alt="#">
                
        </div>
        
</section>
<br><br><br><br>

@include('partials.footer')

@endsection

@section('extra-js')
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
       <script>
        

var flkty = new Flickity('.main-carousel')
flkty.next();
flkty.select( 0 );
flkty.playPlayer();

function checkScroll(){
    var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

    if($(window).scrollTop() > startY){
        $('.navbar').addClass("scrolled");
    }else{
        $('.navbar').removeClass("scrolled");
    }
}

if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();
    });
}

//////////////////////////
// HTML Tabs
$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});
;
})
</script>
@endsection