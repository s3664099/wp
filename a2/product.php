<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Dusty Books">
    <meta name="keywords" content="books, 2nd hand, literature, reading">
    <meta name="author" content="David A Sarkies">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
        <div class="logo_align">
            <img class="logo" src="../../media/Books_Left.png">
            <!--https://pixabay.com/en/books-read-literature-old-learn-2006000/-->
            <h1>Dusty Books</h1>
            <!-- http://www.stickpng.com/img/objects/book/collection-of-old-books -->
            <img class="logo" src="../../media/Books_Right.png"> 
        </div>
    </header>

    <nav>
        <ul class="full_list">
            <li><a class="full" href="index.php">Home</a></li>
            <li><a class="full" href="products.php">Browse</a></li>
            <li><a class="full" href="index.php">Search</a></li>
            <li><a class="full" href="login.php">Log-in</a></li>
            <li><a class="full" href="cart.php">Shopping Cart</a></li>
            <li><a class="full" href="mailto:dasarkies@gmail.com">Contact Us</a></li>
        </ul>
        <ul class="short_list">
            <li><a class="short" href="index.php">H</a></li>
            <li><a class="short" href="products.php">B</a></li>
            <li><a class="short" href="index.php">S</a></li>
            <li><a class="short" href="login.php">L</a></li>
            <li><a class="short" href="cart.php">S</a></li>
            <li><a class="short" href="mailto:dasarkies@gmail.com">E</a></li>
        </ul>
    </nav>

    <main>
      <article>
          <table>
              <tr>
                  <td colspan="2">
                      <img src="../../media/Paradise%20Lost.jpg">
                  </td>
              </tr>
              <tr>
                  <td>Title</td>
                  <td>Paradise Lost</td>
              </tr>
              <tr>
                  <td>Author</td>
                  <td>John Milton</td>
              </tr>
                  <td>Publisher</td>
                  <td>Penguin</td>
              <tr>
                  <td>Genre</td>
                  <td>Poetry</td>
              </tr>
              <tr>
                  <td>ISBN</td>
                  <td>0-14-042363-X</td>
              </tr>
              <tr>
                  <td rowspan="4">
                      Options
                  </td>
                  <td>Soft-Cover</td>
              </tr>
              <tr>
                  <td>Hard-Cover</td>
              </tr>
              <tr>
                  <td>Audio-Book read by Eddie Murphy</td>
              </tr>
              <tr>
                  <td>Graphic Novel</td>
              </tr>
              <tr>
                  <td colspan="2">
                      The quintessential work of English poetry, John Milton's Paradise Lost is a
                      work that transcends the ages. A story of the fall, and redemption of mankind,
                      Milton's Satan is said to be one of the greatest villians ever created.
                  </td>
              </tr>
          </table>
          <table>
              <tr>
                  <td colspan="2">Price</td>
              </tr>
              <tr>
                  <td>Soft-Cover</td>
                  <td>$9.99</td>
              </tr>
              <tr>
                  <td>Hard-Cover</td>
                  <td>$25.00</td>
              </tr>
              <tr>
                  <td>Audio-Book</td>
                  <td>$15.00</td>
              </tr>
              <tr>
                  <td>Graphic-Novel</td>
                  <td>$40.00</td>
              </tr>
          </table>
          
          <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
              <input type="hidden" name="id" value="0-14-042363-X">
              <select name="option">
                  <option value="soft" onClick="soft()">Soft-Cover</option>
                  <option value="hard" onClick="hard()">Hard-Cover</option>
                  <option value="audio" onClick="audio()">Audio-book</option>
                  <option value="graphic" onClick="graphic()">Graphic-Novel</option>
              </select>
              <button type="button" onClick="add()">+</button>
              <span id="num">0</span>
              <button type="button" onClick="subtract()">-</button>
              <input type="hidden" name="qty" id="qty" value="0">
              Total Price: $
              <span id="priceTotal">0</span>.00
              <input type="submit" value="Add to Cart">
          </form>
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script>David Alfred Sarkies s3664099.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
      <script src="script.js" type="text/javascript"></script>
  </body>
</html>
