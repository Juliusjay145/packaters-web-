<?php

 	Class CustomerModel extends CI_Model
 	{


 		private $table = "pack_customer";




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

		public function get_client2()
		{
			$data = $this->db->get($this->table);
			return $data->result_array();
		}



 	}













?>