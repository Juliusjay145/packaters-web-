<?php

	Class CustomerController extends CI_Controller
	{

		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('CustomerModel');			
			$this->load->model('CateringModel');
			$this->load->model('BookingModel');
			$this->load->model('ServiceModel');						
		}

		public function register()
		{
			$this->load->view('header/header_view');
			$this->load->view('Customer/customer_register_view');
			$this->load->view('header/footer_view');
		}

		public function landing()
		{
			$this->load->view('header/header_view');
			$this->load->view('LandingPage/landing_view');
			$this->load->view('header/footer_view');
		}

		public function catering_profile($id)
		{
			$data['cater'] = $this->CateringModel->get_caterer_profile($id);
			$data['customer'] = $this->CustomerModel->get_client2();
			$data['service'] = $this->ServiceModel->get_service();
			$data['book'] = $this->BookingModel->get_booking();
			$this->load->view('header/header_view');
			$this->load->view('CateringProfile/catering_profile_view', $data);
			$this->load->view('header/footer_view');
		}

		public function login_view()
		{
			$this->load->view('header/header_view');
			$this->load->view('LandingPage/login_customer_view');
			$this->load->view('header/footer_view');
		}


		public function home()
		{
			$data['cater'] = $this->CateringModel->get_catering();
			$data['customer'] = $this->CustomerModel->get_client2();
			$this->load->view('header/header_view');
			$this->load->view('Customer/customer_home_view', $data);
			$this->load->view('header/footer_view');
		}

		public function settings()
		{
			$this->load->view('header/header_view');
			$this->load->view('Customer/customer_settings_view');
			$this->load->view('header/footer_view');
		}

		public function details()
		{
			$data['cater'] = $this->CateringModel->get_catering();
			$data['customer'] = $this->CustomerModel->get_client2();
			$data['book'] = $this->BookingModel->get_booking();
			$this->load->view('header/header_view');
			$this->load->view('Customer/customer_details_view', $data);
			$this->load->view('header/footer_view');
		}

		public function profile($customer_id)
		{
			$data['cater'] = $this->CateringModel->get_catering();
			$data['customer'] = $this->CustomerModel->get_customer_id($customer_id);
			$data['book'] = $this->BookingModel->get_booking();
			$this->load->view('header/header_view');
			$this->load->view('Customer/customer_profile_view', $data);
			$this->load->view('header/footer_view');
		}

		public function add_register()
		{
			$name = $this->input->post('name');
			$lastname = $this->input->post('lastname');
			$txtaddress = $this->input->post('address');
			$txtcontact = $this->input->post('number');
			$txtusername = $this->input->post('username');
			$txtpassword = $this->input->post('password');


			$image = $this->input->post('picture');
			$path = "http://192.168.43.19/packaters/upload/". $image;

			$add = array(

				'cust_name' => $name,
				'cust_lastname' => $lastname,
				'cust_address' => $txtaddress,
				'cust_phonenum' => $txtcontact,
				'username' => $txtusername,
				'password' => $txtpassword,
				'picture' => $image,
				'path_image' => $path

				);

				$this->CustomerModel->insert($add);
				$this->_displayAlert('Account has been updated','CustomerController/login_view');
				//$this->_displayAlert('Account Inerted');
		}

		public function login()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');


			$result = $this->CustomerModel->auth($username,$password);

			if($result){

					$validate = array(

							'username' =>$username,
							'password' =>$password

						);
					$this->session->set_userdata($validate);

					// if($result[0]['user_type']=='Client'){
					// 	$this->_displayAlert('Welcome Client','clients/home');
					// }

					 if($result[0]['status']=='Active'){
	                    
	                    if($result[0]['user_type']=='Customer'){
	                    $this->_displayAlert('Login Successfully','CustomerController/home');
	                    
	                    }

	                }

	                else{
	                    $this->_displayAlert('Please contact the admin to update your status','CustomerController/login_view');
	                } 
	        }        
		}


		public function update_profile()
		{
			$txtname = $this->input->post('name');
	        $lastname = $this->input->post('lastname');
	        $address = $this->input->post('address');
	        //$txtdetail = $this->input->post('pass');
	        $newpass = $this->input->post('pass');

	        $add = array(

	            'cust_name' => $txtname,
	            'cust_lastname' => $lastname,
	            'cust_address' => $address,
	            'password' => $newpass,
	            );

	        $this->CustomerModel->update2($add);
	        $this->_displayAlert('Account has been updated','CustomerController/home');	
	        //redirect(base_url('PestControl/update'));
		}






		public function logout()
		{
			$this->session->unset_userdata('username');
			redirect(base_url('CustomerController/landing'));
		}

		public function _displayAlert($message,$cont){
      		echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    	}




	}
















?>