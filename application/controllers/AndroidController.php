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
		}

		public function fetch_caterer()
		{
			$data = $this->CateringModel->get_catering2();
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
			$data = $this->CategoryModel->get_menu($id);
			echo json_encode(array('pack_service_menu' => $data ));
		}

		public function fetch_customer_profile()
		{
			$id = $this->uri->segment(3);
			$data = $this->CustomerModel->get_client3($id);
			echo json_encode(array('pack_customer' => $data ));
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
				'package_id' => $this->input->post('package_id'),
				'price' => $this->input->post('price')
			);

			$this->BookingModel->insert($add);

		}
	}













?>