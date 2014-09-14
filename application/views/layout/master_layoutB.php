<!DOCTYPE html>
<html lang="en">
<head>
<title>{page_title}</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="<?php echo base_url();?>public/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/css/hack4gooddublin.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/css/style.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//d3f5pyioow99x0.cloudfront.net/0.8/hull.js"></script>
<script src="<?php echo base_url();?>public/js/hack4good.js"></script>
</head>
<body class="socialh4ck-default">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
{page_header}
</div>

    <div class="container-fluid">
          {page_content}
      </div>
    </div>
    {page_scripts}
	
</body>
</html>
