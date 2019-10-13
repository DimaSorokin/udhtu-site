@extends('layouts.master')
<!--==========================
    Intro Section
  ============================-->
@section('seo')
    <title>{{$page->seo_title}}</title>
    <!-- Basic SEO-->
    <meta content="{{$page->meta_keywords}}" name="keywords">
    <meta content="{{$page->meta_description}}" name="description">
    <!-- OG -->
    <meta property="og:locale" content="uk_UA"/>
    <meta property="og:title" content="{{$page->og_title}}"/>
    <meta property="og:description" content="{{$page->og_description}}"/>
    <meta property="og:url" content="{{Request::url()}}"/>
    <meta property="og:image" content="{{ Voyager::image( $page->image ) }}"/>
@endsection

@section('content')
    <section id="intro_about" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center" >
                <h1 class="page-title">{{$page->title}}</h1>
            </div>
        </div>
    </section><!-- #intro -->
    <section>
{{--        {{ Breadcrumbs::render('single-post', $post) }}--}}
    </section>
    <main id="main">
        <section id="services" class="team-content">
            <div class="container">
                <div class="well">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row hidden-md hidden-lg">
                            </div>
                                <p class="text-justify">{!! $page->body !!}</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #services -->
    </main>
@stop
