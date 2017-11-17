<!DOCTYPE html>
<html>
<head>
<title>Home</title>
 
<link href="<?=base_url();?>assests/shevely/01/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url();?>assests/shevely/01/css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="<?=base_url();?>assests/shevely/01/css/component.css" rel="stylesheet" type="text/css"  />
<!--Custom-Theme-files-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gorgeous Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//Custom-Theme-files-->
<!--js-->
<script src="<?=base_url();?>assests/shevely/01/js/jquery-3.2.1.min.js"></script> 

<!--//js-->
<!--start-smoth-scrolling-->
<script type="text/javascript" src="<?=base_url();?>assests/shevely/01/js/move-top.js"></script>
<script type="text/javascript" src="<?=base_url();?>assests/shevely/01/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<style type="text/css">
			
 	.footer{
 		    background: #ffcece;
 	}
 	nav#cbp-spmenu-s2 h3 {
    background: #ffcece;
     
		}
nav#cbp-spmenu-s2 {
      background: #ffcece;
 
    text-align: center;
}
nav#cbp-spmenu-s2 a {
    color: #888;
  
}

nav#cbp-spmenu-s2 a.active {
    color: #ffffff;
}
.b-tre{
	 background: #ffcece;
}
.b-one{
	 background: #E6E6FA;
}

body{
		font-family: "Helvetica Neue", "Microsoft JhengHei", Helvetica, Arial, sans-serif; 
	}
	h2{
		font-family: "Helvetica Neue", "Microsoft JhengHei", Helvetica, Arial, sans-serif; 
	}
 

		</style>
<!--start-smoth-scrolling-->
</head>
<body class="cbp-spmenu-push">


	<!--banner-->
	<div class="banner" id="home">
		<!--header-->		
		<div class="header">
				<div class="logo">
					 
				</div>
				<div class="top-nav">
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
				 	
						<a href="#home" class="active scroll">首頁</a>
						<a href="#about" class="scroll">關於</a>
						<a href="#gallery" class="scroll">介紹</a>
						<a href="#news" class="scroll">使用方法</a>
						<a href="#advantages" class="scroll">購物</a>
						 
					</nav>
					<div class="main buttonset">	
							<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
							<button id="showRightPush"><img src="<?=base_url();?>assests/shevely/01/images/menu.png" alt=""/></button>
							<!--<span class="menu"></span>-->
					</div>
					<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
					<script src="<?=base_url();?>assests/shevely/01/js/classie.js"></script>
					<script>
						var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
						showRightPush = document.getElementById( 'showRightPush' ),
						body = document.body;

						showRightPush.onclick = function() {
							classie.toggle( this, 'active' );
							classie.toggle( body, 'cbp-spmenu-push-toleft' );
							classie.toggle( menuRight, 'cbp-spmenu-open' );
							disableOther( 'showRightPush' );
						};

						function disableOther( button ) {
							if( button !== 'showRightPush' ) {
								classie.toggle( showRightPush, 'disabled' );
							}
						}
					</script>
					<!-- /script-for-menu -->
				</div>	
				<div class="clearfix"></div>
		</div>
		<!--//header-->
		<div class="container">
			<div class="banner-bottom">
				<ul>
					<li class="s1"><p>SCROLL DOWN</p><a href="#about" class="scroll"><img src="<?=base_url();?>assests/shevely/01/images/d-arw.png" alt="" /></a></li>
					<li class="s2"><p>SCROLL DOWN</p><a href="#about" class="scroll"><img src="<?=base_url();?>assests/shevely/01/images/d-arw.png" alt="" /></a></li>
				</ul>
			</div>
			<div class="bnr-grids">			
				<div class="col-md-4 bnr-left">
					<div class="b-one">
						<img  width="100%" src="<?=base_url();?>assests/shevely/01/images/3.png" alt="" />
						 
					</div>
				</div>

				<div class="col-md-4 bnr-left">
					<div class="b-two">
						<img width="100%"  src="<?=base_url();?>assests/shevely/01/images/2.png" alt="" />
						 
					</div>
				</div>

			 

				<div class="col-md-4 bnr-left">
					<div class="b-tre">
						<img  width="100%" src="<?=base_url();?>assests/shevely/01/images/1.png" alt="" />
						 
					</div>
					</div>
				<div class="clearfix"></div>
			</div>				
		</div>
	</div>
	<!--//banner-->
  
	<!--about-starts-->
	<div class="about" id="about">
		<div class="container">
			<div class="about-top heading">
		 
						<img  width="90%"     src="<?=base_url();?>assests/shevely/01/images/a3b45b4ea93b3a3d8f21899f03da704d.jpeg" alt="" />
					 
			 
				 
					
						
						
				
				
			
		
		</div>
		
	<!--about-end-->
	<!--gallery-starts-->
	<div class="gallery" id="gallery">
		<div class="container">
			<div class="gallery-top heading">
				<h3>shevely</h3>
			</div>
			<div class="gallery-bottom">
				<div class="gallery-grids">
					 <img  width="90%"     src="<?=base_url();?>assests/shevely/01/images/3aed78397acb7092bccd98c326d473e4.jpeg" alt="" />
						 
						</div>
					</div>
					<div class="clearfix"> </div>					
				</div>
			</div>
		</div>
	</div>
	<!--gallery-end-->
	<!--script-->
	<script src="<?=base_url();?>assests/shevely/01/js/modernizr.custom.97074.js"></script>
	<script src="<?=base_url();?>assests/shevely/01/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="<?=base_url();?>assests/shevely/01/css/chocolat.css" type="text/css" media="screen">
		<!--light-box-files-->
		<script type="text/javascript">
		$(function() {
			$('.gallery-grids a').Chocolat();
		});
		</script>
	<!--news-starts-->
	<div class="news" id="news">
		<div class="container">
			 <img   width="90%"   src="<?=base_url();?>assests/shevely/01/images/345b332fd21e2a8d910f7c313ee31d70.jpeg" alt="" />
				</div>
			</section>
		</div>
	</div>

 <form action="<?echo base_url(); ?>shevely/insertocart" onsubmit="return validate_form(this)"  method="post">

