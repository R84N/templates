<?php
if (!wp_style_is('form11', 'enqueued')) {
    wp_enqueue_style('form11', get_template_directory_uri() . '/components/forms/form11/style.css');
}
?>

<section class="form11">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <p class="section-description">Get in touch with our team for any inquiries or support.</p>
            
            <div class="contact-container">
                <!-- Contact Information -->
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    
                    <div class="info-item">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="details">
                            <h4>Our Location</h4>
                            <p>123 Business Street, Suite 100<br>New York, NY 10001</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="details">
                            <h4>Phone Number</h4>
                            <p><a href="tel:+1234567890">(123) 456-7890</a></p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="details">
                            <h4>Email Address</h4>
                            <p><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="details">
                            <h4>Working Hours</h4>
                            <p>Monday - Friday: 9AM - 5PM<br>Saturday: 10AM - 2PM</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <h4>Follow Us</h4>
                        <div class="social-icons">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
            
            <!-- Map Section -->
            <div class="map-container">
                <h3>Find Us On The Map</h3>
                <div class="map">
                    <!-- Replace with actual map embed code -->
                    <img src="https://via.placeholder.com/1200x400?text=Google+Map" alt="Location Map" class="map-placeholder">
                </div>
            </div>
        </div>
    </section>