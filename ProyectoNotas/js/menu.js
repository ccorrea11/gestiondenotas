// $(".submenu").click(function(){
// 	$(this).children("ul").slideToggle();
// 	})

// $(".ul").click(function(c){
// 		c.stopPropagation();
// 	})

$('.menu-bar').on('click', function(){
	$('.contenido').toggleClass('abrir');

	})

$('.logout').on('click', function(){
	<?php
	header("location:login.php");
	?>
	})
