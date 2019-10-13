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
                <h2>{{$seo->title}}</h2>
            </div>
        </div>
    </section><!-- #intro -->
    <section>
        {{ Breadcrumbs::render('science') }}
    </section>
    <main id="main">
        <section id="clients" class="wow fadeInUp">
            <div class="container">

                    <h2 class="science-title">Студенська наука</h2>
                {!!  $seo->body!!}

                <div class="owl-carousel clients-carousel">
                    @foreach($olimpiads as $olimp)
                    <a class="d-block mb-4" data-fancybox="images" href="{{ Voyager::image( $olimp->img ) }}">
                        <img class="img-fluid" src="{{ Voyager::image( $olimp->img ) }}">
                    </a>
                    @endforeach
                </div>
            </div>
            </div>

            </div>
        </section><!-- #clients -->
        <section class="team-content index-content">
            <h2 class="science-title">Публікації студентів</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="publication">
                        @if($publications && count($publications) > 0)
                            @foreach($publications as $publication)
                                @if(isset($publication->file))
                                    <?php $file = (json_decode($publication->file))[0]->download_link;
                                    ?>
                                @endif
                                <a @if(isset($publication->file)) href="/storage/<?= $file ?>" @else @endif>{{$publication->nameFile}}</a>
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
                                            <p><a class="link" @if(isset($publication->file)) href="/storage/<?= $file ?>"
                                                  @else @endif >Переглянути</a></p>
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
        </section>
        <!--==========================
          Services Section
        ============================-->
    </main>
@stop
