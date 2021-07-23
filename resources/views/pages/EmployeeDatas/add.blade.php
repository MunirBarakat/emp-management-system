@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
   اضافة البيانات العسكرية 
   @stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
   اضافة بيانات موظف
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post"  action="{{ route('Employee.store') }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                        
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>الرقم المالي: <span class="text-danger">*</span></label>
                                    <input  type="text" name="FinancialNumber"  class="form-control">
                                </div>
                            </div>

                            
                       
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>رقم الهوية : <span class="text-danger">*</label>
                                    <input type="text"  name="CardNumber" class="form-control" >
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="gender">الرتبة العسكرية : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="Rank_Id">
                                        <option selected disabled>اختر الرتبة...</option>
                                        @foreach($Ranks as $Rank)
                                            <option  value="{{ $Rank->id }}">{{ $Rank->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>الاسم رباعي : <span class="text-danger">*</label>
                                    <input type="text"  name="Name" class="form-control" >
                                </div>
                            </div>
                       </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>رقم الجوال1 : </label>
                                    <input type="text"  name="Tel_No1" class="form-control" >
                                </div>
                            </div>

                        
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>رقم الجوال2 : </label>
                                    <input type="text"  name="Tel_No2" class="form-control" >
                                </div>
                            </div>

                       
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>تاريخ الميلاد : </label>
                                    <input type="date"  name="BOD" class="form-control" >
                                </div>
                            </div>

                        
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>تاريخ الرتبة : </label>
                                    <input type="date"  name="RD" class="form-control" >
                                </div>
                            </div>
                        

                     
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>تاريخ التفريغ : </label>
                                    <input type="date"  name="TD" class="form-control" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>العنوان : </label>
                                    <input type="text"  name="Address" class="form-control" >
                                </div>
                            </div>
                    

                       
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ملاحظات : </label>
                                    <input type="text"  name="Notes" class="form-control" >
                                </div>
                            </div>
                        </div>

                          
                         <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender">الدرجة العلمية : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="Degree_Id">
                                        <option selected disabled>اختر الدرجة العلمية...</option>
                                        @foreach($Degrees as $Degree)
                                            <option  value="{{ $Degree->id }}">{{ $Degree->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                          
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender">حالة الموظف : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="EmployeeStatus_Id">
                                        <option selected disabled>اختر حالة الموظف...</option>
                                        @foreach($EmployeeStatus as $EmployeeStatu)
                                            <option  value="{{ $EmployeeStatu->id }}">{{ $EmployeeStatu->EmpStatus }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                          
                          
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender">المحافظة : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="Governorate_Id">
                                        <option selected disabled>اختر المحافظة...</option>
                                        @foreach($Governorates as $Governorate)
                                            <option  value="{{ $Governorate->id }}">{{ $Governorate->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                          
                          
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender">مسؤول المجموعة : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="groupdministrator_Id">
                                        <option selected disabled>اختر مسؤول المجموعة...</option>
                                        @foreach($groupdministrators as $groupdministrator)
                                            <option  value="{{ $groupdministrator->id }}">{{ $groupdministrator->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                          <br>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="gender">الديانة : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="Religion_Id">
                                        <option selected disabled>اختر الديانة...</option>
                                        @foreach($Religions as $Religion)
                                            <option  value="{{ $Religion->id }}">{{ $Religion->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                          

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="gender">تقييم الموظف : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="Review_Id">
                                        <option selected disabled>اختر التقييم...</option>
                                        @foreach($Reviews as $Review)
                                            <option  value="{{ $Review->id }}">{{ $Review->Type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                          
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="gender">الحالة الاجتماعية : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="SocialState_Id">
                                        <option selected disabled>اختر الحالة الاجتماعية...</option>
                                        @foreach($SocialStates as $SocialState)
                                            <option  value="{{ $SocialState->id }}">{{ $SocialState->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                         
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="gender">فصيلة الدم : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="TypeBlood_Id">
                                        <option selected disabled>اختر فصيلة الدم...</option>
                                        @foreach($TypeBloods as $TypeBlood)
                                            <option  value="{{ $TypeBlood->id }}">{{ $TypeBlood->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        
                          
                        
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="gender">طبيعة العمل : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="WorkNature_Id">
                                        <option selected disabled>اختر طبيعة العمل...</option>
                                        @foreach($WorkNatures as $WorkNature)
                                            <option  value="{{ $WorkNature->id }}">{{ $WorkNature->WorkNature }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                          
                          
                          
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="gender">الجنس <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="Sex_Id">
                                        <option selected disabled>اختر الجنس...</option>
                                        @foreach($Sexes as $Sex)
                                            <option  value="{{ $Sex->id }}">{{ $Sex->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                          

                            <div class="col-md-3">
                        <div class="form-group">
                            <label for="academic_year">{{trans('Students_trans.Attachments')}} : <span class="text-danger">*</span></label>
                            <input type="file" accept="application/pdf, image/jpeg, image/jpg" name="photos[]" multiple>
                        </div>
                    </div>


                        </div><br>
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">حفظ البيانات</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
  
@endsection
