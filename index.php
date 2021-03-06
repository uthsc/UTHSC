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
        <button class="nav-toggler toggle-push-right"></button><?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')) { ?>
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
      </header>
      <!-- Fullscreen image-->
      <div class="hide-for-small">
        <div class="fullscreen">
          <div style="height: 38%;"></div>
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
      </div>
      <!-- tabs-->
      <div class="row show-for-small-down">
        <div class="columns small-centered">
          <ul data-tab="" role="tablist" class="tabs">
            <li role="presentational" class="tab-title active text-center"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1"><i class="fa fa-graduation-cap fa-2x"></i></a></li>
            <li role="presentational" class="tab-title text-center"><a href="#panel2-2" role="tab" tabindex="0" aria-selected="false" controls="panel2-2"><i class="fa fa-flask fa-2x"></i></a></li>
            <li role="presentational" class="tab-title text-center"><a href="#panel2-3" role="tab" tabindex="0" aria-selected="false" controls="panel2-3"><i class="fa fa-medkit fa-2x"></i></a></li>
            <li role="presentational" class="tab-title text-center"><a href="#panel2-4" role="tab" tabindex="0" aria-selected="false" controls="panel2-4"><i class="fa fa-globe fa-2x"></i></a></li>
          </ul>
          <div class="tabs-content content-area">
            <section id="panel2-1" role="tabpanel" aria-hidden="false" class="content active">
              <div class="row collapse">
                <div class="columns mission-image"><img src="_resources/2015/images/mission-education.jpg" alt="xxxx"></div>
                <div class="columns mission-name">
                  <h2 class="tab-header">Education</h2>
                </div>
                <div data-equalizer-watch="data-equalizer-watch" class="columns medium-9">
                  <div class="show-for-small-only"><img src="_resources/2015/images/numbers.png"></div>
                  <div class="show-for-medium-up"><img src="_resources/2015/images/numbers.png" style="padding: 2vw 6vw 0;"></div>
                  <hr style="width: 80%;margin: 3% 10%;">
                  <div class="row">
                    <div class="columns medium-10 medium-centered">
                      <h3>Students</h3>
                      <div class="row">
                        <div class="columns medium-4">
                          <h4>Future</h4>
                          <ul>
                            <li><a href="/admissions/">Admissions</a></li>
                            <li><a href="/admissions/application-deadlines.php">Application Deadlines</a></li>
                            <li><a href="/admissions/degrees-offered.php">Degrees Offered</a></li>
                            <li><a href="/finaid/">Financial Aid</a></li>
                            <li><a href="/maps/">Maps and Directions</a></li>
                            <li><a href="/international/">International Students</a></li>
                            <li><a href="/futurestudents/">More...</a></li>
                          </ul>
                        </div>
                        <div class="columns medium-4">
                          <h4>Current</h4>
                          <ul>
                            <li><a href="/registrar/academic_calendar.php">Academic Calendar</a></li>
                            <li><a href="/registrar/students.php#catalogs">Academic Catalog</a></li>
                            <li><a href="/banner/">Banner Self-Service</a></li>
                            <li><a href="/centerscope/">CenterScope</a></li>
                            <li><a href="/oss/">One Stop Shop</a></li>
                            <li><a href="/studentlife/">Student Life/SGAEC</a></li>
                            <li><a href="/volshop/">VolShop</a></li>
                            <li><a href="/registrar/">Registrar</a></li>
                            <li><a href="/finance/bursar/">Bursar&rsquo;s Office</a></li>
                            <li><a href="/students/">More...</a></li>
                          </ul>
                        </div>
                        <div class="columns medium-4">
                          <h4>Residents</h4>
                          <ul>
                            <li><a href="/GME/">Graduate Medical Education (GME)</a></li>
                            <li><a href="/dentistry/Grad/programs.php">Dentistry</a></li>
                            <li><a href="/pharmacy/dcp/residencyfellowship/cprp/">Pharmacy</a></li>
                            <li><a href="/hospitals/">Affiliated Hospitals</a></li>
                            <li><a href="/residency/">More...</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="columns collapse college-image">
                  <h3>Colleges</h3><a href="/dentistry/"><img src="_resources/2015/images/colleges-arches-01.jpg"></a><a href="/grad/"><img src="_resources/2015/images/colleges-arches-02.jpg"></a><a href="/health-professions/"><img src="_resources/2015/images/colleges-arches-03.jpg"></a><a href="/medicine/"><img src="_resources/2015/images/colleges-arches-04.jpg"></a><a href="/nursing/"><img src="_resources/2015/images/colleges-arches-05.jpg"></a><a href="/pharmacy/"><img src="_resources/2015/images/colleges-arches-06.jpg"></a>
                </div>
                <div data-equalizer-watch="data-equalizer-watch" class="columns medium-3 news-box">
                  <div class="row">
                    <div class="columns small-11">
                      <h3><i class="fa fa-newspaper-o"> News<br><span class="news-box-for">for Education</span></i></h3>
                    </div>
                    <div class="columns small-12"><?php readfile("http://news.uthsc.edu/news-html/redesign-news-education.php"); ?></div>
                  </div>
                </div>
              </div>
            </section>
            <section id="panel2-2" role="tabpanel" aria-hidden="true" class="content">
              <div class="row collapse">
                <div class="columns mission-image"><img src="_resources/2015/images/mission-research.jpg" alt="xxxx"></div>
                <div class="columns mission-name">
                  <h2 class="tab-header">Research</h2>
                </div>
              </div>
              <div data-equalizer-watch="data-equalizer-watch" style="padding: 40vh 0;text-align: center;margin-top: 15px;background-image: url('_resources/2015/images/flask.png');background-repeat: no-repeat;background-size: 50%;background-position: 50%;" class="columns medium-9 panel">
                <p>Research specific content will be in this space.<br>See the<a href="#education"> Education</a> section for example.</p>
              </div>
              <div data-equalizer-watch="data-equalizer-watch" class="columns medium-3 news-box">
                <div class="row">
                  <div class="columns small-11">
                    <h3><i class="fa fa-newspaper-o"> News<br><span class="news-box-for">for Research</span></i></h3>
                  </div>
                  <div class="columns small-12"><?php readfile("http://news.uthsc.edu/news-html/redesign-news-research.php"); ?></div>
                </div>
              </div>
            </section>
            <section id="panel2-3" role="tabpanel" aria-hidden="true" class="content">
              <div class="row collapse">
                <div class="columns mission-image"><img src="_resources/2015/images/mission-clinical-care.jpg" alt="xxxx"></div>
                <div class="columns mission-name">
                  <h2 class="tab-header">Clinical Care</h2>
                </div>
              </div>
              <div data-equalizer-watch="data-equalizer-watch" style="padding: 40vh 0;text-align: center;margin-top: 15px;background-image: url('_resources/2015/images/medkit.png');background-repeat: no-repeat;background-size: 50%;background-position: 50%;" class="columns medium-9 panel">
                <p>Clinical Care specific content will be in this space.<br>See the<a href="#education"> Education</a> section for example.</p>
              </div>
              <div data-equalizer-watch="data-equalizer-watch" class="columns medium-3 news-box">
                <div class="row">
                  <div class="columns small-11">
                    <h3><i class="fa fa-newspaper-o"> News<br><span class="news-box-for">for Clinical Care</span></i></h3>
                  </div>
                  <div class="columns small-12"><?php readfile("http://news.uthsc.edu/news-html/redesign-news-clinical-care.php"); ?></div>
                </div>
              </div>
            </section>
            <section id="panel2-4" role="tabpanel" aria-hidden="true" class="content">
              <div class="row collapse">
                <div class="columns mission-image"><img src="_resources/2015/images/mission-public-service.jpg" alt="xxxx"></div>
                <div class="columns mission-name">
                  <h2 class="tab-header">Public Service</h2>
                </div>
              </div>
              <div data-equalizer-watch="data-equalizer-watch" style="padding: 40vh 0;text-align: center;margin-top: 15px;background-image: url('_resources/2015/images/globe.png');background-repeat: no-repeat;background-size: 50%;background-position: 50%;" class="columns medium-9 panel">
                <p>Public Service specific content will be in this space.<br>See the<a href="#education"> Education</a> section for example.</p>
              </div>
              <div data-equalizer-watch="data-equalizer-watch" class="columns medium-3 news-box">
                <div class="row">
                  <div class="columns small-11">
                    <h3><i class="fa fa-newspaper-o"> News<br><span class="news-box-for">for Public Service</span></i></h3>
                  </div>
                  <div class="columns small-12"><?php readfile("http://news.uthsc.edu/news-html/redesign-news-public-service.php"); ?></div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <div id="about" class="content-area">
        <div id="numbers" data-equalizer="data-equalizer" class="row text-center">
          <div data-equalizer-watch="data-equalizer-watch" class="columns numbers medium-3">
            <h2>$2.7</h2>
            <p>Billion</p>
            <p>contributed to the<br><span>Tennessee economy</span></p>
          </div>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-6">
            <div class="row numbers tennessee">
              <div class="columns medium-6">
                <h2>4<i class="fa fa-map-marker"></i></h2>
                <p>Campuses</p>
                <p><a href="#">Memphis |</a><a href="#"> Knoxville |</a><a href="#"> Nashville |</a><a href="#"> Chattanooga</a></p>
              </div>
              <div class="columns medium-6">
                <h2>100+</h2>
                <p>Clinical &amp<br>Educational Sites</p>
              </div>
            </div>
            <p><span style="position: relative; top: -2.7rem;">Across Tennessee</span></p>
          </div>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-3 numbers">
            <h2>$200</h2>
            <p>Million</p>
            <p>in sponsored programs<br><span>in fiscal 2014</span></p>
          </div>
        </div>
        <div class="row">
          <div class="columns small-centered medium-8 large-7">
            <div class="row">
              <div class="columns medium-6"><a class="button large expand"><i class="fa fa-road"> Take a Tour</i></a></div>
              <div class="columns medium-6"><a class="button large expand"><i class="fa fa-clock-o"> Schedule a Visit</i></a></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="columns small-centered medium-7">
            <div class="map-cover"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d52195.518026446356!2d-89.996586!3d35.151136!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1434487876316" width="100%" height="275" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
        <div id="events" class="row"><?php readfile("http://events.uthsc.edu/widgets/uthsc_homepage_2015.php"); ?></div>
        <div class="row">
          <div class="columns small-centered small-8">
            <div class="row blockquote collapse">
              <div class="columns small-3">
                <h2><i class="fa fa-5x fa-quote-left quotemark"></i></h2>
              </div>
              <div class="columns small-9">
                <blockquote>
                  <p>Could the design processes we&rsquo;ve come to rely on, particularly in relation to responsive design, have hindered our creativity?</p>
                  <cite>Andrew Clarke</cite>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Images for Mission Sets-->
      <div class="hide-for-small content-area">
        <!-- Education-->
        <div id="education" class="hero"><img src="_resources/2015/images/mission-education.jpg" alt="xxxx" data-magellan-destination="education"></div>
        <div class="hero-name-stripe"></div>
        <div data-equalizer="data-equalizer" class="row">
          <h2 class="hero-text">Education</h2>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-3 news-box">
            <div class="row">
              <div class="columns small-11">
                <h3><i class="fa fa-newspaper-o"> News<br><span class="news-box-for">for Education</span></i></h3>
              </div>
              <div class="columns small-12"><?php readfile("http://news.uthsc.edu/news-html/redesign-news-education.php"); ?></div>
            </div>
          </div>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-9">
            <div class="show-for-small-only"><img src="_resources/2015/images/numbers.png"></div>
            <div class="show-for-medium-up"><img src="_resources/2015/images/numbers.png" style="padding: 2vw 6vw 0;"></div>
            <hr style="width: 80%;margin: 3% 10%;">
            <div class="row">
              <div class="columns medium-10 medium-centered">
                <h3>Students</h3>
                <div class="row">
                  <div class="columns medium-4">
                    <h4>Future</h4>
                    <ul>
                      <li><a href="/admissions/">Admissions</a></li>
                      <li><a href="/admissions/application-deadlines.php">Application Deadlines</a></li>
                      <li><a href="/admissions/degrees-offered.php">Degrees Offered</a></li>
                      <li><a href="/finaid/">Financial Aid</a></li>
                      <li><a href="/maps/">Maps and Directions</a></li>
                      <li><a href="/international/">International Students</a></li>
                      <li><a href="/futurestudents/">More...</a></li>
                    </ul>
                  </div>
                  <div class="columns medium-4">
                    <h4>Current</h4>
                    <ul>
                      <li><a href="/registrar/academic_calendar.php">Academic Calendar</a></li>
                      <li><a href="/registrar/students.php#catalogs">Academic Catalog</a></li>
                      <li><a href="/banner/">Banner Self-Service</a></li>
                      <li><a href="/centerscope/">CenterScope</a></li>
                      <li><a href="/oss/">One Stop Shop</a></li>
                      <li><a href="/studentlife/">Student Life/SGAEC</a></li>
                      <li><a href="/volshop/">VolShop</a></li>
                      <li><a href="/registrar/">Registrar</a></li>
                      <li><a href="/finance/bursar/">Bursar&rsquo;s Office</a></li>
                      <li><a href="/students/">More...</a></li>
                    </ul>
                  </div>
                  <div class="columns medium-4">
                    <h4>Residents</h4>
                    <ul>
                      <li><a href="/GME/">Graduate Medical Education (GME)</a></li>
                      <li><a href="/dentistry/Grad/programs.php">Dentistry</a></li>
                      <li><a href="/pharmacy/dcp/residencyfellowship/cprp/">Pharmacy</a></li>
                      <li><a href="/hospitals/">Affiliated Hospitals</a></li>
                      <li><a href="/residency/">More...</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="colleges" class="hero panel">
          <div class="row colleges">
            <div class="columns">
              <h2>Colleges</h2>
            </div>
            <div class="columns">
              <ul class="colleges-grid">
                <li><img src="_resources/2015/images/cod1.jpg" onmouseover="this.src='_resources/2015/images/cod2.jpg'" onmouseout="this.src='_resources/2015/images/cod1.jpg'"></li>
                <li><img src="_resources/2015/images/cghs1.jpg" onmouseover="this.src='_resources/2015/images/cghs2.jpg'" onmouseout="this.src='_resources/2015/images/cghs1.jpg'"></li>
                <li><img src="_resources/2015/images/chp1.jpg" onmouseover="this.src='_resources/2015/images/chp2.jpg'" onmouseout="this.src='_resources/2015/images/chp1.jpg'"></li>
                <li><img src="_resources/2015/images/com1.jpg" onmouseover="this.src='_resources/2015/images/com2.jpg'" onmouseout="this.src='_resources/2015/images/com1.jpg'"></li>
                <li><img src="_resources/2015/images/con1.jpg" onmouseover="this.src='_resources/2015/images/con2.jpg'" onmouseout="this.src='_resources/2015/images/con1.jpg'"></li>
                <li><img src="_resources/2015/images/cop1.jpg" onmouseover="this.src='_resources/2015/images/cop2.jpg'" onmouseout="this.src='_resources/2015/images/cop1.jpg'"></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Research-->
        <div id="research" class="hero"><img src="_resources/2015/images/mission-research.jpg" alt="xxxx" data-magellan-destination="research"></div>
        <div class="hero-name-stripe"></div>
        <div data-equalizer="data-equalizer" class="row">
          <h2 class="hero-text">Research</h2>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-3 news-box">
            <div class="row">
              <div class="columns small-11">
                <h3><i class="fa fa-newspaper-o"> News<br><span class="news-box-for">for Research</span></i></h3>
              </div>
              <div class="columns small-12"><?php readfile("http://news.uthsc.edu/news-html/redesign-news-research.php"); ?></div>
            </div>
          </div>
          <div data-equalizer-watch="data-equalizer-watch" style="padding: 40vh 0;text-align: center;margin-top: 15px;background-image: url('_resources/2015/images/flask.png');background-repeat: no-repeat;background-size: 50%;background-position: 50%;" class="columns medium-9 panel">
            <p>Research specific content will be in this space.<br>See the<a href="#education"> Education</a> section for example.</p>
          </div>
        </div>
        <!-- Clinical Care-->
        <div id="clinical-care" class="hero"><img src="_resources/2015/images/mission-clinical-care.jpg" alt="xxxx" , data-magellan-destination="clinical-care"></div>
        <div class="hero-name-stripe"></div>
        <div data-equalizer="data-equalizer" class="row">
          <h2 class="hero-text">Clinical Care</h2>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-3 news-box">
            <div class="row">
              <div class="columns small-11">
                <h3><i class="fa fa-newspaper-o"> News<br><span class="news-box-for">for Clinical Care</span></i></h3>
              </div>
              <div class="columns small-12"><?php readfile("http://news.uthsc.edu/news-html/redesign-news-clinical-care.php"); ?></div>
            </div>
          </div>
          <div data-equalizer-watch="data-equalizer-watch" style="padding: 40vh 0;text-align: center;margin-top: 15px;background-image: url('_resources/2015/images/medkit.png');background-repeat: no-repeat;background-size: 50%;background-position: 50%;" class="columns medium-9 panel">
            <p>Clinical Care specific content will be in this space.<br>See the<a href="#education"> Education</a> section for example.</p>
          </div>
        </div>
        <!-- Public Service-->
        <div id="public-service" class="hero"><img src="_resources/2015/images/mission-public-service.jpg" alt="xxxx" , data-magellan-destination="public-service"></div>
        <div class="hero-name-stripe"></div>
        <div data-equalizer="data-equalizer" class="row">
          <h2 class="hero-text">Public Service</h2>
          <div data-equalizer-watch="data-equalizer-watch" class="columns medium-3 news-box">
            <div class="row">
              <div class="columns small-11">
                <h3><i class="fa fa-newspaper-o"> News<br><span class="news-box-for">for Public Service</span></i></h3>
              </div>
              <div class="columns small-12"><?php readfile("http://news.uthsc.edu/news-html/redesign-news-public-service.php"); ?></div>
            </div>
          </div>
          <div data-equalizer-watch="data-equalizer-watch" style="padding: 40vh 0;text-align: center;margin-top: 15px;background-image: url('_resources/2015/images/globe.png');background-repeat: no-repeat;background-size: 50%;background-position: 50%;" class="columns medium-9 panel">
            <p>Public Service specific content will be in this space.<br>See the<a href="#education"> Education</a> section for example.</p>
          </div>
        </div>
      </div>
      <hr>
      <!-- Social Row-->
      <div id="social-row" data-equalizer="data-equalizer" class="row collapse text-center">
        <div class="columns medium-4 social-site">
          <h5><i class="fa fa-facebook fa-2x"> Facebook</i></h5>
          <div data-href="https://www.facebook.com/uthsc" data-width="500" data-hide-cover="true" data-show-facepile="false" data-show-posts="true" data-equalizer-watch="data-equalizer-watch" class="fb-page">
            <div class="fb-xfbml-parse-ignore">
              <blockquote cite="https://www.facebook.com/uthsc"><a href="https://www.facebook.com/uthsc">University of Tennessee Health Science Center</a></blockquote>
            </div>
          </div>
        </div>
        <div class="columns medium-4 social-site">
          <h5><i class="fa fa-twitter fa-2x"> Twitter</i></h5><a data-dnt="true" href="https://twitter.com/uthsc" data-widget-id="614465323593539584" data-equalizer-watch="data-equalizer-watch" class="twitter-timeline">Tweets by @uthsc
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></a>
        </div>
        <div class="columns medium-4 social-site">
          <h5><i class="fa fa-instagram fa-2x"> Instagram</i></h5>
          <div data-equalizer-watch="data-equalizer-watch" class="div"><iframe src="http://widget.websta.me/in/uthsc/?s=120&w=2&h=4&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:270px; height: 600px" ></iframe> <!-- websta - web.stagram.com --></div>
        </div>
      </div>
      <footer></footer>
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