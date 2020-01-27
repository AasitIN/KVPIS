<div style="background:#ffffff!important;" id="promotion_PDF">

     
    <?php if(count($PromotionData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
        <hr>    
            <?php 
            foreach($PromotionData as $row):
                if($row->is_promoted_demoted == 1):
            ?>
            
            <table width="100%" cellpadding="5">
            <tr>
                <td style="width:15%;"><b>Promotion Type</b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo promotion_type($row->promotion_type); ?></td>
                <td style="width:12%;"><b>Promoted From </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo designation_list($row->promoted_demoted_from); ?></td>
                <td style="width:16%;"><b>Promoted To</b></td><td style="width:1%;">:</td><td style="width:15%;"><?php echo  designation_list($row->promoted_demoted_to); ?></td>
            </tr>
            <tr>
                <td style=""> <b>Order No</b></td><td style="">:</td><td style=""><?php echo  $row->promotion_order_no; ?></td>
                <td style=""><b> Order Date</b></td><td style="">:</td><td style=""><?php echo ucfirst($row->promotion_order_date); ?></td>
                <td style=""><b> Date of Actual Joining </b></td><td style="">:</td><td style=""><?php echo ucfirst($row->promotion_demotion_date); ?></td>    
            </tr>
            <tr>
                <?php if(isset($row->notional_joining_date)):?>    
                <td style=""> <b>Date of Notional Joining</b></td><td style="">:</td><td><?php echo  $row->notional_joining_date; ?></td>
                <?php endif;?>
            </tr>
            <?php if($row->is_debarred== 1):?> 
            <tr>
                <td style=""> <b>Debarred Letter No </b></td><td style="">:</td><td style=""><?php echo  $row->debarred_letter_no; ?></td>
                <td style=""><b> Debarred From </b></td><td style="">:</td><td style=""><?php echo $row->debarred_from; ?></td>
                <td style=""><b> Debarred To</b></td><td style="">:</td><td style=""><?php echo ucfirst($row->debarred_to); ?></td>    
            </tr>
            <?php endif;?>
            </table>
            
            <?php  else:?>
                <p class="text-center text-bold"><em>Employee did not get any promotion</em></p>
            <?php     
                endif;
                endforeach;
            ?>
        <hr>
        </div>
        </div>
      
    <?php else:
            echo '<div class="col-md-12 p-2 pt-2"><div class="col-md-12 text-danger text-center"><hr>No Record Found<hr></div></div>'; 
        endif;?>   

<!------ Demotion Details------>

    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-10">
            <h6>Reversion Details : </h6>    
        </div>
        
    </div> 
    <?php if(count($DemotionData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
        <hr>    
            <?php 
            foreach($DemotionData as $r):
                
                if($r->is_promoted_demoted == 1):
            ?>
            
            <table width="100%" cellpadding="5">
            <tr>
                <td style="width:15%;"><b>Demotion/Revertion From </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo  designation_list($r->promoted_demoted_from); ?></td>
                <td style="width:12%;"><b>Demotion/Revertion To  </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo designation_list($r->promoted_demoted_to); ?></td>
                <td style="width:16%;"><b>Date of Demotion/Reversion </b></td><td style="width:1%;">:</td><td style="width:15%;"><?php echo  $r->promotion_demotion_date; ?></td>
            </tr>
           
          
            </table>
            
            <?php  else:?>
        <p class="text-center text-bold"><em>Employee did not get any demotion</em></p>
            <?php     
                endif;
                endforeach;
            ?>
        <hr>    
        </div>
    </div>
    
    <?php else:
                echo '<div class="col-md-12 p-2 pt-2"><div class="col-md-12 text-danger text-center"><hr>No Record Found<hr></div></div>'; 
        endif;?> 
</div>
                  