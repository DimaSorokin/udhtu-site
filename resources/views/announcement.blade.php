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
        {{ Breadcrumbs::render('announcements') }}
    </section>
    <main id="main">

        <!--==========================
         Services Section
       ============================-->
        <section id="services" class="documentation">
            <div class="container">
                <div class="row">
                    @if($announcements && count($announcements) > 0)
                    @foreach($announcements as $announcement)
                    <div class="col-md-12 col-lg-12 wow bounceInUp asd-class" data-wow-duration="1.4s">
                        <div class="card w-100 @if($announcement->status == true) border-warning @endif">
                            <div class="card-body">
                                @if($announcement->status == true)
                                <span class="badge badge-warning">{{$announcement->desc}}</span>
                                @endif
                                <p class="card-title announcement-title">{{$announcement->title}}</p>
                                <p class="card-text">{!! $announcement->text !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="card w-100 d-flex justify-content-center align-items-center" style="margin-top: 50px">
                        <p class="pt-3 pr-2">Оголошення відсутні</p>
                    </div>
                    @endif
                </div>
            </div>
        </section><!-- #services -->
        @if(!isset($announcements) && count($announcements) > 99999)
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                @if($announcements->lastPage() > 1)

                    @if($announcements->currentPage()!== 1)
                        <li class="page-item">
                            <a class="page-link" href="{{$announcements->url($announcements->currentPage() - 1)}}" tabindex="-1">Previous</a>
                        </li>
                    @endif

                    @for($i = 1; $i <= $announcements->lastPage(); $i++)

                        @if($announcements->currentPage() == $i)

                            <li class="page-item disabled"><a class="page-link" href="#">{{ $i }}</a></li>
                        @else

                            <li class="page-item"><a class="page-link" href="{{$announcements->url($i)}}">{{ $i }}</a></li>
                        @endif

                    @endfor

                    @if($announcements->currentPage() !==  $announcements->lastPage())

                        <li class="page-item">
                            <a class="page-link" href="{{$announcements->url($announcements->currentPage() + 1)}}">Next</a>
                        </li>
                    @endif

                @endif

            </ul>
        </nav>
        @endif
    </main>

@stop
