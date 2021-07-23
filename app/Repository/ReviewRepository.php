<?php
namespace App\Repository;

use Exception;
use App\Models\Review;
use Illuminate\View\View;
use App\Repository\ReviewRepositoryInterface;







class ReviewRepository implements ReviewRepositoryInterface{

    public function getReviewsAll(){
       $Review=Review::all();
       return view('pages.Reviews.ShowReviews',compact('Review'));
      
        
     }

    public function createReviews(){
       
       return view('pages.Reviews.create');
      
        
     }

    public function editReviews($id){
       
        $Reviews=Review::findOrFail($id);
       return view('pages.Reviews.Edit',compact('Reviews'));
      
        
     }

    public function storeReviews($request){
       
        try {

            $Reviews=new Review();
            $Reviews->Type=$request->Type;
            $Reviews->Notes=$request->Notes;
            $Reviews->save();
            toastr()->success(trans('message_trans.success'));
            return redirect()->route('Reviews.index');
     
             }
              catch (Exception $e) {
                  
                 return redirect()->back()->with(['error'=>$e->getMessage()]);
             }     
     
        
     }
    public function updateReviews($request){
       
        try {

            $Reviews=Review::findOrFail($request->id);
            $Reviews->Type=$request->Type;
            $Reviews->Notes=$request->Notes;
            $Reviews->save();
            toastr()->success(trans('message_trans.success'));
            return redirect()->route('Reviews.index');
     
             }
              catch (Exception $e) {
                  
                 return redirect()->back()->with(['error'=>$e->getMessage()]);
             }     
     
        
     }
    public function destroyReviews($request){
       
        Review::findOrFail($request->id)->delete();
    toastr()->error(trans('message_trans.delete'));
    return redirect()->route('Reviews.index');

     
        
     }

   

}
