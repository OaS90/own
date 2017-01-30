<?php



if (isset($_SESSION['user'])){
	$res = q("
		SELECT *
		FROM `users`
		WHERE `id` = ".$_SESSION['user']['id']."
		LIMIT 1
	");
	
	$_SESSION['user'] = mysqli_fetch_assoc($res);
	if($_SESSION['user']['activate'] != 1){
		header("Location: index.php?module=cab&page=exit");
		exit();
	} 
}
elseif(isset($_COOKIE['autoauth'])){
	$res = q("
		SELECT *
		FROM `users`
		WHERE `hash` = '".$_COOKIE['autoauth']."'
	");
	if(mysqli_num_rows($res)){
		$_SESSION['user'] = mysqli_fetch_assoc($res);
	}
}
//проверка на доступ к странице
	if(!isset($_SESSION['user']) || $_SESSION['user']['access'] != 1){
	
	}

	