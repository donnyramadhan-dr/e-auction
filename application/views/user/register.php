<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url('asset/fonts/material-icon/css/material-design-iconic-font.min.css')?>">
    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/gaya.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">

    <!-- Font Awesome -->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Navigation -->


    <!-- Page Header -->
            <!-- Sign up form -->
    <div class="main">
            <section class="signup">
            <div  class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="<?php echo site_url('UserPage/insert_user')?>" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Full Name"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user" id="name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pw" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="no" id="re_pass" placeholder="Phone Number"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url('asset/img/signup-image.jpg')?>" alt="sing up image"></figure>
                        <a href="<?php echo site_url('UserPage/signin')?>" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
</div>    

    
    <!-- Footer -->
    
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for this template -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>