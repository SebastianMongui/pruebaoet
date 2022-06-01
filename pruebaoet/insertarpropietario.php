<html>
    <head>
        <title>
            insertar propietario </title>
            <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
</head>
<body>
    <br><br>
    <h1><center><font face="Verdana">Insertar Propietario</font></center></h1>
    <br><br><br>
    <?php
    $conexion=mysqli_connect("localhost","root","","acme") or die("problemas con la conexion");
    $num_docume=$_POST['num_docume'];
    $nom_propie=$_POST['nom_propie'];
    $nom_propie2=$_POST['nom_propie2'];
    $apellidos=$_POST['apellidos'];
    $num_telef=$_POST['num_telefo'];
    $nom_ciudad=$_POST['nom_ciudad'];
    
    mysqli_query($conexion,"INSERT INTO propietario (cedula, pr_nombre, sg_nombre, apellidos, telefono, ciudad) VALUES ('$num_docume','$nom_propie','$nom_propie2','$apellidos', '$num_telef', '$nom_ciudad')") or die ("Problemas en el INSERT".mysqli_error($conexion));
    echo "<font face='Verdana'>Registro ingresado correctamente</font>";
    echo "<br><br>";

    $registros=mysqli_query($conexion,"SELECT cedula, pr_nombre, sg_nombre, apellidos, telefono, ciudad FROM propietario") or die ("Problemas en el SELECT".mysqli_error($conexion));
    echo "<font face='Verdana'><table border='1' cellspacing='0' cellpadding='0' width='80%' align='center' bgcolor='#CEE3F6' size='1px'><tr><th>No. Documento</th><th>PRIMER NOMBRE</th><th>SEGUNDO NOMBRE</th><th>APELLIDOS</th><th>TELÉFONO</th><th>CIUDAD</th>
    </tr><tr>";
    while($reg=mysqli_fetch_array($registros))
    {
        echo "<td>".$reg['cedula']."</td>";
        echo "<td>".$reg['pr_nombre']."</td>";
        echo "<td>".$reg['sg_nombre']."</td>";
        echo "<td>".$reg['apellidos']."</td>";
        echo "<td>".$reg['telefono']."</td>";
        echo "<td>".$reg['ciudad']."</td></tr></font>";
    }

    ?>
    <a href="MENU.html"><input type="submit" value="PRINCIPAL"></a> <br><br>
    </body>
    </html>
        
   