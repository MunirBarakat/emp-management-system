<?php
namespace App\Repository;

use App\Models\Sex;
use App\Models\Rank;
use App\Models\Image;
use App\Models\Degree;
use App\Models\Review;
use App\Models\Religion;
use App\Models\TypeBlood;
use App\Models\WorkNature;
use App\Models\Governorate;
use App\Models\SocialState;
use App\Models\EmployeeData;
use App\Models\EmployeeStatus;
use App\models\groupdministrator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Repository\‏‏‏‏‏‏EmployeesRepositoryInterface;



class ‏‏‏EmployeesRepository implements ‏‏‏‏‏‏EmployeesRepositoryInterface{


    public function get_Employee(){
             
        $Employees=  EmployeeData::all();

        return view('pages.EmployeeDatas.index',compact('Employees'));
    }

    public function Employee_show($id){
        $Employee = EmployeeData::findorfail($id);

        return view('pages.EmployeeDatas.show',compact('Employee'));
    }


    public function Employee_create(){

        $data['Degrees'] = Degree::all();
        $data['EmployeeStatus'] = EmployeeStatus::all();
        $data['Governorates'] = Governorate::all();
        $data['groupdministrators'] = groupdministrator::all();
        $data['Religions'] = Religion::all();
        $data['Reviews'] = Review::all();
        $data['SocialStates'] = SocialState::all();
        $data['TypeBloods'] = TypeBlood::all();
        $data['WorkNatures'] = WorkNature::all();
        $data['Ranks'] = Rank::all();
        $data['Sexes'] = Sex::all();

        return view('pages.EmployeeDatas.add',$data);
        
        // $Degrees = Degree::all();
        // $EmployeeStatus = EmployeeStatus::all();
        // $Governorates = Governorate::all();
        // $groupdministrators = groupdministrator::all();
        // $Religions= Religion::all();
        // $Reviews = Review::all();
        // $SocialStates = SocialState::all();
        // $TypeBloods = TypeBlood::all();
        // $WorkNatures = WorkNature::all();
        // $Ranks = Rank::all();
        // $Sexes = Sex::all();
        
        // return view('pages.EmployeeDatas.add',compact('Degrees','EmployeeStatus','Governorates',
        //                                                 'groupdministrators','Religions','Reviews',
        //                                                 'SocialStates','TypeBloods','WorkNatures',
        //                                                 'Ranks','Sexes'));

    }

    public function Employee_Store($request){


        DB::beginTransaction(); // في حالة خطأ في احدى الجدولين ما ايضيف

try {
    
       $EmployeeData = new EmployeeData();
       $EmployeeData->FinancialNumber          =$request->FinancialNumber;
       $EmployeeData->CardNumber               =$request->CardNumber;
       $EmployeeData->Name                     =$request->Name;
       $EmployeeData->Tel_No1                  =$request->Tel_No1;
       $EmployeeData->Tel_No2                  =$request->Tel_No2;
       $EmployeeData->Address                  =$request->Address;
       $EmployeeData->Notes                    =$request->Notes;
       $EmployeeData->BOD                      =$request->BOD;
       $EmployeeData->RD                       =$request->RD;
       $EmployeeData->TD                       =$request->TD;
       $EmployeeData->Degree_Id                =$request->Degree_Id;
       $EmployeeData->EmployeeStatus_Id        =$request->EmployeeStatus_Id;
       $EmployeeData->Governorate_Id           =$request->Governorate_Id;
       $EmployeeData->groupdministrator_Id     =$request->groupdministrator_Id;
       $EmployeeData->Religion_Id              =$request->Religion_Id;
       $EmployeeData->Review_Id                =$request->Review_Id;
       $EmployeeData->SocialState_Id           =$request->SocialState_Id;
       $EmployeeData->TypeBlood_Id             =$request->TypeBlood_Id;
       $EmployeeData->WorkNature_Id            =$request->WorkNature_Id;
       $EmployeeData->Rank_Id                  =$request->Rank_Id;
       $EmployeeData->Sex_Id                   =$request-> Sex_Id; 
       $EmployeeData->save();


        // insert img
        if($request->hasfile('photos'))
        {
            foreach($request->file('photos') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->storeAs('attachments/Employee/'.$EmployeeData->CardNumber, $file->getClientOriginalName(),'upload_attachments');

                // insert in image_table
                $images= new Image();
                $images->filename=$name;
                $images->imageable_id= $EmployeeData->id;
                $images->imageable_type = 'App\Models\EmployeeData';
                $images->save();
            }
        }
        DB::commit(); // insert data // في حالة البيانات صحيحة في الجدولين  ايضيف
        toastr()->success('تم الحفظ');
       return redirect()->route('Employee.create'); 

    } catch (\Throwable $e)
          {
            DB::rollback(); // // في حالة خطأ في احدى الجدولين ارجع واحدف بيانات الي انضافت في الجدول الاول
              return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }


    }


