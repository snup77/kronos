<?php get_header(); ?>
<!-- Hero Section -->
<section class="hero-background-color">
    <div class="hero container">
        <div class="hero-content">
            <h1>Welcome to My Practice</h1>
            <p>Your trusted partner in family law.</p>
            <a href="#consultation" class="cta-button">Schedule a Consultation</a>
        </div>
    </div>
</section>

<!-- About Me Section -->
<section>
    <div class="about-me container">
        <h2>About Me</h2>
        <div class="about-columns">
            <div class="about-image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
                    <rect width="100" height="100" fill="#ccc" />
                    <text x="50%" y="50%" text-anchor="middle" fill="#000" font-size="14" font-family="Arial" dy=".3em">Image</text>
                </svg>
            </div>
            <div class="about-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada.</p>
                <a href="#meet-joe" class="cta-button">Meet Joe</a>
            </div>
        </div>
    </div>
</section>

<!-- Practice Areas Section -->
<section>
    <div class="practice-areas container">
        <h2>Practice Areas</h2>
        <div class="practice-grid">
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="practice-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50" height="50">
                        <circle cx="25" cy="25" r="24" fill="#0073aa" />
                        <text x="50%" y="55%" text-anchor="middle" fill="#fff" font-size="12" font-family="Arial" dy=".3em">Icon</text>
                    </svg>
                    <h3>Practice Area <?php echo $i; ?></h3>
                    <p>Short description of this practice area.</p>
                    <a href="#read-more">Read More</a>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Client Review Section -->
<section class="client-review">
    <div>
    <blockquote>
        "Joe was incredibly helpful and professional. I highly recommend his services!"
    </blockquote>
    </div>
</section>

<?php get_footer(); ?>