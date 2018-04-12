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
            <h3>Description</h3>
            <?php echo $this->formHelper->inputGroup('description','form-control',['placeholder'=>'Description','required'=>false],'text');?>
            <br>
            <input type="button" value="Register" class="login-button"/>
        </div>
    </div>
<?php echo $this->formHelper->endForm();?>