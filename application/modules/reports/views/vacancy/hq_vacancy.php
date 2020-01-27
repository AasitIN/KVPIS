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
                            <th>KV-CODE</th>
                            <th>UNIT</th>
                            <th>KV/REGION/ZIET</th>
                            <th>IN-POST</th>
                            <th>TYPE</th>
                            <th>IN-SUBJECT</th>
                            <th>SANCTIONED</th>
                            <th>IN-POSITION</th>
                            <th>VACANCY</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    </table>
                </div>
            </div>
	</div>
    </div>
</div>

<?php echo $this->load->view("reports/js/vacancy/vacancy_js",'',true); ?> 
        

