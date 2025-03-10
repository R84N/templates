<?php
if (!wp_style_is('gallery3', 'enqueued')) {
    wp_enqueue_style('gallery3', get_template_directory_uri() . '/components/gallery/gallery3/style.css');
}
?>






<section class="gallery3">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="container">
            <div class="section-header">
                <h2>Our Expert Team</h2>
                <p>Meet the talented professionals who make our company successful and drive innovation in everything we do.</p>
            </div>

            <div class="team-container">
                <!-- Featured Team Member -->
                <div class="featured-member">
                    <div class="featured-image">
                        <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Sarah Johnson">
                    </div>
                    <div class="featured-content">
                        <h3 class="featured-name">Sarah Johnson</h3>
                        <p class="featured-position">Chief Executive Officer</p>
                        <p class="featured-bio">Sarah brings over 15 years of industry experience and visionary leadership to our company. Her strategic insight and passion for innovation have been instrumental in our growth and success.</p>
                        <div class="featured-social">
                            <a href="#" class="social-icon icon-linkedin" aria-label="LinkedIn"></a>
                            <a href="#" class="social-icon icon-twitter" aria-label="Twitter"></a>
                            <a href="#" class="social-icon icon-email" aria-label="Email"></a>
                        </div>
                    </div>
                </div>

                <!-- Regular Team Members with Flip Cards -->
                <div class="team-member">
                    <div class="member-card">
                        <div class="member-front">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Michael Chen" class="member-image">
                            <div class="member-info">
                                <h3 class="member-name">Michael Chen</h3>
                                <p class="member-position">Technical Director</p>
                                <div class="member-social">
                                    <a href="#" class="social-icon icon-linkedin" aria-label="LinkedIn"></a>
                                    <a href="#" class="social-icon icon-twitter" aria-label="Twitter"></a>
                                    <a href="#" class="social-icon icon-email" aria-label="Email"></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-back">
                            <h3 class="back-title">Michael Chen</h3>
                            <p class="back-bio">Michael leads our technical team with expertise in cutting-edge technologies and a passion for solving complex problems.</p>
                            <div class="back-details">
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">10+ years in software development</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">Expert in cloud architecture</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">MS in Computer Science</div>
                                </div>
                            </div>
                            <div class="back-social">
                                <a href="#" class="back-social-icon icon-linkedin" aria-label="LinkedIn"></a>
                                <a href="#" class="back-social-icon icon-twitter" aria-label="Twitter"></a>
                                <a href="#" class="back-social-icon icon-email" aria-label="Email"></a>
                            </div>
                            <a href="#" class="contact-button">Contact Michael</a>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-card">
                        <div class="member-front">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Amara Williams" class="member-image">
                            <div class="member-info">
                                <h3 class="member-name">Amara Williams</h3>
                                <p class="member-position">Creative Director</p>
                                <div class="member-social">
                                    <a href="#" class="social-icon icon-linkedin" aria-label="LinkedIn"></a>
                                    <a href="#" class="social-icon icon-twitter" aria-label="Twitter"></a>
                                    <a href="#" class="social-icon icon-email" aria-label="Email"></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-back">
                            <h3 class="back-title">Amara Williams</h3>
                            <p class="back-bio">Amara brings creative vision and design excellence to every project, ensuring our products are both beautiful and functional.</p>
                            <div class="back-details">
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">Award-winning designer</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">UX/UI specialist</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">BFA in Graphic Design</div>
                                </div>
                            </div>
                            <div class="back-social">
                                <a href="#" class="back-social-icon icon-linkedin" aria-label="LinkedIn"></a>
                                <a href="#" class="back-social-icon icon-twitter" aria-label="Twitter"></a>
                                <a href="#" class="back-social-icon icon-email" aria-label="Email"></a>
                            </div>
                            <a href="#" class="contact-button">Contact Amara</a>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-card">
                        <div class="member-front">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="David Rodriguez" class="member-image">
                            <div class="member-info">
                                <h3 class="member-name">David Rodriguez</h3>
                                <p class="member-position">Marketing Director</p>
                                <div class="member-social">
                                    <a href="#" class="social-icon icon-linkedin" aria-label="LinkedIn"></a>
                                    <a href="#" class="social-icon icon-twitter" aria-label="Twitter"></a>
                                    <a href="#" class="social-icon icon-email" aria-label="Email"></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-back">
                            <h3 class="back-title">David Rodriguez</h3>
                            <p class="back-bio">David's strategic marketing expertise has helped us build our brand and connect with customers in meaningful ways.</p>
                            <div class="back-details">
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">Digital marketing expert</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">Growth strategy specialist</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">MBA in Marketing</div>
                                </div>
                            </div>
                            <div class="back-social">
                                <a href="#" class="back-social-icon icon-linkedin" aria-label="LinkedIn"></a>
                                <a href="#" class="back-social-icon icon-twitter" aria-label="Twitter"></a>
                                <a href="#" class="back-social-icon icon-email" aria-label="Email"></a>
                            </div>
                            <a href="#" class="contact-button">Contact David</a>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-card">
                        <div class="member-front">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Emily Zhang" class="member-image">
                            <div class="member-info">
                                <h3 class="member-name">Emily Zhang</h3>
                                <p class="member-position">Product Manager</p>
                                <div class="member-social">
                                    <a href="#" class="social-icon icon-linkedin" aria-label="LinkedIn"></a>
                                    <a href="#" class="social-icon icon-twitter" aria-label="Twitter"></a>
                                    <a href="#" class="social-icon icon-email" aria-label="Email"></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-back">
                            <h3 class="back-title">Emily Zhang</h3>
                            <p class="back-bio">Emily excels at understanding customer needs and translating them into exceptional product experiences.</p>
                            <div class="back-details">
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">Product strategy expert</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">Agile methodology specialist</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">MS in Product Management</div>
                                </div>
                            </div>
                            <div class="back-social">
                                <a href="#" class="back-social-icon icon-linkedin" aria-label="LinkedIn"></a>
                                <a href="#" class="back-social-icon icon-twitter" aria-label="Twitter"></a>
                                <a href="#" class="back-social-icon icon-email" aria-label="Email"></a>
                            </div>
                            <a href="#" class="contact-button">Contact Emily</a>
                        </div>
                    </div>
                </div>

                <div class="team-member">
                    <div class="member-card">
                        <div class="member-front">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="James Wilson" class="member-image">
                            <div class="member-info">
                                <h3 class="member-name">James Wilson</h3>
                                <p class="member-position">Customer Success</p>
                                <div class="member-social">
                                    <a href="#" class="social-icon icon-linkedin" aria-label="LinkedIn"></a>
                                    <a href="#" class="social-icon icon-twitter" aria-label="Twitter"></a>
                                    <a href="#" class="social-icon icon-email" aria-label="Email"></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-back">
                            <h3 class="back-title">James Wilson</h3>
                            <p class="back-bio">James is dedicated to ensuring our customers achieve their goals and have an exceptional experience with our products.</p>
                            <div class="back-details">
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">Customer relationship expert</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">Solution implementation specialist</div>
                                </div>
                                <div class="detail-item">
                                    <div class="detail-icon">✓</div>
                                    <div class="detail-text">BS in Business Administration</div>
                                </div>
                            </div>
                            <div class="back-social">
                                <a href="#" class="back-social-icon icon-linkedin" aria-label="LinkedIn"></a>
                                <a href="#" class="back-social-icon icon-twitter" aria-label="Twitter"></a>
                                <a href="#" class="back-social-icon icon-email" aria-label="Email"></a>
                            </div>
                            <a href="#" class="contact-button">Contact James</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>