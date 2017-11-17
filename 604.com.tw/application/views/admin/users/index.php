
<div >
<h2>使用者</h2>
<form action="" method="post">
 <div class="form-group">
    
      <a   style="float: right;" href="" class="btn btn-success" role="button">新增使用者</a> 
   		 
       
      <br>
       <br>	
    <input  type="text" class="form-control" value=""  name ="shceah" >
  </div>
<button type="submit" name="action" value="shceahbtn"    class="btn btn-default">查詢</button>
  </form>
  <br>
 
<table class="table">
	<tr>
		<th>
		姓名
		</th>
		<th>
		Email	
		</th>
		<th>
		編輯
		</th>
		<th>
		身分切換
		</th>
		<th>
		刪除
		</th>
	</tr>
	<?foreach($users as $item):?>
	<tr>
	<td>
	<?if($item['user_typesof']=='facebook'){?>
	<a href="https://facebook.com/<?=$item['user_accnum']?>"><?=$item['user_name'];?></a>
		<?}else{ 
		echo $item['user_name'];
		 }?>

	</td>
	<td><?=$item['user_email'];?></td>
	<td><a href="<?=base_url().'admin/useredit/'.$item['user_accnum'];?>">編輯<a></td>
	<td><a href="<?=base_url().'admin/userchange/'.$item['user_accnum'];?>">身份切換<a></td>
	<td><a href="<?=base_url().'admin/userdelete/'.$item['user_accnum'];?>">刪除此人<a></td>
	</tr>
	<?endforeach;?>
 
 
</table>
 
 
 </div>

