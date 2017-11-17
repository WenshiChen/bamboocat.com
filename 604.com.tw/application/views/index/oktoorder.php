<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>

 <?




 		

		$aname=	$odercontarray['ord_contac_name'];
        $aemail=$odercontarray['ord_contac_email'];
		$aphone=$odercontarray['ord_contac_phone'];
        $apostalcode=$odercontarray['ord_contac_postalcode'];
		$aaddress=$odercontarray['ord_contac_address'];
        

		$bname=$odercontarray['ord_contac_toname'];
        $bemail=$odercontarray['ord_contac_toemail'];     
		$bphone=$odercontarray['ord_contac_tophone'];
        $bpostalcode=$odercontarray['ord_contac_topostalcode'];  
		$baddress=$odercontarray['ord_contac_toaddress'];


        $ord_contac_storid=$odercontarray['ord_contac_storid'];
        $ord_contac_storename=$odercontarray['ord_contac_storename'];
        $ord_contac_storaddress=$odercontarray['ord_contac_storaddress'];
        $ord_contac_type=$odercontarray['ord_contac_type'];


		$payment=$order['ord_cashfllow_id'];
		$shipment=$order['ord_logistics_id'];
		$note=$order['ord_memo'];
        $odertype=$order['ord_type'];

			 
		 $created=$order['ord_created_at'];
		date_default_timezone_set("Asia/Taipei");
		$date1=$created;
        $date2=date('Y-m-d H:i:s');
        
        //兩日期時間 相差幾秒
        $aftertime=strtotime($date2) - strtotime($date1);
         
	     
 ?>



 
 

                              
 


 


	 
 



 

 
 
 
           
  

 
    <?php

    $i=0;
        foreach ($this->cart->contents() as $items) {
    $i++;

    }




     ?>

 
             
        

        
 
 
       

    <div class="container" id="all">
    <!-- MAIN SLIDER -->   
        <div class="ordering col-md-10 col-md-offset-1 col-xs-12">
            <div class="cart-progressbar col-md-12 col-xs-12">
               <ul class="progressbar col-md-12 col-xs-12">
               
                    <li class="col-md-4 col-xs-4">1.確認訂單明細</li>
                    <li class="col-md-4 col-xs-4">2.選擇取貨/付款方式</li>
                    <li class="col-md-4 col-xs-4">3.完成訂購</li>
                </ul>
            </div>

 <a  href="<?php echo site_url()?>useralloder">回訂單列表</a><br><br>
<? echo '<h2>訂單編號:'.$order['ord_createid'].'</h2><br>';?>
            <div class="ordering-list col-md-12 col-xs-12">
                <h4>訂單商品</h4>
                    <div class="panel panel-default col-md-12 col-xs-12">
                    <table class="table">
                        <tbody>



                      <?   $i=1;
                         foreach ($oderdetal as $items) {?>
                            <tr>
                                <td class="product-name"> <?php echo $items['prod_name']; ?>
                                    <p class="product-quantity">規格: <?echo $items['pro_specification']?></strong></p>
                                    <p class="product-quantity">數量: <?php echo $items['orddetailed_quant']; ?></strong></p>
                                </td>
                                <td class="text-center">小計:<?php echo $items['orddetailed_total']; ?></td>
                            </tr>

                        <? }?>
 


                            
                            <!--tatal-->
                            <tr>
                                <td class="product-tatal" style="text-align: right;">本次訂單總計
                                </td>
                                <td class="product-tatalbuy">$$ <?php echo $order['ord_total'];?></td>
                            </tr>
          
                        </tbody>
                    </table>
                    </div>

                <h4>購買人資料  </h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">姓名</label>
                                    <div class="col-sm-8 col-md-8">
                                       <?=$aname;?>
                                    </div>
                            </div>

                            <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">E-mail</label>
                                    <div class="col-sm-8 col-md-8">
                                          <?=$aemail;?>
                                    </div>
                            </div>

                           <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">手機</label>
                                    <div class="col-sm-8 col-md-8">
                                        <?=$aphone;?>
                                    </div>
                            </div>

                      

                             <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">郵遞區號</label>
                                    <div class="col-sm-8 col-md-8">
                                         <?=$apostalcode;?>
                                    </div>
                            </div>

                             <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">地址</label>
                                    <div class="col-sm-8 col-md-8">
                                          <?=$aaddress;?>
                                    </div>
                            </div>
                        </div>
                    </div>

                <h4>收貨人資料 </h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        
                        <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">姓名</label>
                               <?=$bname;?>
                        </div>

                        <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">E-mail</label>
                                 <?=$bemail;?>
                        </div>

                       <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">手機</label>
                                  <?=$bphone;?>
                        </div>

                        

                         <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">郵遞區號</label>
                                    <?=$bpostalcode;?>
                        </div>

                         <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">地址</label>
                             <?=$baddress;?>
                        </div>
                        </div>
                    </div>

                <h4>付款資訊</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">付款方式</label>
                                <div class="col-md-10 col-xs-12">
                                 

                                 <?if($payment=='esun'){?>
                                 <?= "信用卡"?>
                                 <?if($odertype==11){?>
                                    <!-- 11代表還沒付款 -->

                                 





                               
                                <?}elseif($odertype==12){?>
                                    已付款

                               
                                 <?}elseif($odertype==24){?>
                                   交易失敗 
                            
                                  


                                   <div id=timep>
                                  
                                   </div>




                                <?}?>

                                <?}elseif($payment=='ubg'){?>
                                超商取貨付款

                                <?}elseif($payment=='pod'){?>
                                貨到付款
                              
                                <?}elseif($payment=='megaatm'){?>
                                ATM
                                <?}?>
                                </div>
                            </div>
                        </div>
                    </div>


                <h4>物流資訊</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">物流方式</label>
                                    <div class="col-md-10 col-xs-12">
                                        <?=$shipment."<br>" ;?>

                                        <?
                                        if($ord_contac_storid!=''){
                                        echo $ord_contac_storid."<br>";
                                        echo $ord_contac_storename."<br>";
                                        echo $ord_contac_storaddress."<br>";
                                       
                                    }else{
                                        echo "宅配";
                                    }


                                        ?>

                                    </div>
                            </div>
                       
                        
                        </div>
                    </div>

                <h4>備註</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">備註</label>
                                    <div class="col-sm-10">
                                    <?=$note;?>
                                </div>
                            </div>
                        </div>
                    </div>

              
                
            </div>            
        </div>
        
           
        
   
    </div>   

    
    
            <!-- /.container -->
    </div>

 

   


  
    
 <?if($aftertime<1800){?>
                                  
     <script type="text/javascript">
    $(document).ready(function(){

   
 


     
 setInterval(function(){

 

      

        $.get( "<?=base_url()?>index/time", function(data) {

                var ff=1800-(data-<?=strtotime($date1)?>);
            if(ff>0){
             $('#timep').html("<p>您可以在 "+(ff)+" 秒內"+"<a href='<?=base_url().'reorder/'.$order['ord_createid'];?>'>重新建立訂單</a>"+"</p>" );
            }else{
                $('#timep').html("");
            }
        });



}, 1000);

    
         
        

    　
　




});

</script>
 <?}?>
 