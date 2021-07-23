<?php

namespace App\Repository;



interface ‏‏‏‏WorkNaturesRepositoryInterface{

    public function getWorkNature();
    public function editWorkNature($id);
    public function destroyWorkNature($request);
    public function createWorkNature();
    public function storeWorkNature($request);
    public function updateWorkNature($request);
    
}