<div style="background:#ffffff!important;" id="Service_PDF">
    <?php if(count($InitialServiceData) > 0 || count($PresentServiceData) > 0 || count($AllServiceData) > 0 ):?>
    <?php if (count($InitialServiceData) > 0 ){ ?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12"><hr></div>
        <div class="col-md-12 p-2 pt-2">
           
           <h6>Details of First Joining in KVS : </h6>    
        
            <table width="100%" cellpadding="5">
                <tr>
                    <td><b>Designation </b></td><td>:</td><td><?php echo ucfirst($InitialServiceData->designationname); ?></td>
                    <?php if($InitialServiceData->cat_id == 1) { ?><td ><b>Subject</b></td><td style="">:</td><td style=";"><?php echo ucfirst($InitialServiceData->subjectname); ?></td><?php } ?>
                    <td style=""><b>Place of Posting</b></td><td style="">:</td><td style=""><?php echo $InitialServiceData->rolename; ?></td>
                </tr>
                <tr>
                    <td><b><?php if($InitialServiceData->initial_place=='2') echo 'Units'; elseif($InitialServiceData->initial_place=='4') echo 'Zeit'; else echo 'Region'; ?></b></td><td style="">:</td><td><?php echo $InitialServiceData->region; ?></td>
                    <?php if($InitialServiceData->initial_place=='5') { ?><td><b>School</b></td><td style="">:</td><td><?php echo $InitialServiceData->school; ?></td><?php } ?>
                    <?php if($InitialServiceData->initial_unit=='5') { ?><td><b>Section</b></td><td style="">:</td><td><?php echo $InitialServiceData->section; ?></td><?php } ?>
                    <td style=""><b>KV Code</b></td><td style="">:</td><td style=""><?php echo $InitialServiceData->initial_kvcode; ?></td>
                </tr>
                <tr>
                    <?php if($InitialServiceData->initial_appoint_specialdrive == 1){ ?><td style=""><b>Appointment on NothEast Special Drive </b></td><td style="">:</td><td style=""><?php echo single_parent($InitialServiceData->initial_appoint_specialdrive); ?></td><?php } ?>
                    <?php if($InitialServiceData->initial_appoint_zone == 1){ ?><td style=""><b>Appointment on Zonal Basis </b></td><td style="">:</td><td style=""><?php echo single_parent($InitialServiceData->initial_appoint_zone); ?></td><?php } ?>
                    <?php if($InitialServiceData->initial_appoint_specialdrive == 1 || $InitialServiceData->initial_appoint_zone == 1) { ?><td style=""> <b>Zone</b></td><td style="">:</td><td style=""><?php echo  ucfirst($InitialServiceData->initial_zone); ?></td><?php } ?>
                    <td style=""><b>Whether Appointed on Trial Basis</b></td><td style="">:</td><td style=""><?php echo single_parent($InitialServiceData->initial_appoint_trail); ?></td>
                </tr>
                <?php if($InitialServiceData->initial_appoint_trail==1) { ?>
                <tr>
                    <td style=""><b>Trial Start Date </b></td><td style="">:</td><td style=""><?php echo $InitialServiceData->initial_trailsdate; ?></td>
                    <td style=""><b>Trial Completion Date</b></td><td style="">:</td><td style=""><?php echo  $InitialServiceData->initial_trailedate; ?></td>
                    <td style=""><b>Date of Regularization</b></td><td style="">:</td><td style=""><?php echo $InitialServiceData->initial_regulardate; ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td style=""><b>Recruitment Ground </b></td><td style="">:</td><td style=""><?php echo intial_recruitment($InitialServiceData->initial_appointed_term); ?></td>
                    <?php if(!empty($InitialServiceData->absorbtion_dept)) { ?><td style=""> <b>Name of Previous Department/b></td><td style="">:</td><td style=""><?php echo  ucfirst($InitialServiceData->absorbtion_dept); ?></td><?php } ?>
                    <td style=""><b>Whether Selected Against</b></td><td style="">:</td><td style=""><?php echo reserve_post($InitialServiceData->initial_category); ?></td>
                </tr>
                <tr>
                    <td style=""><b>Panel/Vacancy Year</b></td><td style="">:</td><td style=""><?php echo $InitialServiceData->initial_panel_year; ?></td>
                    <td style=""><b>Date of Joining</b></td><td style="">:</td><td style=""><?php echo $InitialServiceData->initial_joiningdate; ?></td>
                    <td style=""><b>Joining Confirmation Date</b></td><td style="">:</td><td style=""><?php echo $InitialServiceData->initial_confirmdate; ?></td>
                </tr>
                <tr>
                    <td style=""><b>Whether on Lien </b></td><td style="">:</td><td style=""><?php echo single_parent($InitialServiceData->initial_lien); ?></td>
                    <?php if($InitialServiceData->initial_lien == 1){ ?><td style=""><b>Lien Start Date</b></td><td style="">:</td><td style=""><?php echo  $InitialServiceData->initial_liensdate; ?></td><?php } ?>
                    <?php if($InitialServiceData->initial_lien == 1){ ?><td style=""><b>Lien End Date</b></td><td style="">:</td><td style=""><?php echo $InitialServiceData->initial_lienedate; ?></td><?php } ?>
                </tr>
            </table>
            <hr>
            
           
         
        </div>
    </div>
    <?php } ?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
           <h6>Present Post Details : </h6>    
        
            <table width="100%" cellpadding="5">
                <tr>
                    <td><b>Designation </b></td><td>:</td><td><?php echo ucfirst($PresentServiceData->designationname); ?></td>
                    <?php if($PresentServiceData->cat_id == 1) { ?><td ><b>Subject</b></td><td style="">:</td><td style=";"><?php echo ucfirst($PresentServiceData->subjectname); ?></td><?php } ?>
                    <td style=""><b>Place of Posting</b></td><td style="">:</td><td style=""><?php echo $PresentServiceData->rolename; ?></td>
                </tr>
                <tr>
                    <td><b><?php if($PresentServiceData->present_place=='2') echo 'Units'; elseif($PresentServiceData->present_place=='4') echo 'Zeit'; else echo 'Region'; ?></b></td><td style="">:</td><td><?php echo $PresentServiceData->region; ?></td>
                    <?php if($PresentServiceData->present_place=='5') { ?><td><b>School</b></td><td style="">:</td><td><?php echo $PresentServiceData->school; ?></td><?php } ?>
                    <?php if($PresentServiceData->present_unit=='5') { ?><td><b>Section</b></td><td style="">:</td><td><?php echo $PresentServiceData->section; ?></td><?php } ?>
                    <td style=""><b>KV Code</b></td><td style="">:</td><td style=""><?php echo $PresentServiceData->present_kvcode; ?></td>
                </tr>
                <tr>
                    <td style=""><b>Date of Joining</b></td><td style="">:</td><td style=""><?php echo $PresentServiceData->present_joiningdate; ?></td>
                    <td style=""> <b>Zone</b></td><td style="">:</td><td style=""><?php echo  ucfirst($PresentServiceData->present_zone); ?></td>
                    <td style=""><b>Whether Appointed on Trial Basis</b></td><td style="">:</td><td style=""><?php echo single_parent($PresentServiceData->present_appoint_trail); ?></td>
                </tr>
                <?php if($PresentServiceData->present_appoint_trail==1) { ?>
                <tr>
                    <td style=""><b>Trial Start Date </b></td><td style="">:</td><td style=""><?php echo $PresentServiceData->present_trailsdate; ?></td>
                    <td style=""> <b>Trial Completion Date</b></td><td style="">:</td><td style=""><?php echo  $PresentServiceData->present_trailedate; ?></td>
                    <td style=""><b>Date of Regularization</b></td><td style="">:</td><td style=""><?php echo $PresentServiceData->present_regulardate; ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td style=""><b>Recruitment Ground </b></td><td style="">:</td><td style=""><?php echo direct_recruitment($PresentServiceData->present_appointed_term); ?></td>
                    <?php if(!empty($PresentServiceData->present_appointed_term==6)) { ?><td style=""> <b>Notional Date/b></td><td style="">:</td><td style=""><?php echo  $PresentServiceData->present_notionaldate; ?></td><?php } ?>
                    <?php if(!empty($PresentServiceData->present_appointed_term==6)) { ?><td style=""><b>Reason & Reference No of Notional Promotion</b></td><td style="">:</td><td style=""><?php echo ucfirst($PresentServiceData->reason_notional); ?></td><?php } ?>
                </tr>
                <tr>
                    <td style=""><b>Whether Selected Against </b></td><td style="">:</td><td style=""><?php echo reserve_post($PresentServiceData->present_category); ?></td>
                    <td style=""> <b>Seniority No of Post:</b></td><td style="">:</td><td style=""><?php echo  $PresentServiceData->seniorityno; ?></td>
                    <td style=""><b>Panel/Vacancy Year</b></td><td style="">:</td><td style=""><?php echo $PresentServiceData->present_panel_year; ?></td>
                </tr>
            
            </table>
            <hr>
        </div>
    </div>
    
    <?php if(count($AllServiceData) > 0): ?>    
        <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
           <h6>Details of all posting since Joining in KVS : </h6>    
        
            <?php 
                foreach($AllServiceData as $row):
                    
            ?>
            
            <table width="100%" cellpadding="5">
                <tr>
                    <td><b>Designation </b></td><td>:</td><td><?php echo ucfirst($row->designationname); ?></td>
                    <?php if($row->cat_id == 1) { ?><td ><b>Subject</b></td><td style="">:</td><td style=";"><?php echo ucfirst($row->subjectname); ?></td><?php } ?>
                    <td style=""><b>Place of Posting</b></td><td style="">:</td><td style=""><?php echo $row->rolename; ?></td>
                </tr>
                <tr>
                    <td><b><?php if($row->all_place=='2') echo 'Units'; elseif($row->all_place=='4') echo 'Zeit'; else echo 'Region'; ?></b></td><td style="">:</td><td><?php echo $row->region; ?></td>
                    <?php if($row->all_place=='5') { ?><td><b>School</b></td><td style="">:</td><td><?php echo $row->school; ?></td><?php } ?>
                    <?php if($row->all_unit=='5') { ?><td><b>Section</b></td><td style="">:</td><td><?php echo $row->section; ?></td><?php } ?>
                    <td style=""><b>KV Code</b></td><td style="">:</td><td style=""><?php echo $row->all_kvcode; ?></td>
                </tr>
                <tr>
                    <td style=""><b>Date From</b></td><td style="">:</td><td style=""><?php echo $row->s_from; ?></td>
                    <td style=""> <b>Date To</b></td><td style="">:</td><td style=""><?php echo  ucfirst($row->s_to); ?></td>
                    <td style=""><b>Whether Appointed on Trial Basis</b></td><td style="">:</td><td style=""><?php echo single_parent($row->all_appoint_trail); ?></td>
                </tr>
                <?php if($row->all_appoint_trail==1) { ?>
                <tr>
                    <td style=""><b>Trial Start Date </b></td><td style="">:</td><td style=""><?php echo $row->alltrailstart; ?></td>
                    <td style=""> <b>Trial Completion Date</b></td><td style="">:</td><td style=""><?php echo  $row->alltrailend; ?></td>
                    <td style=""><b>Date of Regularization</b></td><td style="">:</td><td style=""><?php echo $row->alltrailregular; ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td style=""><b>Ground of Transfer(Exit) </b></td><td style="">:</td><td style=""><?php echo transfer_reason($row->transfer_ground); ?></td>
                    <td style=""><b>Panel/Vacancy Year</b></td><td style="">:</td><td style=""><?php echo $row->all_panel_year; ?></td>
                </tr>
               
            </table>
            <hr>
            
            <?php     
                endforeach;
            ?>
        
        </div>
    </div>
    <?php endif;?> 
    
    <?php if(count($LeaveData) > 0): ?>    
        <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
           <h6>Leave Details : </h6>    
        
            <?php 
                foreach($LeaveData as $row):
                if($row->leave_type!=5):    
            ?>
            
            <table width="100%" cellpadding="5">
                <tr>
                    <td><b>Leave Type </b></td><td>:</td><td><?php echo leave_type($row->leave_type); ?></td>
                    <td ><b>Leave From</b></td><td style="">:</td><td style=";"><?php echo $row->from_date; ?></td>
                    <td style=""><b>Leave To</b></td><td style="">:</td><td style=""><?php echo $row->to_date; ?></td>
                </tr>
                <tr>
                    <td><b>Duration </b></td><td>:</td><td><?php echo $row->duration . 'days'; ?></td>
                </tr>
                
            </table>
            <hr>
            
            <?php 
                endif;
                endforeach;
            ?>
        
        </div>
    </div>
    <?php endif;?> 
    
    <?php if(count($OtherData) > 0): ?>    
        <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
           <h6>Other Details : </h6>    
        
            
            
            <table width="100%" cellpadding="5">
                <tr>
                    <td><b>Due Date of Retirement</b></td><td>:</td><td><?php echo $date_of_retirement; ?></td>
                    <td ><b>Age below 40 Years</b></td><td style="">:</td><td style=";"><?php echo single_parent($age); ?></td>
                 </tr>
               
            </table>
            <hr>
           
        </div>
    </div>
    <?php endif;?> 
    
    <?php if(count($DisciplinaryData) > 0): ?>    
        <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
           <h6>Vigilance / Disciplinary Details : </h6>    
        
            <?php 
                foreach($DisciplinaryData as $row):
            ?>
            
            <table width="100%" cellpadding="5">
                <tr>
                    <td><b>Whether Any Disciplinary Case is Contemplated / Pending </b></td><td>:</td><td><?php echo single_parent($row->is_desciplinary_case); ?></td>
                    <?php if($row->is_desciplinary_case==1) { ?><td ><b>Disciplinary Action/Dept. Proceedings</b></td><td style="">:</td><td style=";"><?php echo disciplinary_action($row->disciplinary_action_name); ?></td><?php } ?>
                    <?php if($row->is_desciplinary_case==1) { ?><td style=""><b>From</b></td><td style="">:</td><td style=""><?php echo $row->from_date; ?></td><?php } ?>
                </tr>
                <tr>
                    <?php if($row->is_desciplinary_case==1) { ?><td><b>To </b></td><td>:</td><td><?php echo $row->to_date ; ?></td><?php } ?>
                </tr>
                
            </table>
           <hr>
            <table width="100%" cellpadding="5">
                <tr>
                    <td><b>Dies Non </b></td><td>:</td><td><?php echo single_parent($row->is_dies_non); ?></td>
                    <?php if($row->is_dies_non==1) { ?><td><b>Dies Non Start Date </b></td><td>:</td><td><?php echo $row->dies_non_start_date ; ?></td><?php } ?>
                    <?php if($row->is_dies_non==1) { ?><td><b>Dies Non End Date </b></td><td>:</td><td><?php echo $row->dies_non_end_date ; ?></td><?php } ?>
                </tr>
                
            </table>
            <hr>
            
            <?php 
                endforeach;
            ?>
        
        </div>
    
    <?php endif;?> 
    
    
    <?php else:
                echo '<div class="col-md-12 p-2 pt-2"><div class="col-md-12 text-danger text-center"><hr>No Record Found<hr></div></div>'; 
            endif;?> 
    </div>
    </div>  
                  