<script src="<?php echo base_url(); ?>js/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/datatables.min.css" />
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
		<a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Profile List</li>
	</ol>
        <!-- DataTables Example --> 
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-user"></i> Registered Profile List</div>
                <?php   if($this->session->flashdata('success'))
                {
                    ?>
                    <div class="alert alert-success">
                      <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>
                    </div>
                    <?php
                }
                ?>
            <div></div>
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
        

