
<?php
if (!wp_style_is('form15', 'enqueued')) {
    wp_enqueue_style('form15', get_template_directory_uri() . '/components/forms/form15/style.css');
}
?>

<div class="form15">
        <div class="decorative-circle circle-1"></div>
        <div class="decorative-circle circle-2"></div>
        <div class="decorative-shape shape-1"></div>
        <div class="decorative-shape shape-2"></div>
        
        <section class="contact-section">
            <div class="section-header">
                <div class="header-content">
                    <span class="overline">Let's collaborate</span>
                    <h1 class="title">Get in touch</h1>
                    <p class="subtitle">Have a project in mind? We'd love to hear about it. Tell us what you're looking for below.</p>
                </div>
            </div>
            
            <div class="form-container">
                <div class="form-sidebar">
                    <div class="sidebar-content">
                        <div class="agency-info">
                            <div class="agency-logo">
                                <span>STUDIO</span>
                            </div>
                            <p class="agency-tagline">We create digital experiences that matter.</p>
                        </div>
                        
                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="method-details">
                                    <h3>Email us at</h3>
                                    <a href="mailto:hello@creativestudio.com">hello@creativestudio.com</a>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="method-details">
                                    <h3>Call us at</h3>
                                    <a href="tel:+15551234567">(555) 123-4567</a>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="method-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="method-details">
                                    <h3>Visit our studio</h3>
                                    <p>123 Design Street<br>Creative District<br>New York, NY 10001</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="#" class="social-link" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Dribbble">
                                <i class="fab fa-dribbble"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Behance">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="form-main">
                    <form id="contactForm" class="contact-form">
                        <div class="form-step active" data-step="1">
                            <div class="step-header">
                                <span class="step-number">01</span>
                                <h2 class="step-title">Tell us about yourself</h2>
                            </div>
                            
                            <div class="form-fields">
                                <div class="form-group">
                                    <label for="name">Your Name*</label>
                                    <input type="text" id="name" name="name" required>
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
                            </div>
                            
                            <div class="form-navigation">
                                <button type="button" class="next-btn" data-next="2">
                                    <span>Next Step</span>
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-step" data-step="2">
                            <div class="step-header">
                                <span class="step-number">02</span>
                                <h2 class="step-title">Project details</h2>
                            </div>
                            
                            <div class="form-fields">
                                <div class="form-group">
                                    <label for="project-type">Project Type*</label>
                                    <select id="project-type" name="project-type" required>
                                        <option value="" selected disabled>Select project type</option>
                                        <option value="website">Website Design</option>
                                        <option value="branding">Branding & Identity</option>
                                        <option value="ux">UX/UI Design</option>
                                        <option value="development">Web Development</option>
                                        <option value="marketing">Digital Marketing</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="budget">Estimated Budget*</label>
                                    <select id="budget" name="budget" required>
                                        <option value="" selected disabled>Select budget range</option>
                                        <option value="small">$1,000 - $5,000</option>
                                        <option value="medium">$5,000 - $10,000</option>
                                        <option value="large">$10,000 - $25,000</option>
                                        <option value="enterprise">$25,000+</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="timeline">Project Timeline</label>
                                    <select id="timeline" name="timeline">
                                        <option value="" selected disabled>Select timeline</option>
                                        <option value="urgent">ASAP (1-2 weeks)</option>
                                        <option value="standard">Standard (1-2 months)</option>
                                        <option value="flexible">Flexible (3+ months)</option>
                                        <option value="planning">Just planning ahead</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-navigation">
                                <button type="button" class="prev-btn" data-prev="1">
                                    <i class="fas fa-arrow-left"></i>
                                    <span>Previous</span>
                                </button>
                                <button type="button" class="next-btn" data-next="3">
                                    <span>Next Step</span>
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-step" data-step="3">
                            <div class="step-header">
                                <span class="step-number">03</span>
                                <h2 class="step-title">Project description</h2>
                            </div>
                            
                            <div class="form-fields">
                                <div class="form-group">
                                    <label for="message">Tell us about your project*</label>
                                    <textarea id="message" name="message" rows="6" required></textarea>
                                    <span class="helper-text">Please include any specific requirements, goals, or challenges you're facing.</span>
                                </div>
                                
                                <div class="form-group">
                                    <label class="file-label">
                                        <span class="file-text">Attach files (optional)</span>
                                        <input type="file" id="attachments" name="attachments" multiple>
                                        <span class="file-button">Choose Files</span>
                                    </label>
                                    <div id="file-list" class="file-list"></div>
                                    <span class="helper-text">Max 5 files. PDF, PNG, JPG (Max 5MB each)</span>
                                </div>
                                
                                <div class="form-group checkbox-group">
                                    <input type="checkbox" id="newsletter" name="newsletter">
                                    <label for="newsletter">Subscribe to our newsletter for design tips and insights</label>
                                </div>
                                
                                <div class="form-group checkbox-group">
                                    <input type="checkbox" id="privacy" name="privacy" required>
                                    <label for="privacy">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a>*</label>
                                </div>
                            </div>
                            
                            <div class="form-navigation">
                                <button type="button" class="prev-btn" data-prev="2">
                                    <i class="fas fa-arrow-left"></i>
                                    <span>Previous</span>
                                </button>
                                <button type="submit" class="submit-btn">
                                    <span>Submit</span>
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Multi-step form navigation
        document.addEventListener('DOMContentLoaded', function() {
            const nextButtons = document.querySelectorAll('.next-btn');
            const prevButtons = document.querySelectorAll('.prev-btn');
            const formSteps = document.querySelectorAll('.form-step');
            
            nextButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const currentStep = parseInt(this.getAttribute('data-next')) - 1;
                    const nextStep = parseInt(this.getAttribute('data-next'));
                    
                    // Validate current step before proceeding
                    const currentFormStep = document.querySelector(`.form-step[data-step="${currentStep}"]`);
                    const requiredFields = currentFormStep.querySelectorAll('[required]');
                    let isValid = true;
                    
                    requiredFields.forEach(field => {
                        if (!field.value) {
                            isValid = false;
                            field.classList.add('invalid');
                        } else {
                            field.classList.remove('invalid');
                        }
                    });
                    
                    if (isValid) {
                        formSteps.forEach(step => step.classList.remove('active'));
                        document.querySelector(`.form-step[data-step="${nextStep}"]`).classList.add('active');
                    }
                });
            });
            
            prevButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const prevStep = parseInt(this.getAttribute('data-prev'));
                    
                    formSteps.forEach(step => step.classList.remove('active'));
                    document.querySelector(`.form-step[data-step="${prevStep}"]`).classList.add('active');
                });
            });
            
            // File upload handling
            const fileInput = document.getElementById('attachments');
            const fileList = document.getElementById('file-list');
            
            fileInput.addEventListener('change', function() {
                fileList.innerHTML = '';
                
                if (this.files.length > 0) {
                    for (let i = 0; i < this.files.length; i++) {
                        const file = this.files[i];
                        const fileItem = document.createElement('div');
                        fileItem.className = 'file-item';
                        fileItem.innerHTML = `
                            <span class="file-name">${file.name}</span>
                            <span class="file-size">${(file.size / 1024).toFixed(1)} KB</span>
                        `;
                        fileList.appendChild(fileItem);
                    }
                }
            });
            
            // Form submission
            document.getElementById('contactForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const submitBtn = document.querySelector('.submit-btn');
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Sending...</span> <i class="fas fa-spinner fa-spin"></i>';
                
                // Simulate form submission
                setTimeout(() => {
                    const formContainer = document.querySelector('.form-main');
                    formContainer.innerHTML = `
                        <div class="success-message">
                            <div class="success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h2>Thank you for reaching out!</h2>
                            <p>We've received your message and will get back to you within 1-2 business days.</p>
                            <button type="button" class="reset-btn" onclick="window.location.reload()">
                                <span>Send another message</span>
                            </button>
                        </div>
                    `;
                }, 2000);
            });
        });
    </script>