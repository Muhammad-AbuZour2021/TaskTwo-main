@extends('layouts.app_TaskTwo')

@section('content')

<main>
  <section class="login-section">
    <div class="login-card">
      <a href="{{ url('/') }}" class="logo login-logo">لازورد</a>

      <h1>تسجيل الدخول</h1>
      <p class="login-sub">أدخل بياناتك للوصول إلى حسابك</p>

      <!-- عرض حالة الجلسة -->
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

      <!-- الفورم -->
      <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="form-group">
          <label for="email">البريد الإلكتروني</label>
          <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="example@gmail.com"
            required
            autofocus
          />
          @error('email')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
          <label for="password">كلمة المرور</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="••••••••"
            required
          />
          @error('password')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <!-- Remember Me -->
        <div class="login-remember">
          <label class="checkbox-label">
            <input type="checkbox" name="remember">
            <span>تذكرني</span>
          </label>

          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="forgot-link">
              نسيت كلمة المرور؟
            </a>
          @endif
        </div>

        <!-- زر الدخول -->
        <button type="submit" class="btn-submit login-submit">
          تسجيل الدخول
        </button>
      </form>

      {{-- <p class="login-register">
        ليس لديك حساب؟
        <a href="{{ route('register') }}" class="link-green">
          سجّل الآن مجاناً
        </a>
      </p> --}}
    </div>
  </section>
</main>

@endsection
