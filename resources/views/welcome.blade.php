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
    <section id="intro" class="clearfix slider">
        <div class="container-fluid d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="slideshow">
                    <div class="cycle-slideshow" data-cycle-timeout="7500" data-cycle-speed="1000"
                         data-cycle-pager=".cycle-pager" data-cycle-slides=".cycle-slide">
                        @if($sliders && count($sliders) > 0)
                            @foreach($sliders as $slider)
                                <div class="cycle-slide">
                                    <img src="{{ Voyager::image( $slider->img ) }}"/>
                                    <div class="slide-body">
                                        <div class="slide-content">
                                            <p class="content-title">{{$slider->desc}}</p>
                                        </div>
                                        <!--/.slide-content-->
                                    </div>
                                    <!--/.slide-body-->
                                </div>
                                <!--/.cycle-slide-->
                            @endforeach
                        @endif
                    </div>
                    <!--/.cycle-slideshow-->
                </div>
            </div>
        </div>
    </section><!-- #intro -->
    <main id="main">
        <h2 class="post-last">Останні події кафедри</h2>

        <section class="container mar">
            <div class="row justify-content-center align-self-center">
                <!-- Grid column -->
                @if($posts && count($posts)>0)
                    @foreach($posts as $key=>$post)
                        @if($key == 0)
                            <div class="col-lg-6 col-md-12 justify-content-center align-self-center">
                                <!-- Featured news -->
                                <div class="single-news col-md-12 mb-4">
                                    <!-- Image -->
                                    <div class="view overlay rounded z-depth-1-half mb-4">
                                        <img class="img-fluid" src="{{ Voyager::image( $post->thumbnail('medium') ) }}" style="max-height: 450px; width: 100%; object-fit: cover"
                                             alt="{{$post->title}}">
                                        <a>
                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!-- Data -->
                                    <div class="news-data d-flex justify-content-between">
                                        <p class="font-weight-bold dark-grey-text"><i class="far fa-clock pr-2"></i>{{$post->updated_at}}
                                        </p>
                                    </div>
                                    <!-- Excerpt -->
                                    <div class=" home-title-main font-weight-bold dark-grey-text mb-3"><a href="{{route('single-post', $post->slug)}}">{{$post->title}}</a>
                                    </div>
                                    <p class="dark-grey-text mb-lg-0 mb-md-5 mb-4">{!! $post->excerpt !!}</p>
                                </div>
                                <!-- Featured news -->
                            </div>
                    @endif
                @endforeach
                <!-- Grid column -->
                    <!-- Grid column -->

                    <div class="col-lg-6 col-md-12">
                    @foreach($posts as $key=>$post)
                        @if($key == 0)
                            @continue
                        @endif
                        <!-- Small news -->
                            <div class="single-news mb-4 col-md-12 justify-content-center align-self-center">
                                <!-- Grid row -->
                                <div class="row">
                                    <!-- Grid column -->
                                    <div class="col-md-4">
                                        <!--Image-->
                                        <div class="view overlay rounded z-depth-1 mb-4">
                                            <img class="img-fluid"
                                                 src="{{ Voyager::image( $post->thumbnail('cropped') ) }}"
                                                 alt="{{$post->title}}">
                                            <a>
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                    <!-- Grid column -->
                                    <div class="col-md-8">
                                        <!-- Excerpt -->
                                        <p class="font-weight-bold dark-grey-text">{{$post->updated_at}}</p>
                                        <p class="dark-grey-text">{!!  mb_strimwidth($post->body, 0, 70, "...")!!}</p>
                                        <div class="d-flex justify-content-between">
                                            <div class="col-11 text-truncate pl-0 mb-3">
                                                <a href="{{route('single-post', $post->slug)}}" class="dark-grey-text">{{$post->title}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->
                            </div>
                            <!-- Small news -->
                        @endforeach
                    </div>

            @endif
            <!--Grid column-->
            </div>
        </section>

    <!--==========================
      Clients Section
    ============================-->
        <h2 class="princep-title">Наші принципи в підготовці студентів</h2>
        <section class="container mar">
            <div class="row justify-content-center align-self-center">
            <div class="col-md-3 col-lg-6 wow bounceInUp justify-content-center align-self-center" data-wow-duration="1.4s">
                <div class="box" style="text-align: center">
                    <img class="principles_preparation__image" style="height: 100px;" src="{{asset('img/princip/find.png')}}" alt="image for information">
                    <div class="text">
                        <h3 class="principles_preparation__title justify-content-center align-self-center">Загальна фундаментальна освіта</h3>
                        <p class="principles_preparation__description">Сучасні темпи змін суспільства та інформаційних технологій зокрема передбачають постійну необхідність протягом професійної діяльності багаторазово довчатися, перекваліфіковуватися для того, щоб не залишатися на другорядних ролях. Загальна фундаментальна підготовка, створить платформу для подальшого постійного розвитку студента як майбутнього професіонала у професії.</p>
                    </div>
                </div>
            </div>
                <div class="col-md-3 col-lg-6 wow bounceInUp" data-wow-duration="2.4s">
                    <div class="box" style="text-align: center">
                        <img class="principles_preparation__image" style="height: 100px;" src="{{asset('img/princip/text.png')}}" alt="image for information">
                        <div class="text">
                            <h3 class="principles_preparation__title">Сприятлива, доброзичлива атмосфера отримання знань</h3>
                            <p class="principles_preparation__description">Протягом навчання студентів оточує комфортна психологічна атмосфера, яку забезпечує штат кафедри. Як відомо, передача досвіду професіоналів відбувається найякісніше в процесі особистого спілкування, яке відбувається під час проведення міжнародних конференцій та семінарів на кафедрі, де студенти приймають участь у якості волонтерів. Поспілкуватися з однодумцями з інших ВНЗ та спробувати себе у якості учасника змагань є можливість на щорічній всеукраїнській олімпіаді «веб- технології та веб-дизайн», яка проводиться на базі кафедри.</p>
                        </div>
                    </div>
                </div>
            <div class="col-md-3 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box" style="text-align: center">
                    <img class="principles_preparation__image" style="height: 100px;" src="{{asset('img/princip/ii.png')}}" alt="image for information">
                    <div class="text">
                        <h3 class="principles_preparation__title">Направленість на актуальні задачі ринку інформаційних продуктів</h3>
                        <p class="principles_preparation__description">За рахунок налагодженого двостороннього партнерства кафедри з Центром комп’ютерної освіти наші студенти мають змогу навчатися вирішувати задачі вузької практичної направленості, займатися фрилансом</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-6 wow bounceInUp justify-content-center align-self-center" data-wow-duration="2.4s">
                <div class="box" style="text-align: center">
                    <img class="principles_preparation__image" style="height: 100px;" src="{{asset('img/princip/peaple.png')}}" alt="image for information">
                    <div class="text">
                        <h3 class="principles_preparation__title">Індивідуальна робота з кожним студентом</h3>
                        <p class="principles_preparation__description">Поглиблена індивідуальна підготовка на кафедрі здійснюється під час проведення курсових та дипломних робіт у специфічних вузьких напрямках таких як, наприклад, комп’ютерна графіка, штучний інтелект, методи розв’язку оптимізаційних задач тощо.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <div class="container">

            <header class="section-header">
                <h3>Наші студенти</h3>
            </header>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="owl-carousel testimonials-carousel wow fadeInUp">

                        @foreach($students as $student)
                        <div class="testimonial-item">
                            <img class="testimonial-img"  style="height: 200px; width: 185px;" src="{{ Voyager::image( $student->img) }}" alt="">
                            <p>{{$student->name}}</p>
                            <p>
                                {!! $student->text !!}
                            </p>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>


        </div>
    </section><!-- #testimonials -->
    </main>
@stop
