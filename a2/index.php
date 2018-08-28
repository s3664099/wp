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
            <li><a class="full" href="cart.php">Cart</a></li>
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
      <article id='ib'>
          <h2>Picture Inserted Here</h2>
          <h3>Who We Are</h3>
          <p>Dusty Books is your go to place for any and all secondhand literature. We are a site that specialises in collecting, cataloguing, and offering up for sale the vast number of secondhand books that exist in attics, basements, and musty shops all over Australia. While we don't claim to have everything, it is our goal to be able to help you find that rare, out of print, or just obscure book, that you have been searching for.</p>
          <p>It is also our goal to help you find an option to be able to clear out all of those books that having been gathering dust in the boxes at the back of your garages, the ones that you have read once and have no intention of ever reading again. Or those university text-books that simply become obsolete after you have finished the course and passed the exam.</p>
          <h3>Our History</h3>
          <p>Professor Hubert J Farnsworth (no relation) just could not find that particular book, no matter how hard he search, until he was in Armidale in Perth for some completely unknown reason, when he found it hidden away, at the back of a local secondhand bookshop. It was then that he came upon his idea - a way of connecting customers with books, and books with customers.</p>
          <p>He realised that many people only ever read their books once, and the second-hand bookshops simply were not able take everybody's unwanted literary works. Thus he created Dusty Books, a way for bookshops to reach out to customers who might never come anywhere their stores, and for the avid readers to be able to find that long lost book that just never seems to be anywhere, at least anywhere they happn to do.</p>
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
