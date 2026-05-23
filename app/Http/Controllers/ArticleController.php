<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $image = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image')
                ->store('articles', 'public');
        }

        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('articles.index')
            ->with('success', 'تمت إضافة المقال');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.articles.edit', compact('article'));
    }


    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);

        $image = $article->image;

        if ($request->hasFile('image')) {

            $image = $request->file('image')
                ->store('articles', 'public');
        }

        $article->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('articles.index')
            ->with('success', 'تم التحديث بنجاح');
    }


    public function destroy($id)
    {
        Article::findOrFail($id)->delete();

        return back()->with('success', 'تم الحذف');
    }
}
