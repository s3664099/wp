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
      <article id='About'>
          <table>
              <tr colspan="2">
                  Thumbnail Picture
              </tr>
              <tr>
                  <td>
                      title
                  </td>
                  <td>
                      Paradise Lost
                  </td>
              </tr>
              <tr>
                  <td>
                      Author
                  </td>
                  <td>
                      John Milton
                  </td>
              </tr>
              <tr>
                  <td>
                      Genre
                  </td>
                  <td>
                      Poetry
                  </td>
              </tr>
          </table>
          
          <table>
              <tr colspan="2">
                  Thumbnail Picture
              </tr>
              <tr>
                  <td>
                      title
                  </td>
                  <td>
                      Mr Happy
                  </td>
              </tr>
              <tr>
                  <td>
                      Author
                  </td>
                  <td>
                      Roger Hargraves
                  </td>
              </tr>
              <tr>
                  <td>
                      Genre
                  </td>
                  <td>
                      Childrens
                  </td>
              </tr>
          </table>
          <table>
              <tr colspan="2">
                  Thumbnail Picture
              </tr>
              <tr>
                  <td>
                      title
                  </td>
                  <td>
                      Civil War
                  </td>
              </tr>
              <tr>
                  <td>
                      Author
                  </td>
                  <td>
                      Julius Caeser
                  </td>
              </tr>
              <tr>
                  <td>
                      Genre
                  </td>
                  <td>
                      History
                  </td>
              </tr>
          </table>
          <table>
              <tr colspan="2">
                  Thumbnail Picture
              </tr>
              <tr>
                  <td>
                      title
                  </td>
                  <td>
                      I, Robot
                  </td>
              </tr>
              <tr>
                  <td>
                      Author
                  </td>
                  <td>
                      Isaac Asimov
                  </td>
              </tr>
              <tr>
                  <td>
                      Genre
                  </td>
                  <td>
                      Sci-Fi
                  </td>
              </tr>
          </table>
          <table>
              <tr colspan="2">
                  Thumbnail Picture
              </tr>
              <tr>
                  <td>
                      title
                  </td>
                  <td>
                      The Left Hand of Darkness
                  </td>
              </tr>
              <tr>
                  <td>
                      Author
                  </td>
                  <td>
                      Ursula Le Guin
                  </td>
              </tr>
              <tr>
                  <td>
                      Genre
                  </td>
                  <td>
                      Sci-Fi
                  </td>
              </tr>
          </table>
          <table>
              <tr colspan="2">
                  Thumbnail Picture
              </tr>
              <tr>
                  <td>
                      title
                  </td>
                  <td>
                      Collected Works of Lord Byron
                  </td>
              </tr>
              <tr>
                  <td>
                      Author
                  </td>
                  <td>
                      Lord Byron
                  </td>
              </tr>
              <tr>
                  <td>
                      Genre
                  </td>
                  <td>
                      Poetry
                  </td>
              </tr>
          </table>
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script>David Alfred Sarkies s3664099.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
