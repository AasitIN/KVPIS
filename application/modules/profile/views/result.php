<div class="row m-1" style="background:#ffffff!important;" id="Result_PDF">
                        <div class="col-md-12 p-2 pt-2">
                        <hr>    
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
                                <td>
                                    <?php 
                                    if($RD->rst_class==1){  echo "I"; 
                                    }elseif ($RD->rst_class==2) {   echo 'II';
                                    }elseif ($RD->rst_class==3) {   echo 'III';
                                    }elseif ($RD->rst_class==4) {   echo 'IV';
                                    }elseif ($RD->rst_class==5) {   echo 'V';
                                    }elseif ($RD->rst_class==6) {   echo 'VI';
                                    }elseif ($RD->rst_class==7) {   echo 'VII';
                                    }elseif ($RD->rst_class==8) {   echo 'VIII';
                                    }elseif ($RD->rst_class==9) {   echo 'IX';
                                    }elseif ($RD->rst_class==10) {   echo 'X';
                                    }elseif ($RD->rst_class==11) {   echo 'XI';
                                    }elseif ($RD->rst_class==12) {   echo 'XII';
                                    } 
                                    ?>
                                </td>
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
                                <td>
                                    <?php 
                                    if($RD->rst_class==1){  echo "I"; 
                                    }elseif ($RD->rst_class==2) {   echo 'II';
                                    }elseif ($RD->rst_class==3) {   echo 'III';
                                    }elseif ($RD->rst_class==4) {   echo 'IV';
                                    }elseif ($RD->rst_class==5) {   echo 'V';
                                    }elseif ($RD->rst_class==6) {   echo 'VI';
                                    }elseif ($RD->rst_class==7) {   echo 'VII';
                                    }elseif ($RD->rst_class==8) {   echo 'VIII';
                                    }elseif ($RD->rst_class==9) {   echo 'IX';
                                    }elseif ($RD->rst_class==10) {   echo 'X';
                                    }elseif ($RD->rst_class==11) {   echo 'XI';
                                    }elseif ($RD->rst_class==12) {   echo 'XII';
                                    } 
                                    ?>
                                </td>
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
                                <td>
                                    <?php 
                                    if($RD->rst_class==1){  echo "I"; 
                                    }elseif ($RD->rst_class==2) {   echo 'II';
                                    }elseif ($RD->rst_class==3) {   echo 'III';
                                    }elseif ($RD->rst_class==4) {   echo 'IV';
                                    }elseif ($RD->rst_class==5) {   echo 'V';
                                    }elseif ($RD->rst_class==6) {   echo 'VI';
                                    }elseif ($RD->rst_class==7) {   echo 'VII';
                                    }elseif ($RD->rst_class==8) {   echo 'VIII';
                                    }elseif ($RD->rst_class==9) {   echo 'IX';
                                    }elseif ($RD->rst_class==10) {   echo 'X';
                                    }elseif ($RD->rst_class==11) {   echo 'XI';
                                    }elseif ($RD->rst_class==12) {   echo 'XII';
                                    } 
                                    ?>
                                </td>
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
                                <td>
                                    <?php 
                                    if($RD->rst_class==1){  echo "I"; 
                                    }elseif ($RD->rst_class==2) {   echo 'II';
                                    }elseif ($RD->rst_class==3) {   echo 'III';
                                    }elseif ($RD->rst_class==4) {   echo 'IV';
                                    }elseif ($RD->rst_class==5) {   echo 'V';
                                    }elseif ($RD->rst_class==6) {   echo 'VI';
                                    }elseif ($RD->rst_class==7) {   echo 'VII';
                                    }elseif ($RD->rst_class==8) {   echo 'VIII';
                                    }elseif ($RD->rst_class==9) {   echo 'IX';
                                    }elseif ($RD->rst_class==10) {   echo 'X';
                                    }elseif ($RD->rst_class==11) {   echo 'XI';
                                    }elseif ($RD->rst_class==12) {   echo 'XII';
                                    } 
                                    ?>
                                </td>
                                <td><?php echo $RD->rst_year; ?></td>
                                <td><?php echo $RD->rst_no_students; ?></td>
                                <td><?php echo $RD->rst_no_pass_students; ?></td>
                                <td><?php echo $RD->rst_pass_per; ?></td>
                                <td><?php echo $RD->rst_subjects_name; ?></td>
                            </tr>
                            <?php }?>
                            </tbody>
                            </table>
                            
                            <?php }
                                
                            }elseif($Mas['emp_type']=="2"){
                               //print_r($Non);
                            ?>
                            <table width="100%" cellpadding="5" border="1">
                            <thead>
                            <tr style="background:#9e9e9e!important;">
                                <th>Name of Office / Vidyalaya</th>
                                <th>Designated Post</th>
                                <th>Duration of Service:From Date / To Date </th>
                                <th>Name of Section / Matters Detail</th>
                                <th>Any other responsibility discharged</th>
                                <th>Attached Documents</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($Non as $ND){?>
                                <tr>
                                <td><?php echo $ND->rsnt_vid_ofc_name; ?></td>
                                <td><?php echo $ND->rsnt_dign_post_name; ?></td>
                                <td><?php echo $ND->rsnt_from_date.' to '.$ND->rsnt_to_date; ?></td>
                                <td><?php echo $ND->rsnt_sec_mat_details; ?></td>
                                <td><?php echo $ND->rsnt_res_disp; ?></td>
                                <td><a href="<?php echo base_url().'img/ResImage/'.$ND->rsnt_doc_name;?>" download="download">Download</a></td>
                            </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                            <?php
                            }else{
                                 echo '<div class="col-md-12 text-danger text-center">No Record Found</div>';
                            } ?>
                            <hr>
                        </div>
                    </div>