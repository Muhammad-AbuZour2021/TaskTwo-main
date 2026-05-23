@extends('layouts.master')

@section('content')
<br><br><br>

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">

            <div class="card-header">
                <h4>تعديل السؤال</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>السؤال</label>
                        <input type="text" name="question" class="form-control"
                               value="{{ $faq->question }}" required>
                    </div>

                    <div class="form-group mt-3">
                        <label>الإجابة</label>
                        <textarea name="answer" class="form-control" rows="4" required>{{ $faq->answer }}</textarea>
                    </div>

                    <button class="btn btn-success mt-3">تحديث</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
