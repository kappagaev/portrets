<?php

namespace App\Repositories;

class ImageRepository
{
	public function save($name, $image)
	{
		$image = $image->save(public_path('images/' .$name));
		return $image;
	}
}