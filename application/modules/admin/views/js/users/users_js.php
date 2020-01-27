<script>
    $(document).ready(function () {
        
    var oTable = $('#dataTableId').dataTable( {
        "processing": true,
        "serverSide": true,
        "order": [[ 0, "desc" ]],
        "oLanguage": {   "sSearch": "Search By Name / Code" },
        "lengthMenu": [[10, 25, 50,100,-1], [10, 25, 50,100,"ALL"]],
        "dom": 'lBfrtip',
        "buttons": [
                {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel-o"></i> Export In Excel',
                    titleAttr: 'Export Data In Excel',
                    title: 'Registered User Records',
                    exportOptions: {
                        modifier: {
                            search: 'applied',
                            order: 'applied'
                        },
                        columns: [1,2,3,4]
                    }
                    
                },
        ],

        "ajax":{
            "url": "<?php echo site_url('admin/users/get_users'); ?>",
            'dataType': 'json',
            'type': 'POST',
            "data": function ( data ) {
                data.<?php echo $this->security->get_csrf_token_name(); ?> = "<?php echo $this->security->get_csrf_hash(); ?>";
            }
        },
        "columns": [
                {
                    "orderable": false,
                    "render": function(data, type, row) {
                        return  row.serial_no;
                    }
                },
                { "data": "username" },
                { "data": "role_name" },
                { "data": "created" },					
		{
                    "render": function(data, type, row) {
                        if(row.id=='1'){
                            return '<button type="button" class="btn btn-success" id="status_'+row.id+'" disabled>Approved</button>';				
                        }else{
                            if(row.status=='<?php echo PENDING; ?>'){
                                var status = 'PENDING'; 
                            }
                            else if(row.status=='<?php echo APPROVED; ?>'){
                                var status = 'APPROVED';
                            }
                            else if(row.status=='<?php echo REJECTED; ?>'){
                                var status = 'REJECTED';
                            }
                            else{
                                var status = 'RETIRED';
                            }

                            return '<button type="button" class="btn btn-primary" id="status_'+row.id+'" onclick="change_status('+row.id+')">'+status+'</button>';
                        }
                    }
                },
                {
                    "orderable": false,
                    "render": function(data, type, row) {
                        if(row.role_id==1){
                            return '<div class="col-md-4 p-0"></div><div class="col-md-4 p-0">'+
                            <?php   if(has_permission('users/details')){    ?>
                                    '<a href="<?php echo site_url();?>admin/users/details/'+row.id+'" data-toggle="tooltip" title="Details"><i class="fa fa-eye" aria-hidden="true"></i></a>'+
                            <?php   }   ?>
                                '</div>';
                        }else if(row.role_id==1){
                            return '<div class="col-md-4 p-0"></div><div class="col-md-4 p-0">'+
                            <?php   if(has_permission('users/details')){    ?>
                                '<a href="<?php echo site_url();?>admin/users/details/'+row.id+'" data-toggle="tooltip" title="Details"><i class="fa fa-eye" aria-hidden="true"></i></a>'+
                            <?php   }   if(has_permission('users/delete')){ ?>
                                '<a href="javascripts:void(0)" data-toggle="tooltip" title="Delete" class="delete_data" user_id="'+row.id+'"><i class="fa fa-trash" aria-hidden="true"></i></a>'+
                            <?php	}   ?>
                                '</div>';
                        }else{
                                return '<div class="col-md-4 p-0"></div><div class="col-md-4 p-0">'+
                            <?php   if(has_permission('users/details')){    ?>
                                '<a href="<?php echo site_url();?>admin/users/details/'+row.id+'" data-toggle="tooltip" title="Details"><i class="fa fa-eye" aria-hidden="true"></i></a>'+
                            <?php   }   if(has_permission('users/edit')){   ?>
                                '<a href="<?php echo site_url();?>admin/users/edit/'+row.id+'" data-toggle="tooltip" title="Edit"><i class="far fa-edit" aria-hidden="true"></i></a>'+	
                            <?php   }   if(has_permission('users/delete')){ ?>
                                '<a href="javascripts:void(0)" data-toggle="tooltip" title="Delete" class="delete_data" user_id="'+row.id+'"><i class="fa fa-trash" aria-hidden="true"></i></a>'+	
                            <?php   }   ?>
                                 '<a href="javascripts:void(0)" data-toggle="tooltip" onclick="change_pass('+row.id+')"><i class="fa fa-lock" aria-hidden="true"></i></a>'+
                                 '</div>';
                        }
                    }
                },
        ],  
    });
		
	


        $('#dataTableId').on('click', 'a.delete_data', function (e) {
            var user_id = $(this).attr("user_id");  
            if(confirm('Are you sure to delete this user')) {  
                $.ajax({  
                    url:"<?php echo base_url(); ?>admin/users/delete",  
                    method:"POST",  
                    data:{user_id:user_id,'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'},  
                    success:function(data) {						
                        alert("User Deleted Successfully.");
                        oTable.api().ajax.reload();
                        return true;
                    }  
                });  
            }else {  
                return false;       
            }  
        }); 
    });
    </script>

    <script>
