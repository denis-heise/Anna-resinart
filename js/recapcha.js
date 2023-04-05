function onClick(evt) {
    evt.preventDefault();
    grecaptcha.ready(function() {
    grecaptcha.execute('6Le_Cp4bAAAAAGU9N211yiaL-yvMSkMPfgDecbjk', {action: 'submit'}).then(function(token) {
                            console.log(token);
                document.getElementById('g-recaptcha-response').value=token;
            });
        });
}