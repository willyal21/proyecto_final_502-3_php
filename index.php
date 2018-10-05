<html>
	<head>
	
		<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
		<link rel="stylesheet" href="css/general.css">
		<link rel="stylesheet" href="css/menu_izq.css">
		<link rel="stylesheet" href="css/carrito.css">
		<link rel="stylesheet" href="css/FontAwesome_4.1.0.css">
	
		<title>Carrito de compras - SC-502</title>
	</head>
	<body>
		<input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
		<label for="abrir-cerrar">&#9776;<span class="abrir"></span><span class="cerrar"></span></label>
		<div id="sidebar" class="sidebar">
            <ul class="menu">
            <li><a href="#">Catalogo</a></li>
            <li><a href="#">Carrito</a></li>
            <li><a href="#">Caja</a></li>
            </ul>
		</div>
		<div class="contenedor">
			<ul class="hList">
  				<li>
    				<a href="#click" class="menu">
      					<h2 class="menu-title"><i class="fa fa-fw fa-shopping-cart"></i> Carrito</h2>
      					<ul class="menu-dropdown">
                            <li>RESIDENT EVIL 2</li>
                            <li>dog</li>
                            <li>horse</li>
                            <li>cow</li>
                            <li>pig</li>
      					</ul>
    				</a>
  				</li>
			</ul>  
		</div>
		<div id="principal">
    		<h1>Catalogo</h1>
    		<table class="tblCatalogo" id="tablaArticulos">
    			<tr>
      				<td><strong>Artículo</strong></td>
      				<td><strong>Detalle</strong></td>
      				<td><strong>Precio</strong></td>
      				<td><strong>Disponibles</strong></td>
      				<td><strong>Deseadas</strong></td>
      				<td><strong>Sub Total</strong></td>
      				<td><strong>Acciones</strong></td>
    			</tr>
    		</table>
    		<?php
    
            ?>
        </div>
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/articulos.js"></script>
	</body>
</html>