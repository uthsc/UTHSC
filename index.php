<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Foundation</title>
    <link rel="stylesheet" href="css/uthsc.css"/>
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400italic,700italic,300,700,300italic,400'
          rel='stylesheet' type='text/css'>
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
    <!--mobile Breadcrumbs-->
    <a class="button uthsc-split-button-home" href="/"><i class="fa fa-home"></i></a>
    <button data-dropdown="breadcrumbs-left" aria-controls="drop"
    , aria-expanded="false" class="button dropdown uthsc-split-button">Breadcrumbs Back Home</button><br>
    <ol aria-labelledby="breadcrumblabel" id="breadcrumbs-left" data-dropdown-content
        class="f-dropdown mega uthsc-split-button-breadcrumb-links" role="menu" aria-hidden="false" tabindex="-1">
        <li><a href="/" title="Home"><i class="fa fa-level-up fa-2x fa-flip-horizontal" style="float: left;"></i> Back
                to the Homepage</a></li>
        <li><a href="products.html" title="Products">College of Medicine</a></li>
        <li><a href="products.html" title="Products">Office of Medical Education</a></li>
        <li><a href="products.html" title="Products">Clerkships</a></li>
        <li><a href="products.html" title="Products">Core Clerkship Directors</a></li>
        <li><a href="" class="current"></a></li>
    </ol>
    <input type="text" placeholder="Search" style="margin:0;">

    <button class="close-menu expand"><i class="fa fa-chevron-left"></i> Close Menu &emsp;</button>
    <ul>
        <li class="not-a-link"><a>Menu Dropdown 0ne</a>
        <ul>
            <li><a href="#">First Item in Dropdown</a></li>
            <li><a href="#">Second Item in Dropdown</a></li>
            <li><a href="#">Third Item in Dropdown</a></li>
            <li><a href="#">Fourth Item in Dropdown</a></li>
            <li><a href="#">Fifth Item in Dropdown</a></li>
        </ul>
        </li>
        <li class="not-a-link"><a>Menu Dropdown Two</a>
            <ul>
                <li><a href="#">First Item in Dropdown</a></li>
                <li><a href="#">Second Item in Dropdown</a></li>
                <li><a href="#">Third Item in Dropdown That Goes to Two Lines</a></li>
                <li><a href="#">Fourth Item in Dropdown</a></li>
            </ul>
        </li>
        <li class="not-a-link"><a>Menu Dropdown Three</a>
            <ul>
                <li><a href="#">First Item in Dropdown</a></li>
                <li><a href="#">Second Item in Dropdown</a></li>
                <li><a href="#">Third Item in Dropdown</a></li>
                <li><a href="#">Fourth Item in Dropdown</a></li>
                <li><a href="#">Fifth Item in Dropdown</a></li>
                <li><a href="#">Sixth Item in Dropdown</a></li>
                <li><a href="#">Seventh Item in Dropdown</a></li>
                <li><a href="#">Eighth Item in Dropdown</a></li>
                <li><a href="#">Ninth Item in Dropdown</a></li>
                <li><a href="#">Tenth Item in Dropdown</a></li>
                <li><a href="#">Eleventh Item in Dropdown</a></li>
            </ul>
        </li>
        <li class="not-a-link"><a>Menu Dropdown Four</a>
            <ul>
                <li><a href="#">First Item in Dropdown</a></li>
                <li><a href="#">Second Item in Dropdown</a></li>
                <li><a href="#">Third Item in Dropdown</a></li>
                <li><a href="#">Fourth Item in Dropdown</a></li>
                <li><a href="#">Fifth Item in Dropdown</a></li>
                <li><a href="#">Sixth Item in Dropdown</a></li>
                <li><a href="#">Seventh Item in Dropdown</a></li>
            </ul>
        </li>
        <li class="not-a-link"><a>Menu Dropdown Five</a>
            <ul>
                <li><a href="#">First Item in Dropdown</a></li>
            </ul>
        </li>
        <li class="not-a-link"><a>Menu Dropdown Six</a>
            <ul>
                <li><a href="#">First Item in Dropdown</a></li>
                <li><a href="#">Second Item in Dropdown</a></li>
                <li><a href="#">Third Item in Dropdown</a></li>
                <li><a href="#">Fourth Item in Dropdown</a></li>
                <li><a href="#">Fifth Item in Dropdown That Goes to Three Lines Because it Is Very Long</a></li>
                <li><a href="#">Sixth Item in Dropdown</a></li>
                <li><a href="#">Seventh Item in Dropdown</a></li>
                <li><a href="#">Eighth Item in Dropdown</a></li>
            </ul>
        </li>
    </ul>
    <button class="close-menu expand"><i class="fa fa-chevron-left"></i> Close Menu &emsp;</button>
    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')) {
        ?>
        <div class="bottom-nav-bar-off-canvas">
            <?php
            // echo '&copy UTHSC ', date("Y")
            ?>
        </div>
    <?php
    }
    ?>
