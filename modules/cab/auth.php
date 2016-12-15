<?php	
if(isset($_POST['send'],$_POST['login'],$_POST['pass'],$_POST['email']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		if(($_POST['login'] == 'admin' && $_POST['pass'] == '123')){
			setcookie('access','1',time()+3600*24,'/');
			header("Location: index.php");
			exit;
		}
}		


