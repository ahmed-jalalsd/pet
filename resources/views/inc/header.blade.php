<header>
  <div class="logo-bk">
    <div class="logo-img">
      <a href="{{ URL::route('home') }}"><img src="{{ URL::to('/public/icons/logo_petronius.svg') }}" alt="logo"></a>
    </div>
  </div>
</header>

<!-- menu -->
  <button type="button" class="navbar-toggle js-navToggleButton is-open">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 48">
      <defs>
        <style>.cls-button-1{fill:#faf9f7;}</style>
      </defs>
      <title>menu icon </title>
      <g id="Layer_2" data-name="Layer 2">
        <g id="Livello_1" data-name="Livello 1">
        <rect class="cls-button-1 svg-icon-color" x="15.33" y="-15.33" width="5.34" height="36" transform="translate(15.33 20.67) rotate(-90)"/>
        <rect class="cls-button-1 svg-icon-color" x="15.33" y="-4.66" width="5.34" height="36" transform="translate(4.66 31.34) rotate(-90)"/>
        <rect class="cls-button-1 svg-icon-color" x="15.33" y="6.01" width="5.34" height="36" transform="translate(-6.01 42.01) rotate(-90)"/>
        <path class="cls-button-1 svg-icon-color" d="M6.71,47.93V43.48L5.37,45.75l-1.48-.08-1.34-2.2v4.46H.24V38.56H2.52l2.12,4.13,2.12-4.13H9v9.38Z"/>
        <path class="cls-button-1 svg-icon-color" d="M10.93,47.93V38.56h6.4v2.05H13.24v1.57h3.49v2.05H13.24v1.66h4.09v2.05Z"/>
        <path class="cls-button-1 svg-icon-color" d="M24.3,47.93l-3-4.71v4.71H19V38.56h2l3,4.71V38.56h2.31v9.38Z"/>
        <path class="cls-button-1 svg-icon-color" d="M31.62,48a3.63,3.63,0,0,1-2.53-.93,3.13,3.13,0,0,1-1-2.44V38.56h2.31v6a1.46,1.46,0,0,0,.32,1,1.17,1.17,0,0,0,.92.36,1.23,1.23,0,0,0,.93-.36,1.4,1.4,0,0,0,.34-1v-6h2.31v6.08a3.12,3.12,0,0,1-1,2.43A3.67,3.67,0,0,1,31.62,48Z"/>
      </g>
    </g>
    </svg>
  </button>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.28 30.1" class="marker marker-mobile">
    <defs>
      <style>
        .cls-menu-postion-1{fill:#faf9f7;}/*changed the color from 255083 to faf9f7*/
        .cls-menu-postion-2{fill:none;stroke:#faf9f7;stroke-miterlimit:10;stroke-width:2.5px;}
      </style>
    </defs>
    <title>icon menu position</title>
    <g id="Layer_2" data-name="Layer 2">
      <g id="Layout">
        <rect class="cls-menu-postion-1 svg-icon-color" x="21.83" y="5.83" width="18.45" height="18.45" transform="translate(-1.55 26.37) rotate(-45)"/>
        <polyline class="cls-menu-postion-2 svg-icon-color-2" points="25.05 29.93 10.18 15.05 25.05 0.18"/>
        <polyline class="cls-menu-postion-2 svg-icon-color-2" points="37.06 0.18 51.93 15.05 37.06 29.93"/>
        <polyline class="cls-menu-postion-2 svg-icon-color-2" points="0.18 12.05 3.18 15.05 0.18 18.05"/>
      </g>
    </g>
  </svg>

  <nav class="pushy pushy-left">
    <div class="pushy-content">
      <div class="logo-pushy-menu">
          <img src="{{ URL::to('/public/icons/logo_menu_white.svg') }}" alt="logo">
      </div>

      <div class="diamond">
        <button type="button" class="navbar-toggle navbar-toggle--innerNav js-navToggleButton close">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.1 42.81">
            <defs>
              <style>.icon-bar-1,.icon-bar-2{fill:none;stroke:#fff;stroke-miterlimit:10;}.icon-bar-1{stroke-width:0.25px;}.icon-bar-2{stroke-width:0.75px;}</style>
            </defs>
            <title>icon_close_white_01</title>
            <g id="Layer_2" data-name="Layer 2">
              <g id="Layout">
                <rect class="icon-bar-1" x="6.29" y="6.64" width="29.52" height="29.52" transform="translate(20.8 51.43) rotate(-135)"/>
                <polyline class="icon-bar-2" points="35.93 27.41 21.05 42.28 6.18 27.41"/>
                <polyline class="icon-bar-2" points="6.18 15.4 21.05 0.53 35.93 15.4"/>
                <line class="icon-bar-1" x1="16.01" y1="16.36" x2="26.1" y2="26.45"/>
                <line class="icon-bar-1" x1="16.19" y1="26.27" x2="25.91" y2="16.54"/>
              </g>
            </g>
          </svg>
        </button>
      </div>

      <span class="navbar-toggleTitle full-width">Menu</span>
      <div class="marker-inner outer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><defs><style>.cls-square{fill:#fff;}</style></defs><title>square_menu</title><g id="Livello_2" data-name="Livello 2"><g id="Layout"><rect class="cls-square" x="1.76" y="1.76" width="8.49" height="8.49" transform="translate(-2.49 6) rotate(-45)"/></g></g></svg>
      </div>

      <ul>
          <li class="pushy-link">
            <a href="{{ URL::route('home') }}" class="navbar-nav-links-item-link">
              {{ trans('home.link-home')}}
            </a>
          </li>
          <li class="pushy-link">
            <a href="{{ URL::route('our-story') }}" class="navbar-nav-links-item-link">
              {{ trans('home.link-story')}}
            </a>
          </li>
          <li class="pushy-link">
            <a href="{{ URL::route('how-it') }}" class="navbar-nav-links-item-link">
              {{ trans('home.link-how')}}
            </a>
          </li>
          <li class="pushy-link">
            <a href="{{ URL::route('products') }}" class="navbar-nav-links-item-link">
              {{ trans('home.link-product')}}
            </a>
          </li>
          <li class="pushy-link">
            <a href="#contact" class="navbar-nav-links-item-link">
              {{ trans('home.link-contact')}}
            </a>
          </li>
      </ul>

      <div class="marker-inner inverse">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><defs><style>.cls-square{fill:#fff;}</style></defs><title>square_menu</title><g id="Livello_2" data-name="Livello 2"><g id="Layout"><rect class="cls-square" x="1.76" y="1.76" width="8.49" height="8.49" transform="translate(-2.49 6) rotate(-45)"/></g></g></svg>
      </div>

  </div>
</nav>
<div class="site-overlay"></div>
<!-- menu -->

<div class="summary-line" id="summary-line">
  <ul>
    <li class="track-nav-first hide">
      <a href="#home">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 20" class="marker">
          <defs><style>.cls-1{fill:#255083;}</style></defs><title>line marker</title>
            <g id="Layer_2" data-name="Layer 2">
              <g id="Livello_1" data-name="Livello 1">
                <polygon class="cls-1 svg-icon-color" points="38.69 10 24 18.59 9.31 10 24 1.42 38.69 10"/><polygon class="cls-1 svg-icon-color" points="17.11 20 0 10 17.11 0 17.38 0.42 0.98 10 17.37 19.58 17.11 20"/><polygon class="cls-1 svg-icon-color" points="30.89 20 30.63 19.58 47.02 10 30.63 0.42 30.89 0 48 10 30.89 20"/>
              </g>
            </g>
        </svg>
      </a>
    </li>
    <li class="track-nav-second hide">
      <a href="#our-story">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 20" class="marker">
          <defs><style>.cls-1{fill:#255083;}</style></defs><title>line marker</title>
          <g id="Layer_2" data-name="Layer 2">
            <g id="Livello_1" data-name="Livello 1">
              <polygon class="cls-1 svg-icon-color" points="38.69 10 24 18.59 9.31 10 24 1.42 38.69 10"/><polygon class="cls-1 svg-icon-color" points="17.11 20 0 10 17.11 0 17.38 0.42 0.98 10 17.37 19.58 17.11 20"/><polygon class="cls-1 svg-icon-color" points="30.89 20 30.63 19.58 47.02 10 30.63 0.42 30.89 0 48 10 30.89 20"/>
            </g>
          </g>
        </svg>
      </a>
    </li>
    <li class="track-nav-third hide">
      <a href="#how">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 20" class="marker">
          <defs><style>.cls-1{fill:#255083;}</style></defs><title>line marker</title>
          <g id="Layer_2" data-name="Layer 2">
            <g id="Livello_1" data-name="Livello 1">
              <polygon class="cls-1 svg-icon-color" points="38.69 10 24 18.59 9.31 10 24 1.42 38.69 10"/><polygon class="cls-1 svg-icon-color" points="17.11 20 0 10 17.11 0 17.38 0.42 0.98 10 17.37 19.58 17.11 20"/><polygon class="cls-1 svg-icon-color" points="30.89 20 30.63 19.58 47.02 10 30.63 0.42 30.89 0 48 10 30.89 20"/>
            </g>
          </g>
        </svg>
      </a>
    </li>
    <li class="track-nav-fourth hide">
      <a href="#collection">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 20" class="marker">
          <defs><style>.cls-1{fill:#255083;}</style></defs><title>line marker</title>
          <g id="Layer_2" data-name="Layer 2">
            <g id="Livello_1" data-name="Livello 1">
              <polygon class="cls-1 svg-icon-color" points="38.69 10 24 18.59 9.31 10 24 1.42 38.69 10"/><polygon class="cls-1 svg-icon-color" points="17.11 20 0 10 17.11 0 17.38 0.42 0.98 10 17.37 19.58 17.11 20"/><polygon class="cls-1 svg-icon-color" points="30.89 20 30.63 19.58 47.02 10 30.63 0.42 30.89 0 48 10 30.89 20"/>
            </g>
          </g>
        </svg>
      </a>
    </li>
  </ul>
  <div class="social-icons">
    <div>
      <a href="https://www.instagram.com/petronius1926/">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 46.02">
          <defs><style>.cls-social-1{fill:#faf9f7;}.cls-social-2{fill:#255083;}</style></defs>
          <title>icon_inst_02</title>
          <g id="Layer_2" data-name="Layer 2">
            <g id="Livello_1" data-name="Livello 1">
              <polygon class="cls-social-1 svg-icon-color" points="16 37.37 2.2 23.3 16 9.23 29.8 23.3 16 37.37"/>
              <polygon class="cls-social-1 svg-icon-color" points="31.61 16.69 16 0.77 0.39 16.69 0 16.32 16 0 32 16.32 31.61 16.69"/>
              <polygon class="cls-social-1 svg-icon-color" points="16 46.02 0 29.7 0.39 29.33 16 45.25 31.61 29.33 32 29.7 16 46.02"/>
              <path class="cls-social-2 svg-icon-color-blue svg-icon-color-white" d="M11.87,18h8.25a1.39,1.39,0,0,1,1.42,1.42v8.25a1.39,1.39,0,0,1-1.42,1.42H11.87a1.39,1.39,0,0,1-1.42-1.42V19.44A1.39,1.39,0,0,1,11.87,18Zm6.66,1.23a.5.5,0,0,0-.5.5v1.2a.5.5,0,0,0,.5.5h1.25a.5.5,0,0,0,.5-.5v-1.2a.5.5,0,0,0-.5-.5Zm1.76,3.46h-1a3.25,3.25,0,0,1,.14,1,3.45,3.45,0,0,1-6.9,0,3.24,3.24,0,0,1,.14-1h-1V27.4a.44.44,0,0,0,.44.44h7.73a.44.44,0,0,0,.44-.44V22.71ZM16,21.38a2.16,2.16,0,1,0,2.23,2.16A2.2,2.2,0,0,0,16,21.38Z"/>
            </g>
          </g>
        </svg>
      </a>
    </div>
  </div>
</div>