</nav>

<!-- Right Off Canvas Menu -->
<nav class="offcanvas-nav menu push-menu-right">
    <!--mobile Breadcrumbs-->
    <a class="button uthsc-split-button-home" href="/"><i class="fa fa-home"></i></a>
    <button data-dropdown="breadcrumbs-right" aria-controls="drop"
    , aria-expanded="false" class="button dropdown uthsc-split-button">Breadcrumbs Back Home</button><br>
    <ol aria-labelledby="breadcrumblabel" id="breadcrumbs-right" data-dropdown-content
        class="f-dropdown mega uthsc-split-button-breadcrumb-links" role="menu" aria-hidden="false" tabindex="-1">
        <li><a href="/" title="Home"><i class="fa fa-level-up fa-2x fa-flip-horizontal" style="float: left;"></i> Back
                to the Homepage</a></li>
        <li><a href="#" title="College of Medicine">College of Medicine</a></li>
        <li><a href="#" title="Office of Medical Education">Office of Medical Education</a></li>
        <li><a href="#" title="Clerkships">Clerkships</a></li>
        <li><a href="#" title="Core Clerkship Directors">Core Clerkship Directors</a></li>
        <li><a href="#" class="current"></a></li>
    </ol>
    <input type="text" placeholder="Search" style="margin:0;">
    <button class="close-menu expand">&emsp; Close Menu &emsp;<i class="fa fa-chevron-right"></i></button>
    <!--Mission Links-->
    <div class="mission-links">
        <h2>Mission</h2>
        <a class="button inverse" href="/education/"><i class="fa fa-graduation-cap"></i> Education</a>
        <a class="button inverse" href="/research/"><i class="fa fa-flask"></i> Research</a>
        <a class="button inverse" href="/clinicalcare/"><i class="fa fa-medkit"></i> Clinical Care</a>
        <a class="button inverse" href="/publicservice/"><i class="fa fa-globe"></i> Public Service</a>
    </div>
    <ul>
        <li class="button menu"><i class="fa fa-gift"></i> Make a Gift</li>
        <li class="button menu"><i class="fa fa-road"></i> Take a Tour</li>
        <li class="not-a-link"><a>Information for...</a>
            <ul>
                <li><a href="#">Students</a></li>
                <li><a href="#">Faculty &amp; Staff</a></li>
                <li><a href="#">Alumni</a></li>
                <li><a href="#">Visitors</a></li>
                <li><a href="#">Patients</a></li>
            </ul>
        </li>
        <li class="not-a-link"><a><i class="fa fa-university"></i> Resources</a>
            <ul>
                <li><a href="#">Banner</a></li>
                <li><a href="#">Blackboard</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">Career Opportunities</a></li>
                <li><a href="#">iLogin</a></li>
                <li><a href="#">Maps</a></li>
                <li><a href="#">MyUT</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Webmail</a></li>
            </ul>
        </li>
    </ul>
    <button class="close-menu expand">&emsp; Close Menu &emsp;<i class="fa fa-chevron-right"></i></button>
    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')) {
        ?>
        <div class="bottom-nav-bar-off-canvas">
            <?php
            // echo '&copy UTHSC ', date("Y")
            ?>
        </div>
    <?php
    }
    ?>
