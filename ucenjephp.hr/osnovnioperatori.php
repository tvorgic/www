
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
   <?php include_once 'head.php'; ?>
  </head>
<body>

    <div class="grid-container">
      <?php 
      // Čitati : https://www.simplilearn.com/tutorials/php-tutorial/include-in-php
      require_once 'izbornik.php'; ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout" id="tijelo">
            <?php  
            //operaror nadoljepljivanja .
            echo 'prvo' . ' ' . 'drugo', '<hr>';


            echo 9%2, '<hr>';
            
                
            
            ?>
          </div>
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>

      
    </div>


    <?php include_once 'skripte.php'; ?>
</html>
