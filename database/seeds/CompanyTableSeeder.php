<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::create([
            'name' => 'شركة الشهد',
            'description' => 'شركة عزل اسطح فوم متخصصون في كافة خدمات العزل للاسطح المباني والخزانات والمسابح والحمامات باحدث التقنيات. شركة الوئام لجمبع انواع عزل الأسطح وخزانات المياه الشركة الاكثر تطورا بالمملكة في خدمات عزل الفوم',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com/B6J6rbZmVRYYDrl',
            'phone' => '538069369'
        ]);
    }
}
