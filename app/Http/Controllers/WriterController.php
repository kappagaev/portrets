<?php

namespace App\Http\Controllers;

use App\Core\Services\Portret\CreatePortretService;
use App\Core\Services\Writer\CreateWriterService;
use App\Http\Requests\WriterStoreRequest;

class WriterController extends Controller
{
	public function add()
	{
		return view('writers/add');
	}

	public function store(WriterStoreRequest $request, CreateWriterService $createWriterService)
	{
		if ($request->hasFile('image')) {
			$image = $request->file('image');

			$createWriterService->withPortret($image);
		}

		$writer = $createWriterService
						->create($request->input());

		return redirect()->back()->with('message', 'IT WORKS!');
	}
}
