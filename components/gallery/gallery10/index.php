<?php
if (!wp_style_is('gallery10', 'enqueued')) {
    wp_enqueue_style('gallery10', get_template_directory_uri() . '/components/gallery/gallery10/style.css');
}
?>


<section class="gallery10">
        <h2>Meet Our Team</h2>
        <p class="subtitle">The talented individuals behind our success.</p>
        <div class="team-grid">
            <!-- Team Member 1 -->
            <div class="team-member">
                <div class="member-image">
                    <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="John Doe">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>John Doe</h3>
                            <p>CEO & Founder</p>
                            <p class="bio">John is the visionary behind our company, with over 10 years of experience in leadership.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="team-member">
                <div class="member-image">
                    <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Jane Smith">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>Jane Smith</h3>
                            <p>Creative Director</p>
                            <p class="bio">Jane is a creative genius, leading our design team to create stunning visuals.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="team-member">
                <div class="member-image">
                    <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Mike Johnson">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>Mike Johnson</h3>
                            <p>Lead Developer</p>
                            <p class="bio">Mike is a coding wizard, building the backbone of our applications.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 4 -->
            <div class="team-member">
                <div class="member-image">
                    <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Sarah Lee">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>Sarah Lee</h3>
                            <p>Marketing Manager</p>
                            <p class="bio">Sarah is a marketing guru, driving our brand to new heights.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
