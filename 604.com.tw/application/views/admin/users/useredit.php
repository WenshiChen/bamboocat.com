<?=print_r($user);?>
<form action="<?=base_url()."admin/useredit/".$user['user_accnum']?>">
<table  class="table">
<tr>
	<td width="10%">帳號:</td>
	<td><?=$user['user_accnum']?></td>

</tr>


<tr>
	<td >密碼:</td>
	<td><input type="password" name="password"></td>

</tr>

 
 <tr>
<td>確認密碼:</td>
<td><input type="password" name="repassword"></td>
</tr>
<tr>
	<td >姓名:</td>
	<td><input type="text" value="<?=$user['user_name']?>" name="email"></td>

</tr>
<tr>
	<td>email:</td>
	<td><input type="text" value="<?=$user['user_email']?>" name="email"></td>

</tr>

	</table>

	<input type="submit" name="">
</form>