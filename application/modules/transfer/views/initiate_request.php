<?php //show($ED); ?>
<div id="content-wrapper">
    <div class="container-fluid">
        
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>transfer/index">Transfer</a> / Initiate Request</li>
        </ol>
        
        <div class="card mb-3">
            <?php echo form_open("", array("id" => "formID", "class" => "register", "autocomplete" => "off")); ?>
            <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($ED['emp_code']) ? $ED['emp_code'] : ''; ?>">
            <div class="card-header">
                <i class="fa fa-random" aria-hidden="true"></i>&nbsp; Initiate Transfer Request
            </div>
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
                <br>
                
                <h6><strong>Transfer From - </strong></h6><hr>
                
                <div class="background_div">
                <div class="row">
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Place of Posting:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_placeid", array("" => "Select") + role_lists(), isset($ED['present_place']) ? set_value('role_id',$ED['present_place']) : set_value('role_id'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_place", array("" => "Select") + role_lists(), isset($ED['present_place']) ? set_value('role_id',$ED['present_place']) : set_value('role_id'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('role_id'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label"><?php if($ED['present_place']==2) echo 'Current Unit'; elseif($ED['present_place']==4) echo 'Current ZEIT'; else echo 'Current Region'; ?>:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_unitid", array("" => "Select") + all_unit_region(), isset($ED['present_unit']) ? set_value('role_id',$ED['present_unit']) : set_value('present_unit'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_unit", array("" => "Select") + all_unit_region(), isset($ED['present_unit']) ? set_value('role_id',$ED['present_unit']) : set_value('present_unit'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('present_unit'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($ED['present_place']==2 && $ED['present_unit']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">Current Department:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_sectionid", array("" => "Select") + section_lists(), isset($ED['present_section']) ? set_value('present_section',$ED['present_section']) : set_value('present_section'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_section", array("" => "Select") + section_lists(), isset($ED['present_section']) ? set_value('present_section',$ED['present_section']) : set_value('present_section'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('present_section'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($ED['present_place']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">Current School:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_schoolid", array("" => "Select") + school_lists(), isset($ED['present_school']) ? set_value('present_school',$ED['present_school']) : set_value('present_school'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_school", array("" => "Select") + school_lists(), isset($ED['present_school']) ? set_value('present_school',$ED['present_school']) : set_value('present_school'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('present_school'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Kv Code :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("present_kvcode", isset($ED['present_kvcode']) ? set_value('present_kvcode', $ED['present_kvcode']) : set_value('present_kvcode'), 'readonly class="validate[required] form-control" '); ?>
                                <span class="error"><?php echo form_error('present_kvcode'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Current Designation:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_designation", array("" => "Select") + all_designations(), isset($ED['present_designationid']) ? set_value('role_id',$ED['present_designationid']) : set_value('present_designationid'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_designationid", array("" => "Select") + all_designations(), isset($ED['present_designationid']) ? set_value('role_id',$ED['present_designationid']) : set_value('present_designationid'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('role_id'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if(!empty($ED['present_subject'])) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?>>
                            <label for="" class="col-sm-12 col-form-label">Subject:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_subjectid", array("" => "Select") + subject_lists(), isset($ED['present_subject']) ? set_value('present_subject',$ED['present_subject']) : set_value('present_subject'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_subject", array("" => "Select") + subject_lists(), isset($ED['present_subject']) ? set_value('present_subject',$ED['present_subject']) : set_value('present_subject'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('role_id'); ?></span>
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
                                <?php echo form_dropdown("transfer_place", array("" => "Select") + role_lists(), '', 'id="role_id_initial" data-id="c" onchange="processRegionInitialDiv();" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('transfer_place'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" id="region_div_initial" style="display:none;">
                            <label for="" class="col-sm-12 col-form-label" id="initial_region_label">Regions<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("transfer_unit", array("" => "Select") + region_lists(), '', 'id="c_region_initial" data-id="c" onchange="processSchoolInitialDiv();" class="form-control validate[required]" ');    ?>
                                <span class="error"><?php echo form_error('transfer_unit'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" id="section_div_initial" style="display:none;">
                            <label for="" class="col-sm-12 col-form-label">Department:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("transfer_section", array("" => "Select") + section_lists(), '', 'class="form-control validate[required]"  id="c_section_initial" data-id="c" '); ?>
                                <span class="error"><?php echo form_error('transfer_section'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" id="school_div_initial" style="display:none;">
                            <label for="" class="col-sm-12 col-form-label"> School:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("transfer_school", array("" => "Select") + school_lists(), '', 'class="form-control validate[required]"  id="c_school_initial" data-id="c" onchange="initialschcode()" '); ?>
                                <span class="error"><?php echo form_error('transfer_school'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Kv Code :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("transfer_kvcode", '', 'id="kvcode_initial" placeholder="KV Code" class="validate[required] form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_kvcode'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Designation:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_designation", array("" => "Select") + all_designations(), '', 'onchange="showsubject()" id="transfer_designation"  class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('transfer_designation'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" id="transfer_subject_div" style="display:none;">
                            <label for="" class="col-sm-12 col-form-label">Subject:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_dropdown("transfer_subject", array("" => "Select") + subject_lists(), '', ' class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('transfer_subject'); ?></span>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <h6><strong>Other Details - </strong></h6>
                <hr>
                <div class="">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Transfer Order No. :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("transfer_orderno", $Ord_No, 'placeholder="Transfer Order No" class="validate[required] form-control" '); ?>
                                <span class="error"><?php echo form_error('transfer_orderno'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Transfer Order Date :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                 <?php echo form_input("transfer_orderdate", $Ord_Date, 'placeholder="Order Date [dd-mm-yyyy]"  class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                                <span class="error"><?php echo form_error('transfer_orderdate'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" >
                            <label for="" class="col-sm-12 col-form-label">Relieving Order :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("relieving_orderno",$Rel_No, 'placeholder="Relieving Order No" class="validate[required] form-control" '); ?>
                                <span class="error"><?php echo form_error('relieving_orderno'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" >
                            <label for="" class="col-sm-12 col-form-label">Relieving Date :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("relieving_date", '', 'placeholder="Relieving Date [dd-mm-yyyy]"  class="datepicker-here form-control future_datepicker validate[required]" '); ?>
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                                <span class="error"><?php echo form_error('relieving_date'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div  style="float: right; margin-bottom: 30px; margin-top: 14px;"> 
                            <input class="btn btn-primary" type="submit" value="Submit">
<!--                        <a href="<?php echo base_url();?>transfer/initiate_request_success/<?php echo $id; ?>" class="btn btn-primary" id="status_'+row.id+'" >Submit</a>-->
                        </div>
                    </div>

                </div>
                <?php echo form_close(); ?>
            </div>
        </div>	
    </div>
</div>
<script>
    var base_url = $('#url').val();
    var get_csrf_token_name = $('#get_csrf_token_name').val();
    var get_csrf_hash = $('#get_csrf_hash').val();
    function processRegionInitialDiv() {
        var role_id = $("#role_id_initial").val();
        $('#school_div_initial').css("display", "none");
        $('#c_school_initial').val('');
        $('#section_div_initial').css("display", "none");
        $('#c_section_initial').val('');
        $('#kvcode_initial').val('');
        if (role_id != '') {
            $.ajax({
                url: base_url + 'admin/users/get_region',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + role_id,
                type: 'POST',
                success: function (response) {
                    $('#c_region_initial').html(response);
                    $('#region_div_initial').css("display", "block");
                    if (role_id == '2') {
                        $("#initial_region_label").html("Units<span class='reqd'>*</span>");
                    }
                    else if (role_id == '4') {
                        $("#initial_region_label").html("ZIET<span class='reqd'>*</span>");
                    } else {
                        $("#initial_region_label").html("Regions<span class='reqd'>*</span>");
                    }
                }
            });
        }else{
            $('#region_div_initial').css("display", "none");
        }
       
    }
    
    function processSchoolInitialDiv() {
        var region_id = $("#c_region_initial").val();
        var role_id = $("#role_id_initial").val();
        if (region_id != '') {
            if(role_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_school',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#school_div_initial').css("display", "block");
                        $('#section_div_initial').css("display", "none");
                        $('#c_school_initial').html(response);
                    }
                });
            }else if(role_id=='2' && region_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_section',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#kvcode_initial').val('1917');
                        $('#section_div_initial').css("display", "block");
                        $('#school_div_initial').css("display", "none");
                        $('#c_section_initial').html(response);
                    }
                });
            }else if(role_id=='2'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_initial').val(result[0].trim());
                        $('#school_div_initial').css("display", "none");
                        $('#section_div_initial').css("display", "none");
                        
                        
                    }
                });
            }else if(role_id=='3'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        console.log(result[1]);
                        $('#kvcode_initial').val(result[0].trim());
                        $('#school_div_initial').css("display", "none");
                        $('#section_div_initial').css("display", "none");
                        
                        
                    }
                });
            }else if(role_id=='4'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        console.log(result[1]);
                        $('#kvcode_initial').val(result[0].trim());
                        $('#school_div_initial').css("display", "none");
                        $('#section_div_initial').css("display", "none");
                        
                        
                    }
                });
            }else{
                $('#school_div_initial').css("display", "none");
                $('#section_div_initial').css("display", "none");
            }
            
        }
    }
    
    function initialschcode() {
        var school_id_initial = $('#c_school_initial').val();
        if (school_id_initial != '') {
            $.ajax({
                url: base_url + 'admin/users/get_schoolcode',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&s_id=' + school_id_initial,
                type: 'POST',
                success: function (response) {
                    var result=response.split('#'); 
                    $('#kvcode_initial').val(result[0].trim());
                    $("#shift_div_initial").css("display", "block");
                    $("#kvcode_div_initial").css("display", "block");
                    $('#initial_zone').val(result[1].trim());
                }
            });
        }

    }
    
    function showsubject()
    {
        var ids=$('#transfer_designation').val();
        if (ids != '') {
            $.ajax({
                url: base_url + 'admin/users/get_designationcat',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&d_id=' + ids,
                type: 'POST',
                success: function (response) {
                    if(response==1)
                    {
                        $('#transfer_subject_div').css("display", "block");
                    }
                    else{
                        $('#transfer_subject_div').css("display", "none");
                    }
                }
            });
        }
    }
</script>