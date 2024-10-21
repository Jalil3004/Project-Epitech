$(function() {

    $('#login__button').click(function(e) 
    {
        const form = $('#login__form')
        const fields = $('#login__fields')
        
        if(fields.val() < 1)
        {
           alert('All fields must be filled out');
        }else
        {
            e.preventDefault();

            $.ajax(
            {
                type: "POST",
                url: "../Controllers/login_controller.php",
                data: form.serialize(),
                success: function(response)
                {   
                    if (response == 'success')
                    {
                        alert('Connexion complete')

                        window.location.href = 'http://localhost/W-WEB-090-LIL-1-1-academie-marie.robertson/Views/feed_view.php';
                    } else
                    {
                        alert('No account found. Please sign in before login.');
                    }
                }
            })
        }
    })
})