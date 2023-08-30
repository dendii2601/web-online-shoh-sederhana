<?php 
	
	class Kategori extends CI_Controller
	{
		

		public function pakaian()
		{
		$data['pakaian'] = $this->model_kategori->data_pakaian()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pakaian',$data);
		$this->load->view('templates/footer');
        }
        
		public function jam()
		{
		$data['jam'] = $this->model_kategori->data_jam()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('jam',$data);
		$this->load->view('templates/footer');
        }
        
		public function tas()
		{
		$data['tas'] = $this->model_kategori->data_tas()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tas',$data);
		$this->load->view('templates/footer');
		}
		
	}
 