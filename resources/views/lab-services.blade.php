@extends('layouts.app_TaskTwo')
@section('content')
    <main>

        <!-- PAGE HERO -->
        <section class="page-hero">
            <div class="container">
                <div class="page-hero-content">
                    <h1>خدمات المختبرات الرقمية</h1>
                    <p>منتجات مبتكرة وخدمات متكاملة لعيادتك — مصممة لتحقيق نتائج استثنائية لكل مريض.</p>
                    <a href="{{ route('pricing') }}" class="btn-primary">استكشف الباقات</a>
                </div>
            </div>
        </section>

        <!-- PRODUCTS -->
        <section class="products">
            <div class="container">
                <h2 class="section-title">أطلق العنان للابتكار الرائد في السوق مع مختبر طب الأسنان الخاص بنا</h2>
                <p class="section-subtitle">لا يمكن تحقيق ترميمات متسقة وملاءمة إلا من خلال التواصل القوي. في لازورد، قمنا
                    بتطوير طرق مبتكرة للتعاون مع أطباء الأسنان لدينا باستخدام قوة التكنولوجيا لإعادة تعريف ما هو ممكن لكل
                    مريض.
                </p>
                <div class="products-grid">
                    @foreach ($products as $product)
                        <div class="product-card">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" />
                            <p>{{ $product->title }}</p>
                        </div>
                    @endforeach
                </div>
        </section>

        <!-- SCANNING SOLUTIONS -->
        <section class="scanning">
            <div class="container">

                <h2 class="section-title">
                    حلول طب الأسنان الترميمية لتناسب احتياجاتك
                </h2>

                <div class="scanning-grid">

                    @forelse($solutions as $solution)
                        <div class="scanning-card {{ $solution->type }}">

                            {{-- العنوان --}}
                            <h3>{{ $solution->title }}</h3>

                            {{-- الوصف --}}
                            <p>
                                {{ $solution->description }}
                            </p>

                            {{-- المميزات --}}
                            <ul>

                                @foreach ($solution->features as $feature)
                                    <li>
                                        <span class="check-icon">✓</span>

                                        {{ $feature->feature }}
                                    </li>
                                @endforeach

                            </ul>

                            {{-- الزر --}}
                            <a href="{{ $solution->button_link }}"
                                class="{{ $solution->type == 'dark' ? 'btn-green' : 'btn-dark' }}">

                                {{ $solution->button_text }}

                            </a>

                        </div>

                    @empty

                        <div class="text-center">
                            لا توجد بيانات حالياً
                        </div>
                    @endforelse

                </div>

            </div>
        </section>


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

    </main>
@endsection
