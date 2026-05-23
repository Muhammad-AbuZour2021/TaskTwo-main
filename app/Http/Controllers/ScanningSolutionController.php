<?php

namespace App\Http\Controllers;

use App\Models\ScanningSolution;
use Illuminate\Http\Request;

class ScanningSolutionController extends Controller
{
  public function index()
    {
        $solutions = ScanningSolution::with('features')->get();
        return view('admin.scanning.index', compact('solutions'));
    }

    public function create()
    {
        return view('admin.scanning.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required|in:dark,light',
            'features.*' => 'required'
        ]);

        $solution = ScanningSolution::create($request->only([
            'title','description','type','button_text','button_link'
        ]));

        foreach ($request->features as $feature) {
            $solution->features()->create([
                'feature' => $feature
            ]);
        }

        return redirect()->route('scanning.index')->with('success', 'تمت الإضافة');
    }

    public function edit($id)
    {
        $solution = ScanningSolution::with('features')->findOrFail($id);
        return view('admin.scanning.edit', compact('solution'));
    }

    public function update(Request $request, $id)
    {
        $solution = ScanningSolution::findOrFail($id);

        $solution->update($request->only([
            'title','description','type','button_text','button_link'
        ]));

        // حذف القديم
        $solution->features()->delete();

        // إضافة الجديد
        foreach ($request->features as $feature) {
            $solution->features()->create([
                'feature' => $feature
            ]);
        }

        return redirect()->route('scanning.index')->with('success', 'تم التحديث');
    }

    public function destroy($id)
    {
        ScanningSolution::findOrFail($id)->delete();
        return back()->with('success', 'تم الحذف');
    }
}
