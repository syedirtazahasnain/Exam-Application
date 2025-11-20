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