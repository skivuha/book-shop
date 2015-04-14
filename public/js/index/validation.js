$(document).ready(function() {
    $('form').validate({ // initialize the plugin
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 2
            },

            email: {
                required: true,
                email: true
            }
        }
    });
})