<div   class="news" id="advantages">
		 	<div class="container">


<table class="table table-striped" >
	<tr>
	<td><img width="100" src="<? echo base_url();?>assests/img/product/<?php echo $product[0]['prod_id'];?>/titleimage.jpg"><?=$product[0]['prod_name'];?>＋ </td>
	<td><img width="100" src="<? echo base_url();?>assests/img/product/<?php echo $product[1]['prod_id'];?>/titleimage.jpg"><?=$product[1]['prod_name'];?>＋</td>
		<td>●<?=$product[4]['prod_name'];?>●</td>
	<?
 if(!empty($this->session->userdata('user_accnum'))){	
?>
	<td >
 
	<select name="s1" id="s1">

			<option value=0>0</option>
			<option value=1>1</option>
			<option value=2>2</option>
			<option value=3>3</option>
			<option value=4>4</option>

			</select> =</td>

	<td id="p1">0</td>
	<?}else{?>
	<td>$692</td>
	<?}?>

	</tr>


	<tr>
	<td><img width="100" src="<? echo base_url();?>assests/img/product/<?php echo $product[1]['prod_id'];?>/titleimage.jpg"><?=$product[1]['prod_name'];?>＋</td>
	<td><img width="100" src="<? echo base_url();?>assests/img/product/<?php echo $product[2]['prod_id'];?>/titleimage.jpg"><?=$product[2]['prod_name'];?>＋</td>
		<td>●<?=$product[4]['prod_name'];?>●</td>
	<?
 if(!empty($this->session->userdata('user_accnum'))){	
?>
	<td >
 
	<select name="s2" id="s2">

			<option value=0>0</option>
			<option value=1>1</option>
			<option value=2>2</option>
			<option value=3>3</option>
			<option value=4>4</option>

			</select> =</td>

	<td id="p2">0</td>
	<?}else{?>
	<td>$692</td>
	<?}?>
	</tr>
		<tr>
	<td><img width="100" src="<? echo base_url();?>assests/img/product/<?php echo $product[2]['prod_id'];?>/titleimage.jpg"><?=$product[2]['prod_name'];?>＋</td>
	<td><img width="100" src="<? echo base_url();?>assests/img/product/<?php echo $product[3]['prod_id'];?>/titleimage.jpg"><?=$product[3]['prod_name'];?>＋</td>
		<td>●<?=$product[4]['prod_name'];?>●</td>
	<?
 if(!empty($this->session->userdata('user_accnum'))){	
?>
	<td >
 
	<select name="s3" id="s3">

			<option value=0>0</option>
			<option value=1>1</option>
			<option value=2>2</option>
			<option value=3>3</option>
			<option value=4>4</option>

			</select> =</td>

	<td id="p3">0</td>
	<?}else{?>
	<td>$692</td>
	<?}?>
	</tr>

	<tr>
	<td><img width="100" src="<? echo base_url();?>assests/img/product/<?php echo $product[0]['prod_id'];?>/titleimage.jpg"><?=$product[0]['prod_name'];?>＋</td>
	<td><img width="100" src="<? echo base_url();?>assests/img/product/<?php echo $product[3]['prod_id'];?>/titleimage.jpg"><?=$product[3]['prod_name'];?>＋</td>
		<td>●<?=$product[4]['prod_name'];?>●</td>
	<?
 if(!empty($this->session->userdata('user_accnum'))){	
?>
	<td >
 
	<select name="s4" id="s4">

			<option value=0>0</option>
			<option value=1>1</option>
			<option value=2>2</option>
			<option value=3>3</option>
			<option value=4>4</option>

			</select> =</td>

	<td id="p4">0</td>
	<?}else{?>
	<td>$692</td>
	<?}?>
	</tr>

	<tr>
	<td><img width="100" src="<? echo base_url();?>assests/img/product/<?php echo $product[1]['prod_id'];?>/titleimage.jpg"><?=$product[1]['prod_name'];?>＋</td>
	<td><img width="100" src="<? echo base_url();?>assests/img/product/<?php echo $product[3]['prod_id'];?>/titleimage.jpg"><?=$product[3]['prod_name'];?>＋</td>
	<td>●<?=$product[4]['prod_name'];?>●</td>

	<?
 if(!empty($this->session->userdata('user_accnum'))){	
?>
	<td >
 
	<select name="s5" id="s5">

			<option value=0>0</option>
			<option value=1>1</option>
			<option value=2>2</option>
			<option value=3>3</option>
			<option value=4>4</option>

			</select> =</td>

	<td id="p5">0</td>
	<?}else{?>
	<td>$692</td>
	<?}?>
	</tr>
