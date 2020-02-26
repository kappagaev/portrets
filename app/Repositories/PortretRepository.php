<?php

namespace App\Repositories;

use App\Portret as Model;

class PortretRepository extends EloquentBaseRepository
{
	public function getModelClass()
	{
		return Model::class;
	}

	public function getRand()
	{
		$portretCollumns = ['id', 'writer_id', 'image'];
		$portret = $this->start()
					->select($portretCollumns)
					->inRandomOrder()->first();

		return $portret;
	}
	public function save(Model $model)
	{
		return $model->save();
	}
}