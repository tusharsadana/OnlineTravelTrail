<!DOCTYPE html>
<html>

<head>
    <title>Online Travel Trail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="fonts/fi/flaticon.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/indent.css">
    <link rel="stylesheet" href="rs-plugin/css/settings.css">
    <link rel="stylesheet" href="rs-plugin/css/layers.css">
    <link rel="stylesheet" href="rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="tuner/css/colorpicker.css">
    <link rel="stylesheet" href="tuner/css/styles.css">
    <link rel="stylesheet" href="owlcarousel/src/scss/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/src/scss/owl.theme.default.min.css">
    <script src="owlcarousel/src/js/owl.carousel.min.js"></script>
    <link rel="icon" href="img/logo.png"  type="image/png">
    <style>
    .custom1{
      background-color: white;
    }
    .custom1:hover{
      background-color: #ffc107;
    }
    </style>
  </head>
  <body>
    <!-- header page-->
    <header>
      <!-- site top panel-->
      <div class="site-top-panel">
        <div class="container p-relative">
          <div class="row">
            <div class="col-md-6 col-sm-7">
              <!-- lang select wrapper-->
              <div class="top-left-wrap font-3">
                <div class="mail-top"><a href="mailto:support@onlinetraveltrail.com"> <i class="flaticon-suntour-email"></i>info@onlinetraveltrail.com</a></div><span>/</span>

                <div class="tel-top"><a href="tel:+919039067403 "> <i class="flaticon-suntour-phone"></i>+919039067403 </a></div>
                  <div class="tel-top"><a href="tel:+918884233844 ">+918884233844 </a></div>

              </div>

              <!-- ! lang select wrapper-->
            </div>
          </div>
        </div>
      </div>
      <!-- ! site top panel-->
      <!-- Navigation panel-->
      <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
          <!-- Logo ( * your text or image into link tag *)-->
          <div class="nav-logo-wrap local-scroll"><a href="index.php" class="logo"><img src="img/logo.png" data-at2x="img/logo.png" alt></a></div>
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav">
            <ul class="clearlist">
              <!-- Item With Sub-->
              <li><a href="index.php" class=" active">Home</a></li>
              <li class="slash">/</li>
              <li><a href="#packages">Packages</a></li>
              <li class="slash">/</li>
                <li><a href="review.php" >Reviews</a></li>
                <li class="slash">/</li>

                <li><a href="#contacts" >Contact Us</a></li>

                <li class="pallet"><a href="#bookNow" class="mn-has-sub" data-toggle="modal" >Book Now!</a></li>
              <!-- End Search-->
            </ul>
          </div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
    </header>

    <div id="bookNow" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ffc107">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Book Now!</h5>
      </div>
      <div class="modal-body">
        <form action="emailus.php" method="post" >
          <h6> name </h6>
          <input type="text" class="form-control" name="name" id="name">
          <h6> email </h6>
          <input type="email" class="form-control" name="email" id="email">
          <h6> phone </h6>
          <input type="tel" class="form-control" name="tel" id="tel">

          <h6> flying to </h6>
          <input type="text" class="form-control" name="flyto" id="flyto">
          <h6> flying from </h6>
          <input type="text" class="form-control" name="flyfrom" id="flyfrom">
          <h6> departure </h6>
          <input type="date" placeholder="departure" class="form-control" name="depart" id="depart">
          <h6> return </h6>
          <input type="date" placeholder="departure" class="form-control" name="return" id="return">
          <div style="margin-bottom:2vh;">
          <div class="col-sm-4">
            <h6> Adult </h6>
            <input type="text" class="form-control" name="adult" id="adult">
          </div>
          <div class="col-sm-4">
            <h6> Children </h6>
            <input type="text" class="form-control" name="child" id="child">
          </div>
          <div class="col-sm-4">
            <h6> Class </h6>
            <select class="form-control" name="class" id="class">
              <option value="Economy" >Economy</option>
              <option value="Premium">Premium</option>
              <option value="Business">Business</option>

            </select>
          </div>
        </div>
        <br>
        <input type="submit" class="form-control custom1" value="BOOK NOW!" style="margin-top:7vh;">
        </form>

      </div>
      <div class="modal-footer" style="background-color:#ffc107">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal" style="max-width:5em;max-height:1.5em;align-item:center">Close</button> -->
      </div>
    </div>

  </div>