//===================================== Doc.Ready Ends Here ======================================//	
    function change_status(user_id){
 	$('#user_id').val(user_id);
 	$('#statusModal').modal('show');
    }
    function change_pass(user_id){
        $('#user_id_forpass').val(user_id);
 	$('#resetPassModal').modal('show');
    }
    
    $('#status_save').on('click',function(){
 	if($('#status').val()==''){
            $('#status_err').html('Please select status').css('color','red');	
 	}else{
            $('#status_err').html('');	
            var user_id=$('#user_id').val();
            var status=$('#status').val();
            var form_data=$('#status_form').serialize();
            var con = confirm("Are you sure you wnat to change status.");
            if(con){
 		$.ajax({
 			url:$('#url').val()+'admin/users/change_status',
 			data:form_data,
 			type:'post',
 			beforeSend:function(){
                            $('#status_msg').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
 			},
 			success:function(response){
                            if(response==1){
 				if(status==1){
                                    var user_status='Approved';
 				}else if(status==2){
                                    var user_status='Rejected';
 				}else{
                                    var user_status='Pending';
 				}
                                    $('#status_'+user_id).html(user_status);
                                    $('#status_msg').html('Status Changed Successfully').css('color','green');
                                    location.reload();
 				}
                            }
 		});
            }
 	}
    });
    $("#reasion").css("display", "none");
    $('select').on('change', function() {
        var status = this.value ;
	if(status==2){
            $("#reasion").css("display", "block");
	}else{
            $("#reasion").css("display", "none");
	}
        //alert(status);
    });
    //================================= ADMIN RESET PASSWORD START ==================================//
    $('#RePassWord').on('click',function(){
        $("#ResetPWD").validationEngine();
      //alert('Calling');
        generateHashPassword();
 	if($('#new_password').val()==''){
            $('#newpasserror').html('New Password is required').css('color','red');	
 	}else{
            
                $('#newpasserror').html('');	
                var form_data=$('#ResetPWD').serialize();
                var con = confirm("Are you sure you wnat to change Password.");
                var url='<?php echo base_url()?>';
                if(con){
                    $.ajax({
                        url:url+'admin/users/admin_reset_password',
                        data:form_data,
                        type:'post',
                        beforeSend:function(){
                            $('#resetpass_msg').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
                        },
                        success:function(response){
                            console.log(response);
                            if(response==true){
                                $('#resetpass_msg').html('Password Changed Successfully').css('color','green');
                                window.setTimeout(function(){location.reload();},1000);
                            }else{
                                $('#resetpass_msg').html('Sorry! Some Error Occoured.').css('color','red');
                                window.setTimeout(function(){location.reload();},1000);
                            }
                        }
                    });
                }
 	}
    });
    function generateHashPassword() {
		
		var password = document.getElementById('new_password');
		var hashPassword = new jsSHA("SHA-512", "TEXT", {numRounds: 1});
		hashPassword.update(password.value);
		password.value = hashPassword.getHash("HEX");

		var cpassword = document.getElementById('confirm_password');
		var hashCPassword = new jsSHA("SHA-512", "TEXT", {numRounds: 1});
		hashCPassword.update(cpassword.value);
		cpassword.value = hashCPassword.getHash("HEX");
		return true;
  }
  //================================= ADMIN RESET PASSWORD START ==================================//
</script>