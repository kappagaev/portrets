<?php

namespace App\Http\Controllers;

use App\Core\Services\Portret\CreatePortretService;
use App\Core\Services\Portret\PortretAddFormService;
use App\Core\Services\Writer\FetchWriterService;
use App\Http\Requests\PortretStoreRequest;


class PortretController extends Controller
{
	public function getRandPortret(FetchPortretService $fetchPortretService)
	{
		$portret = $fetchPortretService->getRand();

		return $portret;
	}

	public function add(PortretAddFormService $portretAddFormService)
	{
		$formData = $portretAddFormService->getFormData();

		return view('portrets/add', $formData);
	}

	public function store(PortretStoreRequest $request, CreatePortretService $createPortretService)
	{
		$image = $request->file('image');

		$portret = $createPortretService
						->withImage($image)
						->create($request->all());

		return redirect()->back()->with('message', 'IT WORKS!');
	}
}
