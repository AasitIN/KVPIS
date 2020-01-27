$.validator.addMethod("pwcheck", function(value) {
           return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
               && /[a-z]/.test(value) // has a lowercase letter
               && /[A-Z]/.test(value) // has a Upper letter
               && /[!,@,#,$,%,^,&,*]/.test(value) // has a Special Character
               && /\d/.test(value) // has a digit
        },"Passwords should have special characters with uppercase letters, lowercase letters and at least one number.");
$(function(){
	$('#formID').validate({
		rules:{
			old_password:{
				required:true
			},
			new_password:{
				required:true,
				pwcheck:true
			},
			confirm_password:{
				required:true,
				equalTo:'#new_password'
			},
		},
		messages:{
			old_password:{
				required:'Please enter your old password',
			},
			new_password:{
				required:'Please enter your new password',
			},
			confirm_password:{
				required:'Please enter your confirm password',
				equalTo:'Please enter same password again'
			},
		},
		submitHandler:function(form){
			generateHashPassword();
			form.submit();
		}
	});
});
function generateHashPassword() {
		
		var old_password = document.getElementById('old_password');
		var hashPassword = new jsSHA("SHA-512", "TEXT", {numRounds: 1});
		hashPassword.update(old_password.value);
		old_password.value = hashPassword.getHash("HEX");
      
      
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