</nav>

<!--Off Canvas Wrapper-->
<div id="wrapper">

<!--Mobile Navigation Menu-->
<div id="mobile-navigation" class="hide-for-large-up">
    <button class="nav-toggler toggle-push-left left"></button>
    <button class="nav-toggler toggle-push-right right"></button>

    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')) {
        ?>
        <div class="bottom-nav-bar">
            <?php
            // echo '&copy UTHSC ', date("Y")
            ?>
        </div>
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
                <li><a href="#">Students</a></li>
                <li><a href="#">Faculty &amp; Staff</a></li>
                <li><a href="#">Alumni</a></li>
                <li><a href="#">Visitors</a></li>
                <li><a href="#">Patients</a></li>
            </ul>
        </section>
        <!-- Right Top Bar Section -->
        <section class="top-bar-section right">

            <ul>
                <li class="has-dropdown">
                    <a class="button label" href="#"> Our Mission</a>
                    <ul class="dropdown">
                        <li><a href="#"><i class="fa fa-graduation-cap"></i>&emsp;&emsp;Education</a></li>
                        <li><a href="#"><i class="fa fa-flask"></i>&emsp;&emsp;Research</a></li>
                        <li><a href="#"><i class="fa fa-medkit"></i>&emsp;&emsp;Clinical Care</a></li>
                        <li><a href="#"><i class="fa fa-globe"></i>&emsp;&emsp;Public Service</a></li>
                        <li><a href="#"> Mission Statement</a></li>
                    </ul>
                </li>

                <li class="has-dropdown">
                    <a class="button label" href="#"><i class="fa fa-university"></i> Resources</a>
                    <ul class="dropdown">
                        <li><a href="#">Banner</a></li>
                        <li><a href="#">Blackboard</a></li>
                        <li><a href="#">Calendar</a></li>
                        <li><a href="#">Career Opportunities</a></li>
                        <li><a href="#">iLogin</a></li>
                        <li><a href="#">Maps</a></li>
                        <li><a href="#">MyUT</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Webmail</a></li>
                    </ul>
                </li>
                <li class="button menu secondary label"><i class="fa fa-gift"></i> Make a Gift</li>
                <li class="button top-bar-button label"><i class="fa fa-road"></i> Take a Tour</li>
                <li class="has-form search-bar-large">
                    <input type="text" placeholder="Search">
                </li>
            </ul>
        </section>
    </nav>

    <!--Banner-->
    <div class="row">
        <div class="medium-7 large-8 large-centered columns">
            <img class="uthsc-logo" src="images/uthsc-logo-white-text.svg" width="100%"/>
        </div>
        <div class="medium-5 large-12 hide-for-large-up columns small-collapse">
            <div class="search-bar has-form">
                <input type="text" placeholder="Search">
            </div>
        </div>
    </div>
</header>

