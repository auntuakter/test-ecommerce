$(document).ready(function(){
    $("#current_pwd").keyup(function(){
        var current_pwd = $("#current_pwd").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'post',
            url:'/current-pwd',
            data:{current_pwd:current_pwd},
            success:function(resp){
                if(resp=="false"){
                    $("#check_pwd").html("<font color=red>Password is incorrect</font>");
                }else if(resp=="true"){
                    $("#check_pwd").html("<font color=green>Password is correct</font>");
                }
            },error:function(){
                alert("Current password is wrong");
            }
        });
    });

    $("#confirm_pwd").keyup(function(){
        var new_pwd = $("#new_pwd").val();
        var confirm_pwd = $("#confirm_pwd").val();

        if(new_pwd != confirm_pwd){
            $("#show_error").html("<font color=red>Password is not match</font>");
        }else{
            $("#show_error").html("<font color=green>Password is match</font>");
        }
    });

});
