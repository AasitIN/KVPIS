<script src="<?php echo base_url(); ?>js/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/datatables.min.css" />

<div id="content-wrapper">
  <div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
	  <li class="breadcrumb-item">
		<a href="#">Dashboard</a>
	  </li>
	  <li class="breadcrumb-item active">Qualification</li>
	</ol>

	<!-- DataTables Example --> 
	<div class="card mb-3">
	  <div class="card-header"><i class="fa fa-user"></i> Qualification List
	  <a href="<?php echo base_url().'admin/master/addqualification'?>" class="btn btn-primary" style="float:right">Add Qualification</a>
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
          <div>
			
          </div>
	  <div class="card-body">
		<div class="table-responsive">
		  <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
			<thead>
			  <tr>
			    <th><?php echo SN;?></th>
				<th>Qualification Name</th>
                                <th>Action</th>
			  </tr>
			</thead>
		  </table>
		</div>
	  </div>
	</div>
  </div>
</div>

<!-- Modal -->
        
        <!-- END CONTENT -->
<?php echo $this->load->view("admin/js/master/qualification_js",'',true); ?>     
        

