<?php

        require ('../funciones.php');
        $flag = True;
        $db = new mysqli("localhost", "root", "", "docbanddb");

        $cedula_historia = $_POST['cedula_historia'];

        $fecha_historia = $_POST['fecha_historia'];
        $habitacion = $_POST['habitacion_historia'];
        $cama_historia = $_POST['cama_historia'];
        $motivo_historia = $_POST['motivo_historia'];
        $enfermedad_historia = $_POST['enfermedad_historia'];

        $patologico_historia = $_POST['patologico_historia'];
        $quirurgicos_historia = $_POST['quirurgicos_historia'];
        $habitos_historia = $_POST['habitos_historia'];
        $epi_historia = $_POST['epi_historia'];
        $familiares_historia = $_POST['familiares_historia'];

        $diuresis_historia = $_POST['diuresis_historia'];
        $catarsis_historia = $_POST['catarsis_historia'];
        $sueño_historia = $_POST['sueño_historia'];
        $relaciones_habitos = $_POST['relaciones_habitos'];
        $alergia_historia = $_POST['alergia_historia'];
        $fisico_historia = $_POST['fisico_historia'];

        $presuntivo_historia = $_POST['presuntivo_historia'];
        $etiologico_historia = $_POST['etiologico_historia'];
        $funcional_historia = $_POST['funcional_historia'];
        $sindromatico_historia = $_POST['sindromatico_historia'];
        $anatomico_historia = $_POST['anatomico_historia'];
        $plan_historia = $_POST['plan_historia'];
        $id = "";

        if (!select_cedula($cedula_historia)){

                $db_select = "SELECT id FROM docband_user WHERE cedula = '$cedula_historia';";
                
                $a = mysqli_query($db, $db_select);

                $fila = $a ->fetch_array();

                $id = $fila['id'];


        }

        else{

                $flag = False;
                
                header("Location: ../historial-medico.php?mensaje=Paciente+No+Registrado");
                
                exit();
                

        }


        if ($flag){

                $db_insert = "INSERT INTO docband_medical_history(f_consulta, habitacion, cama, motivo_consulta, enfermedad_actual, antecedentes_patologicos, antecedentes_quirurgicos, antecedentes_habitos, antecedentes_epidemiologico, antecedentes_familiares, diuresis, catarsis, sueño, relaciones_sexuales, alergias, examen_fisico, diagnostico_presuntivo, diagnostico_etiologico, diagnostico_funcional,diagnostico_sindormatico, diagnostico_anatomico, plan_terapeutico, id_user) VALUES ('$fecha_historia', '$habitacion', '$cama_historia','$motivo_historia','$enfermedad_historia','$patologico_historia','$quirurgicos_historia','$habitos_historia','$epi_historia','$familiares_historia','$diuresis_historia','$catarsis_historia','$sueño_historia','$relaciones_habitos','$alergia_historia','$fisico_historia','$presuntivo_historia','$etiologico_historia','$funcional_historia','$sindromatico_historia','$anatomico_historia','$plan_historia','$id')";
                
                $sql_rest = mysqli_query($db, $db_insert);

                header("Location: ../historial-medico.php?mensaje=Registro+Exitoso");
                
                exit();

        }    


        else{

                header("Location: ../historial-medico.php?mensaje=Error:+Registro+Fallido");
                
                exit();
                
        }



?>

