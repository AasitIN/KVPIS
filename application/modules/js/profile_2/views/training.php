<div id="training_detail">
<?php if(count($TrainingData) > 0 || count($OtherTrainingData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-10">
            <h6>Training & Workshops : </h6>    
        </div>
        <div class="col-md-1" style="padding-right:0px!important;">
            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/training_section?EC=".base64_encode($AparData[0]->emp_id);?>"><i class="fas fa-edit"></i></a>
        </div>
        <div class="col-md-1" style="padding-left:0px!important;">
            <button id="pdf2"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
        </div>
    </div> 
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
           <?php if($TrainingData[0]->is_attended_training == 1) ?><h6>Training Details : </h6>    
        
            <?php 
            
            foreach($TrainingData as $row):
                if($row->is_attended_training == 1):
            ?>
            
            <table width="100%" cellpadding="5">
            <tr>
                <td><b>Course</b></td><td>:</td><td><?php echo course_type($row->course); ?></td>
                <td><b>Designation </b></td><td>:</td><td><?php echo ucfirst($row->designationname); ?></td>
                
            </tr>
            <tr>
                <?php if($row->cat_id == 1) { ?><td ><b>Subject</b></td><td style="">:</td><td style=";"><?php echo ucfirst($row->subjectname); ?></td><?php } ?>
                <td style=""> <b>Spell</b></td><td style="">:</td><td style=""><?php echo  spell($row->spell); ?></td>
                <td style=""><b>Duration</b></td><td style="">:</td><td style=""><?php echo $row->duration.' days'; ?></td>
            </tr>
            <tr>
                <td style=""><b>Role </b></td><td style="">:</td><td style=""><?php echo training_role($row->role); ?></td>
                <?php if($row->role == 4) { ?><td style=""> <b>Grading</b></td><td style="">:</td><td style=""><?php echo  ucfirst($row->grading); ?></td><?php } ?>
                <td style=""><b>Venue</b></td><td style="">:</td><td style=""><?php echo $row->rolename; ?></td>
            </tr>
            <tr>
                <td><b><?php if($row->venuetype=='2') echo 'Units'; elseif($row->venuetype=='4') echo 'Zeit'; else echo 'Region'; ?></b></td><td style="">:</td><td><?php echo $row->region; ?></td>
                <?php if($row->venuetype=='5') { ?><td><b>School</b></td><td style="">:</td><td><?php echo $row->school; ?></td><?php } ?>
                    
            </tr>
           
            </table>
            <hr>
            
            <?php     
                   
                endif;
                endforeach;
                
            ?>
         
        </div>
        </div>
        
        <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
           <?php if(count($OtherTrainingData) > 0) ?><h6>Workshop Details : </h6>    
        
            <?php 
                foreach($OtherTrainingData as $row):
                    
            ?>
            
            <table width="100%" cellpadding="5">
            <tr>
                <td><b>Organizing Agency</b></td><td>:</td><td><?php echo training_agency($row->organizing_agency); ?></td>
                <?php if($row->organizing_agency==1) { ?><td><b>Govt Agency Name </b></td><td>:</td><td><?php echo govt_org($row->govt_agency); ?></td><?php } ?>
                <?php if($row->organizing_agency==2) { ?><td><b>Non Govt Agency Name </b></td><td>:</td><td><?php echo ucfirst($row->non_gov_agency_name); ?></td><?php } ?>
            </tr>
            <tr>
                <td ><b>Address Of Organization:</b></td><td style="">:</td><td style=";"><?php echo ucfirst($row->org_address); ?></td>
                <td style=""><b>Training Venue</b></td><td style="">:</td><td style=""><?php echo  ucfirst($row->trainingvenue); ?></td>
                <td style=""><b>Trainingtopic</b></td><td style="">:</td><td style=""><?php echo ucfirst($row->trainingtopic); ?></td>
            </tr>
            <tr>
                <td style=""><b>Date From </b></td><td style="">:</td><td style=""><?php echo ($row->t_from); ?></td>
                <td style=""> <b>Date To</b></td><td style="">:</td><td style=""><?php echo  ($row->t_to); ?></td>
                <td style=""><b>Duration</b></td><td style="">:</td><td style=""><?php echo $row->duration; ?></td>
            </tr>
            <tr>
                <td><b>Designation </b></td><td>:</td><td><?php echo ucfirst($row->designationname); ?></td>
                <?php if($row->cat_id == 1) { ?><td ><b>Subject</b></td><td style="">:</td><td style=";"><?php echo ucfirst($row->subjectname); ?></td><?php } ?>
                <td style=""><b>Role </b></td><td style="">:</td><td style=""><?php echo training_role($row->role); ?></td>
            </tr>
            <tr>
                <?php if($row->role == 4) { ?><td style=""> <b>Grading</b></td><td style="">:</td><td style=""><?php echo  ucfirst($row->grading); ?></td><?php } ?>
            </tr>
           
            </table>
            <hr>
            
            <?php     
                endforeach;
            ?>
           
          
            
         
        </div>
        </div>
    
    <?php else:?>
<h5 style="padding:5px">No Records Available </h5>
<?php endif;?> 
    </div>  
                  