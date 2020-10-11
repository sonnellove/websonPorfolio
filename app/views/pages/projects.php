<?php
require APPROOT . '/views/includes/head.php';
?>
<?php
require APPROOT . '/views/includes/navigation.php';
?>
<main>
    <section class="project">
        <div class="projects__bio-image">
            <h1 class="text-secondary">My Projects</h1>
        </div>

        <div class="projects__items">
            <?php
            foreach ($data as $col => $obj) {
                echo '<div class="projects__item_wraper">';
                echo '<div class="projects__item">';
                echo    "<img src='" . URLROOT . "" . $obj['img'] . "' alt='My Project'>";
                echo        '<div class="projects__btns">';
                echo            '<a href="' . $obj['link_Preview_to'] . '" class="projects__btn">';
                echo                '<i class="fas fa-eye"></i>' . $obj['link_Preview'] . '';
                echo            '</a>';
                echo            '<a href="' . $obj['link_Github_to'] . '" class="projects__btn">';
                echo                '<i class="fab fa-github"></i> ' . $obj['link_Github'] . '';
                echo            '</a>';
                echo        '</div>';
                echo '</div>';
                if ($obj['description']) {

                    echo            "<p>";
                    echo                   $obj['description'];
                    echo             "</p>";
                }
                echo '</div>';
            }
            ?>

        </div>
        <footer>&copy;2020</footer>
    </section>
</main>