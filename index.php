<!DOCTYPE html>
<html>
<head>
  <title>Registro de Usuarios</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: royalblue;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #666;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 20px;
      font-size: 14px;
      background-color: aliceblue; /* Color que combina con el azul rey */
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
  <script>
    function mostrarAlerta() {
      alert("Registro Exitoso");
    }
  </script>
</head>
<body>
  <h1>Registro de Usuarios</h1>
  <form id="datos" action="datos.php" method="POST" onsubmit="mostrarAlerta()">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required>

    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>

    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo" required>
      <option value="">Seleccione</option>
      <option value="masculino">Masculino</option>
      <option value="femenino">Femenino</option>
    </select>

    <input type="submit" value="Registrar">
  </form>
</body>
</html>
