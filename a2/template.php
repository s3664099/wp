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
        <div>
            <h1>Dusty Books</h1> 
        </div>
    </header>

    <nav>
        <div>
            <span class="left">HM LG</span>
            <span class="center">
            <form class="search" action="" method="post" target="_blank">
                <input name="search" style="text" placeholder="Search">
                <select name="search_type">
                    <option value="Title">Title</option>
                    <option value="Author">Author</option>
                    <option value="ISBN">ISBN</option>
                    <option value="Genre">Genre</option>
                </select>
                <input type="submit" name="search" value="S">
            </form>
            </span>    
            <span class="right">SC</span>
        </div>
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
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
