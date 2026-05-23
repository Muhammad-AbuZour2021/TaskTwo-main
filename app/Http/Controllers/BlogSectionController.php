<?php

namespace App\Http\Controllers;

use App\Models\BlogSection;
use Illuminate\Http\Request;

class BlogSectionController extends Controller
{
      // عرض
    public function index()
    {
        $blogs = BlogSection::latest()->get();

        return view('admin.blog.index', compact('blogs'));
    }

    // صفحة إضافة
    public function create()
    {
        return view('admin.blog.create');
    }

    // حفظ
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'type' => 'required|in:main,side',
        ]);

        $image = $request->file('image')->store('blogs', 'public');

        BlogSection::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'type' => $request->type,
        ]);

        return redirect()->route('blogs.index')
            ->with('success', 'تمت الإضافة بنجاح');
    }

    // صفحة تعديل
    public function edit($id)
    {
        $blog = BlogSection::findOrFail($id);

        return view('admin.blog.edit', compact('blog'));
    }

    // تحديث
    public function update(Request $request, $id)
    {
        $blog = BlogSection::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'type' => 'required|in:main,side',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
        ];

        if ($request->hasFile('image')) {

            $image = $request->file('image')->store('blogs', 'public');

            $data['image'] = $image;
        }

        $blog->update($data);

        return redirect()->route('blogs.index')
            ->with('success', 'تم التعديل بنجاح');
    }

    // حذف
    public function destroy($id)
    {
        BlogSection::findOrFail($id)->delete();

        return back()->with('success', 'تم الحذف');
    }
}
