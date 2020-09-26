<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/styleregistration.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<img class="wave" src="<?= base_url('assets/'); ?>images/wave.png" alt="">
<img class="wave2" src="<?= base_url('assets/'); ?>images/wave.png" alt="">
<div class="container">
    <div class="img">
        <img src="<?= base_url('assets/'); ?>images/logo.png">
    </div>
    <div class="login-content">
        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>  ">
            <div class=headertitle>
                <img class="regisicon" src="<?= base_url('assets/'); ?>images/Registericon.png">
                <h2 class="title">Registration</h2>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fab fa-telegram-plane"></i>
                </div>
                <div class="div">
                    <h5>E-Mail Address</h5>
                    <input type="text" class="input" id="email" name="email">
                    <small class="formerror"><?= form_error('email'); ?></small>
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class='fas fa-user-circle'></i>
                </div>
                <div class="div">
                    <h5>Full Name</h5>
                    <input type="text" class="input" id="name" name="name">
                    <small class="formerror"><?= form_error('name'); ?></small>
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class='fas fa-user-lock'></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" id="password1" name="password1">
                    <small class="formerror"><?= form_error('password1'); ?></small>
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="far fa-check-circle"></i>
                </div>
                <div class="div">
                    <h5>Password Repeat</h5>
                    <input type="password" class="input" id="password2" name="password2">

                </div>
            </div>


            <button type="submit" class="btn">CREATE NOW</button>
            <a class="haveaccount" href="<?= base_url('auth'); ?>">I Already Have Account . .</a>
        </form>
    </div>
</div>
<script type="text/javascript" src="<?= base_url('assets/'); ?>js/mainsignup.js"></script>
</body>

</html>