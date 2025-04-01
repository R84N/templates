<?php
if (!wp_style_is('first-component15', 'enqueued')) {
    wp_enqueue_style('first-component-style15', get_template_directory_uri() . '/components/firstComponents/firstComponent15/style.css');
}
?>


<div class="firstcomponent15">
    <!-- Background elements -->
    <div class="bg-leaf leaf-1"></div>
    <div class="bg-leaf leaf-2"></div>
    <div class="bg-leaf leaf-3"></div>
    <div class="bg-texture"></div>
    
    <div class="container">
      <div class="content-wrapper">
        <!-- Left content -->
        <div class="content-left">
          <div class="eco-badge">
            <span class="eco-badge-icon">🌱</span>
            Eco-Friendly Products
          </div>
          
          <h1 class="heading">
            Sustainable solutions for a <span class="heading-highlight">greener</span> tomorrow
          </h1>
          
          <p class="description">
            Our eco-friendly products are designed with the planet in mind. Made from sustainable materials, they help reduce your carbon footprint while providing exceptional quality.
          </p>
          
          <div class="eco-stats">
            <div class="eco-stat">
              <span class="eco-stat-value">85%</span>
              <span class="eco-stat-label">Recycled Materials</span>
            </div>
            <div class="eco-stat">
              <span class="eco-stat-value">100%</span>
              <span class="eco-stat-label">Biodegradable</span>
            </div>
            <div class="eco-stat">
              <span class="eco-stat-value">-40%</span>
              <span class="eco-stat-label">Carbon Footprint</span>
            </div>
          </div>
          
          <div class="cta-buttons">
            <a href="#" class="btn btn-primary">
              Shop Now
              <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
            </a>
            
            <a href="#" class="btn btn-secondary">
              Learn More
            </a>
          </div>
          
          <div class="eco-certifications">
            <div class="eco-certification">
              <div class="certification-icon">♻️</div>
              <span class="certification-text">Certified Organic</span>
            </div>
            <div class="eco-certification">
              <div class="certification-icon">🌍</div>
              <span class="certification-text">Carbon Neutral</span>
            </div>
            <div class="eco-certification">
              <div class="certification-icon">🌿</div>
              <span class="certification-text">Sustainably Sourced</span>
            </div>
          </div>
        </div>
        
        <!-- Right content -->
        <div class="content-right">
          <div class="eco-product">
            <div class="product-image-wrapper">
              <img src="https://placehold.co/600x400/e9f1e5/4d7c0f" alt="Eco-friendly product" class="product-image">
            </div>
            
            <div class="leaf-decoration leaf-top-right"></div>
            <div class="leaf-decoration leaf-bottom-left"></div>
            
            <div class="eco-tag tag-top">
              <div class="tag-icon">🌱</div>
              <span class="tag-text">Plant-based</span>
            </div>
            
            <div class="eco-tag tag-bottom">
              <div class="tag-icon">♻️</div>
              <span class="tag-text">Zero Waste</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>