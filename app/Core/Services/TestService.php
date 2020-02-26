<?php

namespace App\Core\Services;

use App\Repositories\PortretRepository;
use App\Repositories\WriterRepository;

class TestService
{
	private $portretRep;

	private $writerRep;

	public function __construct()
	{
		$this->portretRep = app(PortretRepository::class);
		$this->writerRep = app(WriterRepository::class);
	}

	public function getPortretTest()
	{
    	$portret = $this->portretRep->getRand();

        $rightWriter = $this->writerRep->get($portret->writer_id);
		$writers = $this->writerRep->getSimilarRand($rightWriter);

		$writers = $writers->push($rightWriter)->shuffle();

    	$result = [
    		'portret' => $portret,

    		'writers' => $writers
    	];

    	return $result;
	}
}