<?php
if (!wp_style_is('form4', 'enqueued')) {
    wp_enqueue_style('form4', get_template_directory_uri() . '/components/forms/form4/style.css');
}
?>

<section class="form4 layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
        <img src="http://localhost/templates/wp-content/uploads/2025/03/plug.png" alt="">
      </div>
    </div>
    <div class="container">
      <div class="flex-container">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Name">
            </div>
            <div>
              <input type="email" placeholder="Email">
            </div>
            <div>
              <input type="text" placeholder="Phone Number">
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message">
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen=""></iframe>
           
        </div>
      </div>
    </div>
  </section>