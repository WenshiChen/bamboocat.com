<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

private $limit=2;
public function index2($offset=1){
   

  $query['data']=  $this->Publicmodels->testproduct(2);
  $total_rows=$this->Publicmodels->count();

    $config["full_tag_open"] = '<ul class="pagination">';
    $config["full_tag_close"] = '</ul>';  
    $config["first_link"] = "&laquo;";
    $config["first_tag_open"] = "<li>";
    $config["first_tag_close"] = "</li>";
    $config["last_link"] = "&raquo;";
    $config["last_tag_open"] = "<li>";
    $config["last_tag_close"] = "</li>";
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '<li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '<li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['total_rows'] = $total_rows;
    $config['per_page'] =2; 
    $config['uri_segment'] =3; 
    $config['base_url'] =site_url("test/index2"); 

$this->pagination->initialize($config); 
 $query['page_links']=$this->pagination->create_links();


  $this->load->view("test",$query);

 
}
 


public function testfblogin(){
  // $this->load->library('session');
  //  $this->session->unset_userdata('username');
  // $this->session->set_userdata('username', $shceah);
  // $username=$this->session->userdata('username'); 

     // echo $this->input->post('username');
    // echo $this->input->post('usernid');
    // echo $this->input->post('useremail');
    //寫到資料庫

   // $this->load->view('testfblogin');

}


public function testLogisticsid(){

   $Logisticsid= $this->input->post('Logisticsid');

    $url='http://www.ubg.com.tw/upAPI/twPost_Status.php?API_clie_no=C000240654&API_KEY=ea6d4e0d2249991b2235fa0ed2c8305c&API_postNo='.$Logisticsid;
    $data['all'] =$this->geturlpost($url);

    
    $this->load->view('test',$data);



}
 // public function geturlpost($url){
 //        $ch = curl_init();
 //                $options = array(
 //                CURLOPT_URL => $url,
 //             //   考慮刪除範圍
 //               CURLOPT_HEADER => 0,
 //               CURLOPT_VERBOSE => 0,
 //               CURLOPT_RETURNTRANSFER => true,
 //               CURLOPT_USERAGENT => "Mozilla/4.0 (compatible;)",
 //               CURLOPT_POST => true,
 //               // 考慮刪除範圍
 //               CURLOPT_POSTFIELDS => http_build_query($post_data),
 //                );
 //                curl_setopt_array($ch, $options);
 //                $result = curl_exec($ch);
 //                curl_close($ch);

 //   return $result;

 // // $result_ar = json_decode($result, true);
 // }

	// $this->load->view('test');
	
	// $res=	file_get_contents('http://www.ubg.com.tw/upAPI/tw_post_Generate.php');
	// echo $res;
	 



 
 

public function eu(){

 $jsonStr = file_get_contents("php://input"); //read the HTTP body.
//echo $json = json_decode($jsonStr);
if (!empty($jsonStr)) {
  echo $jsonStr;
}
// POST DATA FROM CURL
if (empty($jsonStr)) {
  echo serialize($_POST);
}
// GET DATA FROM CURL
if (!empty($_GET)) {
  echo serialize($_GET);
}
 
}

public function geturlpost($url,$data_string){
                                                                               
      $ch = curl_init($url);                                                                      
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_CERTINFO, true);                                                                
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                           
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                  
      curl_setopt($ch, CURLOPT_HTTPHEADER,
       array(
        'Content-Type: application/json',
        'Content-Length: '.strlen($data_string)));  
      
    
      $result = curl_exec($ch);
       curl_close($ch);
       echo $result;
       // $result_ar = json_decode($result, true);
 }

public function curl_https($url, $data=array(), $timeout=30, $debug=false){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // 从证书中检查SSL加密算法是否存在
    curl_setopt($ch, CURLOPT_URL, $url);

      curl_setopt($ch, CURLOPT_HTTPHEADER,
       array(
        'Content-Type: application/json',
        'Content-Length: '.strlen($data))); 

    curl_setopt($ch, CURLOPT_POST, true);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);

    $response = curl_exec($ch);

    if($error=curl_error($ch)){
        die($error);
    }

     // 打印错误信息
     if($debug) 
     {

       echo '=====info====='."\r\n";
       print_r( curl_getinfo($ch) );

       echo '=====error====='."\r\n";
       print_r( curl_error($ch) );

       echo '=====$response====='."\r\n";
       print_r( $response );

    }

    curl_close($ch);
   
    return $response;

}

public function indexd2(){ 
        $url="https://acq.esunbank.com.tw/ACQTrans/esuncard/txnf014s";
         
         

     $datf= "{\"ONO\":\"201708090323218\",\"U\":\"http://localhost/test/eu\",\"MID\":\"8080537837\",\"TA\":\"800\",\"TID\":\"EC000001\"}K2YCRGSXK6JOPQRG1NPXY7OIQRTJJLVU";


     
                 

          
          
     $mydata=hash('SHA256',$datf);

         

      
     echo        $mydata;
  
     
 }
 

public function indexd(){
  $this->load->view('test');


}

//getorder id
public function getorderid(){
  date_default_timezone_set("Asia/Taipei");
  

 
$sleep=rand(9,0);
 
  
  list($usec, $sec) = explode(" ", microtime());

 $date = date("YmdHisx",$sec);


echo str_replace('x', substr($usec,2,3), $date).$sleep;

 

}


public function sleep(){

}
	 
}