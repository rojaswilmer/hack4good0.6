<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {
	
 public function dashboard()
  {
    $data['page_content'] = $this->parser->parse('reports/dashboard',array(),TRUE);
    $data['page_header'] = $this->parser->parse('layout/header_layout',array(),TRUE);
    $data['page_title']="Dashboard";
    $data['page_class']="dashboard-main";

    $data['page_sidebar'] = $this->parser->parse('layout/sidebar_layout',array(),TRUE);

    $string = $this->parser->parse('layout/master_layout', $data);
  }
}
