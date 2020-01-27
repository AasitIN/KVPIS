<div style="background:#ffffff!important;" id="award_PDF">

    
    <?php if(count($AwardData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
            <hr>
            <table width="100%" cellpadding="5">
                <?php 
            foreach($AwardData as $row):
              if($row->is_award_received == 1):  
            ?>
            <tr >
                <td style="width:15%;"><b>Award</b></td><td style="width:1%;">:</td><td style="width:10%;"><?php if($row->award=='Other') echo $row->other_award_name; else echo $row->award ?></td>
                <td style="width:12%;"><b>Year </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo ucfirst($row->year_of_acheivement); ?></td>
                <td style="width:10%;"><b>Brief of Award </b></td><td style="width:1%;">:</td><td><?php echo ucfirst($row->award_brief); ?></td>
                <td style="width:10%;"><b>Designation </b></td><td style="width:1%;">:</td><td><?php echo ucfirst($row->designationname); ?></td>
            </tr>
            <tr></tr>
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
    <?php else:
                echo '<div class="col-md-12 p-2 pt-2"><div class="col-md-12 text-danger text-center"><hr>No Record Found<hr></div></div>'; 
        endif;?> 
    </div>  
                  