<div  id="Academic_PDF" style="background:#ffffff!important;">
                    <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-12"><hr></div>
                        <?php if($AcdmData['edu'] && count($AcdmData['edu']>0)){ ?>
                        <div class="col-md-12 p-2 pt-2">
                            
                            <?php 
                            foreach($AcdmData['edu'] as $E){
                            if($E->emp_education=='1' || $E->emp_education=='3' || $E->emp_education=='4' || $E->emp_education=='5'|| $E->emp_education=='7'|| $E->emp_education=='8'){  // Except Graduation / Other  
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
                                <td style="width:15%;" class="font-bold">Qualification Name</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $QEdu; ?></td>
                                <td style="width:12%;" class="font-bold">Qualification Stream </td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $E->emp_name_of_exam; ?></td>
                                <td style="width:16%;" class="font-bold">Board / University</td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $E->emp_university_name; ?></td>
                            </tr>
                            <tr>
                                <td style="" class="font-bold">Course Duration(in Months)</td><td style="">:</td><td style=""><?php echo $E->emp_course_duration; ?></td>
                                <?php if($E->emp_education!='2'){ ?>
                                <td style="" class="font-bold">Year of Passing</td><td style="">:</td><td style=""><?php echo $E->emp_passing_year; ?></td>
                                <td style="" class="font-bold">Subject Offered</td><td style="">:</td><td style=""><?php echo $E->emp_subject_offered; ?></td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td style="" class="font-bold">Total Marks</td><td style="">:</td><td style=""><?php echo $E->emp_total_marks; ?></td>
                                <td style="" class="font-bold">Marks Obtained</td><td style="">:</td><td style=""><?php echo $E->emp_marks_obtained; ?></td>
                                <td style="" class="font-bold">Percentage On Aggregate Marks</td><td style="">:</td><td style=""><?php echo $E->emp_marks_percentage; ?></td>
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
                                <td style="width:15%;" class="font-bold">Qualification Name</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $QEdu; ?></td>
                                <td style="width:12%;" class="font-bold">Qualification Stream </td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $E->emp_name_of_exam; ?></td>
                                <td style="width:16%;" class="font-bold">Board / University</td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $E->emp_university_name; ?></td>
                            </tr>
                            <tr>
                                <td style="" class="font-bold">Course Duration(in Months)</td><td style="">:</td><td style=""><?php echo $E->emp_course_duration; ?></td>
                                <?php if($E->emp_education!='2'){ ?>
                                <td style="" class="font-bold">Year of Passing</td><td style="">:</td><td style=""><?php echo $E->emp_passing_year; ?></td>
                                <td style="" class="font-bold">Subject Offered</td><td style="">:</td><td style=""><?php echo $E->emp_subject_offered; ?></td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td style="" class="font-bold">Total Marks</td><td style="">:</td><td style=""><?php echo $E->emp_total_marks; ?></td>
                                <td style="" class="font-bold">Marks Obtained</td><td style="">:</td><td style=""><?php echo $E->emp_marks_obtained; ?></td>
                                <td style="" class="font-bold">Percentage On Aggregate Marks</td><td style="">:</td><td style=""><?php echo $E->emp_marks_percentage; ?></td>
                            </tr>
                            <tr>
                                <td colspan="9" style="background:#ffffff!important;">
                                    <table width="100%" cellpadding="5" cellspacing="2" border="1">
                                        <?php  foreach($E->edulist as $Y){ ?>
                                        <tr style="background:#9e9e9e!important;">
                                            <td colspan="5" class="font-bold">Academic / Session  Year : <?php echo $Y->sessions_year; ?></td>
                                            <td colspan="4" class="font-bold">Passing Year : <?php echo $Y->passing_year; ?></td>
                                        </tr>
                                        
                                        <?php if(!empty($Y->sub_one)){?>
                                        <tr>
                                        <td class="font-bold">Subject</td><td>:</td><td><?php echo $Y->sub_one; ?></td>
                                        <td class="font-bold">Total Marks</td><td>:</td><td><?php echo $Y->sub_one_full_marks; ?></td>
                                        <td class="font-bold">Marks Obtained</td><td>:</td><td><?php echo $Y->sub_one_marks; ?></td>
                                        </tr>
                                        <?php } ?>
                                        
                                        <?php if(!empty($Y->sub_two)){?>
                                        <tr>
                                        <td class="font-bold">Subject</td><td>:</td><td><?php echo $Y->sub_two; ?></td>
                                        <td class="font-bold">Total Marks</td><td>:</td><td><?php echo $Y->sub_two_full_marks; ?></td>
                                        <td class="font-bold">Marks Obtained</td><td>:</td><td><?php echo $Y->sub_two_marks; ?></td>
                                        </tr>
                                        <?php } ?>
                                        
                                        <?php if(!empty($Y->sub_three)){?>
                                        <tr>
                                        <td class="font-bold">Subject</td><td>:</td><td><?php echo $Y->sub_three; ?></td>
                                        <td class="font-bold">Total Marks</td><td>:</td><td><?php echo $Y->sub_three_full_marks; ?></td>
                                        <td class="font-bold">Marks Obtained</td><td>:</td><td><?php echo $Y->sub_three_marks; ?></td>
                                        </tr>
                                        <?php } ?>
                                        
                                        <?php if(!empty($Y->sub_four)){?>
                                        <tr>
                                        <td class="font-bold">Subject</td><td>:</td><td><?php echo $Y->sub_four; ?></td>
                                        <td class="font-bold">Total Marks</td><td>:</td><td><?php echo $Y->sub_four_full_marks; ?></td>
                                        <td class="font-bold">Marks Obtained</td><td>:</td><td><?php echo $Y->sub_four_marks; ?></td>
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
                                <td style="width:15%;" class="font-bold">Qualification Name</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $E->emp_qualification_name; ?></td>
                                <td style="width:12%;" class="font-bold">Qualification Stream </td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $E->emp_name_of_exam; ?></td>
                                <td style="width:16%;" class="font-bold">Board / University</td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $E->emp_university_name; ?></td>
                            </tr>
                            <tr>
                                <td style="" class="font-bold">Course Duration(in Months)</td><td style="">:</td><td style=""><?php echo $E->emp_course_duration; ?></td>
                                <?php if($E->emp_education!='2'){ ?>
                                <td style="" class="font-bold">Year of Passing</td><td style="">:</td><td style=""><?php echo $E->emp_passing_year; ?></td>
                                <td style="" class="font-bold">Subject Offered</td><td style="">:</td><td style=""><?php echo $E->emp_subject_offered; ?></td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td style="" class="font-bold">Total Marks</td><td style="">:</td><td style=""><?php echo $E->emp_total_marks; ?></td>
                                <td style="" class="font-bold">Marks Obtained</td><td style="">:</td><td style=""><?php echo $E->emp_marks_obtained; ?></td>
                                <td style="" class="font-bold">Percentage On Aggregate Marks</td><td style="">:</td><td style=""><?php echo $E->emp_marks_percentage; ?></td>
                            </tr>
                            </table>
                            
                            <?php }
                            
                            } ?>
                            <hr>
                        </div>
                         <?php }else{
                        echo '<div class="col-md-12 text-danger text-center">No Record Found<hr></div>';
                    }?>
                        
                    </div>
                   
                    
                    <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-12 p-2 pt-2">
                            <h6>Professional Experience Before Joining KVS : </h6>
                            <hr>
                            <?php if($AcdmData['pro'] && count($AcdmData['pro']>0)){ ?>
                            <?php foreach($AcdmData['pro'] as $Pro){ ?>
                            <table width="100%" cellpadding="5">
                            <tr>
                                <td style="width:15%;" class="font-bold">Organisation/Institute</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $Pro->org_name; ?></td>
                                <td style="width:12%;" class="font-bold">Designation</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $Pro->job_profile; ?></td>
                                <td style="width:16%;" class="font-bold">Place</td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $Pro->org_address; ?></td>
                            </tr>
                            <tr>
                                <td style="" class="font-bold">Duration From</td><td style="">:</td><td style=""><?php echo $Pro->job_start_date; ?></td>
                                <td style="" class="font-bold">Duration To</td><td style="">:</td><td style=""><?php echo $Pro->job_end_date; ?></td>
                                <td style="" class="font-bold">Job Description</td><td style="">:</td><td style=""><?php echo $Pro->job_description; ?></td>
                            </tr>
                            </table>
                            
                            <?php } ?>
                             <?php }else{
                        echo '<div class="col-md-12 text-danger text-center">No Record Found</div>';
                    }?>
                            <hr>
                        </div>
                    </div>
                      <div class="row m-1" style="background:#ffffff!important;">
                        <div class="col-md-12 p-2 pt-2">
                            <h6>Computer Proficiency: </h6>
                            <hr>
                            <?php if($AcdmData['com'] && count($AcdmData['com']>0)){ ?>
                            <?php foreach($AcdmData['com'] as $Com){ ?>
                            <table width="100%" cellpadding="5">
                            <tr>
                                <td style="width:15%;" class="font-bold">Computer Proficiency</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo ($Com->is_comp_prof==1)?'Yes':'No'; ?></td>
                                <?php if($Com->is_comp_prof=='1'){ $ProfType=($Com->comp_prof_type=='1')?'MS-Office':'Other'?>
                                <td style="width:12%;" class="font-bold">Proficiency Type</td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $ProfType; ?></td>
                                <?php } ?>
                                <?php if($Com->comp_prof_type=='10'){ ?>
                                <td style="width:16%;" class="font-bold">Course Name</td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $Com->comp_other_prof; ?></td>
                                <?php } ?>
                            </tr>
                            </table>
                            
                            <?php } ?>
                            <?php }else{
                        echo '<div class="col-md-12 text-danger text-center">No Record Found</div>';
                    }?>
                            <hr>
                        </div>
                    </div>
                    </div>