<style>
    .buttons-excel{
       background-color: green;
       color: white;
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
            <div class="card-header"><i class="fa fa-users"></i>&nbsp; Employee Registration Report</div>
            <form>
            <div class="row ml-1">
                
                    <div class="form-group col-md-3" >
                        <label for="" class="col-sm-12 col-form-label">Place of Posting  <span class="reqd">*</span></label>
                        <div class="col-sm-12">
                            <?php echo form_dropdown("initial_role_id", array("" => "Select") + role_lists(), '', 'id="role_id_initial" data-id="c" onchange="processRegionInitialDiv();" class="form-control validate[required]"  '); ?>
                            <span class="error"><?php echo form_error('initial_role_id'); ?></span> 
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="region_div_initial" style="display:none;">
                        <label for="" class="col-sm-12 col-form-label" id="initial_region_label">Regions<span class="reqd">*</span></label>
                        <div class="col-sm-12">
                            <?php echo form_dropdown("initial_region_id", array("" => "Select") + region_lists(), '', 'id="c_region_initial" data-id="c" onchange="processSchoolInitialDiv();" class="form-control validate[required]" ');    ?>
                            <span class="error"><?php echo form_error('initial_region_id'); ?></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="school_div_initial" style="display:none;">
                        <label for="" class="col-sm-12 col-form-label">Schools<span class="reqd">*</span></label>
                        <div class="col-sm-12">
                            <?php echo form_dropdown("initial_school_id", array("" => "Select") + school_lists(), '', 'class="form-control validate[required]"  id="c_school_initial" data-id="c" onchange="initialschcode()" '); ?>
                            <span class="error"><?php echo form_error('initial_school_id'); ?></span>
                        </div>
                    </div>
                    <div class="form-group col-md-3" id="section_div_initial" style="display:none;">
                        <label for="" class="col-sm-12 col-form-label">Section<span class="reqd">*</span></label>
                        <div class="col-sm-12">
                            <?php echo form_dropdown("initial_section_id", array("" => "Select") + section_lists(), '', 'class="form-control validate[required]"  id="c_section_initial" data-id="c" '); ?>
                            <span class="error"><?php echo form_error('initial_section_id'); ?></span>
                        </div>
                    </div>
                
                    <div class="form-group col-md-3">
                        <label for="" class="col-sm-12 col-form-label">&nbsp;<span class="reqd"></span></label>
                        <button type="button" id="btn_filter" class="btn btn-primary" style="line-height: 23px;"><i class="fa fa-search"></i>&nbsp; SEARCH</button>
                    </div>	
            </div>
            </form>
	</div>
			
           <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
                   
					
					 <thead>
						  <tr>
							 <th rowspan="2"><?php echo SN;?></th>
							 <th rowspan="2">Sen No</th>
							 <th rowspan="2">Name</th>
							 <th rowspan="2">Kv Where Working</th>
							 <th rowspan="2">Date Of Birth</th>
							 <th rowspan="2">Date Of APPIT As TGT(AE)</th>
							 <th rowspan="2">Educational Qualification</th>
							 <th rowspan="2">Ded PROF</th>
							 <th rowspan="2">Date Of Drawing Center</th>
							 <th colspan="3">Date & Period OF 31 st Days In Service course</th>
							 <th colspan="6">Synopsis Of ACRs (For Previous 6 Year From Due Date Of Selection Scale)</th>
							 <th rowspan="2">Date Of Mesurment</th>
						  </tr>
						<tr>
							 <th>FromDate</th>
							 <th>ToDate</th>
							 <th>numberOfDays</th>
							 <th>G-1</th>
							<th>G-2</th>
							<th>G-3</th>
							<th>G-4</th>
							<th>G-5</th>
							<th>G-6</th>
						</tr>
						
					   </thead> 
					  
                    <tbody></tbody>
                   
                    </table>
                </div>
            </div>
	</div>
    </div>
</div>
<?php echo $this->load->view("reports/js/reportone/emp_report_js",'',true); ?>     
        

