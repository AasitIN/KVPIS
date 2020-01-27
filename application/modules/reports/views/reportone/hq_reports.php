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
	<?php //pr($this->session->userdata); ?>
        <!-- DataTables Example --> 
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-users"></i>&nbsp; Employee Registration Report</div>
		<form>
		<div class="row col-md-12">
                <div class="form-group col-md-3" >
                    <label for="" class="col-form-label">Place of Posting  <span class="reqd">*</span></label>
                    <?php  $name = role_lists($this->session->userdata['role_id']) ;
                    echo form_dropdown("initial_role_id",role_lists($this->session->userdata['role_id']),isset($name[3])?$name:'', 'id="role_id_initial"  class="form-control validate[required]"  '); ?>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="col-form-label">Section<span class="reqd">*</span></label>
                    <?php echo form_dropdown("initial_section_id",section_lists($this->session->userdata['role_category']), '', 'class="form-control validate[required]"  id="initial_section_id" data-id="c" '); ?>
                    <span class="error"><?php echo form_error('initial_section_id'); ?></span>
                </div>
                <div class="form-group col-md-3" id="" ">
                    <label for="" class="col-form-label" id="">Desiganition<span class="reqd">*</span></label>
                    <?php echo form_dropdown("desiganition_id", array("" => "Select") + designation_lists($this->session->userdata['role_id']), '', 'id="desiganition_id" data-id="c"  class="form-control validate[required]" ');    ?>
                </div>	
		<div class="form-group col-md-3">
                    <label class="col-form-label">&nbsp;</label><br>
                    <button type="button" id="btn_filter" class="btn btn-primary float-right"><i class="fa fa-search"></i>&nbsp; SEARCH</button>
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
        

