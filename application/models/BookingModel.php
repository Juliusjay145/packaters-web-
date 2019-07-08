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









	}













?>