<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<title>FACULTAD DE CIENCIAS PURAS Y NATURALES</title>
		
</head>
	<body background="fcpn.png">
<?php
include 'conexion.php';
session_start();
if(isset($_SESSION["director_login"]))	//Condicion admin
{
	header("location: director_login.php");	
}
if(isset($_SESSION["estudiante_login"]))	//Condicion personal
{
	header("location: index.php"); 
}
if(isset($_SESSION["docente_login"]))	//Condicion Usuarios
{
	header("location: docente_login.php");
}

if(isset($_REQUEST['btn_login']))	
{
	$usuario =$_REQUEST["txt_usuario"];	//textbox nombre "txt_email"
	$password	=$_REQUEST["txt_contra"];	//textbox nombre "txt_password"
		
	if(empty($usuario)){						
		$errorMsg[]="Por favor ingrese su Usuario";	//Revisar email
	}
	else if(empty($password)){
		$errorMsg[]="Por favor ingrese Password";	//Revisar password vacio
	}
	else if($usuario AND $password)
	{
		try
		{   include 'conexion.php';
			$sql="select usuario ,password, rol 
					from acceso
					where usuario = '$usuario' and password = '$password'";
			$resultado=mysqli_query($db,$sql);
			while($row=mysqli_fetch_array($resultado)){
				
				$dbusuario	=$row["usuario"];
				$dbcontra	=$row["password"];
                $dbrol	=$row["rol"];
			}
			if($usuario!=null AND $password!=null )	
			{
				
					if($usuario==$dbusuario and $password==$dbcontra)
					{
						switch($dbrol)		//inicio de sesión de usuario base de roles
						{
							case "director":
								$_SESSION["director_login"]=$usuario;			
								$loginMsg="docente: Inicio sesión con éxito";	
								header("refresh:1;director_login.php");	
								break;
								
							case "estudiante";
								$_SESSION["estudiante_login"]=$usuario;				
								$loginMsg="Estudiante: Inicio sesión con éxito";		
								header("refresh:1;index.php");	
								break;
															
							default:
								$errorMsg[]="usuario o contraseña o rol incorrectos";
						}
					}
					else
					{
						$errorMsg[]="usuario o contraseña o rol incorrectos";
					}
				
			}
			else
			{
				$errorMsg[]="usuario o contraseña o rol incorrectos";
			}
		}
		catch(PDOException $e)
		{
			$e->getMessage();
			//echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}		
	}
	else
	{
		$errorMsg[]="usuario o contraseña o rol incorrectos";
	}
}
?>

	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				<div class="alert alert-danger">
					<strong><?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($loginMsg))
		{
		?>
			<div class="alert alert-success">
				<strong>ÉXITO ! <?php echo $loginMsg; ?></strong>
			</div>
        <?php
		}
		?> 


<div style="width: 340px;margin: 20px auto;">
	
<form method="post" class="form-horizontal" style="margin-bottom: 15px;background: #f7f7f7;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);padding: 30px;">
	<center><h2 style="margin: 0 0 15px;">Iniciar sesión</h2></center>
  <div class="form-group">
  <label class="col-sm-6 text-left">Usuario</label>
  <div class="col-sm-12">
  <input type="text" name="txt_usuario" style="min-height: 38px;border-radius: 2px;" placeholder="Ingrese Usuario" />
  </div>
  </div>
      
  <div class="form-group">
  <label class="col-sm-6 text-left">Password</label>
  <div class="col-sm-10">
  <input type="password" id="txt_contra" name="txt_contra" style="min-height: 38px;border-radius: 2px;" placeholder="Ingrese password" />
  </div>
  <div class="col-md-2">
</div>

  </div>

  
  <div class="form-group">
  <div class="col-sm-12">
  <input type="submit" name="btn_login" class="btn btn-primary btn-block" value="Iniciar Sesion">
  </div>
  </div>
      
</form>
</div>
<!--Cierra div login-->
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>