<?php print_r($error_msg); ?>
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>transfer/index">Transfer</a> / Process Pending For Approval</li>
        </ol>
        <div class="card mb-3">
            <?php echo form_open("", array("id" => "formID", "class" => "register", "autocomplete" => "off")); ?>
            <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($ED['emp_code']) ? $ED['emp_code'] : ''; ?>">
            <div class="card-header"><i class="fa fa-check-square" aria-hidden="true"></i> &nbsp; Process Pending For Approval</div>
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
            <div class="card-body user_view" >
                <h6><strong>Employee Details - </strong></h6><hr>
                <div class="row">
                    <div class="col-md-3"><label>Employee Name:</label></div>
                    <div class="col-md-3"><p><?php echo $ED['emp_title'].' '.$ED['emp_name'];?></p></div>
                    
                    <div class="col-md-3"><label>Employee Code:</label></div>
                    <div class="col-md-3"><p><?php echo $ED['emp_code'];?></p></div>
                </div>
                
                <div class="row">
                    <div class="col-md-3"><label>Email:</label></div>
                    <div class="col-md-3"><p><?php echo $ED['emp_email'];?></p></div>
                    
                    <div class="col-md-3"><label>Phone:</label></div>
                    <div class="col-md-3"><p><?php echo $ED['emp_mobile_no'];?></p></div>
                </div> 
                
                <div class="row">
                    <div class="col-md-3"><label>Transfer OrderNo:</label></div>
                    <div class="col-md-3"><p><?php echo $ED['transfer_orderno'];?></p></div>
                    
                    <div class="col-md-3"><label>Transfer OrderDate:</label></div>
                    <div class="col-md-3"><p><?php echo $ED['transfer_orderdate'];?></p></div>
                </div> 
                
                <br>
                
                <h6><strong>Transfer From - </strong></h6><hr>
                
                <div class="background_div">
                <div class="row">
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Place of Posting:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_place", array("" => "Select") + role_lists(), isset($ED['current_place']) ? set_value('role_id',$ED['current_place']) : set_value('role_id'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('current_place'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label"><?php if($ED['current_place']==2) echo 'Unit'; elseif($ED['current_place']==4) echo 'ZEIT'; else echo 'Region'; ?>:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_unit", array("" => "Select") + all_unit_region(), isset($ED['current_unit']) ? set_value('role_id',$ED['current_unit']) : set_value('current_unit'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('current_unit'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($ED['current_place']==2 && $ED['current_unit']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">Department:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_section", array("" => "Select") + section_lists(), isset($ED['current_section']) ? set_value('current_section',$ED['current_section']) : set_value('current_section'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('current_section'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($ED['current_place']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">School:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_school", array("" => "Select") + school_lists(), isset($ED['current_school']) ? set_value('current_school',$ED['current_school']) : set_value('current_school'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('current_school'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Kv Code :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("current_kvcode", isset($ED['current_kvcode']) ? set_value('current_kvcode', $ED['current_kvcode']) : set_value('current_kvcode'), 'readonly class="form-control" '); ?>
                                <span class="error"><?php echo form_error('present_kvcode'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Designation:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_designation", array("" => "Select") + all_designations(), isset($ED['current_designation']) ? set_value('role_id',$ED['current_designation']) : set_value('current_designation'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('current_designation'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if(!empty($ED['current_subject'])) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?>>
                            <label for="" class="col-sm-12 col-form-label">Subject:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_subject", array("" => "Select") + subject_lists(), isset($ED['current_subject']) ? set_value('current_subject',$ED['current_subject']) : set_value('current_subject'), 'disabled class="form-control " '); ?>
                                <span class="error"><?php echo form_error('current_subject'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h6><strong>Transfer To - </strong></h6>
                <hr>
                <div class="background_div">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Place of Posting:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_place", array("" => "Select") + role_lists(), isset($ED['transfer_place']) ? set_value('role_id',$ED['transfer_place']) : set_value('role_id'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_place'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label"><?php if($ED['transfer_place']==2) echo 'Unit'; elseif($ED['transfer_place']==4) echo 'ZEIT'; else echo 'Region'; ?>:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_unit", array("" => "Select") + all_unit_region(), isset($ED['transfer_unit']) ? set_value('role_id',$ED['transfer_unit']) : set_value('transfer_unit'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_unit'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($ED['transfer_place']==2 && $ED['transfer_unit']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">Department:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_section", array("" => "Select") + section_lists(), isset($ED['transfer_section']) ? set_value('transfer_section',$ED['transfer_section']) : set_value('transfer_section'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_section'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($ED['transfer_place']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">School:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_school", array("" => "Select") + school_lists(), isset($ED['transfer_school']) ? set_value('transfer_school',$ED['transfer_school']) : set_value('transfer_school'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_school'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Kv Code :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("transfer_kvcode", isset($ED['transfer_kvcode']) ? set_value('transfer_kvcode', $ED['transfer_kvcode']) : set_value('transfer_kvcode'), 'readonly class="form-control" '); ?>
                                <span class="error"><?php echo form_error('present_kvcode'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Designation:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_designation", array("" => "Select") + all_designations(), isset($ED['transfer_designation']) ? set_value('role_id',$ED['transfer_designation']) : set_value('transfer_designation'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_designation'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if(!empty($ED['transfer_subject'])) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?>>
                            <label for="" class="col-sm-12 col-form-label">Subject:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_subject", array("" => "Select") + subject_lists(), isset($ED['transfer_subject']) ? set_value('transfer_subject',$ED['transfer_subject']) : set_value('transfer_subject'), 'disabled class="form-control " '); ?>
                                <span class="error"><?php echo form_error('transfer_subject'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <h6><strong>Action - </strong></h6>
                <hr>
                <div class="">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Select :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <select name="status" id="status" class="form-control validate[required]" onchange="takereason();">
                                    <option value="">SELECT</option>
                                    <option value="ACCEPTED">ACCEPT</option>
                                    <option value="REJECTED">REJECT</option>
                                    <option value="ONHOLD">HOLD</option>
                                </select>
                                <input type="hidden" name="transferid" value="<?php echo $ED['id']; ?>" >
                                <span class="error"><?php echo form_error('status'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" id="reasondiv" style="display:none;" >
                            <label for="" class="col-sm-12 col-form-label">Reason:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("reason", '', 'class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('reason'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div  style="float: right; margin-bottom: 30px; margin-top: 14px;"> 
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </div>

                </div>
                <?php echo form_close(); ?>
            </div>
        </div>	
    </div>
</div>
<script>
    
    function takereason() {
        var status = $('#status').val();
        if (status == 'REJECTED' || status == 'ONHOLD') {
            $("#reasondiv").css("display", "block");
        }else{
            $('#reasondiv').css("display", "none");
        }

    }

</script>