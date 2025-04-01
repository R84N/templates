<?php
if (!wp_style_is('form12', 'enqueued')) {
    wp_enqueue_style('form12', get_template_directory_uri() . '/components/forms/form12/style.css');
}
?>




    <section class="form12">


    <div class="theme-toggle">
        <input type="checkbox" id="theme-switch">
        <label for="theme-switch" class="toggle-label">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <span class="toggle-ball"></span>
        </label>
    </div>



        <div class="container">
            <div class="section-header">
                <span class="section-tag">Get in touch</span>
                <h2 class="section-title">Contact Us</h2>
                <div class="divider">
                    <span></span>
                </div>
                <p class="section-description">Have questions or need assistance? We're here to help. Reach out to our team using any of the methods below.</p>
            </div>
            
            <div class="contact-grid">
                <!-- Contact Cards -->
                <div class="contact-cards">
                    <div class="card">
                        <div class="card-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Visit Us</h3>
                        <p>123 Innovation Drive<br>San Francisco, CA 94103</p>
                        <a href="https://maps.google.com" class="card-link">Get Directions <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="card">
                        <div class="card-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3>Call Us</h3>
                        <p>Main: <a href="tel:+14155552671">(415) 555-2671</a><br>
                        Support: <a href="tel:+14155552672">(415) 555-2672</a></p>
                        <a href="tel:+14155552671" class="card-link">Call Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="card">
                        <div class="card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Email Us</h3>
                        <p><a href="mailto:hello@company.com">hello@company.com</a><br>
                        <a href="mailto:support@company.com">support@company.com</a></p>
                        <a href="mailto:hello@company.com" class="card-link">Send Email <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="card">
                        <div class="card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Business Hours</h3>
                        <p>Monday-Friday: 9AM-6PM<br>
                        Saturday: 10AM-4PM<br>
                        Sunday: Closed</p>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="form-container">
                    <div class="form-header">
                        <h3>Send a Message</h3>
                        <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                    </div>
                    
                    <form id="contactForm" class="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name*</label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="lastName">Last Name*</label>
                                <input type="text" id="lastName" name="lastName" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address*</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject*</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message*</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <input type="checkbox" id="consent" name="consent" required>
                            <label for="consent">I agree to the <a href="#">privacy policy</a> and consent to being contacted.</label>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Map Section -->
            <div class="map-section">
                <div class="map-container">
                    <!-- Replace with actual map embed code -->
                    <img src="https://via.placeholder.com/1200x400?text=Interactive+Map" alt="Location Map" class="map-placeholder">
                </div>
                
                <div class="social-container">
                    <h3>Connect With Us</h3>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Theme toggle functionality
        const themeSwitch = document.getElementById('theme-switch');
        const body = document.body;
        
        // Check for saved theme preference
        if (localStorage.getItem('darkMode') === 'true') {
            body.classList.add('dark-mode');
            themeSwitch.checked = true;
        }
        
        // Theme toggle event listener
        themeSwitch.addEventListener('change', function() {
            if (this.checked) {
                body.classList.add('dark-mode');
                localStorage.setItem('darkMode', 'true');
            } else {
                body.classList.remove('dark-mode');
                localStorage.setItem('darkMode', 'false');
            }
        });
        
        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add form submission logic here
            alert('Form submitted! In a real implementation, this would send your message.');
        });
    </script>