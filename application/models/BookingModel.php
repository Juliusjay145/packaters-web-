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

		public function get_booking_customer($id)
		{
			$this->db->where("customer_id", $id);
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function count_booking()
		{
			$query = $this->db->query('SELECT COUNT(customer_id) as customer FROM pack_transaction WHERE notification = 1');
			return $query->row()->customer;
		}

		public function count_completed()
		{
			$query = $this->db->query('SELECT COUNT(pack_caterer_id) as catering FROM pack_transaction');
			return $query->row()->catering;
		}

		public function updatenotification($data){
			return $this->db->update($this->table, $data);
		}

		public function updatecon($data, $id)
		{
			$this->db->where('pack_transaction_id', $id);
			return $this->db->update($this->table, $data);
		}

		public function confirm($data, $id){
			$this->db->where('pack_transaction_id', $id);
			return $this->db->update($this->table, $data);
		}	






	}













?>