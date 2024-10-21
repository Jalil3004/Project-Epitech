$(function () {

    $('button').click(function (e) {
        const form = $('form')
        e.preventDefault();

        $.ajax(
            {
                type: "POST",
                url: "../Controllers/edit_account_controller.php",
                data: form.serialize(),
                success: function (response) {
                    if (response == 1) {
                        alert('Modifications saved.');
                        window.location.href = 'URL';
                    } else {
                        alert('Error');
                    }
                }
            }
        )
    })
})