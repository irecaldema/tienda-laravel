<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
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
				'name' 			=> 'ZX 700',
				'slug' 			=> 'adidas-1',
				'description' 	=> 'Material exterior:Piel/tejido sintético
									Material interior:Tela
									Plantilla:Tela
									Suela:Fibra sintética
									Grosor del relleno:Relleno contra el frío
									Tecnología plantilla:OrthoLite',
				'extract' 		=> 'Zapatillas adidas.',
				'price' 		=> 99.95,
				'image' 		=> '/uploads/img/adidas_1.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'NMD_R1',
				'slug' 			=> 'adidas-2',
				'description' 	=> 'Material exterior:Tela/tejido sintético
									Material interior:Tela
									Plantilla:Tela
									Suela:Fibra sintética
									Grosor del relleno:Relleno contra el frío
									Material/composición:Malla',
				'extract' 		=> 'Zapatillas adidas.',
				'price' 		=> 149.95,
				'image' 		=> '/uploads/img/adidas_2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'GAZELLE',
				'slug' 			=> 'adidas-3',
				'description' 	=> 'Material exterior:Piel/piel de imitación
									Material interior:Cuero de imitación/tela
									Plantilla:Tela
									Suela:Fibra sintética
									Grosor del relleno:Relleno contra el frío',
				'extract' 		=> 'Zapatillas adidas.',
				'price' 		=> 99.95,
				'image' 		=> '/uploads/img/adidas_3.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'AIR PRESTO ULTRA BR',
				'slug' 			=> 'nike-1',
				'description' 	=> 'Material exterior:Fibra sintética/tela
									Material interior:Tela
									Plantilla:Tela
									Suela:Fibra sintética
									Grosor del relleno:Relleno contra el frío',
				'extract' 		=> 'Zapatillas nike',
				'price' 		=> 129.95,
				'image' 		=> '/uploads/img/nike_1.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'AIR MAX ESSENTIAL',
				'slug' 			=> 'nike-2',
				'description' 	=> 'Material exterior:Tela/tejido sintético
									Material interior:Tela
									Plantilla:Tela
									Suela:Fibra sintética
									Grosor del relleno:Relleno contra el frío',
				'extract' 		=> 'Zapatillas nike',
				'price' 		=> 139.95,
				'image' 		=> '/uploads/img/nike_2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'BRUIN HYPERFEEL',
				'slug' 			=> 'nike-3',
				'description' 	=> 'Material exterior:Tela/tejido sintético
									Material interior:Tela
									Plantilla:Tela
									Suela:Fibra sintética
									Grosor del relleno:Relleno contra el frío',
				'extract' 		=> 'Zapatillas nike',
				'price' 		=> 94.95,
				'image' 		=> '/uploads/img/nike_3.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'TRIGENIC FLEX',
				'slug' 			=> 'clarks-1',
				'description' 	=> 'Material exterior:Piel
									Material interior:Combinación de piel/tela
									Plantilla:Cuero
									Suela:Goma antirroce',
				'extract' 		=> 'Zapatillas clarks.',
				'price' 		=> 149.95,
				'image' 		=> '/uploads/img/clarks_1.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],
			[
				'name' 			=> 'Clarks',
				'slug' 			=> 'clarks-2',
				'description' 	=> 'Caracteristicas del profducto.',
				'extract' 		=> 'Zapatillas clarks.',
				'price' 		=> 89.95,
				'image' 		=> '/uploads/img/clarks_2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],
			[
				'name' 			=> 'ORSON ROW',
				'slug' 			=> 'clarks-3',
				'description' 	=> 'Material exterior:Nubuc/tela
									Material interior:Tela
									Plantilla:Tela
									Suela:Goma antirroce
									Grosor del relleno:Relleno contra el frío',
				'extract' 		=> 'Zapatillas clarks.',
				'price' 		=> 109.95,
				'image' 		=> '/uploads/img/clarks_3.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			]			
		);

		Product::insert($data);
    }
}
