<div id="teacher-exchange">
<?php if(count($PayData) > 0):?>
    <div class="row m-1" <?php //echo ($TeacherExchangeData->is_exchange_prog == 1)?"style=background:#ffffff!important;display:block":"style=display:none"?>>
        <div class="col-md-10">
            <h6>Pay Details : </h6>    
        </div>
        <div class="col-md-1" style="padding-right:0px!important;">
            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/payscale_section?EC=".base64_encode($PayData->emp_id);?>"><i class="fas fa-edit"></i></a>
        </div>
        <div class="col-md-1" style="padding-left:0px!important;">
            <button id="pdf2"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
        </div>
    </div> 
    <div class="row m-1" style="background:#ffffff!important;">
        
        <div class="col-md-12 p-2 pt-2">
            
           
            <table width="100%" cellpadding="5">
            <tr>
                <td style="width:15%;"><b>Present Pay Level </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $PayData->present_paylevel; ?></td>
                <td style="width:12%;"><b>Pay Range </b></td><td style="width:1%;">:</td><td style="width:10%;"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $PayData->pay_range; ?></td>
                <td style="width:16%;"><b>Date of Next Increment </b></td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $PayData->date_of_increment; ?></td>
            </tr>
            
            </table>
            <hr>
            
           
           
            
         
        </div>

        </div>
    
    <?php else:?>
<h5 style="padding:5px">No Records Available </h5>
<?php endif;?>   
    </div>  
               
                   