<?php
if (!wp_style_is('form16', 'enqueued')) {
    wp_enqueue_style('form16', get_template_directory_uri() . '/components/forms/form16/style.css');
}
?>



<div class="form16">
        <div class="glow-circle circle-1"></div>
        <div class="glow-circle circle-2"></div>
        <div class="glow-circle circle-3"></div>
        
        <section class="contact-section">
            <div class="container">
                <div class="section-header">
                    <div class="tech-badge">
                        <span class="badge-text">Contact</span>
                        <span class="badge-icon"><i class="fas fa-satellite-dish"></i></span>
                    </div>
                    <h1 class="title">Get in touch <span class="highlight">with us</span></h1>
                    <p class="subtitle">Have questions about our products, services, or need technical support? We're here to help.</p>
                </div>
                
                <div class="contact-container">
                    <div class="glass-card contact-form-card">
                        <div class="card-header">
                            <div class="header-tabs">
                                <button class="tab-btn active" data-tab="contact">Contact Form</button>
                                <button class="tab-btn" data-tab="support">Support Ticket</button>
                            </div>
                        </div>
                        
                        <div class="card-content">
                            <div class="tab-content active" id="contact-tab">
                                <form id="contactForm" class="contact-form">
                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <span class="input-icon"><i class="fas fa-user"></i></span>
                                            <input type="text" id="name" name="name" required>
                                            <label for="name">Full Name</label>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group">
                                            <div class="input-wrapper">
                                                <span class="input-icon"><i class="fas fa-envelope"></i></span>
                                                <input type="email" id="email" name="email" required>
                                                <label for="email">Email Address</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="input-wrapper">
                                                <span class="input-icon"><i class="fas fa-phone"></i></span>
                                                <input type="tel" id="phone" name="phone">
                                                <label for="phone">Phone (Optional)</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <span class="input-icon"><i class="fas fa-tag"></i></span>
                                            <select id="subject" name="subject" required>
                                                <option value="" selected disabled></option>
                                                <option value="general">General Inquiry</option>
                                                <option value="sales">Sales Question</option>
                                                <option value="support">Technical Support</option>
                                                <option value="feedback">Product Feedback</option>
                                                <option value="partnership">Partnership Opportunity</option>
                                            </select>
                                            <label for="subject">Subject</label>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="textarea-wrapper">
                                            <span class="input-icon"><i class="fas fa-message"></i></span>
                                            <textarea id="message" name="message" rows="4" required></textarea>
                                            <label for="message">Your Message</label>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group checkbox-group">
                                        <label class="checkbox-container">
                                            <input type="checkbox" id="newsletter" name="newsletter">
                                            <span class="checkmark"></span>
                                            <span class="checkbox-text">Subscribe to our newsletter for product updates and tech news</span>
                                        </label>
                                    </div>
                                    
                                    <div class="form-actions">
                                        <button type="submit" class="submit-btn">
                                            <span class="btn-text">Send Message</span>
                                            <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                                            <span class="btn-loader"><i class="fas fa-circle-notch fa-spin"></i></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="tab-content" id="support-tab">
                                <form id="supportForm" class="support-form">
                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <span class="input-icon"><i class="fas fa-user"></i></span>
                                            <input type="text" id="support-name" name="name" required>
                                            <label for="support-name">Full Name</label>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <span class="input-icon"><i class="fas fa-envelope"></i></span>
                                            <input type="email" id="support-email" name="email" required>
                                            <label for="support-email">Email Address</label>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group">
                                            <div class="select-wrapper">
                                                <span class="input-icon"><i class="fas fa-cube"></i></span>
                                                <select id="product" name="product" required>
                                                    <option value="" selected disabled></option>
                                                    <option value="product1">TechApp Pro</option>
                                                    <option value="product2">CloudSync Enterprise</option>
                                                    <option value="product3">DataViz Platform</option>
                                                    <option value="product4">SecureConnect</option>
                                                </select>
                                                <label for="product">Product</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="select-wrapper">
                                                <span class="input-icon"><i class="fas fa-flag"></i></span>
                                                <select id="priority" name="priority" required>
                                                    <option value="" selected disabled></option>
                                                    <option value="low">Low</option>
                                                    <option value="medium">Medium</option>
                                                    <option value="high">High</option>
                                                    <option value="critical">Critical</option>
                                                </select>
                                                <label for="priority">Priority</label>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <span class="input-icon"><i class="fas fa-heading"></i></span>
                                            <input type="text" id="issue-title" name="issue-title" required>
                                            <label for="issue-title">Issue Title</label>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="textarea-wrapper">
                                            <span class="input-icon"><i class="fas fa-message"></i></span>
                                            <textarea id="issue-description" name="issue-description" rows="4" required></textarea>
                                            <label for="issue-description">Issue Description</label>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="file-upload">
                                            <input type="file" id="attachments" name="attachments" multiple>
                                            <label for="attachments">
                                                <i class="fas fa-cloud-upload-alt"></i>
                                                <span>Drag files here or click to upload</span>
                                                <span class="file-hint">Max 5 files (PDF, PNG, JPG, ZIP)</span>
                                            </label>
                                        </div>
                                        <div id="file-list" class="file-list"></div>
                                    </div>
                                    
                                    <div class="form-actions">
                                        <button type="submit" class="submit-btn">
                                            <span class="btn-text">Submit Ticket</span>
                                            <span class="btn-icon"><i class="fas fa-ticket"></i></span>
                                            <span class="btn-loader"><i class="fas fa-circle-notch fa-spin"></i></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-info-container">
                        <div class="glass-card info-card">
                            <div class="card-header">
                                <h2>Connect With Us</h2>
                            </div>
                            <div class="card-content">
                                <div class="info-item">
                                    <div class="info-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <h3>Email Us</h3>
                                        <p><a href="mailto:hello@techcompany.com">hello@techcompany.com</a></p>
                                        <p><a href="mailto:support@techcompany.com">support@techcompany.com</a></p>
                                    </div>
                                </div>
                                
                                <div class="info-item">
                                    <div class="info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="info-content">
                                        <h3>Call Us</h3>
                                        <p><a href="tel:+18005551234">+1 (800) 555-1234</a></p>
                                        <p>Mon-Fri: 8AM-8PM EST</p>
                                    </div>
                                </div>
                                
                                <div class="info-item">
                                    <div class="info-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info-content">
                                        <h3>Visit Us</h3>
                                        <p>123 Tech Plaza<br>San Francisco, CA 94107</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="glass-card social-card">
                            <div class="card-header">
                                <h2>Follow Us</h2>
                            </div>
                            <div class="card-content">
                                <div class="social-links">
                                    <a href="#" class="social-link" aria-label="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-link" aria-label="LinkedIn">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="social-link" aria-label="GitHub">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <a href="#" class="social-link" aria-label="Discord">
                                        <i class="fab fa-discord"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="glass-card faq-card">
                            <div class="card-header">
                                <h2>Quick Help</h2>
                            </div>
                            <div class="card-content">
                                <div class="faq-links">
                                    <a href="#" class="faq-link">
                                        <i class="fas fa-book"></i>
                                        <span>Documentation</span>
                                    </a>
                                    <a href="#" class="faq-link">
                                        <i class="fas fa-question-circle"></i>
                                        <span>FAQs</span>
                                    </a>
                                    <a href="#" class="faq-link">
                                        <i class="fas fa-video"></i>
                                        <span>Video Tutorials</span>
                                    </a>
                                    <a href="#" class="faq-link">
                                        <i class="fas fa-comments"></i>
                                        <span>Community Forum</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons and contents
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Show corresponding content
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(tabId + '-tab').classList.add('active');
                });
            });
            
            // Input animation
            const inputs = document.querySelectorAll('input, textarea, select');
            
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
                
                // For select elements
                if (input.tagName === 'SELECT') {
                    input.addEventListener('change', () => {
                        if (input.value) {
                            input.parentElement.classList.add('input-filled');
                        }
                    });
                }
            });
            
            // File upload handling
            const fileInput = document.getElementById('attachments');
            const fileList = document.getElementById('file-list');
            
            if (fileInput) {
                fileInput.addEventListener('change', function() {
                    fileList.innerHTML = '';
                    
                    if (this.files.length > 0) {
                        for (let i = 0; i < this.files.length; i++) {
                            const file = this.files[i];
                            const fileItem = document.createElement('div');
                            fileItem.className = 'file-item';
                            
                            // Determine icon based on file type
                            let fileIcon = 'fa-file';
                            if (file.type.includes('image')) fileIcon = 'fa-file-image';
                            else if (file.type.includes('pdf')) fileIcon = 'fa-file-pdf';
                            else if (file.type.includes('zip')) fileIcon = 'fa-file-archive';
                            
                            fileItem.innerHTML = `
                                <i class="fas ${fileIcon}"></i>
                                <span class="file-name">${file.name}</span>
                                <span class="file-size">${(file.size / 1024).toFixed(1)} KB</span>
                                <button type="button" class="file-remove" data-index="${i}">
                                    <i class="fas fa-times"></i>
                                </button>
                            `;
                            fileList.appendChild(fileItem);
                        }
                        
                        // Add remove functionality
                        document.querySelectorAll('.file-remove').forEach(button => {
                            button.addEventListener('click', function() {
                                this.closest('.file-item').remove();
                            });
                        });
                    }
                });
            }
            
            // Form submission
            const contactForm = document.getElementById('contactForm');
            const supportForm = document.getElementById('supportForm');
            
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    simulateFormSubmission(this);
                });
            }
            
            if (supportForm) {
                supportForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    simulateFormSubmission(this);
                });
            }
            
            function simulateFormSubmission(form) {
                const submitBtn = form.querySelector('.submit-btn');
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    submitBtn.classList.remove('loading');
                    submitBtn.classList.add('success');
                    
                    // Create success message
                    const formContent = form.innerHTML;
                    form.innerHTML = `
                        <div class="success-message">
                            <div class="success-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3>Message Sent Successfully!</h3>
                            <p>We've received your message and will get back to you soon.</p>
                        </div>
                    `;
                    
                    // Reset after delay
                    setTimeout(() => {
                        form.innerHTML = formContent;
                        
                        // Reattach event listeners
                        const newInputs = form.querySelectorAll('input, textarea, select');
                        newInputs.forEach(input => {
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
                        
                        form.addEventListener('submit', function(e) {
                            e.preventDefault();
                            simulateFormSubmission(this);
                        });
                    }, 3000);
                }, 2000);
            }
        });
    </script>