<?php 
class Publicmodels extends CI_Model{

		public function __construct(){
			$this->load->database();
			 
		}


		//新增文章分類
			public function postcreate_category(){

			$data = array(
				'postclassname'=>$this->input->post('name')


				);
			return $this->db->insert('postclass',$data);

		}
		//取得文章所有分類
	public function postget_categories(){
		$this->db->order_by('postclassname');
		$query =$this->db->get('postclass');

		return $query->result_array();
	}


//新增文章
		public function post_create(){
			 $post_title=	$this->input->post('post_title');
		 
			$data = array(
			'post_title'	=>$post_title,	 
			'post_text'=>$this->input->post('post_text'),
			'post_classid'=>$this->input->post('category_id'),
			 );
 
			 $this->db->insert('post',$data);

		 return  $this->db->insert_id();
		


	}
	//取得單筆文章資料
	public function getpost($postid){

		if($postid!=''){
		 $query=$this->db->query("SELECT * FROM `post` WHERE `post_id` =".$postid);
		 $query=$query->result_array();
		 if(!empty($query)){
		 return $query[0];
		}else{
			return '';
		}
		}
		else{
		return '';
		}


	}









		public function create_category(){

			$data = array(
				'productclass_name'=>$this->input->post('name')


				);
			return $this->db->insert('productclass',$data);

		}



 


		//新增產品時要選擇產品的類別 的類別
	public function get_categories(){
		$this->db->order_by('productclass_name');
		$query =$this->db->get('productclass');

		return $query->result_array();
	}


		//取得此商品類別 參數: 商品內類別ID
		public function get_prod_class($prod_classid){

			 $query =$this->db->where('productclass_id',$prod_classid)->get('productclass')->result_array();
			 if(!empty($query)){
			return $query[0];
			 }
			 else{
			 	return '';
			 }

		
	}








