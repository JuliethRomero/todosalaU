<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="correctas" placeholder="Digite correctas">
        <input type="number" name="incorrectas" placeholder="Digite incorrectas">
        <input type="number" name="en_blanco" placeholder="Digite en blanco">
        <input type="submit" name="datos" value="validar">
    </form>
    <?php
    if (isset($_POST['datos'])) {
        $correctas = $_POST['correctas'];
        $incorrectas = $_POST['incorrectas'];
        $en_blanco = $_POST['en_blanco'];

        $total = ($correctas*4)+(-$incorrectas);

        echo "La cantidad de puntos es de: ".$total;
    }
    ?>
</body>
</html>