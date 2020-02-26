<?php

namespace App\Repositories;

use App\Writer as Model;

class WriterRepository extends EloquentBaseRepository
{
	public function getModelClass()
	{
		return Model::class;
	}

	public function getSimilarRand($writer, $take = 3)
	{
		$writerCollumns = ['id', 'name', 'surname', 'sex'];

		$writers = $this->start()
						->select($writerCollumns)
						->whereNotIn('id', [$writer['id']])
						->where('sex', $writer['sex'])
						->inRandomOrder()
						->take($take)
						->get();

		return $writers;
	}

	public function get($id)
	{
		$writerCollumns = ['id', 'name', 'surname', 'sex'];

		$writer = $this->start()
						->where('id', $id)
						->select($writerCollumns)
						->first();

		return $writer;
	}

	public function getSelectInputWriters()
	{
		$writerCollumns = ['id', 'name', 'surname'];

		$writers = $this->start()
				->all($writerCollumns);

		return $writers;
	}

	public function save(Model $model)
	{
		return $model->save();
	}
}