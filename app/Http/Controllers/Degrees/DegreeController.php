<?php

namespace App\Http\Controllers\Degrees;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\‏DegreesRepositoryInterface;


class DegreeController extends Controller
{
    
    protected $Degree;

    public function __construct(‏DegreesRepositoryInterface $Degree)
    {
        $this->Degree = $Degree;
    }


    public function index()
    {
        return $this->Degree->getDegrees();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->Degree->createDegrees();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->Degree->storeDegrees($request);

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->Degree->editDegrees($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return $this->Degree->updateDegrees($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return $this->Degree->destroyDegrees($request);
    }
}
