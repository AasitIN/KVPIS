  <style>
 
	@font-face {
		font-family: 'text-security-disc';
		src: url('../fonts/text-security-disc.eot');
		src: url('../fonts/text-security-disc.eot?#iefix') format('embedded-opentype'),
			url('../fonts/text-security-disc.woff') format('woff'),
			url('../fonts/text-security-disc.ttf') format('truetype'),
			url('../images/text-security-disc.svg#text-security') format('svg');
	}
	 
	input.password {
		font-family: 'text-security-disc';
		
	}
	</style>
<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header register-header">Change Password</div></div>
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

<?php echo form_open("",array("id"=>"formID","autocomplete"=>"off"));?>
<div class="row">
  <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Old Password: <span class="reqd">*</span></label>
    <div class="col-sm-12">
      <input type="text" name="old_password" id="old_password" class="form-control password validate[required]" placeholder="Old Password">
      <span class="error"><?php echo form_error('old_password');?></span>
    </div>
  </div>
   <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">New Password <span class="reqd">*</span></label>
    <div class="col-sm-12">
     <input type="text" name="new_password" id="new_password" class="form-control validate[required] password" placeholder="New Password">
      <span class="error"><?php echo form_error('new_password');?></span>
    </div>
  </div>
  
    
    <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Confirm Password :<span class="reqd">*</span></label>
    <div class="col-sm-12">
       <input type="text" name="confirm_password" id="confirm_password" class="form-control validate[required,equals[new_password]] password" placeholder="Confirm Password">
      <span class="error"><?php echo form_error('confirm_password');?></span>
    </div>
  </div>
</div>

<div class="modal-footer text-right rg-footer">
	<div class="col-md-12">
       <button type="submit" class="btn btn-success">Save</button>
    </div>
</div>
<?php echo form_close();?>
</div>
</div>
<script src="<?php echo base_url()?>js/forms/change_password.js"></script>
