$(document).ready(function() {
    
    $('#alert').hide();
    
    $("#formulario").on("submit", function(e) {
        
        $('#alert').hide();
        $('#responseMessage').text('');
        
        e.preventDefault();
        
        var theBtn = $('#btnEnviar');

        if ( $('#btnEnviar').is('.disabled')) {
            theBtn.removeClass('disabled'); // enable the button?
            lightFill(); //show fill inputs
            lightEmpty(); //show empty inputs
            return false;
        }

            var data = $("#formulario").serialize();
        $.ajax({
            url: 'http://sergiomassa.com.ar/api/mail.php',
            type: 'POST',
            data: data,
        }).done(function(data) {
            //some code going here if success 
            if(data.message) {
                $('#responseMessage').text(data.message);
                $('#alert').show(); 
            }
        }).fail(function() {
            if(data.message) {
                $('#responseMessage').text(data.message);
                $('#alert').show();
            }
        });
    });
});