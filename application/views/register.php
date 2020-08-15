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
                        <form action="<?php echo site_url('Homepage/simpan_data')?>" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Full Name"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user" id="name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="mail" id="email" placeholder=" Email"/>
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
                        <a href="<?php echo site_url('Homepage/login')?>" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
</div>    

    <table border="1">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">No Telp</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($c_user >0) {
                foreach($user as $datas){
                    ?>
                
                <tr >
                <td><?= $datas->id_user ?></td>
                <td><?= $datas->nama_lengkap; ?></td>
                <td><?= $datas->username; ?></td>
                <td><?= $datas->email; ?></td>
                <td><?= $datas->password; ?></td>
                <td><?= $datas->telp; ?></td>
                <td>
                    <?php echo anchor('Homepage/edit/'.$datas->id_user,'Edit');?>
                    <?php echo anchor('Homepage/delete/'.$datas->id_user,'Delete');?>
                </td>
            </tr>
            <?php
                }
            }
            else {
                ?>
                <tr >
                    <td colspan="8"><center>Data Errors</center></td>
                </tr>
                <?php
            }
            ?>
            
        </tbody>
    </table>

    <!-- Footer -->
    
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for this template -->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>