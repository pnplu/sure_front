<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width= device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <title>ติดต่อ | ชัวร์.com</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/js/bootstrap.js">
    <!-- Css -->
    <link rel="stylesheet" href="stylesheet/css/style_index.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.eot">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,400,600" rel="stylesheet">
    <!-- Menu -->
    <script src="js/menu.js"></script>
    <!-- Slider img -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
    <script src="js/slider.js"></script>
    <!-- fancy box popup -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.easing-1.3.pack.js"></script>
    <script src="js/popup.js"></script>
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
  </head>
  <body>
    <section class="container-fluid">
      <section class="row">
        <article class="col-xs-12 wrap_header">
          <article class="col-xs-12 col-lg-offset-5 col-lg-2 logo_wrap_head">
            <img src="image/logo/logo_main.png" alt="ชัวร์.com">
          </article>
          <article class="col-xs-12 col-lg-offset-1 col-lg-4 wrap_con_top">
            <article class="col-xs-3 line_box_top_l">
              <img src="image/qr_code/qr_line.jpg">
            </article>
            <article class="col-xs-4 line_box_top_r">
              <img src="image/qr_code/line.png">
            </article>
            <article class="col-xs-5 text_line_box_top">
              <p>Id: d_sure</p>
              <p>090-607-0824</p>
            </article>
          </article>
        </article>
      </section> <!-- row wrap header -->
      <section class="col-xs-12 wrap_banner">
        <article class="row">
          <article class="col-xs-12 wrap_btn_ham mt_sc">
            <button id="toggle_ham"  type="button" name="button"><i class="fa fa-bars"></i></button>
          </article>
        </article>
        <article class="row desktop">
          <article class="col-xs-12 big_menu">
            <ul>
              <li><a href="index.php"><img class="menu_01" src="image/menu/menu01.png"></a></li>
              <li><a href="buy_car.php"><img class="menu_02" src="image/menu/menu02.png"></a></li>
              <li><a href="customer.php"><img class="menu_03" src="image/menu/menu03.png"></a></li>
              <li><a href="knownlaged.php"><img class="menu_04" src="image/menu/menu04.png"></a></li>
              <li><a href="contact.php"><img class="menu_05" src="image/menu/menu05.png"></a></li>
            </ul>
          </article>
        </article>
        <article class="row">
          <article class="col-xs-12 menu_mobile">
            <ul>
              <li><a href="index.php">หน้าหลัก</a></li>
              <li><a href="buy_car.php">บริการรับซื้อรถยนต์</a></li>
              <li><a href="customer.php">ลูกค้าที่ใหเกียรติกับเรา</a></li>
              <li><a href="knownlaged.php">เกร็ดความรู้</a></li>
              <li style="border: none;"><a href="contact.php">ติดต่อเรา</a></li>
            </ul>
          </article>
        </article>
        <article class="row">
          <section class="col-xs-12 banner" style="padding: 0px;">
            <article class="col-xs-12 swiper-container">
              <article class="swiper-wrapper">
                <?php for ($i=1; $i <= 7 ; $i++) { ?>
                <article class="swiper-slide" data-swiper-autoplay="4000">
                  <img src="image/banner/0<?php echo $i; ?>.jpg">
                </article> <!-- Slide 1 -->
                <?php } ?>
              </article>
              <article class="swiper-pagination"></article>
              <article class="swiper-button-prev"></article>
              <article class="swiper-button-next"></article>
              <article class="swiper-scrollbar"></article>
            </article> <!-- swiper-container -->
          </section>
        </article>
      </section>
      <h3 style="font-family: 'Kanit', sans-serif; color: #FFFFFF;">ติดต่อ</h3>
    </section>
  </body>
</html>
