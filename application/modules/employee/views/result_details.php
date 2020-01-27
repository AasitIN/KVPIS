<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"> <!-- Resource style -->
<script src="<?php echo base_url(); ?>js/modernizr.js"></script> <!-- Modernizr -->
<link href="<?php echo base_url(); ?>css/typehead.css" rel="stylesheet">
<div id="content-wrapper">
    <div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header register-header">
            <?php 
            if(empty($EmpCode)) 
                echo '<i class="fa fa-user-plus"></i>&nbsp;Add Employee'; 
            else 
                echo '<i class="fa fa-user"></i>&nbsp;Employee Code - '.$EmpCode; 
            
            ?>
        </div>
    </div>
    <div class="card-body shape-shadow">
        <?php
        //if(isset($Mas)) { show($Mas);   }
        //if(isset($Tech)){ show($Tech);  }
        //if(isset($Non)) { show($Non);   }
        ?>
        <?php if (isset($error_msg) && !empty($error_msg)) { ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> <?php echo $error_msg; ?>.
            </div>
        <?php } if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php } if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
        <!-- ===================================== Form Starts From Here ====================================== -->
        <?php echo form_open_multipart("",array("id" =>"formID", "class" =>"register", "autocomplete" =>"off"));?>

        <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($EmpCode) ? $EmpCode : ''; ?>">
        <?php echo $this->load->view('elements/employeetab',(isset($EmpCode))?$EmpCode:''); ?>
        <h6><strong>Result Details- </strong></h6>
        <hr>
    
        <div class="row">
            <div class="form-group col-md-4" >
            <label for="" class="col-sm-12 col-form-label">Employee Type:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                    <?php echo form_dropdown("employee_type", array("" => "Select ") + designation_category_lists(), isset($users->year) ? set_value('year', $users->emp_year) : set_value('year'), 'class="form-control validate[required]"  id="employee_type"'); ?>
                    <span class="error"><?php echo form_error('Employee Type'); ?></span>
                    </div>
            </div>
            <div class="form-group col-md-4">
            <label for="" class="col-sm-12 col-form-label">Designation:<span class="reqd">*</span></label>
                    <div class="col-sm-12" >
                  
                    <select  class="form-control validate[required]" name="designation_type" id="designation_type" data-id="c">
                            <option value="">Select </option>
                    </select> 
                    <span class="error"><?php echo form_error('Designation Type'); ?></span>
                    </div>
            </div>
        </div>       
        
        
        <table class="table table-bordered" id="containner_principal_vice_principal_result_details"  width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;display:none">
            <tr role="row">
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:141px">Class</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:141px">Year</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">No of students appeared</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">No of students passed</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">Pass Percentage</th>
                <th  tabindex="0"  rowspan="1" colspan="1" >No of students 90% or more</th>
                <th  tabindex="0"  rowspan="1" colspan="1" >P.I. in respect of class XII</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:5%; vertical-align: middle;"> 
                    <a href="javascript:void(0);" id="addmore_result" class="link-cross">
                        <button type="button" class="btn btn-small btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </a>
                </th>
            </tr>
        </table>
        <table class="table table-bordered" id="containner_headmaster_prt_result_details"  width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;display:none">
            <tr role="row">
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:141px">Class</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:141px">Year</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">No of students appeared</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">No of students passed</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">Pass Percentage</th>
                <th  tabindex="0"  rowspan="1" colspan="1" >Subject taught</th>
                <th  tabindex="0"  rowspan="1" colspan="1" >Percentage of A grades</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:5%; vertical-align: middle;"> 
                    <a href="javascript:void(0);" id="addmore_hadmaster_prt_result" class="link-cross">
                        <button type="button" class="btn btn-small btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </a>
                </th>
            </tr>
        </table>
        <table class="table table-bordered" id="containner_pgt_result_details"  width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;display:none">
            <tr role="row">
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:141px">Class</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:141px">Year</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">No of students appeared</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">No of students passed</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">Pass Percentage</th>
                <th  tabindex="0"  rowspan="1" colspan="1" >Subject taught</th>
                <th  tabindex="0"  rowspan="1" colspan="1" >PI Of highest class taught</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:5%; vertical-align: middle;"> 
                    <a href="javascript:void(0);" id="addmore_pgt_result" class="link-cross">
                        <button type="button" class="btn btn-small btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </a>
                </th>
            </tr>
        </table>
        <table class="table table-bordered" id="containner_tgt_result_details"  width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;display:none">
            <tr role="row">
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:141px">Class</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:141px">Year</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">No of students appeared</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">No of students passed</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending">Pass Percentage</th>
                <th  tabindex="0"  rowspan="1" colspan="1" >Subject taught</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:5%; vertical-align: middle;"> 
                    <a href="javascript:void(0);" id="addmore_tgt_result" class="link-cross">
                        <button type="button" class="btn btn-small btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </a>
                </th>
            </tr>
        </table>
        <label for="" class="col-sm-12 col-form-label non-teaching-label" style="display:none">Service Record of last 5 year:<span class="reqd">*</span></label>
      
        <table class="table table-bordered" id="containner_non_teaching_details"  width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;display:none">
            <tr role="row">
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:16%;" class="text-center">Name of Office / Vidyalaya</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:12%;" class="text-center">Designated Post</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:20%;" class="text-center">
                    Duration of Service <div class="clearfix"></div>[From Date] - [To Date]
                </th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:16%;" class="text-center">Name of Section / Matters Detail</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:16%;" class="text-center">Any other responsibility discharged</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:10%;" class="text-center">Upload Document</th>
                <th  tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" style="width:5%; vertical-align: middle;"> 
                    <a href="javascript:void(0);" id="addmore_service_details" class="link-cross">
                        <button type="button" class="btn btn-small btn-success"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </a>
                </th>
            </tr>
        </table>
    



    <div class="row">
        <div class="col-sm-12">
            <div  style="float:right;"> 
                <input class="btn btn-primary" type="reset" value="Reset">
                 <?php  echo form_submit('', 'Save & Next', 'class="btn btn-primary"');?>
            </div>
        </div>
    </div>
    <div class="text-right rg-footer"></div>
        <?php echo form_close(); ?>
    </div>
