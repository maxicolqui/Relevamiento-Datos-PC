<?php
	include("cn.php");
	$usuarios = "SELECT * FROM bd_cpu2";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carga de Datos</title>
        <link rel="stylesheet" href="mostrar2.css">
    </head>

    <body>
        <div class="table">
            <div class="table_title">Datos Cargados</div>


            <div class="tabla-header">Procesador</div>
            <div class="tabla-header">Modelo</div> 
            <div class="tabla-header">ID producto</div>
            <div class="tabla-header">RAM</div>
            <div class="tabla-header">Almacenamiento</div>
            <div class="tabla-header">Tipo </div>
            <div class="tabla-header">Sistema Operativo</div>
            <div class="tabla-header">Virus</div>
            <div class="tabla-header">conexion</div>
            <div class="tabla-header">N° de maquina</div>


            <?php $resultado = mysqli_query($conexion , $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) { ?>

                <div class="item"><?php echo $row["procesador"];?></div>
                <div class="item"><?php echo $row["modelo"];?></div>
                <div class="item"><?php echo $row["numero2"];?></div>
                <div class="item"><?php echo $row["ram"];?></div>
                <div class="item"><?php echo $row["alma"];?></div>
                <div class="item"><?php echo $row["tipo"];?></div>
                <div class="item"><?php echo $row["so"];?></div>
                <div class="item"><?php echo $row["virus"];?></div>
                <div class="item"><?php echo $row["inte"];?></div>
                <div class="item"><?php echo $row["maquina"];?></div>

                <?php } mysqli_free_result($resultado);?>
        </div>
    </body>
</html>