<?php
if (!wp_style_is('service15', 'enqueued')) {
    wp_enqueue_style('service15', get_template_directory_uri() . '/components/services/service15/style.css');
}
?>


<div class="services15">
        <div class="services-pattern"></div>
        <div class="service-shape service-shape-1"></div>
        <div class="service-shape service-shape-2"></div>
        
        <div class="services-3d-element services-3d-cube">
            <div class="services-3d-cube-face services-3d-cube-front"></div>
            <div class="services-3d-cube-face services-3d-cube-back"></div>
            <div class="services-3d-cube-face services-3d-cube-right"></div>
            <div class="services-3d-cube-face services-3d-cube-left"></div>
            <div class="services-3d-cube-face services-3d-cube-top"></div>
            <div class="services-3d-cube-face services-3d-cube-bottom"></div>
        </div>
        
        <div class="services-3d-element services-3d-pyramid">
            <div class="services-3d-pyramid-face services-3d-pyramid-front"></div>
            <div class="services-3d-pyramid-face services-3d-pyramid-right"></div>
            <div class="services-3d-pyramid-face services-3d-pyramid-back"></div>
            <div class="services-3d-pyramid-face services-3d-pyramid-left"></div>
            <div class="services-3d-pyramid-bottom"></div>
        </div>
        
        <div class="mouse-follower"></div>
        
        <div class="services-container">
            <div class="services-header">
                <div class="services-eyebrow">Our Expertise</div>
                <h2 class="services-title">Transforming Ideas into <span class="services-title-highlight">Digital Reality</span></h2>
                <p class="services-description">We offer a comprehensive suite of cutting-edge services designed to elevate your business and create exceptional digital experiences.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card featured">
                    <div class="service-badge">Popular</div>
                    <div class="service-icon-wrapper">
                        <div class="service-icon-shape"></div>
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216ZM128,76a12,12,0,1,1-12,12A12,12,0,0,1,128,76Zm-4,48a8,8,0,0,1,16,0v56a8,8,0,0,1-16,0Z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="service-title">AI-Powered Digital Transformation</h3>
                    <p class="service-description">Revolutionize your business with our comprehensive AI solutions that automate processes, enhance decision-making, and create personalized customer experiences.</p>
                    
                    <div class="service-features">
                        <div class="service-feature">
                            <span class="service-feature-icon">✓</span>
                            <span>Custom AI model development</span>
                        </div>
                        <div class="service-feature">
                            <span class="service-feature-icon">✓</span>
                            <span>Process automation & optimization</span>
                        </div>
                        <div class="service-feature">
                            <span class="service-feature-icon">✓</span>
                            <span>Predictive analytics implementation</span>
                        </div>
                    </div>
                    
                    <a href="#" class="service-link">
                        <span class="service-link-text">Explore AI Solutions</span>
                        <span class="service-link-arrow">→</span>
                    </a>
                </div>
                
                <div class="service-card medium">
                    <div class="service-icon-wrapper">
                        <div class="service-icon-shape"></div>
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="service-title">Immersive Experience Design</h3>
                    <p class="service-description">Create captivating digital experiences that engage users through innovative UI/UX design, interactive elements, and seamless functionality.</p>
                    
                    <a href="#" class="service-link">
                        <span class="service-link-text">View Design Portfolio</span>
                        <span class="service-link-arrow">→</span>
                    </a>
                </div>
                
                <div class="service-card medium">
                    <div class="service-icon-wrapper">
                        <div class="service-icon-shape"></div>
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Zm-42.34-77.66a8,8,0,0,1-11.32,11.32L136,139.31V168a8,8,0,0,1-16,0V139.31l-10.34,10.35a8,8,0,0,1-11.32-11.32l24-24a8,8,0,0,1,11.32,0Z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="service-title">Cloud Architecture & DevOps</h3>
                    <p class="service-description">Build scalable, secure, and efficient cloud infrastructure with our expert DevOps practices and cloud-native architecture solutions.</p>
                    
                    <a href="#" class="service-link">
                        <span class="service-link-text">Learn About Our Approach</span>
                        <span class="service-link-arrow">→</span>
                    </a>
                </div>
                
                <div class="service-card small">
                    <div class="service-icon-wrapper">
                        <div class="service-icon-shape"></div>
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216ZM173.66,98.34a8,8,0,0,1,0,11.32l-40,40a8,8,0,0,1-11.32,0l-40-40a8,8,0,0,1,11.32-11.32L128,132.69l34.34-34.35A8,8,0,0,1,173.66,98.34Z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="service-title">Blockchain Solutions</h3>
                    <p class="service-description">Implement secure, transparent blockchain technology for your business needs, from smart contracts to decentralized applications.</p>
                    
                    <a href="#" class="service-link">
                        <span class="service-link-text">Discover Blockchain</span>
                        <span class="service-link-arrow">→</span>
                    </a>
                </div>
                
                <div class="service-card small">
                    <div class="service-icon-wrapper">
                        <div class="service-icon-shape"></div>
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm80-36a8,8,0,0,1,0,16,8,8,0,0,1,0-16Zm-160,0a8,8,0,0,1,0,16,8,8,0,0,1,0-16ZM216,72a8,8,0,0,1-8,8,8,8,0,0,1,0-16A8,8,0,0,1,216,72ZM48,72a8,8,0,0,1-8,8,8,8,0,0,1,0-16A8,8,0,0,1,48,72Zm136,112a8,8,0,0,1,0,16,8,8,0,0,1,0-16Zm-112,0a8,8,0,0,1,0,16,8,8,0,0,1,0-16Zm136-48A104,104,0,1,1,104,32,104.11,104.11,0,0,1,208,136Zm-16,0A88,88,0,1,0,104,224,88.1,88.1,0,0,0,192,136Z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="service-title">AR/VR Development</h3>
                    <p class="service-description">Create immersive augmented and virtual reality experiences that revolutionize training, marketing, and customer engagement.</p>
                    
                    <a href="#" class="service-link">
                        <span class="service-link-text">Explore AR/VR</span>
                        <span class="service-link-arrow">→</span>
                    </a>
                </div>
                
                <div class="service-card small">
                    <div class="service-icon-wrapper">
                        <div class="service-icon-shape"></div>
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M208,40H48A24,24,0,0,0,24,64V192a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V64A24,24,0,0,0,208,40Zm8,152a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V64a8,8,0,0,1,8-8H208a8,8,0,0,1,8,8ZM80,84a12,12,0,1,1-12-12A12,12,0,0,1,80,84Zm40,0a12,12,0,1,1-12-12A12,12,0,0,1,120,84Zm40,0a12,12,0,1,1-12-12A12,12,0,0,1,160,84Zm-80,56a12,12,0,1,1,12,12A12,12,0,0,1,80,140Zm52,12a12,12,0,1,1,12-12A12,12,0,0,1,132,152Zm52,0a12,12,0,1,1,12-12A12,12,0,0,1,184,152Z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="service-title">Cybersecurity</h3>
                    <p class="service-description">Protect your digital assets with our comprehensive security solutions, from threat detection to compliance and risk management.</p>
                    
                    <a href="#" class="service-link">
                        <span class="service-link-text">Secure Your Business</span>
                        <span class="service-link-arrow">→</span>
                    </a>
                </div>
            </div>
            
            <div class="services-cta">
                <p class="services-cta-text">Ready to transform your business with our innovative solutions?</p>
                <div class="services-cta-buttons">
                    <a href="#" class="services-cta-primary">Schedule a Consultation</a>
                    <a href="#" class="services-cta-secondary">View All Services</a>
                </div>
            </div>
        </div>