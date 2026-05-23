@extends('layouts.master')

@section('content')
<br><br>

<div class="card">
    <div class="card-header">
        <h4>إضافة باقة جديدة</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('plans.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>اسم الباقة</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>الشارة</label>
                <input type="text" name="badge" class="form-control">
            </div>

            <div class="form-group">
                <label>السعر</label>
                <input type="number" name="price" class="form-control">
            </div>

            <div class="form-group">
                <label>الفترة</label>
                <input type="text" name="period" class="form-control">
            </div>

            <div class="form-group">
                <label>الوصف</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="is_popular"> باقة مميزة
                </label>
            </div>

            <button class="btn btn-success">حفظ</button>
        </form>
    </div>
</div>
@endsection
