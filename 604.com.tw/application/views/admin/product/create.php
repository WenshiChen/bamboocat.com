<!DOCTYPE html>
<html>
<head>
 <script src="<?=base_url()?>assests/ckeditor/ckeditor.js"></script>
 
  <script src="<?=base_url()?>assests/ckfinder/ckfinder.js"></script>

 
</head>

 
<h2>新增商品</h2>
 
 <?if(!empty($error)){?>


 <script type="text/javascript">
   alert("請選擇圖片");

 </script>
 <?}?>

  
<?php echo validation_errors(); ?>
<form action="<?=base_url()?>admin/product_create" onsubmit="return validate_form(this)" enctype="multipart/form-data" method="post" accept-charset="utf-8" >
 

  <div class="form-group">
    <label  >品名</label>
    <input  required="required"  type="text" class="form-control"  name ="prod_name" placeholder="輸入商品名稱">
  </div>
  <div class="form-group">
    <label  >原價</label>
    <input required="required" type="text" class="form-control"  name ="prod_oprice" placeholder="原價">
  </div>
  <div class="form-group">
    <label  >價格</label>
    <input required="required" type="text" class="form-control"  name ="prod_newprice" placeholder="價格">
  </div>

   <div class="form-group">
    <label  >品號</label>
    <input  type="text" class="form-control"  name ="prod_erpid" placeholder="品號">
  </div>
   <div class="form-group">
    <label  >倉庫代號</label>
    <input  type="text" class="form-control"  name ="prod_erpwhse" placeholder="倉庫代號">
  </div>

  <div class="form-group">
    <label > 內容介紹</label>
    <textarea  required="required" id="editor1"  class="form-control" name="prod_text"  placeholder="輸入商品介紹	"></textarea>
 <script>
     
          
         var fa= CKEDITOR.replace( 'editor1', {
    });
CKFinder.setupCKEditor(fa,'<?=base_url()?>assests/ckfinder/');
            </script>


     <div class="form-group">
   <label>類別</label>
   <select required="required" name ="category_id" class="form-control">

  <?php foreach ($categories as $category): ?>

  <option value="<?php echo $category['productclass_id']?>"><?php echo $category['productclass_name']?></option>

  <?php endforeach ;?>
</select>
  </div>
 
     <div class="form-group">
   <label>上傳圖片</label>
   <input   required="required"   type="file" name="userfile" size="20 ">
   </div>
    <h2>新增規格</h2>
   <div class="form-group">
    <label  >規格1</label>
    <input type="text" class="form-control"  name ="sp1" placeholder="輸入商品規格">
  </div> 
  <div class="form-group">
    <label  >規格2</label>
    <input type="text" class="form-control"  name ="sp2" placeholder="輸入商品規格">
  </div> 
  <div class="form-group">
    <label  >規格3</label>
    <input type="text" class="form-control"  name ="sp3" placeholder="輸入商品規格">
  </div>
  <h2>上架設定</h2>

  <label   id ="radio1"  >
     <input type="radio" id="radio1r" name="prod_shelves" value="draft"  checked >草搞</label>

  <label   id ="radio2"  >
     <input type="radio" id="radio2r" name="prod_shelves" value="up"  >上架</label>

          <label id ="radio3"  >
       <input type="radio" id="radio3r" name="prod_shelves" value="down"     > 下架</label>
       <br><br>

  <button type="submit"   class="btn btn-default">新增</button>



</form>

   </div>
    
   </body>
   </html>

 