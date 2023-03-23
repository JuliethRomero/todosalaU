<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--formulario para obtener datos de calificacion, cantidad de clases y asistencia de estudiantes-->
    <h3>La nota de aprobacion es mayor o igual a 6 (entre un rango 1 a 10) </h3>
    <form action="" method="post">
        <input type="number" name="nota" placeholder='Ingresa la calificacion'>
        <input type="number" name="cant_clases" placeholder="ingrese la cantidad de clases">
        <input type="number" name="cant_asistencia" placeholder="ingrese la cantidad asistencia">
        <input type="submit" name="datos" value="calcular">
    </form>
    <?php

    if (isset($_POST['datos'])) {
        $nota = $_POST['nota'];
        $cant_clases = $_POST['cant_clases'];
        $cant_asistencias = $_POST['cant_asistencia'];

        $condicion = $cant_clases*0.8;

        if ($cant_asistencias>= $condicion && $nota>= 6) {
            //congratulations
            $message = "Estudiante aprobo!!!!!!!";

        }else {
            //no paso
            $message = "Estudiante No aprobo :C";

        }
        echo "<script>alert('$message');</script>";

    }
    ?>
</body>
</html>