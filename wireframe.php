<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Foundation</title>
    <link rel="stylesheet" href="css/uthsc.css"/>
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>

<!--
1. Left Off Canvas Menu
1. Right Off Canvas Menu
1. Mobile Navigation Menu
1. Header
   a. Top Bar Navigation
   a. Banner
1. Bread Crumbs
1. Main Navigation
1. Emergency Alert Box
1. Hero Image
1. Page Heading
1. Content Row 1
1. Content Row 2
1. Content Row 3
1. Top Footer
1. Bottom Footer
-->

<!-- Left Off Canvas Menu -->
<nav class="offcanvas-nav menu push-menu-left">
    <ul>
        <li><button class="close-menu">&larr; Close</button></li>
        <li><a href="#">Broccoli</a></li>
        <li><a href="#">Tomato</a></li>
        <li><a href="#">Cucumber</a></li>
        <li><a href="#">Kale</a></li>
        <li><a href="#">Celery</a></li>
        <li><a href="#">CucumberCucu mberCucumbe rCucumber CucumberCucumber</a></li>
        <li><a href="#">Kale</a></li>
        <li><a href="#">Celery</a></li>

    </ul>
</nav>

<!-- Right Off Canvas Menu -->
<nav class="offcanvas-nav menu push-menu-right">

    <input type="text" placeholder="Search">

    <ul>
        <li><button class="close-menu">Close &rarr;</button></li>
        <li><a href="#">Broccoli</a></li>
        <li><a href="#">Tomato</a></li>
        <li><a href="#">Cucumber</a></li>
        <li><a href="#">Kale</a></li>
        <li><a href="#">Celery</a></li>
        <li><a href="#">Broccoli</a></li>
        <li><a href="#">Tomato</a></li>
        <li><a href="#">Cucumber</a></li>
        <li><a href="#">Kale</a></li>
        <li><a href="#">Celery</a></li>
        <li><a href="#">Broccoli</a></li>
        <li><a href="#">Tomato</a></li>
        <li><a href="#">Cucumber</a></li>
        <li><a href="#">Kale</a></li>
        <li><a href="#">Celery</a></li>
        <li><a href="#">Broccoli</a></li>
        <li><a href="#">Tomato</a></li>
        <li><a href="#">Cucumber</a></li>
        <li><a href="#">Kale</a></li>
        <li><a href="#">Celery</a></li>
    </ul>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
        explicabo.</p>
</nav>

<!--Off Canvas Wrapper-->
<div id="wrapper">

<!--Mobile Navigation Menu-->
<div  id="mobile-navigation" class="hide-for-large-up">
    <button class="nav-toggler toggle-push-left left">1</button>
    <button class="nav-toggler toggle-push-right right">2</button>

    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')) {
        ?>
        <div class="bottom-nav-bar">&copy UTHSC 2014</div>
        <?php
    }
    ?>
</div>

<!--Header-->
<header id="uthsc-header">

    <!--Top Bar Navigation-->
    <nav class="top-bar show-for-large-up" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name"></li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <!-- Left Top Bar Section -->
        <section class="top-bar-section left">
            <ul>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>

            </ul>
        </section>

        <!-- Right Top Bar Section -->
        <section class="top-bar-section right">

            <ul>
                <li class="has-form">
                    <input type="text" placeholder="Search">
                </li>
            </ul>
        </section>
    </nav>

    <!--Banner-->
    <div class="row">
        <div class="large-12 columns">
            <h1 title="UTHSC"><img src="images/uthsc-wordmark.svg" /></h1>
        </div>
    </div>
</header>

<!--Breadcrumbs-->
<nav role="navigation" id="breadcrumbs" class="show-for-large-up">
    <div class="row">
        <div class="columns">
            <!--<p id="breadcrumblabel">You are here:</p>-->
            <ol aria-labelledby="breadcrumblabel">
                <li><a href="index.html" title="Home">Section</a></li>
                <li><a href="products.html" title="Products">Page Parent</a></li>
                <li><a href="" class="current">Page Title</a></li>
            </ol>
        </div>
    </div>
