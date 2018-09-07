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

    <section id="showcase">
      <div class="container">
        <h1>Your new sparkies, Now servicing all around victoria</h1>
        <p class="para">We, at Harry Electricals, beleive in a world that runs entirely on renewable energy. Join us on the journey to bringing green renewable energy to every household in Australia.Upgrading one of your household lights to LED, results in 1 tonne of CO2 being removed from the atmosphere. Together let's take advantage of renewable energy sources such as LED's and Solar energy to help prolong the life of our earth.</p>

        <img id="logo2" src="../../media/logo-name.png" alt="HarryElectricals">

      </div>

    </section>
    
    <div id="mobileVersion">
    <section id="newsletter">
      <div class= "container">
        <h1>Get In Touch With Us Now </h1>
        <form id="news-form" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref={{Enquiry}}" method="post">
          <input type="text" placeholder="Enter your Full Name"> <br>
          <input type="text" placeholder="Enter your Adress or Suburb"> <br>
          <input type="Email" placeholder="Email *optional"> <br>
          <input type="text" placeholder="What electrical work are you enquiring about"><br>
          <button type="submit" class="button1"> Get in touch Now</button>
        </form>
        
      </div>
      
    </section>
    </div>
</header>

  

  <body>
    <div id="WhatWeDo">
        <h1>What we do</h1>
        <p> Established in 2011, Harry Electricals has proudly helped many homes and      businesses meet their electrical needs. As an Australian-owned company, we take pride in helping people save on electricity costs while helping the environemnt.
        As an accredited company, we have the authority to install energy-saving products in commercial and residential properties in victoria and NSW.
            The VEET scheme works by the an accredited company like us installing products in residential and commercial properties, and collecting exisitng decomissioned product from the customer. The existing product and proof of address is then used to generate certificates and claim from the government. This scheme was started to encourage the use of renewable energy sources. Harry Electricals also specialises in fields other than renewable energy, such as smart-meter installation, and general electrical works in residential properties.

            </p>

            <img id="meter" src="../../media/meter.jpg">
            <h2 id="poll" >call us now: 0412345678</h2>
            <h3 id="poll" >Address:1 Grove Street, Caroline Springs 3023</h3>

        
      </div>
</body>
    <footer id="highlights">
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Harpreet Singh Bhatia, s3719030.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
</html>
