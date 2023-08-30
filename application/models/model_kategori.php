<?php
	
	class Model_kategori extends CI_Model
	{
		

		public function data_pakaian()
		{
			return $this->db->get_where("tb_barang",array('kategori' => 'pakaian'));
        }
        
		public function data_jam()
		{
			return $this->db->get_where("tb_barang",array('kategori' => 'jam'));
        }
        
		public function data_tas()
		{
			return $this->db->get_where("tb_barang",array('kategori' => 'tas'));
		}
		
	}
  