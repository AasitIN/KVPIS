<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"> <!-- Resource style -->
<link href="<?php echo base_url(); ?>css/typehead.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>js/modernizr.js"></script> <!-- Modernizr -->
<div id="content-wrapper">
    <div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header register-header">
            <?php 
         
            if(empty($EmpCode)) 
                echo '<i class="fa fa-user-plus"></i>&nbsp;Add Employee'; 
            else 
                echo '<i class="fa fa-user"></i>&nbsp;Employee Code - '.$EmpCode;  ?>
        </div>

    <div class="card-body shape-shadow">

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

        <?php echo form_open("", array("id" => "formID", "class" => "register", "autocomplete" => "off")); ?>

        <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($EmpCode) ? $EmpCode : ''; ?>">
        <?php echo $this->load->view('elements/employeetab',(isset($EmpCode))?$EmpCode:''); ?>

        <h6><strong>Family Members - </strong></h6>
        <hr>
        
        <div class="add_more_button" id="family_add_more_button_div" >
            <a class="btn btn-primary" id="addmore" href="javascript:"> Add More</a>
        </div>
        <br>
        <div id="containner_family_more"></div>

        <div id="spouse_container" <?php echo ($is_married==1)?"style=display:block":"style=display:none";?>>
        <h6><strong>Spouse Details - </strong></h6>
        <hr>
        <div class="add_more_button" id="spouse_add_more_button_div" <?php echo ($is_married==1 && $religion==4)?"style=display:block":"style=display:none";?>>
            <a class="btn btn-primary" id="addmorespouse" href="javascript:"> Add More</a>
        </div>
        <br>
        <div id="containner_spouse_more"></div>
        </div>
    
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
</div>

