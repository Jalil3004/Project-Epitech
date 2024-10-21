$(function() {

    $('').click(function(e) 
    {
        const button = $('#logout__button') // logout buttons
        e.preventDefault();

        $.ajax(
        {
            type: "POST",
            url: "../Controllers/logout_controller.php",
            data: button.serialize(),
            success: function(response)
            {   
                if (response == 1)
                {
                    window.location.href = 'URL CONNECTION';
                } else
                {
                        alert('Error');
                }
            }
        }
        )
    })
})