		public function product_create(){
			 $prod_oprice=	$this->input->post('prod_oprice');
			 $prod_newprice=	$this->input->post('prod_newprice');
 			 $prod_shelves=	$this->input->post('prod_shelves');//上下架
 			 
 			 if($prod_shelves=='draft'){
 			 	$prod_shelves=0;

 			 }elseif($prod_shelves=='up'){
 			 	$prod_shelves=1;

 			 }elseif($prod_shelves=='down'){
 			 	$prod_shelves=2;
 			 }else{
 			 	redirect('admin/product/create');
			 	return;
 			 }

			 if(!is_numeric($prod_oprice)||!is_numeric($prod_newprice)){
			 	redirect('admin/product/create');
			 	return;
			 }
			 
			 if(!isset($_POST['prod_name'])){
				redirect('admin/product/create');
				return;
				}

 			 	 $prod_name=	$this->input->post('prod_name');
 			 	 $prod_name=trim($prod_name);

 			  if ($prod_name == "" ){
 			  	 redirect('admin/product/create');
				return;
 			  }
 			

			$data = array(
			 
			'prod_name'	=>$this->input->post('prod_name'),
			'prod_oprice'=>$prod_oprice,
			'prod_newprice'=>$prod_newprice,
			'prod_text'=>$this->input->post('prod_text'),
			'prod_classid'=>$this->input->post('category_id'),
			'prod_shelves'=>$prod_shelves

			 );

				$prod_erpid =$this->input->post('prod_erpid');
				$prod_erpwhse =$this->input->post('prod_erpwhse');

				 if(!empty($prod_erpid)){
				 	$prod_erpidarray=array('prod_erpid'=>$prod_erpid);
				 	$data=$data+$prod_erpidarray;

				 }
				 if(!empty($prod_erpwhse)){
				 	$prod_erpidarray=array('prod_erpwhse'=>$prod_erpwhse);
				 	$data=$data+$prod_erpidarray;

				 }
 
			  $this->db->insert('product',$data);




			
			$insert_id = $this->db->insert_id();

			if(isset($_POST['sp1'])){
 			 $sp1=	$this->input->post('sp1');
 			  $sp1=trim($sp1);
 			 
 			  if ($sp1 != "" ){
 			  	$this->createsp($insert_id,$sp1);

 			  }
 			}
 			 if(isset($_POST['sp2'])){
 			 $sp2=	$this->input->post('sp2');
 			  $sp2=trim($sp2);
 		 
 			  if ($sp2 != "" ){
 			  	$this->createsp($insert_id,$sp2);
 			  }
 			}
 			if(isset($_POST['sp3'])){
 			 $sp3=	$this->input->post('sp3');
 			  $sp3=trim($sp3);
 		 
 			  if ($sp3 != "" ){
 			  	$this->createsp($insert_id,$sp3);
 			  }
 			}

		 return $insert_id;
		 





	}
	public function editproduct($productid,$index){
		if($index==1){

			 $prod_oprice=	$this->input->post('prod_oprice');
			 $prod_newprice=	$this->input->post('prod_newprice');
			$data = array(
			 
			'prod_name'	=>$this->input->post('prod_name'),
			'prod_oprice'=>$prod_oprice,
			'prod_newprice'=>$prod_newprice,
			'prod_text'=>$this->input->post('prod_text'),
			'prod_classid'=>$this->input->post('category_id'),
		 

			 );

				$prod_erpid =$this->input->post('prod_erpid');
				$prod_erpwhse =$this->input->post('prod_erpwhse');

				 if(!empty($prod_erpid)){
				 	$prod_erpidarray=array('prod_erpid'=>$prod_erpid);
				 	$data=$data+$prod_erpidarray;

				 }
				 if(!empty($prod_erpwhse)){
				 	$prod_erpidarray=array('prod_erpwhse'=>$prod_erpwhse);
				 	$data=$data+$prod_erpidarray;

				 }
			 
			$this->db->where('prod_id', $productid);
			$this->db->update('product', $data); 
		}elseif($index==2){
			 
		}elseif($index==3){
			for($id=1;$id<=6;$id++){
				$sp='sp'.$id;
				if(!empty($_POST[$sp])){
					//判斷隱藏欄位
					$hidsp='hidspsp'.$id;
					  if($_POST[$hidsp]!=-1){
					  		//修改
					  		$spid=$_POST[$hidsp];
					  		$spname=$_POST[$sp];
					  		$data=array('sp_id'=>$spid,
					  			'sp_name'=>$spname);

					  		$this->db->where('sp_id', $spid);
					$this->db->update('product_specification', $data); 

					  }else{
					  		 
					  	$spname=$_POST[$sp];

					  	$data=array('pro_id'=>$productid,
					  			'sp_name'=>$spname);
					  	$this->db->insert('product_specification', $data);
					  }
				}else{
					$hidsp='hidspsp'.$id;
					  if($_POST[$hidsp]!=-1){
				 
						$this->db->delete('product_specification', array('sp_id' => $_POST[$hidsp])); 

					  }
				}

			}
		}elseif($index==4){

		$prod_shelves=	$_POST['prod_shelves'];

			$data = array(
			 
			'prod_shelves'	=>$prod_shelves,
			 
		 

			 );


			 
			$this->db->where('prod_id', $productid);
			$this->db->update('product', $data); 
			 
		}

	}

	//取得單個商品規格
	public function getproductsp($productid){

		if($productid!=''){

		$this->db->select('*');
		$this->db->from('product_specification');
		$this->db->where('pro_id',$productid);
		$res=$this->db->get();

		return $res->result_array();
		  
		}
		else{
		return '';
		}


	}
	//取得單個商品資料
	public function getproduct($productid){

		if($productid!=''){
		 $query=$this->db->query("SELECT * FROM `product` WHERE `prod_id` =".$productid);
		 $query=$query->result_array();
		 if(!empty($query)){
		 return $query[0];
		}else{
			return '';
		}
		}
		else{
		return '';
		}


	}

	public function getallproductname(){

		$query=$this->db->query("SELECT prod_id,prod_name,prod_classid,prod_cvimage FROM `product` ");

return $query->result_array();

	}
	public function getall($classid){

		if($classid!=''){
		$query=$this->db->query("SELECT * FROM `product` WHERE `prod_classid` =".$classid);
		}
		else{

			$query=$this->db->query('SELECT a.*, b.productclass_name FROM `product` as a INNER JOIN `productclass` as b ON a.prod_classid= b.productclass_id');


			}


			return $query->result_array();
		 
	 
	}



		public function getorderlast(){
		$query=$this->db->query(' SELECT MAX(ord_id) FROM  `orders` ');

			return $query->result_array()[0]['MAX(ord_id)'];
		}

