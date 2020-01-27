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
            <li class="breadcrumb-item active">Vacancy List</li>
	</ol>
        <!-- DataTables Example --> 
	<div class="card mb-3">
            
            <div class="card-header">
                <div class="row">
                <div class="col-md-6"><i class="fa fa-user"></i> All Vacancy List</div>
                <div class="col-md-6 text-right"><a class="btn btn-primary" href="<?php echo base_url('vacancy/addbulkvacancy') ?>"><i class="fa fa-upload"></i> Upload Vacancy</a></div>
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

<?php echo $this->load->view("vacancy/js/vacancy/vacancy_js",'',true); ?> 
        

