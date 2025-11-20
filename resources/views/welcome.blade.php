<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>247 SkillLab | Powered by Twenty Four Sven Consultancy</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #2b3990;
      --secondary: #00c0f5;
      --light: #f8f9fa;
      --dark: #212529;
      --gray: #6c757d;
      --light-gray: #e9ecef;
      --white: #ffffff;
      --success: #28a745;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Nunito', sans-serif;
      line-height: 1.6;
      color: var(--dark);
      background-color: var(--white);
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Header & Navigation */
    header {
      background-color: var(--white);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 0;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo-img {
      height: 50px;
    }

    .logo-text {
      font-size: 1.5rem;
      font-weight: 800;
      color: var(--primary);
      margin-left: 10px;
    }

    .nav-links {
      display: flex;
      list-style: none;
    }

    .nav-links li {
      margin-left: 30px;
    }

    .nav-links a {
      font-weight: 600;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: var(--secondary);
    }

    .btn {
      display: inline-block;
      padding: 10px 25px;
      border-radius: 30px;
      font-weight: 700;
      text-align: center;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .btn-primary {
      background-color: var(--primary);
      color: var(--white);
    }

    .btn-primary:hover {
      background-color: #1f2a6d;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(43, 57, 144, 0.3);
    }

    .btn-secondary {
      background-color: var(--secondary);
      color: var(--white);
    }

    .btn-secondary:hover {
      background-color: #00a8d6;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0, 192, 245, 0.3);
    }

    .btn-outline {
      background-color: transparent;
      border: 2px solid var(--primary);
      color: var(--primary);
    }

    .btn-outline:hover {
      background-color: var(--primary);
      color: var(--white);
    }

    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      font-size: 1.5rem;
      color: var(--primary);
      cursor: pointer;
    }

    /* Hero Section */
    .hero {
      padding: 150px 0 100px;
      background: linear-gradient(135deg, var(--primary) 0%, #1a236b 100%);
      color: var(--white);
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMTIwMCA4MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iIzAwYzBmNSIgZmlsbC1vcGFjaXR5PSIwLjEiPjxjaXJjbGUgY3g9IjQwMCIgY3k9IjQwMCIgcj0iMzAwIi8+PGNpcmNsZSBjeD0iODAwIiBjeT0iNDAwIiByPSIzMDAiLz48Y2lyY2xlIGN4PSI2MDAiIGN5PSIyMDAiIHI9IjMwMCIvPjxjaXJjbGUgY3g9IjIwMCIgY3k9IjIwMCIgcj0iMzAwIi8+PGNpcmNsZSBjeD0iODAwIiBjeT0iNjAwIiByPSIzMDAiLz48Y2lyY2xlIGN4PSI0MDAiIGN5PSI2MDAiIHI9IjMwMCIvPjwvZz48L3N2Zz4=');
      background-size: cover;
      opacity: 0.1;
    }

    .hero-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
      z-index: 1;
    }

    .hero-text {
      flex: 1;
      padding-right: 50px;
    }

    .hero-image {
      flex: 1;
      text-align: center;
    }

    .hero-image img {
      max-width: 100%;
      height: auto;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 20px;
      line-height: 1.2;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      opacity: 0.9;
    }

    .hero-buttons {
      display: flex;
      gap: 15px;
    }

    /* Features Section */
    .features {
      padding: 100px 0;
      background-color: var(--light);
    }

    .section-title {
      text-align: center;
      margin-bottom: 60px;
    }

    .section-title h2 {
      font-size: 2.5rem;
      font-weight: 800;
      color: var(--primary);
      margin-bottom: 15px;
    }

    .section-title p {
      font-size: 1.1rem;
      color: var(--gray);
      max-width: 600px;
      margin: 0 auto;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .feature-card {
      background-color: var(--white);
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s, box-shadow 0.3s;
      text-align: center;
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
      width: 80px;
      height: 80px;
      background-color: rgba(43, 57, 144, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      color: var(--primary);
      font-size: 2rem;
    }

    .feature-card h3 {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 15px;
      color: var(--primary);
    }

    .feature-card p {
      color: var(--gray);
    }

    /* How It Works */
    .how-it-works {
      padding: 100px 0;
    }

    .steps {
      display: flex;
      justify-content: space-between;
      position: relative;
      margin-top: 50px;
    }

    .steps::before {
      content: '';
      position: absolute;
      top: 40px;
      left: 10%;
      width: 80%;
      height: 3px;
      background-color: var(--light-gray);
      z-index: 0;
    }

    .step {
      text-align: center;
      position: relative;
      z-index: 1;
      flex: 1;
    }

    .step-number {
      width: 80px;
      height: 80px;
      background-color: var(--primary);
      color: var(--white);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      font-weight: 800;
      margin: 0 auto 20px;
      position: relative;
    }

    .step h3 {
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: var(--primary);
    }

    /* CTA Section */
    .cta {
      padding: 100px 0;
      background: linear-gradient(135deg, var(--primary) 0%, #1a236b 100%);
      color: var(--white);
      text-align: center;
    }

    .cta h2 {
      font-size: 2.5rem;
      font-weight: 800;
      margin-bottom: 20px;
    }

    .cta p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
      opacity: 0.9;
    }

    /* Footer */
    footer {
      background-color: var(--dark);
      color: var(--white);
      padding: 70px 0 20px;
    }

    .footer-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 40px;
      margin-bottom: 50px;
    }

    .footer-column h3 {
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 20px;
      color: var(--secondary);
    }

    .footer-column p {
      margin-bottom: 20px;
      opacity: 0.8;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 10px;
    }

    .footer-links a {
      opacity: 0.8;
      transition: opacity 0.3s;
    }

    .footer-links a:hover {
      opacity: 1;
      color: var(--secondary);
    }

    .social-links {
      display: flex;
      gap: 15px;
      margin-top: 20px;
    }

    .social-links a {
      width: 40px;
      height: 40px;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background-color 0.3s;
    }

    .social-links a:hover {
      background-color: var(--secondary);
    }

    .copyright {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      opacity: 0.7;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
      .hero-content {
        flex-direction: column;
        text-align: center;
      }

      .hero-text {
        padding-right: 0;
        margin-bottom: 50px;
      }

      .hero-buttons {
        justify-content: center;
      }

      .steps {
        flex-direction: column;
        gap: 40px;
      }

      .steps::before {
        display: none;
      }
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }

      .mobile-menu-btn {
        display: block;
      }

      .hero h1 {
        font-size: 2.5rem;
      }

      .section-title h2 {
        font-size: 2rem;
      }

      .hero-buttons {
        flex-direction: column;
        align-items: center;
      }

      .btn {
        width: 100%;
        max-width: 250px;
      }
    }

    @media (max-width: 576px) {
      .hero {
        padding: 120px 0 80px;
      }

      .hero h1 {
        font-size: 2rem;
      }

      .features,
      .how-it-works,
      .cta {
        padding: 70px 0;
      }
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header>
    <div class="container">
      <nav class="navbar">
        <div class="logo">
          <div class="logo-img">
            <img  src="{{url('assets/dist/img/favicon.webp')}}" alt="AdminLTELogo" style="width: 68px;">
          </div>
          <span class="logo-text">247 SkillLab</span>
        </div>

        <ul class="nav-links">
          <li><a href="#features" class="btn px-0 border-none" style="padding-left: 0px; padding-right:0px;">Features</a></li>
          <li><a href="#how-it-works" class="btn px-0 border-none" style="padding-left: 0px; padding-right:0px;">How It Works</a></li>
          <li><a href="#pricing" class="btn px-0 border-none" style="padding-left: 0px; padding-right:0px;">Pricing</a></li>
          <li><a href="#contact" class="btn px-0 border-none" style="padding-left: 0px; padding-right:0px;">Contact</a></li>
          {{-- <li><a href="{{ url('/admin/login') }}" class="btn btn-outline">Admin Login</a></li> --}}
        </ul>

        <button class="mobile-menu-btn">
          <i class="fas fa-bars"></i>
        </button>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-text">
          <h1>Transform Learning with Interactive Quizzes</h1>
          <p>Create, manage, and analyze assessments with our powerful quiz platform. Powered by Twenty Four Sven
            Consultancy for reliable, cutting-edge educational technology.</p>
          <div class="hero-buttons">
            <a href="{{ url('/login') }}" class="btn btn-secondary">Student Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Student Register</a>
          </div>
        </div>
        <div class="hero-image">
          <svg width="400" height="300" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="50" y="50" width="300" height="200" rx="10" fill="white" fill-opacity="0.1" />
            <rect x="80" y="80" width="240" height="30" rx="5" fill="#00c0f5" fill-opacity="0.7" />
            <rect x="80" y="130" width="200" height="15" rx="3" fill="white" fill-opacity="0.7" />
            <rect x="80" y="155" width="180" height="15" rx="3" fill="white" fill-opacity="0.7" />
            <rect x="80" y="180" width="220" height="15" rx="3" fill="white" fill-opacity="0.7" />
            <rect x="80" y="205" width="160" height="15" rx="3" fill="white" fill-opacity="0.7" />
            <circle cx="320" cy="220" r="20" fill="#00c0f5" />
            <path d="M310 220L315 225L330 210" stroke="white" stroke-width="3" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features" id="features">
    <div class="container">
      <div class="section-title">
        <h2>Powerful Features</h2>
        <p>Everything you need to create engaging assessments and track student progress effectively.</p>
      </div>

      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-edit"></i>
          </div>
          <h3>Easy Quiz Creation</h3>
          <p>Create custom quizzes with multiple question types including multiple choice, true/false, and open-ended
            questions.</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-chart-bar"></i>
          </div>
          <h3>Detailed Analytics</h3>
          <p>Gain insights with comprehensive analytics on student performance, question difficulty, and learning gaps.
          </p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-clock"></i>
          </div>
          <h3>Time-Limited Tests</h3>
          <p>Set time limits for quizzes to simulate exam conditions and help students improve their time management
            skills.</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3>Mobile Friendly</h3>
          <p>Access quizzes on any device with our responsive design that works perfectly on smartphones, tablets, and
            desktops.</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3>Secure & Reliable</h3>
          <p>Built with security in mind to protect student data and ensure assessment integrity with anti-cheating
            measures.</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-users"></i>
          </div>
          <h3>Class Management</h3>
          <p>Easily organize students into classes, assign quizzes, and track progress across multiple groups.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="how-it-works" id="how-it-works">
    <div class="container">
      <div class="section-title">
        <h2>How It Works</h2>
        <p>Get started with 247 SkillLab in just a few simple steps.</p>
      </div>

      <div class="steps">
        <div class="step">
          <div class="step-number">1</div>
          <h3>Sign Up</h3>
          <p>Create your account as a student or instructor</p>
        </div>

        <div class="step">
          <div class="step-number">2</div>
          <h3>Create or Join</h3>
          <p>Instructors create quizzes, students join classes</p>
        </div>

        <div class="step">
          <div class="step-number">3</div>
          <h3>Take Assessments</h3>
          <p>Students complete quizzes and get instant feedback</p>
        </div>

        <div class="step">
          <div class="step-number">4</div>
          <h3>Analyze Results</h3>
          <p>Review performance data and identify areas for improvement</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta">
    <div class="container">
      <h2>Ready to Transform Your Assessment Process?</h2>
      <p>Join thousands of educators and students already using 247 SkillLab to enhance learning outcomes.</p>
      <div class="mx-auto ">
        <a href="{{ route('register') }}" class="btn btn-secondary">Get Started Now</a>
        <a href="#contact" class="btn btn-primary">Contact Us</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contact">
    <div class="container">
      <div class="footer-content">
        <div class="footer-column">
          <h3>247 SkillLab</h3>
          <p>Powerful quiz application designed to transform learning experiences. Created and maintained by Twenty Four
            Sven Consultancy.</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <div class="footer-column">
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="#features">Features</a></li>
            <li><a href="#how-it-works">How It Works</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="{{ url('/admin/login') }}">Admin Login</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h3>Resources</h3>
          <ul class="footer-links">
            <li><a href="#">Documentation</a></li>
            <li><a href="#">Support Center</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Webinars</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h3>Contact Us</h3>
          <ul class="footer-links">
            <li><i class="fas fa-envelope"></i> info@quizmasterpro.com</li>
            <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
            <li><i class="fas fa-map-marker-alt"></i> 123 Education St, Learn City</li>
          </ul>
        </div>
      </div>

      <div class="copyright">
        <p>&copy; 2023 247 SkillLab. Powered by Twenty Four Sven Consultancy. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
      const navLinks = document.querySelector('.nav-links');
      navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if(targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if(targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: 'smooth'
          });
          
          // Close mobile menu if open
          if(window.innerWidth <= 768) {
            document.querySelector('.nav-links').style.display = 'none';
          }
        }
      });
    });
  </script>
</body>

</html>