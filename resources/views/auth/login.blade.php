@extends('auth.main')

@section('title', config('app.name') . ' - ' . __('auth.log_title'))

@section('container')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh; padding-top: 80px;">
            <div class="col-lg-6 col-md-8">
                <div class="modern-card auth-card">
                    <div class="card-body p-5">
                        <!-- Logo/Title Section -->
                        <div class="text-center mb-4">
                            <h2 class="auth-title">
                                <i class="fas fa-sign-in-alt"></i> @lang('auth.log_title')
                            </h2>
                            <p class="text-muted">Masuk ke {{ config('app.name') }}</p>
                        </div>

                        @if (session('error'))
                            <div class="alert modern-alert-danger alert-dismissible fade show" role="alert">
                                <i class="fas fa-exclamation-triangle"></i> {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @elseif (session('warning'))
                            <div class="alert modern-alert-warning alert-dismissible fade show" role="alert">
                                <i class="fas fa-exclamation-circle"></i> {{ session('warning') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @elseif (session('success'))
                            <div class="alert modern-alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle"></i> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form action="" method="POST">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="email" class="modern-label">
                                    <i class="fas fa-envelope"></i> @lang('auth.email_label')
                                </label>
                                <input type="email" class="form-control modern-input @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="@lang('auth.email_placeholder')"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-times-circle"></i> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group mb-4">
                                <label for="password" class="modern-label">
                                    <i class="fas fa-lock"></i> @lang('auth.password_label')
                                </label>
                                <input type="password" class="form-control modern-input @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="@lang('auth.password_placeholder')">
                                @error('password')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-times-circle"></i> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                    <label class="custom-control-label modern-label" for="remember">
                                        @lang('auth.remember_me')
                                    </label>
                                </div>
                            </div>
                            
                            <button class="btn modern-btn btn-block mb-3" type="submit">
                                <i class="fas fa-sign-in-alt"></i> @lang('auth.log_title')
                            </button>
                        </form>
                        
                        <div class="text-center">
                            <div class="auth-divider mb-3">
                                <span>atau</span>
                            </div>
                            <a href="{{ url('register') }}" class="btn modern-btn-outline btn-block">
                                <i class="fas fa-user-plus"></i> @lang('auth.register_link')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
