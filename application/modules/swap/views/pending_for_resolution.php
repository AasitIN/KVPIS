<?php //show($E); ?>
<div id="content-wrapper">
  <div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
		<a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="<?php echo base_url();?>swap/index">Transfer</a> / 
                <a href="<?php echo base_url();?>swap/pending_for_resolution">Pending For Resolution</a> 
            </li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-th-list" aria-hidden="true"></i>&nbsp; Received Resolution Request</div>
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
                    <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
			<thead>
                            <tr>
                                <th>NAME / CODE</th>
                                <th>PLACE</th>
                                <th>KV/REGION/ZIET</th>
                                <th style="width:8%;">KV CODE</th>
                                <th>DESIG.</th>
                                <th>ORDER NO </th>
                                <th style="width:8%;">ORDER DATE</th>
                                <th style="width:15%;">STATUS</th>
                                <th style="width:8%;">ACTION</th>
                            </tr>
			</thead>
                        <tbody>
                            <?php foreach($E as $T){ ?>
                            <tr>
                                <td><?php echo $T->EMP_TTL.''.$T->EMP_NAME.'('.$T->EMP_ID.')'; ?></td>
                                <td><?php echo $T->EMP_PRE_PLACE; ?></td>
                                <td><?php echo $T->EMP_PRE_UNIT; ?></td>
                                <td><?php echo $T->PRE_KCODE; ?></td>
                                <td><?php 
                                    echo $T->EMP_PRE_DESIG;
                                    echo $sub=($T->EMP_PRE_SUB && $T->EMP_PRE_SUB!='NA')?' ('.$T->EMP_PRE_SUB.')':''; 
                                    ?>
                                </td>
                                <td><?php echo $T->TRA_OR_NO; ?></td>
                                <td><?php echo $T->TRA_OR_DT; ?></td>
                                <td>
                                    <?php 
                                        echo '<div class="btn text-primary btn-block">'.$T->EMP_TRA_STS.'</div>';
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($T->in_process=='1' && $T->transfer_status=='3'){
                                           // echo '<a href="'. base_url().'swap/initiate_request/'. base64_encode($T->EMP_ID).'" class="btn btn-primary btn-block"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Details</a>';
                                            echo '<button onclick="ResolutionDetails('.$T->EMP_ID.');" class="btn btn-primary btn-block"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View</button>';
                                        }else{
                                            echo 'N/A';
                                        } ?>
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

<!-- Modal for Resolution Details-->
<div id="ResolutionModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            

            
        </div>

    </div>
</div>
<!-- END CONTENT -->
    

        <script type="text/javascript">
            var base_url = $('#url').val();
            var get_csrf_token_name = $('#get_csrf_token_name').val();
            var get_csrf_hash = $('#get_csrf_hash').val();

            function ResolutionDetails(EmpId){
                
                $.ajax({
                    url: base_url + 'swap/resolution_details',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&EmpId=' + EmpId,
                    type: 'POST',
                    success: function (R) {
                       console.log(R);
                        $(".modal-content").html(R);
                        $('#ResolutionModal').modal('show');
                    }
                });
           

        
            }
        </script>