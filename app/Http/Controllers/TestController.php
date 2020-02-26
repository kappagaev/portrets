<?php

namespace App\Http\Controllers;

use App\Core\Services\TestService;

class TestController extends Controller
{	
    public function getTest(TestService $testService)
    {
        $test = $testService->getPortretTest();

    	return response()->json($result, 200);
    }
}