	public function getproductidlast(){
		$query=$this->db->query(' SELECT MAX(prod_id) FROM  `product` ');

			return $query->result_array()[0]['MAX(prod_id)'];
		}
		public function getpostidlast(){

		$query=$this->db->query(' SELECT MAX(post_id) FROM  `post` ');

			return $query->result_array()[0]['MAX(post_id)'];
		}



		public function getorderforuser($username){


			

			//SELECT * FROM `user` WHERE `user_accnum`='arnoldsf26'
			 // $userid=$this->db->query('SELECT * FROM `user` WHERE `user_accnum`='.$username.'');

				 
			 //  $order=$this->db->query(' select * FROM `orders` where `'.$userid.'` = 1 ORDER BY `orders`.`ord_created_at` DESC limit 0,1;');

			 //  $oderdetal=$this->db->query('SELECT * FROM `ordersdetailed` WHERE `ord_createid`='.$order[0]['ord_createid'].'');

				// $odercont  =$this->db->query(SELECT * FROM `ord_contactuser` WHERE  `ord_cont_ordcreateid`='.$order[0]['ord_createid'].');



		}


		public function createsp($pro_id,$name){
			 
		 
			$data = array(
  			 
   			'pro_id' => $pro_id ,
   			'sp_name' => $name
					);

			$this->db->insert('product_specification', $data); 

		}


		public function getalloder(){
			  $order=$this->db->query('SELECT * FROM `orders`');




			   	$order=	$order->result_array();
			   	return $order;

		}
	



		//用訂單主KEY
		public function getorderusekey($orderkey){
			return $this->db->query(' SELECT * FROM `orders` WHERE `ord_id`=\''.$orderkey.'\' ORDER BY `orders`.`ord_created_at` DESC limit 0,1;')->result_array()[0];


		}
		//取得副檔
		public function getoderdetaluseodercreatid($orderid){

		return	$this->db->where('ord_createid',$orderid)->get('ordersdetailed')->result_array();

		}


		//查單價
		// public function getprod_newprice($proid){

		// 	$this->db->select('prod_newprice');

		// 	$query = $this->db->where('prod_id',$proid)->get('product')->result_array()[0];
		// 	return $query['prod_newprice'];
		// }
		//查規格
		public function getprosp($psname){
		$this->db->select('*');

			$query = $this->db->where('sp_name',$psname)->get('product_specification')->result_array();
			return $query;
		}


 	public function  oderdetaluseoderid($oderid){

		 $userid=$this->session->userdata('user_id');

			 

			 
				 


				 //用訂單編號從訂單主檔取得  
			   $order=$this->db->query(' SELECT * FROM `orders` WHERE `ord_createid`=\''.$oderid.'\' ORDER BY `orders`.`ord_created_at` DESC limit 0,1;');

			   	$order=	$order->result_array()[0];

			   	
				$alldata['order']=$order;

			   //取得訂單編號
			  	$ordercreateid  = $order['ord_createid'];
			 
			  	//取得使用者ID
			  	$ord_user_id=$order['ord_user_id'];


			  	//如果登入者跟此訂單編號的會員不符合
			  	if($userid!=$ord_user_id){
			  		 header("Location: ".base_url());
		 				return;
			  	}



				  //取得副檔內容
			  	 $oderdetal=$this->db->query('SELECT * FROM `ordersdetailed` WHERE `ord_createid`=\''.$ordercreateid.'\'');

				

			  	 $oderdetal=$oderdetal->result_array();
			
			  	//放有產品名稱的detal
			  	 $oderdetalnew =array();
			  	 
			  	 foreach ($oderdetal as $d1) {

			  	 			//用編號查詢名稱
			  		$prod_name=	$this->db->
			  				 query('SELECT `prod_name` FROM `product` WHERE `prod_id`=\''.$d1['pud_id'].'\'')->result_array()[0]['prod_name'];

				//找出規格名
			  		$sp_name=	$this->db->
			  				 query('SELECT `sp_name` FROM `product_specification` WHERE `sp_id`=\''.$d1['pro_specification'].'\'')->result_array();

			  				 
			  		if(!empty($sp_name)){
			  		$sp_name=	$sp_name[0]['sp_name'];

			  		}else{
			  			$sp_name='';
			  		}

			  	 	$pud_id= $d1['pud_id'].'<br>';
			  	 	$orddetailed_quant= $d1['orddetailed_quant'];
			  	 	$orddetailed_total= $d1['orddetailed_total'];

			  	 	 $ppp =array('prod_name'=>$prod_name,
			  	 	 	'pud_id'=>$pud_id,
			  	 	 	'pro_specification'=>$sp_name,
			  	 	 	'orddetailed_quant'=>$orddetailed_quant,
			  	 	 	'orddetailed_total'=>$orddetailed_total);

			  	 	   array_push($oderdetalnew,$ppp);
			  	 }


			  	   	$alldata['oderdetal']= $oderdetalnew;
			   

			   	//取得聯絡人收件人資訊
				 $odercont  =$this->db->query('SELECT * FROM `ord_contactuser` WHERE `ord_cont_ordcreateid`=\''.$ordercreateid.'\'');

					$odercontarray= $odercont->result_array()[0];
					$alldata['odercontarray']= $odercontarray;
				 


			 return $alldata;


 	}




