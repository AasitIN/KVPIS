<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ICCR Login</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/jquery_validate.js"></script>
</head>

<body class="login-bg">
	<input type="hidden" id="url" value="<?php echo base_url();?>">
  <input type="hidden" id="get_csrf_token_name" value="<?php echo $this->security->get_csrf_token_name(); ?>">
  <input type="hidden" id="get_csrf_hash" value="<?php echo $this->security->get_csrf_hash(); ?>">
  <?php $this->session->set_userdata(array('csrf_hash'=>$this->security->get_csrf_hash()));?>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body forgot-passward">
        <div class="text-center mb-2">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
		<?php 
			if(isset($error_msg) && !empty($error_msg))
            {
                ?>
                <div class="alert alert-danger">
                  <strong>Error!</strong> <?php echo $error_msg;?>.
                </div>
                <?php
            }
            if($this->session->flashdata('error'))
            {
                ?>
                <div class="alert alert-danger">
                  <strong>Error!</strong> <?php echo $this->session->flashdata('error');?>
                </div>
                <?php
            }
           // pr($_SESSION);
            if($this->session->flashdata('success'))
            {
                ?>
                <div class="alert alert-success">
                  <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>
                </div>
                <?php
            }
            
			echo form_open('',array('id'=>'password_form'));?>
         
            <div class="form-group">
				<label>Email Id<span class="reqd">*</span></label>
			  <input type="email" name="email" id="email" class="form-control" placeholder="Email"> 
			<?php echo form_error('email');?>	
            </div>
			<div class="form-group clear">
				<div class="captcha-control">
				  <label>Captcha<span class="reqd">*</span></label>
				  <input type="text" name="captcha" id="captcha" class="form-control" autocomplete="off" placeholder="Captcha">
				  <span class="error"><?php echo form_error('captcha');?></span>
				</div>
				
				<div class="form-label-group captcha-control">
					
				  <span id="captcha_img"><?php echo $captchaImg;?> </span>
					<a href="javascript:void(0)" id="refresh_captcha"><img src="<?php echo base_url();?>img/refresh.png" title="Refresh Captcha"></a>     				
				</div>
			  </div>
          
			<input type="submit" value="Reset Password" class="btn btn-primary btn-block">

        <?php echo form_close();?>
        <div class="text-center">
<!--          <a class="d-block small mt-3" href="<?php echo site_url('register'); ?>">Register an Account</a>-->
          <a class="d-block small" href="<?php echo site_url('login');?>">Login Page</a>
        </div>
      </div>
    </div>
  </div>
  
   <script>

        $('#password_form').validate({
                rules:{
                    email:{
                        required:true,
                        email:true,
                    },
					captcha:{
                        required:true,  
                    }   
                },
                messages:{
                    email:{
                        required:'Please enter email id',
                    },
					captcha:{
                        required:'Please enter captcha code',  
                    }   
                }
            });   
			
           
            $('#refresh_captcha').on('click',function(){
                var base_url=$('#url').val();
                $.ajax({
                    url:base_url+'register/refresh_captcha',
                    type:'get',
                    data:'captcha=1',
                    beforeSend:function(){
                        $('#captcha_img').html('<i class="fa fa-spinner fa-spin"></i>');        
                    },
                    success:function(response){
                        $('#captcha_img').html(response);        
                    }

                });
            });
    </script>
</body>
</html>
