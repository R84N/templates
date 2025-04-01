<?php
if (!wp_style_is('service12', 'enqueued')) {
    wp_enqueue_style('service12', get_template_directory_uri() . '/components/services/service12/style.css');
}
?>

<section class="service12">
    <div class="container">
        <div class="section-title">
            <h2>Our Services</h2>
            <p>We provide high-quality services tailored to meet your specific needs and help your business grow.</p>
        </div>
        
        <div class="services-container">
            <!-- Service Card 1 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3 class="service-title">Web Development</h3>
                <p class="service-description">We create responsive, user-friendly websites that help you achieve your business goals and connect with your audience.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service Card 2 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="service-title">Mobile App Development</h3>
                <p class="service-description">Our team builds native and cross-platform mobile applications that deliver exceptional user experiences.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service Card 3 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="service-title">SEO Optimization</h3>
                <p class="service-description">We improve your website's visibility in search engines to drive more organic traffic and increase conversions.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service Card 4 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="service-title">UI/UX Design</h3>
                <p class="service-description">Our designers create intuitive, engaging interfaces that enhance user satisfaction and boost conversion rates.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service Card 5 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="service-title">Digital Marketing</h3>
                <p class="service-description">We develop comprehensive marketing strategies to help you reach your target audience and grow your business.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service Card 6 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-server"></i>
                </div>
                <h3 class="service-title">Cloud Solutions</h3>
                <p class="service-description">We provide scalable cloud infrastructure and services to optimize your business operations and reduce costs.</p>
                <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        </div>
    </section>