</div>
    <!-- ! header page-->
    <div class="content-body">
      <div class="tp-banner-container">
        <div class="tp-banner-slider">
          <ul>
            <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="pic/slider/main/slide-1.jpg" data-bgposition="center" alt="#" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Welcome to</div>
                <div class="sl-title">Online Travel Trail</div>
                <div class="sl-title-bot">Journey to mysterious world</div>
              </div>
            </li>
            <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="pic/slider/main/slide-2.jpg" data-bgposition="center" alt="#" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                <div class="banner-text-info">
    							<h3 class="rev-text">Ankitpanchal</h3>
    							<p>I really wanna thank Online travel trail & it's entire team. I personally want to ....</p>
    							<div class="more">
    								<a href="http://www.onlinetraveltrail.com/review.php" class="button-tamaya scroll" data-text="More About"><span>More About</span></a>
    							</div>
    						</div>
              </div>
            </li>

              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="pic/slider/main/slide-2.jpg" data-bgposition="center" alt="#" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                  <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                      <div class="banner-text-info">
                          <h3 class="rev-text">Kiran Patel</h3>
                          <p>First experience with online travel trails and it was awesome. arrange very good package for me ....</p>
                          <div class="more">
                              <a href="http://www.onlinetraveltrail.com/review.php" class="button-tamaya scroll" data-text="More About"><span>More About</span></a>
                          </div>
                      </div>
                  </div>
              </li>

              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="pic/slider/main/slide-2.jpg" data-bgposition="center" alt="#" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                  <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                      <div class="banner-text-info">
                          <h3 class="rev-text">Ilias Basha</h3>
                          <p>I would like to thank Dolly and your whole team for coming up with a good itinerary .....</p>
                          <div class="more">
                              <a href="http://www.onlinetraveltrail.com/review.php" class="button-tamaya scroll" data-text="More About"><span>More About</span></a>
                          </div>
                      </div>
                  </div>
              </li>

              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="pic/slider/main/slide-2.jpg" data-bgposition="center" alt="#" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                  <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                      <div class="banner-text-info">
                          <h3 class="rev-text">Sharat Chandra</h3>
                          <p>Very good experience with  Online Travel Trail. Would like to specially thank Dolly.</p>
                          <div class="more">
                              <a href="http://www.onlinetraveltrail.com/review.php" class="button-tamaya scroll" data-text="More About"><span>More About</span></a>
                          </div>
                      </div>
                  </div>
              </li>

              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="pic/slider/main/slide-2.jpg" data-bgposition="center" alt="#" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                  <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                      <div class="banner-text-info">
                          <h3 class="rev-text">Santoshirao</h3>
                          <p>It was our first experience Online travel trail. It was an amazing experience from.....</p>
                          <div class="more">
                              <a href="http://www.onlinetraveltrail.com/review.php" class="button-tamaya scroll" data-text="More About"><span>More About</span></a>
                          </div>
                      </div>
                  </div>
              </li>

              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="pic/slider/main/slide-2.jpg" data-bgposition="center" alt="#" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                  <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                      <div class="banner-text-info">
                          <h3 class="rev-text">Ameyay</h3>
                          <p>hii,I went on honeymoon to Singapore & Malaysia in month of june through online travel trail...</p>
                          <div class="more">
                              <a href="http://www.onlinetraveltrail.com/review.php" class="button-tamaya scroll" data-text="More About"><span>More About</span></a>
                          </div>
                      </div>
                  </div>
              </li>

              <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="rs-plugin/assets/loader.gif" data-lazyload="pic/slider/main/slide-2.jpg" data-bgposition="center" alt="#" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10">
                  <div data-x="['center','center','center','center']" data-y="center" data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="400" class="tp-caption sl-content">
                      <div class="banner-text-info">
                          <h3 class="rev-text">Saikat Dasgupta</h3>
                          <p>Overall our trip was superb. Special thanks to Ms. Dolly who addressed this issue sincerely....</p>
                          <div class="more">
                              <a href="http://www.onlinetraveltrail.com/review.php" class="button-tamaya scroll" data-text="More About"><span>More About</span></a>
                          </div>
                      </div>
                  </div>
              </li>
          </ul>
        </div>
      </div>





      <!-- page section parallax-->

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="container">
<!--                <img id="Modal_image" src="#"></div>-->
                <p id="country" > Country </p>

                <p id="Price" >Price</p>
                <p id="hotel" >Hotel</p>
                <span id="duration" >Duration</span>
                    <span id="Details"></span>
                    <form method="post" action="http://eaisociety.com/PHPMailer/onlineTravelTrail.php">
                        Name:<br>
                        <input type="text" name="name" id="name" required>
                        <br>
                        Email <br>
                        <input type="text" name="email" id="email" required>
                        <br><br>
                        <input type="text" name="message" id="message" style="visibility: hidden;">
                        <input type="text" name="subject" id="subject" style="visibility: hidden;" value="New Booking">
                        <input type="submit" value="Submit">
                    </form>
                </div>

            </div>


        </div>

      <section class="small-section cws_prlx_section bg-gray-40"><img src="pic/parallax-1.jpg" alt class="cws_prlx_layer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title-section-top alt">About</h2>
              <h2 class="title-section alt mb-20">Online<span>Travel Trail</span></h2>
              <p class="color-white">Online Travel Trail provide travel, tourism related solutions to the free individuals who loves places to visit. To ensure the delivery to be effective and efficient our travel agency involves only the experts from our team who work on their expertise.
                <br>Cool hill stations, wild-life, adventure spots <a href="#"></a>nd beaches provide one of the best vacations that you would have anywhere in the world.  Online Travel Trail offers a vast range of holiday packages for destinations across the world.  While the dynamic or customized travel and tour packages offer consumers an option to create and design their own holiday, the fixed departure holiday packages have a pre-designed itinerary.
                </p>
              <div class="cws_divider short mb-30 mt-30"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Set up your HTML -->
