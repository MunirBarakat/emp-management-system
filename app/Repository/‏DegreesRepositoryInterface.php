<?php

namespace App\Repository;



interface ‏DegreesRepositoryInterface{

    public function getDegrees();
    public function editDegrees($id);
    public function destroyDegrees($request);
    public function createDegrees();
    public function storeDegrees($request);
    public function updateDegrees($request);
    
    
}