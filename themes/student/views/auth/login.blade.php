<x-app-layout>

    <style>
        .login-container {
            width: 100%;
            max-width: 1200px;
            display: flex;
            background-color: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .login-left {
            flex: 1;
            background: linear-gradient(135deg, var(--primary) 0%, #1a236b 100%);
            color: var(--white);
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-right {
            flex: 1;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .logo-img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 800;
        }

        .welcome-text h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .welcome-text p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .features-list {
            list-style: none;
            margin-top: 30px;
        }

        .features-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .features-list i {
            color: var(--secondary);
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .login-form-container {
            max-width: 400px;
            margin: 0 auto;
            width: 100%;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h1 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .login-header p {
            color: var(--gray);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid var(--light-gray);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--secondary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 192, 245, 0.2);
        }

        .form-control.is-invalid {
            border-color: var(--danger);
        }

        .invalid-feedback {
            display: block;
            color: var(--danger);
            font-size: 0.875rem;
            margin-top: 5px;
        }

        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-check-input {
            margin-right: 10px;
        }

        .form-check-label {
            font-size: 0.95rem;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 700;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            font-size: 1rem;
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

        .btn-block {
            width: 100%;
        }

        .login-links {
            text-align: center;
            margin-top: 20px;
        }

        .login-links a {
            color: var(--secondary);
            text-decoration: none;
            transition: color 0.3s;
        }

        .login-links a:hover {
            color: var(--primary);
            text-decoration: underline;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid var(--light-gray);
        }

        .divider-text {
            padding: 0 15px;
            color: var(--gray);
            font-size: 0.9rem;
        }

        .social-login {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-btn {
            flex: 1;
            padding: 12px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid var(--light-gray);
            background: var(--white);
            color: var(--dark);
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .social-btn.google:hover {
            border-color: #db4437;
        }

        .social-btn.microsoft:hover {
            border-color: #0078d4;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .login-container {
                flex-direction: column;
            }

            .login-left,
            .login-right {
                padding: 40px 30px;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 10px;
            }

            .login-left,
            .login-right {
                padding: 30px 20px;
            }

            .welcome-text h1 {
                font-size: 2rem;
            }

            .login-header h1 {
                font-size: 1.8rem;
            }

            .social-login {
                flex-direction: column;
            }
        }

        .fullbody {
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0f4f8;
            padding: 20px;
        }
    </style>
    <div class="fullbody">
        <div class="login-container">
            <!-- Left Side - Branding & Info -->
            <div class="login-left">
                <div>
                <div class="logo-img w-full">
                    <img src="{{url('assets/dist/img/logo-light.webp')}}" alt="AdminLTELogo" class="mx-auto" style="width: 218px;">
                </div>
                <div class="logo">
                    <span class="logo-text"></span>
                </div>
</div>
                <div class="welcome-text">
                    <h1>Welcome Back, Student!</h1>
                    <p>Sign in to access your quizzes, track your progress, and continue your learning journey.</p>
                </div>

                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Access all your assigned quizzes</li>
                    <li><i class="fas fa-check-circle"></i> Track your learning progress</li>
                    <li><i class="fas fa-check-circle"></i> Get instant feedback on assessments</li>
                    <li><i class="fas fa-check-circle"></i> Review your performance history</li>
                </ul>
            </div>
            <!-- Circular Home Button -->

            <!-- Right Side - Login Form -->
            <div class="login-right">
                <div class="login-form-container">
                    <div class="login-header">
                        <h1>Student Login</h1>
                        <p>Enter your credentials to access your account</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Enter your email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Enter your password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="flex">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>

                        </div>

                        <div class="login-links">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>




                        <div class="login-links mt-3">
                            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Simple form validation enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Email validation
                if (!emailInput.value || !isValidEmail(emailInput.value)) {
                    emailInput.classList.add('is-invalid');
                    isValid = false;
                } else {
                    emailInput.classList.remove('is-invalid');
                }
                
                // Password validation
                if (!passwordInput.value) {
                    passwordInput.classList.add('is-invalid');
                    isValid = false;
                } else {
                    passwordInput.classList.remove('is-invalid');
                }
                
                if (!isValid) {
                    e.preventDefault();
                }
            });
            
            function isValidEmail(email) {
                const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }
        });
    </script>
</x-app-layout>