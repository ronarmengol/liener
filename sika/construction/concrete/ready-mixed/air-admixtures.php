<?php

declare(strict_types=1);

session_start();
// session_destroy();


$page_title = 'Liener investments - sika - construction - concrete - ready mixed site batched concrete - sika water reducers / plasticizers';


$currentUrl = $_SERVER['REQUEST_URI'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- SEO -->
    <title><?php echo htmlspecialchars($page_title); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Satisfy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    
    <!-- <link rel="stylesheet" href="layout/izmir.css"> -->
    
    <link rel="shortcut icon" href="../../../../favicon.ico" type="image/x-icon">



    <link rel="stylesheet" href="../../../../layout/styles.css?v=1.11">

</head>
<body>
    



<!-- <div id="loading-overlay">
  <div id="loading-spinner"></div>
</div> -->

<!-- <div id="page-content"> -->
<div>

  <header class="social">
    <div class="container">
      <div class="logo">
        <img src="../../../../images/logo.webp" alt="company logo" loading="lazy">
        <h3>Liener investments</h3>
      </div>


      <div class="icons">
        <a href="#"><img src="../../../../images/icon_facebook.png" alt="facebook url"></a>
        <a href="#"><img src="../../../../images/icon_instagram.webp" alt="facebook url"></a>
      </div>
    </div>

  </header>


  <nav class="nav__main">
    <ul>
      <li>
        <a href="../../../../index.php">Home</a>
      </li>
      <li>
        <a href="../../../../sika.php">Sika</a>
      </li>
      <li>
        <a href="../../../../verni.php">Verni</a>
      </li>
      <li>
        <a href="../../../../newsletter.php">Newsletter</a>
      </li>
    </ul>
  </nav>

  <main>
    <section class="sika__hero">
      <img srcset="../../../../images/index_hero_const1-1280.webp 1280w, ../../../../images/index_hero_const1-640.webp 800w"
                src="../../../../images/index_hero_const1-640.webp"
                alt="construction planning" >
    </section>
    
    <section class="sika__title">
      <h1>SIKA</h1>
    </section>

    <section class="sika__content">
      <a href="../ready-mixed-site-batched-concrete.php">Ready mixed batched concrete</a>
      <div class="title">
        <h2>AIR ENTRAINING ADMIXTURES</h2>
      </div>

      

      <div class="cards">
      <a class="card" href="#">
          <div class="description">
            <h4>SikaControl&#174-140</h4>
            <p>Air entraining concrete admixture</p>
          </div>
        </a>
       
      </div>

    </section>


    

  </main>

  

</div> 

<footer class="footer">

  <div data-aos="fade-right" data-aos-duration="2000" class="top"></div>
  <h2>LIENER INVESTMENTS</h2>
  <div data-aos="fade-left" data-aos-duration="2000" class="bottom"></div>

  <div class="main">

    <div class="logo">
      <img data-aos="fade-down" data-aos-duration="3000" src="../../../../images/logo_white_bg.webp" alt="company logo" loading="lazy">
      <h3 data-aos="fade-up" data-aos-offset="0" data-aos-duration="2000">"Building tomorrow, Today."</h3>
    </div>

    <div class="contacts">
      <div>
        <h3 data-aos="zoom-in" data-aos-duration="2000">Address</h3>
        <p>Plot 397a</p>
        <p>Along Kafue Road</p>
        <p>Makeni, Lusaka</p>
        <p>Zambia</p>
      </div>
      
      
    <div class="web">
        <div data-aos-offset="0" data-aos="slide-right" data-aos-delay="2000">
          <a href="#">lienerzambia.com</a>
        </div>
      
      </div>
    </div>
    
    <div class="opening">
      <h3 data-aos="zoom-in" data-aos-duration="2000">Opening times</h3>
      <p data-aos="slide-right"><span>MON</span>: 08:00 - 17:00 hrs</p>
      <p data-aos-offset="0" data-aos="slide-right" data-aos-delay="300"><span>TUE</span>: 08:00 - 17:00 hrs</p>
      <p data-aos-offset="0" data-aos="slide-right" data-aos-delay="600"><span>WED</span>: 08:00 - 17:00 hrs</p>
      <p data-aos-offset="0" data-aos="slide-right" data-aos-delay="900"><span>THU</span>: 08:00 - 17:00 hrs</p>
      <p data-aos-offset="0" data-aos="slide-right" data-aos-delay="1200"><span>FRI</span>: 08:00 - 17:00 hrs</p>
      <p data-aos-offset="0" data-aos="slide-right" data-aos-delay="1500"><span>SAT</span>: 08:00 - 12:00 hrs</p>
    </div>
  </div>
</footer>

<script>


  // var myButton = document.getElementById('fake');
  // document.getElementById('fake').trigger("click");
  // console.log('click');
  // myButton.trigger('click');


  window.addEventListener('load', () => {
    // Hide the loading overlay and show the page content
    // document.querySelector('#loading-overlay').style.display = 'none';
    // document.querySelector('#page-content').style.display = 'block';





  

  });
  // window.addEventListener('resize', function () {
  //       location.reload();
  //   });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.3/swiper-bundle.min.js" integrity="sha512-ILrDRgEiIojcsKyBy12ZU7MtOf78F2fj3vve/AN5i94iXLQ8PZN7IJYPphmAGdwZmTv4N+OzY3trvqGIEY87VA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    const swiper = new Swiper('.swiper', {
      autoplay: {
        delay: 5000,
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        type: 'progressbar',
        // dynamicBullets: true,
      },

      slidesPerView: 1
    })
  </script>
