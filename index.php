<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  <link rel="stylesheet" type="text/css" href="css/simple-slideshow-styles.css"></link>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/icon.ico">
  <title>21 Baker Street - Home</title>
</head>
<body>
 	  <?php include 'header.php';?>
      <div style="background-color:#424242; text-align:center;">
        <div class="bss-slides bakery">
        <figure>
            <img src="img/slideshow/basil_parmesan.jpg"/>
            <figcaption>Basil Parmesan Loaves</figcaption> 
        </figure>
        <figure>
            <img src="img/slideshow/german_stollen.jpg" />
            <figcaption>German Stollen Bread</figcaption> 
        </figure>
         <figure>
            <img src="img/slideshow/stuffing_bread.jpg" />
            <figcaption>Stuffing Bread</figcaption> 
        </figure>
          <figure>
            <img src="img/slideshow/dogtreats.jpg" />
            <figcaption>Dog Treats</figcaption> 
        </figure>
        <figure>
            <img src="img/slideshow/pccmuffins.jpg" />
            <figcaption>Pumpkin Chocolate Chip Muffins</figcaption> 
        </figure>
        <figure>
            <img src="img/slideshow/coffee_cake.jpg" />
            <figcaption>Apple Brown Sugar Coffee Cake</figcaption> 
        </figure>
        <figure>
            <img src="img/slideshow/honey_rolls.jpg" />
            <figcaption>Honey Rolls</figcaption> 
        </figure>
        <figure>
            <img src="img/slideshow/marble_rye_epi.jpg" />
            <figcaption>Marble Rye Epi</figcaption> 
        </figure>
        <figure>
            <img src="img/slideshow/ciabatta.jpg" />
            <figcaption>Ciabatta</figcaption> 
        </figure>
        <figure>
            <img src="img/slideshow/scones.jpg"/>
            <figcaption>Mini Triple Chocolate Caramel Scones</figcaption> 
        </figure>
        </div> 
      </div>
      <div id='body'>
        <div id='welcome'>
          <h2 style="text-align:center;">Welcome to 21 Baker Street!</h2>
          <p>
           Our purpose and passion is to provide you and your family with the freshest and most flavorful baked goods
           and sandwiches you've ever tasted. We use only the best ingredients and make all of our delicious treats
           with love! You will love our delicious sandwiches on freshly baked breads or a delicious breakfast pastry with
           a hot cup of certified organic coffee! Stop by to see (and smell) what we have baking for you today.
           <br><br><b> OPEN AT 6:00 AM DAILY</b>  
          </p>
        </div>
        <div id='specialty'>
          <h2 style="text-align:center;">Our Specialties:</h2>
          <div style="float:left;">
            <ul><img src="img/bulletPoints.png" height="17px" width="17px">   Breads</ul>
            <ul><img src="img/bulletPoints.png" height="17px" width="17px">   Pastries</ul>
            <ul><img src="img/bulletPoints.png" height="17px" width="17px">   Muffins</ul>
            <ul><img src="img/bulletPoints.png" height="17px" width="17px">   Rolls</ul>
            <ul><img src="img/bulletPoints.png" height="17px" width="17px">   Bars</ul>
          </div>
          <div style="float:right;">
            <ul><img src="img/bulletPoints.png" height="17px" width="17px">   Salads</ul>
            <ul><img src="img/bulletPoints.png" height="17px" width="17px">   Sandwiches</ul>
            <ul><img src="img/bulletPoints.png" height="17px" width="17px">   Certified Organic Coffee</ul>
            <ul><img src="img/bulletPoints.png" height="17px" width="17px">   Catering</ul>
          </div>
        </div>
        <br style="clear:both;"/>
      </div>
      <?php include 'footer.php';?>
  <script src="js/better-simple-slideshow.js"></script>
  <script>
      var opts = {
          auto : {
              speed : 3200, 
              pauseOnHover : true
          },
          fullScreen : false, 
          swipe : true
      };
      makeBSS('.bakery', opts);
  </script>
</body> 
</html>
