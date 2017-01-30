<?php	
<<<<<<< HEAD

=======
>>>>>>> 88b1fe910098d82fe577a4900ad5e0d677ad749f
if(isset($_POST['login'],$_POST['pass'])){
	$res = q("
		SELECT *
		FROM `users` 
		WHERE `login`    = '".mres($_POST['login'])."' 
		AND `password` = '".MyHash(mres($_POST['pass']))."'
		AND `activate` = 1
	");
	if(mysqli_num_rows($res)){
		$_SESSION['user'] = mysqli_fetch_assoc($res);
<<<<<<< HEAD
		$status = 'OK';
		if(isset($_POST['auto'])){
			 q("
				UPDATE `users`
				SET `hash` = '".MyHash($_SESSION['user']['id'].$_SESSION['user']['login'].$_SESSION['user']['email'])."' 
				WHERE `id` = '".$_SESSION['user']['id']."'
			");
			setcookie('autoauth',$_SESSION['user']['hash'],time()+3600*24*30);
			header("Location: /index.php?module=cab&page=auth");
		}
=======
>>>>>>> 88b1fe910098d82fe577a4900ad5e0d677ad749f
	}
	else{
		$okreg = 'нет такого пользователя';
	}
<<<<<<< HEAD
}
=======
>>>>>>> 88b1fe910098d82fe577a4900ad5e0d677ad749f

	
}
