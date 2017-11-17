<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	    public function __construct()
       {
            parent::__construct();

         if(empty($this->session->userdata('user_ischage'))){
		 
		  
		 

         if(empty($this->session->userdata('user_accnum'))){
		  header("Location: ".base_url()."login");
		 	return;
		 }

		 $user_accnum=$this->session->userdata('user_accnum');
		 $query= $this->Publicmodels->admingetuser($user_accnum);


		 if($query['user_auth']!='1'){
		 	 header("Location: ".base_url());
		 	return;
		 }
		}

       }


    public function user(){

      $data['users']=	$this->Publicmodels->adminuserlist();

	   	$this->load->view('admin/templents/header');
		$this->load->view('admin/users/index',$data);
	 	$this->load->view('admin/templents/footer');

       }
       //編輯使用者
       public function useredit($user_accnum){
 		$query= $this->Publicmodels->admingetuser($user_accnum);
       	//權限
       	//密碼
       	$data['user']=$query;
	     $this->load->view('admin/templents/header');
	 	 $this->load->view('admin/users/useredit',$data);
	 	 $this->load->view('admin/templents/footer');

       }


       	public function un_userchange(){

       		$user_accnum=$this->session->userdata('user_ischage');

		 	$query= $this->Publicmodels->admingetuser($user_accnum);
		 	$this->session->unset_userdata('user_id');
			 $this->session->unset_userdata('user_accnum');
			 $this->session->unset_userdata('user_name');
			 $this->session->unset_userdata('user_auth');
			 $this->session->unset_userdata('user_email');
			 $this->session->unset_userdata('notify');
			 $this->session->unset_userdata('user_ischage');

       	     $usersessionarray=array('user_id'=>$query['user_id'],

                	'user_accnum'=>$query['user_accnum'],
                	'user_name'=>$query['user_name'],
                	'user_auth'=>$query['user_auth'],
                	'user_email'=>$query['user_email'],
                	'notify'=>$query['notify'],
                	 


 			);

       	  
		$this->session->set_userdata($usersessionarray);

			header("refresh:0 ; ".base_url()."admin/user");

          
       	}

       	//切換身分
        public function userchange($user_accnum){


 $query= $this->Publicmodels->admingetuser($user_accnum);

	//$this->session->sess_destroy();
 			$admin_accnum="";
 			if(empty($this->session->userdata('user_ischage'))){
 				$admin_accnum=$this->session->userdata('user_accnum');
 			}else{
 				$admin_accnum=$this->session->userdata('user_ischage');
 			}

 			if($admin_accnum==$user_accnum){
 				header("refresh:0 ; ".base_url()."admin/user");
 				return;
 			}
 			
			 $this->session->unset_userdata('user_id');
			 $this->session->unset_userdata('user_accnum');
			 $this->session->unset_userdata('user_name');
			 $this->session->unset_userdata('user_auth');
			 $this->session->unset_userdata('user_email');
			 $this->session->unset_userdata('notify');

       	     $usersessionarray=array('user_id'=>$query['user_id'],

                	'user_accnum'=>$query['user_accnum'],
                	'user_name'=>$query['user_name'],
                	'user_auth'=>$query['user_auth'],
                	'user_email'=>$query['user_email'],
                	'notify'=>$query['notify'],
                	'user_ischage'=>$admin_accnum


 			);

       	  
		$this->session->set_userdata($usersessionarray);

     	 header("refresh:0 ; ".base_url()."admin/user");

       }

       //刪除使用者
        public function userdelete($user_accnum){

	   	 	$this->Publicmodels->userdelete($user_accnum);
        	header("refresh:0 ; ".base_url()."admin/user");
       }
       //新增使用者 //給權限
        public function usercreate(){

		   	$this->load->view('admin/templents/header');
		 
		 	$this->load->view('admin/templents/footer');

       }




	public function order(){

		//SELECT * FROM orders INNER JOIN user ON orders.ord_user_id = user.user_id
		
		//從資料庫取得主檔資料
	$data['allorder'] =  $this->Publicmodels->getalloder();
	$data['ord_createid_API_nowType']=array();
	foreach ($data['allorder'] as $items) {
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

		$data['ord_createid_API_nowType']+=	$a;

	 
	}

 $this->load->view('admin/templents/header');
 
					
	 $this->load->view('admin/oderview',$data);
 	$this->load->view('admin/templents/footer');

  
	}

