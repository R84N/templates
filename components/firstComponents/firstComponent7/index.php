<?php
if (!wp_style_is('first-component7', 'enqueued')) {
    wp_enqueue_style('first-component-style7', get_template_directory_uri() . '/components/firstComponents/firstComponent7/style.css');
}
?>


<section class="firstComponent7">
   <div class="container container-flex">

       <div class="right">
            <img src="http://localhost/templates/wp-content/uploads/2025/03/lawyer.png" alt="">
       </div>

       <div class="left">
            <h1>
                My Name Is Josh Du <br>
                & I’m An Expert  <br>
                In Civil Law <br>
                  
            </h1>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua
            </p>

            <div class="read-more">
                 <a href="#">Read More</a>
            </div>
       </div>
   </div>
</section>