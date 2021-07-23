@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('main_trans.list_students')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('main_trans.list_students')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('Employee.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('main_trans.add_student')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الرقم المالي</th>
                                            <th>رقم الهوية</th>
                                            <th>الاسم رباعي</th>
                                            <th>الرتبة</th>
                                            <th>حالة الموظف</th>
                                            <th>المحافظة</th>
                                            <th>الدرجة العلمية</th>
                                         
                                            
                                            <th>مكان العمل</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Employees as $Employee)
                                            <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{$Employee->FinancialNumber}}</td>
                                            <td>{{$Employee->CardNumber}}</td>
                                            <td>{{$Employee->Name}}</td>
                                            <td>{{$Employee->Rank->Name}}</td>
                                            <td>{{$Employee->EmployeeStatus->EmpStatus}}</td>
                                            <td>{{$Employee->Governorate->Name}}</td>
                                            <td>{{$Employee->Degree->Name}}</td>
                                            <td>{{$Employee->WorkNature->WorkNature}}</td>
                                        
                                                <td>
                                                    <a href="{{route('Employee.edit',$Employee->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_Employee{{ $Employee->id }}" title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>
                                                    <a href="{{route('Employee.show',$Employee->id)}}" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="far fa-eye"></i></a>
                                                </td>
                                            </tr>
                                      @include('pages.EmployeeDatas.Delete')
                                        @endforeach
                                    </table>
                                </div>
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
