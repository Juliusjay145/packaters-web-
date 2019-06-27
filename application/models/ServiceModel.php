<?php

    Class ServiceModel extends CI_Model
    
    {

        private $table = "pack_service";

        


        public function insert($data)
		{
			$this->db->insert($this->table, $data);
		}

        public function get_service()
		{
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function count_catering_service()
		{
			$query = $this->db->query('SELECT COUNT(id) as catering FROM pack_service');
			return $query->row()->catering;
		}




    }















?>