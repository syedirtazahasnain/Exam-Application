<x-app-layout>
    <style>
        :root {
            --primary: #2b3990;
            --primary-dark: #1f2a6d;
            --primary-light: #3c4da8;
            --secondary: #00c0f5;
            --secondary-dark: #00a8d6;
            --success: #10b981;
            --error: #ef4444;
            --warning: #f59e0b;
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
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f0f4f8;
            min-height: 100vh;
            line-height: 1.6;
        }

        .fullbody {
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

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
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
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

        .logo-img {
            margin-bottom: 30px;
            text-align: center;
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
            color: var(--gray-500);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--gray-700);
        }

        .input-wrapper {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 14px 16px 14px 48px;
            border: 2px solid var(--gray-200);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
            font-family: inherit;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(0, 192, 245, 0.2);
        }

        .form-input.error {
            border-color: var(--error);
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            color: var(--gray-400);
            pointer-events: none;
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray-400);
            cursor: pointer;
            padding: 4px;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: var(--gray-600);
        }

        .password-toggle svg {
            width: 20px;
            height: 20px;
        }

        .error-message {
            display: flex;
            align-items: center;
            margin-top: 8px;
            color: var(--error);
            font-size: 0.875rem;
            animation: fadeIn 0.3s ease-in-out;
        }

        .error-message svg {
            width: 16px;
            height: 16px;
            margin-right: 6px;
            flex-shrink: 0;
        }

        .form-options {
            margin-bottom: 20px;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 0.95rem;
            color: var(--gray-700);
        }

        .checkbox-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            height: 20px;
            width: 20px;
            background-color: var(--white);
            border: 2px solid var(--gray-300);
            border-radius: 4px;
            margin-right: 12px;
            position: relative;
            transition: all 0.3s ease;
        }

        .checkbox-container input:checked ~ .checkmark {
            background-color: var(--secondary);
            border-color: var(--secondary);
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            left: 6px;
            top: 2px;
            width: 4px;
            height: 8px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .checkbox-container input:checked ~ .checkmark:after {
            display: block;
        }

        .checkbox-label {
            font-weight: 500;
        }

        .login-button {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px 24px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            border: none;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            box-shadow: 0 4px 12px rgba(43, 57, 144, 0.3);
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(43, 57, 144, 0.4);
        }

        .login-button:active {
            transform: translateY(0);
        }

        .button-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-5px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            .fullbody {
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
        }
    </style>

    <div class="fullbody">
        <div class="login-container">
            <!-- Left Side - Branding & Info -->
            <div class="login-left">
                <div class="logo-img">
                    <img src="{{url('assets/dist/img/logo-light.webp')}}" alt="AdminLTELogo" style="width: 218px;">
                </div>
                
                <div class="welcome-text">
                    <h1>Welcome Back, Admin!</h1>
                    <p>Sign in to access the administration dashboard and manage your platform.</p>
                </div>

                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Manage users and permissions</li>
                    <li><i class="fas fa-check-circle"></i> Monitor system performance</li>
                    <li><i class="fas fa-check-circle"></i> Access analytics and reports</li>
                    <li><i class="fas fa-check-circle"></i> Configure platform settings</li>
                </ul>
            </div>

            <!-- Right Side - Login Form -->
            <div class="login-right">
                <div class="login-form-container">
                    <div class="login-header">
                        <h1>Admin Login</h1>
                        <p>Enter your credentials to access the dashboard</p>
                    </div>

                    <form method="POST" action="{{ route('admin.login') }}" class="login-form">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-wrapper">
                                <input id="email" type="email" class="form-input @error('email') error @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="admin@example.com">
                                <div class="input-icon">
                                    <svg viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                            </div>

                            @error('email')
                            <div class="error-message">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-wrapper">
                                <input id="password" type="password" class="form-input @error('password') error @enderror"
                                    name="password" required autocomplete="current-password"
                                    placeholder="Enter your password">
                                <div class="input-icon">
                                    <svg viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <button type="button" class="password-toggle" id="togglePassword">
                                    <svg class="eye-icon" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg class="eye-slash-icon" viewBox="0 0 20 20" fill="currentColor"
                                        style="display: none;">
                                        <path fill-rule="evenodd"
                                            d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                                    </svg>
                                </button>
                            </div>

                            @error('password')
                            <div class="error-message">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                        <div class="form-options">
                            <label class="checkbox-container">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                                <span class="checkbox-label">Remember Me</span>
                            </label>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="login-button">
                                <span class="button-icon">
                                    <svg viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                Login to Dashboard
                            </button>
                        </div>

                        <div class="login-links">
                            @if (Route::has('admin.password.request'))
                            <a href="{{ route('admin.password.request') }}">
                                Forgot Your Password?
                            </a>
                            @endif
                        </div>

                        <div class="login-links mt-3">
                            <p>Don't have an account? <a href="{{ route('admin.register') }}">Register here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const eyeIcon = togglePassword.querySelector('.eye-icon');
            const eyeSlashIcon = togglePassword.querySelector('.eye-slash-icon');
            
            // Password visibility toggle
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                // Toggle eye icons
                if (type === 'password') {
                    eyeIcon.style.display = 'block';
                    eyeSlashIcon.style.display = 'none';
                } else {
                    eyeIcon.style.display = 'none';
                    eyeSlashIcon.style.display = 'block';
                }
            });
            
            // Form input enhancements
            const emailInput = document.getElementById('email');
            
            emailInput.addEventListener('focus', function() {
                this.parentElement.style.boxShadow = '0 0 0 3px rgba(0, 192, 245, 0.2)';
            });
            
            emailInput.addEventListener('blur', function() {
                this.parentElement.style.boxShadow = 'none';
            });
            
            passwordInput.addEventListener('focus', function() {
                this.parentElement.style.boxShadow = '0 0 0 3px rgba(0, 192, 245, 0.2)';
            });
            
            passwordInput.addEventListener('blur', function() {
                this.parentElement.style.boxShadow = 'none';
            });

            // Form validation
            const form = document.querySelector('form');
            
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                // Email validation
                if (!emailInput.value || !isValidEmail(emailInput.value)) {
                    emailInput.classList.add('error');
                    isValid = false;
                } else {
                    emailInput.classList.remove('error');
                }
                
                // Password validation
                if (!passwordInput.value) {
                    passwordInput.classList.add('error');
                    isValid = false;
                } else {
                    passwordInput.classList.remove('error');
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