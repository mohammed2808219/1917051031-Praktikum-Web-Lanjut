<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
	public function run()
	{
			$model = model('PostModel');
			$kategori =['natural','cat','lifestyle','technology','programming','sport'];
			for($i = 0; $i < 6; $i++){
			$model->insert([
					'email'      	=> static::faker()->sentence(3),
					'slug' 			=> static::faker()->unique()->slug(3),
					'author'      	=> static::faker()->name(),
					'kategori'      => $kategori[$i],
					'deskripsi'     => static::faker()->text(),

			]);
		}
	}
}
