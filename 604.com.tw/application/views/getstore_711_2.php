<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script>

<?php 

   $stname='';
    if(isset($_POST['storename'])){
    	$stname=$_POST['storename'];
    }
     $address='';
    if(isset($_POST['address'])){
    	$address=$_POST['address'];
    }
     $storeid='';
    if(isset($_POST['storeid'])){
    	$storeid=$_POST['storeid'];
    }

?>
 $(function(){
	$('#store_name', opener.document).attr("value",'<?echo $stname?>');
	$('#store_no', opener.document).attr("value", '<?echo $storeid?>');
	$('#store_addr', opener.document).attr("value", '<?echo $address?>');
  $('#store_type', opener.document).attr("value", '7-11');
	 
	
      window.close();
  }); 
</script>

