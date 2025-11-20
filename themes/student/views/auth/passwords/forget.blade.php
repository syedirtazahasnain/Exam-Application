<x-app-layout>
    <div class="fullbody">
        <div class="password-reset-container">
            <div class="password-reset-card">
                <div class="card-header">
                    <div class="logo">
          <div class="logo-img">
            <img  src="{{url('assets/dist/img/favicon.webp')}}" alt="AdminLTELogo" style="width: 68px;">
          </div>
          <span class="logo-text">247 SkillLab</span>
        </div>
                    <h1>Reset Your Password</h1>
                    <p>Enter your email address and we'll send you a password reset link</p>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        <div class="alert-icon">
                            <svg viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="alert-message">
                            {{ session('status') }}
                        </div>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="password-reset-form">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-wrapper">
                                <input id="email" type="email" class="form-input @error('email') error @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Enter your email address">
                                <div class="input-icon">
                                    <svg viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
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

                        <div class="form-actions">
                            <button type="submit" class="submit-button">
                                <span class="button-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </span>
                                Send Password Reset Link
                            </button>
                        </div>
                    </form>

                    <div class="form-footer">
                        <p class="footer-text">
                            Remember your password?
                            <a href="{{ route('login') }}" class="footer-link">Back to login</a>
                        </p>
                    </div>
                </div>

                <div class="card-footer">
                    <p class="support-text">
                        Need help? Contact our <a href="#" class="support-link">support team</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .fullbody {
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f0f4f8;
            padding: 20px;
        }

        .password-reset-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .password-reset-card {
            width: 100%;
            max-width: 440px;
            background: var(--white);
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-header {
            background: var(--primary);
            color: var(--white);
            padding: 32px;
            text-align: center;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
        }

        .logo-icon svg {
            width: 20px;
            height: 20px;
            color: var(--white);
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 800;
        }

        .card-header h1 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .card-header p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
        }

        .card-body {
            padding: 32px;
        }

        .alert {
            display: flex;
            align-items: center;
            padding: 16px;
            background: #ecfdf5;
            border: 1px solid #d1fae5;
            border-radius: 8px;
            margin-bottom: 24px;
            animation: fadeIn 0.5s ease-in-out;
        }

        .alert-icon {
            flex-shrink: 0;
            width: 20px;
            height: 20px;
            color: var(--success);
            margin-right: 12px;
        }

        .alert-message {
            color: #065f46;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .password-reset-form {
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
            padding: 12px 16px 12px 44px;
            border: 2px solid var(--gray-200);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
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
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            color: var(--gray-400);
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
            margin-top: 32px;
        }

        .submit-button {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 14px 24px;
            background: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .submit-button:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(43, 57, 144, 0.3);
        }

        .button-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
        }

        .form-footer {
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid var(--gray-200);
            text-align: center;
        }

        .footer-text {
            color: var(--gray-600);
            font-size: 0.875rem;
        }

        .footer-link {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 600;
            margin-left: 4px;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: var(--secondary-dark);
            text-decoration: underline;
        }

        .card-footer {
            background: var(--gray-50);
            padding: 20px 32px;
            border-top: 1px solid var(--gray-200);
            text-align: center;
        }

        .support-text {
            color: var(--gray-600);
            font-size: 0.75rem;
        }

        .support-link {
            color: var(--secondary);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .support-link:hover {
            color: var(--secondary-dark);
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .password-reset-card {
                max-width: 100%;
                margin: 0 16px;
            }

            .card-header,
            .card-body {
                padding: 24px;
            }

            .logo-text {
                font-size: 1.25rem;
            }

            .card-header h1 {
                font-size: 1.5rem;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            
            // Add focus effect
            emailInput.addEventListener('focus', function() {
                this.parentElement.style.boxShadow = '0 0 0 3px rgba(0, 192, 245, 0.1)';
            });
            
            emailInput.addEventListener('blur', function() {
                this.parentElement.style.boxShadow = 'none';
            });
            
            // Add input validation styling
            emailInput.addEventListener('input', function() {
                if (this.value && this.checkValidity()) {
                    this.classList.remove('error');
                    this.style.borderColor = '#10b981';
                } else {
                    this.style.borderColor = '';
                }
            });
        });
    </script>
</x-app-layout>