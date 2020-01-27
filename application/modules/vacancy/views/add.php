<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"> <!-- Resource style -->
<link href="<?php echo base_url(); ?>css/typehead.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>js/modernizr.js"></script> <!-- Modernizr -->
<div class="container">
    <div class="card card-register mx-auto mt-5 mte8">
        <div class="card-header register-header">
            Add Vacancy
        </div>
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

        <input type="hidden" id="user_id" value="<?php echo isset($users->id) ? $users->id : ''; ?>">
        <div class="row"> 
            <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Vacancy For  <span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("role_id", array("" => "Select") + role_lists(), isset($users->role_id) ? set_value('role_id', $users->role_id) : set_value('role_id'), 'id="role_id_initial" data-id="c" onchange="processRegionInitialDiv();" class="form-control validate[required]"  '); ?>
                        <span class="error"><?php echo form_error('role_id'); ?></span> 
                    </div>
            </div>
            <div class="form-group col-md-4" id="region_div_initial" style="display:none;">
                <label for="" class="col-sm-12 col-form-label" id="initial_region_label">Regions<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php //echo form_dropdown("region", array("" => "Select Region") + region_lists(), isset($users->region) ? set_value('region', $users->region) : set_value('region'), 'class="form-control region"  id="c_region" data-id="c"');    ?>
                    <select  class="form-control validate[required] region_initial" name="region_id_initial" id="c_region_initial" data-id="c">
                        <option value="">Select</option>
                    </select> 
                    <span class="error"><?php echo form_error('region_id'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" id="school_div_initial" style="display:none;">
                <label for="" class="col-sm-12 col-form-label">Schools<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <select  class="form-control validate[required] school_initial" name="school_id_initial" id="c_school_initial" data-id="c">
                        <option value="">Select</option>
                    </select> 

                    <span class="error"><?php echo form_error('school_id'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" id="kvcode_div_initial" style="display:none;" >
                <label for="" class="col-sm-12 col-form-label">KV Code:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("emp_kvcodeinitial", '', 'readonly id="kvcode_initial" class=" validate[required] form-control" '); ?>
                    <span class="error"><?php echo form_error('emp_kvcodeinitial'); ?></span>
                </div>
            </div>
        </div>
       
        <div style="float:right">
            <a class="btn btn-primary" id="addmoreworkshop" href="javascript:"> + Add More</a>
        </div>
       
      

        <div id="workshop_container"></div>


        <div class="row"><div class="col-sm-12">
                <div  style="float:right;"> 
                    <input class="btn btn-primary" type="reset" value="Reset">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </div></div>
        <div class="modal-footer text-right rg-footer">
            <div class="col-md-12">
                <input class="btn">
                <input class="btn">
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>

<script id="workshop_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_workshop"  id="delete_wexp_workshop{{random_exr_id}}">

    <div class="row">
        <div style="display:none;width: 100%;text-align: right;margin-right: 18px;margin-top: 5px;" id="workshop_add_{{random_exr_id}}">
        <a class="btn btn-primary" style="color: #fff;!important" id="remove_wexp_workshop{{random_exr_id}}" class="remove_wexp_workshop{{random_exr_id}} href="javascript:"> Delete</a>
        </div>
        <div class="form-group col-md-4">
        <label for="" class="col-sm-12 col-form-label"> Post:</label>
        <div class="col-sm-12">
        <?php echo form_input("emp_phy_details_date", isset($users->emp_phy_details_date) ? set_value('emp_phy_details_date', $users->emp_phy_details_date) : set_value('emp_phy_details_date'), 'placeholder="Post" id="workshop_designation_{{random_exr_id}}"  class="form-control validate[required] typeahead" '); ?>
        <input type="hidden" value="" id="workshop_post_id_{{random_exr_id}}"><span class="error"><?php echo form_error('des_cat_id'); ?></span>
        <span class="error"><?php echo form_error('des_cat_id'); ?></span>
        </div>
        </div>

        <div class="form-group col-md-4" style="display:none;" id="subject_div_{{random_exr_id}}">
        <label for="" class="col-sm-12 col-form-label"> Subject    <span class="reqd"></span></label>
        <div class="col-sm-12">
        <?php echo form_dropdown("subject_id", array("" => "Select") + subject_lists(), isset($users->subject_id) ? set_value('subject_id', $users->subject_id) : set_value('subject_id'), 'id="subject_id_initial" data-id="c" class="form-control validate[required]"  '); ?>
        <span class="error"><?php echo form_error('subject_id'); ?></span> 
        </div>
        </div>

    </div>
    <div class="row">
        <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Sanctioned Post:<span class="reqd">*</span></label>
            <div class="col-sm-12">
                <?php echo form_input("emp_mother_name", isset($users->emp_mother_name) ? set_value('emp_mother_name', $users->emp_mother_name) : set_value('emp_mother_name'), 'placeholder="Sanctioned Post" class="validate[required] numericOnly form-control" id="sanctionedpost_{{random_exr_id}}" onchange="getclearresponse({{random_exr_id}})" '); ?>
                <span class="error"><?php echo form_error('emp_mother_name'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">In Position:<span class="reqd">*</span></label>
            <div class="col-sm-12">
                <?php echo form_input("emp_mother_name", isset($users->emp_mother_name) ? set_value('emp_mother_name', $users->emp_mother_name) : set_value('emp_mother_name'), 'placeholder="In Position" class="validate[required] numericOnly form-control" id="inposition_{{random_exr_id}}" onchange="getclearresponse({{random_exr_id}})" ' ); ?>
                <span class="error"><?php echo form_error('emp_mother_name'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Clear Vacancy:<span class="reqd">*</span></label>
            <div class="col-sm-12">
                <?php echo form_input("emp_mother_name", isset($users->emp_mother_name) ? set_value('emp_mother_name', $users->emp_mother_name) : set_value('emp_mother_name'), 'placeholder="Clear Vacancy" readonly class="validate[required] form-control" id="clearresponse_{{random_exr_id}}" '); ?>
                <span class="error"><?php echo form_error('emp_mother_name'); ?></span>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Long Leave:<span class="reqd">*</span></label>
            <div class="col-sm-12">
                <?php echo form_input("emp_mother_name", isset($users->emp_mother_name) ? set_value('emp_mother_name', $users->emp_mother_name) : set_value('emp_mother_name'), 'placeholder="Long Leave" class="validate[required] numericOnly form-control" '); ?>
                <span class="error"><?php echo form_error('emp_mother_name'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Suspension:<span class="reqd">*</span></label>
            <div class="col-sm-12">
                <?php echo form_input("emp_mother_name", isset($users->emp_mother_name) ? set_value('emp_mother_name', $users->emp_mother_name) : set_value('emp_mother_name'), 'placeholder="Suspension" class="validate[required] numericOnly form-control" '); ?>
                <span class="error"><?php echo form_error('emp_mother_name'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Court Cases:<span class="reqd">*</span></label>
            <div class="col-sm-12">
                <?php echo form_input("emp_mother_name", isset($users->emp_mother_name) ? set_value('emp_mother_name', $users->emp_mother_name) : set_value('emp_mother_name'), 'placeholder="Court Cases" class="validate[required] numericOnly form-control" '); ?>
                <span class="error"><?php echo form_error('emp_mother_name'); ?></span>
            </div>
        </div>
    </div>
    
    </div>
</script>   
<script type="text/javascript">
    var base_url = $('#url').val();
        var get_csrf_token_name = $('#get_csrf_token_name').val();
        var get_csrf_hash = $('#get_csrf_hash').val();                    
    $(document).ready(function () {
        
        var sample_data = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: '<?php echo base_url(); ?>autocomplete/fetch',
            remote: {
                url: '<?php echo base_url(); ?>autocomplete/fetch/%QUERY',
                wildcard: '%QUERY'
            }
        });
        
        var random_workshop_id = Date.now();
        $('#addmoreworkshop').click(function () {
            random_workshop_id = Date.now();
            RenderWorkshop(random_workshop_id);
        });
        workshop_more = {};
        RenderWorkshop(random_workshop_id, workshop_more);
        function RenderWorkshop(random_workshop_id, workshop_more) {
            var source = $("#workshop_template").html();
            var wexp_count = $(".delete_wexp_workshop").length;
            Mustache.parse(source);
            var rendered = Mustache.render(source, {
                random_exr_id: random_workshop_id,
                workshop_more: workshop_more,
            });
            $("#workshop_container").append(rendered);
            if (wexp_count != 0) {
                $("#workshop_add_" + random_workshop_id).css("display", "block");
            }
            delete_workshop(random_workshop_id);
            $('#workshop_designation_' + random_workshop_id).typeahead(null, {
                name: 'sample_data',
                display: 'name',
                source: sample_data,
                limit: 10,
                templates: {
                    suggestion: Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
                }
            });

            $('#workshop_designation_' + random_workshop_id).on('typeahead:selected', function (evt, item) {
                var workshop_designation = $('#workshop_designation_' + random_workshop_id).val();
                if (workshop_designation != '') {
                    $.ajax({
                        url: base_url + 'autocomplete/get_designation',
                        data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + workshop_designation,
                        type: 'POST',
                        success: function (response) {
                            if (response != false) {
                                $.each(response, function (key, value) {
                                    $('#workshop_designation_' + random_workshop_id).val(value);
                                    $('#training_post_id_' + random_workshop_id).val(key);
                                   if (key == '5' || key == '6' || key == '7' || key == '8') {
                                        $('#subject_div_' + random_workshop_id).css("display", "block");
                                    }
                                    else {
                                        $('#subject_div_' + random_workshop_id).css("display", "none");
                                    }
                                });
                            }
                            else {
                                $('#workshop_designation_' + random_workshop_id).val('');
                                alert('Designation does not exist. Please select correct designation.');
                                $('#subject_div_' + random_workshop_id).css("display", "none");
                            }

                        }
                    });
                }
            });
            $('#workshop_designation_' + random_workshop_id).blur(function () {
                var workshop_designation = $('#workshop_designation_' + random_workshop_id).val();
                if (workshop_designation != '') {
                    $.ajax({
                        url: base_url + 'autocomplete/get_designation',
                        data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + workshop_designation,
                        type: 'POST',
                        success: function (response) {
                            if (response != false) {
                                $.each(response, function (key, value) {
                                    $('#workshop_designation_' + random_workshop_id).val(value);
                                    $('#training_post_id_' + random_workshop_id).val(key);
                                    if (key == '5' || key == '6' || key == '7' || key == '8') {
                                        $('#subject_div_' + random_workshop_id).css("display", "block");
                                    }
                                    else {
                                        $('#subject_div_' + random_workshop_id).css("display", "none");
                                    }
                                });
                            }
                            else {
                                $('#workshop_designation_' + random_workshop_id).val('');
                                alert('Designation does not exist. Please select correct designation.');
                                $('#subject_div_' + random_workshop_id).css("display", "none");
                            }

                        }
                    });
                }
            });
         
        }

        function delete_workshop(random_exr_id) {

            $("#remove_wexp_workshop" + random_exr_id).click(function () {
                var wexp_count = $(".delete_wexp_workshop").length;
                var wexp_id = $(this).attr("wexpid");
                if (wexp_id) {
                    var confirm = window.confirm('Are you sure want to delete?');
                    if (confirm) {
                        $("#delete_wexp_workshop" + wexp_id).remove();
                        generate("success", "Details deleted successfully");
                        location_reload();
                        if (wexp_count == 1) {
                            equa = {};
                            RenderWorkshop(random_exr_id, equa);
                        }
                    }
                } else {
                    if (wexp_count > 1) {
                        $("#delete_wexp_workshop" + random_exr_id).remove();
                    }

                }

            });
        }


    });
    
    function getclearresponse(ids)
    {
        var sanpost = $('#sanctionedpost_'+ids).val();
        var inpost = $('#inposition_'+ids).val();
        var clearresponse=sanpost - inpost;
        $('#clearresponse_'+ids).val(clearresponse);
    }

    function processRegionInitialDiv() {
        var role_id = $("#role_id_initial").val();
        if (role_id != '' && role_id == '2') {
            $("#region_div_initial").css("display", "block");
            $("#school_div_initial").css("display", "none");
            $("#kvcode_div_initial").css("display", "none");
            $("#shift_div_initial").css("display", "none");
        }
        else if (role_id != '' && role_id == '3') {
            $("#region_div_initial").css("display", "block");
            $("#school_div_initial").css("display", "none");
            $("#kvcode_div_initial").css("display", "none");
            $("#shift_div_initial").css("display", "none");
        }
        else if (role_id != '' && role_id == '5') {
            $("#region_div_initial").css("display", "block");
            $("#school_div_initial").css("display", "block");
            $("#kvcode_div_initial").css("display", "none");
            $("#shift_div_initial").css("display", "none");
        }
        else if (role_id != '' && role_id == '4') {
            $("#region_div_initial").css("display", "block");
            $("#school_div_initial").css("display", "none");
            $("#kvcode_div_initial").css("display", "none");
            $("#shift_div_initial").css("display", "none");
        }
        else {
            $("#region_div_initial").css("display", "none");
            $("#school_div_initial").css("display", "none");
            $("#kvcode_div_initial").css("display", "none");
            $("#shift_div_initial").css("display", "none");
        }
    }
    
    $('#role_id_initial').on('change', function () {
        var data_id_initial = $(this).attr('data-id');
        var role_id_initial = $(this).val();
        if (role_id_initial == '2') {
            $("#initial_region_label").text("");
        }
        if (role_id_initial != '') {
            $.ajax({
                url: base_url + 'admin/users/get_region',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + role_id_initial,
                type: 'POST',
                success: function (response) {
                    $('#' + data_id_initial + '_region_initial').html(response);
                    if (role_id_initial == '2') {
                        $("#initial_region_label").text("Units");
                    }
                    else if (role_id_initial == '4') {
                        $("#initial_region_label").text("ZIET");
                    } else {
                        $("#initial_region_label").text("Regions");
                    }
                }
            });
        }

    });
    
    $('.region_initial').on('change', function () {
        var data_id_initial = $(this).attr('data-id');
        var region_id_initial = $(this).val();
        if (region_id_initial == '') {
            var div_option = '<option value="">Select</option>';
            $('#' + data_id_initial + '_school_initial').html(div_option);
        }
        if (region_id_initial != '') {
            $.ajax({
                url: base_url + 'admin/users/get_school',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id_initial,
                type: 'POST',
                success: function (response) {
                    $('#' + data_id_initial + '_school_initial').html(response);
                }
            });
        }

    });
    
    $('.school_initial').on('change', function () {
        var data_id_present = $(this).attr('data-id');
        var school_id_initial = $(this).val();
        if (school_id_initial != '') {
            $.ajax({
                url: base_url + 'admin/users/get_schoolcode',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&s_id=' + school_id_initial,
                type: 'POST',
                success: function (response) {
                    var result = response.trim();
                    $('#kvcode_initial').val(result[0].trim());
                    $("#shift_div_initial").css("display", "block");
                    $("#kvcode_div_initial").css("display", "block");
                }
            });
        }

    });

</script>

