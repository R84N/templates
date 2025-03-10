<?php
if (!wp_style_is('form2', 'enqueued')) {
    wp_enqueue_style('form2', get_template_directory_uri() . '/components/forms/form2/style.css');
}


?>

<section class="form2 layout_padding">

    <div class="container">
      <div class="d-flex justify-content-center d-md-block">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="form-flex">
        <div class="col-md-6">
          <form action="">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" placeholder="Name">
                </div>
                <div>
                  <input type="email" placeholder="Email">
                </div>
                <div>
                  <input type="text" placeholder="Phone Number">
                </div>
                <div class="mt-5">
                  <input type="text" placeholder="Message">
                </div>
                <div class="mt-5 d-flex justify-content-center justify-content-sm-start">
                  <button type="submit">
                    Send
                  </button>
                </div>
              </div>

            </div>

          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="http://localhost/templates/wp-content/uploads/2025/03/contact.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>