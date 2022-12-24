
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
   <?php include_once 'head.php'; ?>
  </head>
<body <?php
//Dobra praksa otvoreno/zatvoreno unutar atributa elementa
echo 'style="background-color: gray"';
?>>

    <div class="grid-container">
      <?php 
      // Čitati : https://www.simplilearn.com/tutorials/php-tutorial/include-in-php
      require_once 'izbornik.php'; ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <?php
                // Dobra praksa je otvoriti/zatvoriti PHP unutar vrijednosti atributa
           ?>
        <div class="<?='callout';?>" id="tijelo">
            <!--Dobra praksa je otvoriti i zatvoriti PHP tag u istom elementu-->
            <?php
                echo 'PHP na dobrom mjestu';
            ?>
          </div>
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>

      
    </div>


    <?php include_once 'skripte.php'; ?>
</html>
