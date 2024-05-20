<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <?php include('inc/css.html') ?>

  <title>Nepal Darpan</title>
  <!-- Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <!-- Icon -->
</head>

<body class="homepage">
  <div class="sitewrapper">
    <?php include('inc/header.html') ?>

    <div class="sitecontent">

      <!-- section slider -->
      <section class="section section-slider">
        <!-- carousel -->
        <div id="carousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="imgtobg-img" src="images/patrik-michalicka-oaJyBg2WKDE-unsplash.jpg" alt="First slide" />
              <img class="imgtobg-img-sm" src="" alt="First slide" />
              <div class="carousel-overlay-wrapper text-right">
                <div class="container">
                  <div class="carousel-overlay">
                    <div class="carousel-overlay-inner">
                      <div class="carousel-overlay-title">
                        <h2>Trekking in Nepal Himalayas</h2>
                      </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim corporis quis unde aut, aperiam
                        excepturi.</p>
                      <div class="carousel-overlay-cont">
                        <a href="booking.php" class="link-style-passby link-style-passby-alt"><i
                            class="fa fa-book mr-2"></i> Book
                          Us</a>
                        <a href="about.php" class="link-style-passby"><i class="fa fa-user"></i> Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <img class="imgtobg-img" src="images/david-rodrigo-Fr6zexbmjmc-unsplash.jpg" alt="First slide" />
              <img class="imgtobg-img-sm" src="" alt="First slide" />
              <div class="carousel-overlay-wrapper">
                <div class="container">
                  <div class="carousel-overlay">
                    <div class="carousel-overlay-inner">
                      <div class="carousel-overlay-title">
                        <h2>International Trips</h2>
                      </div>
                      <div class="carousel-overlay-cont">
                        <p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, laudantium? Tempore, ipsam.
                            Molestias dolores praesentium saepe corporis tenetur inventore veritatis!</p>
                        </p>
                        <a href="tour-list.php" class="link-style-passby"><i class="fa fa-cogs"></i> Our Tours</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="imgtobg-img" src="images/sergey-pesterev-_VqyrvQi6do-unsplash.jpg" alt="First slide" />
              <img class="imgtobg-img-sm" src="" alt="First slide" />
              <div class="carousel-overlay-wrapper">
                <div class="container">
                  <div class="carousel-overlay">
                    <div class="carousel-overlay-inner">
                      <div class="carousel-overlay-title">
                        <h2>Get in Touch</h2>
                      </div>
                      <div class="carousel-overlay-cont">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt harum mollitia nostrum quo
                          aliquid magnam.</p>
                        <a href="contact.php" class="link-style-passby"><i class="fa fa-hand-point-down"></i> Get in
                          Touch</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <i class="fa fa-chevron-left"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <i class="fa fa-chevron-right"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>

      <!-- section -->
      <section class="section section-pkghp">
        <div class="container">
          <div class="section-inner">
            <div class="pkghp">
              <div class="section-head text-center">
                <h2 class="heading">Our Travel Packages</h2>
                <div class="heading-after"></div>
              </div>
              <div class="section-body">
                <div class="pkghp-slider owl-carousel owl-theme">
                  <!-- item -->
                  <div class="item">
                    <div class="pkghp-box">
                      <div class="pkghp-img">
                        <img src="images/kalen-emsley-uSFOwYo1qEw-unsplash.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="pkghp-text">
                        <span>21 Jan</span>
                        <h3>Nepal Trekking Packages</h3>
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-2"></span>
                        </div>
                        <p data-maxlength="150">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto
                          aliquid velit eaque ipsa
                          ipsam, obcaecati aut molestiae suscipit ducimus ipsum.</p>
                        <a href="tour-single.php"><i class="fa fa-angle-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                    <div class="pkghp-box">
                      <div class="pkghp-img">
                        <img src="images/mesut-kaya-eOcyhe5-9sQ-unsplash.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="pkghp-text">
                        <span>02 July</span>
                        <h3>Nepal Tour Packages</h3>
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-4"></span>
                        </div>
                        <p data-maxlength="150">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto
                          aliquid velit eaque ipsa
                          ipsam, obcaecati aut molestiae suscipit ducimus ipsum.</p data-maxlength="150">
                        <a href="tour-single.php"><i class="fa fa-angle-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                    <div class="pkghp-box">
                      <div class="pkghp-img">
                        <img src="images/bikalpa-pokhrel-L4NA2qRqK0s-unsplash.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="pkghp-text">
                        <span>18 Sep</span>
                        <h3>City Tour</h3>
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-1"></span>
                        </div>
                        <p data-maxlength="150">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto
                          aliquid velit eaque ipsa
                          ipsam, obcaecati aut molestiae suscipit ducimus ipsum.</p data-maxlength="120">
                        <a href="tour-single.php"><i class="fa fa-angle-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                    <div class="pkghp-box">
                      <div class="pkghp-img">
                        <img src="images/julian-paul-MxMpW8VUE3E-unsplash.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="pkghp-text">
                        <span>21 Dec</span>
                        <h3>Cave Tour</h3>
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-4"></span>
                        </div>
                        <p data-maxlength="120">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto
                          aliquid velit eaque ipsa
                          ipsam, obcaecati aut molestiae suscipit ducimus ipsum.</p data-maxlength="120">
                        <a href="tour-single.php"><i class="fa fa-angle-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- section -->
      <section class="section section-provdata">
        <div class="container">
          <div class="section-inner">
            <div class="provdata">
              <div class="section-head text-center">
                <h2 class="heading">Our Provinces</h2>
                <div class="heading-after"></div>
                <p>Filter your trip data according to your respective provinces.</p>
              </div>
              <div class="section-body">
                <div class="provdata-row row">
                  <!-- col -->
                  <div class="provdata-col col-lg-3 col-md-4 col-6">
                    <div class="provdata-card provdata-card-1">
                      <div class="provdata-img square">
                        <img src="images/provinces/prov-1.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="provdata-text">
                        <a href="#">Province 1</a>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="provdata-col col-lg-3 col-md-4 col-6">
                    <div class="provdata-card provdata-card-2">
                      <div class="provdata-img square">
                        <img src="images/provinces/prov-2.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="provdata-text">
                        <a href="#">Province 2</a>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="provdata-col col-lg-3 col-md-4 col-6">
                    <div class="provdata-card provdata-card-3">
                      <div class="provdata-img square">
                        <img src="images/provinces/prov-3.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="provdata-text">
                        <a href="#">Province 3</a>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="provdata-col col-lg-3 col-md-4 col-6">
                    <div class="provdata-card provdata-card-4">
                      <div class="provdata-img square">
                        <img src="images/provinces/prov-4.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="provdata-text">
                        <a href="#">Province 4</a>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="provdata-col col-lg-3 col-md-4 col-6">
                    <div class="provdata-card provdata-card-5">
                      <div class="provdata-img square">
                        <img src="images/provinces/prov-5.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="provdata-text">
                        <a href="#">Province 5</a>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="provdata-col col-lg-3 col-md-4 col-6">
                    <div class="provdata-card provdata-card-6">
                      <div class="provdata-img square">
                        <img src="images/provinces/prov-6.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="provdata-text">
                        <a href="#">Province 6</a>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="provdata-col col-lg-3 col-md-4 col-6">
                    <div class="provdata-card provdata-card-7">
                      <div class="provdata-img square">
                        <img src="images/provinces/prov-7.jpg" alt="" class="imgtobg-img">
                      </div>
                      <div class="provdata-text">
                        <a href="#">Province 7</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="visit-nepal">
                  <img src="images/Visit-nepal-2020.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- section -->
      <section class="section section-counter d-none" id="counter">
        <div class="container">
          <div class="section-inner">
            <div class="counter">
              <div class="section-body">
                <div class="counter-row row">
                  <!-- col -->
                  <div class="counter-col col-lg-3 col-6">
                    <div class="counter-box">
                      <strong class="counter-value">300</strong>
                      <span>Organized Trips</span>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="counter-col col-lg-3 col-6">
                    <div class="counter-box">
                      <strong class="counter-value">10</strong>
                      <span>Years of Experience</span>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="counter-col col-lg-3 col-6">
                    <div class="counter-box">
                      <strong class="counter-value">1526</strong>
                      <span>Satisfied Customers</span>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="counter-col col-lg-3 col-6">
                    <div class="counter-box">
                      <strong class="counter-value">0</strong>
                      <span>Mishaps / Accidents</span>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="counter-col col-lg-3 col-6">
                    <div class="counter-box">
                      <strong class="counter-value">28</strong>
                      <span>Outpost bases</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- section -->
      <section class="section section-abouthp">
        <div class="container">
          <div class="section-inner">
            <div class="abouthp">
              <div class="section-body">
                <div class="abouthp-row row">
                  <!-- col -->
                  <div class="abouthp-col abouthp-col-text col-lg-5">
                    <div class="abouthp-text">
                      <h2 class="heading">Find out where your adventures take you</h2>
                      <div class="heading-after"></div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta natus placeat magnam nobis autem
                        explicabo pariatur quos error cumque accusantium.</p>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eius blanditiis doloremque
                        rem
                        repudiandae sed facere corrupti architecto commodi exercitationem consequuntur placeat alias
                        esse
                        fugit vero, obcaecati voluptatem sit necessitatibus eum excepturi illo quis velit laudantium
                        nihil. Ipsum, suscipit modi.</p>
                      <a href="about.php" class="link-style-passby">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="abouthp-col abouthp-col-quals col-lg-7">
                    <div class="quals">
                      <div class="quals-row row">
                        <!-- col -->
                        <div class="quals-col col-md-6">
                          <div class="quals-box">
                            <div class="quals-icon">
                              <img src="images/icons/002-advice.png" alt="">
                            </div>
                            <div class="quals-text">
                              <h3>Advice &amp; Support</h3>
                              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, hic optio.</p>
                            </div>
                          </div>
                          <div class="quals-box">
                            <div class="quals-icon">
                              <img src="images/icons/003-air-transport.png" alt="">
                            </div>
                            <div class="quals-text">
                              <h3>Air Ticketing</h3>
                              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, hic optio.</p>
                            </div>
                          </div>
                        </div>
                        <!-- col -->
                        <div class="quals-col col-md-6">
                          <div class="quals-box">
                            <div class="quals-icon">
                              <img src="images/icons/001-route.png" alt="">
                            </div>
                            <div class="quals-text">
                              <h3>Tour Packages</h3>
                              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, hic optio.</p>
                            </div>
                          </div>
                          <div class="quals-box">
                            <div class="quals-icon">
                              <img src="images/icons/004-building.png" alt="">
                            </div>
                            <div class="quals-text">
                              <h3>Hotel Accomodation</h3>
                              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, hic optio.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- section -->
      <section class="section section-tourhp">
        <div class="container">
          <div class="section-inner">
            <div class="tourhp">
              <div class="section-head text-center">
                <h2 class="heading">Our Popular Tours</h2>
                <div class="heading-after"></div>
              </div>
              <div class="section-body">
                <div class="tourhp-row row">
                  <!-- item -->
                  <div class="tourhp-col col-xl-3 col-lg-4 col-md-6">
                    <div class="tourhp-card tourhp-card-curve">
                      <div class="tourhp-card-tag tourhp-card-tag-1">
                        <span href="#">new</span>
                      </div>
                      <div class="tourhp-card-img">
                        <a href="tour-single.php">
                          <img src="images/samuele-errico-piccarini-MCroQe9ykmM-unsplash.jpg" alt=""
                            class="imgtobg-img">
                        </a>
                      </div>
                      <div class="tourhp-card-text">
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-4"></span>
                        </div>
                        <h3><a href="tour-single.php">Exciting retreat by the pond</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, tempora! Quaerat autem
                          ipsa deserunt officia.</p>
                        <div class="tourhp-card-footer">
                          <div class="trip-date">
                            <i class="fa fa-calendar-alt"></i>
                            <span>Availability</span>
                            <strong>Dec 18</strong>
                          </div>
                          <div class="trip-duration">
                            <span class="trip-duration-day"><i class="fa fa-sun"></i> 10 Days</span>
                            <span class="trip-duration-night"><i class="fa fa-moon"></i> 11 Nights</span
                              class="trip-duration-night">
                          </div>
                        </div>
                      </div>
                      <a href="#" class="tourhp-card-link"></a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="tourhp-col col-xl-3 col-lg-4 col-md-6">
                    <div class="tourhp-card tourhp-card-curve">
                      <div class="tourhp-card-tag tourhp-card-tag-2">
                        <span href="#">bestselling</span>
                      </div>
                      <div class="tourhp-card-img">
                        <a href="tour-single.php">
                          <img src="images/sergey-pesterev-_VqyrvQi6do-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                      </div>
                      <div class="tourhp-card-text">
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-5"></span>
                        </div>
                        <h3><a href="tour-single.php">Desert Adventure</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, tempora! Quaerat autem
                          ipsa deserunt officia.</p>
                        <div class="tourhp-card-footer">
                          <div class="trip-date">
                            <i class="fa fa-calendar-alt"></i>
                            <span>Availability</span>
                            <strong>Jan 25</strong>
                          </div>
                          <div class="trip-duration">
                            <span class="trip-duration-day"><i class="fa fa-sun"></i> 3 Days</span>
                            <span class="trip-duration-night"><i class="fa fa-moon"></i> 4 Nights</span
                              class="trip-duration-night">
                          </div>
                        </div>
                      </div>
                      <a href="#" class="tourhp-card-link"></a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="tourhp-col col-xl-3 col-lg-4 col-md-6">
                    <div class="tourhp-card tourhp-card-curve">
                      <div class="tourhp-card-img">
                        <a href="tour-single.php">
                          <img src="images/rebe-adelaida-zunQwMy5B6M-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                      </div>
                      <div class="tourhp-card-text">
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-1"></span>
                        </div>
                        <h3><a href="tour-single.php">Venice boat ride</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, tempora! Quaerat autem
                          ipsa deserunt officia.</p>
                        <div class="tourhp-card-footer">
                          <div class="trip-date">
                            <i class="fa fa-calendar-alt"></i>
                            <span>Availability</span>
                            <strong>Apr 12</strong>
                          </div>
                          <div class="trip-duration">
                            <span class="trip-duration-day"><i class="fa fa-sun"></i> 6 Days</span>
                            <span class="trip-duration-night"><i class="fa fa-moon"></i> 7 Nights</span
                              class="trip-duration-night">
                          </div>
                        </div>
                      </div>
                      <a href="#" class="tourhp-card-link"></a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="tourhp-col col-xl-3 col-lg-4 col-md-6">
                    <div class="tourhp-card tourhp-card-curve">
                      <div class="tourhp-card-img">
                        <a href="tour-single.php">
                          <img src="images/simon-migaj-PKr_emwn3Uo-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                      </div>
                      <div class="tourhp-card-text">
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-3"></span>
                        </div>
                        <h3><a href="tour-single.php">Undiscovered Gems</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, tempora! Quaerat autem
                          ipsa deserunt officia.</p>
                        <div class="tourhp-card-footer">
                          <div class="trip-date">
                            <i class="fa fa-calendar-alt"></i>
                            <span>Availability</span>
                            <strong>Aug 20</strong>
                          </div>
                          <div class="trip-duration">
                            <span class="trip-duration-day"><i class="fa fa-sun"></i> 4 Days</span>
                            <span class="trip-duration-night"><i class="fa fa-moon"></i> 5 Nights</span
                              class="trip-duration-night">
                          </div>
                        </div>
                      </div>
                      <a href="#" class="tourhp-card-link"></a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="tourhp-col col-xl-3 col-lg-4 col-md-6">
                    <div class="tourhp-card tourhp-card-curve">
                      <div class="tourhp-card-tag tourhp-card-tag-2">
                        <span href="#">bestselling</span>
                      </div>
                      <div class="tourhp-card-img">
                        <a href="tour-single.php">
                          <img src="images/bikalpa-pokhrel-L4NA2qRqK0s-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                      </div>
                      <div class="tourhp-card-text">
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-1"></span>
                        </div>
                        <h3><a href="tour-single.php">The Pilgrim path</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, tempora! Quaerat autem
                          ipsa deserunt officia.</p>
                        <div class="tourhp-card-footer">
                          <div class="trip-date">
                            <i class="fa fa-calendar-alt"></i>
                            <span>Availability</span>
                            <strong>Mar 15</strong>
                          </div>
                          <div class="trip-duration">
                            <span class="trip-duration-day"><i class="fa fa-sun"></i> 12 Days</span>
                            <span class="trip-duration-night"><i class="fa fa-moon"></i> 11 Nights</span
                              class="trip-duration-night">
                          </div>
                        </div>
                      </div>
                      <a href="#" class="tourhp-card-link"></a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="tourhp-col col-xl-3 col-lg-4 col-md-6">
                    <div class="tourhp-card tourhp-card-curve">
                      <div class="tourhp-card-img">
                        <a href="tour-single.php">
                          <img src="images/dino-reichmuth-A5rCN8626Ck-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                      </div>
                      <div class="tourhp-card-text">
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-3"></span>
                        </div>
                        <h3><a href="tour-single.php">On the dusty road</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, tempora! Quaerat autem
                          ipsa deserunt officia.</p>
                        <div class="tourhp-card-footer">
                          <div class="trip-date">
                            <i class="fa fa-calendar-alt"></i>
                            <span>Availability</span>
                            <strong>Feb 04</strong>
                          </div>
                          <div class="trip-duration">
                            <span class="trip-duration-day"><i class="fa fa-sun"></i> 21 Days</span>
                            <span class="trip-duration-night"><i class="fa fa-moon"></i> 22 Nights</span
                              class="trip-duration-night">
                          </div>
                        </div>
                      </div>
                      <a href="#" class="tourhp-card-link"></a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="tourhp-col col-xl-3 col-lg-4 col-md-6">
                    <div class="tourhp-card tourhp-card-curve">
                      <div class="tourhp-card-tag tourhp-card-tag-1">
                        <span href="#">new</span>
                      </div>
                      <div class="tourhp-card-img">
                        <a href="tour-single.php">
                          <img src="images/weroad-GC07d6wHfts-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                      </div>
                      <div class="tourhp-card-text">
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-1"></span>
                        </div>
                        <h3><a href="tour-single.php">The Cultural Street</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, tempora! Quaerat autem
                          ipsa deserunt officia.</p>
                        <div class="tourhp-card-footer">
                          <div class="trip-date">
                            <i class="fa fa-calendar-alt"></i>
                            <span>Availability</span>
                            <strong>Feb 04</strong>
                          </div>
                          <div class="trip-duration">
                            <span class="trip-duration-day"><i class="fa fa-sun"></i> 02 Days</span>
                            <span class="trip-duration-night"><i class="fa fa-moon"></i> 03 Nights</span
                              class="trip-duration-night">
                          </div>
                        </div>
                      </div>
                      <a href="#" class="tourhp-card-link"></a>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="tourhp-col col-xl-3 col-lg-4 col-md-6">
                    <div class="tourhp-card tourhp-card-curve">
                      <div class="tourhp-card-img">
                        <a href="tour-single.php">
                          <img src="images/sebastian-pena-lambarri-Wj9ELwGXa6c-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                      </div>
                      <div class="tourhp-card-text">
                        <div class="star-rating">
                          <strong>Difficulty:</strong>
                          <span class="star-4"></span>
                        </div>
                        <h3><a href="tour-single.php">Way to the top</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, tempora! Quaerat autem
                          ipsa deserunt officia.</p>
                        <div class="tourhp-card-footer">
                          <div class="trip-date">
                            <i class="fa fa-calendar-alt"></i>
                            <span>Availability</span>
                            <strong>Sep 12</strong>
                          </div>
                          <div class="trip-duration">
                            <span class="trip-duration-day"><i class="fa fa-sun"></i> 07 Days</span>
                            <span class="trip-duration-night"><i class="fa fa-moon"></i> 08 Nights</span
                              class="trip-duration-night">
                          </div>
                        </div>
                      </div>
                      <a href="#" class="tourhp-card-link"></a>
                    </div>
                  </div>
                </div>
                <div class="tourhp-link text-center mt-5">
                  <a href="#" class="link-style-passby link-style-passby-alt">Show More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- section -->
      <section class="section section-newshp">
        <div class="container">
          <div class="section-inner">
            <div class="newshp">
              <div class="section-head text-center">
                <h2 class="heading">Our News / Events</h2>
                <div class="heading-after"></div>
              </div>
              <div class="section-body">
                <div class="newshp-slider owl-carousel owl-theme">
                  <!-- item -->
                  <div class="item">
                    <div class="blog-archive-card">
                      <div class="blog-archive-card-img">
                        <a href="blog-single.php">
                          <img src="images/sebastian-pena-lambarri-7ky9_t_mpRI-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                        <div class="blog-archive-card-date">
                          <span>22 Jan, 2020</span>
                        </div>
                      </div>
                      <div class="blog-archive-card-text">
                        <h3><a href="blog-single.php">Trip to the top</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam porro odio tempore quod
                          velit vitae id reprehenderit in? Inventore, beatae.</p>
                      </div>
                      <div class="blog-archive-card-footer">
                        <div class="blog-archive-card-author">
                          <span class="author"><i class="fa fa-user"></i>
                            Author: <a href="#">David Aergo</a></span>
                          <div class="blog-archive-card-category">
                            <div class="category">
                              <strong><i class="fa fa-folder"></i>
                                Category:</strong>
                              <span><a href="#">Travel</a></span>
                              <span><a href="#">Diary</a></span>
                              <span><a href="#">Trekking</a></span>
                              <span><a href="#">City</a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                    <div class="blog-archive-card">
                      <div class="blog-archive-card-img">
                        <a href="blog-single.php">
                          <img src="images/kalle-kortelainen-6F-uGWod7Xk-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                        <div class="blog-archive-card-date">
                          <span>16 July, 2020</span>
                        </div>
                      </div>
                      <div class="blog-archive-card-text">
                        <h3><a href="blog-single.php">Village Trip</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam porro odio tempore quod
                          velit vitae id reprehenderit in? Inventore, beatae.</p>
                      </div>
                      <div class="blog-archive-card-footer">
                        <div class="blog-archive-card-author">
                          <span class="author"><i class="fa fa-user"></i>
                            Author: <a href="#">David Aergo</a></span>
                          <div class="blog-archive-card-category">
                            <div class="category">
                              <strong><i class="fa fa-folder"></i>
                                Category:</strong>
                              <span><a href="#">Travel</a></span>
                              <span><a href="#">Diary</a></span>
                              <span><a href="#">Trekking</a></span>
                              <span><a href="#">City</a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                    <div class="blog-archive-card">
                      <div class="blog-archive-card-img">
                        <a href="blog-single.php">
                          <img src="images/binaya_photography-_Rdqpya1Fgc-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                        <div class="blog-archive-card-date">
                          <span>12 Aug, 2020</span>
                        </div>
                      </div>
                      <div class="blog-archive-card-text">
                        <h3><a href="blog-single.php">Cultural Day</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam porro odio tempore quod
                          velit vitae id reprehenderit in? Inventore, beatae.</p>
                      </div>
                      <div class="blog-archive-card-footer">
                        <div class="blog-archive-card-author">
                          <span class="author"><i class="fa fa-user"></i>
                            Author: <a href="#">David Aergo</a></span>
                          <div class="blog-archive-card-category">
                            <div class="category">
                              <strong><i class="fa fa-folder"></i>
                                Category:</strong>
                              <span><a href="#">Travel</a></span>
                              <span><a href="#">Diary</a></span>
                              <span><a href="#">Trekking</a></span>
                              <span><a href="#">City</a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                    <div class="blog-archive-card">
                      <div class="blog-archive-card-img">
                        <a href="blog-single.php">
                          <img src="images/toomas-tartes-u3aYUsaHT20-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                        <div class="blog-archive-card-date">
                          <span>04 Dec, 2020</span>
                        </div>
                      </div>
                      <div class="blog-archive-card-text">
                        <h3><a href="blog-single.php">Passing the bridge</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam porro odio tempore quod
                          velit vitae id reprehenderit in? Inventore, beatae.</p>
                      </div>
                      <div class="blog-archive-card-footer">
                        <div class="blog-archive-card-author">
                          <span class="author"><i class="fa fa-user"></i>
                            Author: <a href="#">David Aergo</a></span>
                          <div class="blog-archive-card-category">
                            <div class="category">
                              <strong><i class="fa fa-folder"></i>
                                Category:</strong>
                              <span><a href="#">Travel</a></span>
                              <span><a href="#">Diary</a></span>
                              <span><a href="#">Trekking</a></span>
                              <span><a href="#">City</a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- item -->
                  <div class="item">
                    <div class="blog-archive-card">
                      <div class="blog-archive-card-img">
                        <a href="blog-single.php">
                          <img src="images/tobias-federle-sQLT_6NZWBI-unsplash.jpg" alt="" class="imgtobg-img">
                        </a>
                        <div class="blog-archive-card-date">
                          <span>08 Apr, 2020</span>
                        </div>
                      </div>
                      <div class="blog-archive-card-text">
                        <h3><a href="blog-single.php">Boudha Trip</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam porro odio tempore quod
                          velit vitae id reprehenderit in? Inventore, beatae.</p>
                      </div>
                      <div class="blog-archive-card-footer">
                        <div class="blog-archive-card-author">
                          <span class="author"><i class="fa fa-user"></i>
                            Author: <a href="#">David Aergo</a></span>
                          <div class="blog-archive-card-category">
                            <div class="category">
                              <strong><i class="fa fa-folder"></i>
                                Category:</strong>
                              <span><a href="#">Travel</a></span>
                              <span><a href="#">Diary</a></span>
                              <span><a href="#">Trekking</a></span>
                              <span><a href="#">City</a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- section -->
      <section class="section section-newsletterhp">
        <div class="container">
          <div class="section-inner">
            <div class="newsletterhp">
              <div class="section-head text-center">
                <h2 class="heading">Email Us</h2>
                <div class="heading-after"></div>
              </div>
              <div class="section-body">
                <p>Send us a message for any enquiry or just to set up a appointment.</p>
                <form class="newsletterhp-form" action="./contact.php" method="get">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="formfield">
                        <input type="text" name="frmNewsEmail" placeholder="Your email address">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="formfield formfield-submit">
                        <input type="submit" value="Continue">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- section -->
      <section class="section section-bloghp">
        <div class="container">
          <div class="section-inner">
            <div class="bloghp">
              <div class="section-head text-center">
                <h2 class="heading">Blog</h2>
                <div class="heading-after"></div>
              </div>
              <div class="section-body">
                <div class="bloghp-row row">
                  <!-- col -->
                  <div class="bloghp-col col-lg-4 col-md-6">
                    <div class="bloghp-row-inner row">
                      <!-- col -->
                      <div class="bloghp-col-inner bloghp-height-lg col-12">
                        <div class="bloghp-box">
                          <div class="bloghp-img">
                            <img src="images/simon-migaj-PKr_emwn3Uo-unsplash.jpg" alt="" class="imgtobg-img">
                          </div>
                          <div class="bloghp-front">
                            <div class="bloghp-tag">
                              <span>Nepal</span>
                            </div>
                            <div class="bloghp-text">
                              <div class="bloghp-title">
                                <h3>Climbing the steps to the dream pond</h3>
                              </div>
                              <div class="bloghp-paragraph">
                                <p data-maxlength="130">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  Necessitatibus aliquam ducimus quam expedita iste non.</p>
                              </div>
                            </div>
                          </div>
                          <a href="blog-single.php" class="bloghp-link"></a>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="bloghp-col-inner bloghp-height-sm col-12">
                        <div class="bloghp-box">
                          <div class="bloghp-img">
                            <img src="images/sergey-pesterev-_VqyrvQi6do-unsplash.jpg" alt="" class="imgtobg-img">
                          </div>
                          <div class="bloghp-front">
                            <div class="bloghp-tag">
                              <span>Dubai</span>
                            </div>
                            <div class="bloghp-text">
                              <div class="bloghp-title">
                                <h3>Crossing the desert</h3>
                              </div>
                              <div class="bloghp-paragraph">
                                <p data-maxlength="130">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  Necessitatibus aliquam ducimus quam expedita iste non.</p>
                              </div>
                            </div>
                          </div>
                          <a href="blog-single.php" class="bloghp-link"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="bloghp-col col-lg-4 col-md-6">
                    <div class="bloghp-row-inner row">
                      <!-- col -->
                      <div class="bloghp-col-inner bloghp-height-sm col-12">
                        <div class="bloghp-box">
                          <div class="bloghp-img">
                            <img src="images/rebe-adelaida-zunQwMy5B6M-unsplash.jpg" alt="" class="imgtobg-img">
                          </div>
                          <div class="bloghp-front">
                            <div class="bloghp-tag">
                              <span>Venice</span>
                            </div>
                            <div class="bloghp-text">
                              <div class="bloghp-title">
                                <h3>Visiting the water city</h3>
                              </div>
                              <div class="bloghp-paragraph">
                                <p data-maxlength="130">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  Necessitatibus aliquam ducimus quam expedita iste non.</p>
                              </div>
                            </div>
                          </div>
                          <a href="blog-single.php" class="bloghp-link"></a>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="bloghp-col-inner bloghp-height-lg col-12">
                        <div class="bloghp-box">
                          <div class="bloghp-img">
                            <img src="images/tom-barrett-M0AWNxnLaMw-unsplash.jpg" alt="" class="imgtobg-img">
                          </div>
                          <div class="bloghp-tag">
                            <span>Country</span>
                          </div>
                          <div class="bloghp-front">
                            <div class="bloghp-text">
                              <div class="bloghp-title">
                                <h3>Flying gets easier</h3>
                              </div>
                              <div class="bloghp-paragraph">
                                <p data-maxlength="130">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  Necessitatibus aliquam ducimus quam expedita iste non.</p>
                              </div>
                            </div>
                          </div>
                          <a href="blog-single.php" class="bloghp-link"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="bloghp-col col-lg-4">
                    <div class="bloghp-row-inner row">
                      <!-- col -->
                      <div class="bloghp-col-inner bloghp-height-lg col-12">
                        <div class="bloghp-box">
                          <div class="bloghp-img">
                            <img src="images/julian-paul-MxMpW8VUE3E-unsplash.jpg" alt="" class="imgtobg-img">
                          </div>
                          <div class="bloghp-front">
                            <div class="bloghp-tag">
                              <span>Nepal</span>
                            </div>
                            <div class="bloghp-text">
                              <div class="bloghp-title">
                                <h3>The Cave Adventure</h3>
                              </div>
                              <div class="bloghp-paragraph">
                                <p data-maxlength="130">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  Necessitatibus aliquam ducimus quam expedita iste non.</p>
                              </div>
                            </div>
                          </div>
                          <a href="blog-single.php" class="bloghp-link"></a>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="bloghp-col-inner bloghp-height-sm col-12">
                        <div class="bloghp-box">
                          <div class="bloghp-img">
                            <img src="images/element5-digital-uE2T1tCFsn8-unsplash.jpg" alt="" class="imgtobg-img">
                          </div>
                          <div class="bloghp-front">
                            <div class="bloghp-tag">
                              <span>Nepal</span>
                            </div>
                            <div class="bloghp-text">
                              <div class="bloghp-title">
                                <h3>Navigating the roughs</h3>
                              </div>
                              <div class="bloghp-paragraph">
                                <p data-maxlength="130">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  Necessitatibus aliquam ducimus quam expedita iste non.</p>
                              </div>
                            </div>
                          </div>
                          <a href="blog-single.php" class="bloghp-link"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    </div>

    <?php include('inc/footer.html') ?>
  </div>

  <?php include('inc/js.html') ?>

</body>

</html>