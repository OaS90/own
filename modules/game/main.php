<?php
//Game controller
if(!isset($_SESSION['client'])){
	$_SESSION['client'] = 10;
	$_SESSION['server'] = 10;
}
$iss  = isset($_POST['punch'],$_POST['target']) && ($_POST['target'] >=1 && $_POST['target'] <=3);
$r = rand(1,4);
if($iss){
	if($_POST['target'] == rand(1,3)){	
		$_SESSION['client'] = $_SESSION['client'] - $r ;
		$info = 'Вам нанесли ' . $r . ' урона';
	}
	else{
		$_SESSION['server'] = $_SESSION['server'] - $r;	
		$info = 'Вы нанесли ' . $r . ' урона';
	}
}
if($_SESSION['client'] <= 0 || $_SESSION['server'] <=0){ 
	header("Location: index.php?module=game&page=gameover");
	exit;
}	

