
$('#submitButton').click(function() {
    $.ajax({
        url: 'mail.php',
        type: 'POST',
        data: {
            email: 'contact@orlandini.fr',
            message: 'coucou'
        },
        success: function(msg) {
            alert('Email Sent');
        }
    });
});