<!--<div class="owl-carousel">-->
<!--  <div> Your Content </div>-->
<!--  <div> Your Content </div>-->
<!--  <div> Your Content </div>-->
<!--  <div> Your Content </div>-->
<!--  <div> Your Content </div>-->
<!--  <div> Your Content </div>-->
<!--  <div> Your Content </div>-->
<!--</div>-->

        <!-- recomended section-->
      <section class="small-section bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
                <div id="packages"></div>

              <h2 class="title-section"><span>Recomended</span> Packages</h2>
              <div class="cws_divider mb-25 mt-5"></div>
            </div>
            <div class="col-md-4"><i class="flaticon-suntour-hotel title-icon"></i></div>
          </div>
          <div class="row">


            <!-- Recomended item-->
            <div class="col-md-6">
              <div class="recom-item" id="package1">
                <div class="recom-media"><a href="#">
                    <div class="pic"><img src="pic/singapore1.jpg"></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Singapore</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="#">
                    <h6 class="blog-title">Singapore</h6></a>
                    <br><h6 class="blog-title">Rs 31,500 /-per person</h6>
<!--                  <div class="stars stars-4"></div>-->

                  <div class="recom-price"><span class="font-4">5</span> Nights <span class="font-4">6 </span> Days</div>
                    <p class="mb-30">Aqueen lavender / similar (3*).</br> 5+ Activities</p><a  class="recom-button">Read more</a><a href="#" class="cws-button small alt">Book now</a>

                </div>
                <!-- Recomended Image-->
              </div>
            </div>
            <!-- ! Recomended item-->

<!--         //////////////////////     Package 2-->

              <!-- Recomended item-->
              <div class="col-md-6">
                  <div class="recom-item" id="package2">
                      <div class="recom-media" ><a href="#">
                              <div class="pic"><img src="pic/singapore2.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                          <div class="location"><i class="flaticon-suntour-map"></i> Singapore</div>
                      </div>
                      <!-- Recomended Content-->
                      <div class="recom-item-body"><a href="#">
                              <h6 class="blog-title">Singapore</h6></a>
                          <br><h6 class="blog-title">Rs 29000 /-per person</h6>
                          <!--                  <div class="stars stars-4"></div>-->

                          <div class="recom-price"><span class="font-4">4</span> Nights <span class="font-4">5 </span> Days</div>
                          <p class="mb-30">Aqueen lavender / similar (3*).</br> 5+ Activities</p><a  class="recom-button">Read more</a><a href="#" class="cws-button small alt">Book now</a>

                      </div>
                      <!-- Recomended Image-->
                  </div>
              </div>
              <!-- ! Recomended item-->

