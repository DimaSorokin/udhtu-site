@extends('layouts.master')
<!--==========================
    Intro Section
  ============================-->@section('seo')
    <title>{{$post->seo_title}}</title>
    <!-- Basic SEO-->
    <meta content="{{$post->meta_keywords}}" name="keywords">
    <meta content="{{$post->meta_description}}" name="description">
    <!-- OG -->
    <meta property="og:locale" content="uk_UA"/>
    <meta property="og:title" content="{{$post->og_title}}"/>
    <meta property="og:description" content="{{$post->og_description}}"/>
    <meta property="og:url" content="{{Request::url()}}"/>
    <meta property="og:image" content="{{ Voyager::image( $post->image ) }}"/>
@endsection

@section('content')
    <section id="intro_about" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center" >
                <h1>{{$post->title}}</h1>
            </div>
        </div>
    </section><!-- #intro -->
    <section>
        {{ Breadcrumbs::render('single-post', $post) }}
    </section>
    <main id="main">
        <section id="services" class="team-content">
            <div class="container">
                <div class="well">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row hidden-md hidden-lg"><h1 class="text-center" >{{$post->title}}</h1></div>

                            <div class="pull-left col-md-8 col-xs-12 thumb-contenido">
                                <img class="center-block img-responsive img-fluid" style="height: 400px; object-fit: cover;" src='{{ Voyager::image( $post->image ) }}' /></div>
                            <div class="">
                                <!-- <h1  class="hidden-xs hidden-sm">TITULO LARGO DE UNA INVESTIGACION cualquiera</h1> -->
                                <hr>
                                <span>Дата публікації: {{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</span><br>
                                <hr>
                                <p class="text-justify">{!! $post->body !!}</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #services -->
    </main>
@stop
