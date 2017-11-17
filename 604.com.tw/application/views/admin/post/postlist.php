<div >
<h2>文章列表</h2>
<form action="<?=base_url()."admin/postlist"?>" method="post">
 <div class="form-group">
     
  
    <a   style="float: right;" href="<?=base_url()."admin/createpost"?>" class="btn btn-success" role="button">新增文章</a> 
    <br><br>
      <a   style="float: right;" href="<?=base_url()."admin/createpostclass"?>" class="btn btn-info" role="button">管理類別</a> 
        <br><br>
    <input  type="text" class="form-control" value="<?=$shceah?>"  name ="shceah" >

  </div>
<button type="submit" name="action" value="shceahbtn"    class="btn btn-default">查詢</button>
  </form>
  <br>
  <?if(!empty($post)){?>
<table class="table">
	<tr>
		<th>
		圖片
		</th>
		<th>
		標題
		</th>
	 
		<th>
		編輯
		</th>
	</tr>
	
<?foreach($post as $item){?>
<tr>
		<td> <img class="img-rounded" height="50"  src="<? echo base_url();?>assests/img/post/<?php echo $item['post_id'];?>/titleimage.jpg"></td>
		<td width="70%"><?=$item['post_title'];?></td>
		 
		 
		<td><a href=<?=base_url()."admin/editpost/".$item['post_id']?>>編輯</a></td>
	 
</tr>

<?}?>
</table>
<?=$page_links;?>
<?}else{?>
<h2>查無資料! 請重新查詢</h2>
<?}?>
 </div>
