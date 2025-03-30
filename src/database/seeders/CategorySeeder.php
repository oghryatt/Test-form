<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => '商品のお届けについて', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '商品の交換について', 'created_at' => now(), 'updated_at' => now()],
            ['name' => '商品トラブル', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ショップへのお問い合わせ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'その他', 'created_at' => now(), 'updated_at' => now()],
        ];

        Category::insert($categories);
    }
}