public function orderdetal($orderid){
	 


   




	 $alldata= $this->Publicmodels->oderdetaloderid($orderid);



	 if($alldata!=''){


	 	 $ord_shipped_id= $alldata['order']['ord_shipped_id'];
		 if(strpos($ord_shipped_id,'OK_no:')!==false){



		 	$alldata['ord_shipped']=$this->getshpietype(substr($ord_shipped_id, 6));


		 	 $API_nowType= explode('&',$alldata['ord_shipped'])[3];

                                   $API_nowType=substr($API_nowType,12);
                                   if($API_nowType=='無資料'){
                                    $API_nowType='已出貨';
                                     
                                   }
                          $alldata['ord_shipped_type']=$API_nowType;

		 	 $this->load->view('admin/templents/header');
 
						 $this->load->view('admin/oderdetal',$alldata);
 	$this->load->view('admin/templents/footer');




        }else{ 
                $alldata['ord_shipped_type'] ="待出貨";                  
           

	 		 $this->load->view('admin/templents/header');
			 $this->load->view('admin/oderdetal',$alldata);
 			 $this->load->view('admin/templents/footer');

	 		 if($this->input->method() ==='post'){
	 		 	 $url='http://www.ubg.com.tw/upAPI/tw_post_Generate.php';


	 		 	 $API_receiver= $alldata['odercontarray']['ord_contac_name'];//取貨人
	 		 	 $API_rece_gsm= $alldata['odercontarray']['ord_contac_phone'];//取貨人電話
	 		 	
 				$API_order_no=  $alldata['order']['ord_createid'];//訂單編號
	 		 	  $mystring='';
 				foreach ($alldata['oderdetal'] as $items) {
 						 $mystring .= 
 						 $items['prod_name']."(".$items['pro_specification']."),";

 				}

 				    $API_content =substr($mystring,0,-1);//商品
 					$API_none= $alldata['order']['ord_memo'];//備註
 				 
       				$API_cash= $alldata['order']['ord_total'];//總額
       				
       				$API_clie_type= $alldata['odercontarray']['ord_contac_type'];
       				if($API_clie_type=='7-11'){
       					$API_clie_type='3';
       				}else{
       					$API_clie_type='2';
       				}

       			$API_store_no=$alldata['odercontarray']['ord_contac_storid'];
       			$API_store_name=$alldata['odercontarray']['ord_contac_storename'];
       			$API_store_addr=$alldata['odercontarray']['ord_contac_storaddress'];

       				 
       				 
       				 
       		 $post_data=array(
            'API_clie_no'=>'C000026758',
            'API_KEY'=>md5('59865C000026758'),            
            'API_receiver'=>$API_receiver,
            'API_rece_gsm'=>$API_rece_gsm,
            'API_order_no'=>$API_order_no,
            'API_content'=>$API_content,
            'API_none'=>$API_none,
            'API_cash'=>$API_cash,
            'API_clie_type'=>$API_clie_type,
            'API_store_no'=>$API_store_no,
            'API_store_name'=>$API_store_name,
            'API_store_addr'=>$API_store_addr
            );




			 $OK=	$this->geturlpost($url,$post_data);
			if(strpos($OK,'Error')!==false){
				echo $OK;
			}else{
			    
			    $this->Publicmodels->updatashid($OK,$API_order_no);
			     redirect('admin/orderdetal/'.$orderid);

			}
		}

	 }
	 }
	 else{
	 	echo "NONO";
	 }
	 
	
	 echo "<br>";
  
	}

