<?php

namespace App\Core\Services\Image\Strategies;

use Image;

class StratchImageFormater implements ImageFormaterStrategyInterface
{
	private $width = 228; 

	private $height = 300;

	public function setWidth(int $width)
	{
		$this->width = $width;
	}

	public function setHeight(int $height)
	{
		$this->height = $height;
	}

	public function format($pathToFile)
	{
		$image = Image::make($pathToFile);              
	    $image->resize($this->width, $this->height);

	    return $image;
	}
}