<?php
if (!wp_style_is('form10', 'enqueued')) {
    wp_enqueue_style('form10', get_template_directory_uri() . '/components/forms/form10/style.css');
}
?>
<section class="form10">
    <div class="container">
        <div class="background_gradient"></div>
        <div class="flex-wrapper">
            <div class="left">
                <div class="contact_details">
                    <div class="like_a_title">Contact details</div>
                    <div class="contact_info">
                        <ul class="soc_links">
                            <li>
                                <a href="https://www.linkedin.com/company/waydigit/" aria-label="In" rel="noreferrer noopener nofollow" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20" version="1.1">
                                        <title>linkedin [#161]</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -7479.000000)" fill="currentColor">
                                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                                    <path
                                                        d="M144,7339 L140,7339 L140,7332.001 C140,7330.081 139.153,7329.01 137.634,7329.01 C135.981,7329.01 135,7330.126 135,7332.001 L135,7339 L131,7339 L131,7326 L135,7326 L135,7327.462 C135,7327.462 136.255,7325.26 139.083,7325.26 C141.912,7325.26 144,7326.986 144,7330.558 L144,7339 L144,7339 Z M126.442,7323.921 C125.093,7323.921 124,7322.819 124,7321.46 C124,7320.102 125.093,7319 126.442,7319 C127.79,7319 128.883,7320.102 128.883,7321.46 C128.884,7322.819 127.79,7323.921 126.442,7323.921 L126.442,7323.921 Z M124,7339 L129,7339 L129,7326 L124,7326 L124,7339 Z"
                                                        id="linkedin-[#161]"
                                                    ></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="noreferrer noopener nofollow" target="_blank" aria-label="facebbok">
                                    <svg width="100%" style="" viewBox="0 0 13 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0781 13.5H8.5625V24H3.875V13.5H0.03125V9.1875H3.875V5.85938C3.875 2.10938 6.125 0 9.54688 0C11.1875 0 12.9219 0.328125 12.9219 0.328125V4.03125H11C9.125 4.03125 8.5625 5.15625 8.5625 6.375V9.1875H12.7344L12.0781 13.5Z"
                                            fill="currentColor"
                                        ></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="noreferrer noopener nofollow" target="_blank" aria-label="instagram">
                                    <svg width="100%" style="" viewBox="0 0 22 22" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5 5.60938C14.4531 5.60938 16.8906 8.04688 16.8906 11C16.8906 14 14.4531 16.3906 11.5 16.3906C8.5 16.3906 6.10938 14 6.10938 11C6.10938 8.04688 8.5 5.60938 11.5 5.60938ZM11.5 14.5156C13.4219 14.5156 14.9688 12.9688 14.9688 11C14.9688 9.07812 13.4219 7.53125 11.5 7.53125C9.53125 7.53125 7.98438 9.07812 7.98438 11C7.98438 12.9688 9.57812 14.5156 11.5 14.5156ZM18.3438 5.42188C18.3438 4.71875 17.7812 4.15625 17.0781 4.15625C16.375 4.15625 15.8125 4.71875 15.8125 5.42188C15.8125 6.125 16.375 6.6875 17.0781 6.6875C17.7812 6.6875 18.3438 6.125 18.3438 5.42188ZM21.9062 6.6875C22 8.42188 22 13.625 21.9062 15.3594C21.8125 17.0469 21.4375 18.5 20.2188 19.7656C19 20.9844 17.5 21.3594 15.8125 21.4531C14.0781 21.5469 8.875 21.5469 7.14062 21.4531C5.45312 21.3594 4 20.9844 2.73438 19.7656C1.51562 18.5 1.14062 17.0469 1.04688 15.3594C0.953125 13.625 0.953125 8.42188 1.04688 6.6875C1.14062 5 1.51562 3.5 2.73438 2.28125C4 1.0625 5.45312 0.6875 7.14062 0.59375C8.875 0.5 14.0781 0.5 15.8125 0.59375C17.5 0.6875 19 1.0625 20.2188 2.28125C21.4375 3.5 21.8125 5 21.9062 6.6875ZM19.6562 17.1875C20.2188 15.8281 20.0781 12.5469 20.0781 11C20.0781 9.5 20.2188 6.21875 19.6562 4.8125C19.2812 3.92188 18.5781 3.17188 17.6875 2.84375C16.2812 2.28125 13 2.42188 11.5 2.42188C9.95312 2.42188 6.67188 2.28125 5.3125 2.84375C4.375 3.21875 3.67188 3.92188 3.29688 4.8125C2.73438 6.21875 2.875 9.5 2.875 11C2.875 12.5469 2.73438 15.8281 3.29688 17.1875C3.67188 18.125 4.375 18.8281 5.3125 19.2031C6.67188 19.7656 9.95312 19.625 11.5 19.625C13 19.625 16.2812 19.7656 17.6875 19.2031C18.5781 18.8281 19.3281 18.125 19.6562 17.1875Z"
                                            fill="currentColor"
                                        ></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" rel="noreferrer noopener nofollow" target="_blank" aria-label="X">
                                    <svg width="100%" style="" viewBox="0 0 300 271" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1914_4960)">
                                            <path d="M236 0H282L181 115L299 271H206.4L133.9 176.2L50.9004 271H4.90039L111.9 148L-1.09961 0H93.8004L159.3 86.6L236 0ZM219.9 244H245.4L80.4004 26H53.0004L219.9 244Z" fill="currentColor"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1914_4960"><rect width="300" height="271" fill="currentColor"></rect></clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <a class="item" href="mailto:info@waydigit.com">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="30" viewBox="0 0 39 30" fill="none">
                                    <path
                                        d="M2.05311 0.410156C1.14681 0.410156 0.412109 1.14476 0.412109 2.05116V28.3076C0.412109 29.2138 1.14681 29.9486 2.05311 29.9486H36.5147C37.421 29.9486 38.1557 29.2138 38.1557 28.3076V2.05116C38.1557 1.14476 37.421 0.410156 36.5147 0.410156H2.05311ZM1.49051 2.32466C1.49051 1.87146 1.85791 1.50406 2.31101 1.50406H36.2568C36.71 1.50406 37.0773 1.87146 37.0773 2.32466V4.29036L20.8257 15.782C19.899 16.4379 18.671 16.4379 17.7422 15.782L1.49051 4.29036V2.32466ZM1.49051 5.62376L17.1271 16.6794C18.4203 17.596 20.1475 17.5939 21.4407 16.6794L37.0773 5.62376V28.034C37.0773 28.4872 36.71 28.8545 36.2568 28.8545H2.31101C1.85791 28.8545 1.49051 28.4872 1.49051 28.034V5.62376Z"
                                        fill="white"
                                    ></path>
                                </svg>
                            </div>
                            <div class="info">
                                <div class="title">Mail:</div>
                                <div class="content gradient_text">info@waydigit.com</div>
                            </div>
                        </a>
                        <span class="item" rel="noreferrer noopener nofollow" target="blank">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="47" viewBox="0 0 34 47" fill="none">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M15.078 44.6447L16.994 42.9362L18.91 44.6447L16.994 46.8509L15.078 44.6447ZM18.6542 40.9277C17.6407 42.1915 16.994 42.9362 16.994 42.9362C16.994 42.9362 16.3473 42.1915 15.3337 40.9277C11.6607 36.3483 3.16939 24.9522 3.16939 17.4692C3.16939 9.50601 9.35139 3.06481 16.994 3.06481C24.6365 3.06481 30.8185 9.50601 30.8185 17.4692C30.8185 24.9522 22.3272 36.3483 18.6542 40.9277ZM16.994 0.478516C26.1127 0.478516 33.3708 8.14611 33.3708 17.4692C33.3708 20.414 32.3267 23.6051 30.9742 26.5636C29.5996 29.5705 27.7907 32.5821 26.0197 35.233C24.2433 37.8921 22.4719 40.2371 21.147 41.9152C20.4834 42.7558 19.929 43.4324 19.5386 43.9014C19.3432 44.136 19.1886 44.3188 19.0816 44.4445C19.0281 44.5073 18.9865 44.5558 18.9576 44.5894L18.9239 44.6285L18.91 44.6447C18.9095 44.6451 18.91 44.6447 16.994 42.9362C15.078 44.6447 15.0783 44.6451 15.078 44.6447L15.064 44.6285L15.0303 44.5894C15.0014 44.5558 14.9598 44.5073 14.9063 44.4445C14.7993 44.3188 14.6448 44.136 14.4494 43.9014C14.0588 43.4324 13.5046 42.7558 12.841 41.9152C11.516 40.2371 9.74469 37.8921 7.96829 35.233C6.19719 32.5821 4.38829 29.5705 3.01369 26.5636C1.66119 23.6051 0.617188 20.414 0.617188 17.4692C0.617188 8.14611 7.87529 0.478516 16.994 0.478516Z"
                                        fill="white"
                                    ></path>
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M26.0123 16.8387C26.0123 21.7784 22.0606 25.7828 17.1858 25.7828C12.3111 25.7828 8.35938 21.7784 8.35938 16.8387C8.35938 11.899 12.3111 7.89453 17.1858 7.89453C22.0606 7.89453 26.0123 11.899 26.0123 16.8387ZM17.1858 23.3043C20.7097 23.3043 23.5664 20.4096 23.5664 16.8387C23.5664 13.2678 20.7097 10.3731 17.1858 10.3731C13.662 10.3731 10.8053 13.2678 10.8053 16.8387C10.8053 20.4096 13.662 23.3043 17.1858 23.3043Z"
                                        fill="white"
                                    ></path>
                                </svg>
                            </div>
                            <div class="info">
                                <a href="https://maps.app.goo.gl/csyEoKKoPP2chv4u9" target="_blank" class="blacl-link">
                                    <div class="title">Mailing Address</div>
                                    <div class="content gradient_text">57 Beach St Suite 306-b, Staten Island, NY 10304</div>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="right">
               
                <h1>Get In Touch With Us</h1>
                <div class="subtitle">
                    <p>
                        Want to start working with the Waydigit team? Have any questions about our company and services? We are here to help. Fill out the form and tell us about your issue, or contact us using any of the methods listed
                        here.
                    </p>
                </div>
                <div class="contact_form">
                    <form id="contact-form" class="custom-form-marker">
                        <div class="row">
                            <div class="field"><label class="title">Name</label> <input name="name" type="text" placeholder="Full Name" required="" /></div>
                            <div class="field"><label class="title">Email</label> <input name="email" type="email" required="" placeholder="Email" /></div>
                        </div>
                        <div class="row">
                            <div class="field"><label class="title">Phone</label> <input name="phone" type="tel" placeholder="Phone" /></div>
                            <div class="field">
                                <label class="title" for="services_select">Services</label>
                                <div class="select_wrapper">
                                    <select id="services_select" name="services">
                                        <option value="SEO">SEO</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="SEO &amp; Web Development">SEO &amp; Web Development</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field"><label class="title">Message</label><textarea name="message" placeholder="Short description of your project"></textarea></div>
                        <div>
                            <div
                                class="grecaptcha-badge"
                                data-style="bottomright"
                                style="
                                    width: 256px;
                                    height: 60px;
                                    position: fixed;
                                    visibility: hidden;
                                    display: block;
                                    transition: right 0.3s;
                                    bottom: 14px;
                                    right: -186px;
                                    box-shadow: gray 0px 0px 5px;
                                    border-radius: 2px;
                                    overflow: hidden;
                                "
                            >
                                <div class="grecaptcha-logo">
                                    <iframe
                                        title="reCAPTCHA"
                                        width="256"
                                        height="60"
                                        role="presentation"
                                        name="a-pfiiqc5n03pz"
                                        frameborder="0"
                                        scrolling="no"
                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfamYkqAAAAABbjnbHWnCHgf83dVsP1aVEyDxp7&amp;co=aHR0cHM6Ly93YXlkaWdpdC5jb206NDQz&amp;hl=uk&amp;v=rW64dpMGAGrjU7JJQr9xxPl8&amp;size=invisible&amp;sa=submit&amp;cb=6g5raq8rnlxc"
                                    ></iframe>
                                </div>
                                <div class="grecaptcha-error"></div>
                                <textarea
                                    id="g-recaptcha-response"
                                    name="g-recaptcha-response"
                                    class="g-recaptcha-response"
                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"
                                ></textarea>
                            </div>
                            <iframe style="display: none;"></iframe>
                        </div>
                        <button class="btn g-recaptcha" data-sitekey="6LfamYkqAAAAABbjnbHWnCHgf83dVsP1aVEyDxp7" data-callback="onSubmit" data-action="submit">Send Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
