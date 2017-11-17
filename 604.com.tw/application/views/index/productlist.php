


            <!-- Banner Area End -->
            <!-- Start Shop View Area -->

            <!-- End Shop View Area -->
            <!-- Start Product List -->
            <div class="product-list-tab modify-tnm">
                <div class="container">
                    <div class="row rp-style-2">
                        <div class="product-list tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="product-container-list rp-style-2">







              <div >

     <?echo $page_links?>
     </div>
                                     <?foreach($products as $item):?>

                                    <div class="product-inner cp-style-2 mt-5 col-2" >
                                        <a href="<?=base_url()."product/".$item['prod_id']?>">
                                            <div class="product-img b-img">
                                                <img alt=""  height="200px"  src="<? echo base_url();?>assests/img/product/<?=$item['prod_id']?>/titleimage.jpg">
                                            </div>
                                        </a>


                                        <div class="product-text pt-10">


                                            <div class="clear"></div>
                                            <h6 class="product-name m-5">
                                                <a title="Tletria postma" href="#"><?=$item['prod_name']?></a>
                                            </h6>
                                        <br><br>
                                        </div>
                                        <ul class="pricing list-inline pull-left">
                                           <li class="text-left c-price">$<?=$item['prod_newprice']?></li>
                                            <li class="text-left p-price">$<?=$item['prod_oprice']?></li>
                                        </ul>

                                        <button type="button" class="btn btn-success pull-right" onclick="addtocart(<?=$item['prod_id']?>)">加入購物車</button>
                                        <br><br>
                                    </div>



            <?endforeach;?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <!-- End Product List -->
            <!-- Start Shop View Area -->

            <!-- End Shop View Area -->
            <!-- Start Brand Area -->
        <!--     <div class="brand-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>OUR BRAND</strong></h2>
                                <p class="text-defualt">BRAND</p>
                                <img alt="" src="<?=$assestsurl?>images/section-border.png">
                            </div>
                            <div class="brand-carousel">
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="<?=$assestsurl?>images/brand/1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="<?=$assestsurl?>images/brand/2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="<?=$assestsurl?>images/brand/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="<?=$assestsurl?>images/brand/4.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="<?=$assestsurl?>images/brand/5.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="<?=$assestsurl?>images/brand/1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="<?=$assestsurl?>images/brand/2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="#">
                                            <img src="<?=$assestsurl?>images/brand/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       -->
