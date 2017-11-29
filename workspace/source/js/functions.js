/* global $ */
/* global location $ */
/* global imports $ */

//login
$(document).ready(function(){
    $('#log_submit').click(function(){
        var username = $('#log_username').val();
        var password = $('#log_password').val();
        if(username != '' && password != ''){
            $.ajax({
                url:"../scripts/login_script.php",  
                method:"POST",  
                data:{username:username, password:password},  
                async: false,
                success: function(data){
                    if(data == 1)  
                          {
                               window.location = "../pages/calendar.php";
                               alert("success");
                             
                          }  
                          else  
                          {  
                               
                            	alert("invalid password or username");
                          }  
                     },
                     cache: false
            });
            
        }else{
            alert("enter username or username");
        }
    });
});






    