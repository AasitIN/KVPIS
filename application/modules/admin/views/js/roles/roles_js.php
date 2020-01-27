<script>
    $(document).ready(function () {
        var oTable = $('#dataTableId').dataTable({
            "processing": true,
            "serverSide": true,
            "order": [[1, "asc"]],
            "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
            "ajax": {
                "url": "<?php echo site_url('admin/roles/get_roles'); ?>",
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
                {"data": "description"},
                {
                    "orderable": false,
                    "render": function (data, type, row) {
                        if(row.id==1){
							return '';
						}else{
							return '<button type="button" class="btn btn-primary" id="status_' + row.id + '" onclick="change_status(' + row.id + ')">' + row.status + '</button>';
						}
                    }
                },

                {
                    "orderable": false,
                    "render": function (data, type, row) {
                        return '<div class="col-md-4 p-0"></div><div class="col-md-4 p-0"><a href="<?php echo site_url(); ?>admin/roles/add/'+row.id+'"><i class="far fa-edit" title="Edit"></i></a><a href="<?php echo site_url(); ?>admin/roles/details/' + row.id + '" data-toggle="tooltip" title="Details"><i class="fa fa-eye" aria-hidden="true"></i></a></div>';
                    }
                },
            ],
        });
    });

    function change_status(role_id)
    {
        $('#role_id').val(role_id);
		jQuery.noConflict();
                 $("#status_msg").html('');
                 var index = '';
                 document.getElementById("status").options.selectedIndex = index;
      $('#statusModal').modal('show');
    }
    $('#status_save').on('click', function () {
        if ($('#status').val() == '')
        {
            $('#status_err').html('Please select status').css('color', 'red');
        } else {
            $('#status_err').html('');
            var role_id = $('#role_id').val();
            var status = $('#status').val();
            var form_data = $('#status_form').serialize();
            $.ajax({
                url: '<?php echo base_url(); ?>admin/roles/change_status',
                data: form_data,
                type: 'post',
                beforeSend: function () {
                    $('#status_msg').html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
                },
                success: function (response) {
                    if (response == 1)
                    {
                        if (status == 1)
                        {
                            var role_status = 'Active';
                        } else {
                            var role_status = 'In-active';
                        }
                        $('#status_' + role_id).html(role_status);
                        $('#status_msg').html('Role Status Changed Successfully').css('color', 'green');
                    }
                }
            });
        }
    });
    
</script>