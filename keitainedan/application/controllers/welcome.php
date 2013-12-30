<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['page_title'] = 'モバイル料金ラボ';
        $this->load->view('header',$data);
        $this->load->view('top');
        $this->load->view('footer');
	}

public function docomo()
	{
		$data['page_title'] = 'モバイル料金ラボ';
        $this->load->view('header',$data);
        $this->load->view('shurui');
        $this->load->view('footer');
	}

    public function sumaho()
	{
        $data['page_title'] = 'keitai';
        $this->load->view('header',$data);
        $this->load->view('kaisen');
        $this->load->view('footer');
        
    }
    public function ddenwa()
	{
        $data['page_title'] = 'モバイル料金ラボ';
        $this->load->view('header',$data);
        $this->load->view('body');
        $this->load->view('footer');
        
    }
    public function kodawaranai()
	{
        $data['page_title'] = 'モバイル料金ラボ';
        $this->load->view('header',$data);
        $this->load->view('',$data);
        $this->load->view('footer');
        
    }
    public function lte()
	{
        $data['page_title'] = 'モバイル料金ラボ';
        $this->load->view('header',$data);
        $this->load->view('pakeho');
        $this->load->view('footer');
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */