window.onload = function() {
	
	CARGA_ARTICULOS();
	
};

function CANTIDAD(accion,origen){
	
	if(accion == 1){
		
		if(parseInt($("#stok_"+origen+"")[0].textContent) > parseInt($("#cantidad_"+origen+"")[0].value)){
			
			var nCanti = parseInt($("#cantidad_"+origen+"")[0].value) + 1;
			$("#cantidad_"+origen+"")[0].value = nCanti;
			
		}
		
		
	}else if(accion == 0){
		
		if(parseInt($("#cantidad_"+origen+"")[0].value) > 1){
			
			var nCanti = parseInt($("#cantidad_"+origen+"")[0].value) - 1;
			$("#cantidad_"+origen+"")[0].value = nCanti;
			
		}
		
		
		
	}
	
}

function CARGA_ARTICULOS(){
	
	var datos = {
			"query" : "SELECT * FROM articulos;",
			"tipo" : 1,
			"columnas" : ['id','codigo','detalle','cantidad','imagen','marca','precio']
		};
		
		
		$.ajax({
			url : "bd/conexion.php",
			type : "POST",
			data : datos,
			beforeSend : function(data) { // antes de llamar el php
			
				//alert("LLAMANDO PHP DE CONECCION -> "+data);
				
			},
			success : function(data) { // cuando el php responde

				try {

					var dataJson = eval(data);

					for(var i = 0; i < dataJson.length; i++){
						
			            $("<tr id=tr_"+dataJson[i].id+">"
	            		+ "<td>"+dataJson[i].detalle+"</td>"
	            		+ "<td>"+dataJson[i].marca+"</td>"
	            		+ "<td>"+new Intl.NumberFormat("en-IN").format(dataJson[i].precio)+"</td>"
	            		+ "<td id=stok_"+dataJson[i].id+">"+dataJson[i].cantidad+"</td>"
	            		+ "<td><button type='button' id=btnMenos_"+dataJson[i].id+" onclick='CANTIDAD(0,"+dataJson[i].id+")'>-</button>" 
	            		+ "<input class='intblart' value=1 id=cantidad_"+dataJson[i].id+">" 
	            		+ "<button type='button' id=btnMas_"+dataJson[i].id+" onclick='CANTIDAD(1,"+dataJson[i].id+")'>+</button></td>"
	            		+ "<td>0.00</td>"
	            		+ "<td><button type='button'>Agregar al carrito</button></td>"
	            		+ "</tr>").appendTo("#tablaArticulos");
						
					}
				
				} catch (err) {
					
					alert("Error --> " + err);
					
				}
				
			},
			error : function(data) { // eror por el php
				
				alert("ERROR AL LLAMAR EL PHP ->"+data.status);
				
			}
		});
	
}