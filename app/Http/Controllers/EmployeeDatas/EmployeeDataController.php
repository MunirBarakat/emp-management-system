<?php

namespace App\Http\Controllers\EmployeeDatas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeesRequest;
use App\Models\EmployeeData;
use App\Repository\‏‏‏‏‏‏EmployeesRepositoryInterface;

class EmployeeDataController extends Controller
{
    

    protected $Employee;

    public function __construct(‏‏‏‏‏‏EmployeesRepositoryInterface $Employee)
    {
        $this->Employee = $Employee;
    }

    public function index()
    {
        return $this->Employee->get_Employee();
    }

    
    public function create()
    {
       return $this->Employee->Employee_create();
    }

    
    public function store(StoreEmployeesRequest $request)
    {
       return $this->Employee->Employee_Store($request);
    }

    
    public function show($id)
    {
        return $this->Employee->Employee_show($id);
    }

    
    public function edit($id)
    {
        return $this->Employee->Employee_edit($id);
    }

    
    public function update(StoreEmployeesRequest $request)
    {
        return $this->Employee->Employee_update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Employee->Employee_destroy($request);
    }

    public function uploade_attachment(Request $request)
    {
       return $this->Employee->uploade_attachment($request);
    }

    public function Download_attachment($CardNumber,$filename)
    {
        return $this->Employee->Download_attachment($CardNumber,$filename);
    }
    
    public function Delete_attachment(Request $request)
    {
        return $this->Employee->Delete_attachment($request);
    }

}
