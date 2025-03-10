<?php
if (!wp_style_is('first-component3', 'enqueued')) {
    wp_enqueue_style('first-component-style3', get_template_directory_uri() . '/components/firstComponents/firstComponent3/style.css');
}
?>

<header id="banner" class="firstComponent3 scrollto clearfix" data-enllax-ratio=".5" tabindex="-1" style="background-position: center -8px;">
        <div id="header" class="nav-collapse  sticky fadeIn animated" style="position: fixed; z-index: 9999;">
          <div class="row clearfix">
            <div class="col-1">
              <!--Logo-->
              <div id="logo">
                <!--Logo that is shown on the banner-->
                <img src="http://localhost/templates/wp-content/uploads/2025/03/logo-1.png" id="banner-logo" alt="Landing Page">
                <!--End of Banner Logo-->

                <!--The Logo that is shown on the sticky Navigation Bar-->
                <!-- <img src="images/logo-2.png" id="navigation-logo" alt="Landing Page"> -->
                <!--End of Navigation Logo-->
              </div>
              <!--End of Logo-->

              

              <!--Main Navigation-->
              <nav id="nav-main">
                <ul>
                  <li>
                    <a href="#banner" class="active">Home</a>
                  </li>
                  <li>
                    <a href="#about" class="">About</a>
                  </li>
                  <li>
                    <a href="#gallery" class="">Gallery</a>
                  </li>
                  <li>
                    <a href="#services" class="">Services</a>
                  </li>
                  <li>
                    <a href="#testimonials" class="">Testimonials</a>
                  </li>
                  <li>
                    <a href="#clients" class="">Clients</a>
                  </li>
                  <li>
                    <a href="#pricing" class="">Pricing</a>
                  </li>
                </ul>
              </nav>
              <!--End of Main Navigation-->

              <div id="nav-trigger"><span></span></div>
              <nav id="nav-mobile">
                <ul>
                  <li>
                    <a href="#banner" class="active">Home</a>
                  </li>
                  <li>
                    <a href="#about" class="">About</a>
                  </li>
                  <li>
                    <a href="#gallery" class="">Gallery</a>
                  </li>
                  <li>
                    <a href="#services" class="">Services</a>
                  </li>
                  <li>
                    <a href="#testimonials" class="">Testimonials</a>
                  </li>
                  <li>
                    <a href="#clients" class="">Clients</a>
                  </li>
                  <li>
                    <a href="#pricing" class="">Pricing</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <!--End of Header-->

        <!--Banner Content-->
        <div id="banner-content" class="row clearfix">
          <div class="col-38">
            <div class="section-heading">
              <h1>A FREE AND SIMPLE LANDING PAGE</h1>
              <h2>Namari is a free landing page template you can use for your projects. It is free to use for your personal and commercial projects, enjoy!</h2>
            </div>

            <!--Call to Action-->
            <a href="#" class="button">START CREATING TODAY</a>
            <!--End Call to Action-->
          </div>
        </div>
        <!--End of Row-->
      </header>