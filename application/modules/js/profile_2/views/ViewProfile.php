<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css"> <!-- Resource style -->
<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css"> <!-- Resource style -->
<style>
.accordion_container {
  width: 100%;
}
.accordion_head {
  background-color: #808080;
  color: white;
  cursor: pointer;
  font-family: arial;
  font-size: 14px;
  margin: 0 0 1px 0;
  padding: 10px 10px;
  font-weight: bold;
}
.accordion_body {
  background: #ffffff;
  border:1px solid #cccccc;
}
.accordion_body p {
  padding: 18px 5px;
  margin: 0px;
}
.plusminus {
    float: right;
    padding: 0px 10px;
    font-size: 24px;
}
@import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

#demopurpose {
    background-color: #edf0f5;
}

.profile-card {
    position: relative;
    box-shadow: 0px 3px 6px rgba(0,0,0,.05);
    font-family: 'Poppins', sans-serif;
}

.profile-card .btn-edit {
    position: absolute;
    top: 1rem;
    right: 1.2rem;
    font-size: 1.4rem;
}

.profile-card .profile-picture {
    width: 7.4rem;
}

.profile-card .quote-text {
    font-size: .85rem;
    line-height: 1.55rem;
}

.profile-card .social-section {
    margin-top: 1rem;
}

.profile-card .social-section a {
    font-size: 1rem;
    line-height: 2.15rem;
    width: 2.2rem;
    height: 2.2rem;
    border: 1px solid #d6d6d6;
    color: #d6d6d6;
    border-radius: 50%;
    margin: 0 .5rem;
}

