<!-- Gallery Header Section -->
<section class="kechei-gallery-header">
    <div class="kechei-gallery-container">
        <h1 class="kechei-gallery-title">Gallery</h1>
        <p class="kechei-gallery-intro">Discover the beauty of Kechei Centre through our gallery. Explore our memorable moments and captivating visuals.</p>
    </div>
</section>

<!-- Gallery Section -->
<section class="kechei-gallery">
    <div class="kechei-gallery-container">
        <div class="kechei-gallery-grid">
            <!-- Gallery Item 1 -->
            <div class="kechei-gallery-item">
                <img src="{{ asset('images/outdoor1.jpeg') }}" alt="Gallery Image 1">
                <div class="kechei-gallery-overlay">
                    <h3 class="kechei-gallery-caption">Outdoor Activities</h3>
                </div>
            </div>
            <!-- Gallery Item 2 -->
            <div class="kechei-gallery-item">
                <img src="{{ asset('images/restaurant3.jpeg') }}" alt="Gallery Image 2">
                <div class="kechei-gallery-overlay">
                    <h3 class="kechei-gallery-caption">Kechei Restaurant</h3>
                </div>
            </div>
            <!-- Gallery Item 3 -->
            <div class="kechei-gallery-item">
                <img src="{{ asset('images/Resturant2.jpeg') }}" alt="Gallery Image 3">
                <div class="kechei-gallery-overlay">
                    <h3 class="kechei-gallery-caption">Meal Time</h3>
                </div>
            </div>
            <!-- Gallery Item 4 -->
            <div class="kechei-gallery-item">
                <img src="{{ asset('images/Landing-8.jpg') }}" alt="Gallery Image 3">
                <div class="kechei-gallery-overlay">
                    <h3 class="kechei-gallery-caption">Community Engagement</h3>
                </div>
            </div>
            <!-- Add more gallery items as needed -->
        </div>
    </div>
</section>

<!-- Gallery Modal -->
<div id="kechei-gallery-modal" class="kechei-modal">
    <div class="kechei-modal-content">
        <span class="kechei-close">&times;</span>
        <img id="modal-image" src="" alt="Gallery Full Image">
        <h3 id="modal-caption" class="kechei-modal-caption"></h3>
    </div>
</div>

<script src="{{ asset('css/styles.css') }}"></script> <!-- Link to your JavaScript file -->