<?php
if (!wp_style_is('first-component18', 'enqueued')) {
    wp_enqueue_style('first-component-style18', get_template_directory_uri() . '/components/firstComponents/firstComponent18/style.css');
}
?>



<div class="firstcomponent18">
    <!-- Background elements -->
    <div class="minimal-bg"></div>
    <div class="minimal-line horizontal-line line-1"></div>
    <div class="minimal-line horizontal-line line-2"></div>
    <div class="minimal-line vertical-line line-3"></div>
    <div class="minimal-line vertical-line line-4"></div>
    
    <div class="container">
      <div class="content-wrapper">
        <!-- Left content -->
        <div class="content-left">
          <div class="minimal-badge">Premium Collection</div>
          
          <h1 class="heading">
            Minimalist design for <span class="heading-bold">modern living</span>
          </h1>
          
          <p class="description">
            Our collection embodies simplicity and elegance, crafted with precision and attention to detail. Each piece is designed to elevate your space with timeless sophistication.
          </p>
          
          <div class="minimal-features">
            <div class="minimal-feature">
              <div class="feature-number">01</div>
              <div class="feature-text">Handcrafted from premium materials, ensuring exceptional quality and durability for years to come.</div>
            </div>
            <div class="minimal-feature">
              <div class="feature-number">02</div>
              <div class="feature-text">Thoughtfully designed with clean lines and balanced proportions for a timeless aesthetic.</div>
            </div>
            <div class="minimal-feature">
              <div class="feature-number">03</div>
              <div class="feature-text">Versatile pieces that seamlessly integrate into any contemporary living space.</div>
            </div>
          </div>
          
          <button class="cta-button">
            Explore Collection
            <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="m12 5 7 7-7 7"></path>
            </svg>
          </button>
          
          <div class="minimal-footer">
            <div class="footer-text">01 / 04</div>
            <div class="footer-dots">
              <div class="dot active"></div>
              <div class="dot"></div>
              <div class="dot"></div>
              <div class="dot"></div>
            </div>
          </div>
        </div>
        
        <!-- Right content -->
        <div class="content-right">
          <div class="minimal-product">
            <div class="product-frame">
              <img src="https://placehold.co/600x800/f5f5f5/999999" alt="Minimalist product" class="product-image">
              <div class="image-overlay"></div>
            </div>
            
            <div class="product-details">
              <div class="product-name">Meridian Chair</div>
              <div class="product-category">Furniture</div>
            </div>
            
            <div class="minimal-tag tag-top">New Arrival</div>
          </div>
        </div>
      </div>
    </div>
  </div>