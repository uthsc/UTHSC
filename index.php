<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTHSC Navigation</title>
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
  <body id="top" data-magellan-destination="top" class="homepage">
    <div id="fb-root">
      <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=168560461625";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
    </div>
    <!--Right Off Canvas Menu-->
    <nav class="offcanvas-nav menu push-menu-right"><a href="/" class="button uthsc-split-button-home"><i class="fa fa-home"></i></a>
      <button data-dropdown="breadcrumbs-right" aria-controls="drop" aria-expanded="false" class="button dropdown uthsc-split-button">Breadcrumbs Back Home</button><br>
      <ol id="breadcrumbs-right" aria-labelledby="breadcrumblabel" data-dropdown-content="data-dropdown-content" role="menu" aria-hidden="false" tabindex="-1" class="f-dropdown mega uthsc-split-button-breadcrumb-links">
        <li><a href="/" title="Home"><i style="float: left;" class="fa fa-level-up fa-2x fa-flip-horizontal"></i>Back to the Homepage</a></li>
        <li><a href="#" title="College of Medicine">College of Medicine</a></li>
        <li><a href="#" title="Office of Medical Education">Office of Medical Education</a></li>
        <li><a href="#" title="Clerkships">Clerkships</a></li>
        <li><a href="#" title="Core Clerkship Directors">Core Clerkship Directors</a></li>
        <li><a href="#"><strong>Current Page</strong></a></li>
      </ol>
      <input type="text" placeholder="Search" style="margin:0;">
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
        <li class="not-a-link"><a><i class="fa fa-university"> Resources</i></a>
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
                <input type="text" placeholder="Search">
              </li>
            </ul>
          </section>
        </nav>
        <!--Banner-->
        <div class="row">
          <div class="medium-7 large-8 large-centered columns"><img src="_resources/2015/images/uthsc-logo-white-text.svg" width="100%" class="uthsc-logo"></div>
          <div class="medium-5 large-12 hide-for-large-up columns small-collapse">
            <div class="search-bar has-form">
              <input type="text" placeholder="Search">
            </div>
          </div>
        </div>
      </header>
      <!-- Fullscreen image-->
      <div class="hide-for-small">
        <div class="fullscreen">
          <div style="height: 65%;"></div>
          <div data-magellan-expedition="fixed" class="magellan">
            <dl class="sub-nav">
              <dd data-magellan-arrival="education"><a href="#education"><i class="fa fa-graduation-cap fa-3x"></i>
                  <p class="subheader">Education</p></a></dd>
              <dd data-magellan-arrival="research"><a href="#research"><i class="fa fa-flask fa-3x"></i>
                  <p class="subheader">Research</p></a></dd>
              <dd data-magellan-arrival="clinical-care"><a href="#clinical-care"><i class="fa fa-medkit fa-3x"></i>
                  <p class="subheader">Clinical Care</p></a></dd>
              <dd data-magellan-arrival="public-service"><a href="#public-service"><i class="fa fa-globe fa-3x"></i>
                  <p class="subheader">Public Service</p></a></dd>
              <dd data-magellan-arrival="top" class="to-top"><a href="#top"><i class="fa fa-arrow-circle-up fa-2x"></i>
                  <p class="subheader">To Top</p></a></dd>
            </dl>
          </div>
        </div>
        <!-- tabs-->
      </div>
      <div class="row show-for-small-down">
        <div class="columns small-centered">
          <ul data-tab="" role="tablist" class="tabs">
            <li role="presentational" class="tab-title active text-center"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1"><i class="fa fa-graduation-cap fa-2x"></i></a></li>
            <li role="presentational" class="tab-title text-center"><a href="#panel2-2" role="tab" tabindex="0" aria-selected="false" controls="panel2-2"><i class="fa fa-flask fa-2x"></i></a></li>
            <li role="presentational" class="tab-title text-center"><a href="#panel2-3" role="tab" tabindex="0" aria-selected="false" controls="panel2-3"><i class="fa fa-medkit fa-2x"></i></a></li>
            <li role="presentational" class="tab-title text-center"><a href="#panel2-4" role="tab" tabindex="0" aria-selected="false" controls="panel2-4"><i class="fa fa-globe fa-2x"></i></a></li>
          </ul>
          <div class="tabs-content">
            <section id="panel2-1" role="tabpanel" aria-hidden="false" class="content active">
              <div class="row">
                <div class="columns mission-image"><img src="http://placehold.it/580x120&amp;text=[Education%20image]" alt="xxxx"></div>
                <div class="columns mission-name">
                  <h2 class="tab-header">Education</h2>
                </div>
                <div class="columns mission-content">
                  <p>Nam volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.</p>
                  <div class="button small">Button 1</div>
                  <div class="button small">Button 2</div>
                  <div class="button small">Button 3</div>
                  <div class="button small">Button 4</div>
                </div>
              </div>
            </section>
            <section id="panel2-2" role="tabpanel" aria-hidden="true" class="content">
              <div class="row">
                <div class="columns mission-image"><img src="http://placehold.it/580x120&amp;text=[Research%20image]" alt="xxxx"></div>
                <div class="columns mission-name">
                  <h2 class="tab-header">Research</h2>
                </div>
                <div class="columns mission-content">
                  <p>Nam volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.</p>
                  <div class="button small">Button 1</div>
                  <div class="button small">Button 2</div>
                  <div class="button small">Button 3</div>
                  <div class="button small">Button 4</div>
                </div>
              </div>
            </section>
            <section id="panel2-3" role="tabpanel" aria-hidden="true" class="content">
              <div class="row">
                <div class="columns mission-image"><img src="http://placehold.it/580x120&amp;text=[Clinical%20Care%20image]" alt="xxxx"></div>
                <div class="columns mission-name">
                  <h2 class="tab-header">Clinical Care</h2>
                </div>
                <div class="columns mission-content">
                  <p>Nam volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.</p>
                  <div class="button small">Button 1</div>
                  <div class="button small">Button 2</div>
                  <div class="button small">Button 3</div>
                  <div class="button small">Button 4</div>
                </div>
              </div>
            </section>
            <section id="panel2-4" role="tabpanel" aria-hidden="true" class="content">
              <div class="row">
                <div class="columns mission-image"><img src="http://placehold.it/580x120&amp;text=[Public%20Service%20image]" alt="xxxx"></div>
                <div class="columns mission-name">
                  <h2 class="tab-header">Public Service</h2>
                </div>
                <div class="columns mission-content">
                  <p>Nam volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.</p>
                  <div class="button small">Button 1</div>
                  <div class="button small">Button 2</div>
                  <div class="button small">Button 3</div>
                  <div class="button small">Button 4</div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <!-- About Row-->
      <div data-equalizer="data-equalizer" id="about" class="row">
        <div data-equalizer-watch="data-equalizer-watch" class="columns small-12 medium-6 panel">
          <h3><i class="fa fa-newspaper-o fa-2x"> News</i></h3><?php
          if (file_get_contents('http://news.uthsc.edu/news-html/more-links.php')){
          $news_output = file_get_contents('http://news.uthsc.edu/news-html/more-links.php');
          if (trim($news_output) == '<h1>Error establishing a database connection</h1>'){
          echo'<p style="padding:4px;">Our connection to the <a href="http://news.uthsc.edu/">UTHSC News</a> site is currently down. Please check back later for news. This may be due to routine maintenance or unforeseen technical problems. Whatever the issue, we can assure you that we are working hard to bring the connection back up.</p>';
          } else {
          echo $news_output;
          }
          //echo $news_output;
          } else {
          echo'<p style="padding:4px;">Our connection to the <a href="http://news.uthsc.edu/">UTHSC News</a> site is currently down. Please check back later for news. This may be due to routine maintenance or unforeseen technical problems. Whatever the issue, we can assure you that we are working hard to bring the connection back up.</p>';
          }
          ?>
        </div>
        <div data-equalizer-watch="data-equalizer-watch" class="columns small-12 medium-6 panel">
          <h3><i class="fa fa-bar-chart fa-2x"> Quick Facts</i></h3><img src="_resources/2015/images/graphic.jpg" alt="infographic">
        </div>
      </div>
      <!-- Hero Images for Mission Sets-->
      <div class="hide-for-small">
        <!-- Education-->
        <div id="education" class="hero"><img src="_resources/2015/images/mission-education.jpg" alt="xxxx" data-magellan-destination="education"></div>
        <div class="hero-name-stripe"></div>
        <div data-equalizer="data-equalizer" class="row">
          <h2 class="hero-text">Education</h2>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-4 panel news-box">
            <div class="row">
              <div class="columns">
                <h3><i class="fa fa-newspaper-o fa-2x"> News<br><span>for Education</span></i></h3>
              </div>
            </div><a href="http://news.uthsc.edu/university-distinguished-professor-michael-carter-receives-2015-lifetime-achievement-award-from-national-organization-of-nurse-practitioner-faculties/">
              <div class="row panel">
                <div class="columns">
                  <figure><img src="http://placehold.it/1000/b06010/ffffff&amp;text=Education+News+Image" alt="xxxx"></figure>
                  <p>University Distinguished Professor Michael Carter Receives 2015 Lifetime Achievement Award from National Organization of Nurse Practitioner Faculties</p>
                </div>
              </div></a><a href="http://news.uthsc.edu/valerie-k-arnold-md-of-uthsc-inducted-into-the-american-college-of-psychiatrists/">
              <div class="row panel">
                <div class="columns medium-12 large-4">
                  <figure><img src="http://placehold.it/1000/ced0b4/ffffff&amp;text=EduImage" alt="xxxx"></figure>
                </div>
                <div class="columns medium-12 large-8">
                  <p>Valerie K. Arnold, MD, of UTHSC Inducted into the American College of Psychiatrists</p>
                </div>
              </div></a><a href="http://news.uthsc.edu/uthsc-graduates-698-health-care-professionals-in-may/">
              <div class="row panel">
                <div class="columns medium-12 large-4">
                  <figure><img src="http://placehold.it/1000/7a68ae/ffffff&amp;text=EduImage" alt="xxxx"></figure>
                </div>
                <div class="columns medium-12 large-8">
                  <p>UTHSC Graduates 698 Health Care Professionals in May</p>
                </div>
              </div></a>
          </div>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-8">
            <pNam>volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.Nam volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.Nam volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.Nam volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.</pNam>
          </div>
        </div>
        <!-- Research-->
        <div id="research" class="hero"><img src="_resources/2015/images/mission-research.jpg" alt="xxxx" data-magellan-destination="research"></div>
        <div class="hero-name-stripe"></div>
        <div data-equalizer="data-equalizer" class="row">
          <h2 class="hero-text">Research</h2>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-4 panel news-box">
            <h3><i class="fa fa-calendar fa-2x"> News<br><span>for Research</span></i></h3><?php
            if (file_get_contents('http://news.uthsc.edu/news-html/more-links-research.php')){
            $news_output = file_get_contents('http://news.uthsc.edu/news-html/more-links-research.php');
            if (trim($news_output) == '<h1>Error establishing a database connection</h1>'){
            echo'<p style="padding:4px;">Our connection to the <a href="http://news.uthsc.edu/">UTHSC News</a> site is currently down. Please check back later for news. This may be due to routine maintenance or unforeseen technical problems. Whatever the issue, we can assure you that we are working hard to bring the connection back up.</p>';
            } else {
            echo $news_output;
            }
            //echo $news_output;
            } else {
            echo'<p style="padding:4px;">Our connection to the <a href="http://news.uthsc.edu/">UTHSC News</a> site is currently down. Please check back later for news. This may be due to routine maintenance or unforeseen technical problems. Whatever the issue, we can assure you that we are working hard to bring the connection back up.</p>';
            }
            ?>
          </div>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-8">
            <p>Nam volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.</p>
          </div>
        </div>
        <!-- Clinical Care-->
        <div id="clinical-care" class="hero"><img src="_resources/2015/images/mission-clinical-care.jpg" alt="xxxx" , data-magellan-destination="clinical-care"></div>
        <div class="hero-name-stripe"></div>
        <div data-equalizer="data-equalizer" class="row">
          <h2 class="hero-text">Clinical Care</h2>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-4 panel news-box">
            <h3><i class="fa fa-calendar fa-2x"> News<br><span>for Clinical Care</span></i></h3><?php
            if (file_get_contents('http://news.uthsc.edu/news-html/more-links-clinical-care.php')){
            $news_output = file_get_contents('http://news.uthsc.edu/news-html/more-links-clinical-care.php');
            if (trim($news_output) == '<h1>Error establishing a database connection</h1>'){
            echo'<p style="padding:4px;">Our connection to the <a href="http://news.uthsc.edu/">UTHSC News</a> site is currently down. Please check back later for news. This may be due to routine maintenance or unforeseen technical problems. Whatever the issue, we can assure you that we are working hard to bring the connection back up.</p>';
            } else {
            echo $news_output;
            }
            //echo $news_output;
            } else {
            echo'<p style="padding:4px;">Our connection to the <a href="http://news.uthsc.edu/">UTHSC News</a> site is currently down. Please check back later for news. This may be due to routine maintenance or unforeseen technical problems. Whatever the issue, we can assure you that we are working hard to bring the connection back up.</p>';
            }
            ?>
          </div>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-8">
            <p>Nam volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.</p>
          </div>
        </div>
        <!-- Public Service-->
        <div id="public-service" class="hero"><img src="_resources/2015/images/mission-public-service.jpg" alt="xxxx" , data-magellan-destination="public-service"></div>
        <div class="hero-name-stripe"></div>
        <div data-equalizer="data-equalizer" class="row">
          <h2 class="hero-text">Public Service</h2>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-4 panel news-box">
            <h3><i class="fa fa-calendar fa-2x"> News<br><span>for Public Service</span></i></h3><?php
            if (file_get_contents('http://news.uthsc.edu/news-html/more-links-public-service.php')){
            $news_output = file_get_contents('http://news.uthsc.edu/news-html/more-links-public-service.php');
            if (trim($news_output) == '<h1>Error establishing a database connection</h1>'){
            echo'<p style="padding:4px;">Our connection to the <a href="http://news.uthsc.edu/">UTHSC News</a> site is currently down. Please check back later for news. This may be due to routine maintenance or unforeseen technical problems. Whatever the issue, we can assure you that we are working hard to bring the connection back up.</p>';
            } else {
            echo $news_output;
            }
            //echo $news_output;
            } else {
            echo'<p style="padding:4px;">Our connection to the <a href="http://news.uthsc.edu/">UTHSC News</a> site is currently down. Please check back later for news. This may be due to routine maintenance or unforeseen technical problems. Whatever the issue, we can assure you that we are working hard to bring the connection back up.</p>';
            }
            ?>
          </div>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-8">
            <p>Nam volutpat, lacus vel iaculis interdum, lectus lectus ornare nisi, eu sagittis sapien tellus non erat. Ut lectus urna, condimentum at tristique in, dictum nec orci.</p>
          </div>
        </div>
      </div>
      <hr>
      <!-- Social Row-->
      <div data-equalizer="data-equalizer" class="row collapse text-center">
        <div data-equalizer-watch="data-equalizer-watch" style="padding:1.25rem;" class="columns medium-4 panel">
          <h5><i class="fa fa-facebook fa-2x"> Facebook</i></h5>
          <div data-href="https://www.facebook.com/uthsc" data-width="500" data-hide-cover="true" data-show-facepile="false" data-show-posts="true" class="fb-page">
            <div class="fb-xfbml-parse-ignore">
              <blockquote cite="https://www.facebook.com/uthsc"><a href="https://www.facebook.com/uthsc">University of Tennessee Health Science Center</a></blockquote>
            </div>
          </div>
        </div>
        <div data-equalizer-watch="data-equalizer-watch" style="padding:1.25rem;" class="columns medium-3 panel">
          <h5><i class="fa fa-twitter fa-2x"> Twitter</i></h5><a data-dnt="true" href="https://twitter.com/uthsc" data-widget-id="595570516766883840" class="twitter-timeline">Tweets by @uthsc
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></a>
        </div>
        <div data-equalizer-watch="data-equalizer-watch" class="columns medium-3 panel">
          <h6><i class="fa fa-instagram fa-2x"> Instagram</i></h6><iframe src="http://widget.websta.me/in/uthsc/?s=100&w=2&h=2&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:230px; height: 230px" ></iframe> <!-- websta - web.stagram.com -->
        </div>
        <div data-equalizer-watch="data-equalizer-watch" class="columns medium-2 panel">
          <h5><i class="fa fa-pinterest fa-2x"> Pinterest</i></h5><a data-pin-do="embedUser" href="http://www.pinterest.com/uthsc/" data-pin-scale-width="60" data-pin-scale-height="200" data-pin-board-width="200">Visit UTHSC&apos;s profile on Pinterest.
            <script type="text/javascript" async="" defer="" src="//assets.pinterest.com/js/pinit.js"></script></a>
        </div>
      </div>
      <footer></footer>
      <!-- Bottom Footer-->
      <div class="uthsc-footer-bottom">
        <div class="row collapse">
          <div class="columns text-center"><br>
            <p>&copy; <?php echo date("Y") ?> The University of Tennessee<br>Health Science Center<br> Memphis, Tennessee 38163<br> Main: 901-448-5500<br> TDD: 901-448-7382</p><br><a href="mailto:webmaster@uthsc.edu" class="button radius secondary tiny"><i class="fa fa-envelope fa-3x two-line-button-icon"></i><span class="two-line-button-text">Email<br>Webmaster</span></a>
