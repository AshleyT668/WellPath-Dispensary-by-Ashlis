<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
  --black:#272D3B;
  --red:#ED176F;
  --coral:#F7817F;
  --gradient:linear-gradient(90deg, var(--red), var(--coral));
}
body {
            font-family: Arial, sans-serif;
            background-image: url("https://img.freepik.com/free-photo/black-woman-with-stethoscope_1157-15563.jpg?size=626&ext=jpg&ga=GA1.1.1576251838.1689066598&semt=sph");
            background-repeat: no-repeat;
            background-size: cover;
        }


*{
  font-family: 'Nunito', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  text-decoration: none;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

*::selection{
  background:var(--red);
  color:#fff;
}

html{
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
  scroll-padding-top: 4rem;
}

section{
  padding:3rem 9%;
}

.btn{
  display: inline-block;
  padding:.7rem 3rem;
  margin-top: 1rem;
  border-radius: 5rem;
  background:var(--gradient);
  color:#fff;
  cursor: pointer;
  font-size: 1.7rem;
}

.btn:hover{
  transform: scale(1.1);
}

.heading{
  text-align: center;
  color:transparent;
  background:var(--gradient);
  -webkit-background-clip: text;
  background-clip: text;
  font-size: 5rem;
  text-transform: uppercase;
  padding:1rem;
}

header{
  position: fixed;
  top:0; left: 0; right:0;
  background:var(--black);
  z-index: 1000;
  padding:2rem 9%;
  border-bottom: .1rem solid #fff3;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

header .logo{
  font-weight: bolder;
  color:#fff;
  font-size: 2.5rem;
}

header .navbar a{
  font-size: 2rem;
  margin-left: 2.5rem;
  color:#fff;
}

header .navbar a:hover{
  color:var(--red);
}
     .logo {
  color: solid #333;
  font-size: 24px;

}

.navbar a {
  color: #333;
  font-size: 16px;
  text-decoration: none;
  margin: 0 10px;
  padding: 10px;
  border-radius: 5px;
  
}
.navbar img {
  height: 30px;
  width: auto;
  margin-right: 10px;
}

.navbar a:hover {
  background-color: #333;
  color: #fff;
}

.home .content {
  text-align: center;
  margin-top: 100px;
}

.home h3 {
  font-size: 40px;
  color: #333;
}

.home p {
  font-size: 18px;
  color: black;
}

.home .btn {
  display: inline-block;
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  margin-top: 20px;
  border-radius: 5px;
  text-decoration: none;
}

.products .box-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin-top: 50px;
}

.products .box {
  text-align: center;
  padding: 20px;
  margin: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.products .box i {
  font-size: 40px;
  color: #333;
}

.products .box h3 {
  font-size: 24px;
  color: #333;
  margin-top: 20px;
}

.products .box p {
  font-size: 16px;
  color:black;
  margin-top: 10px;
}

.services .box-container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 20px;
  margin-top: 50px;
}

.services .box {
  text-align: center;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.services .box i {
  font-size: 40px;
  color: #333;
}

.services .box h3 {
  font-size: 24px;
  color: #333;
  margin-top: 20px;
}

.services .box p {
  font-size: 16px;
  color: black;
  margin-top: 10px;
}

.about .row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 50px;
}

.about .content {
  flex: 0 0 50%;
}

.about .image img {
  width: 80%;
  border-radius: 5px;
}

.about h3 {
  font-size: 24px;
  color: #333;
  margin-top: 20px;
}

.about p {
  font-size: 16px;
  color: black;
  margin-top: 10px;
}

.about .buttons {
  margin-top: 20px;
}

.about .buttons img {
  width: 150px;
  margin-right: 10px;
}


.Book Appointment form {
  display: flex;
  flex-direction: column;
  max-width: 400px;
  margin: 0 auto;
  margin-top: 50px;
}

.Book Appointment .inputBox {
  position: relative;
  margin-bottom: 20px;
}

.Book Appointment .inputBox input,
.Book Appointment .inputBox textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
  font-size: 16px;
}

.Book Appointment .inputBox label {
  position: absolute;
  top: -10px;
  left: 10px;
  font-size: 14px;
  color: #777;
  pointer-events: none;
}

.Book Appointment input[type="submit"] {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  margin-top: 20px;
}

.Book Appointment input[type="submit"]:hover {
  background-color: #555;
  body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
        }

        .error {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .footer{
  text-align: center;
  background:var(--black);
}

.footer .share a{
  height: 4.5rem;
  width:4.5rem;
  line-height: 4.5rem;
  background:#eee;
  color:var(--black);
  border-radius: 50%;
  font-size: 2rem;
  margin:.3rem;
}

.footer .share a:hover{
  color:#fff;
  background:var(--gradient);
}

.footer .credit{
  color:#eee;
  padding:2.5rem 1rem;
  font-weight: normal;
  font-size: 2rem;
}

.footer .credit span{
  color:var(--red);
}

    
}
@media (max-width:768px){

#menu-bar{
  display: block;
}

header .navbar{
  position: absolute;
  top:100%; left: 0; right:0;
  background:var(--black);
  border-top: .1rem  solid #fff3;
  padding:1rem 2rem;
  clip-path:polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .navbar.nav-toggle{
  clip-path:polygon(0 0, 100% 0, 100% 100%, 0 100%);
}

header .navbar a{
  display: block;
  margin:1.5rem 0;
  padding:1rem;
  background:var(--gradient);
  text-align: center;
  border-radius: .5rem;
}

header .navbar a:hover{
  color:var(--black);
}

.fa-times{
  transform: rotate(180deg);
}

.home .content h3{
  font-size: 4rem;
}

.home .content p{
  font-size: 1.5rem;
}

.about .row .content{
  text-align: center;
}

.about .row .content .buttons a{
  width:100%;
}

.about .row .content .buttons a:last-child{
  margin:1rem 0;
}

}

