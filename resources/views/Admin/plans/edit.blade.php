@extends('layouts.master')

@section('content')
<br><br>

<div class="card">
    <div class="card-header">
        <h4>تعديل الباقة</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('plans.update', $plan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>اسم الباقة</label>
                <input type="text" name="name" value="{{ $plan->name }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>الشارة</label>
                <input type="text" name="badge" value="{{ $plan->badge }}" class="form-control">
            </div>

            <div class="form-group">
                <label>السعر</label>
                <input type="number" name="price" value="{{ $plan->price }}" class="form-control">
            </div>

            <div class="form-group">
                <label>الفترة</label>
                <input type="text" name="period" value="{{ $plan->period }}" class="form-control">
            </div>

            <div class="form-group">
                <label>الوصف</label>
                <textarea name="description" class="form-control">{{ $plan->description }}</textarea>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="is_popular" {{ $plan->is_popular ? 'checked' : '' }}>
                    باقة مميزة
                </label>
            </div>

            <button class="btn btn-primary">تحديث</button>
        </form>
    </div>
</div>
@endsection
