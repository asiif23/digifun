   <!-- ==========Header Section Starts Here========== -->
   <header class="header-section">
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('assets/web/images/logo/01.png') }}" alt="logo" width="200" height="80" style="filter: brightness(200%);">
                    </a>
                </div>
                <div class="menu-area">
                    <ul class="menu">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="#about">About Us</a>
                        </li>
                        <li>
                            <a href="#schedule">Schedule</a>
                        </li>
                        <li>
                            <a href="#speakers">Speakers</a>
                        </li>
                    </ul>
                    <div class="cart-ticket">
                        <button href="{{ url('register') }}" class="ticket-btn lab-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" id="ff">
                            <span>Register</span>
                            <span>Tournament</span>
                        </button>
                    </div>

                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section Ends Here========== -->