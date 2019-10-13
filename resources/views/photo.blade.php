@extends('layouts.master')
<!--==========================
    Intro Section
  ============================-->
@section('seo')
    <title>{{$seo->seo_title}}</title>
    <!-- Basic SEO-->
    <meta content="{{$seo->meta_keywords}}" name="keywords">
    <meta content="{{$seo->meta_description}}" name="description">
    <!-- OG -->
    <meta property="og:locale" content="uk_UA"/>
    <meta property="og:title" content="{{$seo->og_title}}"/>
    <meta property="og:description" content="{{$seo->og_description}}"/>
    <meta property="og:url" content="{{Request::url()}}"/>
    <meta property="og:image" content="{{ Voyager::image( $seo->image ) }}"/>
@endsection

@section('content')
    <section id="intro_about" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center" >
                <h1>{{$seo->title}}</h1>
            </div>
        </div>
    </section><!-- #intro -->
    <section>
        {{ Breadcrumbs::render('foto') }}
    </section>
    <main id="main">
        <section id="portfolio">
            <div class="container">

                <header class="section-header">
                    <h2 class="section-title">Фотогалерея</h2>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach($tags as $tag)
                            <li data-filter=".filter-{{str_replace(' ', '', $tag->name)}}">{{$tag->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div id="postData" class="row portfolio-container">
                    @if($photos && count($photos) > 0)
                    @foreach($photos as $photo)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{str_replace(' ', '', $photo->tag->name)}}">
                        <div class="portfolio-wrap">
                            <img src="{{ Voyager::image( $photo->img ) }}" class="img-fluid" alt="{{$photo->desc}}">
                            <div class="portfolio-info">
                                <p>{{$photo->desc}}</p>
                                <div>
                                    <a href="{{ Voyager::image( $photo->img ) }}" data-lightbox="portfolio" data-title="{{$photo->desc}}" class="link-preview"
                                       title="Preview"><i class="ion ion-eye"></i></a>
                                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <div class="card w-100 d-flex justify-content-center align-items-center"
                             style="margin-top: 50px">
                            <p class="pt-3 pr-2">Зайдіть пізніше фото невдовзі будуть :)</p>
                        </div>
                    @endif

                </div>
            </div>

        </section><!-- #portfolio -->
    </main>
@stop