<script id="family_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_family_more"  id="delete_wexp_family_more{{random_exr_id}}">
    <div class="delete_more_button" style="display:none;" id="family_more_1_{{random_exr_id}}">
    <a class="btn btn-primary" id="remove_wexp_family_more{{random_exr_id}}" class="remove_wexp_family_more{{random_exr_id}} href="javascript:"> Delete</a>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
        <label for="" class="col-sm-12 col-form-label">Relation:<span class="reqd">*</span></label>
        <div class="col-sm-12">
        <?php echo form_dropdown("relation[]", array("" => "Select") + relation(),'', 'id="relation_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
        </div>
        </div>
    </div>
    <div class="row" id="member-row-1{{random_exr_id}}" style="display:none" >
        <div class="form-group col-md-4">
        <label for="" class="col-sm-12 col-form-label">Title:<span class="reqd">*</span></label>
        <div class="col-sm-12">
        <?php echo form_dropdown("title[]", array("" => "Select") + title(),'', 'id="title_{{random_exr_id}}" class="form-control validate[required]" '); ?>
        <span class="error"><?php echo form_error('title'); ?></span>
        </div>
        </div>
        
        <div class="form-group col-md-4">
        <label for="" class="col-sm-12 col-form-label">Name:<span class="reqd">*</span></label>
        <div class="col-sm-12">
        <?php echo form_input("name[]", '{{family_detail.name}}', 'placeholder="Member Name" id="name_{{random_exr_id}}" class="txtOnly form-control validate[required]" '); ?>
        <span class="error"><?php echo form_error('name'); ?></span>
        </div>
        </div>
        <div class="form-group col-md-4" >
        <label for="" class="col-sm-12 col-form-label">DOB:<span class="reqd">*</span></label>
        <div class="col-sm-12">
        <?php echo form_input("dob[]",  '{{family_detail.dob}}', 'placeholder="dd-mm-yyyy" id="family_more_dob_datepicker{{random_exr_id}}"   class="datepicker-here form-control validate[required]" onchange="get_age({{random_exr_id}})"'); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('dob'); ?></span>
        </div>
        </div>

        
    </div>
    <div class="row" id="member-row-2{{random_exr_id}}" style="display:none" >
        <div class="form-group col-md-4"  >
        <label for="" class="col-sm-12 col-form-label">Age:<span class="reqd">*</span></label>
        <div class="col-sm-12">
        <?php echo form_input("age[]",   '{{family_detail.age}}', 'placeholder="Age" id="age_{{random_exr_id}}" class="txtOnly form-control validate[required]" readonly '); ?>
        <span class="error"><?php echo form_error('age'); ?></span>
        </div>
        </div>
        <div class="form-group col-md-4" >
        <label for="" class="col-sm-12 col-form-label">Dependent:<span class="reqd">*</span></label>
        <div class="col-sm-12">
        <?php echo form_dropdown("dependent[]", array("" => "Select") + single_parent(),'', 'id="dependent_{{random_exr_id}}" class="form-control validate[required]" '); ?>
        <span class="error"><?php echo form_error('dependent'); ?></span> 
        </div>
        </div>
    </div>
       

    </div>
</script>

<script id="spouse_more_template" type="x-tmpl-mustache">
   
    <div class="background_div delete_wexp_spouse_more"  id="delete_wexp_spouse_more{{random_exr_id}}">
    <div class="delete_more_button" style="display:none;" id="spouse_more_1_{{random_exr_id}}">
    <a class="btn btn-primary" id="remove_wexp_spouse_more{{random_exr_id}}" class="remove_wexp_spouse_more{{random_exr_id}} href="javascript:"> Delete</a>
    </div>
    <div class="row">
    <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($EmpCode) ? $EmpCode : ''; ?>">    
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Name of Spouse:<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_input("emp_spouse_name[]", '{{spouse_detail.spouse_name}}', 'placeholder="Name of Spouse " id="emp_spouse_name{{random_exr_id}}" class="txtOnly form-control validate[required]" '); ?>
    <span class="error"><?php echo form_error('emp_spouse_name'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Whether in Govt. Service:<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_dropdown("emp_spouse_govt_service[]", array("" => "Select") + single_parent(),'', 'class="form-control validate[required]"  id="govtservice_{{random_exr_id}}" onchange="showgovservicediv({{random_exr_id}})" '); ?>
    <span class="error"><?php echo form_error('emp_spouse_govt_service'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" style="display:none;" id="govtservicediv_{{random_exr_id}}" >
    <label for="" class="col-sm-12 col-form-label">Organization:<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <select class="form-control validate[required]" name="emp_spouse_organization_name[]" id="orgname_{{random_exr_id}}" onchange="kvsorotherdiv({{random_exr_id}})">
    <option value="">Select</option>
    <option value="KVS">KVS</option>
    <option value="Others">Others</option>
    </select>
    <span class="error"><?php echo form_error('emp_spouse_organization_name'); ?></span>
    </div>
    </div>
    </div>

    <div class="row" >
    <div class="form-group col-md-4" style="display:none;" id="kvsempcode_{{random_exr_id}}"  >
    <label for="" class="col-sm-12 col-form-label">Employee Code:<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_input("emp_spouse_emp_code[]", '{{spouse_detail.spouse_emp_code}}', 'placeholder="Employee Code of Spouse" id="spouse_emp_code{{random_exr_id}}" class="form-control validate[required]" '); ?>
    <span class="error"><?php echo form_error('emp_spouse_emp_code'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" style="display:none;" id="otherorgname_{{random_exr_id}}" >
    <label for="" class="col-sm-12 col-form-label">Name of Organization:<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_input("emp_spouse_other_org[]",'{{spouse_detail.other_org_name}}' , 'placeholder="Name of Organization" class="txtOnly form-control validate[required]" '); ?>
    <span class="error"><?php echo form_error('emp_spouse_other_org'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" style="display:none;" id="postheld_{{random_exr_id}}" >
    <label for="" class="col-sm-12 col-form-label">Post Held:<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_input("emp_spouse_post_held[]", '{{spouse_detail.other_org_post}}', ' placeholder="Name of Post" class="txtOnly form-control validate[required]" '); ?>
    <span class="error"><?php echo form_error('emp_spouse_post_held'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" style="display:none;" id="postingplace_{{random_exr_id}}" >
    <label for="" class="col-sm-12 col-form-label">Place of Posting:<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_input("emp_spouse_posting_place[]", '{{spouse_detail.other_org_posting_place}}', 'placeholder="Place of Posting" class="txtOnly form-control validate[required]" '); ?>
    <span class="error"><?php echo form_error('emp_spouse_posting_place'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" style="display:none;" id="presentpost_{{random_exr_id}}" >
    <label for="" class="col-sm-12 col-form-label">Designation:<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_input("assd[]", '', 'id="spouse_post_designation_{{random_exr_id}}" placeholder="Designation of Spouse" class="txtOnly form-control typeahead validate[required]" '); ?>
    <input type="hidden" name="spouse_post_designation[]" value='' id="spouse_post_id_{{random_exr_id}}">
    <span class="error"><?php echo form_error('spouse_post_designation'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" style="display:none;" id="subject_div_{{random_exr_id}}">
    <label for="" class="col-sm-12 col-form-label">  Subject   <span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_dropdown("subject_id[]", array("" => "Select") + subject_lists(), '', 'id="subject_id_{{random_exr_id}}" data-id="c" class="form-control validate[required]"  '); ?>
    <span class="error"><?php echo form_error('subject_id'); ?></span> 
    </div>
    </div>
    
    </div>
    
    <div class="row"> 
    <div class="form-group col-md-4" style="display:none;" id="designation_div_all_{{random_exr_id}}">
    <label for="" class="col-sm-12 col-form-label"> Place of Posting<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_dropdown("role_id[]", array("0" => "Select") + role_lists(), '', 'id="role_id_all_{{random_exr_id}}" data-id="c" class="form-control validate[required]" onchange="processRegionDiv({{random_exr_id}})" '); ?>
    <span class="error"><?php echo form_error('role_id'); ?></span> 
    </div>
    </div>

    
    <div class="form-group col-md-4" id="region_div_all_{{random_exr_id}}" style="display:none;">
    <label for="" class="col-sm-12 col-form-label" id="all_region_label_{{random_exr_id}}">Regions<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_dropdown("region_id[]", array("" => "Select")+ region_lists() , '', 'id="region_id_all_{{random_exr_id}}"  class="form-control validate[required]"  onchange="ProcessSchooldiv({{random_exr_id}})" '); ?>        
    
    <span class="error"><?php echo form_error('region_id'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" id="school_div_all_{{random_exr_id}}" style="display:none;">
    <label for="" class="col-sm-12 col-form-label">Schools<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_dropdown("school_id[]", array("0" => "Select")+ school_lists() , '', 'id="school_id_all_{{random_exr_id}}"  class="form-control validate[required]"  '); ?>        
    <!-- <select  class="form-control validate[required]" name="school_id[]" id="school_id_all_{{random_exr_id}}" >
    <option value="">Select</option>
    
    </select>  -->

    <span class="error"><?php echo form_error('school_id'); ?></span>
    </div>
    </div>
    </div>
    
    </div>
</script>


<script>
    var base_url = $('#url').val();
    var get_csrf_token_name = $('#get_csrf_token_name').val();
    var get_csrf_hash = $('#get_csrf_hash').val();

    function processRegionDiv(ids) {
        var role_id = $("#role_id_all_"+ids).val();
        $('#school_div_all_'+ids).css("display", "none");
        if (role_id != '') {
            $.ajax({
                url: base_url + 'admin/users/get_region',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + role_id,
                type: 'POST',
                success: function (response) {
                    $('#region_id_all_'+ids).html(response);
                    $('#region_div_all_'+ids).css("display", "block");
                   
                    if (role_id == '2') { //kvs hq
                        $("#all_region_label_"+ids).html("Units<span class='reqd'>*</span>");
                    }
                    else if (role_id == '4') {//ziet
                        $("#all_region_label_"+ids).html("ZIET<span class='reqd'>*</span>");
                    } else if (role_id == '3'||role_id == '5'){
                        $("#all_region_label_"+ids).html("Regions<span class='reqd'>*</span>");
                    }else{
                        $('#region_div_all_'+ids).css("display", "none");    
                    }
                }
            });
        }else{
            $('#region_div_all_'+ids).css("display", "none");
        }
    }

    function ProcessSchooldiv(ids) {
        var region_id = $("#region_id_all_"+ids).val();
        var role_id = $("#role_id_all_"+ids).val();
        if (region_id != '') {
            $.ajax({
                url: base_url + 'admin/users/get_school',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                type: 'POST',
                success: function (response) {
                    if(role_id=='5'){
                        $('#school_div_all_'+ids).css("display", "block");
                        $('#school_id_all_'+ids).html(response);
                    }else{
                        $('#school_div_all_'+ids).css("display", "none");
                    }
                }
            });
        }
    }
        

    var sample_data = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: '<?php echo base_url(); ?>autocomplete/fetch',
        remote: {
            url: '<?php echo base_url(); ?>autocomplete/fetch/%QUERY',
            wildcard: '%QUERY'
        }
    });
    
    /**  Family member section js start here  */
    var random_family_more_id = Date.now();
    $('#addmore').click(function () {
        random_family_more_id = Date.now();
        RenderFamilyMore(random_family_more_id);
    });
    var family_details =<?php echo json_encode(isset($FamyData) ? $FamyData: ''); ?>;
   
    if (family_details!='') {
        $.each(family_details, function (key, family_detail) {
            RenderFamilyMore(family_detail.id, family_detail);
            $("#relation_" + family_detail.id).val(family_detail.relation).trigger("change");
            $("#title_" + family_detail.id).val(family_detail.title).trigger("change");
            $("#name_" + family_detail.id).val(family_detail.name);
            $("#family_more_dob_datepicker" + family_detail.id).val(family_detail.dob);
            $("#age_" + family_detail.id).val(family_detail.age);
            $("#dependent_" + family_detail.id).val(family_detail.dependent);
           
            if(family_detail.relation!=''){
               $("#member-row-1"+family_detail.id).show();
               $("#member-row-2"+family_detail.id).show();
            }
            
        });
    } else {
        family_more = {};
        RenderFamilyMore(random_family_more_id, family_more);
    }
        
  
    function RenderFamilyMore(random_family_more_id, family_more) {
        var source = $("#family_more_template").html();
        var wexp_count = $(".delete_wexp_family_more").length;
        Mustache.parse(source);
        var rendered = Mustache.render(source, {
            random_exr_id: random_family_more_id,
            family_detail: family_more,
        });
        $("#containner_family_more").append(rendered);
        if (wexp_count != 0) {
            $("#family_more_1_" + random_family_more_id).css("display", "block");
        }
        delete_family_more(random_family_more_id);
        $("#family_more_dob_datepicker" + random_family_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
        });

    }
    function delete_family_more(random_exr_id) {

        $("#remove_wexp_family_more" + random_exr_id).click(function () {
            var wexp_count = $(".delete_wexp_family_more").length;
            var wexp_id = $(this).attr("wexpid");
            if (wexp_id) {
                var confirm = window.confirm('Are you sure want to delete?');
                if (confirm) {
                    $("#delete_wexp_family_more" + wexp_id).remove();
                    generate("success", "Details deleted successfully");
                    location_reload();
                    if (wexp_count == 1) {
                        equa = {};
                        RenderFamilyMore(random_exr_id, equa);
                    }
                }
            } else {
                if (wexp_count > 1) {
                    $("#delete_wexp_family_more" + random_exr_id).remove();
                }

            }

        });
    }
     /**  Family member section js  end here  */

     /** Spouse section js start here  */
    var random_spouse_more_id = Date.now();
    
    $('#addmorespouse').click(function () {
        random_spouse_more_id = Date.now();
        RenderSpouseMore(random_spouse_more_id);
    });
    var spouse_details =<?php echo json_encode(isset($SpouseData) ? $SpouseData: ''); ?>;
   
    var is_married = "<?php echo $is_married;?>";
    
    //Edit of spouse details 
    if (spouse_details!='') {
        $.each(spouse_details, function (key, spouse_detail) {
            console.log(spouse_detail);
            RenderSpouseMore(spouse_detail.id, spouse_detail);
            $("#govtservice_" + spouse_detail.id).val(spouse_detail.is_govt_service).trigger("change");
            $("#orgname_" + spouse_detail.id).val(spouse_detail.org_name).trigger("change");
            $("#spouse_post_designation_" + spouse_detail.id).val(spouse_detail.designation_name);
            $("#spouse_post_id_" + spouse_detail.id).val(spouse_detail.designation);
            
            if(spouse_detail.des_cat_id =='1'){
                $("#subject_div_" + spouse_detail.id).show();
                $("#subject_id_" + spouse_detail.id).val(spouse_detail.subject);
            }
            $("#role_id_all_" + spouse_detail.id).val(spouse_detail.posting_place);
                if (spouse_detail.posting_place!='') {
                    $("#region_div_all_"+ spouse_detail.id).css("display", "block");
                    if(spouse_detail.posting_place==2){
                        $('#all_region_label_'+spouse_detail.id).html("Units<span class='reqd'>*</span>");
                    }else if(spouse_detail.posting_place==4){
                        $('#all_region_label_'+spouse_detail.id).html("ZEIT<span class='reqd'>*</span>");
                    }else{
                        $('#all_region_label_'+spouse_detail.id).html("Region<span class='reqd'>*</span>");
                    }
                    $("#region_id_all_" + spouse_detail.id).val(spouse_detail.region);   
                    if (spouse_detail.posting_place!=0 ) { 
                        $("#school_div_all_"+ spouse_detail.id).css("display", "block");
                        $("#school_id_all_" + spouse_detail.id).val(spouse_detail.school);     
                    }
                }

        });
    } else {
        if(is_married==1){//if married
            spouse_more = {};
            RenderSpouseMore(random_spouse_more_id, spouse_more);
        }
    }

   
    function RenderSpouseMore(random_spouse_more_id, spouse_more) {
        var source = $("#spouse_more_template").html();
        var wexp_count = $(".delete_wexp_spouse_more").length;
        Mustache.parse(source);
        var rendered = Mustache.render(source, {
            random_exr_id: random_spouse_more_id,
            spouse_detail: spouse_more,
        });
        $("#containner_spouse_more").append(rendered);
        if (wexp_count != 0) {
            $("#spouse_more_1_" + random_spouse_more_id).css("display", "block");
        }
        $('#spouse_post_designation_' + random_spouse_more_id).typeahead(null, {
            name: 'sample_data',
            display: 'name',
            source: sample_data,
            limit: 10,
            templates: {
                suggestion: Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
            }
        });

        $('#spouse_post_designation_' + random_spouse_more_id).on('typeahead:selected', function (evt, item) {
            var spouse_post_designation = $('#spouse_post_designation_' + random_spouse_more_id).val();
            if (spouse_post_designation != '') {
                $.ajax({
                    url: base_url + 'autocomplete/get_designation',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + spouse_post_designation,
                    type: 'POST',
                    success: function (response) {
                        if (response != false) {
                            $.each(response, function (key, value) {
                                console.log(random_spouse_more_id);
                                $('#spouse_post_designation_' + random_spouse_more_id).val(value);
                                $('#spouse_post_id_' + random_spouse_more_id).val(key);
                                 if (key == '5' || key == '6' || key == '7' || key == '8') {
                                    $('#subject_div_' + random_spouse_more_id).css("display", "block");
                                }
                                else {
                                    $('#subject_div_' + random_spouse_more_id).css("display", "none");
                                }
                            });
                        }
                        else {
                            $('#spouse_post_designation_' + random_spouse_more_id).val('');
                            alert('Designation is not exist. Please select correct designation.');
                            $('#subject_div_' + random_spouse_more_id).css("display", "none");
                        }

                    }
                });
            }
        });

        $('#spouse_post_designation_' + random_spouse_more_id).blur(function () {
            var spouse_post_designation = $('#spouse_post_designation_' + random_spouse_more_id).val();
            if (spouse_post_designation != '') {
                $.ajax({
                    url: base_url + 'autocomplete/get_designation',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + spouse_post_designation,
                    type: 'POST',
                    success: function (response) {
                        if (response != false) {
                            $.each(response, function (key, value) {
                                $('#spouse_post_designation_' + random_spouse_more_id).val(value);
                                $('#spouse_post_id_' + random_spouse_more_id).val(key);
                                 if (key == '5' || key == '6' || key == '7' || key == '8') {
                                    $('#subject_div_' + random_spouse_more_id).css("display", "block");
                                }
                                else {
                                    $('#subject_div_' + random_spouse_more_id).css("display", "none");
                                }
                            });
                        }
                        else {
                            $('#spouse_post_designation_' + random_spouse_more_id).val('');
                            alert('Designation is not exist. Please select correct designation.');
                            $('#subject_div_' + random_spouse_more_id).css("display", "none");
                        }

                    }
                });
            }
        });
        delete_spouse_more(random_spouse_more_id);

    }
    function delete_spouse_more(random_exr_id) {

        $("#remove_wexp_spouse_more" + random_exr_id).click(function () {
            var wexp_count = $(".delete_wexp_spouse_more").length;
            var wexp_id = $(this).attr("wexpid");
            if (wexp_id) {
                var confirm = window.confirm('Are you sure want to delete?');
                if (confirm) {
                    $("#delete_wexp_spouse_more" + wexp_id).remove();
                    generate("success", "Details deleted successfully");
                    location_reload();
                    if (wexp_count == 1) {
                        equa = {};
                        RenderSpouseMore(random_exr_id, equa);
                    }
                }
            } else {
                if (wexp_count > 1) {
                    $("#delete_wexp_spouse_more" + random_exr_id).remove();
                }

            }

        });
    }
    /** Spouse section js end here  */

   /** get age on the basis of dob   */
    function get_age(random_exr_id,dob){
        var value = $("#family_more_dob_datepicker"+random_exr_id).val();
        var dob = new Date(value);
        var today = new Date();
        age = new Date(today - dob).getFullYear() - 1970;
        $('#age_'+random_exr_id).val(age);
   
    }
    

    function showgovservicediv(ids) {
        var text = $("#govtservice_" + ids).val();
        if (text == 1)
        {
            $('#govtservicediv_' + ids).show();
            $("#orgname_"+ ids).val('');
            $("#region_id_all_"+ ids).val('');
            $("#school_id_all_"+ ids).val('');
            $("#subject_id_"+ ids).val('');
        } else {
            $("#role_id_all_"+ ids).val('');
            $("#orgname_"+ ids).val('');
            $("#region_id_all_"+ ids).val('');
            $("#school_id_all_"+ ids).val('');
            $("#subject_id_"+ ids).val('');
            $('#govtservicediv_' + ids).hide();
            $('#kvsempcode_' + ids).hide();
            $('#otherorgname_' + ids).hide();
            $('#postheld_' + ids).hide();
            $('#postingplace_' + ids).hide();
            $('#presentpost_' + ids).hide();
            $('#designation_div_all_' + ids).css("display","none");
            $("#region_div_all_" + ids).css("display","none");
            $("#school_div_all_" + ids).css("display","none");
            $('#subject_div_' + ids).css("display", "none");
        }
    }


    function kvsorotherdiv(ids) {
        var text = $("#orgname_" + ids).val();
        if (text == 'KVS')
        {
            $('#kvsempcode_' + ids).show();
            $('#presentpost_' + ids).show();
            $('#designation_div_all_' + ids).show();
            $('#postheld_' + ids).hide();
            $('#postingplace_' + ids).hide();
            $('#otherorgname_' + ids).hide();
            $("#region_id_all_"+ ids).val('');
            $("#school_id_all_"+ ids).val('');
            $("#subject_id_"+ ids).val('');
        } else if (text == 'Others') {
            $('#kvsempcode_' + ids).hide();
            $('#presentpost_' + ids).hide();
            $('#otherorgname_' + ids).show();
            $('#postheld_' + ids).show();
            $('#postingplace_' + ids).show();
            $('#designation_div_all_' + ids).css("display","none");
            $("#region_div_all_" + ids).css("display","none");
            $("#school_div_all_" + ids).css("display","none");
            $('#subject_div_' + ids).css("display", "none");
            $("#region_id_all_"+ ids).val('');
            $("#school_id_all_"+ ids).val('');
            $("#subject_id_"+ ids).val('');

        } else {
            $('#kvsempcode_' + ids).hide();
            $('#otherorgname_' + ids).hide();
            $('#postheld_' + ids).hide();
            $('#postingplace_' + ids).hide();
            $('#presentpost_' + ids).hide();
            $('#designation_div_all_' + ids).css("display","none");
            $("#region_div_all_" + ids).css("display","none");
            $("#school_div_all_" + ids).css("display","none");
            $('#subject_div_' + ids).css("display", "none");
            $("#region_id_all_"+ ids).val('');
            $("#school_id_all_"+ ids).val('');
            $("#subject_id_"+ ids).val('');
        }
    }

    $(document).on('change', 'select', function (event) {
        event.preventDefault();
        var current_id = this.value;
        var id = this.id;
        var current_char = id.replace(/\d+/g, '');
        var current_num = parseInt(id.match(/\d+/), 10);
       
        if (current_char == 'relation_') {
            if (current_id != '') {
               
                if (current_id == 'Not Applicable') {
                    $("#member-row-1"+current_num).hide();
                    $("#member-row-2"+current_num).hide();
                } else {
                    $("#member-row-1"+current_num).show();
                    $("#member-row-2"+current_num).show(); 
                }
            }
        }
    });

</script>