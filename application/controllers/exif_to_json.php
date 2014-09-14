<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ImageAsJson extends CI_Controller {

  public function extract_gps_to_file(image_file_path, json_file_path)
  {
      $exif =  exif_read_data(image_file_path);
      print_r($exif);

      $lat['x'] = $exif['GPSLatitude'][0];
      $lat['y'] = $exif['GPSLatitude'][1];
      $lat['z'] = $exif['GPSLatitude'][2];
      $long['ref'] = $exif['GPSLatitudeRef'];

      $long['x'] = $exif['GPSLongitude'][0];
      $long['y'] = $exif['GPSLongitude'][1];
      $long['z'] = $exif['GPSLongitude'][2];
      $long['ref'] = $exif['GPSLongitudeRef'];

      $file_data = [];
      $file_data['long'] = $long;
      $file_data['lat'] =  $lat;
      $file_data['timestamp'] =  $exif['GPSTimeStamp'];
      $file_data['datestamp'] =  $exif['GPSDateStamp'];
      $file_data['altitude'] =  $exif['GPSAltitude'];

      $json_file = fopen(json_file_path, "w");
      fwrite($json_file, json_encode($file_data));
  }
}
