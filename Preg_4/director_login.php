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
					Bienvenido, director
				<?php
						echo $_SESSION['director_login'];
				}
				?>
				</h3>
					
			</center>
            <hr>
		</div>
		
		<br><br><br>
		<div class="row" >
			<div class="col-lg-6" >
				<div class="panel panel-default" style="background-color:black;">
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-dark table-striped mt-4">
										<thead class="thead-dark">
                                        <tr>
                                            <td><h3 style="color:white;">COD DEPARTAMENTO</h3></td>
										    <td><h3 style="color:white;">PROMEDIO DE NOTAS</h3></td>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
									include 'conexion.php';
									$sql="SELECT xp.departamento,AVG(xi.nota1+xi.nota2+xi.nota3+xi.nota_final)promedio
										FROM inscripcion xi,persona xp
										where xi.ci_estudiante =xp.ci
										GROUP by xp.departamento";
										$resultado=mysqli_query($db,$sql);
										?>
									
									<?php while($filas = mysqli_fetch_array($resultado)):?>
										<tr>
											<?php if($filas['departamento']=='01'):?>
												<td> <?='CHUQUICADA ('.$filas['departamento'].')'?></td>
											<?php endif;?>
												
											<?php if($filas['departamento']=='02'):?>
												<td> <?='LA PAZ ('.$filas['departamento'].')'?></td>
											<?php endif;?>
													
											<?php if($filas['departamento']=='03'):?>
												<td> <?='COCHABAMBA ('.$filas['departamento'].')'?></td>
											<?php endif;?>
														
											<?php if($filas['departamento']=='04'):?>
												<td> <?='ORURO ('.$filas['departamento'].')'?></td>
											<?php endif;?>
															
											<?php if($filas['departamento']=='05'):?>
												<td> <?='POTOSI ('.$filas['departamento'].')'?></td>
											<?php endif;?>
																
											<?php if($filas['departamento']=='06'):?>
												<td> <?='TARIJA ('.$filas['departamento'].')'?></td>
											<?php endif;?>
																	
											<?php if($filas['departamento']=='07'):?>
												<td> <?='SANTA CRUZ ('.$filas['departamento'].')'?></td>
											<?php endif;?>

											<?php if($filas['departamento']=='08'):?>
												<td> <?='BENI ('.$filas['departamento'].')'?></td>
												<?php endif;?>
												<?php if($filas['departamento']=='08'):?>
													<td> <?='PANDO ('.$filas['departamento'].')'?></td>
													<?php endif;?>
													<td> <?=$filas['promedio']?></td>
												</tr>
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
		<a href="cerrar_sesion.php"><button class="btn btn-warning text-rigth"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
		
	</body>
	</html>