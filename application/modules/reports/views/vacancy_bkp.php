<script src="<?php echo base_url(); ?>js/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/datatables.min.css" />
<style>
    table.dataTable tfoot th, table.dataTable tfoot td {
    padding: 10px 18px 6px 18px;
    border-top: 1px solid #cccccc!important;
    background: #d3d8db!important;
}
</style>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
		<a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Reports</li>
			
	</ol>
        <!-- DataTables Example --> 
	<div class="card mb-3">
            	 <form>
			<div class="row ml-1">
                <div class="form-group col-md-2" >
                    <label for="" class="col-sm-12 col-form-label">   Place of Posting  <span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_role_id", array("" => "Select") + role_lists(), '', 'id="role_id_initial" data-id="c" onchange="processRegionInitialDiv();" class="form-control validate[required]"  '); ?>
                        <span class="error"><?php echo form_error('initial_role_id'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-2" id="region_div_initial" style="display:none;">
                    <label for="" class="col-sm-12 col-form-label" id="initial_region_label">Regions<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_region_id", array("" => "Select") + region_lists(), '', 'id="c_region_initial" data-id="c" onchange="processSchoolInitialDiv();" class="form-control validate[required]" ');    ?>
<!--                        <select  class="form-control validate[required] region_initial" name="region_id_initial" id="c_region_initial" data-id="c">
                            <option value="">Select</option>
                        </select> -->
                        
                        <span class="error"><?php echo form_error('initial_region_id'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-2" id="school_div_initial" style="display:none;">
                    <label for="" class="col-sm-12 col-form-label">Schools<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_school_id", array("" => "Select") + school_lists(), '', 'class="form-control validate[required]"  id="c_school_initial" data-id="c" onchange="initialschcode()" '); ?>
                        <span class="error"><?php echo form_error('initial_school_id'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-2" id="section_div_initial" style="display:none;">
                    <label for="" class="col-sm-12 col-form-label">Section<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_section_id", array("" => "Select") + section_lists(), '', 'class="form-control validate[required]"  id="c_section_initial" data-id="c" '); ?>
                        <span class="error"><?php echo form_error('initial_section_id'); ?></span>
                    </div>
                </div>
				 <?php /* <div class="form-group col-md-3" id="kvcode_div_initial" >
                    <label for="" class="col-sm-12 col-form-label">KV Code:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("initial_kvcode", isset($initialpost->initial_kvcode) ? set_value('initial_kvcode', $initialpost->initial_kvcode) : set_value('initial_kvcode'), 'readonly id="kvcode_initial" class=" validate[required] form-control" '); ?>
                        <span class="error"><?php echo form_error('initial_kvcode'); ?></span>
                    </div>
                </div>
               <div class="form-group col-md-3" id="shift_div_initial" style="display:none;"  >
                    <label for="" class="col-sm-12 col-form-label">Shift<span class="reqd"></span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_shift", array("" => "Select Shift") + shift(), isset($initialpost->initial_shift) ? set_value('initial_shift', $initialpost->initial_shift) : set_value('initial_shift'), 'id="shift_initial" class="form-control"  '); ?>
                        <span class="error"><?php echo form_error('initial_shift'); ?></span> 
                    </div> */ ?>
					
				<div class="form-group col-md-2" id="" ">
                    <label for="" class="col-sm-12 col-form-label" id="">Desiganition<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("desiganition_id", array("" => "Select") + designation_lists(), '', 'id="desiganition_id" data-id="c"  class="form-control validate[required]" ');    ?>

                        
                        <span class="error"><?php echo form_error('initial_region_id'); ?></span>
                    </div>
                </div>	
				<div class="form-group col-md-2" id="desiganition_category_id_s">
                    <label for="" class="col-sm-12 col-form-label" id=""><span>Category</span><span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("desiganition_category_id", array("" => "Select") + designation_category_lists(), '', 'id="desiganition_category_id" data-id="c"  class="form-control validate[required]" ');    ?>
                        <span class="error"><?php echo form_error('initial_region_id'); ?></span>
                    </div>
                </div>

                <div class="form-group col-md-2" id="subject_id_s">
                    <label for="" class="col-sm-12 col-form-label" id="">Subject<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("subject_id", array("" => "Select") + subject_lists(), '', 'id="subject_id" data-id="c"  class="form-control validate[required]" ');    ?>
                        <span class="error"><?php echo form_error('initial_region_id'); ?></span>
                    </div>
                </div>	
                 <div class="form-group col-md-2">
				     <label for="" class="col-sm-12 col-form-label">&nbsp;<span class="reqd"></span></label>
					<div class="col-sm-12">
                         <button type="button"  id="btn_filter" class="btn btn-primary float-right"><i class="fa fa-search"></i>&nbsp; SEARCH</button>
                    </div>
				</div>				
                </div>
				
				
				
            </div>
			</form>
            <div class="card-header">
            <div class="row">
                <div class="col-md-6"><i class="fa fa-user"></i> All Vacancy List</div>
			
               
            </div>
                
            </div>
                <?php   if($this->session->flashdata('success'))
                {
                    ?>
                    <div class="alert alert-success">
                      <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>
                    </div>
                    <?php
                }
                ?>
        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?php echo SN;?></th>
                            <th>KV_CODE</th>
                            <th>UNIT</th>
                            <th>KV/REGION/ZIET</th>
                            <th>IN_POST</th>
                            <th>TYPE</th>
                            <th>IN_SUBJECT</th>
                            <th>SANCTIONED</th>
                            <th>IN_POSITION</th>
                            <th>VACANCY</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                        <tr>
                            <th><?php echo SN;?></th>
                            <th>KV_CODE</th>
                            <th>UNIT</th>
                            <th>KV/REGION/ZIET</th>
                            <th>IN_POST</th>
                            <th>TYPE</th>
                            <th>IN_SUBJECT</th>
                            <th>SANCTIONED</th>
                            <th>IN_POSITION</th>
                            <th>VACANCY</th>
                        </tr>
                    </tfoot>
                    </table>
                </div>
            </div>
	</div>
    </div>
</div>

<?php echo $this->load->view("reports/js/vacancy/vacancy_js",'',true); ?> 
        