 	//寫入國揚回的編號
 	public function updatashid($shid,$oderid){
 		$data = array(
               'ord_shipped_id' => $shid,
               'ord_type'=>'1' 
            );

		$this->db->where('ord_createid', $oderid);
		$this->db->update('orders', $data); 

 	}


















//管理者看訂單
public function  oderdetaloderid($oderid){

		 $userid=$this->session->userdata('user_id');

			 

			 
				 


				 //用訂單編號從訂單主檔取得  
			   $order=$this->db->query(' SELECT * FROM `orders` WHERE `ord_createid`=\''.$oderid.'\' ORDER BY `orders`.`ord_created_at` DESC limit 0,1;');

			   	if(empty($order->result_array())){
			   			return '';
			   	}
			   	$order=	$order->result_array()[0];

			   
				$alldata['order']=$order;

			   //取得訂單編號
			  	$ordercreateid  = $order['ord_createid'];
			 
			  	//取得使用者ID
			  	$ord_user_id=$order['ord_user_id'];


			  	//如果登入者跟此訂單編號的會員不符合
			  



				  //取得副檔內容
			  	 $oderdetal=$this->db->query('SELECT * FROM `ordersdetailed` WHERE `ord_createid`=\''.$ordercreateid.'\'');

				

			  	 $oderdetal=$oderdetal->result_array();

			
			  	//放有產品名稱的detal
			  	 $oderdetalnew =array();
			  	 
			  	 foreach ($oderdetal as $d1) {

			  	 			//用編號查詢名稱
			  		$prod_name=	$this->db->
			  				 query('SELECT `prod_name` FROM `product` WHERE `prod_id`=\''.$d1['pud_id'].'\'')->result_array()[0]['prod_name'];

				//找出規格名
			  		$sp_name=	$this->db->
			  				 query('SELECT `sp_name` FROM `product_specification` WHERE `sp_id`=\''.$d1['pro_specification'].'\'')->result_array();

			  				 
			  		if(!empty($sp_name)){
			  		$sp_name=	$sp_name[0]['sp_name'];

			  		}else{
			  			$sp_name='';
			  		}

			  	 	$pud_id= $d1['pud_id'].'<br>';
			  	 	$orddetailed_quant= $d1['orddetailed_quant'];
			  	 	$orddetailed_total= $d1['orddetailed_total'];

			  	 	 $ppp =array('prod_name'=>$prod_name,
			  	 	 	'pud_id'=>$pud_id,
			  	 	 	'pro_specification'=>$sp_name,
			  	 	 	'orddetailed_quant'=>$orddetailed_quant,
			  	 	 	'orddetailed_total'=>$orddetailed_total);

			  	 	   array_push($oderdetalnew,$ppp);
			  	 }


			  	   	$alldata['oderdetal']= $oderdetalnew;
			   

			   	//取得聯絡人收件人資訊
				 $odercont  =$this->db->query('SELECT * FROM `ord_contactuser` WHERE `ord_cont_ordcreateid`=\''.$ordercreateid.'\'');

					$odercontarray= $odercont->result_array()[0];
					$alldata['odercontarray']= $odercontarray;
				 


			 return $alldata;


 	}




