<?php
   require APPROOT . '/views/includes/head.php';
?>

<header>
<?php
       require APPROOT . '/views/includes/navigation.php';
?>
</header>
<div class="container-login">
    <div class="wrapper-login">
        <h2>Register</h2>

            <form
                id="register-form"
                method="POST"
                action="<?php echo URLROOT; ?>/users/register"
                >
            <?php 
                if($data['usernameError']){
                    echo   '<input type="text" placeholder="Username *" name="username">';
                    echo   '<span class="invalidFeedback">';
                    echo    $data['usernameError'];
                    echo   '</span>';
                }else{
                    echo   '<input type="text" placeholder="Username *" name="username" value="'.$data['username'].'">';
                }

                if($data['emailError']){
                    echo   '<input type="text" placeholder="email *" name="email">';
                    echo   '<span class="invalidFeedback">';
                    echo    $data['emailError'];
                    echo   '</span>';
                }else{
                    echo   '<input type="text" placeholder="email *" name="email" value="'.$data['email'].'">';
                }
            ?>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <input type="password" placeholder="Confirm Password *" name="confirmPassword">
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </span>
            <br>
            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/login">Login!</a></p>
        </form>
    </div>
</div>
<?php
       require APPROOT . '/views/includes/footer.php';
?>