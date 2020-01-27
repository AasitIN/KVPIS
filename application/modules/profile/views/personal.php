<div class="row mt-0 m-1" style="background:#ffffff!important;" id="Personal_PDF">
<div class="col-md-12"><hr></div>
<div class="col-md-4">
    <div class="h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="profile-card py-3 card text-center">
                <div class="card-body py-4">
                <img class="profile-picture rounded-circle" src="<?php echo base_url()."img/ProImage/".$PerData->emp_photo;?>" style="height: 125px!important; width: 125px!important;"/>
                <h6 class="text-dark mt-4 mb-1">
                    <?php 
                    if($PerData->emp_title==1){ $title='Sh.'; } elseif ($PerData->emp_title==2) { $title='Smt.'; } elseif ($PerData->emp_title==3) { $title='Ms.'; } else {  $title=''; }
                    echo $title.' '.$PerData->emp_first_name.' '.$PerData->emp_middle_name.' '.$PerData->emp_last_name; 
                    echo '&nbsp;('.$PerData->emp_code.')';
                    ?>
                </h6>
                <hr>
                <div class="text-muted font-weight-bold small">
                <?php echo ucfirst($PresentServiceData->designationname); ?>
                <div class="clearfix"></div>
                <?php
                if(!empty($PresentServiceData->subjectname)){
                    echo '('.ucfirst($PresentServiceData->subjectname).')';
                }
                ?>
                </div>
                <hr>
                <div class="text-muted font-weight-bold small">
                <?php 
                if($PresentServiceData->present_place=='5'){ echo $PresentServiceData->school; } 
                if($PresentServiceData->present_unit=='5') { echo $PresentServiceData->section; }
                ?>
                <div class="clearfix"></div>
                <?php echo $PresentServiceData->region .' / '. 'KV CODE: '.$PresentServiceData->present_kvcode; ?>
                </div>
                <hr>
                <div class="text-muted font-weight-bold small">
                    <i class="fa fa-map-marker"></i>   : <?php echo $PerData->emp_postaladdress; ?>
                    <div class="clearfix"></div>
                    <i class="fa fa-mobile-phone"></i> : <?php echo $PerData->emp_mobile_no; ?>
                    <div class="clearfix"></div>
                    <i class="fa fa-envelope"></i>     : <?php echo $PerData->emp_email; ?>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 p-2 pt-2">
    <table width="100%" cellpadding="5">
    <tr>
        <td style="width:35%;" class="font-bold">Mother Name</td><td>:</td><td><?php echo mother_title($PerData->emp_mother_title).' '.$PerData->emp_mother_name; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Father Name</td><td style="width:5%;">:</td><td style="width:60%;"><?php echo father_title($PerData->emp_father_title).' '.$PerData->emp_father_name; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Gender</td><td>:</td><td><?php if($PerData->emp_gender==1){ echo 'Male';} if($PerData->emp_gender==2){ echo 'Female';} if($PerData->emp_gender==3){ echo 'Other';} ?></td>
    </tr>
    <tr>
        <td class="font-bold">Date of Birth</td><td>:</td><td><?php echo date('d-m-Y',strtotime($PerData->emp_dob));?></td>
    </tr>
    <tr>
        <td class="font-bold">Marital Status</td><td>:</td><td><?php if($PerData->emp_marital_status==1){ echo 'Married'; } if($PerData->emp_marital_status==2){ echo 'Unmarried'; } if($PerData->emp_marital_status==3){ echo 'Widow'; } if($PerData->emp_marital_status==4){ echo 'Widower'; } if($PerData->emp_marital_status==5){ echo 'Legally Separated'; } ?></td>
    </tr>
    <?php if(!empty($PerData->emp_maiden_name)){ ?>
    <tr>
        <td class="font-bold">Maiden Name</td><td>:</td><td><?php echo $PerData->emp_maiden_name; ?></td>
    </tr>
    <?php } ?>
    <tr>
        <td class="font-bold">Aadhaar No</td><td>:</td><td><?php echo $PerData->emp_aadhar_no; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Pan No</td><td>:</td><td><?php echo $PerData->emp_pancard_no; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Passport No</td><td>:</td><td><?php echo $PerData->emp_passport_no; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Landline No</td><td>:</td><td><?php echo $PerData->emp_landline_no; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Home Town</td><td>:</td><td><?php echo $PerData->emp_hometown; ?></td>
    </tr>
    <tr>
        <td style="width:35%;" class="font-bold">Single Parent</td><td style="width:5%;">:</td><td style="width:60%;"><?php echo ($PerData->emp_single_parent==1)?'Yes':'No' ?></td>
    </tr>
    <tr>
        <td class="font-bold">Survived Chilidren</td><td>:</td><td><?php echo $PerData->emp_surviving_child; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Identity Mark</td><td>:</td><td><?php echo $PerData->emp_identity_mark; ?></td>
    </tr>
    </table>
