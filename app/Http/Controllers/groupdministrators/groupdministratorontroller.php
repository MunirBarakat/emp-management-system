<?php

namespace App\Http\Controllers\groupdministrators;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\GroupAdministratorRepositoryInterface;

class groupdministratorontroller extends Controller
{
    

    protected $GroupAdm;

    public function __construct(GroupAdministratorRepositoryInterface $GroupAdm)
    {
        $this->GroupAdm = $GroupAdm;
    }
    public function index()
    {
        return $this->GroupAdm->getGroupAdministrator();
    }

    
    public function create()
    {
        return $this->GroupAdm->createGroupAdministrator();
    }

    
    public function store(Request $request)
    {
        return $this->GroupAdm->storeGroupAdministrator($request);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        return $this->GroupAdm->editGroupAdministrator($id);
    }

    
    public function update(Request $request)
    {
        return $this->GroupAdm->updateGroupAdministrator($request);
    }

    
   
    public function destroy(Request $request)
    {
        return $this->GroupAdm->destroyGroupAdministrator($request);
    }
}
