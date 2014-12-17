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
    <!--mobile Breadcrumbs-->
    <a class="button uthsc-split-button-home" href="/"><i class="fa fa-home"></i></a>
    <button data-dropdown="breadcrumbs-left" aria-controls="drop", aria-expanded="false" class="button dropdown uthsc-split-button">Breadcrumbs Back Home</button><br>
    <ol aria-labelledby="breadcrumblabel" id="breadcrumbs-left" data-dropdown-content class="f-dropdown mega uthsc-split-button-breadcrumb-links" role="menu" aria-hidden="false" tabindex="-1">
        <li><a href="/" title="Home"><i class="fa fa-level-up fa-2x fa-flip-horizontal" style="float: left;"></i> Back to the Homepage</a></li>
        <li><a href="products.html" title="Products">College of Medicine</a></li>
        <li><a href="products.html" title="Products">Office of Medical Education</a></li>
        <li><a href="products.html" title="Products">Clerkships</a></li>
        <li><a href="products.html" title="Products">Core Clerkship Directors</a></li>
        <li><a href="" class="current">Chattanooga</a></li>
    </ol>
    <input type="text" placeholder="Search" style="margin:0;">

    <button class="close-menu expand"><i class="fa fa-chevron-left"></i> Close Menu &emsp;</button>
    <ul>
        <li><a href="#">Broccoli</a></li>
        <li><a href="#">Tomato</a></li>
        <li><a href="#">Cucumber</a></li>
        <li><a href="#">Kale</a></li>
        <li><a href="#">Celery</a></li>
        <li><a href="#">CucumberCucu mberCucumbe rCucumber CucumberCucumber</a></li>
        <li><a href="#">Kale</a></li>
        <li><a href="#">Celery</a></li>
    </ul>
    <button class="close-menu expand"><i class="fa fa-chevron-left"></i> Close Menu &emsp;</button>
</nav>

