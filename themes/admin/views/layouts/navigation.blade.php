<nav class="admin-navbar">
    <div class="nav-container">
        <!-- Brand Logo -->
        <div class="nav-brand">
            <a href="{{ url('/') }}" class="brand-link">
                 <div class="logo-img">
            <img  src="{{url('assets/dist/img/favicon.webp')}}" alt="AdminLTELogo" style="width: 68px;">
          </div>
                <span class="brand-text" style="margin-left: 10px;">
                    <span class="brand-main">247 SkillLab</span>
                    <span class="brand-sub">Admin Portal</span>
                </span>
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-toggle" id="mobileToggle" type="button" aria-label="Toggle navigation">
            <span class="toggle-bar"></span>
            <span class="toggle-bar"></span>
            <span class="toggle-bar"></span>
        </button>

        <!-- Navigation Menu -->
        <div class="nav-menu" id="navMenu">
            <!-- Left Side Menu Items -->
            <div class="nav-left">
                <!-- Add left navigation items here if needed -->
            </div>

            <!-- Right Side Menu Items -->
            <div class="nav-right">
                <!-- Authentication Links -->
                @guest('admin')
                    <div class="auth-links">
                        @if (Route::has('admin.login'))
                            <a class="nav-link login-link" href="{{ route('admin.login') }}">
                                <svg class="link-icon" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Admin Login
                            </a>
                        @endif

                        @if (Route::has('admin.register'))
                            <a class="nav-link register-link" href="{{ route('admin.register') }}">
                                <svg class="link-icon" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"/>
                                </svg>
                                Register Admin
                            </a>
                        @endif
                    </div>
                @else
                    <div class="user-menu">
                        <div class="user-info" id="userDropdown">
                            <div class="user-avatar">
                                {{ substr(Auth::guard('admin')->user()->name, 0, 1) }}
                            </div>
                            <span class="user-name">{{ Auth::guard('admin')->user()->name }}</span>
                            <svg class="dropdown-arrow" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="dropdown-menu" id="dropdownMenu">
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <svg class="dropdown-icon" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                                </svg>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</nav>

