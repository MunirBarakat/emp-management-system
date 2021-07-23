<?php

namespace App\Repository;



interface RankRepositoryInterface{

    // all function 
    public function getAllRanks();
    public function createRanks();
    public function storeRanks($request);
    public function destroyRanks($request);
    public function editRanks($id);
    public function updateRanks($id);
}