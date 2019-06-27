<?php

	Class CateringModel extends CI_Model
	{
		private $table = "pack_caterer";

		public function insert($data)
		{
			$this->db->insert($this->table, $data);
		}
		
		public function auth($username, $password)
		{
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get($this->table);
			return $query->result_array();
		}

		public function get_catering()
		{
			$data = $this->db->get($this->table);
			return $data->result_array();
		}








		
	}













?>