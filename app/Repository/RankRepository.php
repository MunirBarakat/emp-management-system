<?php
namespace App\Repository;
use Exception;
use App\Models\Rank;
use Illuminate\View\View;
use App\Repository\RankRepositoryInterface;

class RankRepository implements RankRepositoryInterface{

    public function getAllRanks(){
       
       $Ranks=Rank::all();
       return view('pages.Ranks.ShowRank',compact('Ranks'));
       
    }

    public function createRanks(){
       
       return view('pages.Ranks.create');
       
    }

    public function storeRanks($request){
 
        try {

       $Ranks=new Rank();
       $Ranks->Name=$request->Name;
       $Ranks->save();
       toastr()->success(trans('message_trans.success'));
       return redirect()->route('Rank.index');

        }
         catch (Exception $e) {
             
            return redirect()->back()->with(['error'=>$e->getMessage()]);
        }     
       
    }
    
    public function editRanks($id){

        $Ranks=Rank::findOrFail($id);
    
        return view('pages.Ranks.Edit',compact('Ranks'));
    
        }

        public function updateRanks($request)
        {

        try {
            $Ranks = Rank::findOrFail($request->id);
            $Ranks->Name = $request->Name;
            
            $Ranks->save();
            toastr()->success(trans('message_trans.Update'));
            return redirect()->route('Rank.index');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
    
    public function destroyRanks($request){

    Rank::findOrFail($request->id)->delete();
    toastr()->error(trans('message_trans.delete'));
    return redirect()->route('Rank.index');
    }

}
