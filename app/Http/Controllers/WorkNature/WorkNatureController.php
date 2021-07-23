<?php

namespace App\Http\Controllers\WorkNature;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\‏‏‏‏WorkNaturesRepositoryInterface;

class WorkNatureController extends Controller
{
    
    protected $WorkNature;

    public function __construct(‏‏‏‏WorkNaturesRepositoryInterface $WorkNature)
    {
        $this->WorkNature = $WorkNature;
    }

    public function index()
    {
        return $this->WorkNature->getWorkNature();
    }

    
    public function create()
    {
        return $this->WorkNature->createWorkNature();
    }

    
    public function store(Request $request)
    {
        return $this->WorkNature->storeWorkNature($request);
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        return $this->WorkNature->editWorkNature($id);
    }

    
    public function update(Request $request)
    {
       return $this->WorkNature->updateWorkNature($request);
        
    }


    
    public function destroy(Request $request)
    {
        return $this->WorkNature->destroyWorkNature($request);
    }
}