@media (max-width:400px){

html{
  font-size: 50%;
}

.heading{
  font-size: 3.5rem;
}

}


  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WellPath Pharmacy Website - Your Path To Wellness</title>
  -
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
  <header>
  
  <a href="#" class="logo">WellPath Pharmacy</a>

<div id="menu-bar" class="fas fa-bars"></div>

<nav class="navbar">
<div class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#servives">Our services</a>
        
       <a href="register.php">Login/Register</a>
        
    </div>
</nav>

  </header>

  <!-- home section starts  -->
  <section class="home" id="home">
  <div class="content">
        <h3>Welcome to Your Path to Wellness</h3>
        <p>Unlock Your Path to Wellness! Get your medications and healthcare services conveniently from your trusted local pharmacy.</p>
        
    </div>

    <div class="swiper-container image-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="https://img.freepik.com/free-photo/medicine-bottle-spilling-colorful-pills-depicting-addiction-risks-generative-ai_188544-12529.jpg?size=626&ext=jpg&ga=GA1.1.1576251838.1689066598&semt=ais_ai_generated" alt=""></div>
            <div class="swiper-slide"><img src="https://img.freepik.com/free-photo/woman-s-hand-pours-medicine-pills-out-bottle_1150-14190.jpg?w=900&t=st=1689071596~exp=1689072196~hmac=fff6c09d6735df61d5e635dc8046e96f7f249d57e0414b9f96982ff1e7ccf132" alt=""></div>
            <div class="swiper-slide"><img src="https://img.freepik.com/free-vector/medical-design-poster-with-original-medicinal-capsule-consisting-red-white-parts-different-medical-objects_1284-53615.jpg?size=626&ext=jpg&ga=GA1.2.1576251838.1689066598&semt=sph" alt=""></div>
            <div class="swiper-slide"><img src="https://img.freepik.com/free-photo/high-angle-pill-foils-plastic-containers_23-2148533456.jpg?size=626&ext=jpg&ga=GA1.2.1576251838.1689066598&semt=sph" alt=""></div>
            <div class="swiper-slide"><img src="https://img.freepik.com/free-vector/medical-equipments-medicine-blue-background_1308-43314.jpg?size=626&ext=jpg&ga=GA1.1.1576251838.1689066598&semt=sph" alt=""></div>
        </div>
    </div>
  </section>
  <!-- home section ends -->

  <!-- products section starts  -->
  <section class="products" id="products">
  <h1 class="heading">Our Products</h1>

<div class="box-container">
    <div class="box">
        <i class="fas fa-pills"></i>
        <h3>Medications</h3>
        <p>Discover a wide range of prescription and over-the-counter medications to meet your healthcare needs.</p>
    </div>  </section>
  <!-- products section ends -->

  <!-- services section starts  -->
  <section class="services" id="services">
  <h1 class="heading">Our Services</h1>

<div class="box-container">
    <div class="box">
        <i class="fas fa-prescription-bottle-alt"></i>
        <h3>Prescription Filling</h3>
        <p>We ensure accurate and timely prescription filling, helping you manage your medications effectively.</p>
    </div>
    <div class="box">
        <i class="fas fa-heartbeat"></i>
        <h3>Health Consultation</h3>
        <p>Our expert pharmacists provide personalized health consultations, offering advice and guidance.</p>
    </div>
    <div class="box">
        <i class="fas fa-briefcase-medical"></i>
        <h3>Labaratory Services</h3>
        <p>We offer lab services such as blood count, blood pressure checkup and other lab services. </p>
    </div>
    <div class="box">
        <i class="fas fa-capsules"></i>
        <h3>Medication Therapy Management</h3>
        <p>We offer comprehensive medication therapy management services to optimize your treatment outcomes.</p>
    </div>
</div>  </section>
  <!-- services section ends -->

  <!-- about section starts  -->
  <section class="about" id="about">
  <h1 class="heading">About Us</h1>

<div class="row">
    
    <div class="image">
        <img src="https://img.freepik.com/free-photo/medical-banner-with-doctor-wearing-goggles_23-2149611193.jpg?size=626&ext=jpg&ga=GA1.1.1576251838.1689066598&semt=sph" alt="Pharmacy Interior">
    </div>    

    <div class="content">
        <h3>Your Trusted Health Partner</h3>
       <p>Welcome to our pharmacy! We are dedicated to providing high-quality healthcare services to our community.</p>
        <p>At our pharmacy, we strive to offer a wide range of medications, health products, and services to meet the needs of our customers. Our team of experienced pharmacists is committed to ensuring the safe and effective use of medications.</p>
        <p>We believe in building strong relationships with our customers and providing personalized care. Whether you have questions about your medications, need assistance with chronic disease management, or are looking for wellness products, we are here to help.</p>
        <p>Visit us today and experience the difference of a pharmacy that puts your health and well-being first.</p>
        
    </div>

</div>  </section>
  <!-- about section ends -->

  

 
  <!-- footer section starts -->
  <section class="footer">
  <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

    <h1 class="credit">Created by <span>WellPath Pharmacy</span> | All rights reserved! </h1>
  </section>
  <!-- footer section ends -->

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>

  var swiper = new Swiper(".image-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
    },
    loop:true,
    autoplay: {
          delay: 2000,
          disableOnInteraction: false,
    },
});    

let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('nav-toggle');
});

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('nav-toggle');
}

</script>


</body>
</html>