<?php

class Pages extends CI_Controller{


	function view($page = 'home'){

		/* if( !function_exists('apache_get_modules')){
        	echo 'Rewrite module not available';
		 }else{
		    if(in_array('mod_rewrite',apache_get_modules()))
		        echo 'Rewrite module enabled';
		    else
		    	echo ' eRewrite module not available';

		 }exit();
		 */

		$data['title'] = SITENAME;

		$this->load->helper('url');

		if( ! file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$this->load->view('templates/header',$data);
		if($page == 'home'){
			$this->load->view('templates/slider');
		}
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}

	function about($page = 'about')
	{

		$data['title'] = "About Us";
		$this->load->helper('url');
		if( ! file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$this->load->view('templates/header',$data);
		$this->load->view("pages/about",$data);
		$this->load->view('templates/footer');
	}


	function services($page = 'services')
	{

		$data['title'] = "Services";
		if( ! file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$this->load->view('templates/header',$data);
		$this->load->view("pages/contact",$data);
		$this->load->view('templates/footer');
	}
	
	function portfolio($page = 'portfolio')
	{

		$data['title'] = "Portfolio";
		if( ! file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$this->load->view('templates/header',$data);
		$this->load->view("pages/contact",$data);
		$this->load->view('templates/footer');
	}

	function products($page = 'products')
	{

		$data['title'] = "drupal";
		if( ! file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$this->load->view('templates/header',$data);
		$this->load->view("pages/drupal",$data);
		$this->load->view('templates/footer');
	}
	

	function contact($page = 'contact')
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('table');
		$data['title'] = "Contact Us";
		if( ! file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		

		
	     $data["contact_form"] = $this->config->item("contact_rules");
	 
	     
	    

		$this->load->view('templates/header',$data);
		$this->load->view("pages/contact",$data);
		$this->load->view('templates/footer');
	}


}

?>