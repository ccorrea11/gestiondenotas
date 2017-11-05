function Inicio(){

	//Boton cerrar en general
		$("#contenido").on("click","button.btncerrar", function(){
			$("#asignaturas").removeClass('active');
			$("#profesores").removeClass('active');
			$("#contenido").html(null);
	    	$("#contenedor").addClass('hide');
		});

	//Menu
		//Asignaturas
		$("#asignaturas").click(function(e){
	     	e.preventDefault();
	        url = $(this).attr("href");

	        $.post( url, function(data) {
	    		if(url!="#")

	    			$("#asignaturas").addClass('active');
	    			$("#profesores").removeClass('active');
	    			$("#contenedor").removeClass('hide');
	            	$("#contenido").html(data);
	            	document.getElementById("titulo").innerHTML = "Asignaturas";

	        });
	    });

//---------------------------------------------------------------------------------------------------------------------------------------//
	
	//Asignaturas
		//Cerrar formulario
			$("#contenido").on("click","button.btncerrarPersona", function(){
				$( "#contenido" ).load("./php/personas/index.php");	
			});
		//Nuevo - Mostrar formulario
			$("#contenido").on("click","button#nuevaAsignatura", function(){
				$( "#contenido" ).load("./php/asignaturas/nuevaAsignatura.php");	
			});
		//Nuevo - Registrar asignatura
			$("#contenido").on("click","button#registrarAsignatura", function(){
				var datos=$("#fasignatura").serialize();
				$.ajax({
					type:"post",
					url:"php/asignaturas/controladorAsignaturas.php",
					data:datos,
					dataType:"html",
					success:function(result){
						$("#contenido" ).load("./php/asignaturas/index.php");
					}
				});
			});
		//Editar - Mostrar formulario
			$("#contenido").on("click","a.editarAsignatura", function(){
				//Recupera datos del fromulario
				var codigo = $(this).attr("codigo");
				$.ajax({
					type:"post",
					url:"./php/asignaturas/editarAsignatura.php",
					data:"codigo=" + codigo,
					dataType:"html"
		        	}) .done(function( result ) {
		        		$("#contenido").html(result);
		        	});
			});
		//Editar - Actualizar datos
			$("#contenido").on("click","button#actualizarAsignatura",function(){
		        var datos=$("#fasignatura").serialize();
		            $.ajax({
					type:"post",
					url:"./php/asignaturas/controladorAsignaturas.php",
					data: datos,
					dataType:"html"
		        	}) .done(function( result ) {
		        		$( "#contenido" ).load("./php/asignaturas/index.php");
		        	});
			});
		//Borrar
			$("#contenido").on("click","a.borrarAsignatura", function(){
				var codigo = $(this).attr("codigo");
				if ( confirm("¿Realmente desea borrar el registro?")){		
					$.ajax({
		        		method: "post",
		            	url: "./php/asignaturas/controladorAsignaturas.php",
		            	data: {codigo: codigo, accion:'borrar'},
		            	dataType: "html"
		        	})  .done(function( result ) {
		        		$( "#contenido" ).load("./php/asignaturas/index.php");
		        	});
				}
			});
}