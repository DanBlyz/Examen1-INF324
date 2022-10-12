@extends('layouts.plantillabase')

@section('contenido')
  <!-- Inicio -->
  <section class="home d-flex align-items-center" id="home" data-scroll-index="0">
     <div class="effect-wrap">
        <i class="fas fa-plus effect effect-1"></i>
        <i class="fas fa-plus effect effect-2"></i>
        <i class="fas fa-circle-notch effect effect-3"></i>
     </div>
     <div class="container">
        <div class="row align-items-center">
           <div class="col-md-7">
              <div class="home-text">
                 <h3 style="color:white">La Facultad de Ciencias Puras Naturales tiene las siguientes modalidades de ingreso de acuerdo a las normativas universitarias: Prueba de suficiencia académica (PSA), Curso preuniversitario (CPU), Modalidad especial: olimpiadas (local, departamental, nacional e internacional), mejores estudiantes de municipios, personas con capacidades especiales. En sus 6 carreras: Biología, Estadística, Física, Informática, Matemática y Cs. Químicas.</h3>
              </div>
           </div>
           <div class="col-md-5 text-center">
              <div class="home-img">
                 <img src="{{ asset('assets/fcpn.png') }}" alt="shala app">
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- Inicio Fin -->

  <!-- Carreras -->
  <section class="features section-padding" id="features" data-scroll-index="1">
     <div class="container">
        <div class="row justify-content-center">
           <div class="col-lg-8">
              <div class="section-title">
                  <h2><span>Carreras</span></h2>
              </div>
           </div>
        </div>
        <div class="row">
           <div class="owl-carousel features-carousel">
              <div class="feature-item">
                 <div class="icon" style="height: 80px;width: 110px;"><img src="{{ asset('assets/inf.png') }}"></div>
                 <h3><a href="{{ route('info') }}">Informatica</a></h3>
                 <p>Av. Villazon, Monoblock Central 2do Patio</p>
              </div>
              <div class="feature-item">
                 <div class="icon" style="height: 80px;width: 110px;"><img src="{{ asset('assets/matematica.png') }}"></div>
                 <h3><a href="{{ route('mate') }}">Matemática</a></h3>
                 <p>Av. Villazon, Monoblock Central Edificio Antiguo</p>
              </div>
              <div class="feature-item">
                 <div class="icon" style="height: 80px;width: 110px;"><img src="{{ asset('assets/fisica.jpg') }}"></div>
                 <h3><a href="{{ route('fisica') }}">Fisica</a></h3>
                 <p>Campus UMSA, Calle 27 de CotaCota</p>
              </div>
              <div class="feature-item">
                 <div class="icon" style="height: 80px;width: 170px;"><img src="{{ asset('assets/estadistica.png') }}"></div>
                 <h3><a href="{{ route('estadistica') }}">Estadistica</a></h3>
                 <p>Av. Villazon, Monoblock Central Edificio Antiguo</p>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- Carreras Fin-->
@endsection