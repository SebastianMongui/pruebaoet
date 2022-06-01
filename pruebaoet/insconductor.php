<html>
    <head>
        <title>
            insertar conductor </title>
            <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
</head>
<body>
    <br><br>
    <h1><center><font face="Verdana">Insertar Conductor</font></center></h1>
    <br><br><br>
    <?php
    $conexion=mysqli_connect("localhost","root","","acme") or die("problemas con la conexion");
    $num_docume=$_POST['num_docume'];
    $nom_conduc=$_POST['nom_conduc'];
    $nom_conduc2=$_POST['nom_conduc2'];
    $apellidos=$_POST['apellidos'];
    $num_telef=$_POST['num_telef'];
    $nom_ciudad=$_POST['nom_ciudad'];

    mysqli_query($conexion,"INSERT INTO conductor (cedula, pr_nombre, sg_nombre, apellidos, telefono, ciudad ) values ('$num_docume','$nom_conduc', '$nom_conduc2', '$apellidos', '$num_telef', '$nom_ciudad')") or die ("Problemas en el select".mysqli_error($conexion));
    echo "<font face='Verdana'>Registro ingresado correctamente</font>";
    echo "<br><br>";

    $registros=mysqli_query($conexion,"SELECT cedula, pr_nombre, sg_nombre, apellidos, telefono, ciudad FROM conductor") or die ("Problemas en el select".mysqli_error($conexion));
    echo "<font face='Verdana'><table border='1' cellspacing='0' cellpadding='0' width='80%' align='center' bgcolor='#CEE3F6' size='1px'><tr><th>No. Documento</th><th>Primer Nombre</th><th>Segundo Nombre</th><th>Apellidos</th><th>Tel&eacute;fono</th><th>Ciudad</th></tr><tr>";
    while($reg=mysqli_fetch_array($registros))
    {
        echo "<td>".$reg['cedula']."</td>";
        echo "<td>".$reg['pr_nombre']."</td>";
        echo "<td>".$reg['sg_nombre']."</td>";
        echo "<td>".$reg['apellidos']."</td>";
        echo "<td>".$reg['telefono']."</td>";
        echo "<td>".$reg['ciudad']."</td></tr>";
        echo "</center>";
    }

    ?>
    <a href="MENU.html"><input type="submit" value="PRINCIPAL"></a> <br><br>
    </body>
    </html>
        
   