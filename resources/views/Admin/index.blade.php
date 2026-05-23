@extends('layouts.master')

@section('content')

<div class="container-fluid">

    <!-- العنوان -->
    <div class="breadcrumb-header justify-content-between mb-4">
        <div>
            <h2 class="main-content-title tx-24">لوحة التحكم</h2>
            <p class="mg-b-0">مرحباً بك في لوحة تحكم موقع لازورد</p>
        </div>
    </div>

    <!-- الإحصائيات -->
    <div class="row row-sm">

        <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="card bg-primary-gradient text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>عدد المستخدمين</h6>
                            <h2>{{ $usersCount }}</h2>
                        </div>

                        <div>
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="card bg-success-gradient text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>عدد المنتجات</h6>
                            <h2>{{ $productsCount }}</h2>
                        </div>

                        <div>
                            <i class="fas fa-box fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="card bg-danger-gradient text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>عدد الرسائل</h6>
                            <h2>{{ $messagesCount }}</h2>
                        </div>

                        <div>
                            <i class="fas fa-envelope fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- آخر المستخدمين -->
    <div class="row mt-4">

        <div class="col-xl-6">
            <div class="card">

                <div class="card-header">
                    <h4 class="card-title">آخر المستخدمين</h4>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered text-center">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th>البريد الإلكتروني</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($latestUsers as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">لا يوجد مستخدمين</td>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>
                    </div>

                </div>

            </div>
        </div>

        <!-- آخر المنتجات -->
        <div class="col-xl-6">
            <div class="card">

                <div class="card-header">
                    <h4 class="card-title">آخر المنتجات</h4>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered text-center">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم المنتج</th>
                                    <th>الصورة</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($latestProducts as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $product->title }}</td>

                                        <td>
                                         <img src="{{ asset('storage/' . $product->image) }}"
     width="60"
     class="rounded">
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">لا توجد منتجات</td>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>
                    </div>

                </div>

            </div>
        </div>

    </div>

</div>
<br><br><br><br><br>
@endsection