<!--Breadcrumbs-->
<nav role="navigation" id="breadcrumbs" class="show-for-large-up">
    <div class="row">
        <div class="columns">
            <!--<p id="breadcrumblabel">You are here:</p>-->
            <ol aria-labelledby="breadcrumblabel">
                <li><a href="index.html" title="Home"><i class="uthsc-home-icon-breadcrumbs fa fa-home fa-2x"></i></a>
                </li>
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
            <a href="#" data-equalizer-watch>Menu Dropdown 0ne</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First Item in Dropdown</a></li>
                <li><a href="#">Second Item in Dropdown</a></li>
                <li><a href="#">Third Item in Dropdown</a></li>
                <li><a href="#">Fourth Item in Dropdown</a></li>
                <li><a href="#">Fifth Item in Dropdown</a></li>
            </ul>
        </li>
        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Menu Dropdown Two</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First Item in Dropdown</a></li>
                <li><a href="#">Second Item in Dropdown</a></li>
                <li><a href="#">Third Item in Dropdown That Goes to Two Lines</a></li>
                <li><a href="#">Fourth Item in Dropdown</a></li>
            </ul>
        </li>
        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Menu Dropdown Three</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First Item in Dropdown</a></li>
                <li><a href="#">Second Item in Dropdown</a></li>
                <li><a href="#">Third Item in Dropdown</a></li>
                <li><a href="#">Fourth Item in Dropdown</a></li>
                <li><a href="#">Fifth Item in Dropdown</a></li>
                <li><a href="#">Sixth Item in Dropdown</a></li>
                <li><a href="#">Seventh Item in Dropdown</a></li>
                <li><a href="#">Eighth Item in Dropdown</a></li>
                <li><a href="#">Ninth Item in Dropdown</a></li>
                <li><a href="#">Tenth Item in Dropdown</a></li>
                <li><a href="#">Eleventh Item in Dropdown</a></li>
            </ul>
        </li>
        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Menu Dropdown Four</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First Item in Dropdown</a></li>
                <li><a href="#">Second Item in Dropdown</a></li>
                <li><a href="#">Third Item in Dropdown</a></li>
                <li><a href="#">Fourth Item in Dropdown</a></li>
                <li><a href="#">Fifth Item in Dropdown</a></li>
                <li><a href="#">Sixth Item in Dropdown</a></li>
                <li><a href="#">Seventh Item in Dropdown</a></li>
            </ul>
        </li>
        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Menu Dropdown Five</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First Item in Dropdown</a></li>
            </ul>
        </li>
        <li class="uthsc-navigation-column small-2 columns">
            <a href="#" data-equalizer-watch>Menu Dropdown Six</a>
            <ul data-uthscequalizer-watch>
                <li><a href="#">First Item in Dropdown</a></li>
                <li><a href="#">Second Item in Dropdown</a></li>
                <li><a href="#">Third Item in Dropdown</a></li>
                <li><a href="#">Fourth Item in Dropdown</a></li>
                <li><a href="#">Fifth Item in Dropdown That Goes to Three Lines Because it Is Very Long</a></li>
                <li><a href="#">Sixth Item in Dropdown</a></li>
                <li><a href="#">Seventh Item in Dropdown</a></li>
                <li><a href="#">Eighth Item in Dropdown</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!--Hero Image-->
<div class="hero">
    <img src="images/memphis-skyline.jpg"/>
</div>

<!--Page Heading-->
<div class="row">
    <div class="large-12 columns">
        <h1>Page Title</h1>
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
                        class="fa fa-file-pdf-o"></i></a>. Sed ut <strong>perspiciatis</strong> unde omnis iste natus
                error sit voluptatem accusantium doloremque laudantium, <strong>totam <em>rem</em> aperiam</strong>,
                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>

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
        <a href="#" class="button secondary radius">Apply Now <i class="fa fa-graduation-cap"></i></a>
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
        <h5>UT President Joe DiPietro describes challenges facing higher ed and its role in preparing the workforce of
            the future</h5>
        <figure class="left image-40">
            <img src="http://news.uthsc.edu/wp-content/uploads/2014/09/Dr.-Dipietro2.jpg"
                 alt="UT President Joe DiPietro addresses panel members about the role of higher education in workforce preparedness."
                 data-caption="testing"/>
            <figcaption>UT President Joe DiPietro addresses panel members about the role of higher education in
                workforce preparedness.
            </figcaption>
        </figure>
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
        <figure class="right image-40">
            <img src="http://news.uthsc.edu/wp-content/uploads/2014/12/Top-Workplace-HomePageSlider.jpg"
                 alt="the arches on union avenue" data-caption="testing"/>
            <figcaption>UTHSC named one of the 2014 Top Workplaces in Memphis.</figcaption>
        </figure>
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
    <div class="row" data-equalizer>
        <div class="medium-4 columns footer-box" data-equalizer-watch>
            <h4>Contact Us</h4>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.</p>
        </div>
        <div class="medium-4 columns footer-box" data-equalizer-watch>
            <h4>Links</h4>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.</p>
        </div>
        <div class="medium-4 columns footer-box hide-for-small" data-equalizer-watch>
            <figure>
                <img src="images/campus-arches.jpg" alt="the arches on union avenue" data-caption="testing"/>
                <figcaption>Caption for the above image.</figcaption>
            </figure>
        </div>
    </div>
