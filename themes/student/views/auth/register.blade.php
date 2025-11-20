<x-app-layout>
    <style>
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

        .password-strength {
            margin-top: 5px;
            height: 5px;
            border-radius: 5px;
            background-color: var(--light-gray);
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
            color: var(--gray);
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
            color: var(--gray);
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

        .social-register {
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
            .register-container {
                flex-direction: column;
            }

            .register-left,
            .register-right {
                padding: 40px 30px;
            }
        }

        @media (max-width: 576px) {
            body {
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

            .social-register {
                flex-direction: column;
            }
        }
    </style>
    <div class="fullbody">
        <div class="register-container">
            <!-- Left Side - Branding & Info -->
            <div class="register-left">
               <div>
                    <div class="logo-img w-full">
                        <img src="{{url('assets/dist/img/logo-light.webp')}}" alt="AdminLTELogo" class="mx-auto"
                            style="width: 218px;">
                    </div>
                    <div class="logo">
                        <span class="logo-text"></span>
                    </div>
                </div>
                <div class="welcome-text">
                    <h1>Join Our Learning Community!</h1>
                    <p>Create your student account to access quizzes, track your progress, and enhance your learning
                        experience.</p>
                </div>

                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Access to all assigned quizzes</li>
                    <li><i class="fas fa-check-circle"></i> Track your learning progress</li>
                    <li><i class="fas fa-check-circle"></i> Get instant feedback on assessments</li>
                    <li><i class="fas fa-check-circle"></i> Review your performance history</li>
                    <li><i class="fas fa-check-circle"></i> Compete with classmates on leaderboards</li>
                </ul>
            </div>


            <!-- Right Side - Registration Form -->
            <div class="register-right">
                <div class="register-form-container">
                    <div class="register-header">
                        <h1>Student Registration</h1>
                        <p>Create your account to get started</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="form-label">{{ __('Full Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="Enter your full name">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Enter your email address">

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
                                autocomplete="new-password" placeholder="Create a password">

                            <div class="password-strength">
                                <div class="password-strength-bar" id="password-strength-bar"></div>
                            </div>

                            <div class="password-requirements">
                                <div class="requirement unmet" id="length-req">
                                    <i class="fas fa-circle"></i> At least 8 characters
                                </div>
                                <div class="requirement unmet" id="uppercase-req">
                                    <i class="fas fa-circle"></i> One uppercase letter
                                </div>
                                <div class="requirement unmet" id="lowercase-req">
                                    <i class="fas fa-circle"></i> One lowercase letter
                                </div>
                                <div class="requirement unmet" id="number-req">
                                    <i class="fas fa-circle"></i> One number
                                </div>
                            </div>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirm your password">
                            <div id="password-match" class="password-requirements"></div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" id="register-btn">
                            {{ __('Create Account') }}
                        </button>

                        <div class="register-links">
                            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const passwordConfirmInput = document.getElementById('password-confirm');
            const passwordStrengthBar = document.getElementById('password-strength-bar');
            const registerBtn = document.getElementById('register-btn');
            
            // Password strength indicators
            const lengthReq = document.getElementById('length-req');
            const uppercaseReq = document.getElementById('uppercase-req');
            const lowercaseReq = document.getElementById('lowercase-req');
            const numberReq = document.getElementById('number-req');
            const passwordMatch = document.getElementById('password-match');
            
            // Check password strength
            passwordInput.addEventListener('input', function() {
                const password = passwordInput.value;
                let strength = 0;
                
                // Check length
                if (password.length >= 8) {
                    strength += 25;
                    lengthReq.classList.remove('unmet');
                    lengthReq.classList.add('met');
                    lengthReq.innerHTML = '<i class="fas fa-check-circle"></i> At least 8 characters';
                } else {
                    lengthReq.classList.remove('met');
                    lengthReq.classList.add('unmet');
                    lengthReq.innerHTML = '<i class="fas fa-circle"></i> At least 8 characters';
                }
                
                // Check uppercase
                if (/[A-Z]/.test(password)) {
                    strength += 25;
                    uppercaseReq.classList.remove('unmet');
                    uppercaseReq.classList.add('met');
                    uppercaseReq.innerHTML = '<i class="fas fa-check-circle"></i> One uppercase letter';
                } else {
                    uppercaseReq.classList.remove('met');
                    uppercaseReq.classList.add('unmet');
                    uppercaseReq.innerHTML = '<i class="fas fa-circle"></i> One uppercase letter';
                }
                
                // Check lowercase
                if (/[a-z]/.test(password)) {
                    strength += 25;
                    lowercaseReq.classList.remove('unmet');
                    lowercaseReq.classList.add('met');
                    lowercaseReq.innerHTML = '<i class="fas fa-check-circle"></i> One lowercase letter';
                } else {
                    lowercaseReq.classList.remove('met');
                    lowercaseReq.classList.add('unmet');
                    lowercaseReq.innerHTML = '<i class="fas fa-circle"></i> One lowercase letter';
                }
                
                // Check number
                if (/[0-9]/.test(password)) {
                    strength += 25;
                    numberReq.classList.remove('unmet');
                    numberReq.classList.add('met');
                    numberReq.innerHTML = '<i class="fas fa-check-circle"></i> One number';
                } else {
                    numberReq.classList.remove('met');
                    numberReq.classList.add('unmet');
                    numberReq.innerHTML = '<i class="fas fa-circle"></i> One number';
                }
                
                // Update strength bar
                passwordStrengthBar.style.width = strength + '%';
                
                if (strength < 50) {
                    passwordStrengthBar.style.backgroundColor = '#dc3545'; // Red
                } else if (strength < 75) {
                    passwordStrengthBar.style.backgroundColor = '#ffc107'; // Yellow
                } else {
                    passwordStrengthBar.style.backgroundColor = '#28a745'; // Green
                }
                
                checkPasswordMatch();
            });
            
            // Check password confirmation
            passwordConfirmInput.addEventListener('input', checkPasswordMatch);
            
            function checkPasswordMatch() {
                const password = passwordInput.value;
                const confirmPassword = passwordConfirmInput.value;
                
                if (confirmPassword === '') {
                    passwordMatch.innerHTML = '';
                    return;
                }
                
                if (password === confirmPassword) {
                    passwordMatch.innerHTML = '<div class="requirement met"><i class="fas fa-check-circle"></i> Passwords match</div>';
                    passwordConfirmInput.style.borderColor = '#28a745';
                } else {
                    passwordMatch.innerHTML = '<div class="requirement unmet"><i class="fas fa-times-circle"></i> Passwords do not match</div>';
                    passwordConfirmInput.style.borderColor = '#dc3545';
                }
            }
            
            // Form validation
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                const password = passwordInput.value;
                const confirmPassword = passwordConfirmInput.value;
                
                if (password !== confirmPassword) {
                    e.preventDefault();
                    alert('Please make sure your passwords match.');
                    return;
                }
                
                // Check if all requirements are met
                const requirements = document.querySelectorAll('.requirement.met');
                if (requirements.length < 4) {
                    e.preventDefault();
                    alert('Please make sure your password meets all requirements.');
                    return;
                }
            });
        });
    </script>
</x-app-layout>