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
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
      <form id="login_bar" class="hidden" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
          Name <input type="text" name="username">
          Password <input type="text" name="password">
          <input type="submit" name="login" value="login">
      </form> 
      </div> 
    </nav>

    <main>
      <a href="product.php">
        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Paradise%20Lost%20Thumb.jpg">
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

        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Mr%20Happy%20Thumb.jpg">
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


        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img class="thumb_pix" src="../../media/Caeser%20Thumb.jpg">
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
        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/I-Robot%20Thumb.jpg">
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
        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Left-Hand%20Thumb.jpg">
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
        <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Byron%20Thumb.jpg">
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
          <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Cat's%20Cradle%20Thumb.jpg">
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
          <div class="product_box">
          <table>
            <tr colspan="2" class="pic_box">
              <img src="../../media/Folly%20Thumb.jpg">
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
          <div class="product_box">
            <table>
              <tr colspan="2" class="pic_box">
                <img src="../../media/Catch-22%20Thumb.jpg">
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
    </footer>
    <script src="nav.js" type="text/javascript"></script>
  </body>
</html>
