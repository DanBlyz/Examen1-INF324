<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>FACULTAD DE CIENCIAS PURAS Y NATURALES</title>
		
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
	<body>

	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		 
			<center>
				<h3>
				<?php
				session_start();

				if(!isset($_SESSION['director_login']))	
				{
					header("location: ../login.php");  
				}

				if(isset($_SESSION['estudiante_login']))	
				{
					header("location: index.php");	
				}

				if(isset($_SESSION['prefesor_login']))	
				{
					header("location: profesor.php");
				}
				
				if(isset($_SESSION['director_login']))
				{
				?>
					Bienvenido, Director 
				<?php
						echo $_SESSION['director_login'];
				}
				?>
				</h3>
					
			</center>
            <hr>
		</div>
		
		<br><br><br>
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-dark table-striped mt-4">
								<thead>
									<tr>
										<td>COD DEPARTAMENTO</td>
										<td>PROMEDIO DE NOTAS</td>
									</tr>
								</thead>
								<tbody>
									<?php
									include 'conexion.php';
									$sql="select avg(case when xp.departamento='02' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) LP, 
									avg(case when xp.departamento='03' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) CB, 
									avg(case when xp.departamento='04' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) RU, 
									avg(case when xp.departamento='05' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) PT, 
												avg(case when xp.departamento='06' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) TJ, 
												avg(case when xp.departamento='07' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) SC , 
												avg(case when xp.departamento='01' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) CH 
												from persona xp, inscripcion xi 
												where xp.ci=xi.ci_estudiante";
												$resultado=mysqli_query($db,$sql);
												?>
									<?php while($filas = mysqli_fetch_array($resultado)):?>
										<?php if($filas['CH']!= null):?>
											<tr>
												<td> <?='CHUQUICADA (CH)'?></td>
												<td> <?=$filas['CH']?></td>
											</tr>
											<?php endif;?>
											
											<?php if($filas['LP']!= null):?>
												<tr>
													<td> <?='LA PAZ (LP)'?></td>
													<td> <?=$filas['LP']?></td>
												</tr>
												<?php endif;?>
												
												<?php if($filas['CB']!= null):?>
													<tr>
														<td> <?='COCHABAMBA (CB)'?></td>
														<td> <?=$filas['CB']?></td>
													</tr>
													<?php endif;?>
													
													<?php if($filas['RU']!= null):?>
												<tr>
													<td> <?='ORURO (OR)'?></td>
													<td> <?=$filas['RU']?></td>
												</tr>
												<?php endif;?>
												
												<?php if($filas['PT']!= null):?>
													<tr>
														<td> <?='POTOSI (PT)'?></td>
														<td> <?=$filas['PT']?></td>
													</tr>
													<?php endif;?>
													
													<?php if($filas['TJ']!= null):?>
														<tr>
															<td> <?='TARIJA (TJ)'?></td>
															<td> <?=$filas['TJ']?></td>
												</tr>
											<?php endif;?>
											
											<?php if($filas['SC']!= null):?>
												<tr>
													<td> <?='SANTA CRUZ (SC)'?></td>
													<td> <?=$filas['SC']?></td>
												</tr>
												<?php endif;?>
												<?php endwhile;?>
											</tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
			</div>
			
		</div>
		<a href="cerrar_sesion.php"><button class="btn btn-warning text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
										
	</body>
</html>