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

		public function get_client3($id)
		{
			$this->db->where("id", $id);
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function update($data, $id)
		{
			$this->db->where('id', $id);
			return $this->db->update($this->table, $data);
		}

		public function update2($data)
		{
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update($this->table, $data);
		}

		public function deactivate($data, $id){
			$this->db->where('id', $id);
			return $this->db->update($this->table, $data);
		}


		
		public function get_customer_id($customer_id){
			$query = $this->db->get_where('pack_customer', array('id' => $customer_id));
			return $query->result_array();
		}

 	}













?>