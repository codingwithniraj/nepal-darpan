    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <?php include('inc/css.html') ?>

        <title>Tour Single</title>
        <!-- Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
        <!-- Icon -->
    </head>

    <body class="page page-itenary" data-spy="scroll" data-target="#articleLink" data-offset="200">
        <div class="sitewrapper">
            <?php include('inc/header.html') ?>

            <?php $pagename = 'Exciting Retreat by the pond'; ?>
            <?php $pageimg = 'images/samuele-errico-piccarini-MCroQe9ykmM-unsplash.jpg'; ?>
            <?php include('inc/page-header-single.html') ?>

            <div class="sitecontent">

                <!-- section -->
                <section class="section section-itenary">
                    <div class="container">
                        <div class="section-inner">
                            <div class="itenary">
                                <div class="itenary-row-outer row">
                                    <!-- col -->
                                    <div class="itenary-col-outer itenary-col-main col-lg-9">
                                        <article class="itenary-article-cover">
                                            <nav class="itenary-article-nav dis-md" id="articleLink">
                                                <ul class="itenary-article-nav-list">
                                                    <li class="nav-item">
                                                        <a class="nav-link page-scroll active"
                                                            href="#articleInformation"><i class="fa fa-file-alt"></i>
                                                            Information</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link page-scroll" href="#articleTourplan"><i
                                                                class="fa fa-list-ul"></i> Tour Plan</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link page-scroll" href="#articleFaqs"><i
                                                                class="fa fa-info-circle"></i> FAQ's</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link page-scroll" href="#articleLocation"><i
                                                                class="fa fa-map-marker-alt"></i> Location</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link page-scroll" href="#articleGallery"><i
                                                                class="fa fa-images"></i> Gallery</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link page-scroll" href="#articleSpecialnotes"><i
                                                                class="fa fa-comment"></i> Special Notes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link page-scroll" href="#articleBooking"><i
                                                                class="fa fa-bookmark"></i> Booking</a>
                                                    </li>

                                                </ul>
                                            </nav>
                                            <div class="itenary-article-list">
                                                <!-- article -->
                                                <div class="itenary-article" id="articleInformation">
                                                    <h2 class="heading-page">Exciting retreat by the pond</h2>
                                                    <!-- <div class="heading-separator"></div> -->
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Excepturi aperiam quia velit minima labore praesentium
                                                        temporibus porro numquam quae quam.</p>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque
                                                        mollitia iure a! Quia quas nulla nihil, maiores labore iusto
                                                        atque tempora fugiat ratione? Illo vero hic iste incidunt
                                                        voluptates itaque blanditiis dolorem natus eum? Asperiores aut
                                                        molestiae qui fugiat unde.</p>

                                                    <table class="itenary-article-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Trip Profile</th>
                                                                <th>Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><i class="fa fa-clock"></i> Duration</td>
                                                                <td>15 Days</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-user"></i> Difficulty</td>
                                                                <td>
                                                                    <div class="star-rating">
                                                                        <span class="star-4"></span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-sort-amount-up"></i> Maximum
                                                                    Elevation</td>
                                                                <td>4000M</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-sun"></i> Seasons</td>
                                                                <td>All Year, Summer, Autumn, Spring</td>
                                                            </tr>
                                                            <tr>
                                                                <td><i class="fa fa-road"></i> Route</td>
                                                                <td>Kathmandu</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- article -->
                                                <div class="itenary-article" id="articleTourplan">
                                                    <h2 class="heading-page">Tour Plan</h2>
                                                    <div class="itenary-article-plan-cover">
                                                        <div class="itenary-article-plan">
                                                            <span class="itenary-article-plan-num">1</span>
                                                            <h3 class="heading-mini">Day 1: Arrival at Kathmandu</h3>
                                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                                Voluptate consequatur quam eveniet deleniti quo mollitia
                                                                minus at a excepturi aliquid!</p>
                                                            <ul class="list-content">
                                                                <li>List about something</li>
                                                                <li>must be very important</li>
                                                                <li>though don't remember what it is</li>
                                                                <li>thus this list</li>
                                                                <li>just to fill up space</li>
                                                            </ul>
                                                        </div>
                                                        <div class="itenary-article-plan">
                                                            <span class="itenary-article-plan-num">2</span>
                                                            <h3 class="heading-mini">Day 2: Go Somewhere</h3>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Magni, voluptas minus, amet commodi maxime officia eaque
                                                                laborum eos tempora quae nobis, similique esse? Id
                                                                repellat incidunt sunt impedit nemo neque rem quasi vel
                                                                soluta quae, reiciendis ullam sequi nihil voluptates
                                                                quidem laborum inventore, harum qui consectetur quas
                                                                sint nostrum. Labore.</p>
                                                        </div>
                                                        <div class="itenary-article-plan">
                                                            <span class="itenary-article-plan-num">3</span>
                                                            <h3 class="heading-mini">Day 3: Do Something</h3>
                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Voluptates mollitia dicta qui architecto, labore
                                                                molestiae minima doloribus, aspernatur sapiente
                                                                veritatis a, quis dolorum iusto voluptatum distinctio
                                                                non modi accusantium cum vitae debitis temporibus unde!
                                                                Totam assumenda modi dolores quo sit dolorem odit vel
                                                                exercitationem.</p>
                                                        </div>
                                                        <div class="itenary-article-plan">
                                                            <span class="itenary-article-plan-num">4</span>
                                                            <h3 class="heading-mini">Day 4: Have Fun</h3>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Magni, voluptas minus, amet commodi maxime officia eaque
                                                                laborum eos tempora quae nobis, similique esse? Id
                                                                repellat incidunt sunt impedit nemo neque rem quasi vel
                                                                soluta quae, reiciendis ullam sequi nihil voluptates
                                                                quidem laborum inventore, harum qui consectetur quas
                                                                sint nostrum. Labore.</p>
                                                        </div>
                                                        <div class="itenary-article-plan">
                                                            <span class="itenary-article-plan-num">5</span>
                                                            <h3 class="heading-mini">Day 5: Get Ready to Pack</h3>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Magni, voluptas minus, amet commodi maxime officia eaque
                                                                laborum eos tempora quae nobis, similique esse? Id
                                                                repellat incidunt sunt impedit nemo neque rem quasi vel
                                                                soluta quae, reiciendis ullam sequi nihil voluptates
                                                                quidem laborum inventore, harum qui consectetur quas
                                                                sint nostrum. Labore.</p>
                                                        </div>
                                                        <div class="itenary-article-plan">
                                                            <span class="itenary-article-plan-num">6</span>
                                                            <h3 class="heading-mini">Day 6: Back To Airport</h3>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Magni, voluptas minus, amet commodi maxime officia eaque
                                                                laborum eos tempora quae nobis, similique esse? Id
                                                                repellat incidunt sunt impedit nemo neque rem quasi vel
                                                                soluta quae, reiciendis ullam sequi nihil voluptates
                                                                quidem laborum inventore, harum qui consectetur quas
                                                                sint nostrum. Labore.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- article -->
                                                <div class="itenary-article" id="articleFaqs">
                                                    <h2 class="heading-page">Frequently Asked Questions</h2>
                                                    <div class="itenary-article-faqs">
                                                        <div id="accordion">
                                                            <div class="card">
                                                                <div class="card-header" id="heading1">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapse1"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapse1">
                                                                            Did you know about this?
                                                                        </button>
                                                                    </h5>
                                                                </div>

                                                                <div id="collapse1" class="collapse show"
                                                                    aria-labelledby="heading1">
                                                                    <div class="card-body">
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                                        put a bird on it squid single-origin coffee
                                                                        nulla assumenda shoreditch et. Nihil anim
                                                                        keffiyeh helvetica, craft beer labore wes
                                                                        anderson cred nesciunt sapiente ea proident. Ad
                                                                        vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim
                                                                        aesthetic synth nesciunt you probably haven't
                                                                        heard of them accusamus labore sustainable VHS.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="heading2">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapse2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse2">
                                                                            Obviously you would not know right?
                                                                        </button>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapse2" class="collapse show"
                                                                    aria-labelledby="heading2">
                                                                    <div class="card-body">
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                                        put a bird on it squid single-origin coffee
                                                                        nulla assumenda shoreditch et. Nihil anim
                                                                        keffiyeh helvetica, craft beer labore wes
                                                                        anderson cred nesciunt sapiente ea proident. Ad
                                                                        vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim
                                                                        aesthetic synth nesciunt you probably haven't
                                                                        heard of them accusamus labore sustainable VHS.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="heading3">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapse3"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse3">
                                                                            Why else would you be reading this then?
                                                                        </button>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapse3" class="collapse show"
                                                                    aria-labelledby="heading3">
                                                                    <div class="card-body">
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                                        put a bird on it squid single-origin coffee
                                                                        nulla assumenda shoreditch et. Nihil anim
                                                                        keffiyeh helvetica, craft beer labore wes
                                                                        anderson cred nesciunt sapiente ea proident. Ad
                                                                        vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim
                                                                        aesthetic synth nesciunt you probably haven't
                                                                        heard of them accusamus labore sustainable VHS.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="heading4">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapse4"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse4">
                                                                            Unless you have nothing better to do.
                                                                        </button>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapse4" class="collapse show"
                                                                    aria-labelledby="heading4">
                                                                    <div class="card-body">
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                                        put a bird on it squid single-origin coffee
                                                                        nulla assumenda shoreditch et. Nihil anim
                                                                        keffiyeh helvetica, craft beer labore wes
                                                                        anderson cred nesciunt sapiente ea proident. Ad
                                                                        vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim
                                                                        aesthetic synth nesciunt you probably haven't
                                                                        heard of them accusamus labore sustainable VHS.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="heading5">
                                                                    <h5 class="mb-0">
                                                                        <button class="btn btn-link"
                                                                            data-toggle="collapse"
                                                                            data-target="#collapse5"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse5">
                                                                            Than stare at these texts that don't mean
                                                                            anything.
                                                                        </button>
                                                                    </h5>
                                                                </div>
                                                                <div id="collapse5" class="collapse show"
                                                                    aria-labelledby="heading5">
                                                                    <div class="card-body">
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                                        put a bird on it squid single-origin coffee
                                                                        nulla assumenda shoreditch et. Nihil anim
                                                                        keffiyeh helvetica, craft beer labore wes
                                                                        anderson cred nesciunt sapiente ea proident. Ad
                                                                        vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim
                                                                        aesthetic synth nesciunt you probably haven't
                                                                        heard of them accusamus labore sustainable VHS.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- article -->
                                                <div class="itenary-article" id="articleLocation">
                                                    <h2 class="heading-page">Tour Location</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                                                        laboriosam, autem minus a ullam, optio nulla magnam, cumque
                                                        quisquam ducimus fugit. Rem cupiditate quasi voluptates, enim
                                                        aperiam nam cumque. Animi.</p>
                                                    <div class="itenary-article-map">
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7064.147531564848!2d85.30789372536051!3d27.715008631154845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcb77fd4bd%3A0x58099b1deffed8d4!2sThamel%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1580367723880!5m2!1sen!2snp"
                                                            frameborder="0" allowfullscreen=""></iframe>
                                                    </div>
                                                </div>
                                                <!-- article -->
                                                <div class="itenary-article" id="articleGallery">
                                                    <h2 class="heading-page">Our Gallery</h2>
                                                    <div class="itenary-article-gallery d-none">
                                                        <div
                                                            class="itenary-article-gallery-slider owl-carousel owl-theme">
                                                            <div class="item">
                                                                <div class="itenary-article-gallery-img">
                                                                    <img src="images/binaya_photography-_Rdqpya1Fgc-unsplash.jpg"
                                                                        alt="" class="imgtobg-img">
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="itenary-article-gallery-img">
                                                                    <img src="images/kalle-kortelainen-6F-uGWod7Xk-unsplash.jpg"
                                                                        alt="" class="imgtobg-img">
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="itenary-article-gallery-img">
                                                                    <img src="images/patrik-michalicka-oaJyBg2WKDE-unsplash.jpg"
                                                                        alt="" class="imgtobg-img">
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="itenary-article-gallery-img">
                                                                    <img src="images/samuele-errico-piccarini-MCroQe9ykmM-unsplash.jpg"
                                                                        alt="" class="imgtobg-img">
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="itenary-article-gallery-img">
                                                                    <img src="images/tim-van-kempen-mpYKQK3GzSE-unsplash.jpg"
                                                                        alt="" class="imgtobg-img">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="owl-theme">
                                                            <div class="owl-controls">
                                                                <div class="custom-nav owl-nav"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gallery">
                                                        <div class="my-gallery gallery-row grid row" itemscope>
                                                            <?php 
                                                        $files = glob("./images/gallery/*.*");
                    
                                                        for ($col=1; $col<=12; $col++) {
                                                            echo "<figure class='gallery-col grid-item col-lg-3 col-md-4 col-6' itemprop='galleryimg' itemscope> \n";
                    
                                                            $getfile = $files[$col];
                                                            $size = getimagesize($getfile);
                                                            
                                                            echo "<a href=$getfile itemprop='contentUrl' data-size=$size[0]x$size[1]>";
                                                            echo "<img src=$getfile data-size=$size[0]x$size[1] class='imgtobg-img'> ";
                                                            echo "</a>";
                                                            echo "<figcaption itemprop='caption description'>Image Caption / Description</figcaption>";
                                                            
                                                            echo "</figure>";
                                                        }
                                                    // echo "</div>";
                                                    ?>
                                                        </div>
                                                    </div>
                                                    <?php include('inc/pswp-viewer.html') ?>
                                                </div>
                                                <!-- article -->
                                                <div class="itenary-article" id="articleSpecialnotes">
                                                    <h2 class="heading-page">Special notes</h2>
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                        Ratione, eos? Cupiditate maiores qui tempora laudantium quisquam
                                                        obcaecati, natus officia modi!</p>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quos
                                                        quidem esse unde iure id, optio cupiditate quaerat quae error
                                                        doloremque debitis iusto molestiae, ipsa numquam accusamus?
                                                        Consequatur, modi. Quisquam, placeat! Modi aperiam reiciendis
                                                        fugiat inventore tempora dolor voluptate voluptatum?</p>
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia
                                                        quae tenetur eligendi dolorum quibusdam doloribus magnam commodi
                                                        ea corporis dignissimos.</p>
                                                </div>
                                                <!-- article -->
                                                <div class="itenary-article" id="articleBooking">
                                                    <h2 class="heading-page">Trip Booking</h2>
                                                    <p> This is a pre-booking form for the lead traveler. We would send
                                                        you the actual booking form after the confirmation.</p>
                                                    <div class="itenary-article-form-wrap">
                                                        <form action="" id="bookingForm" class="itenary-article-form">
                                                            <h3 class="heading-bold">Personal Information</h3>
                                                            <div class="row">
                                                                <div class="formfield col-md-6">
                                                                    <label for="frmName">Full Name</label>
                                                                    <input type="text" name="frmName" id="frmName"
                                                                        placeholder="Full Name" required>
                                                                </div>
                                                                <div class="formfield col-md-6">
                                                                    <label for="frmEmail">Email Address</label>
                                                                    <input type="email" name="frmEmail" id="frmEmail"
                                                                        placeholder="Email Address" required>
                                                                </div>
                                                                <div class="formfield col-md-6">
                                                                    <label for="frmPhone">Phone Number</label>
                                                                    <input type="tel" name="frmPhone" id="frmPhone"
                                                                        placeholder="Phone Number" required>
                                                                </div>
                                                                <div class="formfield col-md-6">
                                                                    <label for="frmStreetAddress">Street Address</label>
                                                                    <input type="text" name="frmStreetAddress"
                                                                        id="frmStreetAddress"
                                                                        placeholder="Street Address">
                                                                </div>
                                                                <div class="formfield col-md-6">
                                                                    <label for="frmCity">City</label>
                                                                    <input type="text" name="frmCity" id="frmCity"
                                                                        placeholder="City" required>
                                                                </div>
                                                                <div class="formfield col-md-6">
                                                                    <label for="frmCountry">Country</label>
                                                                    <select class="select-js" name="frmCountry"
                                                                        id="frmCountry" required>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa
                                                                        </option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia
                                                                            and Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso
                                                                        </option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands
                                                                        </option>
                                                                        <option value="Central African Republic">Central
                                                                            African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option
                                                                            value="Congo, Democratic Republic of the">
                                                                            Congo, Democratic Republic of the</option>
                                                                        <option value="Congo, Republic of the">Congo,
                                                                            Republic of the</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Côte d'Ivoire">Côte d'Ivoire
                                                                        </option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaçao">Curaçao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic
                                                                        </option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial
                                                                            Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Faroe Islands">Faroe Islands
                                                                        </option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Polynesia">French
                                                                            Polynesia</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-Bissau">Guinea-Bissau
                                                                        </option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="North Korea">North Korea</option>
                                                                        <option value="South Korea">South Korea</option>
                                                                        <option value="Kosovo">Kosovo</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein
                                                                        </option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall
                                                                            Islands</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia">Micronesia</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montenegro">Montenegro</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherlands">Netherlands</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Northern Mariana Islands">
                                                                            Northern Mariana Islands</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Palestine, State of">Palestine,
                                                                            State of</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New
                                                                            Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Kitts and Nevis">Saint
                                                                            Kitts and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option
                                                                            value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent and the Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome
                                                                            and Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia
                                                                        </option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone
                                                                        </option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Sint Maarten">Sint Maarten
                                                                        </option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands
                                                                        </option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa
                                                                        </option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Sudan, South">Sudan, South
                                                                        </option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan
                                                                        </option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab
                                                                            Emirates</option>
                                                                        <option value="United Kingdom">United Kingdom
                                                                        </option>
                                                                        <option value="United States">United States
                                                                        </option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City">Vatican City
                                                                        </option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands, British">Virgin
                                                                            Islands, British</option>
                                                                        <option value="Virgin Islands, U.S.">Virgin
                                                                            Islands, U.S.</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h3 class="heading-bold">Number of Guests</h3>
                                                            <div class="row">
                                                                <div class="formfield col-md-6">
                                                                    <label for="frmNoAdult">No. of Adult
                                                                        Travellers</label>
                                                                    <input type="text" name="frmNoAdult" id="frmNoAdult"
                                                                        placeholder="No. of Adult Travellers" required>
                                                                </div>
                                                                <div class="formfield col-md-6">
                                                                    <label for="frmNoChild">No. of Child
                                                                        Travellers</label>
                                                                    <input type="text" name="frmNoChild" id="frmNoChild"
                                                                        placeholder="No. of Child Travellers">
                                                                </div>
                                                            </div>
                                                            <p>In order to complete the booking we require a bit more
                                                                information about each additional Guest.</p>
                                                            <div class="team-extra">
                                                                <div class="team-extra-head">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <label>Full Name</label>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <label>Email</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="team-extra-add">
                                                                        <span class="team-extra-add-btn">Add New
                                                                            Guest</span>
                                                                    </div>
                                                                </div>
                                                                <div class="team-extra-body">
                                                                    <div class="team-extra-list">
                                                                        <div class="row">
                                                                            <div class="formfield col-6">
                                                                                <input type="text"
                                                                                    name="frmExtraGuestsName[]">
                                                                            </div>
                                                                            <div class="formfield col-6">
                                                                                <input type="email"
                                                                                    name="frmExtraGuestsEmail[]">
                                                                            </div>
                                                                            <div class="team-extra-list-btn"
                                                                                data-toggle="tooltip"
                                                                                data-placement="bottom"
                                                                                title="Remove this section!"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h3 class="heading-bold">Additional Informations</h3>
                                                            <div class="row max-width--700">
                                                                <div class="formfield col-12">
                                                                    <label for="frmPassport">Passport Number</label>
                                                                    <input type="text" name="frmPassport"
                                                                        id="frmPassport" placeholder="Passport Number">
                                                                </div>
                                                                <div class="formfield col-12">
                                                                    <label for="frmHowFind">How did you find Nepal
                                                                        Darpan?</label>
                                                                    <select name="frmHowFind" id="frmHowFind"
                                                                        class="select-js">
                                                                        <option value="" selected disabled>How did you
                                                                            find Nepal Darpan?</option>
                                                                        <option value="Google Search">Google Search
                                                                        </option>
                                                                        <option value="Yahoo">Yahoo</option>
                                                                        <option value="Other Search Engine">Other Search
                                                                            Engine</option>
                                                                        <option value="Face-book">Face-book</option>
                                                                        <option value="Twitter">Twitter</option>
                                                                        <option value="Newsletter">Newsletter</option>
                                                                        <option value="Blog">Blog</option>
                                                                        <option value="I m a Previous Client">I&#39;m a
                                                                            Previous Client</option>
                                                                        <option value="Friend Recommendation">Friend
                                                                            Recommendation</option>
                                                                        <option value="Lonely planet">Lonely planet
                                                                        </option>
                                                                        <option value="Trip advisor">Trip advisor
                                                                        </option>
                                                                        <option value="Magazine Advertisement">Magazine
                                                                            Advertisement</option>
                                                                        <option value="Brochures/flyers">
                                                                            Brochures/flyers</option>
                                                                        <option value="I met you in Trade shows">I met
                                                                            you in Trade shows</option>
                                                                        <option value="I am your Trade partners">I am
                                                                            your Trade partners</option>
                                                                        <option value="Others">Others</option>
                                                                    </select>
                                                                </div>
                                                                <div class="formfield col-12">
                                                                    <label>Have you traveled this part of the world
                                                                        before?</label>
                                                                    <div class="form-radio">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="frmTravelPart" id="frmTravelPart1"
                                                                                value="Yes">
                                                                            <label class="form-check-label"
                                                                                for="frmTravelPart1">
                                                                                Yes
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="frmTravelPart" id="frmTravelPart2"
                                                                                value="No">
                                                                            <label class="form-check-label"
                                                                                for="frmTravelPart2">
                                                                                No
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="formfield col-12">
                                                                    <label>Insurance Policy</label>
                                                                    <div class="form-radio">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="frmInsurance" id="frmInsurance1"
                                                                                value="I Already Have One" required>
                                                                            <label class="form-check-label"
                                                                                for="frmInsurance1">
                                                                                I Already Have One
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="frmInsurance" id="frmInsurance2"
                                                                                value="I Will Provide Later" required>
                                                                            <label class="form-check-label"
                                                                                for="frmInsurance2">
                                                                                I Will Provide Later
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="formfield col-12">
                                                                    <label>TERMS OF USE</label>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="I have read and accepted
                                                                            the terms of use" id="frmTerms">
                                                                        <label for="frmTerms">I have read and accepted
                                                                            the <a href="#">terms of
                                                                                use</a></label>
                                                                    </div>
                                                                </div>
                                                                <div class="formfield col-12">
                                                                    <label for="frmComments">Comments/Questions</label>
                                                                    <textarea name="frmComments" id="frmComments"
                                                                        placeholder="Comments/Questions"></textarea>
                                                                </div>
                                                                <div class="formfield col-12">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="Subscribe me travel tips and deals"
                                                                            id="frmSubscribe">
                                                                        <label for="frmSubscribe">Subscribe me travel
                                                                            tips
                                                                            and deals</label>
                                                                    </div>
                                                                </div>
                                                                <div class="formfield col-12">
                                                                    <input type="submit" value="Submit" id="formSubmit">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- col -->
                                    <div class="itenary-col-outer itenary-col-side col-lg-3">
                                        <?php include('inc/sidebar-tour.html') ?>
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