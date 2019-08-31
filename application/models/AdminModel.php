<?php

 	Class AdminModel extends CI_Model
 	{


 		private $table = "pack_admin";




 		public function get_admin()
		{
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function auth($username, $password)
		{
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get($this->table);
			return $query->result_array();
		}


		





 	}
















?>