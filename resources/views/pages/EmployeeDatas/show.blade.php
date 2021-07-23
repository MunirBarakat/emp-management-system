@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    بيانات الموظف
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    عرض بيانات الموظف
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row" >
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-body">
                        <div class="tab nav-border">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="home-02-tab" data-toggle="tab" href="#home-02"
                                       role="tab" aria-controls="home-02"
                                       aria-selected="true">{{trans('Students_trans.Student_details')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-02-tab" data-toggle="tab" href="#profile-02"
                                       role="tab" aria-controls="profile-02"
                                       aria-selected="false">{{trans('Students_trans.Attachments')}}</a>
                                </li>
                            </ul>
                                
                                <!-- tab 1 اضهار كافة بيانات الموظف  -->

                            <div class="tab-content ">
                                <div class="tab-pane fade active show" class="table-responsive-md" id="home-02" role="tabpanel"
                                     aria-labelledby="home-02-tab" >
                                    <table  class="table table-striped table-hover " >
                                        <tbody> 
                                        <tr  >
                                            <th  >الرقم المالي</th>
                                            <td  >{{ $Employee->FinancialNumber }}</td>
                                            <th  >رقم الهوية</th>
                                            <td >{{$Employee->CardNumber}}</td>
                                            <th >الرتبة العسكرية</th>
                                            <td colspan="2">{{ $Employee->Rank->Name}}</td>
                                            <th   colspan="2">الاسم رباعي</th>
                                            <td colspan="4">{{$Employee->Name}}</td>
                                            
                                        </tr>
                                        <tr>
                                        <th scope="row">رقم الجوال1</th>
                                            <td  colspan="2">{{$Employee->Tel_No1}}</td>
                                            <th scope="row">رقم الجوال2</th>
                                            <td  colspan="2">{{ $Employee->Tel_No2 }}</td>
                                            <th scope="row">تاريخ الميلاد</th>
                                            <td  colspan="2">{{$Employee->BOD}}</td>
                                            <th scope="row">تاريخ الرتبة</th>
                                            <td  colspan="2">{{$Employee->RD}}</td>
                                            <th scope="row">تاريخ الأخذ</th>
                                            <td  colspan="2">{{$Employee->TD}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">العنوان مفصل</th>
                                            <td  colspan="6">{{ $Employee->Address }}</td>
                                            <th scope="row">ملاحظات</th>
                                            <td  colspan="6">{{$Employee->Notes}}</td>
                                            
                                        </tr>

                                        <tr>
                                            <th scope="row">المحافظة</th>
                                            <td>{{ $Employee->Governorate->Name }}</td>
                                            <th scope="row">الدرجة العلمية</th>
                                            <td>{{$Employee->Degree->Name}}</td>
                                            <th scope="row">مسؤول المجموعة</th>
                                            <td>{{$Employee->groupdministrator->Name}}</td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="row">فصيلة الدم</th>
                                            <td>{{ $Employee->TypeBlood->Name }}</td>
                                            <th scope="row">طبيعة العمل</th>
                                            <td>{{$Employee->WorkNature->WorkNature}}</td>
                                            <th scope="row">الديانة</th>
                                            <td>{{ $Employee->Religion->Name}}</td>
                                            <th scope="row">التقييم</th>
                                            <td>{{ $Employee->Review->Type }}</td>
                                            <th scope="row">الجنس</th>
                                            <td>{{ $Employee->Sex->Name }}</td>
                                            <th scope="row">الحالة الاجتماعية</th>
                                            <td>{{ $Employee->SocialState->Name }}</td>
                                        </tr>

                                        <tr>
                                            
                                           
                                            <th scope="row"></th>
                                            <td></td>
                                            <th scope="row"></th>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                         <!-- tab 2 المرفقات وجدولها -->

                                <div class="tab-pane fade" id="profile-02" role="tabpanel"
                                     aria-labelledby="profile-02-tab">
                                    <div class="card card-statistics">
                                        <div class="card-body">
                                            <form method="post" action="{{route('uploade_attachment')}}" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label
                                                            for="academic_year">{{trans('Students_trans.Attachments')}}
                                                            : <span class="text-danger">*</span></label>
                                                        <input type="file" accept="application/pdf, image/jpeg, image/jpg" name="photos[]" multiple required>
                                                        
                                                        <input type="hidden" name="Employee_CardNumber" value="{{$Employee->CardNumber}}">
                                                        <input type="hidden" name="Employee_id" value="{{$Employee->id}}">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <button type="submit" class="button button-border x-small">
                                                       {{trans('Students_trans.submit')}}
                                                </button>
                                            </form>
                                        </div>
                                        <br>
                                        <table class="table center-aligned-table mb-0 table table-hover"
                                               style="text-align:center">
                                            <thead>
                                            <tr class="table-secondary">
                                                <th scope="col">#</th>
                                                <th scope="col">{{trans('Students_trans.filename')}}</th>
                                                <th scope="col">{{trans('Students_trans.created_at')}}</th>
                                                <th scope="col">{{trans('Students_trans.Processes')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Employee->images as $attachment)
                                                <tr style='text-align:center;vertical-align:middle'>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$attachment->filename}}</td>
                                                    <td>{{$attachment->created_at->diffForHumans()}}</td>
                                                    <td colspan="2">
                                                        <a class="btn btn-outline-info btn-sm"
                                                           href="{{url('Download_attachment')}}/{{$Employee->CardNumber}}/{{$attachment->filename}}"
                                                           role="button"><i class="fas fa-download"></i>&nbsp; {{trans('Students_trans.Download')}}</a>

                                                        <button type="button" class="btn btn-outline-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#Delete_img{{ $attachment->id }}"
                                                                title="{{ trans('Grades_trans.Delete') }}">{{trans('Students_trans.delete')}}
                                                        </button>

                                                    </td>
                                                </tr>
                                               @include('pages.EmployeeDatas.Delete_img')
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
