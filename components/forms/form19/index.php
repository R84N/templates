<?php
if (!wp_style_is('form19', 'enqueued')) {
    wp_enqueue_style('form19', get_template_directory_uri() . '/components/forms/form19/style.css');
}
?>



<div class="form19">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
        
        <section class="contact-section">
            <div class="section-header">
                <div class="header-content">
                    <div class="header-badge">Contact Us</div>
                    <h1 class="header-title">Let's start a conversation</h1>
                    <p class="header-subtitle">We're here to help and answer any question you might have.</p>
                </div>
            </div>
            
            <div class="contact-container">
                <div class="contact-info">
                    <div class="info-card">
                        <div class="card-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="card-content">
                            <h3>Our Location</h3>
                            <p>1234 Business Avenue<br>Suite 500<br>San Francisco, CA 94107</p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="card-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="card-content">
                            <h3>Phone Number</h3>
                            <p><a href="tel:+14155552671">(415) 555-2671</a></p>
                            <p><a href="tel:+18005551234">1-800-555-1234</a> (Toll-free)</p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="card-content">
                            <h3>Email Address</h3>
                            <p><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></p>
                            <p><a href="mailto:support@yourcompany.com">support@yourcompany.com</a></p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="card-content">
                            <h3>Working Hours</h3>
                            <p>Monday - Friday: 9AM - 5PM</p>
                            <p>Saturday & Sunday: Closed</p>
                        </div>
                    </div>
                    
                    <div class="social-container">
                        <h3>Connect With Us</h3>
                        <div class="social-links">
                            <a href="#" class="social-link" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-wrapper">
                    <div class="form-container">
                        <h2 class="form-title">Send us a message</h2>
                        
                        <form id="contactForm" class="contact-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">First Name*</label>
                                    <div class="input-container">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                        <input type="text" id="firstName" name="firstName" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="lastName">Last Name*</label>
                                    <div class="input-container">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                        <input type="text" id="lastName" name="lastName" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email Address*</label>
                                    <div class="input-container">
                                        <span class="input-icon"><i class="fas fa-envelope"></i></span>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <div class="input-container">
                                        <span class="input-icon"><i class="fas fa-phone"></i></span>
                                        <input type="tel" id="phone" name="phone">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Subject*</label>
                                <div class="input-container">
                                    <span class="input-icon"><i class="fas fa-tag"></i></span>
                                    <select id="subject" name="subject" required>
                                        <option value="" selected disabled>Select a subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="support">Technical Support</option>
                                        <option value="billing">Billing Question</option>
                                        <option value="partnership">Partnership Opportunity</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <div class="input-container textarea-container">
                                    <span class="input-icon"><i class="fas fa-comment-alt"></i></span>
                                    <textarea id="message" name="message" rows="5" required></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group checkbox-group">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <label for="newsletter">Subscribe to our newsletter to receive updates and news</label>
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
            </div>
        </section>
    </div>

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
                    const formContainer = document.querySelector('.form-container');
                    formContainer.innerHTML = `
                        <div class="success-message">
                            <div class="success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h2>Message Sent!</h2>
                            <p>Thank you for reaching out to us. We've received your message and will get back to you shortly.</p>
                            <button type="button" class="reset-btn" onclick="window.location.reload()">
                                <span>Send Another Message</span>
                            </button>
                        </div>
                    `;
                }, 1500);
            });
        });
    </script>