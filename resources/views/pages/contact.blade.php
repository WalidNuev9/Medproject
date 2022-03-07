@extends('layouts.app')
@section('title', 'Contactez-nous')

@section('content')
<main>
    <!-- Contact Section  -->
    <section class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start" data-cues="slideInLeft" data-delay="500">
                        <h2 class="title">AMPIIC</h2>
                        <p class="pt-4">Service de Maladies Infectieuses CHU Ibn Rochd Casablanca .</p>
                    </div>
                    <div class="contact-left-content">
                        <div class="contact-item contact-item-2" data-cue="slideInLeft" data-delay="500">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email :</h3>
                            </div>
                            <hr>
                            <div class="contact-content">
                                <p>ampiicinfectiologie@gmail.com</p>

                            </div>
                        </div>
                        <div class="contact-item contact-item-2" data-cue="slideInLeft" data-delay="500">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Téléphone:</h3>
                            </div>
                            <hr>
                            <div class="contact-content">
                                <p>+212 6 87 06 97 29
                                </p>

                            </div>
                        </div>
                        <div class="contact-item contact-item-2" data-cue="slideInLeft" data-delay="500">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Adresse:</h3>
                            </div>
                            <hr>
                            <div class="contact-content">
                                <p>Service de Maladies Infectieuses,
                                </p>
                                <p>CHU Ibn Rochd, Casablanca .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start mt-5 mt-lg-0" data-cues="slideInRight"
                        data-delay="500">
                        <h2 class="title">Pour nous envoyer un message <i class="bi bi-arrow-down-circle"></i></h2>
                        <p >Veuillez remplir le formulaire et cliquez sur le boutton en bas</p>
                    </div>
                    <div class="booking-wrapper">
                        <div class="booking-form">
                            <form method="POST" action="{{route('store')}}">
                                @csrf
                                <div class="pseudo-icon icon-user">
                                    <input class="form-control" name="name" type="text" placeholder="votre nom"
                                        aria-label="form-control">
                                        @error('name')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                </div>
                                <div class="pseudo-icon icon-envelope">
                                    <input class="form-control" name="email" type="email" placeholder="votre email"
                                        aria-label="form-control">
                                        @error('email')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                </div>
                                <div class="pseudo-icon icon-phone">
                                    <input class="form-control" name="phone" type="text" placeholder="Votre numéro de téléphone"
                                        aria-label="form-control">
                                        @error('phone')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                </div>
                                <div>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="4"
                                        placeholder="Votre Message"></textarea>
                                        @error('message')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                </div>
                                <button type="submit" class="btn btn-blue btn-xl btn-round mt-5 w-100">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section  -->
</main>


@endsection
