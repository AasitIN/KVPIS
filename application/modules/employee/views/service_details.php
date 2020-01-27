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
                echo '<i class="fa fa-user"></i>&nbsp;Employee Code - '.$EmpCode;  
            ?>
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
        <!--  ============================= Service Details Forms Start ============================== -->
        <?php echo form_open("", array("id" => "formID", "class" => "register", "autocomplete" => "off")); ?>
            
            <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($EmpCode) ? $EmpCode : ''; ?>">
            <?php echo $this->load->view('elements/employeetab',(isset($EmpCode))?$EmpCode:''); ?>
            <h6><strong>Service Details - </strong></h6>
            <hr>
            
            <h6><strong  class="font_size_dynamic">Details of First Joining in KVS  - </strong></h6>
            <div class="background_div">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label"> Designation:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("initial_designation", isset($initialpost->designationname) ? set_value('initial_designation', $initialpost->designationname) : set_value('initial_designation'), 'placeholder=" Designation" id="initial_post_designation"  class="form-control validate[required] typeahead" '); ?>
                        <span class="error"><?php echo form_error('initial_designationid'); ?></span>
                        <input type="hidden" name="initial_designationid" value="<?php echo $initialpost->initial_designationid; ?>" id="initial_post_id">
                    </div>
                </div>

                <div class="form-group col-md-4" <?php if(empty($initialpost->initial_subject)) echo 'style="display:none;"';  ?>  id="subject_div_initial">
                    <label for="" class="col-sm-12 col-form-label">  Subject   <span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_subject", array("" => "Select") + subject_lists(), isset($initialpost->initial_subject) ? set_value('initial_subject', $initialpost->initial_subject) : set_value('initial_subject'), 'id="subject_id_initial" data-id="c" class="form-control validate[required]"  '); ?>
                        <span class="error"><?php echo form_error('initial_subject'); ?></span> 
                    </div>
                </div>
            </div>

            <div class="row"> 
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">   Place of Posting  <span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_role_id", array("" => "Select") + role_lists(), '', 'id="role_id_initial" data-id="c" onchange="processRegionInitialDiv();" class="form-control validate[required]"  '); ?>
                        <span class="error"><?php echo form_error('initial_role_id'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" id="region_div_initial" style="display:none;">
                    <label for="" class="col-sm-12 col-form-label" id="initial_region_label">Regions<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_region_id", array("" => "Select") + region_lists(), '', 'id="c_region_initial" data-id="c" onchange="processSchoolInitialDiv();" class="form-control validate[required]" ');    ?>
<!--                        <select  class="form-control validate[required] region_initial" name="region_id_initial" id="c_region_initial" data-id="c">
                            <option value="">Select</option>
                        </select> -->
                        
                        <span class="error"><?php echo form_error('initial_region_id'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="school_div_initial" style="display:none;">
                    <label for="" class="col-sm-12 col-form-label">Schools<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_school_id", array("" => "Select") + school_lists(), '', 'class="form-control validate[required]"  id="c_school_initial" data-id="c" onchange="initialschcode()" '); ?>
                        <span class="error"><?php echo form_error('initial_school_id'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="section_div_initial" style="display:none;">
                    <label for="" class="col-sm-12 col-form-label">Section<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_section_id", array("" => "Select") + section_lists(), '', 'class="form-control validate[required]"  id="c_section_initial" data-id="c" '); ?>
                        <span class="error"><?php echo form_error('initial_section_id'); ?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4" id="kvcode_div_initial" >
                    <label for="" class="col-sm-12 col-form-label">KV Code:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("initial_kvcode", isset($initialpost->initial_kvcode) ? set_value('initial_kvcode', $initialpost->initial_kvcode) : set_value('initial_kvcode'), 'readonly id="kvcode_initial" class=" validate[required] form-control" '); ?>
                        <span class="error"><?php echo form_error('initial_kvcode'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="shift_div_initial" style="display:none;"  >
                    <label for="" class="col-sm-12 col-form-label">Shift<span class="reqd"></span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_shift", array("" => "Select Shift") + shift(), isset($initialpost->initial_shift) ? set_value('initial_shift', $initialpost->initial_shift) : set_value('initial_shift'), 'id="shift_initial" class="form-control"  '); ?>
                        <span class="error"><?php echo form_error('initial_shift'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Appointment on NorthEast Special Drive<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_appoint_specialdrive", array("" => "Select") + single_parent(), isset($initialpost->initial_appoint_specialdrive) ? set_value('initial_appoint_specialdrive', $initialpost->initial_appoint_specialdrive) : set_value('initial_appoint_specialdrive'), 'id="specialdriveval" onchange="processiszonaldiv();" class="form-control validate[required] "  '); ?>
                        <span class="error"><?php echo form_error('role_id'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" id="iszonaldiv" style="display:none;" >
                    <label for="" class="col-sm-12 col-form-label">Appointment on Zonal Basis<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_appoint_zone", array("" => "Select") + single_parent(), isset($initialpost->initial_appoint_zone) ? set_value('initial_appoint_zone', $initialpost->initial_appoint_zone) : set_value('initial_appoint_zone'), 'onchange="processZoneDiv();" id="zonal_val" class="form-control validate[required] "  '); ?>
                        <span class="error"><?php echo form_error('role_id'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4" id="zone_div" <?php if($initialpost->initial_appoint_specialdrive!=1) echo 'style="display:none;"'; ?> >
                    <label for="" class="col-sm-12 col-form-label">Zone<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_zone", array("" => "Select Zone") + zone(), isset($initialpost->initial_zone) ? set_value('initial_zone', $initialpost->initial_zone) : set_value('initial_zone'), 'readonly id="initial_zone" class="form-control validate[required] "  '); ?>
                        <span class="error"><?php echo form_error('role_id'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Date of Joining:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("initial_joiningdate", isset($initialpost->initial_joiningdate) ? set_value('initial_joiningdate', $initialpost->initial_joiningdate) : set_value('initial_joiningdate'), 'placeholder="dd-mm-yyyy"  class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('initial_joiningdate'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Date of Confirmation:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("initial_confirmdate", isset($initialpost->initial_confirmdate) ? set_value('initial_confirmdate', $initialpost->initial_confirmdate) : set_value('initial_confirmdate'), 'placeholder="dd-mm-yyyy"  class="datepicker-here form-control common_datepicker" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('initial_confirmdate'); ?></span>
                    </div>
                </div>
                <!--=========================== Added Trail Base Start 21062019 ============================-->
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Whether Appointed on Trial Basis<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_appoint_trail", array("" => "Select") + single_parent(), isset($initialpost->initial_appoint_trail) ? set_value('initial_appoint_trail', $initialpost->initial_appoint_trail) : set_value('initial_appoint_trail'), 'onchange="enFirstTrialJoin();" id="enFirst_Trial_Join" class="form-control validate[required] "  '); ?>
                        <span class="error"><?php echo form_error('initial_appoint_trail'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" id="first_join_trial_start" style="display: none;">
                    <label for="" class="col-sm-12 col-form-label">Trial Start Date:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("initial_trailsdate", isset($initialpost->initial_trailsdate) ? set_value('initial_trailsdate', $initialpost->initial_trailsdate) : set_value('initial_trailsdate'), 'placeholder="dd-mm-yyyy" id="from_date" class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('initial_trailsdate'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="first_join_trial_end"  style="display: none;">
                    <label for="" class="col-sm-12 col-form-label">Trial Completion Date:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("initial_trailedate", isset($initialpost->initial_trailedate) ? set_value('initial_trailedate', $initialpost->initial_trailedate) : set_value('initial_trailedate'), 'placeholder="dd-mm-yyyy" id="to_date" class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('initial_trailedate'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="first_regulardate"  style="display: none;">
                    <label for="" class="col-sm-12 col-form-label">Date of Regularization:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("initial_regulardate", isset($initialpost->initial_regulardate) ? set_value('initial_regulardate', $initialpost->initial_regulardate) : set_value('initial_regulardate'), 'placeholder="dd-mm-yyyy"  class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('initial_regulardate'); ?></span>
                    </div>
                </div>
                <!--=========================== Added Trail Base End 21062019 ============================-->
                
                
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Whether Direct/ On Compassionate / Absorption Ground <span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_appointed_term", array("" => "Select") + intial_recruitment(), isset($initialpost->initial_appointed_term) ? set_value('initial_appointed_term', $initialpost->initial_appointed_term) : set_value('initial_appointed_term'), 'class="form-control validate[required]" onchange="absorbtionfield()" id="absorbtion"  '); ?>
                        <span class="error"><?php echo form_error('initial_appointed_term'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" id="absorbtiondata" style="display:none;" >
                    <label for="" class="col-sm-12 col-form-label">Name of Previous Department:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("absorbtion_dept", isset($initialpost->absorbtion_dept) ? set_value('absorbtion_dept', $initialpost->absorbtion_dept) : set_value('absorbtion_dept'), 'class=" validate[required] form-control" '); ?>
                        <span class="error"><?php echo form_error('absorbtion_dept'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Whether on Lien<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_lien", array("" => "Select") + single_parent(), isset($initialpost->initial_lien) ? set_value('initial_lien', $initialpost->initial_lien) : set_value('initial_lien'), 'id="lienval" onchange="processliendiv();" class="form-control validate[required] "  '); ?>
                        <span class="error"><?php echo form_error('initial_lien'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" id="liensdiv" style="display: none;">
                    <label for="" class="col-sm-12 col-form-label">Start Date:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("initial_liensdate", isset($initialpost->initial_liensdate) ? set_value('initial_liensdate', $initialpost->initial_liensdate) : set_value('initial_liensdate'), 'placeholder="dd-mm-yyyy" id="liensdate"  class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('initial_lienedate'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="lienediv"  style="display: none;">
                    <label for="" class="col-sm-12 col-form-label">End Date:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("initial_lienedate", isset($initialpost->initial_lienedate) ? set_value('initial_lienedate', $initialpost->initial_lienedate) : set_value('initial_lienedate'), 'placeholder="dd-mm-yyyy" id="lienedate"  class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('initial_lienedate'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Whether Selected Against:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("initial_category", array("" => "Select") + reserve_post(), isset($initialpost->initial_category) ? set_value('initial_category', $initialpost->initial_category) : set_value('initial_category'), 'class="form-control validate[required]"  '); ?>
                        <span class="error"><?php echo form_error('role_id'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Panel/Vacancy Year:</label>
                    <div class="col-sm-12">
                    <?php echo form_dropdown("initial_panel_year", array("" => "Select Year") + panel_years(), isset($initialpost->initial_panel_year) ? set_value('initial_panel_year', $initialpost->initial_panel_year) : set_value('initial_panel_year'), 'class="form-control"'); ?>
                    <span class="error"><?php echo form_error('initial_panel_year'); ?></span></span>
                    </div>
                </div>

            </div>
        </div>
        <h6><strong  class="font_size_dynamic">Present Post Details - </strong></h6>

        <div class="background_div">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label"> Designation:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("present_designation", isset($presentpost->designationname) ? set_value('present_designation', $presentpost->designationname) : set_value('present_designation'), 'disabled placeholder=" Designation" id="present_post_designation"  class="form-control validate[required] typeahead" '); ?>
                        <input type="hidden" value="<?php echo $presentpost->present_designationid; ?>" name="present_designationid" id="present_post_id">
                        <span class="error"><?php echo form_error('present_designation'); ?></span>
                    </div>
                </div>

                <div class="form-group col-md-4" <?php if(empty($presentpost->present_subject)) echo 'style="display:none;"';  ?>  id="subject_div_present">
                    <label for="" class="col-sm-12 col-form-label"> Subject    <span class="reqd"></span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("present_subject", array("" => "Select") + subject_lists(), isset($presentpost->present_subject) ? set_value('present_subject', $presentpost->present_subject) : set_value('present_subject'), 'disabled id="subject_id_present" data-id="c" class="form-control validate[required]"  '); ?>
                        <span class="error"><?php echo form_error('present_subject_id'); ?></span> 
                    </div>
                </div>

            </div>
            <div class="row"> 
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Place of Posting  <span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("present_role_id", array("" => "Select") + role_lists(), isset($presentpost->present_role_id) ? set_value('present_role_id', $presentpost->present_role_id) : set_value('present_role_id'), 'disabled id="role_id_present" data-id="c" onchange="processRegionPresentDiv();" class="form-control validate[required]"  '); ?>
                        <span class="error"><?php echo form_error('present_role_id'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" id="region_div_present" style="display:none;">
                    <label for="" class="col-sm-12 col-form-label" id="present_region_label">Regions<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("present_region_id", array("" => "Select") + region_lists(), '', 'disabled class="form-control validate[required]" onchange="processSchoolPresentDiv();"  id="c_region_present" data-id="c"');    ?>
                        <span class="error"><?php echo form_error('present_region_id'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="school_div_present" style="display:none;">
                    <label for="" class="col-sm-12 col-form-label">Schools<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("present_school_id", array("" => "Select") + school_lists(), '', 'disabled class="form-control validate[required]"  id="c_school_present" data-id="c" onchange="presentschcode()" '); ?>
                        <span class="error"><?php echo form_error('present_school_id'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="section_div_present" style="display:none;">
                    <label for="" class="col-sm-12 col-form-label">Section<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("present_section_id", array("" => "Select") + section_lists(), '', 'disabled class="form-control validate[required]"  id="c_section_present" data-id="c" '); ?>
                        <span class="error"><?php echo form_error('present_section_id'); ?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4" id="kvcode_div_present" >
                    <label for="" class="col-sm-12 col-form-label">KV Code:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("present_kvcode", isset($presentpost->present_kvcode) ? set_value('present_kvcode', $presentpost->present_kvcode) : set_value('present_kvcode'), 'readonly id="kvcode_present" class=" validate[required] form-control" '); ?>
                        <span class="error"><?php echo form_error('present_kvcode'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="shift_div_present" style="display:none;" >
                    <label for="" class="col-sm-12 col-form-label">Shift<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("present_shift", array("" => "Select Shift") + shift(), isset($presentpost->role_id) ? set_value('role_id', $presentpost->role_id) : set_value('role_id'), 'disabled id="shift_present" class="form-control"  '); ?>
                        <span class="error"><?php echo form_error('present_shift'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Zone<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("present_zone", array("" => "Select Zone") + zone(), isset($presentpost->present_zone) ? set_value('present_zone', $presentpost->present_zone) : set_value('present_zone'), 'readonly id="present_zone" class="form-control validate[required] "  '); ?>
                        <span class="error"><?php echo form_error('present_zone'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Date of Joining:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("present_joiningdate", isset($presentpost->present_joiningdate) ? set_value('present_joiningdate', $presentpost->present_joiningdate) : set_value('present_joiningdate'), 'readonly placeholder="dd-mm-yyyy"  class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('present_joiningdate'); ?></span>
                    </div>
                </div>
                <!--=========================== Added Trail Base Start 21062019 ============================-->
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Whether Appointed on Trial Basis<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("present_appoint_trail", array("" => "Select") + single_parent(), isset($presentpost->present_appoint_trail) ? set_value('present_appoint_trail', $presentpost->present_appoint_trail) : set_value('present_appoint_trail'), 'disabled onchange="enPresentTrialJoin();" id="enPresent_Trial_Join" class="form-control validate[required] "  '); ?>
                        <span class="error"><?php echo form_error('present_appoint_trail'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" id="present_join_trial_start" style="display: none;">
                    <label for="" class="col-sm-12 col-form-label">Trial Start Date:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("present_trailsdate", isset($presentpost->present_trailsdate) ? set_value('present_trailsdate', $presentpost->present_trailsdate) : set_value('present_trailsdate'), 'readonly placeholder="dd-mm-yyyy"  class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('present_trailsdate'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="present_join_trial_end"  style="display: none;">
                    <label for="" class="col-sm-12 col-form-label">Trial Completion Date:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("present_trailedate", isset($presentpost->present_trailedate) ? set_value('present_trailedate', $presentpost->present_trailedate) : set_value('present_trailedate'), 'readonly placeholder="dd-mm-yyyy"  class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('present_trailedate'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" id="present_regulardate" style="display: none;" >
                    <label for="" class="col-sm-12 col-form-label">Date of Regularization:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("present_regulardate", isset($presentpost->present_regulardate) ? set_value('present_regulardate', $presentpost->present_regulardate) : set_value('present_regulardate'), 'readonly placeholder="dd-mm-yyyy"  class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('present_regulardate'); ?></span>
                    </div>
                </div>
                <!--=========================== Added Trail Base End 21062019 ============================-->
                
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Whether Through Direct Recruitment/Promotion/LDE <span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("present_appointed_term", array("" => "Select") + direct_recruitment(), isset($presentpost->present_appointed_term) ? set_value('present_appointed_term', $presentpost->present_appointed_term) : set_value('present_appointed_term'), 'readonly class="form-control validate[required]" id="notional_date" onchange="getNotionalDate(this.value);"'); ?>
                        <span class="error"><?php echo form_error('present_appointed_term'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4 notional_date_div"  style="display: none;">
                    <label for="" class="col-sm-12 col-form-label">Notional Date:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("present_notionaldate", isset($presentpost->emp_phy_details_date) ? set_value('present_notionaldate', $presentpost->present_notionaldate) : set_value('present_notionaldate'), 'readonly placeholder="dd-mm-yyyy"  class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('present_notionaldate'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4 notional_date_div" style="display: none;" >
                    <label for="" class="col-sm-12 col-form-label">Reason & Reference No of Notional Promotion:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("reason_notional", isset($presentpost->reason_notional) ? set_value('reason_notional', $presentpost->reason_notional) : set_value('reason_notional'), 'readonly placeholder="Reason of notional promotion" maxlength="16"  class="numericOnly form-control" '); ?>
                        <span class="error"><?php echo form_error('reason_notional'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Whether Selected Against:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("present_category", array("" => "Select") + reserve_post(), isset($presentpost->present_category) ? set_value('present_category', $presentpost->present_category) : set_value('present_category'), 'disabled class="form-control validate[required]"  '); ?>
                        <span class="error"><?php echo form_error('present_category'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Seniority No of Post:<span class="reqd"></span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("seniorityno", isset($presentpost->seniorityno) ? set_value('seniorityno', $presentpost->seniorityno) : set_value('seniorityno'), 'readonly placeholder="Seniority No of Present Post" maxlength="16"  class="numericOnly form-control" '); ?>
                        <span class="error"><?php echo form_error('seniorityno'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Panel/Vacancy Year:</label>
                    <div class="col-sm-12">
                    <?php echo form_dropdown("present_panel_year", array("" => "Select Year") + panel_years(), isset($presentpost->present_panel_year) ? set_value('present_panel_year', $presentpost->present_panel_year) : set_value('present_panel_year'), 'disabled class="form-control"'); ?>
                    <span class="error"><?php echo form_error('present_panel_year'); ?></span></span>
                    </div>
                </div>
            </div>
        </div>


        <h6> <strong>Details of all posting since Joining in KVS-</strong> </h6>
        <hr>
        <div class="add_more_button">
            <a class="btn btn-primary" id="addmore" href="javascript:"> Add More</a>
        </div>
        <br>
        <div id="containner_service_more"></div>

        <h6> <strong>Leave Details-</strong> </h6>
        <hr>
        <div class="add_more_button">
            <a class="btn btn-primary" id="addmore_leave" href="javascript:"> Add More</a>
        </div>
        <br>
        <div id="containner_leave_more"></div>
        <h6><strong>Other Details-</strong> </h6>
        <hr>
        <div class="background_div">
            <div class="row">     
   
           <?php //echo $due_date_retirement;?>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Due Date of Retirement:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("due_date_retirement",$date_of_retirement, 'readonly placeholder="Due Date of Retirement" maxlength="16"  class="numericOnly form-control  validate[required]" '); ?>
                    <span class="error"><?php echo form_error('emp_phy_details_date'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Age below 40 Years:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("is_below_40_years", array("" => "Select") + single_parent(), isset($age) ? set_value('is_below_40_years', $age) : set_value('is_below_40_years'), 'class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('emp_phy_details_date'); ?></span>
                </div>
            </div>
        </div>
    </div>
        <h6> <strong>Vigilance / Disciplinary Details-</strong> </h6>
        <hr>
        <div class="add_more_button">
            <a class="btn btn-primary" id="addmore_discp" href="javascript:"> Add More</a>
        </div>
        <br>
        <div id="containner_discp_more"></div>
        
        
        <div class="row">

            <div class="col-sm-12">
                <div  style="float:right;"> 
                    <input class="btn btn-primary" type="reset" value="Reset">
                    <input class="btn btn-primary" type="submit" value="Save & Next">
                </div>
            </div>
            
        </div>
        
        <?php echo form_close(); ?>
        
    </div>
    </div>
</div>
</div>
<!-- ========================================== Leave Template Start ============================================-->
<script id="leave_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_leave_more"  id="delete_wexp_leave_more{{random_exr_id}}" >
    <div class="delete_more_button" style="display:none;" id="leave_more_1_{{random_exr_id}}">
        <a class="btn btn-primary" id="remove_wexp_leave_more{{random_exr_id}}" class="remove_wexp_leave_more{{random_exr_id}} href="javascript:"> Delete</a>
    </div>
    
    <div class="row">
        <div class="form-group col-md-4">
            <label for="" class="col-sm-12 col-form-label">  Type   <span class="reqd">*</span></label>
            <div class="col-sm-12">
            <?php echo form_dropdown("leave_type[]", array("" => "Select") + leave_type(), '', 'onchange="processLeaveType({{random_exr_id}})" id="leave_type_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
            <span class="error"><?php echo form_error('leave_type'); ?></span>
            </div> 
        </div>
        <div class="form-group col-md-4 datediv{{random_exr_id}}" >
            <label for="" class="col-sm-12 col-form-label">From:<span class="reqd">*</span></label>
            <div class="col-sm-12">
                <?php echo form_input("leave_from_date[]", isset($users->from_date) ? set_value('leave_from_date', $users->from_date) : set_value('leave_from_date'), 'placeholder="dd-mm-yyyy" id="leave_more_from_datepicker{{random_exr_id}}"  class="datepicker-here form-control validate[required]" '); ?>
                <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
                </div>
                <span class="error"><?php echo form_error('emp_phy_details_date'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4 datediv{{random_exr_id}}" >
            <label for="" class="col-sm-12 col-form-label">To:<span class="reqd">*</span></label>
            <div class="col-sm-12">
            <?php echo form_input("leave_to_date[]", isset($users->to_date) ? set_value('leave_to_date', $users->to_date) : set_value('leave_to_date'), 'placeholder="dd-mm-yyyy"  id="leave_more_to_datepicker{{random_exr_id}}" class="datepicker-here form-control  validate[required]" '); ?>
            <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
            </div>
            <span class="error"><?php echo form_error('emp_phy_details_date'); ?></span>
            </div>
        </div>
    </div>
    <div class="row datediv{{random_exr_id}}">
        <div class="form-group col-md-4">
            <label for="" class="col-sm-12 col-form-label">  Duration(In Days)   <span class="reqd">*</span></label>
            <div class="col-sm-12">
            <?php echo form_input("duration[]", isset($users->duration) ? set_value('duration', $users->duration) : set_value('duration'), 'readonly placeholder="Duration(In Days)"  id="leave_duration{{random_exr_id}}" class=" form-control  validate[required]" '); ?>
            <span class="error"><?php echo form_error('des_cat_id'); ?></span>
            </div> 
        </div>
    </div>

 </script>
<!-- ============================================ Leave Template End ==============================================-->
<!-- ========================================= All Posting Template Start =========================================-->
<script id="service_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_service_more"  id="delete_wexp_service_more{{random_exr_id}}" >
    <div class="delete_more_button" style="display:none;" id="service_more_1_{{random_exr_id}}">
    <a class="btn btn-primary" id="remove_wexp_service_more{{random_exr_id}}" class="remove_wexp_service_more{{random_exr_id}} href="javascript:"> Delete</a>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label for="" class="col-sm-12 col-form-label">  Designation   <span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_input("all_designation[]", '', 'placeholder="Designation" id="post_all_{{random_exr_id}}"  class="form-control typeahead" '); ?>
                <span class="error"><?php echo form_error('all_designation'); ?></span>
                <input type="hidden" value="" name="alldesignationid[]" id="post_all_id_{{random_exr_id}}">
            </div> 
        </div>
        <div class="form-group col-md-4" style="display:none;" id="subject_div_{{random_exr_id}}">
            <label for="" class="col-sm-12 col-form-label">  Subject   <span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_dropdown("all_subjectid[]", array("" => "Select") + subject_lists(), isset($users->all_subjectid) ? set_value('all_subjectid', $users->all_subjectid) : set_value('all_subjectid'), 'id="allsubject_{{random_exr_id}}" data-id="c" class="form-control "  '); ?>
                <span class="error"><?php echo form_error('all_subjectid'); ?></span> 
            </div>
        </div>
    </div>
    <div class="row"> 
        <div class="form-group col-md-4" >
            <label for="" class="col-sm-12 col-form-label">    Place of Posting <span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_dropdown("all_role_id[]", array("" => "Select") + role_lists(), '', 'id="role_id_all_{{random_exr_id}}" onchange="processRegionalljoiningDiv({{random_exr_id}})"  class="form-control "  '); ?>
                <span class="error"><?php echo form_error('all_role_id'); ?></span> 
            </div>
        </div>
        <div class="form-group col-md-4" id="region_div_all_{{random_exr_id}}" style="display:none;">
            <label for="" class="col-sm-12 col-form-label" id="all_region_label_{{random_exr_id}}">Regions<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_dropdown("region_id_all[]", array("" => "Select") + region_lists(), '', 'class="form-control " onchange="processSchoolalljoiningDiv({{random_exr_id}});"  id="region_id_all_{{random_exr_id}}" ');    ?>
                <span class="error"><?php echo form_error('region_id_all'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4" id="school_div_all_{{random_exr_id}}" style="display:none;">
            <label for="" class="col-sm-12 col-form-label">Schools<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_dropdown("school_id_all[]", array("" => "Select") + school_lists(), '', 'class="form-control "  id="school_id_all_{{random_exr_id}}" data-id="c" onchange="allschcode({{random_exr_id}})" '); ?>
                <span class="error"><?php echo form_error('school_id_all'); ?></span
            </div>
            </div>
        </div>
        <div class="form-group col-md-4" id="section_div_all_{{random_exr_id}}" style="display:none;">
            <label for="" class="col-sm-12 col-form-label">Section<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_dropdown("section_id_all[]", array("" => "Select") + section_lists(), '', 'class="form-control "  id="section_all_{{random_exr_id}}" '); ?>
                <span class="error"><?php echo form_error('section_id_all'); ?></span>
            </div>
        </div>
    
    </div>
    <div class="row">
        <div class="form-group col-md-4" id="kvcode_div_all_{{random_exr_id}}" >
            <label for="" class="col-sm-12 col-form-label">KV Code:<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_input("all_kvcode[]", '{{allposting.all_kvcode}}', 'readonly class="form-control" id="kvcode_all_{{random_exr_id}}" '); ?>
                <span class="error"><?php echo form_error('all_kvcode'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4" id="shift_div_all_{{random_exr_id}}" style="display:none;" >
            <label for="" class="col-sm-12 col-form-label">Shift<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_dropdown("all_shift[]", array("" => "Select Shift") + shift(), isset($users->role_id) ? set_value('role_id', $users->role_id) : set_value('role_id'), 'id="all_shift_{{random_exr_id}}" class="form-control"  '); ?>
                <span class="error"><?php echo form_error('all_shift'); ?></span> 
            </div>
        </div>
        <div class="form-group col-md-4" id="station_div_all_{{random_exr_id}}" style="display:none;" >
            <label for="" class="col-sm-12 col-form-label">NE/Hard/Very Hard Station:<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_input("all_station[]", isset($users->all_station) ? set_value('all_station', $users->all_station) : set_value('all_station'), 'readonly  placeholder="NE/Hard/Very Hard Station" id="all_station_{{random_exr_id}}"  class="numericOnly form-control" '); ?>
                <span class="error"><?php echo form_error('all_station'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4" >
            <label for="" class="col-sm-12 col-form-label">From:<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_input("all_fromdate[]", '{{allposting.s_from}}', 'placeholder="dd-mm-yyyy" id="service_more_from_datepicker{{random_exr_id}}"  class="datepicker-here form-control" '); ?>
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <span class="error"><?php echo form_error('all_fromdate'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4" >
            <label for="" class="col-sm-12 col-form-label">To:<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_input("all_todate[]", '{{allposting.s_to}}', 'placeholder="dd-mm-yyyy"  id="service_more_to_datepicker{{random_exr_id}}" class="datepicker-here form-control" '); ?>
                <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
                </div>
                <span class="error"><?php echo form_error('all_todate'); ?></span>
            </div>
         </div>
    <!--=========================== Added Trail Base End 21062019 ============================-->
        <div class="form-group col-md-4" >
            <label for="" class="col-sm-12 col-form-label">Whether Appointed on Trial Basis<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_dropdown("all_appoint_trail[]", array("" => "Select") + single_parent(), isset($users->all_appoint_trail) ? set_value('all_appoint_trail', $users->all_appoint_trail) : set_value('all_appoint_trail'), 'onchange="enDetailsTrialJoin(this.id);" id="enDetails_Trial_Join_{{random_exr_id}}" class="form-control"  '); ?>
                <span class="error"><?php echo form_error('all_appoint_trail'); ?></span> 
            </div>
        </div>
        <div class="form-group col-md-4" id="details_join_trial_start_{{random_exr_id}}" style="display: none;">
            <label for="" class="col-sm-12 col-form-label">Trial Start Date:<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_input("all_trailsdate[]", '{{allposting.alltrailstart}}', 'placeholder="dd-mm-yyyy" id="alltrailstart{{random_exr_id}}"  class="datepicker-here form-control common_datepicker" '); ?>
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <span class="error"><?php echo form_error('all_trailsdate'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4" id="details_join_trial_end_{{random_exr_id}}"  style="display: none;">
            <label for="" class="col-sm-12 col-form-label">Trial Completion Date:<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_input("all_trailedate[]", '{{allposting.alltrailend}}', 'placeholder="dd-mm-yyyy" id="alltrailend{{random_exr_id}}" class="datepicker-here form-control common_datepicker" '); ?>
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <span class="error"><?php echo form_error('all_trailedate'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4" id="details_regular_{{random_exr_id}}" style="display: none;">
            <label for="" class="col-sm-12 col-form-label">Date of Regularization:<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_input("all_regulardate[]", '{{allposting.alltrailregular}}', 'placeholder="dd-mm-yyyy" id="alltrailregular{{random_exr_id}}"  class="datepicker-here form-control common_datepicker" '); ?>
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <span class="error"><?php echo form_error('all_regulardate'); ?></span>
            </div>
        </div>
    <!--=========================== Added Trail Base End 21062019 ============================-->
    
        <div class="form-group col-md-4" >
            <label for="" class="col-sm-12 col-form-label"> Ground of Transfer(Exit):<span class="reqd"></span></label>
            <div class="col-sm-12">
                <?php echo form_dropdown("transfer_ground[]", array("" => "Select") + transfer_reason(), isset($users->transfer_ground) ? set_value('transfer_ground', $users->transfer_ground) : set_value('transfer_ground'), 'id="groundtransfer_{{random_exr_id}}" class="form-control"  '); ?>
                <span class="error"><?php echo form_error('transfer_ground'); ?></span>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="" class="col-sm-12 col-form-label">Panel/Vacancy Year:</label>
            <div class="col-sm-12">
            <?php echo form_dropdown("all_panel_year[]", array("" => "Select Year") + panel_years(), isset($users->all_panel_year) ? set_value('all_panel_year', $users->all_panel_year) : set_value('all_panel_year'), 'id="all_panel_year_{{random_exr_id}}" class="form-control"'); ?>
            <span class="error"><?php echo form_error('all_panel_year'); ?></span></span>
            </div>
        </div>
    </div>
    </div>
</script>
<!-- ========================================= All Posting Template End =========================================-->
<!-- ========================================= Disciplinary Template Start ======================================-->
<script id="discp_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_discp_more"  id="delete_wexp_discp_more{{random_exr_id}}" >
    <div class="delete_more_button" style="display:none;" id="discp_more_1_{{random_exr_id}}">
    <a class="btn btn-primary" id="remove_wexp_discp_more{{random_exr_id}}" class="remove_wexp_discp_more{{random_exr_id}} href="javascript:void(0)"> Delete</a>
    </div>
    <div class="row">
     <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Whether Any Disciplinary Case is Contemplated / Pending:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("is_desciplinary_case[]", array("" => "Select") + single_parent(), isset($users->is_desciplinary_case) ? set_value('is_desciplinary_case', $users->is_desciplinary_case) : set_value('is_desciplinary_case'), 'id="disciplinary_case_val_{{random_exr_id}}" onchange="processDisciplinary(this.id);" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('is_desciplinary_case'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" id="disciplinary_div_{{random_exr_id}}" style="display:none;">
                <label for="" class="col-sm-12 col-form-label">Disciplinary Action/Dept. Proceedings:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("disciplinary_action_name[]", array("" => "Select") + disciplinary_action(), isset($users->disciplinary_action_name) ? set_value('disciplinary_action_name', $users->role_id) : set_value('disciplinary_action_name'), 'id="disciplinary_action_name_{{random_exr_id}}" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('disciplinary_action_name'); ?></span> 
                </div>
            </div>
            <div class="form-group col-md-4" id="disciplinaryfrom_div_{{random_exr_id}}" style="display:none;">
                <label for="" class="col-sm-12 col-form-label">From:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                <?php echo form_input("from_date[]", '{{disciplinary_detail.from_date}}', 'placeholder="dd-mm-yyyy" id="disc_from_datepicker{{random_exr_id}}"  class="datepicker-here form-control validate[required]" '); ?>
                <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
                </div>
                <span class="error"><?php echo form_error('from_date'); ?></span>
            </div>

            </div>
            <div class="form-group col-md-4" id="disciplinaryto_div_{{random_exr_id}}" style="display:none;" >
                <label for="" class="col-sm-12 col-form-label">To:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                <?php echo form_input("to_date[]", '{{disciplinary_detail.to_date}}', 'placeholder="dd-mm-yyyy"  id="disc_to_datepicker{{random_exr_id}}" class="datepicker-here form-control  validate[required]" '); ?>
                <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
                </div>
                <span class="error"><?php echo form_error('to_date'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Dies Non<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("is_dies_non[]", array("" => "Select") + single_parent(), isset($users->is_dies_non) ? set_value('is_dies_non', $users->is_dies_non) : set_value('is_dies_non'), 'onchange="enDiesNon(this.id);" id="enDies_Non_{{random_exr_id}}" class="form-control validate[required] "  '); ?>
                    <span class="error"><?php echo form_error('is_dies_non'); ?></span> 
                </div>
            </div>
            <div class="form-group col-md-4" id="dies_non_start_{{random_exr_id}}" style="display: none;">
                <label for="" class="col-sm-12 col-form-label">Dies Non Start Date:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("dies_non_start_date[]", '{{disciplinary_detail.dies_non_start_date}}', 'placeholder="dd-mm-yyyy" id="discp_more_from_datepicker{{random_exr_id}}" class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <span class="error"><?php echo form_error('dies_non_start_date'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4" id="dies_non_end_{{random_exr_id}}"  style="display: none;">
                <label for="" class="col-sm-12 col-form-label">Dies Non End Date:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("dies_non_end_date[]", '{{disciplinary_detail.dies_non_end_date}}', 'placeholder="dd-mm-yyyy" id="discp_more_to_datepicker{{random_exr_id}}" class="datepicker-here form-control common_datepicker validate[required]" '); ?>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <span class="error"><?php echo form_error('dies_non_end_date'); ?></span>
                </div>
            </div>
            <!--=========================== Added Trail Base End 21062019 ============================-->
    </div>
    </div>
</script>
<!-- ========================================= Disciplinary Template End ======================================-->
<script>

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
    $('#present_post_designation').typeahead(null, {
        name: 'sample_data',
        display: 'name',
        source: sample_data,
        limit: 10,
        templates: {
            suggestion: Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
        }
    });
    $('#initial_post_designation').typeahead(null, {
        name: 'sample_data',
        display: 'name',
        source: sample_data,
        limit: 10,
        templates: {
            suggestion: Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
        }
    });

    $('#present_post_designation').on('typeahead:selected', function (evt, item) {
        var present_post_designation = $("#present_post_designation").val();
        if (present_post_designation != '') {
            processPresentDesignationAjaxCall(present_post_designation);
        }
    });
    $('#initial_post_designation').on('typeahead:selected', function (evt, item) {
        var initial_post_designation = $("#present_post_designation").val();
        if (initial_post_designation != '') {
            processInitialDesignationAjaxCall(initial_post_designation);
        }
    });


    $("#present_post_designation").blur(function () {
        var present_post_designation = $("#present_post_designation").val();
        if (present_post_designation != '') {
            processPresentDesignationAjaxCall(present_post_designation);
        }
    });

    $("#initial_post_designation").blur(function () {
        var initial_post_designation = $("#initial_post_designation").val();
        if (initial_post_designation != '') {
            processInitialDesignationAjaxCall(initial_post_designation);
        }
    });

    function processPresentDesignationAjaxCall(present_post_designation) {
        $.ajax({
            url: base_url + 'autocomplete/get_designation',
            data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + present_post_designation,
            type: 'POST',
            success: function (response) {
                    if(response != false) {
                        $.each(response, function (key, value) {
                            $("#present_post_designation").val(value);
                            $("#present_post_id").val(key);
                            if (key == '5' || key == '6' || key == '7' || key == '8') {
                                $("#subject_div_present").css("display", "block");
                            }else {
                                $("#subject_div_present").css("display", "none");
                            }
                        });
                    }else {
                    $("#present_post_designation").val('');
                        alert('Designation is not exist. Please select correct designation.');
                    $("#subject_div_present").css("display", "none");
                }
            }
        });
    }

    function processInitialDesignationAjaxCall(initial_post_designation) {
        $.ajax({
            url: base_url + 'autocomplete/get_designation',
            data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + initial_post_designation,
            type: 'POST',
            success: function (response) {
                if (response != false) {
                    $.each(response, function (key, value) {
                        $("#initial_post_designation").val(value);
                        $("#initial_post_id").val(key);
                        if (key == '5' || key == '6' || key == '7' || key == '8') {
                            $("#subject_div_initial").css("display", "block");
                        }else{
                            $("#subject_div_initial").css("display", "none");
                        }
                    });
                }else {
                    $("#initial_post_designation").val('');
                    alert('Designation is not exist. Please select correct designation.');
                    $("#subject_div_initial").css("display", "none");
                }
            }
        });
    }
 

 
    
    function processZoneDiv() {
        var zone_attr = $("#zonal_val").val();
        if (zone_attr != '' && zone_attr == '1') {
            $("#zone_div").css("display", "block");
        }
        else {
            $("#zone_div").css("display", "none");
            $('#initial_zone').val('');
        }
    }
    function processiszonaldiv() {
        var zone_attr = $("#specialdriveval").val();
        if (zone_attr != '' && zone_attr == '1') {
            $("#zone_div").css("display", "block");
            $('#initial_zone').val('13');
            $("#iszonaldiv").css("display", "none");
        }
        else {
            $("#iszonaldiv").css("display", "block");
        }
    }
    function processliendiv() {
        var lienval = $("#lienval").val();
        if (lienval != '' && lienval == '1') {
            $("#liensdiv").css("display", "block");
            $("#lienediv").css("display", "block");
        }
        else {
            $(".liensdiv").css("display", "none");
            $(".lienediv").css("display", "none");
        }
    }
    // Added by me
    function enFirstTrialJoin() {
        var en_first = $("#enFirst_Trial_Join").val();
        if (en_first !== '' && en_first === '1') {
            $("#first_join_trial_start").css("display", "block");
            $("#first_join_trial_end").css("display", "block");
            $("#first_regulardate").css("display", "block");
        }
        else {
            $("#first_join_trial_start").css("display", "none");
            $("#first_join_trial_end").css("display", "none");
            $("#first_regulardate").css("display", "none");
        }
    }
    // Added by me
    function enPresentTrialJoin() {
        var en_present = $("#enPresent_Trial_Join").val();
        if (en_present !== '' && en_present === '1') {
            $("#present_join_trial_start").css("display", "block");
            $("#present_join_trial_end").css("display", "block");
            $("#present_regulardate").css("display", "block");
        }
        else {
            $("#present_join_trial_start").css("display", "none");
            $("#present_join_trial_end").css("display", "none");
            $("#present_regulardate").css("display", "none");
        }
    }
    // Added by me
    function enDetailsTrialJoin(dtlId) {
        var randKey = dtlId.replace('enDetails_Trial_Join_','');
        var en_details = $("#"+dtlId).val();
        if (en_details !== '' && en_details === '1') {
            $("#details_join_trial_start_"+randKey).css("display", "block");
            $("#details_join_trial_end_"+randKey).css("display", "block");
            $("#details_regular_"+randKey).css("display", "block");
        }
        else {
            $("#details_join_trial_start_"+randKey).css("display", "none");
            $("#details_join_trial_end_"+randKey).css("display", "none");
            $("#details_regular_"+randKey).css("display", "none");
        }
    }
    // Added by me
    function enDiesNon(dtlId) {
        var randKey = dtlId.replace('enDies_Non_','');
        var en_details = $("#"+dtlId).val();
        if (en_details !== '' && en_details === '1') {
            $("#dies_non_start_"+randKey).css("display", "block");
            $("#dies_non_end_"+randKey).css("display", "block");
        }
        else {
            $("#dies_non_start_"+randKey).css("display", "none");
            $("#dies_non_end_"+randKey).css("display", "none");
        }
    }
    
    // Added By Me notional_date_div / notional_date
    function getNotionalDate(NoId){
        var is_notional = $("#notional_date").val();
        if (is_notional !== '' && is_notional === '6') {
            $(".notional_date_div").css("display", "block");
        }
        else {
            $(".notional_date_div").css("display", "none");
        }
    }

    function processRegionInitialDiv() {
        var role_id = $("#role_id_initial").val();
        $('#school_div_initial').css("display", "none");
        $('#c_school_initial').val('');
        $('#section_div_initial').css("display", "none");
        $('#c_section_initial').val('');
        $("#shift_div_initial").css("display", "none");
        $('#shift_initial').val('');
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
                        $("#initial_zone").val('');
                    }
                    else if (role_id == '4') {
                        $("#initial_region_label").html("ZIET<span class='reqd'>*</span>");
                        $("#initial_zone").val('');
                    } else {
                        $("#initial_region_label").html("Regions<span class='reqd'>*</span>");
                        $("#initial_zone").val('');
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
                        $('#initial_zone').val('12');
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
                        $('#initial_zone').val(result[1]);
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
                        $('#initial_zone').val(result[1]);
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
                        $('#initial_zone').val(result[1]);
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
    
   
    
    function processRegionPresentDiv() {
        var role_id = $("#role_id_present").val();
        $('#school_div_present').css("display", "none");
        $('#c_school_present').val('');
        $('#section_div_present').css("display", "none");
        $('#c_section_present').val('');
        $("#shift_div_present").css("display", "none");
        $('#shift_present').val('');
        $('#kvcode_present').val('');
        if (role_id != '') {
            $.ajax({
                url: base_url + 'admin/users/get_region',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + role_id,
                type: 'POST',
                success: function (response) {
                    $('#c_region_present').html(response);
                    $('#region_div_present').css("display", "block");
                    if (role_id == '2') {
                        $("#present_region_label").html("Units<span class='reqd'>*</span>");
                        $("#present_zone").val('');
                    }
                    else if (role_id == '4') {
                        $("#present_region_label").html("ZIET<span class='reqd'>*</span>");
                        $("#present_zone").val('');
                    } else {
                        $("#present_region_label").html("Regions<span class='reqd'>*</span>");
                        $("#present_zone").val('');
                    }
                }
            });
        }else{
            $('#region_div_present').css("display", "none");
        }
       
    }
    
    function processSchoolPresentDiv() {
        var region_id = $("#c_region_present").val();
        var role_id = $("#role_id_present").val();
        if (region_id != '') {
            if(role_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_school',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#school_div_present').css("display", "block");
                        $('#section_div_present').css("display", "none");
                        $('#c_school_present').html(response);
                    }
                });
            }else if(role_id=='2' && region_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_section',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#kvcode_present').val('1917');
                        $('#present_zone').val('12');
                        $('#section_div_present').css("display", "block");
                        $('#school_div_present').css("display", "none");
                        $('#c_section_present').html(response);
                    }
                });
            }else if(role_id=='2'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_present').val(result[0].trim());
                        $('#present_zone').val(result[1]);
                        $('#school_div_present').css("display", "none");
                        $('#section_div_present').css("display", "none");
                        
                        
                    }
                });
            }else if(role_id=='3'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_present').val(result[0].trim());
                        $('#present_zone').val(result[1]);
                        $('#school_div_present').css("display", "none");
                        $('#section_div_present').css("display", "none");
                    }
                });
            }else if(role_id=='4'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_present').val(result[0].trim());
                        $('#present_zone').val(result[1]);
                        $('#school_div_present').css("display", "none");
                        $('#section_div_present').css("display", "none");
                    }
                });
            }else{
                $('#school_div_present').css("display", "none");
                $('#section_div_present').css("display", "none");
            }
            
        }
    }
    
    function presentschcode() {
        var school_id_present = $('#c_school_present').val();
        if (school_id_present != '') {
            $.ajax({
                url: base_url + 'admin/users/get_schoolcode',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&s_id=' + school_id_present,
                type: 'POST',
                success: function (response) {
                    var result = response.split('#');
                    $('#kvcode_present').val(result[0].trim());
                    $('#present_zone').val(result[1].trim());
                    $("#shift_div_present").css("display", "block");
                    $("#kvcode_div_present").css("display", "block");
                }
            });
        }

    }
    
    function processRegionalljoiningDiv(ids) {
        var role_id = $("#role_id_all_"+ids).val();
        $('#school_div_all_'+ids).css("display", "none");
        $('#school_id_all_'+ids).val('');
        $('#section_div_all_'+ids).css("display", "none");
        $('#section_all_'+ids).val('');
        $("#shift_div_all_"+ids).css("display", "none");
        $('#all_shift_'+ids).val('');
        $('#kvcode_all_'+ids).val('');
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
            $('#region_div_initial').css("display", "none");
        }
       
    }
    
    function processSchoolalljoiningDiv(ids) {
        var region_id = $("#region_id_all_"+ids).val();
        var role_id = $("#role_id_all_"+ids).val();
        if (region_id != '') {
            if(role_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_school',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#school_div_all_'+ids).css("display", "block");
                        $('#section_div_all_'+ids).css("display", "none");
                        $('#school_id_all_'+ids).html(response);
                    }
                });
            }else if(role_id=='2' && region_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_section',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#kvcode_all_'+ids).val('1917');
                        $('#section_div_all_'+ids).css("display", "block");
                        $('#school_div_all_'+ids).css("display", "none");
                        $('#section_all_'+ids).html(response);
                    }
                });
            }else if(role_id=='2'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_all_'+ids).val(result[0].trim());
                        $('#school_div_all_'+ids).css("display", "none");
                        $('#section_div_all_'+ids).css("display", "none");
                        
                        
                    }
                });
            }else if(role_id=='3'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_all_'+ids).val(result[0].trim());
                        $('#school_div_all_'+ids).css("display", "none");
                        $('#section_div_all_'+ids).css("display", "none");
                    }
                });
            }else if(role_id=='4'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_all_'+ids).val(result[0].trim());
                        $('#school_div_all_'+ids).css("display", "none");
                        $('#section_div_all_'+ids).css("display", "none");
                    }
                });
            }else{
                $('#school_div_all_'+ids).css("display", "none");
                $('#section_div_all_'+ids).css("display", "none");
            }
            
        }
    }
    
    function allschcode(ids) {
        var school_id_all = $('#school_id_all_'+ids).val();
        if (school_id_all != '') {
            $.ajax({
                url: base_url + 'admin/users/get_schoolcode',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&s_id=' + school_id_all,
                type: 'POST',
                success: function (response) {
                    var result = response.split('#');
                    //alert(result[0]);
                    $('#kvcode_all_'+ids).val(result[0].trim());
                    $("#shift_div_all_"+ids).css("display", "block");
                    $("#kvcode_div_all_"+ids).css("display", "block");
                    if(result[2].trim()=='H')
                    {
                        $('#all_station_'+ids).val('Hard');   
                        $("#station_div_all_"+ids).css("display", "block");
                    }
                    else if(result[2].trim()=='V')
                    {
                        $('#all_station_'+ids).val('Very Hard');
                        $("#station_div_all_"+ids).css("display", "block");
                    }
                    else if(result[2].trim()=='Ner')
                    {
                        $('#all_station_'+ids).val('Ner');
                        $("#station_div_all_"+ids).css("display", "block");
                    }else{
                        $("#station_div_all_"+ids).css("display", "none");
                    }
                        
                }
            });
        }

    }

    
    //====================================== ADD MORE LEAVE FUNCTION START  ==================================//
    var random_leave_more_id = Date.now();
    $('#addmore_leave').click(function () {
        random_leave_more_id = Date.now();
        RenderLeaveMore(random_leave_more_id);
    });

    var leave_details =<?php echo json_encode(isset($LeaveData) ? $LeaveData: ''); ?>;
    if (leave_details!='') {
        $.each(leave_details, function (key, leave_detail) {
            RenderLeaveMore(leave_detail.id, leave_detail);
            $("#leave_type_" + leave_detail.id).val(leave_detail.leave_type).trigger("change"); 
            $("#leave_more_from_datepicker" + leave_detail.id).val(leave_detail.from_date);
            $("#leave_more_to_datepicker" + leave_detail.id).val(leave_detail.to_date);
            $("#leave_duration" + leave_detail.id).val(leave_detail.duration);
        });
    } else {
        leave_more = {};
        RenderLeaveMore(random_leave_more_id, leave_more);
    }
    

    function RenderLeaveMore(random_leave_more_id, leave_more) {
        var source = $("#leave_more_template").html();
        var wexp_count = $(".delete_wexp_leave_more").length;
        Mustache.parse(source);
        var rendered = Mustache.render(source, {
            random_exr_id: random_leave_more_id,
            leave_detail: leave_more,
        });
        $("#containner_leave_more").append(rendered);
        if (wexp_count != 0) {
            $("#leave_more_1_" + random_leave_more_id).css("display", "block");
        }
        delete_leave_more(random_leave_more_id);
        //$("#leave_more_from_datepicker" + random_leave_more_id).datepicker();
        //$("#leave_more_to_datepicker" + random_leave_more_id).datepicker();
        $("#leave_more_from_datepicker" + random_leave_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
           
                var date = $('#leave_more_from_datepicker' + random_leave_more_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#leave_more_to_datepicker' + random_leave_more_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                var dt1 = startDate;
                var dt2 = endDate;
                var duration_output = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
               
                $('#leave_duration' + random_leave_more_id).val('');
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#leave_more_from_datepicker' + random_leave_more_id).val('');
                    $('#leave_more_to_datepicker' + random_leave_more_id).val('');
                }  else if (startDate != '' && endDate != '' && startDate != 'Invalid Date' && endDate != 'Invalid Date') {
                        var final_duration_output = (duration_output + 1);
                        $('#leave_duration'+ random_leave_more_id).val(final_duration_output);
                }
            }
        });
        $("#leave_more_to_datepicker" + random_leave_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#leave_more_from_datepicker' + random_leave_more_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#leave_more_to_datepicker' + random_leave_more_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                var dt1 = startDate;
                var dt2 = endDate;
                var duration_output = Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
                $('#leave_duration' + random_leave_more_id).val('');
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#leave_more_from_datepicker' + random_leave_more_id).val('');
                    $('#leave_more_to_datepicker' + random_leave_more_id).val('');
                } else if (startDate != '' && endDate != '' && startDate != 'Invalid Date' && endDate != 'Invalid Date') {
                        var final_duration_output = (duration_output + 1);
                        $('#leave_duration'+ random_leave_more_id).val(final_duration_output);
                }
              
            }

        });
    }

    function delete_leave_more(random_exr_id) {

        $("#remove_wexp_leave_more" + random_exr_id).click(function () {
            var wexp_count = $(".delete_wexp_leave_more").length;
            var wexp_id = $(this).attr("wexpid");
            if (wexp_id) {
                var confirm = window.confirm('Are you sure want to delete?');
                if (confirm) {
                    $("#delete_wexp_leave_more" + wexp_id).remove();
                    generate("success", "Details deleted successfully");
                    location_reload();
                    if (wexp_count == 1) {
                        equa = {};
                        RenderLeaveMore(random_exr_id, equa);
                    }
                }
            } else {
                if (wexp_count > 1) {
                    $("#delete_wexp_leave_more" + random_exr_id).remove();
                }

            }

        });
    }
    //====================================== ADD MORE LEAVE FUNCTION END  ==================================//
    
    //======================================= ADD MORE ALL POSTING START ====================================//
    var random_service_more_id = Date.now();
    $('#addmore').click(function () {
        random_service_more_id = Date.now();
        RenderServiceMore(random_service_more_id);
    });
    
    var allservice_details =<?php echo json_encode(isset($allpost) ? $allpost: ''); ?>;
    //console.log(prom_details);
    if (allservice_details!='') {
        $.each(allservice_details, function (key, all_joining) {
            RenderServiceMore(all_joining.id, all_joining);
            $("#post_all_" + all_joining.id).val(all_joining.designationname);
            $("#post_all_id_" + all_joining.id).val(all_joining.all_designationid);
            if(all_joining.cat_id=='1')
            {
                $("#subject_div_" + all_joining.id).css("display", "block");
                $("#allsubject_" + all_joining.id).val(all_joining.all_subjectid);
            }
            $("#role_id_all_" + all_joining.id).val(all_joining.all_place);
            if (all_joining.all_unit!='') {
                $("#region_div_all_"+ all_joining.id).css("display", "block");
                if(all_joining.all_place==2){
                    $('#all_region_label_'+all_joining.id).html("Units<span class='reqd'>*</span>");
                }else if(all_joining.all_place==4){
                    $('#all_region_label_'+all_joining.id).html("ZEIT<span class='reqd'>*</span>");
                }else{
                    $('#all_region_label_'+all_joining.id).html("Region<span class='reqd'>*</span>");
                }
                $("#region_id_all_" + all_joining.id).val(all_joining.all_unit);   
                if (all_joining.all_school!=0 ) { 
                    $("#school_div_all_"+ all_joining.id).css("display", "block");
                    $("#school_id_all_" + all_joining.id).val(all_joining.all_school).trigger("change");     
                }
                if (all_joining.all_section!=0 ) { 
                    $("#section_div_all_"+ all_joining.id).css("display", "block");
                    $("#section_all_" + all_joining.id).val(all_joining.all_section).trigger("change");     
                }
            }
            $("#all_shift_" + all_joining.id).val(all_joining.all_shift);
            $("#all_station_" + all_joining.id).val(all_joining.all_station);
            $("#enDetails_Trial_Join_" + all_joining.id).val(all_joining.all_appoint_trail).trigger("change");
            $("#groundtransfer_" + all_joining.id).val(all_joining.transfer_ground).trigger("change");
            $("#all_panel_year_" + all_joining.id).val(all_joining.all_panel_year).trigger("change");
        });
    } else {
        service_more = {};
        RenderServiceMore(random_service_more_id, service_more);
    }
    
    //  =========================   Add Service More Tab   ==========================// 
    function RenderServiceMore(random_service_more_id, service_more) {
        var source = $("#service_more_template").html();
        var wexp_count = $(".delete_wexp_service_more").length;
        Mustache.parse(source);
        var rendered = Mustache.render(source, {
            random_exr_id: random_service_more_id,
            allposting: service_more,
        });
        $("#containner_service_more").append(rendered);
        if (wexp_count != 0) {
            $("#service_more_1_" + random_service_more_id).css("display", "block");
        }
        $('#post_all_' + random_service_more_id).typeahead(null, {
            name: 'sample_data',
            display: 'name',
            source: sample_data,
            limit: 10,
            templates: {
                suggestion: Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
            }
        });
        $('#post_all_' + random_service_more_id).on('typeahead:selected', function (evt, item) {
            var post_all_designation = $('#post_all_' + random_service_more_id).val();
            if (post_all_designation != '') {
                $.ajax({
                    url: base_url + 'autocomplete/get_designation',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + post_all_designation,
                    type: 'POST',
                    success: function (response) {
                        if (response != false) {
                            $.each(response, function (key, value) {
                                $('#post_all_' + random_service_more_id).val(value);
                                $('#post_all_id_' + random_service_more_id).val(key);
                                if (key == '5' || key == '6' || key == '7' || key == '8') {
                                    $('#subject_div_' + random_service_more_id).css("display", "block");
                                }
                                else {
                                    $('#subject_div_' + random_service_more_id).css("display", "none");
                                }
                            });
                        }
                        else {
                            $('#post_all_' + random_service_more_id).val('');
                            alert('Designation is not exist. Please select correct designation.');
                            $('#subject_div_' + random_service_more_id).css("display", "none");
                        }

                    }
                });
            }
        });
        $('#post_all_' + random_service_more_id).blur(function () {
            var post_all_designation = $('#post_all_' + random_service_more_id).val();
            if (post_all_designation != '') {
                $.ajax({
                    url: base_url + 'autocomplete/get_designation',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&designation=' + post_all_designation,
                    type: 'POST',
                    success: function (response) {
                        if (response != false) {
                            $.each(response, function (key, value) {
                                $('#post_all_' + random_service_more_id).val(value);
                                $('#post_all_id_' + random_service_more_id).val(key);
                                if (key == '5' || key == '6' || key == '7' || key == '8') {
                                    $('#subject_div_' + random_service_more_id).css("display", "block");
                                }
                                else {
                                    $('#subject_div_' + random_service_more_id).css("display", "none");
                                }
                            });
                        }
                        else {
                            $('#post_all_' + random_service_more_id).val('');
                            alert('Designation is not exist. Please select correct designation.');
                            $('#subject_div_' + random_service_more_id).css("display", "none");
                        }

                    }
                });
            }
        });
        delete_service_more(random_service_more_id);
        $("#service_more_from_datepicker" + random_service_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#service_more_from_datepicker' + random_service_more_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#service_more_to_datepicker' + random_service_more_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#service_more_from_datepicker' + random_service_more_id).val('');
                    $('#service_more_to_datepicker' + random_service_more_id).val('');
                }
            }
        });
        $("#service_more_to_datepicker" + random_service_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#service_more_from_datepicker' + random_service_more_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#service_more_to_datepicker' + random_service_more_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#service_more_from_datepicker' + random_service_more_id).val('');
                    $('#service_more_to_datepicker' + random_service_more_id).val('');
                }
            }

        });
        $("#alltrailstart" + random_service_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
        });
        $("#alltrailend" + random_service_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
        });
        $("#alltrailregular" + random_service_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
        });
        $("#panel_date_datepicker" + random_service_more_id).datepicker();
    }
    //  =========================   Delete Service More Tab   ==========================//
    function delete_service_more(random_exr_id) {

        $("#remove_wexp_service_more" + random_exr_id).click(function () {
            var wexp_count = $(".delete_wexp_service_more").length;
            var wexp_id = $(this).attr("wexpid");
            if (wexp_id) {
                var confirm = window.confirm('Are you sure want to delete?');
                if (confirm) {
                    $("#delete_wexp_service_more" + wexp_id).remove();
                    generate("success", "Details deleted successfully");
                    location_reload();
                    if (wexp_count == 1) {
                        equa = {};
                        RenderServiceMore(random_exr_id, equa);
                    }
                }
            } else {
                if (wexp_count > 1) {
                    $("#delete_wexp_service_more" + random_exr_id).remove();
                }

            }

        });
       
    }
    //======================================= ADD MORE ALL POSTING END ====================================//
    
    //==================================== ADD MORE DISCIPLINARY START ====================================//
    var random_discp_more_id = Date.now();
    $('#addmore_discp').click(function () {
        random_discp_more_id = Date.now();
        RenderDiscpMore(random_discp_more_id);
    });

    var disciplinary_details =<?php echo json_encode(isset($DisciplinaryData) ? $DisciplinaryData: ''); ?>;
    if (disciplinary_details!='') {
        $.each(disciplinary_details, function (key, disciplinary_detail) {
            RenderDiscpMore(disciplinary_detail.id, disciplinary_detail);
            $("#disciplinary_case_val_" + disciplinary_detail.id).val(disciplinary_detail.is_desciplinary_case).trigger("change");
            $("#disciplinary_action_name_" + disciplinary_detail.id).val(disciplinary_detail.is_desciplinary_case);
            //$("#disc_from_datepicker" + disciplinary_detail.id).val(disciplinary_detail.from_date);
            //$("#disc_to_datepicker" + disciplinary_detail.id).val(disciplinary_detail.to_date);
            $("#enDies_Non_" + disciplinary_detail.id).val(disciplinary_detail.is_dies_non).trigger("change");
            //$("#discp_more_from_datepicker" + disciplinary_detail.id).val(disciplinary_detail.dies_non_start_date);
            //$("#discp_more_to_datepicker" + disciplinary_detail.id).val(disciplinary_detail.dies_non_end_date);
        });
    } else {
        discp_more = {};
        RenderDiscpMore(random_discp_more_id, discp_more);
    
    }
   
    //  =========================   Add Service More Tab   ==========================// 
    function RenderDiscpMore(random_discp_more_id, discp_more) {
        var source = $("#discp_more_template").html();
        var wexp_count = $(".delete_wexp_discp_more").length;
        Mustache.parse(source);
        var rendered = Mustache.render(source, {
            random_exr_id: random_discp_more_id,
            disciplinary_detail: discp_more,
        });
        $("#containner_discp_more").append(rendered);
        if (wexp_count != 0) {
            $("#discp_more_1_" + random_discp_more_id).css("display", "block");
        }
        delete_discp_more(random_discp_more_id);
        //$("#disc_from_datepicker" + random_discp_more_id).datepicker();
        //$("#disc_to_datepicker" + random_discp_more_id).datepicker();
        //$("#discp_more_from_datepicker" + random_discp_more_id).datepicker();
        //$("#discp_more_to_datepicker" + random_discp_more_id).datepicker();

        
        $("#disc_from_datepicker" + random_discp_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#disc_from_datepicker' + random_discp_more_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#disc_to_datepicker' + random_discp_more_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#disc_from_datepicker' + random_discp_more_id).val('');
                    $('#disc_to_datepicker' + random_discp_more_id).val('');
                }
            }
        });
        $("#disc_to_datepicker" + random_discp_more_id).datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#disc_from_datepicker' + random_discp_more_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#disc_to_datepicker' + random_discp_more_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#disc_from_datepicker' + random_discp_more_id).val('');
                    $('#disc_to_datepicker' + random_discp_more_id).val('');
                }
            }

        });
        
        $("#discp_more_from_datepicker" + random_discp_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#discp_more_from_datepicker' + random_discp_more_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#discp_more_to_datepicker' + random_discp_more_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#discp_more_from_datepicker' + random_discp_more_id).val('');
                    $('#discp_more_to_datepicker' + random_discp_more_id).val('');
                }
            }
        });
        $("#discp_more_to_datepicker" + random_discp_more_id).datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#disc_from_datepicker' + random_discp_more_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#discp_more_to_datepicker' + random_discp_more_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#disc_from_datepicker' + random_discp_more_id).val('');
                    $('#discp_more_to_datepicker' + random_discp_more_id).val('');
                }
            }

        });
        
    }
    //=========================   Delete Service More Tab   ==========================//
    function delete_discp_more(random_exr_id) {

        $("#remove_wexp_discp_more" + random_exr_id).click(function () {
            var wexp_count = $(".delete_wexp_discp_more").length;
            var wexp_id = $(this).attr("wexpid");
            if (wexp_id) {
                var confirm = window.confirm('Are you sure want to delete?');
                if (confirm) {
                    $("#delete_wexp_discp_more" + wexp_id).remove();
                    generate("success", "Details deleted successfully");
                    location_reload();
                    if (wexp_count == 1) {
                        equa = {};
                        RenderDiscpMore(random_exr_id, equa);
                    }
                }
            } else {
                if (wexp_count > 1) {
                    $("#delete_wexp_discp_more" + random_exr_id).remove();
                }

            }

        });
    }
    //==================================== ADD MORE DISCIPLINARY END ====================================//
    
    

    function getschoolcode(ids)
    {
        var schoolid = $('#school_id_all_' + ids).val();
        $.ajax({
            url: base_url + 'admin/users/get_schoolcode',
            data: get_csrf_token_name + '=' + get_csrf_hash + '&s_id=' + schoolid,
            type: 'POST',
            success: function (response) {
                $('#kvcode_all_' + ids).val(response.trim());
                $("#kvcode_div_all_" + ids).css("display", "block");
            }
        });
    }
    function processDisciplinary(proId){
    
        var randKey = proId.replace('disciplinary_case_val_','');
        var pro_details = $("#"+proId).val();
        if (pro_details !== '' && pro_details === '1') {
            $("#disciplinary_div_"+randKey).css("display", "block");
            $("#disciplinaryfrom_div_"+randKey).css("display", "block");
            $("#disciplinaryto_div_"+randKey).css("display", "block");
        }
        else {
            $("#disciplinary_div_"+randKey).css("display", "none");
            $("#disciplinaryfrom_div_"+randKey).css("display", "none");
            $("#disciplinaryto_div_"+randKey).css("display", "none");
        }
    
   }
    function processLeaveType(ids) {
        var leave_type = $('#leave_type_' + ids).val();
        if (leave_type != '' && leave_type == '5') {
            $('.datediv' + ids).css('display', 'none');
        }
        else {
            $('.datediv' + ids).css('display', 'block');
        }
    }
    
    function absorbtionfield()
    {
        var text=$('#absorbtion').val();
        if(text==3 || text==4)
        {
            $('#absorbtiondata').show();
        }else{
            $('#absorbtiondata').hide();
        }
    }
   // To set initial posting
    var id='<?php echo $_GET['EC']; ?>';
    if(id){
        $("#role_id_initial").val("<?php echo $initialpost->initial_place;?>");
        var role_id = '<?php echo $initialpost->initial_place;?>' ;
        var unit = '<?php echo $initialpost->initial_unit;?>';
        if(unit!=0)
        {
            $("#region_div_initial").css("display", "block");
            $("#c_region_initial").val("<?php echo $initialpost->initial_unit;?>");
            if (role_id == '2') {
                $("#initial_region_label").html("Units<span class='reqd'>*</span>");
            }
            else if (role_id == '4') {
                $("#initial_region_label").html("ZIET<span class='reqd'>*</span>");
            } else {
                $("#initial_region_label").html("Regions<span class='reqd'>*</span>");
            }
            var section= '<?php echo $initialpost->initial_section;?>';
            if(section!=0)
            {
                $("#section_div_initial").css("display", "block");
                $("#c_section_initial").val("<?php echo $initialpost->initial_section;?>");
            }
            var school= '<?php echo $initialpost->initial_school;?>';
            if(school!=0)
            {
                $("#school_div_initial").css("display", "block");
                $("#c_school_initial").val("<?php echo $initialpost->initial_school;?>").trigger("change");
            }
        }
        
        $("#specialdriveval").val("<?php echo $initialpost->initial_appoint_specialdrive;?>").trigger("change");
        $("#zonal_val").val("<?php echo $initialpost->initial_appoint_zone;?>").trigger("change");
        $("#enFirst_Trial_Join").val("<?php echo $initialpost->initial_appoint_trail;?>").trigger("change");
        $("#absorbtion").val("<?php echo $initialpost->initial_appointed_term;?>").trigger("change");
        $("#lienval").val("<?php echo $initialpost->initial_lien;?>").trigger("change");
    }
    
    // To set present posting
    var id='<?php echo $_GET['EC']; ?>';
    if(id){
        $("#role_id_present").val("<?php echo $presentpost->present_place;?>");
        var prole_id = '<?php echo $presentpost->present_place;?>' ;
        var punit = '<?php echo $presentpost->present_unit;?>';
        if(punit!=0)
        {
            $("#region_div_present").css("display", "block");
            $("#c_region_present").val("<?php echo $presentpost->present_unit;?>");
            if (prole_id == '2') {
                $("#present_region_label").html("Units<span class='reqd'>*</span>");
            }
            else if (prole_id == '4') {
                $("#present_region_label").html("ZIET<span class='reqd'>*</span>");
            } else {
                $("#present_region_label").html("Regions<span class='reqd'>*</span>");
            }
            var psection= '<?php echo $presentpost->present_section;?>';
            if(psection!=0)
            {
                $("#section_div_present").css("display", "block");
                $("#c_section_present").val("<?php echo $presentpost->present_section;?>");
            }
            var pschool= '<?php echo $presentpost->present_school;?>';
            if(pschool!=0)
            {
                $("#school_div_present").css("display", "block");
                $("#c_school_present").val("<?php echo $presentpost->present_school;?>").trigger("change");
            }
        }

        $("#notional_date").val("<?php echo $presentpost->present_appointed_term;?>").trigger("change");
        $("#enPresent_Trial_Join").val("<?php echo $presentpost->present_appoint_trail;?>").trigger("change");
    }
</script>
<?php
/*else if(role_id=='2' && region_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_section',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#kvcode_present').val('900');
                        $('#present_zone').val('12');
                        $('#section_div_present').css("display", "block");
                        $('#school_div_present').css("display", "none");
                        $('#c_section_present').html(response);
                    }
                });
            }*/
?>