<?php
namespace App\Repository;

use Exception;
use App\Models\Degree;
use Illuminate\View\View;
use App\Repository\‏DegreesRepositoryInterface;






class ‏‏DegreesRepository implements ‏DegreesRepositoryInterface{

    public function getDegrees(){
       $Degree=Degree::all();
       return view('pages.Degrees.ShowDegrees',compact('Degree'));
      
        
     }

    public function createDegrees(){
        
        return view('pages.Degrees.create');
        
     }
    public function editDegrees($id){
        
        $Degree=Degree::findOrFail($id);
    
       return view('pages.Degrees.Edit',compact('Degree'));
        
     }

    public function storeDegrees($request){
       
        
        try {

            $Degree=new Degree();
            $Degree->Name=$request->Name;
            $Degree->Notes=$request->Notes;
            $Degree->save();
            toastr()->success(trans('message_trans.success'));
            return redirect()->route('Degrees.index');
     
             }
              catch (Exception $e) {
                  
                 return redirect()->back()->with(['error'=>$e->getMessage()]);
             }     
            
     

        
     }

    public function updateDegrees($request){
       
        
        try {
            $Degree = Degree::findOrFail($request->id);
            $Degree->Name = $request->Name;
            $Degree->Notes = $request->Notes;
            
            $Degree->save();
            toastr()->success(trans('message_trans.Update'));
            return redirect()->route('Degrees.index');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }


        
     }
    public function destroyDegrees($request){
       
        Degree::findOrFail($request->id)->delete();
    toastr()->error(trans('message_trans.delete'));
    return redirect()->route('Degrees.index');
    }


}
