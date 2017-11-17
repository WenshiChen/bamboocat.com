<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <link href="<? echo base_url();?>assests/static/css/bootstrap.min.css" rel="stylesheet">
   	<script src="<?=base_url();?>assests/onepage/01/js/jquery-3.2.1.min.js"></script> 
</head>
<body>



<h2>test</h2>
 
</div> 

 <form action="https://acq.esunbank.com.tw/ACQTrans/esuncard/txnf014s" method="post">
 <table>
 	<tr>
 		<td>data</td>
 		<td>
 			{"ONO":"201708090323218","U":"http://localhost/test/eu","MID":"8080537837","TA":"800","TID":"EC000001"}
 			<textarea style="display:none;" name="data">{"ONO":"201708090323218","U":"http://localhost/test/eu","MID":"8080537837","TA":"800","TID":"EC000001"}</textarea>


 		</td>

 	</tr>
 	<tr>
 		<td>mac</td>
 		<td>c5a05be27a659236c017547c8c87d94a64f7d97ab5217d82dfd064f5880bd3b2
 		<input type="hidden" name="mac"
 		 value="c5a05be27a659236c017547c8c87d94a64f7d97ab5217d82dfd064f5880bd3b2">
 		</td>

 	</tr>
 	<tr>
 		<td>ksn</td>
 		<td>1
		<input type="hidden" name="ksn" value="1">

 		</td>


 	</tr>
 	<tr>
 		<td>action&nbsp</td>
 		<td>https://acq.esunbank.com.tw/ACQTrans/esuncard/txnf014s</td>

 	</tr>
 </table>
  
  <input type="submit" value="OK"  >

 </form>
 
   
 
   </body>

 
  

 
</html>