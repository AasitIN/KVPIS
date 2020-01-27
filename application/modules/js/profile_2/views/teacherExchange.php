<div id="teacher-exchange">
<?php if(count($TeacherExchangeData) > 0):?>
    <div class="row m-1" <?php echo ($TeacherExchangeData->is_exchange_prog == 1)?"style=background:#ffffff!important;display:block;display:flex":"style=display:none"?>>
        <div class="col-md-10">
            <h6>Teacher Exchange Details : </h6>    
        </div>
        <div class="col-md-1" style="padding-right:0px!important;">
            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/teacher_exchange?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
        </div>
        <div class="col-md-1" style="padding-left:0px!important;">
            <button id="pdf"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
        </div>
    </div> 
    <div class="row m-1" style="background:#ffffff!important;">
        <?php if($TeacherExchangeData->is_exchange_prog == 1):?>
        <div class="col-md-12 p-2 pt-2">
            
           
            <table width="100%" cellpadding="5">
            <tr>
                <td style="width:15%;"><b>Name Of Exchange Program </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $TeacherExchangeData->program_name; ?></td>
                <td style="width:12%;"><b>Order No </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo ucfirst($TeacherExchangeData->program_order_no); ?></td>
                <td style="width:16%;"><b>Country </b></td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $TeacherExchangeData->country_name; ?></td>
            </tr>
            <tr>
                <td style=""> <b>Date From </b></td><td style="">:</td><td style=""><?php echo  $TeacherExchangeData->date_from; ?></td>
                <td style=""><b> Date To </b></td><td style="">:</td><td style=""><?php echo ucfirst($TeacherExchangeData->date_to); ?></td>
                <td style=""><b> Duration</b></td><td style="">:</td><td style=""><?php echo ucfirst($TeacherExchangeData->duration); ?></td>
            </tr>
           
            </table>
            <hr>
            
           
           
            
         
        </div>
<?php else:?>
<p>Employee did not participate in this program</p>
<?php endif;?>
       
    </div>  
<?php else:?>
<h5 style="padding:5px">No Records Available </h5>
<?php endif;?>                  
</div>                    