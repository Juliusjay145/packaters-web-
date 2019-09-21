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
            $data['catering'] = $this->CateringModel->get_catering();
            $this->load->view('headerV2/header_view');
            $this->load->view('Category/category_view', $data);
            $this->load->view('headerV2/footer_view');
        }

        public function menu($id)
        {
            $data['service'] = $this->ServiceModel->get_service2();
            $data['catering'] = $this->CateringModel->get_catering();
            $data['menu'] = $this->CategoryModel->get_menu($id);
            $this->load->view('headerV2/header_view');
            $this->load->view('Menu/menu_service_view', $data);
            $this->load->view('headerV2/footer_view');
        }

        public function menu_profile($sid)
        {
            $data['menu'] = $this->CategoryModel->get_menu_id($sid);
            $data['catering'] = $this->CateringModel->get_catering();
            $this->load->view('headerV2/header_view');
            $this->load->view('Menu/menu_service_profile_view', $data);
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
            $path = "http://192.168.43.19/packaters/upload/". $image;

            foreach($data as $d):
                if($d['username'] == $this->session->userdata('username'))
                {
                    
                        $id = $d['id'];
                }
            endforeach;

            if($txtservice == "" && $txtdetails == "")
            {
                echo "Invalid";
            }

            else
            {
                $add = array(

                    'menu_name' => $txtservice,
                    'menu_description' => $txtdetails,
                    'logo' => $image,
                    'path_image' => $path,
                    'pack_caterer_id' => $id,
                    'service_id' => $service_id

                );


                $this->CategoryModel->insert($add);
                redirect(base_url('ServiceController/listservice'));
            }

            
        }


        public function update()
        {
            $menu_name = $this->input->post('menu_name');
            $menu_details = $this->input->post('menu_details');

             $add = array(

                'menu_name' => $menu_name,
                'menu_description' => $menu_details
                );

            $this->CategoryModel->update($add);
            redirect(base_url('ServiceController/listservice'));
        }

       public function delete() //sa client sa catering
        {
            $id = $this->uri->segment(3);
            $data = array(

                //'confirm' => 0,
                'status' => 'Delete'

                );
            $this->CategoryModel->delete($data, $id);
            redirect(base_url('ServiceController/listservice'));
        }



        public function _displayAlert($message,$cont){
            echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
        }

        public function _displayAlert2($cont){
            echo "<script>window.location='".base_url()."$cont';</script>";
        }


    }













?>