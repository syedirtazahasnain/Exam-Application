<x-app-layout>
    <div class="admin-register-container">
        <div class="admin-register-card">
            <!-- Header Section -->
           <div class="card-header">
                <div class="logo">
                    <div class="logo-img">
                        <img src="{{url('assets/dist/img/logo-light.webp')}}" alt="AdminLTELogo" style="width: 218px;">
                    </div>
                    <div class="logo-text">
                        <span class="main-text"></span>
                        <span class="sub-text"></span>
                    </div>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="card-body">
                <div class="register-header">
                    <h1>Create Admin Account</h1>
                    <p>Set up your administrator credentials</p>
                </div>

                <form method="POST" action="{{ route('admin.register') }}" class="register-form">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <div class="input-wrapper">
                            <input id="name" type="text" class="form-input @error('name') error @enderror" name="name"
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
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-wrapper">
                            <input id="email" type="email" class="form-input @error('email') error @enderror"
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

                        <div class="password-strength">
                            <div class="strength-bar">
                                <div class="strength-fill" id="password-strength-fill"></div>
                            </div>
                            <div class="strength-labels">
                                <span class="strength-label" id="strength-text">Password strength</span>
                            </div>
                        </div>

                        <div class="password-requirements">
                            <div class="requirement" id="length-req">
                                <svg class="requirement-icon" viewBox="0 0 20 20" fill="currentColor">
                                    <circle cx="10" cy="10" r="8" />
                                </svg>
                                At least 8 characters
                            </div>
                            <div class="requirement" id="uppercase-req">
                                <svg class="requirement-icon" viewBox="0 0 20 20" fill="currentColor">
                                    <circle cx="10" cy="10" r="8" />
                                </svg>
                                One uppercase letter
                            </div>
                            <div class="requirement" id="lowercase-req">
                                <svg class="requirement-icon" viewBox="0 0 20 20" fill="currentColor">
                                    <circle cx="10" cy="10" r="8" />
                                </svg>
                                One lowercase letter
                            </div>
                            <div class="requirement" id="number-req">
                                <svg class="requirement-icon" viewBox="0 0 20 20" fill="currentColor">
                                    <circle cx="10" cy="10" r="8" />
                                </svg>
                                One number
                            </div>
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

                    <div class="form-group">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <div class="input-wrapper">
                            <input id="password-confirm" type="password" class="form-input" name="password_confirmation"
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
                        <div class="password-match" id="password-match">
                            <!-- Password match status will appear here -->
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="register-button" id="register-button">
                            <span class="button-icon">
                                <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            Create Admin Account
                        </button>
                    </div>
                </form>

                <div class="admin-notice">
                    <div class="notice-icon">
                        <svg viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p>Admin accounts have full access to system management and user data.</p>
                </div>
            </div>
        </div>
    </div>

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
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            min-height: 100vh;
            line-height: 1.6;
        }

        .admin-register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .admin-register-card {
            width: 100%;
            max-width: 480px;
            background: var(--white);
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            border: 1px solid var(--gray-200);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            padding: 32px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .logo-icon {
            width: 48px;
            height: 48px;
            background: var(--secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 192, 245, 0.3);
        }

        .logo-icon svg {
            width: 24px;
            height: 24px;
            color: var(--white);
        }

        .logo-text {
            text-align: left;
        }

        .main-text {
            display: block;
            font-size: 1.25rem;
            font-weight: 800;
            line-height: 1.2;
        }

        .sub-text {
            display: block;
            font-size: 0.875rem;
            opacity: 0.9;
            font-weight: 600;
            color: var(--secondary);
            margin-top: 2px;
        }

        .card-body {
            padding: 40px 32px;
        }

        .register-header {
            text-align: center;
            margin-bottom: 32px;
        }

        .register-header h1 {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 8px;
        }

        .register-header p {
            color: var(--gray-600);
            font-size: 0.95rem;
        }

        .register-form {
            space-y: 24px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--gray-700);
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 14px 16px 14px 48px;
            border: 2px solid var(--gray-200);
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
            font-family: inherit;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(0, 192, 245, 0.1);
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

        .password-strength {
            margin-top: 12px;
        }

        .strength-bar {
            height: 6px;
            background: var(--gray-200);
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 6px;
        }

        .strength-fill {
            height: 100%;
            width: 0%;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .strength-labels {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .strength-label {
            font-size: 0.75rem;
            color: var(--gray-500);
            font-weight: 500;
        }

        .password-requirements {
            margin-top: 12px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .requirement {
            display: flex;
            align-items: center;
            font-size: 0.75rem;
            color: var(--gray-500);
            transition: color 0.3s ease;
        }

        .requirement.met {
            color: var(--success);
        }

        .requirement-icon {
            width: 12px;
            height: 12px;
            margin-right: 6px;
            flex-shrink: 0;
        }

        .requirement.met .requirement-icon {
            fill: var(--success);
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

        .form-actions {
            margin: 32px 0 24px;
        }

        .register-button {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px 24px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            box-shadow: 0 4px 12px rgba(43, 57, 144, 0.3);
        }

        .register-button:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(43, 57, 144, 0.4);
        }

        .register-button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .button-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
        }

        .admin-notice {
            display: flex;
            align-items: flex-start;
            padding: 16px;
            background: var(--gray-50);
            border-radius: 8px;
            border: 1px solid var(--gray-200);
        }

        .notice-icon {
            width: 20px;
            height: 20px;
            color: var(--warning);
            margin-right: 12px;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .admin-notice p {
            font-size: 0.875rem;
            color: var(--gray-600);
            line-height: 1.5;
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

        /* Responsive Design */
        @media (max-width: 480px) {
            .admin-register-card {
                max-width: 100%;
                margin: 0 16px;
            }

            .card-header {
                padding: 24px;
            }

            .card-body {
                padding: 32px 24px;
            }

            .logo {
                flex-direction: column;
                text-align: center;
                gap: 12px;
            }

            .logo-text {
                text-align: center;
            }

            .password-requirements {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('password-confirm');
            const togglePassword = document.getElementById('togglePassword');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const strengthFill = document.getElementById('password-strength-fill');
            const strengthText = document.getElementById('strength-text');
            const registerButton = document.getElementById('register-button');
            
            const requirements = {
                length: document.getElementById('length-req'),
                uppercase: document.getElementById('uppercase-req'),
                lowercase: document.getElementById('lowercase-req'),
                number: document.getElementById('number-req')
            };

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

            // Password strength checker
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                let metRequirements = 0;
                const totalRequirements = 4;

                // Check requirements
                if (password.length >= 8) {
                    strength += 25;
                    metRequirements++;
                    requirements.length.classList.add('met');
                } else {
                    requirements.length.classList.remove('met');
                }

                if (/[A-Z]/.test(password)) {
                    strength += 25;
                    metRequirements++;
                    requirements.uppercase.classList.add('met');
                } else {
                    requirements.uppercase.classList.remove('met');
                }

                if (/[a-z]/.test(password)) {
                    strength += 25;
                    metRequirements++;
                    requirements.lowercase.classList.add('met');
                } else {
                    requirements.lowercase.classList.remove('met');
                }

                if (/[0-9]/.test(password)) {
                    strength += 25;
                    metRequirements++;
                    requirements.number.classList.add('met');
                } else {
                    requirements.number.classList.remove('met');
                }

                // Update strength bar
                strengthFill.style.width = strength + '%';
                
                if (strength < 50) {
                    strengthFill.style.backgroundColor = '#ef4444';
                    strengthText.textContent = 'Weak password';
                    strengthText.style.color = '#ef4444';
                } else if (strength < 75) {
                    strengthFill.style.backgroundColor = '#f59e0b';
                    strengthText.textContent = 'Medium password';
                    strengthText.style.color = '#f59e0b';
                } else {
                    strengthFill.style.backgroundColor = '#10b981';
                    strengthText.textContent = 'Strong password';
                    strengthText.style.color = '#10b981';
                }

                checkFormValidity();
            });

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
                
                // Check if all requirements are met
                const metRequirements = document.querySelectorAll('.requirement.met').length;
                const passwordsMatch = password === confirmPassword && password !== '';
                
                if (name && email && password && confirmPassword && metRequirements === 4 && passwordsMatch) {
                    registerButton.disabled = false;
                } else {
                    registerButton.disabled = true;
                }
            }

            // Form input enhancements
            const inputs = document.querySelectorAll('.form-input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.boxShadow = '0 0 0 3px rgba(0, 192, 245, 0.1)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.boxShadow = 'none';
                });
            });

            // Initial form validation
            checkFormValidity();
        });
    </script>
</x-app-layout>