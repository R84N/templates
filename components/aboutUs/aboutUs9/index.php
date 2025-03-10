<?php
if (!wp_style_is('aboutUs9', 'enqueued')) {
    wp_enqueue_style('aboutUs9', get_template_directory_uri() . '/components/aboutUs/aboutUs9/style.css');
}
?>

<div class="aboutUs9">
        <h2>About Us</h2>
        <p>Welcome to <strong>NextGen Solutions</strong>, where we redefine possibilities through innovation and technology. Since our inception in 2015, we have been dedicated to helping businesses thrive in a rapidly evolving digital landscape.</p>
        <p>Our team of experts specializes in delivering tailored solutions that drive growth, efficiency, and success. From web development to AI-driven analytics, we are committed to excellence in every project we undertake.</p>
        
        <div class="stats">
            <div class="stat-item">
                <h3>8+</h3>
                <p>Years of Experience</p>
            </div>
            <div class="stat-item">
                <h3>500+</h3>
                <p>Projects Completed</p>
            </div>
            <div class="stat-item">
                <h3>95%</h3>
                <p>Client Satisfaction</p>
            </div>
        </div>

        <a href="#" class="cta-button">Get Started</a>
    </div>