<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!--for js css-->
	<link href="<?php echo base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/validation/validationEngine.jquery.css" />
	<link href="<?php echo base_url(); ?>fonts/css.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/sumoselect.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/jquery/ui-1.12.1/jquery-ui.min.css" rel="stylesheet">

  <!--for js script-->
 	<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>js/validation/jquery.validationEngine.js"></script>
	<script src="<?php echo base_url(); ?>js/validation/jquery.validationEngine-en.js"></script>
    <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>js/mustache.min.js"></script>
	<script src="<?php echo base_url(); ?>js/common.js"></script>
	<script src="<?php echo base_url(); ?>js/common_js.js"></script>
	<script src="<?php echo base_url(); ?>js/common_image_pdf_excel_word_js.js"></script>
	<script src="<?php echo base_url(); ?>js/header.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery_validate.js"></script>
    <script src="<?php echo base_url(); ?>js/encrypt.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.sumoselect.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery/ui-1.12.1/jquery-ui.min.js"></script>



  
  <?php
	if (isset($javascripts)) {
		foreach ($javascripts as $jskey => $javascript) {
			if (is_string($jskey)) {
				echo $javascript . "\n";
			} else {
				echo script_tag($javascript) . "\n";
			}
		}
	}
	?>
  <!-- for css style-->
  <?php
  if (isset($style_sheets)) {
      foreach ($style_sheets as $href => $media) {
          echo link_tag(array('href' => $media, 'rel' => 'stylesheet')) . "\n";
      }
  }
  ?>
  
</head>
<body class="page-register">
  <input type="hidden" id="url" value="<?php echo base_url();?>">
  <input type="hidden" id="get_csrf_token_name" value="<?php echo $this->security->get_csrf_token_name(); ?>">
  <input type="hidden" id="get_csrf_hash" value="<?php echo $this->security->get_csrf_hash(); ?>">
  <?php $this->session->set_userdata(array('csrf_hash'=>$this->security->get_csrf_hash()));?>
 
 <div class="registration-header">
  <div class="container">
    <div class="row">
      <div class="col-md-6"> <a href="#" class="site-logo"> <img src="<?php echo base_url(); ?>img/iccrr-logo.png"> <span>भारतीय सांस्कृतिक सम्बंद परिषद</span> <span>Indian Council for Cultural Relations</span> </a> </div>
      <div class="col-md-6 text-right">
	  <?php 
	   if($this->role_id){ ?>
			<p class="account-login">Welcome <?php echo $this->auth_data->first_name; ?> <a href="<?php echo site_url('login/logout');?>">Logout</a></p>
	   <?php }else{ ?>
			<p class="account-login">Already have an Account? <a href="<?php echo site_url('login');?>">Login</a></p>
	   <?php } ?>
      </div>
    </div>
  </div>
</div>