		public function getorderforusertest($username){

			// $ff=array('stud'=>'arno','gaw'=>'123','koko'=>array('ioc'=>'cddfg','andr'=>'zf3'));
			// $mydata=array('class'=>$ff);
			// echo $mydata['class']['koko']['andr'];
			// return;




				 

					$alldata['username']=$username;

			   //SELECT * FROM `user` WHERE `user_accnum`='arnoldsf26'
    
			   //用帳號取得使用者ID
				 $userid=$this->db->query('SELECT user_id FROM`user` WHERE`user_accnum` = \''.$username.'\'');

				 $userid= $userid->result_array()[0]['user_id'];


				 //用使用者ID從訂單主檔取得 最新一筆 
			   $order=$this->db->query(' SELECT * FROM `orders` WHERE `ord_user_id`=\''.$userid.'\' ORDER BY `orders`.`ord_created_at` DESC limit 0,1;');
	
   			$order=	$order->result_array();
			    if(empty($order)){
			   		return 'NO';
			   	}
			   	$order=	$order[0];

			  

			   	
				$alldata['order']=$order;

			   //取得訂單編號
			  	$ordercreateid  = $order['ord_createid'];
			 



				  //取得副檔內容
			  	 $oderdetal=$this->db->query('SELECT * FROM `ordersdetailed` WHERE `ord_createid`=\''.$ordercreateid.'\'');

				

			  	 $oderdetal=$oderdetal->result_array();
			
			  	//放有產品名稱的detal
			  	 $oderdetalnew =array();
			  	 
			  	 foreach ($oderdetal as $d1) {

			  	 	//用編號查詢名稱
			  		$prod_name=	$this->db->
			  				 query('SELECT `prod_name` FROM `product` WHERE `prod_id`=\''.$d1['pud_id'].'\'')->result_array()[0]['prod_name'];

			  		//找出規格名
			  		$sp_name=	$this->db->
			  				 query('SELECT `sp_name` FROM `product_specification` WHERE `sp_id`=\''.$d1['pro_specification'].'\'')->result_array();

			  		//判斷是否為空
			  		if(!empty($sp_name)){
			  		$sp_name=	$sp_name[0]['sp_name'];

			  		}else{
			  			$sp_name='';
			  		}
			  		

			  	 	$pud_id= $d1['pud_id'].'<br>';
			  	 	$orddetailed_quant= $d1['orddetailed_quant'];
			  	 	$orddetailed_total= $d1['orddetailed_total'];
			   

			  	 	 $ppp =array(
			  	 	 	'prod_name'=>$prod_name,
			  	 	 	'pud_id'=>$pud_id,
			  	 	 	'pro_specification'	=>$sp_name,
			  	 	 	'orddetailed_quant'=>$orddetailed_quant,
			  	 	 	'orddetailed_total'=>$orddetailed_total);

			  	 	   array_push($oderdetalnew,$ppp);
			  	 }


			  	   	$alldata['oderdetal']= $oderdetalnew;
			   

			   	//取得聯絡人收件人資訊
				 $odercont  =$this->db->query('SELECT * FROM `ord_contactuser` WHERE `ord_cont_ordcreateid`=\''.$ordercreateid.'\'');

					$odercontarray= $odercont->result_array()[0];
					$alldata['odercontarray']= $odercontarray;
				 


			 return $alldata;

			 
 	}






public function getorderid(){
  date_default_timezone_set("Asia/Taipei");
  

 
$sleep=rand(9,0);
 
  
  list($usec, $sec) = explode(" ", microtime());

 $date = date("YmdHisx",$sec);


return str_replace('x', substr($usec,2,3), $date).$sleep;

 

}


