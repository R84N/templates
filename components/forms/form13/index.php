
<?php
if (!wp_style_is('form13', 'enqueued')) {
    wp_enqueue_style('form13', get_template_directory_uri() . '/components/forms/form13/style.css');
}
?>





<div class="form13">
        <section class="contact-section">
            <div class="contact-header">
                <h1 class="title">Let's Connect</h1>
                <p class="subtitle">We'd love to hear from you. Here's how you can reach us...</p>
            </div>
            
            <div class="contact-container">
                <!-- Left Side - Contact Info -->
                <div class="contact-info">
                    <div class="info-blob">
                        <div class="blob-content">
                            <div class="contact-methods">
                                <div class="method">
                                    <div class="method-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="method-details">
                                        <h3>Our Location</h3>
                                        <p>350 Creative Avenue<br>Portland, OR 97204</p>
                                    </div>
                                </div>
                                
                                <div class="method">
                                    <div class="method-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="method-details">
                                        <h3>Phone</h3>
                                        <p><a href="tel:+15035551234">(503) 555-1234</a></p>
                                    </div>
                                </div>
                                
                                <div class="method">
                                    <div class="method-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="method-details">
                                        <h3>Email</h3>
                                        <p><a href="mailto:hello@creativeco.com">hello@creativeco.com</a></p>
                                    </div>
                                </div>
                                
                                <div class="method">
                                    <div class="method-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="method-details">
                                        <h3>Hours</h3>
                                        <p>Mon-Fri: 9AM-6PM<br>Weekends: Closed</p>
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
                                <a href="#" class="social-link" aria-label="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="social-link" aria-label="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Contact Form -->
                <div class="contact-form-container">
                    <div class="form-header">
                        <h2>Send us a message</h2>
                        <p>Fill out the form below and we'll get back to you soon.</p>
                    </div>
                    
                    <form id="contactForm" class="contact-form">
                        <div class="input-group">
                            <input type="text" id="name" name="name" required>
                            <label for="name">Your Name</label>
                            <span class="input-highlight"></span>
                        </div>
                        
                        <div class="input-group">
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email Address</label>
                            <span class="input-highlight"></span>
                        </div>
                        
                        <div class="input-group">
                            <input type="tel" id="phone" name="phone">
                            <label for="phone">Phone Number (optional)</label>
                            <span class="input-highlight"></span>
                        </div>
                        
                        <div class="input-group">
                            <select id="topic" name="topic" required>
                                <option value="" disabled selected></option>
                                <option value="general">General Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="billing">Billing Question</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="topic">Topic</label>
                            <span class="input-highlight"></span>
                        </div>
                        
                        <div class="input-group textarea-group">
                            <textarea id="message" name="message" rows="5" required></textarea>
                            <label for="message">Your Message</label>
                            <span class="input-highlight"></span>
                        </div>
                        
                        <div class="form-footer">
                            <div class="checkbox-group">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <label for="newsletter">Subscribe to our newsletter</label>
                            </div>
                            
                            <button type="submit" class="submit-button">
                                Send Message
                                <span class="button-icon">
                                    <i class="fas fa-paper-plane"></i>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Map Section -->
            <div class="map-section">
                <div class="map-overlay">
                    <h3>Find Us</h3>
                    <p>Visit our office in Portland's Creative District</p>
                    <a href="https://maps.google.com" class="directions-button">
                        Get Directions
                        <i class="fas fa-directions"></i>
                    </a>
                </div>
                <div class="map-container">
                    <!-- Replace with actual map embed code -->
                    <img src="https://via.placeholder.com/1200x400?text=Interactive+Map" alt="Office Location Map" class="map-placeholder">
                </div>
            </div>
        </section>
    </div>

    <script>
        // Form animation
        const inputs = document.querySelectorAll('.input-group input, .input-group textarea, .input-group select');
        
        inputs.forEach(input => {
            // Check if input has value on load
            if (input.value) {
                input.parentElement.classList.add('input-filled');
            }
            
            // Add event listeners
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('input-focused');
            });
            
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('input-focused');
                if (input.value) {
                    input.parentElement.classList.add('input-filled');
                } else {
                    input.parentElement.classList.remove('input-filled');
                }
            });
        });
        
        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Add animation class to button
            const button = this.querySelector('.submit-button');
            button.classList.add('button-sending');
            
            // Simulate form submission
            setTimeout(() => {
                button.classList.remove('button-sending');
                button.classList.add('button-sent');
                button.innerHTML = 'Message Sent! <span class="button-icon"><i class="fas fa-check"></i></span>';
                
                // Reset form after delay
                setTimeout(() => {
                    this.reset();
                    document.querySelectorAll('.input-group').forEach(group => {
                        group.classList.remove('input-filled');
                    });
                    button.classList.remove('button-sent');
                    button.innerHTML = 'Send Message <span class="button-icon"><i class="fas fa-paper-plane"></i></span>';
                }, 3000);
            }, 1500);
        });
    </script>