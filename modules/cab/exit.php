<?php
if($_GET['page']=='exit'){
	setcookie('access',1,time()-3600,'/');
	header("Location: /index.php?page=main");
}