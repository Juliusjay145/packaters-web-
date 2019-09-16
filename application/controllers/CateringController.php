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
			$this->load->model('CommentModel');
			$this->load->library('Session');
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
			$data['customer'] = $this->BookingModel->count_booking();
			$data['comments'] = $this->CommentModel->count_comment();
			$d=array('notification' => 0);
        	$this->BookingModel->updatenotification($d);
        	$s=array('notification' => 0);
        	$this->CommentModel->updatenotif($s);
        	$data['cater'] = $this->CateringModel->get_catering();
			$this->load->view('headerV2/header_view', $data);
			$this->load->view('Catering/catering_home_view');
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

		public function transaction_completed()
		{
			$data['cater'] = $this->CateringModel->get_catering();
			$data['customer'] = $this->CustomerModel->get_client2();
			$data['book'] = $this->BookingModel->get_booking();
			$data['catering'] = $this->ServiceModel->count_catering_service();
			$this->load->view('headerV2/header_view');
			$this->load->view('Transaction/completed_details_view', $data);
			$this->load->view('headerV2/footer_view');
		}

		public function transaction_reports()
		{
			$data['cater'] = $this->CateringModel->get_catering();
			$data['customer'] = $this->CustomerModel->get_client2();
			$data['book'] = $this->BookingModel->get_booking();
			$data['catering'] = $this->ServiceModel->count_catering_service();
			$this->load->view('headerV2/header_view');
			$this->load->view('Transaction/transaction_reports_view', $data);
			$this->load->view('headerV2/footer_view');
		}

		public function profile($sid)
		{
			$data['cateringss'] = $this->CateringModel->get_catering_id($sid);
			$data['cater'] = $this->CateringModel->get_catering();
			$this->load->view('headerV2/header_view');
			$this->load->view('Catering/profile_cater_view', $data);
			$this->load->view('headerV2/footer_view');
		}




		public function register()
		{
			$this->load->view('header/header_view');
			$this->load->view('Catering/catering_register_view');
			$this->load->view('header/footer_view');
		}

		public function register_premium()
		{
			$this->load->view('header/header_view');
			$this->load->view('Catering/premium_register_view');
			$this->load->view('header/footer_view');
		}

		public function register_platinum()
		{
			$this->load->view('header/header_view');
			$this->load->view('Catering/platinum_register_view');
			$this->load->view('header/footer_view');
		}


		public function login_view()
		{
			$this->load->view('header/header_view');
			$this->load->view('LandingPage/login_catering_view');
			$this->load->view('header/footer_view');
		}

		public function notfound()
		{
			$this->load->view('header/header_view');
			$this->load->view('LandingPage/notfound_view');
			$this->load->view('header/footer_view');
		}

		// public function profile()
		// {
		// 	$this->load->view('header/header_view');
		// 	$this->load->view('Catering/profile_cater_view');
		// 	$this->load->view('header/footer_view');
		// }

		public function subscription()
		{
			$this->load->view('header/header_view');
			$this->load->view('Catering/subscription_view');
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
        	$path = "http://192.168.43.19/packaters/upload/". $image;

        	$permit = $this->input->post('permit');
        	$path2 = "http://192.168.43.19/packaters/upload/". $permit;

         	$add = array(
                'cat_name' => $this->input->post('name'),
                'cat_address' => $this->input->post('address'),
                'cat_contactno' => $this->input->post('number'),
                'cat_details' => $this->input->post('details'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                "logo"=> $image,
                "path_image"=> $path,
                "status" => "Diamond",
                "lat" => "10.2971383",
                "longitude" => "123.8971083",
                "permit" => $path2
                        
       		);
                $this->CateringModel->insert($add);
                $this->_displayAlert('CateringController/login_view');
                //return('CateringController/login_view');
                //$this->_displayAlert('Account Inerted','PestControl/index');
		}

		public function add_register_premium()
		{
			$name = $this->input->post('name');
			$txtaddress = $this->input->post('address');
	        $txtcontact = $this->input->post('number');
			$txtdetails = $this->input->post('details');
			$txtusername = $this->input->post('username');
			$txtpassword = $this->input->post('password');





			$image = $this->input->post('logo');
        	$path = "http://192.168.43.19/packaters/upload/". $image;

        	$permit = $this->input->post('permit');
        	$path2 = "http://192.168.43.19/packaters/upload/". $permit;

         	$add = array(
                'cat_name' => $this->input->post('name'),
                'cat_address' => $this->input->post('address'),
                'cat_contactno' => $this->input->post('number'),
                'cat_details' => $this->input->post('details'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                "logo"=> $image,
                "path_image"=> $path,
                "status" => "Premium",
                "permit" => $path2
                        
       		);
                $this->CateringModel->insert($add);
                $this->_displayAlert('CateringController/login_view');
                //$this->_displayAlert('Register Successfully','CateringController/login_view');
                //$this->_displayAlert('Account Inerted','PestControl/index');
		}

		public function add_register_platinum()
		{
			$name = $this->input->post('name');
			$txtaddress = $this->input->post('address');
	        $txtcontact = $this->input->post('number');
			$txtdetails = $this->input->post('details');
			$txtusername = $this->input->post('username');
			$txtpassword = $this->input->post('password');





			$image = $this->input->post('logo');
        	$path = "http://192.168.43.19/packaters/upload/". $image;

        	$permit = $this->input->post('permit');
        	$path2 = "http://192.168.43.19/packaters/upload/". $permit;

         	$add = array(
                'cat_name' => $this->input->post('name'),
                'cat_address' => $this->input->post('address'),
                'cat_contactno' => $this->input->post('number'),
                'cat_details' => $this->input->post('details'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                "logo"=> $image,
                "path_image"=> $path,
                "status" => "Platinum",
                "lat" => "10.2971383",
                "longitude" => "123.8971083",
                "permit" => $path
                        
       		);
                $this->CateringModel->insert($add);
                $this->_displayAlert('CateringController/login_view');
                //$this->_displayAlert('Register Successfully','CateringController/login_view');
                //$this->_displayAlert('Account Inerted','PestControl/index');
		}

		public function confirm() //sa client sa catering
		{
			$id = $this->uri->segment(3);
	        $data = array(

	            //'confirm' => 0,
	            'status' => 'Confirm'

	            );
	        $this->BookingModel->updatecon($data, $id);
	        redirect(base_url('CateringController/transaction_completed'));
		}

		public function completed() //sa client sa catering
		{
			$id = $this->uri->segment(3);
	        $data = array(

	            //'confirm' => 0,
	            'status' => 'Completed'

	            );
	        $this->BookingModel->updatecon($data, $id);
	        redirect(base_url('CateringController/transaction_reports'));
		}

		public function cancel() //sa client sa catering
		{
			$id = $this->uri->segment(3);
	        $data = array(

	            //'confirm' => 0,
	            'status' => 'Cancel'

	            );
	        $this->BookingModel->updatecon($data, $id);
	        redirect(base_url('CateringController/transaction_reports'));
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

					 if($result[0]['active']=='Active'){
	                    
	                    if($result[0]['user_type']=='catering'){
	                    $this->_displayAlert('CateringController/home');
	                    
	                    }

	                }

	                else{
	                    $this->_displayAlert('CateringController/notfound');
	                } 
	        }
	    }




	    public function update()
	    {
	    	$name = $this->input->post('cat_name');
	        $address = $this->input->post('cat_address');
	        $contact = $this->input->post('cat_contactno');
	        $details = $this->input->post('cat_details');
	        $oldpass = $this->input->post('cat_password');
	        $newpass = $this->input->post('cat_oldpass');

	        $add = array(

	            'cat_name' => $name,
	            'cat_address' => $address,
	            'cat_contactno' => $contact,
	            'cat_details' => $details,
	            'password' => $oldpass,
	            );

	        $this->CateringModel->update($add);
	        redirect(base_url('CateringController/home'));
	        //$this->_displayAlert('Account has been updated','CateringController/home');
	    }

	    public function logout()
		{
			$this->session->unset_userdata('username');
			redirect(base_url('CateringController/index'));
		}
	    
	    public function _displayAlert($cont){
      		echo "<script>window.location='".base_url()."$cont';</script>";
    	}

    	public function _displayAlert2($cont){
      		echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    	}            

	}

?>