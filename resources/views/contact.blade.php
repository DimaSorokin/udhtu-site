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
        {{ Breadcrumbs::render('contacts') }}
    </section>
    <main id="main">
        <section class="Material-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <!-- Section Titile -->
                    <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                        <h2 class="section-title">{{$contact[0]->title}}</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- Section Titile -->
                    <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                        <p>{!! $contact[0]->desc !!}</p>


                        <div class="find-widget">
                            Адреса: <a href="#">{!! $contact[0]->address  !!}</a>
                        </div>
                        <div class="find-widget">
                            Телефон:  <a href="#">+ 3 8{{$contact[0]->phone}}</a>
                        </div>

                        <div class="find-widget">
                            Пошта:  <a href="mailto:{{$contact[0]->email}}">{{$contact[0]->email}}</a>
                        </div>
                    </div>
                    <!-- contact form -->
                    <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                        <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                            <!-- Name -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="name">Им`я</label>
                                <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- email -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="email">Пошта</label>
                                <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- Subject -->
                            <div class="form-group label-floating">
                                <label class="control-label">Тема листа</label>
                                <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- Message -->
                            <div class="form-group label-floating">
                                <label for="message" class="control-label">Повідомлення</label>
                                <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- Form Submit -->
                            <div class="form-submit mt-5">
                                <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Відпарвка листа</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop
