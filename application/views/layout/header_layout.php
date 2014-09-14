      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=site_url("/")?>"><img style="height:40px;" src="<?php echo base_url();?>public/images/logo.png" ></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?=site_url("/")?>">Home</a></li>
            <li><a href="<?=site_url("team")?>">Team</a></li>
            <li><a href="<?=site_url("login")?>">Login</a></li>
            <li><a href="<?=site_url("dashboard")?>">Dashboard</a></li>
          </ul>
          <button class='facebook-login'>Login with Facebook</button>
        </div><!--/.nav-collapse -->
      </div>
