<div id="performance">
<?php if(count($AwardData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-10">
            <h6>Award Details : </h6>    
        </div>
        <div class="col-md-1" style="padding-right:0px!important;">
            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/award_section?EC=".base64_encode($AparData[0]->emp_id);?>"><i class="fas fa-edit"></i></a>
        </div>
        <div class="col-md-1" style="padding-left:0px!important;">
            <button id="pdf2"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
        </div>
    </div> 
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
            
            
            <table width="70%" cellpadding="5" style="background:#9e9e9e!important;">
                <?php 
            foreach($AwardData as $row):
              if($row->is_award_received == 1):  
            ?>
            <tr >
                <td style="width:15%;"><b>Award</b></td><td style="width:1%;">:</td><td style="width:10%;"><?php if($row->award=='Other') echo $row->other_award_name; else echo $row->award ?></td>
                <td style="width:12%;"><b>Year </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo ucfirst($row->year_of_acheivement); ?></td>
                <td style="width:12%;"><b>Brief of Award </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo ucfirst($row->award_brief); ?></td>
            </tr>
                <?php  else:?>
                <p>Employee did not recieve any award.</p>
            <?php
                endif;
                endforeach;
            ?>
            </table>
            <hr>
           
           
          
            
         
        </div>
        </div>
    <?php else:?>
<h5 style="padding:5px">No Records Available </h5>
<?php endif;?> 
    </div>  
                  