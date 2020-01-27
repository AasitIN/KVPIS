<div id="financial">
<?php if(count($FinancialData) > 0):?>
    <div class="row m-1" <?php echo (count($FinancialData) >0 )?"style=display:block;display:flex;background:#ffffff!important;":"style=display:none"?>>
        <div class="col-md-10">
            <h6>Financial Upgradation Details : </h6>    
        </div>
        <div class="col-md-1" style="padding-right:0px!important;">
            <a id="edit" class="btn btn-primary float-right m-1" href="<?php echo site_url()."employee/financial?EC=".base64_encode($PerData->emp_code);?>"><i class="fas fa-edit"></i></a>
        </div>
        <div class="col-md-1" style="padding-left:0px!important;">
            <button id="pdf"  class="btn btn-danger float-left m-1"><i class="fas fa-print"></i></button>
        </div>
    </div> 
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
            <?php 
             foreach($FinancialData as $row):
            ?>
           
            <table width="100%" cellpadding="5">
            <tr>
                <td style="width:15%;"><b>Promotion Type</b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo financial_type($row->upgradation_type); ?></td>
                <td style="width:12%;"><b>Level From </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo level($row->level_from); ?></td>
               
            </tr>
            <tr>
            <td style="width:16%;"><b>Level To</b></td><td style="width:1%;">:</td><td style="width:15%;"><?php echo level($row->level_to); ?></td>
                <td style=""> <b>Order No </b></td><td style="">:</td><td style=""><?php echo  $row->order_no; ?></td>
                
               
            </tr>
            <tr>
            <td style=""><b> Order Date</b></td><td style="">:</td><td style=""><?php echo ucfirst($row->fdate); ?></td>
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