public function geturlpost($url,$post_data){
        $ch = curl_init();
                $options = array(
                CURLOPT_URL => $url,
             //   考慮刪除範圍
               CURLOPT_HEADER => 0,
               CURLOPT_VERBOSE => 0,
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_USERAGENT => "Mozilla/4.0 (compatible;)",
               CURLOPT_POST => true,
               // 考慮刪除範圍
               CURLOPT_POSTFIELDS => http_build_query($post_data),
                );
                curl_setopt_array($ch, $options);
                $result = curl_exec($ch);
                curl_close($ch);


   return $result;

 // $result_ar = json_decode($result, true);
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

 // $result_ar = json_decode($result, true);
 }





	public function product($offset=1){
		$this->load->library('session');

		$shceah=$this->input->post("shceah");
		if(isset($_POST['action'])){
		  switch ( $_POST['action'] ) {  
   			 case "shceahbtn":
   			if(empty($shceah)){
			$this->session->unset_userdata('shceah');

			}else{
			$this->session->set_userdata('shceah', $shceah);
			}
   			 break;
   			}
   		}

		
		 
		 
		
		 $shceah=$this->session->userdata('shceah');
		  $data['shceah']=$shceah;
		 $data['product']=$this->Publicmodels->adminproductlist(5,$shceah);
		 $total_rows=$this->Publicmodels->adminprocount($shceah);

		 $config['base_url'] =site_url("admin/product"); 
		 $config['total_rows'] = $total_rows;
    	 $config['per_page'] =5; 

    		
   			
   			 $this->pagination->initialize($config); 
 			 $data['page_links']=$this->pagination->create_links();

		 	$this->load->view('admin/templents/header');
		 	$this->load->view('admin/product/index',$data);
		 	$this->load->view('admin/templents/footer');

	 

	}





	public function productedit($productid){



			 $data['product']=$this->Publicmodels->getproduct($productid);

			if($data['product']==''){
				 
				 echo "無此商品";
				 header("refresh:1 ; ".base_url()."admin/product");
				return ;
			}
			 




		$prod_classid=$data['product']['prod_classid'];

		$data['categories']=$this->Publicmodels->get_categories();
			//取得商品類別
			$prod_class= $this->Publicmodels->get_prod_class($prod_classid);
			 $data['prod_class']=$prod_class;

			//取得單個商品規格
			$productsp= $this->Publicmodels->getproductsp($productid);

 			$data['productsp']=$productsp;
 			$data['productid']=$productid;
			$this->load->view('admin/templents/header');
		  	$this->load->view('admin/product/edit',$data);
			$this->load->view('admin/templents/footer');


			//*************************

			if(isset($_POST['action'])){


		  switch ( $_POST['action'] ) {  

   			 case "button1":
   			 $this->Publicmodels->editproduct($productid,1); 
   			 break;
   			 case "button2": 

   			 	if($_FILES['userfile']['size']>0){
			 	$jey=$productid;
			 	if(file_exists("assests/img/product/".$jey."/titleimage.jpg") )
							{
							  unlink("assests/img/product/".$jey."/titleimage.jpg");
							} 
			 			
   						$config['upload_path']='assests/img/product/'.$jey;
						$config['allowed_types']='gif|jpg|png|jpeg"';
						$config['max_size']='2048';
						$config['max_width']='1920';
						$config['max_height']='1080';
						$config['file_name']='titleimage.jpg';
						$config['overwrite']=TRUE;

						$this->load->library('upload',$config);

						if(!$this->upload->do_upload()){
							$errors= array('error'=>$this->upload->display_errors());
							   
						
						 

						}else{
							$data=array('upload_data'=>$this->upload->data());
							 
							 
						 

						}

						} //換張圖
   			 break;
   			 case "button3":  
   			 $this->Publicmodels->editproduct($productid,3);
   			 break;
   			 case "button4":  
   			$this->Publicmodels->editproduct($productid,4);
   			 break;
   			}
		  redirect("admin/productedit/".$productid);
}
	}


 

	public function product_create(){





	$data['categories']=$this->Publicmodels->get_categories();

	$this->form_validation->set_rules('prod_name','商品名稱','required');

	$this->form_validation->set_rules('prod_oprice','商品原價','required');
	$this->form_validation->set_rules('prod_newprice','商品價格','required');

	$this->form_validation->set_rules('prod_text','商品介紹內容','required');

		if($this->form_validation->run()===FALSE){
	 		$this->load->view('admin/templents/header');
		 	$this->load->view('admin/product/create',$data);
			$this->load->view('admin/templents/footer');
 		
	 

		}
		else{


			$jey=$this->Publicmodels->product_create();

 			if($jey>0){
				//取得商品最後一筆主鍵
						 
						if (!is_dir('assests/img/product/'.$jey)) {
							mkdir("assests/img/product/".$jey);

							}

						$config['upload_path']='assests/img/product/'.$jey;
						$config['allowed_types']='gif|jpg|png|jpeg';
						$config['max_size']='2048';
						$config['max_width']='1920';
						$config['max_height']='1080';
						$config['file_name']='titleimage.jpg';
						$config['overwrite']=TRUE;

						$this->load->library('upload',$config);

						if(!$this->upload->do_upload()){
							//圖片上船失敗
							$errors= array('error'=>$this->upload->display_errors());
							  $data['error']=$errors;
							 
							redirect('admin/product');

						}else{
							$data=array('upload_data'=>$this->upload->data());
							 
							
					 		 redirect('admin/product');

						}
					}
 			}
					 	
			


		}


		 
		
	 

	 
 
	





	//新增文章分類
	public function createpostclass(){
		$this->form_validation->set_rules('name','類別名稱','required');



		$data['post']=$this->Publicmodels->postget_categories();

		if($this->form_validation->run()===FALSE){
		$this->load->view('admin/templents/header');
		$this->load->view("admin/post/createcategories",$data);
		$this->load->view('admin/templents/footer');

			 
		}else{
		 $this->Publicmodels->postcreate_category();
			 
			header("Location: ".base_url()."admin/createpostclass");

		}


	}	
	//刪除文章分類
	public function deletepostclass($postclassid){
			//刪除類別
 		$this->db->delete('postclass', array('postclassid' => $postclassid)); 
		 
			redirect('admin/createpostclass');

		 

	}


		//新增文章
	public function createpost(){








	$data['categories']=$this->Publicmodels->postget_categories();

	$this->form_validation->set_rules('post_title','文章標題','required');

 
	$this->form_validation->set_rules('post_text','商品介紹內容','required');

		if($this->form_validation->run()===FALSE){
	 		$this->load->view('admin/templents/header');
		 	$this->load->view('admin/post/create',$data);
			$this->load->view('admin/templents/footer');
 		
	 

		}
		else{

	//取得文章最後一筆主鍵

						$insertid= $this->Publicmodels->post_create();
						$jey=$insertid;
		
						if($jey>0){
							 
								 
						if (!is_dir('assests/img/post/'.$jey)) {
							mkdir("assests/img/post/".$jey);
						}
						$config['upload_path']='assests/img/post/'.$jey;
						$config['allowed_types']='gif|jpg|png|jpeg';
						$config['max_size']='2048';
						$config['max_width']='1920';
						$config['max_height']='1080';
						$config['file_name']='titleimage.jpg';
						$config['overwrite']=TRUE;

						$this->load->library('upload',$config);

						if(!$this->upload->do_upload()){
							$errors= array('error'=>$this->upload->display_errors());
							  $data['error']=$errors;
							  //圖片上船失敗
							  redirect('admin/postlist');

							 
							 

						}else{
							$data=array('upload_data'=>$this->upload->data()); 
							
					 		 redirect('admin/postlist');

						}
					 	}
			


		}






















 

	}


	//編輯or刪除文章
	public function editpost($postid){
		//取得此文章
	$data['post']=$this->Publicmodels->getpost($postid);

		//文章類別
	$data['categories']=$this->Publicmodels->postget_categories();

		if(!empty($_POST['post_title'])){
	  
			$data = array(
			 
			'post_title'	=>$this->input->post('post_title'),
			'post_text'=>$this->input->post('post_text'),
			'post_classid'=>$this->input->post('category_id'));

			$this->db->where('post_id', $postid);
			$this->db->update('post', $data); 

		 	 

			 if($_FILES['userfile']['size']>0){
			 	$jey=$postid;
			 	if(file_exists("assests/img/post/".$jey."/titleimage.jpg") )
							{
							  unlink("assests/img/post/".$jey."/titleimage.jpg");
							}
			 	 		$jey=$postid;
   						$config['upload_path']='assests/img/post/'.$jey;
						$config['allowed_types']='gif|jpg|png|jpeg"';
						$config['max_size']='2048';
						$config['max_width']='1920';
						$config['max_height']='1080';
						$config['file_name']='titleimage.jpg';
						$config['overwrite']=TRUE;

						$this->load->library('upload',$config);

						if(!$this->upload->do_upload()){
							$errors= array('error'=>$this->upload->display_errors());
							   
						
						 

						}else{
							$data=array('upload_data'=>$this->upload->data());
							 
							 
						 

						} //換張圖
			 }

		redirect("admin/editpost/".$postid);
	}else{


	$this->load->view('admin/templents/header');
	$this->load->view('admin/post/edit',$data);
	$this->load->view('admin/templents/footer');
	}





	}	

		public function deletepost(){
		$post_id= 	$this->input->post("post_id");

		$this->db->delete('post', array('post_id' => $post_id)); 
		 
		 $this->deleteDir('assests/img/post/'.$post_id);
			echo "已刪除".$post_id;
			redirect('admin/postlist');

		}


