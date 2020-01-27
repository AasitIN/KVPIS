var base_url=$('#url').val();
 $.validator.addMethod("pwcheck", function(value) {
           return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
               && /[a-z]/.test(value) // has a lowercase letter
               && /[A-Z]/.test(value) // has a Upper letter
               && /[!,@,#,$,%,^,&,*]/.test(value) // has a Special Character
               && /\d/.test(value) // has a digit
        },"Passwords should have special characters with uppercase letters, lowercase letters and at least one number.");
        $('#form').validate({
            rules:{
                role_id:{
                    required:true,
                },
                email:{
                    required:true,
                    email:true,
				   remote:base_url+'settings/cheque_unique_email?user_id='+$('#user_id').val(),
                },
                first_name:{
                    required:true
                },
                mobile:{
                    required:true,
				  remote:base_url+'settings/cheque_unique_mobile?user_id='+$('#user_id').val(),
                    maxlength:10,  
                    minlength:10,  
                },
                password:{
                    required:true,
                    pwcheck:true
                },
                cpassword:{
                    required:true,
                    equalTo:'#password',
                },
                
            },
            messages:{
               role_id:{
                    required:'Please select application for',
                },
                email:{
                    required:'Please enter email',
                    remote:'This email already registered,please try another'
                },
                first_name:{
                    required:'Please enter first name'
                },
                mobile:{
                    required:'Please enter mobile number',
                    remote:'This mobile number already registered,please try another'
                },
            },
            submitHandler:function(form){
                form.submit();   
            }
           
        });
        


  
  