<div style="background:#ffffff!important;" id="foreign_PDF">
    
    <?php if(count($ForeignVisitData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
        <hr>    
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
            <?php  else:?>
                <p class="text-center text-bold"><em>Employee did not go for any foreign visit</em></p>
            <?php     
                endif;
                endforeach;
            ?>
        <hr> 
        </div>
        </div>
    </div>  
<?php else:
    echo '<div class="col-md-12 p-2 pt-2"><div class="col-md-12 text-danger text-center"><hr>No Record Found<hr></div></div>'; 
endif;?>                  
</div>                    