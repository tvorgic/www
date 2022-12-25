
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
   <?php include_once 'head.php'; ?>
  </head>
<body>

    <div class="grid-container">
      <?php 
      require_once 'izbornik.php'; ?>
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout" id="tijelo">
            <?php  
                
                //operator dodjeljivanja
                $i = '2';
                
                //operator provjere vrijednosti
                echo $i == 2, '<hr>';

                //operator provjere vrijednosti i tipa podatka
                echo $i === 2, '<hr>'; //vrijednost false se ne ispisuje, true je 1


                echo $i > 1, '<hr>';
                echo $i < 1, '<hr>';
                echo $i >= 1, '<hr>';
                echo $i >= 1, '<hr>';
                echo $i != 1, '<hr>'; // različito


                //logički operatori
                
            
            ?>
          </div>
        </div>
        <?php include_once 'podnozje.php'; ?>
      </div>

      
    </div>


    <?php include_once 'skripte.php'; ?>
</html>
