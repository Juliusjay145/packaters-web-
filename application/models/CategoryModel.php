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

		public function get_menu2()
		{
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function update($data)
		{
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update($this->table, $data);
		}

		public function delete($data, $id)
		{
			$this->db->where('id', $id);
			return $this->db->update($this->table, $data);
		}

		public function get_menu_id($sid)
		{
			$query = $this->db->get_where('pack_service_menu', array('id' => $sid));
			return $query->result_array();
		}




	}













?>