<div class="auth">
<form action="" method="post" >
		<table>
    	  <tr>
			<td>Login</td>
			<td><input type="text" name="login" value="<?php if(isset($errors['login'])){echo hsc($errors['login']);}?>"></td>
		  </tr>
		  <tr>
			<td>Password</td>
			<td><input type="text" name="pass" value="<?php if(isset($errors['pass'])){echo hsc($errors['pass']);}?>"></td>
		  </tr>	
		  <tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php if(isset($errors['email'])){echo hsc($errors['email']);}?>"></td>
		  </tr>
		</table>
	<label class="field"><input name="send" type="submit" value="Registration"></label>
  </form>
</div>
<div class="clear">
<?php
