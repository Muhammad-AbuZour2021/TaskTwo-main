@extends('layouts.app_TaskTwo')
@section('content')






  <main>

    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>لماذا تختار لازورد؟</h1>
          <p>نحن نقود ثورة طب الأسنان الرقمي بتقديم تجربة مختبرية لا مثيل لها — مبنية على التكنولوجيا والثقة والتواصل
            الحقيقي.</p>
          <a href="{{ route('pricing') }}" class="btn-primary">ابدأ الآن</a>
        </div>
      </div>
    </section>

  <!-- STATS -->
<section class="stats">
    <div class="container">

        <h2 class="section-title">
          الآلاف من الممارسات تثق في لازورد في أعمالها المخبرية

        </h2>

        <div class="stats-grid">

            <!-- عدد المنتجات -->
            <div class="stat-card">
                <span class="stat-num">{{ $productsCount }}+</span>
                <span class="stat-label">
                    عدد المنتجات والخدمات
                </span>
            </div>

            <!-- عدد المستخدمين -->
            <div class="stat-card">
                <span class="stat-num">{{ $usersCount }}+</span>
                <span class="stat-label">
                    عدد المستخدمين المسجلين
                </span>
            </div>

            <!-- عدد العيادات -->
            <div class="stat-card">
                <span class="stat-num">{{ $clinicsCount }}+</span>
                <span class="stat-label">
                    عدد العيادات
                </span>
            </div>

        </div>

    </div>
</section>

    <!-- FEATURES -->
    <section class="features">
      <div class="container">
        <h2 class="section-title">تعزيز مستقبل طب الأسنان الرقمي</h2>
        <p class="section-subtitle">لا يمكن تحقيق ترميمات متسقة وملاءمة إلا من خلال التواصل القوي. في لازورد، قمنا
          بتطوير طرق مبتكرة للتعاون مع أطباء الأسنان لدينا باستخدام قوة التكنولوجيا.</p>
        <div class="features-grid">
          <div class="feature-card">
            <div class="feature-icon">
              <div class="icon-fallback">🔬</div>
            </div>
            <h3>سير العمل التعاوني</h3>
            <p>احصل على مراجعة المسح في الوقت الفعلي واعتمد تصاميم الأسنان المعقدة ثلاثية الأبعاد للإعداد النهائي في
              عملك المختبري.</p>
          </div>
          <div class="feature-card">
            <div class="feature-icon">
              <div class="icon-fallback">🦷</div>
            </div>
            <h3>المنتجات المبتكرة</h3>
            <p>قم بتقديم خدمات تغير قواعد اللعبة مثل التيجان لمدة 5 أيام، وأطقم الأسنان ذات الموعد المباشرة، والأجزاء
              الجزئية المباشرة.</p>
          </div>
          <div class="feature-card">
            <div class="feature-icon">
              <div class="icon-fallback">💻</div>
            </div>
            <h3>مختبر رقمي بالكامل</h3>
            <p>يمكنك الوصول إلى فنيين ذوي المستوى العالمي الذين يستجيبون بأحدث تقنيات طب الأسنان وأوقات التسليم الرائدة
              في الصناعة.</p>
          </div>
          <div class="feature-card">
            <div class="feature-icon">
              <div class="icon-fallback">📋</div>
            </div>
            <h3>الخبرة عند الطلب</h3>
            <p>يمكنك الوصول إلى خبرائنا السريريين للحصول على إرشادات ودعم متخصصين عبر الهاتف أو البريد الإلكتروني خلال
              دقائق.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- RESULTS -->
    <section class="results">
      <div class="container">
        <h2 class="section-title">تحقيق نتائج أفضل لممارستك ومرضاك</h2>
        <div class="results-grid">
          <div class="result-card"><img src="{{ asset('images/result-1.jpg')}}" alt="تطوير مهارات الفريق" />
            <h3>تطوير مهارات كل عضو من الموظفين</h3>
            <p>احمل كل عضو من أعضاء فريقك بثقة على سير عمل رقمي — استفد من التدريب غير المحدود لفريقك كلما دعت الحاجة.
            </p>
          </div>
          <div class="result-card"><img src="{{ asset('images/result-2.jpg')}}" alt="تحسين تجربة المريض" />
            <h3>تحسين تجربة المريض</h3>
            <p>ارفع مستوى رعاية المريض من خلال ابتكارات مثل أطقم الأسنان ذات الموعد المباشرة، والأجزاء الجزئية المباشرة،
              والمسح الضوئي الترميمي.</p>
          </div>
          <div class="result-card"><img src="{{ asset('images/result-3.jpg')}}" alt="زيادة القدرة على التنبؤ بالعلاج" />
            <h3>زيادة القدرة على التنبؤ بالعلاج</h3>
            <p>استخدم أدوات المسح المتقدمة — تصور التصاميم الرقمية والموافقة عليها، وتعزيز قبول الحالة، وتقديم نتائج
              ناجحة للمرضى.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="faq">
  <div class="container faq-container">
    <h2 class="faq-title">الأسئلة الشائعة حول لازورد</h2>

    <div class="faq-list">
      @forelse($faqs as $faq)
        <div class="faq-item">
          <button class="faq-btn" aria-expanded="false">
            <span>{{ $faq->question }}</span>
            <span class="faq-arrow">›</span>
          </button>

          <div class="faq-answer">
            <p>{{ $faq->answer }}</p>
          </div>
        </div>
      @empty
        <p class="text-center">لا توجد أسئلة حالياً</p>
      @endforelse
    </div>

  </div>
</section>
  </main>






@endsection