<!--              /////// Package 3-->

              <!-- Recomended item-->
              <div class="col-md-6">
                  <div class="recom-item" id="package_3">
                      <div class="recom-media" ><a href="#">
                              <div class="pic"><img src="pic/singapore3.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                          <div class="location"><i class="flaticon-suntour-map"></i> Singapore</div>
                      </div>
                      <!-- Recomended Content-->
                      <div class="recom-item-body"><a href="#">
                              <h6 class="blog-title">Singapore</h6></a>
                          <br><h6 class="blog-title">Rs 23500 /-per person</h6>
                          <!--                  <div class="stars stars-4"></div>-->

                          <div class="recom-price"><span class="font-4">3</span> Nights <span class="font-4">4</span> Days</div>
                          <p class="mb-30">Aqueen lavender / similar (3*).</br> 5+ Activities</p><a  class="recom-button">Read more</a><a href="#" class="cws-button small alt">Book now</a>

                      </div>
                      <!-- Recomended Image-->
                  </div>
              </div>
              <!-- ! Recomended item-->

                <!--////// Package 4-->

              <!-- Recomended item-->
              <div class="col-md-6">
                  <div class="recom-item" id="package_4">
                      <div class="recom-media" ><a href="#">
                              <div class="pic"><img src="pic/singapore4.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                          <div class="location"><i class="flaticon-suntour-map"></i> Singapore</div>
                      </div>
                      <!-- Recomended Content-->
                      <div class="recom-item-body"><a href="#">
                              <h6 class="blog-title">Singapore + Malaysia </h6></a>
                          <br><h6 class="blog-title">Rs  39,500 /-per person</h6>
                          <!--                  <div class="stars stars-4"></div>-->

                          <div class="recom-price"><span class="font-4">6</span> Nights <span class="font-4">7 </span> Days</div>
                          <p class="mb-30">Aqueen lavender+Citin Seacare Pudu Hotel+First World Hotel.</br> 5+ Activities</p><a  class="recom-button">Read more</a><a href="#" class="cws-button small alt">Book now</a>

                      </div>
                      <!-- Recomended Image-->
                  </div>
              </div>
              <!-- ! Recomended item-->


<!--                ///////// Package 5-->

              <!-- Recomended item-->
              <div class="col-md-6">
                  <div class="recom-item" id="package_5">
                      <div class="recom-media" ><a href="#">
                              <div class="pic"><img src="pic/singapore5.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                          <div class="location"><i class="flaticon-suntour-map"></i> Singapore</div>
                      </div>
                      <!-- Recomended Content-->
                      <div class="recom-item-body"><a href="#">
                              <h6 class="blog-title">Singapore</h6></a>
                          <br><h6 class="blog-title">Rs 45,999 /-per person</h6>
                          <!--                  <div class="stars stars-4"></div>-->

                          <div class="recom-price"><span class="font-4">3</span> Nights Singapore<span class="font-4">2 </span> Nights Cruise</div>
                          <p class="mb-30">Aqueen lavender / similar + Star Cruise.</br> 5+ Activities</p><a  class="recom-button">Read more</a><a href="#" class="cws-button small alt">Book now</a>

                      </div>
                      <!-- Recomended Image-->
                  </div>
              </div>
              <!-- ! Recomended item-->

<!--              /// Package 6-->

              <!-- Recomended item-->
              <div class="col-md-6">
                  <div class="recom-item" id="package_6">
                      <div class="recom-media" ><a href="#">
                              <div class="pic"><img src="pic/bali.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                          <div class="location"><i class="flaticon-suntour-map"></i> Bali</div>
                      </div>
                      <!-- Recomended Content-->
                      <div class="recom-item-body"><a href="#">
                              <h6 class="blog-title">Singapore + Bali</h6></a>
                          <br><h6 class="blog-title"> Rs 39,999 /-per person</h6>
                          <!--                  <div class="stars stars-4"></div>-->

                          <div class="recom-price"><span class="font-4">6</span> Nights <span class="font-4">7 </span> Days</div>
                          <p class="mb-30">3 Nights Grand ixora hotel kuta  + 3 Nights Aqueen lavender.</br> 5+ Activities</p><a  class="recom-button">Read more</a><a href="#" class="cws-button small alt">Book now</a>
<!--                          <div class="action font-2">20%</div>-->
                      </div>
                      <!-- Recomended Image-->
                  </div>
              </div>
              <!-- ! Recomended item-->


