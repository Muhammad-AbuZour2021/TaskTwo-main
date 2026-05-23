@extends('layouts.app_TaskTwo')
@section('content')



  <main>

    <!-- HERO -->
    <section class="hero" id="home">
      <div class="hero-container">
        <div class="hero-image-wrap">
          <img src="{{ asset('images/hero-lab.jpg') }}" alt="مختبر الأسنان" class="hero-img" />
        </div>
        <div class="hero-content">
          <h1>مختبر الأسنان الرقمي<br />مع التواصل في الوقت<br />الحقيقي</h1>
          <p>نحن نعمل على تمكين الآلاف من عيادات طب الأسنان من خلال تدفقات عمل مبتكرة لتعزيز رعاية المرضى وإحداث ثورة في
            طريقة تقديم طلباتهم والتعاون في العمل المختبري.</p>
          <div class="hero-btns">
            <a href="{{ route('pricing') }}" class="btn-primary">ابدأ الآن!</a>
            <a href="{{ route('why-lazord') }}" class="btn-secondary">شاهد الفيديو</a>
          </div>
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

    <!-- WORKFLOW -->
    <section class="workflow">
      <div class="container workflow-container">
        <div class="workflow-image">
          <img src="{{ asset('images/workflow.jpg') }}" alt="سير العمل" />
        </div>
        <div class="workflow-content">
          <h2>قم بتحويل ممارساتك باستخدام سير عمل رقمي مثبت</h2>
          <p class="workflow-sub">استمتع بمستوى من التحكم لم يكن ممكناً من قبل.</p>
          <ul class="workflow-list">
            <li><span class="check">✓</span> المسح الضوئي بدقة وثقة</li>
            <li><span class="check">✓</span> اطلب العمل المختبري باستخدام الوصفات الطبية الرقمية</li>
            <li><span class="check">✓</span> الموافقة على التصاميم الرقمية قبل التصنيع</li>
            <li><span class="check">✓</span> تتبع الحالات في الوقت الفعلي</li>
            <li><span class="check">✓</span> تسليم العلاج للمريض في أيام</li>
            <li><span class="check">✓</span><a href="{{ route('why-lazord') }}" class="link-green"> كيف يتم مقارنة لازورد مع
                مختبرات الأسنان الأخرى</a></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- RESULTS -->
    <section class="results">
      <div class="container">
        <h2 class="section-title">تحقيق نتائج أفضل لممارستك ومرضاك</h2>
        <div class="results-grid">
          <div class="result-card"><img src="{{ asset('images/result-1.jpg') }}" alt="تطوير مهارات الفريق" />
            <h3>تطوير مهارات كل عضو من الموظفين</h3>
            <p>احمل كل عضو من أعضاء فريقك بثقة على سير عمل رقمي — استفد من التدريب غير المحدود لفريقك كلما دعت الحاجة.
            </p>
          </div>
          <div class="result-card"><img src="{{ asset('images/result-2.jpg') }}" alt="تحسين تجربة المريض" />
            <h3>تحسين تجربة المريض</h3>
            <p>ارفع مستوى رعاية المريض من خلال ابتكارات مثل أطقم الأسنان ذات الموعد المباشرة، والأجزاء الجزئية المباشرة،
              والمسح الضوئي الترميمي.</p>
          </div>
          <div class="result-card"><img src="{{ asset('images/result-3.jpg') }}" alt="زيادة القدرة على التنبؤ بالعلاج" />
            <h3>زيادة القدرة على التنبؤ بالعلاج</h3>
            <p>استخدم أدوات المسح المتقدمة — تصور التصاميم الرقمية والموافقة عليها، وتعزيز قبول الحالة، وتقديم نتائج
              ناجحة للمرضى.</p>
          </div>
        </div>
      </div>
    </section>

  </main>


@endsection
