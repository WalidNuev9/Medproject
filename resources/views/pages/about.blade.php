@extends('layouts.app')
@section('title', 'A propos de nous')

@section('content')
 <main>

        <!-- About Section -->
        <section class="about-area about-area-2 section-padding">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-5">
                        <div class="about-left-content">
                            <div class="about-image">
                                <img src="assets/img/about/about2.png" alt="Image">
                                {{-- <img src="assets/img/shape/circle2.png" alt="Circle Image" class="circle circle1"> --}}
                                <img src="assets/img/shape/circle.png" alt="Circle Image" class="circle circle2">
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
                            <p class="pt-4 text-dark"><i class="bi bi-caret-right-square"></i> L’Association Marocaine de Pathologie Infectieuse et d’Immunologie Clinique (AMPIIC) est une association savante à but non lucratif. Elle a été crée en octobre 2020. <br> Les principaux objectifs de l’association sont : </p>
                            <p class="pt-2"><i class="bi bi-record2"></i>La formation médicale continue. </p>
                            <p class="pt-2"><i class="bi bi-record2"></i>La promotion de  l’infectiologie et de  l’immunologie clinique. </p>
                            <p class="pt-2"><i class="bi bi-record2"></i>La sensibilisation du grand public.</p>
                            <p class="pt-2"><i class="bi bi-record2"></i>La contribution  au développement de l’infectiologie au Maroc.</p>
                            <p class="pt-2"><i class="bi bi-record2"></i>La sensibilisation et  l’éducation  de la population général en matière de pathologie infectieuse.</p>

                        </div>
                    </div>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-4">
                        <div class="about-left-content">
                            <div class="about-image">
                                {{-- <img src="assets/img/about/about2.png" alt="Image"> --}}
                                <img src="assets/img/shape/circle2.png" alt="Circle Image" class="circle circle1">
                                <img src="assets/img/shape/circle.png" alt="Circle Image" class="circle circle2">
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
                                <h2 class="title">Notre vision</h2><br>
                                <h4> La vision de AMPIIC est :</h4>
                            </div>
                            <p class="pt-4"><i class="bi bi-record2"></i>la contribution au développement de l’infectiologie au Maroc en se basant sur les connaissances scientifiques en pathologies infectieuses.</p>
                            <p class="pt-4"><i class="bi bi-record2"></i>L’Intégration du savoir dans la pratique médicale pour un diagnostic et une prise en charge précoce des maladies infectieuses dans le but de réduire les  Complications et  séquelles.</p>
                            <p class="pt-4"><i class="bi bi-record2"></i>La prévention des maladies infectieuses par la sensibilisation et l éducation de la population générale.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section -->

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


</main>


@endsection
