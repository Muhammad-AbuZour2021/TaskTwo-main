@extends('layouts.master')

@section('content')
<br><br><br><br>

<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">المنتجات</h4>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">+ إضافة منتج</a>
                </div>
                <p class="tx-12 tx-gray-500">إدارة جميع المنتجات</p>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الصورة</th>
                                <th>اسم المنتج</th>
                                <th>الحالة</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        <img src="{{ asset('storage/' . $product->image) }}" width="60">
                                    </td>

                                    <td>{{ $product->title }}</td>

                                    <td>
                                        @if($product->is_active)
                                            <span class="badge bg-success">✔</span>
                                        @else
                                            <span class="badge bg-danger">✖</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-sm">تعديل</a>

                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
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
                                    <td colspan="5" class="text-center">لا توجد منتجات</td>
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
