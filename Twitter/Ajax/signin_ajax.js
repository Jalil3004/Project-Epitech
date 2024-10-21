$(function() {

    $('#signin__button').click(function(e) 
    {
        const form = $('#signin__form')
        const fields = $('#signin__fields')

        if(fields.val() < 1)
        {
           alert('All fields must be filled out');
        }else
        {
            e.preventDefault();

            $.ajax(
            {
                type: "POST",
                url: "../Controllers/signin_controller.php",
                data: form.serialize(),
                success: function(response)
                {   
                    console.log(response);
                    if (response !== null)
                    {
                        alert('Account created, you can now login !');
                        // window.location.href = 'URL';
                    } else
                    {
                            alert('Error');
                    }
                }
            })
        }
    })
})