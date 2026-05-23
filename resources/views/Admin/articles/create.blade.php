@extends('layouts.master')

@section('content')

<br><br><br>

<div class="row">

    <div class="col-md-8 mx-auto">

        <div class="card">

            <div class="card-header">
                <h4>إضافة مقال</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('articles.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label>العنوان</label>

                        <input type="text"
                               name="title"
                               class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label>الوصف</label>

                        <textarea name="description"
                                  rows="5"
                                  class="form-control"></textarea>
                    </div>

                    <div class="form-group mt-3">
                        <label>الصورة</label>

                        <input type="file"
                               name="image"
                               class="form-control">
                    </div>

                    <div class="form-check mt-3">

                        <input type="checkbox"
                               name="is_active"
                               class="form-check-input"
                               checked>

                        <label class="form-check-label"
                               style="margin-right:20px">

                            مفعل

                        </label>

                    </div>

                    <button class="btn btn-success mt-3">

                        حفظ

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
