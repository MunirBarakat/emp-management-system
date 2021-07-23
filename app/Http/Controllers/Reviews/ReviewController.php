<?php

namespace App\Http\Controllers\Reviews;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repository\ReviewRepositoryInterface;

class ReviewController extends Controller
{
    

    protected $Review;

    public function __construct(ReviewRepositoryInterface $Review)
    {
        $this->Review = $Review;
    }


    public function index()
    {
        return $this->Review->getReviewsAll();
    }

   
    public function create()
    {
        return $this->Review->createReviews();
    }

    
    public function store(Request $request)
    {
        return $this->Review->storeReviews($request);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        return $this->Review->editReviews($id);
    }

    
    public function update(Request $request)
    {
       return $this->Review->updateReviews($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Review->destroyReviews($request);
    }
}
