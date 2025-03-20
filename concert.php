<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title><Nav>Concert Management</Nav></title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="concert.css">
      <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
   </head>
   <body>
    
    <!-------------------------   Fav Icon Starts   ------------------------->

    <link rel="shortcut icon" href="recognition_logo.jpg">

    <!-------------------------   Fav Icon Ends   ------------------------->

    <!-------------------------   Navigation Bar Starts   ------------------------->

    <h3 id="home"></h3>          <!--Linking Navigation-->

    <div class ="nav">

        <div class="logo-image">
            <img src="Images/recognition_logo.jpg" alt="">
          </div>

         <div class="logo">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<Span Style = "color:#7d6e3e">Recognition</Span></p>

         </div>

         <ul>
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="concert.php">Concerts</a></li>
            <li><a href="index.php#blog">Blog</a></li>
            <li><a href="concert.php#contact">Contact&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <!--button type = "button">Login / Sign up</button-->
         </ul>
         
     </div>

     <br>
     <br>
     <br>
     <br>
     <br>
     



      <!-------------------------   Navigation Bar Ends   ------------------------->

      <!-----------------------   Concert Booking  Starts  -------------------------------->

      <h3 id="concert"></h3>          <!--Linking Navigation-->

<section class="concerts" id="conscerts1">

      <div class="box-container">

        <div class="box">
            <img src="Images/nh7_bangalore.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;NH7, Bangalore</h3>
                <p>Timings 10:00 p.m - 2:00 a.m </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"><span>₹5,000.0</span></div>
                <a href="concert.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <img src="Images/road to ultra.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Road to Ultra, Mumbai</h3>
                <p>Timings 9:00 p.m - 11:00 p.m </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"><span>₹5,000.00</span> </div>
                <a href="concert.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <img src="Images/electric-daisy_delhi.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Electric Daisy Carnival, Delhi</h3>
                <p>Timings 9:00 p.m - 1:00 a.m </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"><span>₹7,000.00</span> </div>
                <a href="concert.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <img src="Images/mood_indigo.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Mood Indigo, Mumbai</h3>
                <p>Timings 7:00 p.m - 10:00 p.m </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"><span>₹3,000.00</span> </div>
                <a href="concert.php" class="btn">Book Now</a>
            </div>
        </div>
      </div>
</section>

        <!-----------------------    Concert Booking Ends ------------------------------->

        <!-----------------------    Concert Form Starts ------------------------------->

       <form action="connect_concert.php" action="email.php" method="POST">

       <br>
       <br>

       <br>
      <div class ="concert_booking">
        <h1><center>Concert Booking</center></h1>
        <br>
        <br> 
      </div>

       <center><input type="text" name='name' id="name" placeholder="Full Name.." required></center><br>

       <center><input type="text" name='age' id="age" placeholder="Age.." required></center><br>

       <div class="gender">
        <center><select name="gender" id="gender" placeholder="Gender.." required></center>
            <option value>Select Gender
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        <br>
        <br>
       <center><input type="text" name='phone' id="phone" placeholder="Mobile number.." required></center><br>

       <center><input type="email" name='email' id="email"placeholder="Email ID.." required></center><br>

       <div class="concert">
        <center><select name="concert" id="concert" placeholder="Concerts..." required></center>
            <option>NH7, Bangalore - ₹5,000.0</option>
            <option>Road to Ultra, Mumbai - ₹5,000.0</option>
            <option>Electric Daisy Carnival, Delhi - ₹7,000.0</option>
            <option>Mood Indigo, Mumbai - ₹3,000.0</option>
        </select>
        <br>
        <br>

       <center><input type="submit" value="Submit"></center>

       <br>
       <br>
       <br>

      </form>


    <!-----------------------    Concert Form Ends ------------------------------->

    <!-------------------------   Footer Starts   ------------------------->

      <h3 id="contact"></h3>          <!--Linking Navigation-->

<footer class="footer">
  <div class="container">
      <div class="row">
          <div class="footer-col">
              <h4>Our Address</h4>
              <ul>
                  <li><a href="location.php"><address>Tower-B, 13th floor,<br>
                      84, Church Street,<br>
                      M.G Road, Bangalore,<br>
                      Karnataka-560001<br>
                      </address></a></li>
              </ul>
          </div>

          <div class="footer-col">
              <h4>Reservation</h4>
              <ul>
                  <li><a href="location.php">+91 8660950810</a></li>
                  <li><a href="location.php">recognition.concert@gmail.com</a></li>
              </ul>
          </div>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="footer-col">
              <h4>Navigation</h4>
              <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="index.php#about">About</a></li>
                  <li><a href="concert.php">Concerts</a></li>
                  <li><a href="index.php#blog">Blog</a></li>
              </ul>
          </div> 

          <div class="footer-col">
              <h4>Founders</h4>
              <ul>
                  <li><a href="medha.php">Medha Pandit 20191CSE0325</a></li>
                  <li><a href="dhanush.php">Soma Sai Dhanush 20191CSE0781</a></li>
                  <li><a href="megha.php">Megha H.K <br>20191CSE0326</a></li>
              </ul>
          </div> 

          <div class="footer-col">
              <h4>Follow Us</h4>
              <div class="social_media">
              <ul>
                  <li><a href="https://www.facebook.com/profile.php?id=100089062003106"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.youtube.com/channel/UCLuC0lBbmiCrQq40yZdrJGA"><i class="fab fa-youtube"></i></a></li>
                  <li><a href="https://www.instagram.com/recognition.concerts/"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/recognition-concert-969376260/"><i class="fab fa-linkedin"></i></a></li>
              </ul>
              </div>
          </div>
      </div>
  </div>
</footer>

<!-------------------------   Footer Ends   ------------------------->

</body>
</html>