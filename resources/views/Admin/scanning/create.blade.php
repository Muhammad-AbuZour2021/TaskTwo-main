@extends('layouts.master')

@section('content')
<br><br><br>

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">

            <div class="card-header">
                <h4>إضافة قسم حلول المسح الضوئي</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('scanning.store') }}" method="POST">
                    @csrf

                    {{-- العنوان --}}
                    <div class="form-group">
                        <label>العنوان</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               placeholder="أدخل العنوان"
                               required>
                    </div>

                    {{-- الوصف --}}
                    <div class="form-group mt-3">
                        <label>الوصف</label>
                        <textarea name="description"
                                  class="form-control"
                                  rows="4"
                                  placeholder="أدخل الوصف"
                                  required></textarea>
                    </div>

                    {{-- نوع الكارد --}}
                    <div class="form-group mt-3">
                        <label>نوع التصميم</label>

                        <select name="type" class="form-control">
                            <option value="dark">Dark</option>
                            <option value="light">Light</option>
                        </select>
                    </div>

                    {{-- نص الزر --}}
                    <div class="form-group mt-3">
                        <label>نص الزر</label>

                        <input type="text"
                               name="button_text"
                               class="form-control"
                               placeholder="مثال: تسجيل الآن">
                    </div>

                    {{-- رابط الزر --}}
                    <div class="form-group mt-3">
                        <label>رابط الزر</label>

                        <input type="text"
                               name="button_link"
                               class="form-control"
                               placeholder="مثال: /pricing">
                    </div>

                    {{-- المميزات --}}
                    <div class="form-group mt-3">
                        <label>المميزات</label>

                        <div id="features-wrapper">

                            <div class="feature-item mb-2">
                                <input type="text"
                                       name="features[]"
                                       class="form-control"
                                       placeholder="أدخل الميزة">
                            </div>

                        </div>

                        <button type="button"
                                class="btn btn-primary btn-sm mt-2"
                                onclick="addFeature()">
                            + إضافة ميزة
                        </button>
                    </div>

                    {{-- زر الحفظ --}}
                    <button class="btn btn-success mt-4">
                        حفظ
                    </button>

                </form>

            </div>

        </div>
    </div>
</div>

{{-- JS --}}
<script>
    function addFeature() {

        let wrapper = document.getElementById('features-wrapper');

        let div = document.createElement('div');

        div.classList.add('feature-item', 'mb-2');

        div.innerHTML = `
            <input type="text"
                   name="features[]"
                   class="form-control"
                   placeholder="أدخل الميزة">
        `;

        wrapper.appendChild(div);
    }
</script>

@endsection
