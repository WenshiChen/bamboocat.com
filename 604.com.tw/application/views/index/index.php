
<!-- Start of a604comtw Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="a604comtw.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
/*]]>*/</script>
<!-- End of a604comtw Zendesk Widget script -->

        <!-- End of header area -->
        <!-- Start of slider area -->

            <!-- Slider Image -->
            <div id="mainSlider" class="nivoSlider slider-image">
                <img src="<? echo base_url();?>assests/img/banner_1.jpg" alt="main slider" title="#htmlcaption1">
                <img src="<? echo base_url();?>assests/img/banner_2.jpg" alt="main slider" title="#htmlcaption2">
            </div>


        </section>
        <!-- End of slider area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start About us Area -->
            <br>
            <!-- End About us Area -->
            <!-- Start Banner Area -->
          <!--   <div class="banner-area">
                <div class="container">
                    <div class="row rp-style">
                        <div class="col-sm-4 cp-style">
                            <div class="banner-inner">
                                <a class="test-popup-link banner-img" href="<?=$assestsurl?>images/banner/1.jpg">
                                    <img src="<?=$assestsurl?>images/banner/1.jpg" alt="">
                                </a>
                                <div class="banner-text banner-text-1">
                                    <a href="<?=$assestsurl?>#" class="banner-heading text-uppercase text-right">new trend for women's</a>
                                    <h3 class="banner-title text-uppercase text-right">special offer 25% off</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 cp-style">
                            <div class="row rp-style">
                                <div class="col-sm-8 cp-style">
                                    <div class="banner-inner">
                                        <a class="test-popup-link banner-img" href="<?=$assestsurl?>images/banner/2.jpg">
                                            <img src="<?=$assestsurl?>images/banner/2.jpg" alt="">
                                        </a>
                                        <div class="banner-text banner-text-2 text-center">
                                            <a href="<?=$assestsurl?>#" class="banner-heading text-uppercase text-right">man's</a>
                                            <h3 class="banner-title-x text-uppercase">summer</h3>
                                            <h3 class="banner-title text-uppercase text-right">collection</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 cp-style">
                                    <div class="banner-inner">
                                        <a class="test-popup-link banner-img" href="<?=$assestsurl?>images/banner/3.jpg">
                                            <img src="<?=$assestsurl?>images/banner/3.jpg" alt="">
                                        </a>
                                        <div class="banner-text banner-text-3">
                                            <a href="<?=$assestsurl?>#" class="banner-heading text-uppercase text-right">shoes</a>
                                            <h3 class="banner-title text-uppercase text-right">35% off</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row rp-style mt-8">
                                <div class="col-sm-4 cp-style">
                                    <div class="banner-inner">
                                        <a class="test-popup-link banner-img" href="<?=$assestsurl?>images/banner/4.jpg">
                                            <img src="<?=$assestsurl?>images/banner/4.jpg" alt="">
                                        </a>
                                        <div class="banner-text banner-text-4 text-right">
                                            <a href="<?=$assestsurl?>#" class="banner-heading text-uppercase text-right">bag's</a>
                                            <h3 class="banner-title text-uppercase text-right">promotion</h3>
                                        </div>
                                    </div>
                             </div>
                                <div class="col-sm-8 cp-style">
                                    <div class="banner-inner m-0">
                                        <a class="test-popup-link banner-img" href="<?=$assestsurl?>images/banner/5.jpg">
                                            <img src="<?=$assestsurl?>images/banner/5.jpg" alt="">
                                        </a>
                                        <div class="banner-text banner-text-5 text-center">
                                            <a href="<?=$assestsurl?>#" class="banner-heading text-uppercase text-right">kid's</a>
                                            <h3 class="banner-title text-uppercase text-right">collection</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Banner Area -->
            <!-- Start Featured product Area -->
            <div class="featured-product-area section-padding">
                <div class="container">
                    <div class="row rp-style">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>商品</strong></h2>
                                <p class="text-defualt">商品</p>
                                <img alt="" src="<?=$assestsurl?>images/section-border.png">
                            </div>
                        </div>
                    </div>
                    <div class="row rp-style">
                        <div class="featured-carousel indicator-style">








                            <?foreach($product as $item):?>

                           <div class="product-container cp-style-2">
                                <div class="product-inner">
                                    <a href="<?=base_url()."product/".$item['prod_id']?>">
                                        <div class="product-img b-img">
                                            <img alt="" src="<? echo base_url();?>assests/img/product/<?=$item['prod_id']?>/titleimage.jpg">
                                        </div>
                                    </a>


                                    <div class="product-text pt-15">




                                        <div class="clear"></div>
                                        <h6 class="product-name m-0">
                                            <a title="<?=$item['prod_name']?>" href=""><?=$item['prod_name']?></a>
                                        </h6>

                                    </div>
                                    <br><br>
                                </div>
                                <ul class="pricing list-inline pull-left">
                                  <li class="text-left c-price">$<?=$item['prod_newprice']?></li>
                                   <li class="text-left p-price">$<?=$item['prod_oprice']?></li>
                               </ul>

                                  <button type="button" class="btn btn-success pull-right" onclick="addtocart(<?=$item['prod_id']?>)">加入購物車</button>
                            </div>


  <?endforeach;?>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Featured product Area -->
            <!-- Start Offer  Area -->
          <!--   <div class="offer-area">
                <div class="offer-banner banner-style-1 pull-left">
                    <a href="<?=$assestsurl?>#">
                        <img src="<?=$assestsurl?>images/offer/1.jpg" alt="">
                    </a>
                    <div class="offer-banner-text text-uppercase text-white">
                        <h2>coats</h2>
                        <h3>FOR <span class="text-defualt"> MEN</span></h3>
                    </div>
                </div>
                <div class="offer-inner top-right-sale ">
                    <h3>BIG SALE </h3>
                    <h1>OFFER</h1>
                    <h2>35% <span>off</span></h2>
                    <span class="bottom-border-style"></span>
                </div>
                <div class="offer-banner banner-style-2 pull-right">
                    <a href="<?=$assestsurl?>#">
                        <img alt="" src="<?=$assestsurl?>images/offer/2.jpg">
                    </a>
                    <div class="offer-banner-text-2 text-uppercase">
                        <h2 class="text-defualt">WINTER</h2>
                        <h3 class="medium text-white">COLLECTION</h3>
                        <h3 class="blod text-white">FOR <span class="text-defualt">WOMEN</span></h3>
                    </div>
                </div>
            </div> -->
            <!-- End Offer Area -->
            <!-- Start Upcomming Area -->
          <!--   <div class="up-comming-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-up-comming ash-bg">
                                <div class="product-cuntdown pull-left">
                                    <div class="timer p-20">
                                        <div data-countdown="2017/06/01"></div>
                                    </div>
                                </div>
                                <div class="product-inner pull-right">
                                    <a href="<?=$assestsurl?>#">
                                        <div class="product-img b-img">
                                            <img src="<?=$assestsurl?>images/cuntdown/1.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                                <div class="product-text white-bg pt-15">
                                    <ul class="pricing list-inline pull-right">
                                        <li class="text-defualt c-price">$130</li>
                                        <li class="text-right p-price">$150</li>
                                    </ul>
                                    <h6 class="product-name">
                                        <a href="<?=$assestsurl?>#" title="Eletria ostma">Tletria postma</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-up-comming ash-bg">
                                <div class="product-cuntdown pull-left">
                                    <div class="timer p-20">
                                        <div data-countdown="2018/06/01"></div>
                                    </div>
                                </div>
                                <div class="product-inner pull-right">
                                    <a href="<?=$assestsurl?>#">
                                        <div class="product-img b-img">
                                            <img src="<?=$assestsurl?>images/cuntdown/2.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                                <div class="product-text white-bg pt-15">
                                    <ul class="pricing list-inline pull-right">
                                        <li class="text-defualt c-price">$150</li>
                                        <li class="text-right p-price">$180</li>
                                    </ul>
                                    <h6 class="product-name">
                                        <a href="<?=$assestsurl?>#" title="Restalomen Santiloma">Restalomen Santiloma</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <div class="single-up-comming ash-bg m-0">
                                <div class="product-cuntdown pull-left">
                                    <div class="timer p-20">
                                        <div data-countdown="2018/06/01"></div>
                                    </div>
                                </div>
                                <div class="product-inner pull-right">
                                    <a href="<?=$assestsurl?>#">
                                        <div class="product-img b-img">
                                            <img src="<?=$assestsurl?>images/cuntdown/3.jpg" alt="">
                                        </div>
                                    </a>
                                    <ul class="quick-veiw text-center">
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="<?=$assestsurl?>#"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                                <div class="product-text white-bg pt-15">
                                    <ul class="pricing list-inline pull-right">
                                        <li class="text-defualt c-price">$180</li>
                                        <li class="text-right p-price">$200</li>
                                    </ul>
                                    <h6 class="product-name">
                                        <a href="<?=$assestsurl?>#" title="Eletriaostma Santiloma">Eletriaostma Santiloma</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End Upcomming Area -->
            <!-- Start New Arrival Area  -->
            <div class="new-arrival-area">
                <div class="container">
                    <div class="row rp-style-2">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>站長推薦</strong></h2>
                                <p class="text-defualt">站長推薦</p>
                                <img alt="" src="<?=$assestsurl?>images/section-border.png">
                            </div>
                        </div>
                    </div>
                    <div class="row rp-style-2">
                        <div class="featured-carousel indicator-style">




                        <?$index=0;?>
             <?foreach($productnew as $item):?>






           <!--        <div class="item-outside col-md-3 col-xs-6">
                    <div class="ground_glass_outside_div">
                    <a href="<?=base_url()."product/".$item['prod_id']?>"><img  height="400px"   src="<? echo base_url();?>assests/img/product/<?=$item['prod_id']?>/titleimage.jpg"></a>
                    <div class="item-card-info">
                        <h4 class="title"><?=$item['prod_name']?></h4>
                        <span class="price">NT$<?=$item['prod_newprice']?></span>
                        <div type="button" class="add-to-cart-btn" data-toggle="tooltip" data-placement="bottom"  onclick="addtocart(<?=$item['prod_id']?>)" data-original-title="加入購物車">
                            <i class="fa fa-plus-square fa-2" aria-hidden="true" style="font-size: 180%;"></i>
                        </div>
                    </div>
                    </div>
                </div> -->

     <?if($index%2==0){?>
   <div class="product-container cp-style-2">

                                <div class="product-inner">
                                    <a href="<?=base_url()."product/".$item['prod_id']?>">
                                        <div class="product-img b-img">
                                            <img src="<? echo base_url();?>assests/img/product/<?=$item['prod_id']?>/titleimage.jpg" alt="">
                                        </div>
                                    </a>

                                    <div class="product-text">



                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="<?=$assestsurl?>#" title="Wetria postma"><?=$item['prod_name']?></a>
                                        </h6>
                                        <br><br>
                                    </div>

                                   <ul class="pricing list-inline pull-left">
                                      <li class="text-left c-price">$<?=$item['prod_newprice']?></li>
                                       <li class="text-left p-price">$<?=$item['prod_oprice']?></li>
                                   </ul>

                                    <button type="button" class="btn btn-success pull-right" onclick="addtocart(<?=$item['prod_id']?>)">加入購物車</button>
                                </div>

<?}else{?>
                                <br><br>
                                <div class="product-inner mt-35">
                                    <a href="<?=base_url()."product/".$item['prod_id']?>">
                                        <div class="product-img b-img">
                                            <img src="<? echo base_url();?>assests/img/product/<?=$item['prod_id']?>/titleimage.jpg" alt="">
                                        </div>
                                    </a>


                                    <div class="product-text">
                                        <div class="clear"></div>
                                        <h6 class="product-name">
                                            <a href="<?=$assestsurl?>#" title="Eletria ostma"><?=$item['prod_name']?></a>
                                        </h6><br><br>
                                    </div>

                                    <ul class="pricing list-inline pull-left">
                                       <li class="text-left c-price">$<?=$item['prod_newprice']?></li>
                                        <li class="text-left p-price">$<?=$item['prod_oprice']?></li>
                                    </ul>

                                    <button type="button" class="btn btn-success pull-right" onclick="addtocart(<?=$item['prod_id']?>)">加入購物車</button>
                                </div>














  </div>

<?}?>






                <?$index++; ?>
                <?endforeach;?>





                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of New Arrival Area  -->
            <!-- Start Offer Banner Area -->
         <!--    <div class="offer-banner-area section-padding clearfix">
                <figure class="single-offer-banner b-img">
                    <img src="<?=$assestsurl?>images/offer-banner/1.jpg" alt="">
                    <figcaption>
                        <div class="figcation-text left-top text-uppercase text-left text-white">
                            <h1>new</h1>
                            <h1>Arrival</h1>
                            <h1>20% off</h1>
                        </div>
                        <div class="figcation-text text-uppercase right-bottom text-white">
                            <h1>BAGS</h1>
                        </div>
                    </figcaption>
                </figure>
                <figure class="single-offer-banner b-img">
                    <img src="<?=$assestsurl?>images/offer-banner/2.jpg" alt="">
                    <figcaption>
                        <div class="figcation-text left-top text-uppercase text-left text-white">
                            <h1>WATCHES</h1>
                        </div>
                        <div class="figcation-text text-uppercase right-bottom text-white text-right">
                            <h1>EXCLUSIVE</h1>
                            <h1>COLLECTIONS</h1>
                        </div>
                    </figcaption>
                </figure>
                <figure class="single-offer-banner b-img m-0">
                    <img src="<?=$assestsurl?>images/offer-banner/3.jpg" alt="">
                    <figcaption>
                        <div class="figcation-text right-top text-uppercase text-left text-white text-right">
                            <h1>BIG OFFER</h1>
                            <h1>35% OFF</h1>
                        </div>
                        <div class="figcation-text left-bottom text-uppercase text-white">
                            <h1>SHOES</h1>
                        </div>
                    </figcaption>
                </figure>
            </div> -->

            <!-- End Of Subscribe Area -->
            <!-- Start Blog Area -->
            <div class="blog-testimonial-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>文章</strong></h2>

                                <img src="<?=$assestsurl?>images/section-border.png" alt="">
                            </div>
                            <div class="blog-carousel indicator-style-tow">


                               <?foreach($post as $items):?>
                <div class="single-blog blog-bg">
                            <div class="blog-img b-img">



                                   <a href="<?=base_url().'post/posttext/'.$items['post_id'];?>">
                                            <img alt="" src="<? echo base_url();?>assests/img/post/<?php echo $items['post_id'];?>/titleimage.jpg">
                                        </a>
                                </div>
                                <div class="clear"></div>

                                <div class="div_blog_name">
                                    <h3 style="display: block;font: 18px/20px Roboto;color: #000000;;font-weight: 800" class="product_name">
                                    <a href="<?=base_url().'post/posttext/'.$items['post_id'];?>" title="<?=$items['post_title'];?>"><?=$items['post_title'];?></a></h3>
                                </div>
                                    <a href="<?=base_url().'post/posttext/'.$items['post_id'];?>" title="<?=$items['post_title'];?>"><?=$items['post_title'];?></a></h3>
                                    <a class="btn-read-more text-uppercase text-defualt" href="<?=$assestsurl?>">查看更多</a>


                    </div>
                    <?endforeach;?>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

      <!-- End Blog Area -->
            <!-- Start Brand Area -->
<!--             <div class="brand-area pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-35">
                                <h2 class="text-uppercase"><strong>我們品牌</strong></h2>
                                <p class="text-defualt">品牌</p>
                                <img alt="" src="<?=$assestsurl?>images/section-border.png">
                            </div>
                            <div class="brand-carousel">
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="<?=$assestsurl?>#">
                                            <img src="<?=$assestsurl?>images/brand/1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="<?=$assestsurl?>#">
                                            <img src="<?=$assestsurl?>images/brand/2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="<?=$assestsurl?>#">
                                            <img src="<?=$assestsurl?>images/brand/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="<?=$assestsurl?>#">
                                            <img src="<?=$assestsurl?>images/brand/4.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="<?=$assestsurl?>#">
                                            <img src="<?=$assestsurl?>images/brand/5.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="<?=$assestsurl?>#">
                                            <img src="<?=$assestsurl?>images/brand/1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="<?=$assestsurl?>#">
                                            <img src="<?=$assestsurl?>images/brand/2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-brand text-center">
                                        <a href="<?=$assestsurl?>#">
                                            <img src="<?=$assestsurl?>images/brand/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 -->            <!-- End Brand Area -->
