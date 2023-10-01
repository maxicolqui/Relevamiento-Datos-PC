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
        <title>Panel de Edicion</title>
        <link rel="stylesheet" href="mostrar.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    

    </head>

    <body>
        <div class="table container-table--edit2">
            <div class="table_title table__title--edit2">Datos Cargados</div>

            <div class="tabla-header">ID producto</div>
            <div class="tabla-header">Monitor</div>
            <div class="tabla-header">Serie</div>
            <div class="tabla-header">Teclado</div>
            <div class="tabla-header">Estado</div>
            <div class="tabla-header">Mouse</div>
            <div class="tabla-header">Estado</div>
            <div class="tabla-header">Parlante</div>
            <div class="tabla-header">Estado</div>
            <div class="tabla-header">Nº de maquina</div>
            <div class="tabla-header"></div>


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

                <div class="btn-group">
                
                    <a href="actualizar3.php?id=<?php echo $row["id"];?>" class="btn btn-primary active" aria-current="page">Editar</a>
                    <a href="eliminar3.php?id=<?php echo $row["id"];?>" class="btn btn-primary">Eliminar</a>
                </div>


                <?php } mysqli_free_result($resultado);?>
        </div>
        <script src="confirmacion.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    

    </body>
</html>