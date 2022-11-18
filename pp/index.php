<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<html>
<html lang="en">
<head>
   
   <title>Amaya Ambagaspitiya</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      
      
      <a href="https://www.instagram.com/amaya_ambagaspitiya/?hl=en" target="_blank" class="fab fa-instagram"></a>
      <a href="https://lk.linkedin.com/in/amaya-ambagaspitiya-b58367215" target="_blank" class="fab fa-linkedin"></a>
      <a href="#" target="_blank" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/img1.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am amaya ambagaspitiya</h3>
      <span data-aos="fade-up">web designer & content writer</span>
      <p data-aos="fade-up"> I will ensure that the service I provide will help your business or any venture stand out from the rest. So let's talk about your unique concept and make it a reality.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Im a 2nd year undergraduate in faculty of science , university of Colombo. Also I'm pursuing CIMA. I'm interested in mathematics, statistics, computer science and business management fields. Also, I'm a Data Science Enthusiast who's ready to explore and learn about new tech.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Amaya Ambagaspitiya</h3>
         <h3 data-aos="zoom-in"> <span>email : </span> amayaambagaspitiya99@.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> colombo,sri lanka</h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +94717577925</h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 23 years old</h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 1+ years </h3>
      </div>

      <a href="images/amaya.pdf" target="_blank" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2021-present )</span>
               <h3>Mathematics & statistics</h3>
               <p>university of Colombo</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021-present</span>
               <h3>CIMA</h3>
               <p>Certificate level-Complete
                  management  level- reading
               </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020-2021)</span>
               <h3>Diploma in Information Technology</h3>
               <p>Esoft Metro Campus</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2021-present)</span>
               <h3>web designer</h3>
               <p>freelance</p>
      
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020-present)</span>
               <h3>content writer</h3>
               <p>freelance</p>

      
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020-2021 )</span>
               <h3>Intern (IT department)</h3>
               <p>Sampath Bank PLC</p>
            </div>

            <

            

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web design</h3>
         <p>Modern and mobile-ready website that will help you reach all of your marketing.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>content writing</h3>
         <p>writes informative and engaging articles to help brands showcase their products</p>
      </div>

   

      

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <a href="https://www.facebook.com/whitergent/" target="_blank">
         <img src="images/img2.jpg"  alt="">
         </a>

         <h3>content writing</h3>
         <span>( 2021-present )</span>
      </div>

      <div class="box" data-aos="zoom-in">
      <a href="https://www.instagram.com/pizza.d.zoysa/?hl=en" target="_blank">
         <img src="images/img3.jpg"  alt="">
         </a>
         <h3>content writing</h3>
         <span>( 2020 - present )</span>
      </div>

      <div class="box" data-aos="zoom-in">
      <a href="https://www.instagram.com/mystique.vogue/?hl=en" target="_blank">
         <img src="images/img4.jpg"  alt="">
         </a>
         <h3>content writing</h3>
         <span>( 2020 - 2021 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
      <a href="https://www.pineridgemedical.ca/" target="_blank">
         <img src="images/img5.jpg"  alt="">
         </a>
         <h3>web development</h3>
         <span>( 2021 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
      <a href="https://www.hoteltreeoflife.com/" target="_blank">
         <img src="images/img6.jpg"  alt="">
         </a>
         <h3>web development</h3>
         <span>( 2021 - 2022 )</span>
      </div>

      
   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+947577925</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>amayaambagaspitiya99.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>colombo-sri lanka</p>
      </div>

   </div>

</section>














<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>