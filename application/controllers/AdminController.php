<?php

	Class AdminController extends CI_Controller
	{


		public function __construct()
		{
			parent::__construct();
			$this->load->model('CustomerModel');
			$this->load->model('CateringModel');
			$this->load->model('ServiceModel');
			$this->load->model('CategoryModel');
			$this->load->model('BookingModel');
			$this->load->model('CommentModel');
			$this->load->model('AdminModel');
		}

		public function index() //diri ang login view sa admin
		{
			$this->load->view('header/header_view');
			$this->load->view('Admin/login_view');
			$this->load->view('header/footer_view');
		}

		public function home() //admin home dashboard
		{
			$this->load->view('headerV2/header_view');
			$this->load->view('Admin/admin_home_view');
			$this->load->view('headerV2/footer_view');
		}

		public function get_customer()
		{
			$data['customer'] = $this->CateringModel->get_catering();
			$this->load->view('headerV2/header_view');
			$this->load->view('Admin/customer_view', $data);
			$this->load->view('headerV2/footer_view');
		}

		public function get_client()
		{
			$data['client'] = $this->CustomerModel->get_client2();
			$this->load->view('headerV2/header_view');
			$this->load->view('Admin/client_view', $data);
			$this->load->view('headerV2/footer_view');
		}


		public function deactivate() // sa catering
		{
			$id = $this->uri->segment(3);
	        $data = array(

	            //'confirm' => 0,
	            'active' => 'Deactivate'

	            );
	        $this->CateringModel->deactivate($data, $id);
	        redirect(base_url('AdminController/get_customer'));
		}

		public function deactivate_client() //sa client sa catering
		{
			$id = $this->uri->segment(3);
	        $data = array(

	            //'confirm' => 0,
	            'status' => 'Deactivate'

	            );
	        $this->CustomerModel->deactivate($data, $id);
	        redirect(base_url('AdminController/get_client'));
		}

		public function login()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');


			$result = $this->AdminModel->auth($username,$password);

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
	                    
	                    if($result[0]['user_type']=='admin'){
	                    //$this->_displayAlert('Login Successfully','AdminController/home');
	                    redirect(base_url('AdminController/home'));
	                    
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
			redirect(base_url('AdminController/index'));
		}

		public function _displayAlert($message,$cont){
      		echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    	}






	}



















?>