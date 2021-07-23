<?php

namespace App\Repository;



interface GroupAdministratorRepositoryInterface{

    public function getGroupAdministrator();
    public function editGroupAdministrator($id);
    public function updateGroupAdministrator($id);
    public function destroyGroupAdministrator($request);
    public function createGroupAdministrator();
    public function storeGroupAdministrator($request);
    
}