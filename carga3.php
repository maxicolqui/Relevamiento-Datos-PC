<?php
	include("cn.php");
	$usuarios = "SELECT * FROM bd_cpu2 ";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carga de datos</title>
	<link rel="stylesheet" href="style3.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="estilos.css">
</head> 
<body>
    <main>
        
        <form action="insertar3.php" method="post" class="formulario" id="formulario">

			
			<!--COMPONENTES INTERNOS-->
            <h2 class="formulario__subTitulo">Componente Externo</h2>
			
            <div class="formulario__grupo" id="grupo__memoriaRam">
				<label for="memoriaRam" class="formulario__label">ID producto</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="numero" id="memoriaRam" placeholder="n° del producto">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

			
			<h2 class="formulario__subTitulo">Monitor</h2>

            <div class="formulario__grupo" id="grupo__placaMadre">
				<label for="placaMadre" class="formulario__label">Marca</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="marca" id="placaMadre" placeholder="marca ">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

            <div class="formulario__grupo" id="grupo__procesador">
				<label for="procesador" class="formulario__label">N° serie</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="estado" id="estado" placeholder="serie">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
            </div>

			<h2 class="formulario__subTitulo">Teclado</h2>

            <div class="formulario__grupo" id="grupo__placaMadre">
				<label for="placaMadre" class="formulario__label">Marca</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="marcaT" id="placaMadre" placeholder="marca ">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

			<div class="formulario__grupo" id="grupo__procesador">
				<label for="procesador" class="formulario__label">Estado</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="estadoT" id="estado" placeholder="estado">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
            </div>

			<h2 class="formulario__subTitulo">Mouse</h2>

            <!--Grupo: Placa madre-->
            <div class="formulario__grupo" id="grupo__placaMadre">
				<label for="placaMadre" class="formulario__label">Marca</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="marcaMouse" id="placaMadre" placeholder="marca ">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

			<div class="formulario__grupo" id="grupo__procesador">
				<label for="procesador" class="formulario__label">Estado</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="estadoMouse" id="estado" placeholder="estado">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
            </div>

			<h2 class="formulario__subTitulo">Parlate</h2>

            <div class="formulario__grupo" id="grupo__placaMadre">
				<label for="placaMadre" class="formulario__label">Marca</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="marcaP" id="placaMadre" placeholder="marca ">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
			</div>

            <div class="formulario__grupo" id="grupo__procesador">
				<label for="procesador" class="formulario__label">Estado</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="estadoP" id="estado" placeholder="estado">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
            </div>

			<div class="formulario__grupo" id="grupo__procesador">
				<label for="procesador" class="formulario__label">N° de maquina</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="maquina" id="estado" placeholder="n° de computadora">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">No se reconoce</p>
            </div>
            
			<!--BOTONES DE ENVIO-->
            <!--boton de envio-->
            <div class="form-boton">
					<input type="submit" value="Enviar" name="registrarse">
				</div>
        </form>

		

        
    </main>

    <script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>