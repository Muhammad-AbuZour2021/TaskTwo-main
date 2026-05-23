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

                <form action="{{ route('blogs.update',$blog->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>العنوان</label>

                        <input type="text"
                               name="title"
                               value="{{ $blog->title }}"
                               class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label>الوصف</label>

                        <textarea name="description"
                                  class="form-control">{{ $blog->description }}</textarea>
                    </div>

                    <div class="form-group mt-3">

                        <img src="{{ asset('storage/'.$blog->image) }}"
                             width="120">

                    </div>

                    <div class="form-group mt-3">
                        <label>صورة جديدة</label>

                        <input type="file"
                               name="image"
                               class="form-control">
                    </div>

                    <div class="form-group mt-3">

                        <label>النوع</label>

                        <select name="type"
                                class="form-control">

                            <option value="main"
                                {{ $blog->type == 'main' ? 'selected' : '' }}>
                                رئيسية
                            </option>

                            <option value="side"
                                {{ $blog->type == 'side' ? 'selected' : '' }}>
                                جانبية
                            </option>

                        </select>

                    </div>

                    <button class="btn btn-primary mt-3">
                        تحديث
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
