@extends('layouts.app')
@section('title', 'ACCUEIL')

@section('content')
    <main>
        <!-- Banner Section  -->
        <div class="banner-area overflow-hidden" style="background-image: url('{{asset('assets/img/banner/banner.png')}}');">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row align-items-center">
                    <div class="col-md-8">
                        <div  data-cue="slideInLeft" data-duration="2000" class="banner-left-content">
                            <h1 data-cue="slideInLeft" data-duration="1000">Bienvenue dans le site des infectiologues du MAROC</h1>
                                <p><i class="bi bi-caret-right"></i> Formation continue.</p>
                                <p><i class="bi bi-caret-right"></i> Promotion de l’infectiologie et de l’immunologie clinique.</p>
                               <p><i class="bi bi-caret-right"></i> Sensibilisation du grand public .</p>
                            <a href="{{route('about')}}" class="btn btn-outline-white btn-xl btn-round" data-cue="slideInLeft"
                                data-duration="3000">Qui Sommes-nous ?</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner-right-content">
                            <div class="banner-img" data-cues="slideInRight" data-duration="5000">
                                <img src={{ asset('assets/img/doctor/kamal-marhoum2.jpg') }} alt="Banner Image">
                                <div class="text-box-wrapper">
                                    {{-- <div class="dr-image">
                                        <img src={{ asset('assets/img/doctor/kamal-marhoum.jpg') }} alt="Image">
                                    </div> --}}
                                    <div class="dr-info infobg">
                                        <h5>President Pr. Kamal Marhoum El filali</h5>
                                        {{-- <span>24 Hours Online Active</span> --}}
                                    </div>
                                </div>
                            </div>
                            <img src={{ asset('assets/img/shape/shape2.png') }} alt="Shape Image" class="shape shape3">
                        </div>
                    </div>
                </div>
            </div>
            <img src={{ asset('assets/img/shape/overlay.png') }} alt="Overlay" class="shape shape1">
        </div>
        <!-- Banner Section  -->

        <!-- Service Section  -->
        <section class="service-area overflow-hidden">
            <div class="container ">
                <div class="service-wrapper">
                    <div class="row" data-cues="slideInRight" data-delay="1000">
                        <div class="col-md-12 mt-5 ">
                            <div class="service-item ">
                                <div class="service-title">
                                    <div class="service-icon">
                                        <i class="bi bi-asterisk"></i>
                                    </div>
                                    <h5>Première Journée Scientifique</h5> <br>
                                </div>
                                <h6 class="h6">Samedi 19 Mars 2022
                                    Hôtel Farah - Casablanca</h6>
                                    <a href="{{route('contact')}}" class="btn btn-outline-blue btn-xl btn-round rejoinez">Rejoinez-nous</a>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section  -->


        <!-- About Section -->
        <section class="about-area about-area-2 section-padding">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-5">
                        <div class="about-left-content">
                            <div class="about-image">
                                <img src="{{asset('assets/img/about/about2.png')}}" alt="Image">
                                {{-- <img src="assets/img/shape/circle2.png" alt="Circle Image" class="circle circle1"> --}}
                                <img src="{{asset('assets/img/shape/circle.png')}}" alt="Circle Image" class="circle circle2">
                                {{-- <img src="assets/img/shape/shape12.png" alt="Shape Image" class="shape3"> --}}
                            </div>
                            {{-- <div class="about-service-list">
                                <ul data-cues="slideInRight" data-delay="500">
                                    <li>Médecins Experts</li>
                                    <li>Modern Anesthesia</li>
                                    <li>Emergency Cases</li>
                                    <li>Quality Brackets</li>
                                    <li>24/7 Help Center</li>
                                    <li>Modern Clinic</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-right-content" data-cues="slideInUp" data-delay="500">
                            <div class="section-title">

                                <span class="subtitle">A propos de nous</span>
                                <h2 class="title">Qui Sommes-Nous ? <br>Apprenez à nous connaître.</h2>
                            </div>
                            <p class="pt-4"><i class="bi bi-record2"></i>L’Association Marocaine de Pathologie Infectieuse et d’Immunologie Clinique (AMPIIC) est une association savante à but non lucratif. Elle a été crée en octobre 2020. Les principaux objectifs de l’association sont : La  formation médicale continue, La  promotion de  l’infectiologie et de  l’immunologie clinique et la sensibilisation du grand public.</p>
                            <p class="pt-4"><i class="bi bi-record2"></i>La contribution  au développement de l’infectiologie au Maroc.</p>
                            <p class="pt-4"><i class="bi bi-record2"></i>La sensibilisation et  l’éducation  de la population général en matière de pathologie infectieuse...</p>

                        </div>
                    </div>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-4">
                        <div class="about-left-content">
                            <div class="about-image">
                                {{-- <img src="assets/img/about/about2.png" alt="Image"> --}}
                                <img src="{{asset('assets/img/shape/circle2.png')}}" alt="Circle Image" class="circle circle1">
                                <img src="{{asset('assets/img/shape/circle.png')}}" alt="Circle Image" class="circle circle2">
                                {{-- <img src="assets/img/shape/shape12.png" alt="Shape Image" class="shape3"> --}}
                            </div>
                            {{-- <div class="about-service-list">
                                <ul data-cues="slideInRight" data-delay="500">
                                    <li>Médecins Experts</li>
                                    <li>Modern Anesthesia</li>
                                    <li>Emergency Cases</li>
                                    <li>Quality Brackets</li>
                                    <li>24/7 Help Center</li>
                                    <li>Modern Clinic</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about-right-content" data-cues="slideInUp" data-delay="500">
                            <div class="section-title">
                                {{-- <span class="subtitle">A propos</span> --}}
                                <a href="{{route('about')}}" class="btn btn-outline-blue rejoinez btn-round">lire la suite</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section -->



    </main>

@endsection




