<html>
    <head>
        <title>
            insertar veh&iacute;culo </title>
            <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
            <!--<link rel="stylesheet" href="css/estilos.css"/>-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
</head>
<body>
    <br><br>
    <h1>INSERTAR VEH&Iacute;CULO </h1>
    <br><br><br>
    <?php
    $conexion=mysqli_connect("localhost","root","","acme") or die("problemas con la conexion");
    $placa=$_POST['num_placa'];
    $color=$_POST['nom_color'];
    $marca=$_POST['nom_marca'];
    $tip_vehicu=$_POST['tip_vehicu'];
    $conduc=$_POST['num_conduc'];
    $propie=$_POST['num_propie'];
    

    mysqli_query($conexion,"INSERT INTO vehiculo (placa, color, marca, tipo_vehiculo, id_conductor, id_propietario) VALUES ('$placa' , '$color', '$marca', '$tip_vehicu', '$conduc', '$propie')") or die ("Problemas en el INSERT".mysqli_error($conexion));
    echo "Registro ingresado correctamente";
    echo "<br><br>";

    $registros=mysqli_query($conexion,"SELECT placa, color, marca, tipo_vehiculo, id_conductor, id_propietario FROM vehiculo") or die ("Problemas en el select".mysqli_error($conexion));
    echo "<table border='2' width='80%'><tr><th>PLACA</th><th>COLOR</th><th>MARCA</th><th>TIPO VEHICULO</th><th>DOC. CONDUCTOR</th><th>DOC. PROPIETARIO</th></tr><tr>";
    while($reg=mysqli_fetch_array($registros))
    {
        echo "<td>".$reg['placa']."</td>";
        echo "<td>".$reg['color']."</td>";
        echo "<td>".$reg['marca']."</td>";
        echo "<td>".$reg['tipo_vehiculo']."</td>";
        echo "<td>".$reg['id_conductor']."</td>";
        echo "<td>".$reg['id_propietario']."</td></tr>";
    }

    ?>
    <a href="MENU.html"><input type="submit" value="PRINCIPAL"></a> <br><br>
    </body>
    </html>
        
   