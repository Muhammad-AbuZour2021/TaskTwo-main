@extends('layouts.master')

@section('content')
    <br><br><br>

    <div class="row row-sm">

        <div class="col-xl-12">

            <div class="card">

                <div class="card-header pb-0">

                    <div class="d-flex justify-content-between">

                        <h4 class="card-title">
                            المقالات
                        </h4>

                        <a href="{{ route('articles.create') }}" class="btn btn-primary">
                            + إضافة مقال
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
                                    <th>الوصف</th>
                                    <th>الحالة</th>
                                    <th>التحكم</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($articles as $article)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            <img src="{{ asset('storage/' . $article->image) }}" width="80">
                                        </td>

                                        <td>{{ $article->title }}</td>

                                        <td>
                                            {{ Str::limit($article->description, 80) }}
                                        </td>

                                        <td>

                                            @if ($article->is_active)
                                                <span class="badge bg-success">
                                                    مفعل
                                                </span>
                                            @else
                                                <span class="badge bg-danger">
                                                    مخفي
                                                </span>
                                            @endif

                                        </td>

                                        <td>

                                            <a href="{{ route('articles.edit', $article->id) }}"
                                                class="btn btn-info btn-sm">

                                                تعديل

                                            </a>

                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                                style="display:inline-block;">

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

                                        <td colspan="6" class="text-center">
                                            لا توجد مقالات
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
