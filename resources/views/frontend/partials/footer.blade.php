<footer>
    <div class="footer-container container">
        <!-- Discover Kechei Section -->
        <div class="footer-column discover">
            <h3 style="color: #eeb601;"><b>DISCOVER KECHEI</b></h3>
            <br>
            <hr>
            <br>
            <center><img src="{{ asset('images/kechei-logo.png') }}" alt="Kechei Centre Small Logo" class="footer-logo"></center>
            <p>Experience the charm and hospitality of Kechei Centre. Explore our unique offerings and services tailored just for you.</p>
        </div>

        <!-- Services Section -->
        <div class="footer-column services">
            <h3 style="color: #eeb601;"><b>SERVICES</b></h3>
            <br>
            <hr>
            <br>
            <ul>
                <li><a href="/accomodation">Accommodation</a></li>
                <li><a href="/recreation">Recreation</a></li>
                <li><a href="/hotelrestaurant">Hotel & Restaurant</a></li>
                <li><a href="/massagetherapy">Massage & Therapy</a></li>
                <li><a href="/eventsparties">Events & Parties</a></li>
                <li><a href="/conferences">Conferences</a></li>
                <li><a href="/careers">Careers</a></li>
                <li><a href="/calender">Calender</a></li>
                <li><a href="/location">Location</a></li>
            </ul>
        </div>

        <!-- Contact Us Section -->
        <div class="footer-column contact-us">
            <h3 style="color: #eeb601;"><b>REACH OUT</b></h3>
            <br>
            <hr>
            <br>
            <p>Phone: +254 701 616 456</p>
            <p>Email: info@kecheicentre.com</p>
            <p>Location: 00600 Iten, Elgeiyo Marakwet, Kenya</p>
            <a href="#book-now" class="book-now-button">Book Now</a>
        </div>

        {{-- QR --}}
        <div class="kc-footer-content items-center">
            <h3 style="color: #eeb601;"><b>QUICK ACCESS</b></h3>
            <br>
            <hr>
            <br>
            
            <div class="kc-footer-column">
                <img src="{{ asset('images/kecheiqr.png') }}" alt="QR Code to Kechei Center" class="kc-qr-code">
            </div>
            <br>
            <div class="kc-footer-column">
                <p class="kc-footer-text">&copy; 2024 Kechei Center. All rights reserved.</p>
            </div>
        </div>
    </div>
    
    <!-- Social Media Section -->
    <div class="social-media container">
        <p>Follow us on:</p>
        <a href="https://www.facebook.com/KecheiCenter/" class="social-icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://x.com/KecheiCenter/" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/kecheicentre" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/sospeter-birir-288735205/" class="social-icon" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>

    <!-- Privacy Policy and Terms and Conditions -->
<div class="footer-bottom container">
    <a href="{{ asset('pdf/Kechei-Policy01.pdf') }}" class="footer-link">Privacy Policy</a>
    <a href="{{ asset('pdf/Terms and Conditions.pdf') }}" class="footer-link">Terms and Conditions</a>
</div>
</footer>
