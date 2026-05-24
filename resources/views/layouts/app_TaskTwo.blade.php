<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>لازورد — مختبر الأسنان الرقمي</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&family=Tajawal:wght@300;400;500;700;800&display=swap"
    rel="stylesheet" />
 <style>
/* NAV ACTIONS */
.nav-actions {
  display: flex;
  align-items: center;
  gap: 10px; /* تقليل المسافة قليلاً لتناسب الشاشات الصغيرة */
}

/* PHONE */
.phone {
  font-size: 13px;
  color: #777;
}

/* LOGIN BUTTON */
.btn-login {
  padding: 8px 16px;
  border: 1px solid #39e65f;
  color: #39e650;
  border-radius: 25px;
  text-decoration: none;
  font-size: 14px;
  transition: 0.3s;
  white-space: nowrap; /* يمنع النص من الانقسام على سطرين */
}

.btn-login:hover {
  background: #39e656;
  color: #fff;
}

/* CTA BUTTON */
.btn-cta {
  padding: 8px 18px;
  background: linear-gradient(135deg, #2dd443, #4ce966);
  color: #fff;
  border-radius: 25px;
  text-decoration: none;
  font-size: 14px;
  box-shadow: 0 4px 12px rgba(57, 230, 66, 0.3);
  transition: 0.3s;
  white-space: nowrap; /* يمنع النص من الانقسام على سطرين */
}

.btn-cta:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(57, 230, 80, 0.5);
}

/* USER MENU */
.user-menu {
  display: flex;
  align-items: center;
  gap: 10px;
  background: #5f5f5f;
  padding: 5px 10px;
  border-radius: 30px;
  border: 1px solid #222;
}

/* USER INFO */
.user-info {
  display: flex;
  align-items: center;
  gap: 8px;
}

/* AVATAR */
.user-avatar {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  border: 2px solid #39e664;
  object-fit: cover;
}

/* USER NAME */
.user-name {
  font-size: 13px;
  color: #fff;
  font-weight: 500;
}

/* LOGOUT BUTTON */
.btn-logout {
  background: #39e656;
  border: none;
  color: #fff;
  padding: 6px 12px;
  border-radius: 20px;
  cursor: pointer;
  font-size: 12px;
  transition: 0.3s;
}

.btn-logout:hover {
  background: #5cff4d;
}

/* RESPONSIVE */
@media (max-width: 768px) {
  /* إخفاء روابط التنقل العادية في الجوال لأنها موجودة في القائمة الجانبية/المنسدلة */
  .nav-links {
    display: none;
  }

  .phone {
    display: none;
  }

  .user-name {
    display: none;
  }

  /* تصغير حجم الخط والمسافات الداخلية للأزرار لتناسب شاشة الجوال بجانب اللوجو */
  .btn-login {
    padding: 6px 10px;
    font-size: 12px;
  }

  .btn-cta {
    padding: 6px 10px;
    font-size: 12px;
  }

  /* تأمين بقاء الأزرار بجانب بعضها دائماً */
  .nav-actions {
    gap: 8px;
    display: flex !important;
  }
}
/* تنسيق حاوية أزرار الجوال لتصبح بجانب بعضها */
.mobile-menu-buttons {
  display: flex;
  gap: 10px; /* المسافة بين الزرين */
  width: 100%;
  justify-content: center; /* توسيط الأزرار */
  margin-top: 15px; /* مسافة علوية مناسبة تفصلهم عن الروابط */
  padding: 0 15px; /* مساحة أمان جانبية */
}

/* لضمان اتساع الأزرار وتساويها داخل الجوال */
.mobile-menu-buttons .mobile-cta {
  flex: 1;
  text-align: center;
  font-size: 14px;
  padding: 10px 5px;
}
/* DASHBOARD BUTTON IN USER MENU */
.btn-dashboard {
    background: #222; /* لون داكن مميز */
    color: #fff;
    padding: 6px 12px;
    border-radius: 20px;
    text-decoration: none;
    font-size: 12px;
    transition: 0.3s;
    white-space: nowrap;
}

.btn-dashboard:hover {
    background: #000;
    color: #fff;
}
</style>
</head>

