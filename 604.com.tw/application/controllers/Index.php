<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

 public function __construct()
       {
            parent::__construct();
			
       }



public function index(){
		//取得類別
	

	$data['product']=array();
	$quert=	$this->Publicmodels->getproduct(31);
	array_push($data['product'], $quert);
	$quert=	$this->Publicmodels->getproduct(32);
	array_push($data['product'], $quert);
	$quert=	$this->Publicmodels->getproduct(33);
	array_push($data['product'], $quert);

	$quert=	$this->Publicmodels->getproduct(34);
	array_push($data['product'], $quert);
	$quert=	$this->Publicmodels->getproduct(31);
	array_push($data['product'], $quert);
	$quert=	$this->Publicmodels->getproduct(32);
	array_push($data['product'], $quert);


	$data['productnew']=array();
	$quert=	$this->Publicmodels->getproduct(36);
	array_push($data['productnew'], $quert);

	$quert=	$this->Publicmodels->getproduct(37);
	array_push($data['productnew'], $quert);
	$quert=	$this->Publicmodels->getproduct(38);
	array_push($data['productnew'], $quert);
	$quert=	$this->Publicmodels->getproduct(39);
	array_push($data['productnew'], $quert);
	$quert=	$this->Publicmodels->getproduct(40);
	array_push($data['productnew'], $quert);
	$quert=	$this->Publicmodels->getproduct(41);
	array_push($data['productnew'], $quert);
	$quert=	$this->Publicmodels->getproduct(42);
	array_push($data['productnew'], $quert);
	$quert=	$this->Publicmodels->getproduct(43);
	array_push($data['productnew'], $quert);
	$quert=	$this->Publicmodels->getproduct(33);
	array_push($data['productnew'], $quert);
	$quert=	$this->Publicmodels->getproduct(34);
	array_push($data['productnew'], $quert);




	$data['productclass1']=array();
	$quert=	$this->Publicmodels->getproduct(43);
	array_push($data['productclass1'], $quert);
	$quert=	$this->Publicmodels->getproduct(10);
	array_push($data['productclass1'], $quert);
	$quert=	$this->Publicmodels->getproduct(39);
	array_push($data['productclass1'], $quert);
	$quert=	$this->Publicmodels->getproduct(40);
	array_push($data['productclass1'], $quert);
	$quert=	$this->Publicmodels->getproduct(39);
	array_push($data['productclass1'], $quert);
	$quert=	$this->Publicmodels->getproduct(40);
	array_push($data['productclass1'], $quert);



	$data['productclass2']=array();
	$quert=	$this->Publicmodels->getproduct(31);
	array_push($data['productclass2'], $quert);
	$quert=	$this->Publicmodels->getproduct(32);
	array_push($data['productclass2'], $quert);
	$quert=	$this->Publicmodels->getproduct(33);
	array_push($data['productclass2'], $quert);
	$quert=	$this->Publicmodels->getproduct(40);
	array_push($data['productclass2'], $quert);
	$quert=	$this->Publicmodels->getproduct(34);
	array_push($data['productclass2'], $quert);
	$quert=	$this->Publicmodels->getproduct(40);
	array_push($data['productclass2'], $quert);


	$data['post']=array();
	$quert=	$this->Publicmodels->getpost(11);
	array_push($data['post'], $quert);
	$quert=	$this->Publicmodels->getpost(12);
	array_push($data['post'], $quert);
	$quert=	$this->Publicmodels->getpost(13);
	array_push($data['post'], $quert);

	$hfdata['productsclass']=$this->Publicmodels->get_categories();
	$data['assestsurl']=base_url()."assests/static/";
	$this->load->view('templents/header',$hfdata);
	$this->load->view('index/index',$data);
	$this->load->view('templents/footer');
}
 

	public function removetocart(){

		$this->cart->remove($_POST['prod_id']);

		if($_POST['prod_id']=="cartsremoveall"){
			$this->cart->destroy();
			echo "";
			return;
		}

		$base_url=base_url();
			$assestsurl=base_url()."assests/static/";
			$i=0;
       		 foreach ($this->cart->contents() as $items) {
       		 	$i++;
       		 }	 
       		 if($i==0){
       		 	echo "";
       		 	return;
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




	}

public function addcart(){
	

	$quert=	$this->Publicmodels->getproduct($_POST['prod_id']);
	 



	$this->cart->product_name_rules = '[:print:]';

		$sparray=array(0=>-1,1=>'無');
	  	 
				 
 		 $mydata=array('id'=>$quert['prod_id'],
 			'qty'=>1,
 			'price'=>$quert['prod_newprice'],
 		 	'name'=>$quert['prod_name'].'',
 		 	'options' => array('sp_id' => $sparray[0],'sp_name'=>$sparray[1])
 		 	  );
			   
 		  $this->cart->insert($mydata);
 		    	
  			  	

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
                   

 		   
}

public function goto711(){
	$this->load->view('getstore_711_2');

}
public function gotook(){
	$this->load->view('getstore_3');
}

public function getshpietype($Logisticsid){

    

    $url='http://www.ubg.com.tw/upAPI/twPost_Status.php?API_clie_no=C000240654&API_KEY=ea6d4e0d2249991b2235fa0ed2c8305c&API_postNo='.$Logisticsid;
    $data=$this->geturl($url);

  	return $data;



}
public function geturl($url){
        $ch = curl_init();
                $options = array(
                CURLOPT_URL => $url,
             
                CURLOPT_HEADER => 0,
                CURLOPT_VERBOSE => 0,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_USERAGENT => "Mozilla/4.0 (compatible;)",
                CURLOPT_POST => true,
              
               // CURLOPT_POSTFIELDS => http_build_query($post_data),
                );
                curl_setopt_array($ch, $options);
                $result = curl_exec($ch);
                curl_close($ch);

   return $result;

 }


 


 



	 
	public function product($productid=''){

	
	$this->cart->product_name_rules = '[:print:]';


		$data['productsclass']=$this->Publicmodels->get_categories();
		

	 
		if($productid==''){
			return;
		}

		$product=	$this->Publicmodels->getproduct($productid);
		$data['product']=$product;
		$data['productsp']=$this->Publicmodels->getproductsp($productid);


	  

 		  if($this->input->post('qty')!=''){
 		 if($this->input->post('specification')!=''){
 		 $sp=	$this->input->post('specification');
 		 $spset='84m*177*&^$!@asojafoij';

 		 $sparray=explode($spset,$sp);
 		 if($sparray[0]=='-1'){
 		 	$sparray=array(0=>-1,1=>'無');
 		 }
	  	}else{
	  		$sparray=array(0=>-1,1=>'無');
	  	}
				 
 		 $mydata=array('id'=>$product['prod_id'],
 			'qty'=>$this->input->post('qty'),
 			'price'=>$product['prod_newprice'],
 		 	'name'=>$product['prod_name'].'',
 		 	'options' => array('sp_id' => $sparray[0],'sp_name'=>$sparray[1])
 		 	  );
			   
 		  $this->cart->insert($mydata);
 		 	  redirect('product/'.$productid);

	}
 	 

 
 	 


		if($product==''){
		echo "no product";
			return;
		} 
		if($product['prod_shelves']!=1){
			echo "no product";
			return;
		}
			$hfdata['productsclass']=$this->Publicmodels->get_categories();
			$data['assestsurl']=base_url()."assests/static/";
	$this->load->view('templents/header',$hfdata);
	 
			$this->load->view('index/product',$data);	
	$this->load->view('templents/footer');
 

			
		 
		 

	}



 
	public function productlist($classid='',$offset=0){
			//如果有搜尋
			if($this->input->post('find')!=''){
				$find=$this->input->post('find');
				$data=$this->Publicmodels->findproduct($find);
				$data['products']=$data;
				$data['page_links']="";


 			//取得類別
			$hfdata['productsclass']=$this->Publicmodels->get_categories();
			$data['assestsurl']=base_url()."assests/static/";

				$this->load->view('templents/header',$hfdata);
				$this->load->view('index/productlist',$data);
				$this->load->view('templents/footer');
				return;
			}
			//



				$pageitem=10;
				if($classid=='classid')
 				{
				 	$classid=$this->uri->segment(3);
					$data=$this->Publicmodels->testproduct($pageitem,$classid);
					$config['base_url'] =site_url("productlist/classid/".$classid); 
				    $total_rows=$this->Publicmodels->count($classid);
					   $config['uri_segment'] =4; 
					 
				}
				else{
					$data=$this->Publicmodels->testproduct($pageitem);
					 $config['base_url'] =site_url("productlist"); 
					  $total_rows=$this->Publicmodels->count();
					   $config['uri_segment'] =2; 
				}

			$this->cart->product_name_rules = '[:print:]';

			 

		 

		 	$data['products']=$data;
		 	
			 


			 $config['total_rows'] = $total_rows;
    		 $config['per_page'] =$pageitem; 
    		
   			
   			 $this->pagination->initialize($config); 
 			 $data['page_links']=$this->pagination->create_links();


 			//取得類別
			$hfdata['productsclass']=$this->Publicmodels->get_categories();
				$data['assestsurl']=base_url()."assests/static/";

				$this->load->view('templents/header',$hfdata);
				$this->load->view('index/productlist',$data);
				$this->load->view('templents/footer');
						



	}



	
	 
	public function goorder(){


		 if(count($this->cart->contents())<=0){
 		header("Location: ".base_url());
		 	return;

		 }
		 if(empty($this->session->userdata('user_accnum'))){
		  header("Location: ".base_url()."login");
		 	return;
		 }

		if($this->input->get('destroy'))

 	{


 		$this->cart->destroy();
 		header("Location: ".base_url());
		 	return;


	}



	if($this->input->get('del')!='')

 	{


 		$this->cart->remove($this->input->get('del'));
 		 if(count($this->cart->contents())<=0){
 		header("Location: ".base_url());
		 	return;

		 }


	}


 	if($this->input->get('id')!='')
 	{
 			$this->cart->insert($data['products'][$this->input->get('id')]);



 	}

 	if($this->input->post('update_cart')!=''){
 		unset($_POST['update_cart']);

 		$contents = $this->input->post();
 		foreach ($contents as $content ){
 			$info=array(
 				'rowid'=>$content['rowid'],
 				'qty'=>$content['qtys']


 				);




 			$this->cart->update($info);
 			 if(count($this->cart->contents())<=0){
 		header("Location: ".base_url());
		 	return;

		 }
 			 
 		}


 	}


//取得類別
			$data['productsclass']=$this->Publicmodels->get_categories();

				 $data['userdata']=array();
	if(!empty($this->session->userdata('user_accnum'))){
		  //有登入
		$user_accnum=$this->session->userdata('user_accnum');

		$user=	$this->db->where('user_accnum',$user_accnum)->get('user')->result_array()[0];
		 $data['userdata']=$user;
		 
	 }
		 
		$hfdata['productsclass']=$this->Publicmodels->get_categories();
	$data['assestsurl']=base_url()."assests/static/";
	$this->load->view('templents/header',$hfdata);
	$this->load->view('index/goorder',$data);
	$this->load->view('templents/footer');
		 


	}










	public function logout(){

	$this->session->sess_destroy();
	echo "已登出";
	header("refresh:1 ; ".base_url());



	}
	public function login(){
		 if(!empty($this->session->userdata('user_accnum'))){
		  header("Location: ".base_url());
		 	return;
		 }
	 
	$hfdata['productsclass']=$this->Publicmodels->get_categories();
	$data['assestsurl']=base_url()."assests/static/";
	$this->load->view('templents/header',$hfdata);
	$this->load->view('index/login');
	$this->load->view('templents/footer');
 
	 

	}






	public function fblogin(){
		$username= $this->input->post('username');
    	$usernid= $this->input->post('usernid');
    	$useremail= $this->input->post('useremail');

    	//判斷是否有在資料庫
    $query=	$this->db->where('user_accnum', $usernid)->get('user')->result_array(); 

			 if(empty($query)){
    	$user_password = substr(md5(uniqid(rand(), true)),0,15);
		//寫入資料庫
		$data = array(
				'user_accnum'=>$usernid,
				'user_name'=>$username,
				'user_password'=>$user_password,
				'user_email'=>$useremail,
				'user_auth'=>'0',
				'notify'=>'1',
				'user_typesof'=>'facebook'
				);
			  $this->db->insert('user',$data);
			 $query=	$this->db->where('user_accnum', $usernid)->get('user')->result_array(); 

			}
 		
		//寫入seation

			$usedata=$query[0];
				 $usersessionarray=array('user_id'=>$usedata['user_id'],

                	'user_accnum'=>$usedata['user_accnum'],
                	'user_name'=>$usedata['user_name'],
                	'user_auth'=>$usedata['user_auth'],
                	'user_email'=>$usedata['user_email'],
                	'notify'=>$usedata['notify']

					);

				$this->session->set_userdata($usersessionarray);
				echo "登入成功";

				
 	 	header("refresh:1 ; ".base_url());


	}

	 

	public function checklogin(){


	


 		$username=	$_POST['username'];
 		$password= $_POST['password'];

 		$userdataq =$this->db->query('SELECT * FROM `user` WHERE `user_accnum`=\''.$username.'\' AND   `user_password`=\''.$password.'\'' );

		$userdata=	$userdataq->result();

		  $usersessionarray=array();
 		if(!empty($userdata)){


 			$index=0;
 			 foreach ($userdata as $row)
       	 {
               $index++;

                $usersessionarray=array('user_id'=>$row->user_id,

                	'user_accnum'=>$row->user_accnum,
                	'user_name'=>$row->user_name,
                	'user_auth'=>$row->user_auth,
                	'user_email'=>$row->user_email,
                	'notify'=>$row->notify


                	

 			);
		if($index>0)break;



        }

 			

 			$this->session->set_userdata($usersessionarray);
 			echo "登入成功";
 		 
 			 header("refresh:1 ; ".base_url());

 		}else{
 			echo "登入失敗";
			  header("refresh:1 ; ".base_url()."login");

 		}




	}
	 
	// public function oktoorder(){


	// 	$username='arnoldsf26';

	// 	$this->publicmodels->getorderforuser($username);

	// 	// $data= 


	// 	// $this->load->view('templents/header');
	// 	// $this->load->view('carts/oktoorder',$data);
	// 	// $this->load->view('templents/footer');



	// }



	public function register(){

		$user_accnum=$this->input->post("user_accnum");
		$user_name=$this->input->post("user_name");
		$user_password=$this->input->post("user_password");
		$user_passwordb=$this->input->post("user_passwordb");
		$user_email=$this->input->post("user_email");

		if($user_password!=$user_passwordb){
			echo "密碼兩次輸入不同";
			header("refresh:1 ; ".base_url()."login");
			return;
		}
		  
		 

			$plen=strlen($user_password);
		 
			if(!preg_match("/^(([a-z]+[0-9]+)|([0-9]+[a-z]+))[a-z0-9]*$/i",$user_password)||$plen<6||$plen>15){
		    echo '密碼必須為6-15的數字和字母組合';
		    header("refresh:4 ; ".base_url()."login");
		    return;
		 
			}

			if (!preg_match("/^[A-Za-z0-9]+$/", $user_accnum))  
			{  
				echo "帳號驗證失敗";
				header("refresh:1; ".base_url()."login");
			  return; 
			}
			if($user_password==$user_accnum){
			echo "帳號密碼不能相同";
			header("refresh:1 ; ".base_url()."login");
			return;
			}

			$query=	$this->db->where('user_accnum', $user_accnum)->get('user')->result_array(); 
			if(!empty($query)){
			echo "帳號已經有人使用過";
			header("refresh:1; ".base_url()."login");
			 return; 
			}
			 

			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$user_email)) {
			  echo "無效的email格式";
			  header("refresh:1; ".base_url()."login");
			 return; 

			}

			$queryemail=	$this->db->where('user_email', $user_email)->get('user')->result_array(); 
			if(!empty($queryemail)){
				echo "email已經有人使用過";
				header("refresh:1; ".base_url()."login");
				 return; 
			}
    	 
		//寫入資料庫
		$data = array(
				'user_accnum'=>$user_accnum,
				'user_name'=>$user_name,
				'user_password'=>$user_password,
				'user_email'=>$user_email,
				'user_auth'=>'0',
				'notify'=>'1',
				'user_typesof'=>'web'
				);
			  $this->db->insert('user',$data);

			 $query=	$this->db->where('user_accnum', $user_accnum)->get('user')->result_array();	
			//寫入seation
			$usedata=$query[0];
				 $usersessionarray=array('user_id'=>$usedata['user_id'],

                	'user_accnum'=>$usedata['user_accnum'],
                	'user_name'=>$usedata['user_name'],
                	'user_auth'=>$usedata['user_auth'],
                	'user_email'=>$usedata['user_email'],
                	'notify'=>$usedata['notify']

					);

				$this->session->set_userdata($usersessionarray);
				echo "登入成功";
 	 			header("refresh:1 ; ".base_url());
				
			 
			
	}


	 
	public function useralloder($offset=1){
		$username=$this->session->userdata('user_accnum');
		 if(empty($username)){
		 	 header("Location: ".base_url()."login");
		 	return;
		 }

	 $pageline=3;

	 $data['data'] =	$this->Publicmodels->getuseralloder($username,$pageline);

	 
					 
		





	 $data['ord_createid_API_nowType']=array();
	 
	foreach ($data['data'] as $items) {
		$API_nowType='**待出貨**';

		$ord_shipped_id= $items['ord_shipped_id'];
		if(strpos($ord_shipped_id,'OK_no:')!==false){

			$ord_shipped_id=substr($ord_shipped_id, 6);
			$array=$this->getshpietype($ord_shipped_id);
			  
			 $API_nowType= explode('&',$array)[3];
		 
             $API_nowType=substr($API_nowType,12);

                if($API_nowType=='無資料'){
                    $API_nowType='已出貨';
               }     

	 
		} 


		$a=array( $items['ord_createid']=> $API_nowType);
		$data['ord_createid_API_nowType']+=$a;
 
			}
			 
		 
					  $config['base_url'] =site_url("useralloder"); 
					  $total_rows=$this->Publicmodels->useralloderconut($username);
					  $config['uri_segment'] =2; 
 			
					  $config['total_rows'] = $total_rows;
    				  $config['per_page'] =$pageline; 
    		
   			
   					 $this->pagination->initialize($config); 
 					 $data['page_links']=$this->pagination->create_links();
 					  
		 
 
	   			
	   				 $hfdata['productsclass']=$this->Publicmodels->get_categories();
					$data['assestsurl']=base_url()."assests/static/";
					$this->load->view('templents/header',$hfdata);
					 
								 $this->load->view('index/useralloder',$data);
					$this->load->view('templents/footer');



	 

	}




	public function  order($oderid){
		$username=$this->session->userdata('user_accnum');
		 if(empty($username)){
		 	 header("Location: ".base_url()."login");
		 	return;
		 }


	$alldata= $this->Publicmodels->oderdetaluseoderid($oderid);
	 
	 if($alldata['order']['ord_type']==11){
		//修改成24
		 $this->Publicmodels->UpdateEsunOder($oderid,1);
		//去刷卡頁面
		 $this->load->view('index/esun',$alldata);

		}else{

			 
	$hfdata['productsclass']=$this->Publicmodels->get_categories();
	$data['assestsurl']=base_url()."assests/static/";
	$this->load->view('templents/header',$hfdata);
		$this->load->view('index/oktoorder',$alldata);
	$this->load->view('templents/footer');
		}
 


	}
 
	//到時候要放使用者帳號當參數
	public function  ordertop(){

		$username=$this->session->userdata('user_accnum');
		 if(empty($username)){
		 	 header("Location: ".base_url()."login");
		 	return;
		 }

	 

	$alldata= $this->Publicmodels->getorderforusertest($username);

	if($alldata=='NO'){
		//header("Location: ".base_url());	 
		return;
	}
 
	
 
		 if($alldata['order']['ord_type']==11){
		//修改成24
		 $this->Publicmodels->UpdateEsunOder($alldata['order']['ord_createid'],1);
		//去刷卡頁面
		 $this->load->view('index/esun',$alldata);

		}else{

	


	$hfdata['productsclass']=$this->Publicmodels->get_categories();
	$data['assestsurl']=base_url()."assests/static/";
	$this->load->view('templents/header',$hfdata);
		$this->load->view('index/oktoorder',$alldata);
	$this->load->view('templents/footer');
		}

		 

		 

	}
	public function writetodborder(){

		

 		 $this->Publicmodels->writetodborder();

 		 redirect('ordertop');




	}


		//重新建立訂單
		public function ReOrder($orderid){
			//設定權限

		  $alldata= $this->Publicmodels->oderdetaluseoderid($orderid);

		    $this->cart->product_name_rules = '[:print:]';
  				$this->cart->destroy();

  				$oderdetal=$alldata['oderdetal'];
 		foreach($oderdetal as $items) {




 			$sparray=array('sp_id' =>-1,'sp_name'=>'無');

 			$spanem=$items['pro_specification'];


 			$spqry=$this->Publicmodels->getprosp($spanem);
 			if(!empty($spqry)){
 				$spid=$spqry[0]['sp_id'];

			$sparray=array('sp_id' =>$spid,'sp_name'=>$spanem);
 			}
 			



	  		$qty=(int)$items['orddetailed_quant'];
	  		$price=(int)$items['orddetailed_total']/$qty;
		    $items['orddetailed_total']/$items['orddetailed_quant'];

 		 $mydata=array('id'=>(int)$items['pud_id'],
 			'qty'=>$qty,
 			'price'=>$price,
 		 	'name'=>$items['prod_name'].'',
 		 	'options' => $sparray
 		 	  );

 		 	
			    // print_r($mydata);
 		  $this->cart->insert($mydata);
 		}





		$data['storid']='';
        $data['storename']='';
        $data['storaddress']='';
        $data['store_type']='';
             

         if(!empty($alldata['odercontarray']['ord_contac_storid'])){
         $data['storid']= $alldata['odercontarray']['ord_contac_storid'];
         $data['storename']= $alldata['odercontarray']['ord_contac_storename'];
         $data['storaddress']= $alldata['odercontarray']['ord_contac_storaddress'];
          $data['store_type']= $alldata['odercontarray']['ord_contac_type'];
              }

        
         $data['aname']= $alldata['odercontarray']['ord_contac_name'];
    	  $data['aemail']  =$alldata['odercontarray']['ord_contac_email'];
         $data['aphone']  =$alldata['odercontarray']['ord_contac_phone'];
          $data['apostalcode'] =$alldata['odercontarray']['ord_contac_postalcode'];
          $data['aaddress'] = $alldata['odercontarray']['ord_contac_address'];


        $data['bname'] = $alldata['odercontarray']['ord_contac_toname'];
        $data['bemail'] =$alldata['odercontarray']['ord_contac_toemail'];
        $data['bphone'] =$alldata['odercontarray']['ord_contac_tophone'];
        $data['bpostalcode'] =$alldata['odercontarray']['ord_contac_topostalcode'];
        $data['baddress']= $alldata['odercontarray']['ord_contac_toaddress'];


        $data['payment']= $alldata['order']['ord_cashfllow_id'];//付款方式
        $data['shipment']= $alldata['order']['ord_logistics_id'];//物流方式
        $data['note']= $alldata['order']['ord_memo'];//備註
        

        

        //echo $alldata['odercontarray']['ord_contac_storid'];


	   				 $hfdata['productsclass']=$this->Publicmodels->get_categories();
					$data['assestsurl']=base_url()."assests/static/";
					$this->load->view('templents/header',$hfdata);
					 
						 $this->load->view('index/reorder',$data);
					$this->load->view('templents/footer');
 	    	
			//print_r($alldata['oderdetal']);
		 



		}


		public function time(){
			date_default_timezone_set("Asia/Taipei");
			echo time();

		}
	public function checkview(){

		$this->form_validation->set_rules('aname','Aname','required');
		$this->form_validation->set_rules('aphone','Aphone','required');
		$this->form_validation->set_rules('aaddress','Aaddress','required');
		$this->form_validation->set_rules('bname','Bname','required');
		$this->form_validation->set_rules('bphone','Bphone','required');
		$this->form_validation->set_rules('baddress','Baddress','required');

		if($this->form_validation->run()==FALSE){
		 
			header("refresh:3 ; ".base_url()."chekout");
			echo "資料不完整";

			return;
		}else{

		$data['storid']='';
        $data['storename']='';
        $data['storaddress']='';
        $data['store_type']='';
             

        if(!empty($this->input->post('store_no'))){
        $data['storid']= $this->input->post('store_no');
        $data['storename']= $this->input->post('store_name');
        $data['storaddress']= $this->input->post('store_addr');
        $data['store_type']= $this->input->post('store_type');
            }

        
        $data['aname']= $this->input->post('aname');
    	$data['aemail']  =$this->input->post('aemail');
        $data['aphone']  =$this->input->post('aphone');
        $data['apostalcode'] = $this->input->post('apostalcode');
        $data['aaddress'] = $this->input->post('aaddress');


        $data['bname'] = $this->input->post('bname');
        $data['bemail'] =$this->input->post('bemail');
        $data['bphone'] =$this->input->post('bphone');
        $data['bpostalcode'] =$this->input->post('bpostalcode');
        $data['baddress']= $this->input->post('baddress');


        $data['payment']= $this->input->post('payment');//付款方式
        $data['shipment']= $this->input->post('shipment');//物流方式
        $data['note']= $this->input->post('note');//備註
        $data['yr']=  $this->input->post('yr');
        $hfdata['productsclass']=$this->Publicmodels->get_categories();
		$data['assestsurl']=base_url()."assests/static/";
		$this->load->view('templents/header',$hfdata);
		$this->load->view('index/checkview',$data);
		$this->load->view('templents/footer');

   


		}
 



	}

 





			public function esun(){

	$code = array(
        '00' => '核准',
        '01' => '請查詢銀行',
        '33' => '過期卡',
        '54' => '卡片過期',
        '62' => '尚未開卡',
        'L1' => '產品代碼錯誤',
        'L2' => '期數錯誤',
        'L3' => '不支援分期(他行卡)',
        'L4' => '產品代碼過期',
        'L5' => '金額無效',
        'L6' => '不支援分期',
        'L7' => '非限定卡別交易',
        'XA' => '紅利自付額有誤',
        'XB' => '紅利商品數量有誤',
        'XC' => '紅利商品數量超過可折抵上限',
        'XD' => '紅利商品折抵點數超過最高折',
        'XE' => '紅利商品傳入之固定點數有誤',
        'XF' => '紅利折抵金額超過消費金額',
        'X1' => '不允許使用紅利折抵現金功能',
        'X2' => '點數未達可折抵點數下限',
        'X3' => '他行卡不支援紅利折抵',
        'X4' => '此活動已逾期',
        'X5' => '金額未超過限額不允許使用',
        'X6' => '特店不允許紅利交易',
        'X7' => '點數不足',
        'X8' => '非正卡持卡人',
        'X9' => '紅利商品編號有誤或空白',
        'G0' => '系統功能有誤',
        'G1' => '交易逾時',
        'G2' => '資料格式錯誤',
        'G3' => '非使用中特店',
        'G4' => '特店交易類型不合',
        'G5' => '連線IP不合',
        'G6' => '訂單編號重複',
        'G7' => '使用未定義之紅利點數進行交易',
        'G8' => '押碼錯誤',
        'G9' => 'Session檢查有誤',
        'GA' => '無效的持卡人資料',
        'GB' => '不允許執行授權取消交易',
        'GC' => '交易資料逾期',
        'GD' => '查無訂單編號',
        'GE' => '查無交易明細',
        'GF' => '交易資料狀態不符',
        'GG' => '交易失敗',
        'GT' => '交易時間逾時',
        'GH' => '訂單編號重複送出交易',
        'GI' => '銀行紅利狀態不符',
        'GJ' => '出團日期不合法',
        'GK' => '延後出團天數超過限定天數',
        'GL' => '非限定特店，不可使用「玉山卡」參數',
        'GM' => '限定特店，必須傳送「玉山卡」參數',
        'GN' => '該卡號非玉山卡所屬',
        'GS' => '系統暫停服務',
        'GR' => '使用者取消刷卡介面',
        'OTHER' => '拒絕交易',
    );

	if (!empty($_GET['DATA'])) {
		 	 $str=$_GET['DATA'];
		 	 $sta =stripos($str, "=")+1;

			 $str=substr($str, $sta);
			 $rnd= stripos($str, ",");

			 $mystr=mb_strimwidth($str,0,$rnd);

//http://localhost/esun?DATA=RC=00,MID=8080537837,ONO=2017101701434647,LTD=20171017,LTT=094424,RRN=107290000324,AIR=991162,AN=550915******0101&MACD=e4b6825bba15877778b542473f184a0839cceab13bab6612faa06e8b39edfbe4
			 $ono=substr($str,stripos($str, "ONO=")+4);

			 if(strpos($ono,',')==''){
			 	echo  $ono;
			 }else{
			 	$ono=mb_strimwidth($ono,0,strpos($ono,','));
			 	echo $ono;
			 }
			 
			 if($mystr=='00'){
			 	// 交易成功
			  $this->Publicmodels->UpdateEsunOder($ono,0);


			 }else{
			 	//交易失敗 重新產生訂單

			  $this->Publicmodels->UpdateEsunOder($ono,1);
			 }

			 $res=  $code[$mystr];

			 header("Location: ".base_url()."order/".$ono);
		 	return;


			//echo $res;
		}

			//  $jsonStr = file_get_contents("php://input"); //read the HTTP body.
			// //echo $json = json_decode($jsonStr);
			// if (!empty($jsonStr)) {
			//   echo $jsonStr;
			// }
			// // POST DATA FROM CURL
			// if (empty($jsonStr)) {
			//   echo serialize($_POST);
			// }
			// // GET DATA FROM CURL
			// if (!empty($_GET)) {
			//   echo serialize($_GET);
			// }
			 
			}

	public function about(){

		 

		$this->load->view('index/about');
 
		 
	}




	public function onepage($url){

	}
 
}
