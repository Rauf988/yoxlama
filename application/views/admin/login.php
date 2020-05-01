






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PA NEWS</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="<?php echo base_url('public/assets/front/images/icons/logo.png')?>" rel="icon" type="image/png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script>

    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/admin/style/style.css')?>">

</head>
<body>

<section class="user">
    <div class="user_options-container">
        <div class="user_options-text">
            <div class="user_options-unregistered">
                <h2 class="user_unregistered-title">Don't have an account?</h2>

                <button class="user_unregistered-signup" id="signup-button">Sign up</button>
            </div>

            <div class="user_options-registered">
                <h2 class="user_registered-title">Have an account?</h2>
                <button class="user_registered-login" id="login-button">Login</button>
            </div>
        </div>
<!--        <form action="--><?php //echo base_url('Raufcont/loginAct')?><!--" method="post">-->

        <div class="user_options-forms" id="user_options-forms">

            <?php if($this->session->userdata('accden')) { ?>
                <div class="alert alert-danger">
                    <?php echo  $this->session->userdata('accden');  $this->session->unset_userdata('accden') ?>
                </div>
            <?php } ?>

            <div class="user_forms-login">
                <h2 class="forms_title">Login</h2>
                <form action="<?php echo base_url('Raufcont/loginAct')?>" method="post" class="forms_form">
                    <fieldset class="forms_fieldset">
                        <div class="forms_field">
                            <input type="email" placeholder="Email" class="forms_field-input" name="aemail" >
                        </div>
                        <div class="forms_field">
                            <input type="password" placeholder="Password" class="forms_field-input" name="apass" >
                        </div>
                    </fieldset>
                    <div class="forms_buttons">
                        <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                        <input type="submit" value="Log In" class="forms_buttons-action">
                    </div>
                </form>
            </div>
<!--        </form>-->
            <form action="<?php echo base_url('Raufcont/regAct')?>" method="post" enctype="multipart/form-data">
            <div class="user_forms-signup">


                <?php if($this->session->userdata('accden','Xahiş olunur bolşuq buraxmayın')) { ?>
                    <div class="alert alert-danger">
                        <?php echo  $this->session->userdata('accden');  $this->session->unset_userdata('accden') ?>
                    </div>
                <?php } ?>

                <?php if($this->session->flashdata('accden','Ugurla qeydiyyata alindi')) { ?>
                    <div class="alert alert-success">
                        <?php echo  $this->session->flashdata('accden')?>
                    </div>
                <?php } ?>



                <h2 class="forms_title">Sign Up</h2>
                <form class="forms_form">
                    <fieldset class="forms_fieldset">
                        <div class="forms_field">
                            <input type="text" placeholder="Full Name" class="forms_field-input" name="name" >
                        </div>
                        <div class="forms_field">
                            <input type="email" placeholder="Email" class="forms_field-input" name="email" >
                        </div>
                        <div class="forms_field">
                            <input type="password" placeholder="Password" class="forms_field-input" name="pass" >
                        </div>
                    </fieldset>
                    <!-- submitbutton -->
                    <div class="forms_buttons">
                        <input type="submit" value="Sign up" class="forms_buttons-action">
                    </div>
                </form>
            </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>

<script src="<?php echo base_url('public/assets/admin/js/java.js')?>"></script>
