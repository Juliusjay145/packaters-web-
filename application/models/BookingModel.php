<?php

	Class BookingModel extends CI_Model
	{


		private $table = "pack_transaction";




		public function insert($data)
		{
			$this->db->insert($this->table, $data);
		}

		public function get_booking()
		{
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function count_booking()
		{
			$query = $this->db->query('SELECT COUNT(customer_id) as customer FROM pack_transaction WHERE notification = 1');
			return $query->row()->customer;
		}

		public function updatenotification($data){
		return $this->db->update($this->table, $data);
	}






	}













?>