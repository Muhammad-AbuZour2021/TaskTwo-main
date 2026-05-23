@extends('layouts.master')

@section('content')

<br><br><br>

<div class="row">

    <div class="col-md-8 mx-auto">

        <div class="card">

            <div class="card-header">
                <h4>تعديل المقال</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('articles.update', $article->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    {{-- العنوان --}}
                    <div class="form-group">

                        <label>العنوان</label>

                        <input type="text"
                               name="title"
                               class="form-control"
                               value="{{ $article->title }}"
                               required>

                    </div>

                    {{-- الوصف --}}
                    <div class="form-group mt-3">

                        <label>الوصف</label>

                        <textarea name="description"
                                  rows="5"
                                  class="form-control"
                                  required>{{ $article->description }}</textarea>

                    </div>

                    {{-- الصورة الحالية --}}
                    <div class="form-group mt-3">

                        <label>الصورة الحالية</label>

                        <br>

                        <img src="{{ asset('storage/' . $article->image) }}"
                             width="150"
                             class="img-thumbnail">

                    </div>

                    {{-- صورة جديدة --}}
                    <div class="form-group mt-3">

                        <label>تغيير الصورة</label>

                        <input type="file"
                               name="image"
                               class="form-control">

                    </div>

                    {{-- الحالة --}}
                    <div class="form-check mt-3">

                        <input type="checkbox"
                               name="is_active"
                               class="form-check-input"
                               {{ $article->is_active ? 'checked' : '' }}>

                        <label class="form-check-label"
                               style="margin-right:20px">

                            مفعل

                        </label>

                    </div>

                    {{-- زر التحديث --}}
                    <button class="btn btn-success mt-4">

                        تحديث المقال

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
