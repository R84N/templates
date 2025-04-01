<?php
if (!wp_style_is('first-component16', 'enqueued')) {
    wp_enqueue_style('first-component-style16', get_template_directory_uri() . '/components/firstComponents/firstComponent16/style.css');
}
?>


<div class="firstcomponent16">
    <!-- Background elements -->
    <div class="bg-circle circle-1"></div>
    <div class="bg-circle circle-2"></div>
    
    <div class="retro-lines">
      <div class="line horizontal-line line-1"></div>
      <div class="line horizontal-line line-2"></div>
      <div class="line horizontal-line line-3"></div>
      <div class="line horizontal-line line-4"></div>
      <div class="line horizontal-line line-5"></div>
      <div class="line vertical-line line-6"></div>
      <div class="line vertical-line line-7"></div>
      <div class="line vertical-line line-8"></div>
      <div class="line vertical-line line-9"></div>
      <div class="line vertical-line line-10"></div>
    </div>
    
    <div class="container">
      <div class="content-wrapper">
        <!-- Left content -->
        <div class="content-left">
          <div class="retro-badge">Limited Edition</div>
          
          <h1 class="heading">
            Classic quality with <span class="heading-highlight">vintage</span> style
          </h1>
          
          <div class="subheading">Est. 1975</div>
          
          <p class="description">
            Rediscover the charm of yesteryear with our handcrafted collection. Each piece tells a story of tradition, craftsmanship, and timeless design that never goes out of style.
          </p>
          
          <div class="retro-features">
            <div class="retro-feature">
              <div class="feature-icon">✓</div>
              <span class="feature-text">Handcrafted Quality</span>
            </div>
            <div class="retro-feature">
              <div class="feature-icon">✓</div>
              <span class="feature-text">Authentic Materials</span>
            </div>
            <div class="retro-feature">
              <div class="feature-icon">✓</div>
              <span class="feature-text">Lifetime Guarantee</span>
            </div>
          </div>
          
          <div class="cta-buttons">
            <a href="#" class="btn btn-primary">
              Shop Collection
              <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
              </svg>
            </a>
            
            <a href="#" class="btn btn-secondary">
              Our Story
            </a>
          </div>
          
          <div class="retro-stamp">
            <div class="stamp">
              Premium Quality Guaranteed
            </div>
          </div>
        </div>
        
        <!-- Right content -->
        <div class="content-right">
          <div class="retro-product">
            <div class="product-frame">
              <div class="corner-decoration corner-top-left"></div>
              <div class="corner-decoration corner-top-right"></div>
              <div class="corner-decoration corner-bottom-left"></div>
              <div class="corner-decoration corner-bottom-right"></div>
              
              <div class="product-image-wrapper">
                <img src="https://placehold.co/600x400/f5f0e5/5c3618" alt="Vintage product" class="product-image">
              </div>
            </div>
            
            <div class="retro-tag tag-top">New Arrival</div>
            <div class="retro-tag tag-bottom">Handcrafted</div>
            
            <div class="retro-price">
              <span class="price-currency">$</span>
              <span class="price-amount">149</span>
              <span class="price-period">only</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>