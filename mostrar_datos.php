<?php

    $db = new mysqli("localhost", "root", "", "docbanddb");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostitucion</title>
</head>
<body>
    

    <?php
    
        $sql = "SELECT nombre, apellido, cedula from docband_user;";
        $result = mysqli_query($db,$sql);

        while($datos = mysqli_fetch_array($result)){

    ?>
    <div class="card" style="border: 1px solid #000; border-radius: 30px; padding-left: 30px;; ">
    
        <label>Nombre:</label>
        <label> <?php echo $datos['nombre'];?></label>
        <br>
        <label>Apellido</label>
        <label><?php echo $datos['apellido'];?></label>
        <br>
        <label>Cedula:</label>
        <label><?php echo $datos['cedula'];?></label>
        <br>
    </div>
    <br>
    <br>    
    <?php

    }
?>

</body>
</html>