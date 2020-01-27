var base_url = $('#url').val();

function getRoleCategory() {
    var role_id = $("#c_role").val();
    $("#role_category").html('');
    if (role_id != '' && role_id == '2') {
        var role_category = '<option value="">Select Role Category</option><option value="1">Personnel</option><option value="2">Administration</option><option value="3">Training</option><option value="4">Academic</option><option value="5">Finance</option>';
        $("#role_category").html(role_category);
    }
    else if (role_id != '' && role_id == '3') {
        var role_category = '<option value="">Select Role Category</option><option value="2">Administration</option><option value="5">Finance</option><option value="4">Academic</option>';
        $("#role_category").html(role_category);
    }
    else if (role_id != '' && role_id == '4') {
        var role_category = '<option value="">Select Role Category</option><option value="3">Training</option>';
        $("#role_category").html(role_category);
    }
    else if (role_id != '' && role_id == '5') {
        var role_category = '<option value="">Select Role Category</option><option value="6">Principal</option>';
        $("#role_category").html(role_category);
    }
    else {
        var role_category = '<option value="">Select Role Category</option>';
        $("#role_category").html(role_category);
    }

}



  