</table>
 <h2 id="total">合計:</h2>
 

               
　
　


 
 
</div>

<br><br>
<div class="container">


 
<?
 if(!empty($this->session->userdata('user_accnum'))){	
?>

	
                <h4>購買人資料 <span style="font-size: 16px;color: red;">(即使選取超商取貨，請務必填寫地址欄位，以免無法送出訂單)</span></h4>


                		<?
						$user_name='';
						$user_email='';
						if(!empty($userdata)){
						$user_name=$userdata['user_name'];
						$user_email=$userdata['user_email'];

						} 


						?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">姓名</label>
                                    <div class="col-sm-8 col-md-8">
                                         <input class="form-control" required="" id="aname" name="aname" value="<?=$user_name?>">
                                    </div>
                            </div>

                            <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">E-mail</label>
                                    <div class="col-sm-8 col-md-8">
                                         <input class="form-control" required="" id="aemail" name="aemail" value="<?=$user_email?>">
                                    </div>
                            </div>

                           <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">手機</label>
                                    <div class="col-sm-8 col-md-8">
                                         <input class="form-control" required="" id="aphone" name="aphone">
                                    </div>
                            </div>

                           

                             <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">郵遞區號</label>
                                    <div class="col-sm-8 col-md-8">
                                         <input class="form-control" required="" id="apostalcode" name="apostalcode">
                                    </div>
                            </div>

                             <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">地址</label>
                                    <div class="col-sm-8 col-md-8">
                                         <input class="form-control" required=""  id="aaddress" name="aaddress">
                                    </div>
                            </div>
                        </div>
                    </div>
 
                <h4>收貨人資料<span style="font-size: 16px;color: red;">(請務必填寫正確中文姓名，以免無法正確投遞或導致無法取件)</span></h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="menber-info-input col-md-12">
                            <label><input type="checkbox" class="copy-data" id="yr"  name="yr"> 同購買人資料</label>
                        </div>
                        <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">姓名</label>
                                <div class="col-sm-8 col-md-8">
                                     <input class="form-control" required="" id="bname" name="bname">
                                </div>
                        </div>

                        <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">E-mail</label>
                                <div class="col-sm-8 col-md-8">
                                     <input class="form-control" required="" id="bemail" name="bemail">
                                </div>
                        </div>

                       <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">手機</label>
                                <div class="col-sm-8 col-md-8">
                                     <input class="form-control" required="" id="bphone" name="bphone">
                                </div>
                        </div>

                       

                         <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">郵遞區號</label>
                                <div class="col-sm-8 col-md-8">
                                     <input class="form-control" required="" id="bpostalcode" name="bpostalcode">
                                </div>
                        </div>

                         <div class="menber-info-input col-md-12">
                            <label class="col-sm-2 col-md-2 control-label">地址</label>
                                <div class="col-sm-8 col-md-8">
                                     <input class="form-control" required="" id="baddress" name="baddress">
                                </div>
                        </div>
                        </div>
                    </div>

                <h4>付款資訊</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="menber-info-input col-md-12">
                          

                            <label class="col-sm-2 col-md-2 control-label">付款方式</label>

                                <div class="col-md-10 col-xs-12">
                    <label><input type="radio" value="esun" name="payment" checked  onclick="myFunctionms()">信用卡</label>
                                <label>  
                                <input type="radio"   value="megaatm" name="payment" onclick="myFunctionatm()">ATM 轉帳</label>
                                  <label> 
                                  <input type="radio"  value="ubg" name="payment" onclick="myFunctionsuper()">超商取貨付款</label>
                                
                                <label><input type="radio"  value="pod" name="payment" onclick="myFunctionhome()">貨到付款</label>
   
   
   

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
                                     

                                     <label   id ="radio2"  >
                                    <input type="radio" id="radio2r" name="shipment" value="super"  checked  onclick="showsuper()"> 超商取貨</label>

                                       <label id ="radio1"  >
                                    <input type="radio" id="radio1r" name="shipment" value="home"    onclick="dissuper()"> 宅配</label>
                                     
  
  
				<br>
				  
				<br>
				<div id='super'>
				<p>
				  <input type="button" class="btn btn-default btn-primary" readonly name="button" id="button" value="選擇超商" onclick="in_store2(1);"/>
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
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="menber-info-input col-md-12">
                                <label class="col-sm-2 col-md-2 control-label">備註</label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control" name="note" cols="50" rows="10" id="note"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="submit" style="text-align: center;"> 
                    <input class="btn btn-default btn-primary" type="submit" value="送出">
 </form>


	</div>	</div></div>

<?}?>
<?
 if(empty($this->session->userdata('user_accnum'))){	
?>
 </form>
 <div class="container" id="all">
    <!-- MAIN SLIDER -->     
    <div class="login-registered col-md-offset-1 col-md-10 col-xs-12">     
        <div class="login col-md-6 col-xs-12">



           <h3>會員登入</h3>
           <div class="login-info col-md-12 col-xs-12">
           <form action="shevely/checklogin" method="post">
                <input class="form-control" placeholder="帳號" autofocus="" name="username" type="text">
                <input class="form-control" placeholder="密碼" name="password" type="password" value="">

                    <div class="col-md-6 col-xs-6 checkbox">
                        <label><input type="checkbox" name="remember"> 保持登入狀態 </label>
                    </div>
                    <div class="col-md-6 col-xs-6 forget-pwd-area">
                        <p class=" text-right forget-pwd checkbox">
                        <a href="https://www.604.com.tw/password/reset">忘記密碼  ?</a>
                        </p>
                    </div>  
               
                <input  type="submit" value="會員登入" class="btn-primary login-btn col-md-12 col-xs-12"></input>
            </div>
            <div class="col-xs-12 col-md-12">
                <h3>其他登入方式</h3>
                <div 
                class="fb-login-button" 
                data-max-rows="1" 
                data-size="large" 
                data-button-type="login_with" 
                data-show-faces="false" 
                data-auto-logout-link="false" 
                data-use-continue-as="false"
                scope="public_profile,email"
                
                onlogin="checkLoginState();"></div>
                
            </div>
        </div>
        
</Form >
        <form action="shevely/register" method="post">
        <div class="registered col-md-offset-1 col-md-5 col-xs-12">
            <h3>加入會員</h3>
            <div class="registered-info col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-md-3">
                        <p>帳號</p>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" required="" name="user_accnum">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>密碼</p>
                    </div>
                    <div class="col-md-9">
                        <input  class="form-control" required="" type="password" name="user_password">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <p>確認密碼</p>
                    </div>
                    <div class="col-md-9">
                    <input class="form-control" required="" type="password" name="user_passwordb">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>姓名</p>
                    </div>
                    <div class="col-md-9">
                    <input class="form-control" required="" name="user_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>E-mail</p>
                    </div>
                    <div class="col-md-9">
                    <input class="form-control" required="" name="user_email">
                    </div>
                </div>

                <div class="submit" style="text-align: center;"> 
            <input   class="btn-primary member col-md-12 col-xs-12" type="submit" value="註冊">
                </div>   
</form>


</div>
<?}else{?>
<div class="container">
<a href="shevely/logout">登出</a>
</div>
<?}?>
	<!--test-end-->
	<!--FlexSlider-->
	<link rel="stylesheet" href="<?=base_url();?>assests/shevely/01/css/flexslider.css" type="text/css" media="screen" />
	<script defer src="<?=base_url();?>assests/shevely/01/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
 
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<h3><a href="index.html">shevely</a></h3>
				</div>
				<div class="col-md-6 footer-right">
					<p>Copyright &copy; 2015.Company   </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>













 
								
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



