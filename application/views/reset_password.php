<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password| Aplikasi Teradam</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adds/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adds/css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-form">
                        <figure><img src="<?php echo base_url(); ?>assets/adds/images/foto.png" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Reset Password</h2>
                        <form action="<?php echo base_url(); ?>Login/pass_baru" method="POST">
                            <input type="hidden" name="email" value="<?php echo $this->session->userdata('email'); ?>">
                            <div class="form-group">
                                <label for="passwordbaru"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="passwordbaru" id="passwordbaru" placeholder="Inputkan Password Baru ....."/>
                            </div>
                            <div class="form-group">
                                <label for="konfirmasipass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="konfirmasipass" id="konfirmasipass" placeholder="Inputkan kembali password ...."/>
                            </div>
                            <div class="form-group form-button">
                                <center><input type="submit" class="form-submit" value="Submit" /></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="<?php echo base_url(); ?>assets/adds/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adds/js/main.js"></script>
    <!-- <script type="text/javascript">
        $('#notifikasi').slideDown('slow').delay(5000).slideUp('slow');
    </script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

