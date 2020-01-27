<script src="<?php echo base_url(); ?>js/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/datatables.min.css" />
<div id="content-wrapper">
    <div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
	  <li class="breadcrumb-item">
		<a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
	  </li>
	  <li class="breadcrumb-item active"><a href="<?php echo base_url();?>transfer/index">Transfer Module</a>  / Transfer History</li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-user"></i> Employee List</div>
            <?php if(isset($error_msg) && !empty($error_msg)){?>
                <div class="alert alert-danger"><strong>Error!</strong> <?php echo $error_msg;?>.</div>
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
                <?php
                //show($TF);
                ?>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>NAME (EMP CODE)</th>
                <th>TRANSFER FROM KV/REGION/ZIET</th>
                <th>TRANSFER FROM REGION/UNIT</th>
                <th>DESIG. FROM</th>
                <th>SUBJECT</th>
                <th>TRANSFER TO KV/REGION/ZIET</th>
                <th>TRANSFER TO REGION/UNIT</th>
                <th>DESIG. TO</th>
                <th>SUBJECT</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($TF['result'] as $T){ ?>
            <tr>
                <td><?php echo $T->emp_title.''.$T->emp_first_name.''.$T->emp_middle_name.''.$T->emp_last_name.'('.$T->emp_code.')'; ?></td>
                <td><?php echo $T->kv_region_zt; ?></td>
                <td><?php echo $T->emp_region; ?></td>
                <td><?php echo $T->emp_desig ;?></td>
                <td><?php echo $T->emp_subject ;?></td>
                <td><?php echo $T->transfer_kv_region_zt; ?></td>
                <td><?php echo $T->emp_transfer_region; ?></td>
                <td><?php echo $T->emp_transfer_desig ;?></td>
                <td><?php echo $T->emp_transfer_subject ;?></td>
                <td><?php echo $T->transferstatus ;?></td>
                
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>NAME (EMP CODE)</th>
                <th>TRANSFER FROM KV/REGION/ZIET</th>
                <th>TRANSFER FROM REGION/UNIT</th>
                <th>DESIG. FROM</th>
                <th>SUBJECT</th>
                <th>TRANSFER TO KV/REGION/ZIET</th>
                <th>TRANSFER TO REGION/UNIT</th>
                <th>DESIG. TO</th>
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

    

