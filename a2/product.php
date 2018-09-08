<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no"/>
    <title>Primsal LED High-Bay HBN Series</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link rel="icon" href="../../media/plug.png" type="image/gif" sizes="16x16">
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
    </header>

    <section id="highbay-2">
      <div class="container">
        <h1>Primsal LED High-Bay HBN Series</h1>
        <p class="para">Coming in at 100 Watts and 120 Watts. This LED high-by is ideal for any warehouse needs. Operating under the government scheme, you may be eligible for this high-bay's installation free of cost. Output: 16,000 lumens. The High Bay kit includes a mounting hook as standard. This is suitable for the vast majority of factory and warehouse applications.The 120W LED High Bay achieves similar usable light output to a conventional high bay light, while using over 70% less energy. For factories with a large amount of halogen high-bays, the upgrade to LED can result in savings of tens of thousands of dollars.</p>

      </div>

    </section>

  

  <body>
    <div id="highbay-1">
        <h1>Enquire About Primsal LED highbay Now</h1>

        
            <img src="../../media/titan-1.png">
    </div>

   
    
      
    <div id="mobileVersion">
    <section id="newsletter-hbpg">
        <form name="highbay-form" id="news-form-hbpg" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" onsubmit="return submitformnow()" method="post">
        	Preferred Output
       <select name="option">
          <option value="100W">100W</option>
          <option value="120W">120W</option>
          <option value="150W">150W Coming Soon!</option>
          </select>
          Product ID
          <select name="id">
          <option value="PHB1239078">PHB1239078</option>
          </select>
          <input type="email" placeholder="Enter Email..."> <br>
          <input type="text" placeholder="Enter you name"> <br>
          <input type="text" placeholder="Enter your Adress"> <br> <br>
				          Please Enter the Quantity of high-bays you have below<div class="value-button" id="decrease" onclick="decrement()" value="Decrease Value">-</div>
				  <input name="qty" type="the_number" id="the_number" value="0" />
				  <div class="value-button" id="increase" onclick="increment()" value="Increase Value">+</div>
          <button type="submit" class="highbay-buy-button" value="submit"> Enquire Now</button>
        </form>
        
      
      
    </section>
    </div>
<script type="text/javascript">


						function submitformnow(value) {
												var hbquantity = document.forms["highbay-form"]["qty"].value;
												if (hbquantity <= 0 ) {
													alert("Please Select a Valid Quantity for the Number of High-Bays");
        											return false;
												}
}


						





					    function increment() {
					  var value = parseInt(document.getElementById('the_number').value, 10);
					  value = isNaN(value) ? 0 : value;
					  value++;
					  document.getElementById('the_number').value = value;
					}

					function decrement() {
					  var value = parseInt(document.getElementById('the_number').value, 10);
					  value = isNaN(value) ? 0 : value;
					  value < 1 ? value = 1 : '';
					  value--;
					  document.getElementById('the_number').value = value;
					}
       </script>
      
    
</body>
    <footer id="highlights">
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Harpreet Singh Bhatia, s3719030.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
</html>
