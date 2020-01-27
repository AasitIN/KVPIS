<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"> <!-- Resource style -->
<link href="<?php echo base_url(); ?>css/typehead.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>js/modernizr.js"></script>      <!-- Modernizr -->
<div id="content-wrapper">
    <div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header register-header">
            <?php 
            //print_r($PerData);
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
        <h6><strong>Awards-</strong> 
            </h6>
        <hr>
        <?php //var_dump($AwrdData[0]->is_award_received);?>
        
        <div class="row">
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Whether Received any Award :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                <?php echo form_dropdown("is_award", array("" => "Select") + single_parent(), isset($AwrdData[0]->is_award_received) ? set_value('is_award', $AwrdData[0]->is_award_received) : set_value('is_award'), ' id="award" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('is_award'); ?></span>
        
                </div>
            </div>
        </div>
        <div class="add_more_button" id="addmore" <?php echo ($AwrdData[0]->is_award_received== 1) ?"style=display:block;":"style=display:none;"?>>
                <a class="btn btn-primary"  href="javascript:"> + Add More</a>
            </div>
        <br>
        <div id="containner_award_more"  <?php echo ($AwrdData[0]->is_award_received== 1 )?"style=display:block;":"style=display:none;"?>></div>
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
<script id="award_more_template" type="x-tmpl-mustache">

<div class="background_div delete_wexp_award_more"  id="delete_wexp_award_more{{random_exr_id}}">
    <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($EmpCode) ? $EmpCode : ''; ?>">        
    <div class="row">
    <div class="delete_more_button"  style="display:none;" id="award_more_1_{{random_exr_id}}">
    <a class="btn btn-primary" style="color: #fff;!important" id="remove_wexp_award_more{{random_exr_id}}" class="remove_wexp_award_more{{random_exr_id}} href="javascript:""> Delete</a>
    </div>
    <div class="form-group col-md-6" >
    <label for="" class="col-sm-12 col-form-label">Type Of Award :<span class="reqd">*</span></label>
    <div class="col-sm-12">
   
    <?php echo form_dropdown("award[]", array("" => "Select the type of award") + awards(), isset($row->award) ? set_value('award', $row->award) : set_value('award'), 'id="award_type_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
    <span class="error"><?php echo form_error('award'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-6" style="display:none" id="otheraward_{{random_exr_id}}">
    <label for="" class="col-sm-12 col-form-label">Enter Award :<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_input("emp_otheraward[]", '{{award_detail.other_award_name}}', 'placeholder="Award Name"   class="txtOnly validate[required] form-control" '); ?>
    <span class="error"><?php echo form_error('emp_otheraward'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-6"  >
    <label for="" class="col-sm-12 col-form-label">Award Year :<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <?php echo form_dropdown("year_of_acheivement[]", array("" => "Select Year") + awards_years(), isset($row->year_of_acheivement) ? set_value('year_of_acheivement', $row->year_of_acheivement) : set_value('year_of_acheivement'), 'id="year_of_acheivement_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
    <span class="error"><?php echo form_error('year_of_acheivement'); ?></span></span>
    </div>
    </div>
    <div class="form-group col-md-6" >
    <label for="" class="col-sm-12 col-form-label">Brief of Award :<span class="reqd">*</span></label>
    <div class="col-sm-12">
    <textarea name="award_brief[]" placeholder="Brief of Award" class="form-control validate[required]">{{award_detail.award_brief}}</textarea>
    <span class="error"><?php echo form_error('award_brief'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-6">
        <label for="" class="col-sm-12 col-form-label">  Designation   <span class="reqd"></span></label>
        <div class="col-sm-12">
            <?php echo form_input("all_designation[]", '', 'placeholder="Designation" id="post_all_{{random_exr_id}}"  class="form-control typeahead" '); ?>
            <span class="error"><?php echo form_error('all_designation'); ?></span>
            <input type="hidden" value="" name="alldesignationid[]" id="post_all_id_{{random_exr_id}}">
        </div> 
    </div>
    
    </div>
    </div>            


</script>
<script type="text/javascript">
    var base_url = $('#url').val();
    var get_csrf_token_name = $('#get_csrf_token_name').val();
    var get_csrf_hash = $('#get_csrf_hash').val();
    var sample_data = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: '<?php echo base_url(); ?>autocomplete/fetch',
        remote: {
            url: '<?php echo base_url(); ?>autocomplete/fetch/%QUERY',
            wildcard: '%QUERY'
        }
    });                        
    $(document).ready(function () {
        var random_award_more_id = Date.now();
        $('#addmore').click(function () {
            random_award_more_id = Date.now();
            RenderAwardsMore(random_award_more_id);
        });
        
        var award_details =<?php echo json_encode(isset($AwrdData) ? $AwrdData: ''); ?>;
        if (award_details!='') {
            $.each(award_details, function (key, award_detail) {
                RenderAwardsMore(award_detail.id, award_detail);
                $("#year_of_acheivement_" + award_detail.id).val(award_detail.year_of_acheivement).trigger("change");
                $("#award_type_" + award_detail.id).val(award_detail.award).trigger("change");
                $("#post_all_" + award_detail.id).val(award_detail.designationname);
            });
        } else {
            award_more = {};
            RenderAwardsMore(random_award_more_id, award_more);
        }
        
     
        function RenderAwardsMore(random_award_more_id, award_more) {
            var source = $("#award_more_template").html();
            var wexp_count = $(".delete_wexp_award_more").length;
            Mustache.parse(source);
            var rendered = Mustache.render(source, {
                random_exr_id: random_award_more_id,
                award_detail: award_more,
                
            });
            $("#containner_award_more").append(rendered);

            if (wexp_count != 0) {
                $("#award_more_1_" + random_award_more_id).css("display", "block");
            }
            
            $('#post_all_' + random_award_more_id).typeahead(null, {
                name: 'sample_data',
                display: 'name',
                source: sample_data,
                limit: 10,
                templates: {
                    suggestion: Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
                }
            });
            $('#post_all_' + random_award_more_id).on('typeahead:selected', function (evt, item) {
                var post_all_designation = $('#post_all_' + random_award_more_id).val();
                if (post_all_designation != '') {
                    $.ajax({
                        url: base_url + 'autocomplete/get_designation',
                        data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + post_all_designation,
                        type: 'POST',
                        success: function (response) {
                            if (response != false) {
                                $.each(response, function (key, value) {
                                    $('#post_all_' + random_award_more_id).val(value);
                                    $('#post_all_id_' + random_award_more_id).val(key);
                                });
                            }
                            else {
                                $('#post_all_' + random_award_more_id).val('');
                                alert('Designation is not exist. Please select correct designation.');
                            }

                        }
                    });
                }
            });
            $('#post_all_' + random_award_more_id).blur(function () {
                var post_all_designation = $('#post_all_' + random_award_more_id).val();
                if (post_all_designation != '') {
                    $.ajax({
                        url: base_url + 'autocomplete/get_designation',
                        data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + post_all_designation,
                        type: 'POST',
                        success: function (response) {
                            if (response != false) {
                                $.each(response, function (key, value) {
                                    $('#post_all_' + random_award_more_id).val(value);
                                    $('#post_all_id_' + random_award_more_id).val(key);
                                    if (key == '5' || key == '6' || key == '7' || key == '8') {
                                        $('#subject_div_' + random_award_more_id).css("display", "block");
                                    }
                                    else {
                                        $('#subject_div_' + random_award_more_id).css("display", "none");
                                    }
                                });
                            }
                            else {
                                $('#post_all_' + random_award_more_id).val('');
                                alert('Designation is not exist. Please select correct designation.');
                                $('#subject_div_' + random_award_more_id).css("display", "none");
                            }

                        }
                    });
                }
            });
            delete_award_more(random_award_more_id);
            
        }
        function delete_award_more(random_exr_id) {

            $("#remove_wexp_award_more" + random_exr_id).click(function () {
                var wexp_count = $(".delete_wexp_award_more").length;
                var wexp_id = $(this).attr("wexpid");
                if (wexp_id) {
                    var confirm = window.confirm('Are you sure want to delete?');
                    if (confirm) {
                        $("#delete_wexp_award_more" + wexp_id).remove();
                        generate("success", "Details deleted successfully");
                        location_reload();
                        if (wexp_count == 1) {
                            equa = {};
                            RenderAwardsMore(random_exr_id, equa);
                        }
                    }
                } else {
                    if (wexp_count > 1) {
                        $("#delete_wexp_award_more" + random_exr_id).remove();
                    }

                }

            });

        }



    });
    $(document).on('change', 'select', function (event) {
        event.preventDefault();
        var current_id = this.value;
        var current_name = this.id;
        var current_char = current_name.replace(/\d+/g, '');
        var current_num = parseInt(current_name.match(/\d+/), 10);
        if (current_char == 'award_type_') {
            if (current_id != '') {
                if (current_id == 'Other') {
                    $('#otheraward_' + current_num).css("display", "block");
                } else {
                    $('#otheraward_' + current_num).css("display", "none");
                }
            }
        }
    });


</script>

<script type="text/javascript">
    $(document).ready(function(){
        $( "#award" ).change(function() {
            var text = $("#award").val();
            if(text=='1')
            {
              $('#containner_award_more').show(); 
              $('#addmore').show();
            }else{
              $('#containner_award_more').hide();
              $('#addmore').hide();
            }
        });
    });
</script>
