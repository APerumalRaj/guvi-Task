
$(document).ready(function(){
     $("#form").submit(function(event){
        $.ajax({
            type:"POST",
            url: "https://localhost/demo/php/register.php",
            data:{
                User_name : User_name,
                User_email: User_email,
                User_password : User_password
            },
            success: function(data){
                console.log(data)
            },
            error:function(error){
                console.log(error)
            }
        })
        
        event.preventDefault();
    })
})