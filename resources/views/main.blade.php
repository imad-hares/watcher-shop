@extends('layouts.app')

@section('title', 'Products')

@section('extra-css')

@endsection

@section('content')
<div class="hero">
    <div class="hero-wrapper">
      <div class="hero-textWrpper">
        <h1 class="hero-textHeading">
          Wir helfen Ihnen <br />Ihre traum Uhr zufinden
        </h1>
        <p class="hero-textSpan">
          Von über 9.000 Modellen von über 200 Marken im Laden
        </p>

        <div class="hero-button">
          <span>ZEIG ALLE PRODUKTE</span>
        </div>
      </div>
      <figure class="hero-imageWrapper">
        <img src="/img/hero-gif.gif" alt="Watches" class="hero-image" />
      </figure>
    </div>
  </div>
  <!-- END HERO-->

  <section class="wrapper">
    <div class="section-heading text-center">
      <h1>Wir haben sie Alle</h1>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
        facilis a saepe quos, autem commodi nostrum voluptas, laboriosam
        natus at hic perferendis esse velit accusamus pariatur rerum facere
        deserunt possimus.
      </p>
    </div>
    <div class="spacer"></div>
    <div class="tab text-center">
      <button
        class="tab-links button active"
        onclick="openCity(event, 'featured')"
      >
        Featured</button
      >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="tab-links button" onclick="openCity(event, 'onsale')">
        On Sale
      </button>
    </div>
    <br /><br /><br />

    <div id="featured" class="tab-content">
        @foreach ($products as $product)
        <div class="product">
            <a href="#"
              ><img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"
            /></a>
            <a href="#"
              ><div class="product-name">{{$product->name}}</div></a
            >
            <div class="product-price">
              {{priceFormat($product->price)}} EUR
            </div>
          </div>
        @endforeach
     
    </div>
    <div id="onsale" class="tab-content">
        @foreach ($onsales as $onsale)
        <div class="product">
            <a href="#"
              ><img src="{{ asset('img/products/'.$onsale->slug.'.jpg') }}" alt="product"
            /></a>
            <a href="#"
              ><div class="product-name">{{$onsale->name}}</div></a
            >
            <div class="product-price">
              10,000 EUR
            </div>
          </div>
        @endforeach
    </div>
    <div class="spacer"></div>
    <div class="text-center">
      <button class="button">Zeige mehr Produkten</button>
    </div>
  </section> 

  <div class="spacer"></div>
      <section class="newsletter">
        <div class="newsletter-wrapper">
          <h1 class="newsletter-heading">Watchers Newsletter</h1>
          <p class="newsletter-text">
            Always be the first to hear about our hottest sales events. <br />
            Make sure to subscribe to benefit from exclusive early bird
            specials.
          </p>
          <br />
          <div class="input-wrapper">
            <input
              type="email"
              class="newsletter-input"
              placeholder="Enter your email"
            /><input type="submit" value="SUBSCRIBE" class="button-reverse" />
          </div>
        </div>
      </section>
      <div class="spacer"></div>
      <section class="brands" id="brands">
        <div class="section-heading text-center">
          <h1 class="brands-heading">Brands</h1>
          <p class="brands-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
            hic, rem, delectus fugiat ad molestiae, vero corrupti fugit cum quos
            dignissimos dicta. Obcaecati omnis ipsa, sapiente sunt minima
            officiis quia!
          </p>
        </div>
        <div class="spacer"></div>

        <div class="brands-wrapper">
          <div class="brands-product">
            <div class="brands-product-text">IWC</div>
            <a href="#"
              ><img src="/img/iwc-liegend.jpg" alt="product"
            /></a>
          </div>
          <div class="brands-product">
            <div class="brands-product-text">Jaeger-LC</div>
            <a href="#"
              ><img src="/img/jaegerlc-liegend.jpg" alt="product"
            /></a>
          </div>
          <div class="brands-product">
            <div class="brands-product-text">Longines</div>
            <a href="#"
              ><img src="/img/longines-liegend.jpg" alt="product"
            /></a>
          </div>
          <div class="brands-product">
            <div class="brands-product-text">Omega</div>
            <a href="#"
              ><img src="/img/omega-liegend.jpg" alt="product"
            /></a>
          </div>
          <div class="brands-product">
            <div class="brands-product-text">Tudor</div>
            <a href="#"
              ><img src="/img/tudor-liegend.jpg" alt="product"
            /></a>
          </div>
          <div class="brands-product">
            <div class="brands-product-text">Zenith</div>
            <a href="#"
              ><img src="/img/zenith-liegend.jpg" alt="product"
            /></a>
          </div>
        </div>
      </section>
@endsection
