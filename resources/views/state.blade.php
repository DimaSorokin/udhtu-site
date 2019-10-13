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
    {{ Breadcrumbs::render('state') }}
</section>
<main id="main">

    <!--==========================
      Portfolio Section
    ============================-->
    <section class="team-content">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 pad_about">
                    <!-- Team Member -->
                    @if(!empty($states))
                        @foreach($states as $state)
                    <div class="team-member">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="{{ Voyager::image( $state->img ) }}" alt="{{$state->title}}">
                        </div>
                        <div class="member-information">
                            <div class="port-title">{{$state->title}}</div>

                            <article class="member-description">
                                {!! $state->text !!}
                            </article>
                            <hr/>
                            <ion-icon src="{{asset('img/_ionicons_svg_ios-add.svg')}}"></ion-icon>
                            <a href="{{$state->scholar_link}}">Google Scholar</a>
                            <hr/>
                        </div>
                    </div>
                        @endforeach
                        @endif

                </div>
            </div>
        </div>
    </section>
</main>
@stop
