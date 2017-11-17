<!DOCTYPE html>
<html>
<head>
 <script src="<?=base_url()?>assests/ckeditor/ckeditor.js"></script>
 
  <script src="<?=base_url()?>assests/ckfinder/ckfinder.js"></script>

 
</head>

 
<h2>新增文章</h2>
 
 <?if(!empty($error)){?>


 <script type="text/javascript">
   alert("請選擇圖片");

 </script>
 <?}?>

  
<?php echo validation_errors(); ?>
<form action="<?=base_url()?>admin/createpost" onsubmit="return validate_form(this)" enctype="multipart/form-data" method="post" accept-charset="utf-8" >
 

  <div class="form-group">
    <label  >標題</label>
    <input  required="required"  type="text" class="form-control"  name ="post_title" placeholder="輸入文章標題">
  </div>
 
 

   
  

  <div class="form-group">
    <label > 內容介紹</label>
    <textarea  required="required" id="editor1"  class="form-control" name="post_text"  placeholder="輸入內文"></textarea>
 <script>
     
          
         var fa= CKEDITOR.replace( 'editor1', {
    });
CKFinder.setupCKEditor(fa,'<?=base_url()?>assests/ckfinder/');
            </script>


     <div class="form-group">

     
   <label>類別</label>
   <select required="required" name ="category_id" class="form-control">

  <?php foreach ($categories as $category): ?>

  <option value="<?php echo $category['postclassid']?>"><?php echo $category['postclassname']?></option>

  <?php endforeach ;?>
</select>
  </div>
 
     <div class="form-group">
   <label>上傳封面</label>
   <input   required="required"   type="file" name="userfile" size="20 ">
   </div>
 

 

  <button type="submit"   class="btn btn-default">新增</button>



</form>

   </div>
    
   </body>
   </html>

 