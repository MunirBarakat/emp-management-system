<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class EmployeeData extends Model
{

  
    protected $guarded =[];

  
public function EmployeeStatus(){

  return $this->belongsTo('App\Models\EmployeeStatus', 'EmployeeStatus_Id');

}

  
public function Governorate(){

  return $this->belongsTo('App\Models\Governorate', 'Governorate_Id');

}

  
public function Degree(){

  return $this->belongsTo('App\Models\Degree', 'Degree_Id');

}

  
public function groupdministrator(){

  return $this->belongsTo('App\Models\groupdministrator', 'groupdministrator_Id');

}

  
public function Rank(){

  return $this->belongsTo('App\Models\Rank', 'Rank_Id');

}

  
  
public function Religion(){

  return $this->belongsTo('App\Models\Religion', 'Religion_Id');

}

  
public function Review(){

  return $this->belongsTo('App\Models\Review', 'Review_Id');

}

  
public function Sex(){

  return $this->belongsTo('App\Models\Sex', 'Sex_Id');

}

  
public function SocialState(){

  return $this->belongsTo('App\Models\SocialState', 'SocialState_Id');

}
  
public function TypeBlood(){

  return $this->belongsTo('App\Models\TypeBlood', 'TypeBlood_Id');

}
  
public function WorkNature(){

  return $this->belongsTo('App\Models\WorkNature', 'WorkNature_Id');

}

//علاقة بين الموظف والمرفقات لجلب المرفقات في جدول الموظفين

public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }


  }