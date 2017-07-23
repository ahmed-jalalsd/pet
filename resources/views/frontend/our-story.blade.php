@extends('layouts.master')

@section('title')
  Our Story
@endsection
@section('pageType', 'story-page')
@section('content')
  <section id="home" class="main-container">
    <h1>{{ trans('pages.symbole-title')}}</h1>
    <div class="box-flex">
      <div class="box-image">
        <span class="border"></span>
        <span class="background"></span>
        <img src="{{ URL::to('/public/images/our_story/our_story.jpg') }}" alt="Story page image">
      </div>
      <div class="box-text">
        <p>{{ trans('pages.symbole-body')}}</p>
      </div>
    </div>
</section>

<section id="our-story" class="main-container">
  <h1>{{ trans('pages.our-story-title')}}</h1>
  <div class="box-flex">
    <div class="box-image">
      <span class="border"></span>
      <span class="background"></span>
      <img src="{{ URL::to('/public/images/our_story/Ritratto_00.jpg') }}" alt="Story page image">
    </div>

    <div class="box-text">
      <p>{{ trans('pages.our-story-body')}}</p>
    </div>
  </div>
</section>

<section id="how" class="main-container">
  <h1>{{ trans('pages.gigliola-title')}}</h1>
  <div class="box-flex">
    <div class="box-image">
      <span class="border"></span>
      <span class="background"></span>
      <img src="{{ URL::to('/public/images/our_story/Ritratto_01.jpg') }}" alt="Story page image">
    </div>
    <div class="box-text">
      <p>{{ trans('pages.gigliola-body')}}</p>
    </div>
  </div>
</section>


<section id="collection" class="main-container">
  <h1>{{ trans('pages.luigi-title')}}</h1>
  <div class="box-flex">
    <div class="box-image">
      <span class="border"></span>
      <span class="background"></span>
      <img src="{{ URL::to('/public/images/our_story/Ritratto_02.jpg') }}" alt="Story page image">
    </div>

    <div class="box-text">
      <p>{{ trans('pages.luigi-body')}}</p>
    </div>
  </div>
</section>

<section id="contact" class="main-container">
  <h1>{{ trans('pages.simona-title')}}</h1>
  <div class="box-flex">
    <div class="box-image">
      <span class="border"></span>
      <span class="background"></span>
      <img src="{{ URL::to('/public/images/our_story/Ritratto_03.jpg') }}" alt="Story page image">
    </div>
    <div class="box-text">
      <p>{{ trans('pages.simona-body')}}</p>
    </div>
  </div>
</section>

@endsection

@section('scripts')
<script src="{{ URL::to('/public/js/ourStory.script.js') }}"></script>
@endsection
