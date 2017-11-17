<!DOCTYPE html>
<html>
<head>
 <script src="<?=base_url()?>assests/ckeditor/ckeditor.js"></script>
 
  <script src="<?=base_url()?>assests/ckfinder/ckfinder.js"></script>

 
</head>

 
<h2>修改文章</h2>
 
 <?if(!empty($error)){?>


 <script type="text/javascript">
   alert("請選擇圖片");

 </script>
 <?}?>

  
<?php echo validation_errors(); ?>
<form action="<?=base_url()?>admin/editpost/<?=$post['post_id']?>" onsubmit="return validate_form(this)" enctype="multipart/form-data" method="post" accept-charset="utf-8" >
 

  <div class="form-group">
    <label  >標題</label>
    <input  required="required"  type="text" class="form-control"  name ="post_title" value="<?=$post['post_title']?>" placeholder="輸入文章標題">
  </div>
 
 

   
  

  <div class="form-group">
    <label > 內容介紹</label>
    <textarea  required="required" id="editor1"  class="form-control" name="post_text"   placeholder="輸入內文"><?=stripslashes($post['post_text']);?></textarea>
 <script>
     
          
         var fa= CKEDITOR.replace( 'editor1', {
    });
CKFinder.setupCKEditor(fa,'<?=base_url()?>assests/ckfinder/');
            </script>


     <div class="form-group">

     
   <label>類別</label>
   <select required="required" name ="category_id" class="form-control">

 


  <?php foreach ($categories as $category): ?>


    <?if($category['postclassid']==$post['post_classid']){?>
 <option selected  value="<?php echo $category['postclassid']?>"><?php echo $category['postclassname']?></option>
    <?}else{?>
  <option value="<?php echo $category['postclassid']?>"><?php echo $category['postclassname']?></option>
  <?}?>

  <?php endforeach ;?>



</select>
  </div>
 
     <div class="form-group">
   <label>上傳封面</label>
     <img height="100"  src="<? echo base_url();?>assests/img/post/<?php echo $post['post_id'];?>/titleimage.jpg"><br><br>
   <input     type="file" name="userfile" size="20 ">
   </div>
 

 

  <button type="submit"  style="float: left;"  class="btn btn-info">確定修改</button>



</form>
 
<form action="<?=base_url()?>admin/deletepost"  enctype="multipart/form-data" method="post">
<input type="hidden" name="post_id" value="<?=$post['post_id']?>">

<button type="submit" style="float: right;"   class="btn btn-danger">刪除文章</button>
</form>

   </div>
    
   </body>
   </html>

 