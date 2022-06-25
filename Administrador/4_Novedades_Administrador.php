<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <title>Novedades</title>
    <link href="../css/Administrador/4_Novedades_Administrador.css" rel="stylesheet" type="text/css" media="screen" />
  </head>
  <style>
    .eliminar{
      border-radius: 10px;
      width: 30px;
      height: 30px;
      border: 1px solid black;
      background-color: #ff0000;
    }
    .modificar{
      border-radius: 10px;
      width: 30px;
      height: 30px;
      border: 1px solid black;
      background-color: #2196f3;
    }
    .productos{
      margin-left: 200px; 
    }
  </style>
<body>
<form action="" class="boton">
        <button type="submit" class="agregar_producto"><img src="../img/agregar_producto.png" width="30px"><p>Agregar</p></button>
    </form>
   
  <center>
 
  <table cellspacing="0" class="productos">
            <thead>
                <tr>
                    <th class="thead">ID Novedad</th>
                    <th class="thead">Tipo de Novedad</th>
                    <th class="thead">Producto</th>
                    <th class="descripcion">Descripción</th>
                    <th class="thead">Fecha</th>
                    <th class="descripcion">Cliente</th>
                    <th class="thead">Eliminar</th>
                    <th class="thead">Modificar</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td class="gris">1</td>
                    <td class="gris">Devolucion</td>
                    <td class="gris">Plancha</td>
                    <td class="gris">Carcasa rota</td>
                    <td class="gris">7 junio 2022</td>
                    <td class="gris">1022924097</td>
                    <td class="gris"><a href=""><button class="eliminar">X</button></a></td>
                    <td class="gris"><a href=""><button class="modificar">?</button></a></td>
                </tr>
                <tr>
                <td>2</td>
                    <td>Devolucion</td>
                    <td>Celular</td>
                    <td>Camara rallada, tactil no detecta</td>
                    <td>7 junio 2022</td>
                    <td>10252858185</td>
                    <td><a href=""><button class="eliminar">X</button></a></td>
                    <td><a href=""><button class="modificar">?</button></a></td>
                </tr>
                <tr>
                <td class="gris">3</td>
                    <td class="gris">Devolucion</td>
                    <td class="gris">Cargador</td>
                    <td class="gris">Cable dañado</td>
                    <td class="gris">7 junio 2022</td>
                    <td class="gris">10229341347</td>
                    <td class="gris"><a href=""><button class="eliminar">X</button></a></td>
                    <td class="gris"><a href=""><button class="modificar">?</button></a></td>
                </tr>
               
            </tbody>
            <tfoot>
                <tr>
                    <th class="thead" colspan="8" class="tfoot">Serrcall</th>
                    
                </tr>
            </tfoot>
    </table>
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
              
              <div class="selected">
                <img src="../img/bombilla.png" width="85px">
              </div>
              <h4 class="titulo">Novedades</h4>
           
      
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
      <style>
      .hogar{
        width: 100px;
        height: 45px;
        border-radius: 20px;
        border: 2px solid black;
        transition: 0.3s;
        background-color: rgb(143, 143, 143);
        margin-top: 50%;
    }
    .hogar:hover{
        background-color: rgb(201, 198, 198);
    }
      </style>
      <form action="home_admin.php">
        <button type="submit" class="hogar"><img src="../img/hogar.png" width="30px"></button></a>
    </form>    

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