</div>

<!--Bottom Footer-->
<div class="uthsc-footer-bottom">
    <div class="row collapse">
        <div class="columns text-center">
            <br/>

            <p>&copy; <?php echo date("Y") ?> The University of Tennessee<br/>Health Science Center<br/>
                Memphis, Tennessee 38163<br/>
                Main: 901-448-5500<br/>
                TDD: 901-448-7382</p>
            <br/>
            <a href="mailto:webmaster@uthsc.edu" class="button radius secondary tiny"><i
                    class="fa fa-envelope fa-3x two-line-button-icon"></i><span class="two-line-button-text">Email<br/>Webmaster</span></a>

            <a href="/password/" class="button radius secondary tiny"><i
                    class="fa fa-key fa-3x two-line-button-icon"></i><span class="two-line-button-text">Edit<br/>Password</span></a>
            <br/>

            <div class="social-icon">
                <a href="http://facebook.com/uthsc"><i class="fa fa-facebook fa-2x fa-inverse"></i></a>
                <a href="http://twitter.com/uthsc"><i class="fa fa-twitter fa-2x fa-inverse"></i></a>
                <a href="http://instagram.com/uthsc"><i class="fa fa-instagram fa-2x fa-inverse"></i></a>
                <a href="http://linkedin.com/company/university-of-tennessee-health-science-center"><i
                        class="fa fa-linkedin fa-2x fa-inverse"></i></a>&nbsp;
                <a href="http://pinterest.com/uthsc/"><i class="fa fa-youtube fa-2x fa-inverse"></i></a>
                <a href="http://youtube.com/user/uthsc"><i class="fa fa-pinterest fa-2x fa-inverse"></i></a>
            </div>
            <br/>

        </div>
    </div>
    <div class="row collapse">
        <div id="emergency-mobile" class="columns small-12 show-for-small">


            <h3 class="text-center"><i class="fa fa-phone fa-flip-horizontal fa-2x"></i> Emergency Numbers</h3>
            <a href="#" data-reveal-id="myModal1" class="button alert expand"><i class="fa fa-info-circle"></i>
                Medical/Behavioral</a>

            <div id="myModal1" class="reveal-modal text-center" data-reveal>
                <div class="call-buttons-box">
                    <h2>Medical/Behavioral</h2>
                    <hr/>
                    <h3 class="lead"><a class="button emergency" href="tel:911"><i
                                class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 911</a></h3>

                    <p>or Campus Police at</p>

                    <h3><a class="button emergency" href="tel:901-448-4444"><i
                                class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 901-448-4444</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal6" class="secondary button tiny expand"><i
                            class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a>
                    <a href="#" data-reveal-id="myModal2" class="secondary button tiny expand"><i
                            class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number&emsp;&emsp;</a></p>
                <a class="close-reveal-modal">&#215;</a>
            </div>
            <a href="#" data-reveal-id="myModal2" class="button alert expand"><i class="fa fa-info-circle"></i> Medical
                Urgent Care</a>

            <div id="myModal2" class="reveal-modal text-center" data-reveal>
                <div class="call-buttons-box">
                    <h2>Medical Urgent Care</h2>
                    <hr/>
                    <h3 class="lead"><a class="button emergency" href="tel:901-448-5630"><i
                                class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 901-448-5630</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal1" class="secondary button tiny expand"><i
                            class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a>
                    <a href="#" data-reveal-id="myModal3" class="secondary button tiny expand"><i
                            class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number&emsp;&emsp;</a></p>
                <a class="close-reveal-modal">&#215;</a>
            </div>
            <a href="#" data-reveal-id="myModal3" class="button alert expand"><i class="fa fa-info-circle"></i>
                Behavioral Health Urgent Care</a>

            <div id="myModal3" class="reveal-modal text-center" data-reveal>
                <div class="call-buttons-box">
                    <h2>Behavioral Health Urgent Care</h2>
                    <hr/>
                    <h3 class="lead"><a class="button emergency" href="tel:901-448-5064"><i
                                class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 901-448-5064</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal2" class="secondary button tiny expand"><i
                            class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a>
                    <a href="#" data-reveal-id="myModal4" class="secondary button tiny expand"><i
                            class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number&emsp;&emsp;</a></p>
                <a class="close-reveal-modal">&#215;</a>
            </div>
            <a href="#" data-reveal-id="myModal4" class="button alert expand"><i class="fa fa-info-circle"></i> Student
                Assistance Program</a>

            <div id="myModal4" class="reveal-modal text-center" data-reveal>
                <div class="call-buttons-box">
                    <h2>Student Assistance Program (SAP)</h2>
                    <hr/>
                    <h3 class="lead"><a class="button emergency" href="tel:800-327-2255"><i
                                class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 800-327-2255<br/>(Option 3)</a>
                    </h3>
                </div>
                <p><a href="#" data-reveal-id="myModal3" class="secondary button tiny expand"><i
                            class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a>
                    <a href="#" data-reveal-id="myModal5" class="secondary button tiny expand"><i
                            class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number&emsp;&emsp;</a></p>
                <a class="close-reveal-modal">&#215;</a>
            </div>
            <a href="#" data-reveal-id="myModal5" class="button alert expand"><i class="fa fa-info-circle"></i> Employee
                Assistance Program</a>

            <div id="myModal5" class="reveal-modal text-center" data-reveal>
                <div class="call-buttons-box">
                    <h2>Employee Assistance Program (EAP)</h2>
                    <hr/>
                    <h3 class="lead"><a class="button emergency" href="tel:855-437-3486"><i
                                class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 855-437-3486</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal4" class="secondary button tiny expand"><i
                            class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a>
                    <a href="#" data-reveal-id="myModal6" class="secondary button tiny expand"><i
                            class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number&emsp;&emsp;</a></p>
                <a class="close-reveal-modal">&#215;</a>
            </div>
            <a href="#" data-reveal-id="myModal6" class="button alert expand"><i class="fa fa-info-circle"></i> After
                Hours Medical/Behavioral</a>

            <div id="myModal6" class="reveal-modal text-center" data-reveal>
                <div class="call-buttons-box">
                    <h2>After Hours Medical/Behavioral<br/>Available (24/7)</h2>
                    <hr/>
                    <h3 class="lead"><a class="button emergency" href="tel:901-541-5654"><i
                                class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 901-541-5654</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal5" class="secondary button tiny expand"><i
                            class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a>
                    <a href="#" data-reveal-id="myModal1" class="secondary button tiny expand"><i
                            class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number&emsp;&emsp;</a></p>
                <a class="close-reveal-modal">&#215;</a>
            </div>
        </div>
        <div id="emergency-desktop" class="medium-5 medium-centered columns hide-for-small">
            <div class="row">
                <a href="/univheal/emergencies.php" class="button alert radius expand">
                    <div class="columns large-5 medium-4 text-right emergency-phone-icon"><i
                            class="fa fa-phone fa-flip-horizontal fa-3x"></i></div>
                    <div class="columns large-7 medium-8 text-left"><h4>Emergency<br/>Numbers</h4></div>
                    <div class="columns small-12">Call 911 or Campus Police at 901-448-4444<br/>
                        More Emergency Information
                    </div>
                </a>
            </div>
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
