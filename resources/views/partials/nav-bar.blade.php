<nav role="navigation" id="mobile-nav">
    <div id="menuToggle">
      <!--
  A fake / hidden checkbox is used as click reciever,
  so you can use the :checked selector on it.
  -->
      <input type="checkbox" />

      <!--
  Some spans to act as a hamburger.
  
  They are acting like a real hamburger,
  not that McDonalds stuff.
  -->
      <span></span>
      <span></span>
      <span></span>

      <!--
  Too bad the menu has to be inside of the button
  but hey, it's pure CSS magic.
  -->
      <ul id="menu">
        <a href="#"><li>Shop</li></a>
        <a href="#"><li>Brands</li></a>
        <a href="#"><li>Über Uns</li></a>
        <a href="#"><li>Kontakt</li></a>
      </ul>
    </div>
  </nav>
  <!--END MOBILE NAV-->
  <div class="header-container" id="navbar">
    <header class="header">
      <div class="logo">
        <img src="/img/logo.png" alt="WATCHERs" />
      </div>
      <div class="navbar navbar-links">
        <div class="navbar__icon-box navbar__shop">
          <a href="#">Shop</a>
        </div>
        <div class="navbar__icon-box">
          <a href="#brands">Brands</a>
        </div>
        <div class="navbar__icon-box">
          <a href="#">Über uns</a>
        </div>
        <div class="navbar__icon-box">
          <a href="#">Kontakt</a>
        </div>
      </div>

      <nav class="navbar navbar-user">
        <div class="navbar__icon-box">
          <svg class="navbar__icon">
            <use xlink:href="img/sprite.svg#icon-search"></use>
          </svg>
        </div>
        <div class="navbar__icon-box">
          <svg class="navbar__icon">
            <use xlink:href="img/sprite.svg#icon-user"></use>
          </svg>
        </div>
        <div class="navbar__icon-box">
          <svg class="navbar__icon">
            <use xlink:href="img/sprite.svg#icon-cart"></use>
          </svg>
          <span class="navbar__notification">2</span>
        </div>
        <!-- <div class="user-nav__user">
        <img
          src="img/user.jpg"
          alt="User photo"
          class="user-nav__user-photo"
        />
        <span class="user-nav__user-name">Imad</span>
      </div>-->
      </nav>
    </header>
  </div>

  @section('extra-js')

  @endsection