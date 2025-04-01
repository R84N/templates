
<?php
if (!wp_style_is('form14', 'enqueued')) {
    wp_enqueue_style('form14', get_template_directory_uri() . '/components/forms/form14/style.css');
}
?>



<section class="form14">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Contact Us</span>
                <h1 class="section-title">Get in touch with our team</h1>
                <p class="section-description">We're here to help and answer any questions you might have. We look forward to hearing from you.</p>
            </div>
            
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info">
                    <div class="info-card headquarters">
                        <div class="card-header">
                            <h2>Headquarters</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>1234 Corporate Drive<br>New York, NY 10001</p>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-phone-alt"></i>
                                <p><a href="tel:+12125551234">+1 (212) 555-1234</a></p>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-envelope"></i>
                                <p><a href="mailto:info@corporateco.com">info@corporateco.com</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-card support">
                        <div class="card-header">
                            <h2>Support</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-item">
                                <i class="fas fa-headset"></i>
                                <p><a href="tel:+18005551234">+1 (800) 555-1234</a></p>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-envelope"></i>
                                <p><a href="mailto:support@corporateco.com">support@corporateco.com</a></p>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <p>Monday-Friday: 8AM-8PM EST<br>Weekend: 10AM-6PM EST</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-card connect">
                        <div class="card-header">
                            <h2>Connect</h2>
                        </div>
                        <div class="card-content">
                            <div class="social-links">
                                <a href="#" class="social-link" aria-label="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="social-link" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-link" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-link" aria-label="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="form-container">
                    <div class="form-header">
                        <h2>Send us a message</h2>
                        <p>Please fill out the form below and we will get back to you shortly.</p>
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
                            <label for="company">Company/Organization</label>
                            <input type="text" id="company" name="company">
                        </div>
                        
                        <div class="form-group">
                            <label for="department">Department*</label>
                            <select id="department" name="department" required>
                                <option value="" selected disabled>Please select</option>
                                <option value="sales">Sales</option>
                                <option value="support">Technical Support</option>
                                <option value="billing">Billing</option>
                                <option value="hr">Human Resources</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message*</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy">I have read and agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a>.*</label>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="submit-btn">Submit</button>
                            <button type="reset" class="reset-btn">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Office Locations -->
            <div class="locations-section">
                <h2 class="locations-title">Our Offices</h2>
                
                <div class="locations-grid">
                    <div class="location-card">
                        <div class="location-image">
                            <img src="https://via.placeholder.com/400x250?text=New+York" alt="New York Office">
                        </div>
                        <div class="location-details">
                            <h3>New York</h3>
                            <p>1234 Corporate Drive<br>New York, NY 10001</p>
                            <a href="#" class="location-link">View on map</a>
                        </div>
                    </div>
                    
                    <div class="location-card">
                        <div class="location-image">
                            <img src="https://via.placeholder.com/400x250?text=San+Francisco" alt="San Francisco Office">
                        </div>
                        <div class="location-details">
                            <h3>San Francisco</h3>
                            <p>5678 Tech Avenue<br>San Francisco, CA 94107</p>
                            <a href="#" class="location-link">View on map</a>
                        </div>
                    </div>
                    
                    <div class="location-card">
                        <div class="location-image">
                            <img src="https://via.placeholder.com/400x250?text=London" alt="London Office">
                        </div>
                        <div class="location-details">
                            <h3>London</h3>
                            <p>10 Business Square<br>London, UK EC2A 4BX</p>
                            <a href="#" class="location-link">View on map</a>
                        </div>
                    </div>
                    
                    <div class="location-card">
                        <div class="location-image">
                            <img src="https://via.placeholder.com/400x250?text=Singapore" alt="Singapore Office">
                        </div>
                        <div class="location-details">
                            <h3>Singapore</h3>
                            <p>88 Market Street<br>Singapore 048948</p>
                            <a href="#" class="location-link">View on map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission with loading state
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.textContent;
            
            submitBtn.disabled = true;
            submitBtn.textContent = 'Submitting...';
            
            // Simulate API call
            setTimeout(() => {
                alert('Form submitted successfully! We will contact you shortly.');
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
                this.reset();
            }, 1500);
        });
    </script>