<?php
if (!wp_style_is('service11', 'enqueued')) {
    wp_enqueue_style('service11', get_template_directory_uri() . '/components/services/service11/style.css');
}
?>


<section class="services11">
        <h2>Our Services</h2>
        <div class="service-container">
            <div class="service-item">
                <i class="fas fa-laptop-code"></i>
                <h3>Web Development</h3>
                <p>We create responsive and user-friendly websites tailored to your business needs.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-mobile-alt"></i>
                <h3>Mobile App Development</h3>
                <p>We build cross-platform mobile applications for iOS and Android.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-paint-brush"></i>
                <h3>UI/UX Design</h3>
                <p>We design intuitive and visually appealing interfaces for better user experiences.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-chart-line"></i>
                <h3>Digital Marketing</h3>
                <p>We help you grow your business with effective digital marketing strategies.</p>
            </div>
        </div>
    </section>