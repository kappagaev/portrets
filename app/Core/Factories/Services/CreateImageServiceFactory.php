<?php

namespace App\Core\Factories\Services;

use App\Core\Services\Image\CreateImageService;
use App\Core\Services\Image\Strategies\StratchImageFormater;

class CreateImageServiceFactory
{
	public static function create($mode)
	{
		switch ($mode) {
			case 'stratch':
				$strategy = new StratchImageFormater;
				break;
			
			default:
				$strategy = new StratchImageFormater;
				break;
		}

		$service = new CreateImageService($strategy);

		return $service;
	}
}