<div class="fight">
<p>Client HP: <?php echo $_SESSION['client'];?></p>
<div class="client alc">  
</div>
<div class="server alc">  
</div>
<p>Server HP : <?php echo $_SESSION['server'];?></p>
<div class="clear"></div>
<div class="fight_form">
<form action="" method="post">
  <table>
    <tr>
	  <td>
	   <input type="text" name="target">
	   <input type="submit" name="punch" value="Ударить">
	  </td>
	</tr> 
	<tr>
	  <td>
<?php
if($iss){
	echo '<div class="punch_info">';
	echo $info;
	echo '</div>';
}
?>
	  </td>
	</tr>
  </table>
</form> 
</div>

</div>