<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'الباقة الأساسية',
            'badge' => 'مبتدئ',
            'price' => 0,
            'period' => 'للبدء',
            'description' => 'مثالية للعيادات التي تبدأ رحلتها',
            'is_popular' => false,
        ]);

        Plan::create([
            'name' => 'الباقة الاحترافية',
            'badge' => 'الأكثر شيوعاً',
            'price' => 299,
            'period' => 'شهرياً',
            'description' => 'للعيادات المتقدمة',
            'is_popular' => true,
        ]);

        Plan::create([
            'name' => 'باقة المؤسسات',
            'badge' => 'مؤسسي',
            'price' => null,
            'period' => 'حسب الاحتياج',
            'description' => 'حلول مخصصة للشركات',
            'is_popular' => false,
        ]);
    }
}
