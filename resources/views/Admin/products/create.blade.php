@extends('layouts.master')

@section('content')
<br><br><br><br>

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h4>إضافة منتج</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>اسم المنتج</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="form-group mt-3">
                        <label>صورة المنتج</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <div class="form-check mt-3">
                        <input type="checkbox" name="is_active" class="form-check-input" checked>
                        <label style="margin-right: 20px" class="form-check-label">مفعل</label>
                    </div>

                    <button class="btn btn-success mt-3">حفظ</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
