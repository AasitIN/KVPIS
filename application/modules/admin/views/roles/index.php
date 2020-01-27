<div id="content-wrapper">
  <div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
	  <li class="breadcrumb-item">
		<a href="#">Dashboard</a>
	  </li>
	  <li class="breadcrumb-item active">Roles</li>
	</ol>

	<!-- DataTables Example --> 
	<div class="card mb-3">
	  <div class="card-header"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp; Roles List
	  <a href="<?php echo base_url().'admin/roles/add'?>" class="btn btn-warning" style="float:right;line-height: 5px;"><i class="fa fa-plus-circle"></i>&nbsp;Add Role</a>
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
				<th>Role</th>
                                <th>Role Description</th>
				<th>Status</th>
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
        <div id="statusModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Change Status</h4>
              </div>
              <div class="modal-body">
                <span class="success" id="status_msg"></span>
                <?php echo form_open('',array('id'=>'status_form'));?>
                <input type="hidden" name="role_id" id="role_id" value="">
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label col-md-6">Change Status</label>
                            <select name="status" id="status"  class="form-control">
                                <option value="">Select Option</option>
                                <option value="1">Active</option>
                                <option value="0">In-active</option>
                            </select>
                            <span id="status_err"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary" id="status_save">SUBMIT</button>    
                        </div>
                    </div>
                </div>
                <?php echo form_close();?>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        <!-- END CONTENT -->
<?php echo $this->load->view("admin/js/roles/roles_js",'',true); ?>     
        