<!-- Right Off Canvas Menu -->
<nav class="offcanvas-nav menu push-menu-right">
    <!--mobile Breadcrumbs-->
    <a class="button uthsc-split-button-home" href="/"><i class="fa fa-home"></i></a>
    <button data-dropdown="breadcrumbs-right" aria-controls="drop", aria-expanded="false" class="button dropdown uthsc-split-button">Breadcrumbs Back Home</button><br>
    <ol aria-labelledby="breadcrumblabel" id="breadcrumbs-right" data-dropdown-content class="f-dropdown mega uthsc-split-button-breadcrumb-links" role="menu" aria-hidden="false" tabindex="-1">
        <li><a href="/" title="Home"><i class="fa fa-level-up fa-2x fa-flip-horizontal" style="float: left;"></i> Back to the Homepage</a></li>
        <li><a href="products.html" title="Products">College of Medicine</a></li>
        <li><a href="products.html" title="Products">Office of Medical Education</a></li>
        <li><a href="products.html" title="Products">Clerkships</a></li>
        <li><a href="products.html" title="Products">Core Clerkship Directors</a></li>
        <li><a href="" class="current">Chattanooga</a></li>
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
    <!--Education
        <a class="button uthsc-split-button-home inverse" href="/education/"><i class="fa fa-graduation-cap"></i></a>
        <button data-dropdown="mission-education" aria-controls="drop", aria-expanded="false" class="button dropdown uthsc-split-button inverse">Education</button><br>
            <ol aria-labelledby="breadcrumblabel" id="mission-education" data-dropdown-content class="f-dropdown mega uthsc-split-button-mission-links inverse" role="menu" aria-hidden="false" tabindex="-1">
                <li><i class="fa fa-level-up fa-flip-horizontal"></i><a href="/education/" title="Home">Go to the Education Site</a></li>
                <li><a href="/dentistry/">Dentistry</a></li>
                <li><a href="/grad/">Graduate Health Sciences</a></li>
                <li><a href="/health-professions/">Health Professions</a></li>
                <li><a href="/Medicine/">Medicine</a></li>
                <li><a href="/nursing/">Nursing</a></li>
                <li><a href="/pharmacy/">Pharmacy</a></li>
            </ol>
    Education (end)-->
    <!--Research
        <a class="button uthsc-split-button-home inverse" href="/research/"><i class="fa fa-flask"></i></a>
        <button data-dropdown="mission-research" aria-controls="drop", aria-expanded="false" class="button dropdown uthsc-split-button inverse">Research</button><br>
            <ol aria-labelledby="breadcrumblabel" id="mission-research" data-dropdown-content class="f-dropdown mega uthsc-split-button-mission-links inverse" role="menu" aria-hidden="false" tabindex="-1">
                <li><i class="fa fa-level-up fa-flip-horizontal"></i><a href="/research/" title="Home">Go to the Research Site</a></li>
                    <li><a href="/research/vc_research.php">Vice Chancellor for Research</a></li>
                    <li><a href="/research/about.php">About Research at UTHSC</a></li>
                    <li><a href="/research/research_administration/">Office of Research Administration</a></li>
                    <li><a href="/research/research_compliance/">Office of Research Compliance</a></li>
                    <li><a href="/research/research_administration/research_contracts/">Research Contracts</a></li>
                    <li><a href="/research/research_programs/">Research Centers and Programs</a></li>
                    <li><a href="/research/research_resources/">Research Resources</a></li>
                    <li><a href="/postdoc/">Postdoctoral Office</a></li>
                    <li><a href="/research/student_research_programs/">Student Research Programs</a></li>
                    <li><a href="/research/utrf.php">Technology Transfer</a></li>
                    <li><a href="/research/MathWorks/">MathWorks Software</a></li>
            </ol>
    Research (end)-->
    <!--Clinical Care
        <a class="button uthsc-split-button-home inverse" href="/clinicalcare/"><i class="fa fa-medkit"></i></a>
        <button data-dropdown="mission-clinicalcare" aria-controls="drop", aria-expanded="false" class="button dropdown uthsc-split-button inverse">Clinical Care</button><br>
            <ol aria-labelledby="breadcrumblabel" id="mission-clinicalcare" data-dropdown-content class="f-dropdown mega uthsc-split-button-mission-links inverse" role="menu" aria-hidden="false" tabindex="-1">
                <li><i class="fa fa-level-up fa-flip-horizontal"></i><a href="/clinicalcare/" title="Home">Go to the Clinical Care Site</a></li>
                <li><a href="http://www.utmedicalgroup.com/">UT Medical Group Home</a></li>
                <li><a href="http://www.utmedicalgroup.com/AboutUs/">About UT Medical Group</a></li>
                <li><a href="http://www.utmedicalgroup.com/Doctors/search.php">Find a Doctor</a></li>
                <li><a href="http://www.utmedicalgroup.com/PatientResources/index.php?pgID=15">Patient Resources</a></li>
                <li><a href="http://www.utmedicalgroup.com/Departments/">Specialties Offered</a></li>
                <li><a href="/dentistry/patients/spec_clinics.php">Emergencies and Specialty Clinics</a></li>
                <li><a href="/dentistry/patients/">General Information</a></li>
                <li><a href="/dentistry/omds/">Oral &amp; Maxillofacial Diagnostic Services</a></li>
                <li><a href="/dentistry/patients/screeningform.php">Patient Screening Form</a></li>
                <li><a href="/dentistry/udp/">University Dental Practice</a></li>
                <li><a href="http://www.methodisthealth.org/utmp/">UT Methodist Physicians Home</a></li>
                <li><a href="http://www.methodisthealth.org/patients-guests/find-a-physician/">Find a Doctor</a></li>
                <li><a href="http://www.methodisthealth.org/patients-guests/">Patient Resources</a></li>
                <li><a href="http://www.methodisthealth.org/healthcare-services/">Specialties Offered</a></li>
                <li><a href="http://www.lebonheur.org/ulps/">UT Le Bonheur Pediatric Specialists Home</a></li>
                <li><a href="http://www.lebonheur.org/your-visit/search-for-a-le-bonheur-physician/">Find a Pediatric Specialists Physician</a></li>
                <li><a href="http://www.lebonheur.org/your-visit/our-regional-and-specialty-clinics/">Locations</a></li>
                <li><a href="http://www.lebonheur.org/ulps/">Specialties Offered</a></li>
                <li><a href="/bcdd/services/">Boling Center for Developmental Disabilities</a></li>
                <li><a href="http://www.campbellclinic.com/">Campbell Orthopedic Clinic</a></li>
                <li><a href="/eye/patient_resources.php">Hamilton Eye Institute</a></li>
                <li><a href="/transplant/">Methodist University Transplant Institute</a></li>
                <li><a href="http://www.semmes-murphey.com/">Semmes-Murphey Neurologic &amp; Spine Institute</a></li>
                <li><a href="http://www.westclinic.com/">The West Clinic</a></li>
                <li><a href="/univheal/">University Health Services</a></li>
                <li><a href="/allied/uth/">University Therapists</a></li>
            </ol>
    Clinical Care (end)-->
    <!--Public Service
        <a class="button uthsc-split-button-home inverse" href="/publicservice/"><i class="fa fa-globe"></i></a>
        <button data-dropdown="mission-publicservice" aria-controls="drop", aria-expanded="false" class="button dropdown uthsc-split-button inverse">Public Service</button><br>
            <ol aria-labelledby="breadcrumblabel" id="mission-publicservice" data-dropdown-content class="f-dropdown mega uthsc-split-button-mission-links" role="menu" aria-hidden="false" tabindex="-1">
                <li><i class="fa fa-level-up fa-flip-horizontal"></i><a href="/publicservice/" title="Home">Go to the Public Service Site</a></li>
                <li><a href="/fooddrive/">Campus Food Drive</a></li>
                <li><a href="/heartwalk/">Heart Walk</a></li>
                <li><a href="/unitedway/">United Way Campaign</a></li>
                <li><a href="http://bbhsl.mecca.org/">Building Bridges to Health Science Literacy</a></li>
                <li><a href="/HCP/">Health Career Programs</a></li>
                <li><a href="/prevmed/health_promo.php">Preventive Medicine Community Health Promotion</a></li>
                <li><a href="/publicservice/clinica_esperanza.pdf">Clinica Esperanza (Clinic of Hope)</a></li>
                <li><a href="/CIAO/">Council for International &amp; Area Outreach (CIAO)</a></li>
            </ol>
    Public Service (end)-->
    <!--Mission Links (end)-->

    <ul>
        <li class="button menu"><i class="fa fa-gift"></i> Make a Gift</li>
        <li class="button menu"><i class="fa fa-road"></i> Take a Tour</li>
        <li>
            <a href="#">Dropdown 1</a>
            <ul class="menu-links">
                <li><a href="#">First link in dropdown</a></li>
                <li class="active"><a href="#">Active link in dropdown</a></li>
            </ul>
        </li>
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
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        <button class="close-menu expand">&emsp; Close Menu &emsp;<i class="fa fa-chevron-right"></i></button>
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
