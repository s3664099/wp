<?php
  
  session_start();
  include_once('tools.php');

  topModule();
?>

    <main>
<?php

  include_once('set_books.php');

  foreach ($books as $value) {
    $value -> shortDisplay();
  }

?>
  </main>

<?php
  
  include_once('tools.php');

  bottomModule();
?>

