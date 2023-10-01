<?php
	include("cn.php");
	$usuarios = "SELECT * FROM bd_cpu3";
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


            <div class="tabla-header">ID producto</div>
            <div class="tabla-header">Monitor</div>
            <div class="tabla-header">Serie</div>
            <div class="tabla-header">Teclado</div>
            <div class="tabla-header">Estado</div>
            <div class="tabla-header">Mouse</div>
            <div class="tabla-header">Estado</div>
            <div class="tabla-header">Parlante</div>
            <div class="tabla-header">Estado</div>
            <div class="tabla-header">N° de maquina</div>


            <?php $resultado = mysqli_query($conexion , $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) { ?>

                <div class="item"><?php echo $row["numero"];?></div>                
                <div class="item"><?php echo $row["marca"];?></div>
                <div class="item"><?php echo $row["estado"];?></div>
                <div class="item"><?php echo $row["marcaT"];?></div>
                <div class="item"><?php echo $row["estadoT"];?></div>
                <div class="item"><?php echo $row["marcaMouse"];?></div>
                <div class="item"><?php echo $row["estadoMouse"];?></div>
                <div class="item"><?php echo $row["marcaP"];?></div>
                <div class="item"><?php echo $row["estadoP"];?></div>
                <div class="item"><?php echo $row["maquina"];?></div>

                <?php } mysqli_free_result($resultado);?>
        </div>
    </body>
</html>