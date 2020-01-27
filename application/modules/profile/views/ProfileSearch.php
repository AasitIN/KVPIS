<script src="<?php echo base_url(); ?>js/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/datatables.min.css" />
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
		<a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Search Profile</li>
	</ol>
        <!-- DataTables Example --> 
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-user"></i> Registered Profile</div>
                <?php   if($this->session->flashdata('success'))
                {
                    ?>
                    <div class="alert alert-success">
                      <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>
                    </div>
                    <?php
                }
                ?>
            <div class="row ml-1">
                <div class="col-md-3">
                    <label class="col-form-label">Zone</label>
                    <?php echo form_dropdown("initial_zone", array("" => "Select Zone") + zone(), isset($initialpost->initial_zone) ? set_value('initial_zone', $initialpost->initial_zone) : set_value('initial_zone'), 'id="initial_zone" class="form-control"');?>
                </div>
                <div class="col-md-3">
                    <label class="col-form-label">Place of Posting</label>
                    <?php echo form_dropdown("present_role_id", array("" => "Select")   + role_lists(), isset($presentpost->present_role_id) ? set_value('present_role_id', $presentpost->present_role_id) : set_value('present_role_id'), 'id="role_id_present" data-id="c" onchange="processRegionPresentDiv();" class="form-control validate[required]"  '); ?>
                </div>
                <div class="col-md-3">
                    <label class="col-form-label">Zone</label>
                    <?php echo form_dropdown("present_region_id", array("" => "Select") + region_lists_filter(), '', 'class="form-control validate[required]" onchange="processSchoolPresentDiv();"  id="c_region_present" data-id="c"');    ?>
                </div>
                <div class="col-md-3">
                    <label class="col-form-label">Zone</label>
                    <?php echo form_dropdown("present_school_id", array("" => "Select") + school_lists(), '', 'class="form-control validate[required]"  id="c_school_present" data-id="c" onchange="presentschcode()" '); ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?php echo SN;?></th>
                            <th>EMPLOYEE CODE</th>
                            <th>EMPLOYEE REGD. TYPE</th>
                            <th>EMPLOYEE NAME</th>
                            <th style="text-align: center;">VIEW</th>
                            <th <th style="text-align: center;">EDIT</th>
                        </tr>
                    </thead>
                    </table>
                </div>
            </div>
	</div>
    </div>
</div>
<?php echo $this->load->view("profile/js/profile/profile_js",'',true); ?>     
        

