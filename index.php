<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php 
        include_once("conexion.php");
        cconexion::ConexionBD();
    ?>
    <div>
        <h1 style="text-align: center;">Examen Diagnostico</h1>    
    </div>
    <br>
    <div style="margin-left: 5px;">
        <h2>Nombre de la tabla</h2>
        <input type="text" id="Tabla_nombre">
        <button onclick="GenerarTabla()">Generar tabla</button>
        <br>
        <h2 id="Nombre_tabla"></h2>
        <br>
        <div id="VisionTabla" style="visibility:hidden">
            <Table>
                <tr>
                    <th>Cliente</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                </tr>
            </Table>
            <h3>Cliente</h3>
            <input type="text" id="cliente">
            <h3>Nombre</h3>
            <input type="text" id="Nombre">
            <h3>Apellido Paterno</h3>
            <input type="text" id="ApellidoPaterno">
            <h3>Apellido Materno</h3>
            <input type="text" id="ApellidoMaterno">
            <br>
            <br>
            <button onclick="AddRegistro()">Añadir Registro</button>        
        </div>
    </div>    
</body>
</html>

