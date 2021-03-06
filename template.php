<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Tennessee Health Science Center</title>
    <link rel="stylesheet" type="text/css" href="_resources/2015/css/uthsc.css">
    <link rel="stylesheet" type="text/css" href="_resources/2015/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400italic,700italic,300,700,300italic,400">
    <script src="_resources/2015/js/modernizr.js"></script>
  </head>
  <!--1. Left Off Canvas Menu-->
  <!--1. Right Off Canvas Menu-->
  <!--1. Mobile Navigation Menu-->
  <!--1. Header-->
  <!--a. Top Bar Navigation-->
  <!--a. Banner-->
  <!--1. Bread Crumbs-->
  <!--1. Main Navigation-->
  <!--1. Emergency Alert Box-->
  <!--1. Hero Image-->
  <!--1. Page Heading-->
  <!--1. Content Row 1-->
  <!--1. Content Row 2-->
  <!--1. Content Row 3-->
  <!--1. Top Footer-->
  <!--1. Bottom Footer-->
  <body>
    <!--Left Off Canvas Menu-->
    <nav class="offcanvas-nav menu push-menu-left"><a href="index.php" class="button uthsc-split-button-home"><i class="fa fa-home"></i></a>
      <button data-dropdown="breadcrumbs-left" aria-controls="drop" aria-expanded="false" class="button dropdown uthsc-split-button">Breadcrumbs Back Home</button><br>
      <ol aria-labelledby="breadcrumblabel" id="breadcrumbs-left" data-dropdown-content="data-dropdown-content" role="menu" aria-hidden="false" tabindex="-1" class="f-dropdown mega uthsc-split-button-breadcrumb-links">
        <li><a href="index.php" title="Home">Back to the Homepage<i style="float: left;" class="fa fa-level-up fa-2x fa-flip-horizontal"></i></a></li>
        <li><a href="products.html" title="Products">College of Medicine</a></li>
        <li><a href="products.html" title="Products">Office of Medical Education</a></li>
        <li><a href="products.html" title="Products">Clerkships</a></li>
        <li><a href="products.html" title="Products">Core Clerkship Directors</a></li>
        <li><a href="#"><strong>Current Page</strong></a></li>
      </ol>
      <input type="text" placeholder="Search" style="margin:0;">
      <button class="close-menu expand"><i class="fa fa-chevron-left"></i>&emsp; Close Menu</button>
      <ul>
        <li class="not-a-link"><a>Menu Dropdown One</a>
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
      <button class="close-menu expand"><i class="fa fa-chevron-left"></i>&emsp; Close Menu</button><?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')) { ?>
      <div class="bottom-nav-bar-off-canvas"></div><?php } ?>
    </nav>
    <!--Right Off Canvas Menu-->
    <nav class="offcanvas-nav menu push-menu-right"><a href="index.php" class="button uthsc-split-button-home"><i class="fa fa-home"></i></a>
      <button data-dropdown="breadcrumbs-right" aria-controls="drop" aria-expanded="false" class="button dropdown uthsc-split-button">Breadcrumbs Back Home</button><br>
      <ol id="breadcrumbs-right" aria-labelledby="breadcrumblabel" data-dropdown-content="data-dropdown-content" role="menu" aria-hidden="false" tabindex="-1" class="f-dropdown mega uthsc-split-button-breadcrumb-links">
        <li><a href="index.php" title="Home"><i style="float: left;" class="fa fa-level-up fa-2x fa-flip-horizontal"></i>Back to the Homepage</a></li>
        <li><a href="#" title="College of Medicine">College of Medicine</a></li>
        <li><a href="#" title="Office of Medical Education">Office of Medical Education</a></li>
        <li><a href="#" title="Clerkships">Clerkships</a></li>
        <li><a href="#" title="Core Clerkship Directors">Core Clerkship Directors</a></li>
        <li><a href="#"><strong>Current Page</strong></a></li>
      </ol>
      <div class="search-bar has-form mobile">
        <input type="text" class="search"><a href="#" class="button secondary tiny"><i class="fa fa-search"></i></a>
      </div>
      <button class="close-menu expand">Close Menu &emsp;<i class="fa fa-chevron-right"></i>
        <!-- Mission Links-->
      </button>
      <div class="mission-links">
        <h2>Mission</h2><a href="/education/" class="button inverse"><i class="fa fa-graduation-cap"></i>Education</a><a href="/research/" class="button inverse"><i class="fa fa-flask"></i>Research</a><a href="/clinicalcare/" class="button inverse"><i class="fa fa-medkit"></i>Clinical Care</a><a href="/publicservice/" class="button inverse"><i class="fa fa-globe"></i>Public Service</a>
      </div>
      <ul>
        <li class="button menu"><a href="#"><i class="fa fa-gift"></i>Make a Gift</a></li>
        <li class="button menu"><a href="template.php"><i class="fa fa-road"></i>Take a Tour</a></li>
        <li class="not-a-link"><a>Information for...</a>
          <ul>
            <li><a href="#">Students</a></li>
            <li><a href="#">Faculty &amp; Staff</a></li>
            <li><a href="#">Alumni</a></li>
            <li><a href="#">Visitors</a></li>
            <li><a href="#">Patients</a></li>
          </ul>
        </li>
        <li class="not-a-link menu"><a><i class="fa fa-university">&emsp; Resources</i></a>
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
      <button class="close-menu expand">Close Menu &emsp;<i class="fa fa-chevron-right"></i></button><?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')) { ?>
      <div class="bottom-nav-bar-off-canvas"></div><?php } ?>
    </nav>
    <!--Off Canvas Wrapper-->
    <div id="wrapper">
      <div id="mobile-navigation" class="hide-for-large-up">
        <button class="nav-toggler toggle-push-left left"></button>
        <button class="nav-toggler toggle-push-right right"></button><?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')) { ?>
        <div class="bottom-nav-bar"></div><?php } ?>
      </div>
      <!--Header-->
      <header id="uthsc-header">
        <!--Top Bar Navigation-->
        <nav data-topbar="data-topbar" role="navigation" class="top-bar show-for-large-up">
          <ul class="title-area">
            <li class="name"></li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone-->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>
          <!-- Left Top Bar Section-->
          <section class="top-bar-section left">
            <ul>
              <li><a href="#">Students</a></li>
              <li><a href="#">Faculty &amp; Staff</a></li>
              <li><a href="#">Alumni</a></li>
              <li><a href="#">Visitors</a></li>
              <li><a href="#">Patients</a></li>
            </ul>
          </section>
          <!-- Right Top Bar Section-->
          <section class="top-bar-section right">
            <ul>
              <li class="has-dropdown"><a href="#" class="button label">Our Mission</a>
                <ul class="dropdown">
                  <li><a href="#"><i class="fa fa-graduation-cap"></i><span>Education</span></a></li>
                  <li><a href="#"><i class="fa fa-flask"></i><span>Research</span></a></li>
                  <li><a href="#"><i class="fa fa-medkit"></i><span>Clinical Care</span></a></li>
                  <li><a href="#"><i class="fa fa-globe"></i><span>Public Service</span></a></li>
                  <li><a href="#"> Mission Statement</a></li>
                </ul>
              </li>
              <li class="has-dropdown"><a href="#" class="button label"><i class="fa fa-university"></i> Resources</a>
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
              <li><a href="template.php" class="button top-bar-button label"><i class="fa fa-road"></i> Take a Tour</a></li>
              <li class="has-form search-bar-large">
                <input type="text" placeholder="Search" class="search"><a href="#" class="button tiny"><i class="fa fa-search"></i></a>
              </li>
            </ul>
          </section>
        </nav>
        <!--Banner-->
        <div class="row">
          <div class="medium-7 large-8 large-centered columns"><a href="index.php"><img src="_resources/2015/images/uthsc-logo-white-text.svg" width="100%" class="uthsc-logo"></a></div>
          <div class="medium-5 large-12 hide-for-large-up columns small-collapse">
            <div class="search-bar has-form tablet">
              <input type="text" placeholder="Search" class="search"><a href="#" class="button tiny"><i class="fa fa-search"></i></a>
            </div>
          </div>
        </div>
        <!--Breadcrumbs-->
        <nav id="breadcrumbs" role="navigation" class="show-for-large-up">
          <div class="row">
            <div class="columns">
              <!--p#breadcrumblabel You are here:</p>-->
              <ol aria-labelledby="breadcrumblabel">
                <li><a href="index.php" title="Go to the UTHSC Homepage" class="home-icon"><i class="uthsc-home-icon-breadcrumbs fa fa-home fa-2x"></i></a></li>
                <li><a href="index.html" title="Go to the Section Homepage">Section</a></li>
                <li><a href="products.html" title="Go to the Page Parent">Page Parent</a></li>
                <li class="not-a-link"><a class="current">Current Page</a></li>
              </ol>
            </div>
          </div>
        </nav>
      </header>
      <!--Main Navigation-->
      <nav id="uthsc-navigation-alt" role="navigation" class="show-for-large-up">
        <ul data-equalizer="data-equalizer" data-uthscequalizer="data-uthscequalizer" class="row collapse">
          <li class="uthsc-navigation-column small-2 columns"><a href="#" data-equalizer-watch="data-equalizer-watch">Menu Dropdown 0ne</a>
            <ul data-uthscequalizer-watch="data-uthscequalizer-watch">
              <li><a href="#">First Item in Dropdown</a></li>
              <li><a href="#">Second Item in Dropdown</a></li>
              <li><a href="#">Third Item in Dropdown</a></li>
              <li><a href="#">Fourth Item in Dropdown</a></li>
              <li><a href="#">Fifth Item in Dropdown</a></li>
            </ul>
          </li>
          <li class="uthsc-navigation-column small-2 columns"><a href="#" data-equalizer-watch="data-equalizer-watch">Menu Dropdown Two</a>
            <ul data-uthscequalizer-watch="data-uthscequalizer-watch">
              <li><a href="#">First Item in Dropdown</a></li>
              <li><a href="#">Second Item in Dropdown</a></li>
              <li><a href="#">Third Item in Dropdown That Goes to Two Lines</a></li>
              <li><a href="#">Fourth Item in Dropdown</a></li>
            </ul>
          </li>
          <li class="uthsc-navigation-column small-2 columns"><a href="#" data-equalizer-watch="data-equalizer-watch">Menu Dropdown Three</a>
            <ul data-uthscequalizer-watch="data-uthscequalizer-watch">
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
          <li class="uthsc-navigation-column small-2 columns"><a href="#" data-equalizer-watch="data-equalizer-watch">Menu Dropdown Four</a>
            <ul data-uthscequalizer-watch="data-uthscequalizer-watch">
              <li><a href="#">First Item in Dropdown</a></li>
              <li><a href="#">Second Item in Dropdown</a></li>
              <li><a href="#">Third Item in Dropdown</a></li>
              <li><a href="#">Fourth Item in Dropdown</a></li>
              <li><a href="#">Fifth Item in Dropdown</a></li>
              <li><a href="#">Sixth Item in Dropdown</a></li>
              <li><a href="#">Seventh Item in Dropdown</a></li>
            </ul>
          </li>
          <li class="uthsc-navigation-column small-2 columns"><a href="#" data-equalizer-watch="data-equalizer-watch">Menu Dropdown Five</a>
            <ul data-uthscequalizer-watch="data-uthscequalizer-watch">
              <li><a href="#">First Item in Dropdown</a></li>
            </ul>
          </li>
          <li class="uthsc-navigation-column small-2 columns"><a href="#" data-equalizer-watch="data-equalizer-watch">Menu Dropdown Six</a>
            <ul data-uthscequalizer-watch="data-uthscequalizer-watch">
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
      <!-- Hero Image-->
      <div class="hero hero-one"></div>
      <!-- Page Heading-->
      <div class="row">
        <div class="large-12 columns">
          <h1>Page Title</h1>
        </div>
      </div>
      <!--Content Row 1-->
      <div class="row">
        <div class="large-12 columns content-area">
          <div class="panel">
            <h3>Content Row 1</h3>
            <p>This is a full width row with a panel in it.</p>
            <p>Thanks to<a href="http://fortawesome.github.io/Font-Awesome/"> Fontawesome&nbsp;<span class="fa fa-flag"></span></a> we can use these handy icons anywhere. Here's an example of a<a href=""> pdf link&nbsp;<span class="fa fa-file-pdf-o"></span></a>. Sed ut<strong> perspiciatis</strong> unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,<strong> totam<em> rem</em> aperiam</strong>, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed qui consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
          </div>
        </div>
      </div>
      <!-- Content Row 2-->
      <div class="row content-area">
        <div class="large-4 columns">
          <h3>Content Row 2</h3>
          <h5>One Third</h5>
          <p><strong>This is a three column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p><a href="#" class="button secondary radius">Apply Now&ensp;<span class="fa fa-graduation-cap"></span></a>
        </div>
        <div class="large-4 columns">
          <h3>Content Row 2</h3>
          <h5>One Third</h5>
          <p><strong>This is a three column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p><a href="#" class="button radius">Academic Calendar&ensp;<span class="fa fa-calendar"></span></a>
        </div>
        <div class="large-4 columns">
          <h3>Content Row 2</h3>
          <h5>UT President Joe DiPietro describes challenges facing higher ed and its role in preparing the workforce of the future</h5>
          <figure class="left image-40"><img src="http://news.uthsc.edu/wp-content/uploads/2014/09/Dr.-Dipietro2.jpg" alt="UT President Joe DiPietro addresses panel members about the role of higher education in workforce preparedness.">
            <figcaption>UT President Joe DiPietro addresses panel members about the role of higher education in workforce preparedness.</figcaption>
          </figure>
          <p><strong>This is a three column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p><a href="#" class="button radius">Get Directions&ensp;<span class="fa fa-map-marker"></span></a>
        </div>
      </div>
      <!-- Content Row 3-->
      <div class="row content-area">
        <div class="large-4 columns">
          <h3>Content Row 3</h3>
          <h5>One Third</h5>
          <figure class="right image-40"><img src="http://news.uthsc.edu/wp-content/uploads/2014/12/Top-Workplace-HomePageSlider.jpg" alt="the arches on union avenue">
            <figcaption>UTHSC named one of the 2014 Top Workplaces in Memphis.</figcaption>
          </figure>
          <p><strong>This is a two column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>
        <div class="large-8 columns">
          <h3>Content Row 3</h3>
          <h5>Two Thirds</h5>
          <div class="left"><img src="_resources/2015/images/bridge.jpg"></div>
          <p><strong>This is a two column layout</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>
      </div>
      <footer>
        <!-- Top Footer-->
        <div class="uthsc-footer-top">
          <div data-equalizer="data-equalizer" class="row">
            <div data-equalizer-watch="data-equalizer-watch" class="medium-4 columns footer-box">
              <h4>Contact Us</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
            <div data-equalizer-watch="data-equalizer-watch" class="medium-4 columns footer-box">
              <h4>Links</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
            <div data-equalizer-watch="data-equalizer-watch" class="medium-4 columns footer-box hide-for-small">
              <figure><img src="_resources/2015/images/campus-arches.jpg" alt="the arches on union avenue">
                <figcaption>Caption for the above image.</figcaption>
              </figure>
            </div>
          </div>
        </div>
        <!-- Bottom Footer-->
        <div class="uthsc-footer-bottom">
          <div class="row collapse">
            <div class="columns text-center"><br>
              <p>&copy; <?php echo date("Y") ?> The University of Tennessee<br>Health Science Center<br> Memphis, Tennessee 38163<br> Main: (901) 448-5500<br> TDD: (901) 448-7382<br> Last Published: <?php echo date("F j, Y") ?></p><br><a href="mailto:webmaster@uthsc.edu" class="button radius secondary tiny"><span class="fa fa-envelope fa-3x two-line-button-icon"></span><span class="two-line-button-text">Email<br>Webmaster</span></a>
