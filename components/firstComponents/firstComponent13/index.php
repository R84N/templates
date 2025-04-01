
<?php
if (!wp_style_is('first-component13', 'enqueued')) {
    wp_enqueue_style('first-component-style13', get_template_directory_uri() . '/components/firstComponents/firstComponent13/style.css');
}
?>

<div class="firstComponent13">
    <!-- Blob shapes -->
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
    
    <!-- Decorative circles -->
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    
    <div class="container">
      <div class="content-wrapper">
        <!-- Left content -->
        <div class="content-left">
          <div class="badge">✨ New Release</div>
          
          <h1 class="title">
            Create amazing <span>digital experiences</span> in minutes
          </h1>
          
          <p class="description">
            Our intuitive platform helps you build beautiful websites and apps without coding. Start your free trial today.
          </p>
          
          <div class="cta-buttons">
            <a href="#" class="btn btn-primary">
              Start Free Trial
              <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
            </a>
            
            <a href="#" class="btn btn-secondary">
              Watch Demo
            </a>
          </div>
          
          <div class="features">
            <div class="feature">
              <div class="feature-icon">✓</div>
              <span>No credit card required</span>
            </div>
            <div class="feature">
              <div class="feature-icon">✓</div>
              <span>14-day free trial</span>
            </div>
            <div class="feature">
              <div class="feature-icon">✓</div>
              <span>Cancel anytime</span>
            </div>
          </div>
        </div>
        
        <!-- Right content -->
        <div class="content-right">
          <div class="app-preview">
            <div class="phone-frame">
              <div class="phone-screen">
                <div class="app-header">
                  <div class="app-title">Dashboard</div>
                  <div class="app-subtitle">Welcome back, Alex!</div>
                </div>
                <div class="app-content">
                  <div class="app-card">
                    <div class="app-card-title">Today's Tasks</div>
                    <div class="app-card-content">You have 3 tasks remaining</div>
                  </div>
                  <div class="app-card">
                    <div class="app-card-title">Recent Activity</div>
                    <div class="app-card-content">Project X was updated 2h ago</div>
                  </div>
                  <div class="app-card">
                    <div class="app-card-title">Team Meeting</div>
                    <div class="app-card-content">Scheduled for 3:00 PM today</div>
                  </div>
                </div>
                <div class="app-nav">
                  <div class="nav-item active"></div>
                  <div class="nav-item"></div>
                  <div class="nav-item"></div>
                  <div class="nav-item"></div>
                </div>
              </div>
            </div>
            
            <!-- Floating elements -->
            <div class="floating-element element-1">
              <div class="element-icon">🚀</div>
              <div class="element-text">Launch in 3 days</div>
            </div>
            
            <div class="floating-element element-2">
              <div class="element-icon">📈</div>
              <div class="element-text">+27% Growth</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>