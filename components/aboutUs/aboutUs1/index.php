<?php
if (!wp_style_is('aboutUs1', 'enqueued')) {
    wp_enqueue_style('aboutUs1', get_template_directory_uri() . '/components/aboutUs/aboutUs1/style.css');
}
?>




<div class="aboutUs1 layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">About Us</h1>
                     <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_right_0">
                  <div><img src="http://localhost/templates/wp-content/uploads/2025/03/about-img.png" class="about_img"></div>
               </div>
            </div>
         </div>
      </div>