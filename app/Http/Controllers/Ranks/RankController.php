<?php

namespace App\Http\Controllers\Ranks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\RankRepositoryInterface;

class RankController extends Controller
{
    

    protected $Rank;

    public function __construct(RankRepositoryInterface $Rank)
    {
        $this->Rank = $Rank;
    }

    public function index()
    {
       return $this->Rank->getAllRanks();
    
    }

    
    public function create()
    {
       return  $this->Rank->createRanks();
    }

    
    public function store(Request $request)
    {
        return $this->Rank->storeRanks($request);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        
        return $this->Rank->editRanks($id);
    }
    
    
    public function update(Request $request)
    {
        return $this->Rank->updateRanks($request);
        
    }

   
    public function destroy(Request $request)
    {
        return $this->Rank->destroyRanks($request);
    }
}