<!--              //// Package 7-->

              <!-- Recomended item-->
              <div class="col-md-6">
                  <div class="recom-item" id="package_7">
                      <div class="recom-media" ><a href="#">
                              <div class="pic"><img src="pic/dubai.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                          <div class="location"><i class="flaticon-suntour-map"></i> Dubai</div>
                      </div>
                      <!-- Recomended Content-->
                      <div class="recom-item-body"><a href="#">
                              <h6 class="blog-title">Dubai </h6></a>
                          <br><h6 class="blog-title">RS. 34,999/-per person</h6>
                          <!--                  <div class="stars stars-4"></div>-->

                          <div class="recom-price"><span class="font-4">4</span> Nights <span class="font-4">5 </span> Days</div>
                          <p class="mb-30">ASTORIA & AMBASSADOR HOTEL.</br> 5+ Activities</p><a  class="recom-button">Read more</a><a href="#" class="cws-button small alt">Book now</a>

                      </div>
                      <!-- Recomended Image-->
                  </div>
              </div>
              <!-- ! Recomended item-->

<!--              /// Package 8-->

              <!-- Recomended item-->
              <div class="col-md-6">
                  <div class="recom-item" id="package_8">
                      <div class="recom-media" ><a href="#">
                              <div class="pic"><img src="pic/mauratius.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                          <div class="location"><i class="flaticon-suntour-map"></i> Mauritius</div>
                      </div>
                      <!-- Recomended Content-->
                      <div class="recom-item-body"><a href="#">
                              <h6 class="blog-title">Mauritius </h6></a>
                          <br><h6 class="blog-title">Rs  20,999 /-per person</h6>
                          <!--                  <div class="stars stars-4"></div>-->

                          <div class="recom-price"><span class="font-4">6</span> Nights <span class="font-4">7 </span> Days</div>
                          <p class="mb-30">Le grand blue .</br> 3+ Activities</p><a  class="recom-button">Read more</a><a href="#" class="cws-button small alt">Book now</a>

                      </div>
                      <!-- Recomended Image-->
                  </div>
              </div>
              <!-- ! Recomended item-->


<!--              package 9-->

              <!-- Recomended item-->
              <div class="col-md-6">
                  <div class="recom-item" id="package_9">
                      <div class="recom-media" ><a href="#">
                              <div class="pic"><img src="pic/thailand.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                          <div class="location"><i class="flaticon-suntour-map"></i> Thailand</div>
                      </div>
                      <!-- Recomended Content-->
                      <div class="recom-item-body"><a href="#">
                              <h6 class="blog-title">Thailand</h6></a>
                          <br><h6 class="blog-title">Rs 10,999 /-per person</h6>
                          <!--                  <div class="stars stars-4"></div>-->

                          <div class="recom-price"><span class="font-4">4</span> Nights <span class="font-4">5 </span> Days</div>
                          <p class="mb-30">Grand Alpine Pratunam BKK \n
                              Beverly Plaza Hotel Pattaya .</br> 5+ Activities</p><a  class="recom-button">Read more</a><a href="#" class="cws-button small alt">Book now</a>

                      </div>
                      <!-- Recomended Image-->
                  </div>
              </div>
              <!-- ! Recomended item-->



          </div>
        </div>
      </section>
