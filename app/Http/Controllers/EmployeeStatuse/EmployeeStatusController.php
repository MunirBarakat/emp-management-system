<?php

namespace App\Http\Controllers\EmployeeStatuse;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\‏‏‏‏‏‏EmployeeStatusRepositoryInterface;

class EmployeeStatusController extends Controller
{
    protected $EmpStatus;

    public function __construct(‏‏‏‏‏‏EmployeeStatusRepositoryInterface $EmpStatus)
    {
        $this->EmpStatus = $EmpStatus;
    }

    public function index()
    {
        return $this->EmpStatus->getEmpStutus();
    }

    
    public function create()
    {
        return $this->EmpStatus->createEmpStutus();
    }

    
    public function store(Request $request)
    {
        return $this->EmpStatus->storeEmpStutus($request);
    }

    
    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        return $this->EmpStatus->editEmpStutus($id);
    }

   
    public function update(Request $request)
    {
        return $this->EmpStatus->updateEmpStutus($request);
    }

    
    public function destroy(Request $request)
    {
       
       return $this->EmpStatus->destroyEmpStutus($request);
    }
}
