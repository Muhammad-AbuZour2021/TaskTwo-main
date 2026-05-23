@extends('layouts.master')

@section('content')

<br><br><br>

<div class="row">
    <div class="col-md-8 mx-auto">

        <div class="card">

            {{-- Header --}}
            <div class="card-header">
                <h4>تعديل قسم حلول المسح الضوئي</h4>
            </div>

            {{-- Body --}}
            <div class="card-body">

                <form action="{{ route('scanning.update', $solution->id) }}"
                      method="POST">

                    @csrf
                    @method('PUT')

                    {{-- العنوان --}}
                    <div class="form-group">
                        <label>العنوان</label>

                        <input type="text"
                               name="title"
                               class="form-control"
                               value="{{ $solution->title }}"
                               required>
                    </div>

                    {{-- الوصف --}}
                    <div class="form-group mt-3">
                        <label>الوصف</label>

                        <textarea name="description"
                                  class="form-control"
                                  rows="4"
                                  required>{{ $solution->description }}</textarea>
                    </div>

                    {{-- نوع التصميم --}}
                    <div class="form-group mt-3">
                        <label>نوع التصميم</label>

                        <select name="type" class="form-control">

                            <option value="dark"
                                {{ $solution->type == 'dark' ? 'selected' : '' }}>
                                Dark
                            </option>

                            <option value="light"
                                {{ $solution->type == 'light' ? 'selected' : '' }}>
                                Light
                            </option>

                        </select>
                    </div>

                    {{-- نص الزر --}}
                    <div class="form-group mt-3">
                        <label>نص الزر</label>

                        <input type="text"
                               name="button_text"
                               class="form-control"
                               value="{{ $solution->button_text }}">
                    </div>

                    {{-- رابط الزر --}}
                    <div class="form-group mt-3">
                        <label>رابط الزر</label>

                        <input type="text"
                               name="button_link"
                               class="form-control"
                               value="{{ $solution->button_link }}">
                    </div>

                    {{-- المميزات --}}
                    <div class="form-group mt-3">

                        <label>المميزات</label>

                        <div id="features-wrapper">

                            @foreach($solution->features as $feature)

                                <div class="feature-item mb-2 d-flex">

                                    <input type="text"
                                           name="features[]"
                                           class="form-control"
                                           value="{{ $feature->feature }}">

                                    <button type="button"
                                            class="btn btn-danger ms-2 remove-feature">
                                        حذف
                                    </button>

                                </div>

                            @endforeach

                        </div>

                        {{-- إضافة ميزة --}}
                        <button type="button"
                                class="btn btn-primary btn-sm mt-2"
                                onclick="addFeature()">

                            + إضافة ميزة

                        </button>

                    </div>

                    {{-- زر الحفظ --}}
                    <button class="btn btn-success mt-4">

                        تحديث

                    </button>

                </form>

            </div>

        </div>

    </div>
</div>

{{-- JS --}}
<script>

    // إضافة ميزة جديدة
    function addFeature() {

        let wrapper = document.getElementById('features-wrapper');

        let div = document.createElement('div');

        div.classList.add('feature-item', 'mb-2', 'd-flex');

        div.innerHTML = `
            <input type="text"
                   name="features[]"
                   class="form-control"
                   placeholder="أدخل الميزة">

            <button type="button"
                    class="btn btn-danger ms-2 remove-feature">
                حذف
            </button>
        `;

        wrapper.appendChild(div);
    }

    // حذف عنصر
    document.addEventListener('click', function(e){

        if(e.target.classList.contains('remove-feature')){

            e.target.parentElement.remove();

        }

    });

</script>

@endsection