<style>
    :root {
        --primary: #2b3990;
        --primary-dark: #1f2a6d;
        --primary-light: #3c4da8;
        --secondary: #00c0f5;
        --secondary-dark: #00a8d6;
        --white: #ffffff;
        --gray-50: #f9fafb;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-300: #d1d5db;
        --gray-400: #9ca3af;
        --gray-500: #6b7280;
        --gray-600: #4b5563;
        --gray-700: #374151;
        --gray-800: #1f2937;
        --gray-900: #111827;
        --shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .admin-navbar {
        background: var(--white);
        box-shadow: var(--shadow);
        border-bottom: 1px solid var(--gray-200);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 70px;
    }

    /* Brand Styles */
    .nav-brand {
        display: flex;
        align-items: center;
    }

    .brand-link {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: var(--gray-900);
        transition: all 0.3s ease;
    }

    .brand-link:hover {
        transform: translateY(-1px);
    }

    .brand-logo {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 12px;
        box-shadow: 0 4px 12px rgba(43, 57, 144, 0.3);
    }

    .brand-logo svg {
        width: 20px;
        height: 20px;
        color: var(--white);
    }

    .brand-text {
        display: flex;
        flex-direction: column;
        line-height: 1.2;
    }

    .brand-main {
        font-size: 1.25rem;
        font-weight: 800;
        color: var(--primary);
    }

    .brand-sub {
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--secondary);
        margin-top: 2px;
    }

    /* Mobile Toggle */
    .mobile-toggle {
        display: none;
        flex-direction: column;
        background: none;
        border: none;
        cursor: pointer;
        padding: 8px;
        width: 40px;
        height: 40px;
        justify-content: space-between;
    }

    .toggle-bar {
        width: 100%;
        height: 3px;
        background: var(--gray-700);
        border-radius: 2px;
        transition: all 0.3s ease;
        transform-origin: center;
    }

    .mobile-toggle.active .toggle-bar:nth-child(1) {
        transform: rotate(45deg) translate(8px, 8px);
    }

    .mobile-toggle.active .toggle-bar:nth-child(2) {
        opacity: 0;
    }

    .mobile-toggle.active .toggle-bar:nth-child(3) {
        transform: rotate(-45deg) translate(8px, -8px);
    }

    /* Navigation Menu */
    .nav-menu {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex: 1;
        margin-left: 40px;
    }

    .nav-left {
        display: flex;
        align-items: center;
    }

    .nav-right {
        display: flex;
        align-items: center;
    }

    /* Auth Links */
    .auth-links {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .nav-link {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .login-link {
        color: var(--gray-700);
        background: var(--gray-50);
    }

    .login-link:hover {
        background: var(--gray-100);
        color: var(--primary);
        transform: translateY(-1px);
    }

    .register-link {
        color: var(--white);
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        box-shadow: 0 2px 8px rgba(43, 57, 144, 0.3);
    }

    .register-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(43, 57, 144, 0.4);
    }

    .link-icon {
        width: 16px;
        height: 16px;
        margin-right: 8px;
    }

    /* User Menu */
    .user-menu {
        position: relative;
    }

    .user-info {
        display: flex;
        align-items: center;
        padding: 8px 16px;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .user-info:hover {
        background: var(--gray-50);
        border-color: var(--gray-200);
    }

    .user-avatar {
        width: 36px;
        height: 36px;
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-weight: 700;
        font-size: 0.9rem;
        margin-right: 12px;
        box-shadow: 0 2px 8px rgba(43, 57, 144, 0.3);
    }

    .user-name {
        font-weight: 600;
        color: var(--gray-800);
        margin-right: 8px;
    }

    .dropdown-arrow {
        width: 16px;
        height: 16px;
        color: var(--gray-500);
        transition: transform 0.3s ease;
    }

    .user-info.active .dropdown-arrow {
        transform: rotate(180deg);
    }

    /* Dropdown Menu */
    .dropdown-menu {
        position: absolute;
        top: 100%;
        right: 0;
        margin-top: 8px;
        background: var(--white);
        border: 1px solid var(--gray-200);
        border-radius: 10px;
        box-shadow: var(--shadow-lg);
        min-width: 200px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .dropdown-menu.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        padding: 12px 16px;
        text-decoration: none;
        color: var(--gray-700);
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
    }

    .dropdown-item:hover {
        background: var(--gray-50);
        color: var(--primary);
    }

    .dropdown-icon {
        width: 16px;
        height: 16px;
        margin-right: 8px;
    }

    .hidden {
        display: none;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .nav-container {
            padding: 0 16px;
            height: 60px;
        }

        .mobile-toggle {
            display: flex;
        }

        .nav-menu {
            position: fixed;
            top: 60px;
            left: 0;
            width: 100%;
            background: var(--white);
            border-top: 1px solid var(--gray-200);
            box-shadow: var(--shadow-lg);
            flex-direction: column;
            align-items: stretch;
            margin-left: 0;
            padding: 20px;
            transform: translateY(-100%);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .nav-menu.active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .nav-left {
            margin-bottom: 20px;
        }

        .auth-links {
            flex-direction: column;
            gap: 12px;
            width: 100%;
        }

        .nav-link {
            justify-content: center;
            width: 100%;
        }

        .user-menu {
            width: 100%;
        }

        .user-info {
            justify-content: center;
            width: 100%;
        }

        .dropdown-menu {
            position: static;
            margin-top: 12px;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            border: 1px solid var(--gray-200);
        }

        .brand-main {
            font-size: 1.1rem;
        }

        .brand-sub {
            font-size: 0.7rem;
        }
    }

    @media (max-width: 480px) {
        .nav-container {
            padding: 0 12px;
        }

        .brand-logo {
            width: 32px;
            height: 32px;
            margin-right: 8px;
        }

        .brand-logo svg {
            width: 16px;
            height: 16px;
        }

        .brand-main {
            font-size: 1rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');
        const userDropdown = document.getElementById('userDropdown');
        const dropdownMenu = document.getElementById('dropdownMenu');

        // Mobile menu toggle
        if (mobileToggle) {
            mobileToggle.addEventListener('click', function() {
                this.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
        }

        // User dropdown toggle
        if (userDropdown && dropdownMenu) {
            userDropdown.addEventListener('click', function(e) {
                e.stopPropagation();
                this.classList.toggle('active');
                dropdownMenu.classList.toggle('show');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function() {
                userDropdown.classList.remove('active');
                dropdownMenu.classList.remove('show');
            });

            // Prevent dropdown from closing when clicking inside
            dropdownMenu.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }

        // Close mobile menu when clicking on a link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileToggle.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                mobileToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    });
</script>