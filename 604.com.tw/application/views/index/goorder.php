
<?php echo form_open(base_url()."goorder");?>
<br><br><br><br>
<div class="contents"  style="display: table;
width: 80%;
margin-left: auto;
margin-right: auto;">
    <table class="table">

<tr>

    <th>名稱</th>
        <th>規格</th>
    <th>數量</th>
    <th>單價</th>
    <th width="16%">小計</th>
        <th width="16%"></th>
    </tr>
    <?php

    $i=1;
        foreach ($this->cart->contents() as $items) {

          echo form_hidden($i.'[rowid]', $items['rowid']);  

echo "<tr>";

                    echo "<tr>";

        
                    echo "</td>";

                    echo "<td>";
                    echo $items['name'];

                    echo "</td>";
                     echo "<td>";
                    echo $items['options']['sp_name'];

                    echo "</td>";
                    echo "<td>";

                echo "<select  class='selectpicker' name = '".$i."[qtys]'>";

                    echo " <option  selected='true' value='".$items['qty']."'>".$items['qty']."</option>";

                      $selectindex=1;
                      while($selectindex<15){
                        if($selectindex!=$items['qty']){


                     echo " <option value=".$selectindex.">".$selectindex."</option>";
                        }
                        $selectindex++;
                      }


                
                 
         

                    echo "</select>";
         




                    echo "<td style='text-align: right;'>";
                    echo $items['price'];

                    echo "</td>";

                        echo "<td style='text-align: right;'>";
                    echo $items['subtotal'];

                    echo "</td>";

                    echo "<td >";
                    echo "<a    href='?del=".$items['rowid']."'>刪除</a>";
                    echo "</td>";

                echo "</tr>";
                $i++;


            # code...
        }




     ?>
     <tr>
        <td colspan="3"></td>
            <td style="text-align: right;">Total</td>

            <td style="text-align: right;"><?php echo  $this->cart->total();?></td>
            <td></td>



     </tr>
     <tr><td><?php $data=array('name'=>'update_cart','value'=>'更新購物車','class'=>'btn-success')?>


<?php echo form_submit($data)?>
</td>
<td><a  href="<?php echo base_url()?>goorder?destroy=a">清空購物車</a></td>
     </tr>

    </table>

    



<?php $string = "<div></div>";

echo form_close($string);?>


             
             
                   <h3>本次消費金額小計</h3>      
                   <h2>$    <?php echo  $this->cart->total();?><h2>                                                        
                                           
      
        
          
                    

                        <?
                        $user_name='';
                        $user_email='';
                        if(!empty($userdata)){
                        $user_name=$userdata['user_name'];
                        $user_email=$userdata['user_email'];

                        } 


                        ?>

                 <form style="width: 80%" action="<?echo base_url(); ?>checkview" onsubmit="return validate_form(this)"  method="post">
                <h4>購買人資料 <span style="font-size: 16px;color: red;">(即使選取超商取貨，請務必填寫地址欄位，以免無法送出訂單)</span></h4>
                    <div >
                        <div >
                            <div >
                                <label >姓名</label>
                                    <div >
                                         <input  required="" id="aname" name="aname" value="<?=$user_name?>">
                                    </div>
                            </div>

                            <div>
                                <label >E-mail</label>
                                    <div >
                                         <input required="" id="aemail" name="aemail"  value="<?=$user_email?>">
                                    </div>
                            </div>

                           <div >
                                <label >手機</label>
                                    <div >
                                         <input  required="" id="aphone" name="aphone">
                                    </div>
                            </div>

                           

                             <div >
                                <label >郵遞區號</label>
                                    <div >
                                         <input  required=""  id="apostalcode" name="apostalcode">
                                    </div>
                            </div>

                             <div >
                                <label >地址</label>
                                    <div >
                                         <input  required="" id="aaddress" name="aaddress">
                                    </div>
                            </div>
                        </div>
                    </div>

                <h4>收貨人資料<span style="font-size: 16px;color: red;">(請務必填寫正確中文姓名，以免無法正確投遞或導致無法取件)</span></h4>
                    <div >
                        <div >
                        <div >
                            <label><input type="checkbox"  style="width: 20px;height: 20PX" id="yr" name="yr"> 同購買人資料</label>
                        </div>
                        <div >
                            <label >姓名</label>
                                <div >
                                     <input  required="" id="bname" name="bname">
                                </div>
                        </div>

                        <div >
                            <label >E-mail</label>
                                <div >
                                     <input  required=""  id="bemail" name="bemail">
                                </div>
                        </div>

                       <div >
                            <label >手機</label>
                                <div >
                                     <input  required=""  id="bphone"  name="bphone">
                                </div>
                        </div>

                       

                         <div >
                            <label >郵遞區號</label>
                                <div >
                                     <input  required=""  id="bpostalcode"   name="bpostalcode">
                                </div>
                        </div>

                         <div >
                            <label >地址</label>
                                <div >
                                     <input  required=""
                                     id="baddress"    name="baddress">
                                </div>
                        </div>
                        </div>
                    </div>

                <h4>付款資訊</h4>
                    <div >
                        <div >
                            <div >
                          

                            <label >付款方式</label>

                                <div >
                    <label><input type="radio"   style="width: 10px;height: 10px" value="esun" name="payment" checked  onclick="myFunctionms()">信用卡</label>
                                <label>  <input type="radio" style="width: 10px;height: 10px"   value="megaatm" name="payment" onclick="myFunctionatm()">ATM 轉帳</label>
                                  <label> <input type="radio" style="width: 10px;height: 10px"  value="ubg" name="payment" onclick="myFunctionsuper()">超商取貨付款</label>
                                
                                <label><input type="radio" style="width: 10px;height: 10px"  value="pod" name="payment" onclick="myFunctionhome()">貨到付款</label>
   
   
   

                                </div>

                            </div>
                        </div>
                    </div>


                <h4>物流資訊</h4>
                    <div >
                        <div >
                            <div >
                                <label >物流方式</label>
                                    <div >
                                     

                                     <label   id ="radio2"  >
                                    <input type="radio" style="width: 10px;height: 10px" id="radio2r" name="shipment" value="super"  checked  onclick="showsuper()"> 超商取貨</label>

                                       <label id ="radio1"  >
                                    <input type="radio" style="width: 10px;height: 10px" id="radio1r" name="shipment" value="home"    onclick="dissuper()"> 宅配</label>
                                     
  
  
