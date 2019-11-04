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
        <section class="container">
            <ul class="nav  nav-tabs justify-content-center nav-justified" role="tablist" style="margin-top: 35px;">
                <li class="nav-item">
                    <a class="nav-link active" href="#publications" role="tab" data-toggle="tab">Публікації</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#monographs" role="tab" data-toggle="tab">Монографії</a>
                </li>
            </ul>
        </section>
        <section id="services" class="team-content index-content">

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active show" id="publications">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12" id="publication">
                                @if($publications && count($publications) > 0)
                                    @foreach($publications as $publication)
                                        @if($publication->file != '[]')
                                            <?php
                                            $file = ($publication->file != '[]') ? (json_decode($publication->file))[0]->download_link : '';
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
                    </div></div>
                <div role="tabpanel" class="tab-pane fade" id="monographs"><div class="container">
                        <div class="row">

                            <div class="col-md-12" id="publication">
                                @if($publications && count($publications) > 0)
                                    @foreach($publications as $publication)
                                        @if($publication->file != '[]')
                                            <?php
                                            $file = ($publication->file != '[]') ? (json_decode($publication->file))[0]->download_link : '';
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
                    </div></div></div>
            </div>
        </section><!-- #services -->
    </main>

@stop
