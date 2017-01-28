<div class="auth">
  <form action="/index.php?module=cab&page=auth" method="post" >
		<table>
    	  <tr>
			<td>Login </td>
			<td><input type="text" name="login"></td>
		  </tr>
		  <tr>
			<td>Password</td>
			<td><input type="text" name="pass"></td>
		  </tr>	
		</table>
	<label class="field"><a href="index.php?module=cab&page=reg">Регистрация</a> / <input name="send" type="submit" value="login"></label>
  </form>
</div>
<div class="clear">
<?php
	echo $okreg;
	
	echo '<pre>';
	print_r($_COOKIE);
	print_r($_SESSION);
	echo '</pre>';