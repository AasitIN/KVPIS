<style>
    .buttons-excel{
       background-color: green;
       color: white;
    }
    
</style>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
		<a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Notification List</li>
	</ol>
        <!-- DataTables Example --> 
	<div class="card mb-3">
            <div class="card-header"><i class="fa fa-comment"></i> Notification List</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTableId" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Notification</th>
                                <th>Sender</th>
                                <th style="width: 250px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($notification as $val) {  ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $val->message; ?></td>
                                <td><?php if($val->senderid==1) echo 'Admin'; else echo $val->sendername.' ('.$val->sendercode.')'; ?></td>
                                <td><a href="<?php base_url(); ?>notification/changestatus/<?php echo base64_encode($val->id); ?>" style="width: 100px;float: left;margin: 5px;" class="btn btn-primary btn-block">Read</a>
                                    <?php if($val->senderid!=1 && $this->session->userdata('role_id')!=6){ ?><button type="button" style="width: 100px;float: right;margin: 5px;" class="btn btn-primary btn-block" onclick="replytomsg(<?php echo $val->senderid; ?>)">Reply</button><?php } ?>
                                </td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    
                    </table>
                </div>
            </div>
	</div>
    </div>
</div>

<div id="msgmodal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Reply Box</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <span class="success text-center" id="resetpass_msg"></span>
            <?php echo form_open("",array("id"=>"msgForm","autocomplete"=>"off"));?>
            <input type="hidden" name="senderid" id="senderid" value="">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-form-label">Message</label>
                    <textarea placeholder="Type your message here.." class="form-control validate[required]" name="message" id="message"></textarea>
                    <span class="message_err"></span>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="sendmsg">Submit</button>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
    </div>
</div>
<script type="text/javascript">
    
    function replytomsg(user_id){
 	$('#senderid').val(user_id);
 	$('#msgmodal').modal('show');
    }
    
    $('#sendmsg').on('click',function(){
        if($('#message').val()==''){
            $('#message_err').html('Please type your message first').css('color','red');	
 	}else{
            $('#message_err').html('');	
            var senderid=$('#senderid').val();
            var message=$('#message').val();
            var form_data=$('#msgForm').serialize();
            $.ajax({
                    url:$('#url').val()+'admin/notification/replytomsg',
                    data:form_data,
                    type:'post',
                    success:function(response){
                        location.reload();
                    }
            });
        }
    });
    
</script>


