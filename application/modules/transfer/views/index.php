<div id="content-wrapper">
    <div class="container-fluid">
        
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
                  <a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
              <a href="<?php echo base_url();?>transfer/index">Transfer</a>  / Employee List
            </li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-user"></i> Employee List</div>
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
                <?php // show($TF); ?>
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
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($TF['result'] as $T){ ?>
                    <tr>
                        <td><?php echo $T->emp_title.''.$T->emp_first_name.''.$T->emp_middle_name.''.$T->emp_last_name.'('.$T->emp_code.')'; ?></td>
                        <td><?php echo $T->emp_post_place; ?></td>
                        <td><?php echo $T->kv_region_zt; ?></td>
                        <td><?php echo $T->emp_region; ?></td>
                        <td><?php echo $T->emp_desig ;?></td>
                        <td><?php echo $T->emp_subject ;?></td>
                        <td> 
                            <?php
                            if(!empty($T->emp_post_place)&&!empty($T->kv_region_zt)&&!empty($T->emp_desig)&&empty($T->transfered)){
                                echo '<a href="'. base_url().'transfer/initiate_request/'. base64_encode($T->emp_code).'" class="btn btn-primary btn-block">Initiate</a>';
                            }elseif($T->transferstatus=='REJECTED'){
                                echo '<a href="'. base_url().'transfer/initiate_request/'. base64_encode($T->emp_code).'" class="btn btn-primary btn-block">Initiate</a>';
                            }elseif($T->transferstatus=='INPROCESS' || $T->transferstatus=='ONHOLD'){
                                echo '<a href="javascript:void(0)" class="btn btn-success btn-block">In-Process</a>';
                            }else{
                                echo '<a href="" class="btn btn-default btn-block" disabled>NA</a>';
                            }

                            ?>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NAME (EMP CODE)</th>
                            <th>PLACE</th>
                            <th>KV/REGION/ZIET</th>
                            <th>REGION/UNIT</th>
                            <th>DESIGNATION</th>
                            <th>SUBJECT</th>
                            <th>STATUS</th>
                        </tr>
                    </tfoot>
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

    

