<?php echo form_open('Login/proses_login'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Server Toko Emas Adil</title>

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
                	<center>
	                    <div class="signin-form">
	                        <figure><img src="<?php echo base_url(); ?>assets/adds/images/logo.png"></figure>
	                    </div>

                    	<div class="signin-form">
                        	<h2 class="form-title">Login Server Toko Emas Adil</h2>
	                        <form>
	                            <div class="form-group">
	                                <label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
	                                <input type="email" name="email" id="email" placeholder="Inputkan email ....." required/>
	                            </div>
	                            <div class="form-group">
	                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
	                                <input type="password" name="password" id="password" placeholder="Password" required/>
	                            </div>
	                            <?php echo $error; ?>
	                            <?php echo $this->session->flashdata('message');?>
	                            <div class="form-group form-button">
	                                <center><input type="submit" class="form-submit" value="Login" /></center>
	                            </div>
	                            <div class="form-group">
	                                <center><a href="<?php echo base_url(); ?>Login/lupa_pass" data-toggle="modal" data-target="#reset">Lupa Password</a></center>
	                            </div>
	                        </form>
                   		</div>
                   	</center>
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

<?php echo form_close(); ?>