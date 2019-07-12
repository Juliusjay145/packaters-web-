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
			$this->db->where('soft_delete', 1);
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function get_service_id($sid){
			$query = $this->db->get_where('pack_service', array('id' => $sid));
			return $query->result_array();
		}

		public function count_catering_service()
		{
			$query = $this->db->query('SELECT COUNT(id) as catering FROM pack_service');
			return $query->row()->catering;
		}

		public function get_caterer_service($id)
		{
			$this->db->where("pack_caterer_id",$id);
			$this->db->where('soft_delete', 1);
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function get_service_profile($id)
		{
			$this->db->where("id",$id);
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function delete($data, $id)
		{
			$this->db->where('id', $id);
			return $this->db->update($this->table, $data);
		}



    }















?>