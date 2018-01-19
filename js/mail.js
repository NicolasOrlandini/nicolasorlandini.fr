

$('#submitButton').click(function() {
    $.ajax({
        url: 'mail.php',
        type: 'POST',
        data: {
            email: 'nicolas.orlandini@outlook.fr',
            message: 'coucou'
        },
        success: function(msg) {
            alert('Email Sent');
        }
    });
});