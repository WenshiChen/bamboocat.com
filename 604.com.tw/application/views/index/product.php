 

<br>
    <div class="container" id="all">
    <!-- MAIN SLIDER -->            
        <div class="product col-md-12 col-xs-12">
            <div class="image-silde col-md-4">
                <img width="400px" src="<? echo base_url();?>assests/img/product/<?php echo $product['prod_id'];?>/titleimage.jpg">
                        
            </div>



                <form  action="<?=base_url();?>product/<?=$product['prod_id'];?>" method="post">
            <div class="product-info col-md-7 col-md-offset-1 col-xs-12">
                    <div class="product-info-title"><?=$product['prod_name']?></div>
                    <hr>

                    
                    <div class="product-info-price">TWD $<?=$product['prod_newprice']?></div>
                        <div class="product-spec col-md-12 col-xs-12">
                            <div class="product-spec-group col-md-12 col-xs-12">
                                <label for="quantity" class="control-label quantity">規格(色號樣式)</label>
                                    <select name ="specification" class="form-control col-md-9 col-sm-9" required="required" >
                                       <!--  <option value="1" selected="selected">1</option> -->

                        <? $spset='84m*177*&^$!@asojafoij';?>
                            <?if(empty($productsp)){?>

                       <option value=<?='-1'.$spset.'無'?>>無</option>

                           <? } ?>

                           
                         <? foreach($productsp as $psp){;?>
                    <option value=<?=$psp['sp_id'].$spset.$psp['sp_name']?>>

                    <?=$psp['sp_name']?></option>
                      <?}?>
                </select>
                            </div>

                            <div class="product-spec-group col-md-12 col-xs-12">
                                <label for="quantity" class="control-label quantity">數量</label>
                                    <select name ="qty" class="form-control col-md-9 col-sm-9" required="required" >
                                        <option value="1" selected="selected">1</option><option value="2">2</option>
                                        <option value="3">3</option><option value="4">4</option>
                                        <option value="5">5</option><option value="6">6</option>
                                        <option value="7">7</option><option value="8">8</option>
                                        <option value="9">9</option><option value="10">10</option>
                                    </select>
                            </div>
                            <div class="shopping-button col-md-6 col-xs-12">

                         <input type="submit" value="加入購物車">
                            <!-- <a href="<?=base_url();?>carts/product?productid=<?=$product['prod_id'];?>&id=insert">加入購物車</a> -->
                            </div></div></div>
                            </form>
                            




                            </div>
                        
                             <?=$product['prod_text']?>
                        </div>
                            
                    </div>

            </div>
           
               
 <br><br><br>    <br><br>    <br><br>    <br><br>
                    
                       
           

               

           








































        