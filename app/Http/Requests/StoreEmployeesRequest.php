<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeesRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

       public function rules()
    {
        return [
            'FinancialNumber'  => 'unique:employee_data,FinancialNumber,'.$this->id,
            'CardNumber'       =>'required|unique:employee_data,CardNumber,'.$this->id,
            'Name'             =>'required', 
            'BOD'              =>'date|date_format:Y-m-d',
            'RD'               =>'date|date_format:Y-m-d',
            'TD'               =>'date|date_format:Y-m-d',          
            'Degree_Id'        =>'required',
            'EmployeeStatus_Id'=>'required',
            'Governorate_Id'   =>'required',
            'groupdministrator_Id'=>'required',
            'Religion_Id'      =>'required',
            'Review_Id'        =>'required',
            'SocialState_Id'   =>'required',
            'TypeBlood_Id'     =>'required',
            'WorkNature_Id'    =>'required',
            'Rank_Id'          =>'required',
            'Sex_Id'           =>'required',

        ];
    }
}
