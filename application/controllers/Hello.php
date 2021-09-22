<?php 

class Hello extends CI_Controller {

	public function index () {
		
		//load modelnya
		$this->load->model('m_mhs');
		$data['mahasiswa'] = $this->m_mhs->getData();
		$this->load->view('v_mhs',$data);	
	}

}

?>