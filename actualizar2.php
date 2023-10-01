<?php
	include("cn.php");
    $id = $_GET["id"];
	$usuarios = "SELECT * FROM bd_cpu2 WHERE id ='$id' ";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>actualizar</title>
        <link rel="stylesheet" href="mostrar.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    </head>

    <body>
        <form class="table container-table--edit2" action="procesar_actualizar2.php" method="post">
            <div class="table_title table__title--edit2">Datos Cargados</div>


            <div class="tabla-header">Procesador</div>
            <div class="tabla-header">Modelo</div>
            <div class="tabla-header">ID producto</div>
            <div class="tabla-header">RAM</div>
            <div class="tabla-header">Almacenamiento</div> 
            <div class="tabla-header">Tipo</div>
            <div class="tabla-header">Sistema Operativo</div>
            <div class="tabla-header">Virus</div>
            <div class="tabla-header">conexion</div>
            <div class="tabla-header">N° de maquina</div>
            <div class="tabla-header"></div>



            <?php $resultado = mysqli_query($conexion , $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) { ?>

                <input type="hidden" class="item" value="<?php echo $row["id"];?>" name="id">
                <input type="text" class="table__input" value="<?php echo $row["procesador"];?>"name="procesador">
                <input type="text" class="table__input" value="<?php echo $row["modelo"];?>"name="modelo">
                <input type="text" class="table__input" value="<?php echo $row["numero2"];?>"name="numero2">
                <input type="text" class="table__input" value="<?php echo $row["ram"];?>"name="ram">
                <input type="text" class="table__input" value="<?php echo $row["alma"];?>"name="alma">
                <input type="text" class="table__input" value="<?php echo $row["tipo"];?>"name="tipo">
                <input type="text" class="table__input" value="<?php echo $row["so"];?>"name="so">
                <input type="text" class="table__input" value="<?php echo $row["virus"];?>"name="virus">
                <input type="text" class="table__input" value="<?php echo $row["inte"];?>"name="inte">
                <input type="text" class="table__input" value="<?php echo $row["maquina"];?>"name="maquina">


                <?php } mysqli_free_result($resultado) ;?>
                <button type="submit" value="Actualizar" class="btn btn-outline-primary">Actualizar</button>

            </form>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>