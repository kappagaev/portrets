<?php

namespace App\Core\Services\Portret;

use App\Core\Factories\Services\CreateImageServiceFactory;
use App\Core\Services\Image\CreateImageService;
use App\Portret;
use App\Repositories\PortretRepository;

class CreatePortretService
{
	protected $portretRep;

	public function __construct()
	{
		$this->portretRep = app(PortretRepository::class);
	}

	private $image;

	public function withImage($image)
	{
		$this->image = $image;

		return $this;
	}

	public function create($data)
	{
		$portret = new Portret($data);

		if ($this->image) {
			$createImageService = CreateImageServiceFactory::create('stratch');
			$portret->image = $createImageService->create($this->image);
		}
		$this->portretRep->save($portret);

        return $portret;
	}
}