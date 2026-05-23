@extends('layouts.master')

@section('content')

<br><br><br>

<div class="row row-sm">

    <div class="col-xl-12">

        <div class="card">

            {{-- Header --}}
            <div class="card-header pb-0">

                <div class="d-flex justify-content-between">

                    <h4 class="card-title mg-b-0">
                        حلول المسح الضوئي
                    </h4>

                    <a href="{{ route('scanning.create') }}"
                       class="btn btn-primary">
                        + إضافة قسم
                    </a>

                </div>

                <p class="tx-12 tx-gray-500 mb-2">
                    إدارة جميع حلول المسح الضوئي
                </p>

            </div>

            {{-- Body --}}
            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered text-md-nowrap">

                        <thead>

                            <tr>
                                <th>#</th>
                                <th>العنوان</th>
                                <th>الوصف</th>
                                <th>المميزات</th>
                                <th>نوع التصميم</th>
                                <th>الزر</th>
                                <th>التحكم</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($solutions as $solution)

                                <tr>

                                    {{-- رقم --}}
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    {{-- العنوان --}}
                                    <td>
                                        {{ $solution->title }}
                                    </td>

                                    {{-- الوصف --}}
                                    <td width="250">
                                        {{ Str::limit($solution->description, 80) }}
                                    </td>

                                    {{-- المميزات --}}
                                    <td>

                                        <ul class="mb-0 ps-3">

                                            @foreach($solution->features as $feature)

                                                <li>
                                                    {{ $feature->feature }}
                                                </li>

                                            @endforeach

                                        </ul>

                                    </td>

                                    {{-- نوع التصميم --}}
                                    <td>

                                        @if($solution->type == 'dark')

                                            <span class="badge bg-dark">
                                                Dark
                                            </span>

                                        @else

                                            <span class="badge bg-secondary">
                                                Light
                                            </span>

                                        @endif

                                    </td>

                                    {{-- الزر --}}
                                    <td>
                                        {{ $solution->button_text }}
                                    </td>

                                    {{-- التحكم --}}
                                    <td>

                                        <a href="{{ route('scanning.edit', $solution->id) }}"
                                           class="btn btn-info btn-sm">
                                            تعديل
                                        </a>

                                        <form action="{{ route('scanning.destroy', $solution->id) }}"
                                              method="POST"
                                              style="display:inline-block;">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm"
                                                    onclick="return confirm('هل أنت متأكد من الحذف؟')">

                                                حذف

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="7" class="text-center">

                                        لا توجد بيانات حالياً

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
