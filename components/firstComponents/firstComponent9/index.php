<?php
if (!wp_style_is('first-component9', 'enqueued')) {
    wp_enqueue_style('first-component-style9', get_template_directory_uri() . '/components/firstComponents/firstComponent9/style.css');
}
?>

<section class="firstComponent9">

   <div class="container flex-container">
        <div class="left">
             <h1>Best App Website Template</h1>
             <p class="top-text">This awesome template designed by W3 Template.</p>
             <p class="bottom-text">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit neque massa, sit amet tristique ante porta ut. In sodales et justo vel vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
             </p>

             <div class="buttons">
                <img src="http://localhost/templates/wp-content/uploads/2025/03/appstore.png" alt="">
                <img src="http://localhost/templates/wp-content/uploads/2025/03/playstore.png" alt="">
             </div>
        </div>
        <div class="right">
            <img src="http://localhost/templates/wp-content/uploads/2025/03/iphone-screen.png" alt="">
        </div>
   </div>

</section>