$(function() {
    $('#register').click(function(e) {

            var valid = this.form.checkValidity();
            if(valid) {
                // e.preventDefault();


                Swal.fire({
                    'title': 'Congratulations!',
                    'text': 'Your extra 5$ has been deposited',
                    'type': 'success'
                })
            } else {
                Swal.fire({
                    'type': 'error',
                    'title': 'Oops...',
                    'text': 'Something went wrong!'
                    })
            }

            const firstname     = $('#firstname').val();
            const lastname      = $('#lastname').val();
            const username      = $('#username').val();
            const email         = $('#email').val();
            const city          = $('#city').val();
            const password      = $('#password').val();
            const referall      = $('#referall').val();

        });

    });
