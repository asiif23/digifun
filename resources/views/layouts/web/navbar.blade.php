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
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Speakers</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="cart-ticket">
                        <a href="{{ url('register') }}" class="ticket-btn lab-btn ">
                            <span>Register</span>
                            <span>Tournament</span>
                        </a>
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