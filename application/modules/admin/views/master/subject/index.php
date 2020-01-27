<div id="content-wrapper">
    <div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
	  <li class="breadcrumb-item">
		<a href="#">Dashboard</a>
	  </li>
	  <li class="breadcrumb-item active">Subjects</li>
	</ol>

	<!-- DataTables Example --> 
	<div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-leanpub" aria-hidden="true"></i>&nbsp;Subject List
                <a href="<?php echo base_url().'admin/master/addsubject'?>" class="btn btn-warning" style="float:right;line-height: 5px;"><i class="fa fa-plus-circle"></i>&nbsp;Add Subject</a>
            </div>
                <?php if($this->session->flashdata('success')){ ?>
                    <div class="alert alert-success">
                      <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>
                    </div>
                <?php } ?>
        <div></div>
	  <div class="card-body">
		<div class="table-responsive">
		  <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
			<thead>
			  <tr>
			    <th><?php echo SN;?></th>
				<th>Subject Name</th>
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
<?php echo $this->load->view("admin/js/master/subject_js",'',true); ?>     
        

