  <style>
 
	@font-face {
		font-family: 'text-security-disc';
		src: url('../../fonts/text-security-disc.eot');
		src: url('../../fonts/text-security-disc.eot?#iefix') format('embedded-opentype'),
			url('../../fonts/text-security-disc.woff') format('woff'),
			url('../../fonts/text-security-disc.ttf') format('truetype'),
			url('../../images/text-security-disc.svg#text-security') format('svg');
	}
	 
	input.password {
		font-family: 'text-security-disc';
		
	}
	</style>
<div class="container">
<div class="card card-register mx-auto mt-5">
<div class="card-header register-header">Add User</div></div>
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

<input type="hidden" id="user_id" value="<?php echo isset($this->auth_data->id)?$this->auth_data->id:'';?>">

<div class="row">

  <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">First Name <span class="reqd">*</span></label>
    <div class="col-sm-12">
      <input type="text" name="first_name" value="<?php echo isset($this->auth_data->first_name)?set_value('first_name',$this->auth_data->first_name):set_value('first_name');?>" class="form-control txtOnly" placeholder="First Name">
      <span class="error"><?php echo form_error('first_name');?></span>
    </div>
  </div>
   <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Middle Name</label>
    <div class="col-sm-12">
      <input type="text" name="middle_name" value="<?php echo isset($this->auth_data->middle_name)?set_value('middle_name',$this->auth_data->middle_name):set_value('middle_name');?>" class="form-control txtOnly" placeholder="Middle Name">
      <span class="error"><?php echo form_error('middle_name');?></span>
    </div>
  </div>
  
    
    <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Last Name</label>
    <div class="col-sm-12">
      <input type="text" name="last_name" value="<?php echo isset($this->auth_data->last_name)?set_value('last_name',$this->auth_data->last_name):set_value('last_name');?>" class="form-control txtOnly" placeholder="Last Name">
      <span class="error"><?php echo form_error('last_name');?></span>
    </div>
  </div>
 


  <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Email <span class="reqd">*</span></label>
    <div class="col-sm-12">
      <input type="text" name="email" value="<?php echo isset($this->auth_data->email)?set_value('email',$this->auth_data->email):set_value('email');?>" id="email" autocomplete="off" class="form-control" placeholder="Email">
      <span class="error"><?php echo form_error('email');?></span>
    </div>
  </div>
   <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Mobile <span class="reqd">*</span></label>
    <div class="col-sm-12">
      <input type="text" name="mobile" value="<?php echo isset($this->auth_data->mobile)?set_value('mobile',$this->auth_data->mobile):set_value('mobile');?>" class="form-control numericOnly minone" maxLength="10" placeholder="Mobile">
      <span class="error"><?php echo form_error('mobile');?></span>
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
<script src="<?php echo base_url()?>js/forms/profile.js"></script>        