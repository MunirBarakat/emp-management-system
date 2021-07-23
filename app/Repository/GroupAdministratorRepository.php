<?php
namespace App\Repository;

use App\models\groupdministrator;
use Exception;
use Illuminate\View\View;
use App\Repository\GroupAdministratorRepositoryInterface;

class GroupAdministratorRepository implements GroupAdministratorRepositoryInterface{

    public function getGroupAdministrator(){
        $getGroupAdms=groupdministrator::all();
        return view('pages.GroupAdministrators.ShowGroups',compact('getGroupAdms'));
        
     }

    public function editGroupAdministrator($id){
        $getGroupAdms=groupdministrator::findOrFail($id);
        return view('pages.GroupAdministrators.Edit',compact('getGroupAdms'));
        
     }
   
     public function updateGroupAdministrator($request){
       
        try {
            $getGroupAdms = groupdministrator::findOrFail($request->id);
            $getGroupAdms->Name = $request->Name;
            $getGroupAdms->Notes = $request->Notes;
            
            $getGroupAdms->save();
            toastr()->success(trans('message_trans.Update'));
            return redirect()->route('groups.index');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        
     }
     public function storeGroupAdministrator($request){
       
        try {

            $getGroupAdms=new groupdministrator();
            $getGroupAdms->Name=$request->Name;
            $getGroupAdms->Notes=$request->Notes;
            $getGroupAdms->save();
            toastr()->success(trans('message_trans.success'));
            return redirect()->route('groups.index');
     
             }
              catch (Exception $e) {
                  
                 return redirect()->back()->with(['error'=>$e->getMessage()]);
             }     
            
     
        
     }

     public function createGroupAdministrator(){
       
        return view('pages.GroupAdministrators.create');
        
     }

     public function destroyGroupAdministrator($request){
        groupdministrator::findOrFail($request->id)->delete();
        toastr()->error(trans('message_trans.delete'));
        return redirect()->route('groups.index');
        }
}
