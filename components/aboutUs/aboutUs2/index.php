<?php
if (!wp_style_is('aboutUs2', 'enqueued')) {
    wp_enqueue_style('aboutUs2', get_template_directory_uri() . '/components/aboutUs/aboutUs2/style.css');
}
?>


<section class="aboutUs3 about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about_detail-box">
            <h3 class="text-uppercase">
              About Us
            </h3>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have
              sufftext.
            </p>
            <div class="d-flex justify-content-center justify-content-sm-start">
                <a href="" class="sub_call_to-btn ">
                  <span>
                    Read More
                  </span>
                  <img src="http://localhost/templates/wp-content/uploads/2025/03/right-arrow.png" alt="">
                </a>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="about_img-box">
          <img src="http://localhost/templates/wp-content/uploads/2025/03/about.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>