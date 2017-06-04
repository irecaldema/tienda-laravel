<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$data = array(
			[
				'name' => 'Adidas', 
				'slug' => 'adidas', 
				'description' => 'Impossible is nothing', 
				'color' => '#e0060a'
			],
			[
				'name' => 'Nike', 
				'slug' => 'nike', 
				'description' => 'Just Do It', 
				'color' => '#009b07'
			],
			[
				'name' => 'Clarks', 
				'slug' => 'geek', 
				'description' => 'Devolución hasta 60 días', 
				'color' => '#023e8c'
			]
		);

		Category::insert($data);
    }
}
