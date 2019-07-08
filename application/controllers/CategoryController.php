<?php

    Class CategoryController extends CI_Controller
    {
    	 public function __construct()
        {
            parent::__construct();
            $this->load->model('ServiceModel');
            $this->load->model('CategoryModel');
            $this->load->model('CateringModel');
        
        }



    	
         public function category($sid)
        {
            $data['getpest'] = $this->ServiceModel->get_service_id($sid);
            $this->load->view('headerV2/header_view');
            $this->load->view('Category/category_view', $data);
            $this->load->view('headerV2/footer_view');
        }

        public function add_category()
        {
            $txtservice =  $this->input->post('name');
            $txtdetails =  $this->input->post('menu_description');
            $service_id = $this->input->post('service_id');

            $data = $this->CateringModel->get_catering();
            $services = $this->ServiceModel->get_service();

            $image = $this->input->post('menu_logo');
            $path = "http://10.0.2.2/packaters/upload/". $image;

            foreach($data as $d):
                if($d['username'] == $this->session->userdata('username'))
                {
                    
                        $id = $d['id'];
                }
            endforeach;

            $add = array(

                'menu_name' => $txtservice,
                'menu_description' => $txtdetails,
                'logo' => $image,
                'path_image' => $path,
                'pack_caterer_id' => $id,
                'service_id' => $service_id

                );


                      $this->CategoryModel->insert($add);
        }



    }













?>