<!--        <div class='reviews'>-->
<!--            <!-- Panel one -->-->
<!--            <div class='panel'>-->
<!--                <img src='http://www.designbolts.com/wp-content/uploads/2014/01/Superman-Flat-Design.png'>-->
<!--                <p>-->
<!--                    I really wanna thank Online travel trail & it's entire team. I personally want to thank Ms. Dolly  who put extra efforts to make our trip memorable. They had arranged best hotels, also they had taken care of every minute details to make the trip more enjoyable. They offered best services by attending our every single concern. I strongly recomend to have a trip with Online Travel Trail & special thanks to Ms. Dolly.-->
<!--                </p>-->
<!--                <h7>Ankitpanchal-->
<!--                    <br>Jan 01, 2018</h7>-->
<!--            </div>-->
<!--            <!-- Panel Two -->-->
<!--            <div class='panel'>-->
<!--                <img src='http://www.designbolts.com/wp-content/uploads/2014/01/Batman-Flat-Design.png'>-->
<!--                <p>-->
<!--                    First experience with online travel trails and it was awesome. arrange very good package for me for my honeymoon in my budget. i was lil worried before this trip but after this trip i can fully trust online travel trail. guide and the driver was very nice and very good and very time punctual, if they say tomorrow 8am then they will be there waiting for us on 7.55am. i was really very happy with the online travel trail arrangements. i recommended to my family members and my friends as well.i am sure that when i will plan my next holiday first website will be online travel trail on my mind.thank you online travel trail and especially thank you DOLLY JAIN for arranging and suggesting good package to me.-->
<!--                </p>-->
<!--                <h7>Kiran Patel<br>-->
<!--                    Mumbai Feb 23, 2017</h7>-->
<!--            </div>-->
<!--            <!-- Panel Three -->-->
<!--            <div class='panel'>-->
<!--                <img src='http://www.designbolts.com/wp-content/uploads/2014/01/Liz-Sherman-Flat-Design.png'>-->
<!--                <p>-->
<!--                    I would like to thank Dolly and your whole team for coming up with a good itinerary for my honeymoon trip.It was a memorable one for us.. The whole booking and journey experience was great and of no hassle.. I'm sure I world approach you guys for next trip as well..My thanks to your Bali partner who sent a nice guide.I think you guys are doing great job.. Keep it up!Regards,Ilias Basha Shaik.-->
<!--                </p>-->
<!--                <h7>Ilias Basha<br>-->
<!--                    Hyderabad Jan 27, 2017</h7>-->
<!--            </div>-->
<!--            <div class='panel'>-->
<!--                <img src='http://www.designbolts.com/wp-content/uploads/2014/01/Liz-Sherman-Flat-Design.png'>-->
<!--                <p>-->
<!--                    Very good experience with  Online Travel Trail. Would like to specially thank Dolly,  for their prompt responses and arranging a hassle-free tour of Singapore. Would love to book with them again.-->
<!--                </p>-->
<!--                <h7>Sharat Chandra<br>-->
<!--                    Hyderabad Aug 29, 2017</h7>-->
<!--            </div>-->
<!--            <div class='panel'>-->
<!--                <img src='http://www.designbolts.com/wp-content/uploads/2014/01/Liz-Sherman-Flat-Design.png'>-->
<!--                <p>-->
<!--                    It was our first experience Online travel trail. It was an amazing experience from the start till end. Special thanks to  Dolly and Pinaz who arranged the holiday as per our request. I would certainly like to go for my next trip with Online travel trail and recommend others too.-->
<!--                </p>-->
<!--                <h7>Santoshirao<br>-->
<!--                    Bangalore , India Jul 30, 2017</h7>-->
<!--            </div>-->
<!--            <div class='panel'>-->
<!--                <img src='http://www.designbolts.com/wp-content/uploads/2014/01/Liz-Sherman-Flat-Design.png'>-->
<!--                <p>-->
<!--                    Overall our trip was superb. Special thanks to Ms. Dolly who addressed this issue sincerely.A tip for other travellers: keem some IDR along with USD as most places accept IDRKintamani and Lake Batur trip and lunch at Sari Restaurant facing Mt. Batur was one of the best moments. Also the temple tours - Uluwatu, Mengwi, Tanah Lot, Tirta Empul were excellent. The friendly guides of supplier made the trip very good. Kecak dance is one of the highlights not to be missed. The coffee plantations having 12 types of tea and coffee are another experience worth having. Both Fave hotel and Bali dream Villa very good hotels.Tips: Temple trips of Mengwi, Alaskedaton and Tanah Lot should be started a bit earlier keeping in mind Bali traffic so that all the temples are covered in time.-->
<!--                </p>-->
<!--                <h7>Ilias Basha<br>-->
<!--                    Hyderabad Jan 27, 2017</h7>-->
<!--            </div>-->
<!--        </div>-->
<!--        <script>-->
<!--            speed = 600-->
<!--        </script>-->



        <section class="page-section pt-90 pb-80 bg-main pattern relative">
        <div class="content-body">
          <div class="container page">
            <div class="row">
              <div class="col-md-6">
                <div class="contact-item">
                    <div id="contacts"></div>
                  <h4 class="title-section mt-30"><span class="font-bold">Contacts</span></h4>
                  <div class="cws_divider mb-25 mt-5"></div>
                  <ul class="icon">
                    <li> <a href="mailto:suport@onlinetraveltrail.com">support@onlinetraveltrail.com<i class="flaticon-suntour-email"></i></a></li>
                    <li> <a href="#">+919039067403<i class="flaticon-suntour-phone"></i></a></li>
                    <li> <a href="#">Kausthuba, BBMP<br>Banaswadi Banglore 560043<br>Karnatka<i class="flaticon-suntour-map"></i></a></li>
                    <li> <a href="#"> Infront of raymond showroom baradari<br> chauraha gwalior -474006<i class="flaticon-suntour-map"></i></a></li>

                  </ul>
                  <p class="mt-20">Guests can enjoy a range of massage treatments and beauty therapy at the on-site spa, U Spa. It offers child-minding services, a currency exchange and a reception that is available 24/7. It also has superb facilities for meetings and events. </p>
                  <div class="contact-cws-social"><a href="#" class="cws-social fa fa-twitter"></a><a href="#" class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#" class="cws-social fa fa-linkedin"></a></div>
                </div>
                               <h4 class="title-section mb-20"><span class="font-bold">Contact us</span></h4>
                  <form action="http://eaisociety.com/PHPMailer/onlineTravelTrail.php" method="post" >
                      <div>
                          <div class="INP">
                              <input type="text" name="name" value="" size="40" placeholder="Name" aria-invalid="false" aria-required="true" class="form-row form-row-first">
                          </div>
                          <div class="INP ">
                              <input type="text" name="email" value="" size="40" placeholder="Email" aria-required="true" class="form-row form-row-last">
                          </div>
                          <div class="invisible">
                              <input type="text" name="subject" value="Form Contact" size="40" placeholder="subject" aria-required="true" class="form-row form-row-last" >
                          </div>
                      </div>
                      <br>
                      <div class="input-container">
                          <textarea name="message" cols="40" rows="4" placeholder="Comment" aria-invalid="false" aria-required="true"></textarea>
                      </div>
                      <input type="submit" value="Submit" class="cws-button alt">
                  </form>

              </div>
              <div class="col-md-6">
                  <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="397" id="gmap_canvas" src="https://maps.google.com/maps?q=Banaswadi Fire Sation&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.pureblack.de/webdesign-wiesbaden/"></a><style>.mapouter{overflow:hidden;height:397px;width:600px;}.gmap_canvas {background:none!important;height:397px;width:600px;}</style></div>
              </div>
            </div>
          </div>
            <div class="element-section pattern bg-gray-3 relative pt-60 pb-100">
            <div class="container">




                <!--                  <form>-->