<a href="/password/" class="button radius secondary tiny"><i class="fa fa-key fa-3x two-line-button-icon"></i><span class="two-line-button-text">Edit<br>Password</span></a><br>
            <div class="social-icon">
<a href="http://facebook.com/uthsc"><i class="fa fa-facebook fa-2x fa-inverse"></i></a>
<a href="http://twitter.com/uthsc"><i class="fa fa-twitter fa-2x fa-inverse"></i></a>
<a href="http://instagram.com/uthsc"><i class="fa fa-instagram fa-2x fa-inverse"></i></a>
<a href="http://linkedin.com/company/university-of-tennessee-health-science-center"><i class="fa fa-linkedin fa-2x fa-inverse"></i></a>
<a href="http://pinterest.com/uthsc/"><i class="fa fa-youtube fa-2x fa-inverse"></i></a>
<a href="http://youtube.com/user/uthsc"><i class="fa fa-pinterest fa-2x fa-inverse"></i></a>
            </div><br>
          </div>
        </div>
        <div class="row collapse">
          <div id="emergency-mobile" class="columns small-12 show-for-small">
            <h3 class="text-center"><i class="fa fa-phone fa-flip-horizontal fa-2x"></i> Emergency Numbers</h3><a href="#" data-reveal-id="myModal1" class="button alert expand"><i class="fa fa-info-circle"></i> Medical/Behavioral</a>
            <div id="myModal1" data-reveal="data-reveal" class="reveal-modal text-center">
              <div class="call-buttons-box">
                <h2>Medical/Behavioral</h2>
                <hr>
                <h3 class="lead"><a href="tel:911" class="button emergency"><i class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 911</a></h3>
                <p>or Campus Police at</p>
                <h3><a href="tel:901-448-4444" class="button emergency"><i class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 901-448-4444</a></h3>
              </div>
              <p><a href="#" data-reveal-id="myModal6" class="secondary button tiny expand"><i class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a><a href="#" data-reveal-id="myModal2" class="secondary button tiny expand"><i class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
            </div><a href="#" data-reveal-id="myModal2" class="button alert expand"><i class="fa fa-info-circle"></i> Medical Urgent Care</a>
            <div id="myModal2" data-reveal="data-reveal" class="reveal-modal text-center">
              <div class="call-buttons-box">
                <h2>Medical Urgent Care</h2>
                <hr>
                <h3 class="lead"><a href="tel:901-448-5630" class="button emergency"><i class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 901-448-5630</a></h3>
              </div>
              <p><a href="#" data-reveal-id="myModal1" class="secondary button tiny expand"><i class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a><a href="#" data-reveal-id="myModal3" class="secondary button tiny expand"><i class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
            </div><a href="#" data-reveal-id="myModal3" class="button alert expand"><i class="fa fa-info-circle"></i> Behavioral Health Urgent Care</a>
            <div id="myModal3" data-reveal="data-reveal" class="reveal-modal text-center">
              <div class="call-buttons-box">
                <h2>Behavioral Health Urgent Care</h2>
                <hr>
                <h3 class="lead"><a href="tel:901-448-5064" class="button emergency"><i class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 901-448-5064</a></h3>
              </div>
              <p><a href="#" data-reveal-id="myModal2" class="secondary button tiny expand"><i class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a><a href="#" data-reveal-id="myModal4" class="secondary button tiny expand"><i class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
            </div><a href="#" data-reveal-id="myModal4" class="button alert expand"><i class="fa fa-info-circle"></i> Student Assistance Program</a>
            <div id="myModal4" data-reveal="data-reveal" class="reveal-modal text-center">
              <div class="call-buttons-box">
                <h2>Student Assistance Program (SAP)</h2>
                <hr>
                <h3 class="lead"><a href="tel:800-327-2255" class="button emergency"><i class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 800-327-2255<br>(Option 3)</a></h3>
              </div>
              <p><a href="#" data-reveal-id="myModal3" class="secondary button tiny expand"><i class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a><a href="#" data-reveal-id="myModal5" class="secondary button tiny expand"><i class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
            </div><a href="#" data-reveal-id="myModal5" class="button alert expand"><i class="fa fa-info-circle"></i> Employee Assistance Program</a>
            <div id="myModal5" data-reveal="data-reveal" class="reveal-modal text-center">
              <div class="call-buttons-box">
                <h2>Employee Assistance Program (EAP)</h2>
                <hr>
                <h3 class="lead"><a href="tel:855-437-3486" class="button emergency"><i class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 855-437-3486</a></h3>
              </div>
              <p><a href="#" data-reveal-id="myModal4" class="secondary button tiny expand"><i class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a><a href="#" data-reveal-id="myModal6" class="secondary button tiny expand"><i class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
            </div><a href="#" data-reveal-id="myModal6" class="button alert expand"><i class="fa fa-info-circle"></i> After Hours Medical/Behavioral</a>
            <div id="myModal6" data-reveal="data-reveal" class="reveal-modal text-center">
              <div class="call-buttons-box">
                <h2>After Hours Medical/Behavioral<br>Available (24/7)</h2>
                <hr>
                <h3 class="lead"><a href="tel:901-541-5654" class="button emergency"><i class="fa fa-phone fa-2x fa-flip-horizontal fa-button"></i> 901-541-5654</a></h3>
              </div>
              <p><a href="#" data-reveal-id="myModal5" class="secondary button tiny expand"><i class="fa fa-chevron-up fa-2x fa-button"></i> Previous Emergency Number</a><a href="#" data-reveal-id="myModal1" class="secondary button tiny expand"><i class="fa fa-chevron-down fa-2x fa-button"></i> Next Emergency Number</a></p><a class="close-reveal-modal">×</a>
            </div>
          </div>
          <div id="emergency-desktop" class="medium-5 medium-centered columns hide-for-small">
            <div class="row"><a href="/univheal/emergencies.php" class="button alert radius expand">
                <div class="columns large-5 medium-4 text-right emergency-phone-icon"><i class="fa fa-phone fa-flip-horizontal fa-3x"></i></div>
                <div class="columns large-7 medium-8 text-left">
                  <h4>Emergency<br>Numbers</h4>
                </div>
                <div class="columns small-12">Call 911 or Campus Police at 901-448-4444<br> More Emergency Information</div></a></div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="_resources/2015/js/jquery.min.js"></script>
    <script type="text/javascript" src="_resources/2015/js/uthsc.foundation.min.js"></script>
    <script type="text/javascript">
      (function($){
          $(document).foundation({
              "magellan-expedition": {
                  active_class: 'gellin', // specify the class used for active sections
              }
          });
      })(jQuery);
    </script>
    <script src="_resources/2015/js/uthsc.min.js"></script>
  </body>
</html>