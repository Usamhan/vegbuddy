<?php
session_start();

$user=$_SESSION['user_id'];

if($user==false)
{
  echo "<script>alert('First log in');location.href='index.php';</script>";
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VegBuddy</title>
    <link rel="stylesheet" href="css/home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <section class="header">
      <nav>
        <!-- <a href="index.html"><img src="img_veg/vegBuddy_logo.jpg" /></a> -->
       
        <div class="nav-links">
          <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">DETECT</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="">CONTACT</a></li>
          </ul>
        </div>
      </nav>

      <div class="text-box">
        <h1>Bienvenido a VegBuddy</h1>
        <p>Vegetables are parts of plants that are consumed by humans or other animals as food.Dont you want to know everything about your food ?   </p>

        <a href="" class="hero-btn">Visit us to know more</a>
      </div>




    </section>
    <!----- WhyVegBuddy ----->
<section class="WhyVegBuddy">
  <h1>Why VegBuddy ? </h1>
  <p>Why not VegBuddy ? If you Want to know everything about your veggies, you are at the right place.</p>

  <div class="row">
    <div class="WhyVegBuddy-col">
      <h3>Detection</h3>
      <p>Learning about vegetables has never been so easier .Our improved machine learning model allows you to classify vegetable from still pictures . Bad resoulution images ? Dont worry , we got you covered</p>
    </div>

    <div class="WhyVegBuddy-col">
      <h3>Blogs</h3>
      <p>Are you intersted in cooking or farming ? Or a fitness freak who wants to know everything about salads ? Well , we are well equipped for everyone with our blog section to quench your thirst for knowledge. </p>
    </div>

    <div class="WhyVegBuddy-col">
      <h3>Everything</h3>
      <p>It is a full fledged website dedicated to vegetable where you will find each and everything that  may fascinate you about vegetables . Welcome aboard amigo </p>
    </div>
  </div>
</section>

<!-- ----- vegTypes------->
<section class="vegTypes">
  <h1>Types of vegetables</h1>
  <p>At the very basic level , we can divide all the vegetables in three classes - leafy , root and fruit</p>

  <div class="row">
    <div class="vegTypes-col">
      <img src="img_veg/leafy_veg.jpg">
      <div class="layer"><h3>Leafy Vegetables</h3></div>
    </div>
    <div class="vegTypes-col">
      <img src="img_veg/root_veg.jpg">
      <div class="layer"><h3>Root Vegetables</h3></div>
    </div>
    <div class="vegTypes-col">
      <img src="img_veg/fruit_veg.jpg">
      <div class="layer"><h3>Fruit Vegetables</h3></div>
    </div>
  </div>
</section>

   <!-- FACILITIES -->


<!-- <section class="facilities">
  <h1>Our facilities</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  <div class="row">
    <div class="facilities-col">
      <img src="img/library.png">
      <h3>World class library</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit enim reiciendis earum maxime quos magnam praesentium, nam incidunt ut assumenda totam fuga blanditiis quis temporibus eaque cumque et tenetur ratione!</p>
    </div>

    <div class="facilities-col">
      <img src="img/basketball.png">
      <h3>Largest play ground</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit enim reiciendis earum maxime quos magnam praesentium, nam incidunt ut assumenda totam fuga blanditiis quis temporibus eaque cumque et tenetur ratione!</p>
    </div>

    <div class="facilities-col">
      <img src="img/cafeteria.png">
      <h3>Tasty and healthy food</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit enim reiciendis earum maxime quos magnam praesentium, nam incidunt ut assumenda totam fuga blanditiis quis temporibus eaque cumque et tenetur ratione!</p>
    </div>

  </div>

</section>

<section class="testimonials">
  <h1>What our students say</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

  <div class="row">
    <div class="testimonials-col">
      <img src="img/user1.jpg">
     <div>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit enim reiciendis earum maxime quos magnam praesentium, nam incidunt ut assumenda totam fuga blanditiis quis temporibus eaque cumque et tenetur ratione!</p><br>
      <h3>Monki 1</h3>
    </div>
    </div>

    <div class="testimonials-col">
      <img src="img/user2.jpg">
    <div>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit enim reiciendis earum maxime quos magnam praesentium, nam incidunt ut assumenda totam fuga blanditiis quis temporibus eaque cumque et tenetur ratione!</p><br>
      <h3>Monki 2</h3>
    </div>
    </div>

  </div>

</section>
 -->



  </body>
</html>
