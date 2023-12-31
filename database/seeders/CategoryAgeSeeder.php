<?php

namespace Database\Seeders;

use App\Models\CategoryAge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryAgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_ages')->insert([
            [
                'id' => 1,
                'stage' => '5、6ヶ月(初期)',
                'filename' => 'category_age1.png'
            ],
            [
                'id' => 2,
                'stage' => '7、8ヶ月(中期)',
                'filename' => 'category_age2.png'
            ],
            [
                'id' => 3,
                'stage' => '9~11ヶ月(後期)',
                'filename' => 'category_age3.png'
            ],
        ]);
    }
}