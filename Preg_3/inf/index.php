<?php 
    $css1 = '../css/owl.carousel.min.css';
    $css2 = '../css/font-awesome.css';
    $css3 = '../css/bootstrap.min.css';
    $css4 = '../css/style.css';

    include '../header/cabecera.php';
?>

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
                 <h3 style="color:white">La Carrera de Informática fue creada en 1973, como una mención del Departamento de Matemáticas; el 15 de octubre de 1984 se independiza administrativamente de éste, convirtiéndose posteriormente en Carrera de Informática,con aproximadamente 300 alumnos. El primer coordinador de Informática fue el Ing. Roberto Carranza, quien tuvo que hacer frente a los típicos problemas de un nuevo programa, tales como: el primer pensum, la primera organización curricular, la infraestructura para cubrir las necesidades del programa, entre otros.</h3>
              </div>
           </div>
           <div class="col-md-5 text-center">
              <div class="home-img">
                 <img src="../img/inf.png" alt="shala app">
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
                  <h2><span>Otras Carreras</span></h2>
              </div>
           </div>
        </div>
        <div class="row">
           <div class="owl-carousel features-carousel">
              <!-- <div class="feature-item">
                 <div class="icon" style="height: 80px;width: 110px;"><../img src="img/inf.png"></div>
                 <h3><a href="../inf/index.php">Informatica</a></h3>
                 <p>Av. Villazon, Monoblock Central 2do Patio</p>
              </div> -->
              <div class="feature-item">
                 <div class="icon" style="height: 80px;width: 110px;"><img src="../img/matematica.png"></div>
                 <h3><a href="../mat/index.php">Matemática</a></h3>
                 <p>Av. Villazon, Monoblock Central Edificio Antiguo</p>
              </div>
              <div class="feature-item">
                 <div class="icon" style="height: 80px;width: 110px;"><img src="../img/fisica.jpg"></div>
                 <h3><a href="../fis/index.php">Fisica</a></h3>
                 <p>Campus UMSA, Calle 27 de CotaCota</p>
              </div>
              <div class="feature-item">
                 <div class="icon" style="height: 80px;width: 170px;"><img src="../img/estadistica.png"></div>
                 <h3><a href="../est/index.php">Estadistica</a></h3>
                 <p>Av. Villazon, Monoblock Central Edificio Antiguo</p>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- Carreras Fin-->

  <?php include '../header/footer.php';?>