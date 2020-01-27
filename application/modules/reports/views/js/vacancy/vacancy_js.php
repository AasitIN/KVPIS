<script>
    $(document).ready(function () {
        var logown="<?php echo $this->session->userdata['user_id'] ?>";
        var oTable = $('#dataTableId').dataTable({
            "processing": true,
            "serverSide": true,
            "order": [[1, "asc"]],
            "oLanguage": {   "sSearch": "Search By Name / Code" },
            "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
            "columnDefs": [{ className: 'text-center', targets: [4,5] }],
            "dom": 'lBfrtip',
            "buttons": [
                            {
                                extend: 'excel',
                                text: '<i class="fas fa-file-excel-o" style="padding: 0px 5px;"></i>Excel',
                                titleAttr: 'EXCEL',
                                title: 'Registered_Employee_List',
                                exportOptions: {columns: [1,2,3,4,5,6,7,8,9]}
                            }
                        ],
            "ajax": {
                "url"       : "<?php echo site_url('reports/get_all_vacancy'); ?>",
                'dataType'  : 'json',
                'type'      : 'POST',
                "data"      : function (data) {
                                data.<?php echo $this->security->get_csrf_token_name(); ?> = "<?php echo $this->security->get_csrf_hash(); ?>";
                                data.initial_role_id = $('#role_id_initial').val();
					            data.initial_region_id = $('#c_region_initial').val();
								data.initial_school_id = $('#c_school_initial').val();
								//data.initial_section_id = $('#initial_section_id').val();
								data.initial_kvcode = $('#kvcode_initial').val();
								data.desiganition_category_id = $('#desiganition_category_id').val();
								data.desiganition_id = $('#desiganition_id').val();
								data.subject_id = $('#subject_id').val();
								data.initial_shift = $('#shift_initial').val();
                            }
            },
            "columns": [
                            {
                                "orderable": false,
                                "render": function (data, type, row) { return  row.serial_no; }
                            },
                            {"data": "KV_CODE"},
                            {"data": "ROLE"},
                            {"data": "KV_REGION_ZEIT"},
                            {"data": "IN_POST"},
                            {"data": "DESI_TYPE"},
                            {"data": "IN_SUBJECT"},
                            {"data": "SANCTION_POST"},
                            {"data": "IN_POSITION"},
                            {"data": "TOTAL_VACANCY"},
                            
                    ],
        });
		 $('#btn_filter').click(function(){ 
			oTable.api().ajax.reload(); 
		});
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
        $('#c_section_initial').val('');
        $("#shift_div_initial").css("display", "none");
        $('#shift_initial').val('');
        $('#kvcode_initial').val('');
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
                        
                        
                    }
                });
            }else{
                $('#school_div_initial').css("display", "none");
                $('#section_div_initial').css("display", "none");
            }
            
        }
    }
    
    function initialschcode() {
        var school_id_initial = $('#c_school_initial').val();
        if (school_id_initial != '') {
            $.ajax({
                url: base_url + 'admin/users/get_schoolcode',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&s_id=' + school_id_initial,
                type: 'POST',
                success: function (response) {
                    var result=response.split('#'); 
                    $('#kvcode_initial').val(result[0].trim());
                    $("#shift_div_initial").css("display", "block");
                    $("#kvcode_div_initial").css("display", "block");
                    $('#initial_zone').val(result[1].trim());
                }
            });
        }

    }
    
   
    
    function processRegionPresentDiv() {
        var role_id = $("#role_id_present").val();
        $('#school_div_present').css("display", "none");
        $('#c_school_present').val('');
        $('#section_div_present').css("display", "none");
        $('#c_section_present').val('');
        $("#shift_div_present").css("display", "none");
        $('#shift_present').val('');
        $('#kvcode_present').val('');
        if (role_id != '') {
            $.ajax({
                url: base_url + 'admin/users/get_region',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + role_id,
                type: 'POST',
                success: function (response) {
                    $('#c_region_present').html(response);
                    $('#region_div_present').css("display", "block");
                    if (role_id == '2') {
                        $("#present_region_label").html("Units<span class='reqd'>*</span>");
                        $("#present_zone").val('');
                    }
                    else if (role_id == '4') {
                        $("#present_region_label").html("ZIET<span class='reqd'>*</span>");
                        $("#present_zone").val('');
                    } else {
                        $("#present_region_label").html("Regions<span class='reqd'>*</span>");
                        $("#present_zone").val('');
                    }
                }
            });
        }else{
            $('#region_div_present').css("display", "none");
        }
       
    }
    
    function processSchoolPresentDiv() {
        var region_id = $("#c_region_present").val();
        var role_id = $("#role_id_present").val();
        if (region_id != '') {
            if(role_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_school',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#school_div_present').css("display", "block");
                        $('#section_div_present').css("display", "none");
                        $('#c_school_present').html(response);
                    }
                });
            }
            
            else if(role_id=='2'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_present').val(result[0].trim());
                        $('#present_zone').val(result[1]);
                        $('#school_div_present').css("display", "none");
                        $('#section_div_present').css("display", "none");
                        
                        
                    }
                });
            }else if(role_id=='3'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_present').val(result[0].trim());
                        $('#present_zone').val(result[1]);
                        $('#school_div_present').css("display", "none");
                        $('#section_div_present').css("display", "none");
                    }
                });
            }else if(role_id=='4'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_present').val(result[0].trim());
                        $('#present_zone').val(result[1]);
                        $('#school_div_present').css("display", "none");
                        $('#section_div_present').css("display", "none");
                    }
                });
            }else{
                $('#school_div_present').css("display", "none");
                $('#section_div_present').css("display", "none");
            }
            
        }
    }
    
    function presentschcode() {
        var school_id_present = $('#c_school_present').val();
        if (school_id_present != '') {
            $.ajax({
                url: base_url + 'admin/users/get_schoolcode',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&s_id=' + school_id_present,
                type: 'POST',
                success: function (response) {
                    var result = response.split('#');
                    $('#kvcode_present').val(result[0].trim());
                    $('#present_zone').val(result[1].trim());
                    $("#shift_div_present").css("display", "block");
                    $("#kvcode_div_present").css("display", "block");
                }
            });
        }

    }
    
    function processRegionalljoiningDiv(ids) {
        var role_id = $("#role_id_all_"+ids).val();
        $('#school_div_all_'+ids).css("display", "none");
        $('#school_id_all_'+ids).val('');
        $('#section_div_all_'+ids).css("display", "none");
        $('#section_all_'+ids).val('');
        $("#shift_div_all_"+ids).css("display", "none");
        $('#all_shift_'+ids).val('');
        $('#kvcode_all_'+ids).val('');
        if (role_id != '') {
            $.ajax({
                url: base_url + 'admin/users/get_region',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + role_id,
                type: 'POST',
                success: function (response) {
                    $('#region_id_all_'+ids).html(response);
                    $('#region_div_all_'+ids).css("display", "block");
                    if (role_id == '2') {
                        $("#all_region_label_"+ids).html("Units<span class='reqd'>*</span>");
                    }
                    else if (role_id == '4') {
                        $("#all_region_label_"+ids).html("ZIET<span class='reqd'>*</span>");
                    } else {
                        $("#all_region_label_"+ids).html("Regions<span class='reqd'>*</span>");
                    }
                }
            });
        }else{
            $('#region_div_initial').css("display", "none");
        }
       
    }
    
    function processSchoolalljoiningDiv(ids) {
        var region_id = $("#region_id_all_"+ids).val();
        var role_id = $("#role_id_all_"+ids).val();
        if (region_id != '') {
            if(role_id=='5'){
                $.ajax({
                    url: base_url + 'admin/users/get_school',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        $('#school_div_all_'+ids).css("display", "block");
                        $('#section_div_all_'+ids).css("display", "none");
                        $('#school_id_all_'+ids).html(response);
                    }
                });
            }else if(role_id=='2'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_all_'+ids).val(result[0].trim());
                        $('#school_div_all_'+ids).css("display", "none");
                        $('#section_div_all_'+ids).css("display", "none");
                        
                        
                    }
                });
            }else if(role_id=='3'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_all_'+ids).val(result[0].trim());
                        $('#school_div_all_'+ids).css("display", "none");
                        $('#section_div_all_'+ids).css("display", "none");
                    }
                });
            }else if(role_id=='4'){
                $.ajax({
                    url: base_url + 'admin/users/get_zone',
                    data: get_csrf_token_name + '=' + get_csrf_hash + '&r_id=' + region_id,
                    type: 'POST',
                    success: function (response) {
                        var result=response.split('#'); 
                        $('#kvcode_all_'+ids).val(result[0].trim());
                        $('#school_div_all_'+ids).css("display", "none");
                        $('#section_div_all_'+ids).css("display", "none");
                    }
                });
            }else{
                $('#school_div_all_'+ids).css("display", "none");
                $('#section_div_all_'+ids).css("display", "none");
            }
            
        }
    }
    
    function allschcode(ids) {
        var school_id_all = $('#school_id_all_'+ids).val();
        if (school_id_all != '') {
            $.ajax({
                url: base_url + 'admin/users/get_schoolcode',
                data: get_csrf_token_name + '=' + get_csrf_hash + '&s_id=' + school_id_all,
                type: 'POST',
                success: function (response) {
                    var result = response.split('#');
                    //alert(result[0]);
                    $('#kvcode_all_'+ids).val(result[0].trim());
                    $("#shift_div_all_"+ids).css("display", "block");
                    $("#kvcode_div_all_"+ids).css("display", "block");
                    if(result[2].trim()=='H')
                    {
                        $('#all_station_'+ids).val('Hard');   
                        $("#station_div_all_"+ids).css("display", "block");
                    }
                    else if(result[2].trim()=='V')
                    {
                        $('#all_station_'+ids).val('Very Hard');
                        $("#station_div_all_"+ids).css("display", "block");
                    }
                    else if(result[2].trim()=='Ner')
                    {
                        $('#all_station_'+ids).val('Ner');
                        $("#station_div_all_"+ids).css("display", "block");
                    }else{
                        $("#station_div_all_"+ids).css("display", "none");
                    }
                        
                }
            });
        }

    }
   $(function() {
    $('#subject_id_s').hide(); 
    $('#desiganition_category_id_s').change(function(){
        if($('#desiganition_category_id').val() == 1){
            $('#subject_id_s').show(); 
        }else {
            $('#subject_id_s').hide(); 
        } 
    });
});
</script>