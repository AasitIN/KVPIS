<div id="content-wrapper">
    <div class="container-fluid">
        
        <!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="<?php echo base_url();?>swap/index">Transfer</a>  / Employee List
            </li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-share-square"></i> Transfer Employee</div>
            <?php if(isset($error_msg) && !empty($error_msg)){?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo $error_msg;?>.
                </div>
            <?php } if($this->session->flashdata('error')){ ?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo $this->session->flashdata('error');?>
                </div>
            <?php } if($this->session->flashdata('success')){ ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('success');?>
                </div>
            <?php } ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NAME (EMP CODE)</th>
                            <th>PLACE</th>
                            <th>KV/REGION/ZIET</th>
                            <th>REGION/UNIT</th>
                            <th>DESIGNATION</th>
                            <th>SUBJECT</th>
                            <th style="width:15%;">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($EMP as $T){ ?>
                    <tr>
                        <td><?php echo $T->TR_EMP_TTL.' '.$T->TR_EMP_NAME.'('.$T->TR_EMP_CODE.')'; ?></td>
                        <td><?php echo $T->TR_EMP_PLACENAME; ?></td>
                        <td><?php echo $T->TR_EMP_UNITNAME; ?></td>
                        <td><?php echo $T->TR_EMP_REGION; ?></td>
                        <td><?php echo $T->TR_EMP_DESNAME ;?></td>
                        <td><?php echo $T->TR_EMP_SUBNAME ;?></td>
                        <td> 
                            <?php
                            if(!empty($T->TR_EMP_TRANS)&&($T->TR_EMP_TRANS==1)){
                                echo '<a href="javascript:void(0)" class="btn btn-success btn-block" disabled>In-Process</a>';
                            }elseif(!empty($T->TR_EMP_TRANS)&&($T->TR_EMP_TRANS==2)){
                                echo '<a href="javascript:void(0)" class="btn btn-default btn-block" disabled>Transferred</a>';
                            }elseif(!empty($T->TR_EMP_TRANS)&&($T->TR_EMP_TRANS==3)){
                                echo '<a href="javascript:void(0)" class="btn btn-warning btn-block" disabled>In-Process(HQ)</a>';
                            }
                            else{
                                echo '<a href="'. base_url().'swap/initiate_request/1/'. base64_encode($T->TR_EMP_CODE).'" class="btn btn-primary btn-block">Initiate</a>';
                            }

                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                </div>
            </div>
	</div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

    

