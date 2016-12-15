<!DOCTYPE html>
<html>
<head>
  <title>My own site</title>
  <meta http-equiv="content-type" content="text/html" charset=utf-8 />
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<div class="main">
  <div class="header">
    <a href="/" class="logo"></a>
	  <div class="nav">
		<a href="index.php?page=main" class="active">HOME</a>
		<a href="index.php?module=comments">COMMENTS</a>
	    <a href="index.php?module=fm&page=fm">FM</a>
	    <a href="index.php?module=cab&page=auth">CAB</a> 
		<a href="index.php?module=game">GAME</a>
		<a href="index.php?module=goods">GOODS</a>
<?php 
if ($_SERVER['REMOTE_ADDR'] == '127.0.1.1' || (isset($_COOKIE['access']))){
	echo '<a href="index.php?page=apanel">APANEL</a>';
	echo '<a href="index.php?module=cab&page=exit">EXIT</a>';
}
?>
	  </div>
	  <div class="sn">
		<a href="#" class="t"></a>
		<a href="#" class="f"></a>
	    <a href="#" class="dot"></a>
	  </div>
	 <div class="clear"></div>
  </div>
<div id="content">
<?php 
	include $_GET['module'].'/'.$_GET['page'].'.tpl';
?>
</div>
<div class="bottom">
  <a href="#">Place</a> &copy; 
<?php 
echo CREATED;
if (CREATED !== date('Y')){
	echo ' - ' . date('Y');
} 
?>
  <a href="#">Privacy policy</a>
</div>
</div>
</body>
</html>