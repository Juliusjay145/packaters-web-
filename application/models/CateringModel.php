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

		public function get_catering_platinum($id)
		{
			$this->db->where("status",$id);
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function get_catering_premium($id)
		{
			$this->db->where("status",$id);
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function get_catering_gold($id)
		{
			$this->db->where("status",$id);
			$data = $this->db->get($this->table);
			return $data->result_array();
		}



		public function get_caterer_profile($id)
		{
			$this->db->where("id",$id);
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function get_catering2()
		{
			$this->db->from($this->table);
			$this->db->order_by("status", "asc");
			$data = $this->db->get();
			return $data->result_array();
		}


		public function update($data)
		{
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update($this->table, $data);
		}







		
	}













?>