<div id="family_PDF" style="background:#ffffff!important;">
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
        <hr>
        <?php if(count($FamilyData) > 0):?>    
            <?php 
            foreach($FamilyData as $row):
               
            ?>
            <table width="100%" cellpadding="5">
            <tr>
                <td style="width:15%;"><b>Relation</b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $row->relation; ?></td>
                <td style="width:12%;"><b><?php echo $row->relation."'s "; ?>Name: </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo ucfirst($row->title.' '.$row->name); ?></td>
               
            </tr>
            <tr>
            <td style="width:16%;"><b>DOB</b></td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $row->dob; ?></td>
                <td style=""><b> Age </b></td><td style="">:</td><td style=""><?php echo ucfirst($row->age); ?></td>
              
            </tr>
            <tr>
                <td style=""> <b>Dependent</b></td><td style="">:</td><td style=""><?php echo  single_parent($row->dependent); ?></td>
               
              
            </tr>
            </table>
            
            <?php  
                endforeach;
            ?>
            <?php else:
                echo '<div class="col-md-12 text-danger text-center">No Record Found</div>'; 
            endif;?> 
            <hr>
        </div>
    </div>
    <!----- spouse details--------->
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12">
            <h6>Spouse Details : </h6>    
        </div>
    </div> 
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
            <hr>
            <?php if(count($SpouseData) > 0):?>
            <?php 
            foreach($SpouseData as $spouseRow):
                
            ?>
            <table width="100%" cellpadding="5">
            <tr>
                <td style="width:15%;"><b>Spouse Name</b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo ucfirst($spouseRow->spouse_name); ?></td>
                <td style="width:12%;"><b>Govt. Service: </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo single_parent($spouseRow->is_govt_service); ?></td>
               
            </tr>
            <?php if($spouseRow->is_govt_service == 1): ?>
            <tr>
           
            <?php if($spouseRow->org_name == 'KVS'): ?>    
            <td style="width:16%;"><b>Organization Name</b></td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $spouseRow->org_name; ?></td>
            <td style=""><b> Employee Code </b></td><td style="">:</td><td style=""><?php echo ucfirst($spouseRow->spouse_emp_code); ?></td>
            <?php else:?>
            <td style=""><b>Other Organization Name</b></td><td style="">:</td><td style=""><?php echo ucfirst($spouseRow->other_org_name); ?></td>
            <td style=""><b>Post Held</b></td><td style="">:</td><td style=""><?php echo ucfirst($spouseRow->other_org_post); ?></td>
            <?php endif;?>
            </tr>
            <tr>
                <?php if($spouseRow->org_name == 'KVS'): ?>    
                <td style=""> <b>Designation</b></td><td style="">:</td><td style=""><?php echo  designation_list($spouseRow->designation); ?></td>
                <td style=""> <b>Subject </b></td><td style="">:</td><td style=""><?php echo  subject_name_by_id($spouseRow->subject); ?></td>
                <?php else:?>
                <td style=""><b>Post Held</b></td><td style="">:</td><td style=""><?php echo ucfirst($spouseRow->other_org_post); ?></td>
                <td style=""><b>Place of Posting</b></td><td style="">:</td><td style=""><?php echo ucfirst($spouseRow->other_org_posting_place); ?></td>
                <?php endif;?>
                
            </tr>
            <?php if($spouseRow->org_name == 'KVS'): ?>
            <tr>
                <td style=""> <b>Place of Posting</b></td><td style="">:</td><td style=""><?php echo  role_lists_by_id($spouseRow->posting_place); ?></td>
                <td style=""> <b>Region</b></td><td style="">:</td><td style=""><?php echo  region_lists_by_id($spouseRow->region); ?></td>
            </tr>
            <?php endif;?>
            <?php if($spouseRow->org_name == 'KVS'): ?>
            <tr>
                <td style=""> <b>School</b></td><td style="">:</td><td style=""><?php echo  school_lists_by_id($spouseRow->school); ?></td>
            </tr>
            <?php endif;?>
            <?php endif; ?>
            </table>
            
            <?php endforeach; ?>
            <?php else:
                echo '<div class="col-md-12 text-danger text-center">No Record Found</div>'; 
            endif;?> 
            <hr>
        </div>
    </div>
</div>                    