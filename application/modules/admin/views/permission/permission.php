<?php 
$user_permission=empty($row->permissions)?'':json_decode($row->permissions);

?>

<div id="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Roles View</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header"><i class="fas fa-eye"></i> Roles View</div>
            <div class="card-body user_view">
                <?php 
				echo form_open('');
				?>
				<div class="row first-row">

                    <table class="table table-bordered table-striped">
						<tr> 
							<th style="width:300px;" class="control-label" for=""></th>
							<th ><input type="checkbox" class="cheque_all"> Select All </th>
							<th ><label>List</label></th>
							<th ><label>Add</label></th>
							<th ><label>Edit</label></th>
							<th ><label>View </label></th>
							<th ><label>Change Status </label> </th>
							<th ><label>Delete</label> </th>
						</tr>    
						<tr>
							<th class="control-label " for=""> Dashboard </th>
							<td><input type="checkbox" onclick="check_row('dashboard')" id="dashboard"></td>
							<td>
								<input type="checkbox" name="permission[]" class="dashboard" value="dashboard/index" <?php echo in_array('dashboard/index',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th class="control-label " for=""> Users </th>
							<td><input type="checkbox" onclick="check_row('users')" id="users"></td>
							<td>
								<input type="checkbox" name="permission[]" class="users" value="users/index" <?php echo in_array('users/index',$user_permission)?'checked':'';?>>
							</td>
							<td><input type="checkbox" name="permission[]" class="users" value="users/add" <?php echo in_array('users/add',$user_permission)?'checked':'';?>></td>
							<td><input type="checkbox" name="permission[]" class="users" value="users/edit" <?php echo in_array('users/edit',$user_permission)?'checked':'';?>></td>
							<td>
								<input type="checkbox" name="permission[]" class="users" value="users/details" <?php echo in_array('users/details',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="users" value="users/change_status" <?php echo in_array('users/change_status',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="users" value="users/delete" <?php echo in_array('users/delete',$user_permission)?'checked':'';?>>
							</td>
						</tr>
						<tr>
							<th class="control-label " for=""> Roles </th>
							<td><input type="checkbox" onclick="check_row(this.id)" id="roles"></td>
							<td>
								<input type="checkbox" name="permission[]" class="roles" value="roles/index" <?php echo in_array('roles/index',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="roles" value="roles/add" <?php echo in_array('roles/add',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
							<td>
								<input type="checkbox" name="permission[]" class="roles" value="roles/details" <?php echo in_array('roles/details',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="roles" value="roles/change_status" <?php echo in_array('roles/change_status',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
						</tr>
						<tr>
							<th class="control-label " for=""> Permission </th>
							<td><input type="checkbox" onclick="check_row(this.id)" id="permission"></td>
							<td></td>
							<td>
								<input type="checkbox" name="permission[]" class="permission" value="permission/set_permission" <?php echo in_array('permission/set_permission',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th class="control-label " for=""> Artist </th>
							<td><input type="checkbox" onclick="check_row(this.id)" id="artist"></td>
							<td>
								<input type="checkbox" name="permission[]" class="artist" value="artist/index" <?php echo in_array('artist/index',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="checkbox" name="permission[]" class="artist" value="artist/details" <?php echo in_array('artist/details',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="artist" value="artist/change_status" <?php echo in_array('artist/change_status',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
						</tr>
						<tr>
							<th class="control-label " for=""> Chair </th>
							<td><input type="checkbox" onclick="check_row(this.id)" id="chair"></td>
							<td>
								<input type="checkbox" name="permission[]" class="chair" value="chair/index" <?php echo in_array('chair/index',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="checkbox" name="permission[]" class="chair" value="chair/details" <?php echo in_array('chair/details',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="chair" value="chair/change_status" <?php echo in_array('chair/change_status',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
						</tr>
						<tr>
							<th class="control-label " for=""> Teacher </th>
							<td><input type="checkbox" onclick="check_row(this.id)" id="teacher"></td>
							<td>
								<input type="checkbox" name="permission[]" class="teacher" value="teacher/index" <?php echo in_array('teacher/index',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="checkbox" name="permission[]" class="teacher" value="teacher/details" <?php echo in_array('teacher/details',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="teacher" value="teacher/change_status" <?php echo in_array('teacher/change_status',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
						</tr>
						<tr>
							<th class="control-label " for=""> Consultant </th>
							<td><input type="checkbox" onclick="check_row(this.id)" id="consultant"></td>
							<td>
								<input type="checkbox" name="permission[]" class="consultant" value="consultant/index" <?php echo in_array('consultant/index',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="checkbox" name="permission[]" class="consultant" value="consultant/details" <?php echo in_array('consultant/details',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="consultant" value="consultant/change_status" <?php echo in_array('consultant/change_status',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
						</tr>
						<tr>
							<th class="control-label " for=""> Scholarship </th>
							<td><input type="checkbox" onclick="check_row(this.id)" id="scholarship"></td>
							<td>
								<input type="checkbox" name="permission[]" class="scholarship" value="scholarship/index" <?php echo in_array('scholarship/index',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="checkbox" name="permission[]" class="scholarship" value="scholarship/details" <?php echo in_array('scholarship/details',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="scholarship" value="scholarship/change_status" <?php echo in_array('scholarship/change_status',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
						</tr>
						<tr>
							<th class="control-label " for=""> Fellowship </th>
							<td><input type="checkbox" onclick="check_row(this.id)" id="fellowship"></td>
							<td>
								<input type="checkbox" name="permission[]" class="fellowship" value="fellowship/index" <?php echo in_array('fellowship/index',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="checkbox" name="permission[]" class="fellowship" value="fellowship/details" <?php echo in_array('fellowship/details',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="fellowship" value="fellowship/change_status" <?php echo in_array('fellowship/change_status',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
						</tr>
						<tr>
							<th class="control-label " for=""> Travel Grant </th>
							<td><input type="checkbox" onclick="check_row(this.id)" id="travel_grant"></td>
							<td>
								<input type="checkbox" name="permission[]" class="travel_grant" value="travel_grant/index" <?php echo in_array('travel_grant/index',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="checkbox" name="permission[]" class="travel_grant" value="travel_grant/details" <?php echo in_array('travel_grant/details',$user_permission)?'checked':'';?>>
							</td>
							<td>
								<input type="checkbox" name="permission[]" class="travel_grant" value="travel_grant/change_status" <?php echo in_array('travel_grant/change_status',$user_permission)?'checked':'';?>>
							</td>
							<td></td>
						</tr>
					</table>
                </div>
				<div class="row">
					<input type="submit" class="btn btn-primary">
				</div>
				<?php 
				echo form_close();
				?>
            </div>
        </div>	
    </div>
</div>
<script>
    $(".cheque_all").click(function(e){
        var table= $(e.target).closest('table');
        if($(this).prop('checked')==true)
        {
            $('input:checkbox',table).not(this).prop('checked', this.checked);    
        }else{
            $('input:checkbox',table).prop('checked', false);    
        }
    });
    function check_row(id)
    {
        if($('#'+id).prop('checked')==true)
        {
            $('.'+id).prop('checked',true);
        }else{
            $('.'+id).prop('checked',false);
        }
    }
</script>