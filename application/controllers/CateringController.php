<?php

	Class CateringController extends CI_Controller
	{


		public function __construct()
		{
			parent::__construct();
			$this->load->model('CateringModel');						
			$this->load->model('ServiceModel');						
			$this->load->model('BookingModel');
			$this->load->model('CustomerModel');
		}

		public function index()
		{
			$this->load->view('header/header_view');
			$this->load->view('LandingPage/landing_view');
			$this->load->view('header/footer_view');
		}

		public function home()
		{
			$data['catering'] = $this->ServiceModel->count_catering_service();
			$this->load->view('headerV2/header_view');
			$this->load->view('Catering/catering_home_view', $data);
			$this->load->view('headerV2/footer_view');
		}

		public function transaction()
		{
			$data['cater'] = $this->CateringModel->get_catering();
			$data['customer'] = $this->CustomerModel->get_client2();
			$data['book'] = $this->BookingModel->get_booking();
			$data['catering'] = $this->ServiceModel->count_catering_service();
			$this->load->view('headerV2/header_view');
			$this->load->view('Transaction/transaction_details_view', $data);
			$this->load->view('headerV2/footer_view');
		}



		public function register()
		{
			$this->load->view('header/header_view');
			$this->load->view('Catering/catering_register_view');
			$this->load->view('header/footer_view');
		}


		public function login_view()
		{
			$this->load->view('header/header_view');
			$this->load->view('LandingPage/login_catering_view');
			$this->load->view('header/footer_view');
		}

		public function add_register()
		{
			$name = $this->input->post('name');
			$txtaddress = $this->input->post('address');
	        $txtcontact = $this->input->post('number');
			$txtdetails = $this->input->post('details');
			$txtusername = $this->input->post('username');
			$txtpassword = $this->input->post('password');





			$image = $this->input->post('logo');
        	$path = "http://10.0.2.2/packaters/upload/". $image;

         	$add = array(
                'cat_name' => $this->input->post('name'),
                'cat_address' => $this->input->post('address'),
                'cat_contactno' => $this->input->post('number'),
                'cat_details' => $this->input->post('details'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                "logo"=> $image,
                "path_image"=> $path
                        
       		);
                $this->CateringModel->insert($add);
                //$this->_displayAlert('Account Inerted','PestControl/index');
		}



		public function login()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');


			$result = $this->CateringModel->auth($username,$password);

			if($result){

					$validate = array(

							'username' =>$username,
							'password' =>$password

						);
					$this->session->set_userdata($validate);

					// if($result[0]['user_type']=='Client'){
					// 	$this->_displayAlert('Welcome Client','clients/home');
					// }

					 // if($result[0]['status']=='Active'){
	                    
	                    if($result[0]['user_type']=='catering'){
	                    $this->_displayAlert('Login Successfully','CateringController/home');
	                    
	                    }

	                // }

	                else{
	                    $this->_displayAlert('Please contact the admin to update your status','Clients/valid');
	                } 
	        }
	    }






	    public function logout()
		{
			$this->session->unset_userdata('username');
			redirect(base_url('CateringController/index'));
		}
	    
	    public function _displayAlert($message,$cont){
      		echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    	}            

	}

?>