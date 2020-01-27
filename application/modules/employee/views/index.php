<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"> <!-- Resource style -->
<script src="<?php echo base_url(); ?>js/modernizr.js"></script> <!-- Modernizr -->
<?php //print_r( $session=$this->session->all_userdata());
//echo $logId = $this->session->userdata('user_id');?>
<div id="content-wrapper">
<div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header register-header text-center"><i class="fas fa-user-cog" aria-hidden="true"></i>&nbsp; EMPLOYEE MANAGEMENT</div>
    <div class="card-body shape-shadow">

        <?php if (isset($error_msg) && !empty($error_msg)) { ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> <?php echo $error_msg; ?>.
            </div>
        <?php } if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php } if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>

        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden">
              <div class="card-body">
                <div class="card-body-icon-custom">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="mr-5">Registered Employee List</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>profile/profilelist">
                <span class="float-left btn btn-block btn-default">View List</span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon-custom">
                  <i class="fas fa-user-plus"></i>
                </div>
                <div class="mr-5">Register New Employee</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>employee/personal_details">
                <span class="float-left btn btn-block btn-default">Add New</span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden">
              <div class="card-body">
                <div class="card-body-icon-custom">
                  <i class="fas fa-fw fa-user-edit"></i>
                </div>
                <div class="mr-5">Existing Employee</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="javascript:void(0);">
                <span class="float-left btn btn-block btn-default" data-toggle="modal" data-target="#myModal">Edit / Update</span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon-custom">
                  <i class='fas fa-user-cog'></i>
                </div>
                <div class="mr-5">Employee Report</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>reports/index">
                <span class="float-left btn btn-block btn-default">View</span>
              </a>
            </div>
          </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- ================================= Emp Code Modal ==================================== -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content" style="margin-top: 75%;">
            <?php echo form_open("",array("id" =>"formID", "class" =>"register", "autocomplete" =>"off"));?>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-form-label">Employee Code</label>
                        <?php echo form_input("EmpCode", isset($users->empcode) ? set_value('EmpCode', $users->EmpCode) : set_value('EmpCode'),'placeholder="Enter 4-6 digit employee code" maxlength="6" id="EmpCode" class="numericOnly validate[required],minSize[4],maxSize[6]] form-control" '); ?>
                        <span class="error"><?php echo form_error('EmpCode'); ?></span>						
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cancel</button></div>
                    <div class="col-sm-6"><?php  echo form_submit('', 'Submit', 'class="btn btn-block btn-success"');?></div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

