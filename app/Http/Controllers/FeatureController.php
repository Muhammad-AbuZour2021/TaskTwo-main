<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\PlanFeature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    // عرض المميزات
    public function index()
    {
        $features = PlanFeature::with('plan')->latest()->get();
        return view('Admin.features.index', compact('features'));
    }

    // صفحة إضافة
    public function create()
    {
        $plans = Plan::all();
        return view('Admin.features.create', compact('plans'));
    }

    // حفظ
    public function store(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id',
            'name' => 'required',
        ]);

        PlanFeature::create([
            'plan_id' => $request->plan_id,
            'feature' => $request->name,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('features.index')
            ->with('success', 'تم إضافة الميزة');
    }

    // تعديل
    public function edit($id)
    {
        $feature = PlanFeature::findOrFail($id);
        $plans = Plan::all();

        return view('Admin.features.edit', compact('feature', 'plans'));
    }

    // تحديث
    public function update(Request $request, $id)
    {
        $feature = PlanFeature::findOrFail($id);

        $request->validate([
            'plan_id' => 'required|exists:plans,id',
            'name' => 'required',
        ]);

        $feature->update([
            'plan_id' => $request->plan_id,
            'feature' => $request->name,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('features.index')
            ->with('success', 'تم التحديث بنجاح');
    }

    // حذف
    public function destroy($id)
    {
        PlanFeature::findOrFail($id)->delete();

        return back()->with('success', 'تم الحذف');
    }
}
