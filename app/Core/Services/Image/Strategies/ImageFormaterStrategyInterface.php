<?php

namespace App\Core\Services\Image\Strategies;

interface ImageFormaterStrategyInterface
{
	public function setWidth(int $width);

	public function setHeight(int $height);

	public function format($pathToFile);
}		