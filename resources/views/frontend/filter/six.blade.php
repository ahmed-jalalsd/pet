@extends('layouts.master')

@section('styles')
@endsection
@section('title')
  Products
@endsection
@section('pageType', 'products-page')
@section('content')
  <section class="main-container">
  <section class="content ">
    <ul class="products">
      @foreach ($sixs as $six)
        <li>
          <div class="product-card">
            <span class="product-info">
              <h3>{{ $six->product_name }}</h3>
            </span>
            <span class="icon-square">
              <a href="{{ URL::route('products.single', ['products'=>$six->id]) }}">
                 <img data-src="{{ URL::to('/public/icons/icon_object_01.svg') }}" alt="vai avanti" width="28px" height="28px">
              </a>
            </span>
            <div class="product-image">
              <img data-src="{{ URL::to('/public/images/product-feature/'.$six->product_preview) }}" alt="{{$six->product_name}}" width="100%" height="100%">
            </div>
          </div>
        </li>
      @endforeach
    </ul>
    <div class="padding-div"></div>
  </section>

  <div class="product-line" id="product-line"></div>

  <button type="button" class="filter-button filter-toggle" id="trigger">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.96 46.91">
      <defs>
        <style>.cls-1{fill:#255083;}</style>
      </defs>
      <title>filter_icon</title>
      <g id="Layer_2" data-name="Layer 2">
        <g id="Layout">
          <path class="cls-1" d="M0,37.88H6v2H2.3v1.5H5.65v2H2.3v3.51H0Z"/>
          <path class="cls-1" d="M9.57,46.91H7.28v-9h2.3Z"/>
          <path class="cls-1" d="M11.38,37.88h2.3v7h3.75v2h-6Z"/>
          <path class="cls-1" d="M16.79,37.88h6.79v2H21.33v7H19v-7H16.79Z"/>
          <path class="cls-1" d="M27.48,43.86h-.64v3h-2.3v-9H28a3,3,0,0,1,3.11,3,2.82,2.82,0,0,1-1.48,2.58l1.9,3.46H29Zm.39-2a1,1,0,1,0,0-2h-1v2Z"/>
          <path class="cls-1" d="M35,46.91h-2.3v-9H35Z"/>
          <polygon class="cls-1" points="17.48 26 32.48 0 2.48 0 17.48 26"/>
        </g>
      </g>
    </svg>
  </button>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.28 30.1" class="marker-product">
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


  <div class="filter-menu">
    <span class="icon-close">
      <img src="{{URL::to('/public/icons/icon_object_01.svg')}}" alt="">
    </span>
    <ul>
      <li class="setting">
        <h2>Filter Settings</h2>
      </li>
      <li class="search-bar">
        <input type="text" name="search-bar" value="" placeholder="Search..">
      </li>
    </ul>
    <ul class="accordion groupA">

      <li class="filter-cat">
          <a class="toggle" href="javascript:void(0);">
            <h4>prodotto</h4>
          </a>
          <ul class="inner">
            <a href="{{ URL::route('caravetta', 'caravetta') }}">
              <li>Caravetta</li>
            </a>
            <a href="{{ URL::route('papillon', 'papillon') }}">
              <li>Papillon</li>
            </a>
            <a href="{{ URL::route ('customi', 'customi') }}">
              <li>customi</li>
            </a>
            <a href="{{ URL::route ('sciarpe', 'sciarpe') }}">
              <li>sciarpe</li>
            </a>
            <a href="{{ URL::route ('foulard', 'foulard') }}">
              <li>foulard</li>
            </a>
          </ul>
       </li>

      <li class="filter-model">
        <a class="toggle" href="javascript:void(0);">
          <h4>pieghe</h4>
        </a>
        <ul class="inner">
          <a href="{{ URL::route('products-foderata', 'foderata') }}">
              <li>Foderata</li>
          </a>
          <a href="{{ URL::route('products-sfoderata', 'sfoderata') }}">
              <li>Sfoderata</li>
          </a>
          <a href="{{ URL::route('products-pieghe3', '3 pieghe') }}">
              <li>3 pieghe</li>
          </a>
          <a href="{{ URL::route('products-pieghe5', '5 pieghe') }}">
              <li>5 pieghe</li>
          </a>
          <a href="{{ URL::route('products-pieghe7', '7 pieghe') }}">
              <li>7 pieghe</li>
          </a>
        </ul>
      </li>
    </ul>

    <ul class="accordion groupB">

       <li class="filter-mat">
         <a class="toggle" href="{{ URL::to ('javascript:void(0);') }}">
           <h4>materiale</h4>
         </a>
         <ul class="inner">
           <a href="{{ URL::route ('seta', 'seta') }}">
             <li>Seta</li>
           </a>
           <a href="{{ URL::route ('setaStampate', 'seta stampata') }}">
             <li>seta stampata</li>
           </a>
           <a href="{{ URL::route ('setaJacquard', 'Seta Jacquard') }}">
             <li>Seta Jacquard</li>
           </a>
           <a href="{{ URL::route ('cotton', 'cotton') }}">
             <li>cotton</li>
           </a>
           <a href="{{ URL::route ('lino', 'lino') }}">
             <li>lino</li>
           </a>
           <a href="{{ URL::route ('lana', 'lana') }}">
             <li>lana</li>
           </a>
       </ul>
     </li>

     <li class="filter-size">
       <a class="toggle" href="{{ URL::to ('javascript:void(0);') }}">
         <h4>misura</h4>
       </a>
       <ul class="inner">
         <a href="{{ URL::route ('five', '5.5 cm') }}">
           <li>5.5 cm</li>
         </a>
          <a href="{{ URL::route ('six', '6 cm') }}">
           <li>6 cm</li>
         </a>
         <a href="{{ URL::route ('sixand', '6.5 cm') }}">
           <li>6.5 cm</li>
         </a>
         <a href="{{ URL::route ('seven', '7 cm') }}">
           <li>7 cm</li>
         </a>
         <a href="{{ URL::route ('eight', '8 cm') }}">
           <li>8 cm</li>
         </a>
         <a href="{{ URL::route ('eightand', '8.5 cm') }}">
           <li>8.5 cm</li>
         </a>
         <a href="{{ URL::route ('nine', '9 cm') }}">
           <li>9 cm</li>
         </a>
       </ul>
     </li>
   </ul>
  </div>

</section>
</section>

@endsection

@section('scripts')
<script type="text/javascript">
jQuery(document).ready(function($) {
  $('.filter-button').click(function() {
    $('.filter-menu').addClass('show-sidebar');
    $('.content').addClass('push-content');
    $('ul.products > li').addClass('width-expand');
  });
  $('.icon-close').click(function() {
    $('.filter-menu').removeClass('show-sidebar');
    $('.content').removeClass('push-content');
    $('ul.products > li').removeClass('width-expand');
});
});
</script>
<script src="{{ URL::to('/public/js/jquery.lazyloadxt.js') }}"></script>
<script type="text/javascript">
  $.lazyLoadXT.onload.addClass = 'animated fadeIn';
</script>

<script type="text/javascript">
$('.toggle').click(function(e) {
  e.preventDefault();

  var $this = $(this);

  if ($this.next().hasClass('show')) {
      $this.next().removeClass('show');
      $this.next().slideUp(350);
  } else {
      $this.parent().parent().find('li .inner').removeClass('show');
      $this.parent().parent().find('li .inner').slideUp(350);
      $this.next().toggleClass('show');
      $this.next().slideToggle(350);
  }
});
</script>

@endsection