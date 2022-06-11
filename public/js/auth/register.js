$("#registrationForm").submit(function(event)
{
    event.preventDefault();
    $.ajax({
        type: "POST",
        datatype:"json",
        url: "https://development.inhealth.co.id/samplebackend/api/UserProfile/Register",
        data:({
            email : $('#email').val(),
            password: $('#password').val()
        }),
        success: function(result)
        {

            alert(result);
            // if(result && result.auth_token.length>1) // you should do your checking here
            // {
            //     window.location = 'http://www.google.com/'; //just to show that it went through
            // }
            // else
            // {
            //     $('#result').empty().addClass('error')
            //         .append('Something is wrong.');
            // }
        }
    });
    return false;
});