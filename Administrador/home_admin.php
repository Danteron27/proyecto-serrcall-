<!--


<?php


/*
// admin_home.php
session_start();
if (!array_key_exists('user_id', $_SESSION)) {
   header('Location: login.html');
   die;
}
$allowedRoles = ['admin'];
if (!array_key_exists('role', $_SESSION) || !in_array($_SESSION['role'], $allowdRoles)) {
   header('Location: login.html');
   die;
}
*/



?>


<h1>Bienvenido amind!</h1>
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Principal</title>
    <link href="../css/Administrador/1_Principal_Administrador.css" rel="stylesheet" type="text/css" media="screen" />
    
  </head>
<style>
 
</style>
<body>
<center>   
        <div class="centro_contenido">
            <img src="../img/fondo_principal.png" width="200px">
            <h2 class="centro_texto">¡Bienvenido!</h2>
            <h2 class="centro_texto">Gestor de datos Serrcall</h2>
        </div>
    </center>
<div class="boton_cerrar">

        <a href="../cerrar_sesion.php"><button class="cerrar_sesion"><img src="../img/cerrar-sesion.png" width="30px"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>sadsadsa</button></a>
    </div>
    </form>
    <div class="barra_lateral">
            <div class="encabezado_lateral">
                <h1>Serrcall Administrador</h1>
             </div>
              <div class="selecciones">
          <div class="recuadros">
              <a href="2_Productos_Administrador.php">     
                <div class="imagenes">
                  <img src="../img/caja.png" width="85px">
                </div>
                <h4 class="titulo">Productos</h4>
              </a>
          </div>
        

          <div class="recuadros">
            <a href="3_Proveedores_Administrador.php">     
              <div class="imagenes">
                <img src="../img/repartidor.png" width="85px">
              </div>
              <h4 class="titulo">Proveedores</h4>
            </a>
          </div>
        
  </div>
   <div class="selecciones">
          <div class="recuadros">
            <a href="4_Novedades_Administrador.php">     
              <div class="imagenes">
                <img src="../img/bombilla.png" width="85px">
              </div>
              <h4 class="titulo">Novedades</h4>
            </a>
      
        </div>
       
        <div class="recuadros">
            <a href="5_Usuario_Administrador.php">     
              <div class="imagenes">
                <img src="../img/usuario.png" width="85px">
              </div>
              <h4 class="titulo">Usuario</h4>
            </a>
      
        </div>
      </div>
      <div class="selecciones">
          <div class="recuadros">
            <a href="6_Kardex_Administrador.php">     
              <div class="imagenes">
                <img src="../img/inventario.png" width="85px">
              </div>
              <h4 class="titulo">Kardex</h4>
            </a>
      
        </div>
       
        <div class="recuadros">
            <a href="7_Clientes_Administrador.php">     
              <div class="imagenes">
                <img src="../img/clientes.png" width="85px">
              </div>
              <h4 class="titulo">Clientes</h4>
            </a>
      
        </div>
      </div>
    </div>
 
</body>
<footer>
  <div class="footer">
    <div class="contenido">
    <p>SERRCALL</p>
    <P>Teléfono: (1) 2984829</P>
    <p>Dirección: Cl. 22g #100-04, Bogotá</p>
    <p><img src="../img/snail_footer.png" width="23px"></p>
    </div>
  </div>
</footer>
</html>