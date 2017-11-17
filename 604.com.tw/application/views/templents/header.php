<?$assestsurl=base_url()."assests/static/"?>
   <?php
                        $i=0;
                            foreach ($this->cart->contents() as $items) {
                        $i++;
                        }

                         ?>

<!doctype html>



<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>


    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=$assestsurl?>images/favicon.png">

    <!-- All css files are included here -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?=$assestsurl?>css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?=$assestsurl?>css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?=$assestsurl?>css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?=$assestsurl?>style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?=$assestsurl?>css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="<?=$assestsurl?>css/custom.css">



    <!-- Modernizr JS -->
    <script src="<?=$assestsurl?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?=$assestsurl?>http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
 
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        <header>
            <div class="header-top gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 hidden-xs">
                            <div class="header-top-left">
                                <ul class="header-top-style text-capitalize mr-25">



                 
                
                 
                
                
                                    <li><a href="#"><span class="mr-10">會員</span><i class="fa fa-angle-down"></i></a>
                                        <ul class="ul-style my-account box-shadow white-bg">
                                              <? if(empty($this->session->userdata('user_accnum'))){?>
                                            <li><a href="<?=base_url()?>login">登入</a></li>
                                            
                                            <?}else{?>
                                            <li><a href="<?=base_url()?>logout">登出</a></li>
                                              <li><a href="<?=base_url()?>useralloder">會員中心</a></li>  


                                            <?}?>




                                            
                                        </ul>
                                    </li>
                                </ul>
                                
                            
                            </div>
                        </div>
                      <!--   <div class="col-sm-3 col-xs-6">
                            <div class="header-top-middle">
                                <ul class="header-top-style">
                                    <li>
                                        <a href="<?=$assestsurl?>login.html">
                                            <span>登入或註冊</span>
                                        </a>
                                        <div class="ul-style login-register box-shadow white-bg p-30">
                                            <h6 class="mb-20"><strong>登入</strong></h6>
                                            <input type="text" name="s" class="pl-30" placeholder="user name" id="user-name">
                                            <input type="password" name="d" class="pl-30" placeholder="Password" id="password">
                                            <label class="remmember">
                                                <input type="checkbox">
                                                記住我
                                            </label>
                                            <button value="submit" class="btn-default">登入</button>
                                            <h6 class="mb-20"><strong>註冊</strong></h6>
                                            <input type="email" name="s" placeholder="Your mail" id="user-email">
                                            <input type="password" name="d" placeholder="Password" id="c-password">
                                            <button value="submit" class="btn-default">登入</button>
                                            <h6 class="mb-20"><strong>其他方式登入</strong></h6>
                                            <ul class="login-social">
                                                <li><a href="<?=$assestsurl?>#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="<?=$assestsurl?>#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="<?=$assestsurl?>#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="<?=$assestsurl?>#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>

                                    </li>
                                </ul>

                            </div>
                        </div> -->
                        <div class="col-sm-4 col-xs-6">

                            <div class="header-top-right">


                             <form style="float: left;width: auto" id="search-header" action="<?=base_url()."productlist"?>" class="navbar-form pull-right" method="post" accept-charset="utf-8">
                                <span class="mr-20"><a href="javascript:{}"  onclick="document.getElementById('search-header').submit()"; ><img alt="" src="<?=$assestsurl?>images/header/search-icon.png"></a></span>
                                <span><input type="text" class="pl-10" name="find" placeholder="Search..."></span>
                                   </form>

                            </div>
                            <div class="header-top-right">
                            <h6 style="color: #FFFFFF">HI <?=$this->session->userdata('user_name')?></h6> 

                                    <?if(!empty($this->session->userdata('user_ischage'))){?>

                                    <a href=<?=base_url()."admin/un_userchange"?>>還原管理者身份</a> 

                                    <?}?>

 </div>
                           
                             
                         
                     



                        </div>

                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row header-middle-content">
                        <div class="col-md-5 col-sm-4 hidden-xs">
                            <div class="service-inner mt-10">
                                <span class="service-img b-img">
                                    <img alt=""  src="<?=$assestsurl?>images/logo.png">
                                </span>
                                 
                            </div>
                        </div>
                       
                        <div class="col-md-offset-0 col-md-5 col-sm-offset-0 col-sm-4 col-xs-offset-3 col-xs-6">
                      
                             


                <div class="shopping-cart" id="gocart" style="position: fixed;right: 10%; z-index:100; ">
                 <?if($i>0){
                    $base_url=base_url();
                $assestsurl=base_url()."assests/static/";
                $i=0;
             foreach ($this->cart->contents() as $items) {
                $i++;
             }   
 
                echo "<a href='".$base_url."goorder'>";
                                    echo "<span class='shopping-cart-control'>";
                         echo "<img  alt='' src='".$assestsurl."images/shop.png'>";

                                    echo "</span>";
                                    echo "<span class='cart-size-value'><strong>購物車(".$i.")</strong><br>$".$this->cart->total()."</span>";
                               echo " </a>";
                                echo "<ul class='shopping-cart-down box-shadow white-bg'>";
                              
                                foreach ($this->cart->contents() as $items) {

                                  
                                     echo " <li class='media'>";
                                        echo "<a href='".$base_url."product/".$items['id']."'><img width='30%'  alt='' src='".$base_url."assests/img/product/".$items['id']."/titleimage.jpg'></a>";
                                          echo "<a title='Remove this item' class='remove' href='javascript:void(0)' onclick='removetocart(\"".$items['rowid']."\")'>";

                                                 echo "<i class='fa fa-trash-o'></i>";
                                             echo "</a>";  
                                             echo "<a title='Remove this item' class='remove' href='javascript:void(0)' onclick='removetocart(\"".$items['rowid']."\")'>";

                                                 echo "<i class='fa fa-trash-o'></i>";
                                             echo "</a>";
                                        echo "<div class='cart-item-wrapper'>";

                                             echo "<a href='".$base_url."product/".$items['id']."'>".$items['name']."</a>";
                                             echo "<span class='quantity'>";
                                                echo " <span class='amount'>$".$items['price']."</span>
                                                 x ".$items['qty']."";
                                             echo "</span>";
                                           
                                         echo "</div>";
                                     echo "</li>";

                                                 

                 }
                                
                                  
                                    echo " <li class='media'>";
                                       echo "  <span class='total-title pull-left'>總金額</span>";
                                        echo " <span class='total pull-right'>$".$this->cart->total()."</span>";
                                     echo "</li>";
                                     echo "<li class='media'>";
                                       echo "  <a class='cart-btn' href='".$base_url."goorder'>前往購物車</a>";
                                         echo "<a class='cart-btn' href='javascript:void(0)' onclick='removetocart(\""."cartsremoveall"."\")'>清空購物車</a>";
                                    echo " </li>";
                                echo " </ul> ";

                   
                      }?> 
                     </div>

                                


                                                        
                            
                        </div>
                        <nav class="primary-menu">
                            <ul class="header-top-style text-uppercase">

                            
                             <li><a href="<?=base_url()."productlist"?>">所有商品</a></li>
                                <?php foreach($productsclass as $pclass){?>
                                 

                                 <li><a href="<?=base_url().'productlist/classid/'.$pclass['productclass_id']?>"> <?=$pclass['productclass_name']?></a></li>
                                <?}?>
                           
                               
                                
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="<?=$assestsurl?>index.html">home</a></li>
                                        <li><a href="<?=$assestsurl?>about.html">about</a></li>
                                        <li><a href="<?=$assestsurl?>shop.html">shop</a></li>
                                        <li><a href="<?=$assestsurl?>my-account.html">my-account</a></li>
                                        <li><a href="<?=$assestsurl?>login.html">login</a></li>
                                        <li><a href="<?=$assestsurl?>contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
            <!-- Mobile Menu End -->        
        </header>
        <section class="slider-container">