@extends('layouts.master')

@section('styles')
<link rel="stylesheet" href="{{URL::to('/public/css/unslider.css')}}">
<link rel="stylesheet" href="{{URL::to('/public/css/unslider-dots.css')}}">
@endsection

@section('title')
  Products
@endsection
@section('pageType', 'single-page')
@section('content')
  <section class="single-container">
      <div class="main-box">

        <div class="slider-small">
          <ul>
            @foreach ( $product->productgalleries as $image )
              <li class="image-box">
                <img src="{{ URL::to('/public/images/product-gallery/'.$image->product_images) }}" alt="{{ $product->product_name }}">
              </li>
            @endforeach
          </ul>
        </div>

        <div class="info-box">
            <div class="descrption-box">
              <h2>{{ $product->product_name }}</h2>
              <h4>Fatta a mano in italia</h4>
              <p>{{ isset($product->fantasias->fantasia_name) ? $product->fantasias->fantasia_name : '-'}}</p>
              <p>{{ isset($product->materials->material_type) ? $product->materials->material_type : '-'}}</p>
              <p>{{ isset($product->sizes->size_name) ? $product->sizes->size_name : '-'}}</p>
              <p>{{ $product->product_description }}</p>
            </div>
          </div>


      </div>

      <span class="icon-square">
        <a href="javascript:history.go(-1)">
           <img src="{{ URL::to('/public/icons/icon_close_blu_01.svg') }}" alt="close window">
        </a>
      </span>

      <span class="collection-model">
        <h4> collezione / <?php echo date('Y'); ?></h4>
    </span>

  </section>
@endsection

@section('scripts')
<!-- Slider -->
<script src="{{ URL::to('/public/js/unslider.js') }}"></script>
<script type="text/javascript">
// initiliazing the slider
$(function() {
  $('.slider-small').unslider({
    autoplay: false,
    delay: 4000,
    speed: 1500,
  });
});
</script>
@endsection
