@extends('layouts.app_TaskTwo')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <main>

        <!-- PAGE HERO -->
        <section class="page-hero">
            <div class="container">
                <div class="page-hero-content">
                    <h1>باقات وأسعار لازورد</h1>
                    <p>اختر الباقة التي تناسب احتياجات عيادتك — ابدأ صغيراً وتوسع بلا حدود.</p>
                </div>
            </div>
        </section>

        <!-- PRICING CARDS -->
        <section class="pricing-section">
            <div class="container">
                <h2 class="section-title">اختر الباقة المناسبة</h2>

                <div class="pricing-grid">

                    @foreach ($plans as $plan)
                        <div class="pricing-card {{ $plan->is_popular ? 'pricing-popular' : '' }}">

                            <div class="pricing-badge {{ $plan->is_popular ? 'popular' : '' }}">
                                {{ $plan->badge }}
                            </div>

                            <h3>{{ $plan->name }}</h3>

                            <div class="pricing-price">
                                <span class="price-amount">
                                    {{ $plan->price ? '$' . $plan->price : 'مخصص' }}
                                </span>
                                <span class="price-period">{{ $plan->period }}</span>
                            </div>

                            <p class="pricing-desc">{{ $plan->description }}</p>

                            <ul class="pricing-features">
                                @foreach ($plan->features as $feature)
                                    <li class="{{ !$feature->is_active ? 'disabled' : '' }}">
                                        <span>{{ $feature->is_active ? '✓' : '✗' }}</span>
                                        {{ $feature->feature }}
                                    </li>
                                @endforeach
                            </ul>

                            <a href="#contact" class="pricing-btn {{ $plan->is_popular ? 'btn-primary' : 'btn-outline' }}">
                                ابدأ الآن
                            </a>

                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- CONTACT FORM -->
        <section class="contact" id="contact">

            <div class="container contact-container">

                <div class="contact-info">
                    <h2>تواصل معنا</h2>
                    <p>قم بتطوير ممارساتك مع لازورد — الشريك الرقمي المتكامل الوحيد وقم بتحسين تجربة المريض والحلول السريرية
                        ونمو
                        الأعمال.</p>
                    <p class="contact-start"><strong>ابدأ اليوم عن طريق ملء النموذج.</strong></p>
                    <p class="contact-legal">من خلال تقديم النموذج أعلاه، أوافق على شروط الاستخدام وسياسة الخصوصية الخاصة
                        بشركة
                        لازورد. يوافق على تلقي الاتصال بي من قبل شركة لازورد عبر رسالة نصية باستخدام معلومات الاتصال
                        المقدمة. قد تم
                        تطبيق أسعار الرسائل والبيانات ويمكنني الرد بـ STOP لإلغاء الاشتراك في أي وقت.</p>
                </div>


                <form class="contact-form" method="POST" action="{{ route('contact.store') }}" id="contactForm">
                    @csrf

                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">الاسم الأول:</label>
                            <input type="text" name="first_name" id="firstName" placeholder="الاسم" required />
                        </div>

                        <div class="form-group">
                            <label for="lastName">اسم العائلة:</label>
                            <input type="text" name="last_name" id="lastName" placeholder="اسم العائلة" required />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">عنوان البريد الإلكتروني:</label>
                            <input type="email" name="email" id="email" placeholder="عنوان البريد الإلكتروني"
                                required />
                        </div>

                        <div class="form-group">
                            <label for="phone">رقم الهاتف:</label>
                            <input type="text" name="phone" id="phone" placeholder="رقم الهاتف" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="clinic">اسم العيادة:</label>
                            <input type="text" name="clinic_name" id="clinic" placeholder="اسم العيادة" />
                        </div>

                        <div class="form-group">
                            <label for="role">دورك في العيادة:</label>
                            <input type="text" name="role" id="role" placeholder="دورك في العيادة" />
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">ابدأ الآن</button>
                </form>
            </div>
        </section>

    </main>
@endsection
