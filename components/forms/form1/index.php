<?php
if (!wp_style_is('form1', 'enqueued')) {
    wp_enqueue_style('form1', get_template_directory_uri() . '/components/forms/form1/style.css');
}

if (!wp_script_is('form1', 'enqueued')) {
    wp_enqueue_script('form1', get_template_directory_uri() . '/components/forms/form1/script.js', array(), null, true);
}

?>




<section class="form1  ">
    <div class="container">
      <div class="heading heading_center">
        <h2>Get In <span>Touch</span></h2>
      </div>
      <div class="form-flex">
        <div class="col-md-6 px-0">
          <div class="form_container">
            <form action="">
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" class="form-control" placeholder="Phone Number">
                </div>
                <div class="form-group col-lg-6">
                  <select name="" id="" class="form-control wide" style="display: none;">
                    <option value="">Select Service</option>
                    <option value="">Service 1</option>
                    <option value="">Service 2</option>
                    <option value="">Service 3</option>
                  </select><div class="nice-select form-control wide" tabindex="0"><span class="current">Select Service</span><ul class="list"><li data-value="" class="option selected">Select Service</li><li data-value="" class="option">Service 1</li><li data-value="" class="option">Service 2</li><li data-value="" class="option">Service 3</li></ul></div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="message-box form-control" placeholder="Message">
                </div>
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40612.85057372197!2d30.410522205841804!3d50.4913152352858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cd90b4cdcdcb%3A0xa8479fce09c1f168!2z0J_QvtC00L7Qu9GM0YHQutC40Lkg0YDQsNC50L7QvSwg0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1741086487493!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>