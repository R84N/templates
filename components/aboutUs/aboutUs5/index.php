<?php
if (!wp_style_is('aboutUs5', 'enqueued')) {
    wp_enqueue_style('aboutUs5', get_template_directory_uri() . '/components/aboutUs/aboutUs5/style.css');
}
?>



<section class="aboutUs5">
        <div class="about-header">
            <h2>About Us</h2>
            <p>We're a passionate team dedicated to creating innovative solutions that make a difference in people's lives.</p>
        </div>
        
        <div class="about-content">
            <div class="about-image">
                <img src="https://via.placeholder.com/600x400" alt="Our office space with team members collaborating">
            </div>
            <div class="about-text">
                <h3>Our Story</h3>
                <p>Founded in 2015, our company began with a simple mission: to create products that solve real problems. What started as a small team of three passionate individuals has grown into a thriving company with over 50 talented professionals.</p>
                <p>We believe in the power of innovation and collaboration. Our diverse team brings together expertise from various fields, allowing us to approach challenges from multiple perspectives and develop comprehensive solutions.</p>
                <p>Over the years, we've helped hundreds of clients transform their ideas into reality. We take pride in our work and are committed to delivering excellence in everything we do.</p>
            </div>
        </div>
        
        <div class="values-section">
            <h3>Our Values</h3>
            <div class="values-container">
                <div class="value-card">
                    <div class="value-icon">★</div>
                    <h4>Excellence</h4>
                    <p>We strive for excellence in everything we do, constantly pushing boundaries and exceeding expectations.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">♥</div>
                    <h4>Integrity</h4>
                    <p>We conduct our business with honesty, transparency, and a strong ethical foundation.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">⚡</div>
                    <h4>Innovation</h4>
                    <p>We embrace creativity and forward-thinking to develop cutting-edge solutions for complex challenges.</p>
                </div>
            </div>
        </div>
        
        <div class="team-section">
            <h3>Meet Our Team</h3>
            <div class="team-container">
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://via.placeholder.com/300x300" alt="Sarah Johnson, CEO">
                    </div>
                    <div class="member-info">
                        <h4>Sarah Johnson</h4>
                        <p class="position">CEO & Founder</p>
                        <p class="bio">With over 15 years of industry experience, Sarah leads our company with vision and passion.</p>
                        <div class="social-links">
                            <a href="#" aria-label="LinkedIn profile">in</a>
                            <a href="#" aria-label="Twitter profile">t</a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://via.placeholder.com/300x300" alt="Michael Chen, CTO">
                    </div>
                    <div class="member-info">
                        <h4>Michael Chen</h4>
                        <p class="position">CTO</p>
                        <p class="bio">Michael's technical expertise and innovative mindset drive our product development.</p>
                        <div class="social-links">
                            <a href="#" aria-label="LinkedIn profile">in</a>
                            <a href="#" aria-label="GitHub profile">gh</a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <img src="https://via.placeholder.com/300x300" alt="Emily Rodriguez, Design Director">
                    </div>
                    <div class="member-info">
                        <h4>Emily Rodriguez</h4>
                        <p class="position">Design Director</p>
                        <p class="bio">Emily brings creativity and user-centered thinking to every project we undertake.</p>
                        <div class="social-links">
                            <a href="#" aria-label="LinkedIn profile">in</a>
                            <a href="#" aria-label="Dribbble profile">dr</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="cta-section">
            <h3>Ready to Work With Us?</h3>
            <p>We're always looking for new challenges and exciting projects. Let's create something amazing together.</p>
            <a href="#contact" class="cta-button">Get in Touch</a>
        </div>
    </section>