<?php

	Class CategoryModel extends CI_Model
	{


		private $table = "pack_service_menu";




		public function insert($data)
		{
			$this->db->insert($this->table, $data);
		}

		public function get_menu($id)
		{
			$this->db->where("service_id",$id);
			$data = $this->db->get($this->table);
			return $data->result_array();
		}




	}













?>