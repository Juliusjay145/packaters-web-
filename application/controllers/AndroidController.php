<?php

	Class AndroidController extends CI_Controller
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
		}

		public function fetch_caterer()
		{
			$id = $this->uri->segment(3);
			$data = $this->CateringModel->get_catering_premium($id);
			echo json_encode(array('pack_caterer' => $data));
		}

		public function get_map()
		{
			$data = $this->CateringModel->get_catering();
			echo json_encode(array('pack_caterer' => $data));
		}

		public function fetch_caterer_platinum()
		{
			$id = $this->uri->segment(3);
			$data = $this->CateringModel->get_catering_platinum($id);
			echo json_encode(array('pack_caterer' => $data));
		}

		public function fetch_caterer_gold()
		{
			$id = $this->uri->segment(3);
			$data = $this->CateringModel->get_catering_gold($id);
			echo json_encode(array('pack_caterer' => $data));
		}

		public function fetch_customer()
		{
			$data = $this->CustomerModel->get_client2();
			echo json_encode(array('pack_customer' => $data));
		}

		public function fetch_catering_provider()
		{
			$id = $this->uri->segment(3);
			$data = $this->CateringModel->get_caterer_profile($id);
			echo json_encode(array('pack_caterer' => $data ));
		}

		public function fetch_service()
		{
			$id = $this->uri->segment(3);
			$data = $this->ServiceModel->get_caterer_service($id);
			echo json_encode(array('pack_service' => $data ));
		}

		public function fetch_service_profile()
		{
			$id = $this->uri->segment(3);
			$data = $this->ServiceModel->get_service_profile($id);
			echo json_encode(array('pack_service' => $data ));
		}

		public function fetch_service_menu()
		{
			$id = $this->uri->segment(4);
			$this->db->where("status", "Active");
			$data = $this->CategoryModel->get_menu($id);
			echo json_encode(array('pack_service_menu' => $data ));
		}

		public function fetch_customer_profile()
		{
			$id = $this->uri->segment(3);
			$data = $this->CustomerModel->get_client3($id);
			echo json_encode(array('pack_customer' => $data ));
		}

		public function fetch_booking()
		{
			$id = $this->uri->segment(3);
			$data = $this->BookingModel->get_booking_customer($id);
			echo json_encode(array('pack_transaction' => $data));
		}

		public function bookCater()
		{
			$add = array(


				'package_name' => $this->input->post('package_name'),
				'pack_address' => $this->input->post('package_address'),
				'pack_date' => $this->input->post('p_date'),
				'pack_time' => $this->input->post('p_time'),
				'pack_caterer_id' => $this->input->post('pack_caterer_id'),
				'customer_id' => $this->input->post('customer_id'),
				'customer_fname' => $this->input->post('customer_fname'),
				'customer_lname' => $this->input->post('customer_lname'),
				'path_image' => $this->input->post('path_image'),
				'package_id' => $this->input->post('package_id'),
				'price' => $this->input->post('price')
			);

			$this->BookingModel->insert($add);
		}

		public function register_customer()
		{

			$image = $this->input->post('path_image');
			$path = "http://10.0.2.2/packaters/upload/". $image;

			$add = array(

				'cust_name' => $this->input->post('cust_name'),
				'cust_lastname' => $this->input->post('cust_lastname'),
				'cust_phonenum' => $this->input->post('cust_phonenum'),
				'cust_address' => $this->input->post('cust_address'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'path_image' => $image
			);

			$this->CustomerModel->insert($add);

		}

		public function pay()
		{
			$id = $this->uri->segment(3);
			$data = array(

				'customer_id' => $this->input->post('customer_id'),
				'pack_address' =>  $this->input->post('pack_address'),
				'pack_date' =>  $this->input->post('pack_date'),
				'pack_time' =>  $this->input->post('pack_time'),
				'status' => "Paid"

			);

			$this->BookingModel->updatecon($data, $id);
		}


		public function comment()
		{

			$data = array(

				'comment' => $this->input->post('comment'),
				'pack_customer_name' => $this->input->post('pack_customer_name'),
				'pack_customer_lname' => $this->input->post('pack_customer_lname'),
				'pack_caterer_id' => $this->input->post('pack_caterer_id'),
				'pack_customer_id' => $this->input->post('pack_customer_id')
			);

				$this->CommentModel->insert($data);
		}


		public function update_profile()
		{
			$id = $this->uri->segment(3);
			$data = array(

				'cust_name' => $this->input->post('cust_name'),
				'cust_phonenum' =>  $this->input->post('cust_phonenum'),
				'cust_address' =>  $this->input->post('cust_address')

			);

			$this->CustomerModel->update($data, $id);
		}




	}













?>