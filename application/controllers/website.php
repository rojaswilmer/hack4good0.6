<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website extends CI_Controller {

	public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
	}
	

	public function home()
  {
    $data['page_content'] = $this->parser->parse('website/home',array(),TRUE);
    $data['page_header'] = $this->parser->parse('layout/header_layout',array(),TRUE);
    $data['page_title']="RSPB HACK4GOOD 0.6 DUBLIN";
    $data['page_class']="main";
	$data['page_scripts']="";

    $string = $this->parser->parse('layout/master_layoutB', $data);
  }

public function team()
  {
    $data['page_content'] = $this->parser->parse('website/team',array(),TRUE);
    $data['page_header'] = $this->parser->parse('layout/header_layout',array(),TRUE);
    $data['page_title']="RSPB HACK4GOOD 0.6 DUBLIN";
    $data['page_class']="main";
	$data['page_scripts']="";

    $string = $this->parser->parse('layout/master_layoutB', $data);
  }
	

}
