<?php
$servidor ="localhost";
$usuario ="root";
$clave ="";
$basededatos ="alumnos";

$enlace = mysqli_connect($servidor,$usuario,$clave,$basededatos);

if(!$enlace){
  echo"ERROR EN LA CONEXION CON EL SERVIDOR";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tabla de Usuarios</title>
  <style>
    body {
      background-color: #c1e6f7;
    }

    .user-list {
      width: 60%;
      margin: 0 auto;
      list-style-type: none;
      padding: 0;
      background-color: #bfe6f7;
    }

    .user-list-item {
      display: flex;
      justify-content: space-between;
      padding: 8px;
      border: 1px solid #ccc;
    }

    .user-list-item:nth-child(even) {
      background-color: #f2f2f2;
    }

    .title-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    h1 {
      text-align: center;
      margin-top: 20px;
    }

    h2 {
      text-align: center;
      margin: 30px 0;
    }
  </style>
</head>
<body>
  <h1>Tabla de Usuarios</h1>

  <ul class="user-list">
    <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
    $edad = isset($_POST["edad"]) ? $_POST["edad"] : "";
    $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? $_POST["fechaNacimiento"] : "";
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "";
    $id = rand(1, 99);

    $insertarDatos = "INSERT INTO datos VALUES ('$nombre', '$apellido', '$edad', '$fechaNacimiento', '$sexo', '$id')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if (!$ejecutarInsertar) {
      echo "ERROR EN LA LINEA DE SQL";
    }
  }
  $obtenerDatos = "SELECT * FROM datos WHERE id = '$id'";
  $result = mysqli_query($enlace, $obtenerDatos);

  if (!$result) {
    echo "ERROR EN LA CONSULTA";
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  echo "<h2>BIENVENIDO A TU PORTAL, ".$row['Nombre']." ".$row['Apellido']."</h2>";
  ?>

  <ul class="user-list">
    <li class="user-list-item"><strong>Nombre:</strong> <?php echo $row['Nombre']; ?></li>
    <li class="user-list-item"><strong>Apellido:</strong> <?php echo $row['Apellido']; ?></li>
    <li class="user-list-item"><strong>Edad:</strong> <?php echo $row['Edad']; ?></li>
    <li class="user-list-item"><strong>Fecha de Nacimiento:</strong> <?php echo $row['Fechanaci']; ?></li>
    <li class="user-list-item"><strong>Sexo:</strong> <?php echo $row['Sexo']; ?></li>
    <li class="user-list-item"><strong>ID:</strong> <?php echo $row['id']; ?></li>
  </ul>
</body>
</html>





