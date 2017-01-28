<?php
if(isset($_POST['login'],$_POST['email'],$_POST['pass'],$_POST['send'])){
	$errors = array();
	if(empty($_POST['login'])){
		$errors['login'] = 'Вы не ввели логин';
	}
	elseif(mb_strlen($_POST['login']) < 2){
		$errors['login'] = 'логин слишком короткий';
	}
	elseif(mb_strlen($_POST['login']) > 16){
		$errors['login'] = 'логин слишком длинный';
	}
	if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$errors['email'] = 'Вы не ввели email';
	}
	if(empty($_POST['pass'])){
		$errors['pass'] = 'Вы не ввели пароль';	
	}
	
	if(!count($errors)){
		$res = q("
		SELECT `id`
		FROM `users`
		WHERE `login` = '".mres($_POST['login'])."'
		LIMIT 1
		");
		if(mysqli_num_rows($res)){
			$errors['login'] = 'Такой логин уже существует!';
		}
	}
	
	
	if(!count($errors)){
		q(
		"INSERT INTO `users` SET
		`login`    = '".mres($_POST['login'])."',
		`email`	   = '".mres($_POST['email'])."',
		`password` = '".MyHash(mres($_POST['pass']))."',
		`hash`     = '".MyHash($_POST['login'].$_POST['email'])."'	
		") or die(mysqli_error($link));
		
		$id = mysqli_insert_id($link);
		$_SESSION['regok'] = 'OK';
		
		Mail::$to = $_POST['email'];
		Mail::$sub = 'Регистрация';
		Mail::$text = 'Пройдите по сслыке для подтверждения регистрация ' .CORE::$DOMAIN.'index.php?module=cab&page=activate&id='.$id.'&hash='.MyHash($_POST['login'].$_POST['email']);
		
		;
		Mail::send();
		header("Location: index.php?module=cab&page=auth");
		exit();
	}
}