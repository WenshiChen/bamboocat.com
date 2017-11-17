
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

            <div class="ordering-list col-md-12 col-xs-12">
                <h4>訂單商品</h4>
                  <div class="panel panel-default col-md-12 col-xs-12">
                    <table class="table">
                        <tbody>



                      <?    
                    foreach ($this->cart->contents() as $items) {?>
                            <tr>
                                <td class="product-name"> <?php echo $items['name']; ?>
                                    <p class="product-quantity">規格: <?=$items['options']['sp_name']?></strong></p>
                                    <p class="product-quantity">數量: <?php echo $items['qty']; ?></strong></p>
                                </td>
                                <td class="text-center">小計:<?php echo $items['subtotal']; ?></td>
                            </tr>

                        <? }?>
 


                            
                            <!--tatal-->
                            <tr>
                                <td class="product-tatal" style="text-align: right;">本次訂單總計
                                </td>
                                <td class="product-tatalbuy">$$ <?php echo  $this->cart->total();?></td>
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
                                 <?=  $payment;?>

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
                                      <? if($shipment=='home'){?>
                                        宅配
                                       <?}else{

                                              echo  "超商取貨<br>";
                                              echo  "代碼:".$storid."<br>";
                                              echo  "名稱:".$storename."<br>";
                                              echo  "地址:".$storaddress."<br>";
                                              echo  "種類:".$store_type."<br>"; 

                                              $shipment=array(

                                                'storid'=>$storid,
                                                'storename'=>$storename,
                                                'storaddress'=>$storaddress,
                                                'store_type'=>$store_type,



                                                );


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

                <div class="submit" style="text-align: center;"> 
                    


<?php echo form_open(base_url()."writetodborder");
    
    $data = array(
              'aname'  => $aname,
              'aemail' => $aemail,
              'aphone'   =>$aphone,
              'apostalcode' => $apostalcode,
              'aaddress'   => $aaddress,

              'bname'  => $bname,
              'bemail' => $bemail,
              'bphone'   =>$bphone,
              'bpostalcode' => $bpostalcode,
              'baddress'   => $baddress,

              'payment'  => $payment,
              'shipment' => $shipment,
              'note'   =>$note
               
            );

    
        echo form_hidden($data);



?>

<?php $z=array('value'=>'確定送出','class'=>'btn btn-default btn-primary')?>
<?php echo form_submit($z)?>

                </div>
                
            </div>            
        </div>
        
           
        
           