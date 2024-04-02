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
    
        $sql = "SELECT f_consulta, habitacion, cama from docband_medical_history WHERE id_user = 8;";
        $result = mysqli_query($db,$sql);

        while($datos = mysqli_fetch_array($result)){

    ?>
    <div class="card" style="border: 1px solid #000; border-radius: 30px; padding-left: 30px;; ">
    
        <label>Fecha Consulta:</label>
        <label> <?php echo $datos['f_consulta'];?></label>
        <br>
        <label>Habitacion:  </label>
        <label><?php echo $datos['habitacion'];?></label>
        <br>
        <label>Cama:</label>
        <label><?php echo $datos['cama'];?></label>
        <br>
    </div>
    <br>
    <br>    
    <?php

    }
?>

</body>
</html>