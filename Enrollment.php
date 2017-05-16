<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Enrollment | INTEGER Innovation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="images/favicon.png" >

        <meta name="title" content="Learning Solution Company provide Training Certification | INTEGER Innovation" />
        <meta name="keywords" content=" Technical training, education solutions, INTEGER Innovation, Big Data, Hadoop, Business Analytics, R, iOS, Development, Android, Cloud Computing," />
        <meta name="description" content="INTEGER Innovation provides training for Android, Big Data and Hadoop, Hadoop Admin, Cassandra, Data Science, Cloud Computing for professionals." />

        <?php
        require_once 'includes/head.php';
        ?>

    </head>
    <?php
    require_once 'includes/header.php';
    ?>

    <!-- Portfolio Section start -->
    <section id="portfolio" class="scroll-section  padd-tb-120 root-sec white portfolio-wrap">
        

        <div class="portfolio-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        
                        <div class="contact-form">
                        <?php
                        if (isset($_GET['data'])) {
                            $datacont = $_GET['data'];
                            if ($datacont == 1) {
                                ?>
                        <div class="alert alert-success">
                                 Success! Well done its submitted.
                                </div>
                                <?php
                            } else if ($datacont == 2) {
                                ?>
                                <div class="alert alert-danger "> 
                                    Error ! Occur. 
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <br>
                        <h2 class="title text-center">Enquiry Form</h2>
                        <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                            <form action="includes/enquiry.php" id="contactForm"  method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group ">
                                            <div class="input-field clearfix">
                                                <input id="contact_name" type="text" name="name" class="input-box validate  form-control" autocomplete="off" required>
                                                <label for="contact_name" class="input-label">Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group"><div class="input-field">
                                                <input id="email" type="email" name="email" class="validate form-control  input-box" autocomplete="off" required>
                                                <label for="email" class="input-label">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="subject" type="text" name="faname" class="validate input-box form-control" autocomplete="off" required>
                                                <label for="subject" class="input-label">Father's / Husband Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="subject" type="text" name="phone" pattern="[789][0-9]{9}" required class="validate input-box form-control" autocomplete="off" required>
                                                <label for="Phone" class="input-label">Phone</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="subject" type="text" name="dob" class="validate input-box form-control" autocomplete="off" required>
                                                <label for="subject" class="input-label">Date of Birth</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="subject" type="text" name="course"  required class="validate input-box form-control" autocomplete="off" required>
                                                <label for="Phone" class="input-label">Course Interest In</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="subject" type="text" name="qual" class="validate input-box form-control" autocomplete="off" required>
                                                <label for="subject" class="input-label">Qualification</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="subject" type="text" name="emp" required class="validate input-box form-control" autocomplete="off" required>
                                                <label for="Phone" class="input-label">Employed Status</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="subject" type="text" name="colname" class="validate input-box form-control" autocomplete="off" required>
                                                <label for="subject" class="input-label">Company / College Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="subject" type="text" name="comm"  required class="validate input-box form-control" autocomplete="off" required>
                                                <label for="Phone" class="input-label">Comments</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <div class="input-field textarea-input">
                                                <textarea id="textarea1" name="message" class="validate materialize-textarea form-control" autocomplete="off" style="height: 22px;" ></textarea>
                                                <label for="textarea1" class="input-label">Address</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <div class="input-field textarea-input">
                                                <input type="text" class="validate input-box form-control" name="captcha" autocomplete="off" />
                                                <label for="textarea1" class="input-label" id="captchaOperation" ></label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php
                                $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
                                $page = basename($_SERVER['PHP_SELF']);
                                ?>
                                <input type="hidden" name="pagedir" value="<?php echo $directory_self; ?>">
                                <input type="hidden" name="pageurl" value="<?php echo $page; ?>">



                                <div class="input-field submit-wrap clearfix">
                                    <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>

                                </div>
                            </form>
                        </div>

                    </div><!-- Contact form end -->	
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- #portfolio Section end -->
    <!-- Footer Section end -->
    <?php
    require_once 'includes/footer.php';
    ?>

<script type="text/javascript" src="http://yourjavascript.com/17825231205/formvalidation-min.js"></script>
<script src="js/bootstrap.js"></script>
<script>
    $(document).ready(function () {
        // Generate a simple captcha
$(".contact-form .alert").fadeOut(4000);
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
                faname: {
                    validators: {
                        notEmpty: {
                            message: 'required'
                        }
                    }
                },
                dob: {
                    validators: {
                        notEmpty: {
                            message: 'required'
                        }
                    }
                },
                course: {
                    validators: {
                        notEmpty: {
                            message: 'required'
                        }
                    }
                },
                qual: {
                    validators: {
                        notEmpty: {
                            message: 'required'
                        }
                    }
                },
                emp: {
                    validators: {
                        notEmpty: {
                            message: 'required'
                        }
                    }
                },
                colname: {
                    validators: {
                        notEmpty: {
                            message: 'required'
                        }
                    }
                },
                comm: {
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
</script>

</body>

</html>