</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    var Mas = <?php echo json_encode(isset($Mas) ? $Mas: ''); ?>;
    if(Mas){
        $("#employee_type").val(Mas.emp_type).trigger("change");
        setTimeout(function(){$("#designation_type").val(Mas.emp_dign_post).trigger("change");}, 1000);
    }
});
</script>

<!-- ===================================== PRINCIPAL - Teaching Template Start =====================================-->
<script id="result_template" type="x-tmpl-mustache">
    <tr id="delete_wexp_result_details{{random_exr_id}}" class="delete_wexp_result_details">
    <td>
    <select  class="form-control validate[required]" name="pri_class[]" id="pri_class{{random_exr_id}}">
            <option value="">Select </option>
            <option value="10">X</option>
            <option value="11">XI</option>
            <option value="12">XII</option>
    </select>
    </td>
    <td><?php echo form_dropdown("pri_year[]", array("" => "Select Year") + performance_years(), isset($users->year) ? set_value('pri_year[]', $users->emp_year) : set_value('pri_year[]'), 'id="pri_year{{random_exr_id}}" class="form-control"'); ?></td>
    <td><?php echo form_input("pri_no_stu[]",'{{pri_result_data.rst_no_students}}', 'id="pri_no_stu{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("pri_no_stu_pass[]",'{{pri_result_data.rst_no_pass_students}}', 'id="pri_no_stu_pass{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("pri_pass_per[]",'{{pri_result_data.rst_pass_per}}', 'id="pri_pass_per{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("pri_high_per[]",'{{pri_result_data.rst_pass_per_ninety}}', 'id="pri_high_per{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("pri_high_pi[]", '{{pri_result_data.rst_pi_highest}}', 'id="pri_high_pi{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td style="text-align:center; vertical-align:middle!important;">
        <a href="javascript:void(0);" id="remove_wexp_result_details{{random_exr_id}}" class="remove_wexp_result_details{{random_exr_id}}">
        <button type="button" class="btn btn-small btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
        </a>
    </td>
    </tr>
</script>
<!-- ===================================== PRINCIPAL - Teaching Template End =======================================-->
<!-- ===================================== HMS - Teaching Template Start =====================================-->
<script id="result_headmaster_prt_template" type="x-tmpl-mustache">
    <tr id="delete_wexp_headmaster_prt_result_details{{random_exr_id}}" class="delete_wexp_headmaster_prt_result_details">
    <td><select  class="form-control validate[required]" name="hms_class[]" id="hms_class{{random_exr_id}}">
            <option value="">Select </option>
            <option value="1">I</option>
            <option value="2">II</option>
            <option value="3">III</option>
            <option value="4">IV</option>
            <option value="5">V</option>
    </select></td>
    <td><?php echo form_dropdown("hms_year[]", array("" => "Select Year") + performance_years(), isset($users->year) ? set_value('hms_year[]', $users->emp_year) : set_value('hms_year[]'), 'id="hms_year{{random_exr_id}}" class="form-control"  '); ?></td>
    <td><?php echo form_input("hms_no_stu[]",'{{hms_result_data.rst_no_students}}', 'id="hms_no_stu{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("hms_no_stu_pass[]",'{{hms_result_data.rst_no_pass_students}}', 'id="hms_no_stu_pass{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("hms_pass_per[]",'{{hms_result_data.rst_pass_per}}', 'id="hms_pass_per{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_dropdown("hms_sub[]", array("" => "Select Subject") + subject_lists_tgt(), isset($users->year) ? set_value('hms_sub[]', $users->emp_year) : set_value('hms_sub[]'), 'id="hms_sub{{random_exr_id}}" class="form-control"  '); ?></td>
    <td><?php echo form_input("hms_high_pi[]",'{{hms_result_data.rst_pass_per_grade}}', 'id="hms_high_pi{{random_exr_id}}" class="decimalNumericOnly form-control" '); ?></td>
    <td style="text-align:center; vertical-align:middle!important;">
        <a href="javascript:void(0);" id="remove_wexp_headmaster_prt_result_details{{random_exr_id}}" class="remove_wexp_headmaster_prt_result_details{{random_exr_id}}">
            <button type="button" class="btn btn-small btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
        </a>
    </td>
    </tr>
</script>
<!-- ===================================== HMS - Teaching Template End =======================================-->
<!-- ===================================== PGT - Teaching Template Start =====================================-->
<script id="result_pgt_template" type="x-tmpl-mustache">
    <tr id="delete_wexp_pgt_result_details{{random_exr_id}}" class="delete_wexp_pgt_result_details">
    <td>
        <select  class="form-control validate[required]" name="pgt_class[]" id="pgt_class{{random_exr_id}}">
            <option value="">Select </option>
            <option value="10">X</option>
            <option value="11">XI</option>
            <option value="12">XII</option>
        </select>
    </td>
    <td><?php echo form_dropdown("pgt_year[]", array("" => "Select Year") + performance_years(), isset($users->year) ? set_value('pgt_year[]', $users->emp_year) : set_value('pgt_year[]'), 'id="pgt_year{{random_exr_id}}" class="form-control validate[required]"'); ?></td>
    <td><?php echo form_input("pgt_no_stu[]",'{{pgt_result_data.rst_no_students}}', 'id="pgt_no_stu{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("pgt_no_stu_pass[]",'{{pgt_result_data.rst_no_pass_students}}', 'id="pgt_no_stu_pass{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("pgt_pass_per[]",'{{pgt_result_data.rst_pass_per}}', 'id="pgt_pass_per{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_dropdown("pgt_sub[]", array("" => "Select Subject") + subject_lists_pgt(), isset($users->year) ? set_value('pgt_sub[]', $users->emp_year) : set_value('pgt_sub[]'), 'id="pgt_sub{{random_exr_id}}" class="form-control"  '); ?></td>
    <td><?php echo form_input("pgt_high_pi[]",'{{pgt_result_data.rst_pi_highest}}', 'id="pgt_high_pi{{random_exr_id}}" class="decimalNumericOnly form-control" '); ?></td>
    <td style="text-align:center; vertical-align:middle!important;">
        <a href="javascript:;" id="remove_wexp_pgt_result_details{{random_exr_id}}" class="remove_wexp_pgt_result_details{{random_exr_id}}">
            <button type="button" class="btn btn-small btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
        </a>
    </td>
    </tr>
</script>
<!-- ===================================== PGT - Teaching Template End =======================================-->
<!-- ===================================== TGT - Teaching Template Start =====================================-->
<script id="result_tgt_template" type="x-tmpl-mustache">
    <tr id="delete_wexp_tgt_result_details{{random_exr_id}}" class="delete_wexp_tgt_result_details">
    <td>
    <select class="form-control validate[required]" name="tgt_class[]" id="tgt_class{{random_exr_id}}">
            <option value="">Select </option>
            <option value="6">VI</option>
            <option value="7">VII</option>
            <option value="8">VIII</option>
            <option value="9">IX</option>
            <option value="10">X</option>
    </select>
    </td>
    <td><?php echo form_dropdown("tgt_year[]", array("" => "Select Year") + performance_years(), isset($users->year) ? set_value('tgt_year[]', $users->emp_year) : set_value('tgt_year[]'), 'id="tgt_year{{random_exr_id}}" class="form-control validate[required]"'); ?></td>
    <td><?php echo form_input("tgt_no_stu[]", '{{tgt_result_data.rst_no_students}}', 'id="tgt_no_stu{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("tgt_no_stu_pass[]", '{{tgt_result_data.rst_no_pass_students}}', 'id="tgt_no_stu_pass{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_input("tgt_pass_per[]", '{{tgt_result_data.rst_pass_per}}', 'id="tgt_pass_per{{random_exr_id}}" maxlength="5" class="decimalNumericOnly form-control" '); ?></td>
    <td><?php echo form_dropdown("tgt_sub[]", array("" => "Select Subject") + subject_lists_tgt(), isset($users->year) ? set_value('tgt_sub[]', $users->emp_year) : set_value('tgt_sub[]'), 'id="tgt_sub{{random_exr_id}}" class="form-control"  '); ?></td>
    <td style="text-align:center; vertical-align:middle!important;">
        <a href="javascript:void(0);" id="remove_wexp_tgt_result_details{{random_exr_id}}" class="remove_wexp_tgt_result_details{{random_exr_id}}">
            <button type="button" class="btn btn-small btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
        </a>
    </td>
    </tr>
</script>
<!-- ===================================== TGT - Teaching Template End =======================================-->
<!-- ===================================== Non - Teaching Template Start =====================================-->
<script id="service_template" type="x-tmpl-mustache">
    <tr id="delete_wexp_service_details{{random_exr_id}}" class="delete_wexp_service_details">
    <td><textarea class="form-control validate[required]" name="designated_vid_ofc[]" id="designated_vid_ofc{{random_exr_id}}" class="validate[required] txtOnly form-control">{{non_result_data.rsnt_vid_ofc_name}}</textarea></td>
    <td><?php echo form_dropdown("designated_post[]", array("" => "Select") + get_designated_post(), isset($users->year) ? set_value('designated_post[]', $users->emp_year) : set_value('designated_post[]'), 'id="designated_post{{random_exr_id}}" class="form-control validate[required]"'); ?></td>
    <td>
    <div class="row">
        <div class="col-sm-6 pr-0">
            <?php echo form_input("designated_from[]",'{{non_result_data.rsnt_from_date}}', 'placeholder="dd-mm-yyyy" id="leave_more_from_datepicker{{random_exr_id}}"  class="datepicker-here form-control validate[required]"'); ?>
        </div>
        <div class="col-sm-6 pl-0">
            <?php echo form_input("designated_to[]",'{{non_result_data.rsnt_to_date}}', 'placeholder="dd-mm-yyyy" id="leave_more_to_datepicker{{random_exr_id}}"  class="datepicker-here form-control validate[required]" '); ?>
        </div>
    </div>
    </td>
    <td><textarea class="form-control validate[required]" name="designated_details[]" id="designated_details{{random_exr_id}}">{{non_result_data.rsnt_sec_mat_details}}</textarea></td>
    <td><textarea class="form-control validate[required]" name="designated_discharged[]" id="designated_discharged{{random_exr_id}}">{{non_result_data.rsnt_res_disp}}</textarea></td>
    <td>
        <input type="file" name="designated_file[]" id="designated_file{{random_exr_id}}" class="form-control validate[required]">
        <span class="error"><?php echo form_error('Designated File'); ?></span>
        <span style="font-size: 11px; color: #f56005;">(Allowed format : png, jpg, pdf &amp; Max. file size 2MB)</span>
    </td>
    <td style="text-align:center; vertical-align:middle!important;">
        <a href="javascript:;" id="remove_wexp_service_details{{random_exr_id}}" class="remove_wexp_service_details{{random_exr_id}}">
        <button type="button" class="btn btn-small btn-danger"><i class="fa fa-minus" aria-hidden="true"></i></button>
        </a>
    </td>
    </tr>
</script>
<!-- ===================================== Non - Teaching Template End =====================================-->
<script>

var base_url = $('#url').val();
var get_csrf_token_name = $('#get_csrf_token_name').val();
var get_csrf_hash = $('#get_csrf_hash').val();

//================================ PRINCIPAL SECTION START ===============================//
var random_result_id = Date.now();
$('#addmore_result').click(function () {
    var random_result_id = Date.now();
    var wexp_count = $(".delete_wexp_result_details").length;
    if(wexp_count<=4){
      RenderResultDetails(random_result_id);  
    }
});

var PriData =<?php echo json_encode(isset($tPRI) ? $tPRI: ''); ?>;
    if (PriData && PriData.length>0) {
        $.each(PriData, function (key, result_detail) {
            //console.log(result_detail);
            RenderResultDetails(result_detail.id, result_detail);
                $("#pri_class"+result_detail.id).val(result_detail.rst_class).trigger("change");
                $("#pri_year"+result_detail.id).val(result_detail.rst_year).trigger("change");
                //$("#hms_sub"+result_detail.id).val(result_detail.rst_subjects).trigger("change");

        });
    } else {
        result_detail = {};
        RenderResultDetails(random_result_id, result_detail);
        $("#"+random_result_id).css("display","none");
    }


function RenderResultDetails(random_result_id, result_detail) {
    var source = $("#result_template").html();
    Mustache.parse(source);
    var rendered = Mustache.render(source, {
        random_exr_id: random_result_id,
        pri_result_data: result_detail,
    });
    $("#containner_principal_vice_principal_result_details").append(rendered);
    delete_result_detail(random_result_id);
}

function delete_result_detail(random_exr_id) {
    
    $("#remove_wexp_result_details" + random_exr_id).click(function () {
        var wexp_count = $(".delete_wexp_result_details").length;
        var wexp_id = $(this).attr("wexpid");
        if (wexp_id) {
            var confirm = window.confirm('Are you sure want to delete?');
            if (confirm) {
                $("#delete_wexp_result_details" + wexp_id).remove();
                generate("success", "Details deleted successfully");
                location_reload();
                if (wexp_count == 1) {
                    equa = {};
                    RenderResultDetails(random_exr_id, equa);
                }
            }
        } else {
            if (wexp_count > 1) {
                $("#delete_wexp_result_details" + random_exr_id).remove();
            }

        }
    });
}
//================================== PRINCIPAL SECTION END =================================//
//============================== HMS/PRI TEACHER SECTION START =============================//

$('#addmore_hadmaster_prt_result').click(function () {
    var random_result_id = Date.now();
    var wexp_count = $(".delete_wexp_hadmaster_prt_result_details").length;
    if(wexp_count<=4){
      RenderHeadmasterPrtResultDetails(random_result_id);  
    }
});

    var HmsData =<?php echo json_encode(isset($tHMS) ? $tHMS: ''); ?>;
    if (HmsData && HmsData.length>0) {
        $.each(HmsData, function (key, result_detail) {
            //console.log(result_detail);
            RenderHeadmasterPrtResultDetails(result_detail.id, result_detail);
                $("#hms_class"+result_detail.id).val(result_detail.rst_class).trigger("change");
                $("#hms_year"+result_detail.id).val(result_detail.rst_year).trigger("change");
                $("#hms_sub"+result_detail.id).val(result_detail.rst_subjects).trigger("change");

        });
    } else {
        result_detail = {};
        RenderHeadmasterPrtResultDetails(random_result_id, result_detail);
        $("#"+random_result_id).css("display","none");
    }


function RenderHeadmasterPrtResultDetails(random_result_id, result_detail) {
    var source = $("#result_headmaster_prt_template").html();
    Mustache.parse(source);
    var rendered = Mustache.render(source, {
        random_exr_id: random_result_id,
        hms_result_data: result_detail,
    });
    $("#containner_headmaster_prt_result_details").append(rendered);
    delete_headmaster_prt_result_detail(random_result_id);
}

function delete_headmaster_prt_result_detail(random_exr_id) {
    $("#remove_wexp_headmaster_prt_result_details" + random_exr_id).click(function () {
        var wexp_count = $(".delete_wexp_headmaster_prt_result_details").length;
        var wexp_id = $(this).attr("wexpid");
        if (wexp_id) {
            var confirm = window.confirm('Are you sure want to delete?');
            if (confirm) {
                $("#delete_wexp_headmaster_prt_result_details" + wexp_id).remove();
                generate("success", "Details deleted successfully");
                location_reload();
                if (wexp_count == 1) {
                    equa = {};
                    RenderHeadmasterPrtResultDetails(random_exr_id, equa);
                }
            }
        } else {
            if (wexp_count > 1) {
                $("#delete_wexp_headmaster_prt_result_details" + random_exr_id).remove();
            }

        }
    });
}

//============================== HMS/PRI TEACHER SECTION END =============================//
//=================================== PGT SECTION START ==================================//
$('#addmore_pgt_result').click(function () {
    var random_result_id = Date.now();
    var wexp_count = $(".delete_wexp_pgt_result_details").length;
    if(wexp_count<=4){
      RenderPgtTgtResultDetails(random_result_id);  
    }
});

    var PgtData =<?php echo json_encode(isset($tPGT) ? $tPGT: ''); ?>;
        if (PgtData && PgtData.length>0) {
            $.each(PgtData, function (key, result_detail) {
                //console.log(result_detail);
                RenderPgtTgtResultDetails(result_detail.id, result_detail);
                    $("#pgt_class"+result_detail.id).val(result_detail.rst_class).trigger("change");
                    $("#pgt_year"+result_detail.id).val(result_detail.rst_year).trigger("change");
                    $("#pgt_sub"+result_detail.id).val(result_detail.rst_subjects).trigger("change");
                    
            });
        } else {
            result_detail = {};
            RenderPgtTgtResultDetails(random_result_id, result_detail);
            $("#"+random_result_id).css("display","none");
        }
function RenderPgtTgtResultDetails(random_result_id, result_detail) {
    var source = $("#result_pgt_template").html();
    Mustache.parse(source);
    var rendered = Mustache.render(source, {
        random_exr_id: random_result_id,
        pgt_result_data: result_detail,
    });
    $("#containner_pgt_result_details").append(rendered);
    delete_pgt_result_detail(random_result_id);
}
function delete_pgt_result_detail(random_exr_id) {
    $("#remove_wexp_pgt_result_details" + random_exr_id).click(function () {
        var wexp_count = $(".delete_wexp_pgt_result_details").length;
        var wexp_id = $(this).attr("wexpid");
        if (wexp_id) {
            var confirm = window.confirm('Are you sure want to delete?');
            if (confirm) {
                $("#delete_wexp_pgt_result_details" + wexp_id).remove();
                generate("success", "Details deleted successfully");
                location_reload();
                if (wexp_count == 1) {
                    equa = {};
                    RenderPgtTgtResultDetails(random_exr_id, equa);
                }
            }
        } else {
            if (wexp_count > 1) {
                $("#delete_wexp_pgt_result_details" + random_exr_id).remove();
            }

        }
    });
}
//============================== PGT SECTION END =============================//
//============================== TGT SECTION START =============================//
    $('#addmore_tgt_result').click(function () {
        var random_result_id = Date.now();
        var wexp_count = $(".delete_wexp_tgt_result_details").length;
            if(wexp_count<=4){
                RenderTgtResultDetails(random_result_id);  
            }
        });
        var TgtData =<?php echo json_encode(isset($tTGT) ? $tTGT: ''); ?>;
        if (TgtData && TgtData.length>0) {
            $.each(TgtData, function (key, result_detail) {
                //console.log(result_detail);
                RenderTgtResultDetails(result_detail.id, result_detail);
                    $("#tgt_class"+result_detail.id).val(result_detail.rst_class).trigger("change");
                    $("#tgt_year"+result_detail.id).val(result_detail.rst_year).trigger("change");
                    $("#tgt_sub"+result_detail.id).val(result_detail.rst_subjects).trigger("change");
                    
            });
        } else {
            result_detail = {};
            RenderTgtResultDetails(random_result_id, result_detail);
            $("#"+random_result_id).css("display","none");
        }

function RenderTgtResultDetails(random_result_id, result_detail) {
    var source = $("#result_tgt_template").html();
    Mustache.parse(source);
    var rendered = Mustache.render(source, {
        random_exr_id: random_result_id,
        tgt_result_data: result_detail,
    });
    $("#containner_tgt_result_details").append(rendered);
    delete_tgt_result_detail(random_result_id);
}
function delete_tgt_result_detail(random_exr_id) {
    $("#remove_wexp_tgt_result_details" + random_exr_id).click(function () {
        var wexp_count = $(".delete_wexp_tgt_result_details").length;
        var wexp_id = $(this).attr("wexpid");
        if (wexp_id) {
            var confirm = window.confirm('Are you sure want to delete?');
            if (confirm) {
                $("#delete_wexp_tgt_result_details" + wexp_id).remove();
                generate("success", "Details deleted successfully");
                location_reload();
                if (wexp_count == 1) {
                    equa = {};
                    RenderTgtResultDetails(random_exr_id, equa);
                }
            }
        } else {
            if (wexp_count > 1) {
                $("#delete_wexp_tgt_result_details" + random_exr_id).remove();
            }

        }
    });
}
//============================== TGT SECTION END =============================//
//============================== NON SECTION START =============================//
$('#addmore_service_details').click(function () {
    var random_result_id = Date.now();
    var wexp_count = $(".delete_wexp_servive_details").length;
    if(wexp_count<=4){
        RenderServiceDetails(random_result_id);  
    }
});
    var NonData =<?php echo json_encode(isset($Non) ? $Non: ''); ?>;
        if (NonData && NonData.length>0) {
            $.each(NonData, function (key, result_detail) {
                //console.log(result_detail);
                RenderServiceDetails(result_detail.id, result_detail);
                $("#designated_post"+result_detail.id).val(result_detail.rsnt_dign_post).trigger("change");
            });
        } else {
            result_detail = {};
            RenderServiceDetails(random_result_id, result_detail);
            $("#"+random_result_id).css("display","none");
        }

function RenderServiceDetails(random_result_id, result_detail) {
    var source = $("#service_template").html();
    Mustache.parse(source);
    var rendered = Mustache.render(source, {
        random_exr_id: random_result_id,
        non_result_data: result_detail,
    });
    $("#containner_non_teaching_details").append(rendered);
    delete_service_detail(random_result_id);
    $("#leave_more_from_datepicker" + random_result_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#leave_more_from_datepicker' + random_result_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#leave_more_to_datepicker' + random_result_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#leave_more_from_datepicker' + random_result_id).val('');
                    $('#leave_more_to_datepicker' + random_result_id).val('');
                }
            }
        });
        $("#leave_more_to_datepicker" + random_result_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#leave_more_from_datepicker' + random_result_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#leave_more_to_datepicker' + random_result_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#leave_more_from_datepicker' + random_result_id).val('');
                    $('#leave_more_to_datepicker' + random_result_id).val('');
                }
            }

        });
}
function delete_service_detail(random_exr_id) {
    $("#remove_wexp_service_details" + random_exr_id).click(function () {
        var wexp_count = $(".delete_wexp_service_details").length;
        var wexp_id = $(this).attr("wexpid");
        if (wexp_id) {
            var confirm = window.confirm('Are you sure want to delete?');
            if (confirm) {
                $("#delete_wexp_service_details" + wexp_id).remove();
                generate("success", "Details deleted successfully");
                location_reload();
                if (wexp_count == 1) {
                    equa = {};
                    RenderServiceDetails(random_exr_id, equa);
                }
            }
        } else {
            if (wexp_count > 1) {
                $("#delete_wexp_service_details" + random_exr_id).remove();
            }

        }
    });
}
//============================== NON SECTION ENDS =============================//

$("#employee_type").change(function(){
    var employee_type = $("#employee_type").val();
    //if employee type is teaching
    if(employee_type==1){
        $("#containner_non_teaching_details").hide(); 
        $(".non-teaching-label").css("display","none");
    }else if(employee_type==2){
        $("#containner_non_teaching_details").show(); 
        $(".non-teaching-label").css("display","block");;
        $("#containner_principal_vice_principal_result_details").hide();  
        $("#containner_headmaster_prt_result_details").hide();    
        $("#containner_pgt_result_details").hide();  
        $("#containner_tgt_result_details").hide();  
    }else{
        $("#containner_non_teaching_details").hide(); 
        $(".non-teaching-label").css("display","none");
        $("#containner_principal_vice_principal_result_details").hide();  
        $("#containner_headmaster_prt_result_details").hide();    
        $("#containner_pgt_result_details").hide();  
        $("#containner_tgt_result_details").hide(); 
    }
$.ajax({
        url: base_url + 'employee/get_designation_for_award',
        data: get_csrf_token_name + '=' + get_csrf_hash + '&c_id=' + employee_type,
        type: 'POST',
        success: function (response) {
            if (response != false) {
                    $('#designation_type').html(response);
                    $('#desginated_post').html(response);

            }
           

        }
    });
});

$("#designation_type").change(function(){
    var designation = $("#designation_type").val();
    if(designation == 1 ||designation == 2){
        $("#containner_principal_vice_principal_result_details").show();
        $("#containner_headmaster_prt_result_details").hide();    
        $("#containner_pgt_result_details").hide();  
        $("#containner_tgt_result_details").hide();
    }else if(designation == 3 ||designation == 7){
        $("#containner_headmaster_prt_result_details").show();
        $("#containner_principal_vice_principal_result_details").hide(); 
        $("#containner_pgt_result_details").hide();  
        $("#containner_tgt_result_details").hide();
    }else if(designation == 8) {
        $("#containner_tgt_result_details").show();
        $("#containner_pgt_result_details").hide();
        $("#containner_principal_vice_principal_result_details").hide();  
        $("#containner_headmaster_prt_result_details").hide();    
    }else if(designation == 6) {
        $("#containner_pgt_result_details").show();
        $("#containner_principal_vice_principal_result_details").hide();  
        $("#containner_headmaster_prt_result_details").hide();   
        $("#containner_tgt_result_details").hide(); 
    }else {
        $("#containner_principal_vice_principal_result_details").hide();  
        $("#containner_headmaster_prt_result_details").hide();    
        $("#containner_pgt_result_details").hide();
        $("#containner_tgt_result_details").hide();  
    }
    
});
</script>