<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

		class Post extends CI_Controller {
			public function index($classid=0,$offset=0){
				//$data['productsclass']=$this->Publicmodels->get_categories();
				$data['postclass']=$this->Publicmodels->postget_categories();

				 
				//一頁幾筆
					   $pageitem=4;
 
					 
					   $config['base_url'] =site_url("post/".$classid); 
					   $config['uri_segment'] =3;
					   $qry=$this->Publicmodels->postlist($classid,$pageitem);
					   $data['posts']=$qry[0];
					   $total=$qry[1];
					   $config['total_rows'] = $total;
			    	   $config['per_page'] =$pageitem; 
			   		   $this->pagination->initialize($config); 
			 		   $data['page_links']=$this->pagination->create_links();
				 

 				$hfdata['productsclass']=$this->Publicmodels->get_categories();
					$data['assestsurl']=base_url()."assests/static/";
					$this->load->view('templents/header',$hfdata);
					 
						 	$this->load->view("post/postlist",$data);
					$this->load->view('templents/footer');
			  
			}
 

				public function posttext($postid){
			//	$data['productsclass']=$this->Publicmodels->get_categories();
				$data['post']=$this->Publicmodels->getpost($postid);
				$data['postclass']=$this->Publicmodels->postget_categories();


			


 				$hfdata['productsclass']=$this->Publicmodels->get_categories();
					$data['assestsurl']=base_url()."assests/static/";
					$this->load->view('templents/header',$hfdata);
					 
				$this->load->view("post/post",$data);
					$this->load->view('templents/footer');
			}

		}