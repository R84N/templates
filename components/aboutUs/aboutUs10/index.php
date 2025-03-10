<?php
if (!wp_style_is('aboutUs10', 'enqueued')) {
    wp_enqueue_style('aboutUs10', get_template_directory_uri() . '/components/aboutUs/aboutUs10/style.css');
}
?>


<div class="aboutUs10">
        <!-- Text Section -->
        <div class="about-text">
            <h2>About Us</h2>
            <p>At <strong>TechVision</strong>, we are passionate about creating innovative solutions that drive success for businesses worldwide. Since 2012, we have been at the forefront of technology, delivering cutting-edge products and services tailored to our clients' needs.</p>
            <p>Our mission is to empower businesses with tools that enhance productivity, efficiency, and growth. From software development to cloud solutions, we are committed to excellence in every project we undertake.</p>
            <a href="#" class="cta-button">Learn More</a>
        </div>

        <!-- Cards Section -->
        <div class="about-cards">
            <div class="card">
                <img src="https://via.placeholder.com/60" alt="Innovation Icon">
                <h3>Innovation</h3>
                <p>We constantly push boundaries to deliver groundbreaking solutions.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/60" alt="Quality Icon">
                <h3>Quality</h3>
                <p>Our commitment to quality ensures exceptional results every time.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/60" alt="Support Icon">
                <h3>Support</h3>
                <p>We provide 24/7 support to ensure your success.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/60" alt="Collaboration Icon">
                <h3>Collaboration</h3>
                <p>We work closely with clients to achieve their goals.</p>
            </div>
        </div>
    </div>