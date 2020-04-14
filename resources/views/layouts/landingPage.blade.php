<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bike Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">   
        <!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<style>
.carousel-cell {
  width: 100%; /* full width */
  height: 450px; /* height of carousel */
  margin-right: 18rem;
  padding: 5rem 1rem;
}
/* position dots up a bit */
.flickity-page-dots {
  bottom: -3rem;
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
  left: 18rem;
}
.flickity-prev-next-button.next {
  right: 18rem;
}
</style>

    </head>
    <body>
        <div class="container">
       <header>
           <div class="top-nav container navbar">
               <div class="top-nav-left">
                    <div class="logo">BikeShop</div>
                    <ul>
                        <li><a href="#">Catagories</a></li>
                        <li><a href="/shop">Shop</a></li>
                    </ul>
               </div>
               <div class="top-nav-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i>&nbsp;Mein Konto</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i>&nbsp;Warenkorp</a></li>
                    </ul>
                </div>
           </div>   <!-- end TOP-NAV -->
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
    </header>

       <div class="featured-section">
           <div class="container">
               <h1 class="text-center">Bike Shop</h1>
               <p class="section-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                   In, ea illum praesentium suscipit ducimus quaerat iste, 
                   pariatur facere iusto optio consequuntur nesciunt minus soluta provident eligendi, excepturi obcaecati laboriosam eos.</p>
               <div class="text-center button-container">
                   <a href="#" class="button">Featured</a>
                   <a href="#" class="button">On Sale</a>
               </div>
            

            <div class="products text-center">
                @foreach ($products as $product)
                <div class="product">
                    <a href="#"><img src="{{ asset('img/'.$product->slug.'.jpg') }}" alt=""></a>
                    <a href="#"><div class="product-name">{{ $product->name }}</div></a>
                    <div class="product-price">{{ $product->price }}</div>
                </div>
                @endforeach
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt=""></a>
                    <a href="#"><div class="product-name">MacBook Pro</div></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt=""></a>
                    <a href="#"><div class="product-name">MacBook Pro</div></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt=""></a>
                    <a href="#"><div class="product-name">MacBook Pro</div></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt=""></a>
                    <a href="#"><div class="product-name">MacBook Pro</div></a>
                    <div class="product-price">$2499.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt=""></a>
                    <a href="#"><div class="product-name">MacBook Pro</div></a>
                    <div class="product-price">$2499.99</div>
                </div>
            </div>  <!-- end Products -->

            <div class="text-center button-container">
                <a href="#" class="button">View more products</a>
            </div>
       </div> <!-- end Container -->

    </div> <!-- end Featured Section -->

    <section class="info">
        <div class="container">
            <h1 class="text-center">From Our Blog</h1>
            <p class="section-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                In, ea illum praesentium suscipit ducimus quaerat iste, 
                pariatur facere iusto optio consequuntur nesciunt minus soluta provident eligendi, excepturi obcaecati laboriosam eos.</p>

            <div class="info-blocks">
                <div class="info-block">
                    <a href="#"><img src="img/blog1.png" alt="#"></a>
                    <a href="#"><h2 class="info-title">Fragen</h2></a>
                    <div class="info-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quasi cumque obcaecati cupiditate?</div>
                </div>
                <div class="info-block">
                    <a href="#"><img src="img/blog1.png" alt="#"></a>
                    <a href="#"><h2 class="info-title">Newsletter</h2></a>
                    <div class="info-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quasi cumque obcaecati cupiditate?</div>
                </div>
                <div class="info-block">
                    <a href="#"><img src="img/blog1.png" alt="#"></a>
                    <a href="#"><h2 class="info-title">FAQ/Hilfe</h2></a>
                    <div class="info-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quasi cumque obcaecati cupiditate?</div>
                </div>
            </div> <!-- end info-blocks -->
        </div>  <!-- end Container -->
    </section>  <!-- end info section -->

    <section class="cart">
        <h2 class="cart-counter">1 Item(s) in Shopping  Cart</h2>
        <hr>
        <div class="cart-product">
            <div class="cart-image">
                <img src="some.pagi" alt="something">
            </div>
            <div class="cart-description">
                <div class="cart-product--name">
                    Laptop 25
                </div>
                <p class="product-detials">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <hr>
        <div class="cart-cashiar">
            <p>

            </p>
            ...
        </div>

        <div class="btn-group">
            <button>Continue Shopping</button>
            <button>Proceed to Checkout</button>
        </div>

        <div class="savelater">
            <p>putthem below in same order as product cart</p>
        </div>
    </section>

    <section class="might-like-page">
        <p>Render list of five random products</p>
    </section>

    <footer>
        <div class="footer-content container">
            <div class="made-with">Made with <i class="fa fa-heart"></i>by Me</div>
            <ul>
                <li>Follow Us:</li>
                <li><a href="#"><i class="fa fa-globe"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </footer>
</div>
    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

       </script>
    </body>
</html>
