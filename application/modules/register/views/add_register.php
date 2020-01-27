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
<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header register-header">Register an Account</div></div>
<div class="card-body shape-shadow">

<?php if(isset($error_msg) && !empty($error_msg)){?>
		<div class="alert alert-danger">
		  <strong>Error!</strong> <?php echo $error_msg;?>.
		</div>
<?php } if($this->session->flashdata('error')){ ?>
		<div class="alert alert-danger">
		  <strong>Error!</strong> <?php echo $this->session->flashdata('error');?>
		</div>
<?php } if($this->session->flashdata('success')){ ?>
		<div class="alert alert-success">
		  <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>
		</div>
<?php } ?>

<?php echo form_open("",array("id"=>"form","class"=>"register","autocomplete"=>"off"));?>
<div class="row">
   <!--<div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Application For <span class="reqd">*</span></label>
    <div class="col-sm-12">
	  <?php //echo form_dropdown("role_id",array(""=>"Select Application For")+role_type(),set_value('role_id'),'class="form-control" id="role_id"'); ?>
      <span class="error"><?php //echo form_error('role_id');?></span>
    </div>
  </div>-->
   
  <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">First Name <span class="reqd">*</span></label>
    <div class="col-sm-12">
      <input type="text" name="first_name" value="<?php echo set_value('first_name');?>" class="form-control txtOnly" placeholder="First Name">
      <span class="error"><?php echo form_error('first_name');?></span>
    </div>
  </div>
   <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Middle Name</label>
    <div class="col-sm-12">
      <input type="text" name="middle_name" value="<?php echo set_value('middle_name');?>" class="form-control txtOnly" placeholder="Middle Name">
      <span class="error"><?php echo form_error('middle_name');?></span>
    </div>
  </div>
  
    
    <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Last Name</label>
    <div class="col-sm-12">
      <input type="text" name="last_name" value="<?php echo set_value('last_name');?>" class="form-control txtOnly" placeholder="Last Name">
      <span class="error"><?php echo form_error('last_name');?></span>
    </div>
  </div>
 
</div>

<div class="row">

  <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Email <span class="reqd">*</span></label>
    <div class="col-sm-12">
      <input type="text" name="email" value="<?php echo set_value('email');?>" id="email" autocomplete="off" class="form-control" placeholder="Email">
      <span class="error"><?php echo form_error('email');?></span>
    </div>
  </div>
   <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Mobile <span class="reqd">*</span></label>
    <div class="col-sm-12">
      <input type="text" name="mobile" value="<?php echo set_value('mobile');?>" class="form-control numericOnly minone" placeholder="Mobile">
      <span class="error"><?php echo form_error('mobile');?></span>
    </div>
  </div>

</div>

<div class="row">
   
   <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Password <span class="reqd">*</span></label>
    <div class="col-sm-12">
      <input type="text" name="password" id="password" class="form-control password" value="" autocomplete="off" placeholder="Password">
      <span class="error"><?php echo form_error('password');?></span>
    </div>
  </div>
   <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Confirm Password <span class="reqd">*</span></label>
    <div class="col-sm-12">
      <input type="text" name="cpassword" id="cpassword" class="form-control password" value="" autocomplete="off" placeholder="Confirm Password">
      <span class="error"><?php echo form_error('cpassword');?></span>
    </div>
  </div>
  
   <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Captcha <span class="reqd">*</span></label>
    <div class="captcha-control col-sm-12">
		<input type="text" name="captcha" value="<?php echo set_value('captcha');?>" id="captcha" class="form-control" placeholder="Captcha">
		 <span class="error"><?php echo form_error('captcha');?></span>
    </div>
	
	 <div class="form-label-group captcha-control">
	  <span id="captcha_img"><?php echo $captchaImg;?> </span>
	  <a href="javascript:void(0)" id="refresh_captcha"><img src="<?php echo base_url();?>img/refresh.png" title="Refresh Captcha"></a>
	</div>
  </div>
</div>

<div class="modal-footer text-right rg-footer">
	<div class="col-md-12">
	   <input type="reset" value="Cancel" class="btn btn-default">
		<input type="submit" value="Submit" class="btn btn-primary">
    </div>
</div>
<?php echo form_close();?>
</div>
</div>
<script src="<?php echo base_url()?>js/forms/register.js"></script>        