<a href=<?=base_url()."admin/order"?>>回訂單列表</a>
<br>


<?

    $ord_contac_storid=$odercontarray['ord_contac_storid'];
    $ord_contac_storename=$odercontarray['ord_contac_storename'];
    $ord_contac_storaddress=$odercontarray['ord_contac_storaddress'];
    $ord_contac_type=$odercontarray['ord_contac_type'];


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

    //物流狀態


     


		$payment=$order['ord_cashfllow_id'];
		$shipment=$order['ord_logistics_id'];
		$note=$order['ord_memo'];



 	


?>

<h2><?=$order['ord_createid']?></h2>
 <table class="table"  >
                        

                      <?   $i=1;
                         foreach ($oderdetal as $items) {?>
                            <tr>
                                <td > <?php echo $items['prod_name']; ?>
                                    <p>規格: <?echo $items['pro_specification']?></p>
                                    <p >數量: <?php echo $items['orddetailed_quant']; ?></p>
                                </td>
                                <td>小計:<?php echo $items['orddetailed_total']; ?></td>
                            </tr>

                        <? }?>
                            
                            <!--tatal-->
                            <tr>
                                <td>本次訂單總計
                                </td>
                                <td>$$ <?php echo $order['ord_total'];?></td>
                            </tr>
         
                    </table>

                     <h2>聯絡資料</h2>


                   <table class="table">
                     <tr>
                       <td>購買人資料</td>
                       <td></td>
                       <td>收件人資料</td>
                       <td></td>
                     </tr>
                         <tr>
                       <td>姓名</td>
                       <td><?=$aname;?></td>
                       <td>姓名</td>
                        <td><?=$bname;?></td>
                     </tr>
                        <tr>
                       <td>Email</td>
                       <td><?=$aemail;?></td>
                       <td>Email</td>
                        <td><?=$bemail;?></td>
                     </tr>
                     <tr>
                       <td>手機</td>
                       <td><?=$aphone;?></td>
                       <td>手機</td>
                        <td><?=$bphone;?></td>
                     </tr>
                     <tr>
                       <td>郵遞區號</td>
                       <td><?=$apostalcode;?></td>
                       <td>郵遞區號</td>
                        <td><?=$bpostalcode;?></td>
                     </tr>
                     <tr>
                       <td>地址</td>
                       <td><?=$aaddress;?></td>
                       <td>地址</td>
                        <td><?=$baddress;?></td>
                     </tr>

                   </table>
                                 
                        

                <h2>付款資訊</h2>
                    

                    <table class="table">
                      <tr>
                        <td>
                        付款方式
                        </td>
                        <td> <?=  $payment;?></td>
                         <td>
                        運送方式
                        </td>
                        
                        <td>    <?
                                        if($ord_contac_storid==''){
                                          echo "宅配";
                                        }else{
                                          echo $ord_contac_type."<br>";
                                          echo $ord_contac_storid."<br>";
                                          echo $ord_contac_storename."<br>";
                                          echo $ord_contac_storaddress."<br>"; 

                                        }


                                        ?></td>
                      </tr>

                    </table>
                            
                        <h2>付款狀態</h2>

                        <?=$order['ord_type']?>

          
                    

            
                  
                                <h2>備註</h2>
                                   
                                    <?=$note;?>
                                <br>
                                <br>

                                <form action="<?php echo base_url()."admin/orderdetal/".$order['ord_createid'] ?>" method="post">

                                <? $OK=$order['ord_shipped_id'];
                                 if(strpos($OK,'OK_no:')!==false){
                                 
                                   echo "運送狀態 : ".$ord_shipped_type."<br>";
                                    $ord_shipped_id=substr($order['ord_shipped_id'], 6);
                                      echo "<a href=http://www.twpost.com.tw/post/post_course.php?postno=".$ord_shipped_id.">物流查詢編號:".$ord_shipped_id."</a>";
                                  }elseif($ord_contac_storid!=''){?>
                                   <input type="submit" value="送出給物流">
                                 <?   }?>
                               
                                </form>
                        