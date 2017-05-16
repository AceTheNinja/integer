$(document).ready(function () {
    // Generate a simple captcha
    $(".contact-form .alert").fadeOut(48000);

      function getPathFromUrl1(url) {
        a='.';
    if (url.indexOf(a) > -1) {
  return url.split(/[?#]/)[0];
} 
else 
{
    return url+'.php';
}
}
    var pgurl1 = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    pgurl1 = getPathFromUrl1(pgurl1);
    $(".single-widget ul li a[href='" + pgurl1 + "']").parent().hide();

    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    ;
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#contactForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'required'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'required'
                    },
                    emailAddress: {
                        message: 'Invalid email address'
                    }
                }
            },
            subject: {
                validators: {
                    notEmpty: {
                        message: 'required'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'required'
                    },
                    phone: {
                        message: 'invalid ',
                        country: 'IN'
                    }, lessThan: {
                        value: 9999999999,
                        message: 'cant be more than 10 digits'
                    },
                    countries: {
                        IN: 'India',
                        US: 'USA'
                    }
                }
            },
            message: {
                validators: {
                    notEmpty: {
                        message: 'required'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function (value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }

        }
    });


});
var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
(function () {
    var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/562f593cca044f7e2fdc6b51/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
