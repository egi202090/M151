<?php echo $this->formHelper->createForm(
        "user",
        "/user/login",
        "POST"
);?>

<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

<div class="login">
    <div class="login-header">
        <h1>Login</h1>
    </div>
    <div class="login-form">
        <h3>Username:</h3>
        <?php echo $this->formHelper->inputGroup('username','form-control',['placeholder'=>'Username','required'=>true],'text');?>
        <h3>Password:</h3>
        <?php echo $this->formHelper->inputGroup('password','form-control',['placeholder'=>'Password','required'=>true],'password');?>
        <br>
        <input type="button" value="Login" class="login-button"/>
        <br>
        <a class="sign-up">Sign Up!</a>
        <br>
    </div>
</div>
<?php echo $this->formHelper->endForm();?>