public static function deleteDir($dirPath)
{
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            self::deleteDir($file); // recursion
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}
	//文章列表
 

	public function postlist($offset=1){
		$this->load->library('session');

		$shceah=$this->input->post("shceah");
		if(isset($_POST['action'])){
		  switch ( $_POST['action'] ) {  
   			 case "shceahbtn":
   			if(empty($shceah)){
			$this->session->unset_userdata('postshceah');

			}else{
			$this->session->set_userdata('postshceah', $shceah);
			}
   			 break;
   			}
   		}

		
		 
		 
		
		 $shceah=$this->session->userdata('postshceah');
		  $data['shceah']=$shceah;
		 $data['post']=$this->Publicmodels->adminpostlist(5,$shceah);
		 $total_rows=$this->Publicmodels->adminpostcount($shceah);

		 $config['base_url'] =site_url("admin/postlist"); 
		 $config['total_rows'] = $total_rows;
    	 $config['per_page'] =5; 

    		
   			
   			 $this->pagination->initialize($config); 
 			 $data['page_links']=$this->pagination->create_links();

		 	$this->load->view('admin/templents/header');
		 	$this->load->view('admin/post/postlist',$data);
		 	$this->load->view('admin/templents/footer');

	 

	}	

	 
	public function index(){

		 

 
					
	$this->load->view('admin/templents/header');
 	$this->load->view('admin/index');
 	$this->load->view('admin/templents/footer');

	 
	 
	}

	public function deletecreatecategories($createcategorieid) {

		//刪除類別
 		$this->db->delete('productclass', array('productclass_id' => $createcategorieid)); 
		 
			redirect('admin/createcategories');

		}



	public function createcategories() {



		$this->form_validation->set_rules('name','類別名稱','required');



		$data['prclass']=$this->Publicmodels->get_categories();

		if($this->form_validation->run()===FALSE){
			$this->load->view('admin/templents/header');
		 	$this->load->view('admin/product/createcategories',$data);
			$this->load->view('admin/templents/footer');

			 
		}else{
		 $this->Publicmodels->create_category();
			header("Location: ".base_url()."admin/createcategories");

		}









		 
		# code...
	}
	

}