<div style="background:#ffffff!important;" id="teacher_PDF">

     
    <?php if(count($TeacherExchangeData) > 0):?>
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
        <hr>    
            <?php foreach($TeacherExchangeData as $row): 
                if($row->is_exchange_prog == 1):?>
            <table width="100%" cellpadding="5">
            <tr>
                <td style="width:15%;"><b>Name Of Exchange Program </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $row->program_name; ?></td>
                <td style="width:12%;"><b>Order No </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo ucfirst($row->program_order_no); ?></td>
                <td style="width:16%;"><b>Country </b></td><td style="width:1%;">:</td><td style="width:15%;"><?php echo $row->country_name; ?></td>
            </tr>
            <tr>
                <td style=""> <b>Date From </b></td><td style="">:</td><td style=""><?php echo  $row->date_from; ?></td>
                <td style=""><b> Date To </b></td><td style="">:</td><td style=""><?php echo ucfirst($row->date_to); ?></td>
                <td style=""><b> Duration</b></td><td style="">:</td><td style=""><?php echo ucfirst($row->duration); ?></td>
            </tr>
           
            </table>
            <?php else:?>
                <p class="text-center text-bold"><em>Employee did not participate in this program</em></p>
            <?php endif;endforeach; ?>
        <hr>
        </div>
    </div>  
    <?php else:
        echo '<div class="col-md-12 p-2 pt-2"><div class="col-md-12 text-danger text-center"><hr>No Record Found<hr></div></div>'; 
    endif;?>                  
</div>                    