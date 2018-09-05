<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Dusty Books">
    <meta name="keywords" content="books, 2nd hand, literature, reading">
    <meta name="author" content="David A Sarkies">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dusty Books Second Hand Books</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>

  <body>

   <body>
    <header>
      <!--https://pixabay.com/en/books-read-literature-old-learn-2006000/-->
      <img src="../../media/DustyBooksTitle.jpg" alt="Dusty Books">
      <!-- http://www.stickpng.com/img/objects/book/collection-of-old-books -->
    </header>

    <nav>
      <ul class="full_list">
        <li class="full"><a class="full" href="index.php">Home <i class="fas fa-home"></i></a></li>
        <li class="full"><a class="full" href="products.php">Browse <i class="fas fa-book-reader"></i></a></li>
        <li class="full"><a class="full" id="search_button">Search <i class="fas fa-search"></i></a></li>
        <li class="full"><a class="full" id="login_button">Log-in <i class="fas fa-user"></i></a></li>
        <li class="full"><a class="full" href="">Shopping Cart <i class="fas fa-shopping-cart"></i></a></li>
        <li class="full"><a class="full" href="mailto:s3664099@student.rmit.edu.au">Contact Us <i class="far fa-envelope"></i></a></li>
      </ul>
        
      <!-- http://font-awesome.com -->
      <ul class="short_list">
        <li class="short"><a class="short" href="index.php"><i class="fas fa-home"></i></a></li>
        <li class="short"><a class="short" href="products.php"><i class="fas fa-book-reader"></i></a></li>
        <li class="short"><a class="short" id="search_button_small"><i class="fas fa-search"></i></a></li>
        <li class="short"><a class="short" id="login_button_small"><i class="fas fa-user"></i></a></li>
        <li class="short"><a class="short" href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
        <li class="short"><a class="short" href="mailto:dasarkies@gmail.com"><i class="far fa-envelope"></i></a></li>
      </ul>
    
      <form id="search_bar" class="hidden">
        <input class="search_options" type="text" name="search">
        <select class="search_options" name="option">
          <option value="author">author</option>
          <option value="title">title</option>
          <option value="genre">genre</option>
          <option value="ISBN">ISBN</option>
          <option value="type">type</option>
          <option value="antique">antique</option>
          <option value="auction">auction</option>
          <option value="first_edition">1st Edition</option>
        </select>
        <input class="search_options" type="button" value="search">
      </form>

      <div>
      <form id="login_bar" class="hidden" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post">
          Name <input type="text" name="username">
          Password <input type="password" name="password">
          <input type="submit" value="Login">
      </form> 
      </div> 
    </nav>
    
    <main>
        <div id="product_main">
        <table>
            <tr>
              <td colspan="3">
                  <div class="pic_box">
                    <img src="../../media/Paradise%20Lost.jpg">
                  </div>
                </td>
            </tr>
            <tr>
              <th>Title</th>
              <td colspan="2" class="details">Paradise Lost</td>
            </tr>
            <tr>
              <th>Author</th>
              <td colspan="2" class="details">John Milton</td>
            </tr>
              <th>Publisher</th>
              <td colspan="2" class="details">Penguin</td>
            <tr>
              <th>Genre</th>
              <td colspan="2" class="details">Poetry</td>
            </tr>
            <tr>
              <th>ISBN</th>
              <td colspan="2" class="details">0-14-042363-X</td>
            </tr>
            <tr>
              <th rowspan="4">
                  Options
              </th>
              <td>Soft-Cover</td>
              <td>$10.00</td>
            </tr>
            <tr>
              <td>Hard-Cover</td>
              <td>$20.00</td>
            </tr>
            <tr>
              <td>Audio-Book read by Eddie Murphy</td>
              <td>$5.00</td>
            </tr>
            <tr>
              <td>Graphic Novel</td>
              <td>$40.00</td>
            </tr>
            <tr>
              <td colspan="3" id="description">
                The quintessential work of English poetry, John Milton's Paradise Lost is a
                work that transcends the ages. A story of the fall, and redemption of mankind,
                Milton's Satan is said to be one of the greatest villians ever created.
              </td>
            </tr>
          </table>
        </div>
          
        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
          <div id="order_form">
            <span class="order_query">
            <input type="hidden" name="id" value="0-14-042363-X">
            <select name="option">
              <option value="soft" id="soft">Soft-Cover</option>
              <option value="hard" id="hard">Hard-Cover</option>
              <option value="audio" id="audio">Audio-book</option>
              <option value="graphic" id="graphic">Graphic-Novel</option>
            </select>
            </span>
            <span class="order_amount">
            <button type="button" id="decrease">-</button>
            <input id="qty" type="text" name="qty" value="0">
            <button type="button" id="increase">+</button>
            </span>
            <span class="order_query">    
            Total Price: $
            <span id="priceTotal">0</span>.00
            </span>
            <span class="order_query">
            <input type="submit" value="Add to Cart">
              <!-- block submission if value is 0 or NaN -->
              <!-- see if we can use local storage to keep search and logon buttons when changing -->
            </span>
            </div>
            <div id="error">
            </div>
        </form>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> David Alfred Sarkies s3664099.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    </footer>
      <script src="script.js" type="text/javascript"></script>
      <script src="nav.js" type="text/javascript"></script>
  </body>
</html>
