<?php

namespace App\Core\Services\Portret;

class PortretAddFormService
{
	private $writerRep;

	public function __construct()
	{
		$this->writerRep = app(WriterRepository::class);
	}

	public function getFormData()
	{
		$writers = $this->writerRep->getSelectInputWriters();

		$result = [
			'writers' => $writers
		];

		return $result;
	}
}