<h4 class="h4-responsive  othercourse">Get Registered</h4>
<div class="contact-form">
    <?php
    if (isset($_GET['data'])) {
        $datacont = $_GET['data'];
        if ($datacont == 1) {
            ?>
            <div class="alert alert-success ">
                Success! Well done its submitted.
            </div>
            <?php
        } else if ($datacont == 2) {
            ?>
            <div class="alert alert-danger"> 
                Error ! Occur. 
            </div>
            <?php
        }
    }
    ?>
    <div class="clearfix card-panel white lighten-5 cform-wrapper ">
        <form action="includes/coursedb.php" id="contactForm"  method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <div class="input-field">
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
                            <input id="subject" type="text" name="subject" class="validate input-box form-control" autocomplete="off" required>
                            <label for="subject" class="input-label">Qualification</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <div class="input-field">
                            <input id="Phone" type="text" name="phone" pattern="[789][0-9]{9}"  class="validate input-box form-control" autocomplete="off" required>
                            <label for="Phone" class="input-label">Phone</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="input-field textarea-input">
                            <textarea id="textarea1" name="message" class="validate materialize-textarea form-control"  style="height: 15px;" ></textarea>
                            <label for="textarea1" class="input-label">Query</label>
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
                <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">Get a quote</button>

            </div>
        </form>
    </div>

</div><!-- Contact form end -->