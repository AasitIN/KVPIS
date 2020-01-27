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
            <li class="breadcrumb-item active">Registered Employee's</li>
	</ol>
        <!-- DataTables Example --> 
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-users"></i> Registered Employee's List</div>
                <?php   if($this->session->flashdata('success'))
                {
                    ?>
                    <div class="alert alert-success">
                      <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>
                    </div>
                    <?php
                }
                ?>
            <div><?php 
            //show($this->session->userdata);?></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>EMP_CODE</th>
                            <th>NAME</th>
                            <th>DESIGNATION</th>
                            <th>PLACE</th>
                            <th>REGION/UNIT</th>
                            <th>SCHOOL</th>
                            <th style="text-align: center;">VIEW</th>
                            <th style="text-align: center;">EDIT</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                        <tr style="color:#1a1a1a;">
                            <th>#</th>
                            <th>EMP_CODE</th>
                            <th>NAME</th>
                            <th>DESIGNATION</th>
                            <th>PLACE</th>
                            <th>REGION/UNIT</th>
                            <th>SCHOOL</th>
                            <th style="text-align: center;">VIEW</th>
                            <th style="text-align: center;">EDIT</th>
                        </tr>
                    </tfoot>
                    </table>
                </div>
            </div>
	</div>
    </div>
</div>
<?php echo $this->load->view("profile/js/profile/profile_js",'',true); ?>     
        

