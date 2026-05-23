@extends('layouts.master')

@section('content')

<br><br><br>

<div class="row row-sm">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-header pb-0">

                <div class="d-flex justify-content-between">

                    <h4 class="card-title">
                        إدارة المقالات
                    </h4>

                    <a href="{{ route('blogs.create') }}"
                       class="btn btn-primary">
                        + إضافة
                    </a>

                </div>

            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الصورة</th>
                                <th>العنوان</th>
                                <th>النوع</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($blogs as $blog)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <img src="{{ asset('storage/'.$blog->image) }}"
                                         width="80">
                                </td>

                                <td>{{ $blog->title }}</td>

                                <td>
                                    {{ $blog->type }}
                                </td>

                                <td>

                                    <a href="{{ route('blogs.edit',$blog->id) }}"
                                       class="btn btn-info btn-sm">
                                        تعديل
                                    </a>

                                    <form action="{{ route('blogs.destroy',$blog->id) }}"
                                          method="POST"
                                          style="display:inline;">

                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm">
                                            حذف
                                        </button>

                                    </form>

                                </td>

                            </tr>

                            @empty

                            <tr>
                                <td colspan="5" class="text-center">
                                    لا توجد بيانات
                                </td>
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
