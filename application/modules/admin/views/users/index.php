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
	  <li class="breadcrumb-item active">Users</li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-users"></i> Registered User List
            <?php if(has_permission('users/delete')){ ?>
                <a href="<?php echo base_url().'admin/users/add'?>" class="btn btn-warning" style="float:right; line-height:5px;"><i class="fa fa-plus-circle"></i>&nbsp;Add User</a>	
            <?php } ?>
            </div>
            <?php if(isset($error_msg) && !empty($error_msg)){?>
		<div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo $error_msg;?>.
		</div>
            <?php } if($this->session->flashdata('error')){ ?>
		<div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo $this->session->flashdata('error');?>
            </div>
            <?php } if($this->session->flashdata('success')){ ?>
		<div class="alert alert-success">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>
            </div>
            <?php } ?>
            
            <div class="card-body">
		<div class="table-responsive">
		  <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
			<thead>
			  <tr>
			    <th><?php echo SN;?></th>
				<!--<th>Photo</th>-->
				<th>User Name</th>
				<th>Role</th>
				<th>Date/Time</th>
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
            <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Change Status</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <span class="success" id="status_msg"></span>
                    <?php echo form_open('',array('id'=>'status_form'));?>
                        <input type="hidden" name="user_id" id="user_id" value="">
                        <div class="form-horizontal">
                            <div class="form-group">
                            <label class="col-form-label">Change Status</label>
                            <select name="status" id="status"  class="form-control">
                                <option value="">Select Option</option>
                                <option value="1">Approved</option>
                                <option value="2">Rejected</option>
                                <option value="3">Retired</option>
                            </select>
                            <span id="status_err"></span>
                            <div id="reasion">

                                    <label class="col-form-label">Reason </label>
                                    <textarea class="form-control" name="status_reason"></textarea>
                            </div>							
                            </div>
                        </div>
                    <?php echo form_close();?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="status_save">Submit</button>
                </div>
            </div>
            </div>
        </div>
        <!-- END CONTENT -->
         <!--Reset Pasword Modal -->
        <div id="resetPassModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Reset Password</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <span class="success text-center" id="resetpass_msg"></span>
                    <?php echo form_open("",array("id"=>"ResetPWD","autocomplete"=>"off"));?>
                    <input type="hidden" name="user_id_forpass" id="user_id_forpass" value="">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-form-label">New Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control validate[required] password" placeholder="New Password">
                            <span class="newpasserror"></span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control validate[required,equals[new_password]] password" placeholder="Confirm Password">
                            <span class="cpasserror"></span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="RePassWord">Submit</button>
                    </div>
                    <?php echo form_close();?>
                </div>
            </div>
            </div>
        </div>
        <!-- END CONTENT -->
        
        <?php echo $this->load->view("admin/js/users/users_js",'',true); ?>        
        
  

