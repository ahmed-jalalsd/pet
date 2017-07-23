@extends('layouts.master')

@section('title')
  How it's made
@endsection
@section('pageType', 'how-page')
@section('content')
<div id="fullpage" class="fullpage-wrapper">

  <section id="home" class="main-container">
    <h1>{{ trans('pages.tie-title')}}</h1>
    <div class="box-flex">

      <div class="box-image">
        <span class="border"></span>
        <span class="background"></span>
        <img src="{{ URL::to('/public/images/about_image/cover_how_it_made_01.jpg') }}" alt="Story page image">
      </div>

      <div class="box-text">
        <p>{{ trans('pages.tie-body')}}</p>
      </div>
    </div>
</section>

<section id="our-story" class="main-container">
  <h1>{{ trans('pages.cut-title')}}</h1>
  <div class="box-flex">

    <div class="box-image">
      <span class="border"></span>
      <span class="background"></span>
      <img src="{{ URL::to('/public/images/how_it/il_taglio.jpg') }}" alt="Story page image">
    </div>

    <div class="box-text">
      <p>{{ trans('pages.cut-body')}}</p>
    </div>
  </div>
</section>

<section id="how" class="main-container">
  <h1>{{ trans('pages.stitch-title')}}</h1>
  <div class="box-flex">

    <div class="box-image">
      <span class="border"></span>
      <span class="background"></span>
      <img src="{{ URL::to('/public/images/how_it/macchinatura.jpg') }}" alt="Story page image">
    </div>

    <div class="box-text">
      <p>{{ trans('pages.stitch-body')}}</p>
    </div>
  </div>
</section>


<section id="collection" class="main-container">
  <h1>{{ trans('pages.craft-title')}}</h1>
  <div class="box-flex">

    <div class="box-image">
      <span class="border"></span>
      <span class="background"></span>
      <img src="{{ URL::to('/public/images/how_it/La_cravatta.jpg') }}" alt="Story page image">
    </div>

    <div class="box-text">
      <p>{{ trans('pages.craft-body')}}</p>
    </div>
  </div>
</section>

<section id="contact" class="main-container">
  <h1>{{ trans('pages.control-title')}}</h1>
  <div class="box-flex">

    <div class="box-image">
      <span class="border"></span>
      <span class="background"></span>
      <img src="{{ URL::to('/public/images/how_it/controllo_qualità.jpg') }}" alt="Story page image">
    </div>

    <div class="box-text">
      <p>{{ trans('pages.control-body')}}</p>
    </div>
  </div>
</section>
</div>

@endsection

@section('scripts')
<script src="{{ URL::to('/public/js/ourStory.script.js') }}"></script>
@endsection
