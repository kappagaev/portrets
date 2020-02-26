<?php

namespace App\Core\Services\Image;

use App\Core\Services\Image\Strategies\ImageFormaterStrategyInterface;
use App\Repositories\ImageRepository;

class CreateImageService
{
	protected $imageRep;

	protected $imageFormaterStrategy;

	public function __construct(ImageFormaterStrategyInterface $imageFormaterStrategy)
	{
		$this->imageFormaterStrategy = $imageFormaterStrategy;
		$this->imageRep = app(ImageRepository::class);
	}

	public function setWidth(int $width)
	{
		$this->imageFormaterStrategy->setHeight($width);
		
		return $this;		
	}

	public function setHeight(int $height)
	{
		$this->imageFormaterStrategy->setHeight($height);
		
		return $this;
	}

	public function create($file)
	{
		$image = $this->imageFormaterStrategy->format($file->getRealPath());
	    $name = time().'.'. $file->getClientOriginalExtension();

	    $image = $this->imageRep->save($name, $image);

	    return $name;
	}
}