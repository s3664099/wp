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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Acme|Pacifico" rel="stylesheet">
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
        <li class="full"><a class="full" href="">Cart <i class="fas fa-shopping-cart"></i></a></li>
        <li class="full"><a class="full" href="mailto:s3664099@student.rmit.edu.au">Contact <i class="far fa-envelope"></i></a></li>
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

    <main>
      <article id='ib'>
          <div class="home_pic">
            <img src="../../media/BookShop.jpg" alt="Inside a bookshop">
            <p>One of our many bookshops</p>
          </div>
          <h3>Who We Are</h3>
          <p>Dusty Books is your go to place for any and all secondhand literature. We are a site that specialises in collecting, cataloguing, and offering up for sale the vast number of secondhand books that exist in attics, basements, and musty shops all over Australia. While we don't claim to have everything, it is our goal to be able to help you find that rare, out of print, or just obscure book, that you have been searching for.</p>
          <p>It is also our goal to help you find an option to be able to clear out all of those books that having been gathering dust in the boxes at the back of your garages, the ones that you have read once and have no intention of ever reading again. Or those university text-books that simply become obsolete after you have finished the course and passed the exam.</p>
      </article>
      <article>
          <div class="home_pic">
            <img src="../../media/Books.jpg" alt="Books piled on shelves">
            <p>We have many more books in our warehouses</p>
          </div>
          <h3>Our History</h3>
          <p>Professor Hubert J Farnsworth (no relation) just could not find that particular book, no matter how hard he search, until he was in Armidale in Perth for some completely unknown reason, when he found it hidden away, at the back of a local secondhand bookshop. It was then that he came upon his idea - a way of connecting customers with books, and books with customers.</p>
          <p>He realised that many people only ever read their books once, and the second-hand bookshops simply were not able take everybody's unwanted literary works. Thus he created Dusty Books, a way for bookshops to reach out to customers who might never come anywhere their stores, and for the avid readers to be able to find that long lost book that just never seems to be anywhere, at least anywhere they happn to do.</p>
      </article>
      <h2>What We Offer</h2>
      <article>
        <h3>Used Books</h3>
        <p>This is our bread and butter. Is there a book that you have been looking for, and don't want to pay full price, or wait for over a month for it to arrive from overseas (if they will even send it to you). Well, browse our catalogue of over a million books from many second-hand dealer Australia wide. We have millions of titles from every genre imaginable - from the complete works to Shakespeare to the complete works of Suzette Collions. From the romances of 19th Century England to the high school romances of, well, Mills and Boon. Even if you can't find it, by registering an interest means that our dealers all over the country will keep an eye out for that book you want, and you will be notified the instant it becomes available</p>
      </article>
      <article>
        <div class="home_pic">
          <img src="../../media/old_books.jpg" alt="Collection of old books">
          <p>Some of us prefer the old hardcovers</p>
        </div>
        <h3>Antique Books</h3>
        <p>If you are anything like us, then you love the musty smell, and the old worn pages, or a book that was printed in the 19th Century, or even earlier. Well, if you are an avid book collector, and see the value in a truly old book, then we also have many antique books for sale, not just from Australia but from around the world. Our antique book collection is truly enormous, whether you are looking for a copy of Shakespeare's First Folio, the Codex Sinaticus (sorry, the British Library refused to let us auction it off), or just one of those gorgeous reprints from the turn of the 20th Century. Browse our antique collection and you will be truly amazed.</p>
      </article>
      <article>
        <div class="home_pic">
          <img src="../../media/text_books.jpg" alt="A collection of text-books">
          <p>A way to make university cheaper</p>
        </div>
        <h3>Text Books</h3>
        <p>Do you think that text books are way overpriced. Do you dread that first day at university (or highschool) when you suddenly discover that you hip pocket (or that of your parents) has been hit with the cost of that book that your lecturer wrote and insists on using it over and over again. How about the case books that you need to complete your law degree? Well, we also have a vast collection of university text books sitting here gathering dust, waiting for you to purchase them at fire sale prices. In fact, we get so many every year that we have no choice but to send them to the recycling plant (because we are environmentally concious at Dusty Books). Have a look because who knows, you might be able to save yourselves $100.00 this semester (or you could just not by the books because as we all know, you never use them - unless you're studying law of course).</p>
      </article>
      <article>
        <div class="home_pic">
          <img src="../../media/audio_books.jpg" alt="Stack of audio tapes">
          <p>We can also supply other formats, if you insist</p>
          <!-- images used under creative commons license: "Tapes" by Pascal Terjan is licensed under Creative Commons Attribution Share-Alike 2.0. http://www.freestockphotos.biz/stockphoto/17864 -->
        </div>        
        <h3>Audio books</h3>
        <p>Do you hate reading books. Well, you happen to be missing out on a whole world of adventure and romance because seriously, not everything makes it onto HBO. Are you peeved that Scy-Fy decided to cut another great series. Well, if you find yourself in a position where you simply do not have time to read books, or find that your morning communite to work involves squeezing into a sardine can that makes the Tokyo Subway look comfortable, you try our range of audio books. We have even got some greats who have agreed to read books out aloud, including Eddie Murphy, Richard Gere, Danial Craig (who delightfully agreed to do the entire James Bond collection), and of course Patrick Stewart doing both the X-men and Star Trek. And speaking of Patrick Stewart, are you one who believes that plays should be watched and not read, well we have the entire works of Shakespeare, Bernard Shaw, and some upstart from New York read not just by one, but multiple personalities all taking a different character.</p>
      </article>
      <article>
        <div class="home_pic">
          <img src="../../media/Auction_Book.jpg" alt="Old Gutenberg Bible">
          <p>Unfortunately this is a museum piece</p>
        </div>
        <h3>Auctions</h3>
        <p>So, do you have a first edition copy of Frankstein lying around, or a complete collection of the Fighting Fantasy books (original covers of course) and aren't entirely sure how much they are worth. Are you one of those people that simply don't trust second-hand dealers to give you a fair and reasonable price. Or are you looking for that special book for somebody. Well, We also have auctions available, and you do not need to be a dealer to participate. Sign up for a free, no obligation account and you can sell that copy of the Magna Carta that mysteriously went missing from the Salisbury Cathedral because somebody forgot to lock the doors the other night.</p>        
      </article>
      <aside>
        <div class="payment">
          <h3><span id="payment">Payment Options</span><img src="../../media/payment.jpg" alt="visa, mastercard, american express, paypal"></h3>
          <!-- payment image source: http://www.infomerchant.net/creditcardprocessing/credit_card_images.html -->
        </div>
        <p>We accept currencies from all over the world, and have our own, patented, payments system that you can be assured is safe, secure, and no transactions from outer Mongolia will mysteriously appear on your monthly statement. We also accept paypal, bit coin, and even gold bullion, though we will draw the line at your first born son.</p>
      </aside>
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