    public function Employee_edit($id){

        $data['Degrees'] = Degree::all();
        $data['EmployeeStatus'] = EmployeeStatus::all();
        $data['Governorates'] = Governorate::all();
        $data['groupdministrators'] = groupdministrator::all();
        $data['Religions'] = Religion::all();
        $data['Reviews'] = Review::all();
        $data['SocialStates'] = SocialState::all();
        $data['TypeBloods'] = TypeBlood::all();
        $data['WorkNatures'] = WorkNature::all();
        $data['Ranks'] = Rank::all();
        $data['Sexes'] = Sex::all();
        $Employee =  EmployeeData::findOrFail($id);
return view('pages.EmployeeDatas.‏edit',$data,compact('Employee'));

    }

    public function Employee_update($request){

try {
    $EmployeeData = EmployeeData::findorfail($request->id);
    $EmployeeData->FinancialNumber          =$request->FinancialNumber;
    $EmployeeData->CardNumber               =$request->CardNumber;
    $EmployeeData->Name                     =$request->Name;
    $EmployeeData->Tel_No1                  =$request->Tel_No1;
    $EmployeeData->Tel_No2                  =$request->Tel_No2;
    $EmployeeData->Address                  =$request->Address;
    $EmployeeData->Notes                    =$request->Notes;
    $EmployeeData->BOD                      =$request->BOD;
    $EmployeeData->RD                       =$request->RD;
    $EmployeeData->TD                       =$request->TD;
    $EmployeeData->Degree_Id                =$request->Degree_Id;
    $EmployeeData->EmployeeStatus_Id        =$request->EmployeeStatus_Id;
    $EmployeeData->Governorate_Id           =$request->Governorate_Id;
    $EmployeeData->groupdministrator_Id     =$request->groupdministrator_Id;
    $EmployeeData->Religion_Id              =$request->Religion_Id;
    $EmployeeData->Review_Id                =$request->Review_Id;
    $EmployeeData->SocialState_Id           =$request->SocialState_Id;
    $EmployeeData->TypeBlood_Id             =$request->TypeBlood_Id;
    $EmployeeData->WorkNature_Id            =$request->WorkNature_Id;
    $EmployeeData->Rank_Id                  =$request->Rank_Id;
    $EmployeeData->Sex_Id                   =$request-> Sex_Id;

    $EmployeeData->save();
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('Employee.index');

} catch (\Throwable $e) {
    return redirect()->back()->withErrors(['error' => $e->getMessage()]);
}

    }



    public function Employee_destroy($request){
       
        EmployeeData::findorfail($request->id)->delete();
        toastr()->success('تم الحذف بنجاح');
         return redirect()->route('Employee.index');

//حذف اكثر من سجب
        // EmployeeData::destroy($request->id);
        // toastr()->success('تم الحذف بنجاح');
        //  return redirect()->route('Employee.index');
    }


    public function uploade_attachment($request){

        foreach($request->file('photos') as $file)
        {
            $time = date("d-m-Y")."-".time();
            $name = $time."-".$file->getClientOriginalName();
            $file->storeAs('attachments/Employee/'.$request->Employee_CardNumber, $name,'upload_attachments');

            // insert in image_table
            $images= new image();
           
            $images->filename=$name;
            $images->imageable_id = $request->Employee_id;
            $images->imageable_type = 'App\Models\EmployeeData';
            $images->save();
        }
        toastr()->success('تم الحفظ بنجاح');
        return redirect()->route('Employee.show',$request->Employee_id);

    }

     public function Download_attachment($CardNumber,$filename)
     {
         return response()->download(public_path('attachments/Employee/'.$CardNumber.'/'.$filename));
     }

    public function Delete_attachment($request)
    {
        // Delete img in server disk
         Storage::disk('upload_attachments')->delete('attachments/Employee/'.$request->Employee_CardNumber.'/'.$request->filename);    
      
       // Delete in data
        image::where('id',$request->id)->where('filename',$request->filename)->delete();
        toastr()->error(trans('messages.Delete'));
        //return redirect()->back();
        return redirect()->route('Employee.show',$request->Employee_id);
    }

    

    

  
}
