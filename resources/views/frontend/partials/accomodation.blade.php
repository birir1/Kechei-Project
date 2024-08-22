<!-- Gallery Header Section -->
<section class="kechei-gallery-header">
    <div class="kechei-gallery-container">
        <h1 class="kechei-gallery-title">Kechei Accomodation Page</h1>
        <p class="kechei-gallery-intro">Discover our comfortable and stylish accommodations designed for your relaxation and comfort.</p>
    </div>
</section>

<section class="kc-room-info">
    <div class="kc-container">
        <center><h1><b>Our Exclusive Rooms</b></h1></center>
        <br>
        <hr>
        <br>
        <div class="kc-room-grid">
            <div class="kc-room-card">
                <img src="{{ asset('images/single-room.jpg') }}" alt="Deluxe Room" class="kc-room-image">
                <div class="kc-room-details">
                    <h3>Deluxe Room</h3>
                    <p>Experience unparalleled luxury with our spacious deluxe rooms, featuring high-end amenities and exquisite decor.</p>
                    <a href="#kc-book-now" class="kc-cta-button">Book Now</a>
                </div>
            </div>
            <div class="kc-room-card">
                <img src="{{ asset('images/single-room2.jpg') }}" alt="Standard Room" class="kc-room-image">
                <div class="kc-room-details">
                    <h3>Standard Room</h3>
                    <p>Our standard rooms offer a perfect blend of comfort and elegance, ideal for both business and leisure travelers.</p>
                    <a href="#kc-book-now" class="kc-cta-button">Book Now</a>
                </div>
            </div>
            <div class="kc-room-card">
                <img src="{{ asset('images/single-room.jpg') }}" alt="Suite" class="kc-room-image">
                <div class="kc-room-details">
                    <h3>Suite</h3>
                    <p>Indulge in our luxurious suites, designed for an extraordinary experience with premium features and breathtaking views.</p>
                    <a href="#kc-book-now" class="kc-cta-button">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="kc-facilities">
    <div class="kc-container">
        <h2>Our Premium Facilities</h2>
        <div class="kc-facilities-grid">
            <div class="kc-facility-item">
                <img src="{{ asset('images/kechei-logo.png') }}" alt="Free Wi-Fi" class="kc-facility-icon">
                <h3>Free Wi-Fi</h3>
            </div>
            <div class="kc-facility-item">
                <img src="{{ asset('images/kechei-logo.png') }}" alt="Room Service" class="kc-facility-icon">
                <h3>24/7 Room Service</h3>
            </div>
            {{-- <div class="kc-facility-item">
                <img src="{{ asset('images/kechei-logo.png') }}" alt="Swimming Pool" class="kc-facility-icon">
                <h3>Swimming Pool</h3>
            </div> --}}
            <div class="kc-facility-item">
                <img src="{{ asset('images/kechei-logo.png') }}" alt="Fitness Center" class="kc-facility-icon">
                <h3>Fitness Center</h3>
            </div>
            <div class="kc-facility-item">
                <img src="{{ asset('images/kechei-logo.png') }}" alt="On-site Dining" class="kc-facility-icon">
                <h3>On-site Dining</h3>
            </div>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section id="kc-book-now" class="kc-booking-section">
    <div class="kc-container">
        <h2>Ready to Book?</h2>
        <p>Contact us now to secure your stay and experience luxury like never before.</p>
        <a href="/contact" class="kc-cta-button">Reach Out</a>
    </div>
</section>