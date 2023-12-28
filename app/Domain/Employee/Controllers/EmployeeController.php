<?php

namespace App\Domain\Employee\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Cache;

use App\Domain\Employee\Services\EmployeeService;

class EmployeeController extends Controller
{
    private $EmployeeService;

    public function __construct(EmployeeService $EmployeeService)
    {
        $this->EmployeeService = $EmployeeService;
    }

    public function getAllEmployee(Request $request)
    {
        $data = $this->EmployeeService->getAllEmployee($request);

        if($data['status'] == 1)
        {
            return response()->json($data, 200);
        }else{
            return response()->json($data, 500);
        }
    }

    public function storeEmployee(Request $request)
    {
        $data = $this->EmployeeService->storeEmployee($request);

        if($data['status'] == 1)
        {
            return response()->json($data, 201);
        }else{
            return response()->json($data, 500);
        }
    }

    public function getEmployee(int $id)
    {
        $data = $this->EmployeeService->getEmployee($id);

        if($data['status'] == 1)
        {
            return response()->json($data, 200);
        }else{
            return response()->json($data, 500);
        }
    }

    public function updateEmployee(Request $request, int $id)
    {
        $data = $this->EmployeeService->updateEmployee($request, $id);

        if($data['status'] == 1)
        {
            return response()->json($data, 201);
        }else{
            return response()->json($data, 500);
        }
    }

    public function deleteEmployee(int $id)
    {
        $data = $this->EmployeeService->deleteEmployee($id);

        if($data['status'] == 1)
        {
            return response()->json($data, 200);
        }else{
            return response()->json($data, 500);
        }
    }
}