	//寫入訂單
	public function writetodborder(){

		//取得訂單主檔最後一筆主鍵
		 

		//產生訂單編號
		$ordercreateid= $this->getorderid();

		$payment=$_POST['payment'];
		$shipment=$_POST['shipment'];

		


		$note=$_POST['note'];
		$ord_logistics_id='home';
		if($shipment!='home'){
			$ord_logistics_id=$shipment['store_type'].':'.$shipment['storename'];

			 
           
           
		}

		$ordertype=0;
		if($payment=='esun'){
			$ordertype=11;
		}
		$ord_user_id=$this->session->userdata('user_id');
			$dataorder = array(
			'ord_createid' => $ordercreateid,
			'ord_user_id'	=>$ord_user_id,
			'ord_cashfllow_id'=>$payment,
			'ord_logistics_id'=>$ord_logistics_id,
			'ord_shipped_id'=>'待出貨',
			'ord_type'=>$ordertype,
			'ord_total'=>$this->cart->total(), 
			'ord_memo'=>$note
			 );
			 $this->db->insert('orders',$dataorder);
		//主檔

		//ord_createid=ordercreateid
		//ord_user_id=tt60815	
		//ord_cashfllow_id=0
		//ord_logistics_id=0
		//ord_shipped_type=0
		//ord_type=0
		//ord_updated_at=date("YmdHis")
		//ord_total= $this->cart->total();
		//訂單副檔

			 //取得商品id 用來鎖定 已經被下單過的商品 不可被修改

			 $proidarray=array();
		 foreach ($this->cart->contents() as $items) {

 
		 		$dataorderdetailed = array(

			'ord_createid' => $ordercreateid,
			'pud_id'	=>$items['id'],
			'pro_specification'=>$items['options']['sp_id'],
			'orddetailed_quant'=>$items['qty'],
			'orddetailed_total'=>$items['subtotal'] );
		 		 
		 		array_push($proidarray, $items['id']);

		 $this->db->insert('ordersdetailed',$dataorderdetailed);
		

		//ord_createid=ordercreateid
		//pud_id= $items['id']
		//orddetailed_quant	=$items['qty']
		//orddetailed_total	=$items['subtotal']

	 	
	 	 }

	 





		$aname=$_POST['aname'];
		$aemail=$_POST['aemail'];
		$aphone=$_POST['aphone'];
		$apostalcode=$_POST['apostalcode'];
		$aaddress=$_POST['aaddress'];

		
		$bname=$_POST['bname'];
		$bemail=$_POST['bemail'];
		$bphone=$_POST['bphone'];
		$bpostalcode=$_POST['bpostalcode'];
		$baddress=$_POST['baddress'];
	 
		$ordcont = array(

			'ord_cont_ordcreateid' => $ordercreateid,
			'ord_contac_user_id'	=>$ord_user_id,
			'ord_contac_name'=>$aname,
			'ord_contac_email'=>$aemail,
			'ord_contac_phone'=>$aphone,
			'ord_contac_postalcode'=>$apostalcode,
			'ord_contac_address'=>$aaddress,



			'ord_contac_toname'=>$bname,
			'ord_contac_toemail'=>$bemail,
			'ord_contac_tophone'=>$bphone, 
			'ord_contac_topostalcode'=>$bpostalcode,
			'ord_contac_toaddress'=>$baddress
			 );

			if($shipment!='home'){
			
		
 			$dataadd=array(
            'ord_contac_storid'=>$shipment['storid'],
            'ord_contac_storename'=>$shipment['storename'],
            'ord_contac_storaddress'=>$shipment['storaddress'],
            'ord_contac_type'=>$shipment['store_type']);

    		 $post_dataadd=  $ordcont+$dataadd;
			$this->db->insert('ord_contactuser',$post_dataadd);


		}else{
			$this->db->insert('ord_contactuser',$ordcont);
		}

		 	
			$this->cart->destroy();
		  

		  		

			//鎖定商品
			foreach ($proidarray as $item) {
			$proidarrayit=array('prod_lock'=>1);

			$this->db->where('prod_id', $item);
			$this->db->update('product', $proidarrayit); 
			 
			}
		

		 	 return  $ordercreateid;
		 	 
		//聯絡人
		//ord_cont_ordcreateid=orde. rcreateid
		//ord_contac_user_id=tt60815
		//ord_contac_name=$aname;
		//ord_contac_phone=$aphone
		//ord_contac_address=$aaddress
		//ord_contac_toname=$bname
		//ord_contac_tophone=$bphone
		//ord_contac_toaddress=$baddress





	 



		 
	}



	public function getuseralloder($username,$limit=10){
			  //用帳號取得使用者ID
				 $userid=$this->db->query('SELECT user_id FROM`user` WHERE`user_accnum` = \''.$username.'\'');
				 $userid= $userid->result_array()[0]['user_id'];
				  
				
				$offset=$this->uri->segment(2);
			   
			    
			   	return	 $this->db->limit($limit,$offset)->where('ord_user_id',$userid)->order_by('ord_created_at','DESC')->get('orders')->result_array();

//ORDER BY `orders`.`ord_created_at` DESC'
		}

public function useralloderconut($username=''){
	if($username!=''){
		$userid=$this->db->query('SELECT user_id FROM`user` WHERE`user_accnum` = \''.$username.'\'');
				 $userid= $userid->result_array()[0]['user_id'];
		$this->db->where('ord_user_id', $userid);
	$this->db->from('orders');
	return $this->db->count_all_results();

	}else{
		return $this->db->count_all_results('orders');
	}

}


