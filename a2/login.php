<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no"/>
    <title>Harry Electricals</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link rel="stylesheet" type ="text/css" href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho">
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
    </head>


<header>
<div class="top-nav">
    <a href="index.php" class="logo">
      <img src="../../media/logo-name.png" alt="HarryElectricals">
    </a>
    
<nav class="toy">
      <ul>

    <li><a href="login.php" >Login</a></li>
    <li><a href="about.php" >About Us</a></li>
    <li><a href="products.php" >Products</a></li>
    <li><a href="index.php" >Home</a></li>
    </ul> 
    </nav> 
    </div>
<br><br><br><br><br><br><br><br><br>

   
    <section id="login-page">
      <div class= "container">
        <h1>Login</h1>
        <form id="login-form" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
          <input type="email" placeholder="Enter Email..."> <br>
          <input type="password" placeholder="Enter your password"><br>
          <button type="submit" class="button5"> Login</button>
        </form>
        
      </div>
      
    </section>
    
</header>
    <footer id="highlights">
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Harpreet Singh Bhatia, s3719030.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
</html>
