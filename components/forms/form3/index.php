<?php
if (!wp_style_is('form3', 'enqueued')) {
    wp_enqueue_style('form3', get_template_directory_uri() . '/components/forms/form3/style.css');
}
?>

<section class="form3 layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name">
              </div>
              <div>
                <input type="email" placeholder="Your Email">
              </div>
              <div>
                <input type="text" placeholder="Your Phone">
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message">
              </div>
              <div class="btn_box ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>