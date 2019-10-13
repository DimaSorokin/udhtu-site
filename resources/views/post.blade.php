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
        {{ Breadcrumbs::render('posts') }}
    </section>
    <main id="main" class="container">

        <!--==========================
         Services Section
       ============================-->
        <section class="my-5">
            @if($posts && count($posts) > 0)
            @foreach($posts as $key=>$post)
            <!-- Grid row -->
            @if($key % 2 == 0)
            <div class="row  wow bounceInUp" data-wow-duration="{{$key+1}}.4s">

                <!-- Grid column -->
                <div class="col-lg-5">

                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                        <img class="img-fluid" src="{{ Voyager::image( $post->thumbnail('medium') ) }}"  alt="{{$post->title}}">
                        <a href="{{route('single-post', $post->slug)}}">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>

                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-7">

                    <!-- Post title -->
                    <div class="post-title mb-3"><strong>{{$post->title}}</strong></div>
                    <!-- Excerpt -->
                    <p class="description">{!! $post->excerpt !!}</p>
                    <!-- Post data -->
                    <p><a><strong>Дата публікації:</strong></a> {{ Carbon\Carbon::parse($post->updated_at)->format('d-m-Y') }}</p>
                    <!-- Read more button -->
                    <div id="container">
                        <button class="learn-more">
                            <a href="{{route('single-post', $post->slug)}}"><div class="circle">
                                <span class="icon arrow"></span>
                            </div>
                            <p class="button-text">Прочитати</p>
                            </a>
                        </button>
                    </div>
                    <!-- <button type="button" class="button pulse">Info</button> -->
                    <!-- <a class="btn btn-outline-light text-dark waves-effect waves-light">Read more</a> -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <hr class="my-5">
                @else
                    <div class="row wow bounceInUp" data-wow-duration="{{$key+1}}.4s">

                        <!-- Grid column -->
                        <div class="col-lg-7">

                            <!-- Category -->
                            <!-- Post title -->
                            <div class="post-title mb-3"><strong>{{$post->title}}</strong></div>
                            <!-- Excerpt -->
                            <p class="description">{!! $post->excerpt !!}</p>
                            <!-- Post data -->
                            <p><a><strong>Дата публікації:</strong></a> {{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</p>
                            <!-- Read more button -->
                            <div id="container mob-but" style="margin-bottom: 20px">
                                <button class="learn-more">
                                    <a href="{{route('single-post', $post->slug)}}"><div class="circle">
                                            <span class="icon arrow"></span>
                                        </div>
                                        <p class="button-text">Прочитати</p>
                                    </a>
                                </button>
                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-5">

                            <!-- Featured image -->
                            <div class="view overlay rounded z-depth-2">
                                <img class="img-fluid" src="{{ Voyager::image( $post->thumbnail('medium') ) }}" alt="{{$post->title}}">
                                <a href="{{route('single-post', $post->slug)}}">
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->
                    <hr class="my-5">
                @endif
            @endforeach
                @endif
        </section><!-- #services -->

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                @if($posts->lastPage() > 1)

                    @if($posts->currentPage()!== 1)
                        <li class="page-item">
                            <a class="page-link" href="{{$posts->url($posts->currentPage() - 1)}}" tabindex="-1">Назад</a>
                        </li>
                    @endif

                    @for($i = 1; $i <= $posts->lastPage(); $i++)

                        @if($posts->currentPage() == $i)

                                <li class="page-item disabled"><a class="page-link" href="#">{{ $i }}</a></li>
                        @else

                                <li class="page-item"><a class="page-link" href="{{$posts->url($i)}}">{{ $i }}</a></li>
                        @endif

                    @endfor

                    @if($posts->currentPage() !==  $posts->lastPage())

                            <li class="page-item">
                                <a class="page-link" href="{{$posts->url($posts->currentPage() + 1)}}">Вперед</a>
                            </li>
                    @endif

                @endif

            </ul>
        </nav>
    </main>

@stop
