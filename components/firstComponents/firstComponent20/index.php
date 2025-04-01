<?php
if (!wp_style_is('first-component20', 'enqueued')) {
    wp_enqueue_style('first-component-style20', get_template_directory_uri() . '/components/firstComponents/firstComponent20/style.css');
}
?>


<div class="firstcomponent20">
        <div class="banner-grid"></div>
        <div class="banner-container">
            <div class="banner-content">
                <div class="banner-tag">Next Generation</div>
                <h1 class="banner-title">Redefining <span>Digital Experience</span></h1>
                <p class="banner-subtitle">Unlock the future of web interaction with our cutting-edge platform that combines AI, stunning visuals, and seamless performance.</p>
                
                <div class="banner-actions">
                    <a href="#" class="banner-cta-primary">Get Started Now</a>
                    <a href="#" class="banner-cta-secondary">Watch Demo</a>
                </div>
                
                <div class="banner-stats">
                    <div class="banner-stat">
                        <span class="banner-stat-value">98%</span>
                        <span class="banner-stat-label">Satisfaction Rate</span>
                    </div>
                    <div class="banner-stat">
                        <span class="banner-stat-value">10k+</span>
                        <span class="banner-stat-label">Active Users</span>
                    </div>
                    <div class="banner-stat">
                        <span class="banner-stat-value">24/7</span>
                        <span class="banner-stat-label">Support</span>
                    </div>
                </div>
            </div>
            
            <div class="banner-visual">
                <div class="banner-circle banner-circle-1"></div>
                <div class="banner-circle banner-circle-2"></div>
                <div class="banner-circle banner-circle-3"></div>
                
                <div class="banner-cube">
                    <div class="banner-cube-face banner-cube-front">FRONT</div>
                    <div class="banner-cube-face banner-cube-back">BACK</div>
                    <div class="banner-cube-face banner-cube-right">RIGHT</div>
                    <div class="banner-cube-face banner-cube-left">LEFT</div>
                    <div class="banner-cube-face banner-cube-top">TOP</div>
                    <div class="banner-cube-face banner-cube-bottom">BOTTOM</div>
                </div>
            </div>
        </div>
        
        <script>
            // Create animated particles
            const particlesContainer = document.createElement('div');
            particlesContainer.className = 'banner-particles';
            document.querySelector('.firstcomponent20').appendChild(particlesContainer);
            
            const particleCount = 50;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('span');
                particle.className = 'banner-particle';
                
                // Random position
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                
                // Random size
                const size = Math.random() * 5 + 1;
                
                // Random opacity
                const opacity = Math.random() * 0.5 + 0.1;
                
                // Random animation duration
                const duration = Math.random() * 20 + 10;
                
                // Set styles
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.opacity = opacity;
                
                // Add animation
                particle.style.animation = `float ${duration}s ease-in-out infinite`;
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                particlesContainer.appendChild(particle);
            }
        </script>
    </div>