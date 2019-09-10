<?php

	Class CommentModel extends  CI_Model
	{


		private $table = "pack_comment";




		public function insert($data)
		{
			$this->db->insert($this->table, $data);
		}

		public function get_comment()
		{
			$data = $this->db->get($this->table);
			return $data->result_array();
		}

		public function count_comment()
		{
			$query = $this->db->query('SELECT COUNT(pack_customer_id) as customer FROM pack_comment WHERE notification = 1');
			return $query->row()->customer;
		}

		public function updatenotif($data){
			return $this->db->update($this->table, $data);
		}

		public function delete($data, $id)
		{
			$this->db->where('pack_comment_id', $id);
			return $this->db->update($this->table, $data);
		}

	}





















?>