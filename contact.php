<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <?php include('inc/css.html') ?>

    <title>Contact Us</title>
    <!-- Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <!-- Icon -->
</head>

<body class="page page-contact">
    <div class="sitewrapper">
        <?php include('inc/header.html') ?>

        <?php $pagename = 'Contact Us'; ?>
        <?php $pageimg = 'images/coffee-contact-email-hands-4831.jpg'; ?>
        <?php include('inc/page-header.html') ?>

        <div class="sitecontent">
            <!-- section about -->
            <section class="section section-contact">
                <div class="container">
                    <div class="section-inner">
                        <div class="contact">
                            <div class="section-head text-center">
                                <h3 class="heading-mini">Get In Touch</h3>
                                <h2 class="heading">Do You Have Any Questions?</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, commodi!
                                </p>
                            </div>
                            <div class="section-body">
                                <div class="contact-row row">
                                    <!-- col -->
                                    <div class="contact-col contact-col-cont col-xl-4">


                                        <div class="contact-info">
                                            <!-- info box -->
                                            <div class="contact-info-box">
                                                <img src="images/icons/001-phone.png" alt="">
                                                <strong>Call Us @</strong>
                                                <span><a href="tel:+977-9840501234">+977-9840501234</a></span>
                                            </div>
                                            <!-- info box -->
                                            <div class="contact-info-box">
                                                <img src="images/icons/002-message.png" alt="">
                                                <strong>Email Us</strong>
                                                <span><a
                                                        href="mailto:nepaldraphan@gmail.com">nepaldraphan@gmail.com</a></span>
                                            </div>
                                            <!-- info box -->
                                            <div class="contact-info-box">
                                                <img src="images/icons/pin.png" alt="">
                                                <strong>Find Us</strong>
                                                <span>Thamel-Kathmandu, Nepal</span>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- col -->
                                    <div class="contact-col contact-col-form col-xl-8">
                                        <form action="./php/contact-form.php" class="contact-main-form">
                                            <div class="row">
                                                <div class="formfield col-12">
                                                    <label for="">Name</label>
                                                    <input type="text" name="frmName" placeholder="Your Name"
                                                        required />
                                                </div>
                                                <div class="formfield col-sm-6">
                                                    <label for="">Phone</label>
                                                    <input type="tel" name="frmPhone" placeholder="Your Phone Number"
                                                        required />
                                                </div>
                                                <div class="formfield col-sm-6">
                                                    <label for="">Email</label>
                                                    <input type="email" name="frmEmail" placeholder="Your Email Address" value="<?php
                                                        if(isset($_GET['frmNewsEmail'])) {
                                                            echo $_GET['frmNewsEmail'];
                                                        }
                                                    ?>"  required />
                                                </div>
                                                <div class="formfield col-12">
                                                    <label for="">Message</label>
                                                    <textarea name="frmMessage" placeholder="Detail Explanation"
                                                        required></textarea>
                                                </div>
                                                <div class="formfield formfield-submit col-12">
                                                    <input type="submit" value="Submit" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-contact-map">
                <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7064.147531564848!2d85.30789372536051!3d27.715008631154845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fcb77fd4bd%3A0x58099b1deffed8d4!2sThamel%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1580120308228!5m2!1sen!2snp" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </section>
        </div>

        <?php include('inc/footer.html') ?>
    </div>

    <?php include('inc/js.html') ?>

</body>

</html>