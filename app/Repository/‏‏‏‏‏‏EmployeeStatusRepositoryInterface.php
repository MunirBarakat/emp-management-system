<?php

namespace App\Repository;



interface ‏‏‏‏‏‏EmployeeStatusRepositoryInterface{

    public function getEmpStutus();
    public function editEmpStutus($id);
    public function destroyEmpStutus($request);
    public function createEmpStutus();
    public function storeEmpStutus($request);
    public function updateEmpStutus($request);
    
}