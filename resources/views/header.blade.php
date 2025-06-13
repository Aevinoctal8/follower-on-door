<nav class="navbar">
    <div class="navbar-brand">
        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
        <!-- Hamburger Icon -->
        <button class="hamburger d-md-none" id="toggleMenu" aria-label="Menu">&#9776;</button>
    </div>

    <ul class="nav-links" id="navLinks">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('faqs') }}" class="{{ request()->routeIs('faqs') ? 'active' : '' }}">FAQs</a></li>
        <li><a href="{{ route('terms') }}" class="{{ request()->routeIs('terms') ? 'active' : '' }}">Terms and Conditions</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a></li>
    </ul>
</nav>


<script>
  const toggleBtn = document.getElementById('toggleMenu');
  const navLinks = document.getElementById('navLinks');

  toggleBtn.addEventListener('click', () => {
    navLinks.classList.toggle('show-mobile');
  });
</script>
