<?php

namespace App\Repositories;

abstract class EloquentBaseRepository 
{
	protected $model;

	public function __construct()
	{
		$this->model = app($this->getModelClass());
	}

	abstract public function getModelClass();

	public function start()
	{
		return clone $this->model;
	}
}