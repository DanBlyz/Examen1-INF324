<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FCPN</title>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
     <!-- Navbar Start --> 
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
       <!-- Brand -->
       <a class="navbar-brand" href="{{ route('inicio') }}">FACULTAD CIENCIAS PURAS Y NATURALES</a>

       <!-- Toggler/collapsibe Button -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fas fa-bars"></i>
       </button>

       <!-- Navbar links -->
       <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link active" data-scroll-nav="0" href="#">Inicio</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-scroll-nav="1" href="#">Carreras</a>
            </li>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-scroll-nav="6" href="#">Contacto</a>
            </li>
          </ul>
       </div>
    </div>
  </nav>
  <!-- Navbar End -->
    
        @yield('contenido')
    
      <!-- Footer -->
  <footer class="footer" data-scroll-index="6">
    <div class="container">
       <div class="row">
           <div class="col-lg-3 col-md-6">
              <div class="footer-col">
                 <h3>Nosotros</h3>
                 <p>La plataforma presente es perteneciente a la UMSA la cual esta hecha para una mejor comunicacion entre docentes y estudiantes asi para lograr ver sus calificaciones y conocer acerca de nuestra Facultad.</p>
              </div>
           </div>
           <div class="col-lg-3 col-md-6">
              <div class="footer-col">
                 <h3>Contactos</h3>
                 <ul>
                     <li><p><i class="fas fa-phone"></i> 2441570 / 2440571</p></li>
                     <li><p><i class="fas fa-envelope"></i> decanato@fcpn.edu.com</p></li>
                 </ul>
              </div>
           </div>
           <div class="col-lg-3 col-md-6">
              <div class="footer-col">
                 <h3>Direccion</h3>
                 <ul>
                     <li><p> Villazón Nº 1995, Plaza del Bicentenario - Zona Central, La Paz - Bolivia.</p></li>
                 </ul>
              </div>
           </div>
           <div class="col-lg-3 col-md-6">
              <div class="footer-col">
                 <h3>Redes Sociales</h3>
                 <ul>
                     <li><a href="#"><i class="fab fa-facebook-f"></i> facebook</a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i> twitter</a></li>
                     <li><a href="#"><i class="fab fa-instagram"></i> instagram</a></li>
                     <li><a href="#"><i class="fab fa-youtube"></i> youtube</a></li>
                 </ul>
              </div>
           </div>
       </div>
       <div class="row">
          <div class="col-lg-12">
            <p class="copyright-text">&copy;2022 @ Daniel</p>
          </div>
       </div>
    </div>
 </footer>
 <!-- Footer Fin-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- ScrollIt js -->
    <script src="{{ asset('js/scrollIt.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>