<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maps extends CI_Controller {

  public function add()
  {
    $data['page_content'] = $this->parser->parse('maps/add',array(),TRUE);
    $data['page_header'] = $this->parser->parse('layout/header_layout',array(),TRUE);
    $data['page_title']="Add Maps";
    $data['page_class']="maps-add";

    $data['page_sidebar'] = $this->parser->parse('layout/sidebar_layout',array(),TRUE);

    $string = $this->parser->parse('layout/master_layout', $data);
  }
	
	public function view()
  {
    $data['page_content'] = $this->parser->parse('maps/view',array(),TRUE);
    $data['page_header'] = $this->parser->parse('layout/header_layout',array(),TRUE);
    $data['page_title']="View Maps";
    $data['page_class']="maps-view";

    $data['page_sidebar'] = $this->parser->parse('layout/sidebar_layout',array(),TRUE);

    $string = $this->parser->parse('layout/master_layout', $data);
  }
	
	
	public function getMeta()
  {
    $exif = exif_read_data('http://kevinholler.com/hack4good/example/IMG_0231.JPG', 'GPS', true);
		echo json_encode($exif);
  }
	
	
	
	public function getImageFromFolder($weekId)
	{
		$imageDataDir = base_url() . 'public/data/maps/' . $weekId;
		
		if (is_dir($imageDataDir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
				}
				closedir($dh);
			}
		}
		
		
		$files = array();
		
			$dir = opendir($imageDataDir);
			while ($file = readdir($dir)) {
				if ($file == '.' || $file == '..') {
					continue;
				}

				$files[] = $file;
			}
			header('Content-type: application/json');
			echo json_encode($files);	
	}
	
	
	
	
}
