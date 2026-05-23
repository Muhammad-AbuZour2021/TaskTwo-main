@extends('layouts.app_TaskTwo')

@section('content')

<main>
  <section class="login-section">
    <div class="login-card">
      <a href="{{ url('/') }}" class="logo login-logo">لازورد</a>

      <h1>إنشاء حساب</h1>
      <p class="login-sub">أنشئ حسابك الجديد بسهولة</p>

      <!-- عرض الأخطاء العامة -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- الفورم -->
      <form class="login-form" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="form-group">
          <label for="name">الاسم</label>
          <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            placeholder="أدخل اسمك"
            required
            autofocus
          />
          @error('name')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

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

        <!-- Confirm Password -->
        <div class="form-group">
          <label for="password_confirmation">تأكيد كلمة المرور</label>
          <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="••••••••"
            required
          />
          @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <!-- زر التسجيل -->
        <button type="submit" class="btn-submit login-submit">
          إنشاء حساب
        </button>
      </form>

      <p class="login-register">
        لديك حساب بالفعل؟
        <a href="{{ route('login') }}" class="link-green">
          تسجيل الدخول
        </a>
      </p>
    </div>
  </section>
</main>

@endsection
