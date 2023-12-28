<?php

namespace App\Domain\Employee\Services;

use App\Domain\Employee\Services\Interfaces\EmployeeServiceInterface;
use App\Domain\Employee\Repositories\EmployeeRepository;

use Illuminate\Http\Request;
use DB;

class EmployeeService implements EmployeeServiceInterface
{
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->EmployeeRepository = $employeeRepository;
    }

    public function getAllEmployee(Request $request)
    {
        try {
            $employees = $this->EmployeeRepository->queryGetAllEmployee($request);

            return [
                'employees'      => $employees,
                'status'    => 1,
                'message'   => ''
            ];
        } catch (\Throwable $th) {
            return [
                'status'    => 0,
                'message'   => $th
            ];
        }
    }

    public function storeEmployee(Request $request)
    {
        try {
            $this->EmployeeRepository->queryStoreEmployee($request);

            return [
                'status'    => 1,
                'message'   => ''
            ];
        } catch (\Throwable $th) {
            return [
                'status'    => 0,
                'message'   => $th
            ];
        }
    }

    public function getEmployee(int $id)
    {
        try {
            $employee = $this->EmployeeRepository->queryGetEmployee($id);

            return [
                'employee'      => $employee,
                'status'    => 1,
                'message'   => ''
            ];
        } catch (\Throwable $th) {
            return [
                'status'    => 0,
                'message'   => $th
            ];
        }
    }

    public function updateEmployee(Request $request, int $id)
    {
        try {
            $this->EmployeeRepository->queryUpdateEmployee($request, $id);

            return [
                'status'    => 1,
                'message'   => 'Data berhasil diubah'
            ];
        } catch (\Throwable $th) {
            return [
                'status'    => 0,
                'message'   => $th
            ];
        }
    }

    public function deleteEmployee(int $int)
    {
        try {
            $this->EmployeeRepository->queryDeleteEmployee($id);

            return [
                'status'    => 1,
                'message'   => 'Data berhasil dihapus'
            ];
        } catch (\Throwable $th) {
            return [
                'status'    => 0,
                'message'   => $th
            ];
        }
    }
}