<!-- Footer Section Start  -->
<footer class="footer-area">
    <div class="container">
        <div class="footer-top ">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{route('accueil')}}"><img src="{{ asset('assets/img/AMPIICLOGO3.png') }}" alt="Ampiic_Logo"></a>
                        </div>
                        <h4 class="text-white">Association Marocaine de Pathologie
                            Infectieuse et d’Immunologie Clinique</h4>
                        <div class="footer-contact-info">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <span>+212  6 87 06 97 29 </span>
                        </div>
                        <div class="footer-contact-info">
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <span>ampiicinfectiologie@gmail.com</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="footer-widget footer-padding">
                        <h3 class="footer-title"><i class="bi bi-file-earmark"></i> Pages</h3>
                        <ul class="footer-links">
                            <li><a class="h5" href="{{route('accueil')}}"><i class="bi bi-arrow-right-short"></i> Accueil</a></li>
                            <li><a class="h5" href="{{route('contact')}}"><i class="bi bi-arrow-right-short"></i> Contactez-nous</a></li>
                            <li><a class="h5" href="{{route('membres')}}"><i class="bi bi-arrow-right-short"></i> Nos Membres</a></li>
                            <li><a class="h5" href="{{route('about')}}"><i class="bi bi-arrow-right-short"></i> A propos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="footer-widget footer-padding footer-booking-hour">
                        <h3 class="footer-title"><i class="bi bi-calendar3-event"></i> Nos événements</h3>
                        <h4 class="footer-info">

                            <li><i class="bi bi-caret-right-square-fill"></i> Première Journée Scientifique</li>
                        </h4>
                        <p >Samedi 19 Mars 2022 <br>
                            Hôtel Farah - Casablanca</p>
                            <a href="{{route('contact')}}" class="btn btn-outline-white m-3 rejoinez btn-round">Reservez une place</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-7 col-xl-8">
                    <div class="footer-bottom-left">
                        <ul class="footer-social">
                            <li>Suivez-nous:</li>
                            <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <hr>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="footer-copyright">
                        <p>&copy; 2022 All Right Reserved by AMPIIC</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/img/shape/shape10.png') }}" alt="Shape" class="shape">
    <img src="{{ asset('assets/img/shape/shape11.png') }}" alt="Shape" class="shape2">
</footer>
<!-- Footer Section End  -->
