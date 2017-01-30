<?php
setcookie('autoauth',$_SESSION['user']['hash'],time()-3600);
session_unset();
session_destroy();
	
header("Location: /index.php?module=cab&page=auth");
	
