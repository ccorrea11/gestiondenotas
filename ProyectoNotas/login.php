<?php

session_start();

	$username=$_POST['nick'];
	
	$pass=$_POST['contraseña'];

	require("serv.php");

//$sql=mysqli_query($mysqli,"SELECT * FROM user WHERE user_name='$username'");
$sql=mysqli_query($mysqli,"SELECT login_est, login_nick, log.rol_id, login_pass FROM tb_login as log inner join tb_rol as rol on (log.rol_id = rol.rol_id) INNER join tb_profesor as pro on (log.profesor_id = pro.profesor_id)  WHERE log.login_nick = '$username' AND log.login_pass='$pass'");

$sql1=mysqli_query($mysqli,"SELECT login_est, login_nick, log.rol_id, login_pass FROM tb_login as log inner join tb_rol as rol on (log.rol_id = rol.rol_id) INNER join tb_admin as ad on (log.admin_id = ad.admin_id)  WHERE log.login_nick = '$username' AND log.login_pass='$pass'");



	
	if($f=mysqli_fetch_assoc($sql))
		if (2==($f['rol_id']) ){
		

		if(($pass==$f['login_pass']) && ($username==$f['login_nick'] && ($f['rol_id']==2) )){
			$_SESSION['user']=$f['login_nick'];
			
			$_SESSION['rol']=$f['rol_id'];
			

			//echo 'Iniciando sesión para '.$_SESSION['user'].' <p>';
			echo "<script>location.href='php/profesores/index.php'</script>";
        }else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.html'</script>";
		}
}





	if($f=mysqli_fetch_assoc($sql1))
		if ((1==$f['rol_id'])){
		
		if(($pass==$f['login_pass']) && ($username==$f['login_nick'] && ($f['rol_id']==1) )){
			$_SESSION['user']=$f['login_nick'];
			
			$_SESSION['rol']=$f['rol_id'];
			

			//echo 'Iniciando sesión para '.$_SESSION['user'].' <p>';
			echo "<script>location.href='menu_admin.php'</script>";
        }else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.html'</script>";
		}
	
	}


?>