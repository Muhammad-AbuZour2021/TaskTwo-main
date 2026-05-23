<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
   // عرض جميع الباقات
    public function index()
    {
        $plans = Plan::latest()->get();
        return view('Admin.plans.index', compact('plans'));
    }

    // صفحة إضافة باقة
    public function create()
    {
        return view('Admin.plans.create');
    }

    // حفظ باقة جديدة
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'badge' => 'nullable',
            'price' => 'nullable|numeric',
            'period' => 'nullable',
            'description' => 'nullable',
        ]);

        Plan::create([
            'name' => $request->name,
            'badge' => $request->badge,
            'price' => $request->price,
            'period' => $request->period,
            'description' => $request->description,
            'is_popular' => $request->has('is_popular'),
        ]);

        return redirect()->route('plans.index')
            ->with('success', 'تم إضافة الباقة بنجاح');
    }

    // صفحة تعديل
    public function edit($id)
    {
        $plan = Plan::findOrFail($id);
        return view('Admin.plans.edit', compact('plan'));
    }

    // تحديث البيانات
    public function update(Request $request, $id)
    {
        $plan = Plan::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'badge' => 'nullable',
            'price' => 'nullable|numeric',
            'period' => 'nullable',
            'description' => 'nullable',
        ]);

        $plan->update([
            'name' => $request->name,
            'badge' => $request->badge,
            'price' => $request->price,
            'period' => $request->period,
            'description' => $request->description,
            'is_popular' => $request->has('is_popular'),
        ]);

        return redirect()->route('plans.index')
            ->with('success', 'تم تحديث الباقة بنجاح');
    }

    // حذف
    public function destroy($id)
    {
        Plan::findOrFail($id)->delete();

        return redirect()->route('plans.index')
            ->with('success', 'تم حذف الباقة');
    }
}
