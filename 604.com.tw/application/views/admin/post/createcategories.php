<h2>新增文章類別 </h2>
<a href="<?=base_url()?>admin">首頁</a><br>
<?php 	echo validation_errors();?>

<?php echo form_open_multipart('admin/createpostclass');?>
<div class="form-group">
<label>類別名稱</label>
<input type="text" class="form-control" name="name" placeholder="Enter name">
</div>
<button type="submit" class ="btn btn-default" >送出</button>
</form>
<table class="table">
<tr>
	<th>
	類別名稱
	</th>
	<th>
	刪除
	</th>
	</tr>
	<?foreach($post  as $item){?>
	<tr>
	<td><?=$item['postclassname']?></td>
	<td><a href=<?=base_url();?>admin/deletepostclass/<?=$item['postclassid'];?>>刪除●<?=$item['postclassname']?>●</a></td>
	</tr>
<?}?>
</table>