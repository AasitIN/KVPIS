<?php print_r($error_msg); //show($TD); ?>
<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="<?php echo base_url(); ?>swap/index">Transfer</a> / Process Pending For Approval
            </li>
        </ol>
        <div class="card mb-3">
            
            <?php echo form_open("", array("id" => "formID", "class" => "register", "autocomplete" => "off")); ?>
            <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($TD['EMP_ID']) ? $TD['EMP_ID'] : ''; ?>">
            <div class="card-header">
                <i class="fa fa-check-square" aria-hidden="true"></i> &nbsp; Process Pending For Approval
            </div>
            
            <?php if(isset($error_msg) && !empty($error_msg)){?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo $error_msg;?>.
                </div>
            <?php }
            if($this->session->flashdata('error')){ ?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo $this->session->flashdata('error');?>
                </div>
            <?php } 
            if($this->session->flashdata('success')){ ?>
                <div class="alert alert-success">
                  <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>
                </div>
            <?php } ?>
            
            <div class="card-body user_view" >
                <h6><strong>Employee Details - </strong></h6><hr>
                <div class="row">
                    <div class="col-md-3"><label>Employee Name:</label></div>
                    <div class="col-md-3"><p><?php echo $TD['EMP_TTL'].' '.$TD['EMP_NAME'];?></p></div>
                    <div class="col-md-3"><label>Employee Code:</label></div>
                    <div class="col-md-3"><p><?php echo $TD['EMP_ID'];?></p></div>
                </div>
                
                <div class="row">
                    <div class="col-md-3"><label>Email:</label></div>
                    <div class="col-md-3"><p><?php echo $TD['EMP_MAIL'];?></p></div>
                    <div class="col-md-3"><label>Phone:</label></div>
                    <div class="col-md-3"><p><?php echo $TD['EMP_MOB'];?></p></div>
                </div> 
                
                <div class="row">
                    <div class="col-md-3"><label>Transfer Order No:</label></div>
                    <div class="col-md-3"><p><?php echo $TD['TRA_OR_NO'];?></p></div>
                    <div class="col-md-3"><label>Transfer Order Date:</label></div>
                    <div class="col-md-3"><p><?php echo $TD['TRA_OR_DT'];?></p></div>
                </div> 
                
            <br>
            <!-- ====================== Transfer From Details ======================== -->    
            <h6><strong>Transfer From :: </strong></h6><hr>
                
                <div class="background_div">
                <div class="row">
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Place of Posting:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_place", array("" => "Select") + role_lists(), isset($TD['present_place']) ? set_value('current_place',$TD['present_place']) : set_value('current_place'), 'disabled class="form-control" ');?>
                                <span class="error"><?php echo form_error('current_place'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label"><?php if($TD['present_place']==2) echo 'Unit'; elseif($TD['present_place']==4) echo 'ZEIT'; else echo 'Region'; ?>:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_unit", array("" => "Select") + all_unit_region(), isset($TD['present_unit']) ? set_value('current_unit',$TD['present_unit']) : set_value('current_unit'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('current_unit'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($TD['present_place']==2 && $TD['present_unit']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">Department:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_section", array("" => "Select") + section_lists(), isset($TD['present_section']) ? set_value('current_section',$TD['present_section']) : set_value('current_section'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('current_section'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($TD['present_place']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">School:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_school", array("" => "Select") + school_lists(), isset($TD['present_school']) ? set_value('current_school',$TD['present_school']) : set_value('current_school'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('current_school'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Kv Code :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("current_kvcode", isset($TD['PRE_KCODE']) ? set_value('current_kvcode', $TD['PRE_KCODE']) : set_value('current_kvcode'), 'readonly class="form-control" '); ?>
                                <span class="error"><?php echo form_error('present_kvcode'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Designation:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_designation", array("" => "Select") + all_designations(), isset($TD['present_designation']) ? set_value('role_id',$TD['present_designation']) : set_value('current_designation'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('current_designation'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if(!empty($TD['present_subject'])) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?>>
                            <label for="" class="col-sm-12 col-form-label">Subject:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("current_subject", array("" => "Select") + subject_lists(), isset($TD['present_subject']) ? set_value('current_subject',$TD['present_subject']) : set_value('current_subject'), 'disabled class="form-control " '); ?>
                                <span class="error"><?php echo form_error('current_subject'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ====================== Transfer To Details ======================== -->  
                <h6><strong>Transfer To :: </strong></h6>
                <hr>
                <div class="background_div">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Place of Posting:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_place", array("" => "Select") + role_lists(), isset($TD['transfer_place']) ? set_value('transfer_place',$TD['transfer_place']) : set_value('transfer_place'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_place'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label"><?php if($TD['transfer_place']==2) echo 'Unit'; elseif($TD['transfer_place']==4) echo 'ZEIT'; else echo 'Region'; ?>:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_unit", array("" => "Select") + all_unit_region(), isset($TD['transfer_unit']) ? set_value('transfer_unit',$TD['transfer_unit']) : set_value('transfer_unit'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_unit'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($TD['transfer_place']==2 && $TD['transfer_unit']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">Department:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_section", array("" => "Select") + section_lists(), isset($TD['transfer_section']) ? set_value('transfer_section',$TD['transfer_section']) : set_value('transfer_section'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_section'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($TD['transfer_place']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">School:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_school", array("" => "Select") + school_lists(), isset($TD['transfer_school']) ? set_value('transfer_school',$TD['transfer_school']) : set_value('transfer_school'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_school'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Kv Code :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("transfer_kvcode", isset($TD['TRA_KCODE']) ? set_value('transfer_kvcode', $TD['TRA_KCODE']) : set_value('transfer_kvcode'), 'readonly class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_kvcode'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Designation:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_designation", array("" => "Select") + all_designations(), isset($TD['transfer_designation']) ? set_value('transfer_designation',$TD['transfer_designation']) : set_value('transfer_designation'), 'disabled class="form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_designation'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if(!empty($TD['transfer_subject'])) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?>>
                            <label for="" class="col-sm-12 col-form-label">Subject:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_subject", array("" => "Select") + subject_lists(), isset($TD['transfer_subject']) ? set_value('transfer_subject',$TD['transfer_subject']) : set_value('transfer_subject'), 'disabled class="form-control " '); ?>
                                <span class="error"><?php echo form_error('transfer_subject'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ====================== Action Section ======================== -->  
                <h6><strong>Action / Response against Request  :: </strong></h6>
                <hr>
                <div class="">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Select Action / Response:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <select name="status" id="status" class="form-control validate[required]" onchange="takereason(this.value);">
                                    <option value="">Select</option>
                                    <option value="1" <?php echo ($TD['transfer_status'] == 1) ? 'selected' : ''; ?>>Pending</option>
                                    <option value="2" <?php echo ($TD['transfer_status'] == 2) ? 'selected' : ''; ?>>Approved</option>
                                    <option value="3" <?php echo ($TD['transfer_status'] == 3) ? 'selected' : ''; ?>>Transferred But Not Joined</option>
                                </select>
                                <input type="hidden" name="transferid" value="<?php echo $TD['id']; ?>" >
                                <span class="error"><?php echo form_error('status'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-9" id="reasondiv" style="display:none;" >
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
                        <div  style="float: right;"> 
                            <input class="btn btn-primary inputDisabled" type="submit" value="Submit Response" disabled>
                        </div>
                    </div>

                </div>
                <?php echo form_close(); ?>
            </div>
        </div>	
    </div>
</div>
<script>
    
    function takereason(chkSts) {
        if (chkSts == '2') {
            $("#reasondiv").css("display", "none");
            $('.inputDisabled').prop("disabled", false);
         }else if (chkSts == '3') {
            $("#reasondiv").css("display", "block");
            $('.inputDisabled').prop("disabled", false);
        }else{
            $('#reasondiv').css("display", "none");
            $('.inputDisabled').prop("disabled", true);
        }
    }

</script>