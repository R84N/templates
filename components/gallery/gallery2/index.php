<?php
if (!wp_style_is('gallery2', 'enqueued')) {
    wp_enqueue_style('gallery2', get_template_directory_uri() . '/components/gallery/gallery2/style.css');
}
?>

<section class="gallery2">
        <div class="container">
            <div class="section-header">
                <h2>Our Gallery</h2>
                <p>Explore our collection of stunning images showcasing our work, projects, and creative vision.</p>
            </div>

            <div class="gallery-controls">
                <div class="view-options">
                    <a href="#grid-view" class="view-option active">Grid View</a>
                    <a href="#masonry-view" class="view-option">Masonry</a>
                    <a href="#carousel-view" class="view-option">Carousel</a>
                </div>

                <div class="filter-options">
                    <span class="filter-option active">All</span>
                    <span class="filter-option">Nature</span>
                    <span class="filter-option">Architecture</span>
                    <span class="filter-option">Travel</span>
                    <span class="filter-option">People</span>
                </div>
            </div>

            <div class="gallery-container">
                <!-- Grid View -->
                <div id="grid-view" class="gallery-view">
                    <div class="grid-gallery">
                        <a href="#lightbox-1" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Mountain Landscape" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Mountain Peaks</h3>
                                <p class="gallery-category">Nature</p>
                            </div>
                        </a>

                        <a href="#lightbox-2" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Modern Architecture" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Urban Geometry</h3>
                                <p class="gallery-category">Architecture</p>
                            </div>
                        </a>

                        <a href="#lightbox-3" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Tropical Beach" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Paradise Shores</h3>
                                <p class="gallery-category">Travel</p>
                            </div>
                        </a>

                        <a href="#lightbox-4" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Portrait" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Human Expression</h3>
                                <p class="gallery-category">People</p>
                            </div>
                        </a>

                        <a href="#lightbox-5" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Forest" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Enchanted Woods</h3>
                                <p class="gallery-category">Nature</p>
                            </div>
                        </a>

                        <a href="#lightbox-6" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Interior Design" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Modern Living</h3>
                                <p class="gallery-category">Architecture</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Masonry View -->
                <div id="masonry-view" class="gallery-view">
                    <div class="masonry-gallery">
                        <a href="#lightbox-1" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Mountain Landscape" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Mountain Peaks</h3>
                                <p class="gallery-category">Nature</p>
                            </div>
                        </a>

                        <a href="#lightbox-2" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Modern Architecture" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Urban Geometry</h3>
                                <p class="gallery-category">Architecture</p>
                            </div>
                        </a>

                        <a href="#lightbox-3" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Tropical Beach" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Paradise Shores</h3>
                                <p class="gallery-category">Travel</p>
                            </div>
                        </a>

                        <a href="#lightbox-4" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Portrait" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Human Expression</h3>
                                <p class="gallery-category">People</p>
                            </div>
                        </a>

                        <a href="#lightbox-5" class="gallery-item">
                            <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Forest" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Enchanted Woods</h3>
                                <p class="gallery-category">Nature</p>
                            </div>
                        </a>

                        <a href="#lightbox-6" class="gallery-item">
                            <img src="https://source.unsplash.com/random/600x550?architecture,interior" alt="Interior Design" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title">Modern Living</h3>
                                <p class="gallery-category">Architecture</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Carousel View -->
                <div id="carousel-view" class="gallery-view">
                    <div class="carousel-gallery">
                        <div class="carousel-track">
                            <div id="slide1" class="carousel-slide">
                                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Mountain Landscape" class="carousel-image">
                                <div class="carousel-caption">
                                    <h3 class="carousel-title">Mountain Peaks</h3>
                                    <p class="carousel-description">Majestic mountain ranges reaching toward the sky, capturing the raw beauty of nature's grandeur.</p>
                                </div>
                            </div>

                            <div id="slide2" class="carousel-slide">
                                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Modern Architecture" class="carousel-image">
                                <div class="carousel-caption">
                                    <h3 class="carousel-title">Urban Geometry</h3>
                                    <p class="carousel-description">Bold lines and striking angles define these architectural marvels of modern urban design.</p>
                                </div>
                            </div>

                            <div id="slide3" class="carousel-slide">
                                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Tropical Beach" class="carousel-image">
                                <div class="carousel-caption">
                                    <h3 class="carousel-title">Paradise Shores</h3>
                                    <p class="carousel-description">Crystal clear waters and pristine sands create the perfect escape to tropical paradise.</p>
                                </div>
                            </div>

                            <div id="slide4" class="carousel-slide">
                                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Portrait" class="carousel-image">
                                <div class="carousel-caption">
                                    <h3 class="carousel-title">Human Expression</h3>
                                    <p class="carousel-description">Capturing the depth of human emotion and character through powerful portraiture.</p>
                                </div>
                            </div>

                            <div id="slide5" class="carousel-slide">
                                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Forest" class="carousel-image">
                                <div class="carousel-caption">
                                    <h3 class="carousel-title">Enchanted Woods</h3>
                                    <p class="carousel-description">Mystical forests filled with ancient trees and dappled light creating a magical atmosphere.</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-nav">
                            <a href="#slide1" class="carousel-dot active"></a>
                            <a href="#slide2" class="carousel-dot"></a>
                            <a href="#slide3" class="carousel-dot"></a>
                            <a href="#slide4" class="carousel-dot"></a>
                            <a href="#slide5" class="carousel-dot"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lightboxes -->
        <div id="lightbox-1" class="lightbox">
            <div class="lightbox-content">
                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Mountain Landscape" class="lightbox-image">
                <a href="#" class="lightbox-close">×</a>
                <div class="lightbox-caption">
                    <h3 class="lightbox-title">Mountain Peaks</h3>
                    <p class="lightbox-category">Nature</p>
                </div>
            </div>
        </div>

        <div id="lightbox-2" class="lightbox">
            <div class="lightbox-content">
                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Modern Architecture" class="lightbox-image">
                <a href="#" class="lightbox-close">×</a>
                <div class="lightbox-caption">
                    <h3 class="lightbox-title">Urban Geometry</h3>
                    <p class="lightbox-category">Architecture</p>
                </div>
            </div>
        </div>

        <div id="lightbox-3" class="lightbox">
            <div class="lightbox-content">
                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Tropical Beach" class="lightbox-image">
                <a href="#" class="lightbox-close">×</a>
                <div class="lightbox-caption">
                    <h3 class="lightbox-title">Paradise Shores</h3>
                    <p class="lightbox-category">Travel</p>
                </div>
            </div>
        </div>

        <div id="lightbox-4" class="lightbox">
            <div class="lightbox-content">
                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Portrait" class="lightbox-image">
                <a href="#" class="lightbox-close">×</a>
                <div class="lightbox-caption">
                    <h3 class="lightbox-title">Human Expression</h3>
                    <p class="lightbox-category">People</p>
                </div>
            </div>
        </div>

        <div id="lightbox-5" class="lightbox">
            <div class="lightbox-content">
                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Forest" class="lightbox-image">
                <a href="#" class="lightbox-close">×</a>
                <div class="lightbox-caption">
                    <h3 class="lightbox-title">Enchanted Woods</h3>
                    <p class="lightbox-category">Nature</p>
                </div>
            </div>
        </div>

        <div id="lightbox-6" class="lightbox">
            <div class="lightbox-content">
                <img src="https://thumbs.dreamstime.com/z/baby-cat-kitty-green-grass-months-old-34878242.jpg" alt="Interior Design" class="lightbox-image">
                <a href="#" class="lightbox-close">×</a>
                <div class="lightbox-caption">
                    <h3 class="lightbox-title">Modern Living</h3>
                    <p class="lightbox-category">Architecture</p>
                </div>
            </div>
        </div>
    </section>