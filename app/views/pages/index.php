<?php
require APPROOT . '/views/includes/head.php';
?>
<?php
require APPROOT . '/views/includes/navigation.php';
?>
<style>
  
</style>

<main>
  <section class="home">
    <h2>Hi! My Name Is</h2>
    <h1 class="home__name">

      <?php echo $data['name'] ?>
      <span class="home__name--last">
        <?php echo $data['lastname'] ?>
      </span>
    </h1>
    <h2>
      Web Developer & Programmer
    </h2>

    <?php
        require APPROOT . '/views/includes/icons.php';
        ?>

<footer>&copy;2020</footer>
  </section>
</main>
