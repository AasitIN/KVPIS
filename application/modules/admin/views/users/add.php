<style>
    @font-face {
        font-family: 'text-security-disc';
        src:    url('../../fonts/text-security-disc.eot');
        src:    url('../../fonts/text-security-disc.eot?#iefix') format('embedded-opentype'),
                url('../../fonts/text-security-disc.woff') format('woff'),
                url('../../fonts/text-security-disc.ttf') format('truetype'),
                url('../../images/text-security-disc.svg#text-security') format('svg');
    }
    input.password {
        font-family: 'text-security-disc';
    }
</style>
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header register-header">Add User</div>
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
        <!-- ================================= CREATE USER START =====================================-->
        <?php echo form_open("", array("id" => "form", "class" => "register", "autocomplete" => "off")); ?>
        <input type="hidden" id="user_id" name="user_id" value="<?php echo isset($users->id) ? $users->id : ''; ?>">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Organization Level:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("role_id", array("" => "Select Level") + role_lists(), isset($users->role_id) ? set_value('role_id', $users->role_id) : set_value('role_id'), 'class="form-control role" onchange="processRegionDiv();" id="role_id" data-id="c"'); ?>
                    <span class="error"><?php echo form_error('role_id'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" id="category">
                <label for="" class="col-sm-12 col-form-label">Role Category:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <select class="form-control" name="role_category" id="role_category">
                        <option value="">Select Role Category</option>
                    </select> 

                    <span class="error"><?php echo form_error('role_category'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" id="region_div" style="display:none;">
                <label for="" class="col-sm-12 col-form-label" id="region_label">Regions:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php //echo form_dropdown("region", array("" => "Select Region") + region_lists(), isset($users->region) ? set_value('region', $users->region) : set_value('region'), 'class="form-control region"  id="c_region" data-id="c"'); ?>
                    <select required class="form-control region" name="region_id" id="c_region" data-id="c">
                        <option value="">Select Region</option>
                    </select> 
                    <span class="error"><?php echo form_error('region'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" id="school_div" style="display:none;">
                <label for="" class="col-sm-12 col-form-label">Schools:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <select required class="form-control" onchange="getschoolcode();" name="school_id" id="c_school" data-id="c">
                        <option value="">Select School</option>
                    </select> 

                    <span class="error"><?php echo form_error('school'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" id="kvcode_div" style="display:none;">
                <label for="" class="col-sm-12 col-form-label">KV Code:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("kv_code", '', 'readonly id="kv_code" class=" validate[required] form-control" '); ?>

                    <span class="error"><?php echo form_error('school'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">User Name: <span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <input type="text" name="username" value="<?php echo isset($users->username) ? set_value('username', $users->username) : set_value('username'); ?>" class="form-control noSpace" maxlength="20" minlength="6" placeholder="User Name">
                    <span class="error"><?php echo form_error('username'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Email Id:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <input type="text" name="email_id" value="<?php echo isset($users->email_id) ? set_value('email_id', $users->email_id) : set_value('email_id'); ?>" class="form-control noSpace" maxlength="30" minlength="6" placeholder="Email Id">
                    <span class="error"><?php echo form_error('email_id'); ?></span>
                    <div class="passhint">Only Official Email-Id(ex@gov.in , ex@nic.in, ex@kvs.gov.in)</div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Password:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <input type="text" name="password" id="password" class="form-control password" value="" minlength="8" autocomplete="off" placeholder="Password">
                    <span class="error"><?php echo form_error('password'); ?></span>
                    <div class="passhint">Password should be of 8 characters and at least one special character, uppercase letter, lowercase letter and one number.</div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Confirm Password:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <input type="text" name="cpassword" id="cpassword" class="form-control password" value="" autocomplete="off"  placeholder="Confirm Password">
                    <span class="error"><?php echo form_error('cpassword'); ?></span>
                    <div class="passhint">Password should be of 8 characters and at least one special character, uppercase letter, lowercase letter and one number.</div>
                </div>
            </div>
        </div>
        <div class="modal-footer text-right rg-footer">
            <div class="col-md-12">
                <input type="reset" value="Cancel" class="btn btn-default">
                <?php  echo form_submit('', 'Submit', 'class="btn btn-primary"');?>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<script src="<?php echo base_url() ?>js/forms/add_user.js"></script>  
<script>
        var base_url = $('#url').val();
        var get_csrf_token_name = $('#get_csrf_token_name').val();
        var get_csrf_hash = $('#get_csrf_hash').val();

        function processRegionDiv(){
            var role_id = $("#role_id").val(); // Getting Org Level Id
            if(role_id=='2'){
                
                $.ajax({
                    url: base_url + 'admin/users/get_roles',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + role_id,
                    type: 'POST',
                    success: function (resp) {
                        
                        $("#region_label").text('');
                        $("#region_div").css("display", "none");
                        $("#school_div").css("display", "none");
                        $("#kvcode_div").css("display", "none");
                        $("#category").css("display", "block");
                        $('#role_category').html(resp);
                        $('#role_category').css("display", "block");
                    }
                });
                
            }else{
                
                $("#region_label").text('');
                if (role_id != '' && role_id == '3') {
                    $("#category").css("display", "none");
                    $('#role_category').css("display", "none");
                    $("#region_label").html('Regions<span class="reqd">*</span>');
                    $("#region_div").css("display", "block");
                    $("#school_div").css("display", "none");
                    $("#kvcode_div").css("display", "none");
                }
                else if (role_id != '' && role_id == '5') {
                    $("#category").css("display", "none");
                    $('#role_category').css("display", "none");
                    $("#region_label").html('Regions<span class="reqd">*</span>');
                    $("#region_div").css("display", "block");
                    $("#school_div").css("display", "block");
                    $("#kvcode_div").css("display", "none");
                }
                else if (role_id != '' && role_id == '4') {
                    $("#category").css("display", "none");
                    $('#role_category').css("display", "none");
                    $("#region_label").html('ZIET<span class="reqd">*</span>');
                    $("#region_div").css("display", "block");
                    $("#school_div").css("display", "none");
                    $("#kvcode_div").css("display", "none");
                }
                else {
                    $("#category").css("display", "block");
                    $("#region_label").text('');
                    $("#region_div").css("display", "none");
                    $("#school_div").css("display", "none");
                    $("#kvcode_div").css("display", "none");
                }
                
            }
        }
        $('.role').on('change', function () {
            var data_id = $(this).attr('data-id');
            var role_id = $(this).val();
            if (role_id != '') {
                $.ajax({
                    url: base_url + 'admin/users/get_region',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + role_id,
                    type: 'POST',
                    success: function (response) {
                        $('#' + data_id + '_region').html(response);
                    }
                });
            }
        });
        
        $('.region').on('change', function () {
            var data_id = $(this).attr('data-id');
            var region_id = $(this).val();
            if (region_id == '') {
                var div_option = '<option value="">Select School</option>';
                $('#' + data_id + '_school').html(div_option);
            }
            if(region_id != ''){
                $.ajax({
                    url: base_url + 'admin/users/get_school',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#' + data_id + '_school').html(response);
                    }
                });
            }else{
                $('#kv_code').val('');
                $("#kvcode_div").css("display", "none");  
            }
        });

        function getschoolcode(){
            var school_id = $('#c_school').val();
            if (school_id != '') {
                $.ajax({
                    url: base_url + 'admin/users/get_schoolcode',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&s_id=' + school_id,
                    type: 'POST',
                    success: function (response) {
                        var result = response.split('#');
                        $('#kv_code').val(result[0].trim());
                        $("#kvcode_div").css("display", "block");
                    }
                });
            }else {
                $('#kv_code').val('');
                $("#kvcode_div").css("display", "none");
            }

        }

</script>   
