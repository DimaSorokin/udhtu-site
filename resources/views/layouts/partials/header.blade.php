<!--==========================
  Header
  ============================-->
<header id="header">

    <div id="topbar">
        <div class="container">
            <div class="social-links">
{{--                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
                <a href="https://www.facebook.com/kafedra.is.71" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/%D0%BA%D0%B0%D1%84%D0%B5%D0%B4%D1%80%D0%B0-%D1%96%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D1%96%D0%B9%D0%BD%D0%B8%D1%85-%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC-023600159/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.instagram.com/kmocc_kis/?hl=ru" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <a @if(Route::current()->getName()  == 'home')
               @else
               href="/"
               @endif
               class="scrollto"><img src="{{asset('favicon.png')}}"  class="img-fluid"></a></h1>
        </div>
        <nav class="main-nav float-right d-none d-lg-block">
        {{ menu('main', 'menu') }}
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->
