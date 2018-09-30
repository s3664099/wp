
<?php
  
  session_start();
  include_once('tools.php');

  topModule();
?>
    
    <main>
<?php
    include_once('set_books.php');
    $id =$_GET['id'];

    if ($id>=0 && $id<9 && is_numeric($id)) {
      $books[$id] -> fullDisplay();
    } else {
      header('Location: products.php');
    }

?>

    <!-- source: https://stackoverflow.com/questions/23740548/how-to-pass-variables-and-data-from-php-to-javascript-->
    <div class="hidden">
      <div id="soft">
        <?php
          $price1 = $books[$id] -> get_price1();
          $price = substr($price1, 1,2);
          echo "$price";
        ?>
      </div>
      <div id="hard">
        <?php
          $price2 = $books[$id] -> get_price2();
          $price = substr($price2, 1,2);
          echo "$price";
        ?>
      </div>
      <div id="audio">
        <?php
          $price3 = $books[$id] -> get_price3();
          $price = substr($price3, 1,2);
          echo "$price";
        ?>
      </div>
      <div id="graphic">
        <?php
          $price4 = $books[$id] -> get_price4();
          $price = substr($price4, 1,2);
          echo "$price";
        ?>
      </div>
    </div>
    <script src="script.js" type="text/javascript"></script>
    </main>

<?php
  
  include_once('tools.php');

  bottomModule();
?>

