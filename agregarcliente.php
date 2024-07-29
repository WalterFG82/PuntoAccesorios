<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);

$prenda=$datos["prenda"];
$marca=$datos["marca"];
$talle=$datos["talle"];
$precio=$datos["precio"];

// Si quiero para simplificar y luego trabajar con una sola variable, guardo los datos de la compra en una sola variable
$compra = $prenda . ' ' . $marca . ' ' . $talle . ' ' . $precio;

// y si soy muuuuy vago puedo simplificar todo lo anterior....
//$compra = $datos["prenda"] . ' ' . $datos["marca"] . ' ' . $datos["talle"]; . ' ' . $datos["precio"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportLadie</title>
</head>
<body>
    <h1>Datos del Cliente</h1>

    <p>Ingrese los datos </p>


    <form method="POST" action="" >
        <label>NOMBRE</label>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <label>APELLIDO</label>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <label>MAIL</label>
        <input type="text" name="mail" placeholder="Mail" required>
        <label>TELEFONO</label>
        <input type="text" name="telefono" placeholder="Telefono" required>
        <label>DIRECCION</label>
        <input type="text" name="direccion" placeholder="Direccion" required>
        <input type="submit" name="guardar_cliente" value="Aceptar">

    </form>

<?php
  if(array_key_exists('guardar_cliente',$_POST)){

  $nombre = $_POST ['nombre'];
  $apellido = $_POST['apellido'];
  $mail = $_POST['mail'];
  $telefono = $_POST['telefono'];
  $direccion = $_POST['direccion'];


    //3) Preparar la orden SQL
    // INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
    // => Ingresa dentro de la siguiente tabla los siguientes valores
    // a) generar la consulta a realizar
  $consulta = "INSERT INTO cliente (id,nombre,apellido,mail,telefono,direccion )
          VALUES ('0','$nombre','$apellido','$mail','$telefono','$direccion' )";

    // a) ejecutar la consulta

    mysqli_select_db($conexion, "tienda");
  //  mysqli_query($conexion ,$consulta);
    // a) rederigir a index
    header('Location: ' . $datos["pago"]);
  }?>

    </body>
    </html>
