<?php

include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $date=$_POST['date'];

  $sql="insert into `formop` (name, email, number, date)
  values('$name','$email','$number','$date')";

  $result=mysqli_query($con,$sql);
   if($result){
  $message[] ='Appointment made successfully!';
  header("Refresh:10;url=index.php");
   }else{
     die(mysqli_error($con));
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Dental Website</title>
</head>
<body>
  <!---------------------------- header section starts------------------------- -->
<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Dento<span>Smile</span><span class="t"><i class="fas fa-tooth"></i></span></a>

         <nav class="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#pricing">Pricing</a>
            <a href="#FAQ">FAQ</a>
            <a href="#reviews">Reviews</a>
            <a href="#doctors">Our Doctors</a>
            <a href="#contact">Contact</a>
         </nav>

         <a href="#contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>
      </div>
   </div>
</header>
<!-- ---------------------------hearder section ends------------------- -->

<!---------------------------- home section starts --------------------- -->

<section class="home" id="home">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="content">
        <h3>Enjoy the health of your teeth <br> and the beauty of your smile.</h3>
             <p>Are you experiencing dental problems?</p>
             <a href="#contact" class="link-btn">make appointment</a>
        </div>
      </div>
      <div class="col-md-2">
        <div class="first">
          <img src="" alt="" class="imqg">
          </div>
      </div>

      <div class="col-md-4">
      <div class="first">
          <img src="https://th.bing.com/th/id/R.61c3f41afea5738ae42e6bad39e7eeae?rik=oxYbpmGy8gh0tg&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2ftooth-transparent-background%2ftooth-transparent-background-13.png&ehk=mi%2fIvMmpXJ7V7k1s9EB6asTOmbKB4MfA5jw3C21EzNI%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" alt="" class="impg">
        </div>
      </div>
    </div>
  </div>
</section>
  <!---------------------------- home section ends --------------------- -->

  <!------------------ about section starts---------------- --->
  <section class="about" id="about">
  <div class="container">
    <div class="row align-items-center ">
      <div class="col-md-6">
        <div class="img">
          <img class="fimg" src="images/healthcare-clipart-nursing-teamwork-2.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="content">
          <p class="p1">About us</p>
          <h3 class="serving">Serving our community 
               with a smile</h3>
          <p class="ser">It’s a fact that many people say they hate going to the dentist. Maybe you’re in that camp too. But no matter how you feel about dental visits before you arrive, we’ll do everything we can to send you home with a Great White Smile. After all, it’s what we named our practice.</p>
          <a href="#contact" class="link-btn" >Make Appointment</a>
        </div>
      </div>
    </div>
  </div>
</set_socket_blocking>
  <!------------------- about section ends------------------ -->


  <!------------------- services section starts-------------- -->
  
    <section class="services" id="services">
    <div class="service">
    <h2 class="our">Our Services</h2>
    </div>
    <div class="s">
      <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <h3>Dental Check-up and Clean</h3>
            <p>Keep your teeth in tip top shape with check-up and cleans.</p>
            <img src="https://assets.website-files.com/6154ad1a1cfbe31b96a63eea/617611255324206028852c77_Sticker%20(4).svg" alt="">
          </div>
        </div>
        <div class="col-md-4">
        <div class="box">
            <h3>Tooth Fillings</h3>
            <p>Sit back and relax as we quickly fix your damaged teeth and get your smile back in top condition.</p>
            <img src="https://assets.website-files.com/6154ad1a1cfbe31b96a63eea/61761110b49722228f029c7d_Sticker%20(3).svg" alt="">
          </div>
        </div>
        <div class="col-md-4">
        <div class="box">
            <h3>Porcelain Veneers</h3>
            <p>Perfect your smile and feel proud of your pearly whites with hand-crafted porcelain veneers.</p>
            <img class="pic" src="https://assets.website-files.com/6154ad1a1cfbe31b96a63eea/617610dce7d6a3024a466a6e_Sticker%20(2).svg" alt="">
          </div>
        </div>
      </div>


      <div class="row">
      <div class="col-md-4">
        <div class="box">
        <h3>Children’s Dental</h3>
        <p>Children's dental care that leaves everyone smiling.</p>
        <img src="https://assets.website-files.com/6154ad1a1cfbe31b96a63eea/6176115a3d9c194e1d6cc680_Sticker%20(5).svg" alt="">
        </div>
      </div>
        <div class="col-md-4">
        <div class="box">
        <h3>Emergency Dental</h3>
        <p>Get the urgent care you need for your teeth now with an emergency dental appointment today.</p>
        <img class="pic" src="https://assets.website-files.com/6154ad1a1cfbe31b96a63eea/6176116d266d4a942315eeae_Sticker%20(6).svg" alt="">
        </div>
        </div>
        <div class="col-md-4">
        <div class="box">
        <h3>Dental Implants</h3>
        <p>Missing teeth doesn’t mean missing out on a perfect smile. Fill in the gaps and restore your smile with long-lasting, natural-looking dental implants.</p>
        <img class="pic" src="	https://assets.website-files.com/6154ad1a1cfbe31b96a63eea/617611808d8dbc2e65a372aa_Sticker%20(7).svg" alt="">
        </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!------------------- services section ends ------------------->


  <!-- ---------------- pricing section starts------------------->
<div class="pricing" id="pricing">
  <div class="price">
    <h2>We offer very reasonable Prices</h2>
    <p>Get a free consult with dental insurance or pay out of pocket from $35. Get started below.</p>
  </div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="pricing_card1">
        <div class="pricing_header">
          <h3>For specific issues</h3>
          <img src="https://www.toothpic.com/wp-content/uploads/2021/01/direct-care-icon.png" alt="">
        </div>
        <div class="pricing_body">
          <div class="pri"><sup>$</sup><span>35</span></div>
          <div class="benefits">
            <ul>
              <li>Free with Dental Insurance</li>
              <li>Best for a specific problem</li>
              <li>Quick & simple dental assessment</li>
              <li>Summary report within 6 hours</li>
              <li>Care advice & options</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="pricing_card2">
        <div class="pricing_header">
          <h3>Most popular
           For prevention</h3>
          <img src="	https://www.toothpic.com/wp-content/uploads/2021/01/complete-care-icon.png" alt="">
        </div>
        <div class="pricing_body">
        <div class="pri"><sup>$</sup><span>70</span></div>
          <div class="benefits">
            <ul>
              <li>Free with Dental Insurance</li>
              <li>Best for early detection & monitoring</li>
              <li>Full dental screening & assessment</li>
              <li>In-depth oral health report within 24 hours</li>
              <li>Treatment options, costs & discounts</li>
            </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
    <div class="pricing_card3">
        <div class="pricing_header">
          <h3>For emergencies</h3>
          <img src="https://www.toothpic.com/wp-content/uploads/2021/01/instant-care-icon-1.png" alt="">
        </div>
        <div class="pricing_body">
        <div class="pri"><sup>$</sup><span>50</span></div>
          <div class="benefits">
            <ul>
              <li>Free with Dental Insurance</li>
              <li>Best for pain and urgent care</li>
              <li>Treatment options & discounts</li>
              <li>Video consult within 15 minutes</li>
              <li>Immediate diagnosis & advice</li>
            </ul>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  <!-- ---------------- pricing section ends--------------------->


 <!------------------- FAQ section starts-------------------->
 <div class="FAQ" id="FAQ">
  <h2 class="title">Frequently asked questions</h2>
  <table>
    <tbody>
      <tr>
        <td><div class="con">
        <h4><i class="fas fa-question-circle"></i>How does a cosmetic dentist decide what procedures are best for You?</h4>
        </div></td>

        <td>
          <p class="par">Your cosmetic dentist will determine the procedures that would be the best for you. The dentist’s suggestions will be based on your desires and a thorough examination to determine the condition of your teeth and what problems, if any, may require dental treatment.</p>
        </td>
      </tr>

      <tr>
        <td><div class="con">
        <h4><i class="fas fa-question-circle"></i>What is dental flourosis?</h4>
        </div></td>

        <td>
          <p class="par">Dental fluorosis is a condition of the teeth that causes yellow-brown discoloration on the teeth. Sometimes the teeth can go through pitting and chipping.</p>
        </td>
      </tr>

      <tr>
        <td>
          <div class="con">
          <h4><i class="fas fa-question-circle"></i>How can I get my kids to brush their teeth?</h4>
          </div>
        </td>

        <td>
          <p class="par">Children learn from actions. As a parent, practically get your children to embrace brushing their teeth twice a day and floss once a day. You can make them love brushing by doing it together as a family. Don’t forget to make it fun and an experience they look forward to.</p>
        </td>
      </tr>

      <tr>
        <td>
          <div class="con">
          <h4><i class="fas fa-question-circle"></i>What type of brush should I buy?</h4>
          </div>
        </td>

        <td>
          <p class="par">Buy brush with soft bristles.medium and firm one can damage teeth and gums. Use a soft pressure for 2 minutes. 2 times daily. Brush should b changed every 3 months.</p>
        </td>
      </tr>

      <tr>
        <td>
          <div class="con"><h4><i class="fas fa-question-circle"></i>How can I get a beautiful healthy smile?</h4></div>
        </td>

        <td>
          <p class="par">Most dental problems don’t have any symptoms until they reach more advanced stages, so don’t wait for things to hurt! It is best to get a thorough dental exam, and diagnose and treat problems early. Waiting often makes problems more difficult and more expensive to fix.</p>
        </td>
      </tr>

      <tr>
        <td>
          <div class="con"><h4><i class="fas fa-question-circle"></i>When should I see a dentist for dental problems?</h4></div>
        </td>

        <td>
          <p class="par">Most dental problems don’t have any symptoms until they reach more advanced stages, so don’t wait for things to hurt! It is best to get a thorough dental exam, and diagnose and treat problems early. Waiting often makes problems more difficult and more expensive to fix.</p>
        </td>
      </tr>

      <tr>
        <td>
          <div class="con"><h4><i class="fas fa-question-circle"></i>How long does it take to get dental treatment after screening?</h4></div>
        </td>

        <td>
          <p class="par">After being screened, assignment to a dental/dental hygiene student or graduate student to commence treatment could be immediate or treatment may not begin for a while (up to several months). The waiting period depends on when you were screened, your dental needs, and student availability.</p>
        </td>
      </tr>

    </tbody>
  </table>
 </div>
 
  <!-- ---------------- FAQ section ends--------------------->


  <!------------------- reviews section starts------------------->

 <section class="reviews" id="reviews">
 <h1 class="heading"> Reviews </h1>
 <div class="container">
  
  <div class="row">
    <div class="col-md-4">
    <div class="box">
          <img src="https://th.bing.com/th/id/R.e26c0a00814c4244773d34808f9ba723?rik=qJdSRgD4EK4Fkw&pid=ImgRaw&r=0" alt="">
          <p>"Excellent service, I was really impressed with the speed and quality of my report from Dentist. They were able to answer my dental problems and give me advice about some other issues that i didn't know i had! I will definitely use it again." </p>
          <div class="stars">
          <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Basel Hamza</h3>
          <span>Satisfied Client</span>
       </div>
    </div>
    <div class="col-md-4">
    <div class="box">
          <img src="https://th.bing.com/th/id/OIP.eNJlATzTCz1R87trCUzJKgHaHa?pid=ImgDet&rs=1" alt="">
          <p>"Really impressed with this app, found it easy to use and the results were quick and detailed. Great way to keep track of your dental health between Dentist visits and for getting any particular problems checked out. Highly recommend!"</p>
          <div class="stars">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Sara Ahmed</h3>
          <span>Satisfied Client</span>
       </div>
    </div>
    <div class="col-md-4"><div class="box">
          <img src="https://th.bing.com/th/id/R.8877f74cef8755b8f4a4575c91d88116?rik=FNSlb1YyTcyWUQ&pid=ImgRaw&r=0" alt="">
          <p>"Fabolous. I started using dentosmile when i couldn't visit my Dentist during the pandemic. I always like  to do a check twice a year so i wanted to make sure I kept up with this despite not being able to visit the Dentist in person." </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
          <h3>Eileen Ezz</h3>
          <span>Satisfied Client</span>
       </div>
 </div>
  </div>
 </div>
 </section>
<!-------------------------- reviews section ends-------------------------->


<!-------------------------- doctors section start ------------------------>
      <div class="doctors" id="doctors">
        <h2 class="doct">Our Doctors</h2>
        <table>
          <tbody>
            <tr>
          <td>
            <div class="card" style="width: 18rem;">
              <img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/team/team-1.jpg" alt="">
              <div class="cbody">
                <h5 class="name">Dr. Gary Moore</h5>
                <p class="na">DDS, Colorado - Loma Linda University, 1986</p>
                <p class="m">Friday - Tuesday</p>
                <p class="n">9 pm - 3 pm</p>
              </div>
          </div>
          </td>

          <td>
            <div class="card" style="width: 18rem;">
              <img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/team/team-2.jpg" alt="">
              <div class="cbody">
                <h5 class="name">Dr. Eileen Buckle</h5>
                <p class="na">DDS, Maryland - University of Michigan, 2008</p>
                <p class="m">Wednesday - Thursday</p>
                <p class="n">1 pm - 5:30 pm</p>
              </div>
            </div>
          </td>

          <td>
            <div class="card" style="width: 18rem;">
              <img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/team/team-3.jpg" alt="">
              <div class="cbody">
                <h5 class="name" >Dr. Barry Taller</h5>
                <p class="na">DMD, New Jersey - Temple University, 2015</p>
                <p class="m">Monday - Friday</p>
                <p class="n">2 pm - 5:30 pm</p>
              </div>
            </div>
          </td>

          <td>
            <div class="card" style="width: 18rem;">
              <img src="https://bootstrapmade.com/demo/templates/Vesperr/assets/img/team/team-4.jpg" alt="">
              <div class="cbody">
                <h5 class="name">Dr. Loretta Matic</h5>
                <p class="na">DMD, Tennessee - Southern Illinois University, 1995</p>
                <p class="m">Monday - Tuesday</p>
                <p class="n">9 am - 2 pm</p>
              </div>
            </div>
          </td>

          </tr>
          </tbody>
        </table>
      </div>

<!-------------------------- doctors section end -------------------------->


 <!------------------------- contact section starts ------------------------>
 <section class="contact" id="contact">
    <h1 class="heading">Make Appointment</h1>
    
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

    <?php
       if(isset($message)){
         foreach($message as $message){
            echo '<p class="message">' .$message. '</p>';
         }
       }
    ?>
    
    <div class="form_box">
        <span class="name">Your Name :</span>    
        <input type="text" name="name" autocomplete="off" placeholder="Enter your name" class="box" required>
        <span>Your Email :</span>
        <input type="email" name="email" autocomplete="off" placeholder="Enter your email" class="box" required>
        <span>Your Number :</span>
        <input type="number" name="number" autocomplete="off" placeholder="Enter your number" class="box" required>
        <span>Appointment Date :</span>
        <input type="datetime-local" name="date" autocomplete="off" class="box">
        <input type="submit" value="make appointment" name="submit" class="link-btn" ></div>
    </form>
</section>
<!--------------------------- contact section ends-----------------------> 

  <!------------------- footer section starts----------------------- -->
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="im">
          <img class="ffimg" src="images/d00e98d12e92b8119c2756f67d3e4133.jpg" alt="">
          <p class="lp">Always here for you <i class="fas fa-hands-heart"></i></p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="sec">
          <i class="fas fa-phone-rotary"></i>
          <p>+944-435-654</p>
          <p>+234-222-567</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="sec">
          <i class="fas fa-map-marker-alt"></i>
          <p>Banha, Egypt-23456</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="sec">
        <i class="fas fa-clock"></i>
          <p>Monday – Friday</p>
          <p>9.00AM – 5.30PM</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="sec">
          <i class="fas fa-envelope-open-text"></i>
          <p>dento123@gmail.com</p>
          <p>dclinic78@gmail.com</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="sec1">
          <p>Find us on social networks</p>
          <ul>
            <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>
          </ul>
          
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -----------------footer section ends------------------- -->

  <!------------------- final section starts --------------------------->
  <center>
  <section class="final">
  <p>Copyright &copy; All rights reserved | This Website is made with <i class="fas fa-heart"></i> by our team</p>
  </section></center>
 <!------------------- final section ends --------------------------->
    
<script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>