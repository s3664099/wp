<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Dusty Books">
    <meta name="keywords" content="books, 2nd hand, literature, reading">
    <meta name="author" content="David A Sarkies">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
    
    <!-- https//www.w3schools.com/icons/fontawesome_icons_intro.asp -->
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <script src='../wireframe.js'></script>
    <script>document.getElementById("wireframecss").disabled=true;</script>
  </head>

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
        <li class="short"><a class="short" href="login.php"><i class="fas fa-user"></i></a></li>
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

    <!-- /*Paradise Lost Picture: By John Milton - Houghton Library, Public Domain, https://commons.wikimedia.org/w/index.php?curid=34944104 -->
    <main>
      <a class="product_link" href="product.php">
        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Paradise_Lost_Thumb.jpg">
            </tr>
            <tr>
              <th>Title</th>
              <td>Paradise Lost</td>
            </tr>
            <tr>
              <th>Author</th>
              <td>John Milton</td>
            </tr>
            <tr>
              <th>Genre</th>
              <td>Poetry</td>
            </tr>
          </table>
        </div>
      </a>

      <!-- Mr Happy Picture: Mr Happy by Roger Hargreaves (c) 1971 Thurman Publishing -->
        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Mr_Happy_Thumb.jpg">
            </tr>
            <tr>
              <th>Title</th>
              <td>Mr Happy</td>
            </tr>
            <tr>
              <th>Author</th>
              <td>Roger Hargraves</td>
            </tr>
            <tr>
              <th>Genre</th>
              <td>Childrens</td>
            </tr>
          </table>
        </div>

        <!--The Civil War Cover: (c) 1967 Penguin Publishing-->
        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img class="thumb_pix" src="../../media/Caeser_Thumb.jpg">
            </tr>
            <tr>
              <th>Title</th>
              <td>Civil War</td>
            </tr>
            <tr>
              <th>Author</th>
              <td>Julius Caeser</td>
            </tr>
            <tr>
              <th>Genre</th>
              <td>History</td>
            </tr>
          </table>
        </div>

        <!-- I-Robot Cover: (c) 1993 HarpersCollins Publishers -->
        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/I-Robot_Thumb.jpg">
            </tr>
            <tr>
              <th>Title</th>
              <td>I, Robot</td>
            </tr>
            <tr>
              <th>Author</th>
              <td>Isaac Asimov</td>
            </tr>
            <tr>
              <th>Genre</th>
              <td>Sci-Fi</td>
            </tr>
          </table>
        </div>

        <!-- Left Hand of Darkness Picture: (c) 2017 McPhersons Printing Group -->
        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Left-Hand_Thumb.jpg">
            </tr>
            <tr>
              <th>Title</th>
              <td>The Left Hand of Darkness</td>
            </tr>
            <tr>
              <th>Author</th>
              <td>Ursula Le Guin</td>
            </tr>
            <tr>
              <th>Genre</th>
              <td>Sci-Fi</td>
            </tr>
          </table>
        </div>

          <!--Poetical Works of Lord Byron Cover: Ward, Lock & Co, London -->        
        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Byron_Thumb.jpg">
            </tr>
            <tr>
              <th>Title</th>
              <td>Poetical Works of Lord Byron</td>
            </tr>
            <tr>
              <th>Author</th>
              <td>Lord Byron</td>
            </tr>
            <tr>
              <th>Genre</th>
              <td>Poetry</td>
            </tr>
          </table>
          </div>

          <!-- Cat's Cradle Cover: (c) 2006 The Dial Press -->
          <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Cat's_Cradle_Thumb.jpg">
            </tr>
            <tr>
              <th>Title</th>
              <td>Cat's Cradle</td>
            </tr>
            <tr>
              <th>Author</th>
              <td>Kurt Vonnegut</td>
            </tr>
            <tr>
              <th>Genre</th>
              <td>Science-Fiction</td>
            </tr>
          </table>
          </div>

        <!-- Praise of Folly Picture: (c) 2013 nathanburtondesign.com -->          
          <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Folly_Thumb.jpg">
            </tr>
            <tr>
              <th>Title</th>
              <td>Praise of Folly</td>
            </tr>
            <tr>
              <th>Author</th>
              <td>Erasmus</td>
            </tr>
            <tr>
              <th>Genre</th>
              <td>Satire</td>
            </tr>
          </table>
          </div>

        <!-- Catch 22 Picture: (c) 1981 Corgi Books -->
          <div class="product_box">
            <table>
              <tr colspan="2" class="pic_box">
                <img src="../../media/Catch-22_Thumb.jpg">
              </tr>
              <tr>
                <th>Title</th>
                <td>Catch 22</td>
              </tr>
              <tr>
                <th>Author</th>
                <td>Joseph Heller</td>
              </tr>
              <tr>
                <th>Genre</th>
                <td>Comedy</td>
              </tr>
          </table>
          </div>
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> David Alfred Sarkies s3664099.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
    <script src="nav.js" type="text/javascript"></script>
  </body>
</html>
