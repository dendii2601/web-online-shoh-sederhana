<?php 

class Registrasi extends CI_Controller
{
	
	public function index()
	{
		$this->form_validation->set_rules('nama','nama','required',['required' =>'Nama Harus Diisi!']);
		$this->form_validation->set_rules('username','username','required',['required' =>'Username Harus Diisi!']);
		$this->form_validation->set_rules('password','password','required',['required' =>'Password Harus Diisi!']);
		

		if ($this->form_validation->run() == FALSE) {
		$this->load->view('templates/header');
		$this->load->view('registrasi');
		$this->load->view('templates/footer');
		}else{
			$data = array(
				'id' 		 	 => '',
				'nama'		 	 => $this->input->post('nama'),
				'username'		 => $this->input->post('username'),
				'password'		 => $this->input->post('password'),
				'role_id'		 => 1,

            );
            
		$this->db->insert('tb_user',$data);
		redirect('auth/login');
	}
}
}