.profile-card .social-section a:hover {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
}
.font-bold{
    font-weight: bold;
}
</style>
<script src="<?php echo base_url();?>js/modernizr.js"></script> <!-- Modernizr -->
<div id="content-wrapper" style="padding-top:1px!important;">
    <div class="container-fluid" style="padding:1px!important;">
        <div class="card mb-3">
            <div class="card-header register-header text-center">
                <?php 
                //show($PerData);
                if(empty($PerData->emp_code)) 
                    echo '<h6 style="margin-bottom:0px!important"> EMPLOYEE (CODE - 10001) DETAILS </h6>'; 
                else 
                    echo '<h6 style="margin-bottom:0px!important">EMPLOYEE DETAILS / CODE - '.$PerData->emp_code.'</h6>'  ?>
            </div>
            <div class="card-body shape-shadow" style="padding: 0.25rem!important;background:#ffffff!important;"> 
                <div class="accordion_container">
                    <div class="accordion_head"><i class="fas fa-user" style="padding:10px 13px; border:1px solid;background: #0072bc;"></i>&nbsp;PERSONAL DETAILS<span class="plusminus">-</span></div>
                    <div class="accordion_body" style="display: block;">
                        <div class="row m-1">
                            <div class="col-md-10">
                                <h6>Personal Information :</h6>    
                            </div>
                            <div class="col-md-1" style="padding-right:0px!important;">
                                <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/personal_details?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="col-md-1" style="padding-left:0px!important;">
                                <button id="pdf"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                            </div>
                        </div>
                        
                        <div class="row mt-0 m-1" style="background:#ffffff!important;" id="personal">
                            <div class="col-md-12"><hr></div>
                            <div class="col-md-3">
                                
                                <div class="h-100">
                                    <div class="row justify-content-center align-items-center h-100">
                                        <div class="col-12">
                                            <div class="profile-card py-3 card text-center">
                                                <div class="card-body py-4">
                                                    <img class="profile-picture rounded-circle" src="<?php echo base_url()."img/ProImage/".$PerData->emp_photo;?>" />
                                                    <h6 class="text-dark mt-4 mb-1">
                                                        <?php 
                                                        if($PerData->emp_title==1){
                                                            $title='Sh.';
                                                        }elseif ($PerData->emp_title==2) {
                                                            $title='Smt.';
                                                        }elseif ($PerData->emp_title==3) {
                                                            $title='Ms.';
                                                        } else {
                                                            $title='';
                                                        }
                                                        echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name; 
                                                        ?>
                                                    </h6>
                                                    <hr>
                                                    <div class="text-muted font-weight-bold small">
                                                        <i class="fa fa-map-marker"></i> : <?php echo $PerData->emp_postaladdress; ?>
                                                        <div class="clearfix"></div>
                                                        <i class="fa fa-mobile-phone"></i> : <?php echo $PerData->emp_mobile_no; ?>
                                                        <div class="clearfix"></div>
                                                        <i class="fa fa-envelope"></i> : <?php echo $PerData->emp_email; ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 p-2 pt-2">
                                <table width="100%" cellpadding="5">
                                <tr>
                                    <td style="width:35%;" class="font-bold">Father Name</td><td style="width:5%;">:</td><td style="width:60%;"><?php echo $PerData->emp_father_name; ?></td>
                                </tr>
                                <tr>
                                    <td>Mother Name</td><td>:</td><td><?php echo $PerData->emp_mother_name; ?></td>
                                </tr>
                                <tr>
                                    <td>Gender</td><td>:</td><td><?php if($PerData->emp_gender==1){ echo 'Male';} if($PerData->emp_gender==2){ echo 'Female';} if($PerData->emp_gender==3){ echo 'Other';} ?></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td><td>:</td><td><?php echo date('d-m-Y',strtotime($PerData->emp_dob));?></td>
                                </tr>
                                <tr>
                                    <td>Marital Status</td><td>:</td><td><?php if($PerData->emp_marital_status==1){ echo 'Married'; } if($PerData->emp_marital_status==2){ echo 'Unmarried'; } if($PerData->emp_marital_status==3){ echo 'Widow'; } if($PerData->emp_marital_status==4){ echo 'Widower'; } if($PerData->emp_marital_status==5){ echo 'Legally Separated'; } ?></td>
                                </tr>
                                <?php if(!empty($PerData->emp_maiden_name)){ ?>
                                <tr>
                                    <td>Maiden Name</td><td>:</td><td><?php echo $PerData->emp_maiden_name; ?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td>Aadhaar No</td><td>:</td><td><?php echo $PerData->emp_aadhar_no; ?></td>
                                </tr>
                                <tr>
                                    <td>Pan No</td><td>:</td><td><?php echo $PerData->emp_pancard_no; ?></td>
                                </tr>
                                <tr>
                                    <td>Passport No</td><td>:</td><td><?php echo $PerData->emp_passport_no; ?></td>
                                </tr>
                                <tr>
                                    <td>Landline No</td><td>:</td><td><?php echo $PerData->emp_landline_no; ?></td>
                                </tr>
                                <tr>
                                    <td>Home Town</td><td>:</td><td><?php echo $PerData->emp_hometown; ?></td>
                                </tr>
                                </table>
                            </div>
                            <div class="col-md-3 p-2 pt-2">
                                <table width="100%" cellpadding="5">
                                <tr>
                                    <td style="width:35%;">Single Parent</td><td style="width:5%;">:</td><td style="width:60%;"><?php echo ($PerData->emp_single_parent==1)?'Yes':'No' ?></td>
                                </tr>
                                <tr>
                                    <td>Survived Chilidren</td><td>:</td><td><?php echo $PerData->emp_surviving_child; ?></td>
                                </tr>
                                <tr>
                                    <td>Identity Mark</td><td>:</td><td><?php echo $PerData->emp_identity_mark; ?></td>
                                </tr>
                                <tr>
                                    <td>Religion</td><td>:</td><td>
                                        <?php 
                                        if($PerData->emp_religion==1){
                                            $Religion='Buddhism';
                                        }else if($PerData->emp_religion==2){
                                            $Religion='Christianity';
                                        }else if($PerData->emp_religion==3){
                                            $Religion='Hinduism';
                                        }else if($PerData->emp_religion==4){
                                            $Religion='Islam';
                                        }else if($PerData->emp_religion==5){
                                            $Religion='Jainism';
                                        }else if($PerData->emp_religion==6){
                                            $Religion='Sikhism';
                                        }else if($PerData->emp_religion==7){
                                            $Religion='Others';
                                        }else{
                                           $Religion=''; 
                                        }
                                        echo $Religion; 
                                        ?>
                                    </td>
                                </tr>
                                <?php if($PerData->emp_religion==7){ ?>
                                <tr>
                                    <td>Religion Name</td><td>:</td><td><?php echo $PerData->emp_other_religion; ?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td>Category</td><td>:</td>
                                    <td>
                                        <?php 
                                        if($PerData->emp_category==1){
                                            $category='GEN';
                                        }else if($PerData->emp_category==2){
                                            $category='OBC';
                                        }else if($PerData->emp_category==3){
                                            $category='SC';
                                        }else if($PerData->emp_category==4){
                                            $category='ST';
                                        }else{
                                           $category=''; 
                                        }
                                        echo $category; 
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Certificate No</td><td>:</td><td><?php echo $PerData->emp_cat_certificate_no; ?></td>
                                </tr>
                                <tr>
                                    <td>Date of issue</td><td>:</td><td><?php echo date('d-m-Y',strtotime($PerData->emp_cat_issuing_date));?></td>
                                </tr>
                                <tr>
                                    <td>Issuing Authority</td><td>:</td><td><?php echo $PerData->emp_cat_issuing_authority; ?></td>
                                </tr>
                                
                                </table>
                            </div>
                            <div class="col-md-3 p-2 pt-2">
                                <table width="100%" cellpadding="5">
                                <tr>
                                    <td style="width:35%;">Whether Specially Abled</td><td style="width:5%;">:</td>
                                    <td style="width:60%;">
                                        <?php echo ($PerData->emp_physical_abled==1)? 'Yes(Disability percent is more than 40)':'No'; ?>
                                    </td>
                                </tr>
                                <?php if($PerData->emp_physical_abled==1){ ?>
                                <tr>
                                    <td>Type of Disability</td><td>:</td><td><?php echo $PerData->emp_ph_category; ?></td>
                                </tr>
                                <tr>
                                    <td>Disability Percentage</td><td>:</td><td><?php echo $PerData->emp_ph_percent; ?></td>
                                </tr>
                                <tr>
                                    <td>Certificate No</td><td>:</td><td><?php echo $PerData->emp_ph_certificate_no; ?></td>
                                </tr>
                                <tr>
                                    <td>Date Of Issue</td><td>:</td><td><?php echo date('d-m-Y',strtotime($PerData->emp_ph_issuing_date));?></td>
                                </tr>
                                <tr>
                                    <td>Issuing Authority </td><td>:</td><td><?php echo $PerData->emp_ph_issuing_authority; ?></td>
                                </tr>
                                <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                  <div class="accordion_head"><i class="fas fa-graduation-cap" style="padding:10px 10px; border:1px solid;background: #0072bc;"></i>&nbsp;ACADEMIC DETAILS<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="background:#ffffff!important; display: none;">
                    
                    <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-10">
                            <h6>Academic Qualification : </h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/academic_details?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf2"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div> 
                    
                    <div class="row m-1" style="background:#ffffff!important;" id="academic">
                        <div class="col-md-12"><hr></div>
                        <div class="col-md-12 p-2 pt-2">
                            
                            <?php 
                            foreach($AcdmData['edu'] as $E){
                            if($E->emp_education=='1' || $E->emp_education=='3' || $E->emp_education=='4' || $E->emp_education=='5'){  // Except Graduation / Other  
                                if($E->emp_education==1){
                                    $QEdu='XII';
                                }elseif($E->emp_education==2){
                                    $QEdu='Graduation';
                                }elseif($E->emp_education==3){
                                    $QEdu='Post-Graduation';
                                }elseif($E->emp_education==4){
                                    $QEdu='MPhil';
                                }elseif($E->emp_education==5){
                                    $QEdu='PhD';
                                }elseif($E->emp_education==0){
                                    $QEdu='Other';
                                }else{
                                    $QEdu='NA';
                                }
                            ?>
                            <table width="100%" cellpadding="5">
                            <tr>
                                <td style="width:15%;">Qualification Name</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $QEdu; ?></td>
                                <td style="width:12%;">Qualification Stream </td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $E->emp_name_of_exam; ?></td>
                                <td style="width:16%;">Board / University</td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $E->emp_university_name; ?></td>
                            </tr>
                            <tr>
                                <td style="">Course Duration(in Months)</td><td style="">:</td><td style=""><?php echo $E->emp_course_duration; ?></td>
                                <td style="">Year of Passing</td><td style="">:</td><td style=""><?php echo $E->emp_passing_year; ?></td>
                                <td style="">Subject Offered</td><td style="">:</td><td style=""><?php echo $E->emp_subject_offered; ?></td>
                            </tr>
                            <tr>
                                <td style="">Total Marks</td><td style="">:</td><td style=""><?php echo $E->emp_total_marks; ?></td>
                                <td style="">Marks Obtained</td><td style="">:</td><td style=""><?php echo $E->emp_marks_obtained; ?></td>
                                <td style="">Percentage On Aggregate Marks</td><td style="">:</td><td style=""><?php echo $E->emp_marks_percentage; ?></td>
                            </tr>
                            </table>
                            <hr>
                            <?php }
                            if($E->emp_education=='2'){  // Graduation
                                if($E->emp_education==1){
                                    $QEdu='XII';
                                }elseif($E->emp_education==2){
                                    $QEdu='Graduation';
                                }elseif($E->emp_education==3){
                                    $QEdu='Post-Graduation';
                                }elseif($E->emp_education==4){
                                    $QEdu='MPhil';
                                }elseif($E->emp_education==5){
                                    $QEdu='PhD';
                                }elseif($E->emp_education==0){
                                    $QEdu='Other';
                                }else{
                                    $QEdu='NA';
                                }
                            ?>
                            <table width="100%" cellpadding="5">
                            <tr>
                                <td style="width:15%;">Qualification Name</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $QEdu; ?></td>
                                <td style="width:12%;">Qualification Stream </td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $E->emp_name_of_exam; ?></td>
                                <td style="width:16%;">Board / University</td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $E->emp_university_name; ?></td>
                            </tr>
                            <tr>
                                <td style="">Course Duration(in Months)</td><td style="">:</td><td style=""><?php echo $E->emp_course_duration; ?></td>
                                <td style="visibility:hidden;">Year of Passing</td><td style="visibility:hidden;">:</td><td style="visibility:hidden;"><?php echo $E->emp_passing_year; ?></td>
                                <td style="visibility:hidden;">Subject Offered</td><td style="visibility:hidden;">:</td><td style="visibility:hidden;"><?php echo $E->emp_subject_offered; ?></td>
                            </tr>
                            <tr>
                                <td style="">Total Marks</td><td style="">:</td><td style=""><?php echo $E->emp_total_marks; ?></td>
                                <td style="">Marks Obtained</td><td style="">:</td><td style=""><?php echo $E->emp_marks_obtained; ?></td>
                                <td style="">Percentage On Aggregate Marks</td><td style="">:</td><td style=""><?php echo $E->emp_marks_percentage; ?></td>
                            </tr>
                            <tr>
                                <td colspan="9" style="background:#ffffff!important;">
                                    <table width="100%" cellpadding="5" cellspacing="2" border="1">
                                        <?php  foreach($E->edulist as $Y){ ?>
                                        <tr style="background:#9e9e9e!important;">
                                            <td colspan="5">Academic / Session  Year : <?php echo $Y->sessions_year; ?></td>
                                            <td colspan="4">Passing Year : <?php echo $Y->passing_year; ?></td>
                                        </tr>
                                        
                                        <?php if(!empty($Y->sub_one)){?>
                                        <tr>
                                        <td>Subject</td><td>:</td><td><?php echo $Y->sub_one; ?></td>
                                        <td>Total Marks</td><td>:</td><td><?php echo $Y->sub_one_full_marks; ?></td>
                                        <td>Marks Obtained</td><td>:</td><td><?php echo $Y->sub_one_marks; ?></td>
                                        </tr>
                                        <?php } ?>
                                        
                                        <?php if(!empty($Y->sub_two)){?>
                                        <tr>
                                        <td>Subject</td><td>:</td><td><?php echo $Y->sub_two; ?></td>
                                        <td>Total Marks</td><td>:</td><td><?php echo $Y->sub_two_full_marks; ?></td>
                                        <td>Marks Obtained</td><td>:</td><td><?php echo $Y->sub_two_marks; ?></td>
                                        </tr>
                                        <?php } ?>
                                        
                                        <?php if(!empty($Y->sub_three)){?>
                                        <tr>
                                        <td>Subject</td><td>:</td><td><?php echo $Y->sub_three; ?></td>
                                        <td>Total Marks</td><td>:</td><td><?php echo $Y->sub_three_full_marks; ?></td>
                                        <td>Marks Obtained</td><td>:</td><td><?php echo $Y->sub_three_marks; ?></td>
                                        </tr>
                                        <?php } ?>
                                        
                                        <?php if(!empty($Y->sub_four)){?>
                                        <tr>
                                        <td>Subject</td><td>:</td><td><?php echo $Y->sub_four; ?></td>
                                        <td>Total Marks</td><td>:</td><td><?php echo $Y->sub_four_full_marks; ?></td>
                                        <td>Marks Obtained</td><td>:</td><td><?php echo $Y->sub_four_marks; ?></td>
                                        </tr>
                                        <?php } ?>
                                        
                                        <?php } ?>
                                    </table>
                                </td>
                            </tr>
                            </table>
                            <hr>
                            <?php }
                            if($E->emp_education=='6'){  // Others
                            ?>
                            
                            <table width="100%" cellpadding="5">
                            <tr>
                                <td style="width:15%;">Qualification Name</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $E->emp_qualification_name; ?></td>
                                <td style="width:12%;">Qualification Stream </td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $E->emp_name_of_exam; ?></td>
                                <td style="width:16%;">Board / University</td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $E->emp_university_name; ?></td>
                            </tr>
                            <tr>
                                <td style="">Course Duration(in Months)</td><td style="">:</td><td style=""><?php echo $E->emp_course_duration; ?></td>
                                <td style="">Year of Passing</td><td style="">:</td><td style=""><?php echo $E->emp_passing_year; ?></td>
                                <td style="">Subject Offered</td><td style="">:</td><td style=""><?php echo $E->emp_subject_offered; ?></td>
                            </tr>
                            <tr>
                                <td style="">Total Marks</td><td style="">:</td><td style=""><?php echo $E->emp_total_marks; ?></td>
                                <td style="">Marks Obtained</td><td style="">:</td><td style=""><?php echo $E->emp_marks_obtained; ?></td>
                                <td style="">Percentage On Aggregate Marks</td><td style="">:</td><td style=""><?php echo $E->emp_marks_percentage; ?></td>
                            </tr>
                            </table>
                            <hr>
                            <?php }
                            
                            } ?>
                        </div>
                    </div>
                    <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-12 p-2 pt-2">
                            <h6>Professional Experience Before Joining KVS : </h6>
                            <hr>
                            <?php foreach($AcdmData['pro'] as $Pro){ ?>
                            <table width="100%" cellpadding="5">
                            <tr>
                                <td style="width:15%;">Organisation/Institute</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $Pro->org_name; ?></td>
                                <td style="width:12%;">Designation</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $Pro->job_profile; ?></td>
                                <td style="width:16%;">Place</td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $Pro->org_address; ?></td>
                            </tr>
                            <tr>
                                <td style="">Duration From</td><td style="">:</td><td style=""><?php echo $Pro->job_start_date; ?></td>
                                <td style="">Duration To</td><td style="">:</td><td style=""><?php echo $Pro->job_end_date; ?></td>
                                <td style="">Job Description</td><td style="">:</td><td style=""><?php echo $Pro->job_description; ?></td>
                            </tr>
                            </table>
                            <hr>
                            <?php } ?>
                        </div>
                    </div>
                      <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-12 p-2 pt-2">
                            <h6>Computer Proficiency: </h6>
                            <hr>
                            <?php foreach($AcdmData['com'] as $Com){ ?>
                            <table width="100%" cellpadding="5">
                            <tr>
                                <td style="width:15%;">Computer Proficiency</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo ($Com->is_comp_prof==1)?'Yes':'No'; ?></td>
                                <?php if($Com->is_comp_prof=='1'){ $ProfType=($Com->comp_prof_type=='1')?'MS-Office':'Other'?>
                                <td style="width:12%;">Proficiency Type</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $ProfType; ?></td>
                                <?php } ?>
                                <?php if($Com->comp_prof_type=='10'){ ?>
                                <td style="width:16%;">Course Name</td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $Com->comp_other_prof; ?></td>
                                <?php } ?>
                            </tr>
                            </table>
                            <hr>
                            <?php } ?>
                        </div>
                    </div>
                    
                    </div> 
                    <div class="accordion_head"><i class="fas fa-school" style="padding:10px 10px; border:1px solid;background: #0072bc;"></i>&nbsp;RESULT DETAILS<span class="plusminus">+</span></div>
                    <div class="accordion_body" style="display: none;">
                    
                    <div class="row m-1" style="background:#ffffff!important;">
                        
                        <div class="col-md-10">
                            <h6>Result Details :</h6>    
                        </div>
                        <div class="col-md-1" style="padding-right:0px!important;">
                            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/result_details?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <div class="col-md-1" style="padding-left:0px!important;">
                            <button id="pdf3"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="row m-1" style="background:#ffffff!important;" id="results">
                        <div class="col-md-12 p-2 pt-2">
                            
                            <?php 
                            if($Mas['emp_type']=="1"){
                            if($Mas['emp_dign_post']=="3" || $Mas['emp_dign_post']=="7"){ //Head Master / Primary Teacher
                            ?>
                            <table width="100%" cellpadding="5">
                            <thead>
                            <tr style="background:#9e9e9e!important;">
                                <th>Class</th>
                                <th>Year</th>
                                <th>No of Student Appears</th>
                                <th>No of Student Passed</th>
                                <th>Pass Percentage</th>
                                <th>Subject Taught</th>
                                <th>Percentage of A Grades</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($tHMS as $RD){?>
                                <tr>
                                <td><?php echo $RD->rst_class; ?></td>
                                <td><?php echo $RD->rst_year; ?></td>
                                <td><?php echo $RD->rst_no_students; ?></td>
                                <td><?php echo $RD->rst_no_pass_students; ?></td>
                                <td><?php echo $RD->rst_pass_per; ?></td>
                                <td><?php echo $RD->rst_subjects_name; ?></td>
                                <td><?php echo $RD->rst_pass_per_grade; ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            </table>
                            <hr>
                            <?php }
                            if($Mas['emp_dign_post']=="1" || $Mas['emp_dign_post']=="2"){ //Principal /Vice Principal
                            ?>
                            <table width="100%" cellpadding="5">
                            <thead>
                            <tr style="background:#9e9e9e!important;">
                                <th>Class</th>
                                <th>Year</th>
                                <th>No of Student Appears</th>
                                <th>No of Student Passed</th>
                                <th>Pass Percentage</th>
                                <th>Subject Taught</th>
                                <th>No of Student 90% or More</th>
                                <th>P.I. in respect of class XII</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($tPRI as $RD){?>
                                <tr>
                                <td><?php echo $RD->rst_class; ?></td>
                                <td><?php echo $RD->rst_year; ?></td>
                                <td><?php echo $RD->rst_no_students; ?></td>
                                <td><?php echo $RD->rst_no_pass_students; ?></td>
                                <td><?php echo $RD->rst_pass_per; ?></td>
                                <td><?php echo $RD->rst_subjects_name; ?></td>
                                <td><?php echo $RD->rst_pass_per_grade; ?></td>
                                <td><?php echo $RD->rst_pass_per_grade; ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            </table>
                            <hr>
                            <?php }
                            if($Mas['emp_dign_post']=="6"){ //Post Graduate Teacher
                            ?>
                            <table width="100%" cellpadding="5">
                            <thead>
                            <tr style="background:#9e9e9e!important;">
                                <th>Class</th>
                                <th>Year</th>
                                <th>No of Student Appears</th>
                                <th>No of Student Passed</th>
                                <th>Pass Percentage</th>
                                <th>Subject Taught</th>
                                <th>PI Of highest class taught</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($tPGT as $RD){?>
                            <tr>
                                <td><?php echo $RD->rst_class; ?></td>
                                <td><?php echo $RD->rst_year; ?></td>
                                <td><?php echo $RD->rst_no_students; ?></td>
                                <td><?php echo $RD->rst_no_pass_students; ?></td>
                                <td><?php echo $RD->rst_pass_per; ?></td>
                                <td><?php echo $RD->rst_subjects_name; ?></td>
                                <td><?php echo $RD->rst_pass_per_grade; ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            </table>
                            <hr>
                            <?php }
                            if($Mas['emp_dign_post']=="8"){ //Trained Graduate Teacher
                            ?>
                            <table width="100%" cellpadding="5">
                            <thead>
                            <tr style="background:#9e9e9e!important;">
                                <th>Class</th>
                                <th>Year</th>
                                <th>No of Student Appears</th>
                                <th>No of Student Passed</th>
                                <th>Pass Percentage</th>
                                <th>Subject Taught</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($tTGT as $RD){?>
                            <tr>
                                <td><?php echo $RD->rst_class; ?></td>
                                <td><?php echo $RD->rst_year; ?></td>
                                <td><?php echo $RD->rst_no_students; ?></td>
                                <td><?php echo $RD->rst_no_pass_students; ?></td>
                                <td><?php echo $RD->rst_pass_per; ?></td>
                                <td><?php echo $RD->rst_subjects_name; ?></td>
                            </tr>
                            <?php }?>
                            </tbody>
                            </table>
                            <hr>
                            <?php }
                                
                                } ?>
                        </div>
                    </div>
                   
                    </div>
                  <div class="accordion_head"><i class="fas fa-street-view" style="padding:10px 12px; border:1px solid;background: #0072bc;"></i>&nbsp;FAMILY DETAILS<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                    <p>Third Accordian Body, it will have description</p>
                  </div>
                  <div class="accordion_head"><i class="fas fa-address-card" style="padding:10px 11px; border:1px solid;background: #0072bc;"></i>&nbsp;SERVICE DETAILS<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                    <p>Third Accordian Body, it will have description</p>
                  </div>
                  <div class="accordion_head"><i class="fas fa-inr" style="padding:10px 15px; border:1px solid;background: #0072bc;"></i>&nbsp;PAY-LEVEL DETAILS<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                    <?php echo $this->load->view('paydetail',array())?>
                  </div>
                  <div class="accordion_head"><i class="fas fa-award" style="padding:10px 14px; border:1px solid;background: #0072bc;"></i>&nbsp;AWARDS DETAILS<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                    <?php echo $this->load->view('award',array())?>
                  </div>
                  <div class="accordion_head"><i class="fas fa-book" style="padding:10px 14px; border:1px solid;background: #0072bc;"></i>&nbsp;TRAINING DETAILS<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                    <?php echo $this->load->view('training',array())?>
                  </div>
                  <div class="accordion_head"><i class="fas fa-star" style="padding:10px 12px; border:1px solid;background: #0072bc;"></i>&nbsp;APAR DETAILS<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                    <?php echo $this->load->view('apar',array())?>
                  </div>
                  <div class="accordion_head"><i class="fas fa-handshake-o" style="padding:10px 11px; border:1px solid;background: #0072bc;"></i>&nbsp;PROMOTION DETAILS<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                    <?php echo $this->load->view('promotion',array())?>
                  </div>
                  <div class="accordion_head"><i class="fas fa-line-chart" style="padding:10px 13px; border:1px solid;background: #0072bc;"></i>&nbsp;FINANCIAL UPGRADATION DETAILS<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                    <?php echo $this->load->view('financial',array())?>
                  </div>
                  <div class="accordion_head"><i class="fas fa-retweet" style="padding:10px 11px; border:1px solid;background: #0072bc;"></i>&nbsp;TEACHER EXCHANGE PROGRAM<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <?php echo $this->load->view('teacherExchange',array())?>
                  </div>
                  <div class="accordion_head"><i class="fas fa-plane" style="padding:10px 12px; border:1px solid;background: #0072bc;"></i>&nbsp;FOREIGN VISIT<span class="plusminus">+</span></div>
                  <div class="accordion_body" style="display: none;">
                  <?php echo $this->load->view('foreignVisit',array())?>
                  </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

<script>
$(document).ready(function() {
  //toggle the component with class accordion_body
  $(".accordion_head").click(function() {
    if ($('.accordion_body').is(':visible')) {
      $(".accordion_body").slideUp(300);
      $(".plusminus").text('+');
    }
    if ($(this).next(".accordion_body").is(':visible')) {
      $(this).next(".accordion_body").slideUp(300);
      $(this).children(".plusminus").text('+');
    } else {
      $(this).next(".accordion_body").slideDown(300);
      $(this).children(".plusminus").text('-');
    }
  });
});

//============================== Create PDF ===============================//

$('#pdf').click(function() {
    var options = {
    };
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Personal Details', 250,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#personal"), 10, 25, options, function() {
        pdf.save('Personal_Details.pdf');
    });
});

$('#pdf2').click(function() {
    var options = {
    };
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Academic Details', 250,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#academic"), 10, 25, options, function() {
        pdf.save('Academic_Details.pdf');
    });
});

$('#pdf3').click(function() {
    var options = {
    };
    var pdf = new jsPDF('p', 'pt', 'a4');
    pdf.setFontSize(10);
    pdf.setFontStyle('italic');
    pdf.text('Result Details', 250,20);
    //pdf.text("Centered text",{align: "center"},250,15);
    pdf.addHTML($("#results"), 10, 25, options, function() {
        pdf.save('Result_Details.pdf');
    });
});
</script>