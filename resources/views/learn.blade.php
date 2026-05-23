@extends('layouts.app_TaskTwo')
@section('content')


  <main>

    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>مركز التعلم والموارد</h1>
          <p>دراسات حالة، مقالات، وإرشادات متخصصة لمساعدتك في الاستفادة القصوى من طب الأسنان الرقمي.</p>
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

    <!-- MORE ARTICLES -->
  <section class="results" style="background: var(--white);">

    <div class="container">

        <h2 class="section-title">
            مقالات وموارد إضافية
        </h2>

        <div class="results-grid">

            @foreach($articles as $article)

                <div class="result-card">

                    <img src="{{ asset('storage/' . $article->image) }}"
                         alt="{{ $article->title }}" />

                    <h3>{{ $article->title }}</h3>

                    <p>{{ $article->description }}</p>

                </div>

            @endforeach

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
