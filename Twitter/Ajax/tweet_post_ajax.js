$(function() {

    $('#tweet__button').click(function(e) 
    {
        const form = $('#tweet__form')
        const fields = $('#tweet__field')

        if(fields.val() < 1)
        {
           alert('Field must be filled out');
        }else
        {
            e.preventDefault();

            $.ajax(
            {
                type: "POST",
                url: "../Controllers/tweet_controller.php",
                data: form.serialize(),
                success: function(response)
                {   
                    // console.log(response);
                    if (response !== null)
                    {   
                        // alert('Tweet posted !');
                        window.location.href = 'http://localhost/W-WEB-090-LIL-1-1-academie-marie.robertson/Views/feed_view.php';

                    } else
                    {
                            alert('Error');
                    }
                }
            })
        }
    })
})
