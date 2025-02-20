<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh extends CI_Controller {

	public function index()
	{
		$this->load->model('m_siswa');
		$data['mahasiswa']=$this->m_siswa->get_data();

		$this->load->view('v_siswa',$data);
	}

}

/* End of file Controllername.php */