<a href="/password/" class="button radius secondary tiny"><span class="fa fa-key fa-3x two-line-button-icon"></span><span class="two-line-button-text">Edit<br>Password</span></a><br>
              <div class="social-icon">
<a href="http://facebook.com/uthsc"><span class="fa fa-facebook fa-2x fa-inverse"></span></a>
<a href="http://twitter.com/uthsc"><span class="fa fa-twitter fa-2x fa-inverse"></span></a>
<a href="http://instagram.com/uthsc"><span class="fa fa-instagram fa-2x fa-inverse"></span></a>
<a href="http://linkedin.com/company/university-of-tennessee-health-science-center"><span class="fa fa-linkedin fa-2x fa-inverse"></span></a>
<a href="http://youtube.com/user/uthsc"><span class="fa fa-youtube fa-2x fa-inverse"></span></a>
<a href="http://pinterest.com/uthsc/"><span class="fa fa-pinterest fa-2x fa-inverse"></span></a>
              </div><br>
            </div>
          </div>
          <div class="row collapse">
            <div id="emergency-mobile" class="columns small-12 show-for-small">
              <h3 class="text-center"><span class="fa fa-phone fa-flip-horizontal fa-2x"></span> Emergency Numbers</h3><a href="#" data-reveal-id="myModal1" class="button alert expand"><span class="fa fa-info-circle"></span> Medical/Behavioral</a>
              <div id="myModal1" data-reveal="data-reveal" class="reveal-modal text-center">
                <div class="call-buttons-box">
                  <h2>Medical/Behavioral</h2>
                  <hr>
                  <h3 class="lead"><a href="tel:911" class="button emergency"><span class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></span> 911</a></h3>
                  <p>or Campus Police at</p>
                  <h3><a href="tel:901-448-4444" class="button emergency"><span class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></span> (901) 448-4444</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal6" class="secondary button tiny expand"><span class="fa fa-chevron-up fa-2x fa-button"></span> Previous Emergency Number</a><a href="#" data-reveal-id="myModal2" class="secondary button tiny expand"><span class="fa fa-chevron-down fa-2x fa-button"></span> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
              </div><a href="#" data-reveal-id="myModal2" class="button alert expand"><span class="fa fa-info-circle"></span> Medical Urgent Care</a>
              <div id="myModal2" data-reveal="data-reveal" class="reveal-modal text-center">
                <div class="call-buttons-box">
                  <h2>Medical Urgent Care</h2>
                  <hr>
                  <h3 class="lead"><a href="tel:901-448-5630" class="button emergency"><span class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></span> (901) 448-5630</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal1" class="secondary button tiny expand"><span class="fa fa-chevron-up fa-2x fa-button"></span> Previous Emergency Number</a><a href="#" data-reveal-id="myModal3" class="secondary button tiny expand"><span class="fa fa-chevron-down fa-2x fa-button"></span> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
              </div><a href="#" data-reveal-id="myModal3" class="button alert expand"><span class="fa fa-info-circle"></span> Behavioral Health Urgent Care</a>
              <div id="myModal3" data-reveal="data-reveal" class="reveal-modal text-center">
                <div class="call-buttons-box">
                  <h2>Behavioral Health Urgent Care</h2>
                  <hr>
                  <h3 class="lead"><a href="tel:901-448-5064" class="button emergency"><span class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></span> (901) 448-5064</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal2" class="secondary button tiny expand"><span class="fa fa-chevron-up fa-2x fa-button"></span> Previous Emergency Number</a><a href="#" data-reveal-id="myModal4" class="secondary button tiny expand"><span class="fa fa-chevron-down fa-2x fa-button"></span> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
              </div><a href="#" data-reveal-id="myModal4" class="button alert expand"><span class="fa fa-info-circle"></span> Student Assistance Program</a>
              <div id="myModal4" data-reveal="data-reveal" class="reveal-modal text-center">
                <div class="call-buttons-box">
                  <h2>Student Assistance Program (SAP)</h2>
                  <hr>
                  <h3 class="lead"><a href="tel:800-327-2255" class="button emergency"><span class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></span> (800) 327-2255<br>(Option 3)</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal3" class="secondary button tiny expand"><span class="fa fa-chevron-up fa-2x fa-button"></span> Previous Emergency Number</a><a href="#" data-reveal-id="myModal5" class="secondary button tiny expand"><span class="fa fa-chevron-down fa-2x fa-button"></span> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
              </div><a href="#" data-reveal-id="myModal5" class="button alert expand"><span class="fa fa-info-circle"></span> Employee Assistance Program</a>
              <div id="myModal5" data-reveal="data-reveal" class="reveal-modal text-center">
                <div class="call-buttons-box">
                  <h2>Employee Assistance Program (EAP)</h2>
                  <hr>
                  <h3 class="lead"><a href="tel:855-437-3486" class="button emergency"><span class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></span> (855) 437-3486</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal4" class="secondary button tiny expand"><span class="fa fa-chevron-up fa-2x fa-button"></span> Previous Emergency Number</a><a href="#" data-reveal-id="myModal6" class="secondary button tiny expand"><span class="fa fa-chevron-down fa-2x fa-button"></span> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
              </div><a href="#" data-reveal-id="myModal6" class="button alert expand"><span class="fa fa-info-circle"></span> After Hours Medical/Behavioral</a>
              <div id="myModal6" data-reveal="data-reveal" class="reveal-modal text-center">
                <div class="call-buttons-box">
                  <h2>After Hours Medical/Behavioral<br>Available (24/7)</h2>
                  <hr>
                  <h3 class="lead"><a href="tel:901-541-5654" class="button emergency"><span class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></span> (901) 541-5654</a></h3>
                </div>
                <p><a href="#" data-reveal-id="myModal5" class="secondary button tiny expand"><span class="fa fa-chevron-up fa-2x fa-button"></span> Previous Emergency Number</a><a href="#" data-reveal-id="myModal1" class="secondary button tiny expand"><span class="fa fa-chevron-down fa-2x fa-button"></span> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
              </div>
            </div>
            <div id="emergency-desktop" class="medium-5 medium-centered columns hide-for-small">
              <div class="row"><a href="/univheal/emergencies.php" class="button alert radius expand">
                  <div class="columns large-5 medium-4 text-right emergency-phone-icon"><span class="fa fa-phone fa-flip-horizontal fa-3x"></span></div>
                  <div class="columns large-7 medium-8 text-left">
                    <h4>Emergency<br>Numbers</h4>
                  </div>
                  <div class="columns small-12">Call 911 or Campus Police at (901) 448-4444<br> More Emergency Information</div></a></div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script type="text/javascript" src="_resources/2015/js/jquery.min.js"></script>
    <script type="text/javascript" src="_resources/2015/js/uthsc.foundation.min.js"></script>
    <script type="text/javascript">
      (function($){
          $(document).foundation({
              "magellan-expedition": {
                  active_class: 'gellin' // specify the class used for active sections
              }
          });
      })(jQuery);
    </script>
    <script type="text/javascript">$(document).foundation('equalizer', 'reflow');</script>
    <script src="_resources/2015/js/uthsc.min.js"></script>
  </body>
</html>