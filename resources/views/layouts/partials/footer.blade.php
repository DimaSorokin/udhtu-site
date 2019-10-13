<!--==========================
    Footer
  ============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">

            <div class="row justify-content-center align-self-center">

                <div class="col-lg-4">

                    <div class="row">

                        <div class="col-sm-5">

                            <div class="footer-info">
                                <span>Кафедра інформаційних систем</span>
                            </div>
                            <div class="footer-info">
                                <a href="https://udhtu.edu.ua/" rel="nofollow" target="_blank"> ДВНЗ «Український державний
                                    хіміко-технологічний університет»</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="row pull-right">
                        <div class="footer-links">
                            <div class="footer-title">Наші контакти</div>
                            <strong>Адреса:</strong> {!! $contact[0]->address !!}<br>
                            <strong>Телефон:</strong> + 3 8{{$contact[0]->phone}}<br>
                            <strong>Пошта:</strong> {{$contact[0]->email}}<br>
                            </p>
                        </div>
                        <div class="social-links">
                            <a href="https://www.facebook.com/kafedra.is.71" class="facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/in/%D0%BA%D0%B0%D1%84%D0%B5%D0%B4%D1%80%D0%B0-%D1%96%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D1%96%D0%B9%D0%BD%D0%B8%D1%85-%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC-023600159/"
                               class="linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/kmocc_kis/?hl=ru" class="instagram"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="https://www.instagram.com/kmocc_kis/?hl=ru" class="telegram"><i
                                    class="fa fa-telegram"></i></a>
                        </div>
                    </div>
                    <div class="footer-links">
                        <div class="footer-title">Корисні посилання</div>
                        {{ menu('main', 'menu_footer') }}
                    </div>
                </div>



            </div>

        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/mobile-nav/mobile-nav.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery.cycle2.min.js')}}"></script>
{{--<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>--}}
{{--<script src="{{asset('lib/jquery/jquery.cycle2.min.js')}}"></script>--}}
<!-- Contact Form JavaScript File -->
{{--<script>--}}
{{--    // $(document).ready(function() {--}}
{{--        var swiper = new Swiper('.swiper-container', {--}}
{{--            pagination: '.swiper-pagination',--}}
{{--            paginationClickable: true,--}}
{{--            nextButton: '.swiper-button-next',--}}
{{--            prevButton: '.swiper-button-prev',--}}
{{--            autoplay: 2500,loop:true--}}
{{--        });--}}

{{--    // });--}}

{{--</script>--}}
<!-- Template Main Javascript File -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jsTest.js')}}"></script>

</body>

</html>
