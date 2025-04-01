<?php
if (!wp_style_is('first-component11', 'enqueued')) {
    wp_enqueue_style('first-component-style11', get_template_directory_uri() . '/components/firstComponents/firstComponent11/style.css');
}
?>


<div class="firstcomponent11">
    <!-- Background elements -->
    <div class="bg-gradient"></div>
    <div class="bg-shapes">
      <div class="shape-1"></div>
      <div class="shape-2"></div>
      <div class="shape-3"></div>
    </div>
    <div class="bg-grid"></div>
    
    <div class="container">
      <div class="content-grid">
        <!-- Left content -->
        <div class="left-content">
          <div class="badge">
            <span class="badge-dot"></span>
            <span class="badge-text">New Features Available</span>
          </div>
          
          <h1 class="headline">
            Elevate Your <span class="gradient-text">Digital Presence</span>
          </h1>
          
          <p class="subheadline">
            Create stunning websites with our powerful platform. Designed for developers and businesses who demand excellence.
          </p>
          
          <div class="buttons">
            <a href="#" class="btn btn-primary">
              Get Started
              <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
            </a>
            
            <a href="#" class="btn btn-outline">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px;">
                <circle cx="12" cy="12" r="10"></circle>
                <polygon points="10 8 16 12 10 16 10 8"></polygon>
              </svg>
              Watch Demo
            </a>
          </div>
          
          <div class="testimonials">
            <div class="avatars">
              <div class="avatar avatar-1"></div>
              <div class="avatar avatar-2"></div>
              <div class="avatar avatar-3"></div>
              <div class="avatar avatar-4"></div>
            </div>
            <div class="testimonials-text">Trusted by 10,000+ companies</div>
          </div>
        </div>
        
        <!-- Right content - Dashboard preview -->
        <div class="right-content">
          <div class="dashboard-preview">
            <div class="browser-dots">
              <div class="browser-dot dot-red"></div>
              <div class="browser-dot dot-yellow"></div>
              <div class="browser-dot dot-green"></div>
            </div>
            
            <div class="dashboard-image">
              <img src="https://placehold.co/800x600/1a1a1a/3a3a3a" alt="Dashboard Preview">
            </div>
          </div>
          
          <!-- Floating elements -->
          <div class="floating-element floating-element-1">
            <div class="status-dot status-green"></div>
            <span class="status-text">Online Status</span>
          </div>
          
          <div class="floating-element floating-element-2">
            <div class="status-dot status-purple"></div>
            <span class="status-text">Analytics</span>
          </div>
        </div>
      </div>
      
      <!-- Bottom logos section -->
      <div class="logos-section">
        <p class="logos-title">Trusted by leading companies</p>
        <div class="logos-grid">
          <div class="logo">Brand 1</div>
          <div class="logo">Brand 2</div>
          <div class="logo">Brand 3</div>
          <div class="logo">Brand 4</div>
          <div class="logo">Brand 5</div>
        </div>
      </div>
    </div>
  </div>