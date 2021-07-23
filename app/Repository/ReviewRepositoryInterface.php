<?php

namespace App\Repository;



interface ReviewRepositoryInterface{

    public function getReviewsAll();
    public function createReviews();
    public function storeReviews($request);
    public function editReviews($id);
    public function updateReviews($request);
    public function destroyReviews($id);
    
}