@extends('layouts.master')

@section('styles')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="{{URL::to('/public/css/unslider.css')}}">
<link rel="stylesheet" href="{{URL::to('/public/css/unslider-dots.css')}}">
@endsection

@section('title')
  Home Page
@endsection
@section('pageType', 'home-page')
@section('content')
<div id="fullpage" class="fullpage-wrapper">
  <!-- Timeline -->
  <!-- Home slider -->
  <section id="home" class="my-slider">
    <ul>
      @foreach( $gallery as $image )
        <li>
          <img class="slider-image" src="{{ URL::to('/public/images/'.$image->image) }}" alt="Home page image slider" >
          <div class="caption">
            <!-- <h1 class="line">{{ $image->title }}</h1>
            <p>{{ $image->description }}</p> -->
          </div>
        </li>
      @endforeach
    </ul>
    <!-- important to make the text slide with the image -->
    <div id="slider-text" class="color-change"></div>
    <div class="slider-filter"><img src="{{ URL::to('/public/icons/filter_bar_slider_horizontal.svg') }}" alt="filter"></div>
    <!-- <div class="slider-filter-v"><img src="{{ URL::to('/public/icons/filter_bar_slider_vertical.svg') }}" alt="filter"></div> -->
  </section>

  <section id="our-story" class="main-container">
    <h1>{{ trans('home.story-title')}}</h1>
    <div class="box-flex">
      <div class="box-image left">
        <span class="border"></span>
        <span class="background"></span>
        <img src="{{ URL::to('/public/images/about_image/home_our_story.jpg') }}" alt="Story page image">
      </div>

      <div class="box-text right">
        <p>{{ trans('home.story-intro')}}</p>
        <a href="{{ URL::route('our-story') }}">
          <button class="btn"><span>{{ trans('home.button')}}</span></button>
        </a>
      </div>

    </div>
    <div class="clear"></div>
  </section>

  <section id="how" class="main-container">
    <h1>{{ trans('home.how-title')}}</h1>
    <div class="box-flex">
      <div class="box-image right">
        <span class="border"></span>
        <span class="background"></span>
        <img src="{{ URL::to('/public/images/about_image/cover_how_it_made_01.jpg') }}" alt="Story page image">
      </div>

      <div class="box-text left">
        <p>{{ trans('home.how-intro')}}</p>
        <a href="{{ URL::route('how-it') }}">
          <button class="btn"><span>{{ trans('home.button')}}</span></button>
        </a>
      </div>

    </div>
    <div class="clear"></div>
  </section>

  <section id="collection" class="main-container">

    @foreach($newproducts as $newproduct)
    <h1>{{ $newproduct->title  }}</h1>
      <div class="box-flex">
        <div class="box-image left">
          <span class="bk-image"><img src="{{ URL::to('/public/images/product-pro/'.$newproduct->bk_image) }}" alt="Home page image slider"></span>
          <span class="border"></span>
          <span class="ft-image"><img src="{{ URL::to('/public/images/product-pro/'.$newproduct->ft_image) }}" alt="Home page image slider"></span>
        </div>

        <div class="box-text right">
          <p>{{ $newproduct->description }}</p>
          <a href="{{ URL::route('products') }}">
            <button class="btn"><span>{{ trans('home.button')}}</span></button>
          </a>
        </div>

      </div>
    @endforeach
    <div class="clear"></div>
  </section>


@endsection

@section('scripts')
<!-- Slider -->
<script src="{{ URL::to('/public/js/unslider.js') }}"></script>
<script src="{{ URL::to('/public/js/color-thief.js') }}"></script>
<script src="{{ URL::to('/public/js/inview.js') }}"></script>
<script src="{{ URL::to('/public/js/petronius.script.js') }}"></script>
@endsection