	public function userdelete($user_accnum){

		$this->db->delete('user', array('user_accnum' => $user_accnum)); 

	}

	 public function admingetuser($user_accnum){
	 	return $this->db->where('user_accnum',$user_accnum)->get('user')->result_array()[0];

	 }


 public function adminuserlist($limit=10,$shceah=''){
//$offset=$this->uri->segment(3);
 	$offset=1;
	if($shceah==''){	
		return $this->db->limit($limit,$offset)->order_by("created_at", "desc")->get('user')->result_array();
		}else{
		return	$this->db->limit($limit,$offset)->like('user_name',$shceah)->order_by("created_at", "desc")->get('user')->result_array();

		}
 	 

}






public function adminpostlist($limit=10,$shceah=''){
$offset=$this->uri->segment(3);
	if($shceah==''){	
		return $this->db->limit($limit,$offset)->order_by("created_at", "desc")->get('post')->result_array();
		}else{
		return	$this->db->limit($limit,$offset)->like('post_title',$shceah)->order_by("created_at", "desc")->get('post')->result_array();

		}
 	 

}

public function postlist($classid=0,$limit=10){
	$offset=$this->uri->segment(3);
	
	if($classid!=0){
	$qry=$this->db->limit($limit,$offset)->where('post_classid',$classid)->order_by("created_at", "desc")->get('post')->result_array();

		$this->db->where('post_classid', $classid);

	$total= $this->db->count_all_results('post');
 	}else{
 		$qry=$this->db->limit($limit,$offset)->order_by("created_at", "desc")->get('post')->result_array();

 		 
		$total= $this->db->count_all_results('post');

 	}

 	 

 	return array($qry,$total);	 
 	 

}





public function findproduct($find){

	return	$this->db->like('prod_name',$find)->where('prod_shelves', 1)->order_by("prod_create_at", "desc")->get('product')->result_array();


}




public function adminpostcount($shceah=''){
	 
	 	if($shceah==''){
		return $this->db->count_all_results('post');
	 }else{

		$this->db->like('post_title', $shceah);
		return $this->db->count_all_results('post');

	  
	 
	 }

}


public function adminproductlist($limit=10,$shceah=''){
$offset=$this->uri->segment(3);
	if($shceah==''){	
		return $this->db->limit($limit,$offset)->order_by("prod_create_at", "desc")->get('product')->result_array();
		}else{
		return	$this->db->limit($limit,$offset)->like('prod_name',$shceah)->order_by("prod_create_at", "desc")->get('product')->result_array();

		}
 	 

}
public function adminprocount($shceah=''){
	 
	 	if($shceah==''){
		return $this->db->count_all_results('product');
	 }else{

		$this->db->like('prod_name', $shceah);
		return $this->db->count_all_results('product');

	  
	 
	 }

}






 public function testproduct($limit=10,$classid=''){

 	
 	 
 	if($classid!=''){
 		$offset=$this->uri->segment(4);
 		 

 	return  $this->db->limit($limit,$offset)->where('prod_classid',$classid)->where('prod_shelves', 1)->get('product')->result_array();
 	}else{
 		$offset=$this->uri->segment(2);
return $this->db->limit($limit,$offset)->where('prod_shelves', 1)->get('product')->result_array();
 	}
 }

public function count($classid=''){
	if($classid!=''){
		$this->db->where('prod_classid', $classid)->where('prod_shelves', 1);
	$this->db->from('product');
	return $this->db->count_all_results();

	}else{
		$this->db->where('prod_shelves', 1);
		return $this->db->count_all_results('product');
	}

}


			//更新信用卡交易結果至訂單主檔
			public function UpdateEsunOder($orderid,$rc){
				$data=array();
						if($rc==0){

							//暫定12是已經付款
					  	$data=array('ord_type'=>12);
					  	}else{
					  		//暫定24是交易失敗
					  	$data=array('ord_type'=>24);
					  		
					  	}

					$this->db->where('ord_createid', $orderid);
					$this->db->update('orders', $data); 


			}
 
}
 
