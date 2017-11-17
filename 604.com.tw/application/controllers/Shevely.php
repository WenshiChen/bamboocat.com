<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Shevely extends CI_Controller {
	public function index(){

	 $data['userdata']=array();
	if(!empty($this->session->userdata('user_accnum'))){
		  //有登入
		$user_accnum=$this->session->userdata('user_accnum');

		$user=	$this->db->where('user_accnum',$user_accnum)->get('user')->result_array()[0];
		 $data['userdata']=$user;
		 
	 }


	 //載入coocit
	 	

	 //---------------------
	$data['product']=array();
	$quert=	$this->Publicmodels->getproduct(31);
	array_push($data['product'], $quert);
	$quert=	$this->Publicmodels->getproduct(32);
	array_push($data['product'], $quert);
	$quert=	$this->Publicmodels->getproduct(33);
	array_push($data['product'], $quert);

	$quert=	$this->Publicmodels->getproduct(34);
	array_push($data['product'], $quert);
	$quert=	$this->Publicmodels->getproduct(35);
	array_push($data['product'], $quert);


 



	 $this->load->view('shevely/index',$data);



		
	}
 

		 public function updatecart(){
	 
 

		 	echo "總計:".$this->cart->total();

		 }	


		 public function addcookit(){
	 	 //ajax
		 	 
		 	 $id=(int)$_POST['product_id'];
		 	 $name=$_POST['prod_name'];
		 	 $qty=(int)$_POST['product_qty'];
		 	 $price=(int)$_POST['product_price'];
		     $shi=$_POST['shi'];
		     //全部存到cookit
		  		 
				  
	 		 
			 
			 
 		 

 		     
		 	 

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

				
 	 	header("refresh:1 ; ".base_url()."shevely");

}
public function logout(){
	$this->session->sess_destroy();
	echo "已登出";
	header("refresh:1 ; ".base_url()."shevely");

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
 		 
 				header("refresh:1; ".base_url()."shevely");

 		}else{
 			echo "登入失敗";
			  	header("refresh:1; ".base_url()."shevely");

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
			header("refresh:1; ".base_url()."shevely");
			return;
		}
		  
		 

			$plen=strlen($user_password);
		 
			if(!preg_match("/^(([a-z]+[0-9]+)|([0-9]+[a-z]+))[a-z0-9]*$/i",$user_password)||$plen<6||$plen>15){
		    echo '密碼必須為6-15的數字和字母組合';
		 	header("refresh:1; ".base_url()."shevely");
		    return;
		 
			}

			if (!preg_match("/^[A-Za-z0-9]+$/", $user_accnum))  
			{  
				echo "帳號驗證失敗";
					header("refresh:1; ".base_url()."shevely");
			  return; 
			}
			if($user_password==$user_accnum){
			echo "帳號密碼不能相同";
				header("refresh:1; ".base_url()."shevely");
			return;
			}

			$query=	$this->db->where('user_accnum', $user_accnum)->get('user')->result_array(); 
			if(!empty($query)){
			echo "帳號已經有人使用過";
			header("refresh:1; ".base_url()."shevely");
			 return; 
			}
			 

			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$user_email)) {
			  echo "無效的email格式";
				header("refresh:1; ".base_url()."shevely");
			 return; 

			}

			$queryemail=	$this->db->where('user_email', $user_email)->get('user')->result_array(); 
			if(!empty($queryemail)){
				echo "email已經有人使用過";
				header("refresh:1; ".base_url()."shevely");
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
 	 				header("refresh:1; ".base_url()."shevely");
				
			 
			
	}

	public function insertocart(){



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

	
		$this->cart->product_name_rules = '[:print:]';

 		 $s1= $this->input->post('s1');
 		 $s2= $this->input->post('s2');
 		 $s3= $this->input->post('s3');
 		 $s4= $this->input->post('s4');
 		 $s5= $this->input->post('s5');

	  		$pr35qty=$s1+$s2+$s3+$s4+$s5;

	  		 

	  		$sparray=array(0=>-1,1=>'無');



	  		$quert31=	$this->Publicmodels->getproduct(31);
	  		$quert32=	$this->Publicmodels->getproduct(32);
	  		$quert33=	$this->Publicmodels->getproduct(33);
	  		$quert34=	$this->Publicmodels->getproduct(34);
	  		$quert35=	$this->Publicmodels->getproduct(35);


	  		$pr31qty=$s1+$s4;
	  		$pr32qty=$s1+$s2+$s5;
	  		$pr33qty=$s2+$s3;
	  		$pr34qty=$s3+$s4+$s5;

	  	 		 
 		 $mydata1=array('id'=>31,
 			'qty'=>$pr31qty,
 			'price'=>449,
 		 	'name'=>$quert31['prod_name'].'',
 		 	'options' => array('sp_id' => $sparray[0],'sp_name'=>$sparray[1])
 		 	  );
 		  $mydata2=array('id'=>32,
 			'qty'=>$pr32qty,
 			'price'=>449,
 		 	'name'=>$quert32['prod_name'].'',
 		 	'options' => array('sp_id' => $sparray[0],'sp_name'=>$sparray[1])
 		 	  );
 		   $mydata3=array('id'=>33,
 			'qty'=>$pr33qty,
 			'price'=>449,
 		 	'name'=>$quert33['prod_name'].'',
 		 	'options' => array('sp_id' => $sparray[0],'sp_name'=>$sparray[1])
 		 	  );
 		    $mydata4=array('id'=>34,
 			'qty'=>$pr34qty,
 			'price'=>449,
 		 	'name'=>$quert34['prod_name'].'',
 		 	'options' => array('sp_id' => $sparray[0],'sp_name'=>$sparray[1])
 		 	  );
 		     $mydata5=array('id'=>35,
 			'qty'=>$pr35qty,
 			'price'=>-206,
 		 	'name'=>$quert35['prod_name'].'',
 		 	'options' => array('sp_id' => $sparray[0],'sp_name'=>$sparray[1])
 		 	  );
			   
 		  	  $this->cart->insert($mydata1);
 		   	  $this->cart->insert($mydata2);
			  $this->cart->insert($mydata3);
			  $this->cart->insert($mydata4);
			  $this->cart->insert($mydata5);


			 $this->load->view('index/checkview',$data);


	}


}