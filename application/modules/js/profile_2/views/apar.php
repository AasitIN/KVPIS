<div id="performance">
<?php if(count($AparData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-10">
            <h6>Apar Details : </h6>    
        </div>
        <div class="col-md-1" style="padding-right:0px!important;">
            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/performance_section?EC=".base64_encode($AparData[0]->emp_id);?>"><i class="fas fa-edit"></i></a>
        </div>
        <div class="col-md-1" style="padding-left:0px!important;">
            <button id="pdf2"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
        </div>
    </div> 
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
            
            
            <table width="70%" cellpadding="5" style="background:#9e9e9e!important;">
                <?php 
                $sum=0;
            foreach($AparData as $row):
                $sum=$sum + $row->grading;
                
            ?>
            <tr >
                <td style="width:15%;"><b>Year</b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $row->year; ?></td>
                <td style="width:12%;"><b>Grading </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $row->grading; ?></td>
            </tr>
            <?php
                endforeach;
               
            ?>
            </table>
            <br>
            <b>Average</b> -  <?php echo round($sum/count($AparData),2) ; ?>

            <hr>
           
           
          
            
         
        </div>
        </div>
    <?php else:?>
<h5 style="padding:5px">No Records Available </h5>
<?php endif;?> 
    </div>  
                  