@extends('layouts.app')

@section('title', __('erp.register_title'))

@section('content')
<div class="auth-container dark:bg-gray-900">
    <div class="auth-card">
        <div class="auth-header">
            <div class="auth-icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <h1 class="auth-title">{{ __('erp.register_title') }}</h1>
            <p class="auth-subtitle">{{ __('erp.register_subtitle') }}</p>
        </div>

        <form class="auth-form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <div class="input-wrapper">
                    <i class="fas fa-user input-icon"></i>
                    <input 
                        type="text" 
                        name="name" 
                        id="name"
                        class="form-input"
                        placeholder="{{ __('erp.full_name') }}"
                        value="{{ old('name') }}"
                        required
                        autocomplete="name"
                        autofocus
                    >
                    <label for="name" class="form-label">{{ __('erp.full_name') }}</label>
                </div>
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="input-wrapper">
                    <i class="fas fa-envelope input-icon"></i>
                    <input 
                        type="email" 
                        name="email" 
                        id="email"
                        class="form-input"
                        placeholder="{{ __('erp.email') }}"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                    >
                    <label for="email" class="form-label">{{ __('erp.email') }}</label>
                </div>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="input-wrapper">
                    <i class="fas fa-phone input-icon"></i>
                    <input 
                        type="tel" 
                        name="phone" 
                        id="phone"
                        class="form-input"
                        placeholder="{{ __('erp.phone') }}"
                        value="{{ old('phone') }}"
                        required
                        autocomplete="tel"
                    >
                    <label for="phone" class="form-label">{{ __('erp.phone') }}</label>
                </div>
                @error('phone')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="input-wrapper">
                    <i class="fas fa-building input-icon"></i>
                    <input 
                        type="text" 
                        name="company" 
                        id="company"
                        class="form-input"
                        placeholder="{{ __('erp.company') }}"
                        value="{{ old('company') }}"
                        required
                    >
                    <label for="company" class="form-label">{{ __('erp.company') }}</label>
                </div>
                @error('company')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="input-wrapper">
                    <i class="fas fa-lock input-icon"></i>
                    <input 
                        type="password" 
                        name="password" 
                        id="password"
                        class="form-input"
                        placeholder="{{ __('erp.password') }}"
                        required
                        autocomplete="new-password"
                    >
                    <label for="password" class="form-label">{{ __('erp.password') }}</label>
                    <button type="button" class="toggle-password">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="input-wrapper">
                    <i class="fas fa-lock input-icon"></i>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        id="password_confirmation"
                        class="form-input"
                        placeholder="{{ __('erp.confirm_password') }}"
                        required
                        autocomplete="new-password"
                    >
                    <label for="password_confirmation" class="form-label">{{ __('erp.confirm_password') }}</label>
                    <button type="button" class="toggle-password">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label class="checkbox-wrapper terms-checkbox">
                    <input type="checkbox" name="terms" id="terms" required>
                    <span class="checkmark"></span>
                    {!! __('erp.agree_terms', ['terms' => '#', 'privacy' => '#']) !!}
                </label>
                @error('terms')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="auth-submit-btn">
                <i class="fas fa-user-plus mr-2"></i>
                {{ __('erp.create_account') }}
            </button>

            <div class="auth-divider">
                <span>{{ __('erp.or_continue_with') }}</span>
            </div>

            <div class="social-login">
                <button type="button" class="social-btn google-btn">
                    <i class="fab fa-google"></i>
                    Google
                </button>
                <button type="button" class="social-btn microsoft-btn">
                    <i class="fab fa-microsoft"></i>
                    Microsoft
                </button>
            </div>

            <div class="auth-footer">
                <p>{{ __('erp.have_account') }}
                    <a href="{{ route('login') }}" class="auth-link">
                        {{ __('erp.login_here') }}
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection