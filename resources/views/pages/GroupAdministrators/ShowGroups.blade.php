@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
{{trans('GroupAdministrator.GroupAdministrator')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
{{trans('GroupAdministrator.GroupAdministrator')}}
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
                                <a href="{{route('groups.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{ trans('GroupAdministrator.GroupAdm') }}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('GroupAdministrator.Name_Group_Administrator')}}</th>
                                            <th>{{trans('GroupAdministrator.Notes')}}</th>
                                            
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($getGroupAdms as $getGroupAdm)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{$getGroupAdm->Name}}</td>
                                            <td>{{$getGroupAdm->Notes}}</td>
                                            
                                                <td>
                                                    <a href="{{route('groups.edit',$getGroupAdm->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_group{{$getGroupAdm->id}}" title="{{ trans('message_trans.delete') }}"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>


                                            <div class="modal fade" id="delete_group{{$getGroupAdm->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('groups.destroy',$getGroupAdm->id)}}" method="post">
                                                        {{method_field('delete')}}
                                                        {{csrf_field()}}
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{ trans('message_trans.delete') }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body ">
                                                            <p> {{trans('message_trans.delete_record')}}</p>
                                                            <input   type="text" name="Name"  value="{{$getGroupAdm->Name}}">
                                                        </div>
                                                        
                                                        <div class="modal-body">
                                                            
                                                            <input type="hidden" name="id"  value="{{$getGroupAdm->id}}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">{{ trans('message_trans.Close') }}</button>
                                                                <button type="submit"
                                                                        class="btn btn-danger">{{ trans('message_trans.submit') }}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>

                                            
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
