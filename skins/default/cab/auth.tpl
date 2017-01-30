<div class="auth">
  <form action="/index.php?module=cab&page=auth" method="post" >
		<table>
    	  <tr>
			<td>Login </td>
			<td><input type="text" name="login"></td>
			<td><?php if(isset($status) &&  $status!= 'OK'){echo $okreg;}?></td>
		  </tr>
		  <tr>
			<td>Password</td>
			<td><input type="password" name="pass"></td>
			<td></td>
		  </tr>	
<<<<<<< HEAD
		  <tr>
			<td><input type="checkbox" name="auto"></td>
			<td>Автоматическая авторизаяция</td>
		  </tr>
=======
>>>>>>> 88b1fe910098d82fe577a4900ad5e0d677ad749f
		</table>
	<label class="field"><a href="index.php?module=cab&page=reg">Регистрация</a> / <input name="send" type="submit" value="login"></label>
  </form>
</div>
<<<<<<< HEAD
<?php
if(isset($okreg)){
	echo $okreg;
}
if(isset($_SESSION['user'])){
?>
<a href="index.php?module=cab&page=exit" style="display:block;"> EXIT </a>
<?php
}
=======
<div class="clear">
<?php
	echo $okreg;
	
>>>>>>> 88b1fe910098d82fe577a4900ad5e0d677ad749f
	echo '<pre>';
	print_r($_COOKIE);
	print_r($_SESSION);
	echo '</pre>';