<body>

  <!-- NAVBAR -->
  <header class="navbar">
    <div class="nav-container">
      <a href="index.html" class="logo">لازورد</a>
      <nav class="nav-links">
        <a href="{{ route('why-lazord') }}">لماذا لازورد</a>
        <a href="{{ route('lab-services') }}">خدمات المختبرات</a>
        <a href="{{ route('solutions') }}">الحلول</a>
        <a href="{{ route('pricing') }}">التسعير</a>
        <a href="{{ route('learn') }}">التعلم</a>
      </nav>
  <div class="nav-actions">
  <span class="phone">هاتف: 0592313599</span>

  @guest
      <a href="{{ route('login') }}" class="btn-login">تسجيل الدخول</a>
      <a href="{{ route('pricing') }}" class="btn-cta">ابدأ الآن</a>
  @endguest
@auth
    <div class="user-menu">
        <div class="user-info">
            <img src="{{ Auth::user()->image ?? 'https://ui-avatars.com/api/?name=' . Auth::user()->name }}"
                 class="user-avatar">
            <span class="user-name">{{ Auth::user()->name }}</span>
        </div>

        <a href="{{ url('admin/dashboard') }}" class="btn-dashboard">لوحة التحكم</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-logout">خروج</button>
        </form>
    </div>
@endauth
</div>
      <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="القائمة">
        <span></span><span></span><span></span>
      </button>
    </div>
<div class="mobile-menu" id="mobileMenu">
  <a href="{{ route('why-lazord') }}">لماذا لازورد</a>
  <a href="{{ route('lab-services') }}">خدمات المختبرات</a>
  <a href="{{ route('solutions') }}">الحلول</a>
  <a href="{{ route('pricing') }}">التسعير</a>
  <a href="{{ route('learn') }}">التعلم</a>

  <div class="mobile-menu-buttons">
  <a href="{{ route('pricing') }}" class="btn-cta mobile-cta">ابدأ الآن</a>

  @guest
      <a href="{{ route('login') }}" class="btn mobile-cta">تسجيل الدخول</a>
  @endguest

      @if(Auth::user()->role_as == 1)
          <a href="{{ route('dashboard') }}" class="btn mobile-cta" >لوحة التحكم</a>
      @endif
</div>
</div>
  </header>


   @yield('content')





  <!-- FOOTER -->

    <div class="container footer-container">
      <div class="footer-cta">
        <h3>هل مازلت تأخذ الانطباعات الجسدية؟</h3>
        <p>نقدم لك كل ما تحتاجه لبدء ذلك في طب الأسنان الرقمي محلياً — بما في ذلك الماسح الضوئي داخل الفم.</p>
        <a href="{{ route('pricing') }}" class="btn-cta-footer">ابدأ</a>
      </div>
      <div class="footer-links">
        <div class="footer-col">
          <h4>لازورد</h4>
          <ul>
            <li><a href="{{ route('why-lazord') }}">لماذا لازورد</a></li>
            <li><a href="{{ route('lab-services') }}">خدمات المختبرات</a></li>
            <li><a href="#">وظائف</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>منتجات</h4>
          <ul>
            <li><a href="{{ route('lab-services') }}">منتجات</a></li>
            <li><a href="{{ route('lab-services') }}">أطقم والمسح</a></li>
            <li><a href="{{ route('lab-services') }}">حلول رعاية الأسنان</a></li>
            <li><a href="{{ route('lab-services') }}">أدوات رقمية</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>ممارسات</h4>
          <ul>
            <li><a href="{{ route('solutions') }}">الحلول</a></li>
            <li><a href="{{ route('why-lazord') }}">لماذا لازورد</a></li>
            <li><a href="{{ route('pricing') }}">التسعير</a></li>
            <li><a href="login.html">تسجيل الدخول</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>موارد</h4>
          <ul>
            <li><a href="{{ route('learn') }}">التعلم</a></li>
            <li><a href="{{ route('learn') }}">دراسات الحالة</a></li>
            <li><a href="{{ route('learn') }}">مدونة</a></li>
            <li><a href="{{ route('pricing') }}">تواصل معنا</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p>© 2024 لازورد — جميع الحقوق محفوظة</p>
        <div class="footer-legal"><a href="#">سياسة الخصوصية</a><a href="#">شروط الاستخدام</a><a
            href="{{ route('pricing') }}">تواصل معنا</a></div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('script.js') }}"></script>
</body>

</html>
