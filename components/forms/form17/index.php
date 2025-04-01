<?php
if (!wp_style_is('form17', 'enqueued')) {
    wp_enqueue_style('form17', get_template_directory_uri() . '/components/forms/form17/style.css');
}
?>

<section class="form17">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Get in Touch</span>
                <h2 class="section-title">Contact Us</h2>
                <p class="section-description">Have questions or need assistance? We're here to help. Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>
            
            <div class="contact-container">
                <div class="contact-info">
                    <div class="info-header">
                        <h3>Contact Information</h3>
                        <p>Reach out to us through any of these channels</p>
                    </div>
                    
                    <div class="info-items">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>Our Location</h4>
                                <p>123 Business Avenue, Suite 100<br>New York, NY 10001</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>Phone Number</h4>
                                <p><a href="tel:+12345678900">(234) 567-8900</a></p>
                                <p><a href="tel:+12345678901">(234) 567-8901</a></p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h4>Email Address</h4>
                                <p><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></p>
                                <p><a href="mailto:support@yourcompany.com">support@yourcompany.com</a></p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info-content">
                                <h4>Business Hours</h4>
                                <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                                <p>Saturday - Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <div class="contact-form-container">
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
                            <select id="subject" name="subject" required>
                                <option value="" selected disabled>Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="support">Customer Support</option>
                                <option value="sales">Sales Question</option>
                                <option value="billing">Billing Issue</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message*</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <input type="checkbox" id="newsletter" name="newsletter">
                            <label for="newsletter">Subscribe to our newsletter</label>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a>*</label>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="submit-btn">
                                <span>Send Message</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="map-container">
                <div class="map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215256349542!2d-73.98784492404045!3d40.75798833440342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5m2!1s!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="map-overlay">
                    <div class="overlay-content">
                        <h3>Visit Our Office</h3>
                        <p>We'd love to meet you in person at our headquarters in New York City.</p>
                        <a href="https://goo.gl/maps/JQJnvs1GYQTjVDVH6" target="_blank" class="directions-btn">
                            <i class="fas fa-directions"></i>
                            <span>Get Directions</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                const formData = new FormData(this);
                const formValues = Object.fromEntries(formData.entries());
                
                // Simulate form submission
                const submitBtn = document.querySelector('.submit-btn');
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Sending...</span> <i class="fas fa-spinner fa-spin"></i>';
                
                // Simulate API call with timeout
                setTimeout(() => {
                    console.log('Form submitted:', formValues);
                    
                    // Show success message
                    contactForm.innerHTML = `
                        <div class="success-message">
                            <div class="success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3>Thank You!</h3>
                            <p>Your message has been sent successfully. We'll get back to you shortly.</p>
                            <button type="button" class="reset-btn" onclick="window.location.reload()">
                                <span>Send Another Message</span>
                            </button>
                        </div>
                    `;
                }, 1500);
            });
        });
    </script>