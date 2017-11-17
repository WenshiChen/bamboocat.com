<!DOCTYPE html>
<html>
<head>
 <script src="<?=base_url()?>assests/ckeditor/ckeditor.js"></script>
 
  <script src="<?=base_url()?>assests/ckfinder/ckfinder.js"></script>

 
</head>

 
<h2>修改商品(編號:<?=$productid?>)</h2>
 
  
<?$prod_lock=$product['prod_lock'];?>
  
<?php echo validation_errors(); ?>
<form action=<?=base_url()?>admin/productedit/<?=$productid?> method="post">
 

  <div class="form-group">
    <label  >品名</label>
    <input  required="required" <?if($prod_lock==1)echo "readonly";?> type="text" class="form-control"  name ="prod_name" value='<?=$product['prod_name']?>' >
  </div>
  <div class="form-group">
    <label  >原價</label>
    <input required="required" <?if($prod_lock==1)echo "readonly";?> type="text" class="form-control"  name ="prod_oprice" value='<?=$product['prod_oprice']?>'>
  </div>
  <div class="form-group">
    <label  >價格</label>
    <input required="required" <?if($prod_lock==1)echo "readonly";?> type="text" class="form-control"  name ="prod_newprice" value='<?=$product['prod_newprice']?>'>
  </div>
  <div class="form-group">
    <label  >品號</label>
    <input  type="text" class="form-control"  name ="prod_erpid" value='<?=$product['prod_erpid']?>'>
  </div>
  <div class="form-group">
    <label  >倉庫代號</label>
    <input  type="text" class="form-control"  name ="prod_erpwhse" value='<?=$product['prod_erpwhse']?>'>
  </div>
  <div class="form-group">
    <label>內容介紹</label>
    <textarea  required="required" id="editor1"  class="form-control" name="prod_text"  ><?=stripslashes($product['prod_text']);?></textarea>
 <script>
     
          
         var fa= CKEDITOR.replace( 'editor1', {
    });

CKFinder.setupCKEditor(fa,'<?=base_url()?>assests/ckfinder/');

            </script>


     <div class="form-group">
   <label>類別</label>
   <select   name ="category_id" class="form-control">

  <?php foreach ($categories as $category): ?>


    <?if($category['productclass_id']==$prod_class['productclass_id']){?>
 <option selected  value="<?php echo $category['productclass_id']?>"><?php echo $category['productclass_name']?></option>
    <?}else{?>
  <option value="<?php echo $category['productclass_id']?>"><?php echo $category['productclass_name']?></option>
  <?}?>

  <?php endforeach ;?>
</select>
  </div>
   <button type="submit" name="action" value="button1"  class="btn btn-default">存檔</button>

</form>
  <form action=<?=base_url()?>admin/productedit/<?=$productid?> onsubmit="return validate_form(this)" enctype="multipart/form-data" method="post" accept-charset="utf-8" >
     <div class="form-group">
     <br>
   <label>上傳圖片</label><br><br>
    <img height="100"  src="<? echo base_url();?>assests/img/product/<?php echo $product['prod_id'];?>/titleimage.jpg"><br><br>
   <input   required="required"   type="file" name="userfile" size="20 ">
   </div>
    <button type="submit"  name="action" value="button2"  class="btn btn-default">存檔</button>



</form>
<form action=<?=base_url()?>admin/productedit/<?=$productid?> method="post">
    <h2>規格</h2>
    <?$index=1;?>
    <?foreach($productsp as $item){?>

       <div class="form-group">
    <label  >規格<?=$index;?></label>
    <input type="text" class="form-control" <?if($prod_lock==1)echo "readonly";?> name =<?="sp".$index;?> value=<?=$item['sp_name']?>>
    <input type="hidden" name=hidsp<?="sp".$index;?> value=<?=$item['sp_id']?>>
  </div> 
  
    <?$index++;}?>
    
    <?for(;$index<=6;$index++){?>
      <div class="form-group">
    <label  >規格<?=$index;?></label>
    <input type="text" class="form-control"  name =<?="sp".$index;?>>
    <input type="hidden" name=hidsp<?="sp".$index;?> value=-1>
  </div> 

   <?}?>
 <button type="submit"  name="action" value="button3"  class="btn btn-default">存檔</button>



<form action=<?=base_url()?>admin/productedit/<?=$productid?> method="post">

  <form>
  <h2>上架設定</h2>
<?$prod_shelves= $product['prod_shelves']?>
  <label   id ="radio1"  >

  <?if($prod_lock!=1) {?>
     <input type="radio" id="radio1r" name="prod_shelves" value=0 <?if($prod_shelves==0){?> checked<?}?> >草搞</label>
<?}?>
 
<label id ="radio2"  >
       <input type="radio" id="radio2r" name="prod_shelves" value=1   <?if($prod_shelves==1){?> checked<?}?>   > 上架</label>


          <label id ="radio3"  >
       <input type="radio" id="radio3r" name="prod_shelves" value=2   <?if($prod_shelves==2){?> checked<?}?>   > 下架</label>
       <br><br>

  <button type="submit"  name="action" value="button4"   class="btn btn-default">存檔</button>



</form>

   </div>
    
   </body>
   </html>

 