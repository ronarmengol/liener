<?php

declare(strict_types=1);

session_start();
// session_destroy();


require_once __DIR__ . '/autoload.php';
// $db = new Database();


$errors = [
  'name' => '',
  'mobile' => '',
  'email' => '',
  'message' => ''
];

$name = '';
$mobile = '';
$message = '';
$email = '';

if (isset($_POST['contact'])) {

  // print_r($_POST);
  $name = isset($_POST['name']) ? $db->escape($_POST['name']) : '';
  $mobile = isset($_POST['mobile']) ? $db->escape($_POST['mobile']) : '';
  $email = isset($_POST['email']) ? $db->escape($_POST['email']) : '';
  $message = isset($_POST['message']) ? $db->escape($_POST['message']) : '';


  if ($name == '') {
    $errors['name'] = 'Field cannot be empty';
  }

  if ($mobile == '') {
    $errors['mobile'] = 'Field cannot be empty';
  }

  if ($message == '') {
    $errors['message'] = 'Field cannot be empty';
  }

  if (empty(array_filter($errors))) {
    // check if data is in database

    $mysql = "INSERT INTO comments (name, mobile, email, comment) VALUES ('$name', '$mobile', '$email', '$message')";

    $db->insert($mysql);

  }

}



$page_title = 'Liener investments';

require_once __DIR__ . '/layout/header.php';
?>

<!-- <div id="loading-overlay">
  <div id="loading-spinner"></div>
</div> -->

<!-- <div id="page-content"> -->
<div>

  <header class="social">
    <div class="container">
      <!-- <div class="location">
        <img src="images/icon_location.webp" alt="location icon">
        <p>Kantanta, Nkana East, Kitwe</p>
      </div> -->
      <div class="icons">
        <a href="#"><img src="images/icon_facebook.png" alt="facebook url"></a>
        <a href="#"><img src="images/icon_instagram.webp" alt="facebook url"></a>
      </div>
    </div>

  </header>


  <!-- <?php require_once __DIR__ . '/layout/nav_front.php'; ?> -->
  

  <main>

    <section class="index__hero">
      <div class="swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <img srcset="images/index_hero_const1-1280.webp 1280w, images/index_hero_const1-640.webp 800w"
                  src="images/index_hero_const1-640.webp"
                  alt="insurance" >
            <div class="swiper-slide-content">
              <div class="swiper-slide-text">

                <h2 class="swiper-slide-title">Let's create a solution for you</h2>
                <p class="swiper-slide-sub">Our experts are ready to work for you and design the best solution for your needs</p>
              </div>
            </div>  
          </div>

        <div class="swiper-slide">
          <img  srcset="images/index_hero_const2-1280.webp 1280w, images/index_hero_const2-640.webp 800w"
                src="images/index_hero_const2-640.webp"
                alt="insurance" >
          <div class="swiper-slide-content">
            <div class="swiper-slide-text">

              <h2 class="swiper-slide-title">In the midst of chaos. We rise to the occasion.</h2>
              <p class="swiper-slide-sub">High professionalism. We are committed ourselves to you</p>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
        <img  srcset="images/index_hero_const3-1280.webp 1280w, images/index_hero_const3-640.webp 800w"
                src="images/index_hero_const3-640.webp"
                alt="insurance" >
          <div class="swiper-slide-content">
            <div class="swiper-slide-text">

              <h2 class="swiper-slide-title">Insurance brokering and risk protection.</h2>
              <p class="swiper-slide-sub">Giving individuals and businesses peace of mind. Try us today.</p>
            </div>
          </div>
        </div>
    
      </div>
      <!-- <div class="swiper-pagination"></div> -->

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </section>
    

    <section class="index__about">
      <img src="images/logo.webp" alt="">
    </section>


    

  </main>

</div> 

<?php
  require_once __DIR__ . '/layout/footer.php';
?> 

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
