<div style="background:#ffffff!important;" id="perfermance_PDF">

    <?php 
	//pr(AparData);
	if(count($AparData) > 0):?>
    
    <div class="row m-1" style="background:#ffffff!important;">
        <div class="col-md-12 p-2 pt-2">
        <hr>    
            
            <table width="70%" cellpadding="5">
                <?php 
                $sum=0;
				$count=0 ;
            foreach($AparData as $row):
			    if($count<5){
					$sum=$sum + $row->grading;
                }
            ?>
            <tr >
                <td style="width:15%;"><b>Year</b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $row->year; ?></td>
                <td style="width:12%;"><b>Grading </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $row->grading; ?></td>
                <td style="width:12%;"><b>Remark </b></td><td style="width:1%;">:</td><td style="width:10%;"><?php echo $row->remark; ?></td>
            </tr>
            <?php
			    $count++ ; 
                endforeach;
               
            ?>
            </table>
            <br>
            <b>Average</b> -  <?php echo round($sum/5,2) ; ?>

        <hr>
        </div>
        </div>
    <?php else:
                echo '<div class="col-md-12 p-2 pt-2"><div class="col-md-12 text-danger text-center"><hr>No Record Found<hr></div></div>'; 
        endif;?>  
    </div>  
                  