$("#loginForm").submit(function(event)
{
    event.preventDefault();
    $.ajax({
        type: "GET",
        datatype:"json",
        url: "/api/Users/Login",
        data:({
            email : $('#email').val(),
            password: $('#password').val()
        }),
        success: function(result)
        {
            if(result && result.auth_token.length>1) // you should do your checking here
            {
                window.location = 'http://www.google.com/'; //just to show that it went through
            }
            else
            {
                $('#result').empty().addClass('error')
                    .append('Something is wrong.');
            }
        }
    });
    return false;
});