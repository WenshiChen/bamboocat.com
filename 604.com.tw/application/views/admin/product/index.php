
<div >
<h2>商品列表</h2>
<form action="<?=base_url()."admin/product"?>" method="post">
 <div class="form-group">
    
      <a   style="float: right;" href="<?=base_url()."admin/product/create"?>" class="btn btn-success" role="button">新增商品</a> 
   		<br>
       <br>	
      <a   style="float: right;" href="<?=base_url()."admin/product/createcategories"?>" class="btn btn-info" role="button">管理類別</a> 
      <br>
       <br>	
    <input  type="text" class="form-control" value="<?=$shceah?>"  name ="shceah" >
  </div>
<button type="submit" name="action" value="shceahbtn"    class="btn btn-default">查詢</button>
  </form>
  <br>
  <?if(!empty($product)){?>
<table class="table">
	<tr>
		<th>
		圖片
		</th>
		<th>
		品名
		</th>
		<th>
		價格
		</th>
		<th>
		狀態
		</th>
		<th>
		編輯
		</th>
	</tr>
	
<?foreach($product as $item){?>
<tr>
		<td> <img class="img-rounded" height="50"  src="<? echo base_url();?>assests/img/product/<?php echo $item['prod_id'];?>/titleimage.jpg"></td>
		<td width="70%"><?=$item['prod_name'];?></td>
		<td><?=$item['prod_newprice'];?></td>
		<td><?
		if($item['prod_shelves']==0){
			echo "◆草稿◆";
		}elseif($item['prod_shelves']==1){
			echo "上架";
		}elseif($item['prod_shelves']==2){
			echo "<p style='color:#ff0000'>下架</p>";
		}
		


		?></td>
		<td><a href=<?=base_url()."admin/productedit/".$item['prod_id']?>>編輯</a></td>
	 
</tr>

<?}?>
</table>
<?=$page_links;?>
<?}else{?>
<h2>查無資料! 請重新查詢</h2>
<?}?>
 </div>

 