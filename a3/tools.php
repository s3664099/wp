<?php

	//fix the local storage so that it remembers the search bar and the login bar
	//fix up the login bar to send to the right page

	function topModule() {
		$output = <<< "END_OF_TEXT"
				<!DOCTYPE html>
				<html lang='en'>
				  <head>
				    <meta charset="utf-8">
				    <meta name="description" content="Dusty Books">
				    <meta name="keywords" content="books, 2nd hand, literature, reading">
				    <meta name="author" content="David A Sarkies">
				    <meta name="viewport" content="width=device-width, initial-scale=1.0">
				    <title>Assignment 3</title>
    
				    <!-- Keep wireframe.css for debugging, add your css to style.css -->
				    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
				    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
				    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
				    <link href="https://fonts.googleapis.com/css?family=Acme|Pacifico" rel="stylesheet">
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
				        <li class="full"><a class="full" id="login_button">Log-in <i class="fas fa-user"></i></a></li>
				        <li class="full"><a class="full" href="cart.php">Cart <i class="fas fa-shopping-cart"></i></a></li>
				        <li class="full"><a class="full" href="mailto:s3664099@student.rmit.edu.au">Contact <i class="far fa-envelope"></i></a></li>
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
				         	 <span>Name <input type="email" name="username"></span>
				         	 <span>Password <input type="password" name="password"></span>
				         	 <span><input type="submit" name="login" value="login"></span>
				   		  </form> 
				      </div> 
				    </nav>
END_OF_TEXT;
	echo $output;

	function bottomModule() {
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		$output = <<< "END_OF_TEXT"
		    	<footer>
      				<div>&copy;<script>
				        document.write(new Date().getFullYear());
			        </script> David Alfred Sarkies s3664099.</div>
			        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
			        <div><a href="products.txt">Spreadsheet link</a></div>
			        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
			    </footer>
			    <script src="nav.js" type="text/javascript"></script>
			  </body>
			</html>

END_OF_TEXT;
	echo $output;

	}
	}


?>