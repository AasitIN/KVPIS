<?php //show($ED); ?>
<div id="content-wrapper">
    <div class="container-fluid">
        
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>swap/index">Transfer</a> / Initiate Request</li>
        </ol>
        
        <div class="card mb-3">
            <?php echo form_open("", array("id" => "formID", "class" => "register", "autocomplete" => "off")); ?>
            <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($ED['P_EMP_CODE']) ? $ED['P_EMP_CODE'] : ''; ?>">
            <div class="card-header">
                <i class="fa fa-random" aria-hidden="true"></i>&nbsp; Initiate Transfer Request
            </div>
            <div class="card-body user_view" >
                <h5>Employee Details :: </h5><hr>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label class="col-sm-12 col-form-label">Name - </label>
                        <div class="col-sm-12"><?php echo $ED['P_EMP_TTL'].' '.$ED['P_EMP_NAME'];?></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="col-sm-12 col-form-label">Emp. Code - </label>
                        <div class="col-sm-12"><?php echo $ED['P_EMP_CODE'];?></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="col-sm-12 col-form-label">Email - </label>
                        <div class="col-sm-12"><?php echo $ED['P_EMP_MAIL'];?></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="col-sm-12 col-form-label">Mobile - </label>
                        <div class="col-sm-12"><?php echo $ED['P_EMP_MOB'];?></div>
                    </div>
                </div>   
                <br><h5>Present Posting Details :: </h5><hr>
                
                <div class="background_div">
                <div class="row">
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Place of Posting:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_placeid", array("" => "Select") + role_lists(), isset($ED['P_PLACE_ID']) ? set_value('present_placeid',$ED['P_PLACE_ID']) : set_value('present_placeid'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_place", array("" => "Select") + role_lists(), isset($ED['P_PLACE_ID']) ? set_value('present_place',$ED['P_PLACE_ID']) : set_value('present_place'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('role_id'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label"><?php if($ED['P_PLACE_ID']==2) echo 'Current Unit'; elseif($ED['P_PLACE_ID']==4) echo 'Current ZEIT'; else echo 'Current Region'; ?>:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_unitid", array("" => "Select") + all_unit_region(), isset($ED['P_UNIT_ID']) ? set_value('present_unitid',$ED['P_UNIT_ID']) : set_value('present_unitid'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_unit", array("" => "Select") + all_unit_region(), isset($ED['P_UNIT_ID']) ? set_value('present_unit',$ED['P_UNIT_ID']) : set_value('present_unit'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('present_unit'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($ED['P_PLACE_ID']==2 && $ED['P_UNIT_ID']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">Current Department:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_sectionid", array("" => "Select") + section_lists(), isset($ED['P_SECTION_ID']) ? set_value('present_sectionid',$ED['P_SECTION_ID']) : set_value('present_sectionid'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_section", array("" => "Select") + section_lists(), isset($ED['P_SECTION_ID']) ? set_value('present_section',$ED['P_SECTION_ID']) : set_value('present_section'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('present_section'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if($ED['P_PLACE_ID']==5) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?> >
                            <label for="" class="col-sm-12 col-form-label">Current School:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_schoolid", array("" => "Select") + school_lists(), isset($ED['P_SCHOOL_ID']) ? set_value('present_schoolid',$ED['P_SCHOOL_ID']) : set_value('present_schoolid'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_school", array("" => "Select") + school_lists(), isset($ED['P_SCHOOL_ID']) ? set_value('present_school',$ED['P_SCHOOL_ID']) : set_value('present_school'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('present_school'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Kv Code :<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_input("present_kvcode", isset($ED['P_KVCODE']) ? set_value('present_kvcode', $ED['P_KVCODE']) : set_value('present_kvcode'), 'readonly class="validate[required] form-control" '); ?>
                                <span class="error"><?php echo form_error('present_kvcode'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="col-sm-12 col-form-label">Current Designation:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_designationid", array("" => "Select") + all_designations(), isset($ED['P_DESG_ID']) ? set_value('present_designation',$ED['P_DESG_ID']) : set_value('present_designation'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_designation", array("" => "Select") + all_designations(), isset($ED['P_DESG_ID']) ? set_value('role_id',$ED['P_DESG_ID']) : set_value('present_designation'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('role_id'); ?></span>
                            </div>
                        </div>
                        <div class="form-group col-md-3" <?php if(!empty($ED['P_SUB_ID'])) echo 'style="display:block;"'; else echo 'style="display:none;"'; ?>>
                            <label for="" class="col-sm-12 col-form-label">Subject:<span class="reqd">*</span></label>
                            <div class="col-sm-12">
                                <?php echo form_dropdown("present_subjectid", array("" => "Select") + subject_lists(), isset($ED['P_SUB_ID']) ? set_value('present_subject',$ED['P_SUB_ID']) : set_value('present_subject'), 'disabled class="form-control validate[required]" '); ?>
                                <?php echo form_dropdown("present_subject", array("" => "Select") + subject_lists(), isset($ED['P_SUB_ID']) ? set_value('present_subject',$ED['P_SUB_ID']) : set_value('present_subject'), 'style="display:none;" class="form-control validate[required]" '); ?>
                                <span class="error"><?php echo form_error('role_id'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br><h5>Transfer To :: </h5><hr>
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
                <br><h5>Transfer Details :: </h5><hr>
                <div class="background_div">
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
                            <input class="btn btn-primary" type="submit" value="Intiate Transfer Request">
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