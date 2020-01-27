<div id="foreign-vist">
<?php if(count($ForeignVisitData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-10">
            <h6>Foreign Visit Details : </h6>    
        </div>
        <div class="col-md-1">
            <button id="edit" class="float-right"><i class="fas fa-edit text-primary"></i></button>
        </div>
        <div class="col-md-1">
            <button id="pdf2"  class="float-left"><i class="fas fa-print text-danger"></i></button>
        </div>
    </div> 
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
            
            <?php 
            foreach($ForeignVisitData as $row):
                if($row->is_country_visit == 1):
            ?>
            <table width="100%" cellpadding="5">
            <tr>
                <td style="width:15%;"><b>Year</b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $row->visit_year; ?></td>
                <td style="width:12%;"><b>Country Name </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo ucfirst($row->country_name); ?></td>
                <td style="width:16%;"><b>Order No</b></td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $row->order_no; ?></td>
            </tr>
            <tr>
                <td style=""> <b>Duration</b></td><td style="">:</td><td style=""><?php echo  $row->duration; ?></td>
                <td style=""><b> Purpose</b></td><td style="">:</td><td style=""><?php echo ucfirst($row->purpose); ?></td>
              
            </tr>
           
            </table>
            <hr>
            <?php  else:?>
            <p>Employee did not go for any foreign visit</p>
            <?php     
                   
                endif;
                endforeach;
                
            ?>
           
          
            
         
        </div>
        </div>
    <?php else:?>
<h5 style="padding:5px">No Records Available </h5>
<?php endif;?> 
    </div>  
                  