</nav>

<!--Main Navigation-->
<nav role="navigation" id="uthsc-navigation-alt" class="show-for-large-up">
    <ul class="row collapse" data-equalizer data-uthscequalizer>

        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Biomedical Education</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
            </ul>
        </li>

        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Molecular Sciences</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
            </ul>
        </li>

        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Faculty & Staff</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First link in dropdown link in dropdow link in dropdow</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
            </ul>
        </li>

        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Neuro Scientific</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
            </ul>
        </li>

        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Dropdown 5</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
            </ul>
        </li>

        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Dropdown 6</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!--Emergency Alert Box-->
<!--<div data-alert class="emergency-alert alert-box info">
    <div class="row">
        <div class="columns">
            <h4>Emergency Alert</h4>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
    </div>
    <a href="#" class="close">&times;</a>
</div>-->

<!--Hero Image-->
<div class="hero">
    <img src="images/city.jpg"/>
</div>

<!--Page Heading-->
<div class="row">
    <div class="large-12 columns">
        <h2>Page Title</h2>
    </div>
</div>

<!--Content Row 1-->
<div class="row">
    <div class="large-12 columns">
        <div class="panel">

            <h3>Content Row 1 </h3>

            <p>This is a full width row with a panel in it. </p>

            <p>Thanks to <a href="http://fortawesome.github.io/Font-Awesome/">Fontawesome <i class="fa fa-flag"></i></a>
                we can use these handy icons anywhere. Here's an example of a <a href="">pdf link <i
                        class="fa fa-file-pdf-o"></i></a>. Sed ut perspiciatis unde omnis iste natus error sit
                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                veritatis et quasi architecto beatae</p>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

        </div>
    </div>
</div>

<!--Content Row 2-->
<div class="row">
    <div class="large-4 columns">
        <h3>Content Row 2</h3>
        <h5>One Third</h5>

        <p><strong>This is a three column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
            odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        <a href="#" class="button radius">Apply Now <i class="fa fa-graduation-cap"></i></a>
    </div>

    <div class="large-4 columns">
        <h3>Content Row 2</h3>
        <h5>One Third</h5>

        <p><strong>This is a three column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
            odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        <a href="#" class="button radius">Academic Calendar <i class="fa fa-calendar"></i></a>
    </div>

    <div class="large-4 columns">
        <h3>Content Row 2</h3>
        <h5>One Third</h5>

        <p><strong>This is a three column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
            odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        <a href="#" class="button radius">Get Directions <i class="fa fa-map-marker"></i></a>
    </div>
</div>

<!--Content Row 3-->
<div class="row">
    <div class="large-4 columns">
        <h3>Content Row 3</h3>
        <h5>One Third</h5>

        <p><strong>This is a two column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
            odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
    </div>

    <div class="large-8 columns">
        <h3>Content Row 3</h3>
        <h5>Two Thirds</h5>

        <div class="left">
            <img src="images/bridge.jpg"/>
        </div>

        <p><strong>This is a two column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
            odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
    </div>
</div>

<!--Top Footer-->
<div class="uthsc-footer-top">
    <div class="row">
        <div class="medium-4 columns">
            <h4>Contact Us</h4>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.</p>
        </div>
        <div class="medium-4 columns">
            <h4>Links</h4>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.</p>
        </div>
        <div class="medium-4 columns">
            <h4>Emergency</h4>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.</p>
        </div>
    </div>
</div>

<!--Bottom Footer-->
<div class="uthsc-footer-bottom">
    <div class="row">
        <div class="medium-4 columns">
            <h4>Footer</h4>
        </div>
    </div>
</div>

</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="js/uthsc.foundation.min.js"></script>
<script src="js/app.js"></script>
<!-- js -->
<script src="js/uthsc.min.js"></script>
</body>
</html>
