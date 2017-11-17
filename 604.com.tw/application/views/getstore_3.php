<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script>

<?php 

   $stname='';
    if(isset($_GET['name'])){
    	$stname=$_GET['name'];
    }
     $address='';
    if(isset($_GET['addr'])){
    	$address=$_GET['addr'];
    }
     $storeid='';
    if(isset($_GET['cvsspot'])){
    	$storeid=$_GET['cvsspot'];
    }

?>
 $(function(){
	$('#store_name', opener.document).attr("value",'<?echo $stname?>');
	$('#store_no', opener.document).attr("value", '<?echo $storeid?>');
	$('#store_addr', opener.document).attr("value", '<?echo $address?>');
  $('#store_type', opener.document).attr("value", '超商');
	 
	
      window.close();
  }); 
</script>

