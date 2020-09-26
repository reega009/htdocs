<html>

<head>
    <title>Sign In</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/stylesignup.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">


</head>
<img class="wave" src="<?= base_url('assets/'); ?>images/wave.png" alt="">
<div class="container">
    <div class="img">
        <img src="<?= base_url('assets/'); ?>images/logo.png">
    </div>
    <div class="login-content">
        <form class="user" method="post" action="<?= base_url('auth'); ?>">
            <img class="avatar" src="<?= base_url('assets/'); ?>images/avatar2.png">
            <h2 class="title">Welcome</h2>

            <?= $this->session->flashdata('message'); ?>


            <div class="input-div one">
                <div class="i">
                    <i class='fas fa-user-circle'></i>
                </div>
                <div class="div">
                    <h5>Username/E-Mail</h5>
                    <input type="text" class="input" id="email" name="email" value="">
                    <small class="formerror1"><?= form_error('email'); ?></small>
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class='fas fa-user-lock'></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" id="password" name="password">
                    <small class="formerror"><?= form_error('password'); ?></small>
                </div>
            </div>

            <a href="#">Forgot Password?</a>
            <a class="createaccount" href="auth/Registration">Create Account ..</a>
            <input type="submit" class="btn" value="Login">
        </form>
    </div>
</div>
<script type="text/javascript" src="<?= base_url('assets/'); ?>js/mainsignup.js"></script>
</body>

</html>