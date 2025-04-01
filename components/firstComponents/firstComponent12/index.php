
<?php
if (!wp_style_is('first-component12', 'enqueued')) {
    wp_enqueue_style('first-component-style12', get_template_directory_uri() . '/components/firstComponents/firstComponent12/style.css');
}
?>




<div class="firstcomponent12">
    <!-- Geometric background -->
    <div class="geometric-bg"></div>
    
    <!-- Decorative elements -->
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="dots-pattern"></div>
    <div class="line line-1"></div>
    <div class="line line-2"></div>
    
    <div class="container">
      <div class="content-wrapper">
        <!-- Left content -->
        <div class="content-left">
          <div class="tag">New Platform</div>
          
          <h1 class="title">
            Build your next <span>digital experience</span> with confidence
          </h1>
          
          <p class="description">
            Our platform provides everything you need to create stunning websites and applications that engage your audience and drive results.
          </p>
          
          <div class="cta-buttons">
            <a href="#" class="btn btn-primary">Get Started</a>
            <a href="#" class="btn btn-secondary">Learn More</a>
          </div>
          
          <div class="stats">
            <div class="stat-item">
              <span class="stat-value">98%</span>
              <span class="stat-label">Satisfaction</span>
            </div>
            <div class="stat-item">
              <span class="stat-value">15k+</span>
              <span class="stat-label">Customers</span>
            </div>
            <div class="stat-item">
              <span class="stat-value">4.9</span>
              <span class="stat-label">Rating</span>
            </div>
          </div>
        </div>
        
        <!-- Right content -->
        <div class="content-right">
          <div class="image-wrapper">
            <img src="https://placehold.co/600x400/f0f9ff/3b82f6" alt="Platform Dashboard" class="main-image">
            <div class="image-decoration"></div>
            
            <div class="floating-card card-top">
              <div class="card-icon">↗</div>
              <div class="card-content">
                <div class="card-title">Increased Conversion</div>
                <div class="card-subtitle">Up by 24% this month</div>
              </div>
            </div>
            
            <div class="floating-card card-bottom">
              <div class="card-icon">✓</div>
              <div class="card-content">
                <div class="card-title">Tasks Completed</div>
                <div class="card-subtitle">12 of 15 tasks done</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>