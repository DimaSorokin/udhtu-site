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
    {{ Breadcrumbs::render('applicants') }}
</section>
<main id="main">
    <!--==========================
     Services Section
   ============================-->
    <section id="services">
        <div class="container">
            <div class="row">
                @if($applicants && count($applicants) > 0)
                <section id="v-3">
                    <!--Projects section v.1-->
                    <section>
                        <!--Grid row-->
                        @foreach($applicants as $applicant)
                        <div class="row wow bounceInUp asd-class" data-wow-duration="1.4s">
                            <!--Grid column-->
                            <div class="col-lg-5 mb-lg-0 mb-5">

                                <!--Image-->
                                <img src="{{ Voyager::image( $applicant->img ) }}" alt="{{$applicant->title}}" class="img-fluid rounded z-depth-1">

                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <div class="col-lg-7">

                                <!--Grid row-->
                                <div class="row mb-3">
                                    <div class="col-10">
                                        <p class="font-weight-bold announcement-title">{{$applicant->title}}</p>
                                        <p class="grey-text">{!! $applicant->text  !!}</p>
                                    </div>
                                </div>
                                <!--Grid row-->
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                        @endforeach
                    </section>
                    <!--/Projects section v.1-->
                @endif
                    <div class="justify-content-center align-self-center">
                    {!! $seo->body !!}
                    </div>
                </section>

            </div>
        </div>
    </section><!-- #services -->
</main>
@stop
