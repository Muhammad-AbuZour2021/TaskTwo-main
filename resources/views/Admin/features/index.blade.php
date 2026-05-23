@extends('layouts.master')

@section('content')
<br><br><br><br>

<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">مميزات الباقات</h4>
                    <a href="{{ route('features.create') }}" class="btn btn-primary">+ إضافة ميزة</a>
                </div>
                <p class="tx-12 tx-gray-500">إدارة جميع المميزات</p>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الباقة</th>
                                <th>الميزة</th>
                                <th>متاحة؟</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($features as $feature)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $feature->plan->name }}</td>
                                    <td>{{ $feature->name }}</td>
                                    <td>
                                        @if($feature->is_active)
                                            <span class="badge bg-success">✔</span>
                                        @else
                                            <span class="badge bg-danger">✖</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ route('features.edit', $feature->id) }}" class="btn btn-info btn-sm">تعديل</a>

                                        <form action="{{ route('features.destroy', $feature->id) }}" method="POST" style="display:inline;">
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
                                    <td colspan="5" class="text-center">لا توجد مميزات</td>
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
