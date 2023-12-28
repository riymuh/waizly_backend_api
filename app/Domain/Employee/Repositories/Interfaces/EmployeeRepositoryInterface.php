<?php

namespace App\Domain\Employee\Repositories\Interfaces;

use Illuminate\Http\Request;

interface EmployeeRepositoryInterface
{
    public function queryGetAllEmployee(Request $request);
    public function queryGetEmployee(int $id);
    public function queryStoreEmployee(Request $request);
    public function queryUpdateEmployee(Request $request, int $id);
    public function queryDeleteEmployee(int $id);
}