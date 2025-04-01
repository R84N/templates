<?php
if (!wp_style_is('form20', 'enqueued')) {
    wp_enqueue_style('form20', get_template_directory_uri() . '/components/forms/form20/style.css');
}
?>

<div class="form2">
    <div class="container">
    <h2>Contact Us</h2>
    <p>Have questions or need assistance? We're here to help!</p>
    <div class="contact-info">
        <p><strong>Email:</strong> <a href="mailto:info@example.com">info@example.com</a></p>
        <p><strong>Phone:</strong> <a href="tel:+1234567890">+1 (234) 567-890</a></p>
        <p><strong>Address:</strong> 123 Main St, City, Country</p>
    </div>
    <form class="contact-form">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
    <div class="social-links">
        <a href="https://facebook.com" target="_blank">Facebook</a>
        <a href="https://twitter.com" target="_blank">Twitter</a>
        <a href="https://linkedin.com" target="_blank">LinkedIn</a>
    </div>
    </div>
</div>
