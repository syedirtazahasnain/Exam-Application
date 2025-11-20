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

        .fullbody {
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0f4f8;
            padding: 20px;
        }

        .register-container {
            width: 100%;
            max-width: 1200px;
            display: flex;
            background-color: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .register-left {
            flex: 1;
            background: linear-gradient(135deg, var(--primary) 0%, #1a236b 100%);
            color: var(--white);
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .register-right {
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

        .register-form-container {
            max-width: 400px;
            margin: 0 auto;
            width: 100%;
        }

        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .register-header h1 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .register-header p {
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

        .form-control {
            width: 100%;
            padding: 12px 15px 12px 48px;
            border: 2px solid var(--gray-200);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
            font-family: inherit;
        }

        .form-control:focus {
            border-color: var(--secondary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 192, 245, 0.2);
        }

        .form-control.is-invalid {
            border-color: var(--error);
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

        .invalid-feedback {
            display: block;
            color: var(--error);
            font-size: 0.875rem;
            margin-top: 5px;
        }

        .password-strength {
            margin-top: 5px;
            height: 5px;
            border-radius: 5px;
            background-color: var(--gray-200);
            overflow: hidden;
        }

        .password-strength-bar {
            height: 100%;
            width: 0;
            transition: width 0.3s, background-color 0.3s;
        }

        .password-requirements {
            margin-top: 10px;
            font-size: 0.8rem;
            color: var(--gray-500);
        }

        .requirement {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .requirement i {
            margin-right: 5px;
            font-size: 0.7rem;
        }

        .requirement.met {
            color: var(--success);
        }

        .requirement.unmet {
            color: var(--gray-500);
        }

        .password-match {
            margin-top: 8px;
            font-size: 0.875rem;
            min-height: 20px;
        }

        .match-success {
            color: var(--success);
            display: flex;
            align-items: center;
        }

        .match-error {
            color: var(--error);
            display: flex;
            align-items: center;
        }

        .match-success svg,
        .match-error svg {
            width: 16px;
            height: 16px;
            margin-right: 6px;
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
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
        }

        .btn-primary:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(43, 57, 144, 0.4);
        }

        .btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .btn-block {
            width: 100%;
        }

        .register-links {
            text-align: center;
            margin-top: 20px;
        }

        .register-links a {
            color: var(--secondary);
            text-decoration: none;
            transition: color 0.3s;
        }

        .register-links a:hover {
            color: var(--primary);
            text-decoration: underline;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .register-container {
                flex-direction: column;
            }

            .register-left,
            .register-right {
                padding: 40px 30px;
            }
        }

        @media (max-width: 576px) {
            .fullbody {
                padding: 10px;
            }

            .register-left,
            .register-right {
                padding: 30px 20px;
            }

            .welcome-text h1 {
                font-size: 2rem;
            }

            .register-header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
    
    <div class="fullbody">
        <div class="register-container">
            <!-- Left Side - Branding & Info -->
            <div class="register-left">
                 <div class="logo-img" style="margin-bottom: 30px; text-align: center">
                    <img src="{{url('assets/dist/img/logo-light.webp')}}" alt="AdminLTELogo" style="width: 218px;">
                </div>
                <div class="welcome-text">
                    <h1>Admin Portal Access</h1>
                    <p>Create your administrator account to manage the system, users, and content.</p>
                </div>

                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Full system administration</li>
                    <li><i class="fas fa-check-circle"></i> User and role management</li>
                    <li><i class="fas fa-check-circle"></i> Content and quiz management</li>
                    <li><i class="fas fa-check-circle"></i> Analytics and reporting</li>
                    <li><i class="fas fa-check-circle"></i> System configuration</li>
                </ul>
            </div>

            <!-- Right Side - Registration Form -->
            <div class="register-right">
                <div class="register-form-container">
                    <div class="register-header">
                        <h1>Admin Registration</h1>
                        <p>Set up your administrator credentials</p>
                    </div>

                    <form method="POST" action="{{ route('admin.register') }}" class="register-form">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="form-label">Full Name</label>
                            <div class="input-wrapper">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Enter your full name">
                                <div class="input-icon">
                                    <svg viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-wrapper">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="admin@example.com">
                                <div class="input-icon">
                                    <svg viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                            </div>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-wrapper">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password"
                                    placeholder="Create a strong password">
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
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="form-label">Confirm Password</label>
                            <div class="input-wrapper">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    required autocomplete="new-password" placeholder="Confirm your password">
                                <div class="input-icon">
                                    <svg viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <button type="button" class="password-toggle" id="toggleConfirmPassword">
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
                            <div class="password-match" id="password-match"></div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" id="register-btn">
                            Create Admin Account
                        </button>

                        <div class="register-links">
                            <p>Do you have an account? <a href="{{ route('admin.login') }}">Login here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   <script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password-confirm');
        const togglePassword = document.getElementById('togglePassword');
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const registerBtn = document.getElementById('register-btn');

        // Password visibility toggle
        function setupPasswordToggle(toggle, input) {
            const eyeIcon = toggle.querySelector('.eye-icon');
            const eyeSlashIcon = toggle.querySelector('.eye-slash-icon');
            
            toggle.addEventListener('click', function() {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                if (type === 'password') {
                    eyeIcon.style.display = 'block';
                    eyeSlashIcon.style.display = 'none';
                } else {
                    eyeIcon.style.display = 'none';
                    eyeSlashIcon.style.display = 'block';
                }
            });
        }

        setupPasswordToggle(togglePassword, passwordInput);
        setupPasswordToggle(toggleConfirmPassword, confirmPasswordInput);

        // Password confirmation check
        confirmPasswordInput.addEventListener('input', function() {
            checkPasswordMatch();
            checkFormValidity();
        });

        function checkPasswordMatch() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            const matchElement = document.getElementById('password-match');
            
            if (confirmPassword === '') {
                matchElement.innerHTML = '';
                confirmPasswordInput.style.borderColor = '';
                return;
            }

            if (password === confirmPassword) {
                matchElement.innerHTML = `
                    <div class="match-success">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Passwords match
                    </div>
                `;
                confirmPasswordInput.style.borderColor = '#10b981';
            } else {
                matchElement.innerHTML = `
                    <div class="match-error">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        Passwords do not match
                    </div>
                `;
                confirmPasswordInput.style.borderColor = '#ef4444';
            }
        }

        function checkFormValidity() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            
            // Check if all fields are filled and passwords match
            const passwordsMatch = password === confirmPassword && password !== '';
            
            if (name && email && password && confirmPassword && passwordsMatch) {
                registerBtn.disabled = false;
            } else {
                registerBtn.disabled = true;
            }
        }

        // Form validation
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Please make sure your passwords match.');
                return;
            }
        });

        // Check form validity on all input changes
        document.getElementById('name').addEventListener('input', checkFormValidity);
        document.getElementById('email').addEventListener('input', checkFormValidity);
        passwordInput.addEventListener('input', checkFormValidity);
        confirmPasswordInput.addEventListener('input', checkFormValidity);

        // Initial form validation
        checkFormValidity();
    });
</script>
</x-app-layout>