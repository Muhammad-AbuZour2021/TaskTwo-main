@extends('layouts.master')

@section('content')
<br><br><br>

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">

            <div class="card-header">
                <h4>إضافة سؤال</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('faqs.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>السؤال</label>
                        <input type="text" name="question" class="form-control" required>
                    </div>

                    <div class="form-group mt-3">
                        <label>الإجابة</label>
                        <textarea name="answer" class="form-control" rows="4" required></textarea>
                    </div>

                    <button class="btn btn-success mt-3">حفظ</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
