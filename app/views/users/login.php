<?php
   require APPROOT . '/views/includes/head.php';
?>
<header>
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</header>

<main>
    <section class="container-login">
        <div class="wrapper-login">
            <h2>Sign in</h2>
            <form action="<?php echo URLROOT; ?>/users/login" method="POST">

            <?php 
                if($data['usernameError']){
                    echo   '<input type="text" placeholder="Username" name="username">';
                    echo   '<span class="invalidFeedback">';
                    echo    $data['usernameError'];
                    echo   '</span>';
                }else{
                    echo   '<input type="text" placeholder="Username *" name="username" value="'.$data['username'].'">';
                }
            ?>
                <input type="password" placeholder="Password" name="password">

                <span class="invalidFeedback">
                    <?php echo $data['passwordError']; ?>
                </span>
                <br>
                <button id="submit" type="submit" value="submit">Submit</button>

                <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
            </form>
        </div>
    </section>
</main>
<?php
       require APPROOT . '/views/includes/footer.php';
?>