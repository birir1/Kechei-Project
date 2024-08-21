<!-- Reservation Header Section -->
    <section class="reservation-header-section">
        <div class="container">
            <h1 class="reservation-title">Make a Reservation</h1>
            <p class="reservation-subtitle">Please fill out the form below to book your table at Kechei Centre.</p>
        </div>
    </section>

    <!-- Reservation Form Section -->
    <section class="reservation-form-section">
        <div class="container">
            <form class="reservation-form">
                <div class="form-group">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" class="form-input" placeholder="Enter your full name">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" class="form-input" placeholder="Enter your email address">
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="tel" id="phone" class="form-input" placeholder="Enter your phone number">
                </div>

                <div class="form-group">
                    <label for="date" class="form-label">Reservation Date:</label>
                    <input type="date" id="date" class="form-input">
                </div>

                <div class="form-group">
                    <label for="time" class="form-label">Reservation Time:</label>
                    <input type="time" id="time" class="form-input">
                </div>

                <div class="form-group">
                    <label for="guests" class="form-label">Number of Guests:</label>
                    <input type="number" id="guests" class="form-input" placeholder="Enter the number of guests">
                </div>

                <div class="form-group">
                    <label for="requests" class="form-label">Special Requests:</label>
                    <textarea id="requests" class="form-textarea" placeholder="Enter any special requests"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="reservation-submit-button">Submit Reservation</button>
                </div>
            </form>
        </div>
    </section>