<br>
  
<br>
<div id='super'>
<p>
  <input type="button" readonly name="button" id="button" value="選擇超商" onclick="in_store2(1);"/>
</p>
<p>超商
 
  <input type="text" readonly  name="store_type" id="store_type" />
  <br />
店名
<input type="text" readonly name="store_name" id="store_name" />
<br />
店碼
<input type="text" readonly   name="store_no" id="store_no" />
 <br />
地址
<input type="text" readonly name="store_addr" id="store_addr" />
</p></div>
 
 



                                    </div>
                            </div>


                        </div>
                    </div>

                <h4>備註</h4>
                    <div >
                        <div >
                            <div >
                                <label >備註</label>
                                    <div >
                                    <textarea  name="note" cols="50" rows="10" id="note"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                <div  style="text-align: center;"> 
                    <input  type="submit" value="送出">
 </form>
</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

    

 $("#yr").change(function() {


                

  if(this.checked) {
 
    //get the values of the filled fields
    $aname = $("#aname").val();
    $aemail = $("#aemail").val();
    $aphone = $("#aphone").val();
    $apostalcode = $("#apostalcode").val();
    $aaddress = $("#aaddress").val();
    
    
 
    $("#bname").val($aname);
    $("#bemail").val($aemail);
    $("#bphone").val($aphone);
    $("#bpostalcode").val($apostalcode);
    $("#baddress").val($aaddress);

  

  }
  else{
   
    $("#bname").val('');
    $("#bemail").val('');
    $("#bphone").val('');
    $("#bpostalcode").val('');
    $("#baddress").val('');
  }

   
 });
　


        //取得超商或宅配
        //var shipment = $('input[name=shipment]:checked').val();
        //start ajax
         //  $.ajax({
        //  url:"<?=base_url()?>onepage/addcookit",
        //  method:"POST",
        //  data:{product_id:id,prod_name:name,product_qty:vale,product_price:price,shi:shipment},
        //  success:function(data){

        //      $('#total').text(data);
         
        //  }

        // });

     // end ajax

    
         
        

    　
　




});

</script>

<script> 

function in_store2(fdNO) {
    var ca ;
    if($("#cash_"+fdNO).attr("value")>0){ca =1;}else{ca =3;}
     
  var features ;
  var vReturnVal ;
  features = 'height=650px, width=1020px, toolbar=no, menubar=no, scrollbars=yes, resizable=yes, location=no, status=yes';    
  window.open('http://www.ubg.com.tw/upAPI/ubgMAP_3.php?fbTYPE=&cvstemp='+fdNO+'&servicetype='+ca+'&url_1=<?=base_url();?>goto711&url_2=<?=base_url();?>gotook&twpostLogo=2&background=', 'window', features); 
  
   if (vReturnVal)
   {
    return vReturnVal ;
   } else {
    return false ;
   };
 }
 
</script>


         <script>

function myFunctionatm() {
    showsuper();
    document.getElementById('radio1').style.display='';
    document.getElementById('radio2r').checked='checked';
    document.getElementById('radio2').style.display='';
   
}
function myFunctionsuper() {
    showsuper();
    document.getElementById('radio1').style.display='none';
    document.getElementById('radio2').style.display='';
    document.getElementById('radio2r').checked='checked';
  
}
function myFunctionms() {
    showsuper();
    document.getElementById('radio1').style.display='';
    document.getElementById('radio2r').checked='checked';
    document.getElementById('radio2').style.display='';
    
}
function myFunctionhome() {
    dissuper();
    document.getElementById('radio1').style.display='';
    document.getElementById('radio1r').checked='checked';
    document.getElementById('radio2').style.display='none';
    
}
function showsuper() {
   document.getElementById('super').style.display='';
}
function dissuper() {
     document.getElementById('super').style.display='none';
}
function validate_form(thisform)
{

 if(document.getElementById('radio1r').checked){
 return true;
 }else{
    if(thisform.store_no.value.length>0){
       return true;  
   }else{
    alert("請選擇超商");
    return false;
}
  
 }
   
}
</script>



  
    