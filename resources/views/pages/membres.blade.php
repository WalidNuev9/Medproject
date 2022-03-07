@extends('layouts.app')
@section('title', 'MEMBRES')
@section('content')
<main>
    <!-- Banner Section  -->
    <div class="banner-area inner-banner" style="background-image: url('{{asset('assets/img/bg/bg2.png')}}');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="breadcrumbs">
                        <nav aria-label="breadcrumb text-center">
                            <h2 class="text-white"></h2>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section  -->

    <!-- Counter Section  -->
    <section class="counter-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter-wrapper counter-wrapper-2">
                        <h2>Membres Du Bureau</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section  -->


    <!-- Doctor-start-->
    <section class="doctor-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="section-title text-center mb-3">
                        <span class="subtitle wow animate__animated animate__fadeInUp">Association Marocaine de Pathologie Infectieuse et d’Immunologie Clinique</span>
                        <h4 class="title pt-3 wow animate__animated animate__fadeInUp animate__delay-1">membres de l’association :</h4>
                        <h5 class=" wow animate__animated animate__fadeInUp animate__delay-2">
                            <i class="bi bi-arrow-right-short"></i> Infectiologues du Maroc <br>
                            <i class="bi bi-arrow-right-short"></i>  Biologistes
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row" data-cues="slideInLeft" data-delay="500">
                <div class="col-sm-6 col-lg-4">
                    <div class="doctor-item">
                        <div class="doctor-thumb text-center align-content-center">
                            <div class="doctor-img ">
                                <img src="{{asset('assets/img/doctor/kamal-marhoum.jpg')}}" alt="Image">
                            </div>
                            {{-- <ul class="social-link">
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul> --}}
                        </div>
                        <div class="doctor-content">
                            <h3 class="title"><a href="#">Président <br> Pr. Kamal Marhoum El filali </a></h3>
                            <span>Professeur de l’enseignement supérieur</span>
                            <span>Chef de service de Maladies Infectieuses CHU Ibn Rochd </span>

                            {{-- <div class="doctor-shape">
                                <img src="assets/img/shape/shape15.png" alt="Shape">
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="doctor-item">
                        <div class="doctor-thumb">
                            <div class="doctor-img">
                                <img src="{{asset('assets/img/doctor/doctorx.png')}}" alt="Image">
                            </div>
                            {{-- <ul class="social-link">
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul> --}}
                        </div>
                        <div class="doctor-content">
                            <h3 class="title"><a href="#">Vice président <br> Pr. Ahd Oulad Lahsen </a></h3>
                            <span>Professeur de l’enseignement supérieur</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="doctor-item">
                        <div class="doctor-thumb">
                            <div class="doctor-img">
                                <img src="{{asset('assets/img/doctor/doctorx.png')}}" alt="Image">
                            </div>
                            {{-- <ul class="social-link">
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul> --}}
                        </div>
                        <div class="doctor-content">
                            <h3 class="title"><a href="#">Secrétaire général <br> Pr. Latifa Marin </a></h3>
                            <span>Professeur de l’enseignement supérieur</span>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="doctor-item">
                        <div class="doctor-thumb">
                            <div class="doctor-img">
                                <img src="{{asset('assets/img/doctor/doctorx.png')}}" alt="Image">
                            </div>
                            {{-- <ul class="social-link">
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul> --}}
                        </div>
                        <div class="doctor-content">
                            <h3 class="title"><a href="#">Secrétaire général adjoint <br> Pr. Jalila El Bakkouri</a></h3>
                            <span>Professeur de l’enseignement supérieur</span>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="doctor-item">
                        <div class="doctor-thumb">
                            <div class="doctor-img">
                                <img src="{{asset('assets/img/doctor/doctorx.png')}}" alt="Image">
                            </div>
                            {{-- <ul class="social-link">
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul> --}}
                        </div>
                        <div class="doctor-content">
                            <h3 class="title"><a href="#">Trésorier <br> Dr. Rajaa Bensghir </a></h3>
                            <span>Spécialiste en maladies infectieuses <br> Exerce au service de Maladies Infectieuses CHU Ibn Rochd depuis 1998</span>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="doctor-item">
                        <div class="doctor-thumb">
                            <div class="doctor-img">
                                <img src="{{asset('assets/img/doctor/doctorx.png')}}" alt="Image">
                            </div>
                            {{-- <ul class="social-link">
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul> --}}
                        </div>
                        <div class="doctor-content">
                            <h3 class="title"><a href="#">Assesseur Pr. Mustapha Sodqi</a></h3>
                            <span>Professeur de l’enseignement supérieur</span>

                            {{-- <a href="#" class="doctor-link"><i class="fas fa-arrow-right"></i></a> --}}

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="doctor-item">
                        <div class="doctor-thumb">
                            <div class="doctor-img">
                                <img src="{{asset('assets/img/doctor/doctorx.png')}}" alt="Image">
                            </div>
                            {{-- <ul class="social-link">
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul> --}}
                        </div>
                        <div class="doctor-content">
                            <h3 class="title"><a href="#">Assesseur Dr. Hicham Oumzil </a></h3>
                            <span>Docteur en biologie Institut national d’hygiène Rabat </span>

                            {{-- <a href="#" class="doctor-link"><i class="fas fa-arrow-right"></i></a> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Doctor-end -->

    <!-- Service Section  -->
    <section class="service-area  overflow-hidden mt-5">
        <div class="container ">
            <div class="service-wrapper ">
                <div class="row" data-cues="slideInRight" data-delay="1000">
                    <div class="col-md-12 mt-5 bg-primary">
                        <div class="service-item ">
                            <div class="service-title">
                                <div class="service-icon">
                                    <i class="bi bi-asterisk"></i>
                                </div>
                                <h5 class="text-white">Première Journée Scientifique</h5> <br>
                            </div>
                            <h6 class="h6 text-white">Samedi 19 Mars 2022
                                Hôtel Farah - Casablanca</h6>
                                <a href="{{route('contact')}}" class="btn btn-outline-white btn-xl btn-round rejoinez">Rejoinez-nous</a>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Service Section  -->


</main>

@endsection
