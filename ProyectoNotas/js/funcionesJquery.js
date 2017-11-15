function Inicio(){
	$("#opciones a").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado Principal");
                	$("#contenido" ).html(data);
        });
     });
	// boton cerrar
	$("#contenido").on("click","button.btncerrar",function(){
		$("#contenedor").removeClass("show");
       	$("#contenedor").addClass("hide");
	})
	// boton cerrar listado persona
	$("#contenido").on("click","button.btncerrar2",function(){
		$("#titulo").html("Listado profesores");
		$( "#contenido" ).load("./php/profesores/index.php");	
	})


	// borrar personas
	$("#contenido").on("click","a.borrar",function(){
		//Recupera datos del formulario
		var codigo = $(this).attr("codigo");
		console.log(codigo);
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	url: "./php/profesores/controladorProfesor.php",
            	data: {codigo: codigo, accion:'borrar'},
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado profesores");
        		$( "#contenido" ).load("./php/profesores/index.php");
        	});

		}
	});
	// editar persona
	$("#contenido").on("click","a.editar",function(){
		$("#titulo").html("Editar profesores");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/profesores/editarProfesor.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});
	// actualizar persona 
	$("#contenido").on("click","button#actualizar",function(){	
		$("#titulo").html("Listado profesores");
        var datos=$("#fpersona").serialize();
            $.ajax({
			type:"post",
			url:"./php/profesores/controladorProfesor.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/profesores/index.php");
        	});
	});
	
	// // registrar nueva persona
	$("#contenido").on("click","button#nuevo",function(){
		$("#titulo").html("Nuevo Profesor");
		$( "#contenido" ).load("./php/profesores/nuevoProfesor.php");	
	});

	// guardar persona
	$("#contenido").on("click","button#grabar",function(){		
		var datos=$("#fpersona").serialize();
		console.log(datos);
		$.ajax({
			type:"post",
			url:"./php/profesores/controladorProfesor.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado profesores");
				$("#contenido" ).load("./php/profesores/index.php");
			}
		})
	});	



//EMPRESA

// nueva empresa
$("#contenido").on("click","button#nuevo1",function(){
		$("#titulo").html("Nueva Empresa");
		$( "#contenido" ).load("./php/empresa/nuevaEmpresa.php");	
	})

// Grabar empresa
$("#contenido").on("click","button#grabar1",function(){
		var datos=$("#fempresa").serialize();		
		$.ajax({
			type:"post",
			url:"./php/empresa/controladorEmpresa.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Empresas");
				$("#contenido" ).load("./php/empresa/index.php");
			}
		})
	});	
// cerrar empresa
$("#contenido").on("click","button.btncerrar3",function(){
		$("#titulo").html("Listado empresas");
		$( "#contenido" ).load("./php/empresa/index.php");	
	})
// borrar empresa
$("#contenido").on("click","a.borrar1",function(){
		//Recupera datos del formulario
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	url: "./php/empresa/controladorEmpresa.php",
            	data: {codigo: codigo, accion:'borrar'},
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Empresas");
        		$( "#contenido" ).load("./php/empresa/index.php");
        	});

		}
	});
// editatar empresa
$("#contenido").on("click","a.editar1",function(){
		$("#titulo").html("Editar Empresa");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/empresa/editarEmpresa.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

// actualizar empresa
$("#contenido").on("click","button#actualizar1",function(){		
		$("#titulo").html("Listado Empresas");
        var datos=$("#fempresa").serialize();
            $.ajax({
			type:"post",
			url:"./php/empresa/controladorEmpresa.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/empresa/index.php");
        	});
	});

// contrato por personas

$("#contenido").on("click","a.empleos",function(){
		var clase = $(this).attr("clase");
		$("#titulo").html("Contratos por "+clase);
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/contrato/index.php",
			data:{codigo: codigo, clase:clase},
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});

// agregar contrato
$("#contenido").on("click","button#nuevo2",function(){
		$("#titulo").html("Nuevo contrato");
		$( "#contenido" ).load("./php/contrato/nuevocontrato.php");	
	});
// grabar contrato
$("#contenido").on("click","button#grabar2",function(){		
		var datos=$("#fcontrato").serialize();
		$.ajax({
			type:"post",
			url:"./php/contrato/controladorContrato.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Contratos");
				$("#contenido" ).load("./php/contrato/index.php");
			}
		})
	});
// editar contratos
$("#contenido").on("click","a.editar2",function(){
		$("#titulo").html("Editar Contratos");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/contrato/editarcontrato.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});
// actualizar contratos
$("#contenido").on("click","button#actualizar2",function(){
		$("#titulo").html("Listado Contratos");
        var datos=$("#fcontrato").serialize();
        console.log(datos);
            $.ajax({
			type:"post",
			url:"./php/contrato/controladorContrato.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/contrato/index.php");
        	});
	});
// borrar contrato
$("#contenido").on("click","a.borrar2",function(){
		//Recupera datos del formulario
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	url: "./php/contrato/controladorContrato.php",
            	data: {codigo: codigo, accion:'borrar'},
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Contratos");
        		$( "#contenido" ).load("./php/contrato/index.php");
        	});

		}
	});
// boton cerrar 
$("#contenido").on("click","button.btncerrar4",function(){
		$("#titulo").html("Listado contratos");
		$( "#contenido" ).load("./php/contrato/index.php");	
	});

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
			$("#contenido").on("click","button.btncerrarAsignatura", function(){
				$( "#contenido" ).load("./php/asignaturas/index.php");	
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
