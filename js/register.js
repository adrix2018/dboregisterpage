$('document').ready(function()
{
    /* validation */
    $("#register-form").validate({
        rules:
        {
            user: {
                required: true,
                minlength: 3
            },
            pass: {
                required: true,
                minlength: 3,
                maxlength: 15
            },
            pass2: {
                required: true,
                equalTo: '#pass'
            },
            email: {
                required: true,
                email: true
            }
        },
        messages:
        {
            user: "Username Needs To Be Minimum of 3 Characters / Tu cuenta debe ser minimo 3 letras",
            pass:{
                required: "Provide a Password - Necesitas una contrasena",
                minlength: "Password Needs To Be Minimum of 3 Characters - Tu contrasena debe ser minimo 3 letras"
            },
            email: "Enter a Valid Email - Ingresa un email valido",
            pass2:{
                required: "Retype Your Password - Repite tu contrasena",
                equalTo: "Password Mismatch! Retype - tus contrasenas no coinciden"
            }
        },
        submitHandler: submitForm
    });
    /* validation */

    /* form submit */
    function submitForm()
    {
        var data = $("#register-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'functions/register.php',
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry, Username already exist - Lo sentimos esa cuenta ya existe o alguien mas ya la tomo</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
                else if(data=="registered")
                {
                    $(".form-signin").fadeOut(500);
                    $("#success").html("<div class=\'alert alert-success alert-dismissable fade in\'>Successfully created account !!!<br>Cuenta creada con exito</div>");
                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
            }
        });
        return false;
    }
    /* form submit */

});
