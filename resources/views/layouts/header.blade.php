<header class="header-area">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <nav class="header-navbar">
                    <div class="header-logo">
                        <a  href="{{route('accueil')}}"><img  src="{{ asset('assets/img/AMPIICLOGO2.png') }}" alt="Logo"></a>
                    </div>
                    <div class="header-nav">
                        <div class="header-contact-number d-none d-lg-block">
                            <span>Appelez-nous: <a href="tel:+212687069729">+(212) 6 87 06 97 29</a></span>
                        </div>
                        <a class="mobile-menu" href="#menu"><span></span></a>
                        <nav class="menu" id="menu">
                            <ul class="nav-list">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('accueil')}}">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('membres')}}">Membres</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Contactez-nous</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-btn d-none d-xl-block">
                        <a href="{{route('contact')}}" class="btn btn-outline-white btn-sm btn-round btn2">Envoyer un message</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
