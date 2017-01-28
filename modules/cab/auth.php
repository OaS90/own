<?php	
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
	}
	else{
		$okreg = 'нет такого пользователя';
	}

	
}
