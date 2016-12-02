   $(document).ready(function(){
        $('#send_message').click(function(e){
										  
            e.preventDefault();

            var error = false;
            var firstname = $('#firstname').val();
			var name = $('#name').val();
            var email = $('#email').val();
			var country = $('#country').val();
			var profession = $('#profession').val();
            var refuse = $('#refuse').val();
            
            if(firstname.length == 0){
                var error = true;
                $('#firstname_error').fadeIn(1000);
            }else{
                $('#firstname_error').fadeOut(1000);
            }
			 if(name.length == 0){
                var error = true;
                $('#name_error').fadeIn(1000);
            }else{
                $('#name_error').fadeOut(1000);
            }
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email_error').fadeIn(1000);
            }else{
                $('#email_error').fadeOut(1000);
            }
            if(country.length == 0){
                var error = true;
                $('#country_error').fadeIn(1000);
            }else{
                $('#country_error').fadeOut(1000);
            }
            if(profession.length == 0){
                var error = true;
                $('#profession_error').fadeIn(1000);
            }else{
                $('#profession_error').fadeOut(1000);
            }
			  if(refuse.length == 0){
                var error = true;
                $('#refuse').fadeIn(1000);
            }else{
                $('#refuse').fadeOut(1000);
            }
            
            if(error == false){

                $('#send_message').attr({'disabled' : 'true', 'value' : 'Envoi en cours...' });

                $.post("send.php", $("#contact_form").serialize(),function(result){

                    if(result == 'sent'){

                         $('#cf_submit_p').remove();

                        $('#mail_success').fadeIn(1000);
                    }else{
						
                        $('#mail_fail').fadeIn(1000);
                        
                        $('#send_message').removeAttr('disabled').attr('value', 'Message envoyé');
                    }
                });
            }
        });    
    });