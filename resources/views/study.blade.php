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
        {{ Breadcrumbs::render('study') }}
    </section>
    <main id="main">
        <div class="container info-page-content ">
            <header class="section-header">
                <p></p>
            </header>
            <div class="row">
                <div class="col-lg-3">
                <div class="text-center">Розклад заннять</div>
                  <div class="list-group st-class">
                      @foreach($schedules as $key=>$schedule)
                      <?php $file = (json_decode($schedule->file))[0]->download_link; ?>
                          <a href="/storage/<?= $file ?>" class="list-group-item" target="_blank">{{$key+1}} Курс</a>
                      @endforeach
                  </div>

                </div>
                <div class="col-lg-9 std-class">
                    <div class="text-center">Навчальні матеріали</div>
                    <div class="accordion st-class" id="accordionExample">
                        @foreach($studies as $key=>$study)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <div class="study-title mb-0">
                                       @if($key == 0) Бакалавр @else Магистр @endif
                                </div>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Назва</th>
                                        <th scope="col">Файл</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($study as $k=>$item)
                                    <tr>
                                        <th scope="row">{{$k+1}}</th>
                                        <td>{{$item->nameFile}}</td>
                                        <td><?php $file = (json_decode($item->file))[0]->download_link; ?>
                                            <a href="/storage/<?= $file ?>">{{$item->nameFile}}</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </main>
@stop
