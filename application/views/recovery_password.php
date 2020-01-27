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
  <script src="<?php echo base_url(); ?>js/encrypt.js"></script>
  <style>
 
	@font-face {
		font-family: 'text-security-disc';
		src: url('fonts/text-security-disc.eot');
		src: url('fonts/text-security-disc.eot?#iefix') format('embedded-opentype'),
			url('fonts/text-security-disc.woff') format('woff'),
			url('fonts/text-security-disc.ttf') format('truetype'),
			url('images/text-security-disc.svg#text-security') format('svg');
	}
	 
	input.password {
		font-family: 'text-security-disc';
		
	}
	</style>
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
        
		<?php 
		$session=$this->session->all_userdata();
		$time=$session['__ci_last_regenerate'];
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
            if(isset($link_valid) && $link_valid==false) 
			{
				?>
				<div class="alert alert-danger">
				  <strong>Success!</strong>This link is not valid or may be expired
				</div>
				<?php  
			}
			if(isset($link_valid) && $link_valid==true)
			{
				//$action=base_url()."login/recovery_password?email_id=$email_id&token=$token";
				echo form_open($action,array('id'=>'password_form'));
				?>
				<div class="form-group">
				  <input type="password" name="password" id="password" class="form-control password" placeholder="Password"> 
				<?php echo form_error('password');?>	
				</div>
				<div class="form-group">
				  <input type="password" name="cpassword" id="cpassword" class="form-control password" placeholder="Confirm password"> 
				<?php echo form_error('cpassword');?>	
				</div>
				<div class="form-group clear">
					<div class="captcha-control">
					  <input type="text" name="captcha" id="captcha" class="form-control" autocomplete="off" placeholder="Captcha">
					  <span class="error"><?php echo form_error('captcha');?></span>
					</div>
					<div class="form-label-group captcha-control">
					  <span id="captcha_img"><?php echo $captchaImg;?> </span>
						<a href="javascript:void(0)" id="refresh_captcha"><img src="<?php echo base_url();?>img/refresh.png"></a>     				
					</div>
				</div>
				<input type="submit" value="Reset Password" class="btn btn-primary btn-block">
				<?php
				echo form_close();
			}
			
			?>
         
            

        <?php ?>
        
      </div>
    </div>
  </div>
  
   <script>
		$.validator.addMethod("pwcheck", function(value) {
           return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
               && /[a-z]/.test(value) // has a lowercase letter
               && /[A-Z]/.test(value) // has a Upper letter
               && /[!,@,#,$,%,^,&,*]/.test(value) // has a Special Character
               && /\d/.test(value) // has a digit
        },"Passwords should have special characters with uppercase letters, lowercase letters and at least one number.");
        $('#password_form').validate({
                rules:{
                    password:{
                        required:true,
                        pwcheck:true,
						
                    },
					cpassword:{
                        required:true,  
						equalTo:"#password"
                    }   
                },
                messages:{
                    password:{
                        required:'Please enter password',
                    },
					cpassword:{
                        required:'Please enter confirm password',  
						equalTo:"Please enter same password again"
                    }   
                },
                submitHandler:function(form){
                   generateHashPassword();
                   form.submit();   
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
			function generateHashPassword() {
                var password = document.getElementById('password');
                var hashPassword = new jsSHA("SHA-512", "TEXT", {numRounds: 1});
                hashPassword.update(password.value);
                password.value = hashPassword.getHash("HEX"); 

                var confirm_password = document.getElementById('cpassword');
                var hashPassword = new jsSHA("SHA-512", "TEXT", {numRounds: 1});
                hashPassword.update(confirm_password.value);
                confirm_password.value = hashPassword.getHash("HEX"); 


                return true;
            } 
    </script>
</body>
</html>