<!--                      <br>-->
<!--                      <input type="text" name="name">-->
<!--                      <br>-->
<!--                      <br>-->
<!--                      <input type="text" name="email" required>-->
<!--                      <br><br>-->
<!--                      <textarea type="text" name="message"></textarea>-->
<!--                      <input type="text" name="subject"style="visibility: hidden;" value="New Booking">-->
<!--                      <input type="submit" value="Submit" class="cws-button">-->
<!--                  </form>-->


              </div>
            </div>
          </div>
        </div>
    </section>
      <!-- ! call out section-->
    </div>
    <!-- footer-->
    <footer style="background-image: url('pic/footer/footer-bg.jpg')" class="footer footer-fixed">
      <!-- copyright-->
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p>© Copyright 2018 <span>Online Travel Trail</span> &nbsp;&nbsp;|&nbsp;&nbsp; All Rights Reserved</p>
            </div>
            <div class="col-sm-6 text-right"><a href="index.php" class="footer-nav">Home</a><a href="review.php" class="footer-nav">Customer Reviews</a><a href="#packages" class="footer-nav">Packages</a><a href="#contacts" class="footer-nav">Contact Us</a></div>
          </div>
        </div>
      </div>
      <!-- end copyright-->
      <!-- scroll top-->
    </footer>
    <div id="scroll-top"><i class="fa fa-angle-up"></i></div>
    <!-- ! footer-->
    <script src="https://www.youtube.com/player_api"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/cws_parallax.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/bg-video/cws_self_vimeo_bg.js"></script>
    <script type="text/javascript" src="js/bg-video/jquery.vimeo.api.min.js"></script>
    <script type="text/javascript" src="js/bg-video/cws_YT_bg.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="tuner/js/colorpicker.js"></script>
    <script type="text/javascript" src="tuner/js/scripts.js"></script>
    <script type="text/javascript" src="js/retina.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <script>
    $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
    </script>
  </body>
</html>
