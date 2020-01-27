<div style="background:#ffffff!important;" id="financial_PDF">

    
    <?php if(count($FinancialData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
            <hr>
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
      
    <?php else:
        echo '<div class="col-md-12 p-2 pt-2"><div class="col-md-12 text-danger text-center"><hr>No Record Found<hr></div></div>'; 
        endif;?>              
</div>                    