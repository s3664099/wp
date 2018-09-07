<!-- Add photos to the title page
    Look at changing the color of the nav bar
    Fix up the style for the product select and quantity buttons
    value turns red when enter letter
    pretty up login page - add book stacks to either side for wide screen
    Tidy up comments
    
    Have the search bar stay when changing pages
    If have time - have objects for other books -->


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
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <script src='../wireframe.js'></script>
    <script>document.getElementById("wireframecss").disabled=true;</script>
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
        <li class="full"><a class="full" href="login.php">Log-in <i class="fas fa-user"></i></a></li>
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
    </nav>
    
    <main>
        <div id="product_main">
        <table>
            <tr class="wide">
              <td colspan="4">
                <div class="pic_box">
                  <img src="../../media/Paradise%20Lost.jpg">
                </div>
              </td>
            </tr>
            <tr class="wide">
              <th>Title</th>
              <td class="details">Paradise Lost</td>
              <th colspan="2" id="type_head">Options</th>
            </tr>
            <tr class="wide">
              <th>Author</th>
              <td class="details">John Milton</td>
              <td class="type">Soft-Cover</td>
              <td>$10.00</td>
            </tr>
            <tr class="wide">
              <th>Publisher</th>
              <td class="details">Penguin</td>
              <td class="type">Hard-Cover</td>
              <td>$20.00</td>
            </tr>
            <tr class="wide">
              <th>Genre</th>
              <td class="details">Poetry</td>
              <td class="type">Audio-Book read by Eddie Murphy</td>
              <td>$5.00</td>
            </tr>
            <tr class="wide">
              <th>ISBN</th>
              <td class="details">0-14-042363-X</td>
              <td class="type">Graphic Novel</td>
              <td>$40.00</td>
            </tr>
            <tr class="wide">
              <td colspan="4" id="description">
                The quintessential work of English poetry, John Milton's Paradise Lost is a
                work that transcends the ages. A story of the fall, and redemption of mankind,
                Milton's Satan is said to be one of the greatest villians ever created.
              </td>
            </tr>

            <tr class="narrow">
              <td colspan="2">
                <div class="pic_box">
                  <img src="../../media/Paradise%20Lost.jpg">
                </div>
              </td>
            </tr>
            <tr class="narrow">
              <th>Title</th>
              <td>Paradise Lost</td>
            </tr>
            <tr class="narrow">
              <th>Author</th>
              <td>John Milton</td>
            </tr>
            <tr class="narrow">
              <th>Publisher</th>
              <td>Penguin</td>
            </tr>
            <tr class="narrow">
              <th>Genre</th>
              <td>Poetry</td>
            </tr>
            <tr class="narrow">
              <th>ISBN</th>
              <td>0-14-042363-X</td>
            </tr>
            <tr class="narrow">
              <th colspan="2">
                  Options
              </th>
            </tr>
            <tr class="narrow">
              <td>Soft-Cover</td>
              <td class="type">$10.00</td>
            </tr>
            <tr class="narrow">
              <td>Hard-Cover</td>
              <td class="type">$20.00</td>
            </tr>
            <tr class="narrow">
              <td>Audio-Book read by Eddie Murphy</td>
              <td class="type">$5.00</td>
            </tr>
            <tr class="narrow">
              <td>Graphic Novel</td>
              <td class="type">$40.00</td>
            </tr>

            <tr class="narrow">
              <td colspan="2" id="description">
                The quintessential work of English poetry, John Milton's Paradise Lost is a
                work that transcends the ages. A story of the fall, and redemption of mankind,
                Milton's Satan is said to be one of the greatest villians ever created.
              </td>
            </tr>
          </table>
        </div>
          
        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" onsubmit="return checkQuantity()">
          <div id="order_form">
            <span class="order_query">
              <input type="hidden" name="id" value="0-14-042363-X">
              <select name="option" id="option">
                <option value="soft">Soft-Cover</option>
                <option value="hard">Hard-Cover</option>
                <option value="audio">Audio-book</option>
                <option value="graphic">Graphic-Novel</option>
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
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
      <script src="script.js" type="text/javascript"></script>
      <script src="nav.js" type="text/javascript"></script>
  </body>
</html>
