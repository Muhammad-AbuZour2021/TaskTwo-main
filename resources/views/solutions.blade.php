@extends('layouts.app_TaskTwo')
@section('content')



  <main>

    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>الحلول الرقمية لعيادتك</h1>
          <p>سير عمل رقمية مثبتة وحلول مصممة لكل مرحلة من مراحل ممارستك — سواء كنت تبدأ أو تتوسع.</p>
          <a href="{{ route('pricing') }}" class="btn-primary">ابدأ الآن</a>
        </div>
      </div>
    </section>

    <!-- WORKFLOW -->
    <section class="workflow">
      <div class="container workflow-container">
        <div class="workflow-image">
          <img src="{{ asset('images/workflow.jpg')}}" alt="سير العمل" />
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

                        @foreach($solution->features as $feature)

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


   <!-- BLOG / CASE STUDIES -->
<section class="blog">

    <div class="container">

        <p class="blog-intro">
            تعرف على المزيد حول مستقبل طب الأسنان وكيف يشكله لازورد.
        </p>

        <div class="blog-grid">

            {{-- المقال الرئيسي --}}
            @php
                $mainBlog = $blogs->where('type', 'main')->first();
                $sideBlogs = $blogs->where('type', 'side');
            @endphp

            @if($mainBlog)

            <div class="blog-main">

                <img src="{{ asset('storage/' . $mainBlog->image) }}"
                     alt="{{ $mainBlog->title }}" />

                <p class="blog-label">
                    {{ $mainBlog->title }}
                </p>

            </div>

            @endif

            {{-- المقالات الجانبية --}}
            <div class="blog-side">

                @foreach($sideBlogs as $blog)

                <div class="blog-thumb">

                    <img src="{{ asset('storage/' . $blog->image) }}"
                         alt="{{ $blog->title }}" />

                    <p>
                        {{ $blog->title }}
                    </p>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</section>

  </main>



@endsection
