<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>INICIO DE SESION</title>
		

<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/loader.css">

	</head>
	<body>
		<?php
require_once 'DBconect.php';
session_start();
if(isset($_SESSION["admin_login"]))	//Condicion admin
{
	header("location: Administrador/home_admin.php");	
}
if(isset($_SESSION["usuarios_login"]))	//Condicion Usuarios
{
	header("location: usuarios/usuarios_portada.php");
}

if(isset($_REQUEST['btn_login']))	
{
	$email		=$_REQUEST["txt_email"];	//textbox nombre "txt_email"
	$password	=$_REQUEST["txt_password"];	//textbox nombre "txt_password"
	$role		=$_REQUEST["txt_role"];		//select opcion nombre "txt_role"
		
	if(empty($email)){						
		$errorMsg[]="Por favor ingrese Email";	//Revisar email
	}
	else if(empty($password)){
		$errorMsg[]="Por favor ingrese Password";	//Revisar password vacio
	}
	else if(empty($role)){
		$errorMsg[]="Por favor seleccione rol ";	//Revisar rol vacio
	}
	else if($email AND $password AND $role)
	{
		try
		{
			$select_stmt=$db->prepare("SELECT email,password,role FROM mainlogin
										WHERE
										email=:uemail AND password=:upassword AND role=:urole"); 
			$select_stmt->bindParam(":uemail",$email);
			$select_stmt->bindParam(":upassword",$password);
			$select_stmt->bindParam(":urole",$role);
			$select_stmt->execute();	//execute query
					
			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))	
			{
				$dbemail	=$row["email"];
				$dbpassword	=$row["password"];
				$dbrole		=$row["role"];
			}
			if($email!=null AND $password!=null AND $role!=null)	
			{
				if($select_stmt->rowCount()>0)
				{
					if($email==$dbemail and $password==$dbpassword and $role==$dbrole)
					{
						switch($dbrole)		//inicio de sesión de usuario base de roles
						{
							case "admin":
								$_SESSION["admin_login"]=$email;			
								$loginMsg="Admin: Inicio sesión con éxito";	
								header("refresh:3;Administrador/home_admin.php");	
								break;
								
							case "personal";
								$_SESSION["personal_login"]=$email;				
								$loginMsg="Personal: Inicio sesión con éxito";		
								header("refresh:3;personal/personal_portada.php");	
								break;
								
							case "usuarios":
								$_SESSION["usuarios_login"]=$email;				
								$loginMsg="Usuario: Inicio sesión con éxito";	
								header("refresh:3;usuarios/usuarios_portada.php");		
								break;
								
							default:
								$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
						}
					}
					else
					{
						$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
					}
				}
				else
				{
					$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
				}
			}
			else
			{
				$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
			}
		}
		catch(PDOException $e)
		{
			$e->getMessage();
		}		
	}
	else
	{
		$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
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
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-8 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Bienvenido al sistema de gestión de inventarios de SERRCALL</h2>
								<img src="images/snail.gif"width="50%" height="50%" alt="">
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Iniciar sesión</h3>
			      		</div>	
			      	</div>
						<form action="#" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Usuario</label>
			      			<input type="text" name="txt_email" class="form-control" placeholder="Ingrese su correo electronico" required>
			      		</div>
						  <div class="form-group">
							<label class="label" for="name">Contraseña</label>
							<input type="password" name="txt_password" class="form-control" placeholder="Ingrese su contraseña" />
							<span toggle="#password-field" ></span>
						  </div>
						  <div class="form-group">
							<label class="col-sm-6 text-left">Selección de rol</label>
							<div class="col-sm-12">
							<select class="form-control" name="txt_role">
								<option value="" selected="selected"> - selecccionar rol - </option>
								<option value="admin">Administrador</option>
								<option value="usuarios">Asesor de ventas</option>
							</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
							<input type="submit" name="btn_login" class="btn btn-success btn-block" value="Iniciar Sesion">
							</div>
							</div>
		            <div class="form-group d-md">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb">Recordar mis datos
									  <input type="checkbox" checked>
									  	<span class="checkmark"></span>
							</label>
						</div>	
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

