<?php	
if($_SESSION['client'] < $_SESSION['server']){
	$round = "You Lose!";
}
else{
	$round =  "You win";
}
session_destroy();
