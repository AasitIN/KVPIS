<script>
    $(document).ready(function () {
		
        var logown ="<?php echo $this->session->userdata['user_id'] ?>";
        var oTable = $('#dataTableId').dataTable({
            "processing": true,
            "serverSide": true,
            "order": [[1, "asc"]],
            "oLanguage": {   "sSearch": "Search By Name / Code" },
            "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
            'columnDefs': [{ className: 'text-center', targets: [4,5] }],
            "dom": 'lBfrtip',
            "buttons": [
                {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel-o"></i> Export In Excel',
                    titleAttr: 'Export Data In Excel',
                    title: 'Registered Employee Records',
                    exportOptions: {
                        modifier: {
                            search: 'applied',
                            order: 'applied'
                        },
                        columns: [1,2,3,4,5,6,7]
                    }
                    
                },
        ],
            "ajax": {
                "url"       : "<?php echo site_url('reports/get_profile'); ?>",
                'dataType'  : 'json',
                'type'      : 'POST',
                "data"      : function (data) {
                                data.initial_role_id = $('#role_id_initial').val();
				data.initial_region_id = $('#c_region_initial').val();
				data.initial_school_id = $('#c_school_initial').val();
				data.initial_section_id = $('#initial_section_id').val();
                                data.initial_kvcode = $('#kvcode_initial').val();
				data.initial_shift = $('#shift_initial').val();
				data.desiganition_id = $('#desiganition_id').val();
                                data.subject_id = $('#subject_id').val();
				//data.initial_section_id = $('#initial_section_id').val();
				console.log(data);
                                data.<?php echo $this->security->get_csrf_token_name(); ?> = "<?php echo $this->security->get_csrf_hash(); ?>";
								
                            }
            },
            "columns": [
                            {
                                "orderable": false,
                                "render": function (data, type, row) { return  row.serial_no; }
                            },
                            {"data": "emp_code"},
                            {"data": "emp_name"},
                            {"data": "emp_post"},
                            {"data": "emp_subject"},
                            {"data": "emp_place"},
                            {"data": "emp_region"},
                            {"data": "emp_school"},
                           
                    ],
        });
	$('#btn_filter').click(function(){ oTable.api().ajax.reload(); });
    });
	
</script>
<script>
	var base_url = $('#url').val();
	var get_csrf_token_name = $('#get_csrf_token_name').val();
	var get_csrf_hash = $('#get_csrf_hash').val();
	function processRegionInitialDiv() {
        var role_id = $("#role_id_initial").val();
        $('#school_div_initial').css("display", "none");
        $('#c_school_initial').val('');
        $('#section_div_initial').css("display", "none");
        $('#initial_section_id').val('');
        $('#designation').css("display", "none");
        $('#desiganition_id').val('');
        $('#subject').css("display", "none");
        $('#subject_id').val('');
        if (role_id != '') {
            $.ajax({
                url: base_url + 'admin/users/get_region',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + role_id,
                type: 'POST',
                success: function (response) {
                    $('#c_region_initial').html(response);
                    $('#region_div_initial').css("display", "block");
                    if (role_id == '2') {
                        $("#initial_region_label").html("Units<span class='reqd'>*</span>");
                        $("#initial_zone").val('');
                    }
                    else if (role_id == '4') {
                        $("#initial_region_label").html("ZIET<span class='reqd'>*</span>");
                        $("#initial_zone").val('');
                    } else {
                        $("#initial_region_label").html("Regions<span class='reqd'>*</span>");
                        $("#initial_zone").val('');
                    }
                }
            });
        }else{
            $('#region_div_initial').css("display", "none");
        }
       
    }
    
    function processSchoolInitialDiv() {
        var region_id = $("#c_region_initial").val();
        var role_id = $("#role_id_initial").val();
        if (region_id != '') {
            if(role_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_school',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#school_div_initial').css("display", "block");
                        $('#section_div_initial').css("display", "none");
                        $('#c_school_initial').html(response);
                    }
                });
            }else if(role_id=='2' && region_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_section',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#kvcode_initial').val('1917');
                        $('#initial_zone').val('12');
                        $('#section_div_initial').css("display", "block");
                        $('#school_div_initial').css("display", "none");
                        $('#c_section_initial').html(response);
                    }
                });
            }else if(role_id=='2'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_initial').val(result[0].trim());
                        $('#initial_zone').val(result[1]);
                        $('#school_div_initial').css("display", "none");
                        $('#section_div_initial').css("display", "none");
                        
                        
                    }
                });
            }else if(role_id=='3'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        console.log(result[1]);
                        $('#kvcode_initial').val(result[0].trim());
                        $('#initial_zone').val(result[1]);
                        $('#school_div_initial').css("display", "none");
                        $('#section_div_initial').css("display", "none");
                        getdesignation(3);
                        
                    }
                });
            }else if(role_id=='4'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        console.log(result[1]);
                        $('#kvcode_initial').val(result[0].trim());
                        $('#initial_zone').val(result[1]);
                        $('#school_div_initial').css("display", "none");
                        $('#section_div_initial').css("display", "none");
                        getdesignation(4);
                        
                    }
                });
            }else{
                $('#school_div_initial').css("display", "none");
                $('#section_div_initial').css("display", "none");
            }
            
        }
    }

    
    function getdesignation(did)
    {
        var desig = did;
        $.ajax({
            url: base_url + 'reports/get_designation',
            data: get_csrf_token_name + '=' + get_csrf_hash + '&d_id=' + desig,
            type: 'POST',
            success: function (response) {
                $('#designation').show();
                $('#desiganition_id').html(response);
            }
        });
    }
    
    function getsubject()
    {
        var subid=$('#desiganition_id').val();
        $.ajax({
            url: base_url + 'reports/get_subject',
            data: get_csrf_token_name + '=' + get_csrf_hash + '&s_id=' + subid,
            type: 'POST',
            success: function (response) {
                console.log(response);
                if(response==0)
                {
                   $('#subject').hide();
                }else{
                    $('#subject').show();
                    $('#subject_id').html(response); 
                }
            }
        });
    }
    
  
</script>