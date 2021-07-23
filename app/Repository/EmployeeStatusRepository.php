<?php
namespace App\Repository;

use Exception;

use Illuminate\View\View;

use App\Models\EmployeeStatus;
use App\Repository\‏‏‏‏‏‏EmployeeStatusRepositoryInterface;



class EmployeeStatusRepository implements ‏‏‏‏‏‏EmployeeStatusRepositoryInterface{

    public function getEmpStutus(){
       $EmpStatus=EmployeeStatus::all();
       return view('pages.EmployeeStatus.ShowEmployeeStatus',compact('EmpStatus'));
      
        
     }

    public function createEmpStutus(){
        
        return view('pages.EmployeeStatus.create');
        
     }
    public function editEmpStutus($id){
        
        $EmpStatus=EmployeeStatus::findOrFail($id);
    
       return view('pages.EmployeeStatus.Edit',compact('EmpStatus'));
        
     }

    public function storeEmpStutus($request){
       
        
        try {

            $EmpStatus=new EmployeeStatus();
            $EmpStatus->EmpStatus=$request->EmpStatus;
            $EmpStatus->Notes=$request->Notes;
            $EmpStatus->save();
            toastr()->success(trans('message_trans.success'));
            return redirect()->route('empStatus.index');
     
             }
              catch (Exception $e) {
                  
                 return redirect()->back()->with(['error'=>$e->getMessage()]);
             }     
            
     

        
     }

    public function updateEmpStutus($request){
       
        
        try {
            $EmpStatus = EmployeeStatus::findOrFail($request->id);
            $EmpStatus->EmpStatus = $request->EmpStatus;
            $EmpStatus->Notes = $request->Notes;
            
            $EmpStatus->save();
            toastr()->success(trans('message_trans.Update'));
            return redirect()->route('empStatus.index');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }


        
     }
    public function destroyEmpStutus($request){
       
        EmployeeStatus::findOrFail($request->id)->delete();
    toastr()->error(trans('message_trans.delete'));
    return redirect()->route('empStatus.index');
    }


}