</div>
<div class="col-md-4 p-2 pt-2">
    <table width="100%" cellpadding="5">
    
    <tr>
        <td class="font-bold">Religion</td><td>:</td><td>
            <?php 
            if($PerData->emp_religion==1){
                $Religion='Buddhism';
            }else if($PerData->emp_religion==2){
                $Religion='Christianity';
            }else if($PerData->emp_religion==3){
                $Religion='Hinduism';
            }else if($PerData->emp_religion==4){
                $Religion='Islam';
            }else if($PerData->emp_religion==5){
                $Religion='Jainism';
            }else if($PerData->emp_religion==6){
                $Religion='Sikhism';
            }else if($PerData->emp_religion==7){
                $Religion='Others';
            }else{
               $Religion=''; 
            }
            echo $Religion; 
            ?>
        </td>
    </tr>
    <?php if($PerData->emp_religion==7){ ?>
    <tr>
        <td class="font-bold">Religion Name</td><td>:</td><td><?php echo $PerData->emp_other_religion; ?></td>
    </tr>
    <?php } ?>
    <tr>
        <td class="font-bold">Category</td><td>:</td>
        <td>
            <?php 
            if($PerData->emp_category==1){
                $category='GEN';
            }else if($PerData->emp_category==2){
                $category='OBC';
            }else if($PerData->emp_category==3){
                $category='SC';
            }else if($PerData->emp_category==4){
                $category='ST';
            }else{
               $category=''; 
            }
            echo $category; 
            ?>
        </td>
    </tr>
    <tr>
        <td class="font-bold">Certificate No</td><td>:</td><td><?php echo $PerData->emp_cat_certificate_no; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Date of issue</td><td>:</td><td><?php echo date('d-m-Y',strtotime($PerData->emp_cat_issuing_date));?></td>
    </tr>
    <tr>
        <td class="font-bold">Issuing Authority</td><td>:</td><td><?php echo $PerData->emp_cat_issuing_authority; ?></td>
    </tr>
    <tr>
        <td style="width:35%;" class="font-bold">Whether Differently Abled?</td><td style="width:5%;">:</td>
        <td style="width:60%;">
            <?php echo ($PerData->emp_physical_abled==1)? 'Yes(Disability percent is more than 40)':'No'; ?>
        </td>
    </tr>
    <?php if($PerData->emp_physical_abled==1){ ?>
    <tr>
        <td class="font-bold">Type of Disability</td><td>:</td><td><?php echo $PerData->emp_ph_category; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Disability Percentage</td><td>:</td><td><?php echo $PerData->emp_ph_percent; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Certificate No</td><td>:</td><td><?php echo $PerData->emp_ph_certificate_no; ?></td>
    </tr>
    <tr>
        <td class="font-bold">Date Of Issue</td><td>:</td><td><?php echo date('d-m-Y',strtotime($PerData->emp_ph_issuing_date));?></td>
    </tr>
    <tr>
        <td class="font-bold">Issuing Authority </td><td>:</td><td><?php echo $PerData->emp_ph_issuing_authority; ?></td>
    </tr>
    <?php } ?>
    </table>
</div>

<div class="col-md-12"><hr></div>
</div>