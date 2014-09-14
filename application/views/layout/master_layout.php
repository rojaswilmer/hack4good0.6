<!DOCTYPE html>
<html lang="en">
<head>
<title>{page_title}</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="<?php echo base_url();?>public/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>public/js/plugins/jQuery-File-Upload/css/jquery.fileupload.css">
<link href="<?php echo base_url();?>public/css/leaflet.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/css/map.css" rel="stylesheet">

<link href="<?php echo base_url();?>public/css/hack4gooddublin.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/css/style.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body class="socialh4ck-default">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
{page_header}
</div>

    <div class="container-fluid">
		  {page_sidebar}
          {page_content}
      </div>
    </div>
	<script src="<?php echo base_url();?>public/js/plugins/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>
	<script src="<?php echo base_url();?>public/js/plugins/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
	<script src="<?php echo base_url();?>public/js/plugins/jQuery-File-Upload/js/jquery.fileupload.js"></script>
	<script src="<?php echo base_url();?>public/js/plugins/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
	<script src="<?php echo base_url();?>public/js/plugins/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>
	<script src="<?php echo base_url();?>public/js/leaflet.js"></script>
	<script src="<?php echo base_url();?>public/js/L.Map.Sync.js"></script>
	<script src="<?php echo base_url();?>public/js/map.js"></script>
	<script src="<?php echo base_url();?>public/js/hack4good.js"></script>
</body>
</html>
