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

                <form action="{{ route('blogs.store') }}"
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
                                  class="form-control"></textarea>
                    </div>

                    <div class="form-group mt-3">
                        <label>الصورة</label>
                        <input type="file"
                               name="image"
                               class="form-control">
                    </div>

                    <div class="form-group mt-3">
                        <label>النوع</label>

                        <select name="type"
                                class="form-control">

                            <option value="main">
                                رئيسية
                            </option>

                            <option value="side">
                                جانبية
                            </option>

                        </select>
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
