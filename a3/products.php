<?php
  
  session_start();
  include_once('tools.php');

  topModule();
?>
    
    <main>
<?php
    
    include_once('set_books.php');
    $IDset = false;

    if (isset($_GET['id']) && $_GET['id']>=0 && $_GET['id']<9 && is_numeric($_GET['id'])) {
      $books[$_GET['id']] -> fullDisplay();
      $IDset = true;
    } else {
        foreach ($books as $value) {
          $value -> shortDisplay();
        }
    }
    function getprice($price)
    {
      return substr($price, 1,2);
    }


?>

    <!-- source: https://stackoverflow.com/questions/23740548/how-to-pass-variables-and-data-from-php-to-javascript-->
    <div class="hidden">
      <div id="soft">
        <?php
          if ($IDset)
          {
            $price = getprice($books[$_GET['id']] -> get_price1());
            echo "$price";
          }
        ?>
      </div>
      <div id="hard">
        <?php
          if ($IDset)
          {
            $price = getprice($books[$_GET['id']] -> get_price2());
            echo "$price";
          }
        ?>
      </div>
      <div id="audio">
        <?php
          if ($IDset)
          {
            $price = getprice($books[$_GET['id']] -> get_price3());
            echo "$price";
          }
        ?>
      </div>
      <div id="graphic">
        <?php
          if ($IDset)
          {
            $price = getprice($books[$_GET['id']] -> get_price4());
            echo "$price";
          }
        ?>
      </div>
    </div>
    <script src="script.js" type="text/javascript"></script>
    </main>

<?php
  include_once('tools.php');
  bottomModule();
?>
