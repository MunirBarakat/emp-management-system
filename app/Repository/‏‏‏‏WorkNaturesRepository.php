<?php
namespace App\Repository;

use Exception;

use Illuminate\View\View;
use App\Models\WorkNature;
use App\Repository\‏‏‏‏WorkNaturesRepositoryInterface;







class ‏‏‏‏WorkNaturesRepository implements ‏‏‏‏WorkNaturesRepositoryInterface{

    public function getWorkNature(){
       $WorkNature=WorkNature::all();
       return view('pages.WorkNatures.ShowWorkNatures',compact('WorkNature'));
      
        
     }

    public function createWorkNature(){
        
        return view('pages.WorkNatures.create');
        
     }
    public function editWorkNature($id){
        
        $WorkNature=WorkNature::findOrFail($id);
    
       return view('pages.WorkNatures.Edit',compact('WorkNature'));
        
     }

    public function storeWorkNature($request){
       
        
        try {

            $WorkNature=new WorkNature();
            $WorkNature->WorkNature=$request->WorkNature;
            $WorkNature->Notes=$request->Notes;
            $WorkNature->save();
            toastr()->success(trans('message_trans.success'));
            return redirect()->route('WorkNatures.index');
     
             }
              catch (Exception $e) {
                  
                 return redirect()->back()->with(['error'=>$e->getMessage()]);
             }     
            
     

        
     }

    public function updateWorkNature($request){
       
        
        try {
            $WorkNature = WorkNature::findOrFail($request->id);
            $WorkNature->WorkNature = $request->WorkNature;
            $WorkNature->Notes = $request->Notes;
            
            $WorkNature->save();
            toastr()->success(trans('message_trans.Update'));
            return redirect()->route('WorkNatures.index');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }


        
     }
    public function destroyWorkNature($request){
       
        WorkNature::findOrFail($request->id)->delete();
    toastr()->error(trans('message_trans.delete'));
    return redirect()->route('WorkNatures.index');
    }


}
