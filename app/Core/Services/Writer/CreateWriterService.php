<?php

namespace App\Core\Services\Writer;

use App\Core\Services\Portret\CreatePortretService;
use App\Repositories\WriterRepository;
use App\Writer;

class CreateWriterService extends BaseWriterService 
{
	public $writerRep;

	public function __construct()
	{
		$this->writerRep = app(WriterRepository::class);
	} 

	private $portret;

	public function withPortret($file)
	{
		$this->portret = $file;

		return $this;
	}

	public function create($data)
	{
		$writer = new Writer($data);
    
       	$this->writerRep->save($writer);

       	if ($this->portret) {
			$portret = app(CreatePortretService::class)
					->withImage($this->portret)
					->create([
						'writer_id' => $writer->id,
					]);
		}

        return $writer;
	}
}