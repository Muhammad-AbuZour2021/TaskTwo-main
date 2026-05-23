@extends('layouts.master')

@section('content')
<br><br><br><br>

<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">الباقات</h4>
                    <a href="{{ route('plans.create') }}" class="btn btn-primary">+ إضافة باقة</a>
                </div>
                <p class="tx-12 tx-gray-500 mb-2">إدارة جميع الباقات</p>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-md-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الباقة</th>
                                <th>الشارة</th>
                                <th>السعر</th>
                                <th>الفترة</th>
                                <th>مميزة؟</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($plans as $plan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $plan->name }}</td>
                                    <td>{{ $plan->badge }}</td>
                                    <td>{{ $plan->price }}</td>
                                    <td>{{ $plan->period }}</td>
                                    <td>
                                        @if($plan->is_popular)
                                            <span class="badge bg-success">نعم</span>
                                        @else
                                            <span class="badge bg-secondary">لا</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ route('plans.edit', $plan->id) }}" class="btn btn-sm btn-info">تعديل</a>

                                        <form action="{{ route('plans.destroy', $plan->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد؟')">
                                                حذف
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">لا توجد باقات</td>
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
