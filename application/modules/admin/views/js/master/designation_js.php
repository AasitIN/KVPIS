<script>
    $(document).ready(function () {
        var oTable = $('#dataTableId').dataTable({
            "processing": true,
            "serverSide": true,
            "order": [[1, "asc"]],
            "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
            "ajax": {
                "url": "<?php echo site_url('admin/master/get_designation_list'); ?>",
                'dataType': 'json',
                'type': 'POST',
                "data": function (data) {

                    data.<?php echo $this->security->get_csrf_token_name(); ?> = "<?php echo $this->security->get_csrf_hash(); ?>";

                }

            },

            "columns": [
                {
                    "orderable": false,
                    "render": function (data, type, row) {
                        return  row.serial_no;
                    }
                },
 {"data":"category_name"},
                {"data": "name"},
               

                {
                    "orderable": false,
                    "render": function (data, type, row) {
                        return '<div class="col-md-4 p-0"></div><div class="col-md-4 p-0">'+
								<?php 
								if(has_permission('master/designation_details'))
								{
									
									?>
									'<a href="<?php echo site_url(); ?>admin/master/designation_details/' + row.id + '" data-toggle="tooltip" title="Details"><i class="fa fa-eye" aria-hidden="true"></i></a>'+
									<?php
								}
								if(has_permission('master/add_designation'))
								{
									?>
									'<a href="<?php echo site_url(); ?>admin/master/add_designation/'+row.id+'"><i class="far fa-edit" title="Edit"></i></a>'+	
									<?php
								}
								if(has_permission('master/delete_designation'))
								{
									?>
									'<a href="javascripts:void(0)" data-toggle="tooltip" title="Delete" class="delete_data" designation_id="'+row.id+'"><i class="fa fa-trash" aria-hidden="true"></i></a>'+	
									<?php
								}
								
								?>
								'</div>';
                        
                    }
                },
            ],
        });
        $('#dataTableId').on('click', 'a.delete_data', function (e) {
           var designation_id = $(this).attr("designation_id");  
           if(confirm('Are you sure to delete this designation')) {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>admin/master/delete_designation",  
                     method:"POST",  
                     data:{designation_id:designation_id,'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'},  
                     success:function(data) {						
					  alert("Designation Deleted Successfully.");
				      oTable.api().ajax.reload();
					  return true;
                     }  
                });  
           }  
           else {  
                return false;       
           }  
      	}); 
    });

    
</script>