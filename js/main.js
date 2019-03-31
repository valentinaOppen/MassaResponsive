$(document).ready(function() {
        
    // Add scrollspy to <body>
    $('body').scrollspy({target: ".gridMenuTop", offset: 50});   

    // Add smooth scrolling on all links inside the navbar
    $("#navMenuTop a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){
    
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
        }  // End if
    });
    
    $('#alert').hide();
    
    $("#formulario").on("submit", function(e) {
        
        $('#alert').hide();
        $('#responseMessage').text('');
        
        e.preventDefault();
        
        var theBtn = $('#btnEnviar');                
        //Codigo para desabilitar boton de envio.
        
        theBtn.addClass('disabled');

        var data = $("#formulario").serialize();

        $.ajax({
            url: 'http://sergiomassa.com.ar/api/mail.php',
            type: 'POST',
            data: data,
        }).done(function(data) {
            //some code going here if success 
            if(data.message) {
                $('#responseMessage').text(data.message);
                //Reseteamos formulario
                form.closest("form").trigger("reset");       
                $('#alert').show(); 
            } 
            theBtn.removeClass('disabled'); 
        }).fail(function() {
            if(data.message) {
                $('#responseMessage').text(data.message);
                $('#alert').show();
            }
        });
    });
});