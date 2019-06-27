<?php

    Class CategoryController extends CI_Controller
    {
        public function category()
        {
            $this->load->view('headerV2/header_view');
            $this->load->view('Category/category_view');
            $this->load->view('headerV2/footer_view');
        }





    }













?>