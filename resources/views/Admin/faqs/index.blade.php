@extends('layouts.master')

@section('content')
<br><br><br>

<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between">
                <h4>الأسئلة الشائعة</h4>
                <a href="{{ route('faqs.create') }}" class="btn btn-primary">+ إضافة</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>السؤال</th>
                                <th>الإجابة</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($faqs as $faq)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $faq->question }}</td>
                                    <td>{{ Str::limit($faq->answer, 50) }}</td>

                                    <td>
                                        <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-info btn-sm">تعديل</a>

                                        <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('حذف؟')">
                                                حذف
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">لا توجد بيانات</td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
