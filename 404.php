    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <?php include('inc/css.html') ?>

        <title>404 - Page not found</title>
        <!-- Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
        <!-- Icon -->
    </head>

    <body class="page page-error404">
        <div class="sitewrapper">
            <?php include('inc/header.html') ?>

            <?php $pagename = '404 Page not found error'; ?>
            <?php include('inc/page-header.html') ?>

            <div class="sitecontent">
                
            <!-- section -->
<section class="section section-error404">
    <div class="container">
        <div class="section-inner">
            <div class="error404">
                <div class="error404-bg">
                    <img src="images/404.jpg" alt="" class="imgtobg-img">
                </div>
                <div class="error404-content">
                    <h2>404</h2>
                    <p>Whoops...</p>
                    <p>Looks like the page was lost.</p>
                    <a href="javascript:history.go(-1)" class="link-style-passby">Go Back <i class="fa fa-angle-right"></i></a>
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