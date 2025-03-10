<?php
if (!wp_style_is('form7', 'enqueued')) {
    wp_enqueue_style('form7', get_template_directory_uri() . '/components/forms/form7/style.css');
}
?>


<section  class=" form7">
            <div class="contact100-form-title container">
                <h3>Keep In Touch</h3>
                <h2>Send A Message</h2>
                    <form class="contact100-form validate-form">
                       

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Your Name</span>
                            <input class="input100" type="text" name="name" placeholder="Enter your name">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Email</span>
                            <input class="input100" type="text" name="email" placeholder="Enter your email addess">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Message is required">
                            <span class="label-input100">Message</span>
                            <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                                <span>
                                    Submit
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>

                        <div class="container-contact100-form-btn response" style="margin-top: 30px;">
                            <p class="error">
                            </p>
                        </div>
                    </form>
                </div>
        </section>