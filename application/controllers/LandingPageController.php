<?php

	Class LandingPageController extends CI_Controller
	{


		
		public function index()
		{
			$this->load->view('header/header_view');
			$this->load->view('LandingPage/landing_view');
			$this->load->view('header/footer_view');
		}

		public function login()
		{
			$this->load->view('header/header_view');
			$this->load->view('LandingPage/login_view');
			$this->load->view('header/footer_view');
		}



		public function register()
		{
			$this->load->view('header/header_view');
			$this->load->view('LandingPage/register_view');
			$this->load->view('header/footer_view');
		}









	}














?>