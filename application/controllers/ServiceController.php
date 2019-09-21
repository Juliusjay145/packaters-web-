<?php

    Class ServiceController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
			$this->load->model('ServiceModel');
			$this->load->model('CateringModel');
        }

        public function service()
        {
            $data['service'] = $this->ServiceModel->get_service();
            $data['catering'] = $this->CateringModel->get_catering();
            $this->load->view('headerV2/header_view');
            $this->load->view('Service/service_view', $data);
            $this->load->view('headerV2/footer_view');

        }

        public function listservice()
        {
            $data['service'] = $this->ServiceModel->get_service();
            $data['catering'] = $this->CateringModel->get_catering();
            $this->load->view('headerV2/header_view');
            $this->load->view('Service/list_services_view', $data);
            $this->load->view('headerV2/footer_view');

        }

        public function service_profile($sid)
        {
            $data['service'] = $this->ServiceModel->get_service_id($sid);
            $data['catering'] = $this->CateringModel->get_catering();
            $this->load->view('headerV2/header_view');
            $this->load->view('Service/service_profile_view', $data);
            $this->load->view('headerV2/footer_view');
        }



        public function add_service()
        {
            $txtservice =  $this->input->post('service_name');
            $txtdetails =  $this->input->post('service_description');
            $txtprice =  $this->input->post('service_price');

            $data = $this->CateringModel->get_catering();
            $services = $this->ServiceModel->get_service();
            
            $image = $this->input->post('logo');
            $path = "http://192.168.43.19/packaters/upload/". $image;



            foreach($data as $d):
					if($d['username'] == $this->session->userdata('username'))
					{
						
							$id = $d['id'];
					}
            endforeach;
            
                foreach ($services as $service):
                    foreach($data as $d):
                        if($service['id'] == $d['id']):
                            $service['service_name'];
                        endif;		
                    endforeach;			
                endforeach;

                if($txtservice == "" && $txtdetails == "" && $txtprice == "")
                {
                    redirect(base_url('ServiceController/service'));
                }
                else
                {
                    $add = array(

                    'service_name' => $txtservice,
                    'service_description' => $txtdetails,
                    'service_logo' => $image,
                    'path_image' => $path,
                    'pack_caterer_id' => $id,
                    'service_price' => $txtprice
    
                    );
    

                          $this->ServiceModel->insert($add);
                          redirect(base_url('ServiceController/listservice'));
                }

                    
                

                
        }


        public function update()
        {
            $name = $this->input->post('service_name');
            $details = $this->input->post('service_details');
            $add = array(

                'service_name' => $name,
                'service_description' => $details
                );

            $this->ServiceModel->update($add);
            redirect(base_url('ServiceController/listservice'));
        }


        public function delete_service()
        {

            $id = $this->uri->segment(3);

            $data = array(

                'soft_delete' => 0

            );

            $this->ServiceModel->delete($data, $id);
            redirect(base_url('ServiceController/listservice'));
            // header('location:ServiceController/service');
        }

        public function _displayAlert($message,$cont){
            echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
        }
    }













?>