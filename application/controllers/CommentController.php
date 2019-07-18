<?php

	Class CommentController extends CI_Controller
	{


		public function __construct()
		{
			parent::__construct();
			$this->load->model('CateringModel');						
			$this->load->model('ServiceModel');						
			$this->load->model('BookingModel');
			$this->load->model('CustomerModel');
			$this->load->model('CommentModel');
		}

		public function comment()
		{

            $data['service'] = $this->ServiceModel->get_service();
            $data['catering'] = $this->CateringModel->get_catering();
            $data['comment'] = $this->CommentModel->get_comment();
            $data['customer'] = $this->CustomerModel->get_client2();
			$this->load->view('headerV2/header_view');
			$this->load->view('Comment/comments_view', $data);
			$this->load->view('headerV2/footer_view');
		}









	}



















?>