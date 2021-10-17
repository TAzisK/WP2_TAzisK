<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Web extends CI_Controller{
    
    public function index(){
        $data['judul'] = "Halaman depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function about(){		
		$data['judul'] = "Halaman about";
		$this->load->view('v_header',$data);
		$this->load->view('v_about',$data);
		$this->load->view('v_footer',$data);
	}
    public function register(){		
		$data['judul'] = "Halaman register";
		$this->load->view('v_header',$data);
		$this->load->view('v_register',$data);
		$this->load->view('v_footer',$data);
		
	}
	public function login(){		
		$data['judul'] = "Halaman login";
		$this->load->view('v_header',$data);
		$this->load->view('v_login',$data);
		$this->load->view('v_footer',$data);
	}

}