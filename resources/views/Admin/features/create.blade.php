@extends('layouts.master')

@section('content')
<br><br><br><br>

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h4>إضافة ميزة</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('features.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>اختر الباقة</label>
                        <select name="plan_id" class="form-control">
                            @foreach($plans as $plan)
                                <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label>اسم الميزة</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-check mt-3">
                        <input type="checkbox" name="is_active" class="form-check-input" checked>
                        <label style="margin-right: 20px" class="form-check-label">مفعلة</label>
                    </div>

                    <button class="btn btn-success mt-3">حفظ</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
