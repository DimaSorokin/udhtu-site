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
        <div class="container d-flex h-100 titleMain">
            <div class="row justify-content-center align-self-center titleMainChild" >
                <h1>{{$seo->title}}</h1>
            </div>
        </div>
    </section><!-- #intro -->
    <section>
        {{ Breadcrumbs::render('publication') }}
    </section>
    <main id="main">

        <!--==========================
         Services Section
       ============================-->
        <section id="services" class="team-content index-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="publication">
                        @if($publications && count($publications) > 0)
<!--                            --><?php //dd($publications);?>
                            @foreach($publications as $publication)
<!--                                --><?php //dd($publication->file);?>
                                @if($publication->file != '[]')
                                <?php
                                    $file = ($publication->file != '[]') ? (json_decode($publication->file))[0]->download_link : '';
//                                    dd($file);
                                    ?>
                                @else
                                @endif
                                <a @if($publication->file != '[]') href="/storage/<?= $file ?>" @else @endif>{{$publication->nameFile}}</a>
                                    <div class="card card-public">
                                        <div class="publication-title">{{$publication->title}}</div>
                                        <hr>
                                        {!! $publication->desc !!}
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <p>{!! $publication->author !!}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p><a class="link" @if($publication->file != '[]') href="/storage/"
                                                   @else href="" @endif >Переглянути</a></p>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            @endforeach
                        @else
                            <div class="card w-100 d-flex justify-content-center align-items-center"
                                 style="margin-top: 50px">
                                <p class="pt-3 pr-2">Піблікації в обробці</p>
                            </div>
                        @endif
                    </div>
                    <button type="button" id="loading-example-btn" data-loading-page="{{$publications->lastPage()}}" class="link" style="margin:20px auto">
                        Показати ще
                    </button>
                </div>
            </div>
        </section><!-- #services -->
    </main>

@stop
