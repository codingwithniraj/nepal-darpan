    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <?php include('inc/css.html') ?>

        <title>Gallery</title>
        <!-- Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
        <!-- Icon -->
    </head>

    <body class="page page-gallery">
        <div class="sitewrapper">
            <?php include('inc/header.html') ?>

            <?php $pagename = 'Gallery'; ?>
            <?php $pageimg = 'images/sergey-pesterev-dstd4DoLQ90-unsplash.jpg'; ?>
            <?php include('inc/page-header.html') ?>

            <div class="sitecontent">

                <!-- section -->
                <section class="section section-gallery">
                    <div class="container">
                        <div class="section-inner">
                            <div class="gallery">
                                <div class="my-gallery gallery-row grid row" itemscope>
                                    <?php 
                                    $files = glob("./images/gallery/*.*");

                                    for ($col=1; $col<=count($files)-1; $col++) {
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
                                <div class="gallery-pagination">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- pswp viewer divs -->
                <?php include('inc/pswp-viewer.html') ?>
                

            </div>

            <?php include('inc/footer.html') ?>
        </div>

        <?php include('inc/js.html') ?>

    </body>

    </html>