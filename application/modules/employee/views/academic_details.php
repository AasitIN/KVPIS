<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"> <!-- Resource style -->
<script src="<?php echo base_url(); ?>js/modernizr.js"></script> <!-- Modernizr -->
<div id="content-wrapper">
    <div class="container-fluid">
    <div class="card mb-3">
    <div class="card-header register-header">
        <?php
        //echo '<pre>';
        //print_r($AcdmData['com']);
        //print_r(json_encode($AcdmData['pro']));
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
        
        <!-- ================================== FROM START ======================================-->    
        <?php echo $this->load->view('elements/employeetab',(isset($EmpCode))?$EmpCode:''); ?>
        
        <?php echo form_open("", array("id" => "formID", "class" => "register", "autocomplete" => "off")); ?>
        <input type="hidden" name="emp_id" id="emp_id" value="<?php echo isset($EmpCode) ? $EmpCode : ''; ?>">
        <!-- ================================== ACADEMIC ======================================-->
        <h6><strong>Academic Qualification - </strong></h6>
        <hr>
        
        <div class="row">
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Qualified:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("is_qualified", array("" => "Select") + single_parent(), isset($AcdmData['edu'][0]->emp_qualified) ? set_value('is_qualified', $AcdmData['edu'][0]->emp_qualified) : set_value('is_qualified'), ' id="is_qualified" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('is_qualified'); ?></span>
                </div>
            </div>
        </div>
        
        <div class="add_more_button" id="add_more_academic" <?php echo ($AcdmData['edu'][0]->emp_qualified==1)?'style="display:block;"':'style="display:none;"';?>>
            <a class="btn btn-primary" id="addmore" href="javascript:"> Add More</a>
        </div>
        <br>
        <div id="containner_academic_more" <?php echo ($AcdmData['edu'][0]->emp_qualified==1)?'style="display:block;"':'style="display:none;"';?>>
        </div>
        
        <!-- ================================== PROFESSIONAL ======================================-->
        <h6><strong>Professional Experience Before Joining KVS- </strong></h6>
        <hr>
        <div class="row">
                <div class="form-group col-md-4" >
                    <label for="" class="col-sm-12 col-form-label">Professional Experience:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("is_professional_experience", array("" => "Select") + single_parent(), isset($AcdmData['pro'][0]->emp_prof_exp) ? set_value('is_professional_experience', $AcdmData['pro'][0]->emp_prof_exp) : set_value('is_professional_experience'), ' id="is_professional_experience" class="form-control validate[required]"  '); ?>
                        
                        <span class="error"><?php echo form_error('is_professional_experience'); ?></span>
                    </div>
                </div>
                                
        </div>    
        <div class="add_more_button" id="add_more_professional" <?php echo ($AcdmData['pro'][0]->emp_prof_exp==1)?'style="display:block;"':'style="display:none;"';?>>
            <a class="btn btn-primary"  id="addmoreprofessional" href="javascript:" > Add More</a>
        </div>
        <br>
        <div id="containner_professional_more" <?php echo ($AcdmData['pro'][0]->emp_prof_exp==1)?'style="display:block;"':'style="display:none;"';?>></div>
        <h6><strong>Computer Proficiency- </strong></h6>
        <hr>
        
        <div class="row">
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Computer Proficiency :<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    
                    <?php echo form_dropdown("is_comp_prof", array("" => "Select") + single_parent(), isset($AcdmData['com'][0]->is_comp_prof) ? set_value('is_comp_prof', $AcdmData['com'][0]->is_comp_prof) : set_value('is_comp_prof'), ' id="is_comp_prof" class="form-control validate[required]"  '); ?>
                    <span class="error"><?php echo form_error('is_comp_prof'); ?></span>
                </div>
            </div>
        </div>
        
        <div class="add_more_button" id="addmore_computer" <?php echo ($AcdmData['com'][0]->is_comp_prof== 1) ?"style=display:block;":"style=display:none;"?> >
            <a class="btn btn-primary"  id="addmorecomputer" href="javascript:"> Add More</a>
        </div>
        <br>


        <div id="containner_computer_more" <?php echo ($AcdmData['com'][0]->is_comp_prof== 1 )?"style=display:block;":"style=display:none;"?> ></div>
        
        
            <div class="row">
            <div class="col-sm-12">
                <div  style="float:right;"> 
                    <input class="btn btn-primary" type="reset" value="Reset">
                     <?php  echo form_submit('', 'Save & Next', 'class="btn btn-primary"');?>
                </div>
            </div>
            </div>
        </div>
    <div class="text-right rg-footer"></div>    
    <?php echo form_close(); ?>
    
</div>
</div>
</div>
<!-- ===================================== QUALIFICATION BLOCK START ====================================-->
<script id="academic_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_academic_more"  id="delete_wexp_academic_more{{random_exr_id}}" >
        <div class="delete_more_button" style="display:none;" id="academic_more_1_{{random_exr_id}}">
            <a class="btn btn-primary" id="remove_wexp_academic_more{{random_exr_id}}" class="remove_wexp_academic_more{{random_exr_id}}" href="javascript:"> Delete</a>
        </div>
        
        <div class="row">
        
            <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Qualification:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("emp_education[]", array("" => "Select Education") + basic_education(),set_value('emp_education[]'), 'class="form-control validate[required] "  id="emp_education{{random_exr_id}}" onchange="get_other_div({{random_exr_id}})"' ); ?>
                    <span class="error"><?php echo form_error('name'); ?></span>
                </div>
            </div>
            
            <div class="form-group col-md-4"  id="qualification_name_{{random_exr_id}}" style="display:none">
                <label for="" class="col-sm-12 col-form-label">Qualification Name:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                <?php echo form_input('qualification_name[]', '{{basic_education_detail.emp_qualification_name}}', 'placeholder="Qualification Name" id="qualification_name{{random_exr_id}}" class="form-control validate[required]" onkeypress="LettersAndDotOnly()" '); ?>
                    <span class="error"><?php echo form_error('name'); ?></span>
                </div>
            </div>
            
            <div class="form-group col-md-4" >
                <label for="" class="col-sm-12 col-form-label">Name of Exam:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("name_of_exam[]", '{{basic_education_detail.emp_name_of_exam}}', 'placeholder="Name of Examination"  id="name_of_exam{{random_exr_id}}" class="form-control validate[required]" '); ?>
                    <span class="error"><?php echo form_error('emp_phy_details_date'); ?></span>
                </div>
            </div>

            <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Board/University:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("board_univ_name[]", '{{basic_education_detail.emp_university_name}}', 'placeholder="Board/University" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"'); ?>
                    <span class="error"><?php echo form_error('name'); ?></span>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="form-group col-md-4" id="durationdiv_{{random_exr_id}}" style="display:none;"  >
                    <label for="" class="col-sm-12 col-form-label">Duration of Course(In Months):<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("grad_duration[]", array("" => "Select") + grad_duration(),set_value('grad_duration[]'), 'class="form-control validate[required]" id="grad_duration_{{random_exr_id}}" onchange="opengraduationdiv({{random_exr_id}})"' ); ?>
                        <span class="error"><?php echo form_error('grad_duration'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4 nongraddiv{{random_exr_id}}" >
                    <label for="" class="col-sm-12 col-form-label">Duration of Course(In Months):<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("course_duration[]",'{{basic_education_detail.emp_course_duration}}', 'placeholder="Duration of Course(In Months)" id="course_duration{{random_exr_id}}" class="numericOnly form-control validate[required]" minlength=2 maxlength=2 '); ?>
                        <span class="error"><?php echo form_error('course_duration'); ?></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4 nongraddiv{{random_exr_id}}">
                    <label for="" class="col-sm-12 col-form-label">Year of Passing:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("passing_year[]", array("" => "Select Year") + passing_years(), set_value('passing_year[]'), 'id="passing_year{{random_exr_id}}" class="form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('passing_year'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4 nongraddiv{{random_exr_id}}">
                    <label for="" class="col-sm-12 col-form-label">Subjects Offered:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("sub_offered[]",'{{basic_education_detail.emp_subject_offered}}', 'placeholder="Subjects Offered" id="sub_offered{{random_exr_id}}" class="form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('sub_offered'); ?></span>
                    </div>
                </div>
            </div>
            <!--  ====================== FIRST YEAR DIV IN CASE OF GRADUATION ==============================  -->
            <h6 class="firstyeardiv{{random_exr_id}}" style="display:none;"><strong><u>1st Year</u></strong></h6>
            <div class="row firstyeardiv{{random_exr_id}}" style="display:none;">
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Year of Passing:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("grad_first_year[]", array("" => "Select Year") + passing_years(),set_value('grad_first_year'), 'id="grad_first_year{{random_exr_id}}" class="form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_first_year'); ?></span>
                    </div>
                </div>
            </div>
            <div class="row firstyeardiv{{random_exr_id}}" style="display:none;">
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub[]", '{{basic_education_detail.edulist.0.sub_one}}', 'placeholder="Subject" id="grad_first_sub1" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_first_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub_tot_marks[]", '{{basic_education_detail.edulist.0.sub_one_full_marks}}', 'placeholder="Total Marks" id="grad_first_sub1_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_first_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub_marks[]",'{{basic_education_detail.edulist.0.sub_one_marks}}', 'placeholder="Enter Marks Obtained" id="grad_first_sub1_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_first_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub[]",'{{basic_education_detail.edulist.0.sub_two}}', 'placeholder="Subject" id="grad_first_sub2" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_first_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub_tot_marks[]",'{{basic_education_detail.edulist.0.sub_two_full_marks}}', 'placeholder="Total Marks" id="grad_first_sub2_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_first_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub_marks[]",'{{basic_education_detail.edulist.0.sub_two_marks}}', 'placeholder="Enter Marks Obtained" id="grad_first_sub2_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_first_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub[]",'{{basic_education_detail.edulist.0.sub_three}}', 'placeholder="Subject" id="grad_first_sub3" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_first_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub_tot_marks[]",'{{basic_education_detail.edulist.0.sub_three_full_marks}}', 'placeholder="Total Marks" id="grad_first_sub3_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_first_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub_marks[]",'{{basic_education_detail.edulist.0.sub_three_marks}}', 'placeholder="Enter Marks Obtained" id="grad_first_sub3_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_first_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub[]",'{{basic_education_detail.edulist.0.sub_four}}', 'placeholder="Subject" id="grad_first_sub4" class="form-control" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_first_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub_tot_marks[]",'{{basic_education_detail.edulist.0.sub_four_full_marks}}', 'placeholder="Total Marks" id="grad_first_sub4_tot_marks" class="numericOnly form-control"');?>
                        <span class="error"><?php echo form_error('grad_first_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_first_sub_marks[]",'{{basic_education_detail.edulist.0.sub_four_marks}}', 'placeholder="Enter Marks Obtained" id="grad_first_sub4_marks" class="numericOnly form-control"'); ?>
                        <span class="error"><?php echo form_error('grad_first_sub_marks'); ?></span> 
                    </div>
                </div>
            </div>
            <!--  ====================== SECOND YEAR DIV IN CASE OF GRADUATION ==============================  -->
            <h6 class="secondyeardiv{{random_exr_id}}" style="display:none;"><strong><u>2nd Year</u></strong></h6>
            <div class="row secondyeardiv{{random_exr_id}}" style="display:none;">
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Year of Passing:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("grad_second_year[]", array("" => "Select Year") + passing_years(), isset($users->grad_second_year) ? set_value('grad_second_year', $users->grad_second_year) : set_value('grad_second_year'), 'id="grad_second_year{{random_exr_id}}" class="form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_second_year'); ?></span>
                    </div>
                </div>
            </div>
            <div class="row secondyeardiv{{random_exr_id}}" style="display:none;">
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub[]",'{{basic_education_detail.edulist.1.sub_one}}', 'placeholder="Subject" id="grad_second_sub1" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_second_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub_tot_marks[]",'{{basic_education_detail.edulist.1.sub_one_full_marks}}', 'placeholder="Total Marks" id="grad_second_sub1_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_second_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub_marks[]",'{{basic_education_detail.edulist.1.sub_one_marks}}', 'placeholder="Enter Marks Obtained" id="grad_second_sub1_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_second_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub[]",'{{basic_education_detail.edulist.1.sub_two}}', 'placeholder="Subject" id="grad_second_sub2" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_second_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub_tot_marks[]",'{{basic_education_detail.edulist.1.sub_two_full_marks}}', 'placeholder="Total Marks" id="grad_second_sub2_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_second_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub_marks[]",'{{basic_education_detail.edulist.1.sub_two_marks}}', 'placeholder="Enter Marks Obtained" id="grad_second_sub2_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_second_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub[]",'{{basic_education_detail.edulist.1.sub_three}}', 'placeholder="Subject" id="grad_second_sub3" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_second_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub_tot_marks[]",'{{basic_education_detail.edulist.1.sub_three_full_marks}}', 'placeholder="Total Marks" id="grad_second_sub3_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_second_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub_marks[]",'{{basic_education_detail.edulist.1.sub_three_marks}}', 'placeholder="Enter Marks Obtained" id="grad_second_sub3_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_second_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub[]",'{{basic_education_detail.edulist.1.sub_four}}', 'placeholder="Subject" id="grad_second_sub4" class="form-control" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_second_sub');?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub_tot_marks[]",'{{basic_education_detail.edulist.1.sub_four_full_marks}}', 'placeholder="Total Marks" id="grad_second_sub4_tot_marks" class="numericOnly form-control"');?>
                        <span class="error"><?php echo form_error('grad_second_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_second_sub_marks[]",'{{basic_education_detail.edulist.1.sub_four_marks}}', 'placeholder="Enter Marks Obtained" id="grad_second_sub4_marks" class="numericOnly form-control"'); ?>
                        <span class="error"><?php echo form_error('grad_second_sub_marks'); ?></span> 
                    </div>
                </div>
                
            </div>
            <!--  ====================== THIRD YEAR DIV IN CASE OF GRADUATION ==============================  -->
            <h6 class="thirdyeardiv{{random_exr_id}}" style="display:none;"><strong><u>3rd Year</u></strong></h6>
            <div class="row thirdyeardiv{{random_exr_id}}" style="display:none;">
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Year of Passing:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("grad_third_year[]", array("" => "Select Year") + passing_years(), isset($users->grad_third_year) ? set_value('grad_third_year', $users->grad_third_year) : set_value('grad_third_year'), 'id="grad_third_year{{random_exr_id}}" class="form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_third_year'); ?></span>
                    </div>
                </div>
            </div>
            <div class="row thirdyeardiv{{random_exr_id}}" style="display:none;">
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub[]",'{{basic_education_detail.edulist.2.sub_one}}', 'placeholder="Subject" id="grad_third_sub1" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_third_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub_tot_marks[]",'{{basic_education_detail.edulist.2.sub_one_full_marks}}', 'placeholder="Total Marks" id="grad_third_sub1_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_third_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub_marks[]",'{{basic_education_detail.edulist.2.sub_one_marks}}', 'placeholder="Enter Marks Obtained" id="grad_third_sub1_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_third_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub[]",'{{basic_education_detail.edulist.2.sub_two}}', 'placeholder="Subject" id="grad_third_sub2" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_third_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub_tot_marks[]",'{{basic_education_detail.edulist.2.sub_two_full_marks}}', 'placeholder="Total Marks" id="grad_third_sub2_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_third_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub_marks[]",'{{basic_education_detail.edulist.2.sub_two_marks}}', 'placeholder="Enter Marks Obtained" id="grad_third_sub2_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_third_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub[]",'{{basic_education_detail.edulist.2.sub_three}}', 'placeholder="Subject" id="grad_third_sub3" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_third_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub_tot_marks[]",'{{basic_education_detail.edulist.2.sub_three_full_marks}}', 'placeholder="Total Marks" id="grad_third_sub3_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_third_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub_marks[]",'{{basic_education_detail.edulist.2.sub_three_marks}}', 'placeholder="Enter Marks Obtained" id="grad_third_sub3_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_third_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub[]",'{{basic_education_detail.edulist.2.sub_four}}', 'placeholder="Subject" id="grad_third_sub4" class="form-control" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_third_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub_tot_marks[]",'{{basic_education_detail.edulist.2.sub_four_full_marks}}', 'placeholder="Total Marks" id="grad_third_sub4_tot_marks" class="numericOnly form-control"');?>
                        <span class="error"><?php echo form_error('grad_third_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_third_sub_marks[]",'{{basic_education_detail.edulist.2.sub_four_marks}}', 'placeholder="Enter Marks Obtained" id="grad_third_sub4_marks" class="numericOnly form-control"'); ?>
                        <span class="error"><?php echo form_error('grad_third_sub_marks'); ?></span> 
                    </div>
                </div>
                
            </div>
            <!--  ====================== FOURTH YEAR DIV IN CASE OF GRADUATION ==============================  -->
            <h6 class="fourthyeardiv{{random_exr_id}}" style="display:none;"><strong><u>4th Year</u></strong></h6>
            <div class="row fourthyeardiv{{random_exr_id}}" style="display:none;">
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Year of Passing:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_dropdown("grad_fourth_year[]", array("" => "Select Year") + passing_years(), isset($users->grad_fourth_year) ? set_value('grad_fourth_year', $users->grad_fourth_year) : set_value('grad_fourth_year'), 'id="grad_fourth_year{{random_exr_id}}" class="form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_fourth_year'); ?></span>
                    </div>
                </div>
            </div>
            <div class="row fourthyeardiv{{random_exr_id}}" style="display:none;">
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub[]",'{{basic_education_detail.edulist.3.sub_one}}', 'placeholder="Subject" id="grad_fourth_sub1" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_fourth_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub_tot_marks[]",'{{basic_education_detail.edulist.3.sub_one_full_marks}}', 'placeholder="Total Marks" id="grad_fourth_sub1_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_fourth_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub_marks[]",'{{basic_education_detail.edulist.3.sub_one_marks}}', 'placeholder="Enter Marks Obtained" id="grad_fourth_sub1_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_fourth_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub[]",'{{basic_education_detail.edulist.3.sub_two}}', 'placeholder="Subject" id="grad_fourth_sub2" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_fourth_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub_tot_marks[]",'{{basic_education_detail.edulist.3.sub_two_full_marks}}', 'placeholder="Total Marks" id="grad_fourth_sub2_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_fourth_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub_marks[]",'{{basic_education_detail.edulist.3.sub_two_marks}}', 'placeholder="Enter Marks Obtained" id="grad_fourth_sub2_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_fourth_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub[]",'{{basic_education_detail.edulist.3.sub_three}}', 'placeholder="Subject" id="grad_fourth_sub3" class="form-control validate[required]" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_fourth_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub_tot_marks[]",'{{basic_education_detail.edulist.3.sub_three_full_marks}}', 'placeholder="Total Marks" id="grad_fourth_sub3_tot_marks" class="numericOnly form-control validate[required]"');?>
                        <span class="error"><?php echo form_error('grad_fourth_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub_marks[]",'{{basic_education_detail.edulist.3.sub_three_marks}}', 'placeholder="Enter Marks Obtained" id="grad_fourth_sub3_marks" class="numericOnly form-control validate[required]"'); ?>
                        <span class="error"><?php echo form_error('grad_fourth_sub_marks'); ?></span> 
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Subject :</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub[]",'{{basic_education_detail.edulist.3.sub_four}}', 'placeholder="Subject" id="grad_fourth_sub4" class="form-control" onkeypress="LettersAndDotOnly()"');?>
                        <span class="error"><?php echo form_error('grad_fourth_sub'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Total Marks :</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub_tot_marks[]",'{{basic_education_detail.edulist.3.sub_four_full_marks}}', 'placeholder="Total Marks" id="grad_fourth_sub4_tot_marks" class="numericOnly form-control"');?>
                        <span class="error"><?php echo form_error('grad_fourth_sub_tot_marks'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained:</label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_fourth_sub_marks[]",'{{basic_education_detail.edulist.3.sub_four_marks}}', 'placeholder="Enter Marks Obtained" id="grad_fourth_sub4_marks" class="numericOnly form-control"'); ?>
                        <span class="error"><?php echo form_error('grad_fourth_sub_marks'); ?></span> 
                    </div>
                </div>
                
            </div>
            <!--  ====================== TOTAL YEARS MARKS START FROM HERE ==============================  -->
            <h6 class="overallheading{{random_exr_id}}" style="display:none;"><strong><u>Overall Marks </u></strong></h6>
            <div class="row" >
				<div class="form-group col-md-4"  >
                    <label for="" class="col-sm-12 col-form-label">Total Marks:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_all_tot_marks[]",'{{basic_education_detail.emp_total_marks}}', 'placeholder="Enter Total Marks" id="grad_all_tot_marks_{{random_exr_id}}" class="numericOnly form-control validate[required]" onkeyup="calGradPer({{random_exr_id}});"'); ?>
                        <span class="error"><?php echo form_error('grad_all_tot_marks'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Marks Obtained :<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_all_marks[]",'{{basic_education_detail.emp_marks_obtained}}', 'placeholder="Enter Marks Obtained" id="grad_all_marks_{{random_exr_id}}" class="numericOnly form-control validate[required]" onkeyup="calGradPer({{random_exr_id}});"'); ?>
                        <span class="error"><?php echo form_error('grad_all_marks'); ?></span> 
                    </div>
                </div>
                <div class="form-group col-md-4"  >
                    <label for="" class="col-sm-12 col-form-label">Percentage On Aggregate Marks:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("grad_all_tot_percent[]",'{{basic_education_detail.emp_marks_percentage}}', 'placeholder="Total Percentage(%)" id="grad_all_tot_percent_{{random_exr_id}}" class="form-control validate[required]" readonly'); ?>
                        <span class="error"><?php echo form_error('grad_all_tot_percent'); ?></span> 
                    </div>
                </div>
            </div>
        </div>
</script>
<script id="professional_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_professional_more"  id="delete_wexp_professional_more{{random_exr_id}}" >
        <div class="delete_more_button" style="display:none; " id="professional_more_1_{{random_exr_id}}">
            <a class="btn btn-primary" id="remove_wexp_professional_more{{random_exr_id}}" class="remove_wexp_professional_more{{random_exr_id}}" href="javascript:"> Delete</a>
        </div>
        <div class="row">

            <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Organization/Institute:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("org_name[]", '{{Ex_professional.org_name}}', 'placeholder="Organization/Institute" id="org_name{{random_exr_id}}" class="form-control validate[required]" '); ?>
                    <span class="error"><?php echo form_error('org_name'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="" class="col-sm-12 col-form-label">Designation:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("desg_name[]", '{{Ex_professional.job_profile}}', 'placeholder="Designation" id="desg_name{{random_exr_id}}" class="form-control validate[required]" onkeypress="LettersAndDotOnly()" '); ?>
                    <span class="error"><?php echo form_error('name'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4"  >
                <label for="" class="col-sm-12 col-form-label">Place:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_input("org_addrs[]",'{{Ex_professional.org_address}}', 'placeholder="Place of Working" id="org_addrs{{random_exr_id}}" class="form-control validate[required]"'); ?>
                    <span class="error"><?php echo form_error('org_addrs'); ?></span>
                </div>
            </div>
            
        </div>
        
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Duration From:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("job_start_date[]",'{{Ex_professional.job_start_date}}', 'placeholder="dd-mm-yyyy" id="job_start_date{{random_exr_id}}"  class="datepicker-here form-control validate[required]" '); ?>
                        <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('job_start_date'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="" class="col-sm-12 col-form-label">Duration To:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <?php echo form_input("job_end_date[]",'{{Ex_professional.job_end_date}}', 'placeholder="dd-mm-yyyy" id="job_end_date{{random_exr_id}}"  class="datepicker-here form-control validate[required]" '); ?>
                        <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                        <span class="error"><?php echo form_error('job_end_date'); ?></span>
                    </div>
                </div>
                <div class="form-group col-md-4"  >
                    <label for="" class="col-sm-12 col-form-label">Job Description:<span class="reqd">*</span></label>
                    <div class="col-sm-12">
                        <textarea name="job_desc[]" id="job_desc{{random_exr_id}}" placeholder="job Description" class="form-control validate[required]">
                            {{Ex_professional.job_description}}
                        </textarea>
                        <span class="error"><?php echo form_error('job_desc'); ?></span>
                    </div>
                </div>
            </div>
        </div>
</script>
<!--  ====================== Add More Computer Start ==============================  -->
<script id="computer_more_template" type="x-tmpl-mustache">
    <div class="background_div delete_wexp_computer_more"  id="delete_wexp_computer_more{{random_exr_id}}">
        <div class="delete_more_button" style="display:none; " id="computer_more_1_{{random_exr_id}}">
            <a class="btn btn-primary" id="remove_wexp_computer_more{{random_exr_id}}" class="remove_wexp_computer_more{{random_exr_id}}" href="javascript:"> Delete</a>
        </div>
            <div class="row" >
            <div class="form-group col-md-4" id="computerdiv" >
                <label for="" class="col-sm-12 col-form-label">Proficiency Type:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                    <?php echo form_dropdown("comp_prof_in[]", array("" => "Select") + comp_prof(), '', ' id="comp_prof_in_{{random_exr_id}}" class="form-control validate[required]" onchange="otherCompCourse({{random_exr_id}});"');?>
                    <span class="error"><?php echo form_error('comp_prof_in'); ?></span>
                </div>
            </div>
            <div class="form-group col-md-4"  id="computer_course_{{random_exr_id}}" style="display:none;">
                <label for="" class="col-sm-12 col-form-label">Computer Course Name:<span class="reqd">*</span></label>
                <div class="col-sm-12">
                <?php echo form_input("comp_prof_course[]", '{{com_detail.comp_other_prof}}', 'placeholder="Computer Course Name" class="form-control validate[required]" '); ?>
                    <span class="error"><?php echo form_error('comp_prof_course'); ?></span>
                </div>
            </div>
        </div>
    </div>
</script>
<script>
    var random_computer_more_id = Date.now();
    $('#addmore_computer').click(function () {
        random_computer_more_id = Date.now();
        var wexp_count = $(".delete_wexp_computer_more").length;
        if(wexp_count<=4){
          RenderComputerMore(random_computer_more_id); 
        }

    });
    
    var com_details =<?php echo json_encode(isset($AcdmData['com']) ? $AcdmData['com']: ''); ?>;
    console.log(com_details);
    if (com_details!='') {
        $.each(com_details, function (key, com_detail) {
            console.log(com_detail);
            RenderComputerMore(com_detail.id, com_detail);
            $("#comp_prof_in_" + com_detail.id).val(com_detail.comp_prof_type).trigger("change");
        });
    } else {
        computer_more = {};
        RenderComputerMore(random_computer_more_id, computer_more);
    }
        

    function RenderComputerMore(random_computer_more_id, computer_more) {
        var source = $("#computer_more_template").html();
        var wexp_count = $(".delete_wexp_computer_more").length;
        Mustache.parse(source);
        var rendered = Mustache.render(source, {
            random_exr_id: random_computer_more_id,
            com_detail: computer_more,
        });
        $("#containner_computer_more").append(rendered);
        if (wexp_count != 0) {
           $("#computer_more_1_"+random_computer_more_id).css("display","block");
        }
        delete_computer_more(random_computer_more_id);

    }

    function delete_computer_more(random_exr_id) {

        $("#remove_wexp_computer_more" + random_exr_id).click(function () {
            var wexp_count = $(".delete_wexp_computer_more").length;
            var wexp_id = $(this).attr("wexpid");
            if (wexp_id) {
                var confirm = window.confirm('Are you sure want to delete?');
                if (confirm) {
                    $("#delete_wexp_computer_more" + wexp_id).remove();
                    generate("success", "Details deleted successfully");
                    location_reload();
                    if (wexp_count == 1) {
                        equa = {};
                        RenderComputerMore(random_exr_id, equa);
                    }
                }
            } else {
                if (wexp_count > 1) {
                    $("#delete_wexp_computer_more" + random_exr_id).remove();
                }

            }

        });
    }
    
    function otherCompCourse(ids){
        var CcIn = $("#comp_prof_in_"+ids).val();
        //alert(CcIn);
        if (CcIn == '10'){
            $('#computer_course_'+ids).css('display','block'); 
        } else{
            $('#computer_course_'+ids).css('display','none'); 
        }
    }
    </script>
    
<!--  ====================== Add More Computer End ==============================  -->

<script>
                                                                                                
    //================================ EDUCATION ADD SECTION START ================================//
    var random_academic_more_id = Date.now();
        $('#addmore').click(function () {
            random_academic_more_id = Date.now();
            RenderAcademicMore(random_academic_more_id);
        });

    //================================== EDUCATION EX DATA ========================================//
    var EduDetails =<?php echo json_encode(isset($AcdmData['edu']) ? $AcdmData['edu']: ''); ?>;
    //console.log(EduDetails);
    if (EduDetails && EduDetails.length>0) {
        $.each(EduDetails, function (key, academic_more) {

            RenderAcademicMore(academic_more.id, academic_more);
            $("#passing_year"+academic_more.id).val(academic_more.emp_passing_year).trigger("change");
            $("#emp_education"+academic_more.id).val(academic_more.emp_education).trigger("change");
            if(academic_more.emp_education==2){
                $("#grad_duration_"+academic_more.id).val(academic_more.emp_course_duration).trigger("change");
                if(academic_more.edulist[0]){
                $("#grad_first_year"+academic_more.id).val(academic_more.edulist[0].passing_year).trigger("change");
                } 
                if(academic_more.edulist[1]){
                $("#grad_second_year"+academic_more.id).val(academic_more.edulist[1].passing_year).trigger("change");
                }
                if(academic_more.edulist[2]){
                $("#grad_third_year"+academic_more.id).val(academic_more.edulist[2].passing_year).trigger("change");
                }
                if(academic_more.edulist[3]){
                    $("#grad_fourth_year"+academic_more.id).val(academic_more.edulist[3].passing_year).trigger("change");
                }
            }
            //if(academic_more)
        });
    } else {
        
        academic_more = {};
        RenderAcademicMore(random_academic_more_id, academic_more);
        $("#"+random_academic_more_id).css("display","none");
    }
    //================================== EDUCATION EX DATA END========================================//

    function RenderAcademicMore(random_academic_more_id, academic_more) {
        
        var source = $("#academic_more_template").html();
        var wexp_count = $(".delete_wexp_academic_more").length;
        Mustache.parse(source);
        var rendered = Mustache.render(source, {
            random_exr_id: random_academic_more_id,
            basic_education_detail: academic_more,
        });
        
        $("#containner_academic_more").append(rendered);
            // console.log(random_academic_more_id);
            // $("#delete_wexp_academic_more" + random_academic_more_id).css('display','block');
        if (wexp_count != 0) {
            $("#academic_more_1_"+random_academic_more_id).css("display","block");
        }
        delete_academic_more(random_academic_more_id);
    }

    function delete_academic_more(random_exr_id) {
        $("#remove_wexp_academic_more" + random_exr_id).click(function () {
            var wexp_count = $(".delete_wexp_academic_more").length;
            var wexp_id = $(this).attr("wexpid");
            if (wexp_id) {
                var confirm = window.confirm('Are you sure want to delete?');
                if (confirm) {
                    $("#delete_wexp_academic_more" + wexp_id).remove();
                    generate("success", "Details deleted successfully");
                    location_reload();
                    if (wexp_count == 1) {
                        equa = {};
                        RenderAcademicMore(random_exr_id, equa);
                    }
                }
            } else {
                if (wexp_count > 1) {
                    $("#delete_wexp_academic_more" + random_exr_id).remove();
                }
            }
        });
    }
    //================================ EDUCATION ADD SECTION END ================================//
    //============================= PROFESSIONAL ADD SECTION START ==============================//
    var random_professional_more_id = Date.now();
    $('#addmoreprofessional').click(function () {
            random_professional_more_id = Date.now();
            RenderProfessionalMore(random_professional_more_id);
        });
        //professional_more = {};
        //RenderProfessionalMore(random_professional_more_id, professional_more);
        
        var ProDetails =<?php echo json_encode(isset($AcdmData['pro']) ? $AcdmData['pro']: ''); ?>;
        if (ProDetails && ProDetails.length>0) {
        $.each(ProDetails, function (key, professional_more) {

            RenderProfessionalMore(professional_more.id, professional_more);
            
        });
    } else {
        professional_more = {};
        RenderProfessionalMore(random_professional_more_id, professional_more);
        $("#"+random_professional_more_id).css("display","none");
    }
      //===============================================================================================//  
        function RenderProfessionalMore(random_professional_more_id, professional_more) {
            var source = $("#professional_more_template").html();
            var wexp_count = $(".delete_wexp_professional_more").length;
            Mustache.parse(source);
            var rendered = Mustache.render(source, {
                random_exr_id: random_professional_more_id,
                Ex_professional: professional_more,
            });
        $("#containner_professional_more").append(rendered);
        if (wexp_count != 0) {
            $("#professional_more_1_"+random_professional_more_id).css("display","block");
        }
        delete_professional_more(random_professional_more_id);
        
        $("#job_start_date" + random_professional_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#job_start_date' + random_professional_more_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#job_end_date' + random_professional_more_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#job_start_date' + random_professional_more_id).val('');
                    $('#job_end_date' + random_professional_more_id).val('');
                }
            }
        });
            
        $("#job_end_date" + random_professional_more_id).datepicker({
            maxDate: "0",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "-88:+0",
            onSelect: function (selected) {
                var date = $('#job_start_date' + random_professional_more_id).val();
                var newsdate = date.split("-").reverse().join("-");
                var startDate = new Date(newsdate);
                var edate = $('#job_end_date' + random_professional_more_id).val()
                var newedate = edate.split("-").reverse().join("-");
                var endDate = new Date(newedate);
                if (startDate != '' && endDate != '' && startDate > endDate) {
                    alert('start date should be equal to or less than end date');
                    $('#job_start_date' + random_professional_more_id).val('');
                    $('#job_end_date' + random_professional_more_id).val('');
                }
            }

        });
    }

    function delete_professional_more(random_exr_id) {
    
        $("#remove_wexp_professional_more" + random_exr_id).click(function () {
            var wexp_count = $(".delete_wexp_professional_more").length;
            var wexp_id = $(this).attr("wexpid");
            if (wexp_id) {
                var confirm = window.confirm('Are you sure want to delete?');
                if (confirm) {
                    $("#delete_wexp_professional_more" + wexp_id).remove();
                    generate("success", "Details deleted successfully");
                    location_reload();
                    if (wexp_count == 1) {
                        equa = {};
                        RenderProfessionalMore(random_exr_id, equa);
                    }
                }
            } else {
                if (wexp_count > 1) {
                    $("#delete_wexp_professional_more" + random_exr_id).remove();
                }

            }
        });
    }
    //============================== PROFESSIONAL ADD SECTION END ==============================//
    $( "#is_qualified" ).change(function() {
        var isQfied = $("#is_qualified").val();
        if(isQfied=='1')
        {
            $('#add_more_academic').css('display','block'); 
            $('#containner_academic_more').css('display','block');
        }else{
            $('#add_more_academic').css('display','none'); 
            $('#containner_academic_more').css('display','none');
        }
    });

    $( "#is_professional_experience" ).change(function() {
        var isProf = $("#is_professional_experience").val();
        if(isProf=="1")
        {
            $('#add_more_professional').css('display','block'); 
            $('#containner_professional_more').css('display','block');
        }else{
            $('#add_more_professional').css('display','none'); 
            $('#containner_professional_more').css('display','none');
        }
    });

    
    function get_other_div(ids){
        var text = $("#emp_education" + ids).val();
        if (text == 6)
        {
            $('#qualification_name_' + ids).show();
            $('#durationdiv_'+ids).hide();
            $('.firstyeardiv' + ids).hide();
            $('.secondyeardiv'+ids).hide();
            $('.thirdyeardiv'+ids).hide();
            $('.fourthyeardiv'+ids).hide();
            $('.overallheading'+ids).hide();
        } else if(text == 2){
            $('#durationdiv_'+ids).show();
            $('.nongraddiv'+ids).hide();
            $('#qualification_name_' + ids).hide();
            $('.firstyeardiv' + ids).hide();
            $('.secondyeardiv'+ids).hide();
            $('.thirdyeardiv'+ids).hide();
            $('.fourthyeardiv'+ids).hide();
            $('.overallheading'+ids).hide();
        }else{
            $('.nongraddiv'+ids).show();
            $('#durationdiv_'+ids).hide();
            $('#qualification_name_' + ids).hide();
            $('.firstyeardiv' + ids).hide();
            $('.secondyeardiv'+ids).hide();
            $('.thirdyeardiv'+ids).hide();
            $('.fourthyeardiv'+ids).hide();
            $('.overallheading'+ids).hide();
        }

    }

    function opengraduationdiv(ids){
        var text = $("#grad_duration_" + ids).val();
        if (text == 12)
        {
            $('.firstyeardiv' + ids).show();
            $('.secondyeardiv'+ids).hide();
            $('.thirdyeardiv'+ids).hide();
            $('.fourthyeardiv'+ids).hide();
            $('.overallheading'+ids).show();
        } else if(text == 24){
            $('.firstyeardiv' + ids).show();
            $('.secondyeardiv'+ids).show();
            $('.thirdyeardiv'+ids).hide();
            $('.fourthyeardiv'+ids).hide();
            $('.overallheading'+ids).show();
        }else if(text == 36){
            $('.firstyeardiv' + ids).show();
            $('.secondyeardiv'+ids).show();
            $('.thirdyeardiv'+ids).show();
            $('.fourthyeardiv'+ids).hide();
            $('.overallheading'+ids).show();
        }else if(text == 48){
            $('.firstyeardiv' + ids).show();
            $('.secondyeardiv'+ids).show();
            $('.thirdyeardiv'+ids).show();
            $('.fourthyeardiv'+ids).show();
            $('.overallheading'+ids).show();
        }else{
            $('.firstyeardiv' + ids).hide();
            $('.secondyeardiv'+ids).hide();
            $('.thirdyeardiv'+ids).hide();
            $('.fourthyeardiv'+ids).hide();
            $('.overallheading'+ids).hide();
        }

    }

    

    
    function calGradPer(LinkId){
    //alert(LinkId);
    var MrkObt = $('#grad_all_marks_'+LinkId).val();
    var MrkTot = $('#grad_all_tot_marks_'+LinkId).val();

    var MrkPer = (MrkObt/MrkTot)*100;
    $('#grad_all_tot_percent_'+LinkId).val(MrkPer);
    }
    
    
</script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $("#is_comp_prof" ).change(function() {
           var isCprof = $("#is_comp_prof").val();
            if(isCprof=='1')
            {
                $('#containner_computer_more').show(); 
                $('#addmore_computer').show();
            }else{
                $('#containner_computer_more').hide();
                $('#addmore_computer').hide();
              }
        });
    });
    </script>                                                                                                                                                                                                                                                                                                