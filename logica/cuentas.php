<?php

session_start();
    require '../conexion.php';
    $flag = True;

    $id = $_SESSION['identificador'];
    $correo = $_SESSION['correo'];
    $foto = $_FILES['foto'];

    $tmp_name =$foto['tmp_name'];

    $img_file=$foto['name'];
    $img_type=$foto['type'];

    $directorio_destino = "assets/pic/";


    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png"))){


        $destino = $directorio_destino . $img_file;

    }


    else{

        $flag = False;
        header("Location: ../index.php?mensaje=Foto:+Formato+No+Permitido");
    
        exit();


    }


    if ($flag){

        
        $db_insert = "UPDATE docband_user SET correo='$correo',foto ='$destino' WHERE id = '$id'";
        
        $sql_rest = mysqli_query($db, $db_insert);

        if($sql_rest){
            move_uploaded_file($tmp_name,$destino);
            header("Location: inicio-de-sesion.php?mensaje=Usuario+Registrado+Satisfactoriamente");
    
            exit();

        }

        else{

            header("Location: Registrarse.php?mensaje=Error:+Registro+No+Exitoso");
    
        exit();

        }
    }

    else{

        header("Location: Registrarse.php?mensaje=Error:+Registro+No+Exitoso");
    
        exit();

    }


?>


