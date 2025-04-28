<?php
include_once __DIR__ . '/partial/head.inc.php';
?>
<!-- head -->

<body>
<?php
include_once __DIR__ . '/partial/header.inc.php';
?>
<main> 

 <!-- header -->
  <figure>

  <?php
   include_once __DIR__ . '/controller/baseController.php';
   include_once __DIR__ . '/partial/main.inc.php';
  ?>
  </figure>
  <?php
   // include_once __DIR__ . '/partial/main.inc.php';
  ?>
   <blockquote>
      <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, eligendi.<br>
      <a href="publication.php">En savoir plus &raquo;</a>
      </p>
    </blockquote>
</main>
   
    <!-- main -->
    <?php
      include_once __DIR__ . '/partial/footer.inc.php';
    ?>
  
    <!-- footer -->
    
</body>
</html>