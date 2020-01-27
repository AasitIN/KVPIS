<div id="pay_PDF" style="background:#ffffff!important;">
   
    <?php if(count($PayData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
        <hr>
            <table width="100%" cellpadding="5">
            <tr>
                <td style="width:15%;"><b>Present Pay Level </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $PayData->present_paylevel; ?></td>
                <td style="width:12%;"><b>Pay Matrix </b></td><td style="width:1%;">:</td><td style="width:10%;"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $PayData->pay_range; ?></td>
                <td style="width:16%;"><b>Date of Next Increment </b></td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $PayData->date_of_increment; ?></td>
            </tr>
            </table>
        <hr>    
        </div>
    </div>
    
    <?php else:
                echo '<div class="col-md-12 p-2 pt-2"><div class="col-md-12 text-danger text-center"><hr>No Record Found<hr></div></div>'; 
        endif;?>   
</div>             
                   