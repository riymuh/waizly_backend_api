<?php

namespace App\Domain\Employee\Services\Interfaces;

use Illuminate\Http\Request;

interface EmployeeServiceInterface
{
    public function getAllEmployee(Request $request);
    public function storeEmployee(Request $request);
    public function getEmployee(int $id);
    public function updateEmployee(Request $request, int $id);
    public function deleteEmployee(int $int);
}