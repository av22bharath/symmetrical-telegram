$(document).ready(function() {
    $('#registration-form').submit(function(event) {
        event.preventDefault();

        var formData = $(this).serialize(); // Collect form data

        $.ajax({
            url: 'submit.php', 
            type: 'POST',
            data: formData,
            success: function(response) {
                $('#success-message').html(response).show();
                $('#registration-form')[0].reset(); // Reset form fields
            },
            error: function() {
                alert('Error submitting form');
            }
        });
    });
});
