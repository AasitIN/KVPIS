<script>
    $(document).ready(function () {
        var oTable = $('#dataTableId').dataTable({
            "processing": true,
            "serverSide": true,
            "order": [[1, "asc"]],
            "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
            "ajax": {
                "url": "<?php echo site_url('admin/master/get_subject'); ?>",
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

                {"data": "name"},
                
                

                {
                    "orderable": false,
                    "render": function (data, type, row) {
                        return '<div class="col-md-4 p-0"></div><div class="col-md-4 p-0"><a href="<?php echo site_url(); ?>admin/master/addsubject/'+row.id+'"><i class="far fa-edit" title="Edit"></i></a><a href="<?php echo site_url(); ?>admin/master/subjectdetails/' + row.id + '" data-toggle="tooltip" title="Details"><i class="fa fa-eye" aria-hidden="true"></i></a><a href="javascripts:void(0)" data-toggle="tooltip" title="Delete" class="delete_data" subject_id="'+row.id+'"><i class="fa fa-trash" aria-hidden="true"></i></a></div>';
                    }
                },
            ],
        });
        
        $('#dataTableId').on('click', 'a.delete_data', function (e) {
           var subject_id = $(this).attr("subject_id");  
           if(confirm('Are you sure to delete this subject')) {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>admin/master/delete_subject",  
                     method:"POST",  
                     data:{subject_id:subject_id,'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'},  
                     success:function(data) {						
					  alert("Subject Deleted Successfully.");
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