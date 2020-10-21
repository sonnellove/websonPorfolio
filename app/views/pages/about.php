<?php
require APPROOT . '/views/includes/head.php';
?>

<?php
require APPROOT . '/views/includes/navigation.php';
?>

<main>
    <section class="about">
        <div class="about__bio-image">
            <div class="about__bio">
                <h1 class="text-secondary">BIO</h1>
                <div class="about_profile_wrap">
                <h4>PROFILE</h4>
                
                <p><?php echo $data['profile'] ?></p>
                </div>
                <div class="about_profile_wrap">
                    <h4>TECHNICAL SKILLS</h4>
                    <p>-Programming (C, Python, JavaScript, Node.js, PHP, Web Programming Language)</p>
                    <p>-Framework (React.js, Laravel)</p>
                    <p>-Database (MYSQL)</p>
                    <p>-Network troubleshooting.</p>
                    <p>-Microsoft Office (MS Word, Excel, PowerPoint)</p>
                    <p>-Hardware/Software troubleshooting.</p>
                    <p>-Network troubleshooting.</p>
                </div>
            </div>
        </div>

        <div class="jobs">
            <div class="jobs__job">
            <h2 class="text-secondary">FRESH GRAD.</h2>
                <h3>Willing to explore my Ability on web programming</h3>
              
            </div>
        </div>


        <footer>&copy;2020</footer>
    </section>
</main>