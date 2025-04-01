<?php
if (!wp_style_is('form18', 'enqueued')) {
    wp_enqueue_style('form18', get_template_directory_uri() . '/components/forms/form18/style.css');
}
?>



<section class="form18">
        <div class="contact-image">
            <div class="image-overlay">
                <div class="brand-container">
                    <div class="brand-logo">
                        <span>BRAND</span>
                    </div>
                    <h2 class="brand-tagline">We'd love to hear from you</h2>
                </div>
                
                <div class="contact-details">
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="method-info">
                            <h3>Visit Us</h3>
                            <p>1234 Design Street<br>San Francisco, CA 94107</p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="method-info">
                            <h3>Call Us</h3>
                            <p><a href="tel:+14155552671">(415) 555-2671</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="method-info">
                            <h3>Email Us</h3>
                            <p><a href="mailto:hello@yourbrand.com">hello@yourbrand.com</a></p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="contact-form-container">
            <div class="form-header">
                <span class="form-label">Contact Us</span>
                <h1 class="form-title">Get in Touch</h1>
                <p class="form-subtitle">Fill out the form below, and we'll be in touch as soon as possible.</p>
            </div>
            
            <form id="contactForm" class="contact-form">
                <div class="input-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name" required>
                </div>
                
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
                </div>
                
                <div class="input-group">
                    <label for="phone">Phone Number (Optional)</label>
                    <input type="tel" id="phone" name="phone" placeholder="(123) 456-7890">
                </div>
                
                <div class="input-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" required>
                        <option value="" disabled selected>Select a subject</option>
                        <option value="general">General Inquiry</option>
                        <option value="support">Support</option>
                        <option value="feedback">Feedback</option>
                        <option value="partnership">Partnership</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="How can we help you?" rows="5" required></textarea>
                </div>
                
                <div class="input-group checkbox-group">
                    <input type="checkbox" id="newsletter" name="newsletter">
                    <label for="newsletter">Subscribe to our newsletter for updates and offers</label>
                </div>
                
                <div class="input-group checkbox-group">
                    <input type="checkbox" id="privacy" name="privacy" required>
                    <label for="privacy">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a></label>
                </div>
                
                <button type="submit" class="submit-button">
                    <span>Send Message</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>
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
                const submitButton = document.querySelector('.submit-button');
                submitButton.disabled = true;
                submitButton.innerHTML = '<span>Sending...</span> <i class="fas fa-spinner fa-spin"></i>';
                
                // Simulate API call with timeout
                setTimeout(() => {
                    console.log('Form submitted:', formValues);
                    
                    // Show success message
                    const formContainer = document.querySelector('.contact-form-container');
                    formContainer.innerHTML = `
                        <div class="success-message">
                            <div class="success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h2>Message Sent!</h2>
                            <p>Thank you for reaching out. We've received your message and will get back to you shortly.</p>
                            <button type="button" class="back-button" onclick="window.location.reload()">
                                <span>Send Another Message</span>
                            </button>
                        </div>
                    `;
                }, 1500);
            });
        });
    </script>









