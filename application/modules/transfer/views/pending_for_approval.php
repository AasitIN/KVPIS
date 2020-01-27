
<div id="content-wrapper">
    <div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
		<a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="<?php echo base_url();?>swap/index">Transfer</a> / 
                <a href="<?php echo base_url();?>swap/pending_for_approval">Pending For Approval</a> \
            </li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
	  <div class="card-header"><i class="fa fa-th-list" aria-hidden="true"></i>&nbsp; Received Transferred Request</div>
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
                                <th>NAME (EMP CODE)</th>
                                <th>PRESENT PLACE</th>
                                <th>KV/REGION/ZIET</th>
                                <th>PRESENT KVCODE</th>
                                <th>DESIGNATION</th>
                                <th>TRANSFER ORDERNO </th>
                                <th>TRANSFER ORDERDATE</th>
                                <th>STATUS</th>
                                <th>Action</th>
                            </tr>
			</thead>
                        <tbody>
                            <?php foreach($TF['result'] as $T){ 
                                $sub='';
                                if(!empty($T->subjectname)){
                                   $sub='('.$T->subjectname.')'; 
                                }
                                    
                            ?>
                            <tr>
                                <td><?php echo $T->emp_title.''.$T->emp_first_name.''.$T->emp_middle_name.''.$T->emp_last_name.'('.$T->emp_code.')'; ?></td>
                                <td><?php echo $T->present_place; ?></td>
                                <td><?php echo $T->kv_region_zt; ?></td>
                                <td><?php echo $T->kv_code; ?></td>
                                <td><?php echo $T->present_desig.''.$sub; ?></td>
                                <td><?php echo $T->transfer_orderno; ?></td>
                                <td><?php echo $T->transfer_orderdate; ?></td>
                                <td>
                                    <?php 
                                    if($T->Transferstatus=='INPROCESS'){
                                            echo '<div class="btn text-primary btn-block">'.$T->Transferstatus.'</div>';
                                    }if($T->Transferstatus=='ONHOLD'){
                                            echo '<div class="btn text-warning btn-block">'.$T->Transferstatus.'</div>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($T->Transferstatus=='INPROCESS' || $T->Transferstatus=='ONHOLD'){
                                            echo '<a href="'. base_url().'transfer/process_prnding_for_approval/'. base64_encode($T->transferid).'" class="btn btn-primary btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;UPDATE</a>';
                                        }else{
                                            echo 'N/A';
                                        } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NAME (EMP CODE)</th>
                                <th>PRESENT PLACE</th>
                                <th>KV/REGION/ZIET</th>
                                <th>PRESENT KVCODE</th>
                                <th>DESIGNATION</th>
                                <th>TRANSFER ORDERNO </th>
                                <th>TRANSFER ORDERDATE</th>
                                <th>STATUS</th>
                                <th>Action</th>
                            </tr>
			</tfoot>
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
    

