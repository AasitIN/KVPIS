<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"> <!-- Resource style -->
<link href="<?php echo base_url(); ?>css/typehead.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>js/modernizr.js"></script> <!-- Modernizr -->
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
        <h6><strong>Training & Workshop - </strong></h6>
        <hr>
           
<!--        <h6><strong  class="font_size_dynamic">In-Service Course</strong></h6>-->
        <div class="row">
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Attented Any Course Training :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("is_attended_training", array("" => "Select") + single_parent(), isset($TranData[0]->is_attended_training) ? set_value('is_attended_training', $TranData[0]->is_attended_training) : set_value('is_attended_training'), ' id="servicetraining" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('is_attended_training'); ?></span>
                </div>
            </div>
        </div>
        <div class="add_more_button" id="addmore" <?php echo ($TranData[0]->is_attended_training== 1) ?"style=display:block;":"style=display:none;"?>>
                <a class="btn btn-primary" id="addmore" href="javascript:"> + Add More</a>
        </div>
        <br>
        <div id="containner_training_more" <?php echo ($TranData[0]->is_attended_training== 1) ?"style=display:block;":"style=display:none;"?>></div>
        
        <h6><strong  class="font_size_dynamic">Other Training/Workshops (Last 5 Years)</strong>
            
            <div style="float:right">
                <a class="btn btn-primary" id="addmoreworkshop" href="javascript:"> + Add More</a>
            </div>
        </h6>
        <hr>

        <div id="workshop_container"></div>


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


<script id="training_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_training_more"  id="delete_wexp_training_more{{random_exr_id}}">

    <div class="row">
    <div class="delete_more_button"  style="display:none;" id="training_more_1_{{random_exr_id}}">
    <a class="btn btn-primary" style="color: #fff;!important" id="remove_wexp_training_more{{random_exr_id}}" class="remove_wexp_training_more{{random_exr_id}} href="javascript:""> Delete</a>
    </div>
    <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Select Course :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_dropdown("course[]", array("" => "Select Type") + course_type(), isset($users->course) ? set_value('course', $users->course) : set_value('course'), 'id="course_type_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
        <span class="error"><?php echo form_error('course'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Post Held :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("designame",'', 'placeholder="Post Held" id="training_designation_{{random_exr_id}}"  class="form-control validate[required] typeahead" '); ?>
        <input type="hidden" name="designation[]" value="" id="training_post_id_{{random_exr_id}}">
        <span class="error"><?php echo form_error('designame'); ?></span>
    </div>
    </div>

    <div class="form-group col-md-4" style="display:none;" id="subject_div_training_{{random_exr_id}}">
    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_dropdown("subject[]", array("" => "Select") + subject_lists(), isset($users->subject) ? set_value('subject', $users->subject) : set_value('subject'), 'id="training_subject_{{random_exr_id}}" class="form-control validate[required] "  '); ?>
        <span class="error"><?php echo form_error('subject'); ?></span> 
    </div>
    </div>
    </div> 
    
    <div class="row ">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Spell :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_dropdown("spell[]", array("" => "Select Spell") + spell(), isset($users->spell) ? set_value('spell', $users->spell) : set_value('spell'), 'id="spell_{{random_exr_id}}"  onchange="getdatediv({{random_exr_id}})" class="form-control validate[required]"  '); ?>
        <span class="error"><?php echo form_error('spell'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Duration(In Days) :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("duration[]", '{{training.duration}}', ' id="duration_inservice_{{random_exr_id}}" readonly placeholder="Duration(In Days)" class="form-control validate[required]" '); ?>
        <span class="error"><?php echo form_error('duration'); ?></span>
    </div>
    </div>
    </div>
    <div class="row" style="display:none;" id="single_{{random_exr_id}}">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date From :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_singlefrom[]", '{{training.t_from1}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_single_fromdate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_singlefrom'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date To :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_singleto[]",'{{training.t_to1}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required]" id="training_single_todate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_singleto'); ?></span>
    </div>
    </div>
    </div>
    
    <div class="doublediv" id="double_{{random_exr_id}}" style="display:none;">
    <div class="row">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date From :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_doublefrom1[]", '{{training.t_from2}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_doubleone_fromdate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_doublefrom1'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date To :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_doubleto1[]", '{{training.t_to1}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_doubleone_todate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_doubleto1'); ?></span>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date From :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_doublefrom2[]", '{{training.t_from2}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_doubletwo_fromdate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_doublefrom2'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date To :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_doubleto2[]", '{{training.t_to2}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_doubletwo_todate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_doubleto2'); ?></span>
    </div>
    </div>
    </div>
    </div>
    
    <div class="12333div" id="12_3_3_3_{{random_exr_id}}" style="display:none;">
    <div class="row">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date From :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_from1[]", '{{training.t_from1}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required]" id="training_one_fromdate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_from1'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date To :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_to1[]", '{{training.t_to1}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required]" id="training_one_todate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_to1'); ?></span>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date From :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_from2[]", '{{training.t_from2}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_two_fromdate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_from2'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date To :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_to2[]", '{{training.t_to2}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_two_todate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_to2'); ?></span>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date From :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_from3[]", '{{training.t_from3}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_three_fromdate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_from3'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date To :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_to3[]", '{{training.t_to3}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_three_todate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_to3'); ?></span>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date From :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_from4[]", '{{training.t_from4}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_four_fromdate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_from4'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date To :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("t_to4[]", '{{training.t_to4}}', 'placeholder="dd-mm-yyyy"  class="form-control validate[required] " id="training_four_todate_{{random_exr_id}}" '); ?>
        <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
        </div>
        <span class="error"><?php echo form_error('t_to4'); ?></span>
    </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Role :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_dropdown("role[]", array("" => "Select") + training_role(), isset($users->role) ? set_value('role', $users->role) : set_value('role'), 'id="service_role_{{random_exr_id}}" class="form-control validate[required]" onchange="opengrade({{random_exr_id}})"  '); ?>
        <span class="error"><?php echo form_error('role'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" style="display:none" id="servicegrade_{{random_exr_id}}">
    <label for="" class="col-sm-12 col-form-label">Grading/Rating :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("grading[]", '{{training.grading}}', 'placeholder="Grading Or Rating" class="form-control validate[required]" '); ?>
        <span class="error"><?php echo form_error('grading'); ?></span>
    </div>
    </div>
    
    <div class="form-group col-md-4" style="display:none" id="courseconducted{{random_exr_id}}">
    <label for="" class="col-sm-12 col-form-label">Course Conducted For :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_dropdown("conductedfor[]", array("" => "Select") + conductedfor(), isset($users->conductedfor) ? set_value('conductedfor', $users->conductedfor) : set_value('conductedfor'), 'class="form-control validate[required]" '); ?>
        <span class="error"><?php echo form_error('role_id'); ?></span>
    </div>
    </div>
          
    </div>
    <div class="row"> <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label"> Venue <span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_dropdown("venuetype[]", array("" => "Select") + role_lists(), isset($users->venuetype) ? set_value('venuetype', $users->venuetype) : set_value('venuetype'), 'id="venue_{{random_exr_id}}" data-id="c"  class="form-control validate[required]" onchange="processRegionDiv({{random_exr_id}})"  '); ?>
        <span class="error"><?php echo form_error('venuetype'); ?></span> 
    </div></div>
    <div class="form-group col-md-4" id="region_div_all_{{random_exr_id}}" style="display:none;">
    <label for="" class="col-sm-12 col-form-label" id="all_region_label_{{random_exr_id}}">Regions<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_dropdown("venueregion[]", array("" => "Select") + region_lists(), isset($users->venueregion) ? set_value('venueregion', $users->venueregion) : set_value('venueregion'), 'class="form-control region"  id="region_id_all_{{random_exr_id}}" onchange="ProcessSchooldiv({{random_exr_id}})" '); ?>
        <span class="error"><?php echo form_error('region_id'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" id="school_div_all_{{random_exr_id}}" style="display:none;">
    <label for="" class="col-sm-12 col-form-label">Schools<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_dropdown("venueschool[]", array("" => "Select") + school_lists(), isset($users->venueschool) ? set_value('venueschool', $users->venueschool) : set_value('venueschool'), 'class="form-control region"  id="school_id_all_{{random_exr_id}}" '); ?>
        <span class="error"><?php echo form_error('school_id'); ?></span>
    </div>
    </div>
    </div>
    </div>
</script>
<script id="workshop_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_workshop"  id="delete_wexp_workshop{{random_exr_id}}">
    <div class="row">
    <div style="display:none;width: 100%;text-align: right;margin-right: 18px;margin-top: 5px;" id="workshop_add_{{random_exr_id}}">
    <a class="btn btn-primary" style="color: #fff;!important" id="remove_wexp_workshop{{random_exr_id}}" class="remove_wexp_workshop{{random_exr_id}} href="javascript:"> Delete</a>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Organizing Agency:</label>
    <div class="col-sm-12">
        <?php echo form_dropdown("organizing_agency[]", array("" => "Select") + training_agency(), isset($users->organizing_agency) ? set_value('organizing_agency', $users->organizing_agency) : set_value('organizing_agency'), 'class="form-control"  id="agency{{random_exr_id}}" onchange="openagency({{random_exr_id}})" '); ?>
        <span class="error"><?php echo form_error('organizing_agency'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" style="display:none;" id="govt{{random_exr_id}}" >
    <label for="" class="col-sm-12 col-form-label">Organization:</label>
    <div class="col-sm-12">
        <?php echo form_dropdown("govt_agency[]", array("" => "Select") + govt_org(), isset($users->govt_agency) ? set_value('govt_agency', $users->govt_agency) : set_value('govt_agency'), 'class="form-control" id="govt_agency{{random_exr_id}}" onchange="govtothername({{random_exr_id}})" '); ?>
        <span class="error"><?php echo form_error('govt_agency'); ?></span>
    </div>
    </div>
    
    <div class="form-group col-md-4" style="display:none;" id="othergovtname{{random_exr_id}}" >
    <label for="" class="col-sm-12 col-form-label">Name of Govt Organization:</label>
    <div class="col-sm-12">
        <?php echo form_input("othergovname", '{{workshop.othergovname}}', 'placeholder="Name of Organization" class="form-control " '); ?>
        <span class="error"><?php echo form_error('othergovname'); ?></span>
    </div>
    </div>
    
    <div class="form-group col-md-4" style="display:none;" id="nongovt{{random_exr_id}}" >
    <label for="" class="col-sm-12 col-form-label">Name of Organization:</label>
    <div class="col-sm-12">
        <?php echo form_input("non_gov_agency_name[]", '{{workshop.non_gov_agency_name}}', 'placeholder="Name of Organization" class="form-control " '); ?>
        <span class="error"><?php echo form_error('non_gov_agency_name'); ?></span>
    </div>
    </div>

    <div class="form-group col-md-4" style="display:none;" id="address{{random_exr_id}}" >
    <label for="" class="col-sm-12 col-form-label">Address Of Organization:</label>
    <div class="col-sm-12">
        <?php echo form_input("org_address[]", '{{workshop.org_address}}', 'placeholder="Address of Organization" class="form-control " '); ?>
        <span class="error"><?php echo form_error('org_address'); ?></span>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Training Venue:</label>
    <div class="col-sm-12">
        <?php echo form_input("trainingvenue[]", '{{workshop.trainingvenue}}', 'placeholder="Training Venue" class="form-control " '); ?>
        <span class="error"><?php echo form_error('trainingvenue'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date From:</label>
    <div class="col-sm-12">
        <?php echo form_input("other_t_from[]", '{{workshop.t_from}}', 'placeholder="dd-mm-yyyy" id="workshop_from_datepicker{{random_exr_id}}" class="datepicker-here form-control" '); ?>
        <span class="error"><?php echo form_error('other_t_from'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Date To:</label>
    <div class="col-sm-12">
        <?php echo form_input("other_t_to[]", '{{workshop.t_to}}', 'placeholder="dd-mm-yyyy" id="workshop_to_datepicker{{random_exr_id}}"  class="datepicker-here form-control " '); ?>
        <span class="error"><?php echo form_error('other_t_to'); ?></span>
    </div>
    </div>
    </div>

    <div class="row">

    <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Duration(In Days):</label>
    <div class="col-sm-12">
        <?php echo form_input("otherduration[]", '{{workshop.duration}}', 'id="workshop_duration_{{random_exr_id}}" readonly placeholder="Duration(In Days)" class="form-control" '); ?>
        <span class="error"><?php echo form_error('otherduration'); ?></span>
    </div>
    </div>
    <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Topic/Subject:</label>
    <div class="col-sm-12">
        <?php echo form_input("trainingtopic[]", '{{workshop.trainingtopic}}', 'placeholder="Training Topic or Subject" class="form-control" '); ?>
        <span class="error"><?php echo form_error('trainingtopic'); ?></span>
    </div>
    </div>
    <!--<div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Post Held at time of Training:</label>
    <div class="col-sm-12">
    <?php //echo form_input("other_post_held", isset($users->other_post_held) ? set_value('other_post_held', $users->other_post_held) : set_value('other_post_held'), 'placeholder="Post Held at Time of Training" class="form-control" '); ?>
    <span class="error"><?php echo form_error('other_post_held'); ?></span>
    </div>
    </div>-->
    </div>
    <div class="row">
    <div class="form-group col-md-4">
    <label for="" class="col-sm-12 col-form-label">Post Held at the time of Training:</label>
    <div class="col-sm-12">
        <?php echo form_input("otherdesignation[]", isset($users->emp_phy_details_date) ? set_value('emp_phy_details_date', $users->emp_phy_details_date) : set_value('emp_phy_details_date'), 'placeholder="Post Held at the time of Training" id="workshop_designation_{{random_exr_id}}"  class="form-control typeahead" '); ?>
        <input type="hidden" name="otherdesignationid[]" value="" id="workshop_post_id_{{random_exr_id}}"><span class="error"><?php echo form_error('des_cat_id'); ?></span>
        <span class="error"><?php echo form_error('otherdesignation'); ?></span>
    </div>
    </div>

    <div class="form-group col-md-4" style="display:none;" id="subject_div_{{random_exr_id}}">
    <label for="" class="col-sm-12 col-form-label"> Subject    <span class="reqd"></span></label>
    <div class="col-sm-12">
        <?php echo form_dropdown("othersubject[]", array("" => "Select") + subject_lists(), isset($users->othersubject) ? set_value('othersubject', $users->othersubject) : set_value('subject_id'), 'id="subject_id_{{random_exr_id}}" data-id="c" class="form-control "  '); ?>
        <span class="error"><?php echo form_error('othersubject'); ?></span> 
    </div>
    </div>

    </div>
    <div class="row">
    <div class="form-group col-md-4" >
    <label for="" class="col-sm-12 col-form-label">Role:</label>
    <div class="col-sm-12">
        <?php echo form_dropdown("otherrole[]", array("" => "Select") + training_role(), isset($users->otherrole) ? set_value('otherrole', $users->otherrole) : set_value('otherrole'), 'id="workshop_role_{{random_exr_id}}" class="form-control" onchange="openworkshopgrade({{random_exr_id}})" '); ?>
        <span class="error"><?php echo form_error('otherrole'); ?></span>
    </div>
    </div>
    
    <div class="form-group col-md-4" style="display:none" id="workshopgrade_{{random_exr_id}}">
    <label for="" class="col-sm-12 col-form-label">Grading/Rating :<span class="reqd">*</span></label>
    <div class="col-sm-12">
        <?php echo form_input("othergrading[]", '{{workshop.grading}}', 'placeholder="Grading Or Rating" class="form-control validate[required]" '); ?>
        <span class="error"><?php echo form_error('othergrading'); ?></span>
    </div>
    </div>
    

    </div>
    </div>
</script>   
<script type="text/javascript">
    var base_url = $('#url').val();
    var get_csrf_token_name = $('#get_csrf_token_name').val();
    var get_csrf_hash = $('#get_csrf_hash').val();                                                    
    function processRegionDiv(ids) {
    //console.log('Calling');
        var role_id = $("#venue_"+ids).val();
        $('#school_div_all_'+ids).css("display", "none");
        $('#school_id_all_'+ids).val('');
        if (role_id != '') {
            $.ajax({
                url: base_url + 'admin/users/get_region',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + role_id,
                type: 'POST',
                success: function (response) {
                    $('#region_id_all_'+ids).html(response);
                    $('#region_div_all_'+ids).css("display", "block");
                    if (role_id == '2') {
                        $("#all_region_label_"+ids).html("Units<span class='reqd'>*</span>");
                    }
                    else if (role_id == '4') {
                        $("#all_region_label_"+ids).html("ZIET<span class='reqd'>*</span>");
                    } else {
                        $("#all_region_label_"+ids).html("Regions<span class='reqd'>*</span>");
                    }
                }
            });
        }else{
            $('#region_div_all_'+ids).css("display", "none");
        }
    }
    function ProcessSchooldiv(ids) {
        var region_id = $("#region_id_all_"+ids).val();
        var role_id = $("#venue_"+ids).val();
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


    $(document).ready(function () {
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
        
 
        //training block section
        var random_training_more_id = Date.now();
        $('#addmore').click(function () {
            random_training_more_id = Date.now();
            RenderTrainingMore(random_training_more_id);
        });
        var taining_details =<?php echo json_encode(isset($TranData) ? $TranData: ''); ?>;
        if (taining_details!='') {
            $.each(taining_details, function (key, training) {
                RenderTrainingMore(training.id, training);
                $("#course_type_" + training.id).val(training.course).trigger("change");
                $("#training_designation_" + training.id).val(training.designationname);
                $("#training_post_id_" + training.id).val(training.designation);
                if(training.cat_id=='1')
                {
                    $("#subject_div_training_" + training.id).css("display", "block");
                    $("#training_subject_" + training.id).val(training.subject);
                }
                $("#spell_" + training.id).val(training.spell).trigger("change");
                $("#service_role_" + training.id).val(training.role).trigger("change");
                
                $("#venue_" + training.id).val(training.venuetype);
                if (training.venueregion!='') {
                    $("#region_div_all_"+ training.id).css("display", "block");
                    if(training.venuetype==2){
                        $('#all_region_label_'+training.id).html("Units<span class='reqd'>*</span>");
                    }else if(training.venuetype==4){
                        $('#all_region_label_'+training.id).html("ZEIT<span class='reqd'>*</span>");
                    }else{
                        $('#all_region_label_'+training.id).html("Region<span class='reqd'>*</span>");
                    }
                    $("#region_id_all_" + training.id).val(training.venueregion);   
                    if (training.venueschool!=0 ) { 
                        $("#school_div_all_"+ training.id).css("display", "block");
                        $("#school_id_all_" + training.id).val(training.venueschool);     
                    }
                }
            
            });
        } else {
            training_more = {};
            RenderTrainingMore(random_training_more_id, training_more);
        }
        
        function RenderTrainingMore(random_training_more_id, training_more) {
            var source = $("#training_more_template").html();
            var wexp_count = $(".delete_wexp_training_more").length;
            Mustache.parse(source);
            var rendered = Mustache.render(source, {
                random_exr_id: random_training_more_id,
                training: training_more,
            });
            $("#containner_training_more").append(rendered);

            if (wexp_count != 0) {
                $("#training_more_1_" + random_training_more_id).css("display", "block");
            }
            delete_training_more(random_training_more_id);
            $('#training_designation_' + random_training_more_id).typeahead(null, {
                name: 'sample_data',
                display: 'name',
                source: sample_data,
                limit: 10,
                templates: {
                    suggestion: Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
                }
            });

            $('#training_designation_' + random_training_more_id).on('typeahead:selected', function (evt, item) {
                var training_designation = $('#training_designation_' + random_training_more_id).val();
                if (training_designation != '') {
                    $.ajax({
                        url: base_url + 'autocomplete/get_designation',
                        data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + training_designation,
                        type: 'POST',
                        success: function (response) {
                            if (response != false) {
                                $.each(response, function (key, value) {
                                    $('#training_designation_' + random_training_more_id).val(value);
                                    $('#training_post_id_' + random_training_more_id).val(key);
                                     if (key == '5' || key == '6' || key == '7' || key == '8') {
                                        $('#subject_div_training_' + random_training_more_id).css("display", "block");
                                    }
                                    else {
                                        $('#subject_div_training_' + random_training_more_id).css("display", "none");
                                    }
                                });
                            }
                            else {
                                $('#training_designation_' + random_training_more_id).val('');
                                alert('Designation does not exist. Please select correct designation.');
                                $('#subject_div_training_' + random_training_more_id).css("display", "none");
                            }

                        }
                    });
                }
            });
            $('#training_designation_' + random_training_more_id).blur(function () {
                var training_designation = $('#training_designation_' + random_training_more_id).val();
                if (training_designation != '') {
                    $.ajax({
                        url: base_url + 'autocomplete/get_designation',
                        data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + training_designation,
                        type: 'POST',
                        success: function (response) {
                            if (response != false) {
                                $.each(response, function (key, value) {
                                    $('#training_designation_' + random_training_more_id).val(value);
                                    $('#training_post_id_' + random_training_more_id).val(key);
                                     if (key == '5' || key == '6' || key == '7' || key == '8') {
                                        $('#subject_div_training_' + random_training_more_id).css("display", "block");
                                    }
                                    else {
                                        $('#subject_div_training_' + random_training_more_id).css("display", "none");
                                    }
                                });
                            }
                            else {
                                $('#training_designation_' + random_training_more_id).val('');
                                alert('Designation does not exist. Please select correct designation.');
                                $('#subject_div_training_' + random_training_more_id).css("display", "none");
                            }

                        }
                    });
                }
            });
            $("#training_single_fromdate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_single_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_single_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_single_fromdate_' + random_training_more_id).val('');
                    } else if (startDate != '' && endDate != '' && duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_single_fromdate_' + random_training_more_id).val('');
                        $('#training_single_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && duration_output < duration) {
                        var final_duration_output = (duration_output + 1);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }
            });
            $("#training_single_todate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_single_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_single_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_single_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_single_fromdate_' + random_training_more_id).val('');
                        $('#training_single_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && duration_output < duration) {
                        var final_duration_output = (duration_output + 1);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }

            });
            $("#training_one_fromdate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_one_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_one_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_two_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_two_todate_' + random_training_more_id).val()
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var date2 = $('#training_three_fromdate_' + random_training_more_id).val();
                    var newsdate2 = date2.split("-").reverse().join("-");
                    var startDate2 = new Date(newsdate2);
                    var edate2 = $('#training_three_todate_' + random_training_more_id).val()
                    var newedate2 = edate2.split("-").reverse().join("-");
                    var endDate2 = new Date(newedate2);
                    var date3 = $('#training_four_fromdate_' + random_training_more_id).val();
                    var newsdate3 = date3.split("-").reverse().join("-");
                    var startDate3 = new Date(newsdate3);
                    var edate3 = $('#training_four_todate_' + random_training_more_id).val()
                    var newedate3 = edate3.split("-").reverse().join("-");
                    var endDate3 = new Date(newedate3);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var dt5 = startDate2;
                    var dt6 = endDate2;
                    var duration_output3 = Math.floor((Date.UTC(dt6.getFullYear(), dt6.getMonth(), dt6.getDate()) - Date.UTC(dt5.getFullYear(), dt5.getMonth(), dt5.getDate())) / (1000 * 60 * 60 * 24));
                    var dt7 = startDate3;
                    var dt8 = endDate3;
                    var duration_output4 = Math.floor((Date.UTC(dt8.getFullYear(), dt8.getMonth(), dt8.getDate()) - Date.UTC(dt7.getFullYear(), dt7.getMonth(), dt7.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = ((duration_output1+1) + (duration_output2+1) + (duration_output3+1) + (duration_output4+1)); 
                    $('#duration_inservice_'+ random_training_more_id).val('');
                     if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_one_fromdate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_one_fromdate_' + random_training_more_id).val('');
                        $('#training_one_todate_' + random_training_more_id).val('');
                        $('#training_two_fromdate_' + random_training_more_id).val('');
                        $('#training_two_todate_' + random_training_more_id).val('');
                        $('#training_three_fromdate_' + random_training_more_id).val('');
                        $('#training_three_todate_' + random_training_more_id).val('');
                        $('#training_four_fromdate_' + random_training_more_id).val('');
                        $('#training_four_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }
            });
            $("#training_one_todate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_one_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_one_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_two_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_two_todate_' + random_training_more_id).val()
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var date2 = $('#training_three_fromdate_' + random_training_more_id).val();
                    var newsdate2 = date2.split("-").reverse().join("-");
                    var startDate2 = new Date(newsdate2);
                    var edate2 = $('#training_three_todate_' + random_training_more_id).val()
                    var newedate2 = edate2.split("-").reverse().join("-");
                    var endDate2 = new Date(newedate2);
                    var date3 = $('#training_four_fromdate_' + random_training_more_id).val();
                    var newsdate3 = date3.split("-").reverse().join("-");
                    var startDate3 = new Date(newsdate3);
                    var edate3 = $('#training_four_todate_' + random_training_more_id).val()
                    var newedate3 = edate3.split("-").reverse().join("-");
                    var endDate3 = new Date(newedate3);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var dt5 = startDate2;
                    var dt6 = endDate2;
                    var duration_output3 = Math.floor((Date.UTC(dt6.getFullYear(), dt6.getMonth(), dt6.getDate()) - Date.UTC(dt5.getFullYear(), dt5.getMonth(), dt5.getDate())) / (1000 * 60 * 60 * 24));
                    var dt7 = startDate3;
                    var dt8 = endDate3;
                    var duration_output4 = Math.floor((Date.UTC(dt8.getFullYear(), dt8.getMonth(), dt8.getDate()) - Date.UTC(dt7.getFullYear(), dt7.getMonth(), dt7.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = ((duration_output1+1) + (duration_output2+1) + (duration_output3+1) + (duration_output4+1)); 
                    $('#duration_inservice_'+ random_training_more_id).val('');

                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_one_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_one_fromdate_' + random_training_more_id).val('');
                        $('#training_one_todate_' + random_training_more_id).val('');
                        $('#training_two_fromdate_' + random_training_more_id).val('');
                        $('#training_two_todate_' + random_training_more_id).val('');
                        $('#training_three_fromdate_' + random_training_more_id).val('');
                        $('#training_three_todate_' + random_training_more_id).val('');
                        $('#training_four_fromdate_' + random_training_more_id).val('');
                        $('#training_four_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }

            });
            $("#training_two_fromdate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_two_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_two_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_one_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_one_todate_' + random_training_more_id).val()
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var date2 = $('#training_three_fromdate_' + random_training_more_id).val();
                    var newsdate2 = date2.split("-").reverse().join("-");
                    var startDate2 = new Date(newsdate2);
                    var edate2 = $('#training_three_todate_' + random_training_more_id).val()
                    var newedate2 = edate2.split("-").reverse().join("-");
                    var endDate2 = new Date(newedate2);
                    var date3 = $('#training_four_fromdate_' + random_training_more_id).val();
                    var newsdate3 = date3.split("-").reverse().join("-");
                    var startDate3 = new Date(newsdate3);
                    var edate3 = $('#training_four_todate_' + random_training_more_id).val()
                    var newedate3 = edate3.split("-").reverse().join("-");
                    var endDate3 = new Date(newedate3);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var dt5 = startDate2;
                    var dt6 = endDate2;
                    var duration_output3 = Math.floor((Date.UTC(dt6.getFullYear(), dt6.getMonth(), dt6.getDate()) - Date.UTC(dt5.getFullYear(), dt5.getMonth(), dt5.getDate())) / (1000 * 60 * 60 * 24));
                    var dt7 = startDate3;
                    var dt8 = endDate3;
                    var duration_output4 = Math.floor((Date.UTC(dt8.getFullYear(), dt8.getMonth(), dt8.getDate()) - Date.UTC(dt7.getFullYear(), dt7.getMonth(), dt7.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = ((duration_output1+1) + (duration_output2+1) + (duration_output3+1) + (duration_output4+1)); 
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_two_fromdate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_one_fromdate_' + random_training_more_id).val('');
                        $('#training_one_todate_' + random_training_more_id).val('');
                        $('#training_two_fromdate_' + random_training_more_id).val('');
                        $('#training_two_todate_' + random_training_more_id).val('');
                        $('#training_three_fromdate_' + random_training_more_id).val('');
                        $('#training_three_todate_' + random_training_more_id).val('');
                        $('#training_four_fromdate_' + random_training_more_id).val('');
                        $('#training_four_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }
            });
            $("#training_two_todate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_two_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_two_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_one_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_one_todate_' + random_training_more_id).val()
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var date2 = $('#training_three_fromdate_' + random_training_more_id).val();
                    var newsdate2 = date2.split("-").reverse().join("-");
                    var startDate2 = new Date(newsdate2);
                    var edate2 = $('#training_three_todate_' + random_training_more_id).val()
                    var newedate2 = edate2.split("-").reverse().join("-");
                    var endDate2 = new Date(newedate2);
                    var date3 = $('#training_four_fromdate_' + random_training_more_id).val();
                    var newsdate3 = date3.split("-").reverse().join("-");
                    var startDate3 = new Date(newsdate3);
                    var edate3 = $('#training_four_todate_' + random_training_more_id).val()
                    var newedate3 = edate3.split("-").reverse().join("-");
                    var endDate3 = new Date(newedate3);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var dt5 = startDate2;
                    var dt6 = endDate2;
                    var duration_output3 = Math.floor((Date.UTC(dt6.getFullYear(), dt6.getMonth(), dt6.getDate()) - Date.UTC(dt5.getFullYear(), dt5.getMonth(), dt5.getDate())) / (1000 * 60 * 60 * 24));
                    var dt7 = startDate3;
                    var dt8 = endDate3;
                    var duration_output4 = Math.floor((Date.UTC(dt8.getFullYear(), dt8.getMonth(), dt8.getDate()) - Date.UTC(dt7.getFullYear(), dt7.getMonth(), dt7.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = ((duration_output1+1) + (duration_output2+1) + (duration_output3+1) + (duration_output4+1)); 
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_two_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_one_fromdate_' + random_training_more_id).val('');
                        $('#training_one_todate_' + random_training_more_id).val('');
                        $('#training_two_fromdate_' + random_training_more_id).val('');
                        $('#training_two_todate_' + random_training_more_id).val('');
                        $('#training_three_fromdate_' + random_training_more_id).val('');
                        $('#training_three_todate_' + random_training_more_id).val('');
                        $('#training_four_fromdate_' + random_training_more_id).val('');
                        $('#training_four_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }

            });
            $("#training_three_fromdate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_three_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_three_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_one_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_one_todate_' + random_training_more_id).val()
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var date2 = $('#training_two_fromdate_' + random_training_more_id).val();
                    var newsdate2 = date2.split("-").reverse().join("-");
                    var startDate2 = new Date(newsdate2);
                    var edate2 = $('#training_two_todate_' + random_training_more_id).val()
                    var newedate2 = edate2.split("-").reverse().join("-");
                    var endDate2 = new Date(newedate2);
                    var date3 = $('#training_four_fromdate_' + random_training_more_id).val();
                    var newsdate3 = date3.split("-").reverse().join("-");
                    var startDate3 = new Date(newsdate3);
                    var edate3 = $('#training_four_todate_' + random_training_more_id).val()
                    var newedate3 = edate3.split("-").reverse().join("-");
                    var endDate3 = new Date(newedate3);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var dt5 = startDate2;
                    var dt6 = endDate2;
                    var duration_output3 = Math.floor((Date.UTC(dt6.getFullYear(), dt6.getMonth(), dt6.getDate()) - Date.UTC(dt5.getFullYear(), dt5.getMonth(), dt5.getDate())) / (1000 * 60 * 60 * 24));
                    var dt7 = startDate3;
                    var dt8 = endDate3;
                    var duration_output4 = Math.floor((Date.UTC(dt8.getFullYear(), dt8.getMonth(), dt8.getDate()) - Date.UTC(dt7.getFullYear(), dt7.getMonth(), dt7.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = ((duration_output1+1) + (duration_output2+1) + (duration_output3+1) + (duration_output4+1)); 
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_three_fromdate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_one_fromdate_' + random_training_more_id).val('');
                        $('#training_one_todate_' + random_training_more_id).val('');
                        $('#training_two_fromdate_' + random_training_more_id).val('');
                        $('#training_two_todate_' + random_training_more_id).val('');
                        $('#training_three_fromdate_' + random_training_more_id).val('');
                        $('#training_three_todate_' + random_training_more_id).val('');
                        $('#training_four_fromdate_' + random_training_more_id).val('');
                        $('#training_four_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }
            });
            $("#training_three_todate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_three_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_three_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_one_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_one_todate_' + random_training_more_id).val()
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var date2 = $('#training_two_fromdate_' + random_training_more_id).val();
                    var newsdate2 = date2.split("-").reverse().join("-");
                    var startDate2 = new Date(newsdate2);
                    var edate2 = $('#training_two_todate_' + random_training_more_id).val()
                    var newedate2 = edate2.split("-").reverse().join("-");
                    var endDate2 = new Date(newedate2);
                    var date3 = $('#training_four_fromdate_' + random_training_more_id).val();
                    var newsdate3 = date3.split("-").reverse().join("-");
                    var startDate3 = new Date(newsdate3);
                    var edate3 = $('#training_four_todate_' + random_training_more_id).val()
                    var newedate3 = edate3.split("-").reverse().join("-");
                    var endDate3 = new Date(newedate3);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var dt5 = startDate2;
                    var dt6 = endDate2;
                    var duration_output3 = Math.floor((Date.UTC(dt6.getFullYear(), dt6.getMonth(), dt6.getDate()) - Date.UTC(dt5.getFullYear(), dt5.getMonth(), dt5.getDate())) / (1000 * 60 * 60 * 24));
                    var dt7 = startDate3;
                    var dt8 = endDate3;
                    var duration_output4 = Math.floor((Date.UTC(dt8.getFullYear(), dt8.getMonth(), dt8.getDate()) - Date.UTC(dt7.getFullYear(), dt7.getMonth(), dt7.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = ((duration_output1+1) + (duration_output2+1) + (duration_output3+1) + (duration_output4+1)); 
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_three_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_one_fromdate_' + random_training_more_id).val('');
                        $('#training_one_todate_' + random_training_more_id).val('');
                        $('#training_two_fromdate_' + random_training_more_id).val('');
                        $('#training_two_todate_' + random_training_more_id).val('');
                        $('#training_three_fromdate_' + random_training_more_id).val('');
                        $('#training_three_todate_' + random_training_more_id).val('');
                        $('#training_four_fromdate_' + random_training_more_id).val('');
                        $('#training_four_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }

            });
            $("#training_four_fromdate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_four_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_four_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_one_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_one_todate_' + random_training_more_id).val()
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var date2 = $('#training_two_fromdate_' + random_training_more_id).val();
                    var newsdate2 = date2.split("-").reverse().join("-");
                    var startDate2 = new Date(newsdate2);
                    var edate2 = $('#training_two_todate_' + random_training_more_id).val()
                    var newedate2 = edate2.split("-").reverse().join("-");
                    var endDate2 = new Date(newedate2);
                    var date3 = $('#training_three_fromdate_' + random_training_more_id).val();
                    var newsdate3 = date3.split("-").reverse().join("-");
                    var startDate3 = new Date(newsdate3);
                    var edate3 = $('#training_three_todate_' + random_training_more_id).val()
                    var newedate3 = edate3.split("-").reverse().join("-");
                    var endDate3 = new Date(newedate3);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var dt5 = startDate2;
                    var dt6 = endDate2;
                    var duration_output3 = Math.floor((Date.UTC(dt6.getFullYear(), dt6.getMonth(), dt6.getDate()) - Date.UTC(dt5.getFullYear(), dt5.getMonth(), dt5.getDate())) / (1000 * 60 * 60 * 24));
                    var dt7 = startDate3;
                    var dt8 = endDate3;
                    var duration_output4 = Math.floor((Date.UTC(dt8.getFullYear(), dt8.getMonth(), dt8.getDate()) - Date.UTC(dt7.getFullYear(), dt7.getMonth(), dt7.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = ((duration_output1+1) + (duration_output2+1) + (duration_output3+1) + (duration_output4+1)); 
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_four_fromdate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_one_fromdate_' + random_training_more_id).val('');
                        $('#training_one_todate_' + random_training_more_id).val('');
                        $('#training_two_fromdate_' + random_training_more_id).val('');
                        $('#training_two_todate_' + random_training_more_id).val('');
                        $('#training_three_fromdate_' + random_training_more_id).val('');
                        $('#training_three_todate_' + random_training_more_id).val('');
                        $('#training_four_fromdate_' + random_training_more_id).val('');
                        $('#training_four_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }
            });
            $("#training_four_todate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_four_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_four_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_one_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_one_todate_' + random_training_more_id).val()
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var date2 = $('#training_two_fromdate_' + random_training_more_id).val();
                    var newsdate2 = date2.split("-").reverse().join("-");
                    var startDate2 = new Date(newsdate2);
                    var edate2 = $('#training_two_todate_' + random_training_more_id).val()
                    var newedate2 = edate2.split("-").reverse().join("-");
                    var endDate2 = new Date(newedate2);
                    var date3 = $('#training_three_fromdate_' + random_training_more_id).val();
                    var newsdate3 = date3.split("-").reverse().join("-");
                    var startDate3 = new Date(newsdate3);
                    var edate3 = $('#training_three_todate_' + random_training_more_id).val()
                    var newedate3 = edate3.split("-").reverse().join("-");
                    var endDate3 = new Date(newedate3);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var dt5 = startDate2;
                    var dt6 = endDate2;
                    var duration_output3 = Math.floor((Date.UTC(dt6.getFullYear(), dt6.getMonth(), dt6.getDate()) - Date.UTC(dt5.getFullYear(), dt5.getMonth(), dt5.getDate())) / (1000 * 60 * 60 * 24));
                    var dt7 = startDate3;
                    var dt8 = endDate3;
                    var duration_output4 = Math.floor((Date.UTC(dt8.getFullYear(), dt8.getMonth(), dt8.getDate()) - Date.UTC(dt7.getFullYear(), dt7.getMonth(), dt7.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = ((duration_output1+1) + (duration_output2+1) + (duration_output3+1) + (duration_output4+1)); 
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_four_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_one_fromdate_' + random_training_more_id).val('');
                        $('#training_one_todate_' + random_training_more_id).val('');
                        $('#training_two_fromdate_' + random_training_more_id).val('');
                        $('#training_two_todate_' + random_training_more_id).val('');
                        $('#training_three_fromdate_' + random_training_more_id).val('');
                        $('#training_three_todate_' + random_training_more_id).val('');
                        $('#training_four_fromdate_' + random_training_more_id).val('');
                        $('#training_four_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && startDate2 != '' && endDate2 != '' && startDate3 != '' && endDate3 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }

            });
            $("#training_doubleone_fromdate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_doubleone_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_doubleone_todate_' + random_training_more_id).val();
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_doubletwo_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_doubletwo_todate_' + random_training_more_id).val();
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = duration_output1 + duration_output2;
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_doubleone_fromdate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_doubleone_fromdate_' + random_training_more_id).val('');
                        $('#training_doubleone_todate_' + random_training_more_id).val('');
                        $('#training_doubletwo_fromdate_' + random_training_more_id).val('');
                        $('#training_doubletwo_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output + 1);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }
            });
            $("#training_doubleone_todate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_doubleone_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_doubleone_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_doubletwo_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_doubletwo_todate_' + random_training_more_id).val();
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = duration_output1 + duration_output2;
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_doubleone_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_doubleone_fromdate_' + random_training_more_id).val('');
                        $('#training_doubleone_todate_' + random_training_more_id).val('');
                        $('#training_doubletwo_fromdate_' + random_training_more_id).val('');
                        $('#training_doubletwo_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output + 1);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }

            });
            $("#training_doubletwo_fromdate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_doubletwo_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_doubletwo_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_doubleone_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_doubleone_todate_' + random_training_more_id).val()
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = duration_output1 + duration_output2;
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_doubletwo_fromdate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_doubleone_fromdate_' + random_training_more_id).val('');
                        $('#training_doubleone_todate_' + random_training_more_id).val('');
                        $('#training_doubletwo_fromdate_' + random_training_more_id).val('');
                        $('#training_doubletwo_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output + 1);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }
            });
            $("#training_doubletwo_todate_" + random_training_more_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#training_doubletwo_fromdate_' + random_training_more_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#training_doubletwo_todate_' + random_training_more_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var date1 = $('#training_doubleone_fromdate_' + random_training_more_id).val();
                    var newsdate1 = date1.split("-").reverse().join("-");
                    var startDate1 = new Date(newsdate1);
                    var edate1 = $('#training_doubleone_todate_' + random_training_more_id).val()
                    var newedate1 = edate1.split("-").reverse().join("-");
                    var endDate1 = new Date(newedate1);
                    var duration = 23;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output1 = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    var dt3 = startDate1;
                    var dt4 = endDate1;
                    var duration_output2 = Math.floor((Date.UTC(dt4.getFullYear(), dt4.getMonth(), dt4.getDate()) - Date.UTC(dt3.getFullYear(), dt3.getMonth(), dt3.getDate())) / (1000 * 60 * 60 * 24));
                    var total_duration_output = duration_output1 + duration_output2;
                    $('#duration_inservice_'+ random_training_more_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#training_doubletwo_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && total_duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#training_doubleone_fromdate_' + random_training_more_id).val('');
                        $('#training_doubleone_todate_' + random_training_more_id).val('');
                        $('#training_doubletwo_fromdate_' + random_training_more_id).val('');
                        $('#training_doubletwo_todate_' + random_training_more_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate1 != '' && endDate1 != '' && total_duration_output < duration) {
                        var final_duration_output = (total_duration_output + 1);
                        $('#duration_inservice_'+ random_training_more_id).val(final_duration_output);
                    }
                }

            });


        }
        function delete_training_more(random_exr_id) {

            $("#remove_wexp_training_more" + random_exr_id).click(function () {
                var wexp_count = $(".delete_wexp_training_more").length;
                var wexp_id = $(this).attr("wexpid");
                if (wexp_id) {
                    var confirm = window.confirm('Are you sure want to delete?');
                    if (confirm) {
                        $("#delete_wexp_training_more" + wexp_id).remove();
                        generate("success", "Details deleted successfully");
                        location_reload();
                        if (wexp_count == 1) {
                            equa = {};
                            RenderTrainingMore(random_exr_id, equa);
                        }
                    }
                } else {
                    if (wexp_count > 1) {
                        $("#delete_wexp_training_more" + random_exr_id).remove();
                    }

                }

            });
        }

        var random_workshop_id = Date.now();
        $('#addmoreworkshop').click(function () {
            random_workshop_id = Date.now();
            RenderWorkshop(random_workshop_id);
        });
        var othertaining_details =<?php echo json_encode(isset($OtherTranData) ? $OtherTranData: ''); ?>;
        if (othertaining_details!='') {
            $.each(othertaining_details, function (key, workshop) {
                //console.log(workshop.designationname);
                RenderWorkshop(workshop.id, workshop);
                $("#agency" + workshop.id).val(workshop.organizing_agency).trigger("change");
                $("#govt_agency" + workshop.id).val(workshop.govt_agency).trigger("change");
                $("#workshop_designation_" + workshop.id).val(workshop.designationname);
                $("#workshop_post_id_" + workshop.id).val(workshop.designation);
                if(workshop.cat_id=='1')
                {
                    $("#subject_div_" + workshop.id).css("display", "block");
                    $("#subject_id_" + workshop.id).val(workshop.subject);
                }
                $("#workshop_role_" + workshop.id).val(workshop.role).trigger("change");
            
            });
        } else {
            workshop_more = {};
            RenderWorkshop(random_workshop_id, workshop_more);
        }
        
        
        function RenderWorkshop(random_workshop_id, workshop_more) {
            var source = $("#workshop_template").html();
            var wexp_count = $(".delete_wexp_workshop").length;
            Mustache.parse(source);
            var rendered = Mustache.render(source, {
                random_exr_id: random_workshop_id,
                workshop: workshop_more,
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
                                    $('#workshop_post_id_' + random_workshop_id).val(key);
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
            $("#workshop_from_datepicker" + random_workshop_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#workshop_from_datepicker' + random_workshop_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#workshop_to_datepicker' + random_workshop_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var duration = 31;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
        $('#workshop_duration_'+random_workshop_id).val('');
                    if (startDate != '' && endDate != '' && startDate != 'Invalid Date' && endDate != 'Invalid Date' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#workshop_from_datepicker' + random_workshop_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && startDate != 'Invalid Date' && endDate != 'Invalid Date' && duration_output != '') {
                        var final_duration_output = (duration_output + 1);
                        $('#workshop_duration_'+random_workshop_id).val(final_duration_output);
                    }
                }
            });
            $("#workshop_to_datepicker" + random_workshop_id).datepicker({
                maxDate: "0",
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "-88:+0",
                onSelect: function (selected) {
                    var date = $('#workshop_from_datepicker' + random_workshop_id).val();
                    var newsdate = date.split("-").reverse().join("-");
                    var startDate = new Date(newsdate);
                    var edate = $('#workshop_to_datepicker' + random_workshop_id).val()
                    var newedate = edate.split("-").reverse().join("-");
                    var endDate = new Date(newedate);
                    var duration = 31;
                    var dt1 = startDate;
                    var dt2 = endDate;
                    var duration_output = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                    $('#workshop_duration_'+random_workshop_id).val('');
                    if (startDate != '' && endDate != '' && startDate > endDate) {
                        alert('start date should be equal to or less than end date');
                        $('#workshop_to_datepicker' + random_workshop_id).val('');
                    }
                     else if (startDate != '' && endDate != '' && duration_output > duration) {
                        alert('training duration should be less than 30 days');
                        $('#workshop_from_datepicker' + random_workshop_id).val('');
                        $('#workshop_to_datepicker' + random_workshop_id).val('');
                    }
                    else if (startDate != '' && endDate != '' && duration_output < duration) {
                        var final_duration_output = (duration_output + 1);
                        $('#workshop_duration_'+random_workshop_id).val(final_duration_output);
                    }
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
    
    function openagency(ids)
    {
        var text = $("#agency"+ids).val(); 
        if (text == '1')
        {
            $('#govt' + ids).show();
            $('#address' + ids).show();
            $('#nongovt' + ids).hide();
        } else if (text == '2') {
            $('#govt' + ids).hide();
            $('#address' + ids).show();
            $('#nongovt' + ids).show();
            $('#othergovtname'+ids).hide();
        } else {
            $('#govt' + ids).hide();
            $('#address' + ids).hide();
            $('#nongovt' + ids).hide();
        }
    }

    function getdatediv(ids) {
        var text = $("#spell_" + ids).val();
        if (text == '1')
        {
            $('#single_' + ids).show();
            $('#12_3_3_3_' + ids).hide();
            $('#double_' + ids).hide();
        } else if (text == '3') {
            $('#single_' + ids).hide();
            $('#12_3_3_3_' + ids).show();
            $('#double_' + ids).hide();
        } else if (text == '2') {
            $('#single_' + ids).hide();
            $('#12_3_3_3_' + ids).hide();
            $('#double_' + ids).show();
        } else {
            $('#single_' + ids).hide();
            $('#12_3_3_3_' + ids).hide();
            $('#double_' + ids).hide();
        }
    }


</script>

<script type="text/javascript">
    $(document).ready(function(){
        $( "#servicetraining" ).change(function() {
            var text = $("#servicetraining").val();
            if(text=='2' || text=='')
            {
              $('#containner_training_more').hide(); 
              $('#addmore').hide();
            }else{
              $('#containner_training_more').show();
              $('#addmore').show();
            }
        });
    });
    
    function opengrade(ids)
    {
        var text = $("#service_role_"+ids).val();
         if(text=='4'){
          $('#servicegrade_'+ids).show();
          $('#courseconducted'+ids).hide();
        }else if(text=='3'){
          $('#courseconducted'+ids).show();
          $('#servicegrade_'+ids).hide();
        }else{
          $('#courseconducted'+ids).hide();
          $('#servicegrade_'+ids).hide();
        }
    }
    
    function govtothername(ids)
    {
        var text = $("#govt_agency"+ids).val();
         if(text=='Others'){
          $('#othergovtname'+ids).show();
        }else{
          $('#othergovtname'+ids).hide();
        }
    }
    
    function openworkshopgrade(ids)
    {
        var text = $("#workshop_role_"+ids).val();
         if(text=='4'){
          $('#workshopgrade_'+ids).show();
        }else{
          $('#workshopgrade_'+ids).hide();
        }
    }
</script>