<script type="text/javascript">
	$(document).ready(function(){
	$().UItoTop({ easingType: 'easeOutQuart' });


	$('#s1').on('change', function() {  
			var vale=this.value;
		 $('#p1').text(vale*692);
		  var total= parseInt($('#p1').text())+
  parseInt($('#p2').text())+
  parseInt($('#p3').text())+
  parseInt($('#p4').text())+
  parseInt($('#p5').text());
$('#total').text("合計:"+total);

	});
	$('#s2').on('change', function() {  
			var vale=this.value;
		 $('#p2').text(vale*692);
		  var total= parseInt($('#p1').text())+
  parseInt($('#p2').text())+
  parseInt($('#p3').text())+
  parseInt($('#p4').text())+
  parseInt($('#p5').text());
$('#total').text("合計:"+total);
	});

$('#s3').on('change', function() {  
			var vale=this.value;
		 $('#p3').text(vale*692);
		  var total= parseInt($('#p1').text())+
  parseInt($('#p2').text())+
  parseInt($('#p3').text())+
  parseInt($('#p4').text())+
  parseInt($('#p5').text());
$('#total').text("合計:"+total);

	});

$('#s4').on('change', function() {  
			var vale=this.value;
		 $('#p4').text(vale*692);
		  var total= parseInt($('#p1').text())+
  parseInt($('#p2').text())+
  parseInt($('#p3').text())+
  parseInt($('#p4').text())+
  parseInt($('#p5').text());
$('#total').text("合計:"+total);

	});

$('#s5').on('change', function() {  
			var vale=this.value;
		 $('#p5').text(vale*692);
		  var total= parseInt($('#p1').text())+
  parseInt($('#p2').text())+
  parseInt($('#p3').text())+
  parseInt($('#p4').text())+
  parseInt($('#p5').text());
$('#total').text("合計:"+total);

	});



　


		//取得超商或宅配
		//var shipment = $('input[name=shipment]:checked').val();
		//start ajax
		 //  $.ajax({
		// 	url:"<?=base_url()?>onepage/addcookit",
		// 	method:"POST",
		// 	data:{product_id:id,prod_name:name,product_qty:vale,product_price:price,shi:shipment},
		// 	success:function(data){

		// 		$('#total').text(data);
		 
		// 	}

		// });

	 //	end ajax

	
		 
		

	　
　




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
});

</script>


<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '119810032064208',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.10' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.



  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/zh_TW/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
  
    FB.api('me?fields=email,id,name', function(response) {
        post_to_url('<?=base_url();?>shevely/fblogin', 
            {'username':response.name,
          'usernid':response.id,
            'useremail':response.email});
    });



  }

  function post_to_url(path, params, method) {
    method = method || "post"; // Set method to post by default, if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", key);
        hiddenField.setAttribute("value", params[key]);

        form.appendChild(hiddenField);
    }

    document.body.appendChild(form);    // Not entirely sure if this is necessary
    form.submit();
}
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  }
</script>

		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--footer-end-->
</body>
</html>