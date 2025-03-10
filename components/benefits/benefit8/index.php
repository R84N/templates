
<?php
if (!wp_style_is('benefit8', 'enqueued')) {
    wp_enqueue_style('benefit8', get_template_directory_uri() . '/components/benefits/benefit8/style.css');
}
?>

<section class="benefit8">
        <div class="pattern"></div>
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Us</h2>
                <p>Discover the unique advantages that set us apart from the competition and make us the preferred choice for clients worldwide.</p>
            </div>

            <div class="choose-us-container">
                <div class="choose-us-tabs">
                    <a href="#tab1-content" class="tab-button">Expertise</a>
                    <a href="#tab2-content" class="tab-button">Quality</a>
                    <a href="#tab3-content" class="tab-button">Innovation</a>
                </div>

                <!-- Tab 1: Expertise -->
                <div id="tab1-content" class="tab-content">
                    <div class="reason-card">
                        <div class="card-icon icon-expertise"></div>
                        <div class="card-content">
                            <h3 class="card-title">Industry Expertise</h3>
                            <p class="card-description">Our team brings decades of specialized experience across multiple industries, ensuring we understand your unique challenges.</p>
                            <div class="card-stats">
                                <div class="stat">
                                    <span class="stat-number">15+</span>
                                    <span class="stat-label">Years</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">200+</span>
                                    <span class="stat-label">Projects</span>
                                </div>
                            </div>
                            <a href="#" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="reason-card">
                        <div class="card-icon icon-support"></div>
                        <div class="card-content">
                            <h3 class="card-title">Dedicated Support</h3>
                            <p class="card-description">Our support team is available 24/7 to address your concerns and provide timely assistance whenever you need it.</p>
                            <div class="card-stats">
                                <div class="stat">
                                    <span class="stat-number">24/7</span>
                                    <span class="stat-label">Support</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">1hr</span>
                                    <span class="stat-label">Response</span>
                                </div>
                            </div>
                            <a href="#" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Tab 2: Quality -->
                <div id="tab2-content" class="tab-content">
                    <div class="reason-card">
                        <div class="card-icon icon-quality"></div>
                        <div class="card-content">
                            <h3 class="card-title">Premium Quality</h3>
                            <p class="card-description">We never compromise on quality, ensuring that every aspect of our service meets the highest industry standards.</p>
                            <div class="card-stats">
                                <div class="stat">
                                    <span class="stat-number">99.9%</span>
                                    <span class="stat-label">Uptime</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">5★</span>
                                    <span class="stat-label">Rating</span>
                                </div>
                            </div>
                            <a href="#" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="reason-card">
                        <div class="card-icon icon-value"></div>
                        <div class="card-content">
                            <h3 class="card-title">Exceptional Value</h3>
                            <p class="card-description">Our solutions deliver outstanding value, helping you maximize your return on investment while minimizing costs.</p>
                            <div class="card-stats">
                                <div class="stat">
                                    <span class="stat-number">30%</span>
                                    <span class="stat-label">Savings</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">2x</span>
                                    <span class="stat-label">ROI</span>
                                </div>
                            </div>
                            <a href="#" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Tab 3: Innovation -->
                <div id="tab3-content" class="tab-content">
                    <div class="reason-card">
                        <div class="card-icon icon-innovation"></div>
                        <div class="card-content">
                            <h3 class="card-title">Cutting-Edge Technology</h3>
                            <p class="card-description">We leverage the latest technologies and methodologies to deliver innovative solutions that keep you ahead of the curve.</p>
                            <div class="card-stats">
                                <div class="stat">
                                    <span class="stat-number">12</span>
                                    <span class="stat-label">Patents</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">8+</span>
                                    <span class="stat-label">Awards</span>
                                </div>
                            </div>
                            <a href="#" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>

                    <div class="reason-card">
                        <div class="card-icon icon-results"></div>
                        <div class="card-content">
                            <h3 class="card-title">Proven Results</h3>
                            <p class="card-description">Our track record speaks for itself, with consistent success stories and measurable outcomes for our clients.</p>
                            <div class="card-stats">
                                <div class="stat">
                                    <span class="stat-number">95%</span>
                                    <span class="stat-label">Success</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-number">500+</span>
                                    <span class="stat-label">Clients</span>
                                </div>
                            </div>
                            <a href="#" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>