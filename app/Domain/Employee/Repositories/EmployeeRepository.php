<?php

namespace App\Domain\Employee\Repositories;

use App\Domain\Employee\Repositories\Interfaces\EmployeeRepositoryInterface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Artisan;

use App\Domain\Employee\Models\Employee;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function queryGetAllEmployee(Request $request)
    {
        try {
            $data = Employee::all();

            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function queryGetEmployee(int $id)
    {
        try {
            $data = Employee::find($id);

            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function queryStoreEmployee(Request $request)
    {
        try {
            $data = new Employee();
            $data->name         = $request->name;
            $data->job_title    = $request->job_title;
            $data->salary       = $request->salary;

            $data->save();

            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function queryUpdateEmployee(Request $request, int $id)
    {
        try {
            $data               = Employee::find($id);
            $data->name         = $request->name;
            $data->job_title    = $request->job_title;
            $data->salary       = $request->salary;

            $data->save();
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function queryDeleteEmployee(int $id)
    {
        try {
            $data = Employee::find($